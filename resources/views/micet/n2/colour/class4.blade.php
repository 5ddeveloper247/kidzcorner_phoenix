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
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c2.png') }}" class="h-[7.5vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Observe surrounding environment through coloured lenses</li>
        <li>Have an exposure to colour mixing concept</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Thematic Activity Book
                Cardboard sheets to make lens frames and spectacle frames<br>
                (replaceable lens frames)</li>
            <li>Coloured cellophane sheets ( seven rainbow colours)</li>
            <li>Paste coloured cellophane on cardboard frames to make<br>
                coloured lenses</li>
            <li>Each group to have a spectacle and a set of coloured<br>
                lenses( seven rainbow colours)</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Guide children to recall what the fairies did in the story" Little Rainbow Fairies".
                Ask them if they would like everything around them to be of the same colour.
                Tell them that they are going to observe things around them through coloured
                lenses. Ask them to think if they like everything to be of the same colour when
                they observe the environment through coloured lenses.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Click on the video to let the children see how colours of the environment
            change when they see through different coloured lenses.</li>
    </ol>

    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c3.png') }}" class="w-[20vw]" />
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Let children observe the colour changes of the environment when they look
            through different coloured lenses (series of photos).</li>
    </ol>

    <img src="{{ asset('assets/images/micet/n2/colour/class4/c4.png') }}" class="h-[20vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Let children observe and talk about the colour changes of the environment
            through different coloured lenses.</li>
    </ol>
    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c4.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c5.png') }}" class="h-[17vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Let children observe and talk about the colour changes of the environment
            through different coloured lenses.</li>
    </ol>
    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c4.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c6.png') }}" class="h-[17vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Let children observe and talk about the colour changes of the environment
            through different coloured lenses.</li>
    </ol>
    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c4.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c7.png') }}" class="h-[17vw]" />
    </div>
</div>

{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Let children observe and talk about the colour changes of the environment
            through different coloured lenses.</li>
    </ol>
    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c4.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c8.png') }}" class="h-[17vw]" />
    </div>
</div>

{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Let children observe and talk about the colour changes of the environment
            through different coloured lenses.</li>
    </ol>
    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c4.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c9.png') }}" class="h-[17vw]" />
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Click on the video to let the children see how colours of the environment
            change when they see through different coloured lenses.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n2/colour/class4/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Let children observe the colour changes of the environment when they look
            through different coloured lenses (series of photos).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/colour/class4/c11.png') }}" class="w-[20vw] h-[20vw]" />

</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Let children observe the colour changes of the environment when they look
            through different coloured lenses.</li>
    </ol>

    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c11.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c12.png') }}" class="h-[17vw]" />
    </div>

</div>


{{-- panel 14 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Let children observe the colour changes of the environment when they look
            through different coloured lenses.</li>
    </ol>

    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c11.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c13.png') }}" class="h-[17vw]" />
    </div>

</div>


{{-- panel 15 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Let children observe the colour changes of the environment when they look
            through different coloured lenses.</li>
    </ol>

    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c11.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c14.png') }}" class="h-[17vw]" />
    </div>

</div>


{{-- panel 16 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Let children observe the colour changes of the environment when they look
            through different coloured lenses.</li>
    </ol>

    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c11.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c15.png') }}" class="h-[17vw]" />
    </div>

</div>


{{-- panel 17 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="15">
        <li>Let children observe the colour changes of the environment when they look
            through different coloured lenses.</li>
    </ol>

    <div class="flex flex-flow">
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c11.png') }}" class="h-[17vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class4/c16.png') }}" class="h-[17vw]" />
    </div>

</div>



{{-- panel 18 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>Organise children into small groups and distribute a spectacle and a set of
            coloured lens to each group.</li>
        <li>Get children of each group to select the coloured lens named by the teacher.
            Let them place the lens in the spectacle frame and take turns to wear the
            spectacles and look at the surrounding environment. Encourage children to
            talk about the colour changes that they see.</li>
        <li>Let the children randomly select and put two different coloured lenses into the
            spectacle frames and look at their surroundings through both of them at the
            same time . Encourage children to talk about what they observe.</li>
    </ol>
</div>


{{-- panel 19 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="19">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 20 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Ask children : If the world were to be of one colour, what
                colour would you choose? Why?</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to talk about the colour changes of the environment
                through different coloured lenses.</li>
        </ul>
    </div>
</div>

{{-- panel 21 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Colour World</h1>
    <div class="text-start flex flex-col h-full">
        <h3 class="ptitle">Extension</h3>
        <ul class="list-disc panel-ul w-[45vw]">
            <li>Place the spectacles and coloured lenses in the activity
                corner and invite children to use them to explore the colour
                changes in different things around them (indoors and
                outdoors).</li>
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
        const returnURL = "{{ url('/micet/n2/colour/index') }}";
        const doneURL = "{{ url('/micet/n2/colour/index') }}";

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