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
        <h1 class="panel-title stroke">Classroom Activity 1: Goldilocks and the Three Bears</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/c1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/c2.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/c3.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Develop the good habit of not entering people's home
                without permission</li>
            <li>Understand the consequences of one's actions (principle of
                compensation) if one damages items that belong to others</li>
            <li>Compare sizes of objects</li>

        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Goldilocks and the Three Bears</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Goldilocks and the Three Bears</h1>

        <div class="text-start">
            <h3 class="title">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell the story using suggested questions and activities to reinforce the
                    teaching points of the story.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Goldilocks and the Three Bears</h1>

        <h3 class="p-title">Theme: Fairy Tales</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c4.png') }}" class="w-[33vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">One momning, Mama Bear makes Baby Bear's favourite porridge for <br>
            breakfast. However, the porridge is too hot, so they decide to go for a <br>
            walk and have the porridge when they come back.</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c5.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                What will you do if your food is too hot?<br>
                <span class="text-[#f7b94a]">Guide the children to solve problems that they face in their daily life.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b2.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Careless Baby Bear forgets to shut the door when it leaves. Goldilocks <br>
            passes by and discovers that there is nobody at home so she quietly <br>
            enters the house.</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c6.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-around w-[45vw]">
            <h3 class="p-title text-left">
                What will you do if you see that the door of somebody's house is open?<br>
                <span class="text-[#f7b94a]">Lead the children to reflect and help them develop good practices.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h3 class="p-title">Goldilocks is hungry. She sees the bowls of porridge on the table and  <br>
            she tries them one by one. She finds that the porridge in Baby Bear's <br>
            bowl is the most delicious and finishes it.</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c7.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                Which is the biggest bowl on the table? Which is the smallest? To whom do <br>
                the bowls belong to?<br>
                <span class="text-[#f7b94a]">Get children to compare the sizes of the bowls.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b2.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h3 class="p-title">Goldilocks walks into the living room and sees three beautiful chairs. She <br>
            tries them one by one. She discovers that Baby Bear's bubble chair is the <br>
            most comfortable. She accidentally spoils the chair.</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c8.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-around w-[45vw]">
            <h3 class="p-title text-left">
                Name the things in the bears' living room from left to right.<br>
                <span class="text-[#f7b94a]">Guide children in understanding the concept of left and right by <br>
                    relating the things in order.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b4.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b1.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h3 class="p-title">Goldilocks feels a little tired. She goes to the bedroom and lies down on <br>
            Baby Bear's bed. The small bed is very comfortable! She lies there for <br>
            only awhile but soon falls asleep.</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c9.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                When do you think Goldilocks will wake up? <br>
                <span class="text-[#f7b94a]">Encourage the children to predict what will happen next.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b5.png') }}" class="w-[10vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Not long after, the bears return home. They see the messy room, the <br>
            empty bowl and the damaged chair. They are very angry!</h3> 
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c10.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                What will you do if someone messes up your room?<br>
                <span class="text-[#f7b94a]">Guide the children to empathise with the feelings of others.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b4.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[5vw] " />
            </div>
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">They rush to the bedroom and see Goldilocks sound asleep. Just then, <br>
            Goldilocks wakes up. She runs away when she sees the bears.</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c11.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                Is it right for Goldilocks to behave in this manner?<br>
                <span class="text-[#f7b94a]">Encourage the children to give their reasons for their answer.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b3.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-3vw]">
        <h3 class="p-title">Later, Goldilocks feels that what she did is wrong. The next day, she <br>
            brings a new stool and goes to the bears' house. She apologises to <br>
            them. The bears are very happy and they forgive her.</h3>
        <img src="{{ asset('assets/images/micet/n2/fairy/class1/c12.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-[45vw]">
            <h3 class="p-title text-left">
                Have you damaged other people's things before? What did you do?<br>
                <span class="text-[#f7b94a]">Help the children understand the consequences of their actions<br>
                    (principle of compensation) if they damage other people's things.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/class1/b6.png') }}" class="w-[8vw]" />
        </div>
    </div>



    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Goldilocks and the Three Bears</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children retell the story in their own words, then</li>
                <li>invite them to role play the characters in the story.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to compare sizes of objects.
                </li>
                <li>Able to understand consequences of one's actions (the
                    principle of compensation) if damage is caused to items
                    that belong to others.</li>
                <li>Able to retell the story using own words.</li>
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
            const returnURL = "{{ url('/micet/n2/fairy/index') }}";
            const doneURL = "{{ url('/micet/n2/fairy/index') }}";

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
