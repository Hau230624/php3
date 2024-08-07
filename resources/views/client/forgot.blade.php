@extends('client.master1')
@section('content')
<form action="{{ route('Login')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email Của Bạn</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" name="email" required>
        
    </div>

    <input type="submit" class="btn btn-primary" value="Đăng Nhập">
</form>
@endsection