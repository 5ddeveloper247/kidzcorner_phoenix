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
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>
        <img src="{{ asset('assets/images/micet/n1/mybody/c10.1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n2/transport/activity/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start">
            <h3 class="ptitle">Tuning-in</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>
                    To begin the lesson, ask the following questions to arouse the children's
                    curiosity and interest.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>Have you sat in a car before?</li>
                        <li>What safety issues would you need to take note of when travelling in a car?</li>
                        <li>Can you name some transport vehicles?</li>
                    </ol>
                </li>

                <li>
                    Elicit answers from the children and then continue with the following questions
                    to focus their attention on the key points of the courseware.
                    <ol class="list-[lower-alpha] pl-[2vw]">
                        <li>What kind of vehicle is Toot Toot?</li>
                        <li>What happens to Toot Toot when he is on the road?</li>
                        <li>What happens to Toot Toot in the end?</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 1: Story - Toot Toot’s playland</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/n2/transport/activity/c2.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="list-disc panel-ul w-[25vw]">
                        <li>To learn to be aware of road safety
                            rules when travelling.</li>
                        <li>To be able to identify some common
                            modes of transport.</li>
                        <li>To practise language and
                            communication skills.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start">
            <h3 class="ptitle">Story</h3>

            <p class="panel-ul">Toot Toot is a small, yellow car. On this day, Toot Toot takes Little Bear and
                his family to visit grandma. Along the way, things begin to fly out of the car
                because the bags have not been properly closed when placed in the car.
                Moreover, Toot Toot is driving very fast. Papa Bear loses a pair of trousers,
                Little Bear loses his bolster and they almost lose grandma's present too.
                Luckily, Fast Fox, who is riding a motorcycle, Mr Monkey, who is driving a
                police car, and Harry Hippo, who is riding a bicycle, help them to retrieve
                their lost items. However, Toot Toot continues to drive very fast and he
                punctures a tyre. Little Bear and his family have to rent a car to get to
                grandma's house. This incident has taught Little Bear and his family the need
                to drive carefully and the importance of obeying traffic rules.</p>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 2: The wheels on the bus</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/n2/transport/activity/c3.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To develop music appreciation.</li>
                        <li>To experience the joy of singing.</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>The child will hear songs of either mothers,
                            children, fathers or babies on the bus,
                            which correspond to his/her selection of
                            pictures, found at the bottom of the
                            screen. The child learns the song and
                            joins in the singing.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start">
            <h3 class="ptitle">Activity 2: The wheels on the bus</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/n2/transport/activity/c4.png') }}" class="w-[25vw]" />
                <div class="text-white text-[1.1vw]">
                    <h3>"The wheels on the bus"</h3>
                    <ul class="w-[25vw]">
                        <li>The wheels on the bus go </li>
                        <li>Round and round, </li>
                        <li>Round and round, </li>
                        <li>Round and round. </li>
                        <li>The wheels on the bus go </li>
                        <li>Round and round, </li>
                        <li>All around the town.</li>
                    </ul>
                    <ul class="w-[25vw]">
                        <li>The babies on the bus </li>
                        <li>Bounce up and down, </li>
                        <li>Up and down, </li>
                        <li>Up and down. </li>
                        <li>The babies on the bus</li>
                        <li>Bounce up and down,</li>
                        <li>All around the town.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-4vw]">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="flex gap-[6vw]">

            <div class="text-start">
                <h3 class="ptitle">Activity 2: The wheels on the bus</h3> <img
                    src="{{ asset('assets/images/micet/n2/transport/activity/c4.png') }}" class="w-[25vw]" />
            </div>

            <div class="text-white text-[1vw] text-start">
                <ul>
                    <li>The children on the bus go <br>
                        Hee, hee, hee, <br>
                        Hee, hee, hee, <br>
                        Hee, hee, hee. <br>
                        The children on the bus go <br>
                        Hee, hee, hee, <br>
                        All around the town.
                    </li>
                </ul>
                <ul>
                    <li>The mummies on the bus go <br>
                        Chitter, chatter, chatter, <br>
                        Chitter, chatter, chatter, <br>
                        Chitter, chatter, chatter. <br>
                        The mummies on the bus go <br>
                        Chitter, chatter, chatter, <br>
                        All around the town.</li>
                </ul>
                <ul>
                    <li>The daddies on the bus go, <br>
                        Nod, nod, nod, <br>
                        Nod, nod, nod, <br>
                        Nod, nod, nod. <br>
                        The daddies on the bus go <br>
                        Nod, nod, nod, <br>
                        All around the town.</li>
                </ul>
            </div>
        </div>

    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 3: Put out the fire</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/n2/transport/activity/c4.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To learn to respond in an emergency situation.</li>
                        <li>To practise hand-eye coordination.</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>Level 1: The child has to select the correct red
                            dot on the screen to help the fire engine get
                            to the hot spot to rescue.</li>
                        <li>Level 2: The fire engine tank has only
                            enough water to put out three fires.
                            When all the water has been used up,
                            the child has to fill the fire engine with
                            more water before going off to put out
                            more fires.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 4: Police chase</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/n2/transport/activity/c5.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To learn how to respond to an emergency situation.</li>
                        <li>To develop a sense of direction.</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>Level 1: There is a thief who is trying to
                            escape from the police. The child
                            moves the police car using the mouse
                            and helps the police to catch the thief</li>
                        <li>Level 2: Same as above. However, this
                            time, there are two thieves.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Activity 5: Submarine game</h3>

            <div class="flex justify-center items-start gap-[3vw]">
                <img src="{{ asset('assets/images/micet/n2/transport/activity/c5.png') }}" class="w-[25vw]" />
                <div>
                    <h3 class="ptitle">Objectives</h3>
                    <ul class="panel-ul w-[30vw]">
                        <li>To develop a sense of direction.</li>
                        <li>To reinforce the concepts of colours, shapes, numbers, etc.</li>
                    </ul>
                    <h3 class="ptitle">Porcess</h3>
                    <ul class="panel-ul w-[27vw]">
                        <li>Level 1: Help the captain pilot the
                            submarine by avoiding the obstacles.
                            At the same time, shoot at the bubbles
                            with matching picture to the submarine.</li>
                        <li>Level 2: Same as above but with
                            increased level of difficulty.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Computer Activities: Toot Toot’s playland</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Before the lesson ends, invite a few of the children to
                    answer some of the questions raised at the beginning of the lesson.</li>
                <li>Invite the children to sing and perform the song.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>The children are able to name some of the means of
                    transport mentioned in the courseware.</li>
                <li>The children are able to complete the activities in the
                    courseware independently.</li>
                <li>The children are able to state some basic traffic rules and
                    safety precautions.</li>
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
