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
            font-size: 1.4vw;
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
        <h1 class="panel-title stroke">Classroom Activity 1: Animal Land</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Know the different animals</li>
            <li>Understand the physical characteristics of some animals</li>
            <li>Strengthen verbal communication skills</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Animal Land</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Animal Land</h1>

        <div class="text-start">
            <h3 class="title">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell the story using suggested questions and activities to reinforce the
                    teaching points of the story.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Animal Land</h1>

        <h3 class="p-title">Theme: The World of Animals</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Bobo is very happy today! Mummy is bringing him to the zoo. He has <br>
            heard that there are interesting animal shows in the zoo.</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c2.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Have you been to the zoo? Which are your favourite animals? Why?<br>
                <span class="text-[#f7b94a]">Guide the children in naming their favourite animal and its
                    characteristics.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">In the zoo, Bobo first sees a giraffe. It is stretching its long neck to <br>
            eat the leaves on a tree.</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c3.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                What are the other uses of the giraffe's long neck? <br>
                <span class="text-[#f7b94a]">Encourage the children to express their ideas clearly.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">The rhinoceros lives beside the giraffe. It has a powerful sharp hom. It <br>
            uses its hom as a weapon to protect itself from enemies when in danger.</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c4.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What other animals have sharp homs? <br>
                How many homs do they have on their heads? <br>
                <span class="text-[#f7b94a]">Help the children to identify the animals that have homs.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Ah, it is so cold in here! They have come to the polar bears' house. <br>
            However, the polar bears are not feeling cold. Their house in North Pole is <br>
            even colder.</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c5.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Why are the polar bears not feeling cold?<br>
                <span class="text-[#f7b94a]">Help the children to express their ideas clearly.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Wow, it is so crowded over there! The animal show has started! The <br>
            monkeys perform first. They clap their hands, nod their heads and <br>
            scratch their backs. They are so playful and loveable.</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c6.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Let's imitate the monkeys' actions. <br>
                <span class="text-[#f7b94a]">Encourage the children to imitate the various actions of the monkeys.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Next, the tigress and her cubs sing. Although the cubs look like kittens, <br>
            they have loud voices!</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c7.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Let's roar like the tiger. Can you imitate the sounds made by other animals?<br>
                <span class="text-[#f7b94a]">Guide the children in imitating the sounds made by the tiger and other
                    animals.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">The little animals are hiding as they are frightened by the tigress and the <br>
            cubs' singing. Look! The tortoise is so frightened that it has shrunk its <br>
            head and legs into its shell.</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c7.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What other animals have shells?<br>
                <span class="text-[#f7b94a]">Help the children to identify other animals that have shells.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h3 class="p-title">The last to perform are the elephants. Although the elephants are big <br>
            and heavy, they are talented danceis! They flap their big ears and swing <br>
            theirlong trunk. Their movements are very agile.</h3>
        <img src="{{ asset('assets/images/micet/n2/animals/class1/c7.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What are the uses of the elephant's long trunk?<br>
                <span class="text-[#f7b94a]">Encourage the children to use their imagination and express <br> their ideas 
                    clearly.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Animal Land</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Guide children to complete the corresponding activity in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Animal Land</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask the children to name some animals and describe their characteristics. </li>
                <li>Ask the children to name their favourite animals and describe
                    their characteristics.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name the animals introduced in the story and describe
                    their characteristics.</li>
            </ul>
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Animal Land</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite the children to imitate the animals in the story and
                    perform for the class.</li>
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
    </script>
@endpush
