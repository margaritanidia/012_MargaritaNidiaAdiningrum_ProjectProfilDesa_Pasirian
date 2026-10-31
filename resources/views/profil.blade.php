@extends('layouts.frontend')

@section('content')
    <div class="pt-24 pb-16 bg-teal-800 text-white text-center">
        <h1 class="text-4xl font-extrabold">Profil Desa Pasirian</h1>
        <p class="mt-4 text-lg text-teal-100">Sejarah, Visi Misi, dan Geografis</p>
    </div>

    <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Sejarah Singkat</h2>
            <p class="text-gray-700 leading-relaxed mb-8">
                Desa Pasirian memiliki sejarah panjang yang erat kaitannya dengan lereng Gunung Semeru. Sejak zaman kolonial, wilayah ini dikenal sebagai pusat agraris yang subur dan masyarakat yang menjunjung tinggi semangat gotong royong. Kini, Pasirian terus berkembang menjadi desa mandiri yang memadukan kelestarian alam dan kemajuan teknologi.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">Visi & Misi</h2>
            <div class="bg-teal-50 p-6 rounded-lg mb-8 border-l-4 border-teal-600">
                <h3 class="font-bold text-teal-900 mb-2">Visi:</h3>
                <p class="text-gray-700 italic mb-4">"Terwujudnya Desa Pasirian yang Mandiri, Sejahtera, Berdaya Saing Tinggi, Berbasis Agrowisata dan Teknologi Digital."</p>
                <h3 class="font-bold text-teal-900 mb-2">Misi:</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Meningkatkan kesejahteraan melalui pengembangan UMKM.</li>
                    <li>Mewujudkan tata kelola pemerintahan yang transparan.</li>
                    <li>Membangun infrastruktur desa yang berkelanjutan.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection