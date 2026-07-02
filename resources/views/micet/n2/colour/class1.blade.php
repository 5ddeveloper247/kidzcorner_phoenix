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
    <h1 class="panel-title stroke">Classroom Activity 1: Little Rainbow Fairies</h1>
    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/n2/colour/class1/c1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class1/c2.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class1/c3.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class1/c4.png') }}" class="h-[8vw]" />
    </div>

    <h3 class="title">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>To be aware of the beautiful colours around us
        </li>
        <li>
            To learn the names of the seven colours of a rainbow
        </li>
        <li>
            To find out more about rainbows
        </li>
        <li>
            To see the need to work as a team
        </li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Rainbow Fairies</h1>

    <div>
        <h3 class="title">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Rainbow Fairies</h1>

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
    <h1 class="panel-title stroke">Our Colourful World</h1>

    <h3 class="p-title">Theme: Beautiful Colours</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c5.png') }}" class="w-[30vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Each of the rainbow fairies thinks that she is the most beautiful.
        They invite Mr Sun to be the judge.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c6.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-center w-full">
        <h3 class="p-title text-left">
            Have you ever seen a rainbow?<br>
            <span class="text-[#f7b94a]">Name the colours in the rainbow.</span>
        </h3>
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Red Fairy takes everyone to a place where the people are celebrating
        Chinese New Year. Almost everything is red, even the mandarin oranges!
        Unhappy Orange Fairy says mandarin oranges should be orange.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c7.png') }}" class="w-[27vw]" />

    <div class="flex items-center justify-around w-full">
        <h3 class="p-title text-left">
            Why are many things red during Chinese New Year?
            <br>
            <span class="text-[#f7b94a]">Talk about the significance of this colour in the Chinese culture.</span>
        </h3>
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Orange Fairy takes everyone to an orchard. The mandarin oranges and
        orange peais look so delicious that all the fairies want to eat them.
        Unhappy Yellow Fairy says that peais should be yellow.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c8.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-full">
        <h3 class="p-title text-left">
            Which 2 colours make orange? <br>
            <span class="text-[#f7b94a]">Children recoll the c'her 2 secondary colours and how these colours are
                obtained.</span>
        </h3>
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Yellow Fairy takes everyone to a desert. The cactus flowers, the sand
        and even the trees are yellow. Unhappy Green Fairy says that trees
        should be green.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c9.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-center w-full">
        <h3 class="p-title text-left">
            Name the yellow things you can see around us.<br>
            <span class="text-[#f7b94a]">Draw children's attention to the different shades of yellow.</span>
        </h3>
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Green Fairy takes everyone to a big green forest. There they see
        morning glory crying sadly. Unhappy Violet Fairy says that the morning
        glory should be violet and quickly turns it back to violet.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c10.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-full">
        <h3 class="p-title text-left">
            Why did the moming glory cry? <br>
            <span class="text-[#f7b94a]">Children relate instances when they have cried. Help children be
                sensitive to the feelings of others.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/n2/colour/class1/b1.png') }}" class="w-[5vw]" />
        <img src="{{ asset('assets/images/micet/n2/colour/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Violet Fairy takes everyone to a big field. The colour of the flowers,
        grapes, eggplants, butterflies and even the sky is violet. Unhappy Blue Fairy says
        that the sky should be blue.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c11.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-full">
        <h3 class="p-title text-left">
            Look at the colour violet. What colours do you need to mix to get violet?<br>
            <span class="text-[#f7b94a]">Find out when you are at the art comer.</span>
        </h3>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n2/colour/class1/b3.png') }}" class="w-[5vw]" />
            <img src="{{ asset('assets/images/micet/n2/colour/class1/b4.png') }}" class="w-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Blue Fairy takes everyone to the beach. The blue ocean and sky look <br>
        beautiful. Everyone sits here and enjoys the scenery. Evening comes but <br>
        the sky is still a bright blue. It feels strange.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c12.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-full">
        <h3 class="p-title text-left">
            Name the things that are blue.
            <br>
            <span class="text-[#f7b94a]">Say what the colours blue, green and purple have in common.</span>
        </h3>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n2/colour/class1/b5.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n2/colour/class1/b6.png') }}" class="h-[6vw]" />
        </div>
    </div>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Finally, Indigo fairy tums the sky into indigo. Everyone cheers when they<br>
        see the bright shining stars appear. Mr Sun says it feels strange when<br>
        many things are of the same colour.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c13.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-full">
        <h3 class="p-title text-left">
            Are these colours - blue and indigo - the same?<br>
            <span class="text-[#f7b94a]">Children look for things in shades of blue and indigo.</span>
        </h3>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n2/colour/class1/b7.png') }}" class="h-[5vw]" />
            <img src="{{ asset('assets/images/micet/n2/colour/class1/b8.png') }}" class="h-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">He says that it is very beautiful when we can see many different colours.
        So the Rainbow Fairies must always be together to be really beautiful.</h3>
    <img src="{{ asset('assets/images/micet/n2/colour/class1/c14.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-full">
        <h3 class="p-title text-left">
            What are the children doing?<br>
            <span class="text-[#f7b94a]">Talk about instances when "rainbows" are created, for example when the light
                roys travel thraugh water, prisms, mists.</span>
        </h3>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n2/colour/class1/b9.png') }}" class="w-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 14 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Rainbow Fairies</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Guide children to complete the corresponding activity in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 14 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Rainbow Fairies </h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let the children name the seven colours of a rainbow.<br>
                Ask children to name the colours on their clothes. </li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to name the seven colours of a rainbow.</li>
            <li>Understand that like the rainbow, we can be at our best when<br>we work as a team.</li>
        </ul>
    </div>
</div>


{{-- panel 15 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Little Rainbow Fairies</h1>
    <div>
    <h3 class="ptitle">Evaluation</h3>
    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Encourage children to paint the rainbow in the art corner.</li>
    </ol>
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
        const returnURL = "{{ url('/micet/n2/colour/index') }}";
        const doneURL = "{{ url('/micet/n2/colour/index') }}";

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