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
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>
        <img src="{{ asset('assets/images/micet/k2/earth/activity/b1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/k2/earth/activity/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>

        <div class="text-start">
            <h3 class="ptitle">Tuning-in</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>
                    To begin the lesson, ask the following questions to arouse children's curiosity and interest.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>How many planets are there in the solar system?</li>
                        <li>Which other planet is able to support life other than Earth?</li>
                        <li>Are there more land masses or bodies of water on Earth?</li>
                    </ol>
                </li>

                <li>
                    Elicit answers from children; continue with the following questions to focus children's attention on the
                    key points of the courseware.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>What are the characteristics of: mountains, rivers, lakes and seas?</li>
                        <li>Which is the highest mountain on Earth? Where is it located?</li>
                        <li>How many continents and seas are there on Earth? Which continent does
                            China belong to?</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 1: Story - A visit from an alien</h3>

            <div class="flex gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k2/earth/activity/c2.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="list-disc text-white text-[1.25vw] w-[27vw]">
                        <li> To develop an interest in nature.</li>
                        <li>To gain basic knowledge of Earth.</li>
                        <li>To learn new vocabulary and sentence structures.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>

        <div class="text-start">
            <h3 class="ptitle">Story</h3>

            <p class="panel-ul">One day, while Bobo and Jojo were playing hide-and-seek, they
                met an alien, Ally. They took him on a hot air balloon ride to visit different
                places on Earth. First, they saw a mountain. The mountain told Ally that trees
                and animals lived on it. There were also many treasures in it. The mountain
                showed them the treasures. Next, they came to a river and saw many fish
                and prawns. The river brought them to see the lake. There were lotus flowers,
                fish and pearls. The lake took them to the sea. It was very huge! They found
                out that rivers would flow into the sea eventually. Finally, they wore diving
                suits and toured the underwater world. They saw colourful tropical fish and
                corals of different shapes.</p>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>

        <div class="flex gap-[3vw]">
            <div>
                <h3 class="ptitle">Activity 2: Space Travellers</h3>
                <img src="{{ asset('assets/images/micet/k2/earth/activity/c3.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc text-white text-[1.25vw] w-[27vw]">
                    <li>To gain basic knowledge of astronomy.</li>
                    <li>To familiarise with the directional keys on the keyboard.</li>
                    <li>To develop hand-eye coordination and reaction skills.</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="text-white text-[1.25vw] w-[27vw]">
                    <li>Use the directional keys on the keyboard to control the spaceship to get to the planets in the
                        solar system.</li>
                    <li>First choose a level of the activity: Level one: Children travel to planets that are nearer to
                        the Earth. Level two: Children travel to planets that are further away from the Earth.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>

        <div class="flex gap-[3vw]">
            <div>
                <h3 class="ptitle">Activity 3: Animal Sculptures</h3>
                <img src="{{ asset('assets/images/micet/k2/earth/activity/c4.png') }}" class="w-[25vw]" />
            </div>
            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc text-white text-[1.25vw] w-[27vw]">
                    <li>To enhance concepts of shapes, patterns and colours through designing animal sculptures.</li>
                    <li>To develop an interest in modeling art.</li>
                    <li>To enhance imagination and creativity skills.</li>
                </ul>
                <h3 class="ptitle">Process</h3>
                <ul class="list-decimal text-white text-[1.25vw] w-[27vw]">
                    <li>Children choose one animal sculpture.</li>
                    <li>Choose the animal's head, body, ears, limbs, tail and colour from the left and assemble them on
                        the canvas.</li>
                    <li>Upon completion, print out the designed animal sculpture.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>

        <div class="flex gap-[3vw]">
            <div>
                <h3 class="ptitle">Activity 4: Returning to Nature</h3>
                <img src="{{ asset('assets/images/micet/k2/earth/activity/c5.png') }}" class="w-[25vw]" />
            </div>
            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc text-white text-[1.25vw] w-[27vw]">
                    <li>To identify the different treasures on Earth.</li>
                    <li>To develop awareness of protecting the environment.</li>
                </ul>
                <h3 class="ptitle">Process</h3>
                <ul class="list-decimal text-white text-[1.25vw] w-[27vw]">
                    <li>Help Ally place the animals and plants on the train at the appropriate places.</li>
                    <li>Group one - select four items that belong to the lake (fish, duck, river crab and lotus flower).
                    </li>
                    <li>Group two - select four items that belong to the sea (sea gull, starfish, crab and coconut
                        tree).</li>
                    <li>Group three - select four items that belong to the forest (snake, bear, woodpecker and
                        mushroom).</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Computer Activities: Our Beautiful Earth</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>At the end of the computer lesson, touch on the questions asked at the beginning of the lesson.</li>
                <li>Have the children draw a picture of "Our beautiful Earth".</li>
                <li>Introduce astronomy and general knowledge on nature to the children.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to complete the various activities in the courseware.</li>
                <li>Able to explain that there are mountains, rivers, lakes and seas on Earth.</li>
                <li>Able to name some treasures in mountains, rivers, lakes and seas.</li>
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
            const returnURL = "{{ url('/micet/k2/earth/index') }}";
            const doneURL = "{{ url('/micet/k2/earth/index') }}";

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
