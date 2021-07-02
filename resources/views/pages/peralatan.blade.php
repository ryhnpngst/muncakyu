@extends('layouts.app')
@section('title', 'Peralatan')

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
                    <a href="{{route('destinasi')}}" class="nav-link">Destinasi Pendakian</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{route('peralatan')}}" class="nav-link active">Peralatan</a>
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
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/carrier.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Tas Gunung (Carrier)</h5>
                                <!-- Product Description-->
                                Tas gunung atau carrier adalah salah satu perlengkapan yang wajib kamu bawa saat mendaki gunung.
                                Karena semua perlengkapan yang dibawa saat pendakian akan dimasukkan di tas ini.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/jaket.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jaket Gunung</h5>
                                <!-- Product Description-->
                                Agar terhindar dari udara dingin saat mendaki gunung, kamu juga wajib membawa jaket gunung. 
                                Selain bisa melindungi tubuhmu dari hipotermia, jaket gunung juga bisa melindungi tubuh dari sengatan 
                                sinar matahari saat mendaki. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/raincoat.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jas Hujan</h5>
                                <!-- Product description-->
                                Cuaca di gunung terkadang bisa saja cepat berubah dan turun hujan. Maka dari itu, selalu 
                                sediakan jas hujan untuk menghindari guyuran hujan dan terpaan angin.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/tenda.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Tenda</h5>
                                <!-- Product description-->
                                Bawalah tenda dengan ukuran sesuai jumlah kelompokmu. Jangan terlalu besar atau kecil, 
                                jika terlalu besar maka akan terlalu berat membawanya.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/matras.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Matras</h5>
                                <!-- Product Description-->
                                Idealnya tiap pendaki membawa satu matras. Matras bisa digelar di dalam tenda 
                                untuk tidur dan di luar untuk makan bersama. Fungsi utamanya sebagai penghalang hawa dingin 
                                di tanah.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/sepatu.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sepatu dan Sandal Gunung</h5>
                                <!-- Product Description-->
                                Dua alas kaki ini adalah barang yang wajib kamu bawa. Jika sedang berjalan atau trekking,
                                kamu wajib memakai sepatu gunung agar pendakianmu lebih aman dan nyaman. Setelah sampai di 
                                tempat kemping atau pos peristirahatan, kamu bisa menggantinya dengan memakai sandal gunung. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/pisau.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Perlengkapan Serba Guna</h5>
                                <!-- Product description-->
                                Kamu bisa membawa perlengkapan serba guna seperti pisau, korek api, senter atau senter headlamp. 
                                Gunakan pisau lipat yang multi fungsi.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/nesting.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Nesting</h5>
                                <!-- Product description-->
                                Selama mendaki, tubuh membutuhkan asupan gizi yang tepat sebagai penambah stamina.
                                Oleh karenanya, kamu wajib membawa satu set nesting untuk memasak. Sudah pasti termasuk gas 
                                dan kompor di dalamnya. 
                                Bawalah perbekalan sesuai dengan lama pendakian dan jumlah anggota pendaki.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{url('frontend-peralatan/assets/p3k.png')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Peralatan Medis</h5>
                                <!-- Product description-->
                                Peralatan medis bisa sebagai tindakan pertolongan pertama bagi kamu atau orang lain jika 
                                berada dalam kondisi darurat.
                                Selain obat-obatan, kamu juga bisa membawa deker elastis, bidai, dan perban sebagai bentuk 
                                antisipasi bila sewaktu-waktu terjadi kecelakaan yang tidak diinginkan, seperti terkilir.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('peralatan-style')
    <link href="{{url('frontend-peralatan/css/main.css')}}" rel="stylesheet" />
@endpush

@push('detail-style')
    <link rel="stylesheet" href="{{url('frontend/styles/detail.css')}}">
@endpush

