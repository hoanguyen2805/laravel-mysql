@extends('layouts.app')

@section('content')
    <section class="sign-up-form">
        <div class="container-w">
            <div class="row">
                <div class="col">
                    <div class="sign-up-form__header">
                        <h1>CREATE ACCOUNT</h1>
                    </div>
                </div>
                <div class="col">
                    <div class="sign-up-form__content">
                        <form action="{{ route('register') }}" autocomplete="off" method="post"
                              enctype="multipart/form-data" name="my_form"
                              onsubmit="return validateFormSignUp()">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-input @error('name') input--error @enderror" id="name"
                                       placeholder="Eg: John Doe"
                                       name="name" value="{{ old('name') }}">
                                <p class="error" id="err-sign-up-name"></p>
                                @error('name')
                                <p class="error show">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-input @error('email') input--error @enderror" id="email"
                                       value="{{ old('email') }}" placeholder="Eg: johndoe@email.com"
                                       name="email">
                                <p class="error" id="err-sign-up-email"></p>
                                @error('email')
                                <p class="error show">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="username" class="form-label">User Name</label>
                                <input type="text" class="form-input @error('username') input--error @enderror"
                                       id="username" placeholder="Eg: john"
                                       name="username" value="{{ old('username') }}">
                                <p class="error" id="err-sign-up-username"></p>
                                @error('username')
                                <p class="error show">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password"
                                       class="form-input @error('password') input--error @enderror" id="password"
                                       placeholder="******"
                                       name="password">
                                <p class="error" id="err-sign-up-password"></p>
                                @error('password')
                                <p class="error show">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-input" id="password-confirm" placeholder="******"
                                       name="password_confirmation">
                                <p class="error" id="err-sign-up-password-confirm"></p>
                            </div>

                            <div class="form-group">
                                <label for="birth-day" class="form-label">Birthday</label>
                                <input type="date" class="form-input @error('birth_day') input--error @enderror"
                                       id="birth-day" name="birth_day">
                                <p class="error" id="err-sign-up-birth-day">Birthday is required!</p>
                                @error('birth_day')
                                <p class="error show">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="avatar" class="form-label">Avatar</label>
                                <input type="file" class="form-input @error('avatar') input--error @enderror"
                                       id="avatar" name="avatar">
                                <p class="error" id="err-sign-up-avatar">Avatar is required!</p>
                                @error('avatar')
                                <p class="error show">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="form-submit" name="sign_up">Register</button>
                        </form>
                        @if (Route::has('login'))
                            <p class="sign-up-form__already">Already have an account ?
                                <a href="{{ route('login') }}" class="sign-up-form__already--link">
                                    Login
                                </a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
