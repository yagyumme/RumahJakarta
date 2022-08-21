@extends('layouts.main')

@section('container')

<div class="mb-3">
    @include('partials.search')
</div>

<h1 class="mb-5" style="text-align: center;">All Posts</h1>

    <div>{{-- disini --}}</div>
    
    <div class="card mb-3" style="width: 75% ; margin: 0 auto; border-color: black;">
        <div class="card-body">
            <div class="row">
                <h3 style="text-align: center;" id="tesrekomendasi"></h3>
                <div class="col-sm-6">
                    <img src="https://source.unsplash.com/1200x400?zasdada" width="300px" alt="" class="img-thumbnail mb-1" style="margin: 0 auto; height: 300px;">
                </div>
                
                <div class="col-sm-6">
                    <h4 class="mb-3"><a {{-- href="/posts/{{ $post->slug }}" --}} id="testtitle"></a></h4>
                    <h6> 
                        {{-- By: {{ $post->user->name }}, Kategori Iklan: {{ $post->category->name }} <br> --}}
                        <h6 id="testdaeare"></h6>
                    <b><h6 id="testharga"></h6></b> 
                    </h6>
                    
                    <table class="table table-borderless col-sm-6">
                        <tr>
                            {{-- <td class="col-sm-4">Luas Tanah</td>
                            <td class="col-sm-1">:</td> --}}
                            <td id="testlt"></td>
                        </tr>
                        <tr>
                            {{-- <td>Luas Bangunan</td>
                            <td>:</td> --}}
                            <td id="testlb"></td>
                        </tr>
                        <tr>
                            {{-- <td>Kamar Tidur</td>
                            <td>:</td> --}}
                            <td id="testjktidur"></td>
                        </tr>
                        <tr>
                            {{-- <td>Kamar Mandi</td>
                            <td>:</td> --}}
                            <td id="testjkmandi"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="card mb-3" style="width: 75% ; margin: 0 auto; border-color: black;">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image ) }}" width="300px" alt="" class="img-thumbnail mb-1" style="margin: 0 auto; height: 300px;">
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" width="300px" alt="" class="img-thumbnail mb-1" style="margin: 0 auto; height: 300px;">
                    @endif
                </div>
                
                <div class="col-sm-6">
                    <h4 class="mb-3"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
                    <h6> 
                        By: {{ $post->user->name }}, Kategori Iklan: {{ $post->category->name }} <br>
                        {{ $post->daerah }}, {{ $post->area }} <br>
                    <b>Rp. {{ $post->harga }}</b> 
                    </h6>
                    
                    <table class="table table-borderless col-sm-6">
                        <tr>
                            <td class="col-sm-4">Luas Tanah</td>
                            <td class="col-sm-1">:</td>
                            <td>{{ $post->luastanah }}</td>
                        </tr>
                        <tr>
                            <td>Luas Bangunan</td>
                            <td>:</td>
                            <td>{{ $post->luasbangunan }}</td>
                        </tr>
                        <tr>
                            <td>Kamar Tidur</td>
                            <td>:</td>
                            <td>{{ $post->jktidur }}</td>
                        </tr>
                        <tr>
                            <td>Kamar Mandi</td>
                            <td>:</td>
                            <td>{{ $post->jkmandi }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>{{-- ini looping yang manggil datanya --}}
    @endforeach

    <div class="container">{{ $posts->links() }}</div>
    <div class="mt-5 mb-5" style="height: 47px;"></div>
@endsection

