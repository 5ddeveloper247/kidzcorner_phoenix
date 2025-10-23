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

    <div class=" panel panel-f flex flex-wrap items-center justify-center text-center z-[99] w-[40vw] gap-[1.5vw]">

        <a href="{{ route('SimpleMachines') }}"
            class="flex justify-center items-center transition hover:brightness-110 ">
            <img src="{{ asset('/assets/images/pptimages/n2-1.png') }}" alt="" class="w-[15vw]" >
        </a>

        <a href="{{ route('LivingThings') }}"
            class="flex justify-center items-center  transition hover:brightness-110 ">
            <img src="{{ asset('/assets/images/pptimages/n2-4.png') }}" alt="" class="w-[15vw]" >
        </a>

        <a href="{{ route('BasicCoding') }}"
            class="flex justify-center items-center  transition hover:brightness-110 ">
            <img src="{{ asset('/assets/images/pptimages/n2-3.png') }}" alt="" class="w-[15vw]" >
        </a>


        <a href="{{ route('Structures') }}"
            class="flex justify-center items-center  transition hover:brightness-110 ">
            <img src="{{ asset('/assets/images/pptimages/n2-2.png') }}" alt="" class="w-[15vw]" >
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
