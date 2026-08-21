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

    <a href="{{ url('/micet/k1/water/class1') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class1.png') }}" />
    </a>

    <a href="{{ url('/micet/k1/water/class2') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class2.png') }}" />
    </a>

    <a href="{{ url('/micet/k1/water/class3') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class3.png') }}" />
    </a>

    <a href="{{ url('/micet/k1/water/class4') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class4.png') }}" />
    </a>

    <a href="{{ url('/micet/k1/water/class5') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class5.png') }}" />
    </a>

    <a href="{{ url('/micet/k1/water/class6') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class6.png') }}" />
    </a>

    <a href="{{ url('/micet/k1/water/class7') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class7.png') }}" />
    </a>

    <a href="{{ url('/micet/k1/water/class8') }}">
        <img src="{{ asset('assets/images/micet/k1/water/class8.png') }}" />
    </a>

</div>


<div id="slide-board" class="flex justify-center items-center flex-col mb-[2vw] hidden">

    <div class="grid grid-cols-2 gap-[2vw] mb-[2vw]">

        <a href="{{ url('/micet/k1/water/class9') }}">
            <img src="{{ asset('assets/images/micet/k1/water/class9.png') }}" />
        </a>

        <a href="{{ url('/micet/k1/water/class10') }}">
            <img src="{{ asset('assets/images/micet/k1/water/class10.png') }}" />
        </a>
    </div>

    <div class="col-span-2 grid grid-cols-3 gap-[2vw]">

        <a href="{{ url('/micet/k1/water/cards') }}">
            <img src="{{ asset('assets/images/micet/k1/water/cards.png') }}" />
        </a>

        <a href="{{ url('/micet/k1/water/activity') }}">
            <img src="{{ asset('assets/images/micet/k1/water/activity.png') }}" />
        </a>

        <a href="{{ url('/micet/k1/water/tables') }}">
            <img src="{{ asset('assets/images/micet/k1/water/tables.png') }}" />
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
    document.body.dataset.parentRoute = "{{ url('/micet/k1/index') }}";

    document.addEventListener("DOMContentLoaded", () => {
        const slides = document.querySelectorAll("#slide-board");
        const nextBtn = document.getElementById("next-btn");
        const doneBtn = document.getElementById("done-btn");
        const returnButton = document.getElementById("returnButton");

        let currentSlide = 0;

        const savedSlide = sessionStorage.getItem("micet_k1_water_slide");
        const cameFromLesson = sessionStorage.getItem("micet_k1_water_from_lesson");

        if (savedSlide !== null && cameFromLesson === "1") {
            currentSlide = parseInt(savedSlide);
        }

        // Always clear after reading
        sessionStorage.removeItem("micet_k1_water_slide");
        sessionStorage.removeItem("micet_k1_water_from_lesson");

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

        // Save slide + flag only when clicking a lesson link
        document.querySelectorAll("#slide-board a").forEach(link => {
            link.addEventListener("click", () => {
                sessionStorage.setItem("micet_k1_water_slide", currentSlide);
                sessionStorage.setItem("micet_k1_water_from_lesson", "1");
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
                    // On the first slide, go up to the parent (N1 index), not the site root
                    window.location.href = document.body.dataset.parentRoute;
                }
            });
        }

        showSlide(currentSlide);
    });
</script>
@endpush