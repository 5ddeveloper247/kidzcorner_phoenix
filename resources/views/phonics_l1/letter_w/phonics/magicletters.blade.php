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
    <h2 class="top-title stroke">Magic Letters</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio/magicletters.mp3') }}">
        <div class="flex">
            <img src="{{ asset('assets/images/phonicsl1/global/click4.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tip: <a class="c-btn info-btn1">Click here</a> to find out about the alphabetic principle.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col mt-[-2vw] gap-y-[2vw]">
        <h1 class="panel-title stroke">Letter-sound Relationships</h1>
        <div class="flex items-end">
            <ul class="list-disc text-start panel-ul space-y-[1.5vw]">
                <li>To be able to read, children need to have the ability to hear sounds within a spoken word, and to
                    understand that the sounds correspond to letters.</li>
                <li>Knowledge of the alphabetic principle, that there are predictable relationships between written letters
                    and spoken sounds, contributes to the ability to read words in isolation as well as in connected text.
                </li>
                <li>There are different opinions about whether knowing the names of letters is absolutely necessary. It is
                    preferable to teach the names of letters, although children can begin to learn to read without knowing
                    all the names of the letters.</li>
            </ul>

            <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="w-[10vw]" />
        </div>
        <div class="down-btn-container">
            <button class="doneButton hidden">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel">
        <div class="flex h-[28vw] relative">
            <a class="info-btn2 inline-flex w-auto large-title stroke h-fit p-0 m-0">w</a>

            <img src="{{ asset('assets/images/phonicsl1/global/click.png') }}"
                class="w-[27vw] h-fit absolute top-[-17%] right-[-23%]" />
        </div>
        <p class="p-note">Tip: Click on the letter to listen to its name and sound.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel flex justify-center items-center info-panel-2">
        <h1 class="large-title stroke">w</h1>
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-w/w1.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- ==== 2 --}}
    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">w</h1>
                <h1 class="text-white text-[4vw]">wall</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_w/wall.png') }}" class="w-[25vw]" />

        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-w/w2.m4a') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    {{-- === 3 --}}
    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">w</h1>
                <h1 class="text-white text-[4vw]">worm</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_w/worm.png') }}" class="w-[25vw]" />

        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-w/w3.m4a') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">w</h1>
                <h1 class="text-white text-[4vw]">water</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_w/water.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-w/w4.m4a') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">w</h1>
                <h1 class="text-white text-[4vw]">well</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_w/well.png') }}" class="w-[25vw]" />

        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-w/w5.m4a') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>




    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <img src="{{ asset('assets/images/phonicsl1/global/click5.png') }}" class="w-[15vw] ml-[7vw]" />
                <img src="{{ asset('assets/images/phonicsl1/global/teacher.png') }}" class="h-[20vw]" />
            </div>

            <div class="bg-no-repeat bg-center bg-contain h-[30vw] w-[28vw] mt-[-7vw]
            flex justify-center items-end"
                style="background-image: url('{{ asset('assets/images/phonicsl1/global/board.png') }}')">

                <div class="grid grid-cols-2 gap-[1.5vw] place-items-center mb-[3vw]">
                    {{-- this is false --}}
                    <a class="w-[8.5vw] hover:brightness-110 " id="true">
                        <img src="{{ asset('assets/images/phonicsl1/global/alphabets/w.png') }}" />
                    </a>

                    {{-- falsde --}}
                    <a class="w-[8.5vw] hover:brightness-110 " id="false">
                        <img src="{{ asset('assets/images/phonicsl1/global/alphabets/u.png') }}" />
                    </a>

                    {{-- true --}}
                    <div class="col-span-2 flex justify-center " id="false">
                        <a class="w-[8.5vw] hover:brightness-110">
                            <img src="{{ asset('assets/images/phonicsl1/global/alphabets/v.png') }}" />
                        </a>
                    </div>

                </div>
            </div>

        </div>
        <p class="p-note">Tip: Click on the sound icon to listen to the letter sound. Then ask <br>
            children to select the correct letter that makes the sound.</p>
        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-w/w1.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Try Again --}}
    <div id="tryAgain"
        class="fixed inset-0 z-[1000] hidden  items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
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
            const returnURL = "{{ url('/phonics_l1/letter_w') }}?view=phonics";
            const doneURL = "{{ url('/phonics_l1/letter_w') }}?view=phonics";

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

                // Check if the slide itself has data-slide-audio attribute
                let audioSrc = slide.getAttribute('data-slide-audio');

                // If not, look for element inside the slide with data-slide-audio attribute
                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                // Play the audio if we found a source
                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
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

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Get audio source from data-slide-audio attribute
                    const audioSrc = btn.getAttribute('data-slide-audio');

                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });
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

            // INITIALIZE - Show first slide and play its audio automatically
            showSlide(currentSlide);
        });


        // PANEL SYSTEM
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const tryAgainPanel = document.getElementById('tryAgain');
            const wellDonePanel = document.getElementById('wellDone');
            const retryBtn = document.getElementById('retry');
            const closeBtn = document.getElementById('close');

            // Get all letter buttons by ID
            const falseLetters = document.querySelectorAll('[id="false"]');
            const trueLetters = document.querySelectorAll('[id="true"]');

            // Create audio elements
            const tryAgainSound = new Audio('{{ asset('assets/audio/phonics_audio/tryagain.mp3') }}');
            const wellDoneSound = new Audio('{{ asset('assets/audio/phonics_audio/welldone.mp3') }}');

            // Function to show panel and play sound automatically
            function showPanelWithSound(panel, audioElement) {
                panel.style.display = 'flex';
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
                tryAgainSound.pause();
                tryAgainSound.currentTime = 0;
            });

            // Handle Close button - redirect to route
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                wellDoneSound.pause();
                wellDoneSound.currentTime = 0;
                window.location.href = '{{ url('/phonics_l1/letter_w') }}?view=phonics';
            });
        });
    </script>
@endpush
