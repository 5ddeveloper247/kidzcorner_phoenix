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
    <div class="phonics-panel flex flex-col justify-between  w-[45vw] items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>
        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c1.png') }}" class="h-[8vw]" />
        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Identify some molluscs</li>
            <li>Understand the characteristics of molluscs</li>
            <li>Understand that molluscs can be divided into molluscs with shells (one or two shells) and molluscs without
                shells</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
                <li>A squid and a clam</li>
                <li>Different types of seashells (one shelled and 2 shelled)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Ask children: What animal is this? Does it have a soft body or a hard body? Does it have bones inside
                    its body?</li>
            </ol>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/k2/underworld/class5/c3.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-xl">squid</h2>
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Ask children: What animal is this? Does it have a soft body or a hard body? Does it have bones inside its
                body?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Click to play the video. Ask children: What animal is this? Does it have a soft body or a hard body? Does it
                have bones inside its body?</li>
        </ol>

        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class5/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Ask children: What animal is this? Does it have a soft body or a hard body? Does it have bones inside its
                body?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Guide children to understand that:
                <ul class="list-disc pl-5">
                    <li>These are molluscs.</li>
                    <li>Molluscs have a soft body and do not have bones inside them.</li>
                </ul>
            </li>
        </ol>

        <div class="grid grid-cols-2 gap-6 w-[45vw] items-center justify-items-center">

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c6.png') }}"
                class="w-[15vw] h-[7vw] object-cover rounded-lg" />

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c2.png') }}"
                class="w-[15vw] h-[7vw] object-cover rounded-lg" />

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c3.png') }}" class="w-[15vw] object-contain" />

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c5.png') }}" class="w-[15vw] object-contain" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Display the squid and clam. Invite the children to touch the soft bodies of squid and clam and check if
                there are bones inside them.</li>
        </ol>

        <div class="flex gap-2">
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c3.png') }}" class="w-[17vw] h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c5.png') }}" class="w-[17vw] h-[15vw]" />
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Ask children: What is the main difference between molluscs and bony fishes, cartilaginous fishes, marine
                mammals and crustaceans? ( Molluscs do not have bones inside them.)
            </li>
        </ol>

        <div class="grid grid-cols-2 gap-6 w-[45vw] items-center justify-items-center">

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c6.png') }}"
                class="w-[15vw] h-[7vw] object-cover rounded-lg" />

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c2.png') }}"
                class="w-[15vw] h-[7vw] object-cover rounded-lg" />

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c3.png') }}" class="w-[15vw] object-contain" />

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c5.png') }}" class="w-[15vw] object-contain" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Display the squid and clam. Invite the children to touch the soft bodies of squid and clam and check if
                there are bones inside them.</li>
        </ol>

        <div class="flex gap-2">
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c3.png') }}" class="w-[17vw] h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c5.png') }}" class="w-[17vw] h-[15vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Guide children to understand that :
                <ul>
                    <li>Some molluscs have outer shells to protect their soft bodies.</li>
                    <li>The shells are not their skeletons but like their homes.</li>
                    <li>The molluscs with shells are not very mobile but their shells protect them from their enemies.</li>
                </ul>
            </li>
        </ol>

        <div class="flex gap-6">

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c2.png') }}"
                class="w-[20vw] h-[12vw] object-cover rounded-lg" />
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c5.png') }}"
                class="w-[20vw] h-[12vw] object-cover rounded-lg" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Let's take a look at some molluscs with shells and how some of them protect themselves.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Ask children : What mollusc is this? Does it have one shell or two shells? (1 shell) Guide children to know
                that the soft body is inside the shell and can be partly seen.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c8.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Inform the children that if a mollusc with a shell senses danger, then it will move away or hide inside its
                shell.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c9.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Ask children : What mollusc is this? Does it have one shell or two shells? (one shell)</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c10.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Abalones are molluscs with one shell. We eat them and use their shells to make jewellery and decorations.
                Abalones are expensive to buy.</li>
        </ol>

        <div class="flex gap-6">

            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c10.png') }}"
                class="w-[20vw] h-[12vw] object-cover rounded-lg" />
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c11.png') }}"
                class="w-[20vw] h-[12vw] object-cover rounded-lg" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Click to play the video. Let the children observe how a clam (molluscs with two shells) closes its shells
                tightly if in danger.</li>
        </ol>

        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class5/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Ask children: What mollusc is this? How many shells does it have?( two shells)</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c12.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Oyster is a kind of mollusc with two shells. Oysters are popular food and some oysters produce pearls.
                However, valuable pearls are found in only a small group of oysters.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c13.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Guide children to understand that:
                <ul>
                    <li>The shells of molluscs often last longer than their bodies.</li>
                    <li>When the molluscs die, many of their shells are washed up onto the seashore. That's why we can find
                        many empty seashells on the beach.</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c14.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Display different types of seashells. Invite children to discuss the types of molluscs they are and sort the
                seashells into two groups-one shell and two shell.</li>
        </ol>

        <img src="{{ asset('assets/images/micet/k2/underworld/class5/c14.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="16">
            <li>Guide children to understand that some molluscs do not have shells to protect their soft bodies. Molluscs
                that do not have shells can swim or move away from their enemies.</li>
        </ol>

        <div class="flex gap-2">
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c3.png') }}" class="w-[17vw] h-[15vw]" />
            <img src="{{ asset('assets/images/micet/k2/underworld/class5/c6.png') }}" class="w-[17vw] h-[15vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="17">
            <li>Let's look at how some molluscs without shells protect themselves.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="18">
            <li>Click to play the video. Let the children observe how the octopus escapes from the predator. (besides
                swimming away quickly, the octopus can also squeeze its soft body into a narrow hole.)</li>
        </ol>

        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class5/v3.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="19">
            <li>Click to play the video. Let the children observe how a cuttlefish protects itself ( can quickly change its
                colour and camouflage into its surroundings).</li>
        </ol>

        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class5/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="20">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have the children state the main characteristics of the molluscs.</li>
                <li>Let the children name some molluscs with shells and some molluscs without shells.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to state the main characteristics of molluscs.</li>
                <li>Able to name some molluscs with shells and some without shells.</li>
                <li>Able to sort seashells according to whether they have one shell or two shells.</li>
            </ul>
        </div>
    </div>



    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 5: Soft-Bodied Sea Creatures</h1>

        <div class="text-start">
            <h3 class="ptitle">Extension</h3>
            <ul class="list-disc panel-ul">
                <li>Place the seashells at the activity corner. Encourage children to use the seashells to create jewellery
                    or artwork.</li>
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
            const returnURL = "{{ url('/micet/k2/underworld/index') }}";
            const doneURL = "{{ url('/micet/k2/underworld/index') }}";

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
