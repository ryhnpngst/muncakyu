@extends('layouts.app')
@section('title', 'Detail Destinasi')

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
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">
                                    Destinasi Pendakian
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="card card-details">
                        <h1>
                            {{ $item->title }}
                        </h1>
                        <p>
                            {{ $item->location }}
                        </p>

                        @if ($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img 
                                    src="{{ Storage::url( $item->galleries->first()->image ) }}" 
                                    class="xzoom" 
                                    id="xzoom-default"
                                    xoriginal="{{ Storage::url( $item->galleries->first()->image ) }}"
                                >
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                    <a href="{{ Storage::url($gallery->image) }}">
                                        <img 
                                            src="{{ Storage::url($gallery->image) }}" 
                                            class="xzoom-galery"
                                            width="150" 
                                            xpreview="{{ Storage::url($gallery->image) }}"
                                        >
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <h2>
                            Info Pendakian
                        </h2>
                        <p>
                            {!! $item->about !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection

@push('detail-style')
    <link rel="stylesheet" href="{{url('frontend/styles/detail.css')}}">
@endpush

@push('prepen-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.zoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush