@extends('dashboard')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@section('content')
    <div class="login-container">
        <h2>Màn hình đăng nhập</h2>
        <form class="login-form" method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required
                    autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Mật khẩu" class="form-control" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group checkbox-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ghi nhớ đăng nhập</label>
            </div>
            <div class="form-group button-group">
                <a href="#" class="forgot-password">Quên mật khẩu</a>
                <button type="submit" class="login-button">Đăng nhập</button>
            </div>
        </form>
    </div>
@endsection

@extends('footer')
