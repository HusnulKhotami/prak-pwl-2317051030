<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Card</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-teal-400 flex items-center justify-center min-h-screen">

  <!-- Card Profil -->
  <div class="bg-emerald-200 shadow-lg rounded-2xl p-8 w-80 text-center">
    
    <!-- Foto Profil -->
    <img class="w-28 h-28 mx-auto rounded-full border-4 border-blue-500 shadow-md" 
         src="{{ asset('image/pp.jpeg') }}" 
         alt="Avatar">

    <!-- Data Profil -->
    <div class="mt-6 space-y-3">
      <div class="bg-white px-4 py-2 rounded-lg text-lg font-semibold text-blue-600">
        {{ $nama }}
      </div>
      <div class="bg-white px-4 py-2 rounded-lg text-lg font-semibold text-blue-600">
        {{ $kelas }}
      </div>
      <div class="bg-white px-4 py-2 rounded-lg text-lg font-semibold text-blue-600">
        {{ $npm }}
      </div>
    </div>

  </div>

</body>
</html>
