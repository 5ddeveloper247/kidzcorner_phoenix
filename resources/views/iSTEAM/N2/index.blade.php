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

    <div class=" panel panel-f grid grid-cols-2 items-center justify-center text-center z-[99]  gap-x-[3vw] ">

        <a href="{{ route('SimpleMachines') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Simple <br> Machines</h2>
            <img src="{{ asset('/assets/images/N2/a1.png') }}" class="w-[6.4vw] h-[6.4vw] absolute left-0 top-[2.5vw]">
        </a>

        <a href="{{ route('LivingThings') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Living <br> Things</h2>
            <img src="{{ asset('/assets/images/N2/a2.png') }}" class="w-[6.4vw] h-[6.4vw] absolute left-0 top-[2vw]">
        </a>

        <a href="{{ route('BasicCoding') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Basic <br> Coding</h2>
            <img src="{{ asset('/assets/images/N2/a3.png') }}" class="w-[6.4vw] h-[6.4vw] absolute left-0 top-[2.5vw]">
        </a>


        <a href="{{ route('Structures') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Structures</h2>
            <img src="{{ asset('/assets/images/N2/a4.png') }}" class="w-[6.4vw] h-[6.4vw] absolute left-[1vw] top-[1vw]">
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
