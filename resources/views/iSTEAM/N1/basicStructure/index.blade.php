@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    <div class="board w-[55vw]   flex flex-col justify-center items-center">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke">Basic Structures</h2>

        <div class="grid grid-cols-1 gap-[1vw] text-center sm:grid-cols-2 md:grid-cols-3">
            <!-- Card 1 -->
            <a href="{{ route('shapes') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}');"
                class="bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Forming <br> Shapes</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('identifyShapes') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}');"
                class="bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Identifying <br> Shapes</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Shapes-Structure') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}');"
                class="bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Shapes and <br> Structures</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('Shape-around') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}');"
                class="bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Shapes  <br>Around Us</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('Build-Structure') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}');"
                class="bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Building <br> Structures</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('Creations') }}"
                style="background-image: url('{{ asset('assets/images/pptimages/Property1.png') }}');"
                class="bg-no-repeat bg-contain bg-center w-[15vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">My Creation</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute top-[1vw] right-[1vw]">6</span>
            </a>
        </div>
    </div>

    {{-- Top Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Return Button -->
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
