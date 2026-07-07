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


    {{-- Phonics l2 --}}
    <div id="slide-board" class=" home grid grid-cols-4 gap-[2vw] mb-[2vw]">

        <a href="{{ url('/micet/n2/school/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi1.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/school/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi2.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/animals/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi3.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/animals/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi4.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/fruits/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi5.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/fruits/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi6.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/colour/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi7.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/colour/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi8.png') }}" />
        </a>

    </div>


    {{-- Phonics l2 --}}
    <div id="slide-board" class="first grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/micet/n2/rhymes/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi9.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/rhymes/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi10.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/transport/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi11.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/transport/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi12.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/day/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi13.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/day/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi14.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/music/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi15.png') }}" />
        </a>

        <a href="{{ url('/micet/n2/music/index') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi16.png') }}" />
        </a>

    </div>


    {{-- Phonics l2 --}}
    <div id="slide-board" class="forth grid grid-cols-2 gap-[2vw] mb-[2vw] hidden text-center justify-content-center">

        <a href="{{ url('/micet/n2/lrw1') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi17.png') }}" class="mx-auto d-block" />
        </a>

        <a href="{{ url('/micet/n2/lrw2') }}">
            <img src="{{ asset('assets/images/micet/global/n2/mi18.png') }}" class="mx-auto d-block" />
        </a>


        <div class="col-span-3 flex justify-center items-center gap-[2vw]">
            <a href="{{ url('/micet/n2/lrw4') }}">
                <img src="{{ asset('assets/images/micet/global/n2/mi19.png') }}" class="mx-auto d-block" />
            </a>

            <a href="{{ url('/micet/n2/lrw5') }}">
                <img src="{{ asset('assets/images/micet/global/n2/mi20.png') }}" class="mx-auto d-block" />
            </a>
        </div>
    </div>



    {{-- All Buttons --}}
    <button class="mt-[2vw] absolute bottom-[1vw]" id="next-btn">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" class="w-[10vw]" />
    </button>

    <button class="mt-[2vw] absolute bottom-[1vw] hidden" id="done-btn">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" class="w-[10vw]" />
    </button>


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
            const nextBtn = document.getElementById("next-btn");
            const doneBtn = document.getElementById("done-btn");
            const returnButton = document.getElementById("returnButton");

            let currentSlide = 0;

            const savedSlide = sessionStorage.getItem("micet_n1_slide");
            const cameFromLesson = sessionStorage.getItem("micet_n1_from_lesson");

            if (savedSlide !== null && cameFromLesson === "1") {
                currentSlide = parseInt(savedSlide);
            }

            // Always clear after reading
            sessionStorage.removeItem("micet_n1_slide");
            sessionStorage.removeItem("micet_n1_from_lesson");

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });


                if (index === slides.length - 1) {
                    nextBtn.classList.add("hidden");
                    doneBtn.classList.remove("hidden");
                } else {
                    nextBtn.classList.remove("hidden");
                    doneBtn.classList.add("hidden");
                }
            }

            document.querySelectorAll("#slide-board a").forEach(link => {
                link.addEventListener("click", () => {
                    sessionStorage.setItem("micet_n1_slide", currentSlide);
                    sessionStorage.setItem("micet_n1_from_lesson", "1");
                });
            });

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
                    } else {
                        window.location.href = document.body.dataset.homeRoute;
                    }
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
