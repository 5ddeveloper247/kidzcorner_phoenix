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
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <img src="{{ asset('assets/images/micet/n2/fairy/class3/c1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Learn to compare two objects based on a specific
                characteristic</li>
            <li>Understand the concept of antonyms and learn some
                antonyms</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div>
            <h3 class="ptitle mt-[5vw]">Preparations</h3>

            <ul class="list-disc panel-ul w-[40vw]">
                <li>Thematic Activity Book</li>
                <li>Sets of two objects: Two balls of the same colour and
                    design but of different sizes; two sticks of different thickness;
                    two ropes of different lengths; two glasses of water-one hot
                    and the other cold; two books of different thickness; two
                    handkerchiefs- one new and the other old; two bottles
                    filled with different amount of beads</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Have the children state the difference between the two balls. Guide the
                    children to describe the balls (e.g. big and small).</li>
            </ol>
        </div>
        <div class="flex gap-[3vw] items-end">
            <img src="{{ asset('assets/images/micet/n2/fairy/class3/c2.png') }}" class="w-[15vw] h-[15vw]" />
            <img src="{{ asset('assets/images/micet/n2/fairy/class3/c3.png') }}" class="w-[11vw] h-[11vw]" />
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="2">
                <li>Point out the words big and small</li>
            </ol>
        </div>
        <div class="flex gap-[3vw] items-end">
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c2.png') }}" class="w-[15vw] h-[15vw]" />big
            </div>
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c3.png') }}" class="w-[11vw] h-[11vw]" />small
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Invite two children of the same gender but having a marked difference in their
                heights to stand side by side in front of the class. Have the other children state
                the differences between the two children. Guide the children in saying
                (child's name) is tall, (child's name) is short.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] justify-between items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="4">
                <li>Point out the words big and small</li>
            </ol>
        </div>
        <div class="flex gap-[3vw] items-center justify-center">
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c4.png') }}" class="w-[10vw] h-[20vw]" />tall
            </div>
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c5.png') }}" class="w-[10vw] h-[13vw]" />short
            </div>
        </div>
    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Explain to the children that words that have opposite meanings such as big
                and small, tall and short are called antonyms.
            </li>
            <li> Guide the children in listing other antonyms that they know. Write them on the
                whiteboard.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] justify-between items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="7">
                <li>Have the children state the differences between the two bears. Guide the
                    children to describe the bears (e.g. fat and thin).</li>
            </ol>
        </div>
        <div class="flex gap-[3vw] items-center justify-center">
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c5.png') }}" class="w-[15vw] h-[20vw]" />
            </div>
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c4.png') }}" class="w-[10vw] h-[20vw]" />
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="8">
                <li>Point out the words big and small</li>
            </ol>
        </div>
        <div class="flex gap-[3vw] items-center justify-center">
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c5.png') }}" class="w-[15vw] h-[20vw]" />fat
            </div>
            <div class="text-white text-[2vw]">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c4.png') }}" class="w-[10vw] h-[20vw]" />thin
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col  items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="9">
                <li>Have the children state the differences between the two pencils. Guide the
                    children to describe the lengths of the pencils (e.g. long and short).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/fairy/class3/c7.png') }}" class="h-[18vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li class="text-[1.5vw]">Point out the words big and small</li>
        </ol>

        <div class="flex items-center gap-[1.5vw] mt-[3vw]">
            <div class="flex flex-col justify-around h-full text-[2vw] text-white">
                <div>long</div>
                <div>short</div>
            </div>
            <img src="{{ asset('assets/images/micet/n2/fairy/class3/c7.png') }}" class="h-[18vw]" />
        </div>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="11">
                <li>Have the children state the differences between the two pencils. Guide the
                    children to describe the size of the pencils (e.g. thick and thin).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/fairy/class3/c8.png') }}" class="h-[15vw] mt-[3vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start w-full max-w-[45vw]">
            <ol class="list-decimal panel-ul" start="12">
                <li class="text-[1.5vw]">Point out the words big and small</li>
            </ol>
        </div>

        <div class="flex items-center gap-[1.5vw] mt-[3vw]">
            <div class="flex flex-col justify-around h-full text-[2vw] text-white">
                <div>thick</div>
                <div>thin</div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c8.png') }}" class="h-[18vw]" />
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="13">
                <li>Have the children state the differences between the two groups of stools.
                    Guide the children to describe the quantity (e.g. many and few).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/fairy/class3/c9.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li class="text-[1.5vw]">Point out the words many and few</li>
        </ol>

        <div class="flex flex-col items-center gap-[1.5vw] w-full">
            <!-- Top Side: Image -->
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c9.png') }}" class="h-[20vw]" />
            </div>
            <div class="flex flex-row justify-around w-full text-[2vw] text-white">
                <div>many</div>
                <div>few</div>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Have the children state the differences between the two books. Guide the
                children to describe the thickness of the books (e.g. thick and thin).</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n2/fairy/class3/c10.png') }}" class="h-[20vw]" />
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li class="text-[1.5vw]">Point out the words big and small</li>
        </ol>

        <div class="flex flex-col items-center gap-[1.5vw]">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c10.png') }}" class="h-[20vw]" />
            </div>
            <div class="flex flex-row justify-around w-full text-[2vw] text-white">
                <div>thick</div>
                <div>thin</div>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="17">
                <li>Have the children state the differences between the two toys. Guide the
                    children to describe the condition of the toys (e.g. new and old).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/fairy/class3/c11.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li class="text-[1.5vw]">Point out the words big and small</li>
        </ol>

        <div class="flex flex-col items-center gap-[1.5vw]">
            <!-- Top Side: Image -->
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c11.png') }}" class="h-[20vw]" />
            </div>
            <div class="flex flex-row justify-around w-full text-[2vw] text-white">
                <div>new</div>
                <div>old</div>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="19">
                <li>Have the children state the differences between the two glasses of water.
                    Guide the children to describe the temperature of the water (e.g. hot and cold).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n2/fairy/class3/c12.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li class="text-[1.5vw]">Point out the words cold and hot</li>
        </ol>

        <div class="flex flex-col items-center gap-[1.5vw]">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n2/fairy/class3/c12.png') }}" class="h-[20vw]" />
            </div>

            <div class="flex flex-row justify-around w-full text-[2vw] text-white">
                <div>cold</div>
                <div>hot</div>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[50vw]" start="21">
                <li>One by one display the sets of two objects (prepared earlier). Let the
                    children compare the two objects in each set and use antonyms to describe
                    them.</li>
                <li>Have the children find things in the classroom where comparisons can be
                    made, then use antonyms to describe them. For example, the table is high
                    but the chair is low; the teacher is tall but the children are short; there are
                    many children but a few teachers, etc.</li>
            </ol>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="23">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Teacher to say a word and children to give the antonym of
                    the word, e.g. tall - short, fat - thin.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to understand the concept of antonyms.</li>
                <li>Able to name some antonyms.</li>
                <li>Able to find things in the classroom that have opposite
                    characteristics and use antonyms to describe them.</li>
            </ul>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Let’s Compare</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Group the children in twos - one child says a word and the
                    other child gives its antonym. Let them take turns to say the
                    word.</li>
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
