<!-- Navbar -->
<nav class="fixed top-0 left-0 right-0 z-80 bg-white/80  text-[#09182C]">
  <div class="flex items-center justify-between px-6 lg:px-20 py-4">

    <!-- Logo -->
    <div class="w-12 h-12">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="object-cover">
    </div>

    <!-- Menu -->
    <ul id="nav-menu" class="hidden lg:flex font-semibold">
      <li><a href="/" class="rounded-full font-bold lg:hover:bg-[#09182C] lg:hover:text-white px-4 py-2">Beranda</a></li>
      <li><a href="{{ route('tentang') }}" class="rounded-full font-bold lg:hover:bg-[#09182C] lg:hover:text-white px-4 py-2">Tentang</a></li>
      <li><a href="{{ route('berita') }}" class="rounded-full font-bold lg:hover:bg-[#09182C] lg:hover:text-white px-4 py-2">Berita</a></li>
      <li><a href="{{ route('karya') }}" class="rounded-full font-bold lg:hover:bg-[#09182C] lg:hover:text-white px-4 py-2">Karya</a></li>
      <li><a href="{{ route('program-kerja') }}" class="rounded-full font-bold lg:hover:bg-[#09182C] lg:hover:text-white px-4 py-2">Program Kerja</a></li>
      <li><a href="{{ route('layanan') }}" class="rounded-full font-bold lg:hover:bg-[#09182C] lg:hover:text-white px-4 py-2 ">Layanan</a></li>
    </ul>

    <!-- Hamburger -->
    <button id="nav-toggle" class="lg:hidden">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

  </div>
</nav>

<!-- CSS -->
<style>
  @media (max-width: 1024px) {
    #nav-menu {
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      background: white;
      padding: 1.5rem;
      flex-direction: column;
      gap: 1rem;
      box-shadow: 0 10px 30px rgba(0,0,0,.1);
    }
  }
</style>

<!-- JS -->
<script>
  const navToggle = document.getElementById('nav-toggle');
  const navMenu = document.getElementById('nav-menu');

  navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('hidden');
  });
</script>
