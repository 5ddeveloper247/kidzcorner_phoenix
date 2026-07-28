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
    <h1 class="panel-title stroke">Computer Activities: Where do Fruits Come From?</h1>
    <img src="{{ asset('assets/images/micet/k2/plant/activity/c4.png') }}" class="h-[8vw]" />
    <img src="{{ asset('assets/images/micet/k2/plant/activity/c1.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center hidden">
    <h1 class="panel-title stroke">Computer Activities: Where do Fruits Come From?</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[50vw]" start="1">
            <li>
                To begin the lesson, ask the following questions to arouse the children's curiosity and interest.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>How do fruits grow? </li>
                    <li>Name the fruits you know.</li>
                    <li>What is your favourite fruit?</li>
                </ol>
            </li>

            <li>
                Elicit answers from the children, before proceeding on with the following
                questions to focus the children's attention on the key points of the courseware.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li> Where do apples come from?</li>
                    <li>How did the fruit tree grow? How did it absorb nutrients?</li>
                    <li>How do people know the age of a tree?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Where do Fruits Come From?</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 1: Story - Where do fruits come from?</h3>

        <div class="flex gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/activity/c2.png') }}" class="w-[20vw] h-[15vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>To learn the growth process of apples.</li>
                    <li>To learn vocabulary related to plants.</li>
                    <li>To gain some knowledge about fruit trees.</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Computer Activities: First Day at School</h1>

    <div>
        <h3 class="ptitle">Story</h3>

        <p class="panel-ul">Bobo wants to find out where fruit comes from. He goes to the library to look
            for information. He finds out that apples grow on trees. Bobo decides to go
            to the orchard to look at apple trees. At the orchard, he sees a bee
            gathering pollens from the apple trees. The bee tells Bobo that some time
            after apple flowers receive pollen, the petals would wither and drop off.
            After a period of time, the tree will bear apples. Bobo follows the bee to the
            orchard. The apple tree gives Bobo an apple. After eating it, Bobo finds a
            seed in it. This is how the apple tree grows, from a small seed into a big tree.
            But what does the apple tree eat to grow so tall? Its leaves can absorb
            sunlight and nutrients while its roots can absorb water and minerals from the
            soil. Bobo wants to know the age of the apple tree. The apple tree tells him
            to count the rings on its trunk to find out its age.</p>
    </div>
</div>

{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-[full] items-center">
    <h1 class="panel-title stroke">Computer Activities: Where do Fruits Come From?</h1>

    <div class="text-start w-[58vw]">
        <h3 class="ptitle">Activity 2: Counting</h3>

        <div class="flex gap-[3vw]">
            <img src="{{ asset('assets/images/micet/k2/plant/activity/c3.png') }}" class="w-[20vw] h-[15vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul">
                    <li>To learn basic addition and subtraction.</li>
                    <li>To practise logical-mathematical skills.</li>
                </ul>
                <h3 class="ptitle">Process</h3>
                <ul class="panel-ul">
                    <li> The children calculate the equation
                        based on the prompts on the screen
                        and select the correct answer from the
                        three options provided.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw] hidden">
    <h1 class="panel-title stroke">Computer Activities: Where do Fruits Come From?</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Closure</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Upon completion, invite a few children to answer the questions posed at the beginning of the lesson.</li>
            <li>Invite the children to explain, in their own words, the growth cycle of fruits.</</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to complete the various activities in the courseware independently.</li>
            <li>Able to understand the growth cycle of fruit trees.</li>
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