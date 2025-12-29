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
    <h2 class="top-title stroke"> Read Along</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel no-bg mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-b/read-along.mp3') }}">
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />

                        <h1 class="text-white text-[4vw] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"> Read along <br> with us!</h1>


            <p class="p-note absolute bottom-[1vw] left-[22%]">Tip: <a class="c-btn info-btn1">Click here</a> to find out
                why
                reading words is important.</p>
        </div>
    </div>


    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col mt-[-2vw] gap-y-[2vw]">
        <h1 class="panel-title stroke">Practice in Reading Words</h1>
        <div class="flex items-end">
            <ul class="list-disc text-start panel-ul space-y-[1.5vw]">

                <li>The ultimate purpose of phonics instruction is for children to learn to read words. Successful phonics
                    programs provide a great deal of practice in reading words containing the
                    letter-sound relationships that are taught.</li>
                <li>Use this section with the children to practise reading words containing the letter-sound patterns in a
                    sentence.Spelling patterns are learnt through continued practice in reading words containing those
                    patterns.
                    Children recognize words automatically by using spelling patterns.</li>
            </ul>

            <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between h-[90%] self-end">
        <div class="flex flex-col items-center justify-center gap-[2vw]">
            <img src="{{ asset('assets/images/phonicsl1/letter_j/j-jug.png') }}" class="w-[25vw]" />
            <h1 class="text-[2vw] text-[#f7b94a]">Jack jumps over the jug of juice.</h1>
        </div>
        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-j/j-jug.m4a') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    <div class="phonics-panel done-hide next-hide">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <div class="relative ml-[10vw]">
                    <img src="{{ asset('assets/images/phonicsl1/global/blank.png') }}" class="w-[18vw]" />
                    <h2 class="text-[1.2vw] !text-[#B76E33] absolute top-[2vw] right-[2vw]">Help me complete <br> the
                        sentence
                        with <br> a word beginning <br> with ‘j’.</h2>
                </div>
                <img src="{{ asset('assets/images/phonicsl1/global/teacher.png') }}" class="h-[20vw]" />
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-no-repeat bg-center bg-contain h-[30vw] w-[28vw] mt-[-7vw] flex justify-center items-end"
                    style="background-image: url('{{ asset('assets/images/phonicsl1/global/board.png') }}')">

                    <div class="grid grid-cols-2 gap-x-[4vw] gap-y-[1.5vw] place-items-center mb-[3vw]">
                        {{-- this is false --}}
                        <div class="flex items-start">
                            <a class="hover:brightness-110" id="false">
                                <img src="{{ asset('assets/images/phonicsl1/letter_f/fox.png') }}" class="w-[6vw]" />
                            </a>
                            {{-- sound Button --}}
                            <button class="w-[3vw]" id="soundButton" data-letter="fox">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                        </div>

                        {{-- falsde --}}
                        <div class="flex items-start mb-[1vw]">

                            <a class="w-[6vw] hover:brightness-110 " id="true">
                                <img src="{{ asset('assets/images/phonicsl1/letter_j/jug.png') }}" />
                            </a>
                            {{-- sound Button --}}
                            <button class="w-[3vw]" id="soundButton" data-letter="jug">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                        </div>

                        {{-- true --}}
                        <div class="col-span-2 flex justify-center ">
                            <div class="flex items-start gap-x-[1vw]">
                                <a class="hover:brightness-110" id="false">
                                    <img src="{{ asset('assets/images/phonicsl1/letter_d/duck.png') }}" class="h-[6vw] " />
                                </a>
                                {{-- sound Button --}}
                                <button class="w-[3vw]" id="soundButton" data-letter="duck">
                                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-white text-[1.5vw]">Look at the.........!</h2>

            </div>
        </div>
        <p class="p-note">Tip: Ask children to select the picture that matches the focus letter <br>
            sound. If needed, click on the sound icons to listen to the words.</p>
    </div>



    {{-- Panel --}}
    {{-- Try Again --}}
    <div id="tryAgain" class="fixed inset-0 z-[1000] hidden  items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
        <div class="w-[60vw] relative h-[40vw] bg-contain bg-no-repeat bg-center flex flex-col justify-center items-center rounded-lg "
            style="background-image: url('{{ asset('assets/images/K2/exit.png') }}');">
            <p class="text-[3vw] !text-[#F8473A] stroke font-bold">Try Again?</p>
            <div class="mt-[1vw] ">
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/tryagain.gif') }}" class="h-[20vw]"
                    alt="Animation" />

            </div>
            <a href="#" id="retry"
                class="text-[#F8473A] text-[2vw] font-bold stroke hover:scale-110 transition-transform absolute bottom-[6vw] right-[10vw]">Retry</a>
        </div>
    </div>

    {{-- Well Done --}}
    <div id="wellDone" class="fixed inset-0 z-[1000] hidden  items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
        <div class="w-[60vw] relative h-[40vw] bg-contain bg-no-repeat bg-center flex flex-col justify-center items-center rounded-lg "
            style="background-image: url('{{ asset('assets/images/K2/exit.png') }}');">
            <p class="text-[3vw] !text-[#59967D] font-bold">Well Done!</p>
            <div class="mt-[1vw] ">
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/welldone.gif') }}" class="h-[20vw]"
                    alt="Animation" />

            </div>
            <a href="#" id="close"
                class="text-[#59967D] text-[2vw] hover:scale-110 transition-transform absolute bottom-[6vw] right-[10vw]">Close</a>
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
            const returnURL = "{{ url('/phonics/letter_j') }}";
            const doneURL = "{{ url('/phonics/letter_j') }}";

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

                // 🔊 AUTO-PLAY LOGIC (Priority order):
                // 1. Check for data-slide-audio attribute on the slide itself
                const slideAudioSrc = currentSlideElement.getAttribute('data-slide-audio');
                if (slideAudioSrc) {
                    setTimeout(() => {
                        currentAudio = new Audio(slideAudioSrc);
                        currentAudio.play().catch(err => console.log('Auto-play failed:', err));
                    }, 300);
                    return; // Exit early, don't check for sound button
                }

                // 2. Check for sound button with data-audio attribute
                const soundButton = currentSlideElement.querySelector('#soundButton[data-audio]');
                if (soundButton) {
                    const audioSrc = soundButton.getAttribute('data-audio');
                    if (audioSrc) {
                        setTimeout(() => {
                            currentAudio = new Audio(audioSrc);

                            // Play twice as mentioned in tips
                            let playCount = 0;
                            currentAudio.play().catch(err => console.log('Auto-play failed:', err));

                            currentAudio.onended = function() {
                                playCount++;
                                if (playCount < 2) {
                                    currentAudio.currentTime = 0;
                                    currentAudio.play();
                                }
                            };
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


        // panel
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const tryAgainPanel = document.getElementById('tryAgain');
            const wellDonePanel = document.getElementById('wellDone');
            const retryBtn = document.getElementById('retry');
            const closeBtn = document.getElementById('close'); // Close button in Well Done panel

            // Get all letter buttons by ID (multiple elements with same ID - need querySelectorAll)
            const falseLetters = document.querySelectorAll('[id="false"]');
            const trueLetters = document.querySelectorAll('[id="true"]');

            // Create audio elements
            const tryAgainSound = new Audio('{{ asset('assets/audio/phonics_audio/tryagain.mp3') }}');
            const wellDoneSound = new Audio('{{ asset('assets/audio/phonics_audio/welldone.mp3') }}');

            // Function to show panel and play sound automatically
            function showPanelWithSound(panel, audioElement) {
                panel.style.display = 'flex';
                // Play sound automatically when panel opens
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
                // Stop the sound if still playing
                tryAgainSound.pause();
                tryAgainSound.currentTime = 0;
            });

            // Handle Close button - redirect to route
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                // Stop the sound if still playing
                wellDoneSound.pause();
                wellDoneSound.currentTime = 0;
               window.location.href = '{{ url('/phonics/letter_j') }}';
            });

            // Optional: Sound button functionality
            const soundButtons = document.querySelectorAll('[id="soundButton"]');
            soundButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const letter = this.getAttribute('data-letter');
                    const letterSound = new Audio('{{ asset('sounds/letters/') }}' + letter +
                        '.mp3');
                    letterSound.currentTime = 0;
                    letterSound.play().catch(err => console.log('Audio play failed:', err));
                });
            });
        });
    </script>
@endpush
