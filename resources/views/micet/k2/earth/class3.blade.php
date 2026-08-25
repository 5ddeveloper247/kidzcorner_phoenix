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
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/k2/earth/class3/b1.png') }}" class="h-[8vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>To understand the various habitats of animals and plants on Earth.</li>
        <li>To learn about the natural environments (such as grasslands, rainforests, polar region and coral reefs) and their characteristics.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <h3 class="ptitle mt-[5vw]">Preparations</h3>

    <ul class="list-disc panel-ul">
        <li>Use the resources from the units "The world of animals" and "Underwater world".</li>
        <li>Thematic Activity Book/ Drawing papers</li>
        <li>Globe.</li>
        <li>A large sheet of paper.</li>
    </ul>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>
        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children to recall where this place is.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Remind the children that this is the largest desert on Earth - the Sahara Desert in Africa.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>
        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask the children to recall the characteristics of the desert. (The sand is gold in colour, they have very few plants, it is difficult to find water, etc.)</li>
        </ol>
        <div class="flex text-white gap-5">
            <img src="{{ asset('assets/images/micet/k2/earth/class3/c2.png') }}" class="h-[20vw]" />
            <h3>desert</h3>
        </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Ask the children: What animals live in the desert?</li>
    </ol>
    <div class="flex text-white gap-5">
        <img src="{{ asset('assets/images/micet/k2/earth/class3/c2.png') }}" class="h-[20vw]" />
        <h3>desert</h3>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Inform the children that camels live in the desert.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c3.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Ask the children to guess what place this is. Remind them that they have visited this place in the unit "The world of animals". Why is it green?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c4.png') }}" class="h-[20vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Inform the children this is the African grassland, the largest grassland on Earth. Ask them: What is a grassland? What animals and plants are there in the grasslands?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c4.png') }}" class="h-[20vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Ask the children who know to share with the class, such as animals can run freely on grassland as there are plenty of grass and few trees.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c5.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>There are many animals living on the grassland.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c6.png') }}" class="h-[20vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>There are herbivores.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c7.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>There are also carnivores.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c8.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Ask the children to guess what place this is. They have visited this place in the unit "The world of animals". Why is it green?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c9.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Inform the children that this is the Amazon rainforest, the largest rainforest on Earth. Ask them: What is a rainforest? What animals and plants are there in the rainforest?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c9.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Ask the children who know to share with the class, such as high rainfall and trees are everywhere in the rainforest.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c10.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="15">
        <li>Ask the children who know to share with the class, such as high rainfall and trees are everywhere in the rainforest.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c11.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>The rainforest has the largest species of animals living in it and they mostly live on trees.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c12.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="17">
        <li>Ask the children to find the South Pole (Antarctica) on the map.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c13.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="18">
        <li>Ask the children to find the South Pole (Antarctica) on the map.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c21.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="19">
        <li>Ask the children to discuss the characteristics of the South Pole (Antarctica).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c21.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="20">
        <li>The South Pole is covered with snow all year round and is very cold.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c14.png') }}" class="h-[20vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="21">
        <li>The animals living in the South Pole have thick fur or skin.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c15.png') }}" class="h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="22">
        <li>Encourage the children to recall the unit "Underwater world". Ask the children: What is a coral reef? Is a coral an animal or a plant?</li>
    </ol>
    <div class="flex gap-5">
        <img src="{{ asset('assets/images/micet/k2/earth/class3/c16.png') }}" class="h-[20vw]" />
        <img src="{{ asset('assets/images/micet/k2/earth/class3/c17.png') }}" class="h-[20vw]" />
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="23">
        <li>Inform the children that the coral reef is home to the largest number of sea creatures in the ocean.</li>
    </ol>
    <div class="flex gap-5">
        <img src="{{ asset('assets/images/micet/k2/earth/class3/c16.png') }}" class="h-[20vw]" />
        <img src="{{ asset('assets/images/micet/k2/earth/class3/c17.png') }}" class="h-[20vw]" />
    </div>
</div>




{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="24">
        <li>Click on the video. Ask the children to observe how sea creatures in the ocean gather at the coral reef.</li>
    </ol>
    <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class3/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="25">
        <li>Inform the children that there are many coral reefs in the ocean. Ask the children if they know where the largest coral reef is.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c1.png') }}" class="h-[20vw]" />
</div>





{{-- panel 5 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="26">
        <li>Inform the children that the Great Barrier Reef in Australia is the largest coral reef in the world. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c18.png') }}" class="h-[20vw]" />
</div>

{{-- panel 6 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="27">
        <li>Inform the children that the Great Barrier Reef in Australia is the largest coral reef in the world. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c19.png') }}" class="h-[20vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="28">
        <li>Inform the children that the Great Barrier Reef in Australia is the largest coral reef in the world.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class3/c20.png') }}" class="h-[20vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="29">
        <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
    </ol>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 3: Animals and Plants on Earth</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Take out the large sheet of paper. Have the children name the four natural environments (grassland, rainforest, South pole and coral reef). List (or draw) the animals and plants living there and their characteristics.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to state the characteristics of the following: grassland, rainforest, South pole and coral reef.</li>
            <li>Able to name some animals and plants in each habitat.</li>
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
        const returnURL = "{{ url('/micet/k2/earth/index') }}";
        const doneURL = "{{ url('/micet/k2/earth/index') }}";

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

            stopAllVideos();

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
</script>
@endpush