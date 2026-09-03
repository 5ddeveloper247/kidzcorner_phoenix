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
            font-size: 1.3vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
    </div>
        <img src="{{ asset('assets/images/micet/k2/animals/activity/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Tuning-in</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>
                    To begin the lesson, ask the following questions to arouse the children's
                    curiosity and interest.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>What are wild animals?</li>
                        <li>Where can wild animals be found?</li>
                        <li>Which wild animal do you like?</li>
                    </ol>
                </li>

                <li>
                    Elicit answers from the children and then continue with the following questions
                    to focus their attention on the key points of the courseware.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>What places did Bobo go to? What wild animals did he see?</li>
                        <li>What kinds of wild animals are there in a tropical rainforest?</li>
                        <li>What kinds of special animals can be found in Australia?</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 1: Story - Where The Wild Animals Are</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/activity/c2.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="list-disc panel-ul w-[25vw]">
                        <li>To recognise various wild animals</li>
                        <li>To understand the characteristics, habitats and natural habitats of the wild animals</li>
                        <li>To learn basic terms related to wild animals</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>

        <div class="text-start">
            <h3 class="ptitle">Story</h3>

            <p class="panel-ul">
                Bobo loves wild animals. He wished he could visit places where the wild animals live. Suddenly, his room
                turned into the African grasslands. He saw a lioness chasing after giraffes, zebras and gnus. He also saw a
                hunter hunting for rhinoceros horns. Bobo came to a waterhole and saw his favourite animals, the elephants.
                He started playing with them. Next, Bobo arrived in the North Pole and saw polar bears and seals. In the
                Amazon rainforest, Bobo saw tree frogs, snakes, monkeys, crocodiles and lizards. Finally, Bobo arrived in
                Australia. He saw koalas eating leaves from a eucalyptus tree. Just then, a kangaroo ran towards Bobo and it
                allowed Bobo into its pouch. The kangaroo brought Bobo home.
            </p>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 2: Let’s match</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/activity/c3.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To learn some terms related to wild animals</li>
                        <li>To develop matching skills</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>Children match the words on the bottom
                            of the screen with the corresponding
                            animals.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 3: Let’s Count!</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/activity/c4.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To develop observation skills</li>
                        <li>To enhance comparison skills</li>
                        <li>To carry out simple counting and subtraction</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>The children observe and count the
                            number of wild animals on screen or
                            calculate the differences between them.
                            The children place the correct number in
                            the blank spaces using the mouse.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 4: Fill in the Blank</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/activity/c5.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To learn some terms related to wild animals</li>
                        <li>To enhance logical-thinking skills</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>The children fill in the blanks with the
                            correct words using the mouse by
                            identifying the pictures on the screen and
                            listening to some sounds. The computer will
                            read the complete sentences if the answers
                            are correct.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Computer Activities: Where The Wild Animals Are</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>At the end of the lesson, review some questions asked at the beginning of the lesson.</li>
                <li>Children to identify the differences between the animals in a zoo and those in the wild.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to recognise various wild animals.</li>
                <li>Able to understand the habits and habitats of wild animals.</li>
                <li>Able to complete the various activities in the courseware.</li>
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
            const returnURL = "{{ url('/micet/k2/animals/index') }}";
            const doneURL = "{{ url('/micet/k2/animals/index') }}";

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
