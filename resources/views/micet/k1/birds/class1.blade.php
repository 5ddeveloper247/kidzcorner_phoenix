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

        title {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .ptitle {
            color: #f7b94a;
            font-size: 1.7vw;
        }

        .p-title {
            color: #ffffff;
            font-size: 1.25vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left !important;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: Daisy Duckling’s Learning Adventure</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Learn the names, characteristics and habits of some birds</li>
            <li>Understand that different birds have different capabilities</li>
            <li>Discover one's own capability</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Daisy Duckling’s Learning Adventure</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Daisy Duckling’s Learning Adventure</h1>

        <div>
            <h3 class="title">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell the story using suggested questions and activities to reinforce the
                    teaching points of the story.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Daisy Duckling’s Learning Adventure</h1>

        <h3 class="p-title">Theme: The Word Of Birds</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Daisy Duckling has grown up. She wants to learn some useful skills. She meets <br>
            Rosie Rabbit. She wants to learn how to hop from Rosie. Rosie tells her since she <br>
            has feathers and wings, she should learn skills from her own kind, the birds.</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c2.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What animal groups do rabbits and ducks belong to?<br>
                <span class="text-[#f7b94a]">Guide the children to differentiate the animals that lay eggs and <br>
                    those that give birth to their young alive.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Daisy Duckling goes to the forest and sees butterflies flying from flower to <br>
            flower, gathering nectar. She decides to learn to fly from the butterflies. <br>
            However, the butterflies say that although they have wings, they are not birds.</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c3.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                What animal group do butterflies belong to? What are the differences <br>
                between butterflies and birds?<br>
                <span class="text-[#f7b94a]">Guide the children to understand the differences between insects <br>
                    and birds.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Just then, Percy Peacock comes by. He spreads out his feathers and dances. <br>
            Wow! It is beautiful! Daisy Duckling wants to learn how to dance from Percy but <br>
            Percy says Daisy does not have big feathers on her tail to dance.</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c4.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Have you seen a peacock spread its tail? When does a peacock <br>
                spread its tail?<br>
                <span class="text-[#f7b94a]">Guide the children to understand why peacocks spread their tails.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Daisy Duckling comes to a tree and sees Willie Woodpecker checking if the <br>
            tree is ill. It hopes to learn medical skills from Willie. However, Daisy does not <br>
            have a pointed hard beak to peck trees and catch worms.</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c5.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                What does a woodpecker's beak look like? What does a duckling's <br>
                beak look like?<br>
                <span class="text-[#f7b94a]">Guide the children to compare the similarities and differences <br>
                    between the two beaks.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Listen! Who are singing by imitating Daisy Duckling? They are the talkative <br>
            parrots. Daisy wants to learn how to talk from the parrots, but she does not <br>
            have a nimble tongue like the parrots. Thus, she cannot talk.</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c6.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Can you imitate the way in which a parrot mimics human speech?<br>
                <span class="text-[#f7b94a]">Encourage the children to imitate voices of different characters in the story
                    <br>
                    to further develop their language expression skills.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Oliver Ostrich is coming from afar. He is running very fast. Since Daisy Duckling <br>
            cannot fly, so she wants to learn how to run from Oliver. However, Daisy does <br>
            not have long legs like Oliver, so she cannot run as fast.</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c7.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Do you know why ostriches cannot fly?<br>
                <span class="text-[#f7b94a]">Encourage the children to infer and express their views confidently.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">The sky is getting dark and it is time to go home. Although Daisy Duckling did <br>
            not leam any skills, she now understands that every animal has its own unique <br>
            ability. She decides to tell her mother and wants to leamn new skills from her.</h3>
        <img src="{{ asset('assets/images/micet/k1/birds/class1/c8.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What skills can Daisy Duckling leam from her mother?<br>
                <span class="text-[#f7b94a]">Guide the children to name some characteristics of ducks.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>



    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Daisy Duckling’s Learning Adventure</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children state the capabilities of birds they know.</li>
                <li>Have the children state their own capabilities.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to state the names, characteristics and habits of the different animals in the story.</li>
                <li>Able to state one's own capability( at least one).</li>
            </ul>
        </div>
    </div>





    {{-- ================================ --}}
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
