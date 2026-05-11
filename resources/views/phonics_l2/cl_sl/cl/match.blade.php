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
.panel-ul {
            color: white;
            font-size: 1.1vw;
            padding-left: 3vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.1vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.m4a') }}">
        <h2 class="top-title stroke">Make a Match</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To find out how to use this activity <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col  gap-y-[1vw]">
        <h1 class="panel-title">Definitions</h1>

        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>Phonics - A method of teaching reading and spelling that stresses symbol-sound relationships.</li>
            <li>Phonological Awareness - The understanding of the different ways that spoken language
                can be broken into smaller components.
                <ul class="pl-[2vw]">
                    <li>-Words</li>
                    <li>-Syllables</li>
                    <li>-Onset-rhymes</li>
                    <li>-Phonemes</li>
                </ul>
            </li>
            <li>Phonemic Awareness - The ability to reflect and manipulate the smallest units of sound
                in language phonemes.</li>
            <li>Blends - A consonant blend is a group of consonants found in a word that have no vowels
                between them. When reading a blend, each consonant within the consonant blend maintains its
                sound.</li>
            <li>Digraphs - Two letters that represent one speech sound, as ch for ch in "chin".</li>
            <li>Word Families - Words that share the same rime (e.g. fast, past, last).</li>
            <li>Onset - The initial consonant or consonant cluster of a word, as shis the onset for
                "ship".</li>
            <li>Rime - The rhyme chunk at the end of the word, as the ip in "ship".</li>
            <li>Word chunks - Finding words within words.</li>
        </ul>

        <div class="down-btn-container">
            <button class="doneButton hidden">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/match.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-full mt-[3vw]">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/blpl/2.gif') }}" class="h-[20vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blink.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/clsl/clean.png') }}" class="w-[24vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clean.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <p class="p-note">Tips: Encourage children to listen and identify the initial blend sound made when
            naming the
            objects,</p>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clean.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-full">
            <img src="{{ asset('assets/images/phonics_l2/blpl/2.gif') }}" class="h-[20vw]" />
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/clean.png') }}" class="w-[24vw] mb-0" />
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">clean</h2>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/match.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[50vw]">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/clsl/clown.png') }}" class="w-[20vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/black.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/blpl/12.png') }}" class="w-[20vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/plane.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 5 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clown.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[45vw]">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/clown.png') }}" class="w-[20vw] mb-0" />
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">clown</h2>
                </div>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/blpl/12.png') }}" class="w-[20vw]" />
        </div>
    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/match.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[45vw]">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/blpl/24.png') }}" class="w-[15vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/plant.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/clsl/clips.png') }}" class="w-[15vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/blinds.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clips.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[45vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/24.png') }}" class="w-[15vw]" />
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/clips.png') }}" class="w-[15vw] mb-0" />
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white"> clips</h2>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 8 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/match.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[45vw]">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/clsl/cloud.png') }}" class="w-[18vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/blush.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/blpl/11.png') }}" class="w-[20vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/plate.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/cloud.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[45vw]">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/cloud.png') }}" class="w-[18vw] mb-0" />
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">cloud</h2>
                </div>
            </div>
            <img src="{{ asset('assets/images/phonics_l2/blpl/11.png') }}" class="w-[20vw]" />
        </div>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/match.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[45vw]">
            <div class="space-y-[4vw]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/26.png') }}" class="w-[15vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/plug.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div>
                <img src="{{ asset('assets/images/phonics_l2/clsl/shell.png') }}" class="w-[20vw]" />
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/blouse.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clam.m4a') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}"class="w-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-between w-[45vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/26.png') }}" class="w-[15vw]" />
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/shell.png') }}" class="w-[20vw] mb-0" />
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">shell</h2>
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

            const returnURL = "{{ url('/phonics_l2/cl_sl/cl') }}";
            const doneURL = "{{ url('/phonics_l2/cl_sl/cl') }}";

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

    if (isInSpecialMode) {
        currentSlide = returnToSlide;
        isInSpecialMode = false;
        specialSlideClass = null;
        returnToSlide = null;
        showSlide(currentSlide);
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
