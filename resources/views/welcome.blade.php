<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obologistic- Inicio</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Estilos personalizados */
        .fixed-button-container {
            position: relative;
            height: 50px; /* Ajusta la altura según el tamaño del botón */
        }

        .fixed-button {
            position: absolute;
            bottom: 0;
            left: 50%; /* Centra horizontalmente */
            transform: translateX(-50%);
            z-index: 50; /* Asegura que esté sobre el contenido */
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-600">

    <div class="w-full fixed top-0 z-50 bg-white dark:bg-gray-600">
        <!-- Navbar -->
        @include('layouts.nav')
        <!-- /Navbar -->
        <div class="fixed-button-container flex justify-center items-center bg-gray-200 dark:bg-gray-800">
        <a href="/downloads/obologistic.apk" download class="fixed-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">
                Descarga nuestra app

            <svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 502.857 502.857" xml:space="preserve">
                <g>
                    <path style="fill:#57C927;" d="M115.428,155.433v217.664c0,17,10.208,30.336,27.704,30.336h22.84c-0.784,0-2.544,5.768-2.544,8.6 v61.648c0,16.112,15.448,29.176,32,29.176c16.56,0,32-13.064,32-29.176v-61.648c0-2.832-3.088-8.6-3.848-8.6h55.712 c-0.76,0-3.864,5.768-3.864,8.6v61.648c0,16.112,15.416,29.176,31.968,29.176c16.592,0,32.032-13.064,32.032-29.176v-61.648 c0-2.832-1.752-8.6-2.536-8.6h22.872c17.496,0,27.664-13.336,27.664-30.336V155.433H113.596H115.428z"/>
                    <path style="fill:#57C927;" d="M59.428,158.977c-16.568,0-32,13.072-32,29.176v124.92c0,16.112,15.432,29.176,32,29.176 c16.56,0,32-13.064,32-29.176V188.161C91.428,172.049,75.988,158.977,59.428,158.977z"/>
                    <path style="fill:#57C927;" d="M320.3,42.057l5.584-8.192l5.592-8.096l12.456-18.2c1.56-2.256,0.912-5.264-1.384-6.744 c-2.272-1.512-5.416-0.88-6.904,1.36l-19.016,27.704l-5.72,8.344c-18.072-6.832-38.208-10.64-59.48-10.64 c-21.224,0-41.4,3.816-59.472,10.64l-5.688-8.336l-5.624-8.184l-13.36-19.512c-1.544-2.248-4.648-2.84-6.952-1.36 c-2.28,1.488-2.912,4.496-1.392,6.744l12.448,18.208l5.592,8.104l5.616,8.168c-42.432,19.24-71.144,57.368-71.144,97.368h279.96 C391.412,99.433,362.708,61.305,320.3,42.057z M191.436,100.593c-8.312,0-15.008-6.536-15.008-14.608s6.696-14.576,15.008-14.576 c8.288,0,15,6.504,15,14.576S199.732,100.593,191.436,100.593z M311.436,100.593c-8.304,0-15.016-6.536-15.016-14.608 s6.712-14.576,15.016-14.576c8.288,0,15,6.504,15,14.576S319.724,100.593,311.436,100.593z"/>
                </g>
            </svg>
            </a>
        </div>
    </div>




    <div class="container mx-auto md:px-20 pt-6 max-w-7xl bg-gray-200 dark:bg-gray-800">

        <!-- Hero section -->
        <div class="flex flex-col-reverse md:flex-row items-center pt-6 lg:mt-32 gap-24">
    <div class="text-left md:w-1/2 flex flex-col gap-5">
        <h1 class="text-4xl md:text-6xl font-semibold text-gray-900 leading-none dark:text-gray-100">
            Bienvenido a Nuestro Servicio de Envío de Paquetes
        </h1>
        <p class="text-xl font-light text-gray-500 antialiased dark:text-gray-300">
            Envíe sus paquetes con la máxima eficiencia y seguridad.
        </p>
        <a href="#servicios"
           class="w-fit px-8 py-4 rounded-full font-normal tracking-wide bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 hover:to-blue-700 transition duration-200 ease-in-out">
            Explorar Servicios
        </a>
    </div>
    <img src="https://obologistic.com/wp-content/uploads/2021/04/depositphotos_306004142-stock-photo-cropped-view-delivery-man-giving.jpg" alt="hero image" class="md:w-1/3 rounded-xl mb-10 shadow-md">
</div>

        <!-- /Hero section -->

        <!-- Search section -->
        <div class="my-20 flex justify-center">
            <form action="{{ route('guia.find') }}" method="GET" class="w-full md:w-1/2">
                <div class="relative">
                    <input type="search" id="default-search" name="search"
                        class="block w-full p-4 pl-12 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        placeholder="Ingresar la guia  que desee buscar"
                        value="{{ request('search') }}">
                    <button type="submit"
                        class="absolute right-2.5 bottom-2.5 bg-red-500 text-white font-medium rounded-lg text-sm px-4 py-2 hover:bg-red-600 focus:outline-none focus:ring focus:border-blue-300 transition duration-200 ease-in-out">
                        Buscar
                    </button>
                </div>
            </form>
        </div>

        <div class="my-20 py-12 bg-white dark:bg-gray-800 rounded-xl" id="servicios">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 dark:text-gray-100 text-center">
                Nuestros Servicios
            </h2>
            <div class="grid md:grid-cols-3 gap-8 mt-12">

                <div class="flex flex-col items-center text-center bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <div class="flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4">

                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5h12l3 9-3 9H3l3-9-3-9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                        Envíos Rápidos
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">
                        Realiza envíos rápidos a nivel nacional e internacional. Entregamos tus paquetes en tiempo récord.
                    </p>
                </div>

                <!-- Servicio 2 -->
                <div class="flex flex-col items-center text-center bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <div class="flex items-center justify-center w-16 h-16 bg-green-600 text-white rounded-full mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 9V5a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h4l2 2v2h2l2-2V11h4a2 2 0 002-2V7a2 2 0 00-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                        Envíos Seguros
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">
                        Garantizamos la seguridad de tus paquetes durante todo el proceso de envío. Ofrecemos seguros de envío.
                    </p>
                </div>

                <!-- Servicio 3 -->
                <div class="flex flex-col items-center text-center bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-600 text-white rounded-full mb-4">

                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a2 2 0 00-2-2h-3a2 2 0 00-2 2v2zM9 20h2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2h2v-2h2v2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                        Envíos Económicos
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">
                        Ofrecemos envíos económicos sin comprometer la calidad del servicio. Obtén la mejor tarifa.
                    </p>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
