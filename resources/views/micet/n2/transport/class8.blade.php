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
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>To develop music appreciation.</li>
            <li>To sing the song "The wheels on the bus".</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Have the children talk about the features of a bus, such as: a long body, many
                    windows, a front door and a back door, many seats, etc.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/transport/class8/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have the children talk about the features of a bus, such as: a long body, many
                windows, a front door and a back door, many seats, etc. </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n2/transport/class8/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have the children talk about the features of a bus, such as: a long body, many
                windows, a front door and a back door, many seats, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class8/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have the children talk about the features of a bus, such as: a long body, many
                windows, a front door and a back door, many seats, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class8/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Have the children talk about the features of a bus, such as: a long body, many
                windows, a front door and a back door, many seats, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/transport/class8/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Let children listen to the song "The wheels on the bus". Have the children sing
                along with their teacher.</li>
            <li>Encourage the children to add actions as they sing the song.</li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            The wheels on the bus go <br>
            Round and round, <br>
            Round and round, <br>
            Round and round. <br>
            The wheels on the bus go <br>
            Round and round, <br>
            All around the town.
        </h4>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask the children to talk about what people do while travelling on a bus.</li>
            <li><span class="flex items-end">Let children listen to the song again and sing along.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </span></li>
            <li>Encourage the children to add actions as they sing the song.</li>
        </ol>
        <div class="flex gap-[2vw] items-start">

            <h4 class="text-white text-[2vw] text-start">
                The babies on the bus <br>
                Bounce up and down, <br>
                Up and down, <br>
                Up and down. <br>
                The babies on the bus <br>
                Bounce up and down, <br>
                All around the town.
            </h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask the children to talk about what people do while travelling on a bus.</li>
            <li><span class="flex items-end">Let children listen to the song again and sing along.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </span></li>
            <li>Encourage the children to add actions as they sing the song.</li>
        </ol>
        <div class="flex gap-[2vw] items-start">

            <h4 class="text-white text-[2vw] text-start">
                The children on the bus go <br>
                Hee, hee, hee, <br>
                Hee, hee, hee, <br>
                Hee, hee, hee. <br>
                The children on the bus go <br>
                Hee, hee, hee, <br>
                All around the town.
            </h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask the children to talk about what people do while travelling on a bus.</li>
            <li><span class="flex items-end">Let children listen to the song again and sing along.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </span></li>
            <li>Encourage the children to add actions as they sing the song.</li>
        </ol>
        <div class="flex gap-[2vw] items-start">

            <h4 class="text-white text-[2vw] text-start">
                The mummies on the bus go <br>
                Chitter, chatter, chatter, <br>
                Chitter, chatter, chatter, <br>
                Chitter, chatter, chatter. <br>
                The mummies on the bus go <br>
                Chitter, chatter, chatter, <br>
                All around the town.
            </h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask the children to talk about what people do while travelling on a bus.</li>
            <li><span class="flex items-end">Let children listen to the song again and sing along.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </span></li>
            <li>Encourage the children to add actions as they sing the song.</li>
        </ol>
        <div class="flex gap-[2vw] items-start">

            <h4 class="text-white text-[2vw] text-start">
                The daddies on the bus go <br>
                Nod, nod, nod, <br>
                Nod, nod, nod, <br>
                Nod, nod, nod. <br>
                The daddies on the bus go <br>
                Nod, nod, nod, <br>
                All around the town.
            </h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Encourage the children to imagine travelling on a public bus with the family.
                Act out different scenarios by changing the lyrics of the song.</li>
            <li>Encourage the children to add actions wherever possible.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite a few of the children to perform the song.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to sing "The wheels on the bus".</li>
                <li>Able to perform simple actions according to the lyrics of a song.</li>
            </ul>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: The wheels on the bus</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Incorporate other vehicles in the lyrics by replacing the
                    words accordingly.</li>
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
