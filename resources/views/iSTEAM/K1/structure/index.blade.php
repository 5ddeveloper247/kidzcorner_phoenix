@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{--  First Slide --}}
    <div class="board2 flex flex-col justify-center items-center ">
        <h2 class="text-[#F7B94A] stroke board-title">Structures</h2>
        <div class="grid grid-cols-4 justify-center items-center gap-[2vw] ">
            <!-- Card 1-->
            <a href="{{ route('buildings') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Building are <br> Structures</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('dome') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Geodesic <br> Domes</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('bridge') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Bridges</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('umbrella') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Umbrellas</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('giant') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Giant <br> Wheels</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('roller') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Roller <br> Coasters</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">6</span>
            </a>

            <!-- Card 7 -->
            <a href="{{ route('unique') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Unique <br> Buildings</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">7</span>
            </a>

            <!-- Card 8 -->
            <a href="{{ route('city') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center    w-[13.594vw] h-[11.198vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Our <br> Amazing <br> City</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">8</span>
            </a>
        </div>
    </div>



    {{--  Top Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <!-- Return Button (hidden initially) -->
        <a href="{{ route('K1') }}" id="returnButton">
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
