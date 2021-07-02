@extends('layouts.app')

@section('title')
    MuncakYu
@endsection

@section('navbar')
    <!--NavBar-->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">

        <a href="{{route('home')}}" class="navbar-brand">
            <img src="{{url('frontend/images/logo_MuncakYu.png')}}" alt="Logo MuncakYu">
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{route('home')}}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{route('destinasi')}}" class="nav-link">Destinasi Pendakian</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{route('peralatan')}}" class="nav-link">Peralatan</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{route('persiapan')}}" class="nav-link">Persiapan</a>
                </li>
            </ul>

            @guest
            <!--Mobile Button-->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}';">
                    Masuk
                </button>
            </form>

            <!--Desktop Button-->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}';">
                    Masuk
                </button>
            </form>
            @endguest

            @auth
            <!--Mobile Button-->
            <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}"
            method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" type="submit" >
                    Keluar
                </button>
            </form>

            <!--Desktop Button-->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}"
            method="POST">
            @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit" >
                    Keluar
                </button>
            </form>
            @endauth
        </div>
    </nav>
</div>
@endsection

@section('content')
<!-- Header -->
<header class="hero-title text-left">
    <h1>
        Sudahi Overthingking Mu
        <br>
        Mari Mendaki Bersamaku
    </h1>
    <p class="mt-3">
        Gunung adalah awal dan akhir dari
        <br>
        semua pemandangan alam
    </p>
    <a href="{{route('destinasi')}}" class="btn btn-explore-now px-4 mt-4">
        Explore now
    </a>
</header>

<main>
    <!--Popular-->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-left section-popular-heading">
                    Gunung Populer
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-gunung row justify-content-center">
                @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div 
                            class="card-gunung text-center d-flex flex-column"
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url
                            ($item->galleries->first()->image) : '' }}');"
                        >

                        <a href="{{ route('detail', $item->slug) }}"><div class="gunung-nama">{{ $item->title }}</div></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--Insipirasi-->
    <section class="section-inspirasi" id="inspirasi">
        <div class="container">
            <div class="row">
                <div class="col text-left section-inspirasi-heading">
                    Inspirasi Pendakian
                </div>
            </div>
        </div>
    </section>

    <section class="section-inspirasi-content" id="inspirasiContent">
        <div class="container">
            <div class="section-inspirasi-pendakian row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 6.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 7.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 8.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 12.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-inspirasi-pendakian row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 10.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 13.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 11.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-inspirasi text-right d-flex flex-column"
                    style="background-image: url('frontend/images/Mask\ Group\ 14.jpg');">
                    <div class="logo-instagram"><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection