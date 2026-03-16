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



    {{-- Panel 2 - Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">blue</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/flgl/glue.png') }}" class="h-[20vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slip.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options answer">glue</div>
        </div>

        <p class="note">Tips: Invite children to sound out each word by parts (e.g. /gl/ ... /ue/) <br>
            before selecting the word that matches the picture.</p>
    </div>

    {{-- Panel 3  - Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glue.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/flgl/glue.png') }}" class="h-[20vw]" />
            <div class="options">glue</div>
        </div>
    </div>


    {{-- Panel 4 - Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">class</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/flgl/glass.png') }}" class="h-[18vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sleep.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options answer">glass</div>
        </div>

    </div>

    {{-- Panel 5 -Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glass.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/flgl/glass.png') }}" class="h-[18vw]" />
            <div class="options">glass</div>
        </div>
    </div>


    {{-- Panel 6 -Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options answer">glow</div>
            <div class="flex flex-col items-center justify-center gap-5 ">
                <img src="{{ asset('assets/images/phonics_l2/flgl/glow.png') }}" class="h-[20vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slide.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">blow</div>
        </div>

    </div>

    {{-- Panel 7 -Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glow.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/flgl/glow.png') }}" class="h-[20vw]" />
            <div class="options">glow</div>
        </div>
    </div>


    {{-- panel 8 -Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options answer">globe</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/flgl/globe.png') }}" class="w-[15vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/globe.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">robe</div>
        </div>

    </div>

    {{-- Panel 9 - Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/globe.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/flgl/globe.png') }}" class="w-[15vw]" />
            <div class="options">globe</div>
        </div>
    </div>

    {{-- Panel 10 - Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options answer">glad</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/flgl/glad.png') }}" class="w-[15vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glad.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">sad</div>
        </div>

    </div>

    {{-- Panel 11 -Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glad.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/flgl/glad.png') }}" class="w-[15vw]" />
            <div class="options">glad</div>
        </div>
    </div>

    {{-- Panel 12 -Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex items-center space-x-[1vw]">
            <div class="options">dove</div>
            <div class="flex flex-col items-center justify-center gap-5">
                <img src="{{ asset('assets/images/phonics_l2/flgl/gloves.png') }}" class="w-[20vw]" />
                <button class="w-[4vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glove.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options answer">glove</div>
        </div>

    </div>

    {{-- Panel 13 - Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glove.m4a') }}">

        <h2 class="large-title stroke">Find the word that matches the picture.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/flgl/gloves.png') }}" class="w-[20vw]" />
            <div class="options">glove</div>
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function () {

            const slides       = document.querySelectorAll(".phonics-panel");
            const nextButtons  = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton   = document.getElementById("homeButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/fl_gl/gl') }}";
            const doneURL   = "{{ url('/phonics_l2/fl_gl/gl') }}";
            const homeURL   = document.body.dataset.homeRoute;
            const CHEERING  = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;

            /* ── Audio ── */
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playAudio(src, onEnd) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(() => {});
            }

            function playSlideAudio(idx) {
                const slide = slides[idx];
                const src   = slide.getAttribute('data-slide-audio')
                           || slide.querySelector('[data-slide-audio]')?.getAttribute('data-slide-audio');

                const isAnswer = slide.classList.contains('answer');

                if (isAnswer) {
                    playAudio(src, () => playAudio(CHEERING));
                } else {
                    playAudio(src);
                }
            }

            /* ── Slides ── */
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;

                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));
                playSlideAudio(idx);

                const isLast = idx >= slides.length - 1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                document.querySelectorAll('.doneButton').forEach(b => b.classList.toggle('hidden', !isLast));
            }

            function goNext() {
                if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
            }

            function goBack() {
                if (currentSlide === 0) {
                    stopAudio();
                    window.location.href = returnURL;
                } else {
                    showSlide(currentSlide - 1);
                }
            }

            /* ── Answer option click → next slide ── */
            slides.forEach((slide) => {
                slide.querySelectorAll('.options.answer').forEach(option => {
                    option.style.cursor = 'pointer';
                    option.addEventListener('click', goNext);
                });
            });

            /* ── Sound buttons ── */
            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

            /* ── Nav ── */
            nextButtons.forEach(b => b.addEventListener('click', goNext));

            if (returnButton) returnButton.addEventListener('click', goBack);

            if (homeButton) homeButton.addEventListener('click', () => {
                stopAudio();
                window.location.href = homeURL;
            });

            document.querySelectorAll('.doneButton').forEach(b => b.addEventListener('click', () => {
                stopAudio();
                window.location.href = doneURL;
            }));

            showSlide(0);
        });
    </script>
@endpush
