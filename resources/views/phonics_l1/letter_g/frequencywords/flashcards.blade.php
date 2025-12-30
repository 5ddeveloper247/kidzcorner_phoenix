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
    </style>
@endpush

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Flash Cards</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/help.mp3') }}">

        <div class="flex items-start ">
            <img src="{{ asset('assets/images/phonicsl1/letter_a/read.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tip: Flash these high frequency words the first reading of the story.</p>

    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-f/flashcard/has.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-f/flashcard/to.m4a') }}">
        <div class="flex items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-b/flashcard/look.m4a') }}">
        <div class="flex items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-g/flashcard/looks.m4a') }}">
        <div class="grid grid-cols-3 items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/looks.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-f/flashcard/at.m4a') }}">
        <div class="grid grid-cols-3 items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/looks.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/at.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-g/flashcard/she.m4a') }}">
        <div class="grid grid-cols-3 items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/looks.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/at.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/she.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>


    {{-- Panel 8 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-g/flashcard/it.m4a') }}">
        <div class="grid grid-cols-3 items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/looks.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/at.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/she.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/it.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-g/flashcard/or.m4a') }}">
        <div class="grid grid-cols-3 items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/looks.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/at.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/she.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/it.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/or.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>


    {{-- Panel 10 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-g/flashcard/he.m4a') }}">
        <div class="grid grid-cols-3 items-start">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/looks.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/at.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/she.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/it.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/or.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/he.png') }}" class="w-[14vw]" />
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
    </div>


    {{-- Panel 11 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-g/flashcard/on.m4a') }}">
        <div class="grid grid-cols-3 items-start mt-[2vw]">
            <img src="{{ asset('assets/images/phonicsl1/letter_g/has.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/to.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/look.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/looks.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/at.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/she.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/it.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/or.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_g/he.png') }}" class="w-[14vw]" />
            <div class="col-span-3 flex justify-center">
                <img src="{{ asset('assets/images/phonicsl1/letter_g/on.png') }}" class="w-[14vw]" />
            </div>
        </div>
        <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
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
            const returnURL = "{{ url('/phonics/letter_g') }}?view=words";
            const doneURL = "{{ url('/phonics/letter_g') }}?view=words";

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
