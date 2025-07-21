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

<body class="flex-nowrap">
    @include('partials.nav')

    <div class="flex bg-neutral-100 ">

        <!-- menu izquierda -->
        <div class="fixed w-1/6 h-2/3 my-4 ml-4 ">

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
            <a href="#beef-page" class="category-products">Hamburguesas de carne</a>
            <a href="#vegetarian-page" class="category-products">Hamburguesas vegetarianas</a>
            <a href="#vegan-page" class="category-products">Hamburguesas veganas</a>
            <a href="#accompaniment-page" class="category-products">Acompañamiento</a>
            <a href="#drink-page" class="category-products">Bebidas</a>
            <a href="#dessert-page" class="category-products">Postres</a>
            <a href="#" class="category-products mb-8">Combos</a>
            </div>
        </div>

        </div>

        <div class="flex flex-col w-screen m-8 ml-96">
            <div id="featured-page">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Destacado</h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16 py-4">

                    <div id="Featured1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                        <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 h-full lg:w-[800px] max-w-[200px] max-h-[250px] justify-center items-center">
                        <div class="flex flex-col pl-4 pt-2">
                            <h3 class="lg:text-xl">HOLY</h3>
                            <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                        </div>
                    </div>

                    <div id="Featured2" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                        <img src="{{asset ('images/productos-main/producto-2.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                        <div class="flex flex-col pl-4 pt-2">
                            <h3 class="lg:text-xl">ORIGINALS</h3>
                            <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                        </div>
                    </div>

                    <div id="Featured3" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                        <img src="{{asset ('images/productos-main/producto-3.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                        <div class="flex flex-col pl-4 pt-2">
                            <h3 class="lg:text-xl">DELI</h3>
                            <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                        </div>
                    </div>

                    <div id="Featured4" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                        <img src="{{asset ('images/productos-main/producto-4.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                        <div class="flex flex-col pl-4 pt-2">
                            <h3 class="lg:text-xl">MINION</h3>
                            <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                        </div>
                    </div>

                    <div id="Featured5" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                        <img src="{{asset ('images/productos-main/producto-5.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                        <div class="flex flex-col pl-4 pt-2">
                            <h3 class="lg:text-xl">CHEESE SUPREME</h3>
                            <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                        </div>
                    </div>

                    <div id="Featured6" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                        <img src="{{asset ('images/productos-main/producto-6.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                        <div class="flex flex-col pl-4 pt-2">
                            <h3 class="lg:text-xl">OKLAHOMA</h3>
                            <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="beef-page" class="pt-4">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Hamburguesas de carne</h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16">
                    
                    <div id="Beef1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/smash-beff.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">SMASH</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="Beef2" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-2.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">ORIGINALS</h3>
                                <p class="lg:text-sm">Doble smash burger, muzzarella, pepinillos, huevo, morrón, cebolla blanca, lechuga y tomate, con mayonesa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="Beef3" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-5.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">CHEESE SUPREME</h3>
                                <p class="lg:text-sm">Doble smash burger, doble cheddar, doble muzzarella, bacon, huevo y tomate, con salsa cuatro quesos y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="Beef4" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-6.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">OKLAHOMA</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar, muzzarella, bacon, pepinillos, huevo, cebolla morada y tomate, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="Beef5" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-4.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">MINION</h3>
                                <p class="lg:text-sm">Pensada para niños hasta los 5 años. Smash burger y cheddar, con mayonesa y kétchup, acompañado en un pan artesanal mini clásico.</p>
                            </div>
                    </div>
                </div>
            </div>

            <div id="vegetarian-page" class="pt-4">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Hamburguesas vegetarianas </h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16">
                    
                    <div id="vegetarian1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/originals-beyond-vegetarian.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">ORIGINALS BEYOND</h3>
                                <p class="lg:text-sm">Beyond burger, muzzarella, pepinillos, huevo, morrón, cebolla blanca, lechuga y tomate, con mayonesa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="vegetarian2" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/cheese-beyond-vegetarian.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">CHEESE BEYOND</h3>
                                <p class="lg:text-sm">Beyond burger, doble cheddar, doble muzzarella, huevo y tomate, con salsa cuatro quesos y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="vegetarian3" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-3.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">DELI</h3>
                                <p class="lg:text-sm">Medallón de arvejas, cheddar, pepinillos, huevo, morrón, cebolla blanca, lechuga y tomate, con mostaza dijon y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="vegetarian4" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/sharp-vegetarian.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">SHARP</h3>
                                <p class="lg:text-sm">Bife de seitán, muzzarella, champiñones, huevo, cebolla morada, lechuga y tomate, con mayonesa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>
                </div>
            </div>

            <div id="vegan-page" class="pt-4">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Hamburguesas veganas </h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16">
                    
                    <div id="vegan1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">HOLY</h3>
                                <p class="lg:text-sm">Beyond burger, cheddar vegano, pepinillos, champiñones, cebolla blanca, lechuga y tomate, con mostaza dijon y kétchup, acompañado de un pan artesanal de brioche vegano, incluye papas.</p>
                            </div>
                    </div>

                    <div id="vegan1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/epic-hot-vegan.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">EPIC HOT</h3>
                                <p class="lg:text-sm">Bife de seitán, cheddar vegano, nueces, pepinillos, morrón, cebolla blanca, lechuga y tomate, con salsa barbacoa y kétchup, acompañado de un pan artesanal de brioche vegano, incluye papas.</p>
                            </div>
                    </div>
                </div>
            </div>

            <div id="accompaniment-page" class="pt-4">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Acompañamiento </h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16">
                    
                    <div id="accompaniment1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/acompañamiento/papasfritas.png')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Papas</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="accompaniment1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/acompañamiento/papasfritas-beacon.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Papas + beacon</h3>
                                <p class="lg:text-sm">Papas fritas con trozos de beacon.</p>
                            </div>
                    </div>

                    <div id="accompaniment1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/acompañamiento/papasrusticas.jpg')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Papas rusticas</h3>
                                <p class="lg:text-sm">Crujientes papas rústicas con piel, especiadas y servidas con salsa de la casa.</p>
                            </div>
                    </div>

                    <div id="accompaniment1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/acompañamiento/papasfritas-cheddar.jpeg')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Papas + Cheddar</h3>
                                <p class="lg:text-sm">Papas fritas cubiertas con queso cheddar fundido.</p>
                            </div>
                    </div>

                    <div id="accompaniment1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos/acompañamiento/ensalada.jpg')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Ensalada de lechuga y tomate</h3>
                                <p class="lg:text-sm">Ensalada fresca con lechuga crujiente y rodajas de tomate, ideal como acompañamiento ligero y saludable.</p>
                            </div>
                    </div>


                </div>
            </div>

            

            <div id="drink-page" class="pt-4">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Bebidas</h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16">
                    
                    <div id="drink1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Coca Cola 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="drink1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Sprite 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="drink1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Fanta 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="drink1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Cerveza 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="drink1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Pomelo 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>
                </div>
            </div>

            <div id="dessert-page" class="pt-4">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Postres</h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16">
                    
                    <div id="dessert1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Coca Cola 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="dessert1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Sprite 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="dessert1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Fanta 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="dessert1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Cerveza 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="dessert1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Pomelo 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>
                </div>
            </div>

            <div id="combo-page" class="pb-8">
                <h2 class="font-raleway font-semibold text-primary lg:text-5xl px-4 py-4">Combo</h2>
                <hr class="mt-2">
                <div id="products" class="grid grid-cols-3 gap-4 pr-16">
                    
                    <div id="combo1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Coca Cola 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="combo1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Sprite 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="combo1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Fanta 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="combo1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Cerveza 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>

                    <div id="combo1" class="flex rounded-xl shadow-md border-t-2 border-neutral-200 mt-4 mx-20 lg:w-5/6 lg:h-60 ">
                            <img src="{{asset ('images/productos-main/producto-1.webp')}}" class="flex flex-auto rounded-xl object-cover p-4 pr-0 lg:h-full lg:w-[800px] max-w-[200px] max-h-[250px]">
                            <div class="flex flex-col pl-4 pt-2">
                                <h3 class="lg:text-xl">Pomelo 1L</h3>
                                <p class="lg:text-sm">Doble smash burger, cheddar y cebolla morada, con salsa barbacoa y kétchup, acompañado en un pan artesanal a elección, incluye papas.</p>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    @include('partials.footer')
</body>
  













</html>
