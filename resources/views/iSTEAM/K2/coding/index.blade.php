@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{--  First Slide --}}
    <div class="board w-[55vw]   flex flex-col justify-center items-center slide">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Coding and Animation</h2>

        <div class="flex flex-wrap justify-center items-center " style="width: inherit">
            <!-- Card 1-->
            <a href="{{ route('scratch') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">What is <br> Scratch <br> Jr?</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('animate1') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Animate a <br> Character <br>1</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('animate2') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Animate a <br> Character <br>2</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('animate3') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Animate a <br> Character <br>3</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('animate4') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Animate a <br> Character <br>4</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('animate5') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Animate a <br> Character <br>5</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">6</span>
            </a>

            <!-- Card 7 -->
            <a href="{{ route('character') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Animate the <br> Characters</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">7</span>
            </a>

            <!-- Card 8 -->
            <a href="{{ route('story') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Our <br> Animated <br> Stories</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">8</span>
            </a>
        </div>
    </div>

    {{--  Top Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a id="returnButton" href="{{route('K2')}}">
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
            const returnButton = document.getElementById("returnButton");

            returnButton.addEventListener("click", function() {
                window.location.href = "{{ route('K2') }}";
            })
        });
    </script>
@endpush
