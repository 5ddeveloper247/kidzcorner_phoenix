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
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>
    <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
        </div>
    <img src="{{ asset('assets/images/micet/k1/fruits/activity/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center hidden">
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[50vw]" start="1">
            <li>
                To begin the lesson, ask the following questions to arouse the children's curiosity and interest.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>What are the fruits you can name? </li>
                    <li>Which is your favourite fruit? Why?</li>
                    <li>Can you identify the characteristics of some of the common fruits?
                        (shape, colour, taste, etc)</li>
                </ol>
            </li>

            <li>
                Elicit answers from the children, before proceeding on with the following
                questions to focus the children's attention on the key points of the courseware.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li> How many mummies did the Little Seeds meet while they are looking for
                        their own mummy?</li>
                    <li>Did the Little Seeds find their own mummy?</li>
                    <li>Who is the mummy of the Little Seeds?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center hidden">
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 1: Story - Let’s look for Mummy</h3>

        <div class="flex gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/activity/c3.png') }}" class="w-[20vw] h-[15vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>To understand that things can be done well when one concentrates and perseveres on a task</li>
                    <li>To understand what seeds are and to expand one's general knowledge</li>
                    <li>To be able to identify various common fruits</li>
                    <li>To learn to describe the colour, shape, taste and other characteristics of fruits</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw] hidden">
    <h1 class="panel-title stroke">Computer Activities: First Day at School</h1>

    <div>
        <h3 class="ptitle">Story</h3>

        <p class="panel-ul">Tinny and Whinny are two small seeds looking for their mother. Susie
            Swallow takes them to a big orchard. There are many fruits in the orchard,
            but the little seeds do not know who their mummy is. The fruit fairy gives
            them five treasure boxes. They follow the clues provided in the treasure
            boxes in terms of shape, place, colour, size and appearance, and find a
            watermelon, an orange, an apple, and a rambutan respectively. However,
            these fruits are not their mummy. However, the seeds are not discouraged
            and continue to look for their mother. Finally, they find their mummy - a
            cherry.</p>
    </div>
</div>

{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-[full] items-center">
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>

    <div class="text-start w-[58vw]">
        <h3 class="ptitle">Activity 2: Fruit doll</h3>

        <div class="flex gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/activity/c4.png') }}" class="w-[20vw] h-[15vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul">
                    <li>To promote creativity and imagination</li>
                    <li>To learn basic matching of shapes and colours</li>
                </ul>
                <h3 class="ptitle">Process</h3>
                <ul class="panel-ul">
                    <li> Select a fruit dolly head from the fruit platter
                        at bottom right of the screen. Select a fruit dolly
                        body from the fruit platter at bottom left of the screen.
                        Select fruit dolly hands from the tree branches.
                        Select a fruit dolly face from the plate of seeds at the
                        top left of the screen. Select buttons for fruit dolly's
                        clothes from the plate of seeds.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>

    <!-- Constrained width and shifted left to avoid the mascot -->
    <div class="text-start w-[58vw]">
        <!-- Left-aligned Activity Title -->
        <h3 class="ptitle text-[1.5vw]">Activity 3: Fruit conveyor belt</h3>

        <div class="flex gap-[3vw]">

            <img src="{{ asset('assets/images/micet/k1/fruits/activity/c5.png') }}" class="w-[20vw] h-[15vw]" />

            <!-- Compact Text Column -->
            <div class="flex-1 text-white">
                <h3 class="ptitle text-[1.3vw]">Objectives</h3>
                <ul class="list-disc pl-[1.2vw] panel-ul text-[1.05vw]">
                    <li>To improve sequencing and memory skills</li>
                    <li>To learn to discriminate between small differences between items</li>
                    <li>To know more about the different types of fruits</li>
                </ul>

                <h3 class="ptitle text-[1.3vw] font-bold">Process</h3>
                <div class="panel-ul text-[1.05vw]">
                    <p>Select the correct fruit to put on the conveyor belt based on the clues provided.</p>
                    <p><strong>Level 1:</strong> Select the correct fruit that corresponds to the sequence of fruits shown.</p>
                    <p><strong>Level 2:</strong> Select the fruits and put them in the right sequence on the conveyor belt.</p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>

    <div class="text-start w-[58vw]">
        <h3 class="ptitle">Activity 4: The magic tree</h3>

        <div class="flex gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/activity/c6.png') }}" class="w-[20vw] h-[15vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>To re-visit the concepts of size, numbers and colours</li>
                    <li>To learn to categorise different types of fruits</li>
                    <li>To practise using the keyboard</li>
                </ul>
                <h3 class="ptitle">Process</h3>
                <ul class="panel-ul w-[30vw]">
                    <li>Pluck the correct fruit requested by <br>
                        clicking on the fruit, fruit basket and<br>
                        correct number.<br>
                        Level 1: A few types of fruits.<br>
                        Level 2: More fruit varieties, sizes and<br>
                        colours.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>
    <div class="text-start">
        <h3 class="ptitle">Activity 5: Fruit parade</h3>

        <div class="flex justify-center gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k1/fruits/activity/c7.png') }}" class="w-[20vw] h-[15vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul text-[1.1vw] leading-snug">
                    <li>To learn about the texture and shape of various fruits through games</li>
                    <li>To develop reasoning skills</li>
                </ul>
                <h3 class="ptitle">Process</h3>
                <ul class="panel-ul text-[0.85vw] leading-tight">
                    <li>Guess the fruits according to the chants and pictures given. <br>
                        First select a fruit dolly. Based on the fruit dolly's self introduction
                        through a chant, select the correct pictures of the fruit, skin, shape
                        and core. If correct, the fruit will be animated. After guessing all
                        the fruits, one can choose a favourite fruit as the winner of the beauty
                        contest to print out.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw] hidden">
    <h1 class="panel-title stroke">Computer Activities: The Secret in the Orchard</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Closure</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Organise a field trip to an orchard.</li>
            <li>Ask each child for their favourite fruit and the reasons for his/her choice.</li>
            <li>Encourage the children to describe the characteristics of some common fruits they know and draw them.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to complete the activities in the courseware independently.</li>
            <li>Able to describe the colour, shape, taste and other characteristics of some common fruits.</li>
            <li>Able to understand the inner structure of fruits.</li>
        </ul>
    </div>
</div>





{{-- =============================================== --}}
{{-- All Buttons --}}
<div id="buttons" class="absolute flex flex-row gap-6 z-90">

    <button id="returnButton">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
    </button>

    <button id="homeButton">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
    </button>

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
        } // <-- FIXED: Added missing closing bracket here!


        // AUDIO FUNCTIONS

        function stopCurrentAudio() {
            if (currentAudio) {
                currentAudio.pause();
                currentAudio.currentTime = 0;
            }
        }

        function playSlideAudio(slideIndex) {
            stopCurrentAudio();
            const slide = slides[slideIndex];
            let audioSrc = slide.getAttribute('data-slide-audio');

            if (!audioSrc) {
                const audioElement = slide.querySelector('[data-slide-audio]');
                if (audioElement) {
                    audioSrc = audioElement.getAttribute('data-slide-audio');
                }
            }

            if (audioSrc) {
                currentAudio = new Audio(audioSrc);
                currentAudio.play().catch(err => console.log('Audio play failed:', err));
            }
        }


        // DISPLAY FUNCTIONS

        function showSlide(slideIndex) {
            stopCurrentAudio();

            slides.forEach((slide, index) => {
                if (index === slideIndex) {
                    slide.classList.remove("hidden");
                } else {
                    slide.classList.add("hidden");
                }
            });

            playSlideAudio(slideIndex);

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

        // SPEECH SYNTHESIS ENGINE FIXED
        function speakLetter(letter) {
            if ('speechSynthesis' in window) {
                window.speechSynthesis.cancel(); // Stop anything playing
                const utterance = new SpeechSynthesisUtterance(letter);
                utterance.rate = 0.8; // Clear speaking pace for kids
                window.speechSynthesis.speak(utterance);
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