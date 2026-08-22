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
            text-align: left
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c1.png') }}" class="h-[7vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>To observe the growth process of a seed.</li>
            <li>To understand the uses of water and sunlight in the growth <br>
                of plants through experiments.</li>
            <li>To develop a sense of responsibility and perseverance <br>
                through watering seeds and recording the observations.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[5vw] h-full w-[45vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>
                    Some seeds which grow in a short period of time.
                    Four pots filled with soil (can use mineral water<br>
                    bottles as pots) per group.</li>
                <li>Watering cans (can use mineral water bottles).</li>
            </ul>
            <ul class="list-disc panel-ul">For Optional Activity:
                <li>3 to 5 different types of plant (washed), one fruit per child</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell the children that there are many factors involved in the growth process of human beings. For
                    example, we need to eat various types of food to replenish nutrients. </li>
                <li>Display the picture of the seed. Ask the children to discuss how seeds grow (total 8 slides).</li>
            </ol>
            <div class="flex justify-center w-[45vw] mt-[2vw]">
                <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="w-[8vw]" />
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Display the picture of the seed. Ask the children to discuss how seeds grow (total 8 slides).</li>
        </ol>
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c3.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 8 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c3.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c4.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Display the picture of the seed. Ask the children to discuss how seeds grow (total 8 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c3.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c5.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 8 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c3.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c6.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul" start="7">
            <li>Show this photo of seed growth. Let the children discuss how the seed will <br>
                grow (over 8 slides).</li>
        </ol>
        <div class="flex justify-center mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c3.png') }}" class="h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c6.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c7.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 8 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c3.png') }}" class="h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c6.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c7.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c8.png') }}" class="w-[6vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Show this photo of seed growth. Let the children discuss how the seed will grow (over 8 slides).</li>
        </ol>
        <div class="flex justify-center w-[45vw] mt-[2vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c3.png') }}" class="h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c4.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c5.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c6.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c7.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c8.png') }}" class="w-[6vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c9.png') }}" class="h-[16.5vw]" />
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 8: A Seed Grows Up</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Click on the video. Show the children how a seed grows into a plant.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/plant/class2/v1.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="11">
                <li>The children discuss the factors needed for seeds to grow. Help the children understand the factors
                    required for plants to grow; e.g. sunlight, soil and water.</li>
            </ol>
        </div>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/plant/class2/c10.png') }}" class="w-[12vw] h-[10vw]" />
            <div class="flex flex-col">
                <img src="{{ asset('assets/images/micet/k2/plant/class2/c11.png') }}" class="w-[15vw] h-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/plant/class2/c12.png') }}" class="w-[15vw] h-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-full" start="12">
                <li>Organise the children into groups and distribute four pots per group. Paste the four different labels
                    from the Thematic Activity Book on the respective pots: with sunlight - with water; with sunlight - no
                    water; no sunlight - with water; no sunlight - no water.</li>
                <li>Help the children plant the seeds in the small pots. Place the two pots labelled "with sunlight" in
                    places where there is sunlight. Place the other two pots in a dark corner of the classroom where
                    sunlight cannot reach. Water the seeds in the two pots labelled "with water" everyday. Do not water the
                    other two pots..</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/plant/class2/c13.png') }}" class="h-[12vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="14">
                <li>Have the children open the Thematic Activity Book "Experiment Record Table". Encourage the children to
                    predict first before the experiment. Record their predictions on this table..</li>
            </ol>
            <div class="text-center">
                <h2 class="ptitle">Before The Experiment: My Prediction</h2>
                <p class="text-white text-xl">In which pot will you first see germination and green leaves? Tick ( /) the
                    boxes.</p>
            </div>
        </div>
        <img src="{{ asset('assets/images/micet/k2/plant/class2/c14.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="15">
                <li>Encourage the children to predict first before the experiment, when it w sprout and when it will grow
                    green leaves. Record their predictions on the table.</li>
            </ol>
            <div class="text-center ">
                <h2 class="ptitle">Before The Experiment: My Prediction</h2>
            </div>
        </div>
        <img src="{{ asset('assets/images/micet/k2/plant/class2/c15.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="16">
                <li>Tell the children that from that day onward, they will have to look at the seeds daily to see if there
                    are any changes. If there is a change, the students will have to record their observations and the date
                    in the table.</li>
                <li>Encourage the children to continue observing and recording their observations until the plant grows
                    leaves.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/plant/class2/c16.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="18">
                <li>After the experiment, guide the children to complete this table based on their observations.</li>
            </ol>
            <div class="text-center">
                <h2 class="ptitle">After The Experiment: Actual Results</h2>
            </div>
        </div>
        <img src="{{ asset('assets/images/micet/k2/plant/class2/c17.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="19">
                <li>After the experiment, guide the children to complete this table based on their observations.</li>
            </ol>
            <div class="text-center ">
                <h2 class="ptitle">After The Experiment: Actual Results</h2>
            </div>
        </div>
        <img src="{{ asset('assets/images/micet/k2/plant/class2/c18.png') }}" class="h-[20vw]" />
    </div>



    {{-- panel 36 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite the children to tell if their estimate before the experiment and the result of the experiment are
                    identical.</li>
                <li>Help the children reach a conclusion that plants need sunlight and water to grow.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to carry out the proper prediction.</li>
                <li>Able to discover the roles of water and sunlight in the growth of plants.</li>
                <li>Able to record observations on the table.</li>
            </ul>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Grow a Plant</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite the children to plant different seeds at home and to observe their changes in growth in order to
                    help them understand that some seeds grow faster than others.</li>
                <li>Encourage the children to plant other seeds at home (or in class) to carry out more thorough
                    observations; e.g. measure the height of the seedlings.</li>
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
            const returnURL = "{{ url('/micet/k2/plant/index') }}";
            const doneURL = "{{ url('/micet/k2/plant/index') }}";

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
