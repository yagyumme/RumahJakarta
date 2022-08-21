@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
    </div>

    <div class="bgg container-fluid m-0 p-5 row">
        <div class="col-sm-12" style="display:flex; justify-content:center; align-items:center; margin-top: 150px; margin-bottom:50px;">
            <div class="pb-5">
                <h1 class="text-white">Welcome back, {{ auth()->user()->name }}</h1>
            </div>
        </div>
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