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
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <img src="{{ asset('assets/images/micet/k2/plant/class4/c1.png') }}" class="h-[7vw]" />
    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>To understand that plants absorb water and nutrients from roots.</li>
        <li>To understand how water and nutrients are transported from roots.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ul>
        <p class="text-white text-xl">For Optional Activity:</p>
        <div>
        <ul class="list-disc panel-ul">
            <li>Coloured water mixed from colour dyes.</li>
            <li>White carnations.</li>
            <li>One piece of white paper per child.</li>
        </ul>
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Encourage the children to recall from the story what the apple tree ate to grow. Guide the children to conclude the uses of roots - They absorb water and nutrients from the soil.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/plant/class4/c2.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Have the children discuss how water and nutrients, after being absorbed by the roots, are transported to the entire tree.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class4/c3.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Tell the children that we are going to observe an experiment
            to show how a celery stem absorbs and transports water. In
            this experiment, we place the celery stem in coloured water
            to observe how water travels up the stem.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Click on the video to show the children a stalk of celery. Ask them to look closely at the stem.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class4/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Click on the video to show how to place the celery stem in coloured water.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class4/v2.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Ask the children to look at the photo and guess what will happen to the celery stem after some time.</li>
    </ol>

    <img src="{{ asset('assets/images/micet/k2/plant/class4/c11.png') }}" class="h-[20vw]" />
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Click on the video to show how to place the celery stem in coloured water.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class4/v3.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Ask the children why the celery stem has changed colour.</li>
    </ol>
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/images/micet/k2/plant/class4/c4.png') }}" class="h-[17vw]" />
        <svg class="w-8 h-8 text-white stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>

        <img src="{{ asset('assets/images/micet/k2/plant/class4/c5.png') }}" class="h-[17vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Explain that there are many tiny straws inside the celery stem. Water gets absorbed and travels up these straws. Ask the children to point to the straws.</li>
    </ol>
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/images/micet/k2/plant/class4/c4.png') }}" class="h-[17vw]" />
        <svg class="w-8 h-8 text-white stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>

        <img src="{{ asset('assets/images/micet/k2/plant/class4/c5.png') }}" class="h-[17vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Guide the children to understand that all plants have many tiny straws inside their stems to absorb and transport water to all parts of the plant.</li>
    </ol>
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/images/micet/k2/plant/class4/c4.png') }}" class="h-[17vw]" />
        <svg class="w-8 h-8 text-white stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>

        <img src="{{ asset('assets/images/micet/k2/plant/class4/c12.png') }}" class="h-[17vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Click on the video to show how to place the celery stem in coloured water.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class4/v4.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Use the photo to re-emphasise that plants drink water through straws just like US.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class4/c6.png') }}" class="h-[17vw]" />
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Use the photo to re-emphasise that plants drink water through straws just like US.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class4/c7.png') }}" class="h-[17vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Tell the children that we are going to do another experiment. Click on the video to show white carnations being placed in blue and red coloured water.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class4/v5.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="15">
        <li>Ask the children to look at the photo and guess what will happen to the white carnations after some time.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class4/c9.png') }}" class="h-[17vw]" />
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>(Optional activity) Distribute some white carnations to the children.
            The children place the carnations in different coloured water and
            observe the different changes and then record their findings on paper.</li>
    </ol>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="17">
        <li>(Optional activity) Distribute some white carnations to the children.
            The children place the carnations in different coloured water and
            observe the different changes and then record their findings on paper.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class4/c10.png') }}" class="h-[17vw]" />
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="18">
        <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
    </ol>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: How Do Plants Drink Water?</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite the children to conclude how plants drink water.
                After a few days, invite the children to explain the
                changes in the carnations and the reasons for the changes.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to understand that plants absorb water and nutrients from the roots.</li>
            <li>Able to say that many small tubes in stems are responsible for transporting water and nutrients to the entire plant.</li>
            <li>Able to record and explain the result of one's findings.</li>
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
        const returnURL = "{{ url('/micet/k2/plant/index') }}";
        const doneURL = "{{ url('/micet/k2/plant/index') }}";

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