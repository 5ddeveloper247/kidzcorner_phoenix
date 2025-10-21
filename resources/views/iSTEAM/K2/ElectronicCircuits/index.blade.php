@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{--  First Slide --}}
    <div class="board w-[1267px] h-[734px] flex flex-col justify-center items-center slide">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Electronic Circuits</h2>

        <div class="flex flex-wrap justify-center items-center" style="width: 80%;">
            <!-- Card 1-->
            <a href="{{ route('electricity') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Machines and <br> Electricity</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('circuit') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">What is an <br> Electronic <br> Circuit?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('circuit2') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Playdough <br> Circuits</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('makey1') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Makey Makey <br>1</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('makey2') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Makey Makey <br>2</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('makey3') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Makey Makey <br>3</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">6</span>
            </a>

        </div>
    </div>



    {{--  Top Buttons --}}
    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-90">
        <!-- Return Button (hidden initially) -->
        <a 
    id="returnButton">

            <img 
                src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>
    </div>

@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const returnButton = document.getElementById("returnButton");

            //  RETURN button → go back to 1st slide
            returnButton.addEventListener("click", () => {
                window.location.href = "{{ route('K2') }}";
            });
        });
    </script>
@endpush
