@extends('client.master1')
@section('content')
<form action="{{ route('Register')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên Của Bạn</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email Của Bạn</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
        <input type="password" class="form-control" name="password" id="pass" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nhập Lại Mật Khẩu</label>
        <input type="password" class="form-control" name="password1" id="pass1" required>
    </div>
    <br>
    <input type="submit" onclick=" return check()" class="btn  btn-primary" value="Đăng Ký">
</form>
<!-- <script>
    function check() {
        let pass = document.getElementById('pass').value;
        let pass1 = document.getElementById('pass1').value;
        if (pass !== pass1) {
            alert('mật khẩu không trùng nhau')
        }
        return true;
    }
</script> -->
@endsection