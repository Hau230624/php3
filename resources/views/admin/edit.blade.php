@extends('admin.master')
@section('content')
<form action="{{ route('edit',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-10">
        <h2 class="mt-3 mb-3">News</h2>
        <div class="mt-3">
            <label for="news_name">Title</label>
            <input type="text" name="news[title]" value="{{ $data['title'] }}" id="news_name" class="form-control">

        </div>
        <div class="mt-3">
            <label for="news_address">Content</label>
            <input type="text" name="news[content]" value="{{ $data['content']}}" id="news_address" class="form-control">

        </div>
        <div class="mt-3">
            <label for="news_phone">Author</label>
            <input type="text" name="news[author]" value="{{ $data['author'] }}" id="news_phone" class="form-control">

        </div>
        <div class="mt-3">
            <label for="news_email">Image</label>
            <input type="file" name="news[img]" value="{{ old('news[img]') }}" id="news_img" class="form-control">
            <img width="200px" src="{{ \Storage::url($data['img']) }}" alt="">
        </div>
        <div class="mt-3">
            <label for="news_email">Thể Loại</label>
            <br>
            <!-- <input type="file" name="news[img]" value="{{ old('news.img') }}" id="news_img" class="form-control"> -->
            <select name="news[cate_id]" id="">
                @foreach ($cate as $ca)
                <option value="{{ $ca->id }}" {{ $ca->id == $data->cate_id ? 'selected' : '' }}>
                    {{ $ca->name_cate }}
                </option>

                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <input type="submit" value="Sửa">

        </div>
    </div>
</form>
@endsection