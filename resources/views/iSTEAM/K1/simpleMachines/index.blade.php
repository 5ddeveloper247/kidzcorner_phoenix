@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{--  First Slide --}}
    <div class="board w-[55vw] flex flex-col justify-center items-center slide">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Simple Machines</h2>

        <div class="flex flex-wrap justify-center items-center " style="width: inherit">
            <!-- Card 1-->
            <a href="{{ route('Bell') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Ring a Bell <br> Machine</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('Plane') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">The Power of <br> an Inclinced <br> Plane</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Balloon') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Pop a <br> Balloon <br> Machine</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('Wedge') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">What is a <br>wedge?</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('Rubbish') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Throw a <br> Rubbish <br> Machine</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('Wheels') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">What are <br> Wheels and <br> Axles</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">6</span>
            </a>

            <!-- Card 7 -->
            <a href="{{ route('PlantsMachine') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Water a <br> Plant <br> Machine</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">7</span>
            </a>

            <!-- Card 8 -->
            <a href="{{ route('Pulleys') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Pulleys to <br>the Rescue</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">8</span>
            </a>
        </div>
    </div>

    {{--  Second Slide (Initially Hidden) --}}
    <div class="board w-[30vw] flex flex-wrap flex-col justify-center items-center slide hidden">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Simple Machines</h2>

        <div class="flex items-center flex-wrap justify-center max-w-[600px] ">
            <!-- Card 1-->
            <a href="{{ route('Punching') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Hole <br> Punching <br> Machine</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">9</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('Screw') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">How does a <br> Screw <br> Work?</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">10</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Ball') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">Lunch a <br> Ball <br> Machine</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">11</span>
            </a>
            <!-- Card 3 -->
            <a href="{{ route('Levers') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[13vw] h-[10vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="!text-[1.5vw] text-[#7D6F71]">How do <br> Levers <br> Work?</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1vw] right-[1vw]">12</span>
            </a>
        </div>
    </div>

    {{--  Top Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a id="returnButton">
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

    {{--  Next Button --}}
    <div class="down-btn-container">
        <button
            class="nextButton ">
                        <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>
@endsection

@push('script')
    <script>
          document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButton = document.querySelector(".nextButton");
            const returnButton = document.getElementById("returnButton");

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // First slide → show NEXT button
                if (index === 0) {
                    nextButton.classList.remove("hidden");
                }
                // Second slide → hide NEXT button
                else if (index === 1) {
                    nextButton.classList.add("hidden");
                }
            }

            // NEXT button → go to 2nd slide
            nextButton.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) {
                    currentSlide++;
                    showSlide(currentSlide);
                }
            });

            // RETURN button → conditional behavior
            returnButton.addEventListener("click", (e) => {
                e.preventDefault(); // Prevent default link behavior

                if (currentSlide > 0) {
                    // If on slide 2 (or higher), go back to previous slide
                    currentSlide--;
                    showSlide(currentSlide);
                } else {
                    // If on slide 1 (currentSlide === 0), redirect to K1
                    window.location.href = "{{ route('K1') }}";
                }
            });

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
