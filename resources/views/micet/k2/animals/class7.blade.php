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
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
    </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand that it is important to protect wild animals and their living environments</li>
            <li>Use imagination to draw ways of protecting wild animals</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[4vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>One/two weeks before the activity, send letter to parents (refer to the next slide)</li>
                <li>Drawing papers, colour pencils</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>
        <img src="{{ asset('assets/images/micet/k2/animals/class7/c1.png') }}" class="w-[40vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: Why did the wild animals die? Guide children to understand that other than natural death
                    (caused due to sickness or old age), changes in the living environment and hunting will also cause death
                    in wild animals.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/animals/class7/c2.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Invite children to display the information that they have brought from home. Let them state the living
                environments of animals (forests, grassland, oceans, etc).</li>
            <li>Ask children: Why are there changes in the living environments of animals? Inform the children that fire,
                cutting down trees, pollution, etc destroys the living environment of animals and when animals cannot find
                enough food or water, they die.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Guide children to discuss: What causes forest fires?
                <ul class="list-disc">
                    <li>Fires are intentionally set to clear the forests for other land use such as farming, building
                        houses, roads, playgrounds, etc.</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/animals/class7/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Guide children to discuss: What causes forest fires?
                <ul class="list-disc">
                    <li>Fires are set by accident or recklessness. E.g. Careless use of campfires, smokers throw lit
                        cigarette butts in the grass .</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/animals/class7/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Guide children to discuss: What causes forest fires?
                <ul class="list-disc">
                    <li>Natural fires are caused by the hot weather whereby the grass and leaves are too dry and they catch
                        fire.</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/animals/class7/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask children: What are the results of a forest fire? Inform children that animals and plants in the forests
                are burnt to death due to forest fires; also when the living environments are destroyed, animals lose their
                homes and may die as they cannot find enough food and water.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/animals/class7/c3.png') }}" class="w-[27vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Guide children to discuss why people cut down trees. (To use the wood to make houses, furniture, paper,
                etc.)</li>
            <li>Inform children that forests are disappearing fast as people are cutting down too many trees. This is making
                many animals lose their homes which eventually leads to the death of these animals.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/animals/class7/c4.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Click to play the video. Let the children observe how a tree is cut using machinery. Guide children to know
                that it takes many years for trees to grow big but just a few minutes to be cut down.</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/animals/class7/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Guide children to discuss: Why do people hunt for wild animals?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/animals/class7/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Inform children that people hunt for wild animals not just for food, but for their other parts such as fur,
                skin, horns, etc. These parts may be used to make clothing , carvings and decorative items.</li>
        </ol>

        <div class="flex flex-col">
            <img src="{{ asset('assets/images/micet/k2/animals/class7/c6.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/k2/animals/class7/c7.png') }}" class="h-[10vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children: What will happen if all the tigers, elephants and rhinoceros become extinct? Encourage
                children to express their thoughts and feelings about this.</li>
            <li>Guide the children to discuss: What will happen to the wild animals and us if the grasslands and forests
                disappear? Help the children to think using the concept of food chain. For example: If there are no plants
                and grass, there will be no herbivores; if there are no herbivores, carnivores will die; if there are no
                animals and plants, what will happen to us?</li>
        </ol>

    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask children: Now that we know that wild life and their living environments are so important, how can we
                protect them?</li>
        </ol>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Distribute drawing papers. Invite children to think and draw how they can help to protect the wild animals.(
                or use Thematic Activity Book )</li>
        </ol>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
        </ol>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children display their drawings and take turns to explain them.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Know that it is important to protect wild life and their living environments.</li>
                <li>Able to use imagination to draw ways of protecting wild animals.</li>
            </ul>
        </div>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[4vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: Protect Wild Animals</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite children to find out more information regarding ways of protecting wild animals.</li>
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
