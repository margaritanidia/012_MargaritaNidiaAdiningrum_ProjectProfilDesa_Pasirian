@extends('layouts.frontend')

@section('content')
    <div class="pt-24 pb-16 bg-teal-800 text-white text-center">
        <h1 class="text-4xl font-extrabold">Pemerintahan Desa</h1>
        <p class="mt-4 text-lg text-teal-100">Struktur Organisasi dan Aparatur Desa Pasirian</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8 text-center">
        <!-- Level 1: Kepala Desa -->
        <div class="flex justify-center mb-12">
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 w-72 relative mt-12">
                <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 w-24 h-24 bg-white rounded-full p-1 shadow-md">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Kepala Desa" class="w-full h-full object-cover rounded-full border-4 border-teal-100">
                </div>
                <div class="mt-10">
                    <h3 class="text-lg font-bold text-gray-900">Bpk. Sugeng, S.E.</h3>
                    <p class="text-teal-600 font-semibold text-sm mb-3">Kepala Desa Pasirian</p>
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-bold px-3 py-1 rounded-full">Masa Bakti: 2022 - 2028</span>
                </div>
            </div>
        </div>

        <!-- Garis Penghubung (Visual) -->
        <div class="hidden md:block w-full h-8 border-t-2 border-l-2 border-r-2 border-gray-300 max-w-4xl mx-auto -mt-8 mb-8 rounded-t-lg"></div>

        <!-- Level 2: Perangkat Desa -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 overflow-hidden border-2 border-teal-50">
                    <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Sekretaris" class="w-full h-full object-cover">
                </div>
                <h3 class="text-md font-bold text-gray-900">Ahmad Fauzi</h3>
                <p class="text-teal-600 text-sm font-medium">Sekretaris Desa</p>
            </div>
            
            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 overflow-hidden border-2 border-teal-50">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Keuangan" class="w-full h-full object-cover">
                </div>
                <h3 class="text-md font-bold text-gray-900">Siti Aminah</h3>
                <p class="text-teal-600 text-sm font-medium">Kaur Keuangan</p>
            </div>
            
            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 overflow-hidden border-2 border-teal-50">
                    <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="Pemerintahan" class="w-full h-full object-cover">
                </div>
                <h3 class="text-md font-bold text-gray-900">Budi Santoso</h3>
                <p class="text-teal-600 text-sm font-medium">Kasi Pemerintahan</p>
            </div>
            
            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 overflow-hidden border-2 border-teal-50">
                    <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Kesejahteraan" class="w-full h-full object-cover">
                </div>
                <h3 class="text-md font-bold text-gray-900">Ratna Dewi</h3>
                <p class="text-teal-600 text-sm font-medium">Kasi Kesejahteraan</p>
            </div>
        </div>
    </div>
@endsection