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
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
    </div> 


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Develop logical inference skill</li>
            <li>Understand food categories</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Help the children to review the different food sources. Tell them that based on the various food
                    sources, we can categorise food into different groups.</li>
            </ol>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Fruit Group - Introduce the fruit group by showing examples of fruits. Ask questions to guide the children
                to identify the characteristics of the fruit group, such as fruits come from plants, are eaten raw, etc.
            </li>
        </ol>
        <div class="flex flex-col items-center">
            <div class="flex items-center gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c1.png') }}" class="h-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c2.png') }}" class="w-[15vw]" />
            </div>
            <div class="flex items-center gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c3.png') }}" class="w-[15vw]" />
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c4.png') }}" class="w-[15vw]" />
            </div>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Fruit Group - Introduce the fruit group by showing examples of fruits. Ask questions to guide the children
                to identify the characteristics of the fruit group, such as fruits come from plants, are eaten raw, etc.
            </li>
        </ol>
        <div class="flex flex-col items-center">
            <div class="flex items-center gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c5.png') }}" class="w-[15vw]" />
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c6.png') }}" class="w-[15vw]" />
            </div>
            <div class="flex items-center gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c7.png') }}" class="w-[15vw]" />
                <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c8.png') }}" class="w-[15vw]" />
            </div>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Fruit Group - Introduce the fruit group by showing examples of fruits. Ask questions to guide the children
                to identify the characteristics of the fruit group, such as fruits come from plants, are eaten raw, etc.
            </li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c9.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c10.png') }}" class="w-[25vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask the children how they think fruits help us? Explain that fruits give our body fibre which makes
                digestion easy. Fruits also help our body to prevent disease and help in maintaining good health.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c11.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Vegetable Group - Introduce the vegetable group by showing examples of vegetables. Ask questions to guide
                the children to identify the characteristics of the vegetable group, such as all vegetables are plants, are
                usually eaten after cooking, etc.</li>
        </ol>
        <div class="space-y-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c12.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c13.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Vegetable Group - Show more examples of vegetables. Ask questions to guide the children to identify the
                characteristics of the vegetable group, such as all vegetables are plants, are usually eaten after cooking,
                etc.</li>
        </ol>
        <div class="space-y-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c14.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c15.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask the children how they think vegetables help us? Explain that vegetables give our body fibre which makes
                digestion easy. Vegetables also help our body to prevent disease and help in maintaining good health.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c16.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Grain Group - Introduce the grain group by showing examples of grains. Ask questions to guide the children
                to identify the characteristics of the grain group, such as all grains are seeds of plants, they are usually
                eaten after cooking, have a sticky texture after cooking, etc.</li>
        </ol>
        <div class="space-y-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c17.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c18.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Click on the video to show the sticky texture of rice after cooking.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/nutrition/class4/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Click on the video to show the sticky texture of noodles after cooking. Guide the children to understand
                that grains generally feel sticky after cooking.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/nutrition/class4/v2.mp4') }}" type="video/mp4">
        </video>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask the children what they think the grain group food does? Explain that the grain group food gives our body
                energy to work and play.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c19.png') }}" class="h-[15vw]" />
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li> Meat Group - Introduce the meat group by showing examples. Ask questions to guide the children to identify
                the characteristics of the meat group, such as they come from animals, are usually eaten after cooking, etc.
            </li>
        </ol>
        <div class="space-y-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c20.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c21.png') }}" class="h-[8vw]" />
        </div>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li> Meat Group - Introduce the meat group by showing examples. Ask questions to guide the children to identify
                the characteristics of the meat group, such as they come from animals, are usually eaten after cooking, etc.
            </li>
        </ol>
        <div class="space-y-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c22.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c23.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li> Ask the children what they think the meat group food does? Explain that the meat group food helps grow our
                muscles and makes us strong.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c24.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li> Milk Group - Introduce the milk group by showing examples. Ask questions to guide the children to identify
                the characteristics of the milk group, such as they come from dairy cows, etc.</li>
        </ol>
        <div class="space-y-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c25.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c26.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask the children what they think the milk group food does? Explain that milk group food makes our bones and
                teeth strong.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c27.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li> Click on the picture below to open the Software Magnetic Board. Guide the children to categorise the food
                items into the different food groups. </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class4/c28.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Food Family</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
        </ol>
    </div>


    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Invite the children to talk about other special food that they have eaten, and based on the above
                    method, categorise the food.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Be able to name the characteristics of food in each food group.</li>
                <li>Be able to categorise food correctly.</li>
            </ul>
        </div>
    </div>


    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Encourage the children to visit a supermarket with their parents in order to learn about the different
                    types of food. Try using the method learnt in this activity to categorise the food. Parents may assist
                    if the children come across less common and unique food.</li>
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
            const returnURL = "{{ url('/micet/k2/nutrition/index') }}";
            const doneURL = "{{ url('/micet/k2/nutrition/index') }}";

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
