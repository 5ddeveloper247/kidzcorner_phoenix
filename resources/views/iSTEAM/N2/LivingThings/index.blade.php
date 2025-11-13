@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')
    <div class="flex justify-center items-center min-h-screen ">
        <div class="board flex flex-col justify-center items-center">

            <h2 class="text-[#F7B94A] stroke board-title">Living Things</h2>

            <div class="grid grid-cols-4 gap-[1vw] justify-center items-center">
                <!-- Row 1 (4 cards) -->
                <a href="{{ route('Animals') }}" class="transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl1.png') }}" class=" w-[13.594vw] h-[11.198vw]">
                </a>

                <a href="{{ route('Growth') }}" class="transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl2.png') }}" class=" w-[13.594vw] h-[11.198vw]">
                </a>

                <a href="{{ route('StageOfGrowth') }}" class="transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl3.png') }}" class=" w-[13.594vw] h-[11.198vw]">
                </a>

                <a href="{{ route('PlantsGrowth') }}" class="transition hover:brightness-110">
                    <img src="{{ asset('/assets/images/N2/LivingThings/cl4.png') }}" class=" w-[13.594vw] h-[11.198vw]">
                </a>

                <!-- Row 2 (centered last 3 cards) -->
                <div class="col-span-4 flex justify-center gap-[1vw]">
                    <a href="{{ route('PartsOfPlants') }}" class="transition hover:brightness-110">
                        <img src="{{ asset('/assets/images/N2/LivingThings/cl5.png') }}" class=" w-[13.594vw] h-[11.198vw]">
                    </a>

                    <a href="{{ route('Drinking') }}" class="transition hover:brightness-110">
                        <img src="{{ asset('/assets/images/N2/LivingThings/cl6.png') }}" class=" w-[13.594vw] h-[11.198vw]">
                    </a>

                    <a href="{{ route('Plants') }}" class="transition hover:brightness-110">
                        <img src="{{ asset('/assets/images/N2/LivingThings/cl7.png') }}" class=" w-[13.594vw] h-[11.198vw]">
                    </a>
                </div>
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
