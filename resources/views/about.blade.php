@extends('layouts.mainuser')

@section('container')
    <h1>Halaman About</h1>
    <h3><?php echo $name; ?></h3>
    <p><?= $email; ?></p>
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200" class="img-thumbnail rounded-circle">
@endsection