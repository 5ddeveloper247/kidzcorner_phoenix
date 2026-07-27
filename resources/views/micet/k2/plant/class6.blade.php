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
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c1.png') }}" class="h-[7vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>To understand that trees come in different shapes and sizes.</li>
        <li>To understand that all trees have roots, trunks, leaves, flowers <br> and plant regardless of their shapes and sizes.</li>
        <li>To identify some common trees.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Drawing papers, coloured pencils.</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Encourage the children to observe and then name the various parts of the apple tree: roots, trunks, branches, leaves, flowers and fruits.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/plant/class6/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Ask the children whether all trees are the same. Encourage them to name some trees and describe their characteristics (e.g. shape, size, etc.).</li>
    </ol>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Ask the children if they recognise this tree. Encourage
            them to identify some obvious characteristics (e.g. shape,
            size, colour, etc). Help the children to learn the name of this tree.</li>
    </ol>
    <div class="flex gap-2">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c3.png') }}" class="w-[20vw] h-[17vw]" />
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c4.png') }}" class="w-[20vw] h-[17vw]" />
    </div>
    <p class="text-white text-center">apple tree</p>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Ask the children if they recognise this tree. Encourage them to identify some obvious characteristics (e.g. shape, size, colour, etc). Help the children to learn the name of this tree.</li>
    </ol>
    <div class="flex flex-col">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c5.png') }}" class="w-[30vw]" />
        <p class="text-white text-center">coconut tree</p>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Ask the children if they recognise this tree. Encourage them to identify some obvious characteristics (e.g. shape, size, colour, etc). Help the children to learn the name of this tree.</li>
    </ol>
    <div class="flex flex-col">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c6.png') }}" class="w-[30vw]" />
        <p class="text-white text-center">pine tree</p>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Ask the children if they recognise this tree. Encourage them to identify some obvious characteristics (e.g. shape, size, colour, etc). Help the children to learn the name of this tree.</li>
    </ol>
    <div class="flex flex-col">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c7.png') }}" class="w-[30vw]" />
        <p class="text-white text-center">willow tree</p>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Ask the children if they recognise this tree. Encourage them to identify some obvious characteristics (e.g. shape, size, colour, etc). Help the children to learn the name of this tree.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/plant/class6/c8.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c8.png') }}" class="w-[30vw]" />
        <p class="text-white text-center">coconut tree</p>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c10.png') }}" class="w-[40vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>flowers</p>
            <p>leaves and fruits</p>
            <p>a coconut grows<br> into a new tree</p>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c11.png') }}" class="w-[30vw] h-[17vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>pine tree</p>
            <p>tree trunk and branches</p>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c12.png') }}" class="w-[30vw] h-[17vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>leaves and flowers</p>
            <p>fruits</p>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit"> 
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c13.png') }}" class="w-[30vw] h-[17vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>walnut tree</p>
            <p>tree trunk and branches</p>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col items-center mt-4">
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/plant/class6/c14.png') }}" class="w-[30vw] h-[17vw]" />
            <div class="flex flex-col justify-around h-full ml-4 text-white text-lg space-y-8">
                <p>fruits</p>
                <p>walnut</p>
            </div>
        </div>

        <div class="mt-2 text-white text-lg text-start">
            <p>leaves and flowers</p>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c15.png') }}" class="w-[30vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>willow tree</p>
            <p>tree trunk and brances</p>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c16.png') }}" class="w-[40vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>flower buds</p>
            <p>flowers</p>
            <P>a bee pollinating the flower</P>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c17.png') }}" class="w-[40vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>oak tree</p>
            <p>tree trunk and brances</p>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Guide the children to understand that all trees, regardless of size and shape, have roots, trunks, leaves, flowers and fruits.</li>
    </ol>
    <div class="flex flex-col text-center w-fit">
        <img src="{{ asset('assets/images/micet/k2/plant/class6/c18.png') }}" class="w-[40vw]" />
        <div class="text-white text-center flex justify-between w-full">
            <p>flowers</p>
            <p>leaves and fruits</p>
            <P>a fruit grow into a new tree</P>
        </div>
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <ol class="list-decimal panel-ul" start="18">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 28 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: The Fruit Family</h1>

    <div class="text-start flex flex-col justify-between h-full w-[45vw]">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul">
            <li>Conclude and help the children understand that different species of trees produce different types of leaves, trunks, branches, flowers and fruits.</li>
            <li>Invite the children to display their drawings of trees and explain what is special about their trees.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul">
            <li>Able to explain that all trees have common characteristics: roots, trunks, leaves, flowers and fruits.</li>
            <li>Able to identify some common trees.</li>
            <li>Able to draw a special tree according to a tree's basic characteristics by using the imagination.</li>
        </ul>
    </div>
</div>



{{-- panel 19 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Fruit Daily</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Bring the children to a garden or park. Help the children identify
                and learn the names of some trees. Encourage the children to describe
                the trunks, branches, leaves, flowers and fruits of the trees. Discuss
                the similarities and differences among the different trees and name the
                characteristics of each type of tree. The teacher may wish to take photographs
                of different types of trees to paste in the learning corner in the classroom.</li>
            <li>Take the children outdoors to draw trees.</li>
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