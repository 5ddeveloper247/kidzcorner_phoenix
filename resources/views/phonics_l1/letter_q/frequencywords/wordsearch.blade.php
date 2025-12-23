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
    <h2 class="top-title stroke">Word Search</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel mb-[2vw]">
        <div class="flex items-start ">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/click3.png') }}" class="w-[30vw]" />
                <h3 class="text-[#B76E33] text-[2.5vw] absolute top-1/2 left-[45%] -translate-x-1/2 -translate-y-1/2">Help me
                    <br>
                    search for <br>
                    these words!
                </h3>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>


    {{-- treasure  Panel 1 --}}
    <div class="phonics-panel flex flex-col items-center gap-y-[1vw]">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word1.png') }}" class="w-[45vw]">
        <p class="p-note">Tips: Look at the Word Search Activity Sheet in the Pupil's Activity Book. <br>
            There are 8 words to be found in the puzzle.</p>
    </div>

    {{--  Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/for.m4a') }}">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            for</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/for.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word2.png') }}" class="w-[45vw]">
    </div>

    {{--  Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/and.mp3') }}">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            and</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/and.mp3') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word3.png') }}" class="w-[45vw]">
    </div>

    {{--  Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/wants.m4a') }}">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            wants</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/wants.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word4.png') }}" class="w-[45vw]">
    </div>

    {{--  Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/here.m4a') }}">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            here</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/here.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word5.png') }}" class="w-[45vw]">
    </div>

    {{--  Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/be.m4a') }}">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            be</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/be.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word6.png') }}" class="w-[45vw]">
    </div>


    {{--  Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/been.m4a') }}">
        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            been</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/been.m4a') }}">

        <img src="{{ asset('assets/images/phonicsl1/letter_q/word7.png') }}" class="w-[45vw]">
    </div>


    {{-- Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/the.mp3') }}">

        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            the</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/the.mp3') }}">

        <img src="{{ asset('assets/images/phonicsl1/letter_q/word8.png') }}" class="w-[45vw]">
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center space-y-[8vw] mt-[9vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/if.m4a') }}">

        <div
            class="w-[30vw] text-center h-[10vw] rounded-2xl text-[5vw] bg-[#F7B94A] text-white flex justify-center items-center">
            if</div>
        <p class="p-note">Tips: This is the second of 8 words to be flashed <br>
            Ask children to colour the word on their Treasure Trail Activity Sheet.</p>
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/flashcard/if.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word9.png') }}" class="w-[45vw]">
    </div>

    {{--  panel --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-q/wordsearch.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_q/word10.png') }}" class="w-[45vw]">
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
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/phonics/letter_q') }}";
            const doneURL = "{{ url('/phonics/letter_q') }}";

            // Track current position
            let currentSlide = 0;

            // 🔊 Global audio tracking
            let currentAudio = null;

            // 🛑 Function to stop all audio/speech
            function stopAllAudio() {
                // Stop any playing audio files
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
                // Stop text-to-speech
                window.speechSynthesis.cancel();
            }


            // HELPER FUNCTIONS
            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                return classList.some(cls => /^info-panel-\d+$/.test(cls));
            }

            function isLastSlide(slideIndex) {
                for (let i = slideIndex + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) {
                        return false;
                    }
                }
                return true;
            }

            // DISPLAY FUNCTIONS
            function showSlide(slideIndex) {
                const ajaxSection = document.getElementById('ajax-section');
                const currentSlideElement = slides[slideIndex];

                // 🛑 Stop all audio when changing slides
                stopAllAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Check if current slide has 'next-hide' class
                if (currentSlideElement.classList.contains('next-hide')) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                } else {
                    // Show "Done" button on last slide, otherwise show "Next"
                    if (isLastSlide(slideIndex)) {
                        // Check if current slide has 'done-hide' class
                        if (currentSlideElement.classList.contains('done-hide')) {
                            // Hide done button if slide has done-hide class
                            if (doneButton) doneButton.classList.add("hidden");
                            nextButtons.forEach(btn => btn.classList.add("hidden"));
                        } else {
                            // Show done button normally
                            nextButtons.forEach(btn => btn.classList.add("hidden"));
                            if (doneButton) doneButton.classList.remove("hidden");
                        }
                    } else {
                        nextButtons.forEach(btn => btn.classList.remove("hidden"));
                        if (doneButton) doneButton.classList.add("hidden");
                    }
                }

                // Toggle ajax-section background ONLY based on no-bg class
                if (ajaxSection) {
                    if (currentSlideElement.classList.contains('no-bg')) {
                        ajaxSection.classList.add('no-bg');
                    } else {
                        ajaxSection.classList.remove('no-bg');
                    }
                }

                // 🔊 Auto-play audio if slide has data-slide-audio attribute
                const slideAudioSrc = currentSlideElement.getAttribute('data-slide-audio');
                if (slideAudioSrc) {
                    // Small delay to ensure slide is visible before playing
                    setTimeout(() => {
                        currentAudio = new Audio(slideAudioSrc);
                        currentAudio.play().catch(err => console.log('Auto-play failed:', err));
                    }, 300);
                }
                // 🔊 Otherwise, speak the data-letter if present
                else {
                    const dataLetter = currentSlideElement.getAttribute('data-letter');
                    if (dataLetter) {
                        setTimeout(() => {
                            speakLetter(dataLetter);
                        }, 300);
                    }
                }
            }

            // NAVIGATION FUNCTIONS
            function goNext() {
                if (currentSlide >= slides.length - 1) return;
                currentSlide++;
                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];
                    if (!isSpecialSlide(slide)) break;
                    currentSlide++;
                }
                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                if (currentSlide === 0) {
                    stopAllAudio(); // 🛑 Stop audio before leaving
                    window.location.href = returnURL;
                    return;
                }
                if (currentSlide > 0) {
                    currentSlide--;
                    while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                        currentSlide--;
                    }
                    showSlide(currentSlide);
                }
            }

            function handleDone() {
                stopAllAudio(); // 🛑 Stop audio before action
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

            // 🔊 Home and Close buttons also stop audio
            const homeButton = document.getElementById("homeButton");
            const closeButton = document.getElementById("closeButton");

            if (homeButton) {
                homeButton.addEventListener("click", () => stopAllAudio());
            }

            if (closeButton) {
                closeButton.addEventListener("click", () => stopAllAudio());
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Stop any previous audio first
                    stopAllAudio();

                    // Play audio file if data-audio is provided
                    const audioSrc = btn.getAttribute("data-audio");
                    if (audioSrc) {
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play();
                    }
                    // Otherwise speak the letter
                    else {
                        const letter = btn.getAttribute("data-letter") || "a";
                        speakLetter(letter);
                    }
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // INITIALIZE
            showSlide(currentSlide);
        });
    </script>
@endpush
