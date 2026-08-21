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
            font-size: 1.5vw;
        }

        .p-title {
            color: #ffffff;
            font-size: 1.5vw;
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
        <h1 class="panel-title stroke">Classroom Activity 1: The Rabbits and the Wolf</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/drama/class1/b1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class1/b2.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Know that we should not open the door to strangers</li>
            <li>Develop observation and logical thinking skills</li>
            <li>Enjoy listening to a story</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: The Rabbits and the Wolf</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: The Rabbits and the Wolf</h1>

        <ol class="list-decimal panel-ul">
            <li>Tell the story using suggested questions and activities to reinforce the
                teaching points of the story.</li>
        </ol>

    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">The Rabbits and the Wolf</h1>

        <h3 class="p-title">Theme: Mini Drama</h3>
        <img src="{{ asset('assets/images/micet/n1/drama/class1/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">Mother Rabbit is going out. She tells the baby rabbits to stay in the <br>
            house and not to open the door to anyone they don't know.</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c2.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                Where do you think Mother Rabbit is going? <br>
                <span class="text-[#f7b94a]">Help children to develop observation and language skills.</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">After Mother Rabbit leaves, the baby rabbits lock the door. They <br>
            play hide and seek happily inside the house.</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c3.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                Have you ever played hide and seek? How do you play the game?<br>
                <span class="text-[#f7b94a]">Guide children to talk about their experiences in playing the hide
                    and seek game.</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">Knock, knock, knock! Someone is knocking at the door! Should <br>
            the baby rabbits open the door?</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c4.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-start">
                If you were the baby rabbits, will you open the door immediately?<br>
                <span class="text-[#f7b94a]">Help children to develop logical thinking skills.</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">The baby rabbits remembered what their mother had said before <br>
            she left, so they asked, "Who is it?"</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c5.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                Who is knocking at the door? Is that Mother Rabbit?<br>
                <span class="text-[#f7b94a]">Help children to develop observation and identification skills.</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b2.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">That does not sound like mummy! So the baby rabbits decide not
            to open the door.</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c6.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                Why didn't the baby rabbits open the door?<br>
                <span class="text-[#f7b94a]">Help children to develop logical thinking skills.</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">No matter how hard the big grey wolf called out, the baby rabbits <br>
            ignored it. The wolf finally leaves.</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c7.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                What will happen if the baby rabbits open the door?<br>
                <span class="text-[#f7b94a]">Help children to develop logical thinking and predicting skills.</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">Mother Rabbit finally returns home. The baby rabbits tell her what <br>
            had happened. After hearing it, Mother Rabbit praises them for being obedient.</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c7.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                Why did Mother Rabbit praise the baby rabbits?<br>
                <span class="text-[#f7b94a]">Help children to develop logical thinking skills.</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: The Rabbits and the Wolf</h1>

        <ol class="list-decimal panel-ul" start="2">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: The Rabbits and the Wolf </h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children: When you are home alone, what would you do if someone knocks
                    at the door? If you don't know the person, would you open the door?</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to say that we should not open the door to strangers.</li>
                <li>Able to answer questions based on logical thinking.</li>
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
            const returnURL = "{{ url('/micet/n1/drama/index') }}";
            const doneURL = "{{ url('/micet/n1/drama/index') }}";

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
