<?php

namespace App\Http\Controllers\Admin;

use App\Models\LogFileVideo_vn;
use App\Models\Video_vn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;


class VideoController extends Controller
{
    public function get_list(Request $request)
    {
        /*
         *  lấy danh sách bài viết
         */

        switch (Auth::user()->level) {
            case 1:
                $status = [];
                break;
            case 2:
                $status = [0,1,2];
                break;
            case 3:
                $status = [2,3];
                break;
            case 4:
                $status = [2,3];
                break;

            default:
                # code...
                break;
        }
        $paramater = $request->get('video');

        $group_id = isset($paramater['group_id']) ? $paramater['group_id'] : [];
        $status = isset($paramater['status']) ? $paramater['status'] : [];
        $key_search = isset($paramater['key_search']) ? $paramater['key_search'] : [];

        $list_video = DB::table($this->db->video)->orderByDesc('id');

        if(count($status)){
            $list_video = $list_video->whereIn('status',$status);
        }

        if($key_search){
            $list_video = $list_video->where('title','like',"%$key_search%")->orWhere('summary','like',"%$key_search%");
        }
        if (Auth::user()->level == 4 || Auth::user()->level == 3) {
            $list_video =  $list_video->where('userId', Auth::user()->id);
        }
        $list_video = $list_video->paginate(15);
        foreach ($list_video as $val) {
            $val->created_at = date('d/m/Y H:m', $val->created_at);
            $val->updated_at = date('d/m/Y H:m', $val->updated_at);
        }

        /*
         *  lấy danh sách danh mục
         */
        $list_group = DB::table('menu_video')->where('status', 1)->get()->toArray();

        $data = [
            'list_group' => $list_group,
            'list_video' => $list_video,
            'articel' => $paramater
        ];
        // dd($data);
        return view('admin.videos.index', $data);
    }


    public function form_video($id){

        /*
         *  lấy danh sách danh mục
         */
        $list_group = DB::table('menu_video')->where('status', 1)->get()->toArray();

        if($id == 0){
            $data = [
                'id' => 0,
                'title' => '',
                'type_link' => 1,
                'url_video' => '',
                'avatar' => '',
                'groupid' => [],
                'summary' => '',
                'keywords' => '',
                'description' => '',
                'seo_title' => '',
                'release_time' => (object)[
                    'day' => date('Y-m-d',time()),
                    'h' => date('h:i A',time())
                ],

            ];
            $video = (object)$data;
        }else {
            $video = DB::table('video_vn')->find($id);
            $video->groupid = explode(',',$video->groupid);
            $date = $video->release_time;
            $video->release_time = (object)[
                'day' => date('Y-m-d',$date),
                'h' => date('h:i A',$date)
            ];
        }
        $data = [
            'video' => $video,
            'list_group' => $list_group
        ];
        return view('admin.videos.form_video',$data);
    }

    public function action_video(Request $request){
        $data = $request->get('video');

        $group_id = $data['groupid'];
        $data['groupid'] = join(',',$data['groupid']);

        $data['slug'] = str_slug($data['title']);

        $data['updated_at'] = time();

        $data['release_time'] = strtotime($data['release_time']['day'].' '.$data['release_time']['h']);

        $keywords = array_chunk(explode('-',$data['keywords']),4);

        $keywords = $keywords[0];

        foreach ($keywords as $key => $val){
            $keywords[$key] = trim($val);
        }

        $data['keywords'] = implode('-',$keywords);

        $data['description'] = substr(trim($data['description']),0,160);
        $data['seo_title'] = substr(trim($data['seo_title']),0,70);
        if (Auth::user()->level == 1 || Auth::user()->level == 2) {
            $data['status'] = 1;
        }
        else{
            $data['status'] = 2;
        }

        if($data['type_link'] == 2){
            $name = explode('v=',$data['url_video']);
            $videoId = '';
            if(isset($name[1])) $videoId = $name[1];
            else {
                $name = explode('/',$data['url_video']);
                if(isset($name[count($name)-1])) $videoId = $name[count($name)-1];
            }
            if($videoId) {
                $theURL = "http://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=$videoId&format=json";
                $headers = get_headers($theURL);
                if(substr($headers[0], 9, 3) == "404") {
                    DB::rollBack();
                    $date = $data['release_time'];
                    unset($data['release_time']);
                    $data['release_time']['day'] = date('d/m/Y',$date);
                    $data['release_time']['h'] = date('h:i A',$date);
                    $data['groupid'] = $group_id;
                    return redirect()->route('form_video',0)->with('error','Không tìm thấy link video')->with('data',((object)$data));
                }
                $data['avatar'] = "http://img.youtube.com/vi/$videoId/hqdefault.jpg";
                $data['url_video'] = 'http://www.youtube.com/embed/'.$videoId;
            }
            else return redirect()->route('form_video',0)->with('error','Không tìm thấy link video')->with('data',((object)$data));
        }

        if($data['id'] == 0){//Tạo mới video
            $data['created_at'] = time();
            $user_login = Auth::user();
            $data['userId'] = $user_login->id;

            unset($data['id']);
            DB::beginTransaction();
            $check = 1;
            $video = Video_vn::create($data);
            if($video->id) {
                $status_id = 2;
                $status_str = "Đăng mới";
                if(!$this->add_log($video,$status_id,$status_str)) $check = 0;

            }else $check = 0;

            if($check == 1){
                DB::commit();
                return redirect()->route('admin_video')->with('status','Tạo mới thành công');
            }else {
                DB::rollBack();
                $date = $data['release_time'];
                unset($data['release_time']);
                $data['release_time']['day'] = date('d/m/Y',$date);
                $data['release_time']['h'] = date('h:i A',$date);
                $data['groupid'] = $group_id;
                return redirect()->route('form_video',0)->with('error','Cập nhật không thành công')->with('data',((object)$data));
            }
        }else { //Cập nhật video
            $video = Video_vn::find($data['id']);
            $data['updated_at'] = time();
            if(!$video){
                return redirect()->route('form_video')->with('error','Có lỗi xảy ra');
            }
            DB::beginTransaction();
            $check = 1;
            if(!$video->update($data)) $check = 0;

            $status_id = 0;
            $status_str = "Editted: Sửa video";
            if(!$this->add_log($video,$status_id,$status_str)) $check = 0;

            if($check == 1){
                DB::commit();
                return redirect()->route('admin_video')->with('status','Cập nhật thành công');
            }else {
                DB::rollBack();
                $date = $data['release_time'];
                unset($data['release_time']);
                $data['release_time']['day'] = date('d/m/Y',$date);
                $data['release_time']['h'] = date('h:i A',$date);
                $data['groupid'] = $group_id;
                return redirect()->route('form_video',$video->id)->with('error','Cập nhật không thành công')->with('data',$data);
            }
        }
    }

    public function delete_video($id){
        DB::beginTransaction();
        $check = 1;
        $video = DB::table('video_vn')->find($id);

        if(!DB::table('video_vn')->delete($id)) $check = 0;

        $status_id = 4;
        $status_str = "Xóa video";
        if(!$this->add_log($video,$status_id,$status_str)) $check = 0;

        if($check == 1){
            DB::commit();
            return redirect()->route('admin_video')->with('status','Xóa thành công');
        }else {
            DB::rollBack();
            return redirect()->route('admin_video')->with('error','Xóa không thành công');
        }
    }

    function add_log($video,$status_id,$status_str){
        $user_login = Auth::user();
        $log_data = [
            'LogId' => $video->id,
            'userId' => $user_login->id,
            'created_at' => time(),
            'groupid' => $video->groupid,
            'TrangthaiID' => $status_id,
            'GhiChu' => $status_str,
            'title' => $video->title,
            'url_video' => $video->url_video
        ];
        if(LogFileVideo_vn::create($log_data)){
            return true;
        }else return false;
    }

    public function history_video($id){

        $list_history = DB::table('logfilevideo_vn')->where('LogId',$id)->paginate();

        foreach ($list_history as $history){
            $user = DB::table('accounts')->find($history->userId);
            $history->user = $user;
            $history->created_at = date('d/m/Y H:m',$history->created_at);
        }

        $data = [
            'list_history' => $list_history
        ];

        $view =  View::make('admin.videos.history_video', $data)->render();
        return json_encode([
            'content' => $view
        ]);
    }

    public function update_status($id){
        $video = Video_vn::find($id);
        DB::beginTransaction();
        $check = 1;
        if($video->status == 1){
            if(!$video->update(['status' => 0])) $check = 0;
        }else {
            if(!$video->update(['status' => 1])) $check = 0;
        }

        if(!$this->add_log($video,0,"Duyệt video")) $check = 0;

        if($check == 1){
            DB::commit();
            return json_encode([
                'status' => 1,
                'video_status' => $video->status
            ]);
        }
        else {
            DB::commit();
            return json_encode([
                'status' => 0,
                'video_status' => $video->status
            ]);
        }
    }


    public function action_status(){
        // return response('success', 200);
        $id = Input::get('id');
        $status = Input::get('status');
        $video = Video_vn::find($id);
        $video->status = $status;
        $video->save();
        return response('success', 200);
    }

}
