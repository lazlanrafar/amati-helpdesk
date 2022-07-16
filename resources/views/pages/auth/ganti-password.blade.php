@extends('layouts.auth') @section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

                <form action="{{ route('changepass.update',request()->session()->get('user')['id']) }}" method="post">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" placeholder="Password Lama">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @if (session()->has('password_error'))
                            <span class="text-danger small">{{ session()->get('password_error') }}</span>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="new_password" class="form-control" placeholder="Password Baru">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" name="confirm_new_password" class="form-control"
                                placeholder="Konfirmasi Password Baru">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @if (session()->has('password_nosame'))
                            <span class="text-danger small">{{ session()->get('password_nosame') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ganti password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
