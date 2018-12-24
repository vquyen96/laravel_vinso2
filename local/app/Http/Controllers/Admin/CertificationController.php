<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificationController extends Controller
{
    public function getList(){

        $cer = Certification::all();
        $data = [
            "items" => $cer
        ];
        return view('admin.cer.index', $data);
    }
    public function postAdd(Request $request){
        $data = $request->all();
        $image = $request->file('img');
        if ($request->hasFile('img')) {
            $data['img'] = saveImage([$image], 600, 'cer');
        }
        if (Certification::create($data)){
            return back()->with('success', 'Thêm mới thành công');
        }
        else{
            return back()->with('error', 'Thêm mới bị lỗi');
        }
        dd($request->all());
    }
    public function postEdit(Request $request, $id){
        $cer = Certification::find($id);
        $data = $request->all();
        $image = $request->file('img');
        if ($request->hasFile('img')) {
            $data['img'] = saveImage([$image], 600, 'cer');
        }
        $cer->update($data);
        return back()->with('success', 'Cập nhật thành công');
//        dd($request->all());
    }

    public function getDelete($id){
        Certification::destroy($id);
        return back()->with('success', 'Xóa thành công');
    }
}
