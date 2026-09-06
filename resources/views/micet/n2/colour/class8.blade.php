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
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/n2/colour/class8/c1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n2/colour/class8/c2.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n2/colour/class8/c3.png') }}" class="h-[8vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Explore ways of creating a rainbow</li>
            <li>Through experiment, cultivate a spirit of inquiry</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
            </ul>

            <h1 class="panel-ul mt-[1vw]">For Optional Activity:</h1>
            <ul class="list-disc panel-ul w-[45vw]">
                <li>A basin of soapy water, straws, transparent cups, CD's
                    mirrors, containers and water hose</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Talk about rainbows in the sky and briefly explain how a rainbow is formed.</li>
                <li>Help children to understand that rainbows can appear in other ways.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c4.png') }}" class="w-[35vw] h-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Ask children: Where is the rainbow? What is its shape? Help them to
                understand that rainbows can often be seen in the mist of the fountain sprays.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c5.png') }}" class="h-[22vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Ask children: Where is the rainbow? What is its shape? Help them to
                understand that rainbows can often be seen in the mist of the fountain sprays.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c6.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Ask children: Where is the rainbow? What is its shape? Help them to
                understand that rainbows can often be seen in the mist of the fire boat sprays.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c7.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Ask children: Where is the rainbow? What is its shape? Help them to
                understand that rainbows can often be seen in the mist of the waterfall sprays.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c8.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Lead children to explore ways of creating a rainbow.</li>
            <li>Regardless of the way chosen, kindly conduct them on a bright day and at a
                sunny location.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c9.png') }}" class="w-[32vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Lead children to use straws to blow bubbles with soapy water. Let them pay
                attention to the rainbow colours on the bubbles under the sunlight. (Remind
                the children not to look at the sun directly.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c9.png') }}" class="w-[32vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Lead children to adjust the angle of holding a CD. Have them pay attention
                to the rainbow that appears on the CD under the sunlight. (Remind the
                children not to look at the sun directly.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/colour/class8/c10.png') }}" class="w-[35vw] h-[30vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Click on the video to see the demonstration, and then lead children to put a
                transparent container with water in the path of sunlight and watch for the
                rainbow formed on the floor. (Remind the children not to look at the sun
                directly.)</li>
        </ol>
        <video class="h-[19vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/colour/class8/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Click on the video to see the demonstration and then lead children to put a
                mirror in a container with water and watch for the reflected sunlight forming a
                rainbow on the wall. (Remind the children not to look at the sun directly.)</li>
        </ol>
        <video class="h-[19vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/colour/class8/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Click on the video. Remind children that the mirror in the container with
                water must be in a tilted position. (Remind the children not to look at the sun
                directly.)</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/colour/class8/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>(Optional) Choose a bright day to conduct the activity in a sunny location.
                Scatter children around the area. Spray water overhead by putting a finger
                over the water hose, thus creating a mist. Have children look for the
                rainbows that appear in the mist. (Remind the children not to look at the sun
                directly.)</li>
        </ol>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let children talk about the different ways to make rainbows
                    and in what shape the rainbow was at each time.</li>
                <li>Let children share their experience and feelings about the
                    activity (curious, excited, disappointed, etc).</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to create rainbows.</li>
                <li>Able to name a few ways of creating rainbows.</li>
                <li>Able to express feelings in words.</li>
            </ul>
        </div>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: Where is the Rainbow?</h1>

        <div class="text-start">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Encourage children to be a "magician" and create
                    rainbows for family members at home.</li>
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
            const returnURL = "{{ url('/micet/n2/colour/index') }}";
            const doneURL = "{{ url('/micet/n2/colour/index') }}";

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

            // VIDEO FUNCTIONS

            function stopAllVideos() {
                document.querySelectorAll(".phonics-panel video").forEach(video => {
                    video.pause();
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
