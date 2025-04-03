@extends('dashboard')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="bg-white p-8 rounded-lg shadow-md w-96">
                    <h2 class="text-center text-xl font-semibold mb-6">Màn hình đăng ký</h2>

                    <form action="{{ route('user.postUser') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                            <input type="text" id="username" name="username"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            @if ($errors->has('username'))
                                <span class="text-red-500 text-sm">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Mật khẩu</label>
                            <input type="password" id="password" name="password"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            @if ($errors->has('password'))
                                <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="confirm-password" class="block text-sm font-medium text-gray-700">Nhập lại mật
                                khẩu</label>
                            <input type="password" id="confirm-password" name="confirm_password"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            @if ($errors->has('confirm_password'))
                                <span class="text-red-500 text-sm">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            @if ($errors->has('email'))
                                <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('login') }}" class="text-blue-500 text-sm">Đã có tài khoản</a>
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md ">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('footer')
