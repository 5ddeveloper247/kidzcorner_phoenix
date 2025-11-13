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

    <div class=" panel K2-panel grid grid-cols-3 z-[99] px-4 gap-x-[2.5vw]">

        <a href="{{ route('k2livingthings') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[18vw] h-[14.8vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2vw] text-[#7D6F71]">Living <br> Things</h2>
            <img src="{{ asset('/assets/images/K2/K1.png') }}" class="w-[5.5vw] h-[5.5vw] absolute left-[0] top-[1.5vw]">

        </a>

        <a href="{{ route('k2sustainability') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[18vw] h-[14.8vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2vw] text-[#7D6F71]">Sustainability</h2>
            <img src="{{ asset('/assets/images/K2/K2.png') }}" class="w-[5.5vw] h-[5.5vw] absolute right-[1vw] top-[0vw]">
        </a>

        <a href="{{ route('k2Aerodynamics') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[18vw] h-[14.8vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2vw] text-[#7D6F71]">Aerodynamics</h2>
            <img src="{{ asset('/assets/images/K2/K3.png') }}" class="w-[5.5vw] h-[5.5vw] absolute right-[1vw] top-[0vw]">
        </a>


        <a href="{{ route('k2coding') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[18vw] h-[14.8vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2vw] text-[#7D6F71]">Coding And <br> Animation</h2>
            <img src="{{ asset('/assets/images/N2/a3.png') }}" class="w-[5.5vw] h-[5.5vw] absolute left-[-1vw] bottom-[0]">
        </a>


        <a href="{{ route('k2ElectronicCircuits') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[18vw] h-[14.8vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2vw] text-[#7D6F71]">Electronic <br> Circuit</h2>
            <img src="{{ asset('/assets/images/N2/a1.png') }}" class="w-[5.5vw] h-[5.5vw] absolute left-[0] top-[1.5vw]">
        </a>


        <a href="{{ route('k2FinalProject') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[18vw] h-[14.8vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2vw] text-[#7D6F71]">Final <br> Project</h2>
            <img src="{{ asset('/assets/images/K2/K4.png') }}" class="w-[5.5vw] h-[5.5vw] absolute left-[0] top-[1.5vw]">
        </a>
    </div>


    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

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
