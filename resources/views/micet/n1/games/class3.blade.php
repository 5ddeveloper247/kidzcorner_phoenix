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
            font-size: 2.3vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul ">
            <li>Learn how to play the "Scissors, Paper, Stone" game</li>
            <li>Learn to follow the rules of the game</li>
            <li>Develop fine motor skills</li>
            <li>Enjoy playing with friends</li>
        </ul>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Lesson Development</h3>

            <ul class="list-decimal panel-ul w-[50vw]">
                <li>Ask children: "What is this?" "What is its use?" Guide children in understanding
                    that we use a pair of scissors for cutting.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask children: "What is this?" "What is its use?" Guide children in understanding
                that paper is thin and flat.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What is this?" "What is its use?" Guide children in understanding
                that a stone or rock is hard.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Demonstrate some hand signs, tell children that we are going to learn these
                hand signs, followed by a game called "Scissors, Paper, Stone".</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Make a hand sign, ask children: "Look, what does this hand sign mean?
                Scissors, paper or stone?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>"Yes, it represents a pair of scissors. Does it look like a scissors?"</li>
            <li>Give children time to practise making this hand sign.</li>
        </ol>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/micet/n1/games/class3/c4.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/games/class3/c1.png') }}" class="w-[20vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask children: "If this hand sign represents a pair of scissors, what do you
                think the hand sign would be for paper?" Encourage children to use their
                imagination to make possible hand signs.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>"Look, this is the hand sign that represents paper. Does it look like a piece
                of paper?"</li>
            <li>Give children time to practise making this hand sign.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class3/c5.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/games/class3/c2.png') }}" class="w-[20vw]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children: "If this hand sign represents paper, what do you think the
                hand sign would be for a stone?" Encourage children to use their
                imagination to make possible hand signs.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>"Look, this is the hand sign that represents a stone. Does it look like a
                stone?"</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class3/c6.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/games/class3/c3.png') }}" class="w-[20vw]" />
        </div>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Give children time to practise making this hand sign.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>After children know how to make the hand signs [Note: no need to make
                perfect hand signs], teacher randomly names a hand sign: scissors, paper
                or stone. Have children make the corresponding hand signs and practise
                changing them from one to another.</li>
        </ol>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Have a child assist in demonstrating how to play the game:
                Two players play against each other. Have them place one hand behind their
                back. After saying "Scissors, paper, stone", have them show a hand sign of
                one of the items called out.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c7.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>
        <div class="text-start">
            <h5 class="text-white text-[1.5vw]">Rules of games:</h5>
            <ol class="list-decimal panel-ul">
                <li>Scissors versus stone - Stone wins because stone "hits" scissors and "spoils" it.</li>
                <li>Scissors versus paper - Scissors wins because scissors "cut" paper.</li>
                <li>Stone versus paper - Paper wins because paper "wraps" stone.</li>
                <li>If the hand signs are the same - No one wins.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c7.png') }}" class="w-[16vw]" />
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Invite children to form groups of two to start the game, teacher assists if
                needed:
                <ul class="list-disc">
                    <li>The player that wins three times, is the winner of a group.</li>
                    <li>The winner of a group will take turns to play against the winners of the
                        other groups.</li>
                    <li>The game continues until the last round, where only two players are</li>
                    <li>left, whoever wins, is the winner of the class.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Scissors, Paper, Stone</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children answer the following questions: Do you like this game?
                    What is the name of this game? How many people does it take to
                    play this game?</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to play the game.</li>
                <li>Able to follow rules of the game.</li>
                <li>Able to enjoy playing with friends.</li>
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
            const returnURL = "{{ url('/micet/n1/games/index') }}";
            const doneURL = "{{ url('/micet/n1/games/index') }}";

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

    </script>
@endpush
