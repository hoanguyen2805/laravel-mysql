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
                            <p><span>Name:</span> {{ Auth::user()->name }}</p>
                            <p><span>Email:</span>  {{ Auth::user()->email }}</p>
                            <p><span>Username:</span>  {{ Auth::user()->username }}</p>
                            <p><span>Birthday:</span> {{ \Carbon\Carbon::parse(Auth::user()->birth_day)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
