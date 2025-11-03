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

        @keyframes arrowMove {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(0.5vw);
            }
        }

        .arrow-animate {
            animation: arrowMove 1.2s ease-in-out infinite;
        }
    </style>
@endpush

@section('content')
    <div id="preloader">
        <video id="preloaderVideo" autoplay playsinline>
            <source src="{{ asset('assets/images/pptimages/preloader2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="grid grid-cols-2 gap-[3vw] z-[100]">

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

        <div
            class="group absolute left-[-21.5vw] top-1/2 -translate-y-1/2
         w-[10vw] h-[10vw] flex items-center transition-all duration-500 hover:left-[-19vw]">

            <button class="db-btn w-[10vw] px-[2vw] h-[4vw] text-white rotate-[90deg]"
                style="background: linear-gradient(229deg, rgb(87,173,137) 0%, rgba(58,111,93,1) 50%, rgba(247,185,74,1) 100%); border-radius:2.5vw 2.5vw 0 0 ">
                DASHBOARD
            </button>

            <i class="bx bx-arrow-left-stroke text-[2vw] text-[#274F4A] -ml-[3.5vw] arrow-animate"></i>
        </div>



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
    document.addEventListener("DOMContentLoaded", () => {
        const preloader = document.getElementById("preloader");
        const pageContent = document.querySelector(".page-content");
        const video = document.querySelector("video");
        const dashBoard = document.querySelector(".db-btn");

        if (dashBoard) {
            dashBoard.addEventListener("click", () => {
                window.location.href = "{{ route('admin.dashboard') }}";
            });
        }

        // Mute the video after 7 seconds
        setTimeout(() => video.muted = true, 9000);

        // Hide preloader and show content after 7 seconds
        setTimeout(() => {
            preloader.classList.add("hidden");
            preloader.classList.add("muted");
            // pageContent.classList.add("visible");
        }, 8000);
    });
</script>
