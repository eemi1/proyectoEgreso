<!DOCTYPE html>
<html lang="es" class="scrollbar-hide">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fory Factory | Registro </title>
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

<body>
    @include('partials.nav')

    <div class="flex h-screen">

      <div class="flex flex-row w-3/5  object-cover">
        <img src="{{asset ('images/bg/bg-register.jpg')}}" alt="Fondo página registro." class="shadow-lg shadow-gray-400 rounded-xl m-4 mb-28 ">

      </div>

      <div class="flex flex-col w-2/5 shadow-lg shadow-gray-400 rounded-xl m-4 mb-28  ">
        <h1 class="flex flex-col font-rasa font-medium lg:text-8xl text-primary text-center w-full pt-7">Bienvenido!</h1>
        <p class="flex flex-col font-monserrat font-light lg:text-2xl text-center w-full pt-1">Perfecto para tu almuerzo, rápido pero sabroso 🔥</p>
        <hr class="flex flex-col mt-4 mx-10">

        <form class="flex flex-col w-full">
          <div class="flex flex-col">
            <label class="font-raleway font-medium lg:text-lg pt-5 text-center">Nombre completo</label>
            <input type="text" class="border border-gray-400 bg-gray-50 rounded-lg mt-1.5 px-20 py-1.5 self-center hover:border-primary focus:outline-primary " placeholder="" required>

            <label class="font-raleway font-medium lg:text-lg pt-5 text-center">Dirección de correo electrónico</label>
            <input type="email" class=" border border-gray-400 bg-gray-50 rounded-lg mt-1.5 px-20 py-1.5 self-center hover:border-primary focus:outline-primary" placeholder="example@gmail.com" required>
            
            <label class="font-raleway font-medium lg:text-lg pt-5 text-center">Contraseña</label>
            <input type="password" class=" border border-gray-400 bg-gray-50 rounded-lg mt-1.5 px-20 py-1.5 self-center hover:border-primary focus:outline-primary" placeholder="" required>

            <label class="font-raleway font-medium lg:text-lg pt-5 text-center">Confirmar contraseña</label>
            <input type="password" class=" border border-gray-400 bg-gray-50 rounded-lg mt-1.5 px-20 py-1.5 self-center hover:border-primary focus:outline-primary" placeholder="" required>

            <label class="font-raleway font-medium lg:text-lg pt-5 text-center">Teléfono</label>
            <input type="tel" class=" border border-gray-400 bg-gray-50 rounded-lg mt-1.5 px-20 py-1.5 self-center hover:border-primary focus:outline-primary" placeholder="" required>

            <button type="submit" class="boton-primario px-6 py-2 mt-10 self-center">Registrarse</button>
            <label class="text-center mt-4">Ya tienes una cuenta? <a href="/login" class="text-blue-800 font-semibold">inicia sesión aquí</a></label>
          </div>

          

        </form>

      </div>


    </div>

    @include('partials.footer')
</body>
  













</html>
