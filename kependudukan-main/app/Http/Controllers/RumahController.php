<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    public function index()
    {
        // Mengambil data dengan pagination
        $rumahs = Rumah::paginate(10); // 10 item per halaman
        return view('rumah.index', compact('rumahs'));
    }

    public function create()
    {
        return view('rumah.create'); // Halaman untuk menambah rumah
    }

    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $rumah = new Rumah();
        $rumah->alamat = $request->alamat;

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto');
            $rumah->foto = basename($fotoPath);
        }

        $rumah->save();

        return redirect()->route('rumah.index')->with('pesan', 'Rumah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $rumah = Rumah::findOrFail($id);
        return view('rumah.edit', compact('rumah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $rumah = Rumah::findOrFail($id);
        $rumah->alamat = $request->alamat;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($rumah->foto) {
                \Storage::delete('public/foto/' . $rumah->foto);
            }

            $fotoPath = $request->file('foto')->store('public/foto');
            $rumah->foto = basename($fotoPath);
        }

        $rumah->save();

        return redirect()->route('rumah.index')->with('pesan', 'Rumah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $rumah = Rumah::findOrFail($id);

        // Hapus foto jika ada
        if ($rumah->foto) {
            \Storage::delete('public/foto/' . $rumah->foto);
        }

        $rumah->delete();

        return redirect()->route('rumah.index')->with('pesan', 'Rumah berhasil dihapus!');
    }
}
