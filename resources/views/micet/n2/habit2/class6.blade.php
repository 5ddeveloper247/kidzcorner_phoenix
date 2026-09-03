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
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>
        <div class="flex ">
            <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
        </div>
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Learn the correct steps of brushing teeth</li>
            <li>Learn to sing the "Brushing Teeth" song</li>
            <li>Learn to sing the song and do actions</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>Inform children to bring their toothbrushes to school</li>
            </ul>

            <div>
                <h3 class="panel-ul">For Optional Activity:</h3>
                <ul class="panel-ul list-disc">
                    <li>A big teeth brushing model and brush set</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Ask children: Why do we brush our teeth? What will happen if we do not brush
                    our teeth? When should we brush our teeth? How many times a day should we
                    brush our teeth?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/habit2/class6/c1.png') }}" class="w-[27vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Use the following animation to demonstrate the correct steps of brushing teeth:
                <ul>
                    <li>a. First, squeeze some toothpaste onto the toothbrush. Explain to the
                        children that fluoride toothpaste can prevent tooth decay.</li>
                    <li>b. Place the toothbrush against the outer teeth gum line, then brush
                        downwards and outwards. Brush gently so as not to hurt the gum. Repeat
                        process until all teeth have been brushed.</li>
                </ul>
            </li>
        </ol>
        <video class="h-[15vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/habit2/class6/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Use the following animation to demonstrate the correct steps of brushing teeth:
                <ul>
                    <li> c. Repeat step b to brush the inner teeth.</li>
                </ul>
            </li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/habit2/class6/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Use the following animation to demonstrate the correct steps of brushing teeth:
                <ul>
                    <li>d. Then, place the toothbrush on the chewing surface and brush gently.</li>
                    <li>e. Lastly, don't forget to brush the tongue.</li>
                </ul>
            </li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/habit2/class6/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>(Optional Activity) Use the big teeth model and brush set to demonstrate the
                correct steps of brushing teeth:
                <ul>
                    <li>a. First, squeeze some toothpaste onto the toothbrush. Explain to the
                        children that fluoride toothpaste can prevent tooth decay.</li>
                    <li>b. Place the toothbrush against the outer teeth gum line, then brush
                        downwards and outwards. Brush gently so as not to hurt the gum. Repeat
                        process until all teeth have been brushed.</li>
                    <li>c. Repeat step b to brush the inner teeth.</li>
                    <li>d. Then, place the toothbrush on the chewing surface and brush gently.</li>
                    <li>e. Lastly, don't forget to brush the tongue.</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Have children bring their mugs and toothbrushes to the washroom and stand
                in a row to practise the proper way of brushing their teeth. Guide them to use
                the correct steps.</li>
            <li>After brushing, have the children state when we should brush our teeth. Guide
                them to understand that we should brush our teeth at least twice a day, once
                in the morning and once at night especially before sleeping. It would also be
                ideal to brush our teeth after meals.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center justify-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Play the "Brushing Teeth" song and teach the children to sing the song.
                Encourage them to imitate the actions as they sing the song.</li>
            <li>When children are familiar with the song, they can change the lyrics by
                replacing the timing of brushing teeth (e.g. before going to bed, after every
                meal). <span class="flex flex-end">Let them then sing the modified song and do actions.
                    <button class="w-[3vw]" id="soundButton">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button></span>
            </li>
        </ol>
        <h4 class="text-white text-[2vw] text-start">
            This is the way we brush our teeth, <br>
            Brush our teeth, brush our teeth. <br>
            This is the way we brush our teeth, <br>
            So early in the morning.</h4>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children sing the "Brushing teeth" song and imitate the
                    actions of brushing teeth.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to use the correct steps of brushing teeth.</li>
                <li>Able to state when we should brush our teeth.</li>
                <li>Able to sing the "Brushing Teeth" song and do the actions.</li>
            </ul>
        </div>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: How Should We Brush Our Teeth?</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children to practise the correct steps of brushing teeth
                    at home.</li>
                <li>Have children brush their teeth in school every morning for
                    the week.</li>
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
            const returnURL = "{{ url('/micet/n2/habit2/index') }}";
            const doneURL = "{{ url('/micet/n2/habit2/index') }}";

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
