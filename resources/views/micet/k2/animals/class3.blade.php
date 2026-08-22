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
            font-size: 1.4vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>

        <div class="mt-[-2vw]">
            <h3 class="ptitle">Objectives:</h3>

            <ul class="list-disc panel-ul w-[50vw]">
                <li>Understand that it is important for both predators and preys to run fast</li>
                <li>Understand that it is more efficient to hunt in a group rather than alone</li>
                <li>Understand that it is more difficult to hunt for a prey living in a group rather than alone</li>
                <li>Practise running skills</li>
                <li>Develop listening skills, quick responding skills and rhythmic sense</li>
            </ul>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <div>
            <h3 class="ptitle mt-[5vw]">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>Six leopard headgears (teacher and children to prepare them beforehand)</li>
                <li>A small drum or other musical instrument</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col  items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Let the children recall how leopards hunt for deer. Inform children that they are going to play a
                    hunting game.</li>
            </ol>
        </div>
        <div class="flex flex-col items-center space-y-[.5vw]">
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c24.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c25.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c27.png') }}" class="w-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col  items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Click to play the video. Let the children observe how a lioness hunts for antelopes. Guide children to
                understand that though hunting seems like an easy task , actually it is not.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/animals/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Bring children to the playground. Let them run around freely. Now, let them listen to a drum sound to decide
                how to run. Play the drum fast and slow to produce fast and slow rhythms and let the children change their
                speed of running according to the rhythm. [Note: Remind children to be mindful of safety while running.]
            </li>
            <li> Explain the rules of the game. All children who are pretending to be prey have to run fast or slow
                according to the rhythm that is played. (except the children who are chosen to be the predators)</li>
        </ol>
    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>The game will be conducted in three parts. Two hunting methods will be used in each part:

                <ul class="text-[1.2vw] pl-[1vw] w-[45vw]">
                    <li>Part 1:</li>
                    <li>a) Invite a child to wear the headgear and be the predator. The predator can run freely to catch
                        prey.</li>
                    <li>b) Play the drum in a slow rhythm. Let all the preys run slowly to escape the
                        predator's attack.</li>
                    <li>c) Once the predator catches a prey, restart the game. For this time, play the
                        drum in a fast rhythm and let all the preys run as fast as they can to escape
                        the predator</li>
                    <li>d) Once the predator catches a prey, end the game.</li>
                    <li>e) Ask the children: When is it easier for the predator to catch the prey? When
                        the prey runs fast or slow? Guide children to understand that it is important for
                        both the predator and the prey to run fast.</li>
                    <li>f) If time permits, select another child as the predator and repeat the game.</li>
                </ul>
            </li>
        </ol>
    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>The game will be conducted in three parts. Two hunting methods will be used in each part:

                <ul class="text-[1.2vw] pl-[1vw] w-[45vw]">
                    <li>Part 2:</li>
                    <li>a) Invite three children to wear headgears and be the predators. The predators hunt for a targeted
                        prey from the same direction.</li>
                    <li>b) Play the drum in a fast rhythm. Let all the preys run as fast as they can to escape the
                        predator's attack.</li>
                    <li>c) Once the predators catch the targeted prey, restart the game. For this time, let the three
                        predators hunt a targeted prey from different directions.</li>
                    <li>d) Once the predators catch the targeted prey, end the game.</li>
                    <li>e) Ask the children: When is it easier for the predators to catch the prey: when they hunt from same
                        direction or when they hunt from different directions? Is it faster and easier to hunt when there is
                        only one predator or when there are many predators hunting as a group? Guide children to understand
                        that it is more efficient to hunt with strategies and it is also more efficient to hunt in groups.
                    </li>
                    <li>f) If time permits, invite another three children as predators and repeat the game.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>The game will be conducted in three parts. Two hunting methods will be used in each part:

                <ul class="text-[1.2vw] pl-[1vw] w-[45vw]">
                    <li>Part 3:</li>
                    <li>a) Invite six children to wear headgears and be the predators. The predators have to hunt for one
                        prey, from different directions.</li>
                    <li>b) Play the drum in a fast rhythm. Let one prey run as fast as it can to escape the predators'
                        attack.</li>
                    <li>c) Once the predators catch the prey, restart the game. For this time, let the six predators hunt
                        for a prey within a group of preys, from different directions. Let the group of preys run together.
                    </li>
                    <li>d) Once the predators catch the targeted prey in a group, end the game.</li>
                    <li>e) Ask the children: When is it easier for the predators to catch the prey: when it is alone or when
                        it is living in a group? Guide children to understand that it is more difficult to hunt for a prey
                        that is living in a group than it is to hunt for a prey that is alone.</li>
                    <li>f) If time permits, invite another six children as predators and repeat the game.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Guide children to conclude that:
                <ul>
                    <li>- It is important for both predators and preys to run fast.</li>
                    <li>- It is more efficient to hunt with strategies.</li>
                    <li>- It is more efficient to hunt in a group rather than alone</li>
                    <li>- It is more difficult to hunt for a prey living in a group rather than alone.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Guide children to complete the corresponding activities in the Thematic Activity Book. </li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Haunt</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children to express which is the best method of hunting and give reasons for their choice.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Know that it is important for both predators and preys to run fast.</li>
                <li>Know that it is more efficient to hunt with strategies.</li>
                <li>Know that it is more efficient to hunt in a group rather than alone.</li>
                <li>Know that it is more difficult to hunt for a prey living in a group rather than alone.</li>
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
            const returnURL = "{{ url('/micet/k2/animals/index') }}";
            const doneURL = "{{ url('/micet/k2/animals/index') }}";

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
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.phonics-panel').forEach(panel => {
                const observer = new MutationObserver(() => {
                    if (panel.classList.contains('hidden')) {
                        panel.querySelectorAll('video').forEach(video => {
                            if (!video.paused) video.pause();
                            video.currentTime = 0;
                        });
                    }
                });

                observer.observe(panel, {
                    attributes: true,
                    attributeFilter: ['class']
                });
            });
        });
    </script>
@endpush
