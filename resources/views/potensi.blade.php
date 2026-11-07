@extends('layouts.frontend')

@section('content')
    <!-- ============================================== -->
    <!-- 1. HERO BANNER PERSIS DENGAN PROFIL & PEMERINTAHAN -->
    <!-- ============================================== -->
    <div class="relative bg-teal-950 text-white pt-20 pb-16 md:pt-24 md:pb-20 overflow-hidden">
        <!-- Panorama Semeru Sama Persis Seperti Halaman Profil & Berita -->
        <div class="absolute inset-0 opacity-25">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=1600" 
                 alt="Panorama Semeru Pasirian" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/80 to-transparent"></div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            <!-- Badge Emas (Sama Persis Seperti Profil Desa) -->
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/20 via-amber-400/30 to-amber-500/20 text-amber-300 border border-amber-400/40 px-4 py-1.5 rounded-full text-xs font-bold mb-4 shadow-lg backdrop-blur-md">
                <span>🌾</span>
                <span>ETALASE POTENSI ALAM, AGROWISATA & UMKM PASIRIAN</span>
            </div>

            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center justify-center gap-2 text-xs text-teal-200 mb-4">
                <a href="{{ url('/') }}" class="hover:text-amber-300 transition">Beranda</a>
                <span>/</span>
                <span class="text-amber-400 font-semibold">Potensi Desa</span>
            </nav>

            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
                Kekayaan Alam & Karya Mandiri Desa Pasirian
            </h1>
            <p class="text-sm sm:text-base text-teal-100 max-w-3xl mx-auto leading-relaxed mb-8">
                Menyajikan hamparan pertanian organik subur di lereng Gunung Semeru, sentra keripik pisang legendaris khas Pasirian, kerajinan anyaman bambu, hingga destinasi agrowisata yang memajukan perekonomian warga.
            </p>

            <!-- 4 Counter Angka Emas (Sama Persis Seperti Profil & Pemerintahan) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mb-10">
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">826+ Ha</p>
                    <p class="text-xs text-teal-200 mt-1">Lahan Pertanian & Kebun</p>
                </div>
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">42+ Unit</p>
                    <p class="text-xs text-teal-200 mt-1">UMKM Warga Binaan</p>
                </div>
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">4 Dusun</p>
                    <p class="text-xs text-teal-200 mt-1">Sentra Produksi Khusus</p>
                </div>
                <div class="bg-teal-900/70 backdrop-blur-sm border border-teal-700/50 rounded-2xl p-4 text-center">
                    <p class="text-2xl sm:text-3xl font-extrabold text-amber-400">100% Asli</p>
                    <p class="text-xs text-teal-200 mt-1">Karya Petani & Pengrajin</p>
                </div>
            </div>

            <!-- Tombol Navigasi Pintas Seksi (Uniform Glass Pills) -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3">
                <a href="#unggulan" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>⭐</span>
                    <span>Komoditas Unggulan</span>
                </a>
                <a href="#katalog" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>🛍️</span>
                    <span>Katalog Produk UMKM</span>
                </a>
                <a href="#wisata" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>🏞️</span>
                    <span>Agrowisata & Alam</span>
                </a>
                <a href="#dusun-potensi" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-sm transition flex items-center gap-2">
                    <span>🏘️</span>
                    <span>Potensi per Dusun</span>
                </a>
                <a href="#daftarkan" 
                   class="px-4 py-2 rounded-xl text-xs font-semibold bg-amber-400 hover:bg-amber-500 text-teal-950 font-bold transition flex items-center gap-2 shadow-sm">
                    <span>🚀</span>
                    <span>Daftar UMKM Warga</span>
                </a>
            </div>

        </div>
    </div>

    <!-- ============================================== -->
    <!-- 2. SPOTLIGHT KOMODITAS UTAMA (ASYMMETRICAL 2-COLUMNS) -->
    <!-- ============================================== -->
    <section id="unggulan" class="py-16 bg-gradient-to-b from-gray-50 to-white scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                        <span>⭐</span> KEBANGGAAN PASIRIAN
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                        Komoditas & Produk Ikonik Desa
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1">
                        Dua pilar ekonomi utama masyarakat Pasirian yang telah dikenal hingga lintas kabupaten dan provinsi.
                    </p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="text-xs text-gray-500 bg-white border border-gray-200 px-3 py-1.5 rounded-lg shadow-sm">
                        🌱 Didukung oleh Kelompok Tani & BUMDes Pasirian
                    </span>
                </div>
            </div>

            <!-- Asymmetrical Grid: 1 Big Hero Card + 2 Stacked Feature Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                
                <!-- KARTU BESAR KIRI: BERAS ORGANIK SEMERU (lg:col-span-7) -->
                <div class="lg:col-span-7 bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl border border-gray-200 transition-all duration-300 flex flex-col group">
                    <div class="relative h-64 sm:h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&q=80&w=1000" 
                             alt="Beras Organik Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/90 via-teal-950/30 to-transparent"></div>
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="bg-amber-400 text-teal-950 text-xs font-extrabold px-3 py-1 rounded-full shadow-md">
                                👑 Flagship Komoditas #1
                            </span>
                            <span class="bg-teal-900/80 backdrop-blur-md text-teal-200 text-xs font-semibold px-3 py-1 rounded-full border border-teal-700">
                                Dusun Kebonan & Krajan
                            </span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl sm:text-2xl font-bold leading-tight">
                                Beras Organik Pasirian (Aliran Lahar Dingin Semeru)
                            </h3>
                            <p class="text-xs text-teal-200 mt-1 flex items-center gap-2">
                                <span>🌾 Varietas Mentik Wangi & Sintanur</span>
                                <span>•</span>
                                <span>💧 Irigasi Sumber Mata Air Asli</span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between bg-white">
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-6">
                            Tanah vulkanik kaya hara di Desa Pasirian menghasilkan bulir padi organik berkualitas tinggi dengan aroma harum alami dan tekstur pulen istimewa. Dikelola langsung oleh Gabungan Kelompok Tani (Gapoktan) tanpa pestisida kimia berbahaya.
                        </p>

                        <!-- Highlights 3 Poin Keunggulan -->
                        <div class="grid grid-cols-3 gap-3 pt-4 border-t border-gray-100 mb-6 text-center">
                            <div class="p-2.5 rounded-xl bg-teal-50/70 border border-teal-100">
                                <p class="text-xs sm:text-sm font-bold text-teal-900">100% Organik</p>
                                <p class="text-[10px] text-teal-700">Bebas Residu Kimia</p>
                            </div>
                            <div class="p-2.5 rounded-xl bg-teal-50/70 border border-teal-100">
                                <p class="text-xs sm:text-sm font-bold text-teal-900">3x Panen/Th</p>
                                <p class="text-[10px] text-teal-700">Pasokan Stabil</p>
                            </div>
                            <div class="p-2.5 rounded-xl bg-amber-50/70 border border-amber-200">
                                <p class="text-xs sm:text-sm font-bold text-amber-900">Pasar Regional</p>
                                <p class="text-[10px] text-amber-700">Jawa Timur & Bali</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <span class="text-[10px] text-gray-400 block uppercase font-bold tracking-wider">Mulai Dari</span>
                                <span class="text-lg font-black text-teal-900">Rp 14.500 <span class="text-xs font-normal text-gray-500">/ kg</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20BUMDes%20Pasirian,%20saya%20tertarik%20dengan%20Beras%20Organik%20Pasirian" 
                               target="_blank"
                               class="inline-flex items-center gap-2 px-5 py-2.5 bg-teal-800 hover:bg-teal-900 text-white text-xs font-bold rounded-xl transition shadow-sm hover:-translate-y-0.5">
                                <span>Pesan via BUMDes</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KARTU KANAN: 2 STACKED CARDS (lg:col-span-5) -->
                <div class="lg:col-span-5 flex flex-col gap-6">
                    
                    <!-- Kartu Atas: Sentra Olahan Pisang Pasirian -->
                    <div class="bg-white rounded-3xl p-6 border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col sm:flex-row gap-5 items-center group">
                        <div class="w-full sm:w-36 h-36 flex-shrink-0 rounded-2xl overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1528825871115-3581a5387919?auto=format&fit=crop&q=80&w=500" 
                                 alt="Keripik Pisang Pasirian" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-2 left-2 bg-amber-400 text-teal-950 text-[10px] font-black px-2 py-0.5 rounded-md">
                                Khas Lumajang
                            </span>
                        </div>
                        <div class="flex-1">
                            <span class="text-[10px] font-bold text-teal-700 bg-teal-50 px-2 py-0.5 rounded uppercase tracking-wider">
                                🍌 Kuliner Khas • Dusun Krajan
                            </span>
                            <h4 class="text-base font-bold text-teal-950 mt-1 mb-1 leading-snug">
                                Keripik & Sale Pisang Pasirian
                            </h4>
                            <p class="text-xs text-gray-500 leading-relaxed mb-3">
                                Dibuat dari Pisang Mas Kirana dan Tanduk pilihan hasil kebun warga. Renyah gurih tanpa pengawet buatan.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-teal-900">Rp 12.000 - 25.000</span>
                                <a href="#katalog" class="text-xs text-amber-600 hover:text-amber-700 font-bold flex items-center gap-1">
                                    Lihat Varian &rarr;
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu Bawah: Anyaman Bambu & Kriya Wanasari -->
                    <div class="bg-white rounded-3xl p-6 border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col sm:flex-row gap-5 items-center group">
                        <div class="w-full sm:w-36 h-36 flex-shrink-0 rounded-2xl overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1590736969955-71cc94801759?auto=format&fit=crop&q=80&w=500" 
                                 alt="Kerajinan Anyaman Bambu" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-2 left-2 bg-teal-800 text-amber-300 text-[10px] font-black px-2 py-0.5 rounded-md">
                                Ramah Lingkungan
                            </span>
                        </div>
                        <div class="flex-1">
                            <span class="text-[10px] font-bold text-teal-700 bg-teal-50 px-2 py-0.5 rounded uppercase tracking-wider">
                                🪵 Kriya Kreatif • Dusun Wanasari
                            </span>
                            <h4 class="text-base font-bold text-teal-950 mt-1 mb-1 leading-snug">
                                Anyaman Bambu & Besek Tradisional
                            </h4>
                            <p class="text-xs text-gray-500 leading-relaxed mb-3">
                                Pemanfaatan bambu hutan Pasirian menjadi wadah ramah lingkungan, kukusan, caping, dan keranjang souvenir estetis.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-bold text-teal-900">Rp 8.000 - 50.000</span>
                                <a href="#katalog" class="text-xs text-amber-600 hover:text-amber-700 font-bold flex items-center gap-1">
                                    Lihat Varian &rarr;
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Callout Quote Koperasi / BUMDes -->
                    <div class="bg-teal-900 text-teal-100 rounded-3xl p-5 border border-teal-800 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-2xl bg-amber-400 text-teal-950 flex items-center justify-center font-bold text-lg flex-shrink-0">
                            💡
                        </div>
                        <div class="text-xs">
                            <p class="font-semibold text-white">Membeli Produk Warga = Membangun Pasirian</p>
                            <p class="text-teal-200 mt-0.5">Seluruh transaksi UMKM terhubung langsung ke petani dan pengrajin lokal untuk kesejahteraan bersama.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 3. KATALOG PRODUK UMKM INTERAKTIF (FILTER & DIRECT WA) -->
    <!-- ============================================== -->
    <section id="katalog" class="py-16 bg-white border-t border-gray-200 scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                    🛍️ ETALASE RESMI UMKM
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                    Katalog Karya & Olahan Warga Pasirian
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-2">
                    Pilih kategori di bawah untuk menyaring produk. Anda dapat langsung memesan via WhatsApp resmi pengrajin dan pengelola.
                </p>

                <!-- Filter Kategori Tombol-Tombol Keren -->
                <div class="flex flex-wrap items-center justify-center gap-2 mt-6">
                    <button onclick="filterProduk('all')" 
                            class="filter-btn active px-4 py-2 rounded-xl text-xs font-bold transition bg-amber-400 text-teal-950 shadow-sm">
                        Semua Kategori (8)
                    </button>
                    <button onclick="filterProduk('pertanian')" 
                            class="filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🌾 Hasil Tani & Organik
                    </button>
                    <button onclick="filterProduk('kuliner')" 
                            class="filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🍌 Kuliner & Camilan
                    </button>
                    <button onclick="filterProduk('kerajinan')" 
                            class="filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🪵 Kriya & Anyaman
                    </button>
                    <button onclick="filterProduk('herbal')" 
                            class="filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200">
                        🥛 Herbal & Peternakan
                    </button>
                </div>
            </div>

            <!-- Grid Produk (Bervariasi, Informatif, Dilengkapi Label & WA Order) -->
            <div id="produk-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- ITEM 1: Beras Organik 5Kg (Pertanian) -->
                <div class="produk-card pertanian bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&q=80&w=600" 
                             alt="Beras Pandan Wangi Organik" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-teal-800/90 text-amber-300 text-[10px] font-bold px-2 py-0.5 rounded-md backdrop-blur-sm">
                            Binaan BUMDes
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Kebonan
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">Gapoktan Makmur Jaya</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Beras Mentik Wangi Organik 5 Kg
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Bebas pestisida kimia, wangi pandan alami, pulen dan sehat dikonsumsi keluarga.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 72.500 <span class="text-[10px] font-normal text-gray-500">/ 5kg</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20Gapoktan%20Makmur%20Jaya,%20saya%20mau%20pesan%20Beras%20Mentik%20Wangi%20Organik%205Kg" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2: Keripik Pisang Gurih Original (Kuliner) -->
                <div class="produk-card kuliner bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1528825871115-3581a5387919?auto=format&fit=crop&q=80&w=600" 
                             alt="Keripik Pisang Mas Kirana" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-amber-400 text-teal-950 text-[10px] font-bold px-2 py-0.5 rounded-md shadow-sm">
                            Best Seller
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Krajan
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">Dapur Renyah Bu Siti</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Keripik Pisang Gurih Pasirian
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Irisan tipis pisang tanduk gurih renyah dipadu bumbu rempah alami tanpa MSG.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 15.000 <span class="text-[10px] font-normal text-gray-500">/ 250gr</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20Dapur%20Bu%20Siti,%20saya%20mau%20pesan%20Keripik%20Pisang%20Gurih%20Pasirian" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3: Sale Pisang Basah Manis Legi (Kuliner) -->
                <div class="produk-card kuliner bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1601039641847-7857b994d704?auto=format&fit=crop&q=80&w=600" 
                             alt="Sale Pisang Asap Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-teal-100 text-teal-800 text-[10px] font-bold px-2 py-0.5 rounded-md">
                            P-IRT Terdaftar
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Krajan
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">UMKM Berkah Ibu</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Sale Pisang Gulung Madu
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Pengasapan alami higienis berbalur madu lokal. Legit kenyal tahan hingga 3 bulan.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 18.000 <span class="text-[10px] font-normal text-gray-500">/ pack</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20UMKM%20Berkah%20Ibu,%20saya%20mau%20pesan%20Sale%20Pisang%20Gulung%20Madu" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 4: Keranjang Anyaman Bambu Estetis (Kerajinan) -->
                <div class="produk-card kerajinan bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1590736969955-71cc94801759?auto=format&fit=crop&q=80&w=600" 
                             alt="Besek dan Anyaman Bambu" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-teal-800 text-amber-300 text-[10px] font-bold px-2 py-0.5 rounded-md">
                            Kriya Lokal
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Wanasari
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">Pengrajin Bambu Wanasari</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Set Besek Hantaran & Keranjang Bambu
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Anyaman halus motif batik lokal. Cocok untuk wadah hampers, catering, atau dekorasi rumah ramah lingkungan.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 25.000 <span class="text-[10px] font-normal text-gray-500">/ set</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20Pengrajin%20Bambu%20Wanasari,%20saya%20mau%20pesan%20Set%20Besek%20Hantaran" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 5: Susu Kambing Etawa Segar (Herbal) -->
                <div class="produk-card herbal bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?auto=format&fit=crop&q=80&w=600" 
                             alt="Susu Kambing Etawa Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-md">
                            Segar & Alami
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Sukoasri
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">Ternak Suko Makmur</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Susu Kambing Etawa Murni (Pasteurisasi)
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Diperah setiap subuh dari peternakan kaki Semeru. Kaya kalsium dan bebas bau prengus.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 12.000 <span class="text-[10px] font-normal text-gray-500">/ 250ml</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20Ternak%20Suko%20Makmur,%20saya%20mau%20pesan%20Susu%20Kambing%20Etawa" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 6: Madu Hutan Semeru Asli (Herbal) -->
                <div class="produk-card herbal bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&q=80&w=600" 
                             alt="Madu Murni Semeru" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-amber-400 text-teal-950 text-[10px] font-bold px-2 py-0.5 rounded-md shadow-sm">
                            100% Murni
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Sukoasri
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">Peternak Lebah Hutan</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Madu Semeru Liar Apis Dorsata
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Dipanen lestari dari nektar bunga hutan pegunungan. Menjaga daya tahan tubuh dan kebugaran.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 85.000 <span class="text-[10px] font-normal text-gray-500">/ 350ml</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20Peternak%20Madu%20Semeru,%20saya%20mau%20pesan%20Madu%20Murni%20350ml" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 7: Sayuran Organik Segar Kebonan (Pertanian) -->
                <div class="produk-card pertanian bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&q=80&w=600" 
                             alt="Paket Sayur Hidroponik & Kebun" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-teal-800 text-teal-100 text-[10px] font-bold px-2 py-0.5 rounded-md">
                            Panen Harian
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Kebonan
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">KWT Sri Rejeki</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Paket Sayuran Kebun Hijau Pasirian
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Sawi samhong, bayam merah, selada, dan tomat ceri segar langsung petik saat pesanan masuk.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 20.000 <span class="text-[10px] font-normal text-gray-500">/ paket</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20KWT%20Sri%20Rejeki,%20saya%20mau%20pesan%20Paket%20Sayuran%20Kebun" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 8: Keripik Talas Gurih Renyah (Kuliner) -->
                <div class="produk-card kuliner bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1566478989037-eec170784d0b?auto=format&fit=crop&q=80&w=600" 
                             alt="Keripik Talas Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span class="absolute top-2.5 left-2.5 bg-amber-400 text-teal-950 text-[10px] font-bold px-2 py-0.5 rounded-md shadow-sm">
                            Khas Pasirian
                        </span>
                        <span class="absolute bottom-2.5 right-2.5 bg-white/90 text-gray-700 text-[10px] font-semibold px-2 py-0.5 rounded shadow-sm">
                            📍 Dusun Krajan
                        </span>
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] text-teal-700 font-bold uppercase tracking-wider block mb-1">Camilan Pasirian Bu Yayuk</span>
                            <h3 class="text-sm font-bold text-teal-950 group-hover:text-teal-700 transition line-clamp-1">
                                Keripik Talas Gurih Bumbu Bawang
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed">
                                Talas lokal lereng gunung dipotong stik renyah berpadu gurih bawang putih asli.
                            </p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-gray-400">Harga:</span>
                                <span class="text-sm font-black text-teal-900">Rp 14.000 <span class="text-[10px] font-normal text-gray-500">/ 200gr</span></span>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo%20Bu%20Yayuk,%20saya%20mau%20pesan%20Keripik%20Talas%20Gurih" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center gap-1.5 bg-teal-50 hover:bg-teal-800 text-teal-800 hover:text-white text-xs font-bold py-2 rounded-xl border border-teal-200 transition">
                                <span>💬 Pesan Langsung</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Info Katalog & Garansi -->
            <div class="mt-12 p-6 rounded-2xl bg-teal-50/70 border border-teal-100 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-teal-800 text-white flex items-center justify-center text-lg flex-shrink-0">
                        🛡️
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-teal-950">Garansi Kualitas & Dukungan BUMDes</h4>
                        <p class="text-[11px] text-gray-600">Seluruh produk diawasi kebersihan dan legalitas usahanya oleh Pokja Ekonomi Desa Pasirian.</p>
                    </div>
                </div>
                <div class="text-xs font-semibold text-teal-800">
                    Beli Banyak / Grosir? <a href="https://wa.me/6281234567890?text=Halo%20BUMDes,%20saya%20tertarik%20membeli%20grosir%20produk%20UMKM" target="_blank" class="text-amber-600 hover:underline font-bold">Hubungi Admin BUMDes &rarr;</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 4. POTENSI AGROWISATA & ALAM (MAGAZINE STRIP LAYOUT) -->
    <!-- ============================================== -->
    <section id="wisata" class="py-16 bg-gray-50/80 border-t border-gray-200 scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                        🏞️ PESONA WISATA PASIRIAN
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                        Agrowisata & Keindahan Alam Pedesaan
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1">
                        Rasakan kesejukan udara pegunungan, pemandangan sawah terasering berlatar Gunung Semeru, dan keramahan warga desa.
                    </p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center gap-2 text-xs font-bold text-teal-800 bg-white border border-teal-200 px-4 py-2 rounded-xl shadow-sm">
                        <span>🧭</span> Akses Jalan Aspal Mulus & Ramah Kendaraan
                    </span>
                </div>
            </div>

            <!-- 3 Varied Cinematic Cards for Tourism -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Destinasi 1: Sawah Organik & Jalur Gowes Semeru -->
                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=800" 
                             alt="Agrowisata Sawah Semeru" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-teal-900/90 text-amber-300 text-[10px] font-bold px-2.5 py-1 rounded-md backdrop-blur-md">
                            Agrowisata & Edukasi
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <p class="text-xs text-amber-300 font-semibold">Dusun Kebonan</p>
                            <h3 class="text-base font-bold leading-tight">Jalur Gowes & Hamparan Sawah Semeru</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-xs text-gray-600 leading-relaxed mb-4">
                            Spot terbaik menikmati matahari terbit dengan latar megah kerucut Mahameru. Terdapat jalur jalan kaki dan sepeda gowes di pematang sawah yang asri.
                        </p>
                        <div class="space-y-2 pt-3 border-t border-gray-100 text-xs text-gray-600 mb-4">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Tiket Masuk:</span>
                                <span class="font-bold text-teal-900">Gratis (Kebersihan Sukarela)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Waktu Rekomendasi:</span>
                                <span class="font-bold text-teal-900">05.30 - 08.30 WIB (Sunrise)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Fasilitas:</span>
                                <span class="font-semibold text-gray-700">Gazebo Bambu, Warung Kopi</span>
                            </div>
                        </div>
                        <a href="https://maps.google.com/?q=Pasirian+Lumajang" 
                           target="_blank"
                           class="w-full inline-flex items-center justify-center gap-2 bg-gray-50 hover:bg-teal-800 text-gray-700 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-gray-200 hover:border-teal-800 transition">
                            <span>📍 Buka Petunjuk Arah</span>
                        </a>
                    </div>
                </div>

                <!-- Destinasi 2: Wisata Tubing & Sumber Mata Air Kali Pasirian -->
                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?auto=format&fit=crop&q=80&w=800" 
                             alt="Wisata Alam Sumber Air Pasirian" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-teal-900/90 text-amber-300 text-[10px] font-bold px-2.5 py-1 rounded-md backdrop-blur-md">
                            Wisata Air Alami
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <p class="text-xs text-amber-300 font-semibold">Dusun Krajan - Sukoasri</p>
                            <h3 class="text-base font-bold leading-tight">Sumber Mata Air & Tubing Sungai</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-xs text-gray-600 leading-relaxed mb-4">
                            Aliran sungai berbatu andesit dengan air pegunungan yang sangat jernih dan menyegarkan. Sering dijadikan tempat rekreasi keluarga dan atraksi tubing anak muda.
                        </p>
                        <div class="space-y-2 pt-3 border-t border-gray-100 text-xs text-gray-600 mb-4">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Tiket Masuk:</span>
                                <span class="font-bold text-teal-900">Rp 5.000 / orang</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Sewa Ban / Tubing:</span>
                                <span class="font-bold text-teal-900">Rp 10.000 (Pelampung)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Pengelola:</span>
                                <span class="font-semibold text-gray-700">Karang Taruna Pasirian</span>
                            </div>
                        </div>
                        <a href="https://maps.google.com/?q=Pasirian+Lumajang" 
                           target="_blank"
                           class="w-full inline-flex items-center justify-center gap-2 bg-gray-50 hover:bg-teal-800 text-gray-700 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-gray-200 hover:border-teal-800 transition">
                            <span>📍 Buka Petunjuk Arah</span>
                        </a>
                    </div>
                </div>

                <!-- Destinasi 3: Kampung Edukasi Anyaman & Kebun Bambu -->
                <div class="bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?auto=format&fit=crop&q=80&w=800" 
                             alt="Edukasi Anyaman Bambu Wanasari" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-teal-900/90 text-amber-300 text-[10px] font-bold px-2.5 py-1 rounded-md backdrop-blur-md">
                            Kriya & Budaya
                        </span>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <p class="text-xs text-amber-300 font-semibold">Dusun Wanasari</p>
                            <h3 class="text-base font-bold leading-tight">Kampung Edukasi Anyaman Bambu</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <p class="text-xs text-gray-600 leading-relaxed mb-4">
                            Pengunjung dan rombongan siswa diajak belajar langsung membelah, mengirat, dan menganyam bambu bersama tetua pengrajin tradisional Pasirian.
                        </p>
                        <div class="space-y-2 pt-3 border-t border-gray-100 text-xs text-gray-600 mb-4">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Paket Workshop:</span>
                                <span class="font-bold text-teal-900">Rp 15.000 (Bawa Pulang Kriya)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Reservasi:</span>
                                <span class="font-bold text-teal-900">Minimal 5 Peserta</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400">Kategori:</span>
                                <span class="font-semibold text-gray-700">Edukasi Anak & Komunitas</span>
                            </div>
                        </div>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20reservasi%20Kunjungan%20Edukasi%20Anyaman%20Wanasari" 
                           target="_blank"
                           class="w-full inline-flex items-center justify-center gap-2 bg-gray-50 hover:bg-teal-800 text-gray-700 hover:text-white text-xs font-bold py-2.5 rounded-xl border border-gray-200 hover:border-teal-800 transition">
                            <span>📞 Reservasi Edukasi</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 5. PEMETAAN POTENSI PER DUSUN (INTERAKTIF & TERSTRUKTUR) -->
    <!-- ============================================== -->
    <section id="dusun-potensi" class="py-16 bg-white border-t border-gray-200 scroll-mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                    🗺️ SEBARAN KEWILAYAHAN
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                    Karakteristik & Potensi 4 Dusun Pasirian
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-2">
                    Setiap sudut wilayah Desa Pasirian memiliki keunggulan komparatif yang saling mengisi dalam ekosistem ekonomi desa.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Dusun Krajan -->
                <div class="bg-teal-50/50 rounded-2xl p-6 border border-teal-100 hover:border-teal-400 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-teal-800 text-amber-300 flex items-center justify-center text-xl font-bold mb-4 shadow-sm">
                        🏢
                    </div>
                    <span class="text-[10px] font-bold text-teal-700 bg-white border border-teal-200 px-2.5 py-0.5 rounded-full uppercase">
                        RW 01 – RW 05
                    </span>
                    <h3 class="text-lg font-bold text-teal-950 mt-2 mb-2">Dusun Krajan</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        Pusat pemerintahan desa, perdagangan UMKM kuliner, pertokoan jasa, dan sentra aneka olahan pisang & talas.
                    </p>
                    <ul class="text-[11px] text-teal-900 font-medium space-y-1.5 border-t border-teal-200/60 pt-3">
                        <li class="flex items-center gap-2"><span>✔</span> Pasar & Ruko Desa</li>
                        <li class="flex items-center gap-2"><span>✔</span> 18+ Gerai UMKM Pangan</li>
                        <li class="flex items-center gap-2"><span>✔</span> Jaringan Logistik Cepat</li>
                    </ul>
                </div>

                <!-- Dusun Kebonan -->
                <div class="bg-teal-50/50 rounded-2xl p-6 border border-teal-100 hover:border-teal-400 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-teal-800 text-amber-300 flex items-center justify-center text-xl font-bold mb-4 shadow-sm">
                        🌾
                    </div>
                    <span class="text-[10px] font-bold text-teal-700 bg-white border border-teal-200 px-2.5 py-0.5 rounded-full uppercase">
                        RW 06 – RW 09
                    </span>
                    <h3 class="text-lg font-bold text-teal-950 mt-2 mb-2">Dusun Kebonan</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        Lumbung pangan utama desa. Hamparan persawahan padi organik, hortikultura sayuran hijau, dan kebun pisang mas.
                    </p>
                    <ul class="text-[11px] text-teal-900 font-medium space-y-1.5 border-t border-teal-200/60 pt-3">
                        <li class="flex items-center gap-2"><span>✔</span> 380+ Ha Sawah Beririgasi</li>
                        <li class="flex items-center gap-2"><span>✔</span> Gabungan Kelompok Tani</li>
                        <li class="flex items-center gap-2"><span>✔</span> Agrowisata Sunrise Semeru</li>
                    </ul>
                </div>

                <!-- Dusun Sukoasri -->
                <div class="bg-teal-50/50 rounded-2xl p-6 border border-teal-100 hover:border-teal-400 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-teal-800 text-amber-300 flex items-center justify-center text-xl font-bold mb-4 shadow-sm">
                        🥛
                    </div>
                    <span class="text-[10px] font-bold text-teal-700 bg-white border border-teal-200 px-2.5 py-0.5 rounded-full uppercase">
                        RW 10 – RW 14
                    </span>
                    <h3 class="text-lg font-bold text-teal-950 mt-2 mb-2">Dusun Sukoasri</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        Pusat peternakan rakyat modern: sapi perah, kambing etawa, perlebahan madu hutan, dan budidaya tanaman obat keluarga (TOGA).
                    </p>
                    <ul class="text-[11px] text-teal-900 font-medium space-y-1.5 border-t border-teal-200/60 pt-3">
                        <li class="flex items-center gap-2"><span>✔</span> Sentra Susu Kambing Murni</li>
                        <li class="flex items-center gap-2"><span>✔</span> Madu Hutan Liar Semeru</li>
                        <li class="flex items-center gap-2"><span>✔</span> Wisata Aliran Kali Jernih</li>
                    </ul>
                </div>

                <!-- Dusun Wanasari -->
                <div class="bg-teal-50/50 rounded-2xl p-6 border border-teal-100 hover:border-teal-400 transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-teal-800 text-amber-300 flex items-center justify-center text-xl font-bold mb-4 shadow-sm">
                        🪵
                    </div>
                    <span class="text-[10px] font-bold text-teal-700 bg-white border border-teal-200 px-2.5 py-0.5 rounded-full uppercase">
                        RW 15 – RW 18
                    </span>
                    <h3 class="text-lg font-bold text-teal-950 mt-2 mb-2">Dusun Wanasari</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        Kawasan perbukitan dan rumpun bambu lestari. Menjadi sentra kerajinan kriya anyaman tradisional dan perkebunan kopi robusta.
                    </p>
                    <ul class="text-[11px] text-teal-900 font-medium space-y-1.5 border-t border-teal-200/60 pt-3">
                        <li class="flex items-center gap-2"><span>✔</span> 25+ Pengrajin Anyaman</li>
                        <li class="flex items-center gap-2"><span>✔</span> Kebun Kopi & Cengkeh</li>
                        <li class="flex items-center gap-2"><span>✔</span> Sentra Kemasan Ramah Lingkungan</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 6. ACTION BANNER: ETALASE BUMDES & DAFTAR UMKM -->
    <!-- ============================================== -->
    <section id="daftarkan" class="py-16 bg-gradient-to-br from-teal-950 via-teal-900 to-teal-800 text-white relative overflow-hidden scroll-mt-24">
        <!-- Glow accents -->
        <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-amber-400/10 blur-3xl"></div>
        <div class="absolute -left-20 -top-20 w-80 h-80 rounded-full bg-teal-600/20 blur-3xl"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-teal-900/60 border border-teal-700/60 rounded-3xl p-8 sm:p-12 backdrop-blur-md shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <div class="lg:col-span-8 text-center lg:text-left">
                        <span class="inline-flex items-center gap-2 bg-amber-400/20 text-amber-300 border border-amber-400/30 px-3.5 py-1 rounded-full text-xs font-bold mb-4">
                            🤝 SINERGI BUMDES "PASIRIAN SEJAHTERA"
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white mb-3">
                            Punya Produk atau Usaha di Desa Pasirian?
                        </h2>
                        <p class="text-xs sm:text-sm text-teal-200 leading-relaxed mb-6 max-w-xl">
                            Daftarkan produk Anda ke Katalog Resmi Desa secara <strong class="text-white">GRATIS</strong>. Dapatkan bantuan sertifikasi halal, foto produk profesional, pengemasan modern, serta akses pameran UMKM se-Kabupaten Lumajang!
                        </p>
                        
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 text-xs text-teal-200">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                100% Bebas Biaya
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                Pendampingan NIB & P-IRT
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                Promosi di Website Resmi
                            </span>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col gap-3">
                        <a href="https://wa.me/6281234567890?text=Halo%20BUMDes%20Pasirian,%20saya%20warga%20Pasirian%20ingin%20mendaftarkan%20usaha%20UMKM%20saya" 
                           target="_blank"
                           class="w-full inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-500 active:bg-amber-600 text-teal-950 font-bold px-6 py-3.5 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-xs sm:text-sm">
                            <span>📲 Daftarkan Produk via WA</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="{{ url('/') }}"
                           class="w-full inline-flex items-center justify-center gap-2 bg-teal-800/80 hover:bg-teal-700 text-teal-100 font-semibold px-6 py-3 rounded-2xl border border-teal-600 transition text-xs">
                            <span>📍 Kantor BUMDes Balai Desa</span>
                        </a>
                    </div>

                </div>
            </div>
            
            <!-- Tombol Kembali Bawah -->
            <div class="mt-8 text-center">
                <a href="{{ url('/') }}"
                   class="inline-flex items-center gap-2 text-xs text-teal-300 hover:text-white transition">
                    &larr; Kembali ke Halaman Utama Desa
                </a>
            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- SCRIPT FILTER PRODUK INTERAKTIF -->
    <!-- ============================================== -->
    <script>
        function filterProduk(kategori) {
            // Update Active Filter Buttons Styling
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                btn.className = 'filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-gray-100 hover:bg-teal-50 text-gray-700 hover:text-teal-900 border border-gray-200';
            });

            if (event && event.currentTarget) {
                event.currentTarget.className = 'filter-btn active px-4 py-2 rounded-xl text-xs font-bold transition bg-amber-400 text-teal-950 shadow-sm';
            }

            // Filter Product Cards
            const cards = document.querySelectorAll('#produk-grid .produk-card');
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