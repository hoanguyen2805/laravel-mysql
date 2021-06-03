@extends('layouts.app')

@section('content')
    <section class="user-info">
        <div class="container-w">
            <div class="row">
                <div class="col">
                    <div class="user-info__header">
                        <h1>USER INFORMATION</h1>
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="user-info__content">
                        <div class="user-info__content--img">
                            <img src="{{ url(Auth::user()->avatar) }}" alt="">
                        </div>
                        <div class="user-info__content--txt">
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>{{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{{ \Carbon\Carbon::parse(Auth::user()->birth_day)->format('d/m/Y') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
