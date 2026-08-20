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
    <h1 class="panel-title stroke">Classroom Activity 10: Good Eating Habits</h1>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b1.png') }}" class="h-[6vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>Know that we should wash hands before eating and brush
            teeth or rinse mouth after eating</li>
        <li>Know that a balanced diet will keep us healthy</li>
        <li>Enjoy listening to a story</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 10: Good Eating Habits</h1>

    <h3 class="ptitle">Preparations</h3>

    <ol class="list-decimal panel-ul w-[50vw]">
        <li>Thematic Activity Book</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Good Eating Habits</h1>

    <h3 class="p-title text-white">Theme: Nutritious and Delicious</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c1.png') }}" class="w-[30vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">Ring ... It's lunch time, all the children put down their
        toys and get ready for lunch!</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c2.png') }}" class="w-[30vw]" />

    <div class="flex items-center w-[45vw] text-justify justify-around">
        <h3 class="p-title text-white">
            What should you do before eating?<br>
            <span class="text-[#f7b94a]">Guide children to recall their experience.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b4.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">The children queue up and take turns to wash their
        hands in the toilet.</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c3.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-white">
            What do you use to wash your dirty hands?<br>
            <span class="text-[#f7b94a]">Help children to develop logical thinking skills.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b5.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">Look at the yummy food! What food will the
        children be eating?</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c4.png') }}" class="w-[27vw]" />

    <div class="flex items-center text-justify justify-around w-[45vw]">
        <h3 class="p-title text-white">
            What are the food prepared for lunch?<br>
            <span class="text-[#f7b94a]">Guide children to name each of the food.</span>
        </h3>
        <div class="flex gap">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b3.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">What food are Lingo, Logi and Doodle eating?
        Do you like these food?</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c5.png') }}" class="w-[27vw]" />

    <div class="panel-ul flex items-center text-justify w-[45vw] justify-around">
        <h3 class="p-title text-white">
            What are the benefits of eating these food?<br>
            <span class="text-[#f7b94a]">Guide children to name the benefits of eating
                from the rice and noodles group.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b5.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">What food are Jingle, Dex and Eco eating?
        Do you like these food?</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c6.png') }}" class="w-[30vw]" />

    <div class="panel-ul flex items-center text-justify w-[45vw] justify-around">
        <h3 class="p-title text-white">
            What are the benefits of eating these food?<br>
            <span class="text-[#f7b94a]">Guide children to name the benefits of eating
                from the meat and seafood group.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b5.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">What food are Peace and Faith eating?
        Do you like these food?</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c7.png') }}" class="w-[29vw]" />

    <div class="panel-ul flex items-center text-justify w-[45vw] justify-around">
        <h3 class="p-title text-white">
            What are the benefits of eating these food?<br>
            <span class="text-[#f7b94a]">Guide children to name the benefits of eating
                from vegetables and fruits group.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b5.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">The lunch includes rice, noodles, meat, vegetables and fruits. The
        children are full from eating all these food! After eating, what should the children do?</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c5.png') }}" class="w-[27vw]" />

    <div class="panel-ul flex items-center text-justify w-[45vw] justify-around">
        <h3 class="p-title text-white">
            What should you do after eating?<br>
            <span class="text-[#f7b94a]">Guide children to recall their experience.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b4.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">That's right! The children queue up and take turns to brush their
        teeth and rinse their mouth in the toilet.</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c8.png') }}" class="w-[27vw]" />

    <div class="panel-ul flex items-center text-justify w-[45vw] justify-around">
        <h3 class="p-title text-white">
            What do you use to brush your teeth?<br>
            <span class="text-[#f7b94a]">Help children to develop logical thinking skills.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[4.5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b5.png') }}" class="h-[4.5vw]" />
        </div>
    </div>
</div>



{{-- panel 12 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h3 class="p-title text-white">The teacher says, "Children, you are not choosy with food. You
        wash your hands before eating and brush your teeth and rinse your
        mouth after eating. You are really a healthy child!"</h3>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class10/c9.png') }}" class="w-[27vw]" />

    <div class="panel-ul flex items-center text-justify w-[45vw] justify-around">
        <h3 class="p-title text-white">
            What should you do to be a healthy child?<br>
            <span class="text-[#f7b94a]">Help children to develop divergent thinking skills.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b2.png') }}" class="h-[4.5vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class10/b4.png') }}" class="h-[4.5vw]" />
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Good Eating Habits</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Good Eating Habits</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Ask children: What should we do before eating? What should we do after
                eating? What are the benefits of eating from the rice and noodles group?
                What are the benefits of eating from the meat and seafood group? What
                are the benefits of eating from the vegetables and fruits group?</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to know that we should wash hands before eating and brush teeth or
                rinse mouth after eating.</li>
            <li>Able to know that a balanced diet will keep us healthy.</li>
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
        const returnURL = "{{ url('/micet/n1/nutrition/index') }}";
        const doneURL = "{{ url('/micet/n1/nutrition/index') }}";

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