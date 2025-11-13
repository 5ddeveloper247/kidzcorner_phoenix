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

    <div class=" panel panel-f grid grid-cols-2 items-center justify-center text-center z-[99] gap-x-[3vw] ">

        <a href="{{ route('K1simpleMachines') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Simple <br> Machines</h2>
            <img src="{{ asset('/assets/images/N2/a1.png') }}" class="w-[6.4vw] h-[6.4vw] absolute left-[1vw] top-[1.5vw]">
        </a>

        <a href="{{ route('K1CompoundMachines') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Conpound <br> Machines</h2>
            <img src="{{ asset('/assets/images/N2/a5.png') }}" class="w-[6.4vw] h-[6.4vw] absolute left-[-1vw] bottom-0">
        </a>

        <a href="{{ route('coding') }}"
            style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Coding and<br> Robotics</h2>
            <img src="{{ asset('/assets/images/N2/a3.png') }}" class="w-[6.4vw] h-[6.4vw] absolute left-[-1vw] bottom-[.5vw]">
        </a>


        <a href="{{ route('K1structure') }}"style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center  w-[21vw] h-[17.344vw] relative flex justify-center items-center transition hover:brightness-110">
            <h2 class="text-[2.6vw] text-[#7D6F71]">Structures</h2>
            <img src="{{ asset('/assets/images/N2/a4.png') }}" class="w-[6.4vw] h-[6.4vw] absolute right-[1vw] top-0">
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
