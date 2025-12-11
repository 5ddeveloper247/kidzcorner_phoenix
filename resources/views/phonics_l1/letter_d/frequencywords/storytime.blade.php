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

        .large-title {
            color: #F7B94A;
            font-size: 20vw !important;
        }

        .link:hover {
            color: #a37d3adb;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
        }
    </style>
@endpush

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Story Time</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel no-bg mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio/storytime.mp3') }}">
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />

            <h1 class="text-white text-[4vw] absolute top-[12vw] left-[19vw]"> It's story <br> time!</h1>

            <p class="p-note absolute bottom-[1vw] left-[22%]">Tip: <a class="c-btn">Click here</a> to find
                out why reading words is important.</p>
        </div>
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col h-full justify-between items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-d/dog-ducks.m4a') }}">
        <h1 class="text-white text-[3vw]"><span class="text-[#f7b94a]">D</span>og and <span
                class="text-[#f7b94a]">D</span>ucks</h1>
        <img src="{{ asset('assets/images/phonicsl1/letter_d/dog-duck.png') }}" class="w-[30vw]" />
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel relative flex flex-col h-full justify-between items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-d/getting-dark.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_d/dark.gif') }}" class="w-[30vw]" />
        <h1 class="text-white text-[3vw]">The <span class="text-[#f7b94a]">d</span>ay is getting <span
                class="text-[#f7b94a]">d</span>ark.</h1>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel relative flex flex-col h-full justify-between items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-d/cahse.m4a') }}">
        <div class="relative h-fit w-fit">
            <img src="{{ asset('assets/images/phonicsl1/letter_d/bg.jpg') }}" class="w-[30vw] rounded-[1vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_d/dog.gif') }}" class="w-[16vw] absolute bottom-0 left-0" />
            <img src="{{ asset('assets/images/phonicsl1/letter_d/duck.gif') }}"
                class="w-[10vw] absolute bottom-[5%] scale-x-[-1] right-0" />
            <img src="{{ asset('assets/images/phonicsl1/letter_d/duck.gif') }}"
                class="w-[10vw] absolute bottom-[5%] scale-x-[-1] right-[15%]" />

        </div>
        <h1 class="text-white text-[2.5vw]">Buddy’s <span class="text-[#f7b94a]">d</span>og chases the <span
                class="text-[#f7b94a]">d</span>ucks.</h1>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel relative flex flex-col h-full justify-between items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-d/buddy-chasing.m4a') }}">
        <div class="relative h-fit w-fit">
            <img src="{{ asset('assets/images/phonicsl1/letter_d/bg.jpg') }}" class="w-[30vw] rounded-[1vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_d/b-run.gif') }}"
                class="h-[16vw] absolute bottom-0 left-0" />
            <img src="{{ asset('assets/images/phonicsl1/letter_d/dog.gif') }}"
                class="w-[16vw] absolute bottom-0 right-0" />

        </div>
        <h1 class="text-white text-[2.5vw]">Buddy chases the <span class="text-[#f7b94a]">d</span>og.</h1>
    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel relative flex flex-col h-full justify-between items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-d/late-dinner.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_d/table.png') }}" class="h-[20vw]" />
        <h1 class="text-white text-[2.5vw]">Now Buddy and his <span class="text-[#f7b94a]">d</span>og are late for <span
                class="text-[#f7b94a]">d</span>inner.</h1>
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
            const returnURL = "{{ url('/phonics/letter_d') }}";
            const doneURL = "{{ url('/phonics/letter_d') }}";

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
                });
            });

            // INITIALIZE
            showSlide(currentSlide);
        });
    </script>
@endpush
