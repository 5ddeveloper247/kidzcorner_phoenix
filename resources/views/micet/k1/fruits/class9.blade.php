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
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>
    <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        </div>

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Learn to sing the "The Secret In The Orchard" song</li>
        <li>Learn to recite a rap and clap to the rhythm</li>
        <li>Create a new rap by changing the lyrics of the original rap</li>
        <li>Develop a sense of rhythm and enjoy music</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ol class="list-disc panel-ul w-[45vw]">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>

{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul">
            <li>Click on the animation. Let the children listen to the song, "The Secret In The Orchard".</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class9/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul" start="2">
            <li>Invite the children to learn the lyrics.</li>
        </ol>
    </div>
    <h2 class="text-white text-2xl text-justify">
        In this place of many fruits, <br>
        There are secrets hidden here and there. <br>
        Little seeds searching everywhere,<br>
        For their lost mummy.<br>
        Special fruit from a magic tree,<br>
        And little dolls for you and me.<br>
        Other fruits shiny and green,<br>
        One will be a lovely queen.<br>
    </h2>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full space-y-[1vw] items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul" start="3">
            <li>When the children are familiar with the lyrics, encourage them to sing the song.</li>
        </ol>
    </div>
    <h2 class="text-white text-2xl text-justify">
        <button class="w-[3vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
        In this place of many fruits, <br>
        There are secrets hidden here and there. <br>
        Little seeds searching everywhere,<br>
        For their lost mummy.<br>
        Special fruit from a magic tree,<br>
        And little dolls for you and me.<br>
        Other fruits shiny and green,<br>
        One will be a lovely queen.<br>
    </h2>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full space-y-[1vw] items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul" start="4">
            <li>Invite the children to listen to the "Watermelon" rap. Let them guess the fruit and describe its characteristics.</li>
        </ol>
    </div>
    <h2 class="text-white text-2xl text-justify">
        <button class="w-[3vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
        In this place of many fruits,<br>
        I am the prettiest one of all,<br>
        With a round body, big and bright,<br>
        And dressed in a green patterned robe<br>
        that's just right.<br>
    </h2>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul" start="5">
            <li>Click on the animation to let the children verify whether they guessed the fruit correctly.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class9/c3.png') }}" class="w-[25vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full space-y-[1vw] items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul" start="6">
            <li>Invite the children to learn the rap and let them clap their hands according to the beat.</li>
        </ol>
    </div>
    <h2 class="text-white text-2xl text-justify">
        <button class="w-[3vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
        In this place of many fruits, <br>
        I am the prettiest one of all,<br>
        With a round body, big and bright,<br>
        And dressed in a green patterned robe<br>
        that's just right.<br>
    </h2>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full space-y-[1vw] items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>
    <div class="text-start">
        <ol class="list-decimal panel-ul" start="7">
            <li>Encourage the children to substitute words in the "Watermelon" rap to create other fruit raps, such as:</li>
        </ol>
    </div>
    <h2 class="text-white text-2xl text-justify">
        In this place of many fruits, <br>
        I am the prettiest one of all,<br>
        With a round body, big and bright,<br>
        And dressed in a green patterned robe<br>
        that's just right.<br>
    </h2>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>




{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Sing and Chant</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite the children to perform their own fruit rap.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to sing the "The Secret In The Orchard" song.</li>
            <li>Able to chant the "Watermelon" rap and clap to the rhythm.</li>
            <li>Able to create a new rap according to the characteristics of a fruit by substituting words in the original rap.</li>
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
        const returnURL = "{{ url('/micet/k1/fruits/index') }}";
        const doneURL = "{{ url('/micet/k1/fruits/index') }}";

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