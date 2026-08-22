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
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Understand the functions of bird calls</li>
            <li>Learn to distinguish and imitate some bird calls</li>
            <li>Find musical instruments that can be used to imitate some bird calls and play the musical instruments</li>
            <li>Understand the function of a bird's dance movements</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>Musical instruments that can be used to imitate birds' calls (e.g. triangle, small hand drum
                    (tambourine), cabasa, maracas, tone block, whistle)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[47vw]">
                <li>Ask the children: How do we interact with each other ? (through language and gestures) How do birds
                    interact with each other? Do birds have their own language?</li>
                <li>Guide children to understand that:
                    <ul class="list-disc">
                        <li>Bird calls are a form of language. Every type of bird has its own unique calls and actions, and
                            they rely on them to interact with their own flock.</li>
                        <li>Bird calls come into use when they gather in groups, find food, migrate, feed their young and
                            fend off enemies. Male birds also attract female birds using calls.</li>
                        <li>Some birds are good in imitating sounds. They can imitate sounds of other birds, animals and
                            even human voices (e.g. parrots, mynah).</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Ask the children if their families keep birds at home. Invite those who keep birds at home to share the
                reasons why their families do so. Help the children understand that most people keep birds because of their
                lovely songs.</li>
            <li>Ask children to describe and imitate some bird calls they have heard before.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Play the audio of different birds' calls (starts from the next slide). Help children to get familiar with
                the names of the birds and their unique calls.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">a) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the ducks. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">b) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the parrots. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">c) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the pigeons. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">d) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the owl. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">e) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the crow. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">f) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the rooster. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">g) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the seagulls. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li><span class="flex items-end">h) <button class="w-[2.5vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>Have the children name the bird which makes this sound, then invite them </span> to find the
                picture of the bird.
                Have the children know that it is the quacking of the eagle. Encourage the children to imitate the sound.

            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class5/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Encourage the children to use musical instruments to imitate bird calls (e.g. use maracas to imitate crows'
                caws). Invite all the children using different musical instruments to perform together a "Birds' song".
                Encourage children to exchange their instruments and perform more "Birds' songs".</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Guide the children to understand that birds not only use their calls to attract the opposite sex but they
                also use dance movements to attract a mate.</li>
        </ol>
        <div class="text-center">
            <img src="{{ asset('assets/images/micet/k1/birds/class5/c2.png') }}" class="h-[12vw]" />
            <p class="ptitle">cranes</p>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Guide the children to understand that birds not only use their calls to attract the opposite sex but they
                also use dance movements to attract a mate too.</li>
        </ol>
        <div class="text-center">
            <img src="{{ asset('assets/images/micet/k1/birds/class5/c3.png') }}" class="w-[35vw]" />
            <p class="ptitle">snow geese</p>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Click on the video for the children to observe the use of dance movements to attract a mate.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class5/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Click on the video for the children to observe the use of dance movements to attract a mate.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class5/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Organise the children into groups. Each group will use bird calls to create their own type of language
                    for interaction. Each group will explain and perform the "Birds' language" they created.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Know that birds use their calls and actions to interact.</li>
                <li>Able to distinguish and imitate some bird calls.</li>
                <li>Able to find suitable musical instruments to imitate some bird calls.</li>
                <li>Able to cooperate with group members to create their own bird language.</li>
            </ul>
        </div>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Bird Calls and Dance</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children imitate the dance movements of some birds (e.g. crane and snow geese) and then create
                    a birds' dance. Encourage them to incorporate their 'Birds' dance' with the 'Birds' song'.</li>
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
