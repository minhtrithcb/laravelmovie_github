@extends('layout.authlayout')

@section('content')
<div class="container" style="height: 700px; padding: 100px">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card rounded-0">
                <div class="card-header text-center"><h3>{{ __('Đăng ký') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col">
                                <label for="name" class="my-2">{{ __('Họ và Tên') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror     
                            </div>                          
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="email" class="my-2">{{ __('Địa chỉ E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                @error('email') <small class="invalid-feedback">{{ $message }}</small> @enderror     
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="password" class="my-2">{{ __('Mật khẩu') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                @error('password') <small class="invalid-feedback">{{ $message }}</small> @enderror     
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="password-confirm" class="my-2">{{ __('Nhập lại mật khẩu') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                @error('password_confirmation') <small class="invalid-feedback">{{ $message }}</small> @enderror     
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary w-100"> {{ __('Đăng ký') }} </button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center d-flex justify-content-center align-items-end" style="height: 40px;">
                        đã có tài khoản <a href="login"> Đăng nhập</a>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
