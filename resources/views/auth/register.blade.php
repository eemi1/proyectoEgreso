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
        <img src="{{asset ('images/bg/bg-register.jpg')}}" alt="Fondo página registro." class="shadow-lg shadow-gray-400 rounded-xl mt-4 ">

      </div>

      <div class="flex flex-col lg:w-2/5 md:w-3/4 w-full min-h-screen overflow-y-auto shadow-lg shadow-gray-400 rounded-xl m-4 mb-28 sm:mb-10 px-4 sm:px-6 py-6 sm:py-8">
  <h1 class="font-rasa font-medium text-4xl sm:text-5xl lg:text-7xl text-primary text-center w-full pt-4 sm:pt-7">
    ¡Bienvenido!
  </h1>
  <p class="font-monserrat font-light text-base sm:text-xl lg:text-2xl text-center w-full pt-1">
    Perfecto para tu almuerzo, rápido pero sabroso 🔥
  </p>
  <hr class="mt-4 mx-4 sm:mx-10">

  @if (
      $errors->any())
      <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('register.post') }}" method="POST" class="flex flex-col w-full">
  @csrf <!-- Protege contra ataques CSRF (Cross-Site Request Forgery). Si no lo ponés, Laravel rechaza el formulario -->
    <div class="flex flex-col">
      <label class="font-raleway font-medium text-sm sm:text-base lg:text-lg pt-4 text-center">
        Nombre completo
      </label>
      <input type="text" id="new-name" name="new-name" class="input-forms" required>

      <label class="font-raleway font-medium text-sm sm:text-base lg:text-lg pt-4 text-center">
        Dirección de correo electrónico
      </label>
      <input type="email" id="new-email" name="new-email" class="input-forms" placeholder="example@gmail.com" autocomplete="new-email" required>

      <label class="font-raleway font-medium text-sm sm:text-base lg:text-lg pt-4 text-center">
        Contraseña
      </label>
      <input type="password" id="new-password" name="new-password" autocomplete="new-password" class="input-forms" required>

      <label class="font-raleway font-medium text-sm sm:text-base lg:text-lg pt-4 text-center">
        Confirmar contraseña
      </label>
      <input type="password" id="new-password_confirmation" name="new-password_confirmation" autocomplete="new-password_confirmation" class="input-forms" required>

      <label class="font-raleway font-medium text-sm sm:text-base lg:text-lg pt-4 text-center">
        Teléfono
      </label>
      <input type="tel" id="new-phone" name="new-phone" class="input-forms" required>

      <button type="submit" class="boton-primario px-6 py-2 mt-8 sm:mt-10 self-center">
        Registrarse
      </button>

      <label class="text-center mt-4 text-sm sm:text-base">
        ¿Ya tienes una cuenta?
        <a href="/login" class="text-blue-800 font-semibold">inicia sesión aquí</a>
      </label>
    </div>
  </form>
</div>



    </div>

    @include('partials.footer')
</body>
  
@if(session('success'))
    <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif












</html>
