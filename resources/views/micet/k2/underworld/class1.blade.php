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
    <h1 class="panel-title stroke">Classroom Activity 1: In Search of Chatter Catfish</h1>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c1.png') }}" class="h-[6vw]" />
    <h3 class="title">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>Identify various sea creatures and their characteristics</li>
        <li>Enjoy listening to a story</li>
        <li>Develop exploration skills</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: In Search of Chatter Catfish</h1>

    <div>
        <h3 class="title">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: In Search of Chatter Catfish</h1>

    <div>
        <h3 class="title">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Tell the story using suggested questions and activities to reinforce the teaching points of the story.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">In Search of Chatter Catfish</h1>

    <h3 class="p-title">Theme: Underwater World</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">One day, Tina and Candy find a bottle with a note floating in the river
        The note is from Chatter the Catfish. Who is Chatter the Catfish? They
        decide to search for it in the sea.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c3.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Do you know what a drift bottle is?
            <br>
            <span class="text-[#f7b94a]">Guide the children in identifying the uses of a drift bottle and <br>
                invite them to make their own drift bottle.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/underworld/class1/b1.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Tina and Candy find a crab at the beach. The crab has ten legs and a
        hard shell. It walks sideways. However, it doesn't know what Chatter the
        Catfish looks like.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c4.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-left">
            Have you ever seen a crab? Can you imitate the way it moves?
            <br>
            <span class="text-[#f7b94a]">Help children to develop the ir body coordination skills.. <br>
                and to learn to console those who are sad.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/underworld/class1/b5.png') }}" class="w-[5vw]" />
            <img src="{{ asset('assets/images/micet/k2/underworld/class1/b2.png') }}" class="w-[5vw]" />
        </div>
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Tina and Candy then dive into the sea and see a jellyfish. It has long and
        poisonous tentacles to grab food. However, it doesn't know anything
        about Chatter.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c5.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            How do you think the jellyfish got its name?<br>
            <span class="text-[#f7b94a]">Encourage the children to use their imagination and make a guess.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/underworld/class1/b3.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Next, they see a blue whale. It is the biggest animal in the world. It is
        even heavier than 50 elephants! It gives a powerful snort and sprays mist
        from its blowhole when it breathes. However, it doesn't know Chatter as well.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c6.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Why are whales not considered fish?<br>
            <span class="text-[#f7b94a] text-sm">Guide the children in understanding that a whale is not a fish, but a marine <br>
                mammal that gives birth to baby whales. They do not lay eggs.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/underworld/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Look at this pretty fish! It is a clown fish. Its body has a special layer that
        protects it from the poisonous tentacles of sea anemones. This allows it to stay amongst sea anemones and to prevent itself from being eaten by bigger fishes. It doesn't know Chattertoo.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c7.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What other fishes do you know? What do they look like? <br>
            <span class="text-[#f7b94a]">Encourage children to describe the physical characteristics of the
                various fishes (e.g. shapes, colours, etc.).</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/underworld/class1/b3.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Tina and Candy then meet a turtle. It is different from the normal tortoises.
        It lives in the sea. It is large and weighs more than 10 adults! It also
        doesn't know Chatter.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c8.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What are the other differences between a tortoise and a turtle?<br>
            <span class="text-[#f7b94a]">Have the children compare the differences between a tortoise and a
                turtle.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/underworld/class1/b4.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Finally, Tina and Candy meet an octopus. It has eight long arms. Its skin
        changes colour according to its environment. It tells them that Chatter
        lives in the river.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c9.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What are the uses of the octopus arms?<br>
            <span class="text-[#f7b94a]">Explain to the children the uses of the suction cups on the
                octopus arms.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/underworld/class1/b4.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Tina and Candy go to the river. They finally know that Chatter is a catfish
        with long barbels. However, Chatter is frightened and flees into the water
        when it sees Candy.</h3>
    <img src="{{ asset('assets/images/micet/k2/underworld/class1/c10.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What is the difference between a catfish and a clown fish?<br>
            <span class="text-[#f7b94a]">Guide the children in understanding the differences between
                a fresh water fish and a marine fish.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/underworld/class1/b4.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: In Search of Chatter Catfish </h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite the children to name some sea creatures that they know. Ask questions to stir children's interest in sea creatures. (e.g. Are sea anemones plants or animals?)</li>
            <li>Recap how in the story Tina and Candy asked questions to gain information. Encourage children to do the same.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to name some sea creatures and their characteristics.</li>
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