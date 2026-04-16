<nav class="bg-gray-100 border-b border-gray-200 w-full">
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
      <a href="#" class="hover:text-green-600 transition">Beranda</a>
      <a href="#" class="hover:text-green-600 transition">Jurusan</a>
      <a href="#" class="hover:text-green-600 transition">Visi & Misi</a>
      <a href="#" class="hover:text-green-600 transition">Galeri</a>
      <a href="#" class="hover:text-green-600 transition">Testimoni</a>
    </div>

    <!-- RIGHT BUTTON (DESKTOP) -->
    <div class="hidden md:flex items-center gap-3">
      <a href="#" class="px-4 py-2 border border-green-500 text-green-600 rounded-lg hover:bg-green-50 transition">
        Login Guru
      </a>

      <a href="#" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition flex items-center gap-2">
        Daftar Sekarang
        <span>➜</span>
      </a>
    </div>

    <!-- HAMBURGER (MOBILE) -->
    <button id="menu-btn" class="md:hidden text-gray-700 text-2xl focus:outline-none">
      ☰
    </button>

  </div>

  <!-- MOBILE MENU -->
  <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
    <div class="flex flex-col gap-3 text-gray-700 font-medium">
      <a href="#" class="hover:text-green-600">Beranda</a>
      <a href="#" class="hover:text-green-600">Jurusan</a>
      <a href="#" class="hover:text-green-600">Visi & Misi</a>
      <a href="#" class="hover:text-green-600">Galeri</a>
      <a href="#" class="hover:text-green-600">Testimoni</a>

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