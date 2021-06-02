@extends('layouts.app')

@section('content')
    <section class="login-form">
        <div class="container-w">
            <div class="row">
                <div class="col">
                    <div class="login-form__header">
                        <h1>LOGIN FORM</h1>
                    </div>
                </div>
                <div class="col">
                    <div class="login-form__content">
                        <form autocomplete="off" action="{{ route('login') }}"
                              method="post"
                              name="login_form"
                              onsubmit="return validateFormLogin()">
                            @csrf
                            {{-- start username--}}
                            <input type="text" name="username" class="@error('username') input--error @enderror"
                                   value="{{ old('username') }}" placeholder="Username">
                            @error('username')
                            <p class="error show">{{ $message }}</p>
                            @enderror
                            <p class="error" id="err-login-username">username is required!</p>
                            {{-- end username --}}
                            {{-- start password --}}
                            <input type="password" name="password" class="@error('password') input--error @enderror"
                                   placeholder="Password"/>
                            @error('password')
                            <p class="error show">{{ $message }}</p>
                            @enderror
                            <p class="error" id="err-login-password">password is required!</p>
                            {{-- end password --}}
                            <div class="login-form__link">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a>
                                @endif
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        Sign up!
                                    </a>
                                @endif
                            </div>
                            <button type="submit" name="login" class="btn btn-sign-in">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
