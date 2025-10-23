@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('styles')
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



        a {
            cursor: pointer;

        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            z-index: 9999;
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }

        #preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        #preloader video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* --- Fade in main page after preloader --- */
        .page-content {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .page-content.visible {
            opacity: 1;
        }
    </style>
@endpush

@section('content')
    <div id="preloader">
        <video id="preloaderVideo" autoplay playsinline>
            <source src="{{ asset('assets/images/pptimages/preloader.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="grid grid-cols-2 gap-[3vw]">

        <a href="{{ route('N1') }}" style="background-image: url('{{ asset('/assets/images/pptimages/n1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] md:text-[2.5vw] absolute top-[2.5vw] right-[2vw]">N1</p>
        </a>

        <a href="{{ route('N2') }}" style="background-image: url('{{ asset('/assets/images/pptimages/n2.png') }}');"
            class="bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] md:text-[2.5vw] absolute top-[3.3vw] left-[4vw]">N2</p>
        </a>

        <a href="{{ route('K1') }}" style="background-image: url('{{ asset('/assets/images/pptimages/k1.png') }}');"
            class="bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] md:text-[2.5vw] absolute top-[3vw] right-[2vw]">K1</p>
        </a>


        <a href="{{ route('K2') }}" style="background-image: url('{{ asset('/assets/images/pptimages/k2.png') }}');"
            class="bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] md:text-[2.5vw] absolute top-[4vw] left-[3.8vw]">K2</p>
        </a>
    </div>



    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

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


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const preloader = document.getElementById("preloader");
        const pageContent = document.querySelector(".page-content");

        // ⏱ Hide preloader after 2 seconds
        setTimeout(() => {
            preloader.classList.add("hidden");
            setTimeout(() => {
                pageContent.classList.add("visible");
            }, 800);
        }, 5000);
    });
</script>
