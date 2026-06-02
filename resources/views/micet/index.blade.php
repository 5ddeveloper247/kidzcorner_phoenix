@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = false;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp

@push('styles')
    <style>
        #slide-board a img {
            width: 14vw;
        }
    </style>
@endpush

@section('content')

    {{--  Starting div --}}
    <div id="slide-board" class="flex flex-col items-center gap-y-[1vw] hidden">
        <h1 class="text-[6vw] text-[#F7B94A] stroke">Mi Curriculum</h1>
        <button> <img src="{{ asset('assets/images/phonicsl1/global/btns/start.png') }}" class="start-btn w-[12vw]" />
        </button>
    </div>

    {{-- Phonics l2 --}}
    <div id="slide-board" class=" home grid grid-cols-2 gap-[2vw] mb-[2vw] hidden">

       <a href="{{ url ('/micet/n1/index') }}" style="background-image: url('{{ asset('/assets/images/pptimages/n1.png') }}');"
            class=" bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[2.5vw] absolute top-[2.5vw] right-[2vw]">N1</p>
        </a>

        <a href="{{ url ('/micet/n2/index') }}" style="background-image: url('{{ asset('/assets/images/pptimages/n2.png') }}');"
            class="bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[2.5vw] absolute top-[3.3vw] left-[4vw]">N2</p>
        </a>

        <a href="{{ url ('/micet/k1/index') }}" style="background-image: url('{{ asset('/assets/images/pptimages/k1.png') }}');"
            class="bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[2.5vw] absolute top-[3vw] right-[2vw]">K1</p>
        </a>


        <a href="{{ url ('/micet/k2/index') }}" style="background-image: url('{{ asset('/assets/images/pptimages/k2.png') }}');"
            class="bg-no-repeat bg-contain bg-center w-[15vw] h-[13vw] relative transition hover:brightness-110 ">
            <p class="text-[#AF6E39] text-[2.5vw] absolute top-[4vw] left-[3.8vw]">K2</p>
        </a>
        

    </div>


    {{-- All Buttons --}}
    <button class="mt-[2vw] absolute bottom-[1vw]" id="next-btn">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" class="w-[10vw]" />
    </button>
{{-- 
    <button class="mt-[2vw] absolute bottom-[1vw] hidden" id="done-btn">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" class="w-[10vw]" />
    </button> --}}


    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- Home Button (goes to specific URL) -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        document.body.dataset.homeRoute = "{{ url('/micet') }}";

        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll("#slide-board");
            const startBtn = document.querySelector(".start-btn");
            const nextBtn = document.getElementById("next-btn");
            const doneBtn = document.getElementById("done-btn");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            let currentSlide = 0;

            // ✅ Restore last slide from sessionStorage
            // const savedSlide = sessionStorage.getItem("phonics_l2_slide");
            // if (savedSlide !== null) {
            //     currentSlide = parseInt(savedSlide);
            //     sessionStorage.removeItem("phonics_l2_slide");
            // }

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                if (returnButton) {
                    if (index === 0) {
                        returnButton.classList.add("hidden");
                    } else {
                        returnButton.classList.remove("hidden");
                    }
                }

                if (index === 0) {
                    nextBtn.classList.add("hidden");
                    doneBtn.classList.add("hidden");
                } else if (index === slides.length - 1) {
                    nextBtn.classList.add("hidden");
                    doneBtn.classList.remove("hidden");
                } else {
                    nextBtn.classList.remove("hidden");
                    doneBtn.classList.add("hidden");
                }
            }

            // ✅ Save slide index before navigating away via any lesson link
            document.querySelectorAll("#slide-board a").forEach(link => {
                link.addEventListener("click", () => {
                    sessionStorage.setItem("phonics_l2_slide", currentSlide);
                });
            });

            if (startBtn) {
                startBtn.addEventListener("click", () => {
                    currentSlide = 1;
                    showSlide(currentSlide);
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            }

            if (doneBtn) {
                doneBtn.addEventListener("click", () => {
                    currentSlide = 0;
                    showSlide(currentSlide);
                });
            }

            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    if (currentSlide > 0) {
                        currentSlide--;
                        showSlide(currentSlide);
                    }
                });
            }

            // ✅ Initialize with restored or default slide
            showSlide(currentSlide);
        });
    </script>
@endpush
