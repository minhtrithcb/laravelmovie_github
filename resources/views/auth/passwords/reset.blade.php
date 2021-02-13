@extends('layout.authlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="height: 600px; padding: 100px">
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-header text-center">{{ __('Đổi mật khẩu') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                                                                
                        <div class="form-group row">
                            <div class="col">
                                <label for="email" class="my-2">{{ __('Địa chỉ email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email') <small class="invalid-feedback">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="password" class="my-2">{{ __('Mật khẩu mới') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password') <small class="invalid-feedback">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col">
                                <label for="password-confirm" class="mb-2">{{ __('Xác nhận lại mật khẩu') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 my-2">
                            <div class="col">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Đổi mật khẩu') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
