@extends('layouts.main')

@section('container')

    {{-- <h1 style="text-align: center;">Home</h1> --}}

    <div class="bgg container-fluid m-0 p-5 row">
        <div class="col-sm-12" style="display:flex; justify-content:center; align-items:center; margin-top: 150px; margin-bottom:50px;">
            <div class="pb-5">
                <h1 class="text-white">Home</h1>
            </div>
        </div>
        <div class="mb-3">
            @include('partials.search')
        </div>
    </div>
    
    <br>
    
    <div class="container" style="margin-top:150px;">
        <div class="row mt-1">
            @foreach ($categories as $category)
                <div class="col-lg-6 mb-4">
                    <a href="/categories/{{ $category->slug }}" class="card border-0 rounded shadow text-decoration-none">
                        <img class="card-img-top rounded-top" src="img/bghome.jpeg">
                        <div class="card-body border" >
                            <h5 class="card-text montserrat font-weight-bold text-dark">{{ $category->name }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <hr class="text-center mt-5 mb-5" style="width:83%; margin:auto">

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8" style="font-size: 120%;">
                <h3>Tentang Saya</h3>
                <p style="text-align:justify;">
                    Halo, perkenalkan nama saya Yagyu Munenori Michael Emmanuel! <br/>
                    Saya adalah mahasiswa jurusan Teknik Informatika Fakultas Teknologi Informasi 
                    di Universitas Tarumanagara. Saat ini saya sedang menjalani perkuliahan mulai dari 
                    tahun 2018 sampai dengan 2022 ini. 
                </p>
            </div>
            <div class="col-sm-4">
                <img src="img/Munenori.jpeg" class="img-thumbnail" style="width:100%;">
            </div>
        </div>
    </div>

    <hr class="text-center mt-5 mb-5" style="width:83%; margin:auto">

    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-sm-4" style="display:flex; justify-content:center; align-items:center;">
                <img src="img/LogoUntar.png" class="w-80" style="width:100%;">
            </div>
            <div class="col-sm-8" style="font-size: 120%;">
                <h3>Universitas Tarumanagara</h3>
                <p style="text-align:justify;">
                    Universitas Tarumanagara merupakan salah satu universitas tertua, terbesar, dan 
                    terbaik di Indonesia, Terakreditasi A oleh BAN-PT dan memiliki 30 Program Studi 
                    terakreditasi nasional dan internasional. Nama universitas ini berasal dari nama 
                    kerajaan Tarumanagara. Universitas ini berdiri pada tanggal 1 Oktober 1959 dengan 
                    ditandai berdirinya "Perguruan Tinggi Ekonomi Tarumanagara" di bawah naungan 
                    "Yayasan Tarumanagara" yang berdiri pada tanggal 18 Juni 1959 dan terletak di jalan 
                    Letjen S. Parman No. 1, 11440, Jakarta Barat, DKI Jakarta, Indonesia.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5" style="height: 47px;">
        
    </div>
    <style>
        .bgg{
            background-image: url(img/bghome.jpeg);
            background-size: contain;
            height: 500px;
            width: 100%;
        }
    </style>

@endsection