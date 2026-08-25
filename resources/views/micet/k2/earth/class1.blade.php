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

    title {
        color: #F7B94A;
        font-size: 2vw;
    }

    .ptitle {
        color: #f7b94a;
        font-size: 1.7vw;
    }

    .p-title {
        color: #ffffff;
        font-size: 1.4vw;
    }

    .panel-ul {
        color: white;
        font-size: 1.4vw;
        text-align: left !important;
    }
</style>
@endpush

@section('content')

{{-- panel 1 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>
    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/k2/earth/class1/b1.png') }}" class="h-[7vw]" />
        <img src="{{ asset('assets/images/micet/k2/earth/class1/b2.png') }}" class="h-[7vw]" />
    </div>


    <h3 class="title">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>To be aware of Earth in space.</li>
        <li>To understand that globes and maps are used to represent the Earth.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>A globe and world map</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <h3 class="text-start ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Display the globe and have the children name it. Guide the children to identify the "globe" and understand that "it is a model of the Earth".</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class1/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Have the children describe the Earth that they know. Where is it? What is its shape? What is on its surface?</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Click on the video. Ask the children to observe the rotation of the Earth in space. Where is it? What is its shape? What is on its surface?</li>
        </ol>
    </div>
    <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class1/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have the children observe the Earth carefully and name the colours in the photos. Ask them to identify the different colours (brown, green, blue and white) and what they represent (land, forests, oceans and clouds). Explain the terms if necessary.</li>
        </ol>
    </div>
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Have the children describe the Earth (e.g. the Earth is round; there are brown land masses, blue oceans, green forests and white clouds).</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class1/c2.png') }}" class="w-[30vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Ask the children why the two photos are different and if there are two Earths. Guide them in understanding that the two photos are taken from different angles.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class1/c2.png') }}" class="w-[30vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Have the children compare these two photos and encourage them to name the similarities (they have four colours) and differences in them. Ask: <ul>
                    <li>Have the children compare these two photos and encourage them to name the similarities (they have four colours) and differences in them. Ask:
                        Which photo has more oceans?
                    </li>
                    <li>Which photo has more land masses?</li>
                </ul>
            </li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class1/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Display the globe and ask the children what it is. Guide the children to identify the "globe" and understand that "it is a model of the Earth".</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class1/c2.png') }}" class="w-[30vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Display the world map. Have the children name it and explain what it is used for.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class1/c3.png') }}" class="w-[30vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Guide the children in locating their own country on the globe and map. Encourage the children to locate other countries as well. Guide them in concluding that the locations of countries or places can be found both on the map and the globe. Maps and globes are useful tools for finding various locations on Earth.</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Ask the children to explain the differences between a map and a globe. Ask them which they prefer (map or globe) and why. Encourage the children to think based on its practicality (e.g. a three-dimensional globe is not convenient to carry around, a map can be folded while a globe cannot be folded; it is, however, easier to locate the relative positions of places on a three-dimensional globe).</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/earth/class1/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div>
        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
        </ol>
    </div>
</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Have the children observe the map and photos of the Earth. Ask them if they are able to see all the four colours and why.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to understand the physical characteristics of the Earth.</li>
            <li>Able to identify a globe and a map and know their uses.</li>
        </ul>
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 1: The Earth</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Guide the children to identify the seven continents, five oceans and pinpoint their locations.</li>
            <li>Guide the children to understand that besides the world map, there are other types of maps such as country maps and city maps.</li>
        </ul>
    </div>
</div>


{{-- ================================ --}}
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