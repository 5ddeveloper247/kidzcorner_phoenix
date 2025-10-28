@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{--  First Slide --}}
    <div class="board w-[55vw]   flex flex-col justify-center  items-center slide">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Aerodynamics</h2>

        <div class="flex flex-wrap justify-center items-center w-[80%] ">
            <!-- Card 1-->
            <a href="{{ route('Aerodynamics1') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[14vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">What is <br> Aerodynamics? <br> 1</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('Aerodynamics2') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[14vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">What is <br> Aerodynamics? <br> 2</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Hydrodynamics') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[14vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Hydrodynamics</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">3</span>
            </a>
            <br>
            <!-- Card 4 -->
            <a href="{{ route('Evolution') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[14vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Evolution of <br> Aeroplanes</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('Flying') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[14vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Flying <br> Machines</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">5</span>
            </a>

        </div>
    </div>



    {{--  Top Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a href="{{ route('K2') }}" id="returnButton">
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

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K2') }}";
                });
            }
        });
    </script>
@endpush
