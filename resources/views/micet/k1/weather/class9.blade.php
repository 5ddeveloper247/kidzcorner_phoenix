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
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/b1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>To know that weather conditions change daily.</li>
            <li>To know the sources of weather forecast (television, radio, newspaper or the Internet).</li>
            <li>To learn to monitor the weather.</li>
            <li>To develop an acceptance of weather changes.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="flex flex-col gap-5">
            <h3 class="ptitle">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>

    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul ">
                <li>Have the children identify the type of weather that each symbol represents.</li>
                <li>Ask the children: "What is the weather like today?"; "Which symbol represents <br>
                    the weather today?"; "What was the weather like yesterday?"; "Which symbol <br>
                    represents the weather yesterday?".</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/c1.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Click on the video for the children to observe the weather. Ask: "What's the weather like?"</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/weather/class9/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul" start="4">
                <li>Ask the children, "Which symbol represents this weather?"</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/c1.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Click on the video for the children to observe the weather. Ask: "What's the weather like?"</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/weather/class9/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul" start="4">
                <li>Ask the children, "Which symbol represents this weather?"</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/c1.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Click on the video for the children to observe the weather. Ask: "What's the weather like?"</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/weather/class9/v3.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul" start="4">
                <li>Ask the children, "Which symbol represents this weather?"</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/c1.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Click on the video for the children to observe the weather. Ask: "What's the weather like?"</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/weather/class9/v4.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul" start="4">
                <li>Ask the children, "Which symbol represents this weather?"</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/c1.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Click on the video for the children to observe the weather. Ask: "What's the weather like?"</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/weather/class9/v5.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul" start="4">
                <li>Ask the children, "Which symbol represents this weather?"</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/c1.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask the children: "What will the weather be like tomorrow?"; "How can we find out about the weather in
                advance?". Guide the children in understanding about weather forecasts and their uses.</li>
            <li>Have the children name places where they can find a weather forecast. Guide the children in understanding
                that weather forecasts are available on television, radio, the newspapers and on the internet.</li>
        </ol>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Guide the children to complete activity 9 in the Thematic Activity Book. Explain what is needed to complete
                the table (fill in the weather forecast and the actual weather for the day in the appropriate column). Have
                the children indicate the weather by using the weather symbols.</li>
            <li>Have the children fill in the actual weather for today and the weather forecast for the next day. This is to
                be done for a week.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/weather/class9/c2.png') }}" class="h-[13vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: How’s the Weather Today?</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children compare the weather forecast and the actual weather. Discuss whether the 2 weather
                    conditions are the same after completing the table. Have the children evaluate the accuracy of the
                    weather forecast.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to identify the different weather symbols.</li>
                <li>Able to know the sources and uses of weather forecast.</li>
                <li>Able to write the weather forecast and actual weather in the appropriate column and compare them.</li>
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
            const returnURL = "{{ url('/micet/k1/weather/index') }}";
            const doneURL = "{{ url('/micet/k1/weather/index') }}";

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
