@extends('admin.master')

@section('title', 'About')
@section('main')
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Certification</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Certification</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                @foreach($items as $item)
                    <form  method="post" enctype="multipart/form-data" action="{{ asset('admin/certification/edit/'.$item->id) }}" class="form_edit_banner">
                        {{ csrf_field() }}
                        <div class="row d-flex">
                            <div class="col-md-6">
                                <!-- Profile Image -->
                                <div class="card card-danger card-outline">
                                    <div class="card-body box-profile">
                                        <div class="form-group">
                                            <input type="file" class="file" name="img" style="display:none"  onchange="changeImg(this)">
                                            <img class="add-image" src="{{ file_exists(storage_path('app/cer/'.$item->img)) ? asset('local/storage/app/cer/'.$item->img) : '../images/default-image.png' }}" width="100%">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- Profile Image -->
                                <div class="card card-danger card-outline">
                                    <div class="card-body box-profile">
                                        <div class="form-group">
                                            <label class="bold">Title</label>
                                            <input required="" type="text" class="form-control"  placeholder="" name="title" value="{{$item->title}}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <a href="{{ asset('admin/certification/delete/'.$item->id) }}" class="btn btn-danger white">Delete</a>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach

                <form  method="post" enctype="multipart/form-data" action="{{ asset('admin/certification/add') }}" class="form_add_banner">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="btn btn-success btnAddBanner">
                                    Add new
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none">
                        <div class="col-md-6">
                            <!-- Profile Image -->
                            <div class="card card-danger card-outline">
                                <div class="card-body box-profile">
                                    <div class="form-group">
                                        {{--<label class="bold">Banner {{($key + 1)}}</label>--}}
                                        <input type="file" class="file d-none" name="img"  onchange="changeImg(this)">
                                        <img class="add-image" src="../images/default-image.png" width="100%">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-md-6">

                            <!-- Profile Image -->
                            <div class="card card-danger card-outline">
                                <div class="card-body box-profile">
                                    <div class="form-group">
                                        <label class="bold">Title</label>
                                        <input required="" type="text" class="form-control"  placeholder="" name="title" value="">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </section>
    </div>


@stop
@section('script')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.btnAddBanner', function () {
                $(this).parents('.row').next().attr('style', 'display: flex !important');
                $(this).parents('.row').hide();

            });
            $('.add-image').click(function(){
                $(this).prev('.file').click();
            });

        });
        function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $(input).next('.add-image').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop
