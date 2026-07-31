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
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>
    <img src="{{ asset('assets/images/micet/k2/underworld/activity/c1.png') }}" class="h-[8vw]" />
    <img src="{{ asset('assets/images/micet/k2/underworld/activity/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>
                Prior to the lesson, ask the children the following questions to stimulate their interest.
                <ol class="list-[lower-alpha]">
                    <li>Have you seen the sea before? What does the sea look like?</li>
                    <li>What can be found in the sea?</li>
                    <li>Name some sea creatures.</li>
                </ol>
            </li>

            <li>
                Invite a few children to answer the questions. In addition, ask the following questions and help the
                children find the answers in the courseware.
                <ol class="list-[lower-alpha]">
                    <li>What did Tina and Candy find in the river?</li>
                    <li>How many types of sea creatures did they see while looking for Chatter?</li>
                    <li>Who is Chatter?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>

    <div class="text-start space-y-[2vw]">
        <h3 class="ptitle">Activity 1: Story - In search of Chatter the Catfish</h3>

        <div class="flex justify-center items-center gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/underworld/activity/c3.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[20vw]">
                    <li> To enjoy listening to a story</li>
                    <li>To name various sea creatures and identify their characteristics</li>
                    <li>To develop an interest in exploration</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>

    <div>
        <h3 class="ptitle">Story</h3>

        <p class="panel-ul">One day, Tina and Candy find a floating bottle in the river.
            There is a message inside the bottle, signed off by Chatter the Catfish.
            Who is Chatter the Catfish? They decide to search for it in the sea.
            First, Tina and Candy find a crab by the seashore but it doesn't know
            what Chatter the Catfish looks like. Then, they dive into the sea and
            see a jellyfish. However, it doesn't know anything about Chatter.
            Next, they see a whale, a clown fish and a turtle. However,
            none of them know who Chatter is. Finally, Tina and Candy meet an octopus.
            It tells them that Chatter lives in the river. Hence, Tina and
            Candy go to the river and find Chatter the Catfish. They finally know that
            Chatter is a catfish with long barbels. However, Chatter is frightened by
            Candy the cat and flees into the water.</p>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>

    <div class="text-start">
        <h3 class="ptitle">Activity 2: Seashells on <br>
            the seashore</h3>
        <div class="flex justify-center items-center gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/underworld/activity/c4.png') }}" class="w-[17vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[35vw]">
                    <li>To enhance the concept of space and order through the game of seriation</li>
                    <li>To enhance the understanding of shapes and colours</li>
                </ul>

                <h3 class="ptitle">Process</h3>
                <ol class="list-decimal panel-ul w-[35vw]">
                    <li>Choose and click on 1 of the 3 levels.</li>
                    <li class="text-sm">Level 1 and 2: Click on any 2 neighbouring shells to change their positions so that different shells are next to each other.</li>
                    <li class="text-sm">Level 3: Click on any 2 neighbouring shells to change their positions so that every shell is next to a shell with either the same shape or the same colour.</li>
                </ol>
            </div>
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>

    <div class="text-start">
        <h3 class="ptitle">Activity 3: Mystery Guests</h3>

        <div class="flex justify-center items-center gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/underworld/activity/c5.png') }}" class="w-[17vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[35vw]">
                    <li class="text-sm">To identify the characteristics of some sea creatures</li>
                    <li class="text-sm">To count and identify number words up to 20</li>
                    <li class="text-sm">To establish basic concept of "more than" and "less than"</li>
                </ul>

                <h3 class="ptitle">Process</h3>
                <ol class="list-decimal panel-ul w-[35vw]">
                    <li class="text-sm">Choose and click on 1 of the 3 levels. First, type in the answers for math questions using the number pad on the keyboard and click ok. Then, click to match the answers to the given codes to work out the name of various sea creatures.</li>
                    <li class="text-sm">Level 1 and 2: Carry out simple math questions (counting and recognise number name up to 15).</li>
                    <li class="text-sm">Level 3: Carry out difficult math questions (count and recognise number words up to 20; understand "1 more than" and "1 less than").</li>
                </ol>
            </div>
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>

    <div class="text-start">
        <h3 class="ptitle">Activity 4:Cave of Fame</h3>

        <div class="flex justify-center items-center gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/underworld/activity/c6.png') }}" class="w-[17vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ol class="list-disc panel-ul w-[35vw]">
                    <li>To learn to identify the characteristics of some sea creatures</li>
                    <li>To learn to read some words through the matching activity</li>
                    <li>To develop the concepts of colours and shapes</li>
                </ol>
                <h3 class="ptitle">Process</h3>
                <ol class="list-decimal panel-ul w-[35vw]">
                    <li class="text-sm">Choose and click on 1 of the 2 levels.</li>
                    <li class="text-sm">Level 1: Click to match words to pictures to complete the names of given sea creatures.</li>
                    <li class="text-sm">Level 2: Click to choose rhyming words to complete the names of given sea creatures.</li>
                </ol>
            </div>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Computer Activities: Wonders of the Sea</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>At the end of the lesson, have the children answer the questions asked at the beginning of the lesson.</li>
            <li>Have the children name other sea creatures they know.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to complete the various activities in the courseware.</li>
            <li>Able to name some sea creatures and identify their basic characteristics.</li>
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
        const returnURL = "{{ url('/micet/k2/underworld/index') }}";
        const doneURL = "{{ url('/micet/k2/underworld/index') }}";

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