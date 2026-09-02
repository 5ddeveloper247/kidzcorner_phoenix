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
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>To identify a rectangle.</li>
            <li>To confirm the characteristic of a rectangle by using a rope to
                measure each of its sides.</li>
            <li>To look at rectangles of different sizes.</li>
            <li>To find objects shaped like rectangles in the classroom.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>
        <div class="text-center space-y-[2vw]">
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>A square shaped block and a rectangle shaped block</li>
                <li>A rope</li>
                <li>1 "extendable rectangle" per child (refer to next page)</li>
                <li>White glue</li>
            </ul>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>
        <div class="text-center space-y-[2vw]">
            <h3 class="ptitle">Refernces</h3>

            <ul class="list-disc panel-ul">
                <li>Materials to make an "extendable rectangle":</li>
                <ul class="pl-[1vw]">
                    <li> i. 2 A4 papers</li>
                    <li> ii. Crayons</li>
                </ul>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <div class="text-center">
            <h3 class="ptitle">Refernces</h3>

            <ol class="list-disc panel-ul w-[45vw]">
                <li>Steps to make an "extendable rectangle":
                    <ul>
                        <li> i. Stack up 2 sheets of A4 paper, fold approximately 5 cm from the
                            top and bottom of paper.</li>
                        <li> ii. Pull the bottom paper out from the right side (leave approximately
                            3 cm), draw a rectangle on both sheets of paper. Then push the paper
                            back and stop a little before the edge of the drawn rectangle.</li>
                        <li> iii. The outcome is shown below.</li>
                    </ul>
                </li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c1.png') }}" class="h-[10vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <div class="text-center">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: "What is this?" "What shape is it?" (rectangle)</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Display the rectangle shaped block, ask children: "Does it look like the door
                of little mouse's watermelon house?" "Does it look like the shape below?"
                "What shape is it?" (rectangle)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c3.png') }}" class="h-[18vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Have children touch the sides of the rectangle shaped block and talk about
                the characteristic of a rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c3.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Tell children that a rectangle has 4 sides, 2 are long and 2 are short. Point to
                the different sides, guide children in counting (next page onwards).</li>
        </ol>
        <div class="h-[18vw] w-[11vw] border-[.5vw] border-white"> </div>
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Tell children that a rectangle has 4 sides, 2 are long and 2 are short. Point to
                the different sides, guide children in counting (next page onwards).</li>
        </ol>
        <div class="h-[18vw] w-[11vw] border-[.5vw] border-white"> </div>
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Tell children that a rectangle has 4 sides, 2 are long and 2 are short. Point to
                the different sides, guide children in counting (next page onwards).</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <div class="text-red-500 text-[1vw]">1</div>
            <div class="h-[18vw] w-[11vw] border-[.5vw] border-white border-l-red-500"> </div>
        </div>
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Tell children that a rectangle has 4 sides, 2 are long and 2 are short. Point to
                the different sides, guide children in counting (next page onwards).</li>
        </ol>
        <div class="flex flex-col">
            <div class="text-red-500 text-[1vw]">2</div>
            <div class="h-[18vw] w-[11vw] border-[.5vw] border-white border-t-red-500"> </div>
        </div>

        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Tell children that a rectangle has 4 sides, 2 are long and 2 are short. Point to
                the different sides, guide children in counting (next page onwards).</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <div class="h-[18vw] w-[11vw] border-[.5vw] border-white border-r-red-500"> </div>
            <div class="text-red-500 text-[1vw]">3</div>
        </div>
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Tell children that a rectangle has 4 sides, 2 are long and 2 are short. Point to
                the different sides, guide children in counting (next page onwards).</li>
        </ol>
        <div class="flex flex-col">
            <div class="h-[18vw] w-[11vw] border-[.5vw] border-white border-b-red-500"> </div>
            <div class="text-red-500 text-[1vw]">4</div>
        </div>
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Have children observe how the teacher uses a rope to measure one side of a
                rectangle, then cuts the rope according to the length of the rectangle. Have 2
                or 3 children then use the rope to measure each side of the rectangle, while
                the other children observe them. Guide children in concluding the
                characteristic of a rectangle: It has 4 sides, 2 are long and 2 are short.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="6">
            <li>Display an "extendable rectangle", tell children that they can use it to
                "make" rectangles of different sizes. </li>
            <li>Demonstrate how to "make" rectangles of different sizes with the "extendable
                rectangle": Each hand holds a side of the paper, right hand pulls the paper
                out at different levels.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c4.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="8">
            <li>Distribute an "extendable rectangle" to each child. Get each child to look at
                the different sizes of rectangles made by him/her. <br>
                [Note: Teacher moves around the classroom, guiding and assisting each child.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c4.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="9">
            <li>Ask children: "Are these rectangles?" (Yes, rectangles of different sizes.)</li>
            <li>Let children know that there are many objects shaped like rectangles in our
                surroundings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c5.png') }}" class="h-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">rectangle</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c6.png') }}" class="h-[10vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">ruler</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c7.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">book</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c8.png') }}" class="h-[15vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">envelop</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c9.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">stamp</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c10.png') }}" class="h-[15vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">cassette</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c11.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">photo frame</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c12.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">television</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle. [Note: There
                are more than one rectangle in this picture, you can click on it a few times to
                see the different rectangles.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c13.png') }}" class="h-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">chocolate</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle. [Note: There
                are more than one rectangle in this picture, you can click on it a few times to
                see the different rectangles.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c14.png') }}" class="h-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">refrigerator</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="11">
            <li>Display picture. Have children name the item and talk about its use, then
                point to the rectangle. Click on the picture to see the rectangle. [Note: There
                are more than one rectangle in this picture, you can click on it a few times to
                see the different rectangles.]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class4/c15.png') }}" class="h-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">keyboard</h5>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="12">
            <li>Have children find objects shaped like rectangles in the classroom.</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <ol class="list-decimal panel-ul w-[47vw]" start="13">
            <li>Have children paste the "extendable rectangle" with white glue in the
                Thematic Activity Book. Encourage children to pull the paper out from the
                right to look at the different sizes of rectangles at anytime. [Note: Remind
                children to put glue only at the back of the paper on the left.]</li>
        </ol>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Get children to talk about the characteristic of a rectangle:
                    It has 4 sides, 2 are long and 2 are short.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to know that there are rectangles of different sizes.</li>
                <li>Able to find at least one object shaped like a rectangle in
                    the classroom.</li>
            </ul>
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[4vw]">
        <h1 class="panel-title stroke">Classroom Activity 4: Rectangle</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Get children to find an object shaped like a rectangle from home, then
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
