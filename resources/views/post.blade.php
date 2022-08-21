@extends('layouts.main')

@section('container')
<div class="container">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="ms-2 mb-4">
                    <h4 class="mt-2">Rumah Murah di Utan Kayu Matraman Jakarta Timur</h4>
                    <h6>{{ $post->daerah }}, {{ $post->area }}</h6>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-2">
                    <div class="card border-0 rounded shadow text-decoration-none" style="border-color: black">
                        <div class="card-body">
                            <h5>Harga Properti : {{ $post->harga }}</h5>
                            <h6>By : {{ $post->user->name }}, Telp : {{ $post->user->pnumber }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-6">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image ) }}" alt="" width="600px" class="img-thumbnail mb-1" style="margin: 0 auto; max-height: 355px;">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" width="600px" class="img-thumbnail mb-1" style="margin: 0 auto;">
                @endif
            </div>
            <div class="col-sm-6">
                <div class="mb-2">
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
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-12 mb-3">
            <div class="card border-0 rounded shadow text-decoration-none" style="border-color: black">
                <div class="card-body">
                    <h6>Deskripsi :</h6>
                    <p>{!! $post->deskripsi !!}</p>
                </div>
            </div>
        </div>
    
        <a href="/posts">Back to Posts</a>
    </div>
</div>

<div class="mt-5 mb-5" style="height: 47px;"></div>
@endsection

