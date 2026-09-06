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
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[35vw]">
            <li>Make connections between the shapes of objects and their shadows</li>
            <li>Identify the fruit based on its shadow</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <div>
            <h3 class="ptitle mt-[5vw]">Preparations</h3>

            <ul class="list-disc panel-ul w-[40vw]">
                <li>Thematic Activity Book</li>
                <li>A variety of fruits or fruits toys</li>
                <li>A table lamp ( Experiment beforehand to find out the best
                    settings of the lamp and the fruit so as to see a shadow clearly.)
                    A4 size plain paper</li>
                <li>Colour pencils or crayons</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Review with the children what happened when the scarecrow and his friends
                    were playing hide-and-seek. Ask children to explain how the scarecrow
                    managed to find his friends. Guide children to understand that by looking at
                    the shape of a shadow, we can know the actual shape of the object and
                    guess what the object is.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Let the children observe the shape of the shadow. Ask them to guess the fruit.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c1.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Ask the children: "Did you guess the fruit right?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c2.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Let the children observe the shape of the shadow. Ask them to guess the fruit.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c3.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Ask the children: "Did you guess the fruit right?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c4.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Let the children observe the shape of the shadow. Ask them to guess the fruit.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c5.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Ask the children: "Did you guess the fruit right?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c6.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Let the children observe the shape of the shadow. Ask them to guess the fruit.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c7.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Ask the children: "Did you guess the fruit right?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c8.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Let the children observe the shape of the shadow. Ask them to guess the fruit.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c9.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Ask the children: "Did you guess the fruit right?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c10.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Let the children observe the shape of the shadow. Ask them to guess the fruit.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c11.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Ask the children: "Did you guess the fruit right?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/fruits/class3/c12.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Use the table lamp to shine at different fruits one at a time and get the children
                to observe the shadows formed.</li>
            <li>Ask children to draw any fruit shadow based on their observations on a A4 size
                plain paper.</li>
        </ol>
    </div>

    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let each child display his/her drawing and let the other
                    children observe the shadow drawing and guess the actual
                    fruit.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name the fruits based on the shapes of their shadows.</li>
                <li>Able to draw a fruit shadow.</li>
            </ul>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Find and Colour</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children to draw the shadows of some other fruits and
                    take their shadow drawings home for their family members to
                    guess the fruits.</li>
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
            const returnURL = "{{ url('/micet/n2/fruits/index') }}";
            const doneURL = "{{ url('/micet/n2/fruits/index') }}";

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
