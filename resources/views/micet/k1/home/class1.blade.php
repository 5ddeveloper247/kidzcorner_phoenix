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
        font-size: 1.25vw;
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
    <h1 class="panel-title stroke">Classroom Activity 1: Sue’s Home</h1>
    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/k1/home/class1/c1.png') }}" class="h-[6.5vw]" />
    </div>


    <h3 class="title">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>Understand the uses of different rooms in a house</li>
        <li>Understand the uses of different things in a house</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Sue’s Home</h1>

    <div>
        <h3 class="title">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Sue’s Home</h1>

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
    <h1 class="panel-title stroke">Sue’s Home</h1>

    <h3 class="p-title">Theme: Home Sweet Home</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Bobo is going to Sue's house to play. Sue lives in a terrace house.
        There is a beautiful garden in front of her house.</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c3.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            How does Bobo get to Sue's house?<br>
            <span class="text-[#f7b94a]">Teach children how to give directions, for example, go forward
                and backward, tum leff and right ..</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/home/class1/b1.png') }}" class="w-[4.5vw]" />
        <img src="{{ asset('assets/images/micet/k1/home/class1/b3.png') }}" class="w-[4.5vw]" />
        <img src="{{ asset('assets/images/micet/k1/home/class1/b6.png') }}" class="w-[4.5vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Bobo finally reaches Sue's house after passing the playground,
        supermarket and kindergarten. Sue shows Bobo to the living room
        and introduces her best friend to her parents.</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c4.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-left">
            What should you do when you visit your friend?<br>
            <span class="text-[#f7b94a]">Discuss with children the importance of proper etiquette such as
                greeting their friend's parents.</span>
        </h3>
        <div class="flex items-center gap-[0.5vw]">
            <img src="{{ asset('assets/images/micet/k1/home/class1/b6.png') }}" class="w-[5vw] h-[6.2vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class1/b7.png') }}" class="w-[5vw] h-[6.2vw]" />
        </div>
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Sue takes Bobo to her bedroom. There is a small and comfortable bed
        in her room. Both Sue and Bobo start to play. They play on the bed.
        They throw pillows at each other..</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c5.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Should Bobo and Sue play on the bed? Would you do the same thing?<br>
            <span class="text-[#f7b94a]">Help children understand why they should not play on the bed.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/home/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Sue and Bobo go to the garden to play. There is a kitten in the garden.
        The playful kitten joins them in the game. It rolls on the ground and
        gets itself dirty.</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c6.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-left">
            Why does the kitten want to play with Sue and Bobo?<br>
            <span class="text-[#f7b94a]">Guide children to understand that pets love to be in contact with
                people.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/home/class1/b4.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Sue and Bobo want to bathe the kitten. They carry the kitten to the
        bathroom. Sue's father sees them and helps them to give the kitten a
        bath. The kitten is clean again.</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c7.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Do you know how to bathe yourseIf?<br>
            <span class="text-[#f7b94a]">Guide children to develop good hygiene habits. Encourage them <br>
                to be responsible for their own cleanliness."</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/home/class1/b2.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">"Ding dong!" goes the doorbell. Who is it? Sue looks through the
        peephole. It is her father's friend, Uncle Lee.</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c8.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What would you do if a stranger knocks on your door?<br>
            <span class="text-[#f7b94a]">Guide children to understand that they should not open the doorfor
                strangers.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/home/class1/b1.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Sue invites Uncle Lee into the house and serves him drinks. Then she
        goes into the kitchen. Wow! That smells very good! Father has finished
        preparing lunch.</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c9.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What are some things that you can find in the kitchen?<br>
            <span class="text-[#f7b94a]">Guide children to recognise the things that can be found in the <br>
                kitchen, for example, the microwave oven, pots and pans.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/home/class1/b5.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Sue invites the guests into the dining room. They chat happily and
        enjoy their lunch. Bobo is very happy to spend the day at Sue's home.</h3>
    <img src="{{ asset('assets/images/micet/k1/home/class1/c10.png') }}" class="w-[30vw]" />

    <div class="flex items-center w-[45vw]">
        <h3 class="p-title text-left">
            What are some of the exercises which you do in the moming? Let's try some of them.<br>
            <span class="text-[#f7b94a]">Discuss the importance of friendship and encourage children to <br>
                do different activities with their friends.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k1/home/class1/b7.png') }}" class="w-[4.5vw]" />
    </div>
</div>



{{-- panel 13 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Sue’s Home</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite children to describe their home and talk about the
                different rooms and things in their house.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to sate the uses of the different rooms in a house.</li>
            <li>Able to state the names and uses of the different things in a
                house</li>
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
        const returnURL = "{{ url('/micet/k1/home/index') }}";
        const doneURL = "{{ url('/micet/k1/home/index') }}";

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