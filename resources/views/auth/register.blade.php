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
                                <h3 class="header text-center">{{ __('Register') }}</h3>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    </span>
                                </div>
                                <input name="email" type="email" class="form-control" placeholder="Email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                   <span class="input-group-text">
                                    </span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    </span>
                                </div>
                                <input name="password_confirmation" type="password" class="form-control" placeholder="Password confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    </span>
                                </div>
                                <input name="name" type="text" class="form-control" placeholder="Username" required >
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    </span>
                                </div>
                                <input name="name" type="number" class="form-control" placeholder="NIP" value="{{ old('name') }}" required autofocus>
                            </div>

                            <div class="form-check text-left">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="agree_terms_and_conditions" type="checkbox">
                                    <span class="form-check-sign"></span>
                                        {{ __('I agree to the') }}
                                    <a href="#something">{{ __('terms and conditions') }}</a>.
                                </label>
                                @if ($errors->has('agree_terms_and_conditions'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('agree_terms_and_conditions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="card-footer mx-auto">
                            <button type="submit" class="btn btn-info btn-round">{{ __('Sign Up') }}</button>
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
