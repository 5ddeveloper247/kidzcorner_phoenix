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
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand that air is there in our surroundings</li>
            <li>Understand the uses of air</li>
            <li>Promote an interest in finding answers through experiments</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>A plastic bag for each child</li>
            </ul>

            <div class="mt-[2vw]">
                <h3 class="text-white text-[1.5vw]">For hands-on experiment:</h3>

                <ul class="list-disc panel-ul">
                    <li>Inflatable float</li>
                    <li>Balloons, basketballs, air pumps</li>
                    <li>Bubble wraps</li>
                    <li>Soap water for blowing bubbles</li>
                    <li>Two hardboiled eggs</li>
                    <li>A bicycle tyre (if available).</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Use a plastic bag to trap air and close the opening by holding it tight. Let children touch the plastic
                    bag. Ask children: What is inside the plastic bag? (air)</li>
                <li>Guide children to conduct an experiment to explore what air is:
                    <ul class="list-disc">
                        <li>Distribute the plastic bags. Let children use the plastic bags to trap air.</li>
                        <li>Let the children open the bag to see, smell and touch the air.</li>
                        <li>Ask them: Can you see, smell or touch air?</li>
                    </ul>
                </li>
                <li>Guide children to conclude that: Our surroundings has air but we cannot see, smell and touch the air. In
                    other words, air has no colour, no smell and is invisible.</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Ask children: Why is there air in our surroundings? What do you think are the uses of air?</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Guide children to do the following experiment to understand why we need air: Ask children to hold their
                breath for 10 seconds, then say how they feel when they stop breathing (chest feels stuffy, giddy, unable to
                breathe, feels uncomfortable, etc).</li>
            <li>Guide children to conclude from the result of the experiment: we breathe air and need air to survive.</li>
        </ol>

        <video class="h-[15vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/transport/class5/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Inform children that all living things that is plants, animals and humans need air to survive.</li>
        </ol>
        <div class="flex">
            <img src="{{ asset('assets/images/micet/k1/transport/class5/c1.png') }}" class="h-[22vw]" />
            <img src="{{ asset('assets/images/micet/k1/transport/class5/c2.png') }}" class="h-[22vw]" />
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Ask children: What happens when air leaks out from a tyre?</li>
            <li>Click to play the video. Let children observe what happens when air leaks out of a tyre.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/transport/class5/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: What happens when air is pumped into a tyre?</li>
            <li>Click to play the video. Let children observe what happens when air is pumped into a tyre.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/transport/class5/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Let children discuss: If the tyres are without any air, what would happen to a car, motorcycle or bicycle?
                Ifthe entire tyre is solid rubber what would happen to a car, motorcycle or a bicycle?</li>
            <li>Guide children to conclude that: Air is very useful for filling up things because it gives shape to things
                and makes them functional. Besides that, air is light and therefore does not add much to the weight of the
                things.</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Ask children: Besides tyres, what other things need to be filled with air in order to be used.</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Balloons need to be filled with air in order to have shape and be used.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/transport/class5/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="16">
            <li>A basketball need to be filled with air in order to have shape and be used.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/transport/class5/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="17">
            <li>Floats need to be filled with air in order to have shape and be used.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/transport/class5/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="18">
            <li>Bubbles need to be filled with air in order to have shape and be used.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/transport/class5/c6.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="19">
            <li>Ask children: What happens when we drop a balloon without air on the floor?</li>
            <li>Click to play the video. Let children observe what happens.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/transport/class5/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="21">
            <li>Ask children: What happens when we drop a balloon with air on the floor?</li>
            <li>Click to play the video. Let children observe what happens.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/transport/class5/v5.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="23">
            <li>Guide children to conclude from the result of the experiment: When things filled with air drop on the floor,
                they will bounce. Air makes things bounce.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="24">
            <li>Ask children: What happens when an egg is dropped from a height of one metre to the ground? What happens
                when an egg wrapped in a few layers of bubble wrap is dropped from a height of one metre to the ground?</li>
            <li>Click to play the video. Let children observe the process and the result of the experiment.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/transport/class5/v6.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="26">
            <li>Guide children to conclude from the result of the experiment: Air is a good shock absorber that protects
                things from damage.</li>
            <li>Let children discuss: Why seats in a car are fitted with air bags? Guide children to understand that in the
                case of an accident, the air bags will inflate rapidly. As air is a good shock absorber, the inflated air
                bags will protect the driver and the passengers from getting hurt and will thus reduce injury.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="28">
            <li>Finally, let children choose from the prepared items to conduct experiments to help explore the uses of air
                (e.g. blow balloons; pump air into a basketball or a float; bounce a balloon or a basketball; drop a
                hardboiled egg to the ground and then drop a hardboiled egg wrapped in a bubble wrap to the ground).</li>
            <li>Guide children to summarise the uses of air:
                <ul class="list-disc">
                    <li>We need to breathe air to survive.</li>
                    <li>Air can be used to fill up things; it is light, gives things shape and makes them functional.</li>
                    <li>Air can make things bounce.</li>
                    <li>Air is a good shock absorber and protects things from damage.</li>
                </ul>

            </li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="30">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>



    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children to state where air is and the uses of air.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Know that air is in our surroundings.</li>
                <li>Able to state some uses of air.</li>
                <li>Understand that we can find answers to questions through experiments.</li>
            </ul>
        </div>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: The Magical Effect of Air</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children to find examples of objects at home that need to be filled with air and share the
                    information with their classmates.</li>
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
            const returnURL = "{{ url('/micet/k1/transport/index') }}";
            const doneURL = "{{ url('/micet/k1/transport/index') }}";

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
