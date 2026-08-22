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
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Know about Amazon Rainforest</li>
            <li>Learn that the Amazon Rainforest has the most number of species of animals and plants in the world</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask the children: What are the characteristics of this place? (e.g. many trees, forest) What are the
                    differences between this place and the place you live?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children: What are the characteristics of this place? (e.g. many trees, forest) What are the
                differences between this place and the place you live?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children: What are the characteristics of this place? (e.g. many trees, forest) What are the
                differences between this place and the place you live?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children: What are the characteristics of this place? (e.g. many trees, forest) What are the
                differences between this place and the place you live?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask the children: What place is this? Inform them that these are different views of the Amazon Rainforest.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c5.png') }}" class="w-[30vw]" />
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Click to play the video. Let the children observe an aerial view of the Amazon Rainforest.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/animals/class4/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Invite children to find where the Amazon Rainforest is located on the world map.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c6.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Invite children to find where the Amazon Rainforest is located on the world map.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c7.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Invite children to find where the Amazon Rainforest is located on the world map.</li>
        </ol>
        <div class="flex items-center gap-[1vw] mt-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/k2/animals/class4/c1.png') }}" class="w-[25vw]" />
                <p class="text-white text-[1.4vw] text-center">Amazon Rainforest</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/k2/animals/class4/c22.png') }}" class="w-[25vw]" />
                <p class="text-white text-[1.4vw] text-center">Amazon Rainforest</p>
            </div>
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Let the children discuss why it is called the Amazon Rainforest. ( The teacher helps them to conclude that
                it is so because this huge forest is in the Amazon basin of South America and there is a lot of rain there.)
            </li>
            <li>Let the children discuss whether the African Grassland has more rainfall or less rainfall than the Amazon
                Rainforest and how they can know that. (The amount of rain is much less in the African Grassland. As a
                result, there are fewer trees there.)</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/k2/animals/class4/c1.png') }}" class="w-[15vw]" />
                <p class="text-white text-[1.4vw] text-center">Amazon Rainforest</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/k2/animals/class4/c22.png') }}" class="w-[15vw]" />
                <p class="text-white text-[1.4vw] text-center">Amazon Rainforest</p>
            </div>
        </div>
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Ask the children: What are the common characteristics of the following animals from the Amazon Rainforest?
                What are the differences between the animals of the Amazon Rainforest and the African Grassland. Why are
                there differences? (There is not enough open space in the Amazon Rainforest for animals to run about, so
                most animals here are smaller in size and live on trees. African Grassland is a vast grassland where animals
                can run about freely, so most animals here are bigger in size and most of them live on the ground.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c8.png') }}" class="h-[10vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals. (parrot)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c9.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c10.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Click to play the video. Let the children observe a toucan.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/animals/class4/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c11.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c12.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c13.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c14.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c15.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c16.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c17.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c18.png') }}" class="w-[27vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c19.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Guide children to identify some animals that live on trees in the Amazon Rainforest. Let the children name
                the animals.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c20.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Inform children that the Amazon Rainforest has the most number of species of animals and plants in the
                world.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class4/c21.png') }}" class="w-[27vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Amazon Rainforest</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
        </ol>
    </div>


    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let children state the characteristics of the Amazon Rainforest.</li>
                <li>Let children state if they like the African Grassland or the Amazon Rainforest and give reasons for
                    their choice.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to state the characteristics of the Amazon Rainforest.</li>
                <li>Know the differences between the Amazon Rainforest and the African Grassland.</li>
            </ul>
        </div>
    </div>


    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[4vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Encourage the children to search for information about the Amazon Rainforest at home and then share the
                    information with their classmates.</li>
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
            const returnURL = "{{ url('/micet/k2/animals/index') }}";
            const doneURL = "{{ url('/micet/k2/animals/index') }}";

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
