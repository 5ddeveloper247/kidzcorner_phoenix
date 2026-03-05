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

        .title-top {
            font-size: 1.5vw !important;
            color: #F7B94A;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/fun-blends.m4a') }}">
        <h2 class="top-title stroke">Fun with Blends</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to list en to the initial sound when naming each object.</p>
    </div>



    {{-- Panel 2 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/find-fun.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}" class="w-[12vw]" />
        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-3">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb1.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">The</span>
            <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}" class="h-[4vw] absolute top-[-85%]! left-[40%]" />
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">is flying.</span>
        </div>
        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span>blue</span>
            <span>plane</span>
            <span>black</span>
        </div>


        <p class="p-note">Tips: Look at the picture, then read the sentence. <br>
            Encourage children to sound out the words in parts when in doubt (click on audio if needed).</p>
    </div>


    {{-- Panel 3 --}}
    <div class="answer phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blue.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}" class="w-[12vw]" />
        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-3">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb1.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">The</span>
            <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                class="h-[4vw] absolute top-[-3vw]! right-[30%]" />
            <span class="h-[4vw] absolute top-[-2vw]! left-[30%] text-[#f7b94a] text-[2vw]">blue</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">is flying.</span>
        </div>
        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span class="opacity-0">blue</span>
            <span>plane</span>
            <span>black</span>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class=" answer phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}" class="w-[12vw]" />
        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-3">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb1.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">The</span>

            <span class="h-[4vw] absolute top-[-2vw]! left-[30%] text-[#f7b94a] text-[2vw]">blue</span>
            <span class="h-[4vw] absolute top-[-2vw]! right-[30%] text-[#f7b94a] text-[2vw]">plane</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">is flying.</span>
        </div>
        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span class="opacity-0">blue</span>
            <span class="opacity-0">plane</span>
            <span>black</span>
        </div>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1.5vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/find-fun.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/14.png') }}" class="w-[12vw]" />

        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-4 mb-0">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">I like to</span>
            <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                class="h-[4vw] absolute top-[-3vw]! left-[40%]" />
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">with</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
        </div>
        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span>blinds</span>
            <span>blocks</span>
            <span>play</span>
            <span>plug</span>
        </div>
    </div>

    {{-- Panel 6 --}}
    <div class="answer phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/14.png') }}" class="w-[12vw]" />

        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-4 mb-0">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">I like to</span>
            <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                class="h-[4vw] absolute top-[-3vw]! right-[10%]" />

            <span class="h-[4vw] absolute top-[-2vw]! left-[40%] text-[#f7b94a] text-[2vw]">play</span>

            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">with</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
        </div>

        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span>blinds</span>
            <span>blocks</span>
            <span class="opacity-0">play</span>
            <span>plug</span>
        </div>
    </div>

    {{-- Panel 7 --}}
    <div class="answer phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blocks.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/14.png') }}" class="w-[12vw]" />

        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-4 mb-0">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">I like to</span>

            <span class="h-[4vw] absolute top-[-2vw]! left-[40%] text-[#f7b94a] text-[2vw]">play</span>
            <span class="h-[4vw] absolute top-[-1.5vw]! right-[5%] text-[#f7b94a] text-[2vw]">blocks</span>

            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">with</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
        </div>

        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span>blinds</span>
            <span class="opacity-0">blocks</span>
            <span class="opacity-0">play</span>
            <span>plug</span>
        </div>
    </div>


    {{-- Panel 8 --}}
    <div class="phonics-panel h-full flex flex-col justify-between items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/find-fun.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/15.png') }}" class="w-[22vw]" />

        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-4 mb-0">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb3.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">There is a</span>

            <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                class="h-[4vw] absolute top-[-3vw]! left-[45%]" />

            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">on the</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
        </div>

        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span>plank</span>
            <span>blow</span>
            <span>plane</span>
            <span>blouse</span>
        </div>
    </div>`


    {{-- Panel 9 --}}
    <div class="phonics-panel h-full flex flex-col justify-between items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blouse.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/15.png') }}" class="w-[22vw]" />

        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-4 mb-0">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb3.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">There is a</span>

            <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}"
                class="h-[4vw] absolute top-[-3vw]! right-[15%]" />
            <span class="h-[4vw] absolute top-[-2vw]! left-[40%] text-[#f7b94a] text-[2vw]">blouse</span>


            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">on the</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
        </div>

        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span>plank</span>
            <span>blow</span>
            <span>plane</span>
            <span class="opacity-0">blouse</span>
        </div>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel h-full flex flex-col justify-between items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plank.m4a') }}">
        <h2 class="title-top stroke">Find the missing words to complete <br>
            the sentence.</h2>

        <img src="{{ asset('assets/images/phonics_l2/blpl/15.png') }}" class="w-[22vw]" />

        <div class="flex items-center gap-2 text-[2vw] relative h-fit w-fit mt-4 mb-0">
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/fb3.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <span class="text-white">There is a</span>

            <span class="h-[4vw] absolute top-[-2vw]! left-[40%] text-[#f7b94a] text-[2vw]">blouse</span>
            <span class="h-[4vw] absolute top-[-2vw]! right-[7%] text-[#f7b94a] text-[2vw]">plank</span>


            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
            <span class="text-white">on the</span>
            <div class="w-[8vw] h-[4px] bg-[#E6A23C] border-t border-[#C47F1E]"></div>
        </div>

        {{-- words --}}
        <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw] mt-0 mb-0">
            <span class="opacity-0">plank</span>
            <span>blow</span>
            <span>plane</span>
            <span class="opacity-0">blouse</span>
        </div>
    </div>



    {{-- ======================================================== --}}
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

            const returnURL = "{{ url('/phonics_l2/bl_pl/blpl') }}";
            const doneURL = "{{ url('/phonics_l2/bl_pl/blpl') }}";
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
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide = slides[slideIndex];
                const isAnswerSlide = slide.classList.contains('answer');
                const audioSources = [];

                const slideSrc = slide.getAttribute('data-slide-audio');
                if (slideSrc) audioSources.push(slideSrc);

                if (isAnswerSlide) {
                    audioSources.push("{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}");
                } else {
                    slide.querySelectorAll('[data-slide-audio]').forEach(el => {
                        const src = el.getAttribute('data-slide-audio');
                        if (src && !audioSources.includes(src)) audioSources.push(src);
                    });
                }

                function playNext(index) {
                    if (index >= audioSources.length) return;
                    currentAudio = new Audio(audioSources[index]);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    currentAudio.onended = () => playNext(index + 1);
                }

                playNext(0);
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();

                const currentSlideElement = slides[slideIndex]; // ← added

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

                // ↓  logic merged from JS 1
                const ajaxSection = document.getElementById('ajax-section');
                if (ajaxSection) {
                    if (currentSlideElement.classList.contains('')) {
                        ajaxSection.classList.add('');
                    } else {
                        ajaxSection.classList.remove('');
                    }
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

                // ↓  logic merged from JS 1 (handles returning from info/special mode)
                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide); // showSlide already handles  now
                } else {
                    window.location.href = doneURL;
                }
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
