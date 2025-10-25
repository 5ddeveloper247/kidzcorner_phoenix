@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')
    <div class="flex justify-center items-center min-h-screen ">
        <div class="board w-[55vw] flex flex-col justify-center items-center">

            <h2 class="text-[45px] text-[#F7B94A]">Living Things</h2>

            <div class="flex flex-wrap gap-[1vw] justify-center items-center">
                <!-- Card 1 -->
                <a href="{{ route('Animals') }}" class=" transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl1.png') }}" alt="" class="w-[13vw] h-[10vw]">
                </a>

                <!-- Card 2 -->
                <a href="{{ route('Growth') }}" class=" transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl2.png') }}" alt="" class="w-[13vw] h-[10vw]">

                </a>

                <!-- Card 3 -->
                <a href="{{ route('StageOfGrowth') }}" class=" transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl3.png') }}" alt="" class="w-[13vw] h-[10vw]">

                </a>

                <!-- Card 4 -->
                <a href="{{ route('PlantsGrowth') }}" class=" transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl4.png') }}" alt="" class="w-[13vw] h-[10vw]">

                </a>

                <!-- Card 5 -->
                <a href="{{ route('PartsOfPlants') }}" class=" transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl5.png') }}" alt="" class="w-[13vw] h-[10vw]">

                </a>

                <!-- Card 6 -->
                <a href="{{ route('Drinking') }}" class=" transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl6.png') }}" alt="" class="w-[13vw] h-[10vw]">

                </a>

                <!-- Card 7 -->
                <a href="{{ route('Plants') }}" class=" transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl7.png') }}" alt="" class="w-[13vw] h-[10vw]">

                </a>
            </div>

        </div>
    </div>



    {{--  Top Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <!-- Return Button (hidden initially) -->
        <a href="{{ route('N2') }}" id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>
@endsection
