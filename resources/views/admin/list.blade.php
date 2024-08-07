@extends('admin.master')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Toàn Bộ Bản Ghi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tiêu Đề</th>
                            <th>Mô Tả Ngắn</th>
                            <th>Danh Mục</th>
                            <th>Tác giả</th>
                            <th>Ngày Tạo</th>
                            <th>Lượt Xem</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tiêu Đề</th>
                            <th>Mô Tả Ngắn</th>
                            <th>Danh Mục</th>
                            <th>Tác giả</th>
                            <th>Ngày Tạo</th>
                            <th>Lượt Xem</th>
                            <th>chức năng</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dataNew as $new)

                        <tr>
                            <td>{{$new->title}}</td>
                            <td>{{$new->content}}</td>
                            <td>{{$new->name_cate}}</td>
                            <td>{{$new->author}}</td>
                            <td>{{$new->created_at}}</td>
                            <td>123</td>
                            <td>
                                <a class="btn btn-primary" href="http://php3asm.test/admin/edit/{{$new->id}}">Sửa</a>
                                <a class="btn btn-danger" href="http://php3asm.test/admin/destroy/{{$new->id}}">Xóa</a>
                            </td>

                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Trước</a></li>
                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">Sau</a></li>
                </ul>
            </div>
        </div>
    </div>
        </div>
    </div>

</div>
@endsection