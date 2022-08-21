@extends('layouts.main')

@section('container')

<h1 style="text-align: center;">Post Categories</h1>
<div class="container">
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
</div>
@endsection

