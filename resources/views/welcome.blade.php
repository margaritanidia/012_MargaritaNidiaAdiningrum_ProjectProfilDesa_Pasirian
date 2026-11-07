@extends('layouts.frontend')

@section('content')
    <!-- Memanggil Komponen Hero -->
    @include('components.hero')

    <!-- ============================================== -->
    <!-- 1. SAMBUTAN KEPALA DESA -->
    <!-- ============================================== -->
    <section class="py-12 bg-teal-50/40 border-b border-teal-100/60">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-teal-100 flex flex-col md:flex-row items-center gap-8 relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-44 h-44 bg-teal-50 rounded-full -z-0 opacity-70"></div>
                
                <div class="w-36 h-36 flex-shrink-0 relative z-10">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400" 
                         alt="Foto Kepala Desa Pasirian" 
                         class="w-full h-full object-cover rounded-2xl shadow-md border-2 border-teal-100">
                    <span class="absolute -bottom-2 -right-2 bg-teal-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-md shadow">
                        Aktif
                    </span>
                </div>
                
                <div class="flex-1 text-center md:text-left z-10">
                    <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-teal-800 bg-teal-100/70 px-2.5 py-1 rounded-md">
                            Sambutan Kepala Desa
                        </span>
                    </div>
                    <blockquote class="text-gray-700 text-base md:text-lg italic mb-4 leading-relaxed">
                        “Selamat datang di portal resmi Desa Pasirian. Melalui website ini, kami berkomitmen mewujudkan transparansi informasi, mempermudah pelayanan masyarakat, serta memajukan potensi agrowisata dan UMKM lokal menuju Pasirian yang mandiri, berdaya, dan sejahtera.”
                    </blockquote>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-3 border-t border-gray-100">
                        <div>
                            <h3 class="text-base font-bold text-gray-900">Bpk. Sugeng, S.E.</h3>
                            <p class="text-teal-700 text-xs font-medium">Kepala Desa Pasirian (Periode 2022 - 2028)</p>
                        </div>
                        <a href="#profil" class="inline-flex items-center justify-center gap-1.5 text-xs font-bold text-teal-800 bg-teal-50 hover:bg-teal-100 px-3.5 py-2 rounded-lg transition border border-teal-200/60 self-center sm:self-auto">
                            <span>Baca Profil Desa</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 2. STATISTIK CEPAT DESA -->
    <!-- ============================================== -->
    <section class="py-6 bg-white border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-50 hover:bg-teal-50/50 p-4 rounded-xl border border-gray-100 text-center transition">
                    <p class="text-2xl md:text-3xl font-extrabold text-teal-900">4.850+</p>
                    <p class="text-xs font-medium text-gray-500 mt-1">Total Penduduk (Jiwa)</p>
                </div>
                <div class="bg-gray-50 hover:bg-teal-50/50 p-4 rounded-xl border border-gray-100 text-center transition">
                    <p class="text-2xl md:text-3xl font-extrabold text-teal-900">1.240</p>
                    <p class="text-xs font-medium text-gray-500 mt-1">Kepala Keluarga (KK)</p>
                </div>
                <div class="bg-gray-50 hover:bg-teal-50/50 p-4 rounded-xl border border-gray-100 text-center transition">
                    <p class="text-2xl md:text-3xl font-extrabold text-teal-900">4 Dusun</p>
                    <p class="text-xs font-medium text-gray-500 mt-1">Wilayah Administratif</p>
                </div>
                <div class="bg-gray-50 hover:bg-teal-50/50 p-4 rounded-xl border border-gray-100 text-center transition">
                    <p class="text-2xl md:text-3xl font-extrabold text-amber-600">35+</p>
                    <p class="text-xs font-medium text-gray-500 mt-1">UMKM Warga Aktif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 3. PROFIL & SEJARAH DESA -->
    <!-- ============================================== -->
    <section id="profil" class="py-14 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1.5 rounded-md border border-teal-100">
                        Profil & Sejarah
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-3 mb-4 leading-snug">
                        Jejak Lahir Pasirian, Dari Lereng Semeru Hingga Tanah Subur
                    </h2>
                    <p class="text-gray-600 text-sm mb-3 leading-relaxed">
                        Desa Pasirian memiliki sejarah panjang yang erat kaitannya dengan lereng Gunung Semeru. Sejak zaman kolonial, wilayah ini dikenal sebagai pusat agraris yang subur dan masyarakat yang menjunjung tinggi semangat gotong royong.
                    </p>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        Kini, Pasirian terus berkembang menjadi desa mandiri yang memadukan kelestarian alam dan kemajuan teknologi, mewujudkan pusat pelayanan digital prima tanpa melupakan nilai luhur desa.
                    </p>
                    
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="#pemerintahan" 
                           class="inline-flex items-center gap-2 text-xs font-bold text-white bg-teal-800 hover:bg-teal-900 px-4 py-2.5 rounded-xl shadow-sm transition">
                            <svg class="w-4 h-4 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            <span>Struktur Aparatur</span>
                        </a>
                        <a href="#kontak" 
                           class="inline-flex items-center gap-2 text-xs font-semibold text-teal-800 bg-white border border-gray-200 hover:bg-teal-50 px-4 py-2.5 rounded-xl transition">
                            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            <span>Lokasi Balai Desa</span>
                        </a>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute inset-0 bg-teal-800 rounded-2xl transform translate-x-2.5 translate-y-2.5 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=900" 
                         alt="Panorama Alam dan Persawahan Desa Pasirian" 
                         class="rounded-2xl shadow-md w-full h-72 sm:h-80 object-cover border-4 border-white">
                    <div class="absolute bottom-4 left-4 right-4 bg-teal-950/80 backdrop-blur-md text-white p-3 rounded-xl border border-white/20">
                        <p class="text-xs font-bold">Lereng Gunung Semeru</p>
                        <p class="text-[11px] text-teal-200">Kawasan agraris subur sumber kemakmuran warga Pasirian.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================== -->
    <!-- 4. VISI & MISI DESA -->
    <!-- ============================================== -->
    <section class="py-14 bg-teal-900 text-white relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-teal-200 font-bold uppercase tracking-wider text-xs bg-teal-800/80 px-3 py-1 rounded-full border border-teal-700">
                Arah & Pedoman
            </span>
            <h2 class="text-2xl md:text-3xl font-extrabold mt-2 mb-4">Visi & Misi Pembangunan Desa</h2>
            <p class="text-sm md:text-base italic max-w-3xl mx-auto mb-10 text-teal-100 leading-relaxed font-light">
                "Terwujudnya Desa Pasirian yang Mandiri, Sejahtera, Berdaya Saing Tinggi, Berbasis Agrowisata dan Teknologi Digital Berlandaskan Semangat Gotong Royong."
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                <div class="bg-teal-800/60 p-6 rounded-2xl border-t-4 border-amber-400 hover:-translate-y-1 transition duration-200">
                    <div class="text-2xl font-black text-amber-400 mb-2">01</div>
                    <h3 class="text-base font-bold mb-2 text-white">Pemberdayaan Ekonomi</h3>
                    <p class="text-teal-100 text-xs leading-relaxed">Meningkatkan taraf hidup warga melalui pembinaan UMKM lokal serta optimalisasi potensi agrowisata unggulan desa.</p>
                </div>
                <div class="bg-teal-800/60 p-6 rounded-2xl border-t-4 border-amber-400 hover:-translate-y-1 transition duration-200">
                    <div class="text-2xl font-black text-amber-400 mb-2">02</div>
                    <h3 class="text-base font-bold mb-2 text-white">Pelayanan Digital</h3>
                    <p class="text-teal-100 text-xs leading-relaxed">Mewujudkan birokrasi pemerintahan desa yang terbuka, cepat, akuntabel, dan berbasis sistem informasi terpadu.</p>
                </div>
                <div class="bg-teal-800/60 p-6 rounded-2xl border-t-4 border-amber-400 hover:-translate-y-1 transition duration-200">
                    <div class="text-2xl font-black text-amber-400 mb-2">03</div>
                    <h3 class="text-base font-bold mb-2 text-white">Infrastruktur Berkelanjutan</h3>
                    <p class="text-teal-100 text-xs leading-relaxed">Pembangunan sarana dan prasarana publik yang merata dengan mengedepankan kelestarian lingkungan hidup.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 5. INFORMASI DESA: JAM KERJA & SLIDER APARATUR (PENGGANTI BAGAN LAMA) -->
    <!-- ============================================== -->
    <section id="pemerintahan" class="py-14 bg-gray-50/80 border-y border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-100/70 px-3 py-1 rounded-md">
                    Informasi Desa
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">Informasi & Aparatur Desa</h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Jam pelayanan kantor balai desa dan aparatur yang siap melayani masyarakat.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- KOLOM KIRI: JAM KERJA -->
                <div class="lg:col-span-5 bg-white rounded-3xl shadow-sm border border-gray-200/80 overflow-hidden">
                    <div class="bg-teal-900 text-white p-5 flex items-center gap-3.5">
                        <div class="bg-teal-800 p-2.5 rounded-xl text-amber-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-base text-white leading-tight">Jam Kerja</h3>
                            <p class="text-teal-200 text-xs mt-0.5">Jadwal pelayanan kantor balai desa</p>
                        </div>
                    </div>

                    <div class="p-5 space-y-2.5 text-xs sm:text-sm font-medium" id="jam-kerja-list">
                        <div data-day="1" class="day-row flex items-center justify-between p-2.5 rounded-xl transition hover:bg-gray-50">
                            <span class="font-semibold text-gray-700 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-gray-300 status-dot"></span> Senin
                            </span>
                            <div class="flex items-center gap-2 font-mono text-xs">
                                <span class="bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded font-bold">08:00</span>
                                <span class="text-gray-400">-</span>
                                <span class="bg-amber-50 text-amber-700 px-2 py-0.5 rounded font-bold">15:30</span>
                            </div>
                        </div>

                        <div data-day="2" class="day-row flex items-center justify-between p-2.5 rounded-xl transition hover:bg-gray-50">
                            <span class="font-semibold text-gray-700 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-gray-300 status-dot"></span> Selasa
                            </span>
                            <div class="flex items-center gap-2 font-mono text-xs">
                                <span class="bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded font-bold">08:00</span>
                                <span class="text-gray-400">-</span>
                                <span class="bg-amber-50 text-amber-700 px-2 py-0.5 rounded font-bold">15:30</span>
                            </div>
                        </div>

                        <div data-day="3" class="day-row flex items-center justify-between p-2.5 rounded-xl transition hover:bg-gray-50">
                            <span class="font-semibold text-gray-700 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-gray-300 status-dot"></span> Rabu
                            </span>
                            <div class="flex items-center gap-2 font-mono text-xs">
                                <span class="bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded font-bold">08:00</span>
                                <span class="text-gray-400">-</span>
                                <span class="bg-amber-50 text-amber-700 px-2 py-0.5 rounded font-bold">15:30</span>
                            </div>
                        </div>

                        <div data-day="4" class="day-row flex items-center justify-between p-2.5 rounded-xl transition hover:bg-gray-50">
                            <span class="font-semibold text-gray-700 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-gray-300 status-dot"></span> Kamis
                            </span>
                            <div class="flex items-center gap-2 font-mono text-xs">
                                <span class="bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded font-bold">08:00</span>
                                <span class="text-gray-400">-</span>
                                <span class="bg-amber-50 text-amber-700 px-2 py-0.5 rounded font-bold">15:30</span>
                            </div>
                        </div>

                        <div data-day="5" class="day-row flex items-center justify-between p-2.5 rounded-xl transition hover:bg-gray-50">
                            <span class="font-semibold text-gray-700 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-gray-300 status-dot"></span> Jumat
                            </span>
                            <div class="flex items-center gap-2 font-mono text-xs">
                                <span class="bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded font-bold">08:00</span>
                                <span class="text-gray-400">-</span>
                                <span class="bg-amber-50 text-amber-700 px-2 py-0.5 rounded font-bold">14:30</span>
                            </div>
                        </div>

                        <div data-day="6" class="day-row flex items-center justify-between p-2.5 rounded-xl bg-gray-50/70">
                            <span class="font-medium text-gray-400 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-gray-300"></span> Sabtu
                            </span>
                            <span class="text-[11px] font-bold text-gray-400 bg-gray-200/80 px-2.5 py-0.5 rounded-full">Libur</span>
                        </div>

                        <div data-day="0" class="day-row flex items-center justify-between p-2.5 rounded-xl bg-gray-50/70">
                            <span class="font-medium text-gray-400 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-gray-300"></span> Minggu
                            </span>
                            <span class="text-[11px] font-bold text-gray-400 bg-gray-200/80 px-2.5 py-0.5 rounded-full">Libur</span>
                        </div>
                    </div>

                    <div class="px-5 py-3.5 bg-gray-50 border-t border-gray-100 flex items-center justify-between text-xs">
                        <span class="text-gray-500 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Layanan kantor sesuai jam kerja
                        </span>
                        <a href="#kontak" class="inline-flex items-center gap-1 font-bold text-teal-800 hover:text-teal-950 bg-teal-100/70 px-2.5 py-1 rounded-md transition">
                            Hubungi Balai &rarr;
                        </a>
                    </div>
                </div>

                <!-- KOLOM KANAN: SLIDER 3D APARATUR DESA -->
                <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-7 shadow-sm border border-gray-200/80">
                    <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="bg-teal-100 text-teal-800 p-2.5 rounded-xl">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-base text-gray-900 leading-tight">Aparatur Desa</h3>
                                <p class="text-xs text-gray-500 mt-0.5">Perangkat yang siap melayani kebutuhan warga</p>
                            </div>
                        </div>
                        <span class="text-xs font-bold text-teal-700 bg-teal-50 px-3 py-1 rounded-full border border-teal-100">
                            Geser Foto &harr;
                        </span>
                    </div>

                    <!-- Wadah Slider -->
                    <div class="relative w-full overflow-hidden select-none py-4" id="coverflow-container">
                        <div class="relative h-80 flex items-center justify-center" id="coverflow-track">
                            
                            <!-- 1. Kades -->
                            <div class="coverflow-item absolute w-52 h-72 rounded-2xl overflow-hidden shadow-lg border-2 border-white transition-all duration-500 cursor-pointer" data-index="0">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400" alt="Bpk. Sugeng, S.E." class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/40 to-transparent flex flex-col justify-end p-4 text-center">
                                    <h4 class="text-white font-bold text-sm tracking-wide">Bpk. Sugeng, S.E.</h4>
                                    <p class="text-amber-300 text-xs font-semibold">Kepala Desa Pasirian</p>
                                </div>
                            </div>

                            <!-- 2. Sekdes -->
                            <div class="coverflow-item absolute w-52 h-72 rounded-2xl overflow-hidden shadow-lg border-2 border-white transition-all duration-500 cursor-pointer" data-index="1">
                                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400" alt="Ahmad Fauzi" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/40 to-transparent flex flex-col justify-end p-4 text-center">
                                    <h4 class="text-white font-bold text-sm tracking-wide">Ahmad Fauzi</h4>
                                    <p class="text-amber-300 text-xs font-semibold">Sekretaris Desa</p>
                                </div>
                            </div>

                            <!-- 3. Kaur Keuangan -->
                            <div class="coverflow-item absolute w-52 h-72 rounded-2xl overflow-hidden shadow-lg border-2 border-white transition-all duration-500 cursor-pointer" data-index="2">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400" alt="Siti Aminah" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/40 to-transparent flex flex-col justify-end p-4 text-center">
                                    <h4 class="text-white font-bold text-sm tracking-wide">Siti Aminah</h4>
                                    <p class="text-amber-300 text-xs font-semibold">Kaur Keuangan</p>
                                </div>
                            </div>

                            <!-- 4. Kasi Pemerintahan -->
                            <div class="coverflow-item absolute w-52 h-72 rounded-2xl overflow-hidden shadow-lg border-2 border-white transition-all duration-500 cursor-pointer" data-index="3">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=400" alt="Budi Santoso" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/40 to-transparent flex flex-col justify-end p-4 text-center">
                                    <h4 class="text-white font-bold text-sm tracking-wide">Budi Santoso</h4>
                                    <p class="text-amber-300 text-xs font-semibold">Kasi Pemerintahan</p>
                                </div>
                            </div>

                            <!-- 5. Kasi Kesejahteraan -->
                            <div class="coverflow-item absolute w-52 h-72 rounded-2xl overflow-hidden shadow-lg border-2 border-white transition-all duration-500 cursor-pointer" data-index="4">
                                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=400" alt="Ratna Dewi" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-teal-950 via-teal-950/40 to-transparent flex flex-col justify-end p-4 text-center">
                                    <h4 class="text-white font-bold text-sm tracking-wide">Ratna Dewi</h4>
                                    <p class="text-amber-300 text-xs font-semibold">Kasi Kesejahteraan</p>
                                </div>
                            </div>

                        </div>

                        <!-- Panah Navigasi -->
                        <button type="button" id="coverflow-prev" aria-label="Sebelumnya"
                                class="absolute left-2 top-1/2 -translate-y-1/2 z-30 w-9 h-9 rounded-full bg-white/95 text-teal-900 shadow-md hover:bg-teal-700 hover:text-white transition flex items-center justify-center border border-gray-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        
                        <button type="button" id="coverflow-next" aria-label="Selanjutnya"
                                class="absolute right-2 top-1/2 -translate-y-1/2 z-30 w-9 h-9 rounded-full bg-white/95 text-teal-900 shadow-md hover:bg-teal-700 hover:text-white transition flex items-center justify-center border border-gray-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>

                    <!-- Indikator Dots -->
                    <div class="flex justify-center items-center gap-1.5 mt-2" id="coverflow-dots"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 6. POTENSI DESA & UMKM -->
    <!-- ============================================== -->
    <section id="potensi" class="py-14 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1.5 rounded-md border border-teal-100">
                    Produk & Potensi
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">Katalog Potensi Alam & UMKM Warga</h2>
                <p class="mt-2 text-gray-600 max-w-xl mx-auto text-sm">Menampilkan ragam komoditas unggulan dan kerajinan tangan khas Desa Pasirian.</p>

                <!-- Filter Kategori Button Group -->
                <div class="flex flex-wrap justify-center gap-2 mt-6">
                    <button type="button" class="px-3.5 py-1.5 rounded-full text-xs font-bold bg-teal-800 text-white shadow-sm">
                        Semua Kategori
                    </button>
                    <button type="button" class="px-3.5 py-1.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200 transition">
                        🌾 Agrikultur
                    </button>
                    <button type="button" class="px-3.5 py-1.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200 transition">
                        🪵 Kerajinan Tangan
                    </button>
                    <button type="button" class="px-3.5 py-1.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200 transition">
                        🍌 Kuliner Khas
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg border border-gray-100 transition flex flex-col overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1595841696677-6489ff3f8cd1?auto=format&fit=crop&q=80&w=600" 
                             alt="Pertanian Padi Organik" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-2.5 py-0.5 rounded-full shadow-sm">
                            <span class="text-teal-800 font-bold text-[11px]">Agrikultur</span>
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base font-bold text-gray-900 mb-1.5">Pertanian Padi Organik</h3>
                            <p class="text-gray-600 text-xs mb-4 leading-relaxed">Hamparan sawah subur di lereng Semeru menghasilkan beras organik berkualitas tinggi tanpa pestisida kimia.</p>
                        </div>
                        <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">Tersedia Panen</span>
                            <a href="#kontak" class="inline-flex items-center gap-1 text-xs font-bold text-teal-700 hover:text-teal-900">
                                <span>Detail Produk</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg border border-gray-100 transition flex flex-col overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&q=80&w=600" 
                             alt="Kerajinan Anyaman Bambu" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-2.5 py-0.5 rounded-full shadow-sm">
                            <span class="text-teal-800 font-bold text-[11px]">Kerajinan</span>
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base font-bold text-gray-900 mb-1.5">Kerajinan Anyaman Bambu</h3>
                            <p class="text-gray-600 text-xs mb-4 leading-relaxed">Produk anyaman bambu khas Pasirian dengan desain estetis dan ramah lingkungan yang diminati pasar lokal.</p>
                        </div>
                        <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-blue-700 bg-blue-50 px-2 py-0.5 rounded">Kerajinan Tangan</span>
                            <a href="#kontak" class="inline-flex items-center gap-1 text-xs font-bold text-teal-700 hover:text-teal-900">
                                <span>Detail Produk</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg border border-gray-100 transition flex flex-col overflow-hidden group">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&q=80&w=600" 
                             alt="Keripik Pisang Semeru" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-2.5 py-0.5 rounded-full shadow-sm">
                            <span class="text-teal-800 font-bold text-[11px]">Kuliner</span>
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-base font-bold text-gray-900 mb-1.5">Keripik Pisang Semeru</h3>
                            <p class="text-gray-600 text-xs mb-4 leading-relaxed">Olahan pisang lokal pilihan dengan aneka rasa renyah, menjadi komoditas oleh-oleh andalan desa.</p>
                        </div>
                        <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-amber-700 bg-amber-50 px-2 py-0.5 rounded">Siap Kirim</span>
                            <a href="#kontak" class="inline-flex items-center gap-1 text-xs font-bold text-teal-700 hover:text-teal-900">
                                <span>Detail Produk</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ACTION BANNER -->
            <div class="mt-10 bg-gradient-to-r from-teal-50 via-white to-amber-50/50 p-6 rounded-2xl border border-teal-100 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
                <div>
                    <h4 class="text-sm font-bold text-gray-900">Punya Produk UMKM di Desa Pasirian?</h4>
                    <p class="text-xs text-gray-600 mt-0.5">Daftarkan produk Anda untuk dipromosikan secara gratis di etalase resmi desa.</p>
                </div>
                <div class="flex items-center gap-2.5 flex-shrink-0">
                    <a href="#kontak" 
                       class="inline-flex items-center gap-1.5 px-4 py-2 bg-amber-400 hover:bg-amber-500 text-teal-950 text-xs font-bold rounded-xl shadow-sm transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        <span>Daftarkan Usaha</span>
                    </a>
                    <a href="#kontak" 
                       class="inline-flex items-center gap-1.5 px-4 py-2 bg-teal-800 hover:bg-teal-900 text-white text-xs font-semibold rounded-xl shadow-sm transition">
                        <span>Lihat Semua Katalog</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 7. BERITA & WARTA DESA -->
    <!-- ============================================== -->
    <section id="berita" class="py-14 bg-gray-50 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-3">
                <div>
                    <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-100/60 px-3 py-1 rounded-md">
                        Informasi Terkini
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">Warta & Kabar Desa</h2>
                </div>
                
                <a href="{{ Route::has('berita.index') ? route('berita.index') : '#berita' }}" 
                   class="inline-flex items-center gap-2 px-3.5 py-2 text-xs font-semibold text-teal-800 bg-white border border-gray-200 rounded-xl hover:bg-teal-50 shadow-sm transition">
                    <span>Semua Berita</span>
                    <svg class="w-3.5 h-3.5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse (($beritas ?? []) as $item)
                    <article class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 transition flex flex-col h-full overflow-hidden">
                        @if(!empty($item->gambar))
                            <img src="{{ asset('storage/' . $item->gambar) }}" 
                                 alt="{{ $item->judul }}" 
                                 class="w-full h-44 object-cover">
                        @else
                            <div class="w-full h-44 bg-teal-50 flex items-center justify-center text-teal-600">
                                <svg class="w-10 h-10 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                            </div>
                        @endif
                        
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                @if(isset($item->created_at))
                                    <time class="text-[11px] font-semibold text-gray-400 block mb-1.5">
                                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                                    </time>
                                @endif
                                <h3 class="text-base font-bold text-gray-900 mb-2 line-clamp-2 hover:text-teal-700 transition">
                                    {{ $item->judul }}
                                </h3>
                                <p class="text-gray-600 text-xs mb-3 line-clamp-2 leading-relaxed">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->konten ?? ''), 100) }}
                                </p>
                            </div>
                            <div class="pt-3 border-t border-gray-100">
                                <a href="{{ Route::has('berita.show') ? route('berita.show', $item->slug ?? $item->id) : '#' }}" 
                                   class="inline-flex items-center gap-1 text-xs font-bold text-teal-700 hover:text-teal-900">
                                    <span>Baca Selengkapnya</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-1 md:col-span-3 text-center py-12 bg-white rounded-2xl border border-gray-100">
                        <svg class="w-12 h-12 text-gray-300 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        <p class="text-gray-500 text-xs">Belum ada warta berita yang dipublikasikan saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 8. GALERI KEGIATAN & FOTO -->
    <!-- ============================================== -->
    <section id="galeri" class="py-14 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-8">
                <div>
                    <span class="text-teal-700 font-bold uppercase tracking-wider text-xs bg-teal-50 px-3 py-1.5 rounded-md border border-teal-100">
                        Dokumentasi
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mt-2">Potret Kehidupan Desa</h2>
                </div>
                <span class="text-xs font-semibold text-gray-500 hidden sm:inline-block">Koleksi Foto & Video Warga</span>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3.5">
                <div class="aspect-square overflow-hidden rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f0a?auto=format&fit=crop&q=80&w=500" 
                         alt="Dokumentasi 1" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-300">
                </div>
                <div class="aspect-square overflow-hidden rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1595841696677-6489ff3f8cd1?auto=format&fit=crop&q=80&w=500" 
                         alt="Dokumentasi 2" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-300">
                </div>
                <div class="aspect-square overflow-hidden rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1523730205978-59fd1b2965e3?auto=format&fit=crop&q=80&w=500" 
                         alt="Dokumentasi 3" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-300">
                </div>
                <div class="aspect-square overflow-hidden rounded-xl shadow-sm hover:shadow-md transition relative group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=500" 
                         alt="Dokumentasi 4" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-teal-950/70 backdrop-blur-[2px] flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-200 p-2">
                        <span class="inline-flex items-center gap-1.5 bg-white text-teal-900 px-3 py-1.5 rounded-lg text-xs font-bold shadow">
                            <svg class="w-3.5 h-3.5 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span>Lihat Galeri</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 9. KONTAK & PENGADUAN WARGA -->
    <!-- ============================================== -->
    <section id="kontak" class="py-14 bg-teal-900 text-white relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <span class="text-amber-400 font-bold uppercase tracking-wider text-xs bg-teal-800/80 px-3 py-1 rounded-md border border-teal-700/50">
                        Kontak Terpadu
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold mt-2 mb-4">Pusat Layanan Informasi Desa</h2>
                    <p class="text-teal-100 mb-6 leading-relaxed text-xs sm:text-sm">
                        Kami siap melayani dan mendengarkan aspirasi Anda demi kemajuan bersama Desa Pasirian.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="bg-teal-800 p-2.5 rounded-xl flex-shrink-0 border border-teal-700/50">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xs text-white">Alamat Kantor Desa</h4>
                                <p class="text-teal-200 text-xs mt-0.5">Jl. Raya Pasirian No. 123, Kec. Pasirian, Kab. Lumajang, Jawa Timur 67372</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-teal-800 p-2.5 rounded-xl flex-shrink-0 border border-teal-700/50">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xs text-white">Telepon</h4>
                                <p class="text-teal-200 text-xs mt-0.5">(0334) 123456</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-teal-800 p-2.5 rounded-xl flex-shrink-0 border border-teal-700/50">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xs text-white">Email</h4>
                                <p class="text-teal-200 text-xs mt-0.5">pemdes@pasirian.desa.id</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 sm:p-7 shadow-lg text-gray-900 border border-gray-100">
                    <h3 class="text-lg font-bold mb-1 text-teal-950">Kirim Pesan / Aspirasi</h3>
                    <p class="text-xs text-gray-500 mb-4">Pesan Anda diteruskan langsung ke bagian pelayanan pengaduan.</p>

                    @if(session('success'))
                        <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-xs flex items-center gap-2">
                            <svg class="w-4 h-4 flex-shrink-0 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ Route::has('kontak.kirim') ? route('kontak.kirim') : '#' }}" method="POST" class="space-y-3">
                        @csrf

                        <div>
                            <label for="nama" class="block text-xs font-bold text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" 
                                   id="nama" 
                                   name="nama" 
                                   value="{{ old('nama') }}"
                                   required 
                                   class="w-full px-3 py-2 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition" 
                                   placeholder="Contoh: Budi Prasetyo">
                            @error('nama')
                                <p class="text-red-500 text-[11px] mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="kontak" class="block text-xs font-bold text-gray-700 mb-1">WhatsApp / Email</label>
                            <input type="text" 
                                   id="kontak" 
                                   name="kontak" 
                                   value="{{ old('kontak') }}"
                                   required 
                                   class="w-full px-3 py-2 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition" 
                                   placeholder="08123456789 atau nama@email.com">
                            @error('kontak')
                                <p class="text-red-500 text-[11px] mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pesan" class="block text-xs font-bold text-gray-700 mb-1">Pesan / Aspirasi</label>
                            <textarea id="pesan" 
                                      name="pesan" 
                                      rows="3" 
                                      required 
                                      class="w-full px-3 py-2 text-xs sm:text-sm bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition resize-none" 
                                      placeholder="Tuliskan aspirasi atau keperluan Anda..."></textarea>
                            @error('pesan')
                                <p class="text-red-500 text-[11px] mt-0.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" 
                                class="w-full inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-500 active:bg-amber-600 text-teal-950 font-bold px-4 py-2.5 rounded-xl shadow-sm transition">
                            <span class="text-xs sm:text-sm">Kirim Aspirasi Sekarang</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRIPT SLIDER 3D COVERFLOW & HARI AKTIF OTOMATIS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. TANDAI HARI AKTIF OTOMATIS
            const today = new Date().getDay(); 
            const dayRows = document.querySelectorAll('#jam-kerja-list .day-row');
            dayRows.forEach(row => {
                if (parseInt(row.getAttribute('data-day')) === today) {
                    row.classList.add('bg-teal-50', 'border', 'border-teal-200');
                    const dot = row.querySelector('.status-dot');
                    if (dot) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-emerald-500', 'animate-pulse');
                    }
                }
            });

            // 2. LOGIKA 3D COVERFLOW SLIDER
            const items = document.querySelectorAll('.coverflow-item');
            const prevBtn = document.getElementById('coverflow-prev');
            const nextBtn = document.getElementById('coverflow-next');
            const dotsContainer = document.getElementById('coverflow-dots');
            const total = items.length;
            let activeIndex = 0;

            if (items.length > 0 && prevBtn && nextBtn) {
                items.forEach((_, idx) => {
                    const dot = document.createElement('button');
                    dot.type = 'button';
                    dot.className = `w-2 h-2 rounded-full transition-all duration-300 ${idx === activeIndex ? 'w-6 bg-teal-700' : 'bg-gray-300 hover:bg-gray-400'}`;
                    dot.addEventListener('click', () => {
                        activeIndex = idx;
                        updateCoverflow();
                    });
                    dotsContainer.appendChild(dot);
                });

                function updateCoverflow() {
                    items.forEach((item, index) => {
                        let diff = (index - activeIndex);
                        if (diff > total / 2) diff -= total;
                        if (diff < -total / 2) diff += total;

                        if (diff === 0) {
                            item.style.transform = 'translateX(0) scale(1.08)';
                            item.style.zIndex = '20';
                            item.style.opacity = '1';
                            item.style.filter = 'none';
                            item.style.pointerEvents = 'auto';
                        } else if (diff === 1) {
                            item.style.transform = 'translateX(110px) scale(0.88)';
                            item.style.zIndex = '10';
                            item.style.opacity = '0.75';
                            item.style.filter = 'grayscale(30%)';
                            item.style.pointerEvents = 'auto';
                        } else if (diff === -1) {
                            item.style.transform = 'translateX(-110px) scale(0.88)';
                            item.style.zIndex = '10';
                            item.style.opacity = '0.75';
                            item.style.filter = 'grayscale(30%)';
                            item.style.pointerEvents = 'auto';
                        } else if (diff === 2 || diff === - (total - 2)) {
                            item.style.transform = 'translateX(180px) scale(0.72)';
                            item.style.zIndex = '5';
                            item.style.opacity = '0.4';
                            item.style.filter = 'grayscale(70%)';
                            item.style.pointerEvents = 'auto';
                        } else if (diff === -2 || diff === (total - 2)) {
                            item.style.transform = 'translateX(-180px) scale(0.72)';
                            item.style.zIndex = '5';
                            item.style.opacity = '0.4';
                            item.style.filter = 'grayscale(70%)';
                            item.style.pointerEvents = 'auto';
                        } else {
                            item.style.transform = 'translateX(0) scale(0.5)';
                            item.style.zIndex = '1';
                            item.style.opacity = '0';
                            item.style.pointerEvents = 'none';
                        }
                    });

                    const dots = dotsContainer.querySelectorAll('button');
                    dots.forEach((dot, idx) => {
                        if (idx === activeIndex) {
                            dot.className = 'w-6 h-2 rounded-full bg-teal-700 transition-all duration-300';
                        } else {
                            dot.className = 'w-2 h-2 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300';
                        }
                    });
                }

                prevBtn.addEventListener('click', () => {
                    activeIndex = (activeIndex - 1 + total) % total;
                    updateCoverflow();
                });

                nextBtn.addEventListener('click', () => {
                    activeIndex = (activeIndex + 1) % total;
                    updateCoverflow();
                });

                items.forEach((item, index) => {
                    item.addEventListener('click', () => {
                        if (activeIndex !== index) {
                            activeIndex = index;
                            updateCoverflow();
                        }
                    });
                });

                let touchStartX = 0;
                let touchEndX = 0;
                const container = document.getElementById('coverflow-container');

                container.addEventListener('touchstart', e => {
                    touchStartX = e.changedTouches[0].screenX;
                }, { passive: true });

                container.addEventListener('touchend', e => {
                    touchEndX = e.changedTouches[0].screenX;
                    if (touchStartX - touchEndX > 50) {
                        activeIndex = (activeIndex + 1) % total;
                        updateCoverflow();
                    } else if (touchEndX - touchStartX > 50) {
                        activeIndex = (activeIndex - 1 + total) % total;
                        updateCoverflow();
                    }
                }, { passive: true });

                updateCoverflow();
            }
        });
    </script>
@endsection