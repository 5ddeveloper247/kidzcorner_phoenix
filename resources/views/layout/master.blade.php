<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title', 'Syndash - Bootstrap5 Admin Template')</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    {{-- Fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">

    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="w-screen h-screen relative flex items-center justify-center bg-orange-200 overflow-hidden">


        <div id="ajax-content"  class="board w-[1267px] h-[734px] flex flex-col justify-center items-center bg-[url('/assets/images/pptimages/stoneboard.png')] bg-no-repeat bg-cover bg-center ">

            <!-- Dynamic slide content -->
            <div id="ajax-section" class="flex items-center justify-center text-center px-4 row-gap-5 max-w-[1100px]  m-auto">
                @yield('content')
            </div>

        </div>
        <!-- Leafs outside board -->
        <div id="leafs-outside">
            <img class="absolute left-0 bottom-0 w-[80px] sm:w-[100px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf1.png') }}" />
            <img class="absolute right-[5px] bottom-0 rotate-[-10.48deg] w-[80px] sm:w-[100px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf10.png') }}" />
            <img class="absolute left-[20px] lg:left-[20.86px] top-0 w-[60px] sm:w-[80px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf4.png') }}" />
            <img class="absolute left-[400px] sm:left-[600px] lg:left-[900.29px] top-0 opacity-90 w-[80px] sm:w-[100px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf6.png') }}" />
            <img class="absolute left-[500px] sm:left-[700px] lg:left-[1000.11px] top-0 w-[80px] sm:w-[120px] lg:w-[152.81px]"
                src="{{ asset('assets/images/pptimages/Leaf4.png') }}" />
            <img class="absolute left-[-10px] lg:left-[-19px] top-0 rotate-[-2.53deg] w-[60px] sm:w-[80px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf2.png') }}" />
            <img class="absolute right-[10px] sm:right-[50px] lg:left-[1572px] top-0 opacity-80 w-[60px] sm:w-[80px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf3.png') }}" />
            <img class="absolute h-[80px] sm:h-[120px] lg:h-[150px] left-[200px] sm:left-[300px] lg:left-[408.36px] bottom-0"
                src="{{ asset('assets/images/pptimages/Leaf12.png') }}" />
            <img class="absolute left-[600px] sm:left-[800px] lg:left-[1195.72px] top-0 w-[60px] sm:w-[80px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf13.png') }}" />
            <img class="absolute left-[150px] sm:left-[200px] lg:left-[278.45px] top-0 w-[60px] sm:w-[80px] lg:w-auto z-30"
                src="{{ asset('assets/images/pptimages/Leaf8.png') }}" />
        </div>

        <!-- Vectors - conditionally shown -->
        <div id="vectors">
            <img class="absolute left-0 top-0 h-screen" src="{{ asset('assets/images/pptimages/Vector2.png') }}"
                style="pointer-events: none" />
            <img id="vector1" class="absolute right-0 bottom-0 w-[200px] sm:w-[300px] lg:w-auto z-30"
                style="display: none" src="{{ asset('assets/images/pptimages/Vector3.png') }}" />
            <img id="vector2" class="absolute right-0 bottom-0 w-[200px] sm:w-[300px] lg:w-auto z-30"
                style="display: none" src="{{ asset('assets/images/pptimages/Vector5.png') }}" />
        </div>
    </section>


    @stack('script')
</body>

</html>
