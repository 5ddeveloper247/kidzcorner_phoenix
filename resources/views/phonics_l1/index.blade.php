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
    <div id="slide-board" class="flex flex-col items-center gap-y-[5vw] hidden">
        <div>
            <h1 class="text-[4vw] text-[#F7B94A] stroke">Phonics & Reading</h1>
            <h3 class="text-[3vw] text-white">e-Teaching</h3>
        </div>
        <button> <img src="{{ asset('assets/images/phonicsl1/global/btns/start.png') }}" class="start-btn w-[12vw]" />
        </button>
    </div>

    {{-- Aplhabets a - h --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/phonics_l1/letter_a') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/a.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_b') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/b.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_c') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/c.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_d') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/d.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_e') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/e.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_f') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/f.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_g') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/g.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_h') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/h.png') }}" />
        </a>

    </div>


    {{-- Aplhabets i - p --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/phonics_l1/letter_i') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/i.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_j') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/j.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_k') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/k.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_l') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/l.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_m') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/m.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_n') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/n.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_o') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/o.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_p') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/p.png') }}" />
        </a>

    </div>


    {{-- Aplhabets q - x --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/phonics_l1/letter_q') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/q.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_r') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/r.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_s') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/s.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_t') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/t.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_u') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/u.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_v') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/v.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_w') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/w.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_x') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/x.png') }}" />
        </a>

    </div>

    {{-- Aplhabets y & z --}}
    <div id="slide-board" class="grid grid-cols-2  gap-[2vw] mb-[2vw] ">

        <a href="{{ url('/phonics_l1/letter_y') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/y.png') }}" />
        </a>

        <a href="{{ url('/phonics_l1/letter_z') }}">
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";

        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll("#slide-board");
            const startBtn = document.querySelector(".start-btn");
            const nextBtn = document.getElementById("next-btn");
            const doneBtn = document.getElementById("done-btn");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            let currentSlide = 0;

            // ✅ Restore last slide from sessionStorage
            const savedSlide = sessionStorage.getItem("phonics_l1_slide");
            if (savedSlide !== null) {
                currentSlide = parseInt(savedSlide);
                sessionStorage.removeItem("phonics_l1_slide");
            }

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
                    sessionStorage.setItem("phonics_l1_slide", currentSlide);
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
