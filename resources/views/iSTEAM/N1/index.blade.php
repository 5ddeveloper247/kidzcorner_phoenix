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

    <div class=" panel panel-f flex items-center justify-center text-center z-[99] px-4 row-gap-5 w-full">

        <a href="{{ route('lightforms') }}" class=" transition hover:brightness-110 ">
            <img src="{{ asset('/assets/images/pptimages/class1.png') }}" class="w-[18vw]">
        </a>

        <a href="{{ route('basicStructure') }}" class="  transition hover:brightness-110 ">
            <img src="{{ asset('/assets/images/pptimages/class2.png') }}" class="w-[18vw]">
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
