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
    <div class="flex justify-center items-center min-h-screen ">
        <div class="board w-[1267px] h-[734px] flex flex-col justify-center items-center">

            <h2 class="text-[45px] text-[#F7B94A] font-extrabold mb-8">Living Things</h2>

            <div class="flex flex-wrap gap-3 justify-center items-center">
                <!-- Card 1 -->
                <a href="{{ route('Animals') }}"
                    class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[290px] h-[290px] relative flex justify-center items-center transition hover:brightness-110">
                    <h2 class="text-2xl text-[#7D6F71] text-center leading-tight">Animals <br> are Living <br> Things</h2>
                    <span class="text-3xl text-[#AF6E39] absolute top-[70px] right-[30px]">1</span>
                </a>

                <!-- Card 2 -->
                <a href="{{ route('Growth') }}"
                    class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[290px] h-[290px] relative flex justify-center items-center transition hover:brightness-110">
                    <h2 class="text-2xl text-[#7D6F71] text-center leading-tight">How <br> do Animals <br> Grow?</h2>
                    <span class="text-3xl text-[#AF6E39] absolute top-[70px] right-[30px]">2</span>
                </a>

                <!-- Card 3 -->
                <a href="{{ route('StageOfGrowth') }}"
                    class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[290px] h-[290px] relative flex justify-center items-center transition hover:brightness-110">
                    <h2 class="text-2xl text-[#7D6F71] text-center leading-tight">The Stages of <br> Growth of <br> a
                        Butterfly</h2>
                    <span class="text-3xl text-[#AF6E39] absolute top-[70px] right-[30px]">3</span>
                </a>

                <!-- Card 4 -->
                <a href="{{ route('PlantsGrowth') }}"
                    class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[290px] h-[290px] relative flex justify-center items-center transition hover:brightness-110">
                    <h2 class="text-2xl text-[#7D6F71] text-center leading-tight">How do <br> Plants <br> Grow?</h2>
                    <span class="text-3xl text-[#AF6E39] absolute top-[70px] right-[30px]">4</span>
                </a>

                <!-- Card 5 -->
                <a href="{{ route('PartsOfPlants') }}"
                    class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[290px] h-[290px] relative flex justify-center items-center transition hover:brightness-110">
                    <h2 class="text-2xl text-[#7D6F71] text-center leading-tight">Parts of a <br> Plant</h2>
                    <span class="text-3xl text-[#AF6E39] absolute top-[70px] right-[30px]">5</span>
                </a>

                <!-- Card 6 -->
                <a href="{{ route('Drinking') }}"
                    class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[290px] h-[290px] relative flex justify-center items-center transition hover:brightness-110">
                    <h2 class="text-2xl text-[#7D6F71] text-center leading-tight">How Does a <br> Plant Drink <br> Water?
                    </h2>
                    <span class="text-3xl text-[#AF6E39] absolute top-[70px] right-[30px]">6</span>
                </a>

                <!-- Card 7 -->
                <a href="{{ route('Plants') }}"
                    class="bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[290px] h-[290px] relative flex justify-center items-center transition hover:brightness-110">
                    <h2 class="text-2xl text-[#7D6F71] text-center leading-tight">Are Plants <br> Living <br> Things?</h2>
                    <span class="text-3xl text-[#AF6E39] absolute top-[70px] right-[30px]">7</span>
                </a>
            </div>

        </div>
    </div>



    {{--  Top Buttons --}}
    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a href="{{ route('N2') }}"
            class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
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
@endsection
