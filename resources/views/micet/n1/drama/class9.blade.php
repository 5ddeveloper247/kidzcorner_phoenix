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
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>
        <img src="{{ asset('assets/images/micet/n1/colours/c9.1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Practise performing the assigned role</li>
            <li>Learn to perform a drama together with friends</li>
            <li>Express like or dislike for a drama performance</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Different musical instruments</li>
                <li>Rabbit and wolf headgears/masks</li>
                <li>Make necessary changes based on the observations of
                    first practice (e.g .: change the roles of some children)</li>
                <li>Decorate the class like a performing stage</li>
            </ul>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Let children continue practising their performing roles in groups.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Teacher may walk around the class to help the different groups:
                <ul class="list-disc">
                    <li>Remind children to synchronise their performance as a group
                        (especially the singing and musical instrument groups).</li>
                    <li>Use story scenes/pictures to help the storytelling and role playing
                        groups with their performance.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>Teacher guides children in understanding the sequence of the
                performance:
                <ul class="list-disc">
                    <li>Scene 1: Storyteller tells the story at one side of the stage; children role playing
                        Mother Rabbit and baby rabbits perform in the middle of the stage; while children
                        who sing (song 1) and play musical instruments stand at the back of the stage.</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">Song I: Mother Rabbit</span> <br>
                Oh my dear children, <br>
                please lock the door. <br>
                Mummy's going out <br>
                to pick some carrots. <br>
                Before mummy comes home, <br>
                Don't open the door <br>
                to let anyone in.
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>Teacher guides children in understanding the sequence of the
                performance:
                <ul class="list-disc">
                    <li>Scene 2: Storyteller tells the story at one side of the stage; children role playing
                        the wolf and baby rabbits perform in the middle of the stage; while children who sing
                        (song 2 & 3) and play musical instruments stand at the back of the stage.</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">Song 2: The Wolf</span> <br>
                Oh my dear children, <br>
                please open the door. <br>
                Mummy is home, <br>
                do open the door. <br>
                Mummy has now come home, <br>
                Please open the door <br>
                and let mummy in. <br>
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>Teacher guides children in understanding the sequence of the
                performance:
                <ul class="list-disc">
                    <li>Scene 2: Storyteller tells the story at one side of the stage; children role playing
                        the wolf and baby rabbits perform at the middle of the stage; while children who sing
                        (song 2 & 3) and play musical instruments stand at the back of the stage.</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">Song 3: Baby Rabbits</span> <br>
                We are good children, <br>
                can't open the door. <br>
                You're not our mummy, <br>
                can't open the door. <br>
                Before mummy comes home, <br>
                Can't open the door <br>
                to let anyone in.
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>Teacher guides children in understanding the sequence of the
                performance:
                <ul class="list-disc">
                    <li>Scene 2: Storyteller tells the story at one side of the stage; children role playing
                        the wolf and baby rabbits perform in the middle of the stage; while children who sing
                        (song 2 & 3) and play musical instruments stand at the back of the stage.</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">Song 2: The Wolf</span> <br>
                Oh my dear children, <br>
                please open the door. <br>
                Mummy is home, <br>
                do open the door. <br>
                Mummy has now come home, <br>
                Please open the door <br>
                and let mummy in.
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>Teacher guides children in understanding the sequence of the
                performance:
                <ul class="list-disc">
                    <li>Scene 2: Storyteller tells the story at one side of the stage; children role playing
                        the wolf and baby rabbits perform at the middle of the stage; while children who sing
                        (song 2 & 3) and play musical instruments stand at the back of the stage.</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">Song 3: Baby Rabbits</span> <br>
                We are good children, <br>
                can't open the door. <br>
                You're not our mummy, <br>
                can't open the door. <br>
                Before mummy comes home, <br>
                Can't open the door <br>
                to let anyone in.
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>Teacher guides children in understanding the sequence of the
                performance:
                <ul class="list-disc">
                    <li>Scene 3: Storyteller tells the story at one side of the stage; children role playing
                        Mother Rabbit and baby rabbits perform in the middle of the stage; while children
                        who sing (song 2 & 4) and play musical instruments stand at the back of the stage</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">Song 2: Mother Rabbit</span> <br>
                Oh my dear children, <br>
                please open the door. <br>
                Mummy is home, <br>
                do open the door. <br>
                Mummy has now come home, <br>
                Please open the door <br>
                and let mummy in.
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>Teacher guides children in understanding the sequence of the
                performance:
                <ul class="list-disc">
                    <li>Scene 3: Storyteller tells the story at one side of the stage; children role playing
                        Mother Rabbit and baby rabbits perform in the middle of the stage; while children
                        who sing (song 2 & 4) and play musical instruments stand at the back of the stage.</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">Song 4: Baby Rabbits</span> <br>
                We are good children, <br>
                we'll open the door. <br>
                You are our mummy, <br>
                we'll open the door. <br>
                Mummy has now come home, <br>
                Please open the door <br>
                and let mummy in.
            </h5>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Have children practise the mini drama performance according to the
                instructions of teacher. Teacher guides each child in knowing his/her own
                position while performing.</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Practice (2)</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children perform the mini drama according to the instructions of teacher;
                    teacher to give encouragement.</li>
                <li>Ask children: Is the mini drama performance interesting?</li>
                <li>Do you like it?</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to practise performing the assigned role.</li>
                <li>Able to perform a drama together with friends.</li>
                <li>Able to express like or dislike for the mini drama performance.</li>
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


        // PANEL SYSTEM
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const tryAgainPanel = document.getElementById('tryAgain');
            const wellDonePanel = document.getElementById('wellDone');
            const retryBtn = document.getElementById('retry');
            const closeBtn = document.getElementById('close');

            // Get all letter buttons by ID
            const falseLetters = document.querySelectorAll('[id="false"]');
            const trueLetters = document.querySelectorAll('[id="true"]');

            // Create audio elements
            const tryAgainSound = new Audio('{{ asset('assets/audio/phonics_audio/tryagain.mp3') }}');
            const wellDoneSound = new Audio('{{ asset('assets/audio/phonics_audio/welldone.mp3') }}');

            // Function to show panel and play sound automatically
            function showPanelWithSound(panel, audioElement) {
                panel.style.display = 'flex';
                audioElement.currentTime = 0;
                audioElement.play().catch(err => console.log('Audio play failed:', err));
            }

            // Handle FALSE letter clicks (show try again panel with sound)
            falseLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(tryAgainPanel, tryAgainSound);
                });
            });

            // Handle TRUE letter click (show well done panel with sound)
            trueLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(wellDonePanel, wellDoneSound);
                });
            });

            // Handle Retry button - close panel and stay on same slide
            retryBtn.addEventListener('click', function(e) {
                e.preventDefault();
                tryAgainPanel.style.display = 'none';
                tryAgainSound.pause();
                tryAgainSound.currentTime = 0;
            });

            // Handle Close button - redirect to route
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                wellDoneSound.pause();
                wellDoneSound.currentTime = 0;
                window.location.href = '{{ url('/phonics_l1/letter_b') }}?view=phonics';
            });
        });
    </script>
@endpush
