<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Jualan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>
<body class="bg-gray-100 font-poppins">

  <!-- Navbar -->
  @include('frame.header')

  <!-- Menu Grid -->
  <section class="container mx-auto px-4 py-12">
    <h3 class="text-2xl font-bold mb-8 text-gray-700">Daftar Menu</h3>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      @include('frame.menucard')

    </div>
  </section>

  @include('frame.fotter')

</body>
</html>
