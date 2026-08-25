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
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>
        <img src="{{ asset('assets/images/micet/n1/mybody/class7/c1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Know some symptoms of common sickness</li>
            <li>Understand what germs are</li>
            <li>Understand how germs enter our body and make us sick</li>
            <li>Understand that different types of germs cause different sickness</li>
            <li>Know what to do when one falls sick</li>
            <li>Identify some common medical instruments</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>One doll</li>
                <li>Toy medical instruments such as thermometer, stethoscope, blood pressure meter, tongue depressor,
                    syringe, etc</li>
                <li>Various empty plastic medicine bottles (wash and clean first)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Display the doll. Inform children that the doll is sick. Ask children: Where do
                    you think the doll feels unwell? Guide children to describe symptoms of
                    common sickness like headache, tired eyes, stomach ache, diarrhoea, fever
                    and tiredness.</li>
            </ol>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Have children describe each picture and then point out the pictures which
                have the girl showing signs of being sick.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c1.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Ask children: What are germs? Guide children to understand that germs are
                very tiny organisms that cause disease and make us sick. We need a special
                instrument called microscope to see them.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Inform children that different types of germs cause different sickness.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c3.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Ask children to discuss how germs can enter our body and make us sick.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Explain to children: Dirty hands have germs on them. When we touch food with
                dirty hands, these germs get on the food. They enter our body through our
                mouths when we eat such food and make us sick.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n2/habit2/class7/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Explain to children: Dirty air has germs. When we breathe in dirty air, germs get
                into our body and make us sick. Germs can also enter the body through
                wounds or skin cuts.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Let children describe what their parents would do if they were sick. Guide
                them in stating that their parents would take them to see the doctor.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Ask children: If you are sick and go to see the doctor, what would the doctor
                do? Guide children to understand that the doctor will examine the patient
                through a physical check up (e.g. take temperature, look at the tongue, listen
                to the heartbeat using a stethoscope). The physical check-up helps the
                doctor to determine their sickness and prescribe the appropriate medicine.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c4.png') }}" class="w-[22vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Ask children: If you are sick and go to see the doctor, what would the doctor
                do? Guide children to understand that the doctor will examine the patient
                through a physical check up (e.g. take temperature, look at the tongue, listen
                to the heartbeat using a stethoscope). The physical check-up helps the
                doctor to determine their sickness and prescribe the appropriate medicine.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c5.png') }}" class="w-[22vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Ask children: If you are sick and go to see the doctor, what would the doctor
                do? Guide children to understand that the doctor will examine the patient
                through a physical check up (e.g. take temperature, look at the tongue, listen
                to the heartbeat using a stethoscope). The physical check-up helps the
                doctor to determine their sickness and prescribe the appropriate medicine.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c6.png') }}" class="w-[22vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Display the toy medical instruments. Introduce names and uses of each
                instrument to children to prepare them for role play in Activity 10.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Ask children: What should you do when you are sick? Should you take
                medicine on your own without your parents' knowledge? Why?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c7.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Guide children to understand that they should inform their parents and not
                take any medicine without adult supervision as different types of germs cause
                different sickness which require different medications. The condition of your
                sickness might worsen if the wrong medication is taken.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c7.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Remind children that medicines are not sweets. They should not take any
                medicine on their own unless they were given to them by their parents,
                doctors or nurses.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c7.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Have children discuss why doctors ask patients to rest at home when they are
                sick. Guide children to understand that when we are sick, our bodies require
                large amounts of energy to fight the germs, thus with more rest, our bodies will
                recover faster.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n2/habit2/class7/c8.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: How do we get sick?</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children: Why do people fall sick? What can we do to
                    prevent us from falling sick?</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to state some symptoms of common sickness.</li>
                <li>Able to state why people fall sick and suggest ways to
                    prevent one from falling sick.</li>
                <li>Know what to do when one falls sick.</li>
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
