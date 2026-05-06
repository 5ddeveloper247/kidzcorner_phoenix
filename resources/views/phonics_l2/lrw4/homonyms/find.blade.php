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

        .panel-title {
            color: #ffffff;
            font-size: 2vw;``
        }

        .panel-div {
            position: absolute;
            top: 4%;
        }

        .box {
            width: 10vw;
            height: 10vw;
            background: #D9D9D9;
            border: .3vw solid #70AF39;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rectangle {
            background: #F7B94A;
            width: 12vw;
            height: 3vw;
            color: #A15E0D;
            font-size: 2vw;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel"  >
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/panel-bear.png') }}" class="w-[50vw]" />
            <h2
                class="absolute top-[38%] left-[27%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[4vw] text-center">
                Finding <br>
                Homonyms!</h2>
        </div>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        >

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2 class="absolute top-[28%] right-[17%] -translate-y-1/2  text-[#A15E0D] text-[1.5vw] text-center">
                Try finding the <br>
                <span class="text-[#70af39]">homonyms</span> in <br>
                this activity.

            </h2>
        </div>
    </div>


    <div class="phonics-panel flex justify-center items-center"
        >
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2 class="absolute top-[28%] right-[14%] -translate-y-1/2  text-[#A15E0D] text-[1.5vw] text-center">
                <span class="text-[#70af39]">Homonyms</span> are words <br>
                that sound the same <br>
                but have different <br>
                meanings and different <br>
                spellings.
            </h2>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>

        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/blue.png') }}" class="w-[5vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-center w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw4/blow.png') }}" class="h-[10vw]" />
                <div class="rectangle">blow</div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw4/black.png') }}" class="h-[10vw]" />
                <div class="rectangle">black</div>
            </div>
        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>

        <div class="flex justify-around items-center w-full">

            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/blue.png') }}" class="w-[5vw]" />
                <h2>blue</h2>
            </div>
            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/blow.png') }}" class="h-[8vw]" />
                <h2>blow</h2>

            </div>
        </div>
    </div>

    {{-- ======================================= --}}
    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>

        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/son.png') }}" class="h-[8vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-end w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw4/swan.png') }}" class="w-[10vw]" />
                <div class="rectangle">swan</div>
            </div>

            <div class="flex flex-col items-center ">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/sun.png') }}" class="w-[10vw]" />
                <div class="rectangle">sun</div>
            </div>
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>

        <div class="flex justify-around items-center w-full">

            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/son.png') }}" class="h-[8vw]" />
                <h2>son</h2>
            </div>
            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/sun.png') }}" class="w-[10vw]" />
                <h2>sun</h2>

            </div>
        </div>
    </div>

    {{-- ======================================= --}}
    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>

        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/rows.png') }}" class="h-[8vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-end w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw4/rose.png') }}" class="h-[10vw]" />
                <div class="rectangle">rose</div>
            </div>

            <div class="flex flex-col items-center ">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/grow.png') }}" class="w-[10vw]" />
                <div class="rectangle">grows</div>
            </div>
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>
        <div class="flex justify-around items-center w-full">

            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/rows.png') }}" class="h-[8vw]" />
                <h2>rows</h2>
            </div>
            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/rose.png') }}" class="h-[8vw]" />
                <h2>rose</h2>

            </div>
        </div>
    </div>

    {{-- ======================================= --}}
    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>


        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/tow.png') }}" class="w-[10vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-end w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw4/thumb.png') }}" class="w-[10vw]" />
                <div class="rectangle">thumb</div>
            </div>

            <div class="flex flex-col items-center ">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/toe.png') }}" class="w-[10vw]" />
                <div class="rectangle">toe</div>
            </div>
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the matching pair of homonyms.</h2>

        <div class="flex justify-around items-center w-full">

            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/tow.png') }}" class="w-[10vw]" />
                <h2>tow</h2>
            </div>
            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw4/toe.png') }}" class="w-[8vw]" />
                <h2>toe</h2>

            </div>
        </div>
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

            const returnURL = "{{ url('/phonics_l2/lrw4/homonyms') }}";
            const doneURL = "{{ url('/phonics_l2/lrw4/homonyms') }}";

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
