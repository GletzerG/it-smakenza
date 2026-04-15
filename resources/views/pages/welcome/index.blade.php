<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT School</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-[#2E2E2E] font-sans">

    {{-- ===================== NAVBAR ===================== --}}
    <nav
        class="flex justify-between items-center px-8 py-0 h-[62px] bg-white border-b border-[#C8E6C9] sticky top-0 z-50">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-2.5 no-underline">
            <div class="w-9 h-9 bg-[#4CAF50] rounded-[9px] flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="5" width="16" height="10" rx="2" fill="white" opacity="0.9" />
                    <rect x="4" y="7" width="5" height="3" rx="1" fill="#4CAF50" />
                    <rect x="4" y="11" width="8" height="1.5" rx="0.75" fill="#F4D35E" />
                    <circle cx="15" cy="8.5" r="2.5" fill="#F4D35E" />
                </svg>
            </div>
            <span class="text-[17px] font-medium text-[#2E2E2E]">
                IT<span class="text-[#4CAF50]">School</span>
            </span>
        </a>

        {{-- Nav Links (Desktop) --}}
        <ul class="hidden md:flex gap-7 list-none m-0 p-0">
            <li><a href="#" class="text-sm text-[#555] no-underline hover:text-[#4CAF50] transition-colors">Home</a>
            </li>
            <li><a href="#tentang"
                    class="text-sm text-[#555] no-underline hover:text-[#4CAF50] transition-colors">Tentang</a></li>
            <li><a href="#kegiatan"
                    class="text-sm text-[#555] no-underline hover:text-[#4CAF50] transition-colors">Kegiatan</a></li>
            <li><a href="#blog" class="text-sm text-[#555] no-underline hover:text-[#4CAF50] transition-colors">Blog</a>
            </li>
            <li><a href="#merch"
                    class="text-sm text-[#555] no-underline hover:text-[#4CAF50] transition-colors">Merch</a></li>
        </ul>

        {{-- CTA Button --}}
        <a href="{{ route('login') }}"
            class="bg-[#4CAF50] text-white text-sm font-medium px-5 py-2 rounded-lg hover:opacity-90 transition-opacity no-underline">
            Masuk
        </a>
    </nav>

    {{-- ===================== HERO ===================== --}}
    <section
        class="flex flex-col md:flex-row items-center justify-between gap-8 px-8 pt-20 pb-16 bg-white border-b border-[#C8E6C9]">

        {{-- Text --}}
        <div class="max-w-[480px]">
            <div
                class="inline-flex items-center gap-1.5 bg-[#E8F5E9] text-[#388E3C] text-xs font-medium px-3 py-1.5 rounded-full mb-4">
                <span class="w-1.5 h-1.5 bg-[#4CAF50] rounded-full"></span>
                Pendidikan Teknologi
            </div>
            <h1 class="text-[34px] font-medium leading-tight text-[#2E2E2E] mb-3">
                Jurusan IT<br>
                <span class="text-[#4CAF50]">Masa Depan</span>
            </h1>
            <p class="text-[15px] text-[#555] leading-relaxed mb-7">
                Mengembangkan potensi siswa dalam bidang Rekayasa Perangkat Lunak dan Teknik Komputer Jaringan.
            </p>
            <div class="flex gap-3 flex-wrap">
                <a href="#program"
                    class="bg-[#4CAF50] text-white text-sm font-medium px-6 py-3 rounded-lg hover:opacity-90 transition-opacity no-underline">
                    Pelajari Lebih Lanjut
                </a>
                <a href="#program"
                    class="text-[#4CAF50] text-sm font-medium px-6 py-3 rounded-lg border-[1.5px] border-[#4CAF50] hover:bg-[#E8F5E9] transition-colors no-underline">
                    Lihat Program
                </a>
            </div>
        </div>

        {{-- Illustration --}}
        <div class="flex-shrink-0 w-[300px]">
            <div
                class="w-[300px] h-[220px] bg-[#E8F5E9] rounded-[20px] relative overflow-hidden border border-[#C8E6C9]">

                {{-- Background circle --}}
                <div class="absolute w-[200px] h-[200px] rounded-full bg-[#C8E6C9] -top-10 -right-10"></div>

                {{-- Badge --}}
                <div
                    class="absolute top-4 left-4 bg-white rounded-xl px-3 py-2.5 border border-[#C8E6C9] flex items-center gap-2 z-10">
                    <span class="w-2 h-2 bg-[#4CAF50] rounded-full"></span>
                    <div>
                        <p class="text-[15px] font-medium text-[#2E2E2E] leading-none">2 Jurusan</p>
                        <p class="text-[11px] text-[#777] mt-0.5">RPL & TKJ</p>
                    </div>
                </div>

                {{-- Monitor SVG --}}
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-[160px]">
                    <div class="bg-[#2E2E2E] rounded-t-lg h-[90px] p-2 flex flex-col gap-1.5">
                        <div class="flex gap-1 mb-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#E24B4A]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#F4D35E]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50]"></span>
                        </div>
                        <div class="h-1.5 bg-[#4CAF50] rounded-full w-[70%]"></div>
                        <div class="h-1.5 bg-[#F4D35E] rounded-full w-[45%]"></div>
                        <div class="h-1.5 bg-[#E8F5E9] rounded-full w-[55%]"></div>
                        <div class="h-1.5 bg-[#4CAF50] rounded-full w-[35%] mt-1"></div>
                    </div>
                    <div class="h-3 bg-[#555] w-8 mx-auto"></div>
                    <div class="h-1.5 bg-[#555] w-16 mx-auto rounded-full"></div>
                </div>
            </div>

            {{-- Chips --}}
            <div class="flex gap-2 mt-3 flex-wrap">
                <span
                    class="bg-[#E8F5E9] text-[#388E3C] text-xs font-medium px-3.5 py-1.5 rounded-full border border-[#C8E6C9]">RPL</span>
                <span
                    class="bg-[#E8F5E9] text-[#388E3C] text-xs font-medium px-3.5 py-1.5 rounded-full border border-[#C8E6C9]">TKJ</span>
                <span
                    class="bg-[#FFF8DC] text-[#A07000] text-xs font-medium px-3.5 py-1.5 rounded-full border border-[#F4D35E]">Sertifikasi</span>
            </div>
        </div>
    </section>

    {{-- ===================== TENTANG ===================== --}}
    <section id="tentang" class="px-8 py-16 bg-[#F9FBF9]">
        <div class="text-center mb-10">
            <p class="text-xs font-medium text-[#4CAF50] tracking-widest uppercase mb-1.5">Tentang Kami</p>
            <h2 class="text-[24px] font-medium text-[#2E2E2E]">Tentang Jurusan</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-4 max-w-4xl mx-auto">

            {{-- RPL Card --}}
            <div class="bg-white rounded-2xl p-6 border border-[#C8E6C9]">
                <div class="w-11 h-11 bg-[#E8F5E9] rounded-xl flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="18" height="12" rx="2" stroke="#4CAF50" stroke-width="1.5" />
                        <path d="M6 10l3 3 6-6" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7 19h8" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
                <span
                    class="inline-block bg-[#E8F5E9] text-[#388E3C] text-xs font-medium px-3 py-1 rounded-full mb-3">RPL</span>
                <h3 class="text-[15px] font-medium text-[#2E2E2E] mb-2">Rekayasa Perangkat Lunak</h3>
                <p class="text-sm text-[#555] leading-relaxed">Fokus pada pengembangan software, web, dan aplikasi
                    modern. Siswa dibekali kemampuan coding dan berpikir logis.</p>
            </div>

            {{-- TKJ Card --}}
            <div class="bg-white rounded-2xl p-6 border border-[#C8E6C9]">
                <div class="w-11 h-11 bg-[#E8F5E9] rounded-xl flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="8" stroke="#4CAF50" stroke-width="1.5" />
                        <circle cx="11" cy="11" r="3" fill="#4CAF50" />
                        <path d="M11 3v2M11 17v2M3 11h2M17 11h2" stroke="#4CAF50" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                </div>
                <span
                    class="inline-block bg-[#E8F5E9] text-[#388E3C] text-xs font-medium px-3 py-1 rounded-full mb-3">TKJ</span>
                <h3 class="text-[15px] font-medium text-[#2E2E2E] mb-2">Teknik Komputer Jaringan</h3>
                <p class="text-sm text-[#555] leading-relaxed">Fokus pada jaringan komputer, server, dan infrastruktur
                    IT. Siswa siap mengelola sistem jaringan profesional.</p>
            </div>
        </div>
    </section>

    {{-- ===================== PROGRAM ===================== --}}
    <section id="program" class="px-8 py-16 bg-white border-t border-b border-[#C8E6C9]">
        <div class="text-center mb-10">
            <p class="text-xs font-medium text-[#4CAF50] tracking-widest uppercase mb-1.5">Kurikulum</p>
            <h2 class="text-[24px] font-medium text-[#2E2E2E]">Program Keahlian</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-4 max-w-4xl mx-auto">

            <div class="bg-[#F9FBF9] rounded-2xl p-6 border border-[#C8E6C9] relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-[#4CAF50] rounded-l-2xl"></div>
                <div class="pl-4">
                    <h3 class="text-[15px] font-medium text-[#2E2E2E] mb-2">Rekayasa Perangkat Lunak</h3>
                    <p class="text-sm text-[#555] leading-relaxed">Belajar coding, web development, dan software
                        engineering dari dasar hingga tingkat lanjut.</p>
                    <a href="#"
                        class="inline-block mt-3.5 text-sm text-[#4CAF50] font-medium no-underline hover:underline">Selengkapnya
                        →</a>
                </div>
            </div>

            <div class="bg-[#F9FBF9] rounded-2xl p-6 border border-[#C8E6C9] relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-[#4CAF50] rounded-l-2xl"></div>
                <div class="pl-4">
                    <h3 class="text-[15px] font-medium text-[#2E2E2E] mb-2">Teknik Komputer Jaringan</h3>
                    <p class="text-sm text-[#555] leading-relaxed">Belajar jaringan, server, dan keamanan sistem dengan
                        praktik langsung di laboratorium.</p>
                    <a href="#"
                        class="inline-block mt-3.5 text-sm text-[#4CAF50] font-medium no-underline hover:underline">Selengkapnya
                        →</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== FITUR ===================== --}}
    <section class="px-8 py-16 bg-[#F9FBF9]">
        <div class="text-center mb-10">
            <p class="text-xs font-medium text-[#4CAF50] tracking-widest uppercase mb-1.5">Platform</p>
            <h2 class="text-[24px] font-medium text-[#2E2E2E]">Fitur Website</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3.5 max-w-4xl mx-auto">

            {{-- Absensi --}}
            <div class="bg-white rounded-2xl p-5 text-center border border-[#C8E6C9]">
                <div class="w-13 h-13 bg-[#E8F5E9] rounded-xl flex items-center justify-center mx-auto mb-3.5 p-3">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="4" width="18" height="16" rx="2" stroke="#4CAF50" stroke-width="1.5" />
                        <path d="M3 9h18" stroke="#4CAF50" stroke-width="1.5" />
                        <path d="M8 2v4M16 2v4" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M7 14l2 2 4-4" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="text-sm font-medium text-[#2E2E2E]">Absensi Digital</p>
                <span class="text-xs text-[#777]">Catat kehadiran</span>
            </div>

            {{-- Informasi --}}
            <div class="bg-white rounded-2xl p-5 text-center border border-[#C8E6C9]">
                <div class="w-13 h-13 bg-[#E8F5E9] rounded-xl flex items-center justify-center mx-auto mb-3.5 p-3">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="9" stroke="#4CAF50" stroke-width="1.5" />
                        <path d="M12 7v5l3 3" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
                <p class="text-sm font-medium text-[#2E2E2E]">Informasi</p>
                <span class="text-xs text-[#777]">Berita terkini</span>
            </div>

            {{-- Blog --}}
            <div class="bg-white rounded-2xl p-5 text-center border border-[#C8E6C9]">
                <div class="w-13 h-13 bg-[#E8F5E9] rounded-xl flex items-center justify-center mx-auto mb-3.5 p-3">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="5" width="18" height="14" rx="2" stroke="#4CAF50" stroke-width="1.5" />
                        <path d="M7 10h10M7 14h6" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
                <p class="text-sm font-medium text-[#2E2E2E]">Blog</p>
                <span class="text-xs text-[#777]">Artikel & tips</span>
            </div>

            {{-- Merch --}}
            <div class="bg-white rounded-2xl p-5 text-center border border-[#C8E6C9]">
                <div class="w-13 h-13 bg-[#E8F5E9] rounded-xl flex items-center justify-center mx-auto mb-3.5 p-3">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 2l1.5 4.5H19l-2 6H8L6 2z" stroke="#4CAF50" stroke-width="1.5"
                            stroke-linejoin="round" />
                        <circle cx="9" cy="20" r="1.5" fill="#4CAF50" />
                        <circle cx="16" cy="20" r="1.5" fill="#4CAF50" />
                    </svg>
                </div>
                <p class="text-sm font-medium text-[#2E2E2E]">Merchandise</p>
                <span class="text-xs text-[#777]">Produk resmi</span>
            </div>
        </div>
    </section>

    {{-- ===================== BLOG ===================== --}}
    <section id="blog" class="px-8 py-16 bg-white border-t border-[#C8E6C9]">
        <div class="text-center mb-10">
            <p class="text-xs font-medium text-[#4CAF50] tracking-widest uppercase mb-1.5">Wawasan</p>
            <h2 class="text-[24px] font-medium text-[#2E2E2E]">Artikel Terbaru</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-4 max-w-5xl mx-auto">

            {{-- Blog Card 1 --}}
            <div class="bg-[#F9FBF9] rounded-2xl overflow-hidden border border-[#C8E6C9]">
                <div class="h-[110px] bg-[#E8F5E9] relative flex items-center justify-center">
                    <span
                        class="absolute top-2.5 left-2.5 bg-white text-[#388E3C] text-[11px] font-medium px-2.5 py-1 rounded-full border border-[#C8E6C9]">RPL</span>
                    <svg class="w-12 h-12 opacity-60" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="6" y="10" width="36" height="26" rx="4" fill="#C8E6C9" />
                        <path d="M14 24l6 6 14-12" stroke="#4CAF50" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="p-4">
                    <h3 class="text-sm font-medium text-[#2E2E2E] mb-1.5 leading-snug">Belajar Web Development dari Nol
                    </h3>
                    <p class="text-xs text-[#555] leading-relaxed">Panduan lengkap memulai perjalanan menjadi web
                        developer profesional.</p>
                </div>
                <div class="px-4 pb-3.5 pt-2 border-t border-[#C8E6C9] flex justify-between items-center">
                    <span class="text-[11px] text-[#888]">Apr 2026</span>
                    <a href="#" class="text-xs text-[#4CAF50] font-medium no-underline hover:underline">Baca →</a>
                </div>
            </div>

            {{-- Blog Card 2 --}}
            <div class="bg-[#F9FBF9] rounded-2xl overflow-hidden border border-[#C8E6C9]">
                <div class="h-[110px] bg-[#FFF8DC] relative flex items-center justify-center">
                    <span
                        class="absolute top-2.5 left-2.5 bg-white text-[#A07000] text-[11px] font-medium px-2.5 py-1 rounded-full border border-[#F4D35E]">TKJ</span>
                    <svg class="w-12 h-12 opacity-60" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="16" fill="#FFF3C4" />
                        <circle cx="24" cy="24" r="6" fill="#F4D35E" />
                        <path d="M24 8v4M24 36v4M8 24h4M36 24h4" stroke="#F4D35E" stroke-width="2.5"
                            stroke-linecap="round" />
                    </svg>
                </div>
                <div class="p-4">
                    <h3 class="text-sm font-medium text-[#2E2E2E] mb-1.5 leading-snug">Memahami Dasar-Dasar Jaringan
                        Komputer</h3>
                    <p class="text-xs text-[#555] leading-relaxed">Mengenal topologi, protokol, dan perangkat jaringan
                        untuk pemula.</p>
                </div>
                <div class="px-4 pb-3.5 pt-2 border-t border-[#C8E6C9] flex justify-between items-center">
                    <span class="text-[11px] text-[#888]">Mar 2026</span>
                    <a href="#" class="text-xs text-[#4CAF50] font-medium no-underline hover:underline">Baca →</a>
                </div>
            </div>

            {{-- Blog Card 3 --}}
            <div class="bg-[#F9FBF9] rounded-2xl overflow-hidden border border-[#C8E6C9]">
                <div class="h-[110px] bg-[#F0F4FF] relative flex items-center justify-center">
                    <span
                        class="absolute top-2.5 left-2.5 bg-white text-[#3B5BDB] text-[11px] font-medium px-2.5 py-1 rounded-full border border-[#BAC8FF]">Umum</span>
                    <svg class="w-12 h-12 opacity-60" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="10" y="12" width="28" height="24" rx="4" fill="#DBE4FF" />
                        <path d="M16 20h16M16 26h10" stroke="#4C6EF5" stroke-width="2.5" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="p-4">
                    <h3 class="text-sm font-medium text-[#2E2E2E] mb-1.5 leading-snug">Tips Sukses di Dunia Teknologi
                        Informasi</h3>
                    <p class="text-xs text-[#555] leading-relaxed">Kebiasaan dan mindset yang perlu dimiliki calon
                        profesional IT muda.</p>
                </div>
                <div class="px-4 pb-3.5 pt-2 border-t border-[#C8E6C9] flex justify-between items-center">
                    <span class="text-[11px] text-[#888]">Mar 2026</span>
                    <a href="#" class="text-xs text-[#4CAF50] font-medium no-underline hover:underline">Baca →</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== CTA ===================== --}}
    <section class="px-8 py-20 bg-[#4CAF50] text-center">
        <h2 class="text-[28px] font-medium text-white mb-2">Bergabung dengan Jurusan IT</h2>
        <p class="text-[15px] text-white/80 mb-7">Wujudkan masa depan digital bersama kami</p>
        <a href="#"
            class="inline-block bg-[#F4D35E] text-[#2E2E2E] font-medium text-[15px] px-8 py-3.5 rounded-xl hover:opacity-90 transition-opacity no-underline">
            Daftar Sekarang
        </a>

        {{-- Stats --}}
        <div class="flex justify-center gap-12 mt-12 pt-10 border-t border-white/25 flex-wrap">
            <div>
                <p class="text-[26px] font-medium text-[#F4D35E]">2</p>
                <p class="text-sm text-white/75 mt-1">Program Keahlian</p>
            </div>
            <div>
                <p class="text-[26px] font-medium text-[#F4D35E]">100+</p>
                <p class="text-sm text-white/75 mt-1">Siswa Aktif</p>
            </div>
            <div>
                <p class="text-[26px] font-medium text-[#F4D35E]">10+</p>
                <p class="text-sm text-white/75 mt-1">Guru Berpengalaman</p>
            </div>
        </div>
    </section>

    {{-- ===================== FOOTER ===================== --}}
    <footer
        class="px-8 py-5 bg-white border-t border-[#C8E6C9] flex flex-col md:flex-row justify-between items-center gap-3">

        {{-- Logo --}}
        <div class="flex items-center gap-2">
            <div class="w-6 h-6 bg-[#4CAF50] rounded-[6px] flex items-center justify-center">
                <svg class="w-3.5 h-3.5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="2" width="12" height="8" rx="1.5" fill="white" opacity="0.9" />
                    <rect x="2.5" y="3.5" width="3" height="2" rx="0.5" fill="#4CAF50" />
                    <circle cx="10.5" cy="4.5" r="1.5" fill="#F4D35E" />
                </svg>
            </div>
            <span class="text-sm font-medium text-[#2E2E2E]">ITSchool</span>
        </div>

        <p class="text-xs text-[#888]">© {{ date('Y') }} Jurusan IT — All rights reserved</p>

        <div class="flex gap-5">
            <a href="#" class="text-xs text-[#888] no-underline hover:text-[#4CAF50] transition-colors">Kebijakan</a>
            <a href="#" class="text-xs text-[#888] no-underline hover:text-[#4CAF50] transition-colors">Kontak</a>
            <a href="#" class="text-xs text-[#888] no-underline hover:text-[#4CAF50] transition-colors">Peta Situs</a>
        </div>
    </footer>

</body>

</html>