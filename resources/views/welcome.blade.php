@extends('layouts.frontend')

@section('content')
    <!-- Memanggil Komponen Hero -->
    @include('components.hero')

    <!-- ============================================== -->
    <!-- ALTERNATIF: Sambutan Kades (Minimalis) -->
    <!-- ============================================== -->
    <section class="py-16 bg-teal-50/50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-10">
                
                <!-- Foto Kades Minimalis -->
                <div class="w-40 h-40 flex-shrink-0">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Kepala Desa Pasirian" class="w-full h-full object-cover rounded-full shadow-md border-4 border-white">
                </div>
                
                <!-- Teks Sambutan Tanpa Kotak -->
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-xl font-bold text-teal-900 mb-2 uppercase tracking-wider">Sambutan Kepala Desa</h2>
                    <blockquote class="text-gray-700 text-lg md:text-xl italic mb-6 leading-relaxed relative">
                        <span class="text-5xl text-teal-200 absolute -top-6 -left-8 leading-none font-serif">"</span>
                        Selamat datang di portal resmi Desa Pasirian. Melalui website ini, kami berkomitmen untuk memberikan transparansi informasi, mempermudah pelayanan masyarakat, serta memajukan potensi UMKM lokal menuju Pasirian yang mandiri, berdaya, dan sejahtera.
                    </blockquote>
                    <div>
                        <h3 class="text-lg font-bold text-teal-900">Bpk. Ir.Sugeng.</h3>
                        <p class="text-teal-700 font-medium text-sm">Kepala Desa Pasirian</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1. Bagian Profil & Sejarah -->
    <section id="profil" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-teal-700 font-bold uppercase tracking-wider text-sm">Profil Desa Pasirian</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 mb-6 leading-tight">Jejak Lahir Pasirian, Dari Lereng Semeru Hingga Tanah Subur</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Desa Pasirian memiliki sejarah panjang yang erat kaitannya dengan lereng Gunung Semeru. Sejak zaman kolonial, wilayah ini dikenal sebagai pusat agraris yang subur dan masyarakat yang menjunjung tinggi semangat gotong royong.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Kini, Pasirian terus berkembang menjadi desa mandiri yang memadukan kelestarian alam dan kemajuan teknologi, mewujudkan pusat informasi dan pelayanan prima tanpa melupakan akar budaya leluhur.
                    </p>
                </div>
                <div class="relative">
                    <!-- Ganti src dengan foto dokumentasi asli/lawas dari Figma -->
                    <div class="absolute inset-0 bg-teal-800 rounded-lg transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f0a?auto=format&fit=crop&q=80&w=1000" alt="Sejarah Pasirian" class="rounded-lg shadow-xl w-full h-auto object-cover border-4 border-white">
                </div>
            </div>
        </div>
    </section>
    

    <!-- 2. Bagian Visi & Misi -->
    <section class="py-16 bg-teal-800 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold mb-8">Visi & Misi Pembangunan</h2>
            <p class="text-xl md:text-2xl italic max-w-4xl mx-auto mb-12 font-medium text-teal-50">
                "Terwujudnya Desa Pasirian yang Mandiri, Sejahtera, Berdaya Saing Tinggi, Berbasis Agrowisata dan Teknologi Digital Berlandaskan Gotong Royong."
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="bg-teal-900 p-8 rounded-xl shadow-lg border-t-4 border-yellow-400 hover:-translate-y-2 transition duration-300">
                    <div class="text-4xl font-black text-yellow-400 mb-4 opacity-50">01</div>
                    <h3 class="text-xl font-bold mb-3 text-white">Pemberdayaan Ekonomi</h3>
                    <p class="text-teal-100 text-sm leading-relaxed">Meningkatkan kesejahteraan masyarakat melalui pengembangan UMKM lokal dan mengoptimalkan potensi agrowisata unggulan desa.</p>
                </div>
                <div class="bg-teal-900 p-8 rounded-xl shadow-lg border-t-4 border-yellow-400 hover:-translate-y-2 transition duration-300">
                    <div class="text-4xl font-black text-yellow-400 mb-4 opacity-50">02</div>
                    <h3 class="text-xl font-bold mb-3 text-white">Pelayanan Digital</h3>
                    <p class="text-teal-100 text-sm leading-relaxed">Mewujudkan tata kelola pemerintahan desa yang terbuka, transparan, cepat, dan berbasis sistem informasi digital terpadu.</p>
                </div>
                <div class="bg-teal-900 p-8 rounded-xl shadow-lg border-t-4 border-yellow-400 hover:-translate-y-2 transition duration-300">
                    <div class="text-4xl font-black text-yellow-400 mb-4 opacity-50">03</div>
                    <h3 class="text-xl font-bold mb-3 text-white">Infrastruktur Berkelanjutan</h3>
                    <p class="text-teal-100 text-sm leading-relaxed">Membangun fasilitas publik yang memadai secara merata dengan tetap menjaga keseimbangan, kebersihan, dan kelestarian lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Bagian Struktur Kepemimpinan (Sesuai desain bagan Figma) -->
    <section id="pemerintahan" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-teal-700 font-bold uppercase tracking-wider text-sm">Pemerintahan</span>
            <h2 class="text-3xl font-extrabold text-gray-900 mt-2 mb-16">Struktur Kepemimpinan Desa</h2>
            
            <!-- Level 1: Kepala Desa -->
            <div class="flex justify-center mb-12">
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 w-72 relative">
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

            <!-- Level 2: Perangkat Desa Lainnya -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <!-- Card Perangkat -->
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
    </section>

    <!-- 4. Bagian Potensi Desa & UMKM -->
    <section id="potensi" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-sm">Potensi & UMKM</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">Katalog Potensi Alam & Karya Warga</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-lg">Menampilkan kekayaan alam dan produk unggulan hasil karya tangan terampil masyarakat Desa Pasirian.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card Potensi 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition duration-300 group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1595841696677-6489ff3f8cd1?auto=format&fit=crop&q=80&w=600" alt="Pertanian" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow">
                            <span class="text-teal-800 font-bold text-xs">Agrikultur</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Pertanian Padi Organik</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Hamparan sawah subur di lereng Semeru menghasilkan beras organik berkualitas tinggi tanpa pestisida kimia.</p>
                        <a href="#" class="inline-flex items-center text-teal-700 font-bold text-sm hover:text-yellow-600 transition">
                            Lihat Detail 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Card Potensi 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition duration-300 group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?auto=format&fit=crop&q=80&w=600" alt="Kerajinan" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow">
                            <span class="text-teal-800 font-bold text-xs">Kerajinan Tangan</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Kerajinan Anyaman Bambu</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Produk anyaman bambu khas Pasirian dengan desain estetis dan ramah lingkungan yang menembus pasar nasional.</p>
                        <a href="#" class="inline-flex items-center text-teal-700 font-bold text-sm hover:text-yellow-600 transition">
                            Lihat Detail 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Card Potensi 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition duration-300 group">
                    <div class="h-56 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&q=80&w=600" alt="Kuliner" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow">
                            <span class="text-teal-800 font-bold text-xs">Kuliner Lokal</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Keripik Pisang Semeru</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Olahan pisang lokal pilihan dengan berbagai varian rasa renyah, sangat cocok untuk oleh-oleh khas desa.</p>
                        <a href="#" class="inline-flex items-center text-teal-700 font-bold text-sm hover:text-yellow-600 transition">
                            Lihat Detail 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-teal-800 text-white font-bold px-8 py-3 rounded-md hover:bg-teal-900 transition shadow-lg">Lihat Semua Katalog UMKM</a>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 5. Bagian Berita & Agenda Desa (Dinamis dari Database) -->
    <!-- ============================================== -->
    <section id="berita" class="py-20 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-teal-700 font-bold uppercase tracking-wider text-sm">Warta Desa</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 mt-2">Berita & Agenda Terbaru</h2>
                </div>
                <a href="#" class="hidden md:inline-flex items-center text-teal-700 font-bold hover:text-yellow-600 transition">
                    Lihat Semua Warta <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($beritas as $item)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">Tanpa Gambar</div>
                        @endif
                        
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 line-clamp-2">{{ $item->judul }}</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                {{ \Illuminate\Support\Str::limit($item->konten, 100) }}
                            </p>
                            <a href="#" class="text-teal-700 font-bold text-sm hover:text-yellow-600">Baca selengkapnya &rarr;</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-10">
                        <p class="text-gray-500">Belum ada berita yang dipublikasikan.</p>
                    </div>
                @endforelse
            </div>
            
            <div class="mt-8 text-center md:hidden">
                <a href="#" class="inline-flex items-center bg-teal-100 text-teal-800 font-bold px-6 py-2 rounded-md hover:bg-teal-200 transition">
                    Lihat Semua Warta
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 6. Bagian Galeri Foto & Video -->
    <!-- ============================================== -->
    <section id="galeri" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-teal-700 font-bold uppercase tracking-wider text-sm">Galeri Desa</span>
                <h2 class="text-3xl font-extrabold text-gray-900 mt-2">Potret Kehidupan Pasirian</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Dokumentasi kegiatan pemerintahan, warga, dan keindahan alam desa kami.</p>
            </div>

            <!-- Grid Galeri -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f0a?auto=format&fit=crop&q=80&w=400" alt="Galeri 1" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                </div>
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1595841696677-6489ff3f8cd1?auto=format&fit=crop&q=80&w=400" alt="Galeri 2" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                </div>
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1523730205978-59fd1b2965e3?auto=format&fit=crop&q=80&w=400" alt="Galeri 3" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                </div>
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg shadow-sm hover:shadow-md transition relative group">
                    <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?auto=format&fit=crop&q=80&w=400" alt="Galeri 4" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <!-- Overlay Teks "Lihat Lainnya" -->
                    <div class="absolute inset-0 bg-teal-900/70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 cursor-pointer">
                        <span class="text-white font-bold">Lihat Semua 15+ Foto</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 7. Bagian Kontak & Pesan -->
    <!-- ============================================== -->
    <section id="kontak" class="py-20 bg-teal-900 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Info Kontak -->
                <div>
                    <span class="text-yellow-400 font-bold uppercase tracking-wider text-sm">Hubungi Kami</span>
                    <h2 class="text-3xl font-extrabold mt-2 mb-6">Pusat Layanan Informasi Desa Pasirian</h2>
                    <p class="text-teal-100 mb-8 leading-relaxed">
                        Kami siap melayani dan mendengarkan aspirasi Anda. Jangan ragu untuk menghubungi kami melalui formulir di samping atau kontak resmi di bawah ini.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-teal-800 p-3 rounded-lg"><svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                            <div>
                                <h4 class="font-bold">Alamat Balai Desa</h4>
                                <p class="text-teal-200 text-sm">Jl. Raya Pasirian No. 123, Kec. Pasirian, Kab. Lumajang, Jawa Timur 67372</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-teal-800 p-3 rounded-lg"><svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                            <div>
                                <h4 class="font-bold">Telepon</h4>
                                <p class="text-teal-200 text-sm">(0334) 123456</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-teal-800 p-3 rounded-lg"><svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-teal-200 text-sm">pemdes@pasirian.desa.id</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulir Pesan -->
                <div class="bg-white rounded-2xl p-8 shadow-2xl text-gray-900">
                    <h3 class="text-2xl font-bold mb-6 text-teal-900">Kirim Pesan</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" placeholder="Masukkan nama Anda">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Email / No. WhatsApp</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" placeholder="Untuk membalas pesan">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Pesan / Aspirasi</label>
                            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-teal-500 focus:border-teal-500" placeholder="Tuliskan pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-teal-900 font-bold py-3 rounded-md transition duration-300 shadow-md">
                            Kirim Pesan Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection