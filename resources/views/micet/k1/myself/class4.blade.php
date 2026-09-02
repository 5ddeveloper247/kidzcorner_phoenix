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
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        </div>



        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Learn to sing "Brush Our Teeth" and "Wash Our Face" song</li>
            <li>Learn the correct way to brush teeth and wash face</li>
            <li>Develop self-help skills</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>Children to bring their toothbrushes to school</li>
                <li>One adult toothbrush and toothpaste</li>
                <li>Face cloth</li>
                <li>Plastic model of teeth (For Optional Activity)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask the children: "What do you use to brush your teeth?"; "How many times do
                    you brush your teeth?"; "When do you brush your teeth?"; "Why do we need to
                    brush our teeth?" and "What will happen if we don't?"</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Use the animation to demonstrate the correct technique of brushing teeth:
                <ol class="list-[lower-alpha] pl-[1vw]">
                    <li>First, squeeze some toothpaste onto the toothbrush. Explain to the
                        children that fluoride toothpaste can protect tooth decay.</li>
                    <li>Place the toothbrush against the outer teeth gum line, then brush
                        downward and outward. Brush gently so as not to hurt the gum. Repeat
                        process until all the teeth have been brushed.</li>
                </ol>
            </li>
        </ol>
        <video class="h-[13vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/myself/class4/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Use the animation to demonstrate the correct technique of brushing teeth:
                <ol type="a" start="3" class="pl-[1vw]">
                    <li>Then, place the toothbrush on the inner surface gum line. Repeat process.</li>
                </ol>
            </li>
        </ol>

        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/myself/class4/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Use the animation to demonstrate the correct technique of brushing teeth:
                <ol type="a" start="4" class="pl-[1vw]">
                    <li>Then, place the toothbrush on the chewing surface and brush gently.</li>
                    <li>Lastly, don't forget to brush the tongue.</li>
                </ol>
            </li>
        </ol>
        <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/myself/class4/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>(Optional Activity) Use the plastic model of teeth to demonstrate the correct
                technique of brushing teeth:
                <ol type="a" class="pl-[1vw]">
                    <li>First, squeeze some toothpaste onto the toothbrush. Explain to the children that fluoride toothpaste
                        can protect against tooth decay.</li>
                    <li>Place the toothbrush against the outer teeth gum line, then brush downward and outward. Brush gently
                        so as not to hurt the gum. Repeat the process until all the teeth have been brushed.</li>
                    <li>Then, place the toothbrush on the inner surface gum line. Repeat the process.</li>
                    <li>Then, place the toothbrush on the chewing surface and brush gently.</li>
                    <li>Lastly, don't forget to brush the tongue.</li>
                </ol>
            </li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Teacher can compose a rhyme to help children rememberthe sequence of
                brushing teeth. For example:</li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            Brush up, brush down, <br>
            Brush left, brush right, <br>
            Brush outside, brush inside, <br>
            To help stop tooth decay.
        </h4>
    </div>



    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Help children learn the "Brush Our Teeth" song and let them sing it together.</li>
        </ol>
        <div class="flex gap-[3vw]">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h4 class="text-white text-[2vw] text-start">
                This is the way we brush our teeth, <br>
                Brush our teeth, brush our teeth. <br>
                This is the way we brush our teeth, <br>
                So early in the morning.
            </h4>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Let the children take turns to brush their teeth with their own toothbrush at the
                bathroom sink. Encourage them to brush their teeth in the proper way. Remind
                the children not to waste water.</li>
        </ol>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Help children learn the "Wash Our Face" song and get them to sing it together.</li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            This is the way we wash our face, <br>
            Wash our face, wash our face. <br>
            This is the way we wash our face, <br>
            So early in the morning.
        </h4>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Let the children take turns to wash their face at the bathroom sink. Remind the
                children not to waste water. Teacher can compose a rhyme to help the
                children remember the sequence of washing their face. For example:</li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            This is how I wash my face. <br>
            Rinse and squeeze the cloth dry. <br>
            Then wipe my face, <br>
            Up and down, left and right. <br>
            Now it's clean and bright.
        </h4>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children sing the songs "Brush Our Teeth" and
                    "Wash Our Face" with the corresponding actions.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Know how to sing the "Brush Our Teeth" and "Wash Our Face" song.</li>
                <li>Know how to brush one's teeth and wash one's face.</li>
                <li>Able to describe the correct way of brushing our teeth and
                    washing our face.</li>
            </ul>
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Brush, I Can Wash</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Play the above songs before afternoon nap time to remind
                    the children the correct techniques of brushing teeth and
                    washing face.</li>
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
            const returnURL = "{{ url('/micet/k1/myself/index') }}";
            const doneURL = "{{ url('/micet/k1/myself/index') }}";

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
