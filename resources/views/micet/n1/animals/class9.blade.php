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
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>
        <img src="{{ asset('assets/images/micet/n1/colours/c9.1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Identify whether an animal has legs, fins or wings</li>
            <li>Record findings based on observation</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Print the tables as shown in the lesson development, one
                set for each child</li>
        </ul>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell children that today they are going to make a record of animals based
                    on their observations.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Distribute the tables (or use the Thematic Activity Book). Have children look
                at the tables. Tell them that they are going to observe each animal in the
                table, identify it and then record whether the animal has legs, fins or</li>
        </ol>

        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/animals/class9/c1.1.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class9/c1.2.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c1.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">mouse</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c2.png') }}" class="h-[15vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">camel</h5>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c2.png') }}" class="h-[15vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">camel</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c3.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">spider</h5>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c4.png') }}" class="w-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">kangaroo</h5>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c5.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">fish</h5>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c6.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">gold fish</h5>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c7.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">shark</h5>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c8.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">whale</h5>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c9.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">pigeon</h5>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c10.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">pigeon</h5>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c11.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">bee</h5>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Does it have legs, fins or wings?" Have
                children look carefully at the animal, then colour the correct boxes in the table.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/animals/class9/c12.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">bat</h5>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Display the record of animals, have children check whether their answers
                are correct.</li>
        </ol>

        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/animals/class9/c13.png') }}" class="h-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class9/c14.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Guide children to make conclusions based on their final record of the
                animals. E.g. the mouse has legs, it can move on land; the fish has fins, it
                can move in the water; the pigeon has legs and wings, it can move on
                land and in the air.</li>
        </ol>
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children look at the record of animals, then list the animals according
                    to their groups, those with legs, fins and wings.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to identify whether an animal has legs, fins or wings.</li>
                <li>Able to record their findings based on observation.</li>
            </ul>
        </div>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Record of Animals</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>If possible, replace the animals in the table. Have children observe
                    the other animals and record their observations.</li>
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
            const returnURL = "{{ url('/micet/n1/animals/index') }}";
            const doneURL = "{{ url('/micet/n1/animals/index') }}";

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
