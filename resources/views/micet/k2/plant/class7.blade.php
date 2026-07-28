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
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>
    <img src="{{ asset('assets/images/micet/k2/plant/class7/c1.png') }}" class="h-[7vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>To understand that bees and butterflies transport pollen.</li>
        <li>To understand how bees transport pollen.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start w-[45vw] items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>
    <h3 class="ptitle">Preparations</h3>

    <ul class="list-disc panel-ul">
        <li>Thematic Activity Book</li>
        <li>Some edible seeds (watermelon seeds, pumpkin seeds, sunflower seeds, peanuts, rice grains, peas, corn kernels, walnuts, chestnuts, cashew nuts, pine nuts, almonds)</li>
        <li>Prior to this activity, find out from your children's parents if their child is allergic to any form of seeds</li>
    </ul>
    <div class="text-white text-xl">For Optional Activity:
        <ul class="list-disc panel-ul">
            <li>Different types of fresh flowers, to show children pollen.</li>
            <li>Cotton-swabs, for children to collect pollen.</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Ask the children whether they have seen bees, where they saw
                them and describe what the bees were doing. Have the children
                describe the physical characteristics of the bees. Help the
                children recall that bees belong to the insect family and
                that there are fine hairs on their legs.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Have the children look at the bee transporting pollen.
            Encourage them to explain what the bee is doing and
            point out pollen in the picture.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class7/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Have the children look at the bee transporting pollen. Encourage them to explain
            what the bee is doing and point out pollen in the picture.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class7/c3.png') }}" class="w-[25vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Have the children look at the bee transporting pollen. Encourage them to explain
            what the bee is doing and point out pollen in the picture.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class7/c4.png') }}" class="w-[25vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Have the children look at the bee transporting pollen. Encourage them to explain
            what the bee is doing and point out pollen in the picture.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class7/c5.png') }}" class="w-[25vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Help the children understand that the bee is sucking nectar from the flower and at the same time, pollen will become stuck to its body and the fine hairs on its legs. In this way, the bee will transport the pollen to another flower when it flies to the other flower to gather nectar.</li>
        <li>Explain to the children that a flower will bear fruit only when it receives pollen from another flower.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class7/c6.png') }}" class="w-[25vw]" />
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Click on the video. Let the children observe how the bee is sucking nectar from the flower and at the same time, pollen will become stuck to its body and the fine hairs on its legs. In this way, the bee will transport the pollen to another flower when it flies to the other flower to gather nectar.</li>
    </ol>
    <video class="h-[11vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class7/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Ask the children what else, other than bees, can transport pollen. Guide the children to understand that butterflies can transport pollen just like bees.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Click on the video. Ask the children what the butterfly is doing (sucking nectar).</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class7/v2.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Click on the video. Ask the children what the butterflies are doing (sucking nectar and transporting pollen).</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class7/v3.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Encourage the children to think about why bees and butterflies like flowers. Help the children understand that flowers use their colours and fragrance to attract bees and butterflies. In this way, the flowers can receive pollen from other flowers to complete the pollination process and bear fruits.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class7/c7.png') }}" class="w-[25vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Click on the video. Ask the children to observe how to use a cotton-swab to simulate the bees' hairy legs to pick up pollen.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class7/v4.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Click on the video. Ask the children to observe how to use a cotton-swab to simulate the bees' hairy legs to pick up pollen.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/plant/class7/v5.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>(Optional activity) Distribute fresh flowers and cotton-swabs. Have the children observe the different types of flowers and pollen. Ask the children to imitate the bees by using the cotton-swabs to gather pollen from flowers.</li>
    </ol>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>



{{-- panel 12 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite the children to display the pollens they have gathered and describe the differences among pollen of these flowers.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to describe the process of bees and butterflies transporting pollen.</li>
            <li>Able to understand that flowers will only bear fruits after the pollination process.</li>
            <li>Able to use the cotton swabs to gather pollen from flowers.</li>
        </ul>
    </div>
</div>


{{-- panel 19 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Little Bees Transporting Pollen</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Encourage the children to look up information at home about other ways of transporting pollen.</li>
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
</script>
@endpush