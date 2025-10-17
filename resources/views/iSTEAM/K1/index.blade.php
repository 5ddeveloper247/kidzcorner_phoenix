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

        <a href="{{ route('K1simpleMachines') }}"
            class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative flex justify-center items-center transition hover:brightness-110 ">
            <img src="/assets/images/N2/a1.png" alt="" class="w-[100px] absolute top-10 left-10">
            <h2 class="text-3xl text-[#534444]">
                Simple Machines
            </h2>
        </a>

        <a href="{{ route('K1CompoundMachines') }}"
            class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a5.png" alt="" class="w-[100px] absolute bottom-10 left-0">
            <h2 class="text-3xl text-[#534444]">
                Compound Machines </h2>
        </a>

        <a href="{{ route('coding') }}"
            class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a3.png" alt="" class="w-[100px] absolute top-10 left-10">
            <h2 class="text-3xl text-[#534444]">
                Coding and <br> Robotics
            </h2>
        </a>


        <a href="{{ route('K1structure') }}"
            class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a4.png" alt="" class="w-[100px] absolute top-10 right-0">
            <h2 class="text-3xl text-[#534444]">
                Structures
            </h2>
        </a>
    </div>



    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a href="{{ route('isteam') }}"
            class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <a href="{{ route('isteam') }}"
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </a>

        <!-- Close Button -->
        <button
            class="relative w-24 h-24 button-fade-in cursor-pointer flex justify-center items-center bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900"
            id="closeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-[35px] h-[49px] z-[999]" src="{{ asset('assets/images/pptimages/x.png') }}" />
        </button>
    </div>
@endsection
