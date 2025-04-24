@extends('dashboard')

@section('content')
<main class="login-form py-4">
    <div class="container">
        {{-- Thông tin vai trò --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Thông tin vai trò</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0">
                    <tr>
                        <th style="width: 120px;">ID</th>
                        <td>{{ $role->id }}</td>
                    </tr>
                    <tr>
                        <th>Tên</th>
                        <td>{{ $role->name }}</td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Danh sách người dùng --}}
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Danh sách người dùng có vai trò này</h5>
            </div>
            <div class="card-body table-responsive">
                @if($role->users->count())
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light text-center">
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($role->users as $user)
                                <tr>
                                    <td class="text-center">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="{{ route('user.role', ['id' => $role->id]) }}" class="badge bg-primary text-decoration-none me-1">
                                            {{ $role->name }}
                                        </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-muted">Không có người dùng nào thuộc vai trò này.</p>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection
