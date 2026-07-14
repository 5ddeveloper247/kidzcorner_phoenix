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
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>
    <div class="flex">
        <img src="{{ asset('assets/images/micet/n2/fairy/activity/c1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n2/fairy/activity/c2.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n2/fairy/activity/c3.png') }}" class="h-[7.3vw]" />
        <img src="{{ asset('assets/images/micet/n2/fairy/activity/c4.png') }}" class="h-[7.3vw]" />
    </div>

    <img src="{{ asset('assets/images/micet/n2/fairy/activity/c5.png') }}" class="w-[25vw]" />
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>

    <div class="text-start">
        <h3 class="ptitle">Tuning-in</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>
                To begin the lesson, ask the following questions to arouse children's curiosity
                and interest:
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li>What do you do before entering someone's house or room?</li>
                    <li>Have you ever damaged your friend's things? If so, what did you do after
                        that?</li>
                    <li>Have you been to a concert before? What musical instruments do you
                        know?</li>
                </ol>
            </li>
            <li>
                Elicit answers from the children and then continue with the following questions
                to focus their attention on the key points of the courseware.
                <ol class="list-[lower-alpha] pl-[2vw]">
                    <li> What did Goldilocks do in Baby Bear's house? </li>
                    <li>What did Goldilocks damage?</li>
                    <li>Did the bear family forgive Goldilocks in the end? Why?</li>
                </ol>
            </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Activity 1: Story - Goldilocks And The Three Bears</h3>

        <div class="flex justify-center items-start gap-[3vw]">
            <img src="{{ asset('assets/images/micet/n2/fairy/activity/c6.png') }}" class="w-[25vw]" />
            <div>
                <h3 class="ptitle">Objectives</h3>
                <ul class="list-disc panel-ul w-[25vw]">
                    <li>To learn to compare sizes</li>
                    <li>To establish correct values through
                        understanding the principle of
                        correcting one's mistakes</li>
                    <li>To develop inter-personal skills through
                        learning basic etiquette of being a guest</li>
                    <li>To understand cause and effect in story
                        development</li>
                </ul>
            </div>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>

    <div class="text-start">
        <h3 class="ptitle">Story</h3>

        <p class="panel-ul">One morning, Mama Bear cooks delicious porridge for breakfast. The
            porridge is too hot. Hence, the bears decide to go for a walk and return for
            breakfast when the porridge has cooled. Careless Baby Bear forgets to
            close the door when they leave. Just then, Goldilocks passes by the bears'
            house. Curious, she pushes the door and goes in. She finishes baby bear's
            porridge and spoils its chair. Finally, she lies on Baby Bear's bed and falls
            asleep. The three bears return home. They get angry when they see what
            has happened to their house. When Goldilocks sees them, she does not
            apologise but runs away. Later, she feels that her behaviour is wrong and
            she returns the next day to apologise. She brings a small stool for Baby Bear.
            The bears are very happy and they forgive her.</p>
    </div>
</div>

{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>

    <div class="flex gap-[2vw]">
        <div>
            <h3 class="ptitle">Activity 2: Shapes</h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/activity/c7.png') }}" class="w-[25vw]" />

        </div>
        <div class="text-start">
            <h3 class="ptitle">Objectives</h3>
            <ul class="panel-ul w-[30vw]">
                <li>To learn some geometrical shapes</li>
                <li>To develop matching skills</li>
                <li>To enhance visual discrimination skills</li>
                <li>To practise observation skills</li>
            </ul>
            <h3 class="ptitle">Process</h3>
            <ul class="panel-ul w-[30vw] text-[0.7vw]">
                <li>The outline of an object is shown. Small
                    geometrical shapes are placed around the
                    object. Children use the mouse to match and
                    place the corresponding shapes onto the outline.</li>
                <li>The children click on the left and right hand
                    buttons to select other objects
                    (there are 10 objects to choose from).</li>
            </ul>
        </div>
    </div>
</div>


{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-6vw]">
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>

    <div class="flex gap-[1vw]">
        <div>
            <h3 class="ptitle">Activity 3: The Beaver Band</h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/activity/c8.png') }}" class="w-[25vw]" />

        </div>
        <div class="text-start">
            <h3 class="ptitle">Objectives</h3>
            <ul class="panel-ul w-[30vw]">
                <li>To differentiate musical instruments by
                    listening to their sounds</li>
                <li>To develop basic music composition skills</li>
                <li>To enjoy a music activity</li>
            </ul>
            <h3 class="ptitle">Process</h3>
            <p class="text-white text-[1.2vw] w-[30vw] ">The beavers band will introduce some musical instruments
                and the sounds they make: such as a drum, gong, triangle,
                wooden sticks, castanets and maracas, etc. <br>
                This activity consists of two parts:
            </p>
            <ul class="panel-ul w-[30vw]">
                <li>Performance: The children listen to the band and determine
                    the musical instruments used.
                </li>
                <li>Creation: The children use the mouse to select the
                    instruments sequentially, and then click on the
                    "Play" button to play back the music composition.</li>
            </ul>
        </div>
    </div>
</div>



{{-- Panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center mt-[-6vw]">
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>

    <div class="flex gap-[2vw]">
        <div>
            <h3 class="ptitle">Activity 4: Chicken Dance</h3>
            <img src="{{ asset('assets/images/micet/n2/fairy/activity/c8.png') }}" class="w-[25vw]" />

        </div>
        <div class="text-start">
            <h3 class="ptitle">Objectives</h3>
            <ul class="panel-ul w-[30vw]">
                <li>To enjoy music and dancing different movements</li>
                <li>To learn to choreograph a dance using</li>
                <li>To develop appreciation for music and dance</li>
            </ul>
            <h3 class="ptitle">Process</h3>
            <ul class="list-decimal panel-ul w-[30vw]">
                <li>The children help Jojo choose different dance partners
                    and movements according to their preferences. </li>
                <li>Click on the character buttons at the bottom to change
                    Jojo's dance partner.</li>
                <li>Click on the top right circles to choose different
                    movements to choreograph a dance.</li>
                <li>After selection, click on OK button. Jojo and her
                    dance partner will perform a dance based on children's
                    selections.</li>
            </ul>
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Computer Activities: Apple Tree Playhouse</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>At the end of the lesson, revisit the questions asked at the beginning of the lesson.</li>
            <li>Display the musical instruments that the beavers band use.</li>
            <li>Have the children name the instruments to reinforce their knowledge of
                musical instruments.</li>
            <li>Have the children perform the dance in Computer Activity 4.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to differentiate sizes.</li>
            <li>Able to complete the various activities in the courseware.</li>
            <li>Able to select the corresponding musical instruments by listening to the music.</li>
            <li>Able to perform by imitating the dance movements in the courseware.</li>
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
            const returnURL = "{{ url('/micet/n2/fairy/index') }}";
            const doneURL = "{{ url('/micet/n2/fairy/index') }}";
    
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