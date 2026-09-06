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
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>
    <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        </div>

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Identify three basic shapes: triangle, square and circle</li>
        <li>Learn to draw stars using different basic shapes</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Triangle, Square and Circle shapes( some for each child)</li>
            <li>Drawing papers and crayons</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Guide children to recall the story "Mary had a little lamb". Say the riddle in
                the story once more and ask the children to give an answer to the riddle.</li>
            <li>Ask children: How do stars look like? Have you seen stars? Encourage them
                to describe stars. Do you know how to draw a star? Invite volunteers to
                demonstrate. Let children know that they are going to learn to draw stars.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Ask children: What shape is this?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c1.png') }}" class="w-[20vw] mt-[2vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Guide children to understand that a triangle has three sides and three corners.
            That's why it is called a triangle (tri means three).</li>
        <li>Display a triangle shape. Let the children touch its sides and corners. Get
            them to count its sides and corners together.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c1.png') }}" class="w-[20vw]" />
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Demonstrate how to draw a triangle. Let children learn to draw triangles on
            paper.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n2/rhymes/class5/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Demonstrate how to put two triangle shapes together to form a star (place
            one inverted triangle over the other triangle). Invite children try it out.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c4.png') }}" class="w-[20vw]" />
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Demonstrate how to draw a star using two triangles. Invite children to practise
            drawing a star.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n2/rhymes/class5/v2.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Ask children: What shape is this? How many sides and corners does it have?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c3.png') }}" class="w-[20vw]" />
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Guide children to understand that a square has four equal sides and four
            corners.</li>
        <li>Display a square shape. Let the children touch its sides and corners and count
            them together. Use a thread to measure each side and show the children that
            a square has four equal sides.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c3.png') }}" class="w-[20vw]" />
</div>


{{-- panel 11 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Demonstrate how to draw a square. Invite children learn to practise drawing
            squares on paper.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n2/rhymes/class5/v3.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Encourage children to think about how to use two squares to form a star.
            Invite volunteers to demonstrate to the class.</li>
    </ol>
</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Demonstrate how to put two square shapes together to form a star ( place two
            squares on top of each other, with one square placed at an angle). Let
            children try it out.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c3.png') }}" class="w-[17vw]" />
</div>


{{-- panel 14 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Demonstrate how to draw a star using two squares. Let children try it out.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n2/rhymes/class5/v4.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 15 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>Ask children: What shape is this? How many sides and corners does it have?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c4.png') }}" class="w-[20vw]" />
</div>


{{-- panel 16 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Guide children to understand that a circle has no sides and corners. Ask them
            what does a circle look like? (sun, earth, full moon etc.)</li>
        <li>Display a circle shape. Let children touch it.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n2/rhymes/class5/c4.png') }}" class="w-[20vw]" />
</div>


{{-- panel 17 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="19">
        <li>Demonstrate how to draw a star using two squares. Let children try it out.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n2/rhymes/class5/v5.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 18 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="20">
        <li>Distribute drawing papers. Let children use their imagination to draw a
            beautiful night sky. Remind them to draw the moon using a circle and stars
            using different combinations of basic shapes.</li>
    </ol>
</div>


{{-- panel 18 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="21">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 23 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let the children take turns to display their drawing and talk
                about the shapes used to draw a moon and the different
                stars.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to draw a triangle, square and circle.</li>
            <li>Able to draw stars using different basic shapes.</li>
        </ul>
    </div>
</div>


{{-- panel 23 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 5: Star Shapes</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite children to decorate a classroom wall with paper
                stars to show a beautiful night sky.</li>
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
        const returnURL = "{{ url('/micet/n2/rhymes/index') }}";
        const doneURL = "{{ url('/micet/n2/rhymes/index') }}";

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

            stopAllVideos();

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