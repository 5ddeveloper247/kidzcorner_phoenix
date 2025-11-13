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

    <div class=" panel N1-panel flex items-center justify-center text-center z-[99] px-4 gap-[3vw] w-full">

        <a href="{{ route('lightforms') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[26vw] h-[21.354vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Living <br> Things</h2>
            <img src="{{ asset('/assets/images/pptimages/light-bulb1.png') }}" class="w-[7.9vw] h-[7.9vw] absolute left-0 top-[2.5vw]">
        </a>

        <a href="{{ route('basicStructure') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[26vw] h-[21.354vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Basic <br> Structures</h2>
            <img src="{{ asset('/assets/images/pptimages/light-bulb2.png') }}" class="w-[7.9vw] h-[7.9vw] absolute left-0 top-[2.5vw]">
        </a>
    </div>


    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-[999]">

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
