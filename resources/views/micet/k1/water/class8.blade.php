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
        font-size: 2.5vw;
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
    <h1 class="panel-title stroke">Classroom Activity 8: The Water Cycle Song</h1>
    <img src="{{ asset('assets/images/micet/k1/water/class8/b1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>To learn to sing "The water cycle" song.</li>
        <li>To use ones body to perform the water cycle.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Water Cycle Song</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Thematic Activity Book</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Water Cycle Song</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Sing "The water cycle" song.<span><button id="sound-btn" class="w-[3vw]">
                        <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                    </button></span></li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            Water droplets like to change their look!<br>
            Water droplets like to change their look!<br>
            Change to steam that's so light,<br>
            Change to cloud, oh, what a sight!<br>
            Change to water when it rains at night!</h4>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Water Cycle Song</h1>

    <div class="text-start">

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask the children what the song is about.</li>
            <li>Have the children explain the water cycle.</li>
            <li>Teacher explains the lyrics, sentence by sentence. Then teach the children to sing the song.<span><button id="sound-btn" class="w-[3vw]">
                        <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                    </button></span></li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            Water droplets like to change their look!<br>
            Water droplets like to change their look!<br>
            Change to steam that's so light,<br>
            Change to cloud, oh, what a sight!<br>
            Change to water when it rains at night!</h4>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">

    <h1 class="panel-title stroke">
        Classroom Activity 8: The Water Cycle Song
    </h1>

    <div class="text-start w-[45vw] items-center">

        {{-- Instruction --}}
        <ol class="list-decimal panel-ul pl-5 m-0" start="5">
            <li>
                When the children are familiar with the lyrics, guide them in
                using actions and movement to accompany the lyrics of the song.
                For example:

                <button
                    id="sound-btn"
                    class="inline-block align-middle w-[3vw] ml-2"
                    type="button">
                    <img
                        src="{{ asset('assets/images/pptimages/sound-btn.png') }}"
                        alt="Play song"
                        class="w-full h-auto" />
                </button>
            </li>
        </ol>

        {{-- Song Lyrics --}}
        <div class="text-white text-[1.5vw] leading-[1.05] mt-5">

            {{-- Line 1 --}}
            <div class="mb-4">
                <div>
                    Water droplets like to change their look!
                </div>
                <div class="text-[1.05vw] leading-[1.1] font-normal">
                    (use a finger to draw a large circle in front of the chest
                    to represent a droplet)
                </div>
            </div>

            {{-- Line 2 --}}
            <div class="mb-4">
                <div>
                    Water droplets like to change their look!
                </div>
                <div class="text-[1.05vw] leading-[1.1] font-normal">
                    (repeat action)
                </div>
            </div>

            {{-- Line 3 --}}
            <div class="mb-4">
                <div>
                    Change to steam that's so light,
                </div>
                <div class="text-[1.05vw] leading-[1.1] font-normal">
                    (raise the hands slowly, reaching for the sky)
                </div>
            </div>

            {{-- Line 4 --}}
            <div class="mb-4">
                <div>
                    Change to cloud, oh, what a sight!
                </div>
                <div class="text-[1.05vw] leading-[1.1] font-normal">
                    (place the hands on top of the head and move them to
                    represent clouds)
                </div>
            </div>

            {{-- Line 5 --}}
            <div>
                <div>
                    Change to water when it rains at night!
                </div>
                <div class="text-[1.05vw] leading-[1.1] font-normal">
                    (open the arms, move the hands down and wriggle the fingers)
                </div>
            </div>

        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Hopscotch</h1>
    <div class="space-y-10 flex flex-col items-center">
        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Have the children perform "The water cycle" song and dance together.</li>
            <li>Organise the children into groups. Have each group use their imagination to come up with new actions to go with the song and then practice performing. <span><button id="sound-btn" class="w-[3vw]">
                        <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                    </button></span></li>
        </ol>
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Water Cycle Song</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Each group to take turns to perform and the others clap their hands according to rhythm.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to sing "The water cycle" song according to rhythm.</li>
            <li>Able to express the meaning of the lyric using actions.</li>
            <li>Able to use their imagination to perform.</li>
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
        const returnURL = "{{ url('/micet/k1/water/index') }}";
        const doneURL = "{{ url('/micet/k1/water/index') }}";

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