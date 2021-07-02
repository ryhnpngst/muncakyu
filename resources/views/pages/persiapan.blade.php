@extends('layouts.app')
@section('title', 'Persiapan')

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
                    <a href="{{route('peralatan')}}" class="nav-link">Peralatan</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{route('persiapan')}}" class="nav-link active">Persiapan</a>
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
    <div class="jarak container px-4 px-lg-5">
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            1. Rencanakan pendakian jauh-jauh hari
                        </h2>
                        <p class="card-text">
                            Merencanaan pendakian jauh-jauh hari memberikan kita banyak waktu yang bisa digunakan untuk
                            berolahraga, contohya joging, renang, atau pergi ke gym. Namun, pastikan jika beberapa hari
                            sebelum pendakian dirasa tubuh tidak fit, perbanyaklah istirahat. Kalau sampai H-2 masih belum
                            membaik, lebih baik batalkan untuk ikut pendakian. Dan kenali juga teman seperjalanan kamu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            2. Lakukan riset dan cari informasi sebanyak-banyaknya mengenai gunung
                            yang akan kamu daki
                        </h2>
                        <p class="card-text">
                            Cari informasi mengenai gunung yang akan didaki mulai dari akses, status kawasan, kondisi terkini,
                            medan pendakian, cuaca, syarat serta tata aturan yang berlaku, perizinan, cara daftar atau <i>booking</i>
                            pendakian, dan lain-lain. Bisa cari dari buku, majalah, koran, internet (website, blog, media sosial,
                            dan sejenisnya), komunitas, atau teman yang sudah pernah pergi ke sana dan menghubungi pengelola atau
                            kontak <i>basecamp</i> yang ada. Nah, informasi-informasi tersebut dapat memberikan gambaran seperti apa gunung
                            yang akan menjadi tujuan pendakian kamu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            3. Siapkan semua identitas diri
                        </h2>
                        <p class="card-text">
                            Surat jalan dari kepolisian atau petugas yang berwenang juga perlu dipersiapkan jika tujuan pendakian lebih khusus, 
                            seperti kegiatan ekspedisi atau penelitian.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            4. Selalu biasakan membawa alat tulis
                        </h2>
                        <p class="card-text">
                            Berguna untuk mencatat hal-hal penting selama perjalanan. Juga selalu tinggalkan catatan 
                            atau pesan kepada keluarga atau orang terdekat kamu tentang gunung yang akan kamu daki.                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            5. Buat estimasi waktu perjalanan dan alokasi biaya yang dibutuhkan untuk pendakian
                        </h2>
                        <p class="card-text">
                            Setelah membuat estimasi, jangan lupa untuk membuat <i>check list</i> perlengkapan yang akan kamu bawa 
                            dan butuhkan sesuai dengan gunungnya dan tujuan pendakian serta jangka waktu pendakian, 
                            misalnya dalam rangka penelitian atau pembuatan film. Pastikan semua perlengkapan berfungsi baik, 
                            seperti kompor, <i>headlamp</i>  atau senter, kamera, dan sebagainya. Lalu cek dan <i>re</i>-cek lagi semuanya.                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            6. Membawa perlengkapan P3K dan <i>survival kit</i>
                        </h2>
                        <p class="card-text">
                            Termasuk juga obat-obatan pribadi. Simpan pada tempat yang baik dan aman. Tambah juga 
                            alat navigasi atau maksimalkan penggunaan <i>smartphone</i> kamu.                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            7. Siapkan makakan yang akan dibawa
                        </h2>
                        <p class="card-text">
                            Makanan yang dibawa untuk pendakian adalah makanan yang baik, sehat, bergizi, berprotein, berserat, 
                            dan tinggi kalori untuk kebutuhan harian kamu selama mendaki. Sebisa mungkin bawa makanan 
                            yang menimbulkan sedikit sampah. Pastikan tersedia makanan dan minuman ekstra untuk 
                            mengantisipasi cuaca buruk atau terjadi sesuatu hal yang menyebabkan waktu pendakian jadi molor.                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            8. Pastikan semua perlengkapan dilapisi dengan bahan yang tahan air
                        </h2>
                        <p class="card-text">
                            Melapisi perlengkapan dengan bahan yang tahan air berfungsi untuk menghindari perlengakapan tersebut
                            kebasahan. Kita tidak tahu secara pasti kapan hujan akan turun, atau kita juga tidak tahu medan perjalanan
                            saat pendakian seperti apa. Maka untuk mengantisipasi perlengkapan kebasahan, lapisi perlengakapan dengan bahan
                            yang tahan air.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            9. Maksimalkan perlengkapan yang dibawa dengan sebaik mungkin
                        </h2>
                        <p class="card-text">
                            Misalnya barang yang dapat berfungsi ganda. Tujuannya untuk meringankan berat beban. <i>Repacking</i> atau 
                            bungkus ulang makanan yang kamu bawa. Pastikan juga bawa kantong untuk menyimpan dan membawa kembali sampah 
                            yang kamu timbulkan selama aktivitas pendakian.                    
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            10. Menyimpan perlengkapan ke dalam tas sebaik mungkin
                        </h2>
                        <p class="card-text">
                            Simpanlah perlengkapan yang sekiranya jarang digunakan atau akan dikeluarkan nanti saat sudah sampai
                            tempat bermalam seperti tenda pada bagian bawah tas. Untuk barang yang sekiranya cepat digunakan Simpan
                            pada bagian atas tas yang mudah diambil seperti jas hujan. Tata penyimpanan seperti ini memudahkan kita 
                            saat di perjalanan pendakian.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('persiapan-style')
    <link href="{{url('frontend-persiapan/css/main.css')}}" rel="stylesheet" />
@endpush

@push('detail-style')
    <link rel="stylesheet" href="{{url('frontend/styles/detail.css')}}">
@endpush

@push('persiapan-script')
    <script src="{{url('frontend-persiapan/js/scripts.js')}}"></script>
@endpush