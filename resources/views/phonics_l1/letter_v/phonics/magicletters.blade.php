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
            <a class="info-btn2 inline-flex w-auto large-title stroke h-fit p-0 m-0">v</a>

            <img src="{{ asset('assets/images/phonicsl1/global/click.png') }}"
                class="w-[27vw] h-fit absolute top-[-17%] right-[-23%]" />
        </div>
        <p class="p-note">Tip: Click on the letter to listen to its name and sound.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel flex justify-center items-center info-panel-2">
        <h1 class="large-title stroke">v</h1>
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="v">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    {{-- ==== 2 --}}
    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">v</h1>
                <h1 class="text-white text-[4vw]">van</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_v/van.png') }}" class="w-[20vw]" />

        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="van">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    {{-- === 3 --}}
    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">v</h1>
                <h1 class="text-white text-[4vw]">vet</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_v/vet.png') }}" class="h-[20vw]" />

        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="vet">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">v</h1>
                <h1 class="text-white text-[4vw]">village</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_v/village.png') }}" class="w-[20vw] rounded-[1vw]" />
        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="village">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    <div class="phonics-panel info-panel-2">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <div>
                <h1 class="large-title stroke h-fit" style="line-height:100%;">v</h1>
                <h1 class="text-white text-[4vw]">visit</h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/letter_v/visit.png') }}" class="w-[20vw] rounded-[1vw]" />

        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="visit">
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
                    <a class="w-[8.5vw] hover:brightness-110 " id="false">
                        <img src="{{ asset('assets/images/phonicsl1/global/alphabets/t.png') }}" />
                    </a>

                    {{-- falsde --}}
                    <a class="w-[8.5vw] hover:brightness-110 " id="false">
                        <img src="{{ asset('assets/images/phonicsl1/global/alphabets/u.png') }}" />
                    </a>

                    {{-- true --}}
                    <div class="col-span-2 flex justify-center " id="true">
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
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton" data-letter="u">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
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
            const returnURL = "{{ url('/phonics/letter_v') }}";
            const doneURL = "{{ url('/phonics/letter_v') }}";

            // Track current position
            let currentSlide = 0; // Which slide we're on now
            let isInSpecialMode = false; // Are we viewing info slides?
            let returnToSlide = null; // Which slide to return to
            let specialSlideClass = null; // Which type of special slide (info-panel-1, info-panel-2, etc.)

            // HELPER FUNCTIONS

            // Check if a slide is special (info panel)
            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                // Check for info-panel-1, info-panel-2, etc.
                return classList.some(cls => /^info-panel-\d+$/.test(cls));
            }

            // Get special slide type from button class
            // Example: "info-btn1" → "info-panel-1", "info-btn2" → "info-panel-2"
            function getSlideTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    // Handle info-btn1 → info-panel-1
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-panel-' + number;
                    }
                }
                return null;
            }

            // Check if there are more special slides after current one
            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Check if we're on the last slide
            function isLastSlide(slideIndex) {
                // Last special slide in special mode
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

                // In normal mode, check if this is the last non-special slide
                if (!isInSpecialMode) {
                    // Check if there are any more non-special slides after this one
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) {
                            return false; // Found another normal slide
                        }
                    }
                    return true; // No more normal slides found
                }

                return false;
            }

            // TEXT-TO-SPEECH FUNCTION
            function speakLetter(letter) {
                // Cancel any ongoing speech
                window.speechSynthesis.cancel();

                // Create speech utterance
                const utterance = new SpeechSynthesisUtterance(letter);

                // Configure voice settings for girl/female voice
                utterance.rate = 0.8; // Slightly slower speed
                utterance.pitch = 1.2; // Higher pitch for female voice
                utterance.volume = 1;

                // Try to get a female voice
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

                // Speak the letter
                window.speechSynthesis.speak(utterance);
            }

            // DISPLAY FUNCTIONS

            function showSlide(slideIndex) {
                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

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
                // Can't go beyond last slide
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                // Skip slides that don't match current mode
                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];

                    if (isInSpecialMode) {
                        // In special mode: only show slides with matching class
                        if (slide.classList.contains(specialSlideClass)) break;
                    } else {
                        // In normal mode: skip all special slides
                        if (!isSpecialSlide(slide)) break;
                    }

                    currentSlide++;
                }

                // Show the slide if we found one
                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                // If at first slide in normal mode, exit to selection page
                if (currentSlide === 0 && !isInSpecialMode) {
                    window.location.href = returnURL;
                    return;
                }

                if (isInSpecialMode) {
                    // Find previous special slide
                    let previousIndex = currentSlide - 1;

                    while (previousIndex >= 0) {
                        if (slides[previousIndex].classList.contains(specialSlideClass)) {
                            break;
                        }
                        previousIndex--;
                    }

                    if (previousIndex >= 0) {
                        // Found previous special slide
                        currentSlide = previousIndex;
                        showSlide(currentSlide);
                    } else {
                        // No more special slides, return to normal mode
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    // Normal mode: go to previous normal slide
                    if (currentSlide > 0) {
                        currentSlide--;

                        // Skip any special slides
                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }

                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                if (isInSpecialMode && returnToSlide !== null) {
                    // Return to the slide we came from
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    // Exit to selection page
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

            // Info buttons - Enter special mode
            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

                    // Remember where we came from
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);

                    // Find and show first special slide
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // Next buttons
            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            // Return button
            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            // Done button
            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            // SOUND buttons - speak the letter
            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    const letter = btn.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            // Click on letter link to play sound (exclude info buttons)
            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            // Load voices (some browsers need this)
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
                window.location.href = '{{ url('/phonics/letter_v') }}?view=phonics';
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
