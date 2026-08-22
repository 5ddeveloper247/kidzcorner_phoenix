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
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/animals/class6/b1.png') }}" class="h-[9vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class4/b2.png') }}" class="h-[9vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Identify some animals that move in air and know their characteristics</li>
            <li>Observe and imitate the actions of some animals that move in the air</li>
            <li>Know that most animals that move in the air have wings</li>
        </ul>

    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: "What animal is this?" "Can you describe it?" (physical features)
                    "How does it move in water?" Guide children to know about fins.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/animals/class6/c1.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">bee</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Click on the video, have children talk about the animal in the video, and imitate
                it’s actions.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class6/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What animal is this?" "Can you describe it?" (physical features)
                "How does it move in water?" Guide children to know about fins.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class6/c2.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">butterfly</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Click on the video, have children talk about the animal in the video, and imitate
                it’s actions.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class6/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask children: "What animal is this?" "Can you describe it?" (physical features)
                "How does it move in water?" Guide children to know about fins.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class6/c3.png') }}" class="h-[15vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">goose</h5>
    </div>


    {{-- Panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Click on the video, have children talk about the animal in the video, and imitate
                it’s actions.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class6/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children: "What animal is this?" "Can you describe it?" (physical features)
                "How does it move in water?" Guide children to know about fins.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class6/c4.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">hummingbird</h5>
    </div>


    {{-- Panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Click on the video, have children talk about the animal in the video, and imitate
                it’s actions.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class6/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What animal is this?" "Can you describe it?" (physical features)
                "How does it move in water?" Guide children to know about fins.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class6/c5.png') }}" class="w-[18vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">seagull</h5>
    </div>


    {{-- Panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Click on the video, have children talk about the animal in the video, and imitate
                it’s actions.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class6/v5.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children: "What animal is this?" "Can you describe it?" (physical features)
                "How does it move in water?" Guide children to know about fins.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class6/c6.png') }}" class="h-[15vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">pelicon</h5>
    </div>


    {{-- Panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Click on the video, have children talk about the animal in the video, and imitate
                it’s actions.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class6/v6.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- Panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask children: "What are these?" "Where do they fly?" [on land, in water or
                in the air] Tell children that all these animals move in the air.</li>
            <li>Ask children: "How do these animals move in the air? Do they move in the
                same way?" Guide children to understand that most animals that move in
                the air have wings.</li>
        </ol>
        <div class="flex flex-col items-center">
            <div class="flex items-center">

                <img src="{{ asset('assets/images/micet/n1/animals/class6/c1.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/n1/animals/class6/c4.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/animals/class6/c3.png') }}" class="h-[9vw]" />
                <img src="{{ asset('assets/images/micet/n1/animals/class6/c5.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/n1/animals/class6/c6.png') }}" class="h-[9vw]" />
            </div>
        </div>
    </div>


    {{-- Panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children name some animals that move in air, then use their imagination
                    to imitate the actions of these animals.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name some animals that move in the air.</li>
                <li>Able to use imagination to imitate the actions of some animals that move in the air.</li>
                <li>Able to know that most animals that move in the air have wings.</li>
            </ul>
        </div>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Animals That Move in the Air</h1>

        <div class="text-start">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>If school has pets that move in the air, encourage children to
                    observe these animals.</li>
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
            const returnURL = "{{ url('/micet/n1/animals/index') }}";
            const doneURL = "{{ url('/micet/n1/animals/index') }}";

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
