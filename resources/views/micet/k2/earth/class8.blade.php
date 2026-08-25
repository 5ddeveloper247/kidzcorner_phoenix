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
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>
    <img src="{{ asset('assets/images/micet/n1/mybody/c8.1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw] ">
        <li>To understand how day and night occur as a result of the Earth's rotation.</li>
        <li>To understand the revolution of the Earth around the sun.</li>
        <li>To understand that it is the tilt of the Earth's axis that causes the four seasons.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <div>

        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Globe and lamp</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Have the children explain the differences between day and night. What do people do in the day and at night?</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Have children look at the pictures below and try to explain why there is day and night.</li>
    </ol>
    <div class="flex flex-col items-center">
        <img src="{{ asset('assets/images/micet/k2/earth/class8/c1.png') }}" class="h-[18vw]" />
        <div class="flex w-full justify-around text-white text-[2vw]">
            <h3>day</h3>
            <h3>night</h3>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Click on the video and have the children observe that it is day time when the sun rises.</li>
    </ol>
    <video class="h-[22vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class8/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Click on the video and have the children observe that it is day time when the sun rises.</li>
    </ol>
    <video class="h-[22vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class8/v2.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Ask the children whether it is the Sun or the Earth that moves when the sun rises and sets.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Inform the children that it is in fact the Earth that moves even though it looks as if the sun is rising and setting.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Click on the video. Ask the children to observe the rotation of the Earth in space. Inform the children that the Earth rotates constantly.</li>
    </ol>
    <video class="h-[19vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class8/v3.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Display the lamp and globe to represent the sun and Earth respectively. Rotate the Earth (eastward, anticlockwise). Ask the children: Which side of the Earth is day and which is night? Guide the children to understand that the parts of the Earth facing the sun are day time while the rest are night time.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Locate your current location on the globe with the children and mark it. Start with the marked location on the globe facing away from the lamp and ask the children, "Is it day or night?" Guide the children in responding "night time". Then rotate the globe slowly (eastward, anticlockwise) and guide the children in responding "morning", "noon", "evening" and "night".</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Mark the opposite side of the globe (e.g. America). Organise the children into two groups, one group will be in-charge of "our country", the other will be in- charge of "America". Rotate the globe slowly. Have the two groups state what part of the day it is at the two locations and what the people there may be doing.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Ask the children: What is today's date? What is tomorrow's date? Rotate the position of "our country" to morning time and ask the children to state today's date. Rotate the globe slowly from morning to noon, then evening and night. Ask the children what date it is (same date). Rotate the globe to the morning position again and ask the children what date it is. Guide the children to conclude that it takes the Earth one day to rotate one round.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Repeat the activity until the children have a better understanding of the concept of "one day".</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Guide the children to understand that the Earth not only rotates around its axis, it also revolves around the sun (click on the video).</li>
    </ol>
    <video class="h-[19vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class8/v4.mp4') }}" type="video/mp4">
    </video>
</div>


<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Guide the children to understand that it takes the Earth a year or approximately 365 days, to revolve a complete round around the sun (click on the video).</li>
    </ol>
    <video class="h-[19vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class8/v4.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Display the lamp and globe to represent the sun and Earth respectively. Rotate the Earth (eastward, anticlockwise), then revolve the rotating Earth around the sun (anticlockwise). Repeat the activity until the children have a better understanding of the concept of "one year".</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>Have the children look at the pictures and identify the seasons. Have them explain the differences and list the special things they do during each season.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class8/c2.png') }}" class="h-[20vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Ask the children: Why do we have four seasons? Guide the children to understand that we have four seasons because of the Earth's rotation around the sun and the tilt of the Earth's axis. When the northern hemisphere is tilted towards the sun, it gets more sunlight, resulting in summer. Similarly at the other side of the orbit, the southern hemisphere is now tilted away from the sun</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class8/c3.png') }}" class="h-[17vw]" />
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="18">
        <li>When the northern hemisphere is tilted away from the sun, it is further away from the sun and gets less sunlight, resulting in winter. At the same time, the southern hemisphere is now tilted towards the sun and gets more sunlight, resulting in summer.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class8/c3.png') }}" class="h-[17vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="19">
        <li>Display the lamp and globe to represent the sun and Earth respectively. Let the Earth rotate on its tilted axis and revolve around the sun. Repeat this activity until the children have a better understanding of the concept of the 4 seasons.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="20">
        <li>Ask the children whether all places on the Earth have four seasons. Guide the children to understand that only the middle portions of the Northern and Southern hemispheres have four seasons. The two ends of the Earth, North and South Poles, are very far from the Sun thus they experience winter throughout the year; while the central parts of the Earth are nearer to the Sun and they experience summer throughout the year.</li>
    </ol>
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="21">
        <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
    </ol>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 8: The Rotating Earth</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc text-white text-[1.3vw] w-[50vw]">
            <li>Invite a child to hold the lamp to represent the Sun.</li>
            <li>Invite another child to hold the globe as the Earth.</li>
            <li>Mark your current location on the globe. Have the child rotate the "Earth" slowly on its tilted axis and have the other children state the date and time of the marked location (such as 3 Feb, morning). Let the "Earth", with its tilted axis, revolve around the sun. Have the other children state the season of the marked location.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc text-white text-[1.3vw] w-[45vw]">
            <li>Able to explain that day and night occur as a result of the Earth's rotation.</li>
            <li>Able to explain that the four seasons occur because of the rotation of the Earth around the sun and the tilt in the Earth's axis.</li>
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
        const returnURL = "{{ url('/micet/k2/earth/index') }}";
        const doneURL = "{{ url('/micet/k2/earth/index') }}";

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

        // VIDEO FUNCTIONS

        function stopAllVideos() {
            document.querySelectorAll(".phonics-panel video").forEach(video => {
                video.pause();
                video.currentTime = 0;
            });
        }


        function playSlideAudio(slideIndex) {
            // Stop any currently playing audio
            stopCurrentAudio();

            stopAllVideos();

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