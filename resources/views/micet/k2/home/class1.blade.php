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
    <h1 class="panel-title stroke">Classroom Activity 1: Mr Giant Moves</h1>
    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/k2/home/class1/c1.png') }}" class="h-[6.5vw]" />
    </div>


    <h3 class="title">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>Learn how to get along with others and be considerate.</li>
        <li>Describe the characteristics of various living environments.</li>
        <li>Appreciate the need for recycling.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Mr Giant Moves</h1>

    <div>
        <h3 class="title">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Mr Giant Moves</h1>

    <div>
        <h3 class="title">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Tell the story using suggested questions and activities to reinforce the teaching points of the story.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Mr Giant Moves House</h1>

    <h3 class="p-title">Theme: Home Sweet Home</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Fairy Tale Land was a happy place with many fairy tale characters. It was
        filled with sunshine, the sweet scent of flowers and laughter. Mr Giant
        lived under a bridge.</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c3.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Do you like Fairy Tale Land? Name the fairy tale characters that you know.<br>
            <span class="text-[#f7b94a]">Recall with the children the fairy tales that they had read or listened to.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/home/class1/b1.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">However, over time, more and more people came to live in Fairy Tale
        Land. There were people crossing the bridge day and night and Mr Giant
        could not sleep because of the noise.</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c4.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-left">
            If someone disturbs you the whole day and you are unable to rest, how
            would you feel?<br>
            <span class="text-[#f7b94a]">Guide the children in expressing empathy for others and being considerate. </span>
        </h3>
        <div class="flex items-center gap-[0.2vw]">
            <img src="{{ asset('assets/images/micet/k2/home/class1/b4.png') }}" class="w-[5vw] h-[6.2vw]" />
            <img src="{{ asset('assets/images/micet/k2/home/class1/b6.png') }}" class="w-[5vw] h-[6.2vw]" />
        </div>
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Mr Giant decided to move to a tree house. It was very windy in the tree
        house and the view was great! But his neighbours in the trees made a lot
        of noise the whole day.</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c5.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            What are the sounds that some animals make? Let's imitate th em!<br>
            <span class="text-[#f7b94a]">Get the children to imitate the sounds that some animals make.
                Introduce the meaning of onomatopoeia.</span>
        </h3>
        <div class="flex items-center gap-[0.2vw]">
            <img src="{{ asset('assets/images/micet/k2/home/class1/b1.png') }}" class="w-[5vw] h-[6.2vw]" />
            <img src="{{ asset('assets/images/micet/k2/home/class1/b7.png') }}" class="w-[5vw] h-[6.2vw]" />
        </div>
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Mr Giant had to move to a small boat. It was very peaceful at the boat
        house. He could fish and swim. It was great! However, the waves swept
        rubbish onto the boat house!</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c6.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-around w-[45vw]">
        <h3 class="p-title text-left">
            Where did the rubbish in the sea come from?<br>
            <span class="text-[#f7b94a]">Explain that it is incorrect to litter. Teach about recycling.</span>
        </h3>
        <div class="flex items-center gap-[0.2vw]">
            <img src="{{ asset('assets/images/micet/k2/home/class1/b4.png') }}" class="w-[5vw] h-[6.2vw]" />
            <img src="{{ asset('assets/images/micet/k2/home/class1/b5.png') }}" class="w-[5vw] h-[6.2vw]" />
        </div>
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">Thus, Mr Giant moved to the cold North Pole. He built an igloo. He was
        very happy that there was no noise or rubbish here.</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c7.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Which is the coldest place in the world other than the North Pole?
            Who lives there?<br>
            <span class="text-[#f7b94a]">Look for information with children on animals living in the North Pole
                and their living environment.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/home/class1/b5.png') }}" class="w-[5vw]" />
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">There was no one here except him self. Mr Giant felt very lonely. Slowly,
        he started to miss his friends in Fairy Tale Land.</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c8.png') }}" class="w-[25vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            Who are your good friends? When would you miss your friends?<br>
            <span class="text-[#f7b94a]">Encourage the children to keep in touch with others and understand that
                everyone needs to be in touch with people.</span>
        </h3>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k2/home/class1/b4.png') }}" class="w-[5vw] h-[6.2vw]" />
            <img src="{{ asset('assets/images/micet/k2/home/class1/b6.png') }}" class="w-[5vw] h-[6.2vw]" />
        </div>
    </div>
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">In the end, Mr Giant moved back to the Fairy Tale Land. His friends were
        very happy to see him again.</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c9.png') }}" class="w-[30vw]" />

    <div class="flex items-center justify-between w-[45vw]">
        <h3 class="p-title text-left">
            How many times did Mr Giant move house?<br>
            Which place did you like best? Why?<br>
            <span class="text-[#f7b94a]">Guide the children in retelling the story and encourage them to
                respond to the different parts of the story.</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/home/class1/b2.png') }}" class="w-[8vw]" />
    </div>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h3 class="p-title">They helped Mr Giant to think of ways to keep the surroundings of his <br>
        home quiet. From then on, nobody disturbed Mr Giant again.</h3>
    <img src="{{ asset('assets/images/micet/k2/home/class1/c10.png') }}" class="w-[30vw]" />

    <div class="flex justify-center items-center w-[45vw] space-x-2">
        <h3 class="p-title text-left">
            Can you think of how Mr Giant will not be disturbed?.<br>
            <span class="text-[#f7b94a]">Encourage the children to think of possible solutions</span>
        </h3>
        <img src="{{ asset('assets/images/micet/k2/home/class1/b3.png') }}" class="w-[4.5vw]" />
    </div>
</div>



{{-- panel 13 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 1: Mr Giant Moves</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Ask the children if they would like to live in Fairy Tale Land and to give reasons for their answers.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to explain what it means to be considerate towards others.</li>
            <li>Able to describe the characteristics of various living environments.</li>
            <li>Able to understand that one should not litter and to respect our environment.</li>
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
        const returnURL = "{{ url('/micet/k2/home/index') }}";
        const doneURL = "{{ url('/micet/k2/home/index') }}";

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