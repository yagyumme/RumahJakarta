@extends('dashboard.layouts.main')

@section('container')

<div class="container-fluid mt-4">
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image ) }}" alt="" width="600px" class="img-thumbnail mb-1" style="margin: 0 auto;">
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" width="600px" class="img-thumbnail mb-1" style="margin: 0 auto;">
    @endif
    <div class="ms-2 mb-4">
        <h4 class="mt-2">Rumah Murah di Utan Kayu Matraman Jakarta Timur</h4>
        <h6>{{ $post->daerah }}, {{ $post->area }}</h6>
    </div>
    <div class="col-lg-7 mb-2">
        <div class="card border-0 rounded shadow text-decoration-none" style="border-color: black">
            <div class="card-body">
                <h5>Harga Properti : {{ $post->harga }}</h5>
                <h6>By : {{ $post->user->name }}, Telp : {{ $post->user->pnumber }}</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-7 mb-2">
        <div class="card border-0 rounded shadow text-decoration-none" style="border-color: black">
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Luas Tanah : <br> {{ $post->luastanah }}m<sup>2</sup></td>
                            <td>Luas Bangunan : <br> {{ $post->luasbangunan }}m<sup>2</sup></td>
                        </tr>
                        <tr>
                            <td>Kamar Tidur : <br> {{ $post->jktidur }}</td>
                            <td>Kamar Mandi : <br> {{ $post->jkmandi }}</td>
                        </tr>
                        <tr>
                            <td>Sertifikat : <br> {{ $post->sertifikat }}</td>
                            <td>Jumlah Lantai : <br> {{ $post->jlantai }}</td>
                        </tr>
                        <tr>
                            <td>Carport : <br> {{ $post->jcarport }}</td>
                            <td>Garasi : <br> {{ $post->jgarasi }}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="col-lg-7 mb-3">
        <div class="card border-0 rounded shadow text-decoration-none" style="border-color: black">
            <div class="card-body">
                <h6>Deskripsi :</h6>
                <p>{!! $post->deskripsi !!}</p>
            </div>
        </div>
    </div>

    <h5 class="mb-5"><a href="/dashboard/posts" >Back to My Posts</a></h5>
</div>

    {{-- <div class="container mt-3 mb-3">
        <h1 class="mb-2">{{ $post->title }}</h1>
        <p>By Yagyu Munenori , Tipe Iklan : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p><br>
        <p>{{ $post->image }}</p>
        <p>{{ $post->category->name }}</p>
        <p>{{ $post->harga }}</p>
        <p>{{ $post->area }}</p>
        <p>{{ $post->daerah }}</p>
        <p>{{ $post->luastanah }}</p>
        <p>{{ $post->luasbangunan }}</p>
        <p>{{ $post->jktidur }}</p>
        <p>{{ $post->jkmandi }}</p>
        <p>{{ $post->sertifikat }}</p>
        <p>{{ $post->jlantai }}</p>
        <p>{{ $post->jcarport }}</p>
        <p>{{ $post->jgarasi }}</p>
        <p>{{ $post->hadap }}</p>
        <p>{!! $post->deskripsi !!}</p>
        <p>{{ $post->user->name }}</p>
    </div> --}}
@endsection