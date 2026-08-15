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
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand that our ears enable us to hear sounds</li>
            <li>Express what sounds they like and dislike to hear</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul w-[42vw]">
            <li>Thematic Activity Book</li>
            <li>Opaque containers (make some tiny holes on them, so that
                the smell of things inside can be detected)</li>
            <li>Things with smell like orange, banana, lemon, pineapple or
                other fruits that are peeled or cut, rose flower, chilli sauce,
                vinegar, raw fish, used socks, used matches, etc</li>
            <li>Before lesson, place these things into different containers</li>
        </ul>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Ask children: “”Where is the nose of the gingerbread man?”” Have the children
                    point to the nose.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Ask children: "Where is your nose?" "How many nose do you have?" Have
                children point to their own nose. Tell them that everyone has a nose.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c1.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">nose</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Ask children: "What will happen if we have no nose?"</li>
            <li>Have children do an experiment to confirm the functions of the nose.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c1.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">nose</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Have children use two fingers to press their nose. Teacher holds a container
                with an orange and have children sniff it. Ask children whether they can
                detect any smell.</li>
            <li>Have children stop pressing their nose and sniff the container again. Ask
                children whether they can detect any smell. Then have them guess what is
                inside the container.</li>
            <li>Tell children that without our nose, we'll not be able to smell.</li>
            <li>Repeat steps 5-7 with different containers, let children guess the thing inside
                each container.</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Ask children: “”Do you like all the smells? Let’s find out together!””</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: "What do you see?" "Do you like the smell of it?"</li>
            <li>Guide children in understanding: Sometimes we like certain smells and
                sometimes we dislike certain smells.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c2.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: "What do you see?" "Do you like the smell of it?"</li>
            <li>Guide children in understanding: Sometimes we like certain smells and
                sometimes we dislike certain smells.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c3.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: "What do you see?" "Do you like the smell of it?"</li>
            <li>Guide children in understanding: Sometimes we like certain smells and
                sometimes we dislike certain smells.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c4.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: "What do you see?" "Do you like the smell of it?"</li>
            <li>Guide children in understanding: Sometimes we like certain smells and
                sometimes we dislike certain smells.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: "What do you see?" "Do you like the smell of it?"</li>
            <li>Guide children in understanding: Sometimes we like certain smells and
                sometimes we dislike certain smells.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children: "What do you see?" "Do you like the smell of it?"</li>
            <li>Guide children in understanding: Sometimes we like certain smells and
                sometimes we dislike certain smells.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c7.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Teacher concludes: Our nose enables us to smell. Sometimes we like
                certain smells and sometimes we dislike certain smells.</li>
            <li>Ask children: "Is the nose important?" Tell children that the nose is an
                important part of our body and we must take good care of it.</li>
        </ol>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: I Can Smell</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Guide children to complete the corresponding activity in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul">
                <li>Let the children take turns and share what smells they like and
                    dislike.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul">
                <li>Able to understand that our nose enable us to smell.</li>
                <li>Able to express what smell they like dislike.</li>
            </ul>
        </div>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: I Can Hear</h1>

        <div class="text-start">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let the children find things with a distinct smell at home, and
                    then bring and show them to the class.</li>
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
            const returnURL = "{{ url('/micet/n1/mybody/index') }}";
            const doneURL = "{{ url('/micet/n1/mybody/index') }}";

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
