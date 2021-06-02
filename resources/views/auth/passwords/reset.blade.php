@extends('layouts.app')

@section('content')
    <section class="reset-password">
        <div class="container_w">
            <div class="row">
                <div class="col">
                    <div class="reset-password__header">
                        <h1>RESET PASSWORD</h1>
                    </div>
                </div>
                <div class="col">
                    <div class="reset-password__content">
                        <form autocomplete="off"
                              action="{{ route('password.update') }}"
                              method="post"
                              name="reset_form"
                              onsubmit="return validateFormResetPassword()">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input id="email" type="email" class="@error('email') input--error @enderror" name="email"
                                   value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <p class="error show">
                                {{ $message }}
                            </p>
                            @enderror

                            <input type="password" name="password" placeholder="New Password" id="password"
                                   class="@error('password') input--error @enderror"
                                   autocomplete="new-password"/>
                            @error('password')
                            <p class="error show">
                                {{ $message }}
                            </p>
                            @enderror
                            <p class="error" id="err-password-reset"></p>

                            <input id="password-confirm" type="password" name="password_confirmation"
                                   autocomplete="new-password" placeholder="Confirm Password"/>
                            <p class="error" id="err-password-reset-confirm"></p>
                            <button type="submit" name="reset" class="btn btn-sign-in">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
