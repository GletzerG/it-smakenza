<style>
    .nav-link {
        position: relative;
        padding-bottom: 4px;
        color: #555;
        transition: color 0.3s ease;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background: #16a34a;
        transition: width 0.3s ease;
    }

    .nav-link.active {
        color: #16a34a;
    }

    .nav-link.active::after {
        width: 100%;
    }
</style>

<nav class="bg-white/30 backdrop-blur-md border-b w-full fixed top-0 left-0 z-50">
    <div class="w-full flex items-center justify-between py-3 px-4 md:px-6">

        <!-- LEFT -->
        <div class="flex items-center gap-3">
            <img src="images/JurusanLogo.jpg" alt="Logo" class="w-10 h-10 rounded-full object-cover">

            <div>
                <h1 class="font-semibold text-gray-800 text-sm md:text-base">SMK Negeri 1 Balikpapan</h1>
                <p class="text-xs md:text-sm text-green-600 font-medium">RPL & TKJ</p>
            </div>
        </div>

        <!-- CENTER MENU (DESKTOP) -->
        <div class="hidden md:flex items-center gap-10 text-gray-700 font-medium">
            <a href="/#home" class="nav-link hover:text-green-600 transition">Beranda</a>
            <a href="/#programs" class="nav-link hover:text-green-600 transition">Program Keahlian</a>
            <a href="/#about" class="nav-link hover:text-green-600 transition">Tentang Kami</a>
        </div>

        <!-- RIGHT BUTTON (DESKTOP) -->
        @guest
            <div class="hidden md:flex items-center gap-3">
                <a href="/login"
                    class="px-4 py-2 border border-green-500 text-green-600 rounded-lg hover:bg-green-50 transition">
                    Login
                </a>

                <a href="#"
                    class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition flex items-center gap-2">
                    Daftar
                </a>
            </div>
        @endguest

        @auth
           <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
        @endauth


        <!-- HAMBURGER (MOBILE) -->
        <button id="menu-btn" class="md:hidden text-gray-700 text-2xl focus:outline-none">
            ☰
        </button>

    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
        <div class="flex flex-col gap-3 text-gray-700 font-medium">
            <a href="#home" class="nav-link hover:text-green-600">Beranda</a>
            <a href="#programs" class="nav-link hover:text-green-600">Jurusan</a>
            <a href="#about" class="nav-link hover:text-green-600">Tentang Kami</a>
            <a href="#gallery" class="nav-link hover:text-green-600">Galeri</a>
            <a href="#testimonials" class="nav-link hover:text-green-600">Testimoni</a>

            <hr class="my-2">

            <a href="#" class="px-4 py-2 border border-green-500 text-green-600 rounded-lg text-center">
                Login Guru
            </a>

            <a href="#" class="px-4 py-2 bg-green-500 text-white rounded-lg text-center">
                Daftar Sekarang
            </a>
        </div>
    </div>
</nav>

<!-- SCRIPT TOGGLE -->
<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
