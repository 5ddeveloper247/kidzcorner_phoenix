@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2.2vw;
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
            10
        }

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
    <h2 class="top-title stroke">Word Wall</h2>


    {{-- panel 1 --}}
    <div class="phonics-panel flex justify-between items-center">
        <div class="flex items-start ">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonicsl1/global/click3.png') }}" class="w-[30vw]" />
                <h3
                    class="text-[#B76E33] text-[2.2vw] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                    let's build<br> a word wall!
                </h3>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between items-center h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-l/falling.m4a') }}">

        <img src="{{ asset('assets/images/phonicsl1/letter_l/falling.gif') }}" class="w-[40vw]" />
        <p class="p-note">Tip: Answers on the next slide.</p>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col items-center gap-y-[1vw]">
        <h2 class="text-white text-[2vw] text-center">Have you got the correct word wall?</h2>
        <img src="{{ asset('assets/images/phonicsl1/letter_l/w-wall.png') }}" class="w-[35vw]" />
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
            const returnURL = "{{ url('/phonics/letter_l') }}";
            const doneURL = "{{ url('/phonics/letter_l') }}";

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

            // 🔊 ITEM CLICK AUDIO LOGIC (Items 1-4)
            const items = document.querySelectorAll('.ietm-1, .ietm-2, .ietm-3, .ietm-4');

            // Define audio paths for each item
            const itemAudioPaths = {
                'ietm-1': "{{ asset('assets/audio/phonics_audio/letter-d/getting-dark.m4a') }}",
                'ietm-2': "{{ asset('assets/audio/phonics_audio/letter-d/cahse.m4a') }}",
                'ietm-3': "{{ asset('assets/audio/phonics_audio/letter-d/buddy-chasing.m4a') }}",
                'ietm-4': "{{ asset('assets/audio/phonics_audio/letter-d/late-dinner.m4a') }}"
            };

            items.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Stop any currently playing audio
                    stopAllAudio();

                    // Get the item class to determine which audio to play
                    const itemClass = Array.from(item.classList).find(cls => cls.startsWith(
                        'ietm-'));

                    if (itemClass && itemAudioPaths[itemClass]) {
                        currentAudio = new Audio(itemAudioPaths[itemClass]);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });

                // Add pointer cursor to indicate clickability
                item.style.cursor = 'pointer';
            });

            // INITIALIZE
            showSlide(currentSlide);
        });
    </script>
@endpush
