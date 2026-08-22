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
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <img src="{{ asset('assets/images/micet/k2/mybody/class3/c1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand the names and functions of different parts of the body</li>
            <li>Recognise different parts of the body and represent them through drawing</li>
            <li>Develop fine motor skills through folding an origami man</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Drawing paper/Thematic Activity Book</li>
                <li>Colour pencils</li>
                <li>3 sheets of square coloured paper for each child</li>
                <li>One origami man prepared beforehand</li>
                <li>Glue</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Let the children name and point out the important parts of their body in sequence from head to toe.
                </li>
                <li>Invite a child to stand in front of the class to name and point out the important parts of his/her body
                    in sequence from head to toe.</li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="3">
                <li>Let the children draw different parts of the body on a drawing paper or in the Thematic Activity Book.
                </li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/mybody/class3/c2.png') }}" class="w-[20vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Display the origami man and invite the children to name the body parts that make up the origami man.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/mybody/class3/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="5">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="6">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="7">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="8">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="9">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v5.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="10">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v6.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="11">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v7.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="12">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v8.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="13">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v9.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="14">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v10.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="15">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v11.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="16">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v12.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="17">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v13.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="18">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v14.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="19">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v15.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="20">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v16.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="21">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v17.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="22">
                <li>Click on the video (18 slides). Invite the children to follow and fold an origami man.</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/mybody/class3/v18.mp4') }}" type="video/mp4">
        </video>
    </div>




    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="23">
            <li>Let children stick the different origami body parts together to create an origami man. Encourage the
                children to use their imagination to come up with a special posture for the origami man, e.g. kicking a
                ball, dancing.</li>
            <li>Let the children draw eyes and beautiful clothes etc. for their origami man.</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: My Body</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite the children to display their origami man and name the various body parts of their origami man.
                </li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to draw the various parts of the body.</li>
                <li>Able to fold a complete origami man with teacher's guidance.</li>
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
