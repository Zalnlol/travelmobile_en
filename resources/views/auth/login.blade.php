@extends('layouts.app')
@section('title', 'Login')
@section('content')
<body id="body">
    <div id="login-card" class="card">
        <div class="card-body">
            <h2 class="text-center">Login</h2>
            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="form-check">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Remember password -->
                {{-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Nhớ mật khẩu') }}
                            </label>
                        </div>
                </div> --}}

                <div class="form-group">
                    @if (Route::has('password.request'))
                        <div class="text-right">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <b>{{ __('Forgot password?') }}</b>
                            </a>
                        </div>
                    @endif
                </div>

                <div class="form-group">
                        <button type="submit" id="button" class="btn btn-primary deep-purple btn-block">
                            {{ __('Confirm') }}
                        </button>
                </div>

                <div class="text-center">
                    Not a member? <a href="register"><b>Register now!</b></a>
                </div>
                <hr>
                <br>

                <div id="btn" class="text-center">
                    Or log in with your account
                    <a href="{{url('auth/facebook')}}">
                        <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
                    </a>
                    <a href="{{url('auth/google')}}">
                        <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
