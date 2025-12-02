@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp


@section('content')

    {{--  Starting div --}}
    <div id="slide-board" class="flex flex-col items-center gap-y-[5vw] hidden">
        <div>
            <h1 class="text-[80px] text-[#F7B94A] stroke">Phonics & Reading</h1>
            <h3 class="text-[50px] text-white">e-Teaching</h3>
        </div>
        <button> <img src="{{ asset('assets/images/phonicsl1/global/btns/start.png') }}" class="start-btn w-[12vw]" />
        </button>
    </div>

    {{-- Aplhabets a - h --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{url('/phonics/letter_a')}}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/a.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/b.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/c.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/d.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/e.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/f.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/g.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/h.png') }}" />
        </a>

    </div>


    {{-- Aplhabets i - p --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/i.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/j.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/k.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/l.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/m.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/n.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/o.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/p.png') }}" />
        </a>

    </div>


    {{-- Aplhabets q - x --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/q.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/r.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/s.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/t.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/u.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/v.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/w.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/x.png') }}" />
        </a>

    </div>

    {{-- Aplhabets y & z --}}
    <div id="slide-board" class="grid grid-cols-2  gap-[2vw] mb-[2vw] ">

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/y.png') }}" />
        </a>

        <a href="#">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/z.png') }}" />
        </a>
    </div>




    {{-- All Buttons --}}
    <button class="mt-[2vw] absolute bottom-[2vw]" id="next-btn">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" class="w-[12vw]" />
    </button>

    <button class="mt-[2vw] absolute bottom-[2vw] hidden" id="done-btn">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" class="w-[12vw]" />
    </button>


    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- return Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">

            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slides = document.querySelectorAll("#slide-board");
        const startBtn = document.querySelector(".start-btn");
        const nextBtn = document.getElementById("next-btn");
        const doneBtn = document.getElementById("done-btn");

        let currentSlide = 0;

        // Function to show specific slide
        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove("hidden");
                } else {
                    slide.classList.add("hidden");
                }
            });

            // Show/hide buttons based on slide
            if (index === 0) {
                // First slide - hide both next and done buttons
                nextBtn.classList.add("hidden");
                doneBtn.classList.add("hidden");
            } else if (index === slides.length - 1) {
                // Last slide - show done button, hide next button
                nextBtn.classList.add("hidden");
                doneBtn.classList.remove("hidden");
            } else {
                // Middle slides - show next button, hide done button
                nextBtn.classList.remove("hidden");
                doneBtn.classList.add("hidden");
            }
        }

        // Start button - show second slide (index 1)
        if (startBtn) {
            startBtn.addEventListener("click", () => {
                currentSlide = 1;
                showSlide(currentSlide);
            });
        }

        // Next button - go to next slide
        if (nextBtn) {
            nextBtn.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) {
                    currentSlide++;
                    showSlide(currentSlide);
                }
            });
        }

        // Done button - go back to first slide
        if (doneBtn) {
            doneBtn.addEventListener("click", () => {
                currentSlide = 0;
                showSlide(currentSlide);
            });
        }

        // Initialize - show first slide
        showSlide(0);
    });
</script>
