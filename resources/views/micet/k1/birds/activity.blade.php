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
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
    </div>
        <img src="{{ asset('assets/images/micet/k1/birds/activity/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>

        <div class="text-start">
            <h3 class="ptitle">Tuning-in</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>
                    To begin the lesson, ask the following questions to arouse children's curiosity
                    and interest?
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>Name the birds you know.</li>
                        <li>What are their capabilities?</li>
                        <li>Which is your favourite bird?</li>
                    </ol>
                </li>

                <li>
                    Elicit answers from the children, then continue with the following questions to
                    focus the children's attention on the key points of the courseware.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>What animals did Daisy Duckling meet on the way? What are their capabilities?</li>
                        <li>Can ostriches fly?</li>
                        <li>What are the uses of a peacock's beautiful tail feathers?</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 1: Story - Daisy Duckling's Learning Adventure</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k1/birds/activity/c2.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="list-disc panel-ul w-[25vw]">
                        <li>To gain knowledge on birds</li>
                        <li>To understand that different birds have different capabilities</li>
                        <li>To inculcate the attitude of helping people</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>

        <div class="text-start">
            <h3 class="ptitle">Story</h3>

            <p class="panel-ul">Daisy Duckling had grown up and she wanted to learn some useful skills.First, she met Rosie
                Rabbit. She wanted to hop like Rosie. However, Rosie told Daisy Duckling that she should learn skills from
                her own kind - birds. Hence, Daisy Duckling found Percy Peacock; Willie Woodpecker, a parrot; Oliver
                Ostrich, an owl; etc, hoping to learn skills from them. But she did not have beautiful feathers like the
                peacock; or a hard beak like the woodpecker; or a nimble tongue like the parrot; or long legs like the
                ostrich or good eyesight like the owl. Finally, she understood that different birds have different
                capabilities. Daisy Duckling finally decided to learn some useful skills from her mother.</p>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>

        <div class="flex gap-[2vw]">
            <div>
                <h3 class="ptitle">Activity 2: Story - Choose a tool</h3>
                <img src="{{ asset('assets/images/micet/k1/birds/activity/c3.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="panel-ul w-[30vw]">
                    <li>To understand that water flows and can only be held within a container.</li>
                    <li>To have a basic understanding on the principle of lever</li>
                    <li>To understand the relationship between air and buoyancy</li>
                    <li>To develop creativity and logical thinking skills</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[27vw]">
                    <li>Based on their experiences, the children will
                        select the appropriate tools (a basket, a pail
                        or a wooden stick) to solve the two problems
                        - "to contain water" and "to move the rocks".</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>

        <div class="flex gap-[2vw]">

            <div>
                <h3 class="ptitle">Activity 3: Story - Crow drinks water</h3>
                <img src="{{ asset('assets/images/micet/k1/birds/activity/c4.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="text-white text-[1.2vw] w-[30vw]">
                    <li>To understand simple Science theory and stimulate the interest in exploration</li>
                    <li>To enhance creativity and problem- solving skills</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="text-white text-[1.2vw] w-[28vw]">
                    <li>Help Daisy Duckling solve 2 problems so the crow can drink the water.
                        <ul class="list-decimal">
                            <li>Choose the appropriate object to move the bottle without using hand. When the balloon is
                                chosen, Daisy will blow it up. It will expand within the bottle. The bottle can then be
                                lifted without using hands.</li>
                            <li>Choose the appropriate object to make the water level rise in the bottle. When stones
                                are chosen, they will be placed into the bottle to raise the water level. The crow can
                                then drink the water in the bottle.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 4: Story - Jigsaw Puzzle</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k1/birds/activity/c5.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To recognise the body shapes of the peacock, owl and ostrich</li>
                        <li>To develop spatial and hand-eye coordination skills</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>The children will piece together the
                            puzzle according to the outline of each
                            bird.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Computer Activities: Daisy Duckling’s Learning Adventure</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children answer the questions asked at the beginning of the lesson.</li>
                <li>Have the children name some birds that they know.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name some birds, their characteristics and habits.</li>
                <li>Able to complete the various activities in the courseware independently.</li>
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
            const returnURL = "{{ url('/micet/k1/birds/index') }}";
            const doneURL = "{{ url('/micet/k1/birds/index') }}";

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
