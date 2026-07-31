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
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>
    <img src="{{ asset('assets/images/micet/k2/occupation/class7/c1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>To perform different roles of the various people working in a hospital and experience the fun in role-play.</li>
        <li>To enhance use of related language and develop expression skills.</li>
        <li>To develop cooperative skills.</li>
    </ul>
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <div>
        <h3 class="ptitle">Suggested Classroom Setup</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <p>Conduct activities 5 to 8 together by dividing the classroom into four role-
                play corners labelled with: Our kindergarten, Our construction site, Our
                hospital and Our space-port. Prepare and place four separate prop boxes
                in their respective areas. Organise children into 4 groups to take turns
                rotating among the four corners. Teacher facilitates by rotating through the
                corners to assist children in their role-play.</p>
        </ul>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Thematic Activity Book</li>
            <li>Decorate a corner of the classroom as a hospital to include an emergency room, ward, pharmacy, x-ray room etc.</li>
            <li>Hospital props box (refer to Activity 3).</li>
            <li>Different signage: emergency room, ward, pharmacy, x-ray room, please wait, visiting hours, authorised personnel only, etc.</li>
            <li>Identification tags (to be clipped on clothes or hang on the neck): doctor, surgeon, nurse, pharmacist, patient, visitor, etc.</li>
            <li>Blank strips of cardboard for children to make additional signs.</li>
            <li>Numeral cards of numbers 1 to 20.</li>
        </ul>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <div>
        <ul class="list-disc panel-ul w-[45vw]">
            <li>Pictures and picture books related to hospitals.</li>
            <li>Drawing papers, colour pencils.</li>
            <li>Toy phone.</li>
            <li>Body charts.</li>
            <li>Weighing scale.</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Children to recall the various people working at a hospital, the nature of their jobs.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class7/c2.png') }}" class="h-[20vw]">
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Display the hospital prop box and the tools. Children to review the names of these tools, their functions and note how the items are to be used.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Present a situation of an accident where some people are injured. Ask children: "What should we do?". Explain to the children that in an emergency, we need to call for help as well as call for an ambulance. Get the children to demonstrate calling for help and to describe the kind of help needed.</li>
        <li>Children will imitate the sound of the ambulance siren. Discuss what the scene will be like during and after the accident and how the injured are sent to the hospital. Get children to dramatise the scene.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Help the children to discuss the arrangement of roles and the scenarios to be played in their groups. Invite the children to wear their identification tags and role-play. The scenarios can be of:
            <ul class="list-disc text-lg">
                <li>A nurse or doctor taking a patient's pulse.</li>
                <li>A doctor using a stethoscope to listen to a patient's heart beats.</li>
                <li>A nurse using a syringe to suck up water.</li>
                <li>A doctor or a nurse using a thermometer to measure a patient's temperature and imitate taking a reading.</li>
                <li>A nurse measuring a patient's height and weight and records them in a medical record.</li>
                <li>A doctor "records" some observations in the patient's medical record by drawing the part of the body and organ, e.g. heart, stomach, lungs that is being treated.</li>
            </ul>
        </li>
    </ol>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <ol class="list-disc panel-ul w-[50vw]">
        <li>A doctor explaining a patient's medical condition to the patient with the aid of a medical record.</li>
        <li>A pharmacist instructing a patient on the use of some medicine.</li>
    </ol>

</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Listen carefully to the children's conversations during role-play. When necessary, encourage and help them extend their use of language and terminology to add depth to their role-play and to help them understand the functions of the jobs better.</li>
    </ol>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Teacher guides the children to complete the corresponding activity in the Thematic Activity Book.</li>
    </ol>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Our Hospital</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Children to reflect and express feelings on the role played.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to use imagination to role-play.</li>
            <li>Able to use related language in appropriate context .</li>
            <li>Able to cooperate with others during role-play.</li>
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
        const returnURL = "{{ url('/micet/k2/occupation/index') }}";
        const doneURL = "{{ url('/micet/k2/occupation/index') }}";

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