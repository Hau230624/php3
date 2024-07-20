@extends('client.master')
@section('content')
@include('client.partials.banner')
<div class="content_area">
  <div class="main_content floatleft">
    <div class="left_coloum floatleft">

      <div class="single_left_coloum_wrapper">
        <h2 class="title">Chính Trị</h2>
        <a class="more" href="#">Xem</a>
        @foreach ($data as $a)
        @include('client.convenient.product',[
        'id'=> $a->id,
        'img'=> $a->img,
        'title'=> $a->title,
        'content'=> $a->content,
        ])
        @endforeach
      </div>
      <div class="single_left_coloum_wrapper">
        <h2 class="title">Kinh Tế</h2>
        <a class="more" href="#">Xem</a>
        @foreach ($data1 as $a)
        @include('client.convenient.product',[
        'id'=> $a->id,
        'img'=> $a->img,
        'title'=> $a->title,
        'content'=> $a->content,
        ])
        @endforeach
      </div>
      <div class="single_left_coloum_wrapper single_cat_left">
        <h2 class="title">Xã Hội</h2>
        <a class="more" href="#">Xem</a>
        @foreach ($data2 as $a)
        @include('client.partials.mainleft',[
        'id'=> $a->id,
        'author'=> $a->author,
        'title'=> $a->title,
        'content'=> $a->content,
        ])
        @endforeach
      </div>
    </div>
    <div class="right_coloum floatright">
      <div class="single_right_coloum">
        <h2 class="title">Bài Viết Mới Nhất</h2>
        <ul>
          @foreach ($data3 as $a)
          @include('client.partials.maincenter_top',[
          'id'=> $a->id,
          'author'=> $a->author,
          'title'=> $a->title,
          'content'=> $a->content,
          ])
          @endforeach
        </ul>
        <a class="popular_more" href="#">Xem</a>
      </div>
    </div>
  </div>
  <div class="sidebar floatright">
    <div class="single_sidebar"> <img src="/client/images/camon.jpg" alt="" /> </div>
    <div class="single_sidebar">
      @include('client.partials.formSignin')
    </div>
    <div class="single_sidebar">
      <div class="popular">
        <h2 class="title">Phổ Biến</h2>
        <ul>
      @foreach ($data4 as $a)
      @include('client.partials.mainright',[
          'id'=> $a->id,
          'title'=> $a->title,
          'created_at'=> $a->created_at,
          ])
      
      @endforeach
        </ul>
        <a class="popular_more">more</a>
      </div>
    </div>
    <div class="single_sidebar"> <img src="/client/images/camon.jpg" alt="" /> </div>

  </div>
</div>
@endsection