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
            font-size: 1.7vw;
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
        <h1 class="panel-title stroke">Classroom Activity 1: Toot Toot’s Adventure</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>To learn road safety rules.</li>
            <li>To be able to identify some common means of transport.</li>
            <li>To practise language and communication skills.</li>
            <li>To introduce and increase awareness of some traffic rules.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Toot Toot’s Adventure</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Toot Toot’s Adventure</h1>

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
        <h1 class="panel-title stroke">Toot Toot’s Playland</h1>

        <h3 class="p-title">Theme: Transportation</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">One moming, Little Bear and his family decide to visit their grandma. <br>
            They place their luggage in their little car, Toot Toot, and set off.</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c2.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What is it like travelling in a car, bus, etc? What is special about the car <br>
                in the picture?<br>
                <span class="text-[#f7b94a]">Encourage the children to talk about their experiences of travelling on the
                    road.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Toot Toot goes too fast. Suddenly, a pair of trousers flies out of the car. It <br>
            lands on Fast Fox, who is riding a motorcycle just behind Toot Toot.</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c3.png') }}" class="w-[32vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                How many wheels does a motorcycle have?<br>
                <span class="text-[#f7b94a]">What do you wear on your head when riding a motorcycle?</span>
            </h3>

            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Toot Toot does not know that things are falling out from the boot of the <br>
            car. He continues speeding along the road ... "Toot! Toot!". As Toot Toot drives on, <br>
            grandma's present and a hat fly out of the car and land on Mr Monkey's police car.</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c4.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Who is driving the police car? What is special about a police car? <br>
                What sound does a police car make?<br>
                <span class="text-[#f7b94a]">Encourage the children to observe and express about what has happened.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Toot Toot is not aware of what has happened. He continues to go very fast. Just <br>
            then, a bolster flies out from the car and hits Harry Hippo, who is travelling behind on a bicycle.</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c5.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                Have you ridden on a bicycle? What is the difference between a car
                and a bicycle?<br>
                <span class="text-[#f7b94a]">Ask the children to take note of the similarities and differences between <br>
                    a car and a bicycle.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Fast Fox, Mr Monkey, and Hary Hippo chase Little Bear and his family to <br>
            retum the things that they dropped. However, Toot Toot speeds ahead <br>
            unaware of the chase.</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c6.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Why are Fast Fox, MrMonkey and Hany Hippo chasing Toot To of? <br>
                <span class="text-[#f7b94a]">Encourage the children to express thei rviews and anticipate events.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Toot Toot drives too fast. Suddenly, the car comes to a halt. One of the <br>
            tyres is punctured. Finally, Fast Fox, Mr Monkey and Harry Hippo catch <br>
            up with Toot Toot. They retum all the things to Little Bear's family.</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c7.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What would you do if you found things that someone dropped?<br>
                <span class="text-[#f7b94a]">Teach the children about honesty and helpfulness.</span>
            </h3>

            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Little Bear and his family thank everyone. They hire a taxi to take them <br>
            to grandma's house. They remember the policeman's advice to fasten <br>
            their seat belts and secure their bags .</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c8.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                What do you say when some one retums your lost belongings?<br>
                <span class="text-[#f7b94a]">Teach the children to show appreciation.</span>
            </h3>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="w-[3.5vw]" />
                <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="w-[3.5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Poor Toot Toot is left on the road waiting for the tow truck to tow him to <br>
            the repair shop. Toot Toot promises himself that he will never speed again.</h3>
        <img src="{{ asset('assets/images/micet/n2/transport/class1/c9.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Do you know the function of a tow truck? Why does the tow truck tow Toot To of away?<br>
                <span class="text-[#f7b94a]">Talk to the children about the functions of a tow truck to increase their
                    general <br> knowledge.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="w-[3.5vw]" />
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: Toot Toot’s Adventure</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Guide children to complete the corresponding activity in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Toot Toot’s Adventure</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Encourage the children to talk about the different types of transports.</li>
                <li>Ask the children to recall the road safety rules they should
                    observe when travelling.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name some of the vehicles mentioned in the courseware.</li>
                <li>Able to talk about road safety rules which should be
                    observed when travelling.</li>
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
            const returnURL = "{{ url('/micet/n2/transport/index') }}";
            const doneURL = "{{ url('/micet/n2/transport/index') }}";

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
