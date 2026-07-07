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
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/b1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/b2.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/b3.png') }}" class="h-[8vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Identify four basic colours - red, yellow, blue, green</li>
            <li>Identify fruits according to the four basic colours</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>
        <div class="text-center space-y-[2vw]">
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>If possible, prepare the fruits shown in the activity for
                    children to use their senses to explore</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: “””What fruit is this?”” “”What colour is this fruit?””</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/colours/class4/c1.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Guide children to say that these are apples and their outer skin is red. Have
                children point to the colour red.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw]">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c2.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Guide children to say that these are apples and their outer skin is red. Have
                children point to the colour red.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c2.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/tick.png') }}"
                class="w-[4vw] absolute right-[15%] top-[8%]" />
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Guide children to say that these are apples and their outer skin is red. Have
                children point to the colour red.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw]">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c3.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Guide children to say that these are apples and their outer skin is red. Have
                children point to the colour red.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c3.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/tick.png') }}"
                class="w-[4vw] absolute right-[15%] bottom-[8%]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask children: "After cutting the apple, will the flesh of the apple be red or
                green?" (No, it will not be red or green)</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/colours/class4/c4.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask children: “””What fruit is this?”” “”What colour is this fruit?””</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/colours/class4/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Guide children to say that these are bananas and their outer skin is yellow
                when they are ripe. Have children point to the colour yellow.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c6.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Guide children to say that these are bananas and their outer skin is yellow
                when they are ripe. Have children point to the colour yellow.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c6.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/tick.png') }}"
                class="w-[4vw] absolute right-[15%] top-[25%]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children: "After peeling off the skin, will the flesh of the banana be
                yellow?" (No)</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/colours/class4/c7.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask children: “””What fruit is this?”” “”What colour is this fruit?””</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/colours/class4/c8.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Guide children to say that these are watermelon and their outer skin is green.
                Have children point to the colour green.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c9.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Guide children to say that these are watermelon and their outer skin is green.
                Have children point to the colour green.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c9.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/tick.png') }}"
                class="w-[4vw] absolute right-[15%] bottom-[8%]" />
        </div>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask children: "After cutting the watermelon, will the flesh of the watermelon
                be green?" (No) "What colour is the watermelon flesh?" (red or yellow) </li>
        </ol>

        <div class="flex items-center justify-between w-[40vw]">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c10.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c11.png') }}" class="w-[25vw]" />
        </div>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children: “””What fruit is this?”” “”What colour is this fruit?””</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/colours/class4/c12.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Guide children to say that these are grapes and their outer skin is red. Have
                children point to the colour red.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c13.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Guide children to say that these are watermelon and their outer skin is red.
                Have children point to the colour red.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c13.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/tick.png') }}"
                class="w-[4vw] absolute right-[15%] top-[8%]" />
        </div>
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Guide children to say that these are grapes and their outer skin is green. Have
                children point to the colour green.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c14.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Guide children to say that these are grapes and their outer skin is green. Have
                children point to the colour green.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c14.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/tick.png') }}"
                class="w-[4vw] absolute right-[15%] bottom-[8%]" />
        </div>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask children: "After peeling off the skin, will the flesh of the grape be red or
                green?" (No, it will not be red or green)</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/colours/class4/c15.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Ask children: “””What fruit is this?”” “”What colour is this fruit?””</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/colours/class4/c16.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Guide children to say that these are blueberries and their outer skin is blue.
                Have children point to the colour blue.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c17.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Guide children to say that these are blueberries and their outer skin is blue.
                Have children point to the colour blue.</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class4/c17.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/cbar.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class4/tick.png') }}"
                class="w-[4vw] absolute right-[15%] bottom-[20%]" />
        </div>
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Colours of Fruits</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children list some fruits with red, yellow, blue and green outer skin.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to identify the colours of some fruits.</li>
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
            const returnURL = "{{ url('/micet/n1/colours/index') }}";
            const doneURL = "{{ url('/micet/n1/colours/index') }}";

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
