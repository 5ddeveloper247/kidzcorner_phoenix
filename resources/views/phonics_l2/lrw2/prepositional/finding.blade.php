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
                Prepositions!</h2>
        </div>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        >

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[28%] right-[15%] -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                Try finding all the <br> <span class="text-[#70af39]">prepositions</span> in this <br>
                activity.</h2>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the verbs!</h2>

        <div class="grid grid-cols-3 w-full gap-x-[4vw] place-items-end">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/under.png') }}" class="h-[10vw]" />
                <div class="rectangle">under</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/behind.png') }}" class="w-[10vw]" />
                <div class="rectangle">behind</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/tooth.png') }}" class="h-[10vw]" />
                <div class="rectangle">tooth</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/in.png') }}" class="h-[10vw]" />
                <div class="rectangle">in</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/shirt.png') }}" class="w-[10vw]" />
                <div class="rectangle">shirt</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/on.png') }}" class="w-[10vw]" />
                <div class="rectangle">on</div>
            </div>
        </div>

    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex justify-center items-center"
        >


        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[35%] right-[1%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                You’re right! <br>
                The word ‘under’ <br>
                is a <span class="text-[#70af39]">verb</span>.</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw2/under.png') }}"
    h        class="h-[12vw] absolute bottom-0 right-[10%]" />
        </div>
    </div>

    <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the verbs!</h2>

        <div class="grid grid-cols-3 w-full gap-x-[4vw] place-items-end relative">

            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="w-[3 h-[3vw] absolute top-[35%]"
                style="left: -6%" />
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/under.png') }}" class="h-[10vw]" />
                <div class="rectangle">under</div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/behind.png') }}" class="w-[10vw]" />
                <div class="rectangle">behind</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/tooth.png') }}" class="h-[10vw]" />
                <div class="rectangle">tooth</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/in.png') }}" class="h-[10vw]" />
                <div class="rectangle">in</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/shirt.png') }}" class="w-[10vw]" />
                <div class="rectangle">shirt</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/on.png') }}" class="w-[10vw]" />
                <div class="rectangle">on</div>
            </div>
        </div>

    </div>

    {{-- Panel  --}}
    <div class="phonics-panel flex justify-center items-center"
        >


        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[35%] right-[1%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                You’re right! <br>
                The word ‘under’ <br>
                is a <span class="text-[#70af39]">verb</span>.</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw2/behind.png') }}"
    w        class="h-[15vw] absolute bottom-0 right-[10%]" />
        </div>
    </div>

    <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the verbs!</h2>

        <div class="grid grid-cols-3 w-full gap-x-[4vw] place-items-end relative">
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="w-[3 h-[3vw] absolute top-[35%]"
                style="left: -6%" />
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                class="w-[3 h-[3vw] absolute top-[35%] left-[33%]" />
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/under.png') }}" class="h-[10vw]" />
                <div class="rectangle">under</div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/behind.png') }}" class="w-[10vw]" />
                <div class="rectangle">behind</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/tooth.png') }}" class="h-[10vw]" />
                <div class="rectangle">tooth</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/in.png') }}" class="h-[10vw]" />
                <div class="rectangle">in</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/shirt.png') }}" class="w-[10vw]" />
                <div class="rectangle">shirt</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/on.png') }}" class="w-[10vw]" />
                <div class="rectangle">on</div>
            </div>
        </div>

    </div>

    {{-- Panel  --}}
    <div class="phonics-panel flex justify-center items-center"
        >


        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[35%] right-[1%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                You’re right! <br>
                The word ‘under’ <br>
                is a <span class="text-[#70af39]">verb</span>.</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw2/in.png') }}"
                class="h-[15vw] absolute bottom-0 right-[10%]" />
        </div>
    </div>

    <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the verbs!</h2>

        <div class="grid grid-cols-3 w-full gap-x-[4vw] place-items-end relative">
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="w-[3 h-[3vw] absolute top-[25%]"
                style="left: -6%" />
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                class="w-[3 h-[3vw] absolute top-[25%] left-[33%]" />
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                class="w-[3 h-[3vw] absolute bottom-0" style="left: -6%" />
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/under.png') }}" class="h-[10vw]" />
                <div class="rectangle">under</div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/behind.png') }}" class="w-[10vw]" />
                <div class="rectangle">behind</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/tooth.png') }}" class="h-[10vw]" />
                <div class="rectangle">tooth</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/in.png') }}" class="h-[10vw]" />
                <div class="rectangle">in</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/shirt.png') }}" class="w-[10vw]" />
                <div class="rectangle">shirt</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/on.png') }}" class="w-[10vw]" />
                <div class="rectangle">on</div>
            </div>
        </div>

    </div>

    {{-- Panel  --}}
    <div class="phonics-panel flex justify-center items-center"
        >


        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[35%] right-[1%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                You’re right! <br>
                The word ‘under’ <br>
                is a <span class="text-[#70af39]">verb</span>.</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw2/on.png') }}"
                class="h-[15vw] absolute bottom-0 right-[10%]" />
        </div>
    </div>

    <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
         >
        <h2 class="panel-title">Find the verbs!</h2>

        <div class="grid grid-cols-3 w-full gap-x-[4vw] place-items-end relative">
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="w-[3 h-[3vw] absolute top-[39%]"
                style="left: -6%" />
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                class="w-[3 h-[3vw] absolute top-[38%] left-[31%]" />
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                class="w-[3 h-[3vw] absolute bottom-0" style="left:-6%" />
            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                class="w-[3 h-[3vw] absolute bottom-0 left-[67%]" />
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/under.png') }}" class="h-[10vw]" />
                <div class="rectangle">under</div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/behind.png') }}" class="w-[10vw]" />
                <div class="rectangle">behind</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/tooth.png') }}" class="h-[10vw]" />
                <div class="rectangle">tooth</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/in.png') }}" class="h-[10vw]" />
                <div class="rectangle">in</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/shirt.png') }}" class="w-[10vw]" />
                <div class="rectangle">shirt</div>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw2/on.png') }}" class="w-[10vw]" />
                <div class="rectangle">on</div>
            </div>
        </div>

    </div>


    <div class="phonics-panel flex justify-between items-end w-[53vw]">

        {{-- Bear + speech bubble on the right --}}
        <div class="w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear2.png') }}" class="h-[30vw]" />
            <h2 class="absolute top-[30%] left-[32%] -translate-1/2 text-[1.5vw] text-[#A15E0D]">
                You’ve got it! <br>
                The words ‘under’, <br> ’behind’, ‘shirt’ an <br> ‘on’ are nouns.
            </h2>
        </div>

        {{-- Card grid on the left --}}
        <div>
            <div class="grid grid-cols-2 place-items-end gap-x-[2vw] w-full">
                <div class="w-fit flex flex-col items-center h-fit">
                    <img class="w-[10vw]" src="{{ asset('assets/images/phonics_l2/lrw2/under.png') }}" />
    h               <div class="rectangle">under</div>
                </div>
                <div class="w-fit flex flex-col items-center h-fit">
                    <img class="w-[10vw]" src="{{ asset('assets/images/phonics_l2/lrw2/behind.png') }}" />
                    <div class="rectangle">behind</div>
                </div>
                <div class="w-fit flex flex-col items-center h-fit">
                    <img class="w-[10vw]" src="{{ asset('assets/images/phonics_l2/lrw2/in.png') }}" />
                    <div class="rectangle">shirt</div>
                </div>
                <div class="w-fit flex flex-col items-center h-fit">
                    <img class="w-[10vw]" src="{{ asset('assets/images/phonics_l2/lrw2/on.png') }}" />
                    <div class="rectangle">on</div>
                </div>
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

            const returnURL = "{{ url('/phonics_l2/lrw2/prepositional') }}";
            const doneURL = "{{ url('/phonics_l2/lrw2/prepositional') }}";

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
