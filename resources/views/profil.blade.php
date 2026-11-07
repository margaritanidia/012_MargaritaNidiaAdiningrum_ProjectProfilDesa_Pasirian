@extends('layouts.frontend')

@section('content')
    <!-- ============================================== -->
    <!-- 1. HERO BANNER + BADGE PRESTASI (TETAP SEPERTI AWAL) -->
    <!-- ============================================== -->
    <div class="relative bg-teal-950 text-white py-14 md:py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-25">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=1600" 
                 alt="Panorama Semeru Pasirian" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/80 to-transparent"></div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/20 via-amber-400/30 to-amber-500/20 text-amber-300 border border-amber-400/40 px-4 py-1.5 rounded-full text-xs font-bold mb-4 shadow-lg backdrop-blur-md">
                <span>🏆</span>
                <span>STATUS: DESA MANDIRI (IDM KEMENDES 2026)</span>
            </div>

            <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                Profil Desa Pasirian
            </h1>
            <p class="mt-2 text-xs sm:text-sm text-teal-200/90 max-w-xl mx-auto font-light">
                Kecamatan Pasirian, Kabupaten Lumajang, Jawa Timur
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-4xl mx-auto mt-8">
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">14.25</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">km² Luas Wilayah</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">4.852</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">Jiwa Penduduk</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">320</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">mdpl Ketinggian</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">4</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">Dusun Wilayah</span>
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-2 mt-6">
                <a href="#sejarah" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    📜 Sejarah
                </a>
                <a href="#visimisi" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    🎯 Visi & Misi
                </a>
                <a href="#dusun" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    🏘️ 4 Dusun
                </a>
                <a href="#geografis" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    🗺️ Peta Wilayah
                </a>
                <a href="#demografi" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    📊 Grafik Warga
                </a>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- 2. SEJARAH: BAGIAN YANG DI-SCREENSHOT DIPERBAIKI (INFORMATIF & RAPI) -->
    <!-- ============================================================== -->
    <section id="sejarah" class="py-14 bg-white border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-10">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1.5 rounded-md border border-teal-100">
                    Napak Tilas & Sejarah
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                    Jejak Lahir & Asal Usul Desa Pasirian
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1 max-w-xl mx-auto">
                    Kilas balik sejarah terbentuknya wilayah dari zaman perintis lereng Semeru hingga menjadi desa mandiri.
                </p>
            </div>

            <!-- Layout 2 Kolom Informatif (Foto Jelas + Narasi Utuh) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-gray-50/70 p-6 sm:p-8 rounded-3xl border border-gray-200">
                
                <!-- Foto Sejarah Jelas dengan Frame Rapi (5 cols) -->
                <div class="lg:col-span-5 relative">
                    <div class="relative h-80 rounded-2xl overflow-hidden shadow-md border-4 border-white">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=800" 
                             alt="Tanah Subur Pasirian Lereng Semeru" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/90 via-transparent to-transparent flex flex-col justify-end p-4 text-white">
                            <span class="text-amber-300 text-xs font-bold uppercase tracking-wider">Lembah Semeru</span>
                            <p class="text-[11px] text-teal-100">Endapan vulkanik subur yang menjadi awal mula pemukiman warga Pasirian.</p>
                        </div>
                    </div>
                </div>

                <!-- Teks Narasi Sejarah Lengkap & Informatif (7 cols) -->
                <div class="lg:col-span-7 space-y-3.5">
                    <div class="inline-block bg-teal-100 text-teal-800 text-xs font-bold px-3 py-1 rounded-md">
                        Etimologi Nama
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 leading-snug">
                        Dari Sebutan "Tanah Pasiran" Menuju Desa Pasirian
                    </h3>
                    
                    <div class="text-xs sm:text-sm text-gray-600 leading-relaxed space-y-3">
                        <p>
                            Nama <strong>Pasirian</strong> berakar dari fenomena alam vulkanis lereng Gunung Semeru. Pada abad ke-19, wilayah ini merupakan lembah aliran sungai purba yang mengendapkan pasir vulkanik dan abu kaya mineral hasil erupsi Semeru. Tanah yang sangat subur ini menarik minat para petani perintis, yang kemudian menyebut wilayah singgah ini sebagai <em>"Tanah Pasiran"</em> (daerah berpasir subur), yang lambat laun dikenal dengan nama <strong>Pasirian</strong>.
                        </p>
                        <p>
                            Sejak era pra-kemerdekaan, masyarakat Pasirian hidup dengan mengandalkan agrikultur pangan dan perkebunan rakyat. Dengan mengedepankan nilai gotong royong (tradisi <em>sambatan</em>), warga bahu-membahu membangun saluran irigasi sawah tradisional dan membuka jalur perdagangan hasil bumi ke berbagai penjuru Lumajang.
                        </p>
                        <p>
                            Kini, Desa Pasirian terus berkembang pesat menjadi desa agraris mandiri berdaya saing tinggi yang memadukan kearifan budaya leluhur dengan kemajuan sistem pelayanan publik digital terpadu.
                        </p>
                    </div>

                    <!-- 3 Poin Fakta Historis -->
                    <div class="grid grid-cols-3 gap-2.5 pt-4 border-t border-gray-200 text-center">
                        <div class="bg-white p-2.5 rounded-xl border border-gray-200">
                            <span class="text-[10px] text-gray-400 block font-semibold">Tahun Rintisan</span>
                            <span class="text-xs font-black text-teal-900">Abad Ke-19</span>
                        </div>
                        <div class="bg-white p-2.5 rounded-xl border border-gray-200">
                            <span class="text-[10px] text-gray-400 block font-semibold">Komoditas Pokok</span>
                            <span class="text-xs font-black text-teal-900">Padi & Pisang</span>
                        </div>
                        <div class="bg-white p-2.5 rounded-xl border border-gray-200">
                            <span class="text-[10px] text-gray-400 block font-semibold">Budaya Kerja</span>
                            <span class="text-xs font-black text-teal-900">Gotong Royong</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- 3. VISI & MISI: BAGIAN SCREENSHOT YANG DI-UPGRADE JADI BERWIBAWA -->
    <!-- ============================================================== -->
    <section id="visimisi" class="py-14 bg-gray-50/70 border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-10">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-100/70 px-3 py-1 rounded-md">
                    Pedoman Arah
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                    Visi & Misi Pembangunan Desa
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Dokumen RPJMDes Periode 2022 — 2028 Pemerintah Desa Pasirian.</p>
            </div>

            <!-- Banner Visi yang Berwibawa -->
            <div class="bg-gradient-to-r from-teal-950 via-teal-900 to-teal-900 text-white rounded-3xl p-6 sm:p-8 shadow-sm border border-teal-800 mb-6 relative overflow-hidden">
                <span class="text-amber-400 font-extrabold uppercase tracking-widest text-[11px] block mb-2">
                    VISI UTAMA KEPALA DESA
                </span>
                <blockquote class="text-base sm:text-xl md:text-2xl font-bold leading-relaxed text-teal-50 italic">
                    “Terwujudnya Desa Pasirian yang Mandiri, Sejahtera, Berdaya Saing Tinggi, Berbasis Agrowisata dan Teknologi Digital Berlandaskan Gotong Royong.”
                </blockquote>
            </div>

            <!-- 4 Misi dengan Penjelasan Program Nyata (Bukan Cuma Judul Mini) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm flex items-start gap-4 hover:border-teal-300 transition">
                    <span class="w-9 h-9 rounded-xl bg-teal-100 text-teal-900 font-black text-sm flex items-center justify-center flex-shrink-0">
                        01
                    </span>
                    <div>
                        <h4 class="font-bold text-sm text-gray-900 mb-1">Pemberdayaan Ekonomi & UMKM Agrowisata</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Meningkatkan taraf hidup petani organik, mendukung pengrajin anyaman bambu, serta membuka akses promosi dan pasar digital bagi produk olahan keripik pisang lokal.
                        </p>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm flex items-start gap-4 hover:border-teal-300 transition">
                    <span class="w-9 h-9 rounded-xl bg-teal-100 text-teal-900 font-black text-sm flex items-center justify-center flex-shrink-0">
                        02
                    </span>
                    <div>
                        <h4 class="font-bold text-sm text-gray-900 mb-1">Pelayanan Birokrasi & Administrasi Digital</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Mewujudkan tata kelola desa yang transparan, bebas pungli, cepat, dan akuntabel melalui pemanfaatan sistem informasi surat daring dan publikasi APBDes terbuka.
                        </p>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm flex items-start gap-4 hover:border-teal-300 transition">
                    <span class="w-9 h-9 rounded-xl bg-teal-100 text-teal-900 font-black text-sm flex items-center justify-center flex-shrink-0">
                        03
                    </span>
                    <div>
                        <h4 class="font-bold text-sm text-gray-900 mb-1">Pemerataan Infrastruktur Publik Berkelanjutan</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Membangun sarana jalan usaha tani, jaringan irigasi persawahan, drainase pemukiman, dan penerangan jalan umum di seluruh pelosok dusun secara merata.
                        </p>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm flex items-start gap-4 hover:border-teal-300 transition">
                    <span class="w-9 h-9 rounded-xl bg-teal-100 text-teal-900 font-black text-sm flex items-center justify-center flex-shrink-0">
                        04
                    </span>
                    <div>
                        <h4 class="font-bold text-sm text-gray-900 mb-1">Pelestarian Lingkungan & Kesejahteraan Warga</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Menjaga kelestarian mata air lereng Semeru, pencegahan stunting balita melalui posyandu terpadu, dan pembinaan generasi muda sadar budaya gotong royong.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 4. 4 DUSUN BERFOTO (TETAP SEPERTI AWAL) -->
    <!-- ============================================== -->
    <section id="dusun" class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-8 gap-3">
                <div>
                    <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1 rounded-md border border-teal-100">
                        Wilayah Dusun
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                        Potret 4 Wilayah Dusun Pasirian
                    </h2>
                </div>
                <span class="text-xs font-bold text-teal-800 bg-teal-100/70 px-3 py-1.5 rounded-lg">
                    Total: 18 RW / 52 RT
                </span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <!-- Dusun 1 -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition group">
                    <div class="h-36 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&q=80&w=400" 
                             alt="Dusun Krajan" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute top-2 left-2 bg-teal-900/90 text-white text-[10px] font-bold px-2 py-0.5 rounded backdrop-blur-sm">
                            Pusat Desa
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-sm text-gray-900">Dusun Krajan</h3>
                        <p class="text-[11px] text-gray-500 mt-0.5">Kasun: Hendra Pratama</p>
                        <div class="mt-3 pt-2.5 border-t border-gray-100 flex items-center justify-between text-xs">
                            <span class="text-gray-500 font-medium">5 RW / 16 RT</span>
                            <span class="font-bold text-teal-800">1.480 Jiwa</span>
                        </div>
                    </div>
                </div>

                <!-- Dusun 2 -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition group">
                    <div class="h-36 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&q=80&w=400" 
                             alt="Dusun Kebonan" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute top-2 left-2 bg-amber-600 text-white text-[10px] font-bold px-2 py-0.5 rounded">
                            Sentra UMKM
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-sm text-gray-900">Dusun Kebonan</h3>
                        <p class="text-[11px] text-gray-500 mt-0.5">Kasun: Bambang Irawan</p>
                        <div class="mt-3 pt-2.5 border-t border-gray-100 flex items-center justify-between text-xs">
                            <span class="text-gray-500 font-medium">4 RW / 12 RT</span>
                            <span class="font-bold text-teal-800">1.150 Jiwa</span>
                        </div>
                    </div>
                </div>

                <!-- Dusun 3 -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition group">
                    <div class="h-36 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=400" 
                             alt="Dusun Sukoasri" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute top-2 left-2 bg-emerald-700 text-white text-[10px] font-bold px-2 py-0.5 rounded">
                            Lumbung Padi
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-sm text-gray-900">Dusun Sukoasri</h3>
                        <p class="text-[11px] text-gray-500 mt-0.5">Kasun: Slamet Riyadi</p>
                        <div class="mt-3 pt-2.5 border-t border-gray-100 flex items-center justify-between text-xs">
                            <span class="text-gray-500 font-medium">5 RW / 14 RT</span>
                            <span class="font-bold text-teal-800">1.210 Jiwa</span>
                        </div>
                    </div>
                </div>

                <!-- Dusun 4 -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition group">
                    <div class="h-36 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?auto=format&fit=crop&q=80&w=400" 
                             alt="Dusun Wanasari" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute top-2 left-2 bg-blue-700 text-white text-[10px] font-bold px-2 py-0.5 rounded">
                            Anyaman Bambu
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-sm text-gray-900">Dusun Wanasari</h3>
                        <p class="text-[11px] text-gray-500 mt-0.5">Kasun: Agus Supriyono</p>
                        <div class="mt-3 pt-2.5 border-t border-gray-100 flex items-center justify-between text-xs">
                            <span class="text-gray-500 font-medium">4 RW / 10 RT</span>
                            <span class="font-bold text-teal-800">1.012 Jiwa</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 5. GEOGRAFIS: PETA DIGITAL + BATAS (TETAP SEPERTI AWAL) -->
    <!-- ============================================== -->
    <section id="geografis" class="py-12 bg-gray-50/80 border-y border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <div class="lg:col-span-7 bg-white p-4 rounded-3xl shadow-sm border border-gray-200">
                    <div class="flex items-center justify-between mb-3 px-1">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-rose-500 animate-ping"></span>
                            <h3 class="font-bold text-xs text-gray-900">Peta Wilayah & Titik Balai Desa</h3>
                        </div>
                        <span class="text-[11px] text-gray-500">Pasirian, Kab. Lumajang</span>
                    </div>

                    <div class="w-full h-72 rounded-2xl overflow-hidden border border-gray-200">
                        <iframe 
                            class="w-full h-full"
                            style="border:0;" 
                            loading="lazy" 
                            allowfullscreen 
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.330920409095!2d113.0901!3d-8.2435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd67ad818f0a6d7%3A0x4027a76e3531b70!2sPasirian%2C%20Kec.%20Pasirian%2C%20Kabupaten%20Lumajang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1700000000000">
                        </iframe>
                    </div>

                    <div class="mt-3 flex items-center justify-between text-xs px-1 text-gray-500">
                        <span>Koordinat: 8°14'36" LS, 113°05'24" BT</span>
                        <a href="https://maps.google.com/?q=Kantor+Desa+Pasirian+Lumajang" target="_blank" class="text-teal-700 font-bold hover:underline">
                            Buka Layar Penuh &rarr;
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-3">
                    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-200">
                        <h3 class="font-bold text-xs uppercase tracking-wider text-teal-800 mb-3 flex items-center gap-2">
                            🧭 Batas Batas Wilayah Desa
                        </h3>
                        <div class="space-y-2 text-xs">
                            <div class="p-2.5 rounded-xl bg-teal-50/50 border border-teal-100 flex justify-between items-center">
                                <span class="font-bold text-teal-950">Utara</span>
                                <span class="text-gray-600 font-medium">Desa Condro & Lereng Semeru</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-teal-50/50 border border-teal-100 flex justify-between items-center">
                                <span class="font-bold text-teal-950">Timur</span>
                                <span class="text-gray-600 font-medium">Desa Nguter</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-teal-50/50 border border-teal-100 flex justify-between items-center">
                                <span class="font-bold text-teal-950">Selatan</span>
                                <span class="text-gray-600 font-medium">Desa Bades & Pesisir Selatan</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-teal-50/50 border border-teal-100 flex justify-between items-center">
                                <span class="font-bold text-teal-950">Barat</span>
                                <span class="text-gray-600 font-medium">Desa Madiredo</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 text-teal-950 p-4 rounded-2xl shadow-sm font-medium text-xs flex items-center gap-3">
                        <span class="text-2xl">🌾</span>
                        <div>
                            <span class="font-black block text-sm">58% Lahan Pertanian Aktif</span>
                            <span class="text-[11px] opacity-90">Didukung 3 saluran irigasi teknis lereng Gunung Semeru.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 6. DEMOGRAFI: GRAFIK DONUT & INFOGRAFIS (TETAP SEPERTI AWAL) -->
    <!-- ============================================== -->
    <section id="demografi" class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-8">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1 rounded-md border border-teal-100">
                    Statistik Visual
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                    Infografis Demografi Penduduk
                </h2>
                <p class="text-xs text-gray-500 mt-1">Data agregat kependudukan terkini per semester berjalan 2026.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Donut Chart Gender -->
                <div class="bg-gray-50 p-6 rounded-3xl border border-gray-200 text-center flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-xs uppercase tracking-wider text-gray-700 mb-4">
                            Perbandingan Gender Warga
                        </h3>
                        
                        <div class="relative w-36 h-36 mx-auto my-2">
                            <svg viewBox="0 0 36 36" class="w-full h-full transform -rotate-90">
                                <circle cx="18" cy="18" r="14" fill="transparent" stroke="#e2e8f0" stroke-width="4"></circle>
                                <circle cx="18" cy="18" r="14" fill="transparent" stroke="#3b82f6" stroke-width="4" stroke-dasharray="43.6 100"></circle>
                                <circle cx="18" cy="18" r="14" fill="transparent" stroke="#f43f5e" stroke-width="4" stroke-dasharray="44.3 100" stroke-dashoffset="-43.6"></circle>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="text-xs text-gray-400 font-semibold">Total</span>
                                <span class="text-sm font-extrabold text-gray-900">4.852</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 mt-4 pt-3 border-t border-gray-200">
                        <div class="bg-blue-50 p-2 rounded-xl text-center">
                            <span class="text-[10px] font-bold text-blue-800 block">👨 Laki-Laki</span>
                            <span class="text-xs font-black text-blue-950">2.410 (49,6%)</span>
                        </div>
                        <div class="bg-rose-50 p-2 rounded-xl text-center">
                            <span class="text-[10px] font-bold text-rose-800 block">👩 Perempuan</span>
                            <span class="text-xs font-black text-rose-950">2.442 (50,4%)</span>
                        </div>
                    </div>
                </div>

                <!-- Profesi Utama -->
                <div class="bg-gray-50 p-6 rounded-3xl border border-gray-200 flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-xs uppercase tracking-wider text-gray-700 mb-4 flex items-center justify-between">
                            <span>Profesi Utama</span>
                            <span class="text-[10px] font-bold text-teal-800 bg-teal-100 px-2 py-0.5 rounded">Agraris</span>
                        </h3>

                        <div class="space-y-3 text-xs">
                            <div class="bg-white p-2.5 rounded-xl border border-gray-200 flex items-center justify-between">
                                <span class="font-semibold text-gray-700 flex items-center gap-2">🌾 Petani & Pekebun</span>
                                <span class="font-black text-teal-900 bg-teal-50 px-2 py-0.5 rounded">48%</span>
                            </div>
                            <div class="bg-white p-2.5 rounded-xl border border-gray-200 flex items-center justify-between">
                                <span class="font-semibold text-gray-700 flex items-center gap-2">🍌 Pelaku UMKM / Niaga</span>
                                <span class="font-black text-teal-900 bg-teal-50 px-2 py-0.5 rounded">24%</span>
                            </div>
                            <div class="bg-white p-2.5 rounded-xl border border-gray-200 flex items-center justify-between">
                                <span class="font-semibold text-gray-700 flex items-center gap-2">🪵 Buruh Tani / Anyaman</span>
                                <span class="font-black text-teal-900 bg-teal-50 px-2 py-0.5 rounded">16%</span>
                            </div>
                            <div class="bg-white p-2.5 rounded-xl border border-gray-200 flex items-center justify-between">
                                <span class="font-semibold text-gray-700 flex items-center gap-2">🏢 ASN / Guru / TNI</span>
                                <span class="font-black text-teal-900 bg-teal-50 px-2 py-0.5 rounded">8%</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-[10px] text-gray-400 text-center mt-3">Mayoritas bermata pencaharian di sektor agrikultur pangan.</p>
                </div>

                <!-- Kelompok Usia -->
                <div class="bg-gray-50 p-6 rounded-3xl border border-gray-200 flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-xs uppercase tracking-wider text-gray-700 mb-4 flex items-center justify-between">
                            <span>Struktur Kelompok Umur</span>
                            <span class="text-[10px] font-bold text-emerald-800 bg-emerald-100 px-2 py-0.5 rounded">Bonus Demografi</span>
                        </h3>

                        <div class="space-y-2.5 text-xs">
                            <div class="bg-emerald-500 text-white p-3 rounded-2xl shadow-sm">
                                <div class="flex justify-between items-center mb-0.5">
                                    <span class="font-bold">Usia Produktif (15 - 64 th)</span>
                                    <span class="text-base font-black">68,4%</span>
                                </div>
                                <span class="text-[10px] text-emerald-100">3.318 Jiwa tenaga kerja aktif</span>
                            </div>

                            <div class="bg-white p-3 rounded-2xl border border-gray-200">
                                <div class="flex justify-between items-center mb-0.5">
                                    <span class="font-semibold text-gray-800">Anak & Remaja (0 - 14 th)</span>
                                    <span class="font-bold text-gray-900">21,8%</span>
                                </div>
                                <span class="text-[10px] text-gray-400">1.058 Jiwa generasi penerus</span>
                            </div>

                            <div class="bg-white p-3 rounded-2xl border border-gray-200">
                                <div class="flex justify-between items-center mb-0.5">
                                    <span class="font-semibold text-gray-800">Lansia (65+ th)</span>
                                    <span class="font-bold text-gray-900">9,8%</span>
                                </div>
                                <span class="text-[10px] text-gray-400">476 Jiwa binaan posyandu lansia</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-[10px] text-gray-400 text-center mt-3">68% warga siap kerja mendukung potensi UMKM desa.</p>
                </div>

            </div>

            <!-- Tombol Bawah -->
            <div class="mt-10 text-center flex flex-wrap justify-center gap-3">
                <a href="/"
                   class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 text-xs font-bold rounded-xl transition shadow-sm">
                    &larr; Kembali ke Beranda
                </a>
                <a href="/#kontak"
                   class="inline-flex items-center gap-2 px-5 py-2.5 bg-teal-800 hover:bg-teal-900 text-white text-xs font-bold rounded-xl transition shadow-sm">
                    Hubungi Petugas Balai Desa &rarr;
                </a>
            </div>

        </div>
    </section>
@endsection