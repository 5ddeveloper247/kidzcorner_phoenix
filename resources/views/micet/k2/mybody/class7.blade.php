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
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/mybody/class7/c1.png') }}" class="h-[8vw]" />
        </div>
        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Understand that every person has unique fingerprints and no two persons have the same fingerprint</li>
            <li>Understand that, just like a fingerprint, each person is unique</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>One ink pad per group</li>
                <li>One magnifying glass per group</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>
        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell the "Crime scene" story (starting from the next slide) and let the children infer how the police
                    solved the case.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="panel-ul w-[45vw]">
            <li>One day, Tom returned home from school and discovered the rooms were in a mess.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="panel-ul w-[45vw]">
            <li>There must have been a burglary in the house. Tom immediately called the police.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c3.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="panel-ul w-[45vw]">
            <li>The police soon arrived at Tom's house.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c4.png') }}" class="h-[20vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="panel-ul w-[45vw]">
            <li>The police used a magnifying glass to look through things that the burglar had touched.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c5.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="panel-ul w-[45vw]">
            <li>Finally, they took away a piece of paper.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c6.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="panel-ul w-[45vw]">
            <li>Soon, the police caught the burglar.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c7.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Do you know how the police managed to catch the burglar?</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Display a fingerprint. Ask the children what it is.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c8.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Click on the video to show the children how to print their thumbprints.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class7/v1.mp4') }}" type="video/mp4">
        </video>
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Then let the children print their left and right thumbprints on a drawing paper or in the Thematic Activity
                Book using the ink pad.</li>
        </ol>
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Distribute the magnifying glass and invite children to observe the shape of their thumbprints. For example:
                Loops: Lines start from one side of the finger pad, make a loop and end on the same side of the finger pad.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c9.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Distribute the magnifying glass and invite children to observe the shape of their thumbprints. For example:
                Arches: Lines start from one side of the finger pad, make an arch and end on the opposite side of the finger
                pad.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c10.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Distribute the magnifying glass and invite children to observe the shape of their thumbprints. For example:
                Whorls: Lines start at the side of the finger pad and spiral inward ending at the centre of the finger pad.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c11.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Distribute the magnifying glass and invite children to observe the shape of their thumbprints. For example:
                Accidental: This is made up of a combination of the other three patterns.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c12.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Invite the children to compare their fingerprints with a few classmates to see if they are similar.</li>
            <li>Guide the children in their discussion and help them conclude: Everyone's fingerprint is unique.</li>
        </ol>
    </div>

    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask the children to identify scenarios where fingerprints can be useful, e.g. bank accounts, legal
                documents.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c13.png') }}" class="h-[20vw]" />
    </div>

    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask the children to identify scenarios where fingerprints can be useful, e.g. bank accounts, legal
                documents.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c14.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask the children to identify scenarios where fingerprints can be useful, e.g. bank accounts, legal
                documents.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class7/c15.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite the children to tell the differences between their fingerprints and that of their friends in
                    class.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to understand through comparison that everybody's fingerprint is unique.</li>
                <li>Able to tell the differences between one's fingerprint and that of his/her friends.</li>
            </ul>
        </div>
    </div>


    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 7: My Fingerprints</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children observe their fingerprints to see if the prints are different from their thumbprints.
                    Get them to compare their left and right fingerprints.</li>
                <li>Have the children do a piece of artwork using their fingerprints.</li>
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
            const returnURL = "{{ url('/micet/k2/mybody/index') }}";
            const doneURL = "{{ url('/micet/k2/mybody/index') }}";

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
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.phonics-panel').forEach(panel => {
                const observer = new MutationObserver(() => {
                    if (panel.classList.contains('hidden')) {
                        panel.querySelectorAll('video').forEach(video => {
                            if (!video.paused) video.pause();
                            video.currentTime = 0;
                        });
                    }
                });

                observer.observe(panel, {
                    attributes: true,
                    attributeFilter: ['class']
                });
            });
        });
    </script>
@endpush
