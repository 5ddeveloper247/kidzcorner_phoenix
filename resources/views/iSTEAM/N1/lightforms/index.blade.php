@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')
    <div class="panel panel-f board w-[55vw]   flex flex-col justify-center items-center z-[999]">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke title"> Light Forms</h2>

        <div class="grid grid-cols-1 gap-8 md:gap-[2vw] text-center sm:grid-cols-2 md:grid-cols-3">
            <!-- Card 1-->
            <a href="{{ route('light') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}')"
                class="  bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">What is light?</h2>
                <span class="text-3xl md:text-[2.3vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('shadows') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}')"
                class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Shadows</h2>
                <span class="text-3xl md:text-[2.3vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('types') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}')"
                class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Shadow Types</h2>
                <span class="text-3xl md:text-[2.3vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('rainbow') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}')"
                class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Rainbows</h2>
                <span class="text-3xl md:text-[2.3vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('dark') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}')"
                class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Glow in the <br> Dark</h2>
                <span class="text-3xl md:text-[2.3vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('blacklight') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}')"
                class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]"> Black Light</h2>
                <span class="text-3xl md:text-[2.3vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">6</span>
            </a>
        </div>
    </div>

    {{--  Top Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a href="{{ route('N1') }}" id="returnButton">
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
