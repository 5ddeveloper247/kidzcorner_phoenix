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
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Identify three sense organs of insects</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: What are our sense organs? (eyes, ears, nose, tongue and skin) What are their functions?
                </li>
                <li>Ask children: What sense organs do insects have? How do the sense organs help the insect? Stimulate
                    children's interest in the sense organs of insects.</li>
            </ol>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: What sense organs do insects have? How do the sense organs help the insect? Stimulate
                children's interest in the sense organs of insects.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask children: How many eyes do we have? How many eyes does an insect have?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Explain that most insects have two large eyes known as compound eyes. Each compound eye is made up of many
                tiny lenses.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Compound eyes enable insects to have a wide angle vision. Thus, the eyes of insects are different from ours.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children: What part of an insect is this? What does it look like? Encourage children to use their
                imagination and express their ideas. Guide children to say the term "mouth".</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Inform the children that:
                <ul>
                    <li> -Different insects have different mouths depending on what they eat.</li>
                    <li> -Insects have biting mouth-parts for dealing with solid food and sucking mouth-parts for taking in
                        liquids.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: Are these biting or sucking mouth parts? Why?</li>
            <li>Explain that this is 'biting mouth-parts' of an insect. An insect uses biting mouth parts to cut and chew
                the food before shoving the food into the mouth. Biting mouth parts are best seen among ants, wasps, beetles
                and grasshoppers.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Look at the 'biting mouth parts' of an ant! </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c6.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask children: Are these biting or sucking mouth parts? What does it look like? Encourage children to use
                their imagination and express their ideas.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c7.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Inform children that this is 'sucking mouth parts' of an insect and the elongated part is like a needle on a
                syringe.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c7.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="14">
            <li>Display the syringe. Let the children describe the attached needle (e.g. it is long, sharp and painful if
                pierced by it ). Guide children to understand that insects use their needle like sucking mouth parts to
                pierce animals or plants and suck their liquids. Sucking mouth parts are best seen in mosquitoes.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c8.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Look, a mosquito uses its needle like mouth parts to pierce through the skin and suck blood.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c9.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Ask children: Are these biting or sucking mouth parts? What does it look like? Encourage children to use
                their imagination and express their ideas.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c10.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Inform children that this is 'sucking mouth parts' of an insect. The curled up part which looks like a
                curled party blower is known as proboscis.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c10.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Demonstrate and explain how a party blower works ( it straightens when blown out and curls up when it is not
                in use). Guide children to understand that an insect with proboscis will uncurl it to suck nectar from
                flowers. This kind of sucking mouth parts are best seen in butterflies.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c11.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Click to play the video. Let the children observe how a butterfly uses its party blower like mouthparts and
                sucks nectar.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/insects/class4/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Ask children: What part of an insect is this? What does it look like? Encourage children to use their
                imagination and express their ideas.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c12.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Ask children: What do we use to touch and hold things or food? (fingers) What do insects use to touch and
                hold things or catch their prey? Guide children to say the term "claws".</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c12.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Explain that insects have no fingers, but have pincer like claws at the end of their legs. The claws are
                sensitive to touch. Insects use their claws to touch and hold things or food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c13.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>23, Ask children to use the following sentence structure to describe the different sense organs of insects.
                "The __________ of the ________ ( insect's name) is like a/the ___________.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/insects/class4/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Insects’ Sense Organs</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book. </li>
        </ol>
    </div>



    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children group themselves into two groups,
                    namely, a butterfly group and a dragonfly group to sing and
                    dance according to the songs.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to sing the song "Beautiful Butterflies".</li>
                <li>Able to identify some characteristics of butterflies and
                    imitate them flying.</li>
                <li>Able to identify some characteristics of dragonflies and
                    imitate them hunting for food.</li>
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
            const returnURL = "{{ url('/micet/k1/insects/index') }}";
            const doneURL = "{{ url('/micet/k1/insects/index') }}";

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
