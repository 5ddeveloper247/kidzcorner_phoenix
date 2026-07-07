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
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>To be aware of the different types of transports and their uses</li>
            <li>To identify the similarities and differences between the
                different types of transports.</li>
            <li>To describe observations using complete sentences.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>Letter to parents (next page)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <img src="{{ asset('assets/images/micet/n2/transport/class4/letter.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
            </ol>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c2.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c3.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c4.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c5.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c6.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c7.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c8.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c9.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c10.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c11.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c12.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c13.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c14.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c15.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c16.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c17.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c18.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c19.png') }}" class="w-[25vw]" />
    </div>

    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c20.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c21.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c22.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c23.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c24.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c25.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c26.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 31 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c27.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 32 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c28.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 33 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c29.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c30.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 35 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c31.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 36 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c32.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c33.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 38 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c34.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 39 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have children identify this vehicle, such as its name, use and characteristics.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class4/c35.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 40- --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Invite children to bring their toy vehicles for Show and Tell. Get them to take
                turns to name the toy they have brought from home, describe its purpose and
                characteristics.</li>
            <li>Get two children with different toy vehicles to share with the others what they
                brought. Ask the children to look at the two toys closely and note the
                similarities and differences.</li>
            <li>Choose another set of different toy vehicles and repeat the above activity.</li>
        </ol>

    </div>


    {{-- panel 41 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Transportation</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Get a few children to take turns to describe their toy vehicle
                    using sentences, such as "This is a truck. It has four wheels
                    and can carry many things.".</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name various transport vehicles.</li>
                <li>Able to use complete sentences to describe different
                    vehicles and their special features.</li>
                <li>Able to identify similarities and differences among vehicles.</li>
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
            const returnURL = "{{ url('/micet/n2/transport/index') }}";
            const doneURL = "{{ url('/micet/n2/transport/index') }}";

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