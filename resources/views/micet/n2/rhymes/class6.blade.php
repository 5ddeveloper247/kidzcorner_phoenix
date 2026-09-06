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
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Learn to sing the song "Twinkle, Twinkle, Little Star"</li>
            <li>Learn to sing and move to the rhythm of the song</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[40vw]">
                <li>Thematic Activity Book</li>
                <li>Create some simple movements to accompany the song
                    (e.g. rotating wrists, shaking hands, turning in a circle,
                    raising one's head, finger pointing as if counting the stars,
                    etc.)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Click to play the animation. Let the children listen to the song "Twinkle, Twinkle,
                    Little Star". Discuss what the song is about.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/rhymes/class6/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Ask children: What do stars look like? When do you see stars?</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Guide the children to understand that stars can only be seen in the sky at
                night.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/rhymes/class6/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Read out and explain the lyrics to the children. Invite the children to recite the
                lyrics together.</li>
        </ol>
        <h4 class="text-white text-[2.2vw] text-start">
            Twinkle, twinkle, little star, <br>
            How I wonder what you are. <br>
            Up above the world so high, <br>
            Like a diamond in the sky. <br>
            Twinkle, twinkle, little star, <br>
            How I wonder what you are!</h4>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Ask children: What are these? Do they look like the stars mentioned in the
                song?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/rhymes/class6/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>When children are familiar with the lyrics, let them learn to sing the song.</li>
        </ol>
        <div class="flex items-start gap-[2vw] mt-[2vw]">
            <button id="soundButton" class="w-[3.5vw]" data-slide-audio="{{ asset('assets/audio/micet/n2/twinkle.mp3') }}">
                <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="w-full h-auto" alt="Sound" />
            </button>

            <h4 class="text-white text-[2.3vw] text-start">
                Twinkle, twinkle, little star, <br>
                How I wonder what you are. <br>
                Up above the world so high, <br>
                Like a diamond in the sky. <br>
                Twinkle, twinkle, little star, <br>
                How I wonder what you are!
            </h4>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Demonstrate how to sing and move to the rhythm of the song with the simple
                movements planned beforehand.</li>
        </ol>
        <div class="flex items-start gap-[2vw] mt-[2vw]">
            <button id="soundButton" class="w-[3.5vw]" data-slide-audio="{{ asset('assets/audio/micet/n2/twinkle.mp3') }}">
                <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="w-full h-auto" alt="Sound" />
            </button>

            <h4 class="text-white text-[2.3vw] text-start">
                Twinkle, twinkle, little star, <br>
                How I wonder what you are. <br>
                Up above the world so high, <br>
                Like a diamond in the sky. <br>
                Twinkle, twinkle, little star, <br>
                How I wonder what you are!
            </h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>Guide children to sing the song and move to the rhythm of the song.</li>
        </ol>
        <div class="flex items-start gap-[2vw] mt-[2vw]">
            <button id="soundButton" class="w-[3.5vw]" data-slide-audio="{{ asset('assets/audio/micet/n2/twinkle.mp3') }}">
                <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="w-full h-auto" alt="Sound" />
            </button>

            <h4 class="text-white text-[2.3vw] text-start">
                Twinkle, twinkle, little star, <br>
                How I wonder what you are. <br>
                Up above the world so high, <br>
                Like a diamond in the sky. <br>
                Twinkle, twinkle, little star, <br>
                How I wonder what you are!
            </h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul" start="9">
            <li>Encourage children to create new movements for the song. Let them perform
                the song with new movements.</li>
        </ol>
        <div class="flex items-start gap-[2vw] mt-[2vw]">
            <button id="soundButton" class="w-[3.5vw]" data-slide-audio="{{ asset('assets/audio/micet/n2/twinkle.mp3') }}">
                <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" class="w-full h-auto" alt="Sound" />
            </button>

            <h4 class="text-white text-[2.3vw] text-start">
                Twinkle, twinkle, little star, <br>
                How I wonder what you are. <br>
                Up above the world so high, <br>
                Like a diamond in the sky. <br>
                Twinkle, twinkle, little star, <br>
                How I wonder what you are!
            </h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[40vw]">
                <li>Invite some children to perform the song with the new
                    movements.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[40vw]">
                <li>Able to sing the song "Twinkle Twinkle Little Star".</li>
                <li>Able to sing and move to the rhythm of the song.</li>
            </ul>
        </div>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Twinkle, Twinkle, Little Star</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[40vw]">
                <li>Provide the song in the activity corner for the children to try
                    new movements and perform the song.</li>
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
            const returnURL = "{{ url('/micet/n2/rhymes/index') }}";
            const doneURL = "{{ url('/micet/n2/rhymes/index') }}";

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
