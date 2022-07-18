@extends('layouts.app', [
'class' => 'login-page',
'backgroundImagePath' => 'img/bg/Pemkot_Batu.jpg'
])

@section('content')
<div class="content">
    <div class="container">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card card-login">
                    <div class="card-header ">
                        <div class="card-header ">
                            <h3 class="header text-center">{{ __('Login') }}</h3>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="nc-icon nc-single-02"></i> -->
                                    <i class="fa-brands fa-accessible-icon"></i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nc-icon nc-key-25"></i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning btn-round mb-3">{{ __('Sign in') }}</button>
                            </br>
                            <button type="" class="btn btn-success btn-round mb-4">{{ __('Sign in With Google') }}</button>
                            <br>
                            <a href="{{ route('password.request') }}" class="btn btn-link">
                                {{ __('Forgot password') }}
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-link float-right">
                                {{ __('Create Account') }}
                            </a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
@endpush