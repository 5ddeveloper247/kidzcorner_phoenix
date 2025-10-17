{{-- @extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')

    <style>
        .slide-container {
            transition: opacity 0.3s ease-in-out;
        }

        .button-hidden {
            display: none !important;
        }

        .button-disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Custom animations for buttons */
        .button-fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        .stroke {

            -webkit-text-stroke: 2px #533705;
        }

        .note {
            font-size: 24px;
            font-weight: 400;
            color: white;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endpush

@section('content')
    <div class="relative board w-[1267px] h-[734px] flex flex-col justify-center items-center">

        <!-- Title -->
        <div id="title" class="text-amber-300 text-4xl sm:text-5xl lg:text-[55px] mb-6 z-40 stroke font-bold">

        </div>

        <div class="relative w-full h-full flex flex-col items-center justify-center ">
            <!-- Stoneboard -->
            <img src="/assets/images/pptimages/stoneboard.png" class="relative z-20 w-full h-full" alt="">

            <!-- Dynamic slide content -->
            <div id="container_test"
                class="absolute inset-0 flex flex-col items-center justify-center text-center z-[99]px-4 row-gap-5 w-full">
            </div>
            <!-- Next button -->
        <button id="nextButton" class="lesson-btn relative !z-[99]">
            <img src="/assets/images/pptimages/Vector4.png" class="lesson-btn-vector" />
            <div class="lesson-btn-shape"></div>
            <div class="lesson-btn-text" style="-webkit-text-stroke: 3px #533705;">
                Next
            </div>
        </button>
        </div>

        

        <img class="absolute left-1/2 w-full top-[75%] opacity-[70%] rotate-[-5deg] -translate-x-1/2 -translate-y-1/2"
            src="/assets/images/pptimages/Vector1.png" />
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
        <img class="absolute left-1/2 top-[70%] -translate-x-1/2 -translate-y-1/2"
            src="{{ asset('assets/images/pptimages/Vector1.png') }}" />
        <img class="absolute left-0 top-0 h-screen" src="{{ asset('assets/images/pptimages/Vector2.png') }}" />
        <img id="vector1" class="absolute right-0 bottom-0 w-[200px] sm:w-[300px] lg:w-auto z-30" style="display: none"
            src="{{ asset('assets/images/pptimages/Vector3.png') }}" />
        <img id="vector2" class="absolute right-0 bottom-0 w-[200px] sm:w-[300px] lg:w-auto z-30" style="display: none"
            src="{{ asset('assets/images/pptimages/Vector5.png') }}" />
    </div>

    <!-- Conditional Buttons -->

   <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40" style="display: none;">

    <!-- Return Button -->
    <button class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton" style="display: none;">
        <img class="absolute top-[6px] left-[8px] w-20 h-10"
             src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
        <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
        <img class="absolute top-[24px] left-[22px] w-14 h-14"
             src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
    </button>

    <!-- Home Button -->
    <button class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton" style="display: none;">
        <img class="absolute top-[6px] left-[8px] w-20 h-10"
             src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
        <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
        <img class="absolute top-[24px] left-[22px] w-14 h-14"
             src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
    </button>

    <!-- Close Button -->
    <button class="relative w-24 h-24 button-fade-in cursor-pointer"
            id="closeButton" style="display: none;">
        <div class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900"></div>
        <img class="absolute top-[6px] left-[8px] w-20 h-10"
             src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
        <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
        <div id="closeButtonText"
             class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X</div>
    </button>

</div>


@endsection

@push('scripts')
    @include('iSTEAM.N1.lightforms.slide')
    @include('iSTEAM.N1.lightforms.shadow')
    @include('iSTEAM.N1.lightforms.shadowtypes')
    @include('iSTEAM.N1.lightforms.rainbow')


    <script src="{{ asset('assets/js/slides1.js') }}"></script>
@endpush --}}



@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('styles')

    <style>
        .slide-container {
            transition: opacity 0.3s ease-in-out;
        }

        .button-hidden {
            display: none !important;
        }

        .button-disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Custom animations for buttons */
        .button-fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }



        a {
            cursor: pointer;

        }
    </style>
@endpush

@section('content')

    <div class=" flex flex-wrap items-center justify-center text-center z-[99]px-4 row-gap-5 w-full">

        <a href="{{ route('N1') }}" style="background-image: url('{{asset('/assets/images/pptimages/n1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[50px] absolute top-[40px] right-[60px]">N1</p>
        </a>

        <a href="{{ route('N2') }}" style="background-image: url('{{asset('/assets/images/pptimages/n2.png')}}');"
            class="bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[50px] absolute top-[75px] left-[120px]">N2</p>
        </a>

        <a href="{{ route('K1') }}" style="background-image: url('{{asset('/assets/images/pptimages/k1.png')}}');"
            class="bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[50px] absolute top-[55px] right-[60px]">K1</p>
        </a>


        <a href="{{ route('K2') }}" style="background-image: url('{{asset('/assets/images/pptimages/k2.png')}}');"
            class="bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[50px] absolute top-[75px] left-[115px]">K2</p>
        </a>
    </div>



    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer flex justify-center items-center" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-[35px] h-[49px] z-[999]" src="{{ asset('assets/images/pptimages/x.png') }}" />
        </button>
    </div>
@endsection
