@extends('layouts.app')

@section('content')

    <div class="campl-row campl-content"  id="content">
        <div class="campl-wrap clearfix">
            <div>
                <div class="campl-column4">
                    &nbsp;
                </div>

                <div class="campl-column4 campl-login-form">
                    <div class="campl-content-container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <legend>{{ __('Login') }}</legend>

                                <div class="campl-control-group @error('email') campl-error @enderror">
                                    <div class="campl-controls">
                                        <input id="user-id" placeholder="Email" type="email" class="campl-input-block-level @error('email') campl-error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    
                                    @error('email')
                                        <span class="campl-help-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="campl-control-group @error('password') campl-error @enderror">
                                    <div class="campl-controls">
                                        <input id="password" placeholder="Password" type="password" class="campl-input-block-level @error('password') campl-error @enderror" name="password" required autocomplete="current-password">
                                    </div>

                                    @error('password')
                                        <span class="campl-help-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="campl-control-group">
                                    <div class="campl-controls">
                                    <label class="campl-checkbox inline" for="remember">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} /> {{ __('Remember Me') }}
                                    </label>
                                    </div>
                                </div>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password') }}</a>
                                @endif

                                @if (Route::has('register'))
                                    <a class="campl-float-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif

                                <div class="campl-form-actions">
                                    <button type="reset" class="campl-btn">{{ __('Reset Form') }}</button>
                                    <button type="submit" class="campl-btn campl-primary-cta campl-float-right">{{ __('Login') }}</button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
                
                <div class="campl-column4">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>

@endsection
