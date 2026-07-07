@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = false;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2.2vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Guess the animal based on a part of its body</li>
            <li>Draw an animal that one has seen before</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <h3 class="ptitle mt-[5vw]">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Drawing Papers</li>
            <li>Colour Pencils</li>
        </ul>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children to look at this part of an animal and guess what animal it is.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c1.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c2.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c3.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c4.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c5.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c6.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c7.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c8.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c9.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c10.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c11.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c12.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c13.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c14.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c15.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c16.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c17.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c18.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c19.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c20.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Ask children to look at this part of an animal and guess what animal it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c21.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Ask children to explain how they derived the answer.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/animals/class3/c22.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>Distribute drawing papers. Ask children to think about the physical
                characteristics of an animal that they have seen before and then draw it.
                Guide the children in drawing the animal by capturing its distinctive
                characteristic. For example, a giraffe has a long neck, a rabbit has long ears
                and an elephant has a long trunk.</li>
            <li>Ask the children to show their drawings to a partner and to identify the animal
                in each other's drawings.</li>
        </ol>
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="25">
                <li>Guide children to complete the corresponding activity in the Thematic
                    Activity Book.</li>
            </ol>
        </div>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: The Mystery Animal</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Display all the drawings. Encourage children to guess the
                    animals that are drawn and appreciate each other's work.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to guess the animal based on a part of its body.</li>
                <li>Able to draw an animal that one has seen before.</li>
            </ul>
        </div>
    </div>


    {{-- =============================================== --}}
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
        document.body.dataset.homeRoute = "{{ url('/micet') }}";

        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/micet/n2/animals/index') }}";
            const doneURL = "{{ url('/micet/n2/animals/index') }}";

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
                window.location.href = '{{ url('/phonics_l1/letter_b') }}?view=phonics';
            });
        });
    </script>
@endpush
