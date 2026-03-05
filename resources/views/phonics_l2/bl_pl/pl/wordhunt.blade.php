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

        .options.answer {
            cursor: pointer;
        }
    </style>
@endpush

@section('content')

    {{-- Panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt.m4a') }}">
        <h2 class="top-title stroke">Word Hunt</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to listen to the initial sound when naming each object.</p>
    </div>

    {{-- Panel 2 — plane (question) --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex items-center space-x-[1vw]">
            <div class="options">mane</div>
            <div class="flex flex-col items-center justify-center gap-3">
                <img src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}" class="w-[17vw]" />
                <button class="w-[4vw] soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options answer">plane</div>
        </div>
        <p class="p-note">Tips: Invite children to sound out each word by parts (e.g. /pl/ ... /ane/) <br>
            before selecting the word that matches the picture.</p>
    </div>

    {{-- Panel 3 — plane (answer) --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}" class="w-[17vw]" />
            <div class="options">plane</div>
        </div>
    </div>

    {{-- Panel 4 — plant (question) --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex items-center space-x-[1vw]">
            <div class="options">slant</div>
            <div class="flex flex-col items-center justify-center gap-3">
                <img src="{{ asset('assets/images/phonics_l2/blpl/26.png') }}" class="w-[17vw]" />
                <button class="w-[4vw] soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plant.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options answer">plant</div>
        </div>
    </div>

    {{-- Panel 5 — plant (answer) --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plant.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/26.png') }}" class="w-[17vw]" />
            <div class="options">plant</div>
        </div>
    </div>

    {{-- Panel 6 — play (question) --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex items-center space-x-[1vw]">
            <div class="options answer">play</div>
            <div class="flex flex-col items-center justify-center gap-3">
                <img src="{{ asset('assets/images/phonics_l2/blpl/23.png') }}" class="w-[17vw] rounded-xl" />
                <button class="w-[4vw] soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">clay</div>
        </div>
    </div>

    {{-- Panel 7 — play (answer) --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/23.png') }}" class="w-[17vw] rounded-xl" />
            <div class="options">play</div>
        </div>
    </div>

    {{-- Panel 8 — plate (question) --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex items-center space-x-[1vw]">
            <div class="options answer">plate</div>
            <div class="flex flex-col items-center justify-center gap-3">
                <img src="{{ asset('assets/images/phonics_l2/blpl/24.png') }}" class="w-[17vw]" />
                <button class="w-[4vw] soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plate.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">slate</div>
        </div>
    </div>

    {{-- Panel 9 — plate (answer) --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plate.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/24.png') }}" class="w-[17vw]" />
            <div class="options">plate</div>
        </div>
    </div>

    {{-- Panel 10 — plank (question) --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex items-center space-x-[1vw]">
            <div class="options answer">plank</div>
            <div class="flex flex-col items-center justify-center gap-3">
                <img src="{{ asset('assets/images/phonics_l2/blpl/25.png') }}" class="w-[17vw]" />
                <button class="w-[4vw] soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plank.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options">blank</div>
        </div>
    </div>

    {{-- Panel 11 — plank (answer) --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plank.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/25.png') }}" class="w-[17vw]" />
            <div class="options">plank</div>
        </div>
    </div>

    {{-- Panel 12 — plums (question) --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex items-center space-x-[1vw]">
            <div class="options">slums</div>
            <div class="flex flex-col items-center justify-center gap-3">
                <img src="{{ asset('assets/images/phonics_l2/blpl/18.png') }}" class="w-[17vw]" />
                <button class="w-[4vw] soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plums.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="options answer">plums</div>
        </div>
    </div>

    {{-- Panel 13 — plums (answer) --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plums.m4a') }}">
        <h2 class="large-title stroke">Find the word that matches the picture.</h2>
        <div class="flex flex-col items-center space-y-[1vw]">
            <img src="{{ asset('assets/images/phonics_l2/blpl/18.png') }}" class="w-[17vw]" />
            <div class="options">plums</div>
        </div>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

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

            const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            const returnURL = "{{ url('/phonics_l2/bl_pl/pl') }}";
            const doneURL = "{{ url('/phonics_l2/bl_pl/pl') }}";
            const homeURL = document.body.dataset.homeRoute;

            let currentSlide = 0;
            let currentAudio = null;

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
                if (!src) {
                    if (onEnd) onEnd();
                    return;
                }
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(() => {
                    if (onEnd) onEnd();
                });
            }

            function playSlideAudio(idx) {
                const slide = slides[idx];
                const src = slide.getAttribute('data-slide-audio');
                const isAnswer = slide.classList.contains('answer');

                if (isAnswer) {
                    playAudio(src, () => playAudio(CHEERING));
                } else {
                    playAudio(src);
                }
            }

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
                } else showSlide(currentSlide - 1);
            }

            /* ── Answer click → go next ── */
            slides.forEach(slide => {
                slide.querySelectorAll('.options.answer').forEach(option => {
                    option.addEventListener('click', () => goNext());
                });
            });

            /* ── Sound buttons ── */
            document.querySelectorAll('.soundButton').forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

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
