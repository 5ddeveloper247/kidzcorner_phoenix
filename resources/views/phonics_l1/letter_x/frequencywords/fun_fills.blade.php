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

        .panel-title {
            color: #F7B94A;
            font-size: 2vw;
        }
    </style>
@endpush

@section('content')
    {{-- Top Title --}}
    <h2 class="top-title stroke">Fun Fill-ins</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel mb-[2vw]">
        <div class="flex items-start ">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/click3.png') }}" class="w-[30vw]" />
                <h3 class="text-[#B76E33] text-[1.5vw] absolute top-1/2 left-[45%] -translate-x-1/2 -translate-y-1/2">Do you
                    remember <br>
                    the story of ‘Ox’s <br>
                    X-ray’? Help <br>
                    me complete the <br>
                    story.</h3>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Go through the story of 'Ox’s X-ray', if necessary. Ask children to turn to the Fun Fill-ins
            Activity Sheet in the Pupil's Activity Book.</p>
    </div>


    {{-- Panel 1 --}}
    <div class="phonics-panel flex flex-col items-center gap-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-x/funfills.m4a') }}">
        <h2 class="text-white text-[1.5vw]">Listen to these words:</h2>
        <img src="{{ asset('assets/images/phonicsl1/letter_x/wall.png') }}" class="w-[40vw]">
        <p class="p-note">Tips: Look at the Word Search Activity Sheet in the Pupil's Activity Book. <br>
            There are 8 words to be found in the puzzle.</p>
    </div>

    {{-- treasure Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-between gap-y-[1vw]">
        <h2 class="text-white text-[1.5vw]">Choose a word to fill in the blank.</h2>

        <h2 class="stroke panel-title">The ox<span class="text-underline">_____</span> an x-ray.</h2>

        <img src="{{ asset('assets/images/phonicsl1/letter_x/keep.png') }}" class="h-[15vw]">
        <img src="{{ asset('assets/images/phonicsl1/letter_x/line1.png') }}">
        <p class="p-note">Tips: Use this slide to guide children to select the correct word to fill in the blank.
            Check result on next slide.</p>

    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center gap-[1vw]">
        <div class="h-fit relative">
            <span class="text-white text-[2vw] absolute left-[33%] top-[-1vw]">has</span>
            <h2 class="stroke panel-title">The ox<span class="text-underline">_____</span> an x-ray.</h2>
        </div>

        <img src="{{ asset('assets/images/phonicsl1/letter_x/keep.png') }}" class="h-[25vw]">
    </div>

    {{-- treasure Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center ">
        <h2 class="text-white text-[1.5vw]">Choose a word to fill in the blank.</h2>

        <h2 class="stroke panel-title">Max keeps <span class="text-underline">____</span> safe in a box.</h2>

        <img src="{{ asset('assets/images/phonicsl1/letter_x/keep.gif') }}" class="h-[20vw]">
        <img src="{{ asset('assets/images/phonicsl1/letter_x/line2.png') }}">
        <p class="p-note">Tips: Use this slide to guide children to select the correct word to fill in the blank.
            Check result on next slide.</p>

    </div>

    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center">
        <div class="h-fit relative">
            <span class="text-white text-[2vw] absolute left-[40%] top-[-1vw]">it</span>
            <h2 class="stroke panel-title">Max keeps <span class="text-underline">____</span> safe in a box.</h2>
        </div>

        <img src="{{ asset('assets/images/phonicsl1/letter_x/keep.gif') }}" class="h-[25vw]">
    </div>


    {{-- treasure Panel --}}
    <div class="phonics-panel flex flex-col items-center justify-between ">
        <h2 class="text-white text-[1.5vw]">Choose a word to fill in the blank.</h2>

        <h2 class="stroke panel-title">Six foxes <span class="text-underline">______</span> the box.</h2>


        <img src="{{ asset('assets/images/phonicsl1/letter_x/walking.gif') }}" class="h-[20vw] rounded-[1vw]">
        <img src="{{ asset('assets/images/phonicsl1/letter_x/line3.png') }}">
        <p class="p-note">Tips: Use this slide to guide children to select the correct word to fill in the blank.
            Check result on next slide.</p>

    </div>


    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center gap-y-[2vw]">
        <div class="h-fit relative">
            <span class="text-white text-[2vw] absolute left-[47%] top-[-1vw]">find</span>
            <h2 class="stroke panel-title">Six foxes <span class="text-underline">______</span> the box.</h2>
        </div>

        <img src="{{ asset('assets/images/phonicsl1/letter_x/walking.gif') }}" class="h-[25vw] rounded-[1vw]">
    </div>

    {{-- treasure Panel --}}
    <div class="phonics-panel flex flex-col items-center gap-y-[1vw]">
        <h2 class="text-white text-[1.5vw]">Choose a word to fill in the blank.</h2>

        <h2 class="stroke panel-title">And play <span class="text-underline">_______</span> the x-ray of the ox.</h2>

        <div class="w-fit h-fit relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_x/walking.gif') }}" class="h-[15vw] rounded-[1vw]">
            <img src="{{ asset('assets/images/phonicsl1/letter_x/xray.png') }}" class="w-[5vw] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        </div>
        <img src="{{ asset('assets/images/phonicsl1/letter_x/line4.png') }}">
        <p class="p-note">Tips: Use this slide to guide children to select the correct word to fill in the blank.
            Check result on next slide.</p>

    </div>


    {{-- treasure panel --}}
    <div class="phonics-panel flex flex-col items-center justify-center gap-y-[2vw]">
        <div class="h-fit relative">
            <span class="text-white text-[2vw] absolute left-[30%] top-[-1vw]">would</span>
            <h2 class="stroke panel-title">And play <span class="text-underline">_______</span> the x-ray of the ox.</h2>
        </div>
        <div class="w-fit h-fit relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_x/walking.gif') }}" class="h-[25vw] rounded-[1vw]">
            <img src="{{ asset('assets/images/phonicsl1/letter_x/xray.png') }}" class="w-[7vw] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        </div>
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
            const returnURL = "{{ url('/phonics/letter_x') }}";
            const doneURL = "{{ url('/phonics/letter_x') }}";

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
