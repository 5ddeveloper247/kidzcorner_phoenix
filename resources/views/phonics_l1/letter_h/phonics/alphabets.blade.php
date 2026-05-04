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

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .large-title {
            color: #F7B94A;
            font-size: 20vw !important;
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
    <h2 class="top-title stroke">Alphabets House</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel">
        <div class="flex relative w-fit h-fit" data-slide-audio="{{ asset('assets/audio/phonics_audio/alphahouse.m4a') }}">
            <h1 class="text-[#f7b94a] text-[6vw] bottom-[15%] left-[24%] stroke leading-none absolute hover:text-[#757571]">
                h</h1>
            <img src="{{ asset('assets/images/phonicsl1/letter_a/alpha-house.png') }}" class="w-[47vw]" />
        </div>
        <p class="p-note">Tips: Click on the letter to listen to words beginning with the letter sound. <br>
            <a class="c-btn info-btn1">Click here</a> to find out why it is important to practise reading words in isolation.
        </p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col mt-[-2vw] gap-y-[2vw]">
        <h1 class="panel-title stroke">Reading Words In Isolation</h1>
        <div class="flex items-center">
            <ul class="list-disc text-start panel-ul space-y-[1.5vw]">
                <li>It is important for children to look at a moderate amount of word
                    practice in isolation, enough to get them recognize words
                    automatically and not drive them to boredom</li>
                <li>Three to six words are provided as examples of each letter-sound
                    relationship in this section for children to examine the patterns in
                    those words.</li>
            </ul>

           <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="w-[13vw]" />
        </div>
        <div class="down-btn-container">
            <button class="doneButton hidden">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel">
        <div>
            <img src="{{ asset('assets/images/phonicsl1/letter_h/hay.png') }}" class="w-[25vw]" />
            <h1 class="text-white text-[5vw]"><span class="text-[#f7b94a]">h</span>ay</h1>
        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="hay">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel">
        <div>
            <img src="{{ asset('assets/images/phonicsl1/letter_h/horse.png') }}" class="w-[20vw]" />
            <h1 class="text-white text-[5vw]"><span class="text-[#f7b94a]">h</span>orse</h1>
        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="horse">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel">
        <div>
            <img src="{{ asset('assets/images/phonicsl1/letter_h/honey.png') }}" class="h-[25vw]" />
            <h1 class="text-white text-[5vw]"><span class="text-[#f7b94a]">h</span>oney</h1>
        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="honey">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel">
        <div>
            <img src="{{ asset('assets/images/phonicsl1/letter_h/happy.png') }}" class="w-[20VW]" />
            <h1 class="text-white text-[5vw]"> <span class="text-[#f7b94a]">h</span>appy</h1>
        </div>
        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="happy">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>




    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <div class="relative ml-[10vw]">
                    <img src="{{ asset('assets/images/phonicsl1/global/blank.png') }}" class="w-[15vw]" />
                    <h2 class="text-[1.5vw] !text-[#B76E33] absolute top-[2.5vw] right-[3vw]">Which picture <br>
                        matches the <br>
                        word?</h2>
                </div>
                <img src="{{ asset('assets/images/phonicsl1/global/teacher.png') }}" class="h-[20vw]" />
            </div>

            <div class="bg-no-repeat bg-center bg-contain h-[30vw] w-[28vw] mt-[-7vw]
            flex justify-center items-end"
                style="background-image: url('{{ asset('assets/images/phonicsl1/global/board.png') }}')">
                <h2 class="text-white text-[2vw] absolute top-[15%]">horse</h2>
                <div class="grid grid-cols-2 gap-x-[4vw] gap-y-[1.5vw] place-items-center mb-[3vw]">
                    {{-- this is false --}}
                    <div class="flex items-start">
                        <a class="hover:brightness-110" id="flase">
                            <img src="{{ asset('assets/images/phonicsl1/letter_c/cat.png') }}" class="w-[6.5vw]" />
                        </a>
                        {{-- sound Button --}}
                        <button class="w-[3vw]" id="soundButton" data-letter="cat">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>

                    {{-- false --}}
                    <div class="flex items-start">

                        <a class="w-[6vw] hover:brightness-110 " id="true">
                            <img src="{{ asset('assets/images/phonicsl1/letter_h/horse.png') }}" />
                        </a>
                        {{-- sound Button --}}
                        <button class="w-[3vw]" id="soundButton" data-letter="horse">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>

                    {{-- true --}}
                    <div class="col-span-2 flex justify-center ">
                        <div class="flex items-start gap-x-[1vw]">
                            <a class=" hover:brightness-110" id="false">
                                <img src="{{ asset('assets/images/phonicsl1/letter_b/bee.png') }}" class="w-[5vw]" />
                            </a>
                            {{-- sound Button --}}
                            <button class="w-[3vw]" id="soundButton" data-letter="goat">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <p class="p-note">Tip: Click on the sound icon to listen to the letter sound. Then ask <br>
            children to select the correct letter that makes the sound.</p>
    </div>


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
    <div id="wellDone"
        class="fixed inset-0 z-[1000] hidden  items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
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
    {{-- <div class="down-btn-container">
        <button class="doneButton hidden">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div> --}}
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
            const returnURL = "{{ url('/phonics_l1/letter_h') }}?view=phonics-slide";
            const doneURL = "{{ url('/phonics_l1/letter_h') }}?view=phonics";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // Audio management
            let currentAudio = null;

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

            // AUDIO FUNCTIONS

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                // Stop any currently playing audio
                stopCurrentAudio();

                // Get the slide element
                const slide = slides[slideIndex];

                // Look for element with data-slide-audio attribute
                const audioElement = slide.querySelector('[data-slide-audio]');

                if (audioElement) {
                    const audioSrc = audioElement.getAttribute('data-slide-audio');
                    if (audioSrc) {
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                }
            }

            // TEXT-TO-SPEECH FUNCTION
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
                // Stop audio from previous slide
                stopCurrentAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Play audio for current slide (if it has one)
                playSlideAudio(slideIndex);

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
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
                    stopCurrentAudio();
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
                stopCurrentAudio();

                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

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

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    const letter = btn.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // INITIALIZE - Show first slide and play its audio
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
                window.location.href = '{{ url('/phonics_l1/letter_h') }}?view=phonics';
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
