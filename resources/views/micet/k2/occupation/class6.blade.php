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
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>
    <img src="{{ asset('assets/images/micet/k2/occupation/class6/c1.png') }}" class="h-[8vw]" />
    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>To experience the joy in performing different roles.</li>
        <li>To understand the different jobs at a construction site.</li>
        <li>To develop language expression skills.</li>
        <li>To develop cooperative skills.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Our Kindergarten</h1>

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
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul text-xs text-justify">
            <li>Thematic Activity Book</li>
            <li>A blueprint.</li>
            <li>Decorate a designated corner of the classroom as a construction site including toy cranes, bulldozers, dump trucks, etc.</li>
            <li>Construction site props box (refer to Activity 2).</li>
            <li>Pictures and magazines related to construction sites.</li>
            <li> Different signage: office, enter and exit with care, safety at construction site, safety first, authorised personnel only, etc.</li>
            <li>Identification tags (to be clipped on clothes or hang on the neck): painter, truck driver, carpenter, electrician, foreman, engineer, supervisor, visitor, etc.</li>
            <li>Blank strips of cardboard for children to make additional signs.</li>
            
        </ul>
    </div>
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-5">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div>
        <ul class="list-disc panel-ul text-xs">
            <li>One paint brush and a small pail filled with water for each child.</li>
            <li>Different types of measuring tools.</li>
            <li>Wood, hammers, nails.</li>
            <li>Screws and nuts and bolts of different sizes.</li>
            <li>Drawing papers.</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Children recall the people working at a construction site, the nature of their jobs and how the construction process flows.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class6/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Display the construction site prop box and the tools. Children review the names of these tools, their functions and note how the items are to be used.</li>
        </ol>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Distribute a paint brush and a pail of water to each child. Children will act as painters painting the different outdoor equipments and external site wall.</li>
            <li>Display the measuring tools (e.g. surveyor's rod, yardsticks, measuring tapes, T-ruler, etc.). Children to discuss which tool should be used to measure a particular object. Allow children to measure using different tools.</li>
        </ol>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Display the wood, hammers and nails in a designated outdoor area. Children will practice hammering nails. (Note: Teacher to ensure safety during this process).</li>
            <li>Teacher provides nuts and bolts of different sizes and gets the children to find the suitable parts that fit.</li>
        </ol>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Organise children into groups when they are familiar with the tools. Children will assign roles among themselves by wearing their identification tags and discuss how they are going to construct a tall building. Children will begin by drawing their designs on paper, then construct the building using boxes, paper rolls, corks, straws, etc. They will complete by painting the building with appropriate colours.</li>
        </ol>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Get a child to describe the role that he/she wishes to play. Followed by a discussion within the group of the roles the others will play and indicate the roles by wearing their identification tag. If more than one child vies for the same role, encourage them to negotiate. This helps them to learn social skills and to solve problem through discussion and compromise.</li>
        </ol>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Help the children understand that in order to have fun, all the children must cooperate. Before the start of the activity, children have to discuss their roles and the scenarios for their role-play. The scenario can be based on a day at the construction site.</li>
            <li>Encourage children to role-play the various roles at a construction site by using appropriate language, terminology and actions. Emphasise the importance of communication and cooperation among the various roles.</li>
        </ol>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Teacher guides the children to complete the corresponding activity in the Thematic Activity Book.</li>
        </ol>
    </div>
</div>



{{-- panel 28 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 6: Our Contruction site</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Children express their feelings about the different roles they played. Invite children from other groups to see their completed buildings.</li>
            <li>Invite the groups to present the special features of their building to the other children.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to use imagination to role-play.</li>
            <li>Able to use different tools correctly and understand the need to wear the safety helmet at the construction site.</li>
            <li>Able to use language appropriately.</li>
            <li>Able to cooperate with others in role-play.</li>

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