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
        <h1 class="panel-title stroke">Classroom Activity 1: Merry Fruit Garden</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Identify some tropical fruits and know their
                characteristics</li>
            <li>Develop verbal communication skills</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Merry Fruit Garden</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center ">
        <h1 class="panel-title stroke">Classroom Activity 1: Merry Fruit Garden</h1>

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
        <h1 class="panel-title stroke">Uncle Lee’s Fruit Trees</h1>

        <h3 class="p-title">Theme: Fruit Paradise</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">There are many tropical fruits in Merry Fruit Garden. The scarecrow from <br>
            the farm next door and the fruits are good friends. It is a fine day and the <br>
            scarecrow decides to look for his friends to play hide-and-seek.</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c2.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What is a scarecrow?<br>
                <span class="text-[#f7b94a]">Guide the children in using longuage to describe the appearance of a <br>
                    scarecrow and describe the purpose of a scarecrow.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">When the scarecrow walks into the orchard, something falls onto his <br>
            head with a crash! Ouch! It is the long haired, red-faced rambutan.</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c3.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                What does a rambutan look like?<br>
                <span class="text-[#f7b94a]">Guide the children in moking inferences from the text description in order <br>
                    to determine the characteristics of a rambutan.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h3 class="p-title">The rambutan and scarecrow come to the banana plantation. <br>
            The banana is very excited and he jumps down from the tree. However, <br>
            he is careless and drops his overcoat. The banana's body is white in colour.</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c4.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What are the fruits that have similar skin and flesh colour? <br>
                What are the ones with different colours? <br>
                <span class="text-[#f7b94a]">Encourage the children to observe the similarities and differences in the
                    colour <br>
                    of the flesh and the skin and understand the characteristics of the fruits.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Just then, they hear someone yelling. It is the big jackfruit! It is trapped in <br>
            a sack! Everyone quickly think of a way to help it escape from the sack!</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c5.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Why are jackfruits wrapped in sacks?<br>
                <span class="text-[#f7b94a]">Let the children guess the reason, and then explain to them that it <br>
                    is done to prevent insects and birds from eating the jackfruits.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">The scarecrow finds a wheelbarrow and puts the fruits in it. He pushes the <br>
            wheelbarrow and escapes from the orchard. They nearly knock into the <br>
            durian. Fortunately, the durian has hard thoms and it is not easily hurt.</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c6.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-center w-full">
            <h3 class="p-title text-left">
                If you knock into some one, what should you say? <br>
                <span class="text-[#f7b94a]">Teach the children to practice basic courtesy.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Finally, they come to the watermelon field. The watermelons are <br>
            generous. They treat everyone to watermelon juice. It is so strange. The <br>
            watermelons' skins are green but their juices are red!</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c7.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Count the number of watermelons. How many big watermelons are there? <br>
                How many small watermelons are there?<br>
                <span class="text-[#f7b94a]">Assist the children in familiarizing with counting from 1 to 10 and teach the
                    <br>
                    concept of big and small.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">With so many companions, they can play hide-and-seek. The fruits hide <br>
            but the clever scarecrow finds them in a short time. Everyone is playing happily.</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c8.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-center gap-[2vw] w-full">
            <h3 class="p-title text-left">
                How did the scare crow manage to find the fruits?<br>
                <span class="text-[#f7b94a]">Guide the children in discovering how shadows are formed.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">It is getting late and the scarecrow has to return to the farm. The fruits <br>
            cannot bear to part with the scarecrow. They make an agreement to <br>
            play together again.</h3>
        <img src="{{ asset('assets/images/micet/n2/fruits/class1/c9.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What are some interesting games you know? What is your favourite game?<br>
                <span class="text-[#f7b94a]">Guide the children in expressing their personal preferences.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Merry Fruit Garden</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Guide children to complete the corresponding activity in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Merry Fruit Garden</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children to name some tropical fruits mentioned in the
                    story and describe their characteristics . </li>
                <li>Ask children to name their favourite fruit and describe its
                    characteristics.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name some tropical fruits mentioned in the story and
                    describe their characteristics.</li>
                <li>Able to name one's favourite fruit and describe its
                    characteristics.</li>
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
            const returnURL = "{{ url('/micet/n2/fruits/index') }}";
            const doneURL = "{{ url('/micet/n2/fruits/index') }}";

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
