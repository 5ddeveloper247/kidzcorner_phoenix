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
<div class="phonics-panel flex flex-col justify-between w-[45vw] h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/k1/water/class4/b1.png') }}" class="h-[7vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[35vw]">
        <li>To understand evaporation.</li>
        <li>To understand that heat and/or wind speed up evaporation.</li>
        <li>To develop thinking and observation skills.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Two identical jars with wide opening.</li>
            <li>Two identical small plates.</li>
            <li>Sponge, two pieces of cardboards.</li>
            <li>Electric fan.</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul">
            <li>Display two identical jars filled with equal amount of water for a few days before conducting this activity. Close one jar with a cap. Ask the children to predict what will happen to the water in the two jars after a few days and explain their reasoning. After a few days, let the children observe the water levels in the two jars and see if outcome matches their predictions.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/water/class4/c4.png') }}" class="h-[17vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>After a few days, have the children observe the difference between the two jars of water: the jar without a cap has less water than the jar with a cap. Ask the children where the water went. Guide them to understand that even at room temperature, water will change into water vapour. This process is called evaporation. Water in the jar without a cap will change into water vapour and escape into the air.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/water/class4/c4.png') }}" class="h-[17vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Fill two identical plates with equal amounts of water. Place one plate under the sun and the other in a cool corner of the classroom. Ask the children to predict what will happen to the water in the plates after an hour.</li>
    </ol>
    <div class="flex gap-5">
        <div class="flex flex-col">
            <img src="{{ asset('assets/images/micet/k1/water/class4/c1.png') }}" class="h-[15vw]" />
            <h2 class="text-[1.5vw] text-[#f7b94a]">in a cool corner</h2>
        </div>
        <div class="flex flex-col">
            <img src="{{ asset('assets/images/micet/k1/water/class4/c1.png') }}" class="h-[15vw]" />
            <h2 class="text-[1.5vw] text-[#f7b94a]">under the sun</h2>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>After an hour, bring in the two plates for the children to observe and compare. See if the results of the experiment is the same as their predictions.</li>
    </ol>
    <div class="flex gap-5">
        <div class="flex flex-col">
            <img src="{{ asset('assets/images/micet/k1/water/class4/c1.png') }}" class="h-[15vw]" />
            <h2 class="text-[1.5vw] text-[#f7b94a]">in a cool corner</h2>
        </div>
        <div class="flex flex-col">
            <img src="{{ asset('assets/images/micet/k1/water/class4/c3.png') }}" class="h-[15vw]" />
            <h2 class="text-[1.5vw] text-[#f7b94a]">under the sun</h2>
        </div>
    </div>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Guide the children to conclude that the water in the plate under the sun evaporates faster. Guide them to understand that water evaporates faster when the temperature is higher.</li>
    </ol>
    <div class="flex gap-5">
        <div class="flex flex-col">
            <img src="{{ asset('assets/images/micet/k1/water/class4/c1.png') }}" class="h-[15vw]" />
            <h2 class="text-[1.5vw] text-[#f7b94a]">in a cool corner</h2>
        </div>
        <div class="flex flex-col">
            <img src="{{ asset('assets/images/micet/k1/water/class4/c3.png') }}" class="h-[15vw]" />
            <h2 class="text-[1.5vw] text-[#f7b94a]">under the sun</h2>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Wet a sponge, wipe two pieces of cardboards with stripes of the same width. Place the cardboards apart. Ask the children to predict and explain what will happen to the wet stripes if an electric fan blows on one of the cardboard but not the other.
        </li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Conduct the experiment. Let the children observe and conclude whether the results and their predictions are the same.</li>
    </ol>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Guide the children to understand that wind speeds up the evaporation, thus the cardboard that was directly in front of the fan dried up faster.</li>
    </ol>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask the children why a hairdryer is used to dry hair. Guide the children in understanding that this is because hairdryer uses both heat and wind to speed up evaporation.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/water/class4/c5.png') }}" class="h-[17vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask the children how clothes hung out are dried. Guide them to understand that the clothes are dried because water evaporates. If there is sun or wind, the water will evaporate even faster.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/water/class4/c6.png') }}" class="h-[17vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask the children if they have observed pot holes on the ground filled with rain water. What will happen to the water in these holes? The water in these holes will evaporate slowly. If there is sun or wind, the water will evaporate faster.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/water/class4/c7.png') }}" class="h-[17vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask the children: Where does most of the water vapour in the air come from? Guide them to understand that the water from rivers, lakes, seas and damp soil evaporate and change to water vapour in the air. Heat from the sun and wind will speed up evaporation.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/water/class4/c8.png') }}" class="h-[17vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Have the children summarise the factors that will speed up the rate of evaporation.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to state that water changes to water vapour during evaporation.</li>
            <li>Able to explain that evaporation takes place even in normal room temperature conditions.</li>
            <li>Able to explain that heat and wind will speed up evaporation.</li>
            <li>Able to observe, think logically and predict.</li>
        </ul>
    </div>
</div>


{{-- panel 23 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Disappearing Water</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Have the children dab some water on their foreheads or arms. When the water evaporates, their foreheads or arms will feel cooler. Children may fan the damp parts to speed up evaporation.</li>
            <li>Have the children discuss why we sweat when our bodies are hot. (Evaporation will cause our bodies to cool down.)</li>
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