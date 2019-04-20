@extends('admin.master')
@section('content')
    <div class="container">
        <a href="{{ route('admin.user.index') }}" class="btn mb-3 btn-primary">Danh sách người dùng</a>
        <div class="card">
            <div class="card-header">Cập nhật người dùng</div>
            <div class="card-body">
                <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="form-group">
                        <label for="name">Họ tên</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Họ tên"
                                value="{{ $user->name }}">
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email"
                                placeholder="Email"
                                value="{{ $user->email }}">
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password"
                                placeholder="Mật khẩu" value="{{ old('password') }}">
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Xác nhận mật khẩu">
                    </div>
                    <button type="submit" class="btn btn-success">Cập nhật người dùng</button>
                </form>
            </div>
        </div>
    </div>
@endsection
