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
    <div class="board w-[1267px] h-[734px] flex flex-col justify-center items-center">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Living Things</h2>

        <div class="grid grid-cols-1 gap-5 text-center sm:grid-cols-2 lg:grid-cols-4 ">
            <!-- Card 1-->
            <a href="{{ route('Animals') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Animals <br> are Living <br> Things</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">1</span>
            </a>


            <!-- Card 2 -->
            <a href="{{ route('Growth') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">How <br> do Animals <br> Grow?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('StageOfGrowth') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">The Stages of Growth of a Butterfly</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">3</span>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('MeasuringCar') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">How do Plants Grow?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('MeasuringCar2') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Parts of a PLant</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">5</span>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('Push') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">How Does a Plant drink water?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">6</span>
            </a>

            <!-- Card 7 -->
            <a href="{{ route('Seasaw') }}"
                class=" bg-[url('/assets/images/pptimages/Property1.png')] bg-no-repeat bg-contain bg-center w-[300px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Are Plants Living Things?</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">6</span>
            </a>
        </div>

    </div>
@endsection
