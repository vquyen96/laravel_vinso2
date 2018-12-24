@extends('admin.master')

@section('title', 'About')
@section('main')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ isset($item) && $item->id == 0 ? "Thêm mới about" : "Edit About" }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">{{\Illuminate\Support\Facades\Config::get('app.locale') == 'vn' ? 'Trang chủ' : 'Home'}}</a></li>
                            <li class="breadcrumb-item"><a href="{{ asset('admin/about') }}">{{\Illuminate\Support\Facades\Config::get('app.locale') == 'vn' ? 'About' : 'Account'}}</a></li>
                            <li class="breadcrumb-item active">{{\Illuminate\Support\Facades\Config::get('app.locale') == 'vn' ? (isset($item)? 'Thay đổi' : 'Thêm mới') : (isset($item)? 'Edit' : 'Add')}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8 col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{(isset($item) && $item->id != 0 ? 'Edit About' : 'Add About')}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form role="form" method="post" enctype="multipart/form-data" action="{{isset($item) ?  asset('admin/about/edit/'.$item->id) : asset('admin/about/add')}}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{\Illuminate\Support\Facades\Config::get('app.locale') == 'vn' ? 'Tên đăng nhập' : 'Username'}}</label>
                                        <input type="text" class="form-control" placeholder="Username" name="title" value="{{isset($item)? $item->title : ''}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">{{\Illuminate\Support\Facades\Config::get('app.locale') == 'vn' ? 'Hình ảnh' : 'Avatar'}}</label>
                                        <div>
                                            <input id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                                            <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail imageForm" src="{{ isset($item->img) && file_exists(storage_path('app/about/'.$item->img)) && $item->img ? asset('local/storage/app/about/'.$item->img) : '../images/default-image.png' }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nội dung</label>
                                        <textarea name="content" id="" cols="30" rows="10">{{isset($item)? $item->content : ''}}</textarea>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="{{isset($item)? 'Thay đổi' : 'Thêm mới'}}">
                                    {{csrf_field()}}
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script src="plugins/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace( 'content', {
            height: '400px',
            filebrowserBrowseUrl: 'plugins/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            } );


            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
            })
        });
    </script>
@stop
