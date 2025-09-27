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

    <div class=" flex items-center justify-center text-center z-[999] px-4 row-gap-5 max-w-[1000px]  m-auto">

        <a href="{{ route('lightforms') }}"
            class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative flex justify-center items-center transition hover:brightness-110 ">
            <img src="/assets/images/pptimages/light-bulb1.png" alt="" class="w-[100px] absolute top-10 left-10">
            <h2 class="text-3xl text-[#534444]">
                Light forms
            </h2>

        </a>
        <a href="{{ route('basicStructure') }}"
            class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[400px] h-[300px] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/pptimages/light-bulb2.png" alt="" class="w-[100px] absolute top-10 left-10">
            <h2 class="text-3xl text-[#534444]">
                Basic <br> Structure
            </h2>

        </a>
    </div>

@endsection
