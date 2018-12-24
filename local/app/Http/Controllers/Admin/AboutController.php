<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getList(){

        $about = About::all();
        $data = [
            "items" => $about
        ];
        return view('admin.about.index', $data);
    }
    public function getAdd(){
//        $data = [
//            'id' => 0,
//            'title' => '',
//            'content' => '',
//            'img' => ''
//        ];
//        $about = (object)$data;
//        $data = [
//            "item" => $about
//        ];
        return view('admin.about.form');
    }
    public function postAdd(Request $request){
        $data = $request->all();
        $image = $request->file('img');
        if ($request->hasFile('img')) {
            $data['img'] = saveImage([$image], 600, 'about');
        }
        if (About::create($data)){
            return back()->with('success', 'Thêm mới thành công');
        }
        else{
            return back()->with('error', 'Thêm mới bị lỗi');
        }
        dd($request->all());
    }
    public function getEdit($id){
        $about = About::find($id);
        $data = [
            "item" => $about
        ];
        return view('admin.about.form',$data);
    }
    public function postEdit(Request $request, $id){
        $banner = About::find($id);
        $data = $request->all();
        $image = $request->file('img');
        if ($request->hasFile('img')) {
            $data['img'] = saveImage([$image], 600, 'about');
        }
        $banner->update($data);
        return back()->with('success', 'Cập nhật thành công');
        dd($request->all());
    }

    public function getDelete($id){
        About::destroy($id);
        return back()->with('success', 'Xóa thành công');
    }
}
