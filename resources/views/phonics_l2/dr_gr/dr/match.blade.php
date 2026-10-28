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

        /* ── Aligned picture row ──
           Every picture sits in the same fixed-size box, so pictures share one
           line and the sound buttons below them share one line too. */
        .pic-row {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 12vw;
        }

        .pic-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5vw;
        }

        .pic-wrap {
            width: 22vw;
            height: 19vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pic-wrap img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.mp3') }}">
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

    {{-- Panel 2 (question) --}}
    <div class="phonics-panel flex flex-col justify-center gap-[1vw] items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row mt-[2vw]">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/clsl/slime.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slime.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/drink.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drink.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <p class="p-note">Tips: Encourage children to listen and identify the initial blend sound made when
            naming the
            objects,</p>
    </div>

    {{-- Panel 3 (answer) --}}
    <div class="phonics-panel flex flex-col justify-center items-center" data-cheer
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drink.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/clsl/slime.png') }}" />
                </div>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/drink.png') }}" />
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">drink</h2>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 4 (question) --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/drive.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drive.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}" class="rounded-2xl" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clap.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 5 (answer) --}}
    <div class="phonics-panel flex flex-col justify-center items-center" data-cheer
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drive.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/drive.png') }}" />
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">drive</h2>
                </div>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/clsl/clap.png') }}" class="rounded-2xl" />
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 6 (question) --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/flgl/flask.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/flask.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/draw.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/draw.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 7 (answer) --}}
    <div class="phonics-panel flex flex-col justify-center items-center" data-cheer
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/draw.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/flgl/flask.png') }}" />
                </div>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/draw.png') }}" />
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">draw</h2>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 8 (question) --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/dream.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dream.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/flgl/globe.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/globe.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 9 (answer) --}}
    <div class="phonics-panel flex flex-col justify-center items-center" data-cheer
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dream.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/dream.png') }}" />
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">dream</h2>
                </div>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/flgl/globe.png') }}" />
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 10 (question) --}}
    <div class="phonics-panel flex flex-col justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/match-br.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blocks.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/drum.png') }}" />
                </div>
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drum.mp3') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 11 (answer) --}}
    <div class="phonics-panel flex flex-col justify-center items-center" data-cheer
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/drum.mp3') }}">
        <div class="flex items-end panel-div">
            <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
            <img src="{{ asset('assets/images/phonics_l2/drgr/dress.png') }}"class="h-[6vw]" />
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/dr_gr/dress.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="pic-row">
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}" />
                </div>
            </div>
            <div class="pic-item">
                <div class="pic-wrap">
                    <img src="{{ asset('assets/images/phonics_l2/drgr/drum.png') }}" />
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                    <h2 class="text-[2vw] text-white">drum</h2>
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

            const returnURL = "{{ url('/phonics_l2/dr_gr/dr') }}";
            const doneURL = "{{ url('/phonics_l2/dr_gr/dr') }}";

            const CHEERING_AUDIO = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

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
                    currentAudio.onended = null; // cancels any pending cheering
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
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
                    const audio = new Audio(audioSrc);
                    currentAudio = audio;

                    // Answer panel: after the answer sound ends, play the cheering sound
                    if (slide.hasAttribute('data-cheer')) {
                        audio.onended = () => {
                            if (currentAudio !== audio) return; // slide changed meanwhile
                            currentAudio = new Audio(CHEERING_AUDIO);
                            currentAudio.play().catch(err => console.log('Cheer play failed:', err));
                        };
                    }

                    audio.play().catch(err => console.log('Audio play failed:', err));
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