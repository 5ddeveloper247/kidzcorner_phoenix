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

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            text-align: left;
        }

        .p-ul {
            color: white;
            font-size: 1.2vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
    </div>  
        <img src="{{ asset('assets/images/micet/k2/family/activity/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="text-start">
            <h3 class="ptitle">Tuning-in</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>
                    To begin the lesson, ask the following questions to arouse children's curiosity
                    and interest?
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>Have you attended any birthday parties?</li>
                        <li>Do you know how to address your father's and mother's brothers andsisters?</li>
                        <li>Do you know what a family photograph is?</li>
                    </ol>
                </li>

                <li>
                    Elicit answers from the children, then continue with the following questions to
                    focus the children's attention on the key points of the courseware.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>How do Bobo and his family celebrate grandpa's birthday?</li>
                        <li>Who will be at grandpa's birthday party?</li>
                        <li>What do Bobo and Jojo do at the birthday party?</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 1: Story - Grandpa's birthday party</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/k2/family/activity/c2.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="list-disc panel-ul w-[25vw]">
                        <li>To develop an understanding of the relationships between different family members and relatives
                            and know how to address each member of the family</li>
                        <li>To increase awareness of the importance of respect for one's elders, filial piety, and caring
                            for one's siblings</li>
                        <li>To build on vocabulary related to the family</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="text-start">
            <h3 class="ptitle">Story</h3>

            <p class="panel-ul">Today is grandpa's birthday. Bobo and his family are attending grandpa's
                birthday party at grandpa's house. At the party, Bobo meets his aunt who
                has just returned from abroad. Aunt's daughter has been living abroad, and
                she does not understand Chinese customs. Thus, she makes a blunder while
                trying to address her elders. After having been introduced to each other,
                everyone enjoys a hearty birthday meal, which is followed by a photo
                taking session. Grandpa shows the children pictures in the family album,
                helping them to know more about their family. He also tells the children to
                love one another. Everyone has a wonderful time at grandpa's birthday
                party.</p>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="flex gap-[2vw]">
            <div>
                <h3 class="ptitle">Activity 2: My family tree</h3>
                <img src="{{ asset('assets/images/micet/k2/family/activity/c3.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="p-ul w-[30vw]">
                    <li>To develop an understanding of the relationships between different family members and relatives
                    </li>
                    <li>To learn basic concepts of addition and subtraction with the numbers 1- 10</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="p-ul w-[30vw]">
                    <li>Find different members of the family by clicking the leaves on the family tree according to the
                        clues from the caterpillar. The activity is divided into 2 levels:</li>
                    <li>Level 1: Click on the selected leaf to see the corresponding family member in the picture.</li>
                    <li>Level 2: Click on the selected leaf and then answer a math question in order to see the
                        corresponding family member in the picture.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-4vw]">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="flex gap-[2vw]">
            <div>
                <h3 class="ptitle">Activity 3: Bake a Cake</h3>
                <img src="{{ asset('assets/images/micet/k2/family/activity/c4.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="p-ul w-[30vw]">
                    <li>To develop observation skills</li>
                    <li>To increase understanding of the relationship between whole and parts</li>
                    <li>To enhance understanding of the concepts of shapes and colours</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="p-ul w-[30vw]">
                    <li>Design and print out a baked cake. The activity is divided into 2 levels:</li>
                    <li>Level 1: First select a preferred cake design. Then select the shape, colour and decorations.
                        Decorate the cake to match the selected cake design.</li>
                    <li>Level 2: First select a preferred cake design shown only as a slice. Then select the shape,
                        colour and decorations. Decorate the whole cake
                        to match the selected slice.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-4vw]">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="flex gap-[2vw]">
            <div>
                <h3 class="ptitle">Activity 4: My Family Album</h3>
                <img src="{{ asset('assets/images/micet/k2/family/activity/c4.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="p-ul w-[30vw]">
                    <li>To develop comprehension skills and logical thinking through a matching game</li>
                    <li>To develop memory</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="p-ul w-[30vw]">
                    <li>First select a member of the family. The screen will then show 6 photos of the selected family
                        member. Look at the photos and listen to a story. Then place the photos in the album according
                        to the prompts given in the story. The story will be repeated when all the photos are correctly
                        placed in the album. This activity is divided into 2 levels:</li>
                    <li>Level 1: As described above.</li>
                    <li>Level 2: In addition to the description above, the photos will only be flashed. One has to
                        remember the location and content of each photo.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-5vw]">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="flex gap-[2vw]">
            <div>
                <h3 class="ptitle">Activity 5: Family Concert</h3>
                <img src="{{ asset('assets/images/micet/k2/family/activity/c4.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-start">
                <h3 class="ptitle">Objectives</h3>
                <ul class="p-ul w-[30vw]">
                    <li>To learn to differentiate the sounds made by different music instruments</li>
                    <li>To develop memory</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="p-ul w-[30vw]">
                    <li>Select Sing-along, Dancing or Magic Show to enter an activity. The family members will then
                        perform. Sing-along: Listen to the song once. <br>
                        Then arrange the lyrics according to the song and click "ok". Dancing: Select different dance
                        moves to choreograph a dance. For each selected dance move, a red light will light up. Click
                        "ok" when all the lights are lighted up to see the performance. Performance: Listen to the music
                        and select the matching music instrument. Magic show: The magician will make items appear from
                        his hat. Based on the family photo, match the items to the correct family members.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Computer Activities: Happy Family?</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Before the lesson ends, invite a few of the children to answer some of the questions raised at the
                    beginning of the lesson.</li>
                <li>Ask the children to bring photographs of their family members to show them to their friends.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to complete the activities in the courseware independently.</li>
                <li>Able to sing the songs in the courseware.</li>
                <li>Able to answer the questions asked at the beginning of the computer activity.</li>
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
            const returnURL = "{{ url('/micet/k2/family/index') }}";
            const doneURL = "{{ url('/micet/k2/family/index') }}";

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
