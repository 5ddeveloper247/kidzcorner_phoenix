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

    {{-- Phonics l2 --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/phonics_l2/bl_pl') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g1.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/cl_sl') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g2.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/fl_gl') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g3.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/br_pr') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g4.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/dr_gr') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g5.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/fr_cr') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g6.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/tr_rev') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g7.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/sw_sc') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g8.png') }}" />
        </a>

    </div>


    {{-- Phonics l2 --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/phonics_l2/sp_st') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g9.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/sk_sn') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g10.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/sm_rev') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g11.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/sh_ch') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g12.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/th_wh') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g13.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/sh_th') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g14.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ch_rev') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g15.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ap_ad') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g16.png') }}" />
        </a>

    </div>


    {{-- Phonics l2 --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/phonics_l2/ag_ab') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g17.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/am_an') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g18.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/at_rev') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g19.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ed_et') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g20.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ob_og') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g21.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/op_ot') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g22.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/id_in') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g23.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ig_ip') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g24.png') }}" />
        </a>

    </div>

    {{-- Phonics l2 --}}
    <div id="slide-board" class="grid grid-cols-4 gap-[2vw] mb-[2vw] hidden">

        <a href="{{ url('/phonics_l2/it_rev') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g25.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ub_ug') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g26.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/un_up') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g27.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ut_rev') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g28.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ay_ue') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g29.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ee_ea') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g30.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/y_ie') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g31.png') }}" />
        </a>

        <a href="{{ url('/phonics_l2/ow_oe') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g32.png') }}" />
        </a>

    </div>

    {{-- Phonics l2 --}}
    <div id="slide-board" class="grid grid-cols-3 gap-[2vw] mb-[2vw] hidden text-center justify-content-center">

        <a href="{{ url('/phonics_l2/lrw1') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g33.png') }}" class="mx-auto d-block" />
        </a>

        <a href="{{ url('/phonics_l2/lrw2') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g34.png') }}" class="mx-auto d-block" />
        </a>

        <a href="{{ url('/phonics_l2/lrw3') }}">
            <img src="{{ asset('assets/images/phonics_l2/global/g35.png') }}" class="mx-auto d-block" />
        </a>

        <div class="col-span-3 flex justify-center items-center gap-[2vw]">
            <a href="{{ url('/phonics_l2/lrw4') }}">
                <img src="{{ asset('assets/images/phonics_l2/global/g36.png') }}" class="mx-auto d-block" />
            </a>

            <a href="{{ url('/phonics_l2/lrw5') }}">
                <img src="{{ asset('assets/images/phonics_l2/global/g37.png') }}" class="mx-auto d-block" />
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll("#slide-board");
            const startBtn = document.querySelector(".start-btn");
            const nextBtn = document.getElementById("next-btn");
            const doneBtn = document.getElementById("done-btn");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

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

                // Hide return button on first slide, show on all others
                if (returnButton) {
                    if (index === 0) {
                        returnButton.classList.add("hidden");
                    } else {
                        returnButton.classList.remove("hidden");
                    }
                }

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

            // Start button - go to first content slide
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

            // Return button - go back one slide
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    if (currentSlide > 0) {
                        currentSlide--;
                        showSlide(currentSlide);
                    }
                });
            }

            // Initialize - show first slide
            showSlide(0);
        });
    </script>
@endpush
