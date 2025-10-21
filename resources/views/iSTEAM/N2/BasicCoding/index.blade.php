@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{--  First Slide --}}
    <div class="board w-[1267px] h-[734px] flex flex-col justify-center items-center slide">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Basic Coding</h2>

        <div class="flex flex-wrap justify-center items-center " style="width: inherit">
            <!-- Card 1-->
            <a href="{{ route('Directions') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Directional <br> Signs</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('DifferentDirections') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Different <br> Directions</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Instructions') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Following <br> Instructions</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('LetsProgram') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Let's <br> Programme <br>1</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('LetsProgram2') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Let's <br> Programme <br> 2</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('Robot1') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Programme a <br> Robot <br>1</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">6</span>
            </a>

            <!-- Card 7 -->
            <a href="{{ route('Robot2') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Programme a <br> Robot <br>2</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">7</span>
            </a>
        </div>
    </div>

    {{--  Second Slide (Initially Hidden) --}}
    <div class="board w-[1267px] h-[734px] flex flex-col justify-center items-center slide hidden">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Basic Coding</h2>

        <div class="flex items-center justify-center  ">
            <!-- Card 1-->
            <a href="{{ route('Robot3') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Programme a <br> Robot <br> 3</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">8</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('Robot4') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Programme a <br> Robot <br> 4</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">9</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Robot5') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Programme a <br> Robot <br> 5</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">10</span>
            </a>
        </div>
    </div>

    {{--  Top Buttons --}}
    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-90">

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
                        <img src="{{ asset('assets/images/pptimages/return.png') }}" />

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
                    window.location.href = "{{ route('N2') }}";
                }
            });

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
