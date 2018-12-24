<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountAddRequest;
use App\Http\Requests\AccountEditRequest;
use Illuminate\Support\Facades\Session;
use App\Models\Account;

use File;
use Auth;
use DB;
class AccountController extends Controller
{
    public function getList(){
        if (Auth::user()->level == 1) {
            $data['items'] = Account::where('level', '>=', Auth::user()->level)->orderBy('id', 'desc')->get();
        }
        else{
            $data['items'] = Account::where('level', '>=', Auth::user()->level)->orderBy('id', 'desc')->where('site', Auth::user()->site)->get();
        }
    	return view('admin.account.account', $data);
    }
    public function getAdd(){
        if (Session::get('lang', 'vn') == 'vn') {
            $group_id = Auth::user()->group_id;

        } else {
            $group_id = Auth::user()->group_id_en;
        }
        $group_id = explode(',', $group_id);
        
        if (in_array(0 ,$group_id)) {
            $list_group = DB::table($this->db->group)->where('status', 1)->where('type','!=',1)->where('parentid', '0')->get()->toArray();

            $root = [
                'id' => 0,
                'title' => 'root'
            ];
            $result[] = (object)$root;
            $this->recusiveGroup($list_group, 0, "", $result);
            $data['list_group'] = $result;

        }
        else{
            $list_group = DB::table($this->db->group)->where('status', 1)->where('type','!=',1)->where('parentid', '0')->whereIn('id', $group_id)->get()->toArray();
            $data['list_group'] = $list_group;
        }
        // dd($data['list_group']);

    	return view('admin.account.account_form',$data);
    }
    public function postAdd(AccountAddRequest $request){
    	$acc = new Account;
    	$acc->username = $request->username;
    	$request->fullname != null ? $acc->fullname = $request->fullname : $acc->fullname = 'Chưa có';
        $request->email != null ? $acc->email = $request->email : $acc->email = 'email@email.com';
        $request->phone != null ? $acc->phone = $request->phone : $acc->phone = '19001001';
        $request->password != null ? $acc->password = bcrypt($request->password) : $acc->password = bcrypt('9876543210');
//    	$request->level != null ? $acc->level = $request->level : $acc->level = 4;
    	$acc->status = 1;
        $acc->level = 2;
        $acc->group_id = 0;
//        if ($request->group_id != null) {
//
//            if (Session::get('lang', 'vn') == 'vn') {
//                $acc->group_id = implode(",", $request->group_id);
//            } else {
//                $acc->group_id_en = implode(",", $request->group_id);
//
//            }
//        }
//        else{
//            if (Session::get('lang', 'vn') == 'vn') {
//                $acc->group_id = null;
//            } else {
//                $acc->group_id_en = null;
//            }
//
//        }
        
        // site : các bên khác nhau
        if (Auth::user()->level == 1) {
            $acc->site = $request->site;
        }
        else{
            $acc->site = Auth::user()->site;
        }
    	$image = $request->file('img');
        if ($request->hasFile('img')) {
            $acc->img = saveImage([$image], 100, 'avatar');
        }
        $acc->save();

    	return redirect('admin/account')->with('success','Thêm tài khoản thành công');
    }
    public function getEdit($id){
    	$data['item'] = Account::find($id);
        
        if (Session::get('lang', 'vn') == 'vn') {
            $group_id = Auth::user()->group_id;
            $data['gr_acc'] = Account::find($id)->group_id;
        } else {
            $group_id = Auth::user()->group_id_en;
            $data['gr_acc'] = Account::find($id)->group_id_en;
        }
        $group_id = explode(',', $group_id);
        
        // $data['gr_acc'] = Account::find($id)->group_id;
        $data['gr_acc'] = explode(',', $data['gr_acc']);
        if (in_array(0 ,$group_id)) {
            $list_group = DB::table($this->db->group)->where('status', 1)->where('type','!=',1)->where('parentid', '0')->get()->toArray();
            $root = [
                'id' => 0,
                'title' => 'root'
            ];
            $result[] = (object)$root;
            $this->recusiveGroup($list_group, 0, "", $result);
            $data['list_group'] = $result;
        }
        else{
            $list_group = DB::table($this->db->group)->where('status', 1)->where('type','!=',1)->where('parentid', '0')->whereIn('id', $group_id)->get()->toArray();
            $data['list_group'] = $list_group;
        }
        $data['group_id'] = $group_id;
        
    	return view('admin.account.account_form', $data);
    }
    public function postEdit(AccountEditRequest $request, $id){
    	$acc = Account::find($id);
    	$acc->username = $request->username;
        $request->fullname != null ? $acc->fullname = $request->fullname : $acc->fullname = 'Chưa có';
        $request->email != null ? $acc->email = $request->email : $acc->email = 'email@email.com';
        $request->phone != null ? $acc->phone = $request->phone : $acc->phone = '19001001';
        $request->password != null ? $acc->password = bcrypt($request->password) : $acc->password;
        $request->level != null ? $acc->level = $request->level : $acc->level = 4;
        if ($request->group_id != null) {
            if (Session::get('lang', 'vn') == 'vn') {
                $acc->group_id = implode(",", $request->group_id);
            } else {
                $acc->group_id_en = implode(",", $request->group_id);
                // dd( $acc->group_id_en);
            }
            
        }
        else{
            if (Session::get('lang', 'vn') == 'vn') {
                $acc->group_id = null;
            } else {
                $acc->group_id_en = null;
            }
        }
        // site : các bên khác nhau
        if (Auth::user()->level == 1) {
            $acc->site = $request->site;
        }
        else{
            $acc->site = Auth::user()->site;
        }

    	$image = $request->file('img');

        if ($request->hasFile('img')) {
            $acc->img = saveImage([$image], 100, 'avatar');
        }
        $acc->save();

    	return redirect('admin/account')->with('success','Sửa tài khoản thành công');
    }
    public function getDelete($id){
        $acc = Account::find($id);
        $filename = $acc->img;
        File::delete('libs/storage/app/news/'.$filename);
        File::delete('libs/storage/app/news/resized-'.$filename);
        $acc->delete();
        return back()->with('success', 'Xóa tài khoản thành công');
    }
}
