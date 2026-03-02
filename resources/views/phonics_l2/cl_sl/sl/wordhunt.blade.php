@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .large-title {
            color: #F7B94A;
            font-size: 2vw !important;
        }

        .options {
            width: 12vw;
            height: 6vw;
            font-size: 4vw;
            line-height: 100%;
            color: #A15E0D;
            background: #D9D9D9;
            border: 4px solid #F8A23A;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt.m4a') }}">
        <h2 class="top-title stroke">Word Hunt</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to list en to the initial sound when naming each object.</p>
    </div>



    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">flip</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slip.png') }}" class="w-[15vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slip.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">slip</div>
        </div>

        <p class="note">Tips: Invite children to sound out each word by parts (e.g. /pl/ ... /ane/) <br>
            before selecting the word that matches the picture.</p>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slip.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/clsl/slip.png') }}" class="w-[15vw]" />
            <div class="options">slip</div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">creep</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/clsl/sleep.png') }}" class="w-[15vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sleep.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">sleep</div>
        </div>

    </div>

    {{-- Panel 5 --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sleep.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/clsl/sleep.png') }}" class="w-[15vw]" />
            <div class="options">sleep</div>
        </div>
    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">slide</div>
            <div class="flex flex-col items-center justify-center gap-5 ">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slide2.png') }}" class="h-[18vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slide.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">glide</div>
        </div>

    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slide.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/clsl/slide2.png') }}" class="h-[18vw]" />
            <div class="options">slide</div>
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">sling</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/clsl/broken.png') }}" class="w-[15vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sling.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">cling</div>
        </div>

    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sling.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/clsl/broken.png') }}" class="w-[15vw]" />
            <div class="options">sling</div>
        </div>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">sled</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/clsl/ski.png') }}" class="w-[15vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">fled</div>
        </div>

    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sled.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/clsl/ski.png') }}" class="w-[15vw]" />
            <div class="options">sled</div>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">time</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slime.png') }}" class="h-[15vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slime.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">slime</div>
        </div>

    </div>

    {{-- Panel 13 --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slime.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/clsl/slime.png') }}" class="h-[15vw]" />
            <div class="options">slime</div>
        </div>
    </div>



    {{-- ==================================== --}}
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/cl_sl/sl') }}";
            const doneURL = "{{ url('/phonics_l2/cl_sl/sl') }}";
            const AUTO_PLAY_DELAY = 500;

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
                const isAnswerSlide = slide.classList.contains('answer');

                setTimeout(() => {
                    let audioSrc = slide.getAttribute('data-slide-audio');

                    if (!audioSrc) {
                        const audioElement = slide.querySelector('[data-slide-audio]');
                        if (audioElement) {
                            audioSrc = audioElement.getAttribute('data-slide-audio');
                        }
                    }

                    if (audioSrc) {
                        currentAudio = new Audio(audioSrc);

                        if (isAnswerSlide) {
                            currentAudio.addEventListener('ended', () => {
                                const cheeringAudio = new Audio(
                                    "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}"
                                    );
                                currentAudio = cheeringAudio;
                                cheeringAudio.play().catch(err => console.log(
                                    'Cheering audio play failed:', err));
                            });
                        }

                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                }, AUTO_PLAY_DELAY);
            }

            // ✅ FIX 1: showSlide now targets ALL .doneButton elements
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

            // ✅ FIX 2: handleDone always navigates to doneURL
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

            // ✅ FIX 3: Attach handleDone to ALL .doneButton elements
            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", handleDone);
            });

            showSlide(currentSlide);
        });
    </script>
@endpush
