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
            color: #F7B94A;
            font-size: 2vw;
        }

        .panel-div {
            position: absolute;
            top: 4%;
        }

        .rectangle {
            background: #70AF39;
            width: 100%;
            height: 6vw;
            border: .2vw solid #f7b94a;
            color: white;
            font-size: 1.5vw;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.m4a') }}">
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/panel-bear.png') }}" class="w-[50vw]" />
            <h2
                class="absolute top-[38%] left-[27%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[4vw] text-center">
                Fun with <br>
                Nouns!</h2>
        </div>
    </div>


    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sh_ch/sh1.m4a') }}">

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[28%] right-[1%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                Now let’s practice <br> using these nouns.</h2>
        </div>
    </div>

    {{-- ============================ --}}
    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2>crow</h2>
            <h2>crab</h2>
            <h2>stamp</h2>
            <h2>lamp</h2>
            <h2>camp</h2>
            <h2>crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}" class="h-[3vw] absolute top-0 left-[36%]" />
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun1.png') }}" class="w-[15vw]" />
        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2>crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2>stamp</h2>
            <h2>lamp</h2>
            <h2>camp</h2>
            <h2>crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun1.png') }}" class="w-[15vw]" />
        </div>
    </div>



    {{-- =================================== --}}
    {{-- Panel  --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2>crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2>stamp</h2>
            <h2>lamp</h2>
            <h2>camp</h2>
            <h2>crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
                <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                    class="h-[3vw] absolute top-[15%] left-[8%]" />
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun2.png') }}" class="w-[15vw]" />
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2 class="opacity-0">crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2>stamp</h2>
            <h2>lamp</h2>
            <h2>camp</h2>
            <h2>crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-[20%] left-[10%]"> crow</h2>
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun2.png') }}" class="w-[15vw]" />
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2 class="opacity-0">crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2>stamp</h2>
            <h2 class="opacity-0">lamp</h2>
            <h2>camp</h2>
            <h2>crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-[20%] left-[10%]"> crow</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[20%] right-[12%]">lamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun2.png') }}" class="w-[15vw]" />
        </div>
    </div>


    {{-- =================================== --}}
    {{-- Panel  --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2 class="opacity-0">crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2>stamp</h2>
            <h2 class="opacity-0">lamp</h2>
            <h2>camp</h2>
            <h2>crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-[20%] left-[10%]"> crow</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[20%] right-[12%]">lamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
                <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                    class="h-[3vw] absolute top-[40%] left-[20%]" />
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun3.png') }}" class="h-[15vw]" />
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2 class="opacity-0">crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2>stamp</h2>
            <h2 class="opacity-0">lamp</h2>
            <h2>camp</h2>
            <h2 class="opacity-0">crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-[20%] left-[10%]"> crow</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[20%] right-[12%]">lamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[40%] left-[20%]">crane</h2>
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun3.png') }}" class="h-[15vw]" />
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2 class="opacity-0">crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2 class="opacity-0">stamp</h2>
            <h2 class="opacity-0">lamp</h2>
            <h2>camp</h2>
            <h2 class="opacity-0">crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-[20%] left-[10%]"> crow</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[20%] right-[12%]">lamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[40%] right-[12%]">stamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[40%] left-[20%]">crane</h2>
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun3.png') }}" class="h-[15vw]" />
        </div>
    </div>



    {{-- =================================== --}}
    {{-- Panel  --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2 class="opacity-0">crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2 class="opacity-0">stamp</h2>
            <h2 class="opacity-0">lamp</h2>
            <h2>camp</h2>
            <h2 class="opacity-0">crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-[20%] left-[10%]"> crow</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[20%] right-[12%]">lamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[40%] right-[12%]">stamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[40%] left-[20%]">crane</h2>
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
                <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                    class="h-[3vw] absolute top-[60%] right-[20%]" />
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun4.png') }}" class="w-[15vw]" />
        </div>
    </div>



    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] h-full items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.m4a') }}">
        <h2 class="panel-title">Find the correct nouns to complete the sentence.</h2>

        <div class="rectangle">
            <h2 class="opacity-0">crow</h2>
            <h2 class="opacity-0">crab</h2>
            <h2 class="opacity-0">stamp</h2>
            <h2 class="opacity-0">lamp</h2>
            <h2 class="opacity-0">camp</h2>
            <h2 class="opacity-0">crane</h2>
        </div>

        <div class="flex items-center justify-between w-full">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/lrw1/fun-q.png') }}" class="w-[25vw]" />
                <h2 class="text-white text-[1.5vw] absolute top-[20%] left-[10%]"> crow</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[20%] right-[12%]">lamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[40%] right-[12%]">stamp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[40%] left-[20%]">crane</h2>
                <h2 class="text-white text-[1.5vw] absolute top-[64%] right-[12%]">camp</h2>
                <h2 class="text-white text-[1.5vw] absolute top-0 left-[36%]"> crab</h2>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/lrw1/fun4.png') }}" class="w-[20vw]" />
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

            const returnURL = "{{ url('/phonics_l2/lrw1/words') }}";
            const doneURL = "{{ url('/phonics_l2/lrw1/words') }}";

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
