@extends('layouts.frontend')

@section('content')
    <!-- ============================================== -->
    <!-- 1. HERO BANNER PERSIS DENGAN DNA WEBSITE DESA -->
    <!-- ============================================== -->
    <div class="relative bg-teal-950 text-white pt-20 pb-16 md:pt-24 md:pb-20 overflow-hidden">
        <!-- Panorama Semeru Sama Persis Seperti Halaman Lainnya -->
        <div class="absolute inset-0 opacity-25">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=1600" 
                 alt="Panorama Semeru Pasirian" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/80 to-transparent"></div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            <!-- Badge Emas (Sama Persis Seperti Profil, Pemerintahan & Potensi) -->
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/20 via-amber-400/30 to-amber-500/20 text-amber-300 border border-amber-400/40 px-4 py-1.5 rounded-full text-xs font-bold mb-4 shadow-lg backdrop-blur-md">
                <span>📸</span>
                <span>DOKUMENTASI, KILAS PERISTIWA & LAPORAN KEGIATAN DESA</span>
            </div>

            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center justify-center gap-2 text-xs text-teal-200 mb-4">
                <a href="{{ url('/') }}" class="hover:text-amber-300 transition">Beranda</a>
                <span>/</span>
                <span class="text-amber-400 font-semibold">Galeri & Dokumentasi Kegiatan</span>
            </nav>

            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
                Arsip Dokumentasi & Jejak Pembangunan Pasirian
            </h1>
            <p class="text-sm sm:text-base text-teal-100 max-w-3xl mx-auto leading-relaxed mb-8">
                Transparansi visual seluruh program pemerintahan, realisasi pembangunan fisik, pelayanan kemasyarakatan, serta momen kebersamaan warga di 4 dusun Desa Pasirian.
            </p>

            <!-- 4 Counter Angka Emas (Sama Persis Seperti Profil & Pemerintahan) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mb-10">
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">180+ Foto</p>
                    <p class="text-xs text-teal-200 mt-1">Dokumentasi Terverifikasi</p>
                </div>
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">28 Kegiatan</p>
                    <p class="text-xs text-teal-200 mt-1">Program Kerja Terlaksana</p>
                </div>
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">18 RW & 4 Dusun</p>
                    <p class="text-xs text-teal-200 mt-1">Liputan Merata Seluruh Wilayah</p>
                </div>
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">100% Transparan</p>
                    <p class="text-xs text-teal-200 mt-1">Dilengkapi Data Anggaran & Hasil</p>
                </div>
            </div>

            <!-- Tombol Navigasi Pintas Seksi (Uniform Glass Pills) -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3">
                <a href="#sorotan-slide" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>🎞️</span>
                    <span>Sorotan Utama (Slide)</span>
                </a>
                <a href="#koleksi-foto" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>📑</span>
                    <span>Laporan Album Kegiatan</span>
                </a>
                <a href="#rekap-tabel" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>📊</span>
                    <span>Rekap Realisasi Program</span>
                </a>
                <a href="#video-desa" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>🎥</span>
                    <span>Video & Drone 4K</span>
                </a>
                <a href="#kirim-foto" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-amber-400 hover:bg-amber-500 text-teal-950 font-bold transition flex items-center gap-2 shadow-sm">
                    <span>📤</span>
                    <span>Kirim Dokumentasi RT/RW</span>
                </a>
            </div>

        </div>
    </div>

    <!-- ============================================== -->
    <!-- 2. SOROTAN UTAMA: SLIDER SINEMATIK & INFORMATIF (AUTO-PLAY + DATA DETAIL) -->
    <!-- ============================================== -->
    <section id="sorotan-slide" class="py-14 bg-gradient-to-b from-gray-900 via-teal-950 to-gray-900 text-white overflow-hidden scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-300 bg-amber-400/20 border border-amber-400/30 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                        ✨ SOROTAN AGENDA STRATEGIS
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
                        Dokumentasi Program Unggulan Desa
                    </h2>
                    <p class="text-xs sm:text-sm text-teal-200 mt-1">
                        Geser slide untuk melihat laporan visual lengkap beserta capaian dan sumber pendanaannya.
                    </p>
                </div>
                
                <!-- Kontrol Navigasi Slider -->
                <div class="flex items-center gap-2 mt-4 md:mt-0">
                    <button id="slider-prev" 
                            class="w-10 h-10 rounded-xl bg-teal-800/80 hover:bg-amber-400 text-teal-100 hover:text-teal-950 border border-teal-600 transition flex items-center justify-center shadow-lg active:scale-95"
                            aria-label="Slide Sebelumnya">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button id="slider-next" 
                            class="w-10 h-10 rounded-xl bg-teal-800/80 hover:bg-amber-400 text-teal-100 hover:text-teal-950 border border-teal-600 transition flex items-center justify-center shadow-lg active:scale-95"
                            aria-label="Slide Selanjutnya">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- Slider Wrapper Sinematik -->
            <div class="relative rounded-3xl overflow-hidden border border-teal-800/60 shadow-2xl bg-teal-950">
                <div id="slider-track" class="flex transition-transform duration-700 ease-out" style="transform: translateX(0%);">
                    
                    <!-- SLIDE 1: Semarak Karnaval Budaya & Pesta Rakyat -->
                    <div class="w-full flex-shrink-0 relative h-[420px] sm:h-[480px] md:h-[520px]">
                        <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&q=80&w=1400" 
                             alt="Pawai Karnaval Budaya Pasirian" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/70 to-teal-950/20"></div>
                        
                        <!-- Konten Slide yang Sangat Informatif -->
                        <div class="absolute bottom-6 left-6 right-6 sm:bottom-10 sm:left-10 sm:right-10 max-w-3xl">
                            <div class="flex flex-wrap items-center gap-2 mb-3">
                                <span class="bg-amber-400 text-teal-950 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                                    🎊 Peringatan HUT RI Ke-81
                                </span>
                                <span class="bg-teal-800/90 text-teal-100 border border-teal-600 text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
                                    Pelaksana: Panitia Desa & Karang Taruna
                                </span>
                                <span class="bg-white/20 text-white text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                    📍 Rute 4 Dusun (Krajan - Kebonan - Sukoasri - Wanasari)
                                </span>
                            </div>

                            <h3 class="text-xl sm:text-3xl font-extrabold text-white mb-2 leading-tight">
                                Pawai Seni Budaya Nusantara & Kirab Gunungan Hasil Bumi Pasirian
                            </h3>
                            <p class="text-xs sm:text-sm text-teal-100 leading-relaxed mb-4 line-clamp-2">
                                Dihadiri lebih dari 3.200 warga dan 18 kontingen perwakilan RW. Menampilkan kesenian Barong Tengger, tari tradisional, miniatur karya kerajinan bambu, dan gunungan hasil tani organik.
                            </p>

                            <!-- Mini Data Strip Informatif -->
                            <div class="grid grid-cols-3 gap-2 sm:gap-4 pt-3 border-t border-teal-700/60 max-w-xl text-xs">
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Waktu Pelaksanaan</span>
                                    <span class="text-white font-semibold">17 - 18 Agustus 2026</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Partisipasi Warga</span>
                                    <span class="text-amber-400 font-bold">18 RW (100% Guyub)</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Pendanaan</span>
                                    <span class="text-white font-semibold">Swadaya & Kas Desa</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 2: Panen Raya Sawah Organik & Ketahanan Pangan -->
                    <div class="w-full flex-shrink-0 relative h-[420px] sm:h-[480px] md:h-[520px]">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1400" 
                             alt="Panen Raya Padi Semeru" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/70 to-teal-950/20"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 sm:bottom-10 sm:left-10 sm:right-10 max-w-3xl">
                            <div class="flex flex-wrap items-center gap-2 mb-3">
                                <span class="bg-amber-400 text-teal-950 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                                    🌾 Ketahanan Pangan Desa
                                </span>
                                <span class="bg-teal-800/90 text-teal-100 border border-teal-600 text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
                                    Pelaksana: Gapoktan Makmur & Dinas Pertanian
                                </span>
                                <span class="bg-white/20 text-white text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                    📍 Lahan Percobaan Dusun Kebonan
                                </span>
                            </div>

                            <h3 class="text-xl sm:text-3xl font-extrabold text-white mb-2 leading-tight">
                                Panen Raya Padi Mentik Wangi Organik & Uji Demplot BUMDes
                            </h3>
                            <p class="text-xs sm:text-sm text-teal-100 leading-relaxed mb-4 line-clamp-2">
                                Pembuktian keberhasilan percontohan pupuk cair organik hayati ramah lingkungan. Produktivitas panen meningkat mencapai 7,4 ton/hektar tanpa pemakaian pestisida kimia.
                            </p>

                            <div class="grid grid-cols-3 gap-2 sm:gap-4 pt-3 border-t border-teal-700/60 max-w-xl text-xs">
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Luas Panen</span>
                                    <span class="text-white font-semibold">120 Hektar Tahap I</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Hasil Panen Rata-rata</span>
                                    <span class="text-amber-400 font-bold">7,4 Ton / Hektar</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Target Distribusi</span>
                                    <span class="text-white font-semibold">BUMDes Pasirian</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 3: Gotong Royong Pembangunan Rabat Beton Jalan Tani -->
                    <div class="w-full flex-shrink-0 relative h-[420px] sm:h-[480px] md:h-[520px]">
                        <img src="https://images.unsplash.com/photo-1541888946425-d0fbb186c5f7?auto=format&fit=crop&q=80&w=1400" 
                             alt="Gotong Royong Pembangunan Jalan" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/70 to-teal-950/20"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 sm:bottom-10 sm:left-10 sm:right-10 max-w-3xl">
                            <div class="flex flex-wrap items-center gap-2 mb-3">
                                <span class="bg-amber-400 text-teal-950 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                                    🏗️ Realisasi Dana Desa 2026
                                </span>
                                <span class="bg-teal-800/90 text-teal-100 border border-teal-600 text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
                                    Pelaksana: TPK & Warga RW 11 - RW 13
                                </span>
                                <span class="bg-white/20 text-white text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                    📍 Jalur Produksi Dusun Sukoasri
                                </span>
                            </div>

                            <h3 class="text-xl sm:text-3xl font-extrabold text-white mb-2 leading-tight">
                                Pembangunan Jalan Usaha Tani: Rabat Beton Sepanjang 850 Meter
                            </h3>
                            <p class="text-xs sm:text-sm text-teal-100 leading-relaxed mb-4 line-clamp-2">
                                Memperlancar akses transportasi roda dua dan gerobak angkut hasil pertanian, kebun sayur, serta peternakan kambing etawa sehingga ongkos logistik petani terpangkas hingga 40%.
                            </p>

                            <div class="grid grid-cols-3 gap-2 sm:gap-4 pt-3 border-t border-teal-700/60 max-w-xl text-xs">
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Volume Pekerjaan</span>
                                    <span class="text-white font-semibold">P. 850m x L. 2,5m</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Sumber Anggaran</span>
                                    <span class="text-amber-400 font-bold">Dana Desa (Tahap II)</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Sistem Kerja</span>
                                    <span class="text-white font-semibold">Padat Karya Tunai</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 4: Rembuk Warga & Musrenbangdes -->
                    <div class="w-full flex-shrink-0 relative h-[420px] sm:h-[480px] md:h-[520px]">
                        <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&q=80&w=1400" 
                             alt="Musrenbangdes Pasirian" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/70 to-teal-950/20"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 sm:bottom-10 sm:left-10 sm:right-10 max-w-3xl">
                            <div class="flex flex-wrap items-center gap-2 mb-3">
                                <span class="bg-amber-400 text-teal-950 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                                    🏛️ Tata Kelola Partisipatif
                                </span>
                                <span class="bg-teal-800/90 text-teal-100 border border-teal-600 text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
                                    Pelaksana: BPD, Kades & 18 Ketua RW
                                </span>
                                <span class="bg-white/20 text-white text-xs font-medium px-2.5 py-1 rounded-full backdrop-blur-sm">
                                    📍 Pendopo Balai Desa Pasirian
                                </span>
                            </div>

                            <h3 class="text-xl sm:text-3xl font-extrabold text-white mb-2 leading-tight">
                                Musyawarah Perencanaan Pembangunan Desa (Musrenbangdes)
                            </h3>
                            <p class="text-xs sm:text-sm text-teal-100 leading-relaxed mb-4 line-clamp-2">
                                Penyerapan aspirasi dari perwakilan RW 01 hingga RW 18, kelompok tani, pengrajin bambu, dan penggerak PKK untuk menyusun Rencana Kerja Pemerintah Desa (RKPDes) tahun depan.
                            </p>

                            <div class="grid grid-cols-3 gap-2 sm:gap-4 pt-3 border-t border-teal-700/60 max-w-xl text-xs">
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Peserta Hadir</span>
                                    <span class="text-white font-semibold">115 Delegasi Warga</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Usulan Terakomodir</span>
                                    <span class="text-amber-400 font-bold">24 Usulan Prioritas</span>
                                </div>
                                <div>
                                    <span class="text-teal-300 block text-[10px] uppercase font-bold">Fokus Kebijakan</span>
                                    <span class="text-white font-semibold">Infrastruktur & UMKM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Indikator Dots Bawah -->
                <div class="absolute bottom-4 right-6 sm:bottom-6 sm:right-10 flex items-center gap-2 z-10">
                    <button onclick="goToSlide(0)" class="slider-dot w-8 h-2 rounded-full bg-amber-400 transition-all duration-300"></button>
                    <button onclick="goToSlide(1)" class="slider-dot w-2.5 h-2 rounded-full bg-white/40 hover:bg-white transition-all duration-300"></button>
                    <button onclick="goToSlide(2)" class="slider-dot w-2.5 h-2 rounded-full bg-white/40 hover:bg-white transition-all duration-300"></button>
                    <button onclick="goToSlide(3)" class="slider-dot w-2.5 h-2 rounded-full bg-white/40 hover:bg-white transition-all duration-300"></button>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 3. LAPORAN ALBUM KEGIATAN & ARSIP FOTO (KARTU INFORMATIF) -->
    <!-- ============================================== -->
    <section id="koleksi-foto" class="py-16 bg-white scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                    📑 LAPORAN DOKUMENTASI LENGKAP
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                    Album Kegiatan & Bukti Fisik Program Desa
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-2">
                    Setiap album menyajikan foto dokumentasi nyata, tanggal, pelaksana kegiatan, lokasi dusun, dan ringkasan capaian program.
                </p>

                <!-- Filter Kategori Tombol Fluid -->
                <div class="flex flex-wrap items-center justify-center gap-2 mt-6">
                    <button onclick="filterGaleri('all')" 
                            class="galeri-filter-btn active px-4 py-2 rounded-xl text-xs font-bold transition bg-amber-400 text-teal-950 shadow-sm">
                        Semua Album (8)
                    </button>
                    <button onclick="filterGaleri('pembangunan')" 
                            class="galeri-filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🏗️ Pembangunan & Fisik
                    </button>
                    <button onclick="filterGaleri('tani')" 
                            class="galeri-filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🌾 Tani & Ketahanan Pangan
                    </button>
                    <button onclick="filterGaleri('budaya')" 
                            class="galeri-filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🎉 Budaya & Tradisi Warga
                    </button>
                    <button onclick="filterGaleri('sosial')" 
                            class="galeri-filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🌸 Pelayanan PKK & Posyandu
                    </button>
                </div>
            </div>

            <!-- Grid Album Informatif (Bukan Hanya Foto Polos, Ada Detail Laporan Lengkap) -->
            <div id="galeri-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- ALBUM 1: Pembangunan Jalan Tani (Pembangunan) -->
                <div class="galeri-item pembangunan bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative h-56 overflow-hidden cursor-pointer" onclick="openLightbox(0)">
                        <img src="https://images.unsplash.com/photo-1541888946425-d0fbb186c5f7?auto=format&fit=crop&q=80&w=800" 
                             alt="Rabat Beton Jalan Tani" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/80 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                        
                        <!-- Badges -->
                        <span class="absolute top-3 left-3 bg-teal-900/90 text-amber-300 text-[10px] font-bold px-2.5 py-1 rounded-md backdrop-blur-md">
                            🏗️ Pembangunan Fisik
                        </span>
                        <span class="absolute bottom-3 left-3 bg-white/90 text-teal-950 text-[11px] font-bold px-2.5 py-0.5 rounded shadow-sm">
                            📍 Dusun Sukoasri
                        </span>
                        <span class="absolute top-3 right-3 bg-black/60 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
                            📸 12 Foto
                        </span>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span class="font-semibold text-teal-800">📅 02 Juni 2026</span>
                                <span class="bg-teal-50 text-teal-700 font-bold px-2 py-0.5 rounded text-[10px]">Realisasi 100%</span>
                            </div>
                            <h3 class="text-base font-bold text-teal-950 group-hover:text-teal-700 transition leading-snug mb-2">
                                Rabat Beton Jalan Usaha Tani Dusun Sukoasri
                            </h3>
                            <p class="text-xs text-gray-600 leading-relaxed mb-4">
                                Pembangunan jalur transportasi tani sepanjang 850m untuk mempermudah distribusi panen padi dan hijauan pakan ternak etawa.
                            </p>

                            <!-- Kotak Data Informatif -->
                            <div class="bg-gray-50 rounded-2xl p-3 border border-gray-100 text-[11px] space-y-1.5 text-gray-600 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Sumber Dana:</span>
                                    <span class="font-bold text-teal-900">Dana Desa (APBDes 2026)</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Pelaksana:</span>
                                    <span class="font-semibold text-gray-800">TPK & Swadaya Warga RW 12</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Manfaat:</span>
                                    <span class="font-semibold text-gray-800">Menghubungkan 140 KK Petani</span>
                                </div>
                            </div>
                        </div>

                        <button onclick="openLightbox(0)" 
                                class="w-full inline-flex items-center justify-center gap-2 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-teal-200 transition">
                            <span>🔍 Buka Foto & Laporan Detail</span>
                        </button>
                    </div>
                </div>

                <!-- ALBUM 2: Panen Raya Mentik Wangi (Tani) -->
                <div class="galeri-item tani bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative h-56 overflow-hidden cursor-pointer" onclick="openLightbox(1)">
                        <img src="https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&q=80&w=800" 
                             alt="Panen Raya Padi Semeru" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/80 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                        
                        <span class="absolute top-3 left-3 bg-amber-400 text-teal-950 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-md">
                            🌾 Pertanian & Pangan
                        </span>
                        <span class="absolute bottom-3 left-3 bg-white/90 text-teal-950 text-[11px] font-bold px-2.5 py-0.5 rounded shadow-sm">
                            📍 Dusun Kebonan
                        </span>
                        <span class="absolute top-3 right-3 bg-black/60 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
                            📸 16 Foto
                        </span>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span class="font-semibold text-teal-800">📅 14 Juli 2026</span>
                                <span class="bg-amber-100 text-amber-900 font-bold px-2 py-0.5 rounded text-[10px]">Capaian 7,4 Ton/Ha</span>
                            </div>
                            <h3 class="text-base font-bold text-teal-950 group-hover:text-teal-700 transition leading-snug mb-2">
                                Panen Raya Padi Organik Mentik Wangi
                            </h3>
                            <p class="text-xs text-gray-600 leading-relaxed mb-4">
                                Syukuran bersama petani atas keberhasilan masa tanam kedua dengan metode budidaya organik bebas pestisida sintetis.
                            </p>

                            <div class="bg-gray-50 rounded-2xl p-3 border border-gray-100 text-[11px] space-y-1.5 text-gray-600 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Mitra Kerja:</span>
                                    <span class="font-bold text-teal-900">Gapoktan Makmur & BUMDes</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Luas Hamparan:</span>
                                    <span class="font-semibold text-gray-800">120 Ha Lahan Produktif</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Pasar:</span>
                                    <span class="font-semibold text-gray-800">Kemasan Khusus BUMDes 5Kg</span>
                                </div>
                            </div>
                        </div>

                        <button onclick="openLightbox(1)" 
                                class="w-full inline-flex items-center justify-center gap-2 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-teal-200 transition">
                            <span>🔍 Buka Foto & Laporan Detail</span>
                        </button>
                    </div>
                </div>

                <!-- ALBUM 3: Pawai Seni Budaya HUT RI (Budaya) -->
                <div class="galeri-item budaya bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative h-56 overflow-hidden cursor-pointer" onclick="openLightbox(2)">
                        <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&q=80&w=800" 
                             alt="Karnaval Budaya Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/80 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                        
                        <span class="absolute top-3 left-3 bg-teal-900/90 text-amber-300 text-[10px] font-bold px-2.5 py-1 rounded-md backdrop-blur-md">
                            🎉 Pesta Rakyat & Budaya
                        </span>
                        <span class="absolute bottom-3 left-3 bg-white/90 text-teal-950 text-[11px] font-bold px-2.5 py-0.5 rounded shadow-sm">
                            📍 Rute Wilayah Krajan
                        </span>
                        <span class="absolute top-3 right-3 bg-black/60 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
                            📸 24 Foto
                        </span>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span class="font-semibold text-teal-800">📅 18 Agustus 2026</span>
                                <span class="bg-teal-50 text-teal-700 font-bold px-2 py-0.5 rounded text-[10px]">18 RW Terlibat</span>
                            </div>
                            <h3 class="text-base font-bold text-teal-950 group-hover:text-teal-700 transition leading-snug mb-2">
                                Pawai Seni Budaya & Kirab Gunungan Desa
                            </h3>
                            <p class="text-xs text-gray-600 leading-relaxed mb-4">
                                Parade busana tradisional, kesenian jaranan, dan replika kriya bambu karya kreatif warga dalam menyemarakkan HUT Republik Indonesia.
                            </p>

                            <div class="bg-gray-50 rounded-2xl p-3 border border-gray-100 text-[11px] space-y-1.5 text-gray-600 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Pengorganisir:</span>
                                    <span class="font-bold text-teal-900">Karang Taruna Tunas Bhakti</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Peserta Pawai:</span>
                                    <span class="font-semibold text-gray-800">± 1.250 Warga se-Pasirian</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Penonton:</span>
                                    <span class="font-semibold text-gray-800">± 4.000 Masyarakat</span>
                                </div>
                            </div>
                        </div>

                        <button onclick="openLightbox(2)" 
                                class="w-full inline-flex items-center justify-center gap-2 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-teal-200 transition">
                            <span>🔍 Buka Foto & Laporan Detail</span>
                        </button>
                    </div>
                </div>

                <!-- ALBUM 4: Posyandu & Imunisasi Balita (Sosial) -->
                <div class="galeri-item sosial bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative h-56 overflow-hidden cursor-pointer" onclick="openLightbox(3)">
                        <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&q=80&w=800" 
                             alt="Posyandu Balita Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/80 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                        
                        <span class="absolute top-3 left-3 bg-rose-700 text-white text-[10px] font-bold px-2.5 py-1 rounded-md shadow-sm">
                            🌸 Pelayanan Kesehatan
                        </span>
                        <span class="absolute bottom-3 left-3 bg-white/90 text-teal-950 text-[11px] font-bold px-2.5 py-0.5 rounded shadow-sm">
                            📍 Pos Melati Dusun Krajan
                        </span>
                        <span class="absolute top-3 right-3 bg-black/60 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
                            📸 10 Foto
                        </span>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span class="font-semibold text-teal-800">📅 15 April 2026</span>
                                <span class="bg-rose-50 text-rose-800 font-bold px-2 py-0.5 rounded text-[10px]">Cakupan 98%</span>
                            </div>
                            <h3 class="text-base font-bold text-teal-950 group-hover:text-teal-700 transition leading-snug mb-2">
                                Gerakan Posyandu Balita & Penurunan Stunting
                            </h3>
                            <p class="text-xs text-gray-600 leading-relaxed mb-4">
                                Penimbangan berat badan, imunisasi berkala, pembagian susu formula balita, dan paket makanan tambahan (PMT) bergizi tinggi.
                            </p>

                            <div class="bg-gray-50 rounded-2xl p-3 border border-gray-100 text-[11px] space-y-1.5 text-gray-600 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Pelaksana:</span>
                                    <span class="font-bold text-teal-900">TP-PKK & Bidan Desa</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Sasaran:</span>
                                    <span class="font-semibold text-gray-800">85 Balita & 24 Ibu Hamil</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Hasil:</span>
                                    <span class="font-semibold text-gray-800">Zero Kasus Gizi Buruk</span>
                                </div>
                            </div>
                        </div>

                        <button onclick="openLightbox(3)" 
                                class="w-full inline-flex items-center justify-center gap-2 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-teal-200 transition">
                            <span>🔍 Buka Foto & Laporan Detail</span>
                        </button>
                    </div>
                </div>

                <!-- ALBUM 5: Normalisasi Saluran Irigasi (Pembangunan) -->
                <div class="galeri-item pembangunan bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative h-56 overflow-hidden cursor-pointer" onclick="openLightbox(4)">
                        <img src="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?auto=format&fit=crop&q=80&w=800" 
                             alt="Irigasi Sungai Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/80 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                        
                        <span class="absolute top-3 left-3 bg-teal-900/90 text-amber-300 text-[10px] font-bold px-2.5 py-1 rounded-md backdrop-blur-md">
                            💧 Konservasi Air Tani
                        </span>
                        <span class="absolute bottom-3 left-3 bg-white/90 text-teal-950 text-[11px] font-bold px-2.5 py-0.5 rounded shadow-sm">
                            📍 Dusun Wanasari - Kebonan
                        </span>
                        <span class="absolute top-3 right-3 bg-black/60 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
                            📸 8 Foto
                        </span>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span class="font-semibold text-teal-800">📅 05 Mei 2026</span>
                                <span class="bg-teal-50 text-teal-700 font-bold px-2 py-0.5 rounded text-[10px]">Kerja Bakti Akbar</span>
                            </div>
                            <h3 class="text-base font-bold text-teal-950 group-hover:text-teal-700 transition leading-snug mb-2">
                                Normalisasi & Pembersihan Saluran Sekunder Kali Pasirian
                            </h3>
                            <p class="text-xs text-gray-600 leading-relaxed mb-4">
                                Pengerukan endapan lumpur dan pembersihan gulma sepanjang 1,4 km saluran primer untuk menjamin debit air irigasi mengalir lancar.
                            </p>

                            <div class="bg-gray-50 rounded-2xl p-3 border border-gray-100 text-[11px] space-y-1.5 text-gray-600 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Unsur Pelaksana:</span>
                                    <span class="font-bold text-teal-900">HIPPA Tirto Mulyo & Linmas</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Panjang Normalisasi:</span>
                                    <span class="font-semibold text-gray-800">1.400 Meter Saluran</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Dampak:</span>
                                    <span class="font-semibold text-gray-800">Menjamin Air 310 Ha Sawah</span>
                                </div>
                            </div>
                        </div>

                        <button onclick="openLightbox(4)" 
                                class="w-full inline-flex items-center justify-center gap-2 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-teal-200 transition">
                            <span>🔍 Buka Foto & Laporan Detail</span>
                        </button>
                    </div>
                </div>

                <!-- ALBUM 6: Pelatihan Kriya Anyaman Bambu (Budaya / UMKM) -->
                <div class="galeri-item budaya bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative h-56 overflow-hidden cursor-pointer" onclick="openLightbox(5)">
                        <img src="https://images.unsplash.com/photo-1590736969955-71cc94801759?auto=format&fit=crop&q=80&w=800" 
                             alt="Workshop Anyaman Bambu Wanasari" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/80 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                        
                        <span class="absolute top-3 left-3 bg-amber-400 text-teal-950 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-md">
                            🪵 Pemberdayaan UMKM
                        </span>
                        <span class="absolute bottom-3 left-3 bg-white/90 text-teal-950 text-[11px] font-bold px-2.5 py-0.5 rounded shadow-sm">
                            📍 Dusun Wanasari
                        </span>
                        <span class="absolute top-3 right-3 bg-black/60 text-white text-[10px] font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
                            📸 14 Foto
                        </span>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span class="font-semibold text-teal-800">📅 22 Maret 2026</span>
                                <span class="bg-amber-100 text-amber-900 font-bold px-2 py-0.5 rounded text-[10px]">Binaan BUMDes</span>
                            </div>
                            <h3 class="text-base font-bold text-teal-950 group-hover:text-teal-700 transition leading-snug mb-2">
                                Pelatihan Desain Anyaman Bambu Ekspor
                            </h3>
                            <p class="text-xs text-gray-600 leading-relaxed mb-4">
                                Peningkatan kapasitas perajin tradisional dalam membuat kemasan hampers ramah lingkungan berdaya jual tinggi untuk pasar oleh-oleh.
                            </p>

                            <div class="bg-gray-50 rounded-2xl p-3 border border-gray-100 text-[11px] space-y-1.5 text-gray-600 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Instruktur:</span>
                                    <span class="font-bold text-teal-900">Desainer Kriya Lumajang</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Peserta Lulus:</span>
                                    <span class="font-semibold text-gray-800">25 Perajin Pemuda</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Output:</span>
                                    <span class="font-semibold text-gray-800">5 Prototipe Produk Baru</span>
                                </div>
                            </div>
                        </div>

                        <button onclick="openLightbox(5)" 
                                class="w-full inline-flex items-center justify-center gap-2 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-teal-200 transition">
                            <span>🔍 Buka Foto & Laporan Detail</span>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 4. TABEL REKAPITULASI DOKUMENTASI PROGRAM (SANGAT INFORMATIF & RESMI) -->
    <!-- ============================================== -->
    <section id="rekap-tabel" class="py-16 bg-gray-50/80 border-t border-gray-200 scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                        📊 DATA AKUNTABILITAS PUBLIK
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                        Rekapitulasi Realisasi Kegiatan Desa 2026
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1">
                        Daftar resmi agenda pembangunan dan pembinaan masyarakat yang telah selesai terdokumentasi.
                    </p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="text-xs text-gray-500 bg-white border border-gray-200 px-3 py-1.5 rounded-lg shadow-sm">
                        Terakhir Diperbarui: <strong>Oktober 2026</strong>
                    </span>
                </div>
            </div>

            <!-- Tabel Data Informatif -->
            <div class="bg-white rounded-3xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs text-gray-600">
                        <thead class="bg-teal-900 text-white uppercase text-[10px] tracking-wider">
                            <tr>
                                <th scope="col" class="px-6 py-4">No.</th>
                                <th scope="col" class="px-6 py-4">Nama Program / Kegiatan</th>
                                <th scope="col" class="px-6 py-4">Lokasi Wilayah</th>
                                <th scope="col" class="px-6 py-4">Pelaksana</th>
                                <th scope="col" class="px-6 py-4">Sumber Anggaran</th>
                                <th scope="col" class="px-6 py-4 text-center">Status</th>
                                <th scope="col" class="px-6 py-4 text-center">Foto</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-teal-50/40 transition">
                                <td class="px-6 py-4 font-bold text-teal-900">01</td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Pembangunan Rabat Beton Jalan Usaha Tani
                                    <span class="block text-[11px] text-gray-400 font-normal">Volume 850m x 2,5m</span>
                                </td>
                                <td class="px-6 py-4">Dusun Sukoasri (RW 12)</td>
                                <td class="px-6 py-4">TPK & Swadaya Warga</td>
                                <td class="px-6 py-4 font-medium text-teal-900">Dana Desa Tahap II</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full">Selesai 100%</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button onclick="openLightbox(0)" class="text-teal-700 hover:text-amber-600 font-bold underline">12 Foto</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-teal-50/40 transition">
                                <td class="px-6 py-4 font-bold text-teal-900">02</td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Panen Raya Padi Organik Mentik Wangi
                                    <span class="block text-[11px] text-gray-400 font-normal">Hasil 7,4 Ton/Hektar</span>
                                </td>
                                <td class="px-6 py-4">Dusun Kebonan (RW 07)</td>
                                <td class="px-6 py-4">Gapoktan Makmur</td>
                                <td class="px-6 py-4 font-medium text-teal-900">Swadaya Petani</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full">Selesai 100%</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button onclick="openLightbox(1)" class="text-teal-700 hover:text-amber-600 font-bold underline">16 Foto</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-teal-50/40 transition">
                                <td class="px-6 py-4 font-bold text-teal-900">03</td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Karnaval Budaya & Peringatan HUT RI Ke-81
                                    <span class="block text-[11px] text-gray-400 font-normal">18 Kontingen RW Berpartisipasi</span>
                                </td>
                                <td class="px-6 py-4">Dusun Krajan (Jalan Utama)</td>
                                <td class="px-6 py-4">Karang Taruna Pasirian</td>
                                <td class="px-6 py-4 font-medium text-teal-900">Kas Desa & Donatur</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full">Selesai 100%</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button onclick="openLightbox(2)" class="text-teal-700 hover:text-amber-600 font-bold underline">24 Foto</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-teal-50/40 transition">
                                <td class="px-6 py-4 font-bold text-teal-900">04</td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Program Posyandu Balita & Cegah Stunting
                                    <span class="block text-[11px] text-gray-400 font-normal">85 Balita Diberi Makanan Tambahan</span>
                                </td>
                                <td class="px-6 py-4">Balai Posyandu Dusun Krajan</td>
                                <td class="px-6 py-4">Kader PKK & Bidan Desa</td>
                                <td class="px-6 py-4 font-medium text-teal-900">Dana Desa (Bidang Kesra)</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full">Rutin Bulanan</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button onclick="openLightbox(3)" class="text-teal-700 hover:text-amber-600 font-bold underline">10 Foto</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-teal-50/40 transition">
                                <td class="px-6 py-4 font-bold text-teal-900">05</td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Normalisasi Sedimen Saluran Irigasi Tersier
                                    <span class="block text-[11px] text-gray-400 font-normal">Panjang Pengerukan 1.400 Meter</span>
                                </td>
                                <td class="px-6 py-4">Dusun Wanasari</td>
                                <td class="px-6 py-4">HIPPA & Linmas Pasirian</td>
                                <td class="px-6 py-4 font-medium text-teal-900">Swadaya Masyarakat</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full">Selesai 100%</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button onclick="openLightbox(4)" class="text-teal-700 hover:text-amber-600 font-bold underline">8 Foto</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer Summary Tabel -->
                <div class="p-4 bg-teal-50/50 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-600 gap-2">
                    <span class="font-medium text-teal-900">
                        📄 Seluruh arsip foto dan laporan SPJ fisik tersimpan rapi di Sekretariat Kantor Desa Pasirian.
                    </span>
                    <a href="{{ url('/') }}#kontak" class="text-amber-600 hover:text-amber-700 font-bold">
                        Permohonan Dokumen Informasi Publik &rarr;
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 5. SEKSI VIDEO & LIPUTAN DRONE (ANIMASI RIPPLE PLAY) -->
    <!-- ============================================== -->
    <section id="video-desa" class="py-16 bg-white border-t border-gray-200 scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                        🎥 AUDIOVISUAL DESA
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                        Liputan Drone & Dokumenter Desa Pasirian
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1">
                        Saksikan dokumentasi visual wilayah dan kegiatan masyarakat dalam kualitas tayangan video definisi tinggi.
                    </p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center gap-2 text-xs font-bold text-teal-800 bg-teal-50 border border-teal-200 px-4 py-2 rounded-xl shadow-sm">
                        <span>🔴</span> Kanal Resmi Pemdes Pasirian Official
                    </span>
                </div>
            </div>

            <!-- 2 Big Video Showcase Cards with Animated Pulsing Play Buttons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Video 1: Profil & Keindahan Alam Pasirian dari Udara -->
                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <div class="relative h-64 sm:h-72 overflow-hidden cursor-pointer" onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=800" 
                             alt="Drone View Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
                        
                        <!-- Pulsing Play Button Motion -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="relative flex items-center justify-center">
                                <span class="animate-ping absolute inline-flex h-16 w-16 rounded-full bg-amber-400 opacity-75"></span>
                                <div class="w-16 h-16 rounded-full bg-amber-400 group-hover:bg-amber-500 text-teal-950 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6z"/></svg>
                                </div>
                            </div>
                        </div>

                        <span class="absolute bottom-3 right-3 bg-black/70 text-white text-[11px] font-bold px-2.5 py-1 rounded-md backdrop-blur-sm">
                            ⏱️ 04:25 Menit
                        </span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] font-bold text-teal-700 bg-teal-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                Video Dokumenter Udara
                            </span>
                            <h3 class="text-base sm:text-lg font-bold text-teal-950 mt-2 mb-2 leading-snug">
                                Pesona Lereng Semeru: Jelajah Keindahan 4 Dusun Desa Pasirian
                            </h3>
                            <p class="text-xs text-gray-500 leading-relaxed mb-4">
                                Menyuguhkan lekuk sawah terasering, aliran jernih sungai kaki gunung, dan aktivitas pagi warga dalam bingkai drone sinematik 4K.
                            </p>
                        </div>
                        <div class="flex items-center justify-between text-xs text-gray-400 pt-3 border-t border-gray-100">
                            <span>Narasumber: Kepala Desa Pasirian</span>
                            <span class="text-teal-700 font-bold flex items-center gap-1">Tonton Video &rarr;</span>
                        </div>
                    </div>
                </div>

                <!-- Video 2: Liputan Semarak HUT RI & Bersih Desa -->
                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <div class="relative h-64 sm:h-72 overflow-hidden cursor-pointer" onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&q=80&w=800" 
                             alt="Dokumentasi Pawai Budaya" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
                        
                        <!-- Pulsing Play Button Motion -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="relative flex items-center justify-center">
                                <span class="animate-ping absolute inline-flex h-16 w-16 rounded-full bg-amber-400 opacity-75"></span>
                                <div class="w-16 h-16 rounded-full bg-amber-400 group-hover:bg-amber-500 text-teal-950 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4l12 6-12 6z"/></svg>
                                </div>
                            </div>
                        </div>

                        <span class="absolute bottom-3 right-3 bg-black/70 text-white text-[11px] font-bold px-2.5 py-1 rounded-md backdrop-blur-sm">
                            ⏱️ 08:12 Menit
                        </span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] font-bold text-teal-700 bg-teal-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                                Liputan Khusus Warga
                            </span>
                            <h3 class="text-base sm:text-lg font-bold text-teal-950 mt-2 mb-2 leading-snug">
                                Sorak Gemuruh Karnaval Kemerdekaan & Selamatan Desa
                            </h3>
                            <p class="text-xs text-gray-500 leading-relaxed mb-4">
                                Rangkuman momen kemeriahan karnaval, wawancara sesepuh desa, pertunjukan wayang kulit semalam suntuk, dan pesta kuliner rakyat.
                            </p>
                        </div>
                        <div class="flex items-center justify-between text-xs text-gray-400 pt-3 border-t border-gray-100">
                            <span>Liputan: Tim Multimedia Pemuda RW 04</span>
                            <span class="text-teal-700 font-bold flex items-center gap-1">Tonton Video &rarr;</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 6. MARQUEE STRIP FOTO GUYUB WARGA (GERAKAN BERJALAN) -->
    <!-- ============================================== -->
    <div class="py-10 bg-teal-950 text-white overflow-hidden border-y border-teal-800">
        <div class="max-w-6xl mx-auto px-4 mb-4 text-center">
            <span class="text-xs text-amber-300 font-bold uppercase tracking-widest">
                #GuyubPasirian • #WargaBercerita • #DesaMajuMandiri
            </span>
        </div>

        <div class="relative w-full overflow-hidden">
            <div class="flex gap-4 animate-marquee whitespace-nowrap">
                <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 1">
                <img src="https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 2">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 3">
                <img src="https://images.unsplash.com/photo-1528825871115-3581a5387919?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 4">
                <img src="https://images.unsplash.com/photo-1590736969955-71cc94801759?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 5">
                <img src="https://images.unsplash.com/photo-1541888946425-d0fbb186c5f7?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 6">
                <!-- Duplikat Loop -->
                <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 1">
                <img src="https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 2">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=400" class="h-36 w-56 object-cover rounded-2xl flex-shrink-0 border border-teal-700" alt="Momen 3">
            </div>
        </div>
    </div>

    <!-- ============================================== -->
    <!-- 7. ACTION BANNER: AJAKAN KIRIM DOKUMENTASI WARGA -->
    <!-- ============================================== -->
    <section id="kirim-foto" class="py-16 bg-gradient-to-br from-teal-950 via-teal-900 to-teal-800 text-white relative overflow-hidden scroll-mt-24">
        <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-amber-400/10 blur-3xl"></div>
        <div class="absolute -left-20 -top-20 w-80 h-80 rounded-full bg-teal-600/20 blur-3xl"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-teal-900/60 border border-teal-700/60 rounded-3xl p-8 sm:p-12 backdrop-blur-md shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <div class="lg:col-span-8 text-center lg:text-left">
                        <span class="inline-flex items-center gap-2 bg-amber-400/20 text-amber-300 border border-amber-400/30 px-3.5 py-1 rounded-full text-xs font-bold mb-4">
                            🤝 PARTISIPASI WARGA & RT/RW
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white mb-3">
                            Punya Foto atau Video Kegiatan Lingkungan Anda?
                        </h2>
                        <p class="text-xs sm:text-sm text-teal-200 leading-relaxed mb-6 max-w-xl">
                            Bantu kami mengabadikan setiap momen gotong royong, posyandu, selamatan dusun, atau karya pemuda di RT/RW Anda. Dokumentasi yang masuk akan diverifikasi dan ditampilkan di etalase resmi desa!
                        </p>
                        
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 text-xs text-teal-200">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                Cantumkan Nama Pengirim & Lokasi RW
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                Diberi Atribusi Resmi Fotografer
                            </span>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col gap-3">
                        <a href="https://wa.me/6281234567890?text=Halo%20Redaksi%20Website%20Pasirian,%20saya%20warga%20ingin%20mengirimkan%20foto%20kegiatan%20desa" 
                           target="_blank"
                           class="w-full inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-500 active:bg-amber-600 text-teal-950 font-bold px-6 py-3.5 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-xs sm:text-sm">
                            <span>📲 Kirim Foto via WhatsApp</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="{{ url('/') }}"
                           class="w-full inline-flex items-center justify-center gap-2 bg-teal-800/80 hover:bg-teal-700 text-teal-100 font-semibold px-6 py-3 rounded-2xl border border-teal-600 transition text-xs">
                            <span>&larr; Kembali ke Beranda</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 8. LIGHTBOX MODAL FULLSCREEN (INFORMATIF + FLUID MOTION) -->
    <!-- ============================================== -->
    <div id="lightbox-modal" 
         class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden flex items-center justify-center p-4 transition-opacity duration-300">
        
        <!-- Tombol Tutup -->
        <button onclick="closeLightbox()" 
                class="absolute top-4 right-4 sm:top-6 sm:right-6 w-11 h-11 rounded-full bg-white/10 hover:bg-white/30 text-white flex items-center justify-center transition text-2xl z-20">
            &times;
        </button>

        <!-- Tombol Panah Geser Kiri / Kanan Lightbox -->
        <button onclick="prevLightbox()" 
                class="absolute left-2 sm:left-6 w-12 h-12 rounded-full bg-white/10 hover:bg-amber-400 hover:text-teal-950 text-white flex items-center justify-center transition z-20 active:scale-90">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button onclick="nextLightbox()" 
                class="absolute right-2 sm:right-6 w-12 h-12 rounded-full bg-white/10 hover:bg-amber-400 hover:text-teal-950 text-white flex items-center justify-center transition z-20 active:scale-90">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
        </button>

        <!-- Kontainer Gambar & Keterangan Lightbox yang Sangat Lengkap -->
        <div class="max-w-4xl w-full max-h-[92vh] flex flex-col items-center bg-teal-950/90 border border-teal-800 rounded-3xl overflow-hidden p-4 sm:p-6 shadow-2xl">
            <div class="relative w-full flex items-center justify-center overflow-hidden rounded-2xl max-h-[58vh]">
                <img id="lightbox-img" src="" alt="Detail Foto" class="max-h-[58vh] max-w-full object-contain shadow-2xl transition-all duration-300">
            </div>
            
            <div class="mt-4 text-left w-full max-w-3xl px-2">
                <div class="flex flex-wrap items-center justify-between gap-2 mb-1.5">
                    <span id="lightbox-badge" class="bg-amber-400 text-teal-950 text-[10px] font-black px-2.5 py-0.5 rounded"></span>
                    <span id="lightbox-date" class="text-xs text-amber-300 font-semibold"></span>
                </div>
                <h3 id="lightbox-title" class="text-base sm:text-xl font-bold text-white mb-1.5"></h3>
                <p id="lightbox-desc" class="text-xs text-teal-100 leading-relaxed mb-3"></p>
                
                <!-- Metadata Spesifik -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 pt-2 border-t border-teal-800 text-[11px] text-teal-200">
                    <div><span class="text-gray-400">Lokasi:</span> <strong id="lightbox-lokasi" class="text-white"></strong></div>
                    <div><span class="text-gray-400">Pelaksana:</span> <strong id="lightbox-pelaksana" class="text-white"></strong></div>
                    <div><span class="text-gray-400">Pendanaan:</span> <strong id="lightbox-anggaran" class="text-amber-400"></strong></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================== -->
    <!-- 9. VIDEO POPUP MODAL -->
    <!-- ============================================== -->
    <div id="video-modal" 
         class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden flex items-center justify-center p-4">
        <button onclick="closeVideoModal()" 
                class="absolute top-4 right-4 sm:top-6 sm:right-6 w-11 h-11 rounded-full bg-white/10 hover:bg-white/30 text-white flex items-center justify-center transition text-2xl z-20">
            &times;
        </button>
        <div class="w-full max-w-4xl aspect-video rounded-2xl overflow-hidden shadow-2xl bg-black">
            <iframe id="video-iframe" class="w-full h-full" src="" frameborder="0" allowfullscreen allow="autoplay"></iframe>
        </div>
    </div>

    <!-- ============================================== -->
    <!-- STYLES KHUSUS ANIMASI MARQUEE -->
    <!-- ============================================== -->
    <style>
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: 200%;
            animation: marquee 25s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>

    <!-- ============================================== -->
    <!-- JAVASCRIPT: SLIDER, FILTER & LIGHTBOX INFORMATIF -->
    <!-- ============================================== -->
    <script>
        // ---------------------------------------------
        // 1. DATA LENGKAP & INFORMATIF UNTUK LIGHTBOX POPUP
        // ---------------------------------------------
        const galeriData = [
            {
                img: "https://images.unsplash.com/photo-1541888946425-d0fbb186c5f7?auto=format&fit=crop&q=80&w=1200",
                badge: "🏗️ PEMBANGUNAN JALAN",
                title: "Rabat Beton Jalan Usaha Tani Dusun Sukoasri",
                date: "📅 02 Juni 2026",
                desc: "Pembangunan rabat beton sepanjang 850 meter dengan lebar 2,5 meter. Jalur ini merupakan urat nadi pengangkutan hasil pertanian organik, sayuran hortikultura, dan pakan ternak etawa menuju jalur aspal utama desa.",
                lokasi: "Dusun Sukoasri (RW 12)",
                pelaksana: "TPK & Warga RW 12",
                anggaran: "Dana Desa 2026 (Tahap II)"
            },
            {
                img: "https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&q=80&w=1200",
                badge: "🌾 KETAHANAN PANGAN",
                title: "Panen Raya Padi Organik Mentik Wangi & Uji Demplot",
                date: "📅 14 Juli 2026",
                desc: "Syukuran panen raya kelompok tani Dusun Kebonan. Uji coba penerapan mikroba pengurai dan pupuk kandang sapi BUMDes menghasilkan produktivitas 7,4 ton/hektar dengan kualitas bulir pulen wangi pandan alami.",
                lokasi: "Dusun Kebonan (RW 07)",
                pelaksana: "Gapoktan Makmur Jaya",
                anggaran: "Swadaya & Binaan BUMDes"
            },
            {
                img: "https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&q=80&w=1200",
                badge: "🎉 KEBUDAYAAN & HUT RI",
                title: "Semarak Karnaval Budaya & Kirab Gunungan Hasil Bumi",
                date: "📅 18 Agustus 2026",
                desc: "Pawai budaya tahunan yang diikuti oleh 18 RW dan 4 Dusun se-Desa Pasirian. Menampilkan replika seni kriya bambu, tari tradisional Tengger, dan gunungan hasil panen yang kemudian diperebutkan warga sebagai simbol kemakmuran bersama.",
                lokasi: "Rute Balai Desa - Krajan",
                pelaksana: "Karang Taruna Tunas Bhakti",
                anggaran: "Kas Desa & Gotong Royong"
            },
            {
                img: "https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&q=80&w=1200",
                badge: "🌸 PELAYANAN KESEHATAN",
                title: "Gerakan Posyandu Balita & Penurunan Stunting Terpadu",
                date: "📅 15 April 2026",
                desc: "Pemberian vitamin A, pengukuran antropometri balita secara digital, dan distribusi paket PMT bergizi seimbang (telur, susu, bubur kacang hijau). Program ini berhasil mempertahankan status zero stunting baru di Desa Pasirian.",
                lokasi: "Pos Melati Dusun Krajan",
                pelaksana: "Kader PKK & Bidan Desa",
                anggaran: "APBDes Bidang Kesra"
            },
            {
                img: "https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?auto=format&fit=crop&q=80&w=1200",
                badge: "💧 KONSERVASI AIR",
                title: "Normalisasi Saluran Irigasi Tersier Kali Pasirian",
                date: "📅 05 Mei 2026",
                desc: "Gotong royong membersihkan sedimentasi pasir lahar dingin sepanjang 1.400 meter saluran air. Mengamankan pasokan air irigasi untuk lebih dari 310 hektar sawah padi organik dan perkebunan pisang.",
                lokasi: "Dusun Wanasari - Kebonan",
                pelaksana: "HIPPA Tirto Mulyo & Warga",
                anggaran: "Padat Karya Tunai Desa"
            },
            {
                img: "https://images.unsplash.com/photo-1590736969955-71cc94801759?auto=format&fit=crop&q=80&w=1200",
                badge: "🪵 PEMBERDAYAAN UMKM",
                title: "Pelatihan Kriya Anyaman Bambu & Besek Ekspor",
                date: "📅 22 Maret 2026",
                desc: "Workshop peningkatan kapasitas perajin bambu lokal dengan mendatangkan desainer interior. Melatih 25 pemuda Dusun Wanasari membuat besek modern ramah lingkungan dan kap lampu artistik bernilai ekonomi tinggi.",
                lokasi: "Sentra Kriya Wanasari",
                pelaksana: "BUMDes & Disperindag",
                anggaran: "Program Pemberdayaan Warga"
            }
        ];

        let currentLightboxIndex = 0;

        function openLightbox(index) {
            currentLightboxIndex = index;
            const data = galeriData[index];
            if (!data) return;

            document.getElementById('lightbox-img').src = data.img;
            document.getElementById('lightbox-badge').innerText = data.badge;
            document.getElementById('lightbox-title').innerText = data.title;
            document.getElementById('lightbox-date').innerText = data.date;
            document.getElementById('lightbox-desc').innerText = data.desc;
            document.getElementById('lightbox-lokasi').innerText = data.lokasi;
            document.getElementById('lightbox-pelaksana').innerText = data.pelaksana;
            document.getElementById('lightbox-anggaran').innerText = data.anggaran;

            const modal = document.getElementById('lightbox-modal');
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeLightbox() {
            const modal = document.getElementById('lightbox-modal');
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        function nextLightbox() {
            currentLightboxIndex = (currentLightboxIndex + 1) % galeriData.length;
            openLightbox(currentLightboxIndex);
        }

        function prevLightbox() {
            currentLightboxIndex = (currentLightboxIndex - 1 + galeriData.length) % galeriData.length;
            openLightbox(currentLightboxIndex);
        }

        // Navigasi Keyboard untuk Lightbox (Kiri, Kanan, Escape)
        window.addEventListener('keydown', function(e) {
            const modal = document.getElementById('lightbox-modal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'ArrowRight') nextLightbox();
                if (e.key === 'ArrowLeft') prevLightbox();
                if (e.key === 'Escape') closeLightbox();
            }
        });

        // ---------------------------------------------
        // 2. LOGIKA SLIDER SINEMATIK ATAS
        // ---------------------------------------------
        let currentSlide = 0;
        const totalSlides = 4;
        const track = document.getElementById('slider-track');
        let slideInterval = null;

        function updateSlider() {
            if (track) {
                track.style.transform = `translateX(-${currentSlide * 100}%)`;
            }

            // Update Indicator Dots
            document.querySelectorAll('.slider-dot').forEach((dot, idx) => {
                if (idx === currentSlide) {
                    dot.className = 'slider-dot w-8 h-2 rounded-full bg-amber-400 transition-all duration-300';
                } else {
                    dot.className = 'slider-dot w-2.5 h-2 rounded-full bg-white/40 hover:bg-white transition-all duration-300';
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
            resetSlideTimer();
        }

        function resetSlideTimer() {
            if (slideInterval) clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000); // Otomatis bergeser tiap 5 detik
        }

        document.getElementById('slider-next')?.addEventListener('click', () => {
            nextSlide();
            resetSlideTimer();
        });

        document.getElementById('slider-prev')?.addEventListener('click', () => {
            prevSlide();
            resetSlideTimer();
        });

        // Jalankan Timer Slider Pertama Kali
        resetSlideTimer();

        // ---------------------------------------------
        // 3. FILTER FOTO INTERAKTIF
        // ---------------------------------------------
        function filterGaleri(kategori) {
            const buttons = document.querySelectorAll('.galeri-filter-btn');
            buttons.forEach(btn => {
                btn.className = 'galeri-filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200';
            });

            if (event && event.currentTarget) {
                event.currentTarget.className = 'galeri-filter-btn active px-4 py-2 rounded-xl text-xs font-bold transition bg-amber-400 text-teal-950 shadow-sm';
            }

            const items = document.querySelectorAll('#galeri-grid .galeri-item');
            items.forEach(item => {
                if (kategori === 'all' || item.classList.contains(kategori)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // ---------------------------------------------
        // 4. VIDEO POPUP MODAL
        // ---------------------------------------------
        function openVideoModal(url) {
            const modal = document.getElementById('video-modal');
            const iframe = document.getElementById('video-iframe');
            iframe.src = url;
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeVideoModal() {
            const modal = document.getElementById('video-modal');
            const iframe = document.getElementById('video-iframe');
            iframe.src = '';
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    </script>
@endsection