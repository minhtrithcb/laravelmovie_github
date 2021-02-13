@extends('layout.authlayout')
{{-- @extends('layout.app') --}}

@section('content')
<div class="container" style="height: 600px; padding: 100px">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card rounded-0">
                <div class="card-header text-center"><h3>{{ __('Đăng nhập') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col">
                                <label for="email" class="mb-2">{{ __('Địa chỉ E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email') <small class="invalid-feedback">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col">
                                <label for="password" class="mb-2 mt-2">{{ __('Mật khẩu') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                @error('password') <small class="invalid-feedback">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Ghi nhớ đăng nhập') }}</label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="a-b " href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0 p-2">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Đăng nhập') }}
                            </button>
                        </div>

                        <div class="text-center d-flex justify-content-center align-items-end" style="height: 40px;">
                            Chưa có tài khoản <a href="register"> Đăng Ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
