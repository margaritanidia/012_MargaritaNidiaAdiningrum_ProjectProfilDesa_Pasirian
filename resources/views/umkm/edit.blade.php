<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data UMKM') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Nama Produk / Potensi</label>
                            <input type="text" name="nama_produk" value="{{ $umkm->nama_produk }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select name="kategori" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="Agrikultur" {{ $umkm->kategori == 'Agrikultur' ? 'selected' : '' }}>Agrikultur</option>
                                <option value="Kerajinan Tangan" {{ $umkm->kategori == 'Kerajinan Tangan' ? 'selected' : '' }}>Kerajinan Tangan</option>
                                <option value="Kuliner Lokal" {{ $umkm->kategori == 'Kuliner Lokal' ? 'selected' : '' }}>Kuliner Lokal</option>
                                <option value="Pariwisata" {{ $umkm->kategori == 'Pariwisata' ? 'selected' : '' }}>Pariwisata</option>
                                <option value="Lainnya" {{ $umkm->kategori == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Deskripsi Singkat</label>
                            <textarea name="deskripsi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ $umkm->deskripsi }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar (Kosongkan jika tidak diubah)</label>
                            @if($umkm->gambar)
                                <img src="{{ asset('storage/' . $umkm->gambar) }}" alt="Foto Lama" class="w-32 h-20 object-cover rounded mb-2 border">
                            @endif
                            <input type="file" name="gambar" class="block w-full" accept="image/*">
                        </div>

                        <div class="flex items-center gap-4 mt-6">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-semibold">
                                Simpan Perubahan
                            </button>
                            <a href="{{ route('umkm.index') }}" class="text-gray-600 hover:underline">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>