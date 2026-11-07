@extends('layouts.frontend')

@section('content')
    <!-- ============================================== -->
    <!-- 1. HERO BANNER PERSIS SEPERTI PROFIL DESA -->
    <!-- ============================================== -->
    <div class="relative bg-teal-950 text-white py-14 md:py-20 overflow-hidden">
        <!-- Panorama Semeru Sama Persis Seperti Halaman Profil -->
        <div class="absolute inset-0 opacity-25">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=1600" 
                 alt="Panorama Semeru Pasirian" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/80 to-transparent"></div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            <!-- Badge Emas (Sama Persis Seperti Profil Desa) -->
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/20 via-amber-400/30 to-amber-500/20 text-amber-300 border border-amber-400/40 px-4 py-1.5 rounded-full text-xs font-bold mb-4 shadow-lg backdrop-blur-md">
                <span>🏛️</span>
                <span>STRUKTUR PEMERINTAHAN & LEMBAGA DESA (2022 - 2028)</span>
            </div>

            <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                Pemerintahan Desa Pasirian
            </h1>
            <p class="mt-2 text-xs sm:text-sm text-teal-200/90 max-w-xl mx-auto font-light">
                Kecamatan Pasirian, Kabupaten Lumajang, Jawa Timur
            </p>

            <!-- 4 Angka Kunci Digital dengan Aksen Kuning Emas (Amber) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-4xl mx-auto mt-8">
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">1</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">Kepala Desa</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">11</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">Perangkat & Staf</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">18</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">Ketua Rukun Warga</span>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-3.5 rounded-2xl border border-white/15">
                    <span class="text-2xl sm:text-3xl font-black text-amber-400">5</span>
                    <span class="text-[11px] text-teal-200 block font-semibold mt-0.5">Lembaga Desa</span>
                </div>
            </div>

            <!-- Tombol Navigasi Selaras (Persis Format Profil Desa) -->
            <div class="flex flex-wrap justify-center gap-2 mt-6">
                <a href="#eksekutif-desa" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition text-white shadow-sm">
                    👔 Aparatur Desa
                </a>
                <a href="#lembaga-bpd" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition text-white shadow-sm">
                    ⚖️ Pengurus BPD
                </a>
                <a href="#ketua-rw" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition text-white shadow-sm">
                    🏘️ 18 Ketua RW
                </a>
                <a href="#lembaga-pkk-posyandu" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition text-white shadow-sm">
                    🌸 PKK & Posyandu
                </a>
                <a href="#lembaga-pemuda-linmas" class="px-3 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-xs font-semibold rounded-lg border border-teal-600 transition text-white shadow-sm">
                    🛡️ Linmas & Karang Taruna
                </a>
            </div>
        </div>
    </div>

    <!-- ============================================== -->
    <!-- 2. KEPALA DESA & PERANGKAT DESA (WARNA TEAL & AMBER SELARAS) -->
    <!-- ============================================== -->
    <section id="eksekutif-desa" class="py-14 bg-white border-b border-gray-100 scroll-mt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-10">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1.5 rounded-md border border-teal-100">
                    Pimpinan Eksekutif
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                    Kepala Desa & Perangkat Desa Pasirian
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1 max-w-xl mx-auto">
                    Unsur pimpinan penyelenggara pemerintahan desa dan koordinator pelayanan masyarakat.
                </p>
            </div>

            <!-- Spotlight Card Kepala Desa (Selaras dengan Card Profil Desa) -->
            <div class="bg-gray-50/80 rounded-3xl p-6 sm:p-8 border border-gray-200 shadow-sm mb-8">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                    
                    <!-- Foto Kades -->
                    <div class="md:col-span-4 relative">
                        <div class="h-64 sm:h-72 rounded-2xl overflow-hidden shadow-md border-4 border-white">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=600" 
                                 alt="Bpk. Sugeng, S.E." 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Keterangan Jabatan & Kutipan -->
                    <div class="md:col-span-8 space-y-3.5">
                        <div class="inline-flex items-center gap-1.5 bg-amber-400 text-teal-950 px-3 py-1 rounded-md text-xs font-black uppercase shadow-sm">
                            <span>⭐</span> KEPALA DESA PASIRIAN
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black text-gray-900">Bpk. Sugeng, S.E.</h3>
                        <p class="text-teal-800 text-xs font-semibold">Masa Bakti: 2022 – 2028</p>
                        
                        <blockquote class="text-xs sm:text-sm text-gray-600 italic leading-relaxed border-l-4 border-amber-400 pl-4 py-1">
                            “Pemerintah Desa Pasirian hadir bukan untuk dilayani, melainkan untuk melayani warga dengan setulus hati. Mari wujudkan desa yang mandiri, sejahtera, dan berdaya saing tinggi berlandaskan gotong royong.”
                        </blockquote>

                        <div class="grid grid-cols-3 gap-2.5 pt-4 border-t border-gray-200 text-center">
                            <div class="bg-white p-2.5 rounded-xl border border-gray-200">
                                <span class="text-[10px] text-gray-400 block font-semibold">Status Jabatan</span>
                                <span class="text-xs font-black text-teal-900">Definitif</span>
                            </div>
                            <div class="bg-white p-2.5 rounded-xl border border-gray-200">
                                <span class="text-[10px] text-gray-400 block font-semibold">Kantor Kerja</span>
                                <span class="text-xs font-black text-teal-900">Balai Desa</span>
                            </div>
                            <div class="bg-white p-2.5 rounded-xl border border-gray-200">
                                <span class="text-[10px] text-gray-400 block font-semibold">Layanan Warga</span>
                                <span class="text-xs font-black text-amber-600">Terbuka & Ramah</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Kartu Perangkat Desa Bersih (Warna Selaras Teal & Abu-abu, Tidak Ada Pastel Aneh) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <!-- Sekdes -->
                <div class="bg-white p-5 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                    <span class="text-[10px] font-bold text-teal-800 bg-teal-50 border border-teal-100 px-2 py-0.5 rounded uppercase">
                        Sekretariat
                    </span>
                    <h4 class="font-bold text-sm text-gray-900 mt-2">Ahmad Fauzi, S.Kom.</h4>
                    <p class="text-teal-700 text-xs font-semibold">Sekretaris Desa</p>
                    <p class="text-[11px] text-gray-500 mt-2 leading-relaxed">
                        Koordinator tata naskah dinas, kepegawaian, dan penyusunan APBDes.
                    </p>
                </div>

                <!-- Kaur Keuangan -->
                <div class="bg-white p-5 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                    <span class="text-[10px] font-bold text-amber-800 bg-amber-50 border border-amber-100 px-2 py-0.5 rounded uppercase">
                        Keuangan
                    </span>
                    <h4 class="font-bold text-sm text-gray-900 mt-2">Siti Aminah, S.Ak.</h4>
                    <p class="text-teal-700 text-xs font-semibold">Kaur Keuangan</p>
                    <p class="text-[11px] text-gray-500 mt-2 leading-relaxed">
                        Penatausahaan kas desa, pembukuan rekening, dan laporan pajak.
                    </p>
                </div>

                <!-- Kasi Pemerintahan -->
                <div class="bg-white p-5 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                    <span class="text-[10px] font-bold text-teal-800 bg-teal-50 border border-teal-100 px-2 py-0.5 rounded uppercase">
                        Pemerintahan
                    </span>
                    <h4 class="font-bold text-sm text-gray-900 mt-2">Budi Santoso, S.Sos.</h4>
                    <p class="text-teal-700 text-xs font-semibold">Kasi Pemerintahan</p>
                    <p class="text-[11px] text-gray-500 mt-2 leading-relaxed">
                        Pengurusan administrasi KTP, KK, surat domisili, dan ketertiban desa.
                    </p>
                </div>

                <!-- Kasi Kesejahteraan -->
                <div class="bg-white p-5 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                    <span class="text-[10px] font-bold text-amber-800 bg-amber-50 border border-amber-100 px-2 py-0.5 rounded uppercase">
                        Kesejahteraan
                    </span>
                    <h4 class="font-bold text-sm text-gray-900 mt-2">Ratna Dewi, S.Pd.</h4>
                    <p class="text-teal-700 text-xs font-semibold">Kasi Kesejahteraan</p>
                    <p class="text-[11px] text-gray-500 mt-2 leading-relaxed">
                        Penyaluran bansos BLT/PKH, kesehatan warga, dan pemberdayaan perempuan.
                    </p>
                </div>

            </div>

            <!-- Staf Lainnya -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-4 text-xs">
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-200">
                    <span class="text-[10px] text-gray-400 block font-semibold">Kaur Tata Usaha</span>
                    <p class="font-bold text-gray-900">Rahmat Hidayat</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-200">
                    <span class="text-[10px] text-gray-400 block font-semibold">Kaur Perencanaan</span>
                    <p class="font-bold text-gray-900">Dewi Lestari, S.P.</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-xl border border-gray-200">
                    <span class="text-[10px] text-gray-400 block font-semibold">Kasi Pelayanan</span>
                    <p class="font-bold text-gray-900">Dimas Prasetya</p>
                </div>
                <div class="p-3 bg-teal-50 rounded-xl border border-teal-200">
                    <span class="text-[10px] text-teal-700 block font-semibold">Koordinator IT Desa</span>
                    <p class="font-bold text-teal-900">Rizki Ramadhan</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================================== -->
    <!-- 3. PILAR KETUA RW PER DUSUN (SELARAS DENGAN PROFIL 4 DUSUN) -->
    <!-- ============================================================== -->
    <section id="ketua-rw" class="py-14 bg-gray-50/80 border-b border-gray-200 scroll-mt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-8 gap-3">
                <div>
                    <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-100/70 px-3 py-1 rounded-md">
                        Pilar Kewilayahan
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                        Forum 18 Ketua Rukun Warga (RW)
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1">
                        Pilih dusun untuk melihat nama ketua RW dan jangkauan wilayah RT-nya.
                    </p>
                </div>
                <span class="text-xs font-bold text-teal-900 bg-teal-100 px-3 py-1.5 rounded-lg border border-teal-200">
                    Total: 18 RW / 52 RT
                </span>
            </div>

            <!-- Tab Switcher Dusun (Warna Teal & Amber Selaras) -->
            <div class="flex flex-wrap gap-2 mb-6" id="dusun-tabs">
                <button type="button" 
                        onclick="switchDusun('krajan')" 
                        id="dusun-btn-krajan"
                        class="dusun-btn px-4 py-2.5 rounded-xl text-xs font-bold transition bg-teal-800 text-white shadow-sm flex items-center gap-2">
                    <span>🌾</span> Dusun Krajan (RW 01 - 05)
                </button>
                <button type="button" 
                        onclick="switchDusun('kebonan')" 
                        id="dusun-btn-kebonan"
                        class="dusun-btn px-4 py-2.5 rounded-xl text-xs font-bold transition bg-white text-gray-700 border border-gray-200 hover:bg-gray-100 flex items-center gap-2">
                    <span>🍌</span> Dusun Kebonan (RW 06 - 09)
                </button>
                <button type="button" 
                        onclick="switchDusun('sukoasri')" 
                        id="dusun-btn-sukoasri"
                        class="dusun-btn px-4 py-2.5 rounded-xl text-xs font-bold transition bg-white text-gray-700 border border-gray-200 hover:bg-gray-100 flex items-center gap-2">
                    <span>🌾</span> Dusun Sukoasri (RW 10 - 14)
                </button>
                <button type="button" 
                        onclick="switchDusun('wanasari')" 
                        id="dusun-btn-wanasari"
                        class="dusun-btn px-4 py-2.5 rounded-xl text-xs font-bold transition bg-white text-gray-700 border border-gray-200 hover:bg-gray-100 flex items-center gap-2">
                    <span>🪵</span> Dusun Wanasari (RW 15 - 18)
                </button>
            </div>

            <!-- DUSUN 1: KRAJAN -->
            <div id="dusun-content-krajan" class="dusun-content space-y-4">
                <div class="bg-white p-4 rounded-2xl border border-teal-200 flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-teal-800 text-white flex items-center justify-center font-bold text-sm">
                            01
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-gray-900">Kepala Dusun Krajan: Bpk. Hendra Pratama</h3>
                            <p class="text-xs text-gray-500">Menaungi 5 Rukun Warga (RW) dan 16 RT • 1.480 Jiwa</p>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-teal-800 bg-teal-50 px-3 py-1 rounded-md border border-teal-100">
                        Pusat Desa
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5">
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-800 text-[10px] font-black px-2 py-0.5 rounded">RW 01</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Subagio</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 01 (RT 01 s/d RT 03)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-800 text-[10px] font-black px-2 py-0.5 rounded">RW 02</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Joko Purnomo</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 02 (RT 04 s/d RT 06)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-800 text-[10px] font-black px-2 py-0.5 rounded">RW 03</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Suparman</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 03 (RT 07 s/d RT 10)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-800 text-[10px] font-black px-2 py-0.5 rounded">RW 04</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Edi Santoso</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 04 (RT 11 s/d RT 13)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-800 text-[10px] font-black px-2 py-0.5 rounded">RW 05</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Bambang Sutrisno</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 05 (RT 14 s/d RT 16)</p>
                    </div>
                </div>
            </div>

            <!-- DUSUN 2: KEBONAN -->
            <div id="dusun-content-kebonan" class="dusun-content hidden space-y-4">
                <div class="bg-white p-4 rounded-2xl border border-amber-200 flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-500 text-teal-950 flex items-center justify-center font-bold text-sm">
                            02
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-gray-900">Kepala Dusun Kebonan: Bpk. Bambang Irawan</h3>
                            <p class="text-xs text-gray-500">Menaungi 4 Rukun Warga (RW) dan 12 RT • 1.150 Jiwa</p>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-amber-800 bg-amber-50 px-3 py-1 rounded-md border border-amber-200">
                        Sentra UMKM
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3.5">
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-amber-300 transition shadow-sm">
                        <span class="bg-amber-100 text-amber-900 text-[10px] font-black px-2 py-0.5 rounded">RW 06</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Kuswanto</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 06 (RT 01 s/d RT 03)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-amber-300 transition shadow-sm">
                        <span class="bg-amber-100 text-amber-900 text-[10px] font-black px-2 py-0.5 rounded">RW 07</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Suwarno</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 07 (RT 04 s/d RT 06)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-amber-300 transition shadow-sm">
                        <span class="bg-amber-100 text-amber-900 text-[10px] font-black px-2 py-0.5 rounded">RW 08</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Misdi</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 08 (RT 07 s/d RT 09)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-amber-300 transition shadow-sm">
                        <span class="bg-amber-100 text-amber-900 text-[10px] font-black px-2 py-0.5 rounded">RW 09</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Yudi Arianto</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 09 (RT 10 s/d RT 12)</p>
                    </div>
                </div>
            </div>

            <!-- DUSUN 3: SUKOASRI -->
            <div id="dusun-content-sukoasri" class="dusun-content hidden space-y-4">
                <div class="bg-white p-4 rounded-2xl border border-emerald-200 flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-teal-800 text-white flex items-center justify-center font-bold text-sm">
                            03
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-gray-900">Kepala Dusun Sukoasri: Bpk. Slamet Riyadi</h3>
                            <p class="text-xs text-gray-500">Menaungi 5 Rukun Warga (RW) dan 14 RT • 1.210 Jiwa</p>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-teal-800 bg-teal-50 px-3 py-1 rounded-md border border-teal-200">
                        Lumbung Padi
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5">
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 10</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Hartono</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 10 (RT 01 s/d RT 03)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 11</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Sunardi</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 11 (RT 04 s/d RT 06)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 12</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Didik Hermawan</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 12 (RT 07 s/d RT 09)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 13</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Mat Ali</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 13 (RT 10 s/d RT 12)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 14</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Samuji</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 14 (RT 13 s/d RT 14)</p>
                    </div>
                </div>
            </div>

            <!-- DUSUN 4: WANASARI -->
            <div id="dusun-content-wanasari" class="dusun-content hidden space-y-4">
                <div class="bg-white p-4 rounded-2xl border border-gray-200 flex items-center justify-between shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-teal-800 text-white flex items-center justify-center font-bold text-sm">
                            04
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-gray-900">Kepala Dusun Wanasari: Bpk. Agus Supriyono</h3>
                            <p class="text-xs text-gray-500">Menaungi 4 Rukun Warga (RW) dan 10 RT • 1.012 Jiwa</p>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-teal-800 bg-teal-50 px-3 py-1 rounded-md border border-teal-100">
                        Anyaman Bambu
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3.5">
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 15</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Sujito</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 15 (RT 01 s/d RT 02)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 16</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Agus Salim</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 16 (RT 03 s/d RT 05)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 17</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Slamet Waluyo</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 17 (RT 06 s/d RT 08)</p>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-gray-200 hover:border-teal-300 transition shadow-sm">
                        <span class="bg-teal-100 text-teal-900 text-[10px] font-black px-2 py-0.5 rounded">RW 18</span>
                        <h4 class="font-bold text-sm text-gray-900 mt-2">Bpk. Suyatno</h4>
                        <p class="text-[11px] text-gray-500">Ketua RW 18 (RT 09 s/d RT 10)</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 4. BADAN PERMUSYAWARATAN DESA (BPD) -->
    <!-- ============================================== -->
    <section id="lembaga-bpd" class="py-14 bg-white border-b border-gray-200 scroll-mt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-10">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1 rounded-md border border-teal-100">
                    Lembaga Legislasi
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                    Badan Permusyawaratan Desa (BPD)
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Parlemen desa penyerap aspirasi warga & pengawas kinerja pemerintahan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                <div class="bg-gradient-to-b from-teal-900 to-teal-950 text-white p-6 rounded-3xl border border-teal-800 shadow-sm text-center">
                    <span class="text-[10px] font-bold text-amber-300 bg-teal-800 px-3 py-1 rounded-full uppercase border border-teal-700">Ketua BPD</span>
                    <h3 class="font-black text-base text-white mt-3">Bpk. H. Sukarno, S.Pd.</h3>
                    <p class="text-teal-200 text-xs mt-0.5">Penanggung Jawab Lembaga</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-3xl border border-gray-200 text-center">
                    <span class="text-[10px] font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase">Wakil Ketua</span>
                    <h3 class="font-bold text-base text-gray-900 mt-3">Bpk. Drs. Mulyono</h3>
                    <p class="text-gray-500 text-xs mt-0.5">Bidang Regulasi Perdes</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-3xl border border-gray-200 text-center">
                    <span class="text-[10px] font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase">Sekretaris BPD</span>
                    <h3 class="font-bold text-base text-gray-900 mt-3">Ibu Wahyu Ningsih, S.E.</h3>
                    <p class="text-gray-500 text-xs mt-0.5">Administrasi & Risalah Musyawarah</p>
                </div>
            </div>

            <!-- Anggota BPD -->
            <div class="bg-teal-50/50 p-4 rounded-2xl border border-teal-100 flex flex-wrap items-center justify-between gap-3 text-xs">
                <span class="font-bold text-teal-950">Anggota Keterwakilan Dusun:</span>
                <div class="flex flex-wrap gap-2 text-gray-700">
                    <span class="bg-white px-3 py-1 rounded-lg border border-gray-200 font-semibold">Bpk. Suyanto (Krajan)</span>
                    <span class="bg-white px-3 py-1 rounded-lg border border-gray-200 font-semibold">Bpk. Suherman (Kebonan)</span>
                    <span class="bg-white px-3 py-1 rounded-lg border border-gray-200 font-semibold">Bpk. Mansyur (Sukoasri)</span>
                    <span class="bg-white px-3 py-1 rounded-lg border border-teal-200 font-semibold text-teal-800">Ibu Siti Zulaikha (Unsur Perempuan)</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 5. PKK, POSYANDU, KARANG TARUNA & LINMAS -->
    <!-- ============================================== -->
    <section id="lembaga-pkk-posyandu" class="py-14 bg-gray-50/80 scroll-mt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-10">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-100/70 px-3 py-1.5 rounded-md">
                    Gerakan Kemasyarakatan
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">
                    Lembaga Kemasyarakatan Desa (LKD)
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1 max-w-xl mx-auto">
                    Kemitraan pemberdayaan perempuan, posyandu balita & lansia, pemuda, serta ketenteraman lingkungan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="lembaga-pemuda-linmas">
                
                <!-- 1. TP-PKK -->
                <div class="bg-white rounded-3xl p-6 border border-gray-200 shadow-sm hover:border-teal-300 transition">
                    <div class="flex items-center justify-between pb-3 mb-4 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-2xl bg-teal-800 text-white flex items-center justify-center text-lg font-bold shadow-sm">
                                🌸
                            </span>
                            <div>
                                <h3 class="font-extrabold text-base text-gray-900">Tim Penggerak PKK Desa</h3>
                                <p class="text-xs text-teal-700 font-semibold">Pemberdayaan Kesejahteraan Keluarga</p>
                            </div>
                        </div>
                        <span class="text-[10px] font-bold text-amber-900 bg-amber-100 px-2.5 py-1 rounded-full">
                            10 Program Pokok
                        </span>
                    </div>

                    <div class="space-y-2 text-xs">
                        <div class="p-3 bg-teal-50/60 rounded-xl flex items-center justify-between border border-teal-100">
                            <span class="text-gray-600 font-medium">Ketua TP-PKK</span>
                            <span class="font-extrabold text-teal-950 text-sm">Ny. Hj. Endang Sugeng</span>
                        </div>
                        <div class="p-2.5 bg-gray-50 rounded-xl flex items-center justify-between">
                            <span class="text-gray-600">Wakil Ketua</span>
                            <span class="font-bold text-gray-900">Ibu Sri Wahyuni</span>
                        </div>
                        <div class="p-2.5 bg-gray-50 rounded-xl flex items-center justify-between">
                            <span class="text-gray-600">Sekretaris</span>
                            <span class="font-bold text-gray-900">Ibu Siti Romlah, S.Pd.</span>
                        </div>
                        <div class="p-2.5 bg-gray-50 rounded-xl flex items-center justify-between">
                            <span class="text-gray-600">Bendahara</span>
                            <span class="font-bold text-gray-900">Ibu Rini Astuti</span>
                        </div>
                    </div>
                </div>

                <!-- 2. FORUM POSYANDU -->
                <div class="bg-white rounded-3xl p-6 border border-gray-200 shadow-sm hover:border-teal-300 transition">
                    <div class="flex items-center justify-between pb-3 mb-4 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-2xl bg-teal-800 text-white flex items-center justify-center text-lg font-bold shadow-sm">
                                👶
                            </span>
                            <div>
                                <h3 class="font-extrabold text-base text-gray-900">Forum Posyandu Desa</h3>
                                <p class="text-xs text-teal-700 font-semibold">Pelayanan Balita, Ibu Hamil & Lansia</p>
                            </div>
                        </div>
                        <span class="text-[10px] font-bold text-teal-800 bg-teal-50 px-2.5 py-1 rounded-full border border-teal-200">
                            Bidan Desa
                        </span>
                    </div>

                    <div class="space-y-2 text-xs">
                        <div class="p-3 bg-teal-50/60 rounded-xl flex items-center justify-between border border-teal-100">
                            <span class="text-gray-600 font-medium">Bidan Desa Pasirian</span>
                            <span class="font-extrabold text-teal-950 text-sm">Bdn. Nurul Hidayati, S.Tr.Keb.</span>
                        </div>
                        <div class="grid grid-cols-2 gap-2 pt-1">
                            <div class="p-2.5 bg-gray-50 rounded-xl border border-gray-100">
                                <span class="text-[10px] text-gray-400 block font-semibold">Pos 1 Melati (Krajan)</span>
                                <span class="font-bold text-gray-900">Ibu Sunarsih</span>
                            </div>
                            <div class="p-2.5 bg-gray-50 rounded-xl border border-gray-100">
                                <span class="text-[10px] text-gray-400 block font-semibold">Pos 2 Mawar (Kebonan)</span>
                                <span class="font-bold text-gray-900">Ibu Yuliana</span>
                            </div>
                            <div class="p-2.5 bg-gray-50 rounded-xl border border-gray-100">
                                <span class="text-[10px] text-gray-400 block font-semibold">Pos 3 Dahlia (Sukoasri)</span>
                                <span class="font-bold text-gray-900">Ibu Sulastri</span>
                            </div>
                            <div class="p-2.5 bg-gray-50 rounded-xl border border-gray-100">
                                <span class="text-[10px] text-gray-400 block font-semibold">Pos 4 Kenanga (Wanasari)</span>
                                <span class="font-bold text-gray-900">Ibu Anik Maryati</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. KARANG TARUNA -->
                <div class="bg-white rounded-3xl p-6 border border-gray-200 shadow-sm hover:border-teal-300 transition">
                    <div class="flex items-center justify-between pb-3 mb-4 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-2xl bg-amber-500 text-teal-950 flex items-center justify-center text-lg font-bold shadow-sm">
                                ⚡
                            </span>
                            <div>
                                <h3 class="font-extrabold text-base text-gray-900">Karang Taruna "Karya Muda"</h3>
                                <p class="text-xs text-amber-700 font-semibold">Wadah Kreasi & Pemuda Desa</p>
                            </div>
                        </div>
                        <span class="text-[10px] font-bold text-amber-900 bg-amber-100 px-2.5 py-1 rounded-full">
                            Kepemudaan
                        </span>
                    </div>

                    <div class="space-y-2 text-xs">
                        <div class="p-2.5 bg-amber-50/50 rounded-xl flex items-center justify-between border border-amber-100">
                            <span class="text-gray-600">Ketua Pemuda</span>
                            <span class="font-bold text-amber-950">Bayu Pratama, S.Pd.</span>
                        </div>
                        <div class="p-2.5 bg-gray-50 rounded-xl flex items-center justify-between">
                            <span class="text-gray-600">Wakil Ketua</span>
                            <span class="font-bold text-gray-900">Faisal Ramadhan</span>
                        </div>
                        <div class="p-2.5 bg-gray-50 rounded-xl flex items-center justify-between">
                            <span class="text-gray-600">Ketua Bidang Olahraga</span>
                            <span class="font-bold text-gray-900">Rendi Kurniawan</span>
                        </div>
                    </div>
                </div>

                <!-- 4. SATLINMAS -->
                <div class="bg-white rounded-3xl p-6 border border-gray-200 shadow-sm hover:border-teal-300 transition">
                    <div class="flex items-center justify-between pb-3 mb-4 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-2xl bg-teal-800 text-white flex items-center justify-center text-lg font-bold shadow-sm">
                                🛡️
                            </span>
                            <div>
                                <h3 class="font-extrabold text-base text-gray-900">Satuan Linmas (Hansip)</h3>
                                <p class="text-xs text-teal-700 font-semibold">Ketenteraman, Ketertiban & Ronda</p>
                            </div>
                        </div>
                        <span class="text-[10px] font-bold text-teal-900 bg-teal-100 px-2.5 py-1 rounded-full">
                            Siaga 24 Jam
                        </span>
                    </div>

                    <div class="space-y-2 text-xs">
                        <div class="p-2.5 bg-teal-50/50 rounded-xl flex items-center justify-between border border-teal-100">
                            <span class="text-gray-600">Komandan Pleton (Danton)</span>
                            <span class="font-bold text-teal-950">Bpk. Komarudin</span>
                        </div>
                        <div class="p-2.5 bg-gray-50 rounded-xl flex items-center justify-between">
                            <span class="text-gray-600">Kasatgas Keamanan</span>
                            <span class="font-bold text-gray-900">Bpk. Suwarno</span>
                        </div>
                        <div class="p-2.5 bg-gray-50 rounded-xl flex items-center justify-between">
                            <span class="text-gray-600">Koordinator Pos Ronda</span>
                            <span class="font-bold text-gray-900">Bpk. Sugianto</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tombol Aksi Bawah -->
            <div class="mt-12 text-center flex flex-wrap justify-center gap-3">
                <a href="/"
                   class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 text-xs font-bold rounded-xl transition shadow-sm">
                    &larr; Kembali ke Beranda
                </a>
                <a href="/#kontak"
                   class="inline-flex items-center gap-2 px-5 py-2.5 bg-teal-800 hover:bg-teal-900 text-white text-xs font-bold rounded-xl transition shadow-sm">
                    Hubungi Kantor Pelayanan Desa &rarr;
                </a>
            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- SCRIPT TAB SWITCHER DUSUN KETUA RW -->
    <!-- ============================================== -->
    <script>
        function switchDusun(dusunName) {
            document.querySelectorAll('.dusun-content').forEach(el => {
                el.classList.add('hidden');
            });

            document.querySelectorAll('.dusun-btn').forEach(btn => {
                btn.className = 'dusun-btn px-4 py-2.5 rounded-xl text-xs font-bold transition bg-white text-gray-700 border border-gray-200 hover:bg-gray-100 flex items-center gap-2';
            });

            const targetContent = document.getElementById('dusun-content-' + dusunName);
            if (targetContent) {
                targetContent.classList.remove('hidden');
            }

            const targetBtn = document.getElementById('dusun-btn-' + dusunName);
            if (targetBtn) {
                targetBtn.className = 'dusun-btn px-4 py-2.5 rounded-xl text-xs font-bold transition bg-teal-800 text-white shadow-sm flex items-center gap-2';
            }
        }
    </script>
@endsection