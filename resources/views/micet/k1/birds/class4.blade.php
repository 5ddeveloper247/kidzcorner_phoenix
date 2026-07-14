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
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>To learn to sing the song "Beautiful butterflies".</li>
            <li>To recognise and state the characteristics of a butterfly, and
                imitate the way it flies.</li>
            <li>To recognise and state the characteristics of a dragonfly,
                and imitate the way it catches its food.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Have the children recall the story. Ask them to identify who Candy was
                    chasing when she fell into the river. (a butterfly)</li>
                <li>Ask the children if they have ever seen a butterfly and have them describe
                    what a butterfly looks like.</li>
            </ol>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have the children observe the physical characteristics of the butterfly and
                describe it. Explain to the children that a butterfly has 4 wings (or 2 pairs of
                wings).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit1/class4/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have the children observe the physical characteristics of the butterfly and
                describe it. Explain to the children that a butterfly has 4 wings (or 2 pairs of
                wings).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit1/class4/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have the children observe the physical characteristics of the butterfly and
                describe it. Explain to the children that a butterfly has 4 wings (or 2 pairs of
                wings).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit1/class4/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have the children observe the physical characteristics of the butterfly and
                describe it. Explain to the children that a butterfly has 4 wings (or 2 pairs of
                wings).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit1/class4/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have the children observe the physical characteristics of the butterfly and
                describe it. Explain to the children that a butterfly has 4 wings (or 2 pairs of
                wings).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit1/class4/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Click on the video. Have the children observe the butterflies to understand the
                meaning of "gathering pollen", "gathering nectar". Explain to the children
                that the nectar is the primary food for butterflies.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/habit1/class4/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Click on the video. Have the children observe the butterflies to understand the
                meaning of "gathering pollen", "gathering nectar". Explain to the children
                that the nectar is the primary food for butterflies.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/habit1/class4/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>Play the song "Beautiful Butterflies". Have the children describe what the
                <span class="flex items-end">butterflies in the song look like.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <h4 class="text-white text-[2vw] text-start mt-[4vw]">
            Beautiful butterflies, <br>
            With bright and colourful pairs of wings. <br>
            Gather pollen, gather nectar, <br>
            Flutter, flutter never cease.
        </h4>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul" start="6">
            <li>Have the children repeat the lyrics after the teacher and sing the song when
                <span class="flex items-end"> they are familiar with the words. <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <h4 class="text-white text-[2vw] text-start mt-[4vw]">
            Beautiful butterflies, <br>
            With bright and colourful pairs of wings. <br>
            Gather pollen, gather nectar, <br>
            Flutter, flutter never cease.
        </h4>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul" start="7">
            <li> Have the children sing the song and dance like the butterflies when gathering
                <span class="flex items-end">pollen and gathering nectar among flowers.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <h4 class="text-white text-[2vw] text-start mt-[4vw]">
            Beautiful butterflies, <br>
            With bright and colourful pairs of wings. <br>
            Gather pollen, gather nectar, <br>
            Flutter, flutter never cease.
        </h4>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li> Display the picture of a dragonfly. Have the children name it and describe
                <span class="flex items-end"> what its characteristics are.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit1/class4/c6.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul" start="9">
            <li> Ask the children how many wings a dragonfly has. Explain to them that a
                dragonfly has 4 wings (2 pairs of wings). A dragonfly feeds on mainly
                <span class="flex items-end">mosquitoes and some other insects.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit1/class4/c6.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>
                <span class="flex items-end">
                    Display the lyrics, teach the children to sing the song "Little Dragonflies".
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <h4 class="text-white text-[2vw] text-start mt-[4vw]">
            Dragonflies with big eyes, <br>
            Two pairs of wings light in flight. <br>
            Flying east, flying west, <br>
            Catching mosquitoes and flies.
        </h4>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul" start="9">
            <li> Have the children sing the song and dance like dragonflies when catching
                <span class="flex items-end"> mosquitoes and flies.
                    <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <h4 class="text-white text-[2vw] text-start mt-[4vw]">
            Dragonflies with big eyes, <br>
            Two pairs of wings light in flight. <br>
            Flying east, flying west, <br>
            Catching mosquitoes and flies.
        </h4>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Beautiful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
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
                <li>Have the children group themselves into two groups,
                    namely, a butterfly group and a dragonfly group to sing and
                    dance according to the songs.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to sing the song "Beautiful Butterflies".</li>
                <li>Able to identify some characteristics of butterflies and
                    imitate them flying.</li>
                <li>Able to identify some characteristics of dragonflies and
                    imitate them hunting for food.</li>
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
            const returnURL = "{{ url('/micet/n2/habit1/index') }}";
            const doneURL = "{{ url('/micet/n2/habit1/index') }}";

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
