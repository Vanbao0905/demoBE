@extends('dashboard')

@section('content')
<style>
    body {
        background: linear-gradient(145deg, #0f2027, #203a43, #2c5364);
        min-height: 100vh;
        color: #fff;
        font-family: 'Segoe UI', sans-serif;
    }

    .glass-card {
        background-color: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }

    .glass-card table th,
    .glass-card table td {
        vertical-align: middle !important;
    }

    .glass-card .table thead {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="glass-card p-4 w-100">
                <h3 class="text-center mb-4">
                    <i class="fas fa-users-cog me-2"></i>Quản lý người dùng
                </h3>
                <div class="table-responsive">
                    <table class="table table-dark table-hover align-middle mb-0">
                        <thead class="text-uppercase text-center">
                            <tr>
                                <th><i class="fas fa-id-badge"></i> ID</th>
                                <th><i class="fas fa-user"></i> Tên</th>
                                <th><i class="fas fa-envelope"></i> Email</th>
                                <th><i class="fas fa-user-tag"></i> Vai trò</th>
                                <th><i class="fas fa-cogs"></i> Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                    <a href="{{ route('user.role', ['id' => $role->id]) }}" class="badge bg-gradient bg-info text-white text-decoration-none me-1">
                                        <i class="fas fa-shield-alt me-1"></i>{{ $role->name }}
                                    </a>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="btn btn-sm btn-outline-info text-white me-1">
                                        <i class="fas fa-eye me-1"></i> Xem
                                    </a>
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-sm btn-outline-warning text-white me-1">
                                        <i class="fas fa-edit me-1"></i> Sửa
                                    </a>
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?')" class="btn btn-sm btn-outline-danger text-white">
                                        <i class="fas fa-trash me-1"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection