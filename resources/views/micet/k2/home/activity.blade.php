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
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>
    <img src="{{ asset('assets/images/micet/k1/home/activity/c1.png') }}" class="h-[8vw]" />
    <img src="{{ asset('assets/images/micet/k1/home/activity/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>
                Prior to the lesson, ask children the following questions to stimulate their interest.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>What kind of house do you live in?</li>
                    <li>What are the rooms you can find in your house? What are their uses?</li>
                    <li>What buildings can you find near your house?</li>
                </ol>
            </li>

            <li>
                Invite a few children to answer the above questions. In addition, ask the
                children the following questions and help them to find the answers in the
                courseware.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li> Do you know what the little tortoise's house looks like?</li>
                    <li>What does Sue's house look like?</li>
                    <li>How many rooms are there in Sue's house?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 1: Story - Home For All</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/home/activity/c3.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>Know the names and uses of different
                        household items</li>
                    <li>Attain a comprehensive understanding
                        of the concept of "home"</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start">
        <h3 class="ptitle">Story</h3>

        <p class="panel-ul">The story begins with the home of the tortoise and snail - their shell is their
            home. It then leads into the different living environments of animals and of
            man. Sue introduces us to her home, through which the children will acquire
            an understanding of the design and uses of the different rooms in a house,
            for example, the bedroom and bathroom.</p>
    </div>
</div>

{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 2: Let’s Arrange Numbers</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/home/activity/c4.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="panel-ul w-[30vw]">
                    <li>Practise arranging 1 to 10 in sequence</li>
                    <li>Practise hand-eye coordination</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[27vw]">
                    <li>Arrange the houses according to their
                        number in ascending order.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 3: Matching Game</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/home/activity/c5.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="panel-ul w-[30vw]">
                    <li>Develop memory retention</li>
                    <li>Practise matching names of family members</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[27vw]">
                    <li>There are eight cards which show the different
                        members of a family. The cards will be turned
                        over after the children have viewed them. The
                        children would then have to try and remember
                        the position of each card and match the cards
                        accordingly. For example, cards of father
                        with mother, uncle with auntie.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 4: Puzzle Game</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/home/activity/c6.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="panel-ul w-[25vw]">
                    <li>Differentiate between the basic shapes</li>
                    <li>Learn how shapes can be combined</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[25vw]">
                    <li>Children are to form a house using the
                        different shapes available. They will do
                        this by looking at the pattern of the
                        house at the top right hand corner of
                        the screen.</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 5: Puzzle Game</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/home/activity/c7.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="panel-ul w-[25vw]">
                    <li>Understand the individual rooms in a house
                        and the furniture in them</li>
                    <li>Learn new vocabulary related to the home</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[25vw]">
                    <li>Children will place the furniture (at the
                        bottom of the screen) in the
                        appropriate rooms. If the answer is
                        correct, the corresponding vocabulary
                        will be shown.</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Computer Activities: Home For All</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Before the end of the lesson, invite
                a few children to answer the questions
                posed at the beginning of the lesson.</li>
            <li>
                Invite children to name the different types of houses, rooms and the furniture in them.
            </li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Be able to complete the various activities in the courseware.</li>
            <li>Be able to sing the songs in the courseware.</li>
            <li>Attain a comprehensive understanding of the concept of "home".</li>

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
        const returnURL = "{{ url('/micet/k1/home/index') }}";
        const doneURL = "{{ url('/micet/k1/home/index') }}";

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