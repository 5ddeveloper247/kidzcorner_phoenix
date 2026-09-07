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
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
    </div>

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Learn to know some bird's world records</li>
        <li>Understand the capabilities of some birds</li>
        <li>Extend knowledge about birds</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Let the children recall the story of "Daisy Duckling's Learning Adventure" and state the capabilities of some birds. Inform the children that they are going to learn about some bird's world records.</li>
        </ol>
    </div>
</div>

{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>What is the biggest bird in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>What is the biggest bird in the world?<br>
            (Ostrich. It is bigger than humans.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c2.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>What is the smallest bird in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>What is the smallest bird in the world?<br>
            (Hummingbird. It is as small as our fingers)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c3.png') }}" class="h-[20vw]" />
</div>




{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>What is the fastest flying bird in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>What is the fastest flying bird in the world?<br>
            (Falcon. It can fly faster than the speed of cars on a highway and dive at
            speeds faster than that of a small aeroplane. )</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c4.png') }}" class="h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>What is the fastest running bird in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>What is the fastest running bird in the world?<br>
            (Ostrich. It can run faster than the cars travelling on the road.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c2.png') }}" class="h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>What is the fastest swimming bird in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>What is the fastest swimming bird in the world?<br>
            (Penguin. It can swim faster than the speed of some cars.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c5.png') }}" class="h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>Which bird has the longest beak in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>Which bird has the longest beak in the world?<br>
            (Pelican. Its beak is longer than a long ruler.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c6.png') }}" class="h-[20vw]" />
</div>




{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>Which bird has the best night vision in the world? (Encourage them to give reasons for their choice.))</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>Which bird has the best night vision in the world?<br>
            (Owls. They have very good night vision and a keen sense of hearing so 
      they usually hunt for food at night.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c7.png') }}" class="h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>Which bird has the longest wings in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>Which bird has the longest wings in the world?<br>
            (Albatross. Its wings, when spread out, are as long as the length of a mini car.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c8.png') }}" class="h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>What is the heaviest bird in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>What is the heaviest bird in the world?<br>
            (Ostrich. It weighs as much as the weight of two adults.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c2.png') }}" class="h-[20vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Ask the following question. Let the children guess the answer from the pictures below:
            <ul class="list-disc panel-ul w-[50vw]">
                <li>What is the highest flying bird in the world? (Encourage them to give reasons for their choice.)</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>What is the highest flying bird in the world? <br>
            (Vulture. Records show that a Ruppell's vulture can fly at the same height as  
     an aeroplane.)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c9.png') }}" class="h-[20vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>AAsk the children: Which bird has appeared more than once in the record list?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Yes, Ostrich has appeared three times. Ask the children to name the three records set by the ostrich.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Ostriches are the biggest, the heaviest and the fastest running birds in the world.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/birds/class7/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Ask the children: Which of the given records show the capabilities of some birds? Invite the children to give some examples of birds and their capabilities.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to state some bird's world records.</li>
            <li>Able to state the capabilities of some birds.</li>
        </ul>
    </div>
</div>


{{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 7: Special Birds</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children collect information at home about special birds, e.g. pigeons deliver mails, parrots talk, peacocks spread their tails, etc, and share the information they have gathered in class.</li>
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