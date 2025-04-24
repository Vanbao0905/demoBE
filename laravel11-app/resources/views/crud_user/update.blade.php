@extends('dashboard')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<div class="Form-login">
    <h2>Màn Hình Thay Đổi Thông Tin</h2>
    <form action="{{ route('user.postUpdateUser') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $user ->id}}">
        <div class="text-box">
            <label for="username">Username</label>
            <input type="text" name="name" id="name" value="{{ $user ->name}}" require autofocus>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="text-box">
            <label for="password">Mật Khẩu</label>
            <input type="password" placeholder="Password" id="password" name="password" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="text-box">
            <label for="password_confirmation">Nhập Lại Mật Khẩu</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="nhập lại mật khẩu" required
                oninput="this.setCustomValidity(this.value !== document.getElementById('password').value ? 'Mật khẩu nhập lại không khớp!' : '')">
        </div>
        <div class="text-box">
            <label for="email">Email</label>
            <input type="text" value="{{ $user ->email}}" id="email_address" name="email" required autofocus>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="button-box">
            <input class="submit" type="submit" value="Sửa Thông Tín">
        </div>
    </form>
</div>
@endsection

@extends('footer')