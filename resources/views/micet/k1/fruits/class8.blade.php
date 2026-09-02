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
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
        </div>  

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Understand the process of how a seed grows into a plant</li>
            <li>Learn to grow a plant from a seed and record its growth</li>
            <li>Develop a sense of responsibility</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>Pencils, colour pencils and erasers</li>
                <li>Some green beans or seeds of other fast growing plants/li>
                <li>A flower pot for each group (you may reuse plastic soft drink bottles) with soil or cotton wool. Label
                    each pot with the group's name</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Show the children some seeds. Ask the children to describe what is needed by the seeds in order for them
                    to grow (e.g. food, water, etc.). Let children share prior knowledge about plant growth.</li>
                <li>Show the photo of the seed below. Ask the children to predict how it will grow.</li>
            </ol>
            <div class="flex justify-center w-[45vw] mt-[2vw]">
                <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="w-[8vw]" />
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 7 slides).</li>
        </ol>
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c3.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 7 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c3.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c4.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 7 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c3.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c5.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 7 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c3.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c6.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul" start="7">
            <li>Show this photo of seed growth. Let the children discuss how the seed will <br>
                grow (over 7 slides).</li>
        </ol>
        <div class="flex justify-center mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c3.png') }}" class="h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c6.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c7.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 7 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c3.png') }}" class="h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c6.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c7.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c8.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 7 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c3.png') }}" class="h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c6.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c7.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c8.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class8/c9.png') }}" class="h-[16.5vw]" />
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Click on the video. Show the children how a seed grows into a plant.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/fruits/class8/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Tell the children that they will be doing an experiment to find out what happens when a seed is planted.
            </li>
            <li>Let the children form small groups. Give each group a flower pot and some green beans (or seeds of other
                fast growing plants).</li>
            <li>Teacher can demonstrate how to plant the seeds. Invite each group to plant a seed in their pot.</li>
            <li>Let the children water the pot and place it at a sunny spot.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Encourage the children to make daily observations of their seeds. Let the children observe how the seed
                grows into a small plant with green leaves. Encourage the children to water their pot everyday and take good
                care of their plant.</li>
            <li>Let the children draw what they observe over a period of few days on drawing papers or in the Thematic
                Activity Book. Remind the children to date each observational drawing.</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite some children to display and explain their plant's growth records.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to cooperate with team members in planting and taking care of their own plants.</li>
                <li>Able to draw how a seed grows into a plant based on their observations.</li>
            </ul>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Encourage the children to continue taking care of their plants.
                    The children can engage in further investigations such as,
                    measuring the seedling's heights, comparing differences in
                    their rate of growth, e.g. one seedling is given water and
                    sunlight while the other seedling is deprived of one of
                    these essential elements.</li>
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
            const returnURL = "{{ url('/micet/k1/fruits/index') }}";
            const doneURL = "{{ url('/micet/k1/fruits/index') }}";

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
