<!-- min-h-screen hace que si crece el contenido se agrande el body -->
<body class="min-h-screen flex flex-col scrollbar-hide">
    <nav class="flex bg-white p-4 w-full justify-center shadow">
      


    <a href="/" class="flex justify-start w-full">
        <img src="{{ asset('images/logo.jpg') }}" id="logo" alt="logo" class="lg:w-[60px] lg:h-[60px] object-contain">
        <h1 class="text-primary font-raleway font-bold text-3xl pt-2 pl-2 underline underline-offset-8 decoration-2 underline-primary whitespace-nowrap">Fory Factory</h1>
    </a>

    <!-- MENU NAVBAR -->
      <div id="menu" class="flex flex-row items-center lg:gap-12 w-full justify-center text-black font-raleway">
        <!-- Variación posible para hover: hover:text-primary -->
        <a href="/" class="hover:font-semibold ">Inicio</a>
        <a href="/productos" class="hover:font-semibold">Productos</a>
        <a href="#" class="hover:font-semibold">Contacto</a>
        <a href="#" class="hover:font-semibold">Sobre nosotros</a>
      </div>

      <!-- BOTONES NAVBAR -->
      <div id="buttons-nav" class="inline-flex items-center justify-end w-full lg:gap-3  ">
        <a href="/login">
          <button class="btn text-black hover:font-medium font-raleway">Iniciar sesión</button>
        </a>
        <a href="/register">
          <button class="boton-primario px-4 py-2">Crear Cuenta</button>
        </a>

        

      </div>
      

    </nav>
    <hr class="border-1 border-neutral-200 w-full">