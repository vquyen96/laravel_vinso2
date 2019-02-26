<?php

namespace App\Http\Controllers\Client;

use App\Model\Group_vn;
use App\Models\About;
use App\Models\AdvertTop;
use App\Model\News;
use App\Models\Certification;
use App\Models\Groupvn;
use App\Models\Video_vn;
use App\Models\Advert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Models\MagazineNew;
use View;

class IndexController extends Controller
{
    public function index()
    {
//        /*
//         *  phần new
//         */
//
//        $list_articel_new = $this->get_new_articel();
//
//        $list_video_new = $this->get_video_new();
//
//        // $magazine_new = $this->get_magazine_new();
//        $magazine_new = MagazineNew::where('m_status', 1)->orderBy('m_hot', 'asc')->get();
//
//        /*
//         * group thứ nhất
//         */
//
//        $articel_times_1 = $this->get_articel_item(0);
//
//
//        /*
//         *  danh sách bào viết theo danh mục
//         */
//
//        $groups = $this->get_articel_group();
//
//
//        /*
//         *  group thứ 2
//         */
//
//        $articel_times_2 = $this->get_articel_item(1);
//
//        $articel_times_3 = $this->get_articel_item(2);
//
//
//        $advert = $this->get_advert(1);
//        $advert_home = $this->get_advert_home();
//
//
//        $data = [
//            'list_articel_new' => $list_articel_new,
//            'list_video_new' => $list_video_new,
//            'magazine_new' => $magazine_new,
//
//            'menu_parent_item' => $articel_times_1['menu_time'],
//            'menu_child_item' => $articel_times_1['menu_child'],
//            'list_articel_item' => $articel_times_1['list_articel'],
//            'list_top_view' => $articel_times_1['list_top_view'],
//
//            'menu_parent_item_2' => $articel_times_2['menu_time'],
//            'menu_child_item_2' => $articel_times_2['menu_child'],
//            'list_articel_item_2' => $articel_times_2['list_articel'],
//
//            'menu_parent_item_3' => $articel_times_3['menu_time'],
//            'menu_child_item_3' => $articel_times_3['menu_child'],
//            'list_articel_item_3' => $articel_times_3['list_articel'],
//
//            'list_group' => $groups,
//            'list_ad' => $advert,
//            'ad_home' => $advert_home
//        ];
        // dd($data['list_articel_item_3']);

//        dd(time() + 86400*30);
//        dd($data);
        $list = DB::table($this->db->news)->where('hot_main', 1)
            ->where('release_time', '<=', time())
            ->where('status',1)
            ->orderBy('order_main')
            ->take(5 )->get();
        $list_news = DB::table($this->db->news)->where('groupid',1)
            ->where('hot_item', 1)
            ->where('status',1)
            ->orderBy('order_item')
            ->take(6 )->get();
//        $groupid = 1;
//        $group = DB::table($this->db->group)->find($groupid);
//        $list_articel_new = DB::table($this->db->news)
//            ->where('groupid', $groupid)
//            ->where('status',1)
//            ->orderBy('order_main')->orderBy('release_time','desc')->take(10)->get();
//        $data['list'] = $list_articel_new;
        $data = [
            "list" => $list,
            "list_news" => $list_news,
        ];
        return view('client.index.index', $data);
    }


    public function about(){
        $about = About::take(3)->get();
        $certification = Certification::take(3)->get();
        $data = [
            "about" => $about,
            "cer" => $certification
        ];
        return view('client.index.about', $data);
    }

    public function contact(){
        $certification = Certification::take(3)->get();
        $data = [
            "cer" => $certification
        ];
        return view('client.index.contact', $data);
    }
    public function listnews(Request $request){
        switch (request()->segment(1)){
            case 'news':
                $groupid = 1;
                break;
            case 'quality':
                $groupid = 2;
                break;
            case 'recruit':
                $groupid = 3;
                break;
            default:
                $groupid = 4;
                break;
        }
        $group = DB::table($this->db->group)->find($groupid);
        $list_articel_new = DB::table($this->db->news)->where('groupid', $groupid)->where('status',1)->orderBy('order_main')->orderBy('release_time','desc')->take(10)->get();
        $data = [
            "list" => $list_articel_new,
            "group" => $group
        ];
        return view('client.index.list_news', $data);
    }

    public function detailnews($slug){
        $slug = explode('--n-',$slug);
//        $articel = News::find($slug[1]);
        $data = $this->getDetailById($slug[1]);
        return view('client.index.detail', $data);
    }


    public function getDetailById($id){
        $new = News::find($id);
        $group = Groupvn::find($new->groupid);
        $gr_childs = Groupvn::where('parentid', $new->groupid)->get();
        count($gr_childs) == 0 ?  $gr_childs = Groupvn::where('parentid', $group->parentid )->get() : '' ;

//        $banner = Banner::where('group_id', $new->groupid)->inRandomOrder()->first();
//        Session::get('lang','vn') == 'vn' ? $home_id = 1574 : $home_id = 1405 ;
//        if ($banner == null){
//            $banner =  Banner::where('group_id', 1574)->inRandomOrder()->first();
//        }
        $content = DB::table($this->db->logfile)->where('LogId',$id)->whereNotNull('noidung')->where('noidung','!=','')
            ->orderByDesc
            ('id')->first();
        Session::get('lang','vn') == 'vn' ? $news_id = 1569 : $news_id = 1409 ;
        $group_news = Groupvn::where('parentid', $news_id)->get(['id'])->toArray();
        $group_news = array_column(json_decode(json_encode($group_news),true),'id');
        $latestpost = DB::table($this->db->news)->take(3)->orderBy('id', 'desc')->get();
        $breadcrumb = $this->getBreadcrumb($group, $breadcrumb = []);

        if ($new->relate != null) {
            $relate_id = explode(',',$new->relate);
            $relates = DB::table($this->db->news)->whereIn('id',$relate_id)->where('release_time','<=',time())->get();

        }
        else{
            $relates = [];
        }


        $data = [
            "news" => $new,
            "content" => $content,
//            "banner" => $banner,
            "gr_childs" => $gr_childs,
            "group" => $group,
            "latestpost" => $latestpost,
            "relates" => $relates,
            "breadcrumb" => array_reverse($breadcrumb)


        ];
        return $data;
    }
    function getBreadcrumb(Groupvn $group, $breadcrumb){
        $breadcrumb[] = $group;
        if ($group->parentid != 0){
            $group_pr = Groupvn::find($group->parentid);
            $breadcrumb = $this->getBreadcrumb($group_pr, $breadcrumb);
        }
        return $breadcrumb;
    }


    public function getSearch(){
        $search = Input::get('search');
        $list_article = DB::table($this->db->news)->where(function ($query) use ($search){
            $query->where('title','like',"%".$search."%")->orWhere('summary','like',"%".$search."%");
        })->where('status', 1)->orderByDesc('id')->take(5)->get();
        $data = [
            'list_article' => $list_article
        ];

        $view = View::make('client.tinypage.searchvalue',$data)->render();
        return response($view, 200);
    }


    public function home()
    {
        return redirect('');
    }

    public function time()
    {
        return view('client.index.time');
    }

    public function get_new_articel()
    {
        $list_articel_new = DB::table($this->db->news)->where('hot_main', 1)->where('time_hot_main','>=',time())->where('status',1)->where('release_time', '<=', time())->orderBy('order_main')->orderBy('release_time','desc')->take(10)->get();

        $count = $list_articel_new->count();

        if($count < 10){
            foreach ($list_articel_new as $item) {
                $list_not_id[] = $item->id;
            }
            if (isset($list_not_id)) {
                $list = DB::table($this->db->news)->where('hot_main', 1)->whereNotIn('id', $list_not_id)->where('release_time', '<=', time())->where('status',1)->orderBy('order_main')->orderBy('release_time','desc')->take(10 - $count)->get();
            }
            else{
                $list = DB::table($this->db->news)->where('hot_main', 1)->where('release_time', '<=', time())->where('status',1)->orderBy('order_main')->orderBy('release_time','desc')->take(10 - $count)->get();
            }
            $list_articel_new = $list_articel_new->toBase()->merge($list);
        }

        $list_articel_new = $this->get_time_ez($list_articel_new);
        // foreach ($list_articel_new as $item) {
        //     if (time() - $item->release_time > 86400) {
        //         $item->release_time = date('d/m/Y H:m', $item->release_time);
        //     } else if(time() - $item->release_time > 3600) {
        //         $time = time() - $item->release_time;
        //         $item->release_time = round($time / 3600, 0, PHP_ROUND_HALF_DOWN) . ' giờ trước';
        //     } else{
        //         $time = time() - $item->release_time;
        //         $item->release_time = round($time / 60, 0, PHP_ROUND_HALF_DOWN) . ' phút trước';
        //     }
        // }
        return $list_articel_new;
    }

    public function get_video_new()
    {
        $list_video_new = DB::table($this->db->video)->where('status',1)->where('release_time', '<=', time())->orderByDesc('release_time')->take(5)->get();
        return $list_video_new;
    }

    public function get_magazine_new()
    {
        $magazine = DB::table($this->db->magazine)->orderByDesc('id')->first();
        $magazine->slide_show = json_decode($magazine->slide_show);
        return $magazine;
    }

    public function get_articel_item($position)
    {
        $menu_time = DB::table($this->db->group)->where('home_index', 1)->where('status',1)->where('type', '!=', 1)->orderBy('order')->take(3)->get()->chunk(1);

        $menu_time = $menu_time[$position][$position];

        $menu_child = DB::table($this->db->group)->where('parentid', $menu_time->id)->orderBy('order')->get();

        $list_group_ids[] = $menu_time->id;

        foreach ($menu_child as $menu) {
            $list_group_ids[] = $menu->id;
        }

        $list_articel_ids = DB::table($this->db->group_news)->whereIn('group_vn_id', $list_group_ids)->get(['news_vn_id'])->toJson();
        $list_articel_hot_ids = DB::table($this->db->group_news)->whereIn('group_vn_id', $list_group_ids)->where('hot',1)->get(['news_vn_id'])->toJson();

        $list_articel_ids = array_column(json_decode($list_articel_ids, true), 'news_vn_id');
        $list_articel_hot_ids = array_column(json_decode($list_articel_hot_ids, true), 'news_vn_id');

        $list_articel_hot_ids = array_unique($list_articel_hot_ids);

        if ($position != 1) {
            $list_articel = DB::table($this->db->news)->whereIn('id', $list_articel_hot_ids)->where('release_time','<=',time())->whereNotNull('order_item')->where('time_hot_item','>=',time())->where('status',1)->orderBy('order_item')->orderBy('release_time','desc')->take(5)->get();

            $count = $list_articel->count();

            if($count < 5){
                foreach ($list_articel as $item) {
                    $list_not_id[] = $item->id;
                }
                // dd($list_not_id[] = $item->id);
                $limit = 5 - $count;
                if (isset($list_not_id)) {
                    $list_articel_1 = DB::table($this->db->news)->whereIn('id', $list_articel_ids)->where('release_time','<=',time())->whereNotIn('id', $list_not_id)->where('status',1)->orderByDesc('release_time')->take($limit)->get();
                    $list_articel = $list_articel->toBase()->merge($list_articel_1);
                }
                else{
                    $list_articel_1 = DB::table($this->db->news)->whereIn('id', $list_articel_ids)->where('release_time','<=',time())->where('status',1)->orderByDesc('release_time')->take($limit)->get();
                    $list_articel = $list_articel->toBase()->merge($list_articel_1);
                }
                // $list_articel_1 = DB::table($this->db->news)->whereIn('id', $list_articel_ids)->where('release_time','<=',time())->whereNotIn('id', $list_articel_hot_ids )->where('status',1)->orderByDesc('release_time')->take($limit)->get();
                // $list_articel = $list_articel->toBase()->merge($list_articel_1);
            }

        } else {
            $list_articel = DB::table($this->db->news)->whereIn('id', $list_articel_hot_ids)->where('release_time','<=',time())->whereNotNull('order_item')->where('time_hot_item','>=',time())->where('status',1)->orderBy('order_item')->orderBy('release_time','desc')->take(4)->get();

            $count = $list_articel->count();
            // if ($position == 2) {
            //     dd($list_articel);
            // }
            
            if($count < 4){
                foreach ($list_articel as $item) {
                    $list_not_id[] = $item->id;
                }
                $limit = 4 - $count;
                if (isset($list_not_id)) {
                    $list_articel_1 = DB::table($this->db->news)->whereIn('id', $list_articel_ids)->where('release_time','<=',time())->whereNotIn('id', $list_not_id)->where('status',1)->orderByDesc('release_time')->take($limit)->get();
                    $list_articel = $list_articel->toBase()->merge($list_articel_1);
                }
                else{
                    $list_articel_1 = DB::table($this->db->news)->whereIn('id', $list_articel_ids)->where('release_time','<=',time())->where('status',1)->orderByDesc('release_time')->take($limit)->get();
                    $list_articel = $list_articel->toBase()->merge($list_articel_1);
                }
            }
        }
        $list_articel = $this->get_time_ez($list_articel);
        
        $list_top_view = DB::table($this->db->news)->whereIn('id', $list_articel_ids)->where('status',1)->where('release_time','<=',time())->orderByDesc('view')->orderBy('release_time','desc')->take(5)->get();

        $list_top_view = $this->get_time_ez($list_top_view);
        
        return [
            'menu_time' => $menu_time,
            'menu_child' => $menu_child->take(4),
            'list_articel' => $list_articel,
            'list_top_view' => $list_top_view
        ];
    }

    function get_time_ez($articles){
        foreach ($articles as $item) {
            if (time() - $item->release_time > 86400) {
                $item->release_time = date('d/m/Y H:m', $item->release_time);
            } else if(time() - $item->release_time > 3600){
                $time = time() - $item->release_time;
                $item->release_time = round($time / 3600, 0, PHP_ROUND_HALF_DOWN) . ' giờ trước';
            } else{
                $time = time() - $item->release_time;
                $item->release_time = round($time / 60, 0, PHP_ROUND_HALF_DOWN) . ' phút trước';
            }
        }
        return $articles;
    }
    public function get_articel_group()
    {
        $groups = Group_vn::where('home_index', 1)->where('status', 1)->where('type', '!=', 1)->orderBy('order')->take(11)->get()->slice(3, 9);
        $list_group = DB::table($this->db->group)->where('status',1)->get();
        foreach ($groups as $group) {
            unset($result);
            $result[] = $group->id;

            $this->recusive_find_child($list_group,$group->id,$result);

            $result = array_unique($result);

            $list_ids_not_hot = DB::table($this->db->group_news)->whereIn('group_vn_id',$result)->get()->toJson();
            $list_ids_not_hot = array_column(json_decode($list_ids_not_hot),'news_vn_id');
            
            $list_ids = DB::table($this->db->group_news)->whereIn('group_vn_id',$result)->where('hot',1)->get()->toJson();

            $list_ids = array_column(json_decode($list_ids),'news_vn_id');


            $article = DB::table($this->db->news)->whereNotNull('order_item')->whereIn('id',$list_ids)->where('status',1)->where('time_hot_item','>=',time())->where('release_time','<=',time())->orderBy('order_item')->orderBy('release_time','desc')->take(5)->get();

            $number = 5 - $article->count();

            if($article->count() > 0){
                $list_not_ids = array_column(json_decode($article->toJson()),'id');
            }else $list_not_ids = [];

            $article_1 = DB::table($this->db->news)->where('status',1)->whereIn('id',$list_ids_not_hot)->whereNotIn('id',$list_not_ids)->where('release_time','<=',time())->orderByDesc('release_time')->take($number)->get();
            $article = $article->toBase()->merge($article_1);

            $group->articel = $article;
        }
        $groups = $groups->chunk(4);
        return $groups;
    }

    public function get_advert($id)
    {
        $ads = AdvertTop::where('adt_gr_id', $id)->get();

        $ad = array();
        for ($i = 1; $i < 15; $i++) {
            $ad[$i] = AdvertTop::where('adt_gr_id', $id)->where('adt_location', $i)->inRandomOrder()->get();
            // if ($i != 7) {
                
            // }
            // else{
            //     $ad[$i] = AdvertTop::where('adt_gr_id', $id)->where('adt_location', $i)->get();
            // }
            
        }
        return $ad;
    }
    public function get_advert_home(){
        $ads = AdvertTop::where('adt_gr_id', 1)->get();
        $ad = array();
        for ($i = 1; $i < 15; $i++) {
            $ad[$i] = AdvertTop::where('adt_gr_id', 1)->where('adt_location', $i)->inRandomOrder()->get();
            
        }
        return $ad;
    }


    public function ad_view(){
        $id = (int)Input::get('id');
        $ad = Advert::find($id);
        $ad->ad_view++;
        $ad->save();
        return response('ok', 200);
    }

    public function article_view(){
        $id = (int)Input::get('id');
        $news = News::find($id);
        $news->view += 1;
        $news->save();
        return response('ok', 200);
    }

}
