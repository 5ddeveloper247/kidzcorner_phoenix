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
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>To identify a triangle.</li>
            <li>To look at different triangles.</li>
            <li>To find objects shaped like triangles in the classroom.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>A triangle shaped block</li>
                <li>Transparent tape</li>
                <li>1 "flexible triangle" per child (refer to next page)</li>
            </ul>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <div>
            <h3 class="ptitle">Reference</h3>

            <ul class="list-disc panel-ul">
                <li>Materials to make an "flexible triangle":
                    <ul>
                        <li> i. 1 chopsticks </li>
                        <li> ii. Transparent tape </li>
                        <li> iii. 40 cm rope</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <div class="flex flex-col items-center">
            <h3 class="ptitle">Reference</h3>

            <ul class="list-disc panel-ul">
                <li>Steps to make a "flexible triangle":
                    <ul>
                        <li>i. Fold the rope in half and make a knot. </li>
                        <li>ii. Use tape to attach the rope tightly to the chopstick. </li>
                        <li>iii. The outcome is shown below.</li>
                    </ul>
                </li>
            </ul>
            <img src="{{ asset('assets/images/micet/n1/shapes/class5/c1.png') }}" class="w-[15vw]" />
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: "What is this?" "What shape is it?" (triangle)</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c2.png') }}" class="w-[22vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="2">
            <li>Display the triangle shaped block, ask children: "Does it look like the little
                mouse's favourite cheese?" "Does it look like the shape below?" "What shape
                is it?" (triangle)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c3.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="3">
            <li>Have children touch the sides of the triangle shaped block and talk about the
                characteristic of a triangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c3.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>Tell children that a triangle has 3 sides. Point to the different sides, guide
                children in counting (next page onwards).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c4.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>Tell children that a triangle has 3 sides. Point to the different sides, guide
                children in counting (next page onwards).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c5.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>Tell children that a triangle has 3 sides. Point to the different sides, guide
                children in counting (next page onwards).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c6.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>Tell children that a triangle has 3 sides. Point to the different sides, guide
                children in counting (next page onwards).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c7.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="5">
            <li>Display a "flexible triangle", tell children that they can use it to "make"
                different triangles.</li>
            <li>Demonstrate how to "make" different triangles with the "flexible triangle":
                Hold the chopstick with a hand, use the finger of another hand to pull the rope
                away from the chopstick at different angles.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c8.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="7">
            <li>Distribute a "flexible triangle" to each child. Get each child to observe the
                different triangles he/she makes. <br>
                [Note: Teacher moves around the classroom, guiding and assisting each child.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c8.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="8">
            <li>Ask children: "Are these triangles?" (Yes, triangles of different sizes.)</li>
            <li>Let children know that there are many objects shaped like triangles in our
                surroundings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c9.png') }}" class="h-[18vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c10.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">pizza</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c11.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">triangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c12.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">hanger</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c13.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">cheese</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c13.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">cheese</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c14.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">window</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle.</li>
        </ol>
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/micet/n1/shapes/class5/c15.png') }}" class="w-[16vw]" />
            <img src="{{ asset('assets/images/micet/n1/shapes/class5/c16.png') }}" class="w-[16vw]" />
        </div>
        <h5 class="text-[2vw] text-[#f7b94a]">window</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle. [Note: There are
                more than one rectangle in this picture, you can click on it a few times to see
                the different rectangles.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c17.png') }}" class="w-[28vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">flags</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle. [Note: There are
                more than one rectangle in this picture, you can click on it a few times to see
                the different rectangles.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c18.png') }}" class="w-[28vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">tiles</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the triangle. Click on the picture to see the triangle. [Note: There are
                more than one rectangle in this picture, you can click on it a few times to see
                the different rectangles.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c19.png') }}" class="h-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">sailboat</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="11">
            <li>Have children find objects shaped like triangles in the classroom.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="12">
            <li>Have children attach the chopstick part of the "flexible triangle" with tape in
                the Thematic Activity Book. Encourage children to pull the rope away from the
                chopstick to look at the different triangles at anytime.</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children take turns to use their own "flexible triangle"to show a triangle.</li>
                <li>Get children to talk about the characteristic of a triangle: It has 3 sides.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to know that there are different triangles.</li>
                <li>Able to find at least one object shaped like a triangle in the classroom.</li>
            </ul>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Triangle</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Get children to find an object shaped like a triangle from home, then
                    bring and show it in class.</li>
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
            const returnURL = "{{ url('/micet/n1/shapes/index') }}";
            const doneURL = "{{ url('/micet/n1/shapes/index') }}";

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
