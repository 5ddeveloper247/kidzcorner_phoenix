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
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand that not all animals that can fly are birds</li>
            <li>Understand that not all birds can fly</li>
            <li>Imitate bird movements such as flying, swimming and moving on land</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>Ask the children: What are birds? Are bees and butterflies birds? Why? Guide children to state the main
                    characteristics of birds (e.g. they have feathers, a pair of wings, a beak and two legs).</li>
                <li>Ask the children: Are all animals that can fly birds? Guide the children to understand that many animals
                    that fly are not birds because they don't have the basic characteristics of birds. Encourage the
                    children to name some animals that can fly but are not birds.</li>

            </ol>

            <p class="panel-ul w-[50vw]">[Note: There are only four types of animals that flap their wings to fly: some
                birds and
                insects, bats (the only mammals that can fly), and pterosaurs (flying reptiles that are already extinct)].
            </p>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>Ask the children: Can all birds fly? Guide children to understand that most birds can fly as they have a
                very light skeleton. Also, the shape of their body and feathers are suitable for flying.</li>
        </ol>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Ask the children: Do all birds fly in the same way? Guide children to understand that birds fly in different
                ways.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>Click to play the video. Have the children observe and discuss how this bird flies. Guide children to
                understand that this bird flaps its wings up and down to fly and most birds fly this way.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class6/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Most birds flap their wings to fly. Invite children to imitate the action of flapping.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="7">
            <li>Click to play the video. Have the children observe and discuss how this bird flies. Guide children to
                understand that this bird is gliding; its wings are widely spread, and do not flap (like a kite).</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class6/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="8">
            <li>Inform children that large wings are required for gliding so only birds with large wings can glide. Invite
                children to imitate the action of gliding.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Click to play the video. Let the children observe and discuss how this bird flies. Guide children to know
                that this bird is hovering, where it flaps its wings rapidly (like a helicopter).</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class6/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>Inform children that the hummingbird is the only bird that can hover and fly backwards. It is also the
                smallest bird in the world. Invite the children to imitate the action of hovering.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c3.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="11">
            <li>Guide children to understand that all birds take off and land by flapping their wings.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c4.png') }}" class="h-[13vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>Click to play the video. Let the children observe and discuss how these birds take flight. Guide children to
                understand that all birds flap their wings to take off. Invite the children to imitate the action of taking
                off.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class6/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="13">
            <li>Click to play the video. Let the children observe and discuss how these birds land. Guide children to
                understand that all birds flap their wings to land. Invite the children to imitate the action of landing.
            </li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class6/v5.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>Inform children that besides flying, some birds can also swim. Have children name some birds that can fly
                and swim.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="15">
            <li>Let the children observe and describe the feet of the birds that can swim. Guide the children to understand
                that birds that can swim have webbed feet. The webbing between the toes act like paddles and help them to
                swim more easily.</li>
        </ol>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/micet/k1/birds/class6/c5.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/k1/birds/class6/c6.png') }}" class="h-[10vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="16">
            <li>Click to play the video. Let the children observe and discuss how this bird uses its webbed feet to paddle.
                Invite the children to imitate the action of paddling.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class6/v6.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="17">
            <li>Guide the children to understand that there are some birds that cannot fly. Let the children give some
                examples of birds which cannot fly.</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="18">
            <li>Let the children discuss: What bird is this? Can it fly? (Peacocks can fly but are weak fliers as their
                wings are too small and bodies are big and heavy.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c7.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="19">
            <li>Let the children discuss: What bird is this? Can it fly? (Penguins cannot fly as their wings are too small
                and bodies are too big.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c8.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="20">
            <li>Guide children to understand that although penguins cannot fly, they are excellent swimmers. Besides using
                its pair of webbed feet as paddles, a penguin also use its wings as an additional pair of paddles, when
                swimming. This makes it different from the other birds that can swim.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c8.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="21">
            <li>Click to play the video. Let the children observe how a penguin uses its wings and webbed feet as paddles
                when swimming. Have the children imitate the paddling actions of a penguin.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k1/birds/class6/v7.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="22">
            <li>Let the children discuss: What bird is this? Can it fly? (Kiwi birds cannot fly as they have evolved to
                become flightless birds.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c9.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="23">
            <li>Let the children discuss: What bird is this? Can it fly? (Ostriches cannot fly as they are too huge for
                their wings to carry their weight during flight.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c10.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="24">
            <li>Guide children to understand that although an ostrich cannot fly, it is a fast runner. An ostrich can run
                faster than the cars on the road. It is the fastest two legged animal.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k1/birds/class6/c11.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="25">
            <li>Let the children listen to the instructions given and imitate the actions of different birds. (e.g. a dove
                flaps its wings to fly; an eagle spreads its wings to glide; a hummingbird hovers in mid-air; a sparrow hops
                to move on land; a peacock walks slowly while its fan feathers spread out like a fan, a penguin or duck's
                swaying walk.)</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="26">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>



    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 6: Can It Fly?</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let each child name a bird he/she likes most and imitate its actions.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Know that not all animals that can fly are birds.</li>
                <li>Know that not all birds can fly.</li>
                <li>Able to imitate bird movements such as flying, swimming and moving on land.</li>
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
