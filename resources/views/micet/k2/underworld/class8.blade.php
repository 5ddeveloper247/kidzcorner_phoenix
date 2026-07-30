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
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>Understand how some sea creatures protect themselves</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <h3 class="ptitle">Preparations</h3>

    <ul class="list-disc panel-ul w-[45vw] items-center">
        <li>Thematic Activity Book</li>
    </ul>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Invite children to recall some ocean food chains. Guide children to understand that as the sea creatures can be eaten by other sea creatures in the food chain anytime, they have their own ways to protect themselves.</li>
            <li>In the next few slides, let the children observe and talk about how sea creatures protect themselves. Provide some hints to guide children to understand the contents of each photo. Explain how each sea creature protects itself, e.g. uses spines, poison, swims in a group, has protective colours, etc.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>A stickleback uses its sharp spines to ward off enemies.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>A sea urchin uses its long, needle-sharp spines to protect itself.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c3.png') }}" class="w-[25vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>When in danger, a puffer fish puffs up its body like a balloon, where its poisonous spines become pointy, to scare away its enemies.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c4.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>A lionfish protects itself with the sharp, poisonous spines in its fins./li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c5.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>A clown fish lives with the sea anemones for protection. Sea anemones have poisonous tentacles with stinging cells and that is why many fishes stay away from them, including those fishes that are enemies of the clown fish.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c6.png') }}" class="w-[25vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>A butterfly fish has circular marking that look like eyes, close to its tail. This false eyes fool the enemies about which is the head of the fish and which way the butterfly fish is swimming..</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c7.png') }}" class="w-[25vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Inform the children: Many fish travel together in a large group called school. Ask the children: Why do you think they do this?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c8.png') }}" class="w-[25vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Help the children understand that these fish swim together in a large group for protection. A large school of fish makes it difficult for their enemies to pick out a target.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c9.png') }}" class="w-[25vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Click to play the video. Let the children look at the fish swimming together in a school, where the shark that is following them does not attack them.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class8/v1.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Flatfish or flounder lives on the ocean floor. Its flat body and colours make it easier for the flatfish to blend into the environment and hide from its enemies.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c10.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Click to play the video. Let the children observe the protective colour of a flatfish and how it swims with its flat body.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class8/v2.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Click to play the video. Let the children observe how the flatfish uses its protective colour to hide on the ocean floor.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class8/v3.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="15">
        <li>When in danger, the octopus, squid and cuttlefish use the same way to escape. Ask children: Do you know what way it is?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c11.png') }}" class="w-[35vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>Click to play the video. Let the children observe how the octopus escapes when in danger. (The octopus, squid and cuttlefish can shoot a cloud of ink out of their bodies, which confuses their enemies and gives them time to swim away.)</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class8/v4.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="17">
        <li>Besides shooting out ink, the octopus, squid and cuttlefish also camouflage themselves as a way of protection. They can change their protective colours to match their surroundings and hide from their enemies.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c12.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="18">
        <li>Click to play the video. Let the children observe how the octopus camouflages itself by changing its protective colours to match its surroundings.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class8/v5.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="19">
        <li>Click to play the video. Let the children observe how the cuttlefish camouflages itself by changing its protective colours to match its surroundings.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class8/v6.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="20">
        <li>The crab also uses camouflage to protect itself. Look, this crab's protective colours are similar to the sand in its surroundings.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c13.png') }}" class="w-[25vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="21">
        <li>Click to play the video. Let the children observe how this crab camouflages itself among the rocks (its protective colours are similar to the rocks).</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/underworld/class8/v7.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="22">
        <li>A seahorse also uses camouflage as a way to protect itself. It swims very slowly but can change its protective colours to match its surroundings and hide from enemies.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/underworld/class8/c14.png') }}" class="w-[25vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="23">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Guide children to discuss the different ways used by the sea creatures to protect themselves.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to state some of the ways used by sea creatures to protect themselves.</li>
        </ul>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Self Protection</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let the children gather information from home on how some other sea creatures protect themselves and share this information with their classmates.</li>
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
        const returnURL = "{{ url('/micet/n2/school/index') }}";
        const doneURL = "{{ url('/micet/n2/school/index') }}";

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