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

    <div class=" panel panel-f grid grid-cols-2 items-center justify-center text-center z-[99] gap-[2vw] w-[35vw]">

        <a href="{{ route('K1simpleMachines') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[12vw] relative flex justify-center items-center transition hover:brightness-110 ">
            <img src="/assets/images/N2/a1.png" alt="" class="w-[5vw] absolute top-[1vw] left-[.5vw]">
            <h2 class="!text-[1.5vw] text-[#534444]">
                Simple <br> Machines
            </h2>
        </a>

        <a href="{{ route('K1CompoundMachines') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[12vw] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a5.png" alt="" class="w-[4vw] absolute bottom-[1vw] left-0">
            <h2 class="!text-[1.5vw] text-[#534444]">
                Compound <br> Machines </h2>
        </a>

        <a href="{{ route('coding') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[12vw] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a3.png" alt="" class="w-[3vw] absolute top-[1vw] left-[.5vw]">
            <h2 class="!text-[1.5vw] text-[#534444]">
                Coding and <br> Robotics
            </h2>
        </a>


        <a href="{{ route('K1structure') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[12vw] relative flex justify-center items-center  transition hover:brightness-110 ">
            <img src="/assets/images/N2/a4.png" alt="" class="w-[5vw] absolute top-[0vw] right-[0vw]">
            <h2 class="!text-[1.5vw] text-[#534444]">
                Structures
            </h2>
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
