@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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

    <div class=" panel panel-f flex flex-wrap items-center justify-center text-center z-[99]px-4 row-gap-5 max-w-[1267px]  m-auto">

        <a href="{{ route('k2livingthings') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110 ">
            <img src="/assets/images/K2/k1.png" alt="" class="w-[100px] absolute top-10 left-[10px]">
            <h2 class="text-3xl text-[#534444]">
                Living <br> Things
            </h2>
        </a>

        <a href="{{ route('k2sustainability') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/k2/k2.png" alt="" class="w-[100px] absolute top-[15px] right-0">
            <h2 class="text-3xl text-[#534444]">
                Sustainability </h2>
        </a>

        <a href="{{ route('k2Aerodynamics') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/k2/k3.png" alt="" class="w-[100px] absolute top-[15px] right-[15px]">
            <h2 class="text-3xl text-[#534444]">
                Aerodynamics
            </h2>
        </a>


        <a href="{{ route('k2coding') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a3.png" alt="" class="w-[70px] absolute bottom-[50px] left-0">
            <h2 class="text-3xl text-[#534444]">
                Coding and <br> Animation
            </h2>
        </a>


        <a href="{{ route('k2ElectronicCircuits') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a1.png" alt="" class="w-[100px] absolute top-[15px] left-[10px]">
            <h2 class="text-3xl text-[#534444]">
                Electronic <br> Circuits
            </h2>
        </a>


        <a href="{{ route('k2FinalProject') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/pptimages/light-bulb1.png" alt=""
                class="w-[100px] absolute top-10 left-[15px]">
            <h2 class="text-3xl text-[#534444]">
                Final <br> Project
            </h2>
        </a>
    </div>


    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a href="{{ route('isteam') }}" id="returnButton">

            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <!-- Home Button -->
        <a href="{{ route('isteam') }}" id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </a>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>
@endsection
