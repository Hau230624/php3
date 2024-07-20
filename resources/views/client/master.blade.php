<head>
  @include('client.partials.head')

</head>

<body>
  @php
  $data = DB::table('categories')->limit(10)->get();
  @endphp
  <div class="body_wrapper">
    <div class="center">
      
      @include('client.partials.header')


      <div class="main_menu_area">
        <ul id="nav">
          @foreach ($data as $aa)
          @include('client.partials.nav',[
          'name_cate'=> $aa->name_cate,
          'id'=> $aa->id
          ])
          @endforeach
        </ul>
      </div>



      @yield('content')
      @include('client.partials.footer')
    </div>
  </div>
  @include('client.partials.js')

</body>

</html>