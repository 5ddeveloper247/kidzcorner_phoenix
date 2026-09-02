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
            font-size: 2.3vw;
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
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>To identify a square.</li>
            <li>To confirm the characteristic of a square by using a rope to
                measure each of its sides.</li>
            <li>To form a square with ice-cream sticks.</li>
            <li>To find objects shaped like squares in the classroom.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-decimal panel-ul">
                <li>Thematic Activity Book</li>
                <li>A square shaped block</li>
                <li>A rope</li>
                <li>4 ice-cream sticks per child</li>
                <li>White glue</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Lesson Development</h3>

            <ul class="list-decimal panel-ul w-[50vw]">
                <li>Ask children: "What is this?" "What shape is it?" (square)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c1.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Display the square shaped block, ask children: "Does it look like the window
                of little mouse's watermelon house?" "Does it look like the shape below?"
                "What shape is it?" (square)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/square.png') }}" class="h-[19vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have children touch the sides of the square shaped block and talk about the
                characteristic of a square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/square.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have children touch the sides of the square shaped block and talk about the
                characteristic of a square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have children touch the sides of the square shaped block and talk about the
                characteristic of a square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have children touch the sides of the square shaped block and talk about the
                characteristic of a square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have children touch the sides of the square shaped block and talk about the
                characteristic of a square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have children touch the sides of the square shaped block and talk about the
                characteristic of a square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Have children observe how the teacher uses a rope to measure one side of a
                square, then cuts the rope according to the length of the square. Have 2 or 3
                children the use the rope to measure each side of the square, while the other
                children observe them. Guide children in concluding the characteristic of a
                square: It has 4 equal sides.</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Display an ice-cream stick, ask children: "What is this?"</li>
            <li>Tell children that we can use 4 ice-cream sticks of the same length to form a
                square. Stack up 4 ice-cream sticks to proof that they are of the same length,
                then demonstrate how to use them to form a square.</li>
            <li>Distribute 4 ice-cream sticks to each child. Get each child to stack up the 4
                ice-cream sticks to confirm that they are of the same length.
                [Note: Teacher moves around the classroom, guiding and assisting each
                child.]</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "Are these squares?" (Yes, squares of different sizes.)</li>
            <li>Let children know that there are many objects shaped like squares in our
                surroundings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[18vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">square</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the square. Click on the picture to see the square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c3.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">biscuits</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the square. Click on the picture to see the square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c4.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">biscuits</h5>
    </div>



    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the square. Click on the picture to see the square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c5.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">post-it note</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the square. Click on the picture to see the square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c6.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">blocks</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the square. Click on the picture to see the square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c7.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">dice</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the square. Click on the picture to see the square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c8.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">gift box</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the square. Click on the picture to see the square.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c9.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">plate</h5>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Have children find objects shaped like squares in the classroom.</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Have children use 4 ice-cream sticks and white glue to form a square in the
                Thematic Activity Book. (Teacher to assist if help is needed.)</li>
        </ol>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children display their squares.</li>
                <li>Get children to talk about the characteristic of a square: It
                    has 4 equal sides.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to find at least one object shaped like a square in the classroom.</li>
                <li>Able to form a square with the ice-cream sticks.</li>
            </ul>
        </div>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Square</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Get children to find an object shaped like a square from home, then
                    bring and show it in class.</li>
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
            const returnURL = "{{ url('/micet/n1/shapes/index') }}";
            const doneURL = "{{ url('/micet/n1/shapes/index') }}";

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
