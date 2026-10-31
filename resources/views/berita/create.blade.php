<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Berita Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Judul Berita -->
                        <div class="mb-4">
                            <label for="judul" class="block text-sm font-medium text-gray-700">Judul Berita</label>
                            <input type="text" name="judul" id="judul" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>

                        <!-- Isi Berita -->
                        <div class="mb-4">
                            <label for="konten" class="block text-sm font-medium text-gray-700">Isi Berita</label>
                            <textarea name="konten" id="konten" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
                        </div>

                        <!-- Gambar Berita -->
                        <div class="mb-4">
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar/Foto</label>
                            <input type="file" name="gambar" id="gambar" class="mt-1 block w-full" accept="image/*">
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex items-center gap-4 mt-6">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-semibold">
                                Simpan Berita
                            </button>
                            <a href="{{ route('berita.index') }}" class="text-gray-600 hover:underline">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>