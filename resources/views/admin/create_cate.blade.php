@extends('admin.master')
@section('content')
<form action="{{ route('create_cate')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="col-md-10">
        <h2 class="mt-3 mb-3">Category</h2>
        <div class="mt-3">
            <label for="news_name">Name_Cate</label>
            <input type="text" name="name_cate" value="{{ old('name_cate') }}" class="form-control">

        </div>
        <div class="mt-3">
            <input type="submit" value="Thêm">

        </div>
    </div>
</form>
@endsection