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

        ol {
            width: 47vw;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/b1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/b2.png') }}" class="h-[8vw]" />
        </div>

        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Identify four basic colours - red, yellow, blue, green</li>
            <li>Know that different butterflies have different colours</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[5vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <div class="space-y-[2vw]">
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Have children name some places where we can see butterflies.</li>
                <li>Click on the video, have children talk about what they see (flowers, butterflies).</li>
            </ol>
        </div>
        <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/colours/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>




    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="3">
                <li>Ask children: "How do butterflies fly?"</li>
                <li>Have children imitate butterflies flying.</li>
                <li>Have children talk about the colour of the butterflies based on their
                    observations in the video (one colour or many colours).</li>
            </ol>
        </div>
        <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/colours/class3/v2.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="6">
                <li>Ask children whether they have ever seen butterflies in one colour or many colours.</li>
                <li>Tell children that there are different kinds of butterflies, some butterflies only
                    have one colour, and some have many colours. Tell them that they are going to look
                    at butterflies with only one colour.</li>
            </ol>
        </div>
        <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/colours/class3/v3.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c2.png') }}" class="w-[20vw]" />

            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c2.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[18vw] absolute left-[40%]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c3.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c3.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[18vw] rotate-[14deg] absolute left-[40%]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw]">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c4.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>

    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c4.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[18vw] rotate-[-10deg] absolute left-[38%] top-[20%]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw]">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c5.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c5.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[18vw] rotate-[28deg] absolute bottom-[29%] left-[40%]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>

    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw]">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c6.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c6.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[18vw] absolute left-[40%] top-[30%] rotate-[9deg]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[16vw] rotate-[16deg] absolute left-[44%] top-[46%]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>

    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw]">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c7.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c7.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[14vw] absolute left-[45%] top-[13%]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}"
                class="w-[16vw] rotate-[7deg] absolute left-[41%] top-[27%]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>

    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c8.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c8.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}" class="w-[24vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>

    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c9.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: "What is the colour of this butterfly?" Have children choose the
                correct answer. [Note: If a child is unable to name the colour, allow him/her to
                point to the colour and the teacher can assist the child to name it.]</li>
        </ol>

        <div class="flex items-center justify-between w-[40vw] relative">
            <img src="{{ asset('assets/images/micet/n1/colours/class3/c9.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/arrow.png') }}" class="w-[24vw]" />
            <img src="{{ asset('assets/images/micet/n1/colours/class3/cbar.png') }}" class="h-[17vw]" />
        </div>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Colourful Butterflies</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul">
                <li>Guide children to conclude: different butterflies have different colours.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul">
                <li>Able to point out the colours on the butterflies.</li>
                <li>Able to know that different butterflies have different colours.</li>
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
                    const returnURL = "{{ url('/micet/n1/colours/index') }}";
                    const doneURL = "{{ url('/micet/n1/colours/index') }}";

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

                    <<
                    << << < HEAD
                    // VIDEO FUNCTIONS

                    function stopAllVideos() {
                        document.querySelectorAll(".phonics-panel video").forEach(video => {
                            video.pause();
                            video.currentTime = 0;
                        });
                    }


                    function playSlideAudio(slideIndex) {
                        // Stop any currently playing audio
                        stopCurrentAudio(); ===
                        === =
                        function isLastSlide(slideIndex) {
                            if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true; >>>
                            >>> > Hashir

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

                            function showSlide(slideIndex) {
                                // Stop audio from previous slide
                                stopCurrentAudio();

                                stopAllVideos();

                                // Hide all slides, show only current one
                                slides.forEach((slide, index) => {
                                        if (index === slideIndex) {
                                            slide.classList.remove("hidden");
                                        } else {
                                            slide.classList.add("hidden");
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
                                                currentAudio.play().catch(err => console.log(
                                                    'Audio play failed:', err));
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

                                    const letterLinks = document.querySelectorAll(
                                        '.phonics-panel a[href=""]:not([class*="info-btn"])'); letterLinks.forEach(
                                        link => {
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
