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
        <h1 class="panel-title stroke">Classroom Activity 1: Fun with Food</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
    </div>  


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Know the basic food groups</li>
            <li>Have a basic understanding of germs</li>
            <li>Cultivate good food hygiene</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Fun with Food</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: Fun with Food</h1>

        <div>
            <h3 class="title">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Tell the story using suggested questions and activities to reinforce the teaching points of the story.
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Fun With Food</h1>

        <h3 class="p-title">Theme: Nutritious and Delicious</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Sue and her mother go to the supermarket and buy a lot of food. Sue <br>
            comes home feeling tired and rests her head on the table. Suddenly, the <br>
            food jumps out and invites Sue to go on an adventure in food land.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c2.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Have you been to the supemmarket with your mother?<br>
                <span class="text-[#f7b94a]">Discuss how various food are arranged in the different aisles in a <br>
                    supermarket.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">The path is dark. Sue accidentally falls into a hole. Just then, Clever <br>
            Carrot gives off a bright light and helps the other food rescue Sue from <br>
            the hole. "Eating vegetables will give you bright eyes," says Clever Carrot.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c3.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                Do you like to eat vegetables? Why are vegetables good for us?<br>
                <span class="text-[#f7b94a]">Explain how eating vegetables helps our body get many nutrients. <br>
                    Encourage children to eat more vegetables.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Soon, they arrive at the foot of a big mountain. Molly Milk turns into a <br>
            strong ladder and helps everyone climb up the mountain. "Drink more <br>
            milk; it makes your teeth and bones strong", says Molly Milk.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c4.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Do you know where milk comes from?<br>
                <span class="text-[#f7b94a]">Help the children to understand the source of milk and different types of <br>
                    dairy products.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Clever Carrot and Richie Rice accidentally bump into each other and <br>
            injure themselves. Patty Papaya helps to heal their wounds. "Eat more <br>
            fruit; the wounds will heal fast," says Patty Papaya.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c5.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-around w-full">
            <h3 class="p-title text-left">
                Do you like to eat fruit? What are the different types of fruit?<br>
                <span class="text-[#f7b94a]">Help the children learn about different types of fruit, and encourage <br>
                    them to eat more fruits ..</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Everyone begins to feel hungry after the long journey. Richie Rice takes <br>
            out dry rations for everyone to eat. "Eating more energy food like rice <br>
            and bread will make one energetic," says Richie Rice.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c6.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Do you know what rice, bread and noodles are made of?<br>
                <span class="text-[#f7b94a]">Teach the children about the different types of food products.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">After the meal, they arrive at the kingdom of germs. "Germs will <br>
            contaminate the food and when we eat bad food, we become ill," says <br>
            Fred Fish. So, everyone helps destroy the germs.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c7.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Do you know where to find germs? How can we get rid of germs?<br>
                <span class="text-[#f7b94a]">Help children understand that germs are present in unclean things <br>
                    and teach the children good hygiene practices.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Finally, they reach the food land and find a treasure box. Fred Fish is very <br>
            strong and is able to lift the box with little effort. "Eat more fish, meat and <br>
            beans to make you strong like me!" says Fred Fish.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c8.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Are you as strong as Fred? Let's try and see which heavy things you can carry.<br>
                <span class="text-[#f7b94a]">Let the children try to lift some heavy things (child-appropriote) and help
                    them <br>
                    understand the importance of eating fish, meat and beans.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">Just when everyone is about to open the treasure box, mother wakes <br>
            Sue up. Oh, it was only a dream! Sue tells her mother about the dream <br>
            and that she wishes to know what is inside the treasure box.</h3>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class1/c9.png') }}" class="w-[28vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Do you have dreams? What do you dream about? Do you tell your <br>
                mother about your dreams?<br>
                <span class="text-[#f7b94a]">Enhance children's understanding about dreams.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: Fun with Food</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Guide children to state the five food groups.</li>
                <li>Ask the children to decide whether their daily meals include the five food groups. If not, ask them to
                    check the food group which is missing from their meal.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to understand the five food groups.</li>
                <li>Know that germs are harmful; and cultivate good hygiene practices.</li>
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
