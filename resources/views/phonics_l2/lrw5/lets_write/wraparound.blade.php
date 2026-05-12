@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1vw;
            color: white !important;
        }

        .c-btn {
            color: #F7B94A !important;
        }

        .title-top {
            font-size: 2vw !important;
            color: #F7B94A;
        }

        .panel-div {
            position: absolute;
            top: 4%;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel">
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/panel-bear.png') }}" class="w-[50vw]" />
            <h2
                class="absolute top-[38%] left-[27%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[4vw] text-center">
                Wrap Around <br>
                Endings</h2>
        </div>
        <p class="p-note">Note: A common but effective way to end a piece of writing is to revisit the beginning. Show
            children how they can pull a <br>
            few key words from the lead sentence to create a concluding sentence that "wraps around" their piece of writing.
        </p>
    </div>



    <div class="phonics-panel flex justify-center items-center">

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-ee.png') }}"class="w-[50vw] " />
            <h2 class="absolute top-[40%]  right-[10%] -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                Can you remember the story <br>
                “”Ray The Mule””?</h2>
        </div>
    </div>

    {{-- ================ --}}
    {{-- Panel 2 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st1.m4a') }}">
        <h2 class="title-top stroke">Ray the Mule</h2>
        <img src="{{ asset('assets/images/phonics_l2/ayue/story1.png') }}" class="h-[25vw]" />
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st2.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/ayue/story2.png') }}" class="h-[25vw]" />
        <h2 class="title-top">Ray the mule likes to play with clay.</h2>
    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st3.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="h-[25vw]" />
        <h2 class="title-top">“”What can I say... playing with clay always makes my day!”” Says Ray.</h2>
    </div>

    {{-- Panel  --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st3.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="h-[25vw]" />
        <h2 class="title-top">One day, while walking with his lump of clay.</h2>
    </div>

    {{-- Panel 5 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st4.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="h-[25vw]" />
        <h2 class="title-top">Ray spots a huge tray of hay right in front of the walkway.</h2>
    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st5.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="h-[25vw]" />
        <h2 class="title-top">Along comes the Duke and says that Ray has to pay.</h2>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st6.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/ayue/story7.png') }}" class="h-[25vw]" />
        <h2 class="title-top">Ray takes out his clay and molds it into a cube and a tube.</h2>
    </div>

    {{-- Panel 8 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/lrw4_audio/st6.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/ayue/story8.png') }}" class="h-[25vw]" />
        <h2 class="title-top">He gives them to the Duke who finds them rather cute. <br>
            And so Ray does not need to pay for his hay.</h2>
    </div>
   

    {{-- =================== --}}

    <div class="phonics-panel flex justify-center items-center">

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-ee.png') }}"class="w-[50vw] " />
            <h2 class="absolute top-[40%] right-[15%] -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                Now let’s try writing your <br>
                own version of the story.</h2>
        </div>
    </div>

    <div class="phonics-panel flex flex-col justify-center items-center">
        <img src="{{ asset('assets/images/phonics_l2/lrw4/storyq1.png') }}"class="w-[50vw] " />
    </div>

    <div class="phonics-panel flex justify-center items-center">

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-ee.png') }}"class="w-[50vw] " />
            <h2 class="absolute top-[40%] right-[15%] -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                Good job! You have just <br>
                composed the main parts <br>
                of the story!</h2>
        </div>
    </div>


    <div class="phonics-panel flex flex-col justify-center items-center">
        <img src="{{ asset('assets/images/phonics_l2/lrw4/storyq2.png') }}"class="w-[50vw] " />
    </div>

    <div class="phonics-panel flex justify-center items-center">

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-ee.png') }}"class="w-[50vw] " />
            <h2 class="absolute top-[40%] right-[15%] -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                Excellent! You have just <br>
                created your own story!</h2>
        </div>
    </div>


    {{-- Well Done Panel --}}
    <div class="phonics-panel h-full justify-between"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/welldone.mp3') }}">
        <h2 class="title-top">Well Done!</h2>
        <img src="{{ asset('assets/images/phonicsl1/global/gifs/welldone.gif') }}" class="h-[25vw]" />
    </div>

    {{-- =========================================================== --}}
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/lrw4/lets_write') }}";
            const doneURL = "{{ url('/phonics_l2/lrw4/lets_write') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

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
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) {
                    return true;
                }
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

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide = slides[slideIndex];

                let audioSrc = slide.getAttribute('data-slide-audio');

                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();

                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                playSlideAudio(slideIndex);

                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.remove("hidden"));
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.add("hidden"));
                }
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    const audioSrc = btn.getAttribute('data-slide-audio');
                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });

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
                window.location.href = doneURL;
            }

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

            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", handleDone);
            });

            showSlide(currentSlide);
        });
    </script>
@endpush
