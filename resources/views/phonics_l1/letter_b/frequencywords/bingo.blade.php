@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .c-btn {
            color: #F7B94A !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .large-title {
            color: #F7B94A;
            font-size: 25vw !important;
    10   }

        .large-title:hover {
            color: #757571 !important;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
        }
    </style>
@endpush

@section('content')
    {{-- Top Title --}}
    <h2 class="top-title stroke">Bingo</h2>


    {{-- panel 1 --}}
    <div class="phonics-panel flex justify-between items-center">
        <div class="flex items-start ">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/click3.png') }}" class="w-[30vw]" />
                <h3 class="text-[#B76E33] text-[2.5vw] absolute top-[30%] left-[27%]">let's play<br>
                    bingo!</h3>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel flex flex-col gap-y-[3vw]">
        <h1 class="text-white text-[2vw]">Select a Bingo Sheet</h1>
        <div class="flex flex-col gap-y-[1vw]">
            <a class="px-[15vw] py-[3vw] rounded-2xl text-[2vw] bg-[#F7B94A] text-white info-btn1">Bingo sheet 1</a>
            <a class="px-[15vw] py-[3vw] rounded-2xl text-[2vw] bg-[#2D9CDB] text-white info-btn2">Bingo sheet 2</a>
        </div>
    </div>

    {{-- Bingo  Panel 1 --}}
    <div class="phonics-panel info-panel-1 ">
        <img src="{{ asset('assets/images/phonicsl1/letter_b/bingo1.png') }}" class="w-[40vw]">
    </div>

    {{-- Bingo Panel --}}
    <div class="phonics-panel info-panel-1  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#F7B94A] text-white flex justify-center items-center">
            for</div>
        <p class="p-note">Tips: This is the first of 5 words for <span class="text-[#f7b94a]">Bingo Sheet 1</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-1  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#F7B94A] text-white flex justify-center items-center">
            not</div>
        <p class="p-note">Tips: This is the second of 5 words for <span class="text-[#f7b94a]">Bingo Sheet 1</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-1  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#F7B94A] text-white flex justify-center items-center">
            into</div>
        <p class="p-note">Tips: This is the third of 5 words for <span class="text-[#f7b94a]">Bingo Sheet 1</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-1  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#F7B94A] text-white flex justify-center items-center">
            they</div>
        <p class="p-note">Tips: This is the fourth of 5 words for <span class="text-[#f7b94a]">Bingo Sheet 1</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-1  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#F7B94A] text-white flex justify-center items-center">
            that</div>
        <p class="p-note">Tips: This is the fifth of 5 words for <span class="text-[#f7b94a]">Bingo Sheet 1</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo  Panel 1 --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-center h-full justify-between ">
        <img src="{{ asset('assets/images/phonicsl1/letter_b/bingo1-ans.png') }}" class="w-[40vw]">
        <p class="p-note">Tip: Ask children to shout "Bingo" and to draw a line across the 3 words that appear in a straight
            line.</p>
    </div>


    {{-- ========================== --}}
    {{-- Bingo  Panel 2 --}}
    <div class="phonics-panel info-panel-2 ">
        <img src="{{ asset('assets/images/phonicsl1/letter_b/bingo2.png') }}" class="w-[40vw]">
    </div>

    {{-- Bingo Panel --}}
    <div class="phonics-panel info-panel-2  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#2D9CDB] text-white flex justify-center items-center">
            that</div>
        <p class="p-note">Tips: This is the first of 6 words for <span class="text-[#f7b94a]">Bingo Sheet 2</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-2  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#2D9CDB] text-white flex justify-center items-center">
            they</div>
        <p class="p-note">Tips: This is the second of 6 words for <span class="text-[#f7b94a]">Bingo Sheet 2</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-2  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#2D9CDB] text-white flex justify-center items-center">
            for</div>
        <p class="p-note">Tips: This is the third of 6 words for <span class="text-[#f7b94a]">Bingo Sheet 2</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-2  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#2D9CDB] text-white flex justify-center items-center">
            go</div>
        <p class="p-note">Tips: This is the fourth of 6 words for <span class="text-[#f7b94a]">Bingo Sheet 2</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-2  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#2D9CDB] text-white flex justify-center items-center">
            into</div>
        <p class="p-note">Tips: This is the fifth of 6 words for <span class="text-[#f7b94a]">Bingo Sheet 2</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo panel --}}
    <div class="phonics-panel info-panel-2  flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[25vw] text-center h-[10vw] rounded-2xl text-[4vw] bg-[#2D9CDB] text-white flex justify-center items-center">
            looking</div>
        <p class="p-note">Tips: This is the sixth of 6 words for <span class="text-[#f7b94a]">Bingo Sheet 2</span>. <br>
            Ask children to circle the word on their Bingo Sheet.</p>
    </div>

    {{-- Bingo  Panel 2 --}}
    <div class="phonics-panel info-panel-2 flex flex-col items-center h-full justify-between ">
        <img src="{{ asset('assets/images/phonicsl1/letter_b/bingo2-ans.png') }}" class="w-[40vw]">
        <p class="p-note">Tip: Ask children to shout "Bingo" and to draw a line across the 3 words that appear in a straight
            line.</p>
    </div>





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
        // SLIDE NAVIGATION SYSTEM
          document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";
document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");

            // URLs for navigation
            const returnURL = "{{ url('/phonics/letter_b') }}?view=words";
            const doneURL = "{{ url('/phonics/letter_b') }}?view=words";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // HELPER FUNCTIONS

            // Check if a slide is special (info panel)
            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                return classList.some(cls => /^info-panel-\d+$/.test(cls));
            }

            // Get special slide type from button class
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

            // Check if there are more special slides after current one
            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;
                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Check if we're on the last slide
            function isLastSlide(slideIndex) {
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;
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

            // DISPLAY FUNCTIONS
            function showSlide(slideIndex) {
                const ajaxSection = document.getElementById('ajax-section');
                const currentSlideElement = slides[slideIndex];

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }

                // Toggle ajax-section background ONLY based on no-bg class
                if (ajaxSection && currentSlideElement.classList.contains('no-bg')) {
                    ajaxSection.classList.add('no-bg');
                } else if (ajaxSection) {
                    ajaxSection.classList.remove('no-bg');
                }
            }

            // NAVIGATION FUNCTIONS
            function goNext() {
                if (currentSlide >= slides.length - 1) return;
                currentSlide++;

                // Skip slides that don't match current mode
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
                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

            // Bingo buttons - Enter special mode
            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);

                    // Find and show first special slide
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

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            // INITIALIZE
            showSlide(currentSlide);
        });
    </script>
@endpush
