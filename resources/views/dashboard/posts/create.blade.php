@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Judul Iklan</label>
                <input type="text" class="form-control" placeholder="Ini Judul Iklan Keren" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="ini-judul-iklan-keren" name="slug" value="{{ old('slug') }}" required>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <label for="category" class="form-label">Kategori Iklan</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if(old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto Properti</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('slug') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <label for="daerah" class="form-label">Daerah Properti</label>
                <input type="text" class="form-control @error('daerah') is-invalid @enderror" id="daerah" placeholder="Pantai Indah Kapuk" name="daerah" id="daerah" value="{{ old('daerah') }}" required>
                @error('daerah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <label for="area" class="form-label">Area Properti</label>
                <select class="form-select" name="area">
                    <option value="Jakarta Barat">Jakarta Barat</option>
                    <option value="Jakarta Timur">Jakarta Timur</option>
                    <option value="Jakarta Utara">Jakarta Utara</option>
                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                </select>
            </div>

            <div class="mt-3">
                <label for="harga" class="form-label">Harga</label>
                <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" placeholder="27000000000" name="harga" id="harga" value="{{ old('harga') }}" required/>
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            
            <div class="row">
                <div class="mt-3 col">
                    <label for="luastanah" class="form-label">Luas Tanah</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('luastanah') is-invalid @enderror" placeholder="100" name="luastanah" id="luastanah" value="{{ old('luastanah') }}" required/>
                        <span class="input-group-text">m<sup>2</sup></span>
                        @error('luastanah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-3 col">
                    <label for="luasbangunan" class="form-label">Luas Bangunan</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('luasbangunan') is-invalid @enderror" placeholder="170" name="luasbangunan" id="luasbangunan" value="{{ old('luasbangunan') }}" required/>
                        <span class="input-group-text">m<sup>2</sup></span>
                        @error('luasbangunan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="mt-3 col">
                    <label for="jktidur" class="form-label">Kamar Tidur</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('jktidur') is-invalid @enderror" placeholder="3" name="jktidur" id="jktidur" value="{{ old('jktidur') }}" required/>
                        @error('jktidur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-3 col">
                    <label for="jkmandi" class="form-label">Kamar Mandi</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('jkmandi') is-invalid @enderror" placeholder="2" name="jkmandi" id="jkmandi" value="{{ old('jkmandi') }}" required/>
                        @error('jkmandi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mt-3 col">
                    <label for="jlantai" class="form-label">Jumlah Lantai</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('jlantai') is-invalid @enderror" placeholder="3" name="jlantai" id="jlantai" value="{{ old('jlantai') }}" required/>
                        @error('jlantai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-3 col">
                    <label for="hadap" class="form-label">Hadap</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="isi - kalau tidak tau" name="hadap" id="hadap" value="{{ old('hadap') }}"/>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="mt-3 col">
                    <label for="jcarport" class="form-label">Carport</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('jcarport') is-invalid @enderror" placeholder="2" name="jcarport" id="jcarport" value="{{ old('jcarport') }}" required/>
                        @error('jcarport')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-3 col">
                    <label for="jgarasi" class="form-label">Garasi</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('jgarasi') is-invalid @enderror" placeholder="0" name="jgarasi" id="jgarasi" value="{{ old('jgarasi') }}" required/>
                        @error('jgarasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="mb-3 mt-3">
                <label for="sertifikat" class="form-label">Sertifikat</label>
                <select class="form-select" name="sertifikat" id="sertifikat">
                    <option value="SHM">SHM</option>
                    <option value="SHGB">SHGB</option>
                    <option value="Girik">Girik</option>
                </select>
            </div>
    
            <div class="mb-3 mt-3">
                <label for="deskripsi" class="form-label">Deskripsi</label> 
                <input id="deskripsi" type="hidden" class="@error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}" required>
                <trix-editor input="deskripsi"></trix-editor>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-outline-dark mt-3 mb-5">Create Post</button>
        </form>
    </div>
    
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        

    </script>
    
@endsection