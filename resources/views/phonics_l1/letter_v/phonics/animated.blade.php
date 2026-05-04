@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp


@push('styles')
    <style>
          .p-note {
                font-size: 1vw;
                /* line-height: 100%; */
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
    <h2 class="top-title stroke">Animated Letters</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel no-bg mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio/writing.mp3') }}">
         <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/an-board.png') }}" class="w-[60vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/capital.png') }}" id="cap-img"
                    class="absolute left-[15%] bottom-[9%] w-[9vw] hover:brightness-125 cursor-pointer" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/small.png') }}" id="sam-img"
                    class="absolute right-[20%] bottom-[8%] w-[6vw] hover:brightness-125 cursor-pointer" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-[2vw] right-[18vw] absolute" />


            <p class="p-note absolute bottom-[0vw] left-[15%]">Tip: Click on the appropriate rock to see the stroke for
                an uppercase or lowercase letter. <br>
                <a href="" class="c-btn info-btn1">Click here</a> to find out why writing is important in a phonics
                programme.
            </p>
        </div>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col mt-[-2vw] gap-y-[2vw]">
        <h1 class="panel-title stroke">Reading Words in Stories</h1>
        <div class="flex items-start">
            <div class="flex flex-col justify-around h-100 text-start">
                <ul class="list-disc text-start panel-ul space-y-[1.5vw]">
                    <li>Adams (1990) suggested that children need to recognise the
                        forms of the letters automatically to be able to recognise
                        words fluently.</li>
                    <li>In this section, children gain familiarity with both the upper and
                        lowercase letters as they learn the forms of the letters.</li>
                </ul>
                <p class="text-white text-[.9vw]">Adams, M.J. (1990). Beginning to Read: Thinking and Learning About Print.
                    Cambridge, MA: MIT Press.</p>
            </div>

            <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col items-center gap-y-[3vw]">
        <a class="info-btn2">
            <img src="{{ asset('assets/images/phonicsl1/letter_v/vv1.png') }}" class="h-[20vw]" /></a>
        <p class="p-note">Tip: Click on the letter to see a demonstration of the stroke. Follow up <br>
            with the Writing Activity Sheet in the Pupil's Activity Book.</p>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel info-panel-2 flex flex-col items-center h-full justify-between">
        <img src="{{ asset('assets/images/phonicsl1/letter_v/v-1.gif') }}" class="h-[25vw]" />
        <p class="p-note">Tip: Click on the letter to see a demonstration of the stroke. </p>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col items-center gap-y-[5vw]">
        <a class="info-btn3">
            <img src="{{ asset('assets/images/phonicsl1/letter_v/vv2.png') }}" class="h-[13vw]" /></a>
        <p class="p-note">Tip: Click on the letter to see a demonstration of the stroke. Follow up <br>
            with the Writing Activity Sheet in the Pupil's Activity Book.</p>
    </div>

    {{-- Panel 5 --}}
    <div class="phonics-panel info-panel-3 flex flex-col items-center gap-y-[4vw]">
        <img src="{{ asset('assets/images/phonicsl1/letter_v/v-2.gif') }}" class="w-[15vw]" />
        <p class="p-note">Tip: Click on the letter to see a demonstration of the stroke. </p>
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
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/phonics_l1/letter_v') }}?view=phonics";
            const doneURL = "{{ url('/phonics_l1/letter_v') }}?view=phonics";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            //  Global audio tracking
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

                //  Auto-play audio if slide has data-slide-audio attribute
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
                    stopAllAudio(); // 🛑 Stop audio before leaving
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
                stopAllAudio(); // 🛑 Stop audio before action
                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);

                    // Toggle background when returning from info mode
                    const ajaxSection = document.getElementById('ajax-section');
                    const currentSlideElement = slides[currentSlide];
                    if (ajaxSection) {
                        if (currentSlideElement.classList.contains('no-bg')) {
                            ajaxSection.classList.add('no-bg');
                        } else {
                            ajaxSection.classList.remove('no-bg');
                        }
                    }
                } else {
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS
            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();
                    stopAllAudio(); // 🛑 Stop audio when entering info mode
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

                    // 1️⃣ If data-audio is provided → play audio file
                    const audioSrc = btn.getAttribute("data-audio");
                    if (audioSrc) {
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play();
                        return;
                    }

                    // 2️⃣ Otherwise fallback to speaking the letter
                    const letter = btn.getAttribute("data-letter") || "a";
                    speakLetter(letter);
                });
            });

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    stopAllAudio(); // Stop previous audio
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
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
