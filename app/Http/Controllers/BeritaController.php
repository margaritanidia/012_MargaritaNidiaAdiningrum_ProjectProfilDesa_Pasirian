<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage; // Tambahan untuk memanipulasi file foto

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get(); 
        return view('berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('berita_images', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('berita.index');
    }

    public function show(string $id)
    {
        // Kosongkan saja
    }

    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        // Jika ada upload foto baru, hapus foto lama lalu simpan yang baru
        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $berita->gambar = $request->file('gambar')->store('berita_images', 'public');
        }

        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
        $berita->save();

        return redirect()->route('berita.index');
    }

    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hapus fisik foto dari folder project
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }
        
        // Hapus data dari database
        $berita->delete();

        return redirect()->route('berita.index');
    }
}