@extends('layouts.app')
@section('title', 'Destinasi Pendakian')

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
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{route('destinasi')}}" class="nav-link active">Destinasi Pendakian</a>
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
<main>
    <section class="section-details-header"></section>
    <section class="jarak section-popular-content" id="" >
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
</main>
@endsection

@push('destinasi-style')
    <link rel="stylesheet" href="{{url('frontend-destinasi/css/main.css')}}">
@endpush