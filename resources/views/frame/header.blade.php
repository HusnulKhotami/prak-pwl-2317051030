<!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">PertaShop</h1>
      <ul class="hidden md:flex space-x-6">
        <li><a href="#" class="hover:text-blue-600 transition">Home</a></li>
        <li><a href="#" class="hover:text-blue-600 transition">Menu</a></li>
        <li><a href="#" class="hover:text-blue-600 transition">About</a></li>
        <li><a href="#" class="hover:text-blue-600 transition">Contact</a></li>
      </ul>
      <button class="md:hidden p-2 rounded hover:bg-gray-200" @click="open = !open" x-data="{ open: false }">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="text-center py-10 bg-gradient-to-r from-blue-500 to-purple-500 text-white">
    <h2 class="text-2xl font-bold mb-4">Selamat Datang di Menu Kami</h2>
    <p class="text-lg">Pilih makanan/minuman favoritmu dengan mudah dan cepat!</p>
  </section>