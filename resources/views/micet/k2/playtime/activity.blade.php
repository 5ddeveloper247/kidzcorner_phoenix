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

        .panel-ul2 {
            color: white;
            font-size: 1.15vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>
        <img src="{{ asset('assets/images/micet/n1/mybody/c10.1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/k1/playtime/activity/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>

        <div class="text-start">
            <h3 class="ptitle">Tuning-in</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>
                    Prior to the lesson, ask the children the following questions to stimulate their
                    interest.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>Do we have playtime in school?</li>
                        <li>What recreational facilities do we have in our school?</li>
                        <li>How should we take care of the recreational facilities in school?</li>
                    </ol>
                </li>

                <li>
                    After eliciting some response, ask the following questions and guide the
                    children to find the answers in the courseware.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>What kind of recreational facility is Little Elephant?</li>
                        <li>Why does Little Elephant leave home? Why does he come back?</li>
                        <li>What would you do to prevent Little Elephant from leaving home again?</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 1: Story - Dumbo is Missing</h3>

            <div class="flex  gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k1/playtime/activity/c2.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="list-disc panel-ul w-[25vw]">
                        <li> To enjoy the story telling session</li>
                        <li>To understand the main recreational
                            facilities available in school</li>
                        <li>To learn to take care of the
                            recreational facilities in school</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>

        <div class="text-start">
            <h3 class="ptitle">Story</h3>

            <p class="panel-ul">The Little Elephant slide is the children's favourite toy in school. However, the
                children do not take good care of it. Soon, Little Elephant becomes very
                dirty and its body is covered with scratches. Feeling neglected, Little
                Elephant decides to leave home. Little Elephant meets Jojo and her friends
                in a park. They help Little Elephant change its clothes. After a while, Little
                Elephant starts to miss home. It decides to go home. The children are very
                happy to see Little Elephant again. Teacher cow says that everyone must
                cherish Little Elephant so that it will not leave home again.</p>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>


        <div class="flex gap-[2vw]">
            <div>
                <h3 class="ptitle">Activity 2: Making Music</h3>
                <img src="{{ asset('assets/images/micet/k1/playtime/activity/c3.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="panel-ul w-[30vw]">
                    <li>To develop interest in music</li>
                    <li>To understand that different water
                        capacities create different sounds</li>
                    <li>To be aware of the change in colours
                        from mixing different colours</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul2 w-[30vw]">
                    <li>Level 1: Pour different amounts of coloured water
                        into 4 bottles according to instructions. There
                        are 3 water levels and 3 colours to select. Arrange
                        the bottles on the shelf according to the water
                        level in ascending order. Use the mouse cursor to
                        click on the bottles to make music.</li>
                    <li>Level 2: The same as above but with more
                        bottles and colours.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>

        <div class="text-start">
            <h3 class="ptitle">Activity 3: Let’s Play</h3>

            <div class="flex justify-center items-center gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k1/playtime/activity/c4.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="list-disc panel-ul w-[25vw]">
                        <li>To understand different kinds of games</li>
                        <li>To guess the type of activity based on
                            the movement given</li>
                    </ul>
                    <h3 class="ptitle">Process</h3>
                    <ul class="panel-ul w-[25vw]">
                        <li>Choose an animal on screen and watch its
                            movements.</li>
                        <li>Guess what game this animal is playing.
                            Click on the corresponding game in the
                            bubble above.</li>
                        <li>Continue the activity to find the
                            games that the animals play.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>

        <div class="flex gap-[2vw]">
            <div>
                <h3 class="ptitle">Activity 4: Handkerchief</h3>
                <img src="{{ asset('assets/images/micet/k1/playtime/activity/c5.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>To understand the basic method of
                        playing the "Handkerchief game"</li>
                    <li>To appreciate music</li>
                    <li>To find the corresponding animals
                        according to prompts</li>
                </ul>
                <h3 class="ptitle">Process</h3>
                <ul class="panel-ul w-[27vw]">
                    <li>Level 1: First, listen to the animals sing
                        "Handkerchief song. Then guess where
                        the handkerchief is according to the
                        prompt given about the animal's
                        appearance.</li>
                    <li>Level 2: Find the animals according to the
                        prompts given about their clothes.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Computer Activities: Playtime</h1>

        <div class="text-start flex flex-col justify-between h-full space-y-[1vw]">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>At the end of the lesson, touch on the questions asked at the
                    beginning of the lesson.</li>
                <li>The children are to explain how they should take good care
                    of the different recreational facilities in school.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Children are able to complete the various activities in the courseware.</li>
                <li>Children are aware of the different recreational facilities, e.g.
                    slide, seesaw, swing.</li>
                <li>Children are able to explain ways of taking care of the recreational facilities.</li>
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
            const returnURL = "{{ url('/micet/k1/playtime/index') }}";
            const doneURL = "{{ url('/micet/k1/playtime/index') }}";

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
