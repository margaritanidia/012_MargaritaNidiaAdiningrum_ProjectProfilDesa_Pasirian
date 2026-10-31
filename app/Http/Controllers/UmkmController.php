<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::latest()->get();
        return view('umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('umkm_images', 'public');
        }

        Umkm::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('umkm.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('umkm.edit', compact('umkm'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $umkm = Umkm::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($umkm->gambar) {
                Storage::disk('public')->delete($umkm->gambar);
            }
            $umkm->gambar = $request->file('gambar')->store('umkm_images', 'public');
        }

        $umkm->nama_produk = $request->nama_produk;
        $umkm->kategori = $request->kategori;
        $umkm->deskripsi = $request->deskripsi;
        $umkm->save();

        return redirect()->route('umkm.index');
    }

    public function destroy(string $id)
    {
        $umkm = Umkm::findOrFail($id);
        
        if ($umkm->gambar) {
            Storage::disk('public')->delete($umkm->gambar);
        }
        
        $umkm->delete();

        return redirect()->route('umkm.index');
    }
}