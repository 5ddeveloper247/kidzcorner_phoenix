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
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>
        <img src="{{ asset('assets/images/micet/n1/mybody/c9.1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[50vw]">
            <li>To understand what a tornado is and the damage that it causes.</li>
            <li>To know that the strong wind in a tornado forms a funnel shaped swirl.</li>
            <li>To conduct an experiment to simulate a tornado.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ol class="list-disc panel-ul w-[50vw]">
                <li>Thematic Activity Book</li>
                <li>Water (add a little dye, but not too much because it makes it difficult to see the tornado effect).</li>
                <li>Two 2-litre bottles without labels.</li>
                <li>Paper towels.</li>
                <li>A flat, metal washer with the same circumference as the mouth of the bottles (Alternatively, you can
                    make holes in the bottle lids or buy a ready-made plastic bottle neck joiner) and strong water proof
                    duct tape.</li>
            </ol>
        </div>
    </div>

    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul">
                <li>Have the children share their experiences of windy days.</li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Click on the video to observe a windy day.</li>
        </ol>
        <video class="h-[23vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/weather/class9/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Explain to the children that there is a kind of wind which is much stronger than the one we usually
                experience. Have the children try to identify and name it. Guide the children in reviewing the story in the
                courseware: Tina, Daisy Duckling and Daffy experience a tornado. The tornado was powerful. It tossed people
                through the air.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Display the picture and have the children observe and explain what is happening. Guide the children in
                understanding that a tornado is a violent rotating column of air. Tornadoes destroy things in its path such
                as people, houses, vehicles, livestock, trees, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Display the picture and have the children observe and explain what is happening. Guide the children in
                understanding that a tornado is a violent rotating column of air. Tornadoes destroy things in its path such
                as people, houses, vehicles, livestock, trees, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c2.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Display the picture and have the children observe and explain what is happening. Guide the children in
                understanding that a tornado is a violent rotating column of air. Tornadoes destroy things in its path such
                as people, houses, vehicles, livestock, trees, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c3.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Display the picture and have the children observe and explain what is happening. Guide the children in
                understanding that a tornado is a violent rotating column of air. Tornadoes destroy things in its path such
                as people, houses, vehicles, livestock, trees, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c4.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Display the picture and have the children observe and explain what is happening. Guide the children in
                understanding that a tornado is a violent rotating column of air. Tornadoes destroy things in its path such
                as people, houses, vehicles, livestock, trees, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c5.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Display the picture and have the children observe and explain what is happening. Guide the children in
                understanding that a tornado is a violent rotating column of air. Tornadoes destroy things in its path such
                as people, houses, vehicles, livestock, trees, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c6.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Display the picture and have the children observe and explain what is happening. Guide the children in
                understanding that a tornado is a violent rotating column of air. Tornadoes destroy things in its path such
                as people, houses, vehicles, livestock, trees, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c7.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Click on the video and have the children observe a typhoon (also called a hurricane, a cyclone).</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/weather/class9/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Explain to the children that scientists conduct experiments by simulating tornadoes. Let them know that they
                will be conducting a tornado experiment today.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Demonstrate the following:
                <ul>
                    <li>a. Remove the labels and plastic rings on the bottles.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Demonstrate the following:
                <ul>
                    <li>b. Fill half a bottle with water, dry the mouth of the bottle and place a
                        washer over the mouth of the bottle.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c8.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Demonstrate the following:
                <ul>
                    <li>c. Invert the other bottle and place it onto the washer and secure them with
                        tape.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c9.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Demonstrate the following:
                <ul>
                    <li>d. Flip the two bottles and have the children observe what happens. (water
                        in the top bottle flows down)</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c10.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Demonstrate the following:
                <ul>
                    <li> e. When the water is done flowing, flip the bottles again. This time, turn the
                        bottles quickly counter-clockwise and then let the bottle stand. Have the
                        children observe what happens (water inside the top bottle swirls,
                        forming a funnel shape).</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class9/c11.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Explain to children that the funnel shaped swirl in the water is the same shape as that produced by a
                tornado.</li>
            <li>Have the children carry out the experiment by flipping and turning the bottles. Have the children observe
                and describe their observations.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Scary Tornadoes</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children explain the tornadoes they simulated and imitate the characteristics of a tornado (e.g. turn their bodies and move forward).</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to explain what a tornado is and the damage that it can cause.</li>
                <li>Able to carry out the experiment of simulating a tornado.</li>
                <li>Able to imitate the movement of a tornado using one's body.</li>
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

            // Stop every panel <video> on the page (not just narration audio).
            // This is the missing piece: hiding a slide with CSS never pauses
            // media inside it, so a clicked video keeps playing after Next/Back.
            function stopAllVideos() {
                document.querySelectorAll('.phonics-panel video').forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                    video.currentTime = 0;
                });
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

                // Stop any playing panel videos too (fixes video-not-pausing bug)
                stopAllVideos();

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
                    stopAllVideos();
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
                stopAllVideos();

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
