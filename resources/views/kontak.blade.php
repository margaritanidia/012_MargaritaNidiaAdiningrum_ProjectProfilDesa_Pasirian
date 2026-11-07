@extends('layouts.frontend')

@section('content')
    <!-- ============================================== -->
    <!-- 1. HERO BANNER PERSIS DENGAN DNA WEBSITE DESA -->
    <!-- ============================================== -->
    <div class="relative bg-teal-950 text-white pt-20 pb-14 md:pt-24 md:pb-16 overflow-hidden">
        <!-- Panorama Semeru Sama Persis Seperti Halaman Lainnya -->
        <div class="absolute inset-0 opacity-25">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&q=80&w=1600" 
                 alt="Panorama Semeru Pasirian" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/80 to-transparent"></div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            <!-- Badge Emas (Sama Persis Seperti Halaman Lainnya) -->
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/20 via-amber-400/30 to-amber-500/20 text-amber-300 border border-amber-400/40 px-4 py-1.5 rounded-full text-xs font-bold mb-4 shadow-lg backdrop-blur-md">
                <span>📞</span>
                <span>PUSAT LAYANAN & ASPIRASI WARGA PASIRIAN</span>
            </div>

            <!-- Breadcrumb Navigation -->
            <nav class="flex items-center justify-center gap-2 text-xs text-teal-200 mb-3">
                <a href="{{ url('/') }}" class="hover:text-amber-300 transition">Beranda</a>
                <span>/</span>
                <span class="text-amber-400 font-semibold">Kontak & Layanan Warga</span>
            </nav>

            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white mb-3">
                Hubungi Pemerintah Desa Pasirian
            </h1>
            <p class="text-sm sm:text-base text-teal-100 max-w-2xl mx-auto leading-relaxed mb-6">
                Butuh informasi pelayanan surat, ingin menyampaikan aspirasi pembangunan, atau butuh bantuan darurat desa? Kami siap melayani warga dengan ramah dan cepat.
            </p>

            <!-- 4 Kartu Cepat Kontak Langsung (To The Point & Informatif) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 max-w-4xl mx-auto">
                <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Desa%20Pasirian,%20saya%20ingin%20bertanya" 
                   target="_blank"
                   class="bg-teal-900/70 hover:bg-teal-800/80 border border-teal-700/60 rounded-2xl p-4 text-center transition group backdrop-blur-sm">
                    <span class="text-2xl block mb-1 group-hover:scale-110 transition-transform">💬</span>
                    <p class="text-xs font-bold text-amber-400">WhatsApp Resmi</p>
                    <p class="text-[11px] text-teal-200 mt-0.5">0812-3456-7890</p>
                </a>

                <div class="bg-teal-900/70 border border-teal-700/60 rounded-2xl p-4 text-center backdrop-blur-sm">
                    <span class="text-2xl block mb-1">⏱️</span>
                    <p class="text-xs font-bold text-amber-400">Jam Pelayanan</p>
                    <p class="text-[11px] text-teal-200 mt-0.5">Senin - Jumat 08:00 - 15:00</p>
                </div>

                <div class="bg-teal-900/70 border border-teal-700/60 rounded-2xl p-4 text-center backdrop-blur-sm">
                    <span class="text-2xl block mb-1">📧</span>
                    <p class="text-xs font-bold text-amber-400">Email Surat</p>
                    <p class="text-[11px] text-teal-200 mt-0.5">pemdes@pasirian.desa.id</p>
                </div>

                <a href="#lokasi-map" 
                   class="bg-teal-900/70 hover:bg-teal-800/80 border border-teal-700/60 rounded-2xl p-4 text-center transition group backdrop-blur-sm">
                    <span class="text-2xl block mb-1 group-hover:scale-110 transition-transform">📍</span>
                    <p class="text-xs font-bold text-amber-400">Lokasi Kantor</p>
                    <p class="text-[11px] text-teal-200 mt-0.5">Balai Desa Pasirian</p>
                </a>
            </div>

        </div>
    </div>

    <!-- ============================================== -->
    <!-- 2. KONTEN UTAMA: DUA KOLOM PRAKTIS & TIDAK BELIBET -->
    <!-- ============================================== -->
    <section class="py-14 bg-gray-50/70">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- ============================================== -->
                <!-- KOLOM KIRI: INFO KANTOR, JADWAL & NOMOR DARURAT (lg:col-span-5) -->
                <!-- ============================================== -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Kartu Informasi Balai Desa -->
                    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-gray-200 shadow-sm">
                        <span class="inline-flex items-center gap-1.5 text-[11px] font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-4">
                            🏛️ KANTOR PEMERINTAH DESA
                        </span>
                        
                        <h2 class="text-xl font-bold text-teal-950 mb-2">
                            Balai Desa Pasirian
                        </h2>
                        <p class="text-xs text-gray-600 leading-relaxed mb-6">
                            Jl. Raya Pasirian No. 12, Kecamatan Pasirian, Kabupaten Lumajang, Jawa Timur 67372.
                        </p>

                        <!-- List Detail Kontak Rapi -->
                        <div class="space-y-4 text-xs">
                            <div class="flex items-start gap-3.5 pb-3 border-b border-gray-100">
                                <div class="w-8 h-8 rounded-xl bg-teal-50 text-teal-800 flex items-center justify-center font-bold flex-shrink-0">
                                    📍
                                </div>
                                <div>
                                    <span class="text-gray-400 block text-[10px] uppercase font-bold">Wilayah Pelayanan</span>
                                    <span class="font-semibold text-gray-800">4 Dusun: Krajan, Kebonan, Sukoasri, Wanasari (18 RW)</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5 pb-3 border-b border-gray-100">
                                <div class="w-8 h-8 rounded-xl bg-teal-50 text-teal-800 flex items-center justify-center font-bold flex-shrink-0">
                                    🕒
                                </div>
                                <div>
                                    <span class="text-gray-400 block text-[10px] uppercase font-bold">Jadwal Buka Pelayanan</span>
                                    <p class="font-semibold text-gray-800">Senin – Kamis : 08.00 – 15.00 WIB</p>
                                    <p class="font-semibold text-gray-800">Jumat : 08.00 – 11.30 WIB</p>
                                    <span class="text-[11px] text-gray-400">(Sabtu, Minggu & Hari Libur Nasional Tutup)</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5">
                                <div class="w-8 h-8 rounded-xl bg-teal-50 text-teal-800 flex items-center justify-center font-bold flex-shrink-0">
                                    💬
                                </div>
                                <div class="flex-1">
                                    <span class="text-gray-400 block text-[10px] uppercase font-bold">Layanan Mandiri Cepat</span>
                                    <p class="font-semibold text-gray-800 mb-2">Respon cepat via WhatsApp pada jam kerja pelayanan.</p>
                                    <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Desa%20Pasirian,%20saya%20warga%20Pasirian%20ingin%20mengurus%20layanan%20surat" 
                                       target="_blank"
                                       class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-bold text-xs transition shadow-sm">
                                        <span>Chat WhatsApp Admin</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Kartu Nomor Darurat Desa 24 Jam (Sangat Dibutuhkan Warga) -->
                    <div class="bg-gradient-to-br from-teal-950 to-teal-900 rounded-3xl p-6 text-white border border-teal-800 shadow-sm">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-400 animate-pulse"></span>
                            <span class="text-xs font-bold text-amber-300 uppercase tracking-wider">
                                Kontak Darurat Warga (24 Jam)
                            </span>
                        </div>
                        <p class="text-xs text-teal-200 mb-4">
                            Hubungi nomor berikut jika terjadi keadaan darurat bencana, kesehatan mendadak, atau gangguan keamanan di lingkungan Anda:
                        </p>

                        <div class="space-y-2 text-xs">
                            <a href="tel:081234567891" class="flex items-center justify-between p-3 rounded-xl bg-teal-900/60 hover:bg-teal-800/80 border border-teal-700/60 transition">
                                <span class="flex items-center gap-2">
                                    <span>🚑</span>
                                    <span class="font-medium text-white">Mobil Siaga / Ambulans Desa</span>
                                </span>
                                <span class="font-bold text-amber-400">0812-3456-7891</span>
                            </a>

                            <a href="tel:081234567892" class="flex items-center justify-between p-3 rounded-xl bg-teal-900/60 hover:bg-teal-800/80 border border-teal-700/60 transition">
                                <span class="flex items-center gap-2">
                                    <span>👮</span>
                                    <span class="font-medium text-white">Bhabinkamtibmas (Polsek)</span>
                                </span>
                                <span class="font-bold text-amber-400">0812-3456-7892</span>
                            </a>

                            <a href="tel:081234567893" class="flex items-center justify-between p-3 rounded-xl bg-teal-900/60 hover:bg-teal-800/80 border border-teal-700/60 transition">
                                <span class="flex items-center gap-2">
                                    <span>🛡️</span>
                                    <span class="font-medium text-white">Posko Satlinmas Desa</span>
                                </span>
                                <span class="font-bold text-amber-400">0812-3456-7893</span>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- ============================================== -->
                <!-- KOLOM KANAN: FORMULIR PESAN & ASPIRASI (lg:col-span-7) -->
                <!-- ============================================== -->
                <div class="lg:col-span-7">
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-200 shadow-sm">
                        
                        <div class="mb-6">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-bold text-amber-800 bg-amber-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                                ✍️ FORMULIR ASPIRASI & PENGADUAN
                            </span>
                            <h2 class="text-xl sm:text-2xl font-bold text-teal-950">
                                Kirim Pesan Langsung ke Kantor Desa
                            </h2>
                            <p class="text-xs sm:text-sm text-gray-500 mt-1">
                                Sampaikan pertanyaan, permohonan informasi, kritik, atau saran untuk kemajuan Desa Pasirian. Data Anda dijaga kerahasiaannya.
                            </p>
                        </div>

                        <!-- Flash Message Notifikasi Sukses -->
                        @if(session('success'))
                            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs flex items-center gap-3">
                                <span class="text-lg">✅</span>
                                <div>
                                    <strong class="font-bold">Pesan Terkirim!</strong>
                                    <p class="mt-0.5">{{ session('success') }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- Formulir Bersih & Tidak Belibet -->
                        <form action="{{ route('kontak.kirim') ?? '#' }}" method="POST" class="space-y-4">
                            @csrf

                            <!-- Baris 1: Nama & Kontak -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="nama" class="block text-xs font-bold text-gray-700 mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" 
                                           id="nama" 
                                           name="nama" 
                                           required 
                                           value="{{ old('nama') }}"
                                           placeholder="Contoh: Budi Santoso" 
                                           class="w-full px-4 py-2.5 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-600 focus:border-teal-600 outline-none transition">
                                    @error('nama')
                                        <p class="text-red-500 text-[11px] mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="kontak" class="block text-xs font-bold text-gray-700 mb-1">No. WhatsApp / HP Aktif <span class="text-red-500">*</span></label>
                                    <input type="text" 
                                           id="kontak" 
                                           name="kontak" 
                                           required 
                                           value="{{ old('kontak') }}"
                                           placeholder="Contoh: 081234567890" 
                                           class="w-full px-4 py-2.5 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-600 focus:border-teal-600 outline-none transition">
                                    @error('kontak')
                                        <p class="text-red-500 text-[11px] mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Baris 2: Asal Dusun & Kategori Keperluan -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="dusun" class="block text-xs font-bold text-gray-700 mb-1">Asal Dusun Domisili</label>
                                    <select id="dusun" 
                                            name="dusun" 
                                            class="w-full px-4 py-2.5 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-600 focus:border-teal-600 outline-none transition text-gray-700">
                                        <option value="Dusun Krajan">Dusun Krajan (RW 01 - RW 05)</option>
                                        <option value="Dusun Kebonan">Dusun Kebonan (RW 06 - RW 09)</option>
                                        <option value="Dusun Sukoasri">Dusun Sukoasri (RW 10 - RW 14)</option>
                                        <option value="Dusun Wanasari">Dusun Wanasari (RW 15 - RW 18)</option>
                                        <option value="Luar Desa">Warga Luar Desa Pasirian</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="kategori" class="block text-xs font-bold text-gray-700 mb-1">Kategori Pesan</label>
                                    <select id="kategori" 
                                            name="kategori" 
                                            class="w-full px-4 py-2.5 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-600 focus:border-teal-600 outline-none transition text-gray-700">
                                        <option value="Layanan Surat">Layanan Kependudukan / Surat Menyurat</option>
                                        <option value="Aspirasi Pembangunan">Aspirasi & Usulan Pembangunan</option>
                                        <option value="Pengaduan Lingkungan">Pengaduan / Laporan Lingkungan</option>
                                        <option value="UMKM & Potensi">Pendaftaran UMKM & Potensi Desa</option>
                                        <option value="Lainnya">Pertanyaan Umum Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Baris 3: Isi Pesan -->
                            <div>
                                <label for="pesan" class="block text-xs font-bold text-gray-700 mb-1">Isi Pesan / Keterangan <span class="text-red-500">*</span></label>
                                <textarea id="pesan" 
                                          name="pesan" 
                                          rows="4" 
                                          required 
                                          placeholder="Tuliskan pesan, permohonan informasi, atau aduan Anda secara jelas di sini..." 
                                          class="w-full px-4 py-3 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-600 focus:border-teal-600 outline-none transition resize-none">{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <p class="text-red-500 text-[11px] mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Tombol Kirim Padat & Nyaman -->
                            <button type="submit" 
                                    class="w-full inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-500 active:bg-amber-600 text-teal-950 font-bold px-6 py-3.5 rounded-xl shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all text-xs sm:text-sm">
                                <span>Kirimkan Aspirasi / Pesan Sekarang</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>

                            <p class="text-[11px] text-gray-400 text-center mt-2">
                                🔒 Pesan akan langsung masuk ke sekretariat pelayanan Balai Desa Pasirian.
                            </p>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 3. PETA LOKASI BALAI DESA (LANGSUNG TERTAMPIL JELAS) -->
    <!-- ============================================== -->
    <section id="lokasi-map" class="py-14 bg-white border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
                <div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-100 px-3 py-1 rounded-full uppercase tracking-wider mb-2">
                        🗺️ PETA LOKASI
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-teal-950">
                        Denah Lokasi Kantor Balai Desa Pasirian
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1">
                        Terletak di jalur strategis kecamatan, mudah dijangkau dari seluruh penjuru 4 dusun.
                    </p>
                </div>
                
                <div class="mt-4 md:mt-0">
                    <a href="https://maps.google.com/?q=Pasirian+Lumajang" 
                       target="_blank"
                       class="inline-flex items-center gap-2 px-5 py-2.5 bg-teal-800 hover:bg-teal-900 text-white text-xs font-bold rounded-xl transition shadow-sm">
                        <span>📍 Buka di Google Maps</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                </div>
            </div>

            <!-- Embed Google Maps Mulus & Bersih -->
            <div class="rounded-3xl overflow-hidden border border-gray-200 shadow-md h-80 sm:h-96 w-full bg-gray-100">
                <iframe 
                    title="Peta Lokasi Desa Pasirian"
                    class="w-full h-full border-0" 
                    src="https://maps.google.com/maps?q=Kantor+Desa+Pasirian+Lumajang&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    loading="lazy" 
                    allowfullscreen>
                </iframe>
            </div>

        </div>
    </section>
@endsection