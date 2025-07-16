<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fory Factory | Inicio</title>
  <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rasa:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/29724e3467.js" crossorigin="anonymous"></script>
  <!-- TailwindCSS -->
  @vite('resources/css/app.css')

</head>

@include('partials.nav')

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-1">
      <section id="image-container" class="h-screen relative">
        <img src="{{ asset('images/bg/page1.jpg') }}" id="main-image" alt="Hamburguesa 1" class="w-full h-full object-cover">
        
        <!-- Overlay negro con opacidad 0.2 -->
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>

        <!-- flex flex-col sirve para colocar estos elementos uno debajo del otro, -->
        <div class="absolute inset-0 flex flex-col items-center justify-start text-center gap-10 lg:mt-28">
          <h2 id="main-title" class=" text-white font-rasa font-semibold text-8xl md:text-6xl mb-4">Descubre el sabor de la excelencia</h2>
          <p id="main-subtitle" class="text-white font-raleway text-2xl lg:text-3xl lg:w-1/2">
            No podemos cambiar el mundo, ni las injusticias, pero sí podemos hacer que tu día tenga un final feliz con nuestras hamburguesas. ¡Este es nuestro propósito!
          </p>

          <div class="flex flex-row gap-20 mt-14">
            <button class="boton-primario px-6 py-3">Ver productos</button>
            <button class="boton-secundario px-6 py-3">Reserva tu mesa</button>
          </div>
        </div>

        <!-- <div class="absolute inset-0 flex flex-col md:flex-row justify-center items-center gap-4 md:gap-8 lg:gap-16 lg:pt-7">
          <button class="boton-primario px-6 md:px-10 py-2 md:py-3">Ver menú</button>
          <button class="boton-secundario px-6 md:px-10 py-2 md:py-3">Reserva tu mesa</button>
        </div> -->
        
        <div class="absolute left-0 right-0 bottom-0 flex justify-center items-center gap-10 pb-10">
          <!-- License: PD. Made by Mary Akveo: https://maryakveo.com/ -->
          <svg fill="#000000" viewBox="0 0 39 50" id="triple-down-sign" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color animate-bounce size-40">
            <polyline id="primary" points="19 14 12 21 5 14" style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
            </polyline>
              <polyline id="primary-2" data-name="primary " points="5 3 12 10 19 3" style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
            </polyline>
          </svg>
        </div>

      </section>

      <!-- SECCION PRODUCTOS -->
      <section class="h-screen relative ">
        <img src="{{asset ('images/bg/page2.jpg')}}" alt="Hamburguesa 2" class="w-screen h-full object-cover">
        
        <!-- Overlay negro con opacidad 0.2 bg-opacity-30-->
        <div class="absolute inset-0 bg-black bg-opacity-45"></div>

        <!-- Título -->
        <div class="absolute inset-0 flex items-start justify-center lg:pt-20 ">
          <h2 class="font-monserrat lg:text-6xl md:text-6xl text-white font-bold text-center drop-shadow-2xl">Destacados del menú🧡 </h2>
        </div>
        
        <div class="absolute inset-0 flex flex-row items-center justify-center lg:gap-16 pt-2 ">

            <div class="card-container relative">
              <img src="{{asset ('images/productos-main/producto-1.webp')}}" alt="Deli" class="w-full h-full object-cover border border-black drop-shadow-2xl">
              <button class="absolute left-1/4 mt-2 drop-shadow-2xl card-button boton-primario px-4 py-2 border-radius-40 font-semibold ">Más información</button>
            </div>
          
            <div class="card-container relative">
              <img src="{{asset ('images/productos-main/producto-2.webp')}}" alt="Originals" class="w-full h-full object-cover border border-black drop-shadow-2xl">
              <button class="absolute left-1/4 mt-2 drop-shadow-2xl card-button boton-primario px-4 py-2 border-radius-40 font-semibold ">Más información</button>
            </div>

            <div class="card-container relative" >
              <img src="{{asset ('images/productos-main/producto-3.webp')}}" alt="Holy Vegan" class="w-full h-full object-cover border border-black drop-shadow-2xl">
              <button class="absolute left-1/4 mt-2 drop-shadow-2xl card-button boton-primario px-4 py-2 border-radius-40 font-semibold ">Más información</button>
            </div>


            <div class="card-container relative">
              <img src="{{asset ('images/productos-main/producto-4.webp')}}" alt="Minion" class="w-full h-full object-cover border border-black drop-shadow-2xl">
              <button class="absolute left-1/4 mt-2 drop-shadow-2xl card-button boton-primario px-4 py-2 border-radius-40 font-semibold">Más información</button>
            </div>

        </div>

      </section>

      <!-- SECCION MAPA -->
      <section class="h-screen relative">
        <img src="{{ asset('images/bg/page3.jpg')}}" alt="Background page 3" class="w-screen h-full object-cover">
        <!-- Overlay negro con opacidad 0.2 bg-opacity-30-->
        <div class="absolute inset-0 bg-black bg-opacity-45"></div>

        <div class="absolute inset-0 flex items-start justify-center lg:pt-24 ">
          <h2 class="font-monserrat lg:text-6xl text-white font-bold drop-shadow-2xl text-center">Dónde nos encontramos 📍</h2>
        </div>

        <div class="absolute inset-0 flex items-center justify-center lg:pt-24">
          <iframe src="https://www.google.com/maps/d/embed?mid=1fG3krE_TuuiNkJNSXR06Kaszl87x2SM&ehbc=2E312F&noprof=1" class="lg:w-2/4 lg:h-2/3 rounded-lg shadow-white"></iframe>
        </div>


        
      </section>
    </main>

    @include('partials.footer')





</body>
</html>
