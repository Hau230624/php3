<style>
  .haha {
    width: 120px;
    height: 60px;
  }
</style>
<div class="header_area">
  <div class="logo floatleft"><a href="#"><img class="haha" src="/client/images/6699e4550ba06.jpg" alt="" /></a></div>
  <div class="top_menu floatleft">
    <ul>
      <li><a href="/">Trang Chủ</a></li>
      <li><a href="#">Về Chúng Tôi</a></li>
      <li><a href="#">Liên Hệ</a></li>
      @if(Auth::check() )
      <form action="{{ route('LogOut') }}" method="post"> @CSRF
        <input type="submit" class="btn btn-primary" value="Logout">
      </form>

      @else
      <li><a href="{{ route('Login') }}">Login</a></li>
      @endif
    </ul>
  </div>
  <div class="social_plus_search floatright">
    <div class="social">
      <ul>
        <li><a href="#" class="twitter"></a></li>
        <li><a href="#" class="facebook"></a></li>
        <li><a href="#" class="feed"></a></li>
      </ul>
    </div>
    <div class="search">
      <form action="">
        <input type="text" placeholder="Tìm Kiếm" name="key" />
        <input type="submit" id="searchform" value="search" />

      </form>
    </div>
  </div>
</div>