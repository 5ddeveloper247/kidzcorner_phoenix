@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $introTip = "Tips: Encourage children to say the 'pl' sound. <br>
                 Remind them to listen to the initial sound when naming each object.";

    $questions = [
        [
            'image' => 'assets/images/phonics_l2/swsc/scold.png',
            'imageSize' => 'h-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/sw_sc/scold.m4a',
            'correct' => 'scold',
            'wrong' => 'fold',
            'correctSide' => 'right',
        ],
        [
            'image' => 'assets/images/phonics_l2/swsc/scout.png',
            'imageSize' => 'h-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/sw_sc/scout.m4a',
            'correct' => 'scout',
            'wrong' => 'pout',
            'correctSide' => 'left',
        ],
        [
            'image' => 'assets/images/phonics_l2/swsc/scarf.png',
            'imageSize' => 'w-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/sw_sc/scarf.m4a',
            'correct' => 'scarf',
            'wrong' => 'wharf',
            'correctSide' => 'right',
        ],
        [
            'image' => 'assets/images/phonics_l2/swsc/scar.png',
            'imageSize' => 'h-[18vw]',
            'audio' => 'assets/audio/phonics_audio-2/sw_sc/scar.m4a',
            'correct' => 'scar',
            'wrong' => 'car',
            'correctSide' => 'left',
        ],
        [
            'image' => 'assets/images/phonics_l2/swsc/scared.png',
            'imageSize' => 'h-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/sw_sc/scared.m4a',
            'correct' => 'scared',
            'wrong' => 'scare',
            'correctSide' => 'left',
        ],
        [
            'image' => 'assets/images/phonics_l2/swsc/scoop.png',
            'imageSize' => 'h-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/sw_sc/scoop.m4a',
            'correct' => 'scoop',
            'wrong' => 'coop',
            'correctSide' => 'right',
        ],
    ];
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

    {{-- Panel 1 – Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt.m4a') }}">
        <h2 class="top-title stroke">Word Hunt</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">{!! $introTip !!}</p>
    </div>


    {{--   Question + Answer panels --}}
    @foreach ($questions as $q)
        @php
            $leftWord = $q['correctSide'] === 'left' ? $q['correct'] : $q['wrong'];
            $rightWord = $q['correctSide'] === 'right' ? $q['correct'] : $q['wrong'];
        @endphp

        {{-- Question Panel --}}
        <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

            <h2 class="large-title stroke">Find the word that matches the picture.</h2>

            <div class="flex items-center space-x-[1vw]">

                {{-- Left word (marked 'answer' class if it's the correct one) --}}
                <div class="options {{ $q['correctSide'] === 'left' ? 'answer' : '' }}">{{ $leftWord }}</div>

                {{-- Image + Speaker button --}}
                <div class="flex flex-col items-center justify-center gap-5">
                    <img src="{{ asset($q['image']) }}" class="{{ $q['imageSize'] }}" />
                    <button class="w-[4vw]" id="soundButton" data-slide-audio="{{ asset($q['audio']) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </div>

                {{-- Right word --}}
                <div class="options {{ $q['correctSide'] === 'right' ? 'answer' : '' }}">{{ $rightWord }}</div>

            </div>
        </div>

        {{-- Answer Panel --}}
        <div class="phonics-panel answer flex flex-col justify-center space-y-[1.5vw] items-center w-full"
            data-slide-audio="{{ asset($q['audio']) }}">

            <h2 class="large-title stroke">Find the word that matches the picture.</h2>

            <div class="flex flex-col items-center space-y-[1vw]">
                <img src="{{ asset($q['image']) }}" class="{{ $q['imageSize'] }}" />
                <div class="options">{{ $q['correct'] }}</div>
            </div>
        </div>
    @endforeach


    {{-- Navigation Buttons --}}
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

        const returnURL = "{{ url('/phonics_l2/sm_rev/sc') }}";
        const doneURL = "{{ url('/phonics_l2/sm_rev/sc') }}";
        const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            let currentSlide = 0;
            let currentAudio = null;

            // ── Audio helpers ──────────────────────────────────────
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
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

            // ── Slide navigation ───────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const slide = slides[idx];
                const src = slide.getAttribute('data-slide-audio');
                const isAnswer = slide.classList.contains('answer');
                const isLast = idx >= slides.length - 1;

                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));

                // On answer slides, play cheering after the word audio
                playAudio(src, isAnswer ? () => playAudio(CHEERING) : null);
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

            // ── Clicking the correct word advances the slide ───────
            slides.forEach(slide => {
                slide.querySelectorAll('.options.answer').forEach(opt => {
                    opt.style.cursor = 'pointer';
                    opt.addEventListener('click', goNext);
                });
            });

            // ── Button listeners ───────────────────────────────────
            nextButtons.forEach(b => b.addEventListener('click', goNext));
            doneButtons.forEach(b => b.addEventListener('click', () => {
                stopAudio();
                window.location.href = doneURL;
            }));
            soundButtons.forEach(b => b.addEventListener('click', e => {
                e.stopPropagation();
                playAudio(b.getAttribute('data-slide-audio'));
            }));

            document.getElementById('returnButton')?.addEventListener('click', goBack);
            document.getElementById('homeButton')?.addEventListener('click', () => {
                stopAudio();
                window.location.href = document.body.dataset.homeRoute;
            });

            showSlide(0);
        });
    </script>
@endpush
