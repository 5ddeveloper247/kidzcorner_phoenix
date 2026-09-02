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
        font-size: 1.3vw;
        text-align: left;
    }
</style>
@endpush

@section('content')

{{-- panel 1 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>
    <div class="flex ">
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b1.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b8.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b2.png') }}" class="h-[6vw]" />
        </div>
    </div>
    <img src="{{ asset('assets/images/micet/n2/habit2/activity/c1.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>
                To begin the lesson, ask the following questions to arouse children's curiosity
                and interest?
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>What time do you usually go to bed at night?</li>
                    <li>What time do you wake up in the morning?</li>
                    <li>Have you fallen sick? Why did you fall sick?</li>
                </ol>
            </li>

            <li>
                Elicit answers from the children, then continue with the following questions to
                focus the children's attention on the key points of the courseware.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>What time do you usually go to bed at night?</li>
                    <li>What time do you wake up in the morning?</li>
                    <li>Have you fallen sick? Why did you fall sick?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 1: Story - Clean and Healthy</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/n2/habit2/activity/c2.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <li>To develop good personal hygiene</li>
                    <li>To understand the importance of
                        sleeping and waking up early, having
                        regular meals on time, cutting down
                        on junk food, washing hands
                        frequently and exercising regularly</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>

    <div class="text-start">
        <h3 class="ptitle">Story</h3>

        <p class="panel-ul">It is ten o'clock in the morning. Tina is still asleep as she has stayed up late watching
            television the night before. Tina's good friend, the frog, wakes her up. After brushing
            her teeth and washing her face, Tina goes out to play with the frog without having
            breakfast. They play hopscotch with Daisy Duckling. Daisy Duckling is having a cold. She
            does not cover her mouth when she sneezes. The germs in the air get into Tina's body
            and she develops a fever. Tina goes to the owl's clinic. Doctor Owl tells Tina that she is
            sick because she did not have enough sleep, skipped her breakfast and had breathed in
            unclean air. Tina follows Doctor Owl's advise and soon gets well. But the frog
            is now stuck in the glass bottle as it has gotten too fat from eating too many
            sweets and chocolates. Everyone worked together to pull him out. Doctor
            Owl then instructs the frog to cut down on junk food. Under Dr Owl's
            guidance, everyone kicks their bad habits (e.g. eating junk food, sleeping
            late, etc.) They begin to exercise daily and soon become strong and healthy.</p>
    </div>
</div>

{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 2: Visual Discrimination</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/n2/habit2/activity/c3.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <li>To learn to recognise the numbers 1 -3</li>
                    <li>To carry out the activity according to
                        instructions</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[27vw]">
                    <li>Children click on the correct numbers
                        according to instructions and place them
                        on the spoon.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 3: Counting</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/n2/habit2/activity/c4.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <li>To enhance observation skills</li>
                    <li>To learn to count items</li>
                    <li>To recognise simple numbers</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[27vw]">
                    <li>Children find the items (toothbrush or
                        comb) hidden in the picture according
                        to instructions, count them and click on
                        the correct number.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 4: Listening Comprehension</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/n2/habit2/activity/c4.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[30vw]">
                    <li>To recognise different colours</li>
                    <li>To enhance listening comprehension
                        skill</li>
                </ul>
                <h3 class="ptitle">Porcess</h3>
                <ul class="panel-ul w-[27vw]">
                    <li>Children click on the correct towel
                        according to instructions. An animation
                        appears when the answer is correct.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Computer Activities: Clean and Healthy</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>At the end of the lesson, touch on the questions asked at the
                beginning of the lesson.</li>
            <li>Children describe ways to maintain a healthy lifestyle. For example, sleeping
                and waking up early, eating regular meals on time, cutting down on junk food,
                washing hands frequently and exercising regularly.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to complete the various activities in the courseware.</li>
            <li>Able to describe some ways to maintain a healthy lifestyle.</li>
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
</script>
@endpush