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
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>
        <img src="{{ asset('assets/images/micet/n1/mybody/c9.1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand the characteristics of crows</li>
            <li>Learn the concept of filial piety</li>
            <li>Inculcate the value of filial piety</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>

    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Invite the children to name the bird, describe its characteristics and imitate its calls.</li>
                <li>Let the children express whether they like crows and give reasons for their like or dislike.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c1.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Inform the children that although the whole body of a crow is black and they are not pretty or attractive,
                and their calls are awful, crows are smart and filial in nature. Help the children understand the meaning of
                filial piety (respecting parents and listening to them, treating them well and looking after them). Let the
                children explain how a filial child would treat his/her parents. </li>
            <li>Read the story of "Little Crow" to the children (starting from the next slide).</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>Yaya is a baby crow that has just hatched. Its parents love it a lot.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>Everyday before dawn, Yaya's parents go out to look for food for Yaya. Whenever Yaya's parents find a yummy
                piece of meat, they cannot bear to eat it alone and bring it home for Yaya to eat first. Mama is afraid that
                Yaya cannot bite the meat, so she chews the meat first before feeding it to Yaya.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>Soon, Yaya grows black feathers on its body and is eager to learn to fly! Everyday in the morning, Papa
                brings Yaya out to learn to fly. He teaches him the steps: flap the wings, take off, increase speed and
                land. In the beginning, though it tries very hard, Yaya cannot fly . Yaya cries each time it fails.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>However, Papa does not blame Yaya. Papa demonstrates how to fly over and
                over again! Finally, Yaya learns to fly! It happily flaps its small wings and flies in the
                sky.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>Time goes by quickly, Yaya grows from a small crow to a big crow. It does not
                need its parents to help it look for food. It flies leisurely in the sky everyday.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>One day, when Yaya reaches home, it finds its parents lying in the nest, looking
                weak and hungry.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>"Papa, Mama, why don't you go out to look for food? Are you not feeling
                hungry?" <br>
                "Yaya, Papa and Mama are old. We are too weak to fly out and look for food."</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>""Yaya, you have grown up and should leave the nest. You don't have to bother about us."
                "No, I will not leave Papa and Mama! It is alright if you can't fly, I will fly out and
                look for food to feed you."</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>From that day onwards, Yaya looks after its parents just as they did when Yaya was young. Everyday before
                dawn, Yaya flies out to look for food. When it finds yummy food, Yaya brings the food home to feed its
                parents. Yaya only eats after its parents are full.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>Some other birds say that Yaya is silly, but Yaya does not mind. Yaya says, "My parents doted on me and
                looked after me when I was young. They fed me with yummy food everyday. Now that I have grown up, I must
                repay their kindness!"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="panel-ul w-[50vw]">
            <li>From then on, the story of Yaya spreads far and wide. Everyone calls Yaya "The
                Filial Little Crow".</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class9/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Replay the story pages and encourage children to retell the story.</li>
            <li>Let the children describe how the little crow showed filial piety towards its parents.</li>
            <li>Have the children take turns to state how they treat their parents at home, whether they show filial piety
                to them. Encourage the children to describe their experiences. Praise those children who are filial or
                express a desire to be filial.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 9: Little Crow</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Organise the children into groups and let them discuss what actions indicate being filial towards
                    parents and how they will want to show filial piety towards their parents.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to state the characteristics of crows and imitate their calls.</li>
                <li>Able to retell the story of "Little Crow".</li>
                <li>Know what it means to be filial.</li>
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
            const returnURL = "{{ url('/micet/k1/birds/index') }}";
            const doneURL = "{{ url('/micet/k1/birds/index') }}";

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
