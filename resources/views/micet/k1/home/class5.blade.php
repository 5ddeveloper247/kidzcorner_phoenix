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
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/k1/home/class5/c1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/k1/home/class5/c2.png') }}" class="h-[8vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Understand the functions of different parts of a house</li>
        <li>Learn to fill in a survey form</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Print out the survey form in the lesson development (one <br>
                form for each child)</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Ask children to discuss the similarities and differences among the different <br>
                types of houses (semi-detached house, bungalow, condominium, etc.).</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Ask children to look for similarities and differences among these houses. For <br>
            example, all of these houses have doors, windows, walls and ceilings; however, <br>
            their shape, colour and materials are different.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c3.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Let children discuss why there are doors, windows, ceilings and walls in a house.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c4.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>We can enter and exit a house if there is a door in the house.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c5.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>We can breathe in the fresh air and feel the warmth of the sun if there are windows in the house.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c6.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>We are sheltered and protected from direct sunlight by the walls and ceilings of the house.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c7.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>We are sheltered and protected from the rains and the wind by the walls and ceilings of the house.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c8.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Ask children: What materials are used to make the walls of this bungalow?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c9.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Let children discuss: Is there any uniqueness in the door?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c10.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Let children discuss: Is there any uniqueness in the windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c11.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Let children discuss: What materials are used to make the walls of this bungalow?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c12.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Let children discuss: Is there any uniqueness in the door and windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c13.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Let children discuss: What materials are used to make the walls of this <br>
            bungalow? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c14.png') }}" class="w-[20vw] h-[20vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Let children discuss: What materials are used to make the walls of this bungalow? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c15.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Let children discuss: What materials are used to make the walls of these terrace houses? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c16.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>Let children discuss: What materials are used to make the walls of these terrace houses? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c17.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Let children discuss: What materials are used to make the walls of these terrace houses? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c18.png') }}" class="w-[20vw] h-[20vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="18">
        <li>Let children discuss: What materials are used to make the walls of this condominium? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c19.png') }}" class="w-[20vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="19">
        <li>Let children discuss: What materials are used to make the walls of this condominium? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <div class="flex gap-2">
        <img src="{{ asset('assets/images/micet/k1/home/class5/c20.png') }}" class="w-[15vw] h-[20vw]" />
        <img src="{{ asset('assets/images/micet/k1/home/class5/c21.png') }}" class="w-[15vw] h-[20vw]" />
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="20">
        <li>Let children discuss: What materials are used to make the walls of this condominium? Is there any uniqueness in the doors and windows?</li>
    </ol>
    <div class="flex gap-2">
        <img src="{{ asset('assets/images/micet/k1/home/class5/c22.png') }}" class="w-[15vw] h-[20vw]" />
        <img src="{{ asset('assets/images/micet/k1/home/class5/c23.png') }}" class="w-[15vw] h-[20vw]" />
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="21">
        <li>Distribute the survey forms (or use Thematic Activity Book). Explain the content of the form to the children.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/home/class5/c24.png') }}" class="w-[20vw] h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="22">
        <li>Let children look at their houses to complete the form (draw and write).</li>
        <li>After that, guide children to find out whose house has the most/least numbers of doors and windows.
            If time permits, guide children to interpret more information from the survey forms.
            For example: Which houses have the same shapes/colours/pattern of doors/windows/roofs/materials used?</li>
    </ol>
</div>



{{-- panel 23 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Different Parts of a House</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite children to talk about the names and functions of
                different parts of the house.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to state the functions of different parts of the house.</li>
            <li>Able to complete the survey form.</li>
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
        const returnURL = "{{ url('/micet/k1/home/index') }}";
        const doneURL = "{{ url('/micet/k1/home/index') }}";

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