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
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>
    <img src="{{ asset('assets/images/micet/k2/occupation/class8/c1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>To develop interest in exploring space.</li>
        <li>To role-play the various roles involved in space exploration.</li>
        <li>To improve language expression skills.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

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
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul w-[50vw]">
            <li>Thematic Activity Book</li>
            <li>Decorate a designated corner of the classroom as a space-port including a design room, mission control, spaceship etc.</li>
            <li>Space props box (recommended materials): spaceship, oxygen tank, space helmet, spaceship control panel (instructions on making of props given on following slides).</li>
            <li>Earphones, "moon" rocks, tweezers or tongs, diary, knapsacks.</li>
            <li>Shovel, computer keyboard, torchlight.</li>
            <li>Frozen-food trays, packages of freeze-dried foods (found at camping stores).</li>
        </ul>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>
        <ul class="list-disc panel-ul w-[53vw]">
            <li>Magnifying glass, walkie-talkie.</li>
            <li>Plastic gloves, sports bottles with drinking tubes, rubber or plastic tubes.</li>
            <li>Space suit (made from plastic bags, space blanket, or metallic surgery blanket).</li>
            <li>Pictures of control towers, map of space, record book and pencils, uniforms, cap, tables and chairs.</li>
            <li>Cardboard with knobs, buttons and windows, phone and microphone.</li>
            <li>Different signage: design room, mission control, spaceship, authorised personnel only, safety first, etc.</li>
            <li>Identification tags (to be clipped on clothes or hang on the neck): captain, astronaut, commander, control tower personnel, visitor ...</li>
            <li>Blank strips of cardboard for children to make additional signs.</li>
        </ul>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>
        <h2 class="text-white text-xl underline text-start">Props making guide:</h2>

        <ul class="panel-ul">
            <li><u> Spaceship:</u><br>
                Prepare an area for the spaceship, decorate the cabin (including cardboard, earphones, window, microphone, planets chart and map etc), place for astronauts to eat and sleep (including cushions, chair with seat belt, storeroom etc), life saving kit, helmet, uniform, boots etc. If possible, hang some pencils and earphones from the ceilings to simulate zero gravity.
            </li>
        </ul>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>
        <h2 class="text-white text-xl underline text-start">Props making guide:</h2>

        <ul class="panel-ul">
            <li><u> Control panel:</u><br>
                Using a piece of cardboard (cut from a cardboard box), cover with aluminium
                foil or spray with a coat of silver paint, glue bottle caps and draw or paste
                pictures of control panels, speedometer, altimeter, barometer, clock, and
                pictures of space.
            </li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class8/c2.png') }}" class="h-[8vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>
        <h2 class="text-white text-xl underline text-start">Props making guide:</h2>

        <ul class="panel-ul">
            <li><u> Mission control:</u><br>
                Make a sign that reads: "mission control". Display sign at children's eye-level.
                Place a control box on a table and place the uniform that is to be worn by the
                personnel on a chair by it.
            </li>
        </ul>
    </div>
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>
        <h2 class="text-white text-xl underline text-start">Props making guide:</h2>

        <ul class="panel-ul">
            <li><u> Oxygen tanks:</u><br>
                Place two rolls of paper towels or drinks bottles together. Wrap them with
                aluminium foils and tie them together using ropes. Attach two elastic bands as
                straps.
            </li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class8/c3.png') }}" class="h-[8vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>
        <h2 class="text-white text-xl underline text-start">Props making guide:</h2>

        <ul class="panel-ul">
            <li><u>Space helmet:</u><br>
                Cut an empty gallon plastic bottle into half and cut out a semi circle the size of
                children's face. Paint the helmet with silver or white paint (note: ensure that the
                corners are rounded). Use markers to write the words "astronaut" on the front of
                the helmet.
            </li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class8/c4.png') }}" class="h-[8vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>
        <h2 class="text-white text-xl underline text-start">Props making guide:</h2>

        <ul class="panel-ul">
            <li><u> Surface of the moon:</u><br>
                Sew two pieces of white or neutral coloured bed sheets together, leaving one
                side open, forming a "big pillow". Stuff foams inside the bed sheets to form the
                "uneven surface of the moon", then sew the side which is open.
            </li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class8/c5.png') }}" class="h-[8vw]" />
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>
        <h2 class="text-white text-xl underline text-start">Props making guide:</h2>

        <ul class="panel-ul">
            <li><u>Classroom decoration:</u><br>
                <ul class="list-disc">
                    <li>Play space music.</li>
                    <li>Create a scene of the Milky way with stars.</li>
                    <li>Display scene of the Milky way on the ceiling.</li>
                    <li>Cover the classroom windows with black or blue papers and cut out small holes on the papers to create stars. Switch off the lights to observe the stars glittering.</li>
                </ul>
            </li>
        </ul>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Children to recall the job duties of the people working at a space-port.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class8/c6.png') }}" class="h-[15vw]">
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Inform the children that they are going to role-play the various people working at a space-port. Children will discuss and choose their roles, e.g. astronaut, astronomer, aerospace engineer, technician and mission controller.</li>
        <li>Let children playing different roles go to their respective area. Introduce them to the props prepared.</li>
        <li>Let children explore how to use the props to role-play.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Provide the following scenario: The personnel are getting ready to fire the rocket to launch the spaceship into space.</li>
        <li>Children to decide on their roles, wear their identification tags and discuss how to role-play the scenarios. Listen carefully to the children's conversations during role-play. When necessary, encourage and help them extend their use of language and terminology to add depth to their role-play and to help them understand the functions of the jobs better. Encourage children to use language such as: "This is Captain expected weather conditions at landing ... over." (wait for reply). "I see an unknown object flying towards us.", "The moon is in front.", "Wow. The earth is beautiful!" ...</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Teacher guides the children to complete the corresponding activity in the Thematic Activity Book.</li>
    </ol>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Children to reflect and express feelings about the role played.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to use imagination to role-play.</li>
            <li>Able to use appropriate language in role-play.</li>
            <li>Able to cooperate with others in role-play.</li>
        </ul>
    </div>
</div>

{{-- panel 7 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: Our Space-port</h1>

    <div class="text-start flex flex-col h-full">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Children to imitate walking on the moon.</li>
            <li>Bring children to visit a planetarium or a natural history museum.</li>
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