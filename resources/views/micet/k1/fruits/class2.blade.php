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
        text-align: left
    }
</style>
@endpush

@section('content')

{{-- panel 1 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/k1/fruits/class1/c1.png') }}" class="h-[7vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Identify some common fruits</li>
        <li>Develop observational skills</li>
        <li>Learn to create simple patterns</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col items-center space-y-[5vw] h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Plain paper-A4 size</li>
        </ul>
        <ul class="list-disc panel-ul">For Optional Activity:
            <li>3 to 5 different types of fruits (washed), one fruit per child</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c2.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c3.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c4.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c5.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c6.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c7.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c8.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c9.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c10.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c11.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c12.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c13.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c14.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c15.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c16.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c17.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c18.png') }}" class="h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Ask the children to name the fruit.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c19.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul" start="19">
            <li>Click on the picture below to open the Soflware Magnetic Board.
                Arrange the fruits in a simple sequence, such as: apple, orange.
                Then repeat the sequence a second time. Ask the children to observe
                carefully, and say which fruit should come next.</li>
            <li>
                Together with the children, complete the sequencing of fruits.
                (gradually introduce more challenging patterns with three/ four/ five fruits)
            </li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/class2/c20.png') }}" class="h-[17vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>(Optional activity) Distribute some fruits to the children.
                Invite a few children with different fruits to come forward
                and arrange them in a sequence.</li>

            <li>Ask the invited children to name the fruits that they have in
                hand in order of the sequence. Ask the children to guess which
                fruit should come next in the sequence. Ask those who have the
                correct fruit to come forward and join in to continue with the
                sequencing activity.</li>
        </ol>
    </div>
</div>





{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="23">
        <li>(Optional activity) After completing the sequencing activity,
            have the children wash their hands and the fruits as well.</li>
        <li>
            Invite the children to taste the fruits they have.
        </li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="25">
        <li>Distribute plain papers to the children. Encourage
            them to draw a simple fruit pattern. If using the
            Thematic Activity book, guide children to complete
            the corresponding activities in the book.</li>
    </ol>
</div>


{{-- panel 36 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let the children display their fruit patterns.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to name some common fruits.</li>
            <li>Able to arrange fruits according to a pattern.</li>
            <li>Able to draw a simple fruit pattern.</li>
        </ul>
    </div>
</div>


{{-- panel 19 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 2: Fruit Patterning</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Ask the children to collect fruit seeds from home and bring to school.</li>
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