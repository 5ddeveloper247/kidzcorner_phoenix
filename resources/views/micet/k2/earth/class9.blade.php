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
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/b1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>To be aware that there are eight planets in the Solar System.</li>
        <li>To be aware that the Earth is one of the planets in the Solar System.</li>
        <li>To be aware that the Earth is the only planet in our Solar System that is known to have life.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ol class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>

{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Ask the children: What can they see in the sky on a fine night? Most children would answer the moon and stars. Guide the children to understand that other than the moon and stars, there are also planets.</li>
            <li>Ask the children: How many planets are there around the Sun? What are their names? </li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Display the solar system. Ask the children to count the number of planets. Guide them in discovering that the Earth is also one of the planets. Have the children observe carefully the position of the Earth among the planets in the solar system and compare the shapes and sizes of these planets.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Have the children explain how the Earth revolves around the sun. Encourage them to explain how the other planets move. Inform them that the other planets also revolve around the sun. And because they all revolve around the sun, they are called planets and are siblings of the Earth.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Have the children explain how the Earth revolves around the sun. Encourage them to explain how the other planets move. Inform them that the other planets also revolve around the sun. And because they all revolve around the sun, they are called planets and are siblings of the Earth. (Click on the video.)</li>
    </ol>
    <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class9/v1.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Ask the children to locate the following planets on the picture: <ul>
                <li>The innermost planet to the Sun. <br>
                    Teacher names the planet according to the children's answers.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Ask the children to locate the following planets on the picture: <ul>
                <li>
                    The second nearest planet to the Sun. <br>
                    Teacher names the planet according to the children's answers.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Ask the children to locate the following planets on the picture: <ul>
                <li>The smallest planet, <br>
                    Teacher names the planet according to the children's answers.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Ask the children to locate the following planets on the picture: <ul>
                <li>The largest planet, <br>
                    Teacher names the planet according to the children's answers.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Ask the children to locate the following planets on the picture: <ul>
                <li>The planet with the biggest rings, <br>
                    Teacher names the planet according to the children's answers.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Ask the children to locate the following planets on the picture: <ul>
                <li>The furthest planet from the sun, <br>
                    Teacher names the planet according to the children's answers.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class9/c1.png') }}" class="h-[18vw]" />
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Explain to the children that these planets are very far from Earth. At this point in time, we only know that there is life on Earth and we are not sure if there is life on the other planets. Thus, we need to protect our Earth, our only home.</li>
    </ol>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>

    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c2.png') }}" class="w-[20vw]" />
        <h3 class="text-white text-start text-[2vw]">
            "Mercury"<br>
            I am Mercury, I am the first,<br>
            Hot in the day and cold at night,<br>
            I am mostly made of iron,<br>
            I am the silver planet.</h3>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>
    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c3.png') }}" class="w-[20vw]" />
        <div>
            <h3 class="text-white text-start text-[2vw]">
                "Venus"<br>
                I am Venus, I am the second,<br>
                The brightest among all,<br>
                Rotating is surprisingly fun,<br>
                I am the yellow planet.</h3>
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>
    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c4.png') }}" class="w-[20vw]" />
        <h3 class="text-white text-start text-[2vw]">
            "Earth" <br>
            I am Earth, I am the third,<br>
            The most beautiful among all,<br>
            With the moon at my side,<br>
            I am the blue planet.</h3>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>
    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c5.png') }}" class="w-[20vw]" />
        <h3 class="text-white text-start text-[2vw]">
            "Mars"<br>
            I am Mars, I am the fourth,<br>
            With four seasons like Earth,<br>
            Two of us so near,<br>
            I am the red planet.</h3>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>
    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c6.png') }}" class="w-[20vw]" />
        <h3 class="text-white text-start text-[2vw]">
            "Jupiter"<br>
            I am Jupiter, I am the fifth,<br>
            The largest among all,<br>
            Covered in coloured ribbons,<br>
            I am the giant planet.</h3>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>
    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c7.png') }}" class="w-[23vw]" />
        <h3 class="text-white text-start text-[2vw]">
            "Saturn"<br>
            I am Saturn, I am the sixth,<br>
            The lightest among all,<br>
            Rings of light surround me,<br>
            I am the ring planet.</h3>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>
    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c8.png') }}" class="w-[18vw]" />
        <h3 class="text-white text-start text-[2vw]">
            "Uranus"<br>
            I am Uranus, I am the seventh,<br>
            The third largest among all,<br>
            Covered with white clouds,<br>
            I am the pale blue planet.</h3>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Teach the children the rhymes of the eight planets.</li>
    </ol>
    <div class="flex justify-center items-center gap-[2vw]">
        <img src="{{ asset('assets/images/micet/k2/earth/class9/c9.png') }}" class="w-[20vw]" />
        <h3 class="text-white text-start text-[2vw]">
            "Neptune"<br>
            I am Neptune, I am the eighth,<br>
            Covered with ice,<br>
            Wind blowing all year round,<br>
            I am the dark blue planet.</h3>
    </div>
</div>

{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: The Earth’s Siblings</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite nine children to act as the eight planets and the Sun. Encourage them to recite the song and imitate the movements of the planets revolving around the Sun.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to understand the structure of the Solar System.</li>
            <li>Able to name some planets and their positions.</li>
            <li>Able to understand that the Earth is the only planet that is known to have life.</li>
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