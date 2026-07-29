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
    <h1 class="panel-title stroke">Computer Activities: Things people do homepage</h1>
    <img src="{{ asset('assets/images/micet/k2/occupation/activity/c1.png') }}" class="h-[8vw]" />
    <img src="{{ asset('assets/images/micet/k2/occupation/activity/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Things people do homepage</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>
                Prior to the lesson, ask the children the following questions to stimulate their
                interest.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li> Name the occupations you know.</li>
                    <li>What occupations are your parents in?</li>
                    <li>What do you want to be when you grow up?</li>
                </ol>
            </li>

            <li>
                After eliciting some response, ask the following questions and guide the
                children to find the answers in the courseware.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li> Who did Bobo and Jojo meet at the Science Centre?</li>
                    <li>What did the astronaut get Bobo and Jojo to wear before entering the
                        rocket?</li>
                    <li>What did Bobo and Jojo use to walk on the moon?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Things people do homepage</h1>

    <div class="text-start">
        <h3 class="ptitle">Activity 1: Apollo 11</h3>

        <div class="flex  gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/occupation/activity/c2.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <li> To understand basic astronomy.</li>
                    <li>To learn related vocabulary and sentences.</li>
                </ul>
                <h3 class="ptitle">Content of the website</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <p class="text-sm">
                        Bobo and Jojo visited the Science Centre.
                        They met astronaut Andy who brought them on
                        a ride in "Apollo 11" to explore the moon.
                        In outer space, they saw the beautiful Earth
                        and experienced zero gravity. They learnt
                        about astronomy during this fun journey.
                        In the story, there is a game - walking
                        through the maze. Children will
                        navigate using the mouse to help Bobo
                        and Jojo return to the spaceship.
                    </p>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Things people do homepage</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 2: The postman</h3>

        <div class="flex  gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/occupation/activity/c2.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>To understand a postman's job nature, work place, mode of transport etc.</li>
                    <li>To acquire spatial concept and reinforce mathematical symbols.</li>
                </ul>
                <h3 class="ptitle">Content of the website</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <p class="text-sm">
                        Postman Nick's job is to deliver mails
                        to the residents on his motorcycle.
                        The game in the story requires
                        children to navigate using the mouse
                        and choose the correct routes to
                        help Nick deliver the mails to specific
                        destinations.
                    </p>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Things people do homepage</h1>

    <div class="text-start">
        <h3 class="ptitle">Activity 3: Games/Songs</h3>

        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/micet/k2/occupation/activity/c2.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <li class="text-sm"> To appreciate music.</li>
                    <li class="text-sm">To familiarise with different sounds and develop short-term memory skills.</li>
                    <li class="text-sm">To differentiate tools that differen occupations need.</li>
                    <li class="text-sm">To develop fine motor skills through navigating the mouse.</li>
                </ul>
                <h3 class="ptitle">Content of the website</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <p class="text-xs">
                        Choose one of three buttons: <br>
                        Sing a song: Songs related to occupations.<br>
                        Game 1: Navigate a maze, gather items a baker wears and food he bakes.<br>
                        Game 2: Select Level 1 or 2<br>
                        Level 1: Two sounds are played in sequence. Select the icon with the sounds in the correct sequence.<br>
                        Level 2: Same as above except three<br>
                        sounds are played in sequence.<br>
                    </p>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Things people do homepage</h1>

    <div class="text-start">
        <h3 class="ptitle">Activity 4: Browser’s Section</h3>

        <div class="flex  gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/occupation/activity/c2.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li> To understand some common occupations, job nature and equipments used.</li>
                </ul>
                <h3 class="ptitle">Content of the website</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <p class="text-sm">
                        First browse through the simulated
                        website to understand different occupations, job nature and equipment used in the hospital, construction site, farm and hotel.
                        Then click on the spider which will ask
                        questions relating to these occupations.
                        One answers each question by
                        navigating to the correct web page
                        and place a ribbon on the answer.
                    </p>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Computer Activities: Things people do homepage</h1>

    <div class="text-start flex flex-col justify-between h-full space-y-[1vw]">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>At the end of the lesson, review the questions asked at the beginning of the computer lesson.</li>
            <li>Children will introduce the occupations of their parents and express what they would like to be when they grow up.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to complete the various activities in the courseware independently.</li>
            <li>Able to understand some common occupations, job duties and equipments used.</li>
            <li>Able to browse through the website and distinguish the sounds related to various occupations.</li>
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
        const returnURL = "{{ url('/micet/k2/occupation/index') }}";
        const doneURL = "{{ url('/micet/k2/occupation/index') }}";

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