@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Rumah</h1>
    <a href="{{ route('rumah.create') }}" class="btn btn-primary mb-3">Tambah Rumah</a>

    @if(session()->has('pesan'))
        <div class="alert alert-success">
            {{ session()->get('pesan') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rumahs as $rumah)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rumah->alamat }}</td>
                        <td>
                            @if($rumah->foto)
                                <img src="{{ asset('storage/' . $rumah->foto) }}" alt="Foto Rumah" width="100">
                            @else
                                Tidak ada foto
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('rumah.edit', $rumah->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('rumah.destroy', $rumah->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $rumahs->links() }}
    </div>
</div>
@endsection