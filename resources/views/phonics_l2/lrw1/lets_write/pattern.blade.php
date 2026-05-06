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
            font-size: 1.5vw;
        }

        .panel-div {
            position: absolute;
            top: 4%;
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
                Pattern <br> Story!</h2>
        </div>
        <p class="p-note">Tips: Providing children with writing patterns can help stimulate ideas for writing, introduce
            different <br>
            structures for writing and build confidence for reluctant writers.</p>
    </div>



    <div class="phonics-panel flex justify-center items-center"
        >

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[28%] right-[1%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                Now let’s have fun <br>
                creating stories!</h2>
        </div>
    </div>


    {{-- ============================ --}}
    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] items-center"
         >
        <h2 class="panel-title">Look at these pictures. <br>
            Complete each sentence in your own words to create a story.</h2>
        <div class="flex justify-center items-end gap-[4vw]">

            <div>
                <img src="{{ asset('assets/images/phonics_l2/trev/st2.png') }}" class="h-[20vw]" />
                <div class="flex items-end h-fit w-fit text-[#f7b94a] text-[2vw]">
                    <span>The prince likes</span>
                    <div class="w-[9vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>.
                </div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/trev/st3.png') }}" class="w-[20vw]" />
                <div class="flex items-end h-fit w-fit text-[#f7b94a] text-[2vw]">
                    <span>The prince likes</span>
                    <div class="w-[9vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>.
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] items-center"
         >
        <h2 class="panel-title">Look at these pictures. <br>
            Complete each sentence in your own words to create a story.</h2>
        <div class="flex justify-center items-end gap-[4vw]">

            <div>
                <img src="{{ asset('assets/images/phonics_l2/trev/st4.png') }}" class="h-[20vw]" />
                <div class="flex items-end h-fit w-fit text-[#f7b94a] text-[2vw]">
                    <span>The prince likes</span>
                    <div class="w-[9vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>.
                </div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/trev/st5.png') }}" class="h-[20vw]" />
                <div class="flex items-end h-fit w-fit text-[#f7b94a] text-[2vw]">
                    <span>The prince likes</span>
                    <div class="w-[9vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>.
                </div>
            </div>
        </div>
    </div>


    {{-- Panel  --}}
    <div class="phonics-panel flex flex-col justify-between gap-[2vw] items-center"
         >
        <h2 class="panel-title">Look at these pictures. <br>
            Complete each sentence in your own words to create a story.</h2>
        <div class="flex justify-center items-end gap-[4vw]">

            <div>
                <img src="{{ asset('assets/images/phonics_l2/trev/st6.png') }}" class="h-[20vw]" />
                <div class="flex items-end h-fit w-fit text-[#f7b94a] text-[2vw]">
                    <span>The prince likes</span>
                    <div class="w-[9vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>.
                </div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/trev/st7.png') }}" class="h-[20vw]" />
                <div class="flex items-end h-fit w-fit text-[#f7b94a] text-[2vw]">
                    <span>The prince likes</span>
                    <div class="w-[9vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>.
                </div>
            </div>
        </div>
    </div>




    {{-- Panel  --}}
    <div class="phonics-panel"
         >
        <img src="{{ asset('assets/images/phonics_l2/lrw1/p1.png') }}" class="w-[50vw]" />
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

            const returnURL = "{{ url('/phonics_l2/lrw1/lets_write') }}";
            const doneURL = "{{ url('/phonics_l2/lrw1/lets_write') }}";

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
