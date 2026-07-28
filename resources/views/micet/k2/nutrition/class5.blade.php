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
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Learn to sing the 'Vegetable Song'</li>
            <li>Learn to recite the different allegros</li>
            <li>Cooperate with friends and modify the vegetable song</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>Write down the lyrics of the song and the five allegros, each on a big piece of paper. Make five copies
                    of the 'Vegetable Song'</li>
                <li>White paper strips (slightly bigger than the words on the big piece of paper; for writing or drawing
                    words to be used to replace the lyrics)</li>
                <li>Pencils, erasers and colour pencils</li>
                <li>Blu-Tack</li>
                <li>One set of castanets</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Invite the children to listen to the 'Vegetable Song'. Ask the children to name the vegetables that they
                    have heard in the 'Vegetable Song'.</li>
                <li><span class="flex items-end">Ask the children to talk about other vegetables they know.
                        <button id="sound-btn" class="w-[2.5vw]">
                            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                        </button>
                    </span></li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li><span class="flex items-end">Let the children learn to sing the 'Vegetable Song'.
                    <button id="sound-btn" class="w-[3vw]">
                        <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                    </button>
                </span></li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            Eat your veggies, two each day. <br>
            In the dark you'll find your way. <br>
            Can you name some? Yes, I say! <br>
            Potato, broccoli, cherry tomatoes, <br>
            cucumber stick, baby carrot and <br>
            bean sprouts too.
        </h4>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Once the children are familiar with the tune and rhythm of the song, get them to replace the lyrics using
                other vegetables, for example:</li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            Eat your veggies, two each day. <br>
            In the dark you'll find your way. <br>
            Can you name some? Yes, I say! <br>
            Chilli, broccoli, cowpea, radish, <br>
            egg plant and cabbage too.
        </h4>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Show the children the allegro below, and then get the children to sing to the beat of the castanets.</li>
            <li>Let the children recite it a few times so that they remember the words.</li>
        </ol>
        <h4 class="text-white text-[2vw] text-center">
            Rice <br>
            Run for a r (snap fingers), <br>
            Run for an i (snap fingers),<br>
            Run for a c (snap fingers),<br>
            Run for an e (snap fingers),<br>
            Rice, noodles and bread for energy!
        </h4>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Show the children the allegro below, and then get the children to sing to the beat of the castanets.</li>
            <li>Let the children recite it a few times so that they remember the words.</li>
        </ol>
        <h4 class="text-white text-[2vw] text-center">
            Papaya <br>
            Show me a f (snap fingers), <br>
            Show me a r (snap fingers), <br>
            Show me a u-i-t (snap fingers), <br>
            Fruit will help to heal any cuts on <br>
            you and me!
        </h4>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Show the children the allegro below, and then get the children to sing to the beat of the castanets.</li>
            <li>Let the children recite it a few times so that they remember the words.</li>
        </ol>
        <h4 class="text-white text-[2vw] text-center">
            Carrot <br>
            Show me a v (snap fingers), <br>
            Show me an e (snap fingers), <br>
            Show me a g-g-i-e-s (snap fingers), <br>
            Veggies are going to help you see! <br>
        </h4>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Show the children the allegro below, and then get the children to sing to the beat of the castanets.</li>
            <li>Let the children recite it a few times so that they remember the words.</li>
        </ol>
        <h4 class="text-white text-[2vw] text-center">
            Fish <br>
            Show me a m (snap fingers), <br>
            Show me an e (snap fingers), <br>
            Show me an a (snap fingers), <br>
            Show me a t (snap fingers), <br>
            Meat, fish and beans for strong <br>
            muscles - that's for you and me! <br>
        </h4>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Show the children the allegro below, and then get the children to sing to the beat of the castanets.</li>
            <li>Let the children recite it a few times so that they remember the words.</li>
        </ol>

        <h4 class="text-white text-[2vw] text-center">
            Milk <br>
            Show me a m (snap fingers), <br>
            Show me an i (snap fingers), <br>
            Show me a I (snap fingers), <br>
            Show me a k (snap fingers), <br>
            Milk for strong bones - to work and <br>
            play!
        </h4>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Once the children are familiar with the song and allegros, invite them to form five groups. Each group will
                select one allegro. Inform them that they will be changing the vegetable song based on the allegro they have
                chosen. For example:</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="16">
            <li>Distribute the large sheets of paper with the 'Vegetable Song' and an allegro to each group. Also give the
                white paper strips to each group.</li>
            <li>Guide the children to cooperate in their group and decide on the lyrics they should replace with the allegro
                they have.</li>
        </ol>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="18">
            <li>Ask the children to write or draw the food on the white strips and paste them on the 'Vegetable song' such
                that they replace the original lyrics. Teachers can help the children to write down the words or sentences
                and complete their modified song.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="19">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Food Song</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite the children to perform their newly-written song.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Be able to sing the 'Vegetable Song' and recite the allegros.</li>
                <li>Be able to replace the lyrics of the 'Vegetable Song' by using names of other known food.</li>
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
            const returnURL = "{{ url('/micet/k2/nutrition/index') }}";
            const doneURL = "{{ url('/micet/k2/nutrition/index') }}";

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
