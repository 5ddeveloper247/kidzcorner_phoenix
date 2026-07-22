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
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>
    <div class="flex">
        <img src="{{ asset('assets/images/micet/k2/mybody/activity/c1.png') }}" class="h-[8vw]" />
    </div>

    <img src="{{ asset('assets/images/micet/k2/mybody/activity/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>
                Before the lesson, ask the class the following questions:
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>Name the different parts of the body.</li>
                    <li>Which part of your body is the most beautiful?</li>
                </ol>
            </li>
            <li>
                Invite the children to answer the questions. Guide the class in the use of the courseware to locate answers to the following questions.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>Why did everyone like having Mr Lee draw their portraits?</li>
                    <li>Did Mr Lee draw a portrait for Mr Ugly in the end?</li>
                    <li>How did Mr Lee draw Mr Ugly's portrait?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 1: Story - The Artist</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/mybody/activity/c2.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>Identify the names of various body parts</li>
                    <li>Learn some phrases related to the body</li>
                    <li>Learn to identify the virtues of others</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="text-start">
        <h3 class="ptitle">Story</h3>

        <p class="panel-ul">A magical gallery was located on art street. Everyone liked Mr Lee,
            from the magical gallery, to draw their portrait. Mr Lee would always
            discover their virtues and draw very beautiful portraits of them. One
            day, however, a special man appeared in the gallery. Mr Lee took
            the whole day to draw the man's portrait but was unsuccessful. He
            had to ask the man to come back the next day. It was raining
            heavily the next day. Mr Lee was looking out of the window when he
            saw the man helping an old lady cross the road. He discovered the
            man had a generous pair of hands. In the end, Mr Lee drew a
            beautiful pair of hands for the man.</p>
    </div>
</div>

{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="flex gap-[2vw]">
        <div>
            <h3 class="ptitle">Activity 2: Story - Picture phrase match</h3>
            <img src="{{ asset('assets/images/micet/k2/mybody/activity/c3.png') }}" class="w-[25vw]" />

        </div>
        <div class="text-start">
            <h3 class="ptitle">Objectives</h3>
            <ul class="panel-ul w-[30vw]">
                <li>Learn some phrases related to parts of the body, e.g. arm, face</li>
            </ul>
            <h3 class="ptitle">Process</h3>
            <ul class="panel-ul w-[30vw] text-[0.7vw]">
                <li>Children are required to listen to the
                    instructions and match the pictures
                    with the correct phrases. Upon
                    completion, the pictures will be
                    animated.</li>
            </ul>
        </div>
    </div>
</div>


{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-6vw]">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="flex gap-[1vw]">
        <div>
            <h3 class="ptitle">Activity 3: Fill in the Blanks</h3>
            <img src="{{ asset('assets/images/micet/k2/mybody/activity/c4.png') }}" class="w-[25vw]" />

        </div>
        <div class="text-start">
            <h3 class="ptitle">Objectives</h3>
            <ul class="panel-ul w-[30vw]">
                <li>Learn phrases related to parts of the body</li>
                <li>Learn the functions of the different body parts</li>
            </ul>
            <h3 class="ptitle">Process</h3>
            <ul class="panel-ul w-[30vw]">
                <li>Children are required to complete the
                    sentences according to the pictures by
                    filling in the blanks with the correct
                    phrases.</li>
            </ul>
        </div>
    </div>
</div>



{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-6vw]">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="flex gap-[2vw]">
        <div>
            <h3 class="ptitle">Activity 4: Let’s Count</h3>
            <img src="{{ asset('assets/images/micet/k2/mybody/activity/c5.png') }}" class="w-[25vw]" />

        </div>
        <div class="text-start">
            <h3 class="ptitle">Objectives</h3>
            <ul class="panel-ul w-[25vw]">
                <li>Develop skills in addition with sums up to 10</li>
            </ul>
            <h3 class="ptitle">Process</h3>
            <ul class="list-decimal panel-ul w-[25vw]">
                <li>Children are required to add the
                    numbers according to the hints on
                    screen and click on the correct sum.</li>
            </ul>
        </div>
    </div>
</div>


{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-6vw]">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="flex gap-[2vw]">
        <div>
            <h3 class="ptitle">Activity 5: Story - Matching game</h3>
            <img src="{{ asset('assets/images/micet/k2/mybody/activity/c6.png') }}" class="w-[25vw]" />

        </div>
        <div class="text-start">
            <h3 class="ptitle">Objectives</h3>
            <ul class="panel-ul w-[25vw]">
                <li>Enhance short-term memory skills</li>
            </ul>
            <h3 class="ptitle">Process</h3>
            <ul class="list-decimal panel-ul w-[25vw]">
                <li>Children are required to remember the
                    pictures that are flashed on the screen,
                    and then match them in pairs by
                    clicking.</li>
            </ul>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Computer Activities: The Artist</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Before the end of the computer lesson, invite a few children to answer the questions posed at the beginning of the lesson.</li>
            <li>Invite the children to share their views on Mr Ugly in the story.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to answer the questions posed at the beginning of the lesson.</li>
            <li>Able to complete the activities in the courseware.</li>
            <li>Able to name the different parts of the body.</li>
            <li>Able to read some phrases related to the different body parts.</li>
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
        const returnURL = "{{ url('/micet/k2/mybody/index') }}";
        const doneURL = "{{ url('/micet/k2/mybody/index') }}";

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