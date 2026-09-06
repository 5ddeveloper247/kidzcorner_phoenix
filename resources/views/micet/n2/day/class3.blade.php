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
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        </div>



        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Learn to tell time by the hour from a clock face</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <div>
            <h3 class="ptitle mt-[5vw]">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: At what time do you wake up each morning? At what time do
                    you come to school? How do you tell the time of the day? Guide children to
                    know that we can tell the time by looking at a clock face on a clock, watch, etc.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask children to observe and say what they see on the clock face (numbers,
                long and short hands, etc).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c1.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Guide children to read in sequence, the numbers on the clock face.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c1.png') }}" class="h-[20vw]" />

    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask children: What time is it? (one o'clock) If children answer correctly, ask
                them how they know.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c1.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Guide children to understand that when the long hand points at 12, then the
                number at which the short hand is pointing at will indicate the time by the
                hour. This means that it tells us what time it is now.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c1.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Ask children: What time is it? (three o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c2.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children: What time is it? (six o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c3.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask children: What time is it? (two o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c4.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: What time is it? (ten o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c5.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask children: What time is it? (eight o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c6.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children: What time is it? (four o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c7.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask children: What time is it? (five o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c8.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask children: What time is it? (seven o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c9.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask children: What time is it? (eleven o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c10.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Ask children: What time is it? (nine o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c11.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Ask children: What time is it? (twelve o’clock)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/day/class3/c12.png') }}" class="h-[20vw]" />
    </div>



    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children look at the clock in the classroom and tell
                    the time by the hour.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to tell time by the hour.</li>
            </ul>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: What Time is it?</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-decimal panel-ul w-[45vw]">
                <li>Provide a deck/stack of clock face picture cards that show different times
                    by the hour at the Activity Corner. Encourage children to play a game:
                    "What time is it?".</li>
                <li>How to play: The children take turns to pick a card and tell the time as
                    shown in the card after being asked, "What time is it?". If the answer is
                    correct, he/she gets to keep the card. If the answer is incorrect, hints
                    are to be given such as "It's too late" or "It's too early", etc. If the
                    child is still not able to tell the time, he/she needs to put the card back into
                    the deck. The child with the most number of cards at the end of the game is
                    the winner. Game ends when all cards have been taken or when activity time
                    is up.</li>
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
            const returnURL = "{{ url('/micet/n2/day/index') }}";
            const doneURL = "{{ url('/micet/n2/day/index') }}";

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
