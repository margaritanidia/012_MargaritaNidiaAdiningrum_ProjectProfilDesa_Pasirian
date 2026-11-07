<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data UMKM') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Nama Produk / Potensi</label>
                            <input type="text" name="nama_produk" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required placeholder="Contoh: Keripik Pisang Semeru">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select name="kategori" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Agrikultur">Agrikultur</option>
                                <option value="Kerajinan Tangan">Kerajinan Tangan</option>
                                <option value="Kuliner Lokal">Kuliner Lokal</option>
                                <option value="Pariwisata">Pariwisata</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat</label>
                            <!-- Tambahan class 'editor-teks' dan penghapusan atribut 'required' di sini -->
                            <textarea name="deskripsi" rows="4" class="editor-teks mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ceritakan singkat tentang produk ini..."></textarea>
                        </div>

                        <div class="mb-4 mt-6">
                            <label class="block text-sm font-medium text-gray-700">Upload Gambar Produk</label>
                            <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" required>
                        </div>

                        <div class="flex items-center gap-4 mt-8">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-semibold transition">
                                Simpan Data
                            </button>
                            <a href="{{ route('umkm.index') }}" class="text-gray-600 hover:underline">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>