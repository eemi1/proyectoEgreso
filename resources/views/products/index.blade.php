<!DOCTYPE html>
<html lang="es" class="scrollbar-hide">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fory Factory | Productos </title>
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

    <div class="flex h-screen bg-neutral-100">

        <!-- menu izquierda -->
        <div class="flex flex-col w-1/6 h-2/3 my-4 ml-4 ">

            <!-- input buscar y svg buscar -->
            <div class="relative w-full mt-4 ">
                <input class="rounded-full py-2 px-4 w-full border border-gray-400 bg-gray-50 hover:border-primary focus:outline-primary" placeholder="Buscar">

                <span class="absolute inset-y-0 right-6 flex items-center pointer-events-auto">
                    <svg class="hover:cursor-pointer w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </span>
            </div>


        <div class="flex flex-col h-full w-full my-4 border border-gray-400 bg-gray-50 rounded-lg">
            <h3 class="font-monserrat font-semibold lg:text-2xl text-center pt-4">Categorías:</h3>
            <hr class="flex mt-4 mx-4">
            <div class="flex flex-col text-left self-center gap-6 pt-8 font-semibold">
            <a href="#featured-page" class="category-products">Destacado</a>
            <a href="#" class="category-products">Hamburguesas de carne</a>
            <a href="#" class="category-products">Hamburguesas vegetarianas</a>
            <a href="#" class="category-products">Hamburguesas veganas</a>
            <a href="#" class="category-products">Acompañamiento</a>
            <a href="#" class="category-products">Bebidas</a>
            <a href="#" class="category-products">Postres</a>
            <a href="#" class="category-products mb-8">Combos</a>
            </div>
        </div>

        </div>

        <div class="flex flex-col border border-black w-screen m-8">
            <div id="featured-page">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Destacado</h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-4">

                    <div id="Featured1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                        <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px]">
                        <div class="flex flex-col pl-4 pt-2">
                            <h3 class="lg:text-xl">SMASH</h3>
                            <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                        </div>

                    </div>
                    <div id="Featured2" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4  lg:w-full lg:h-60">
                        <img src="{{asset ('images/productos-main/producto-2.webp')}}" class="object-cover p-2 pr-0 lg:h-56 lg:w-1/2 rounded-xl ">
                        <div></div>

                    </div>

                    <div id="Featured3" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4  lg:w-full lg:h-60">
                        <img src="{{asset ('images/productos-main/producto-3.webp')}}" class="object-cover p-2 pr-0 lg:h-56 lg:w-1/2 rounded-xl flex justify-center">
                        <div></div>
    
                    </div>

                    <div id="Featured4" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60">
                        <img src="{{asset ('images/productos-main/producto-4.webp')}}" class="object-cover p-2 pr-0 lg:h-56 lg:w-1/2 rounded-xl flex justify-center">
                        <div></div>
    
                    </div>

                    <div id="Featured5" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4  lg:w-5/6 lg:h-60">
                        <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="object-cover p-2 pr-0 lg:h-56 lg:w-1/2 rounded-xl flex justify-center">
                        <div></div>
    
                    </div>

                    <div id="Featured6" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 ml-4 lg:w-5/6 lg:h-60">
                        <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="object-cover p-2 pr-0 lg:h-56 lg:w-1/2 rounded-xl flex justify-center">
                        <div></div>
    
                    </div>

                   


                    



                </div>
            </div>



        </div>

    </div>



    @include('partials.footer')
</body>
  













</html>
