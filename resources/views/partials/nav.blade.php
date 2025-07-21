<!-- min-h-screen hace que si crece el contenido se agrande el body -->
<body class="min-h-screen flex flex-col scrollbar-hide">
    <nav class="flex bg-white p-4 w-full justify-center shadow">
      


    <a href="/" class="flex justify-start w-full">
        <img src="{{ asset('images/logo.jpg') }}" id="logo" alt="logo" class="2xl:w-[60px] 2xl:h-[60px] sm:w-[50px] sm:h-[50px] object-contain">
        <h1 class="text-primary font-raleway font-bold 2xl:text-3xl 2xl:pt-2 2xl:pl-2 sm:text-lg sm:pt-3 sm:pl-1 underline underline-offset-8 decoration-2 underline-primary whitespace-nowrap">Fory Factory</h1>
    </a>

    <!-- MENU NAVBAR -->
      <div id="menu" class="md:flex flex-row 2xl:gap-10 items-center justify-center w-full font-raleway sm:hidden md:text-sm md:gap-4 md:pr-10">
        <a href="/" class="hover:text-primary">Inicio</a>
        <a href="/productos" class="hover:text-primary">Productos</a>
        <a href="#" class="hover:text-primary">Contacto</a>
        <a href="#" class="hover:text-primary">Sobre nosotros</a>
      </div>

      <!-- Menú solo visible en sm: -->
  <div class="sm:block md:hidden relative w-48">
    <!-- Botón -->
    <button id="menu-button" class="flex items-center justify-between w-full text-sm bg-white text-gray-800 px-4 py-2 mt-2 rounded-md border border-bg-gray-200 shadow-md shadow-gray-300 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary">
      Categorías
      <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="-mr-1 size-5 text-gray-400">
        <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
      </svg>
    </button>

    <!-- Opciones del menú -->
    <div id="dropdown-menu" class="hidden absolute z-10 mt-2 w-full bg-white rounded-md shadow-lg">
      <a href="/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Inicio</a>
      <a href="/productos" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Productos</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contacto</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sobre Nosotros</a>
    </div>
  </div>

      <!-- BOTONES NAVBAR -->
      <div id="buttons-nav" class="inline-flex items-center justify-end w-full lg:gap-3 lg:text-base sm:text-sm sm:gap-3 ">
        <a href="/login">
          <button class="btn text-black hover:font-medium font-raleway">Iniciar sesión</button>
        </a>
        <a href="/register">
          <button class="boton-primario px-4 py-2">Crear Cuenta</button>
        </a>

        

      </div>
      

    </nav>
    <hr class="border-1 border-neutral-200 w-full">

    <script>
    // Script para abrir/cerrar menú
    const menuButton = document.getElementById('menu-button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    menuButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });

    // Opcional: cerrar menú al hacer clic fuera
    window.addEventListener('click', (e) => {
      if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
      }
    });
  </script>