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
            font-size: 2vw;
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
        <h1 class="panel-title stroke">Classroom Activity 1: Patchwork Jacket</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/c1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/c2.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/c3.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Be aware of the different designs on clothes</li>
            <li>Identify clothes for different occasions</li>

        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Patchwork Jacket</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Patchwork Jacket</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell the story using suggested questions and activities to reinforce the
                    teaching points of the story.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Patchwork Jacket</h1>

        <h3 class="p-title">Theme: Beautiful Clothes</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Sue's mummy is hospitalised, and she misses her mummy. She takes out <br>
            the patchwork jacket her mummy had sewn for her. Looking at the <br>
            jacket, she begins to recall many happy moments.</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c2.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                What things do you have that remind you of happy times?<br>
                <span class="text-[#f7b94a]">Help children recoll some of the happy moments they have had.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b2.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[5vw] h-[4.5vw]] " />
            </div>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Look! The piece of white cloth on the patchwork jacket was taken from <br>
            Sue's old dress. She wore that dress on her parents' wedding <br>
            anniversary. Sue looked like a princess in her white dress.</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c3.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-around w-[45vw]">
            <h3 class="p-title text-left">
                Have you wom a gown before?<br>
                <span class="text-[#f7b94a]">Create awareness of the differences in clothes worn by different
                    genders.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Looking at the piece of brown cloth on the patchwork reminds Sue of a <br>
            funny incident. Daddy wore a pair of brown trousers when he was <br>
            playing football. He kicked the ball too hard and tore his pants!</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c4.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                Why was daddy's trousers torn?<br>
                What should you wear when you play football?<br>
                <span class="text-[#f7b94a]">Explain why a sports attire needs to be worn while playing sports.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b2.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Sue remembers the happy time at the beach when she sees the heart- <br>
            shaped prints on the patchwork. It reminds her of the T-shirt, sun hat and <br>
            beach slippers she wore while building sandcastles on the beach.</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c5.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-around w-[45vw]">
            <h3 class="p-title text-left">
                What is the purpose of wearing a sun hat?<br>
                What other types of hats do you know of? <br>
                <span class="text-[#f7b94a]">Help children understand that different hats have different uses.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b4.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b1.png') }}" class="w-[5vw] h-[4.5vw]] " />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Sue and her mummy wore shorts of the same prints to the zoo. They <br>
            looked so gorgeous that even the animals envied their purple-striped <br>
            shorts!</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c6.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                When do you wear shorts?<br>
                <span class="text-[#f7b94a]">Explain that what we wear varies according to the season.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b5.png') }}" class="w-[10vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Sue also remembers the time that Daddy gave her a short skirt with <br>
            zigzag prints for her birthday. He even performed a magic show at her birthday party. <br>
            Sue remembers the feeling of being the most fortunate girl in the world.</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c7.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                What special clothes are wom by Sue's daddy?<br>
                <span class="text-[#f7b94a]">Explain that different clothes serve different purposes e.g. a costume is worn
                    <br>
                    for a concert performance and office wear is worn for work.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b4.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[5vw] " />
            </div>
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Sue and her daddy once went shopping. It was strange that people kept <br>
            approaching daddy to check on the prices of the items on sale. They <br>
            finally realised that daddy was wearing a red-striped printed shirt which <br>
            looked the same as the uniform of the shop assistants!</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c8.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                Do you know of any occupation that requires one to wear a uniform?<br>
                <span class="text-[#f7b94a]">Give examples such as nurses and people in the postal services.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Sue likes her pyjamas with stars and moons, the most. When she wears <br>
            them, she feels like she is sleeping with the stars. As Sue hugs her patchwork <br>
            jacket, she recalls the happy memories it brings and she is soon fast asleep.</h3>
        <img src="{{ asset('assets/images/micet/k1/clothes/class1/c9.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                What do you wearto bed? What are your pyjamas like?<br>
                <span class="text-[#f7b94a]">Ask the children to describe their favourite pair of pyjamas.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b6.png') }}" class="w-[8vw]" />
        </div>
    </div>



    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Patchwork Jacket</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask questions related to the theme.</li>
                <li>Ask the children to describe the clothes they are wearing stating the designs, colours and patterns.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to know that clothes have different functions. </li>
                <li>Able to describe the designs, colours and patterns on clothes.</li>
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
            const returnURL = "{{ url('/micet/k1/clothes/index') }}";
            const doneURL = "{{ url('/micet/k1/clothes/index') }}";

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
