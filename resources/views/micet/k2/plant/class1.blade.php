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
    <h1 class="panel-title stroke">Classroom Activity 1: Where Do Fruits Come From?</h1>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c1.png') }}" class="h-[7vw]" />


    <h3 class="title">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>To understand the entire growth process of fruit.</li>
        <li>To know some phrases related to fruit.</li>
        <li>To develop observation and exploration skills in nature.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Where Do Fruits Come From?</h1>

    <div>
        <h3 class="title">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Where Do Fruits Come From?</h1>

    <div>
        <h3 class="title">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Tell the story using suggested questions and activities to reinforce the teaching points of the story.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Where do fruits come from?</h1>

    <h3 class="p-title">Theme: The World of Plants</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Bobo likes to eat fruit. He wants to find out where fruit comes from. He
        goes to the library to look for books on apples. He finds out that apples
        grow on trees. He decides to go to the orchard to look at apple trees.</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c3.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between">
        <h3 class="p-title text-left">
            Other than asking your parents orteachers, what will you do when you face
            a problem you cannot understand?<br>
            <span class="text-[#f7b94a]">Develop the children's abilities to reflect independently and to possess the
                drive to explore.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/plant/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Bobo reaches the orchard and finds an apple tree. Wow! It is so tall! But
        the apple tree tells Bobo it grows from a small seed.</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c4.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-left">
            What do the apple seeds look like? Cut an apple to find out.<br>
            <span class="text-[#f7b94a]">Extend the children's knowledge of apple seeds.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/plant/class1/b3.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">How does a small seed grow into a big tree? The apple tree says that it
        is different from humans. It only needs sunlight, air, water and minerals
        to grow.</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c5.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between ">
        <h3 class="p-title text-left">
            What are the differences between the apple tree's food and your food? <br>
            <span class="text-[#f7b94a]">Help the children understand that plants are able to produce their own food.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/plant/class1/b3.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">The apple tree grows by eating this food. But how old is the tree? Just
        look at the tree trunk! The tree trunk has a ring on it for every year it
        grows. The rings are called "growth rings".</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c6.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Do you know how to calculate your age?<br>
            <span class="text-[#f7b94a]">Help the children understand their birth month and year.</span>
        </h3>
    </div>
    <div class="flex">
        <img src="{{ asset('assets/images/micet/k2/plant/class1/b2.png') }}" class="h-[5vw]" />
        <img src="{{ asset('assets/images/micet/k2/plant/class1/b1.png') }}" class="h-[4.8vw]" />
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">After the seed grows into a big tree, it blooms. Then how do fruits grow?
        Just then, a bee flies by and explains that the bees help apple flowers
        transport pollen.</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c7.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Have you seen pollen before? Explain how the bee transports pollen.<br>
            <span class="text-[#f7b94a]">Train the children's verbal expression and observation skills.. </span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b3.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b4.png') }}" class="h-[4.8vw]" />
        </div>
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">After apple flowers receive the pollen, the petals wither and drop off.
        Then the tree bears small fruits. After a period of time, the small fruits
        tum into big red apples.</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c8.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Have you noticed flowers on a tree turned into fruits?<br>
            <span class="text-[#f7b94a]">Develop the children's curiosity and observation skills.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b3.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b2.png') }}" class="h-[4.8vw]" />
        </div>
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">The apple tree tells Bobo that many other fruits also grow from small
        seeds, slowly sprouting from the ground into a tree, then blooming
        and bearing fruit, just like the apple tree.</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c9.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Can you explain where apples come from?<br>
            <span class="text-[#f7b94a]">Help the children name the apples' growth process in sequence.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b3.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b4.png') }}" class="h-[4.8vw]" />
        </div>
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">The apple tree gives Bobo a small lovely seed. Bobo takes the seed
        and goes home happily. He plans to grow an apple tree in his garden.</h3>
    <img src="{{ asset('assets/images/micet/k2/plant/class1/c9.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[55vw]">
        <h3 class="p-title text-left">
            Do you want to grow a fruit tree? How do you want to grow it?<br>
            <span class="text-[#f7b94a]">If possible, try to plant a seed with the children.</span>
        </h3>

        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b3.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/k2/plant/class1/b2.png') }}" class="h-[4.8vw]" />
        </div>

    </div>
</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Where Do Fruits Come From?</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite the children to talk about the growth process of a fruit tree again.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to explain the entire growth process of a fruit tree.  </li>
            <li>Able to answer some questions in the story.</li>
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