@extends('layout.authlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="height: 600px; padding: 100px">
        <div class="col-md-6">
            <div class="card rounded-0">
                <div class="card-header text-center">{{ __('Đặt lại mật khẩu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col">
                                <label for="email" class="mb-2">{{ __('Địa chỉ E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email') <small class="invalid-feedback">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col">
                                <button type="submit" class="btn btn-primary W-100">
                                    {{ __('Xác nhận email') }}
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
