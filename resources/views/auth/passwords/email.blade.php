@extends('layouts.app')

@section('content')
    <section class="forgot-password">
        <div class="container-w">
            <div class="row">
                <div class="col">
                    <div class="forgot-password__header">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h1>Forgot Password?</h1>
                                <p class="forgot-password--text">We will be sending a reset password link to your email</p>
                                <div class="panel-body">
                                    <form id="forgot-password-form" role="form" autocomplete="off" method="post"
                                          action="{{ route('password.email') }}"
                                          onsubmit="return validateFormForgotPassword()"
                                          name="forgot_form">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-envelope color-blue"></i>
                                                </span>
                                                <input id="email" name="email" placeholder="email address"
                                                       class="form-control @error('email') input--error @enderror"
                                                       type="email"  value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <p class="error show">{{ $message }}</p>
                                                </span>
                                            @enderror
                                            <p class="error" id="err-email-forgot">Email is required!</p>
                                        </div>
                                        <div class="form-group">
                                            <input name="recover_password" class="btn btn-lg btn-primary btn-block"
                                                   value="Send" type="submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
