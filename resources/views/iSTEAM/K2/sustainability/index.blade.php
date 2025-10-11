@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .slide-container {
            transition: opacity 0.3s ease-in-out;
        }

        .button-hidden {
            display: none !important;
        }

        .button-disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Custom animations for buttons */
        .button-fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        .stroke {
            -webkit-text-stroke: 2px #533705;
        }

        .note {
            font-size: 24px;
            font-weight: 400;
            color: white;
        }

        a {
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
    {{--  First Slide --}}
    <div class="board w-[1267px] h-[734px] flex flex-col justify-center items-center slide">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Living Things</h2>

        <div class="flex flex-wrap justify-center items-center " style="width: inherit">
            <!-- Card 1-->
            <a href="{{ route('Bell') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">How Plants <br> Grow?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('Plane') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">What are <br> Living <br> Things?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Balloon') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Are Plants <br> Living <br> Things?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('Wedge') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">What is <br> DNA?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('Rubbish') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Tomato <br> DNA</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('Wheels') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">DNA <br> Double <br> Helix</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">6</span>
            </a>

            <!-- Card 7 -->
            <a href="{{ route('PlantsMachine') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Fingerprints</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">7</span>
            </a>

            <!-- Card 8 -->
            <a href="{{ route('Pulleys') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Fingerprint <br> Patterns</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">8</span>
            </a>
        </div>
    </div>

    {{--  Second Slide (Initially Hidden) --}}
    <div class="board w-[1267px] h-[734px] flex flex-col justify-center items-center slide hidden">
        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke">Living Things</h2>
        <div class="flex items-center flex-wrap justify-center max-w-[600px] ">
            <!-- Card 1-->
            <a href="{{ route('Punching') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">The Uses of <br> Fingerprints</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">9</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('Screw') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">What are <br> Bacteria?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">10</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Ball') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Do they Kill <br> Bacteria?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">11</span>
            </a>
            <!-- Card 3 -->
            <a href="{{ route('Levers') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Do <br> Bacteria <br> Grow?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">12</span>
            </a>
        </div>
    </div>

    {{--  Top Buttons --}}
    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>
    </div>

    {{--  Next Button --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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

                //  First slide → show NEXT, hide RETURN
                if (index === 0) {
                    nextButton.classList.remove("hidden");
                }
                //  Second slide → hide NEXT, show RETURN
                else if (index === 1) {
                    nextButton.classList.add("hidden");
                    returnButton.classList.remove("hidden");
                }
            }

            //  NEXT button → go to 2nd slide
            nextButton.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) {
                    currentSlide++;
                    showSlide(currentSlide);
                }
            });

            //  RETURN button → go back to 1st slide
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
