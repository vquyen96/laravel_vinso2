@extends('admin.master')

@section('title', 'About')
@section('main')
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>About</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{\Illuminate\Support\Facades\Config::get('app.locale') == 'vn' ? 'Danh sách tài khoản' : 'Account list'}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="hideResponsive768">Image</th>
                                    <th>Title</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td class="hideResponsive768">
                                            <div class="avatar">
                                                <img src="{{ file_exists(storage_path('app/about/'.$item->img)) ? asset('local/storage/app/about/resized-'.$item->img) :  '../images/default-image.png' }}">
                                            </div>
                                        </td>
                                        <td>
                                            {{$item->title}}
                                        </td>
                                        <td>
                                            @if(Auth::user()->level < $item->level || Auth::user()->level == 1)
                                                <a href="{{ asset('admin/about/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ asset('admin/about/delete/'.$item->id) }}" onclick="return confirm('Bạn chắc chắn muốn Xóa')" class="btn btn-danger d-none">Delete</a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                                <div>
                                </div>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>


@stop
@section('script')
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" src="js/account.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable();

        });
    </script>
@stop
