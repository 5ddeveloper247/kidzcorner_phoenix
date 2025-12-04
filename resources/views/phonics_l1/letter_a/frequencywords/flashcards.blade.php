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

        </div>

        {{-- Panel 2 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/like.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>


        {{-- Panel 3 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/likes.mp3') }}">
            <div class="flex items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>


        {{-- Panel 4 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/and.mp3') }}">
            <div class="flex items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>


        {{-- Panel 5 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/are.mp3') }}">
            <div class="grid grid-cols-3 items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/are.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>


        {{-- Panel 6 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/with.mp3') }}">
            <div class="grid grid-cols-3 items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/are.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/with.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>

        {{-- Panel 7 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/the.mp3') }}">
            <div class="grid grid-cols-3 items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/are.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/with.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/the.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>


        {{-- Panel 8 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/go.mp3') }}">
            <div class="grid grid-cols-3 items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/are.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/with.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/the.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/go.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>

        {{-- Panel 9 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/they.mp3') }}">
            <div class="grid grid-cols-3 items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/are.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/with.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/the.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/go.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/they.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>


        {{-- Panel 10 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/for.mp3') }}">
            <div class="grid grid-cols-3 items-start">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/are.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/with.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/the.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/go.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/they.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/for.png') }}" class="w-[14vw]" />
            </div>
            <p class="p-note">Tip: These are 10 words on the list. Guide children to read each word.</p>
        </div>


        {{-- Panel 11 --}}
        <div class="phonics-panel flex flex-col justify-between h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/flashcard/no.mp3') }}">
            <div class="grid grid-cols-3 items-start mt-[2vw]">
                <img src="{{ asset('assets/images/phonicsl1/letter_a/like.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/likes.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/and.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/are.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/with.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/the.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/go.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/they.png') }}" class="w-[14vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_a/for.png') }}" class="w-[14vw]" />
                <div class="col-span-3 flex justify-center">
                    <img src="{{ asset('assets/images/phonicsl1/letter_a/no.png') }}" class="w-[14vw]" />
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
                const infoButtons = document.querySelectorAll("[class*='info-btn']");
                const soundButtons = document.querySelectorAll("[id^='soundButton']");

                // URLs for navigation
                const returnURL = "{{ url('/phonics/letter_a') }}";
                const doneURL = "{{ url('/phonics/letter_a') }}";

                // Track current position
                let currentSlide = 0;
                let isInSpecialMode = false;
                let returnToSlide = null;
                let specialSlideClass = null;

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

                function speakLetter(letter) {
                    window.speechSynthesis.cancel();
                    const utterance = new SpeechSynthesisUtterance(letter);
                    utterance.rate = 0.8;
                    utterance.pitch = 1.2;
                    utterance.volume = 1;
                    const voices = window.speechSynthesis.getVoices();
                    const femaleVoice = voices.find(voice =>
                        voice.name.includes('Female') ||
                        voice.name.includes('female') ||
                        voice.name.includes('Woman') ||
                        voice.name.includes('Google US English') ||
                        voice.name.includes('Microsoft Zira')
                    );
                    if (femaleVoice) {
                        utterance.voice = femaleVoice;
                    }
                    window.speechSynthesis.speak(utterance);
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
