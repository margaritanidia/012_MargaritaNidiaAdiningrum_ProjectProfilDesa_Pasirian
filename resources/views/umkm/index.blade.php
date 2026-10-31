<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola UMKM & Potensi Desa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('umkm.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-semibold">
                    + Tambah Data UMKM
                </a>
            </div>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 border-b border-gray-200">
                                <th class="p-3">No</th>
                                <th class="p-3">Gambar</th>
                                <th class="p-3">Nama Produk</th>
                                <th class="p-3">Kategori</th>
                                <th class="p-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($umkms as $item)
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-3">{{ $loop->iteration }}</td>
                                    <td class="p-3">
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" class="w-24 h-16 object-cover rounded">
                                        @else
                                            <span class="text-gray-400 italic">Tanpa gambar</span>
                                        @endif
                                    </td>
                                    <td class="p-3 font-bold">{{ $item->nama_produk }}</td>
                                    <td class="p-3">
                                        <span class="bg-teal-100 text-teal-800 text-xs px-2 py-1 rounded-full">{{ $item->kategori }}</span>
                                    </td>
                                    <td class="p-3">
                                        <a href="{{ route('umkm.edit', $item->id) }}" class="text-yellow-600 hover:underline mr-3 font-medium">Edit</a>
                                        <form action="{{ route('umkm.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus data UMKM ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline font-medium">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-6 text-center text-gray-500">Belum ada data UMKM.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>