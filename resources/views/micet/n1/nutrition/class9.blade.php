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
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>
    <img src="{{ asset('assets/images/micet/n1/nutrition/class9/c1.png') }}" class="h-[6vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Know that eating too many sweets will cause weight gain
            and tooth decay</li>
        <li>Know that brushing teeth can prevent tooth decay</li>
        <li>Learn the correct way of brushing teeth</li>
    </ul>
</div>


{{-- panel 1 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <h3 class="ptitle">Preprations</h3>

    <ul class="list-disc panel-ul">
        <li>Thematic Activity Book</li>
        <li>A big model teeth</li>
        <li>Toothpaste</li>
        <li>1 toothbrush and cup per child</li>
    </ul>
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Ask children: "What are these?" "Do you like to eat them?" "What do they
                taste like?"
            </li>
        </ol>
        <div class="flex gap-5 ">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class9/c4.png') }}" class="h-[17vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class9/c5.png') }}" class="h-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>Tell children that there are a variety of sweets, some are hard and some
                are soft, and some are very colourful too.
            </li>
            <li>Ask children: "What sweets have you eaten before?" "Which kind is your
                favourite?" "Should we eat more sweets?"</li>
        </ol>
    </div>
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>Tell children that eating too many sweets will cause weight gain and tooth
                decay. After eating sweets, the waste products on a tooth can harm the
                tooth by creating holes in it, which spoils the tooth and causes tooth
                decay.
            </li>
            <li>Have children think and say what happens when they have tooth decay
                (toothache, unable to eat well, need to see a dentist).</li>
        </ol>
    </div>
</div>



{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="6">
            <li>Ask children: "Have you ever had a toothache?" "Do you like it?" "Have
                you ever been to a dentist?" "Do you like to visit a dentist?"</li>
            <li>Tell children that if they don't like to have a toothache or visit a dentist, they
                should take good care of their teeth to prevent tooth decay.</li>
            <li> Ask children: "What should we do to protect our teeth?"
            </li>
        </ol>
    </div>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>Ask children: "What are these?" "Have you ever used them?" "What are
                their uses?"
            </li>
            <li>Tell children that a toothbrush and toothpaste are used to clean and
                protect our teeth.</li>
        </ol>
        <div class="flex gap-5 ">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class9/c2.png') }}" class="h-[17vw] w-[25vw]" />
            <img src="{{ asset('assets/images/micet/n1/nutrition/class9/c3.png') }}" class="h-[17vw] w-[25vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Tell children that today they are going to learn the correct way of brushing
            teeth.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Use the model teeth and the following animation to demonstrate the
            correct way of brushing teeth:
            <ul>
                <li>i. Put some toothpaste on the toothbrush. Then put the toothbrush on the
                    outer teeth surface. Gently move the brush from the gums to the
                    edges of the teeth. Remember don't brush too hard or it'll hurt the gums.</li>
            </ul>
        </li>
    </ol>
    <video class="h-[15vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n1/nutrition/class9/v1.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Use the model teeth and the following animation to demonstrate the
            correct way of brushing teeth:
            <ul>
                <li>ii. Now, do the same to the inner teeth surface.</li>
            </ul>
        </li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n1/nutrition/class9/v2.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Use the model teeth and the following animation to demonstrate the
            correct way of brushing teeth:
            <ul>
                <li> iii. Lastly, gently brush the chewing surfaces of the teeth with horizontal moves.</li>
            </ul>
        </li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n1/nutrition/class9/v3.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Tell children that after brushing their teeth, use water in the cup to rinse their
            mouth.</li>
        <li>Have children hold their toothbrush and cup, stand in a row to learn the
            correct way of brushing teeth. Teacher will assist them one by one, when
            needed.</li>
    </ol>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Ask children: "When do we brush our teeth?" "How many times should we
            brush our teeth in a day?"</li>
        <li>Tell children that we should brush our teeth at least twice a day, once in the
            morning after waking up and once at night before sleeping. If can, we
            should brush our teeth after every meal. If can't, we should at least rinse our
            mouth after every meal.</li>
    </ol>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Have children talk about the disadvantages of eating too many sweets and
                not brushing teeth.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to know that eating too many sweets will cause weight gain and
                tooth decay.</li>
            <li>Able to know that brushing teeth can prevent tooth decay.
                Able to brush teeth the correct way.</li>
        </ul>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 9: Protect Your Teeth</h1>

    <div class="text-start flex flex-col h-full">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Have children demonstrate the correct way of brushing teeth
                to parents at home.</li>
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
        const returnURL = "{{ url('/micet/n1/nutrition/index') }}";
        const doneURL = "{{ url('/micet/n1/nutrition/index') }}";

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