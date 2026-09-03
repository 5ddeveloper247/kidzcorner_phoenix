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
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>
    <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Identify the main characteristics of some fruits</li>
        <li>Find similarities and differences in the fruits</li>
        <li>Develop observation skills</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>A basket of fruits (apple, pineapple, mandarin orange,
                banana, grapes, star fruit and peach) for each group</li>
            <li>One fruit knife per group</li>
            <li>Before the activity starts, draw a record table on the white
                board ( Refer to Lesson Development, point 2)</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Let the children form groups. Give each group of children a basket of fruits.
                Tell the children that they are going to observe and record the characteristics
                of these fruits.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Guide children to understand the contents of the table on the white board.
            Read out and explain the characteristics that will be recorded.</li>
    </ol>
    <div class="flex">
        <img src="{{ asset('assets/images/micet/k1/fruits/class6/c2.png') }}" class="w-[25vw] h-[20vw]" />
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Let each group take out an apple from the basket. Encourage the children
            to observe the outside of an apple and talk about its characteristics.
            Teacher can record their findings on the white board ( tick or colour
            the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c3.png') }}" class="w-[25vw] h-[17vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Help each group cut the apple. Let children observe
            the inside of the fruit and talk about the characteristics.
            Teacher can record their findings on the white board ( tick
            or colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c3.png') }}" class="w-[25vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Let each group take out a pineapple from the basket.
            Encourage the children to observe the outside of a
            pineapple and talk about its characteristics.
            Teacher can record their findings on the white board
            ( tick or colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c4.png') }}" class="w-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Help each group cut the pineapple. Let children
            observe the inside of the fruit and talk about
            the characteristics.Teacher can record their
            findings on the white board ( tick or colour
            the appropriate box).</li>
        <li>Cut a watermelon and ask questions that lead the children to compare the
            similarities and differences between the inside and outside of the watermelon.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c5.png') }}" class="w-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Let each group take out a mandarin orange from the basket.
            Encourage the children to observe the outside of a orange
            and talk about its characteristics. Teacher can record
            their findings on the white board ( tick or colour the
            appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c6.png') }}" class="w-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Help each group cut the mandarin orange. Let children
            observe the inside of the fruit and talk about the characteristics.
            Teacher can record their findings on the white board
            ( tick or colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c6.png') }}" class="w-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Let each group take out a banana from the basket.
            Encourage the children to observe the outside of
            a banana and talk about its characteristics.
            Teacher can record their findings on the white
            board ( tick or colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c7.png') }}" class="w-[25vw] h-[17vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Let each group take out a banana from the basket.
            Encourage the children to observe the outside of
            a banana and talk about its characteristics.
            Teacher can record their findings on the white
            board ( tick or colour the appropriate box).</li>
    </ol>
    <div class="grid grid-cols-2 gap-4">
        <img src="{{ asset('assets/images/micet/k1/fruits/class6/c7.png') }}" class="w-[25vw] h-[17vw]" />
        <img src="{{ asset('assets/images/micet/k1/fruits/class6/c8.png') }}" class="w-[25vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="11">
        <li>Let each group take out a grape from the basket.
            Encourage the children to observe the outside of
            a grape and talk about its characteristics. Teacher
            can record their findings on the white board ( tick
            or colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c9.png') }}" class="w-[25vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="12">
        <li>Help each group cut the grape. Let children observe
            the inside of the fruit and talk about the characteristics.
            Teacher can record their findings on the white board
            ( tick or colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c9.png') }}" class="w-[25vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="13">
        <li>Let each group take out a star fruit from the basket.
            Encourage the children toobserve the outside of a star
            fruit and talk about its characteristics. Teacher can
            record their findings on the white board ( tick or colour
            the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c10.png') }}" class="w-[25vw] h-[15vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="14">
        <li>Help each group cut the star fruit. Let children
            observe the inside of the fruit and talk about
            the characteristics. Teacher can record their
            findings on the white board ( tick or colour the
            appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c11.png') }}" class="w-[25vw] h-[15vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="15">
        <li>Let each group take out a peach from the basket.
            Encourage the children to observe the outside of
            a peach and talk about its characteristics. Teacher
            can record their findings on the white board ( tick
            or colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c12.png') }}" class="w-[25vw] h-[15vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="16">
        <li>Help each group cut the peach. Let children
            observe the inside of the fruit and talk
            about the characteristics. Teacher can record
            their findings on the white board ( tick or
            colour the appropriate box).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c12.png') }}" class="w-[25vw] h-[15vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="17">
        <li>Click on the picture below to open the Software Magnetic Board.
            Let the children, complete the big chart on the screen based on
            what they have observed. Facilitate the discussion in case there
            are differences in opinion (for example whether apple skin needs
            to be peeled or not before eating the apple).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class6/c13.png') }}" class="w-[25vw] h-[15vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="18">
        <li>Encourage children to discuss the similarities and differences seen in the fruits.
            (for example the similarity between mandarin orange and pineapple is that both
            have skins that need to be peeled before eating . The difference between apples
            and pineapples is that the skin of an apple is smooth whereas the skin of a pineapple
            is rough.)</li>
    </ol>
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="18">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 28 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul">
            <li>Invite the children to study the chart and take
                turns to find similarities or differences among
                the fruits.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul">
            <li>Able to describe the different characteristics of some fruits.</li>
            <li>Based on their observations, able to tell the similarities and differences
                among the different fruits.</li>
        </ul>
    </div>
</div>



{{-- panel 19 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Fruit Daily</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Encourage the children to observe and discuss the
                characteristics of the seeds of those fruits .</li>
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