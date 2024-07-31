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




      @yield('content')
      @include('client.partials.footer')
    </div>
  </div>
  @include('client.partials.js')

</body>

</html>