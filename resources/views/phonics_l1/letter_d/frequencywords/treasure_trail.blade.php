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
            width: 50vw;

        }
    </style>
@endpush

@section('content')
    {{-- Top Title --}}
    <h2 class="top-title stroke">Treasure Trail</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel mb-[2vw]">
        <div class="flex items-start ">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/click3.png') }}" class="w-[30vw]" />
                <h3 class="text-[#B76E33] text-[2.5vw] absolute top-1/2 left-[45%] -translate-x-1/2 -translate-y-1/2">Let’s
                    find the <br>
                    trail to the <br>
                    treasure!</h3>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: When children can success fully match all the high frequency words, ask them to do the
            Balloon Fun Activity Sheet in the Pupil's Activity Book.</p>
    </div>


    {{-- treasure  Panel 1 --}}
    <div class="phonics-panel flex flex-col items-center gap-y-[1vw]">
        <img src="{{ asset('assets/images/phonicsl1/letter_c/trail.png') }}" class="w-[45vw]">
        <p class="p-note">Tips: Look at the Treasure Trail Activity Sheet in the Pupil's Activity Book. <br>
            There are 10 words from the start of the trail to the treasure.</p>
    </div>

    {{-- treasure Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            a</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            into</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            not</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            that</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            make</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            makes</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            is</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            now</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            get</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            getting</div>
        <p class="p-note">Tips: This is the second of 10 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>



    {{-- treasure  Panel 1 --}}
    <div class="phonics-panel flex flex-col items-center h-full justify-between ">
        <img src="{{ asset('assets/images/phonicsl1/letter_c/trail-ans.png') }}" class="w-[45vw]">
        <p class="p-note">Tips: Ask children to draw a line linking the coloured words to form a trail to the treasure.</p>
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
        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // URLs for navigation
            const returnURL = "{{ url('/phonics/letter_c') }}";
            const doneURL = "{{ url('/phonics/letter_c') }}";

            // Track current position
            let currentSlide = 0;

            // HELPER FUNCTIONS
            function isLastSlide(slideIndex) {
                return slideIndex >= slides.length - 1;
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
                showSlide(currentSlide);
            }

            function goBack() {
                if (currentSlide === 0) {
                    window.location.href = returnURL;
                    return;
                }
                currentSlide--;
                showSlide(currentSlide);
            }

            function handleDone() {
                window.location.href = doneURL;
            }

            // EVENT LISTENERS
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


        // PANEL LOGIC (Try Again / Well Done)
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const tryAgainPanel = document.getElementById('tryAgain');
            const wellDonePanel = document.getElementById('wellDone');
            const retryBtn = document.getElementById('retry');
            const closeBtn = document.getElementById('close');

            // Get all letter buttons
            const falseLetters = document.querySelectorAll('[id="false"]');
            const trueLetters = document.querySelectorAll('[id="true"]');

            // Create audio elements
            const tryAgainSound = new Audio('{{ asset('assets/audio/phonics_audio/tryagain.mp3') }}');
            const wellDoneSound = new Audio('{{ asset('assets/audio/phonics_audio/welldone.mp3') }}');

            // Function to show panel and play sound automatically
            function showPanelWithSound(panel, audioElement) {
                panel.style.display = 'flex';
                audioElement.currentTime = 0;
                audioElement.play().catch(err => console.log('Audio play failed:', err));
            }

            // Handle FALSE letter clicks (show try again panel with sound)
            falseLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(tryAgainPanel, tryAgainSound);
                });
            });

            // Handle TRUE letter click (show well done panel with sound)
            trueLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(wellDonePanel, wellDoneSound);
                });
            });

            // Handle Retry button - close panel and stay on same slide
            retryBtn.addEventListener('click', function(e) {
                e.preventDefault();
                tryAgainPanel.style.display = 'none';
                tryAgainSound.pause();
                tryAgainSound.currentTime = 0;
            });

            // Handle Close button - close panel and stay on same slide
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                wellDonePanel.style.display = 'none';
                wellDoneSound.pause();
                wellDoneSound.currentTime = 0;
            });
        });
    </script>
@endpush
