@extends('client.master1')
@section('content')
<form action="{{ route('Login')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email Của Bạn</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" name="email" required>
        
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lưu Mật Khẩu</label>
    </div>
    <input type="submit" class="btn btn-primary" value="Đăng Nhập">


    <div class="signUp">
        <br>
        <a href="{{ route('Register')}}"> Đăng Ký </a>
    </div>
</form>
@endsection