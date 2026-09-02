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
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
    </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>To identify a thermometer as a temperature measuring instrument.</li>
            <li>To make a simple thermometer.</li>
            <li>To understand some basic knowledge about temperature.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[35vw]">
                <li>Thematic Activity Book</li>
                <li>Commonly used thermometers.</li>
                <li>Ice cubes, warm water.</li>
                <li>Thin clear hard plastic tubes about 30 cm long (the smaller the inner diameter the better).</li>
                <li>Small bottles with long neck or narrow opening (e.g. medicine bottle).</li>
                <li>Rubber stoppers with a hole.</li>
                <li>Red dye.</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Display the thermometer for measuring air temperature. Have the children name it and describe its uses.
                    Guide the children to understand that we can use it to measure daily temperature. Demonstrate how to
                    read the readings on the thermometer.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c1.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Have the children refer to classroom activity 4 of the Thematic Activity Book. Have them take the
                temperature readings using a thermometer and record them on the table. Ask the children what is the normal
                temperature at noon and at night, during summer and winter.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c2.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Display the thermometer for measuring body temperature. Have the children name it and describe its uses.
                Invite one or two of the children to demonstrate how to measure body temperature correctly and record their
                readings. Guide the children in understanding the normal human temperature is around 36.8 degree Celsius.
                The temperature will rise when a person has a fever thus doctors use thermometers to check if patients have
                fever.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c3.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Have the children observe and record the readings of body temperature.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Measure the temperature of ice cubes using a thermometer. Have the children observe and record the readings.
                Ask about the temperature of the ice cubes. Guide the children to understand that zero degree is the
                freezing temperature that turns water into ice.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c2.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Measure the temperature of warm water using a thermometer. Have the children observe and record the
                readings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Measure the temperature of boiling water (adults assistance will be needed). Have the children observe and
                record the readings. Guide the children to understand that the temperature at which water boils is 100
                degrees Celsius. Warn the children not to touch the boiling water and explain the dangers of scalding.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c2.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Inform the children that they are going to make a thermometer today.</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Organise the children in groups of five. Have the children make the thermometer following the procedures
                given (along with the teacher's guidance).
                <ul class="list-disc">
                    <li>Fill the bottle with warm water and add a few drops of red dye.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c4.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Organise the children in groups of five. Have the children make the thermometer following the procedures
                given (along with the teacher's guidance).
                <ul class="list-disc">
                    <li>Next, push the plastic tube through the rubber stopper. Squeeze the rubber stopper tightly into the
                        mouth of the bottle. Water in the bottle will rise up into the plastic tube. Adjust until the water
                        level is about half way up the plastic tube.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c4.png') }}" class="h-[16vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Organise the children in groups of five. Have the children make the thermometer following the procedures
                given (along with the teacher's guidance).
                <ul class="list-disc">
                    <li>Cut out the thermometer card from activity 4 of the Thematic Activity Book. Cut slits along the
                        fours dotted lines. Slip the card onto the plastic tube and tape it onto the tube.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c4.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>About an hour later, the temperature of the water in the bottle will drop to room temperature. Take the
                readings on the commercial thermometer, mark and write on the card at the water level of the tube.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Make A Thermometer</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Over the next few days, take the readings on the commercial thermometer. If the room temperature changes,
                mark and write on the card at the water level of the tube. When there are enough markings on the card, the
                thermometer is now ready for use.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class4/c5.png') }}" class="w-[27vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children explain the uses of thermometers for measuring body and air temperature.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name the basic uses of thermometers.</li>
                <li>Able to read and record temperature readings accurately from a thermometer.</li>
                <li>Able to make a thermometer with group mates.</li>
            </ul>
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children compare the day and night temperatures daily using the commercial thermometer and the
                    thermometer that they have made.</li>
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
            const returnURL = "{{ url('/micet/k2/weather/index') }}";
            const doneURL = "{{ url('/micet/k2/weather/index') }}";

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
