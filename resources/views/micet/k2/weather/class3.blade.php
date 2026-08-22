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
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[35vw]">
            <li>To understand how thunder and lightning are formed and their relation.</li>
            <li>To understand the safety precautions to be taken during thunder and lightning.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <div class="space-y-[2vw]">
            <h3 class="ptitle mt-[5vw]">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>Inflated Balloons (or small paper bags)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Ask: "What is this?" (lightning)</li>
                <li>Ask: "What comes after lightning?" (thunder)</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c1.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Ask if one always hears the sound of thunder immediately after seeing lightning. Have the children share
                their experiences.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Click on the video. Ask why lightning is seen first before hearing the roaring thunder. (Light travels
                faster than sound)</li>
        </ol>
        <video class="h-[23vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/weather/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Ask the children which of two explanations is correct: (1) lightning and thunder occur at the same time, (2)
                lightning comes before thunder. Have the children explain why.</li>
            <li>Explain to the children that because light (from lightning) travels much faster than sound (from the
                thunder) and that is the reason why we always see lightning before we hear the thunder. The longer the time
                delay between seeing the lightning and hearing the thunder, the further away the thunderstorm is. (In fact,
                we can tell how far away the thunderstorm is by counting the seconds between the lightning and the thunder.
                Every 3 seconds equals to 1 kilometre.)</li>
        </ol>
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Distribute the inflated balloons (or paper bags) to a few children and get them to burst the balloons to see
                what will happen (a loud explosive sound will be heard). Have the children know that when they burst the
                balloons, the air in the balloons expand rapidly, resulting in a loud bang. This principle also applies to
                the formation of thunder. The lightning heats up the air along its path, causing the air to expand rapidly,
                resulting in a loud bang, the thunder. (Instead of distributing inflated balloons, have the children inflate
                the balloons if they are able to.)</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Ask: "What's the difference between the three lightning shown (circled red and yellow)?". Explain that there
                are two types of lightning: (1) between clouds, and (2) from the cloud to the ground.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Ask: "What's the difference between the three lightning shown (circled red and yellow)?". Explain that there
                are two types of lightning: (1) between clouds, and (2) from the cloud to the ground.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>An example of a cloud-to-ground lightning strike.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Click on the video to observe lightning between clouds.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/weather/class3/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Review the story with the children. Have the children recall that Tina stopped Daisy Duckling from hiding
                under the tree. Ask the children why it is dangerous to hide under a tree when it rains. Guide the children
                to understand that lightning takes the shortest path and that lightning from the clouds may strike the
                tallest object on the ground.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>If there are highlands beneath the clouds, lightning will strike the highlands.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c6.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>If there are highlands beneath the clouds, lightning will strike the highlands.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c7.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>If there are no highlands but high rise buildings, lightning will strike the buildings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c8.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>If there are no highlands but high rise buildings, lightning will strike the buildings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c9.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>If there are no highlands but high rise buildings, lightning will strike the buildings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c10.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Here is a roof that was struck and damaged by lightning.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c11.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>If there are no high rise buildings but tall trees, the lightning will strike the trees; the taller the
                tree, the higher the chances of being struck by lightning.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/weather/class3/c12.png') }}" class="h-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/weather/class3/c13.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="16">
            <li>.Here is a tree which has been struck by lightning. The bark of the tree is burnt.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c14.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="17">
            <li>Have the children know that because lightning strikes at the tallest object, thus, they should not stand
                under or near tall trees or electrical poles.</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="18">
            <li>If we stand in an open space and there are no trees or structure taller than us, then we will be the tallest
                object in that place. Hence, there is a possibility of being struck by lightning.</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="19">
            <li>These are dairy cattle that were struck by lightning as they stood in the open grassland and so lightning
                can be very dangerous.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c15.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="20">
            <li>Ask the children should they be in the open area during a thunderstorm. Inform them that if there are no
                trees or structures taller than us, then we should crouch into a ball on the ground.</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="21">
            <li>Explain that lightning also do have a tendency to strike metals and water (since they are good conductors of
                electricity). Hence, they must not: stay near any metallic objects like iron railings or pipes; carry
                umbrellas with metal tips or other things made of metal; ride on bicycles, motorcycles or push metal carts.
                If they are swimming or rowing a boat, they must return to shore immediately.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c16.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="22">
            <li>Since lightning has a tendency to strike metals, buildings are installed with metal lightning rods which are
                wired to the ground. If lightning strikes, it will then strike the lightning rods which will then conduct
                the electricity to the ground and this keeps the people inside the building safe.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c17.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="22">
            <li>Since lightning has a tendency to strike metals, buildings are installed with metal lightning rods which are
                wired to the ground. If lightning strikes, it will then strike the lightning rods which will then conduct
                the electricity to the ground and this keeps the people inside the building safe.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/weather/class3/c18.png') }}" class="h-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/weather/class3/c19.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="22">
            <li>Since lightning has a tendency to strike metals, buildings are installed with metal lightning rods which are
                wired to the ground. If lightning strikes, it will then strike the lightning rods which will then conduct
                the electricity to the ground and this keeps the people inside the building safe.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c20.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="22">
            <li>Since lightning has a tendency to strike metals, buildings are installed with metal lightning rods which are
                wired to the ground. If lightning strikes, it will then strike the lightning rods which will then conduct
                the electricity to the ground and this keeps the people inside the building safe.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c21.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="23">
            <li>Lightning rods are also installed on top of tall electrical poles.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/weather/class3/c22.png') }}" class="h-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/weather/class3/c23.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="24">
            <li>Guide the children to understand that during a thunderstorm, if possible, they should go indoors or get
                inside a car. Although cars are made of metal, the body of a car acts just like a lightning rod which keeps
                the people safe by conducting the electricity to the ground.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/weather/class3/c24.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="25">
            <li>Ask the children what they should do to keep safe in a thunderstorm even when they are indoors. Guide the
                children to understand that they should stay away from windows, electrical equipments (such as telephone,
                TV, computer and air conditioners) and water (such as washing and bathing).</li>
        </ol>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="26">
            <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Thunder and Lightning</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children explain the safety precautions to be taken when there is thunder and lightning based
                    on their drawings.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to explain how thunder and lightning are formed and their relationship.</li>
                <li>Able to name some safety precautions to be taken during thunder and lightning.</li>
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
            const returnURL = "{{ url('/micet/k2/weather/index') }}";
            const doneURL = "{{ url('/micet/k2/weather/index') }}";

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
