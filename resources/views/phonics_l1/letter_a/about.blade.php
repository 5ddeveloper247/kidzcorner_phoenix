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

            .panel-title {
                color: #F7B94A;
                font-size: 3vw;
            }

            .panel-ul {
                color: white;
                font-size: 1.3vw;
                padding-left: 3vw;
            }
        </style>
    @endpush

    @section('content')
        {{-- panel 1 --}}
        <div class="phonics-panel flex flex-col mt-[-2vw] gap-y-[2vw]">
            <h1 class="panel-title stroke">About Phonics & Reading</h1>
            <div class="flex items-start">
                <ul class="list-disc text-start panel-ul space-y-[1.5vw]">
                    <li>Reviews of research suggest that it is the emphasis on early and systematic phonics instruction that
                        makes a programme effective.</li>
                    <li>Phonics &amp; Reading is a method of systematically teaching beginners to read and pronounce words
                        by learning to associate letters or letter groups with the sounds they represent.</li>
                    <li>It aims to equip children with a good background in letter-sound correspondence so that they can
                        apply this knowledge to read independently.</li>
                </ul>
                <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="h-[20vw]" />
            </div>
            <p class="p-note"> <a class="c-btn info-btn1">Click here</a> to see the Instructional Goals</p>
        </div>


        {{-- Panel 2 --}}
        <div class="phonics-panel info-panel-1 flex flex-col mt-[-2vw] gap-y-[2vw]">
            <h1 class="panel-title stroke">About Phonics & Reading</h1>
            <div class="flex items-start">
                <div class="flex flex-col justify-around h-100">
                    <div class="text-start">
                        <h3 class="text-white text-[1.5vw]">Effective phonics instruction in the early years should *:</h3>
                        <ul class="list-disc text-start panel-ul">
                            <li>Teach phonemic awareness</li>
                            <li>Teach the common sound-spelling relationships in words</li>
                            <li>Teach children how to say the sounds in the words</li>
                            <li>Use text that is composed of words that use sound-spelling correspondences that children
                                have learnt</li>
                            <li>Use interesting stories to develop vocabulary and language comprehension</li>
                        </ul>
                    </div>
                    <p class="text-white text-start">Article on 'National Institute of Child Health and Human Develop ment
                        (NICHD) Research Supports The America
                        Reads Challenge by Dr G Reid Lyon and Dr Edward Kameenui.</p>
                </div>

                <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="h-[20vw]" />
            </div>
        </div>



        {{-- Panel 3 --}}
        <div class="phonics-panel flex flex-col mt-[-2vw] gap-y-[2vw]">
            <h1 class="panel-title stroke">About Phonics & Reading</h1>
            <div class="flex items-start">
                <ul class="list-disc text-start panel-ul">
                    <li>Phonics engages sight, sound, touch and movement as
                        children learn phonemic awareness through letter sounds, words,
                        songs, expressions, story readers and other activities.</li>
                </ul>


                <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="h-[20vw]" />
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
