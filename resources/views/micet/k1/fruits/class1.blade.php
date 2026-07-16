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
    <h1 class="panel-title stroke">Classroom Activity 1: Little Seeds Find Their Mummy</h1>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c1.png') }}" class="h-[7vw]" />


    <h3 class="title">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>Understand what seeds are</li>
        <li>Recognise and identify some common fruits</li>
        <li>Learn to describe the colour, shape, taste and other</li>
        <li>characteristics of fruits</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Seeds Find Their Mummy</h1>

    <div>
        <h3 class="title">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Seeds Find Their Mummy</h1>

    <div>
        <h3 class="title">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Tell the story using suggested questions and activities to reinforce the
                teaching points of the story.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Little Seeds Find Their Mummy</h1>

    <h3 class="p-title">Theme: Fruits</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">One day, two little white round seeds, Tinny and Whinny, pop out of a
        rubbish bin in the park. They do not know who their mother is. So, they
        ask Susie Swallow to help them to find their mother.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c3.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between">
        <h3 class="p-title text-left">
            Can you name some things with seeds that you will find in school?<br>
            <span class="text-[#f7b94a]">Cultivate children's interest in nature and help them expand their <br>
                knowledge through observation.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/fruits/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Susie Swallow takes them to an orchard. The Little Seeds think that Mrs.
        Banana is their mother, but she tells them that banana seeds are small
        like sesame seeds, and not like them at all.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c4.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-left">
            Do you know what banana seeds look like? How are they different
            from apple seeds?<br>
            <span class="text-[#f7b94a]">Guide the children to do a comparison study, and help them to
                express their findings.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/fruits/class1/b1.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Just then, a fruit fairy appears. She gives five treasure boxes to the Little
        Seeds to help them find their mother. "Do not worry. Have patience
        and you will find your mummy", says the fairy.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c5.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between ">
        <h3 class="p-title text-left">
            Why does the fruit fairy not tell the Little Seeds who their mother is? <br>
            <span class="text-[#f7b94a]">Teach the children to be independent by helping them understand the <br>
                importance of overcoming an obstacle by themselves.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/fruits/class1/b3.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">"Your mummy is round", says the first treasure box. So, the Little Seeds
        find a watermelon. But their mother is not a watermelon because
        watermelons have black and flat seeds.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c6.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Can you name some othertypes of melon other than the watermelon? Do 
            they have special features?<br>
            <span class="text-[#f7b94a]">Help the children to identify othertypes of melons by their names, shape,
                colour and other characte ristics.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/fruits/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">"Your mummy grows on trees", says the second treasure box. So, the
        Little Seeds find an orange. But their mother is not an orange because
        oranges have small white seeds.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c7.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Do you know what is special about the orange skin? What other fruits are
            similar to the orange?<br>
            <span class="text-[#f7b94a]">Develop the children's observation skill. Help them understand the
                characte ristics of citrus fruit. </span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/fruits/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">"Your mummy is red", says the third treasure box. So, the Little Seeds
        find an apple. But their mother is not an apple because apples have
        brown seeds.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c8.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Do you like to eat apples? Do you know what nutrients apples have?<br>
            <span class="text-[#f7b94a]">Encourage the children to eat more fruits as they are a good sourceof vitamins.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k1/fruits/class1/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class1/b3.png') }}" class="h-[4.8vw]" />
        </div>
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">"Your mummy is small", says the fourth treasure box. So, the Little
        Seeds find a rambutan. But their mother is not a rambutan because
        rambutans have big white seeds.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c9.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What do you think a rambutan looks like?<br>
            <span class="text-[#f7b94a]">Encourage the children to use their imagination/ observation and
                express their thoughts.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k1/fruits/class1/b2.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/k1/fruits/class1/b3.png') }}" class="h-[4.8vw]" />
        </div>
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">"Your mummy has smooth skin", says the fifth treasure box. So, the
        Little Seeds find a cherry. This time, they find their mother. The fruit fairy
        appears and congratulates them.</h3>
    <img src="{{ asset('assets/images/micet/k1/fruits/class1/c9.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[55vw]">
        <h3 class="p-title text-left">
            Can you recall how the Little Seeds found their mother? What other
            fruits did they meet before they eventually found their mother?<br>
            <span class="text-[#f7b94a]">Deepen the children's understanding of the story and help them to
                develop logical thinking skills.</span>
        </h3>

        <img src="{{ asset('assets/images/micet/k1/fruits/class1/b1.png') }}" class="w-[8vw]" />

    </div>
</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Seeds Find Their Mummy</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let the children talk about their favourite fruits.
                Encourage them to describe each fruit's shape, colour,
                taste and other characteristics.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to recognise common fruits.</li>
            <li>Able to identify the characteristics of different fruits through comparison.</li>
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