@extends('layouts.frontend')

@section('content')
    <!-- ============================================== -->
    <!-- 1. HERO BANNER SELARAS DENGAN PROFIL & PEMERINTAHAN -->
    <!-- ============================================== -->
    <div class="relative bg-teal-950 text-white py-14 md:py-20 overflow-hidden">
        <!-- Background Semeru Konsisten -->
        <div class="absolute inset-0 opacity-25">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=1600" 
                 alt="Panorama Semeru Pasirian" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/80 to-transparent"></div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            <!-- Badge Emas Konsisten -->
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/20 via-amber-400/30 to-amber-500/20 text-amber-300 border border-amber-400/40 px-4 py-1.5 rounded-full text-xs font-bold mb-4 shadow-lg backdrop-blur-md">
                <span>📰</span>
                <span>WARTA & KABAR RESMI DESA PASIRIAN</span>
            </div>

            <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight">
                Kabar & Berita Desa Pasirian
            </h1>
            <p class="mt-2 text-xs sm:text-sm text-teal-200/90 max-w-xl mx-auto font-light">
                Pusat publikasi informasi kegiatan warga, pengumuman pemerintah desa, realisasi pembangunan, dan agenda kemasyarakatan.
            </p>

            <!-- Kotak Pencarian Berita -->
            <div class="max-w-xl mx-auto mt-8">
                <form action="#" method="GET" class="relative flex items-center">
                    <input type="text" 
                           name="cari"
                           id="search-input"
                           placeholder="Cari berita, kegiatan, atau pengumuman desa..." 
                           class="w-full px-5 py-3.5 pr-12 text-xs sm:text-sm bg-white/10 backdrop-blur-md text-white placeholder-teal-200/70 border border-white/20 rounded-2xl focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white/15 transition shadow-lg">
                    <button type="submit" class="absolute right-3 p-2 bg-amber-400 text-teal-950 rounded-xl hover:bg-amber-500 transition shadow">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </button>
                </form>
            </div>

            <!-- Filter Kategori Berita -->
            <div class="flex flex-wrap justify-center gap-2 mt-6">
                <button type="button" onclick="filterBerita('all')" class="kategori-btn px-3.5 py-1.5 bg-amber-400 text-teal-950 text-xs font-bold rounded-lg transition shadow-sm">
                    Semua Warta
                </button>
                <button type="button" onclick="filterBerita('kegiatan')" class="kategori-btn px-3.5 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-teal-100 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    🌾 Kegiatan Warga
                </button>
                <button type="button" onclick="filterBerita('pembangunan')" class="kategori-btn px-3.5 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-teal-100 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    🏗️ Pembangunan
                </button>
                <button type="button" onclick="filterBerita('bansos')" class="kategori-btn px-3.5 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-teal-100 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    🤝 Bansos & Layanan
                </button>
                <button type="button" onclick="filterBerita('pengumuman')" class="kategori-btn px-3.5 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-teal-100 text-xs font-semibold rounded-lg border border-teal-600 transition">
                    📢 Pengumuman
                </button>
            </div>
        </div>
    </div>

    <!-- ============================================== -->
    <!-- 2. KONTEN BERITA: HEADLINE + GRID + SIDEBAR -->
    <!-- ============================================== -->
    <div class="py-12 bg-gray-50/80">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- ============================================== -->
            <!-- BERITA UTAMA (HEADLINE BANNER) -->
            <!-- ============================================== -->
            <div class="mb-12">
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                        <!-- Foto Headline -->
                        <div class="lg:col-span-7 h-72 sm:h-96 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f0a?auto=format&fit=crop&q=80&w=900" 
                                 alt="Headline Berita Pasirian" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <span class="absolute top-4 left-4 bg-amber-400 text-teal-950 font-black text-xs px-3 py-1 rounded-md shadow-md uppercase tracking-wider">
                                ⭐ Berita Utama
                            </span>
                        </div>
                        
                        <!-- Uraian Headline -->
                        <div class="lg:col-span-5 p-6 sm:p-8 flex flex-col justify-between h-full">
                            <div>
                                <div class="flex items-center gap-3 text-xs text-gray-500 mb-2">
                                    <span class="text-teal-700 font-bold bg-teal-50 px-2.5 py-0.5 rounded border border-teal-100">Bansos & Layanan</span>
                                    <span>•</span>
                                    <time>05 November 2026</time>
                                </div>
                                <h2 class="text-xl sm:text-2xl font-black text-gray-900 leading-snug hover:text-teal-800 transition">
                                    Penyaluran Bantuan Langsung Tunai (BLT-DD) Tahap Akhir di Balai Desa Pasirian Berjalan Tertib dan Tepat Sasaran
                                </h2>
                                <p class="text-xs sm:text-sm text-gray-600 mt-3 leading-relaxed line-clamp-3">
                                    Pemerintah Desa Pasirian bersama BPD dan pendamping desa resmi menyalurkan Bantuan Langsung Tunai Dana Desa (BLT-DD) kepada 110 Keluarga Penerima Manfaat (KPM) dari 4 dusun dengan verifikasi data transparan.
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="w-7 h-7 rounded-full bg-teal-800 text-white font-bold text-xs flex items-center justify-center">A</span>
                                    <span class="text-xs font-semibold text-gray-700">Admin Pemdes</span>
                                </div>
                                <a href="#baca-selengkapnya" class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 hover:text-teal-950 bg-teal-50 hover:bg-teal-100 px-3.5 py-2 rounded-xl transition border border-teal-200">
                                    <span>Baca Lengkap</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================== -->
            <!-- GRID 2 KOLOM: DAFTAR BERITA (KIRI) & SIDEBAR (KANAN) -->
            <!-- ============================================== -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- KOLOM KIRI: GRID BERITA TERBARU (lg:col-span-8) -->
                <div class="lg:col-span-8 space-y-6">
                    
                    <div class="flex items-center justify-between pb-3 border-b border-gray-200">
                        <h3 class="font-extrabold text-lg text-gray-900 flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-teal-700"></span> Warta Terbaru Desa
                        </h3>
                        <span class="text-xs text-gray-500 font-medium">Menampilkan 6 Warta Terkini</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6" id="berita-grid">
                        
                        <!-- Berita 1 -->
                        <article class="berita-card kegiatan bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                <div class="h-48 overflow-hidden relative">
                                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=600" 
                                         alt="Kerja Bakti Irigasi" 
                                         class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    <span class="absolute top-3 left-3 bg-teal-800 text-white text-[10px] font-bold px-2.5 py-0.5 rounded shadow">
                                        Kegiatan Warga
                                    </span>
                                </div>
                                <div class="p-5">
                                    <time class="text-[11px] font-semibold text-gray-400 block mb-1.5">04 November 2026</time>
                                    <h4 class="font-bold text-sm text-gray-900 hover:text-teal-700 transition line-clamp-2">
                                        Kerja Bakti Massal Normalisasi Saluran Irigasi Sawah Dusun Sukoasri Jelang Musim Tanam
                                    </h4>
                                    <p class="text-xs text-gray-600 mt-2 line-clamp-2 leading-relaxed">
                                        Ratusan warga petani bersama kelompok P3A membersihkan endapan pasir Semeru demi kelancaran pasokan air 120 hektar sawah padi organik.
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 pt-0 border-t border-gray-100 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400">Dusun Sukoasri</span>
                                <a href="#" class="text-xs font-bold text-teal-800 hover:underline">Baca Selengkapnya &rarr;</a>
                            </div>
                        </article>

                        <!-- Berita 2 -->
                        <article class="berita-card kegiatan bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                <div class="h-48 overflow-hidden relative">
                                    <img src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&q=80&w=600" 
                                         alt="Pelatihan UMKM Pisang" 
                                         class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    <span class="absolute top-3 left-3 bg-amber-500 text-teal-950 text-[10px] font-bold px-2.5 py-0.5 rounded shadow">
                                        UMKM & Ekonomi
                                    </span>
                                </div>
                                <div class="p-5">
                                    <time class="text-[11px] font-semibold text-gray-400 block mb-1.5">02 November 2026</time>
                                    <h4 class="font-bold text-sm text-gray-900 hover:text-teal-700 transition line-clamp-2">
                                        Pelatihan Pengemasan & Penjualan Digital bagi Pengrajin Keripik Pisang Dusun Kebonan
                                    </h4>
                                    <p class="text-xs text-gray-600 mt-2 line-clamp-2 leading-relaxed">
                                        Pemdes Pasirian bekerjasama dengan dinas koperasi mengadakan workshop foto produk dan pembuatan toko daring untuk 35 pelaku UMKM lokal.
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 pt-0 border-t border-gray-100 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400">Dusun Kebonan</span>
                                <a href="#" class="text-xs font-bold text-teal-800 hover:underline">Baca Selengkapnya &rarr;</a>
                            </div>
                        </article>

                        <!-- Berita 3 -->
                        <article class="berita-card pembangunan bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                <div class="h-48 overflow-hidden relative">
                                    <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&q=80&w=600" 
                                         alt="Pavingisasi Jalan Tani" 
                                         class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    <span class="absolute top-3 left-3 bg-blue-700 text-white text-[10px] font-bold px-2.5 py-0.5 rounded shadow">
                                        Pembangunan
                                    </span>
                                </div>
                                <div class="p-5">
                                    <time class="text-[11px] font-semibold text-gray-400 block mb-1.5">28 Oktober 2026</time>
                                    <h4 class="font-bold text-sm text-gray-900 hover:text-teal-700 transition line-clamp-2">
                                        Realisasi Pavingisasi Jalan Usaha Tani Dusun Wanasari Sepanjang 600 Meter Rampung 100%
                                    </h4>
                                    <p class="text-xs text-gray-600 mt-2 line-clamp-2 leading-relaxed">
                                        Akses jalan tani yang sebelumnya berlumpur saat musim hujan kini telah rampung dipaving dari alokasi Dana Desa tahun anggaran 2026.
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 pt-0 border-t border-gray-100 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400">Dusun Wanasari</span>
                                <a href="#" class="text-xs font-bold text-teal-800 hover:underline">Baca Selengkapnya &rarr;</a>
                            </div>
                        </article>

                        <!-- Berita 4 -->
                        <article class="berita-card pengumuman bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                <div class="h-48 overflow-hidden relative">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=600" 
                                         alt="Penghargaan Desa Mandiri" 
                                         class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    <span class="absolute top-3 left-3 bg-amber-400 text-teal-950 text-[10px] font-bold px-2.5 py-0.5 rounded shadow">
                                        Prestasi Desa
                                    </span>
                                </div>
                                <div class="p-5">
                                    <time class="text-[11px] font-semibold text-gray-400 block mb-1.5">24 Oktober 2026</time>
                                    <h4 class="font-bold text-sm text-gray-900 hover:text-teal-700 transition line-clamp-2">
                                        Desa Pasirian Raih Penghargaan Desa Mandiri Berkinerja Terbaik Tingkat Kabupaten Lumajang
                                    </h4>
                                    <p class="text-xs text-gray-600 mt-2 line-clamp-2 leading-relaxed">
                                        Keberhasilan tata kelola digital, transparansi publik, dan ketahanan ekonomi warga mengantarkan Pasirian meraih skor IDM tertinggi 0.89.
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 pt-0 border-t border-gray-100 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400">Balai Desa</span>
                                <a href="#" class="text-xs font-bold text-teal-800 hover:underline">Baca Selengkapnya &rarr;</a>
                            </div>
                        </article>

                    </div>

                    <!-- Pagination Angka Rapi -->
                    <div class="pt-6 border-t border-gray-200 flex items-center justify-between text-xs">
                        <span class="text-gray-500">Halaman 1 dari 3</span>
                        <div class="flex items-center gap-1.5 font-bold">
                            <span class="px-3 py-1.5 bg-teal-800 text-white rounded-lg shadow-sm">1</span>
                            <a href="#" class="px-3 py-1.5 bg-white text-gray-700 hover:bg-gray-100 border border-gray-200 rounded-lg transition">2</a>
                            <a href="#" class="px-3 py-1.5 bg-white text-gray-700 hover:bg-gray-100 border border-gray-200 rounded-lg transition">3</a>
                            <a href="#" class="px-3 py-1.5 bg-white text-teal-800 hover:bg-teal-50 border border-gray-200 rounded-lg transition">&rarr;</a>
                        </div>
                    </div>

                </div>

                <!-- ============================================== -->
                <!-- KOLOM KANAN: SIDEBAR AGENDA & PENGUMUMAN (lg:col-span-4) -->
                <!-- ============================================== -->
                <div class="lg:col-span-4 space-y-6">
                    
                    <!-- 1. AGENDA DESA MENDATANG (WIDGET SANGAT PENTING) -->
                    <div class="bg-white p-5 rounded-3xl border border-gray-200 shadow-sm">
                        <h4 class="font-extrabold text-sm text-gray-900 pb-3 mb-4 border-b border-gray-100 flex items-center gap-2">
                            <span>📅</span> Agenda Kegiatan Desa
                        </h4>

                        <div class="space-y-3.5">
                            <div class="flex items-start gap-3 p-2.5 rounded-xl bg-teal-50/50 border border-teal-100">
                                <div class="bg-teal-800 text-white p-2 rounded-xl text-center font-bold flex-shrink-0 w-12">
                                    <span class="text-[10px] uppercase block text-teal-200">Nov</span>
                                    <span class="text-sm">12</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-xs text-gray-900">Musrenbangdes Penetapan RKPDes 2027</h5>
                                    <p class="text-[11px] text-gray-500 mt-0.5">📍 Balai Pertemuan Desa Pasirian (09:00 WIB)</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 p-2.5 rounded-xl bg-gray-50 border border-gray-100">
                                <div class="bg-gray-200 text-gray-800 p-2 rounded-xl text-center font-bold flex-shrink-0 w-12">
                                    <span class="text-[10px] uppercase block text-gray-500">Nov</span>
                                    <span class="text-sm">18</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-xs text-gray-900">Jadwal Posyandu Balita & Lansia Terpadu</h5>
                                    <p class="text-[11px] text-gray-500 mt-0.5">📍 Pos 1 Melati - Dusun Krajan (08:30 WIB)</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 p-2.5 rounded-xl bg-gray-50 border border-gray-100">
                                <div class="bg-gray-200 text-gray-800 p-2 rounded-xl text-center font-bold flex-shrink-0 w-12">
                                    <span class="text-[10px] uppercase block text-gray-500">Nov</span>
                                    <span class="text-sm">25</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-xs text-gray-900">Senam Sehat & Bazar UMKM Warga</h5>
                                    <p class="text-[11px] text-gray-500 mt-0.5">📍 Lapangan Olahraga Pasirian (06:30 WIB)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. UNDUH DOKUMEN / TRANSPARANSI DANA DESA (PDF) -->
                    <div class="bg-gradient-to-br from-teal-900 to-teal-950 text-white p-5 rounded-3xl shadow-sm border border-teal-800">
                        <span class="text-[10px] font-bold text-amber-300 uppercase tracking-widest block mb-1">Transparansi Publik</span>
                        <h4 class="font-extrabold text-sm text-white mb-2">Laporan APBDes 2026</h4>
                        <p class="text-xs text-teal-200 mb-4 leading-relaxed font-light">
                            Warga dapat mengunduh dokumen publik realisasi APBDes & Peraturan Desa secara terbuka.
                        </p>
                        <a href="#" class="inline-flex items-center justify-center w-full gap-2 px-4 py-2.5 bg-amber-400 hover:bg-amber-500 text-teal-950 font-bold text-xs rounded-xl transition shadow">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            <span>Unduh Laporan APBDes (PDF)</span>
                        </a>
                    </div>

                    <!-- 3. SALURAN PENGADUAN & ASPIRASI CEPAT -->
                    <div class="bg-white p-5 rounded-3xl border border-gray-200 shadow-sm text-center">
                        <span class="text-2xl block mb-2">💬</span>
                        <h4 class="font-extrabold text-sm text-gray-900">Punya Kabar atau Keluhan?</h4>
                        <p class="text-xs text-gray-500 mt-1 mb-4 leading-relaxed">
                            Laporkan kejadian di lingkungan atau ajukan aspirasi langsung ke perangkat desa.
                        </p>
                        <a href="{{ url('/') }}#kontak" class="inline-block w-full py-2.5 px-4 bg-teal-50 hover:bg-teal-100 text-teal-800 font-bold text-xs rounded-xl border border-teal-200 transition">
                            Tulis Laporan Warga &rarr;
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- ============================================== -->
    <!-- SCRIPT FILTER BERITA SEDERHANA -->
    <!-- ============================================== -->
    <script>
        function filterBerita(kategori) {
            // Update Active Filter Buttons
            const buttons = document.querySelectorAll('.kategori-btn');
            buttons.forEach(btn => {
                btn.className = 'kategori-btn px-3.5 py-1.5 bg-teal-800/80 hover:bg-teal-700 text-teal-100 text-xs font-semibold rounded-lg border border-teal-600 transition';
            });
            event.target.className = 'kategori-btn px-3.5 py-1.5 bg-amber-400 text-teal-950 text-xs font-bold rounded-lg transition shadow-sm';

            // Filter Berita Cards
            const cards = document.querySelectorAll('#berita-grid .berita-card');
            cards.forEach(card => {
                if (kategori === 'all' || card.classList.contains(kategori)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
@endsection