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
        font-size: 2.3vw;
    }

    .ptitle {
        color: #F7B94A;
        font-size: 1.7vw;
    }

    .panel-ul {
        color: white;
        font-size: 1.4vw;
        text-align: left
    }
</style>
@endpush

@section('content')

{{-- panel 1 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>
    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/n1/toys/class2/b2.png') }}" class="h-[10vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/class2/b3.png') }}" class="h-[10vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/class2/b4.png') }}" class="h-[10vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>To know that an object prints art work is a picture formed
            by printing objects with paint.</li>
        <li>To guess the object used in an object prints art work.</li>
        <li>To use imagination and creativity to create object prints.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <div class="text-start">
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-decimal panel-ul w-[45vw]">
            <li>Thematic Activity Book</li>
            <li>Drawing papers</li>
            <li>Sponges that absorb different colour paints (a few sets for
                children to share)</li>
            <li>A variety of objects that can make different prints (e.g .:
                bottle caps, toys like blocks, stones, cut vegetables and
                fruits like lotus root, capsicum, cabbage and starfruit) -
                objects with sizes that children can easily hold in their
                hand <br>
                [Note: For purpose of cleanliness, have children wear
                aprons and place old newspaper on the activity area.]</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <div class="text-start space-y-[1vw]">
        <h3 class="ptitle">Lesson Development</h3>

        <ul class="list-decimal panel-ul w-[45vw]">
            <li>Ask children: "Have you ever seen this kind of art work?" "Do you like it?"
                "How do you make this kind of art work?"</li>
        </ul>
    </div>
    <img src="{{ asset('assets/images/micet/n1/arts/class3/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Click on the video, have children look at the process of making this art
            work and talk about it.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n1/arts/class3/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Tell children that this art work was formed by printing objects with paint,
            that's why it is called object prints.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/arts/class3/c1.png') }}" class="w-[25vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Invite children to look at the following object prints.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Have children guess the object used in this object prints art work
            (capsicum, bottle cap, crumpled newspaper ball).</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c2.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Did you guess correctly? Do you like this object prints art work?</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c2.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Have children guess the object used in this object prints art work
            (capsicum, bottle cap, crumpled newspaper ball).</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c3.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Did you guess correctly? Do you like this object prints art work?</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c3.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Have children guess the object used in this object prints art work
            (capsicum, bottle cap, crumpled newspaper ball).</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c4.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Did you guess correctly? Do you like this object prints art work?</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c4.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Have children guess the object used in this object prints art work
            (capsicum, bottle cap, crumpled newspaper ball).</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c5.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Did you guess correctly? Do you like this object prints art work?</li>
    </ol>
    <div class="flex items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c2.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/arts/class3/c6.png') }}" class="h-[18vw]" />
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Have children say (explain) why these art works are called object prints.</li>
    </ol>
    <div class="flex flex-col items-center gap-[.5vw]">
        <div class="flex items-center gap-[.5vw]">
            <img src="{{ asset('assets/images/micet/n1/arts/class3/c1.png') }}" class="w-[16vw]" />
            <img src="{{ asset('assets/images/micet/n1/arts/class3/c2.png') }}" class="w-[16vw]" />
        </div>
        <div class="flex items-baseline gap-[.5vw]">
            <img src="{{ asset('assets/images/micet/n1/arts/class3/c3.png') }}" class="w-[16vw]" />
            <img src="{{ asset('assets/images/micet/n1/arts/class3/c4.png') }}" class="w-[16vw]" />
            <img src="{{ asset('assets/images/micet/n1/arts/class3/c5.png') }}" class="w-[16vw]" />
        </div>
    </div>
</div>



{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Tell children that today they are going to create their own object prints.</li>
        <li>Display sponges and objects (that have been prepared ahead), have
            children name and talk about each of them.</li>
    </ol>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>Teacher demonstrates: place the surface of an object on a coloured
            sponge, press to ensure that the surface is thoroughly coloured, then place
            it on a drawing paper.</li>
    </ol>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="17">
        <li>Give each child a drawing paper. Have children choose the objects and
            colours they like, then encourage them to use their imagination and
            creativity to create an interesting object prints art work.</li>
    </ol>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="18">
        <li>Have children use their imagination to make interesting prints with various
            objects in the Thematic Activity Book.</li>
    </ol>
</div>


{{-- panel 16 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Have children take turns to show and talk about their object
                prints. Have other children guess the objects used
                in each object prints art work.</li>
            <li>Ask children: Why are your art works called object prints?</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to guess the object used in an object prints art work.</li>
            <li>Able to say that an object prints art work is a picture
                formed by printing object with paint.</li>
            <li>Able to use imagination and creativity to create object prints.</li>
        </ul>
    </div>
</div>


{{-- panel 17 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 3: Object Prints</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Set up a "printing corner" where children are encouraged
                to create object prints when they are free.</li>
            <li>At home, have children collect objects that can make
                different prints and invite their parents to create an
                interesting object prints art work together with them. After
                that, have them bring the art work to class and share.</li>
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
        const returnURL = "{{ url('/micet/n1/arts/index') }}";
        const doneURL = "{{ url('/micet/n1/arts/index') }}";

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