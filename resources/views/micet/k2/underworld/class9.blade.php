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
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>
    <img src="{{ asset('assets/images/micet/k2/underworld/class9/c1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Explore the underwater world</li>
        <li>Use one's imagination to draw a picture of the underwater world</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ol class="list-disc panel-ul w-[45vw] items-center">
            <li>Tell children that today they will learn to play an action game.</li>
            <li>Colour pencils, drawing papers </li>
        </ol>
    </div>
</div>

{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Let the children state some land animals (e.g. lion, monkey, polar bear and penguin) and their living environments. Guide children to list the different living environments (e.g. grassland, rainforest, South Pole and North Pole) on land, and state their characteristics (refer to the World of Animals lessons). Guide children to understand that different animals live in different living environments.</li>
            <li>Ask children: We know that there are different living environments on land. How about the sea? Are there different living environments in the sea? Guide children to understand that there are different living environments in the sea. For example: coastline, coral reefs and deep sea. </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Let the children look at the different coral reefs and recall what a coral is and whether it is an animal or a plant. (A coral is an animal and is made up of many coral polyps; each coral polyp is actually a tiny animal.)</li>
    </ol>
    <div class="flex gap-2">
        <img src="{{ asset('assets/images/micet/k2/underworld/class9/c2.png') }}" class="w-[20vw] h-[17vw]" />
        <img src="{{ asset('assets/images/micet/k2/underworld/class9/c3.png') }}" class="w-[20vw] h-[17vw]" />
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Explain to the children: when coral polyps die, their hard skeletons are left behind. New coral polyps then attach themselves to the skeletons. When they die, another layer of skeletons are added to the reef. It takes thousands of years for coral polyps to form reefs.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class9/c4.png') }}" class="w-[30vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Click to play the video. Let children observe and say what are around the coral polyps (different sea creatures).</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class9/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Explain to the children: Colourful coral reefs are often called the 'rainforest of the ocean' as they are the living environments for many types of animals and plants, just like the rainforest on land.</li>
    </ol>
    <div class="flex gap-2">
        <img src="{{ asset('assets/images/micet/k2/underworld/class9/c2.png') }}" class="w-[20vw] h-[17vw]" />
        <img src="{{ asset('assets/images/micet/k2/underworld/class9/c3.png') }}" class="w-[20vw] h-[17vw]" />
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Inform children that the underwater world is amazing because besides the coral reefs and vast ocean, it also has other living environments similarto those on land, like plains and mountain ranges. Large sized sea creatures like whales like to live in the vast ocean.</li>
    </ol>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Click to play the video. Let the children observe the large sized sea creatures that live in the vast ocean.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class9/v2.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Explain to the children: The vast ocean is like the grassland on land, which has lots of open space and is a living environment for many big sized animals.</li>
    </ol>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Ask children: What are your favourite sea creatures? Why? Where do they live?</li>
        <LI>Distribute the drawing papers. Let the children use their imagination to draw a picture of the amazing underwater world. Encourage children to draw their favourite sea creatures and living environments in their picture.</LI>
    </ol>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let children take turns to display and talk about their picture of the underwater world. Let them state why they like certain sea creatures.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Know that there are living environments under the sea just like those on land.</li>
            <li>Able to use imagination to draw a picture of the underwater world.</li>
            <li>Able to state one's favourite sea creatures and give reasons for their choice.</li>
        </ul>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Amazing Underwater World</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let the children gather information on coral reefs with the help of their parents. Then invite them to share the information with their classmates on how to protect the coral reefs and why there is a need to do so.</li>
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
        const returnURL = "{{ url('/micet/k2/underworld/index') }}";
        const doneURL = "{{ url('/micet/k2/underworld/index') }}";

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
</script>
@endpush