@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Rumah</h1>

    <form action="{{ route('rumah.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection