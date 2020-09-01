@extends('landing/layout/main')

@section('title', 'Landing')

@section('container')
    
    <div class="container">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <img src="/images/undraw_publish_article_icso.svg" width="350" height="350" alt="edushare_icon">
                <img src="/images/undraw_publish_post_vowb.svg" width="350" height="350" alt="edushare_icon">
                <div class="title m-b-md">
                    Edu Share
                </div>
    
                <div class="links">
                    <a href="{{url('/')}}">Home</a>
                    <a href="{{url('/about')}}">About</a>
                    <a href="{{url('/post')}}">Post</a>
                    <a href="{{url('/contact')}}">Contact</a>
                    {{-- <a href="{{url('/register')}}">Register</a> --}}
                </div>
            </div>
        </div>

    </div>

@endsection