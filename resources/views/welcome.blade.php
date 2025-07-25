<!DOCTYPE html>
<html lang="es" class="scrollbar-hide">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fory Factory | Inicio</title>
  <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rasa:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/29724e3467.js" crossorigin="anonymous"></script>
  @vite('resources/css/app.css')
</head>

<body class="bg-black text-white">
  @include('partials.nav')

  <main class="flex-1">
    
    <!-- HERO PRINCIPAL -->
    <section id="image-container" class="relative min-h-screen">
      <img src="{{ asset('images/bg/page1.jpg') }}" alt="Hamburguesa 1" class="absolute inset-0 w-full h-full object-cover -z-10">
      <div class="absolute inset-0 bg-black bg-opacity-20 -z-10"></div>

      <div class="relative container mx-auto px-4 flex flex-col items-center justify-center text-center gap-6 pt-28 sm:pt-36">
        <h2 class="font-rasa font-semibold text-white text-4xl sm:text-6xl md:text-7xl 2xl:text-8xl">
          Descubre el sabor de la excelencia
        </h2>
        <p class="text-white font-raleway text-lg sm:text-xl md:text-2xl lg:w-2/3">
          No podemos cambiar el mundo, ni las injusticias, pero sí podemos hacer que tu día tenga un final feliz con nuestras hamburguesas. ¡Este es nuestro propósito!
        </p>

        <div class="flex flex-col sm:flex-row gap-6 sm:gap-20 mt-10">
          <button class="boton-primario px-6 py-3">Ver productos</button>
          <button class="boton-secundario px-6 py-3">Reserva tu mesa</button>
        </div>

        <svg fill="#000000" viewBox="0 0 39 50" class="mt-10 animate-bounce w-10 h-10" xmlns="http://www.w3.org/2000/svg">
          <polyline points="19 14 12 21 5 14" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2;" />
          <polyline points="5 3 12 10 19 3" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2;" />
        </svg>
      </div>
    </section>

    <!-- SECCIÓN DESTACADOS -->
    <section class="relative min-h-screen">
      <img src="{{ asset('images/bg/page2.jpg') }}" alt="Hamburguesa 2" class="absolute inset-0 w-full h-full object-cover -z-10">
      <div class="absolute inset-0 bg-black bg-opacity-45 -z-10"></div>

      <div class="container mx-auto px-4 pt-16">
        <h2 class="font-monserrat text-center font-bold drop-shadow-2xl text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-12">
          Destacados del menú 🧡
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          @foreach (range(1, 4) as $i)
          <div class="relative overflow-hidden rounded-xl shadow-lg group">
            <img src="{{ asset('images/productos-main/producto-' . $i . '.webp') }}" alt="Producto {{ $i }}" class="w-full h-64 object-cover transition-transform group-hover:scale-105 duration-300">
            <button class="absolute bottom-4 left-1/2 transform -translate-x-1/2 boton-primario px-4 py-2 text-sm font-medium drop-shadow-md">
              Más información
            </button>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- SECCIÓN MAPA -->
    <section class="relative min-h-screen">
      <img src="{{ asset('images/bg/page3.jpg') }}" alt="Background page 3" class="absolute inset-0 w-full h-full object-cover -z-10">
      <div class="absolute inset-0 bg-black bg-opacity-45 -z-10"></div>

      <div class="container mx-auto px-4 py-16 flex flex-col items-center">
        <h2 class="font-monserrat text-center font-bold drop-shadow-2xl text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-10">
          Dónde nos encontramos 📍
        </h2>

        <iframe src="https://www.google.com/maps/d/embed?mid=1fG3krE_TuuiNkJNSXR06Kaszl87x2SM&ehbc=2E312F&noprof=1"
                class="w-full max-w-4xl h-80 md:h-[500px] rounded-lg shadow-lg border-2 border-white"
                allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>

  </main>

  @include('partials.footer')
</body>
</html>
