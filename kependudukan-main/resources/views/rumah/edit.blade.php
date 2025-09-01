@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Rumah</h1>

    <form action="{{ route('rumah.update', $rumah->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $rumah->alamat }}" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" class="form-control">
            @if($rumah->foto)
                <img src="{{ asset('storage/foto/' . $rumah->foto) }}" alt="Foto Rumah" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection