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
            font-size: 2.5vw;
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
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>
        <img src="{{ asset('assets/images/micet/n1/mybody/class7/c1.png') }}" class="h-[9vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>To make an anemometer and enhance hands-on skills.</li>
            <li>To learn to measure wind speed and develop an interest in scientific exploration.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>An anemometer made in advance.</li>
                <li>5 small paper cups (per child).</li>
                <li>2 soda straws (hard type) (per child).</li>
                <li>Pins, scissors, hole punchers, staplers.</li>
                <li>Pencils with eraser on one end.</li>
                <li>Electric Fan.</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Display the anemometer and ask the children what will happen to it when the wind blows. Guide the
                    children in explaining that it will rotate. Ask the children what will happen if the wind gets stronger.
                    Conduct the experiment using a fan. Guide the children in concluding: the stronger the wind, the faster
                    the anemometer rotates. Thus, drawing forth the concept of wind speed.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Inform children they are going to make an anemometer to measure wind speed.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display and let the children identify the materials needed for this activity.
                Demonstrate making an anemometer:
                <ul>
                    <li> a. Punch holes on the sides of four cups around 1.2 cm below the rim.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display and let the children identify the materials needed for this activity.
                Demonstrate making an anemometer:
                <ul>
                    <li>b. Punch four equally spaced holes on the sides of the fifth cup around 0.6
                        cm below the rim. Punch a hole at the bottom of the cup.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display and let the children identify the materials needed for this activity.
                Demonstrate making an anemometer:
                <ul>
                    <li>c. Push one straw through the hole of one cup, folding it at the opening of
                        the cup and staple. Repeat likewise with another cup and a straw.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display and let the children identify the materials needed for this activity.
                Demonstrate making an anemometer:
                <ul>
                    <li>d. Push one straw through the two corresponding holes on the 5th cup.
                        Push the other straw through the other two holes.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display and let the children identify the materials needed for this activity.
                Demonstrate making an anemometer:
                <ul>
                    <li>e. Push the remaining two cups through the respective ends of the straw,
                        fold the straws at the opening of the cups and staple (note: the opening
                        of each cup to face the bottom of the cup in front).</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display and let the children identify the materials needed for this activity.
                Demonstrate making an anemometer:
                <ul>
                    <li>f. Fix the two straws with a pin at the intersecting point.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display and let the children identify the materials needed for this activity.
                Demonstrate making an anemometer:
                <ul>
                    <li>g. Pierce the eraser end of the pencil through the hole on the bottom of
                        the 5th cup. Pierce the pin (where the intersecting point of the straw is)
                        through the eraser to complete making the anemometer.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class7/c1.png') }}" class="h-[18vw]" />
    </div>



    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Upon completion, lead children to an open space in the outdoors. Have the children take out their
                anemometers and observe the speed of rotation and encourage them to explain how to determine the speed of
                the wind.</li>
            <li>If there is no wind, conduct the experiment with a fan.</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
        </ol>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: Measure Wind Speed</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children discuss their observations. Guide the children in understanding that although the
                    speed of rotation of their anemometers may be different, the anemometers have something in common, the
                    stronger the wind, the faster the rotation.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to state the use of an anemometer.</li>
                <li>Able to make an anemometer.</li>
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
            const returnURL = "{{ url('/micet/k2/weather/index') }}";
            const doneURL = "{{ url('/micet/k2/weather/index') }}";

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
