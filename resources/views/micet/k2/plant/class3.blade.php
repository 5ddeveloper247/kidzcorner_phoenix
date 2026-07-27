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
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c1.png') }}" class="h-[7vw]" />
    <h3 class="ptitle">Objectives:</h3>
    <ul class="list-disc panel-ul">
        <li>To recognize leaves from various types of trees.</li>
        <li>To understand why trees need leaves.</li>
        <li>To create artwork using pasted leaves.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <div>
        <h3 class="ptitle mt-[5vw]">Preparations</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Thematic Activity Book</li>
            <li>Various types of leaves.</li>
            <li>Scissors, glue and coloured paper.</li>
            <li>Get the children to collect fallen leaves beforehand.</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>
        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have the children observe the photos of leaves. Then ask them to describe the shapes and characteristics of the leaves. They can also talk about other types of leaves, which they have seen.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c2.png') }}" class="h-[15vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask the children to describe the shape, similarities and differences of the leaves. Guide them to notice that the leaves are green and discuss why the leaves are green. Help the children understand that only green leaves can absorb sunlight to produce food.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c2.png') }}" class="h-[15vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Guide the children to discuss whether flowers, trunks and roots can make food. Help them understand that only leaves can produce food for plants.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c2.png') }}" class="h-[15vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Ask the children whether animals can produce food like plants (animals cannot because only plants can produce their own food). Ask the children how animals get their food (from eating plants or other animals). Help the children to further understand the relationship between plants and animals.</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Ask the children: "What seeds are these?"</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c3.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Ask the children: "What seeds are these?"</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c4.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Ask the children: "What seeds are these?"</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c5.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Ask the children to consider what will happen if a tree does not have leaves. Help the children understand the need to cherish trees and not pluck flowers, leaves and cut down trees indiscriminately.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c6.png') }}" class="h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Organise the children into groups. Have the children take out the leaves they have collected. Encourage them to display, talk about and compare the characteristics of the leaves, which they have collected.</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Tell the children they can use the leaves they have collected to create works of art.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class3/c7.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Get each group of children to share the leaves they have collected. Encourage the children to use their imagination to create their artwork with these leaves; e.g. pasting according to the colours and original shapes of the leaves or cutting the leaves to their required shapes.</li>
    </ol>
</div>



{{-- panel 17 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 18 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 3: Seeds and plant</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite the children to display and explain their artwork.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to describe the shapes of various types of leaves.</li>
            <li>Able to say that leaves absorb sunlight to produce food.</li>
            <li>Be aware that one should not pluck flowers and leaves indiscriminately.</li>
            <li>Able to create art from leaves.</li>
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