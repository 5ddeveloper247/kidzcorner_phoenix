@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1vw;
            color: white !important;
        }

        .c-btn {
            color: #F7B94A !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2vw;
        }

        .panel-div {
            position: absolute;
            top: 4%;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel"  >
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/panel-bear.png') }}" class="w-[50vw]" />
            <h2
                class="absolute top-[38%] left-[27%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[4vw] text-center">
                Where’s the <br>
                Synonyms?</h2>
        </div>
        <p class="p-note">Tips: Encourage children to read the sentences.</p>
    </div>


    {{-- ============================ --}}
    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#A15E0D]">fast
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">close
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">throw
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">see
                    </h2>
                </div>

            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">shut
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">look
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">toss
                    </h2>
                </div>
            </div>

        </div>

    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">fast
                    </h2>
                </div>
                
            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">quick
                    </h2>
                </div>
            </div>

        </div>

    </div>


    {{-- panel 4 --}}
       <div class="phonics-panel flex flex-col justify-between w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] ">fast
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#A15E0D]">close
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">throw
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">see
                    </h2>
                </div>

            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">shut
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">look
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">toss
                    </h2>
                </div>
            </div>

        </div>

    </div>


    {{-- Panel 5 --}}
     <div class="phonics-panel flex flex-col justify-start h-full w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">fast
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">close
                    </h2>
                </div>
                
            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">quick
                    </h2>
                </div>
            </div>

        </div>

    </div>


    {{-- panel 6 --}}
       <div class="phonics-panel flex flex-col justify-between w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] ">fast
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">close
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#A15E0D]">throw
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">see
                    </h2>
                </div>

            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">shut
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">look
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">toss
                    </h2>
                </div>
            </div>

        </div>

    </div>


    {{-- Panel 7 --}}
     <div class="phonics-panel flex flex-col justify-start h-full w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">fast
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">close
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">throw
                    </h2>
                </div>
                
            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">toss
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- panel 8 --}}
       <div class="phonics-panel flex flex-col justify-between w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] ">fast
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">close
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">throw
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#A15E0D]">see
                    </h2>
                </div>

            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">shut
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">look
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">toss
                    </h2>
                </div>
            </div>

        </div>

    </div>


    {{-- Panel 9 --}}
     <div class="phonics-panel flex flex-col justify-start h-full w-full items-center"
         >
        <h2 class="panel-title stroke">Match the synonym pairs.</h2>
        <div class="flex items-center justify-around w-full">

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">fast
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">close
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">throw
                    </h2>
                </div>
                
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">see
                    </h2>
                </div>
                
            </div>

            <div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">quick
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw]">toss
                    </h2>
                </div>
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="h-[8vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[2vw] text-[#F8473A]">look
                    </h2>
                </div>
            </div>
        </div>
    </div>



    {{-- =========================================================== --}}
    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button id="returnButton">
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

    {{-- Next and Done Buttons --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" />
        </button>
    </div>
    <div class="down-btn-container">
        <button class="doneButton hidden">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div>
@endsection

@push('script')
    <script>
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/lrw3/synonyms') }}";
            const doneURL = "{{ url('/phonics_l2/lrw3/synonyms') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                return classList.some(cls => /^info-panel-\d+$/.test(cls));
            }

            function getSlideTypeFromButton(button) {
                const classList = Array.from(button.classList);
                for (let className of classList) {
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-panel-' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;
                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideIndex) {
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) {
                    return true;
                }
                if (!isInSpecialMode) {
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) {
                            return false;
                        }
                    }
                    return true;
                }
                return false;
            }

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide = slides[slideIndex];

                let audioSrc = slide.getAttribute('data-slide-audio');

                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();

                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                playSlideAudio(slideIndex);

                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.remove("hidden"));
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.add("hidden"));
                }
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    const audioSrc = btn.getAttribute('data-slide-audio');
                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });

            function goNext() {
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];
                    if (isInSpecialMode) {
                        if (slide.classList.contains(specialSlideClass)) break;
                    } else {
                        if (!isSpecialSlide(slide)) break;
                    }
                    currentSlide++;
                }

                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopCurrentAudio();
                    window.location.href = returnURL;
                    return;
                }

                if (isInSpecialMode) {
                    let previousIndex = currentSlide - 1;

                    while (previousIndex >= 0) {
                        if (slides[previousIndex].classList.contains(specialSlideClass)) {
                            break;
                        }
                        previousIndex--;
                    }

                    if (previousIndex >= 0) {
                        currentSlide = previousIndex;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    if (currentSlide > 0) {
                        currentSlide--;
                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }
                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                stopCurrentAudio();
                window.location.href = doneURL;
            }

            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);

                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", handleDone);
            });

            showSlide(currentSlide);
        });
    </script>
@endpush
