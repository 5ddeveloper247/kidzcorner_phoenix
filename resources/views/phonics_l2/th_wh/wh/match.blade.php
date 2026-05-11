@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/th_wh/wh';
    $doneURL = '/phonics_l2/th_wh/wh';

    $introPanelTip = "Tips: Encourage children to say the 'sl' sound. <br>
        Remind them to listen to the initial sound when naming each object.";

    $mascotMessage = "Let's find the <br> pictures that begin <br> with 'th'.";

    $questions = [
        // ── Question 1 ─
        [
            'diagraph' => 'wh',
            'questionAudio' => 'assets/audio/phonics_audio-2/th_wh/match-box.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/whiskers.m4a',
            'questionText' => 'Find the picture that <br> begins with the <br> /wh/ sound.',
            'answerWord' => 'whiskers',
            'answerEnding' => 'iskers',
            'answerImage' => 'assets/images/phonics_l2/thwh/whiskers.png',
            'items' => [
                [
                    'image' => 'assets/images/phonics_l2/thwh/whiskers.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/whiskers.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/clsl/slow.png',
                    'audio' => 'assets/audio/phonics_audio-2/cl_sl/slow.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/chocolate.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chocolate.m4a',
                ],
            ],
        ],

        // ── Question 2 — 
        [
            'diagraph' => 'wh',
            'questionAudio' => 'assets/audio/phonics_audio-2/th_wh/match-box.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/whisper.m4a',
            'questionText' => 'Find the picture that <br> begins with the <br> /wh/ sound.',
            'answerWord' => 'whisper',
            'answerEnding' => 'isper',
            'answerImage' => 'assets/images/phonics_l2/thwh/whisper.png',
            'items' => [
                [
                    'image' => 'assets/images/phonics_l2/shch/chicken.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chicken.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/thwh/whisper.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/whisper.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/ship.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/ship.m4a',
                ],
            ],
        ],
        
        // ── Question 3 — 
        [
            'diagraph' => 'wh',
            'questionAudio' => 'assets/audio/phonics_audio-2/th_wh/match-box.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/whale.m4a',
            'questionText' => 'Find the picture that <br> begins with the <br> /wh/ sound.',
            'answerWord' => 'whale',
            'answerEnding' => 'ale',
            'answerImage' => 'assets/images/phonics_l2/thwh/whale.png',
            'items' => [
                [
                    'image' => 'assets/images/phonics_l2/thwh/throw.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/throw.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/thwh/whale.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/whale.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/swsc/swan.png',
                    'audio' => 'assets/audio/phonics_audio-2/sw_sc/swan.m4a',
                ],
            ],
        ],
        // ── Question 4 — 
        [
            'diagraph' => 'wh',
            'questionAudio' => 'assets/audio/phonics_audio-2/th_wh/match-box.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/wheel.m4a',
            'questionText' => 'Find the picture that <br> begins with the <br> /wh/ sound.',
            'answerWord' => 'wheel',
            'answerEnding' => 'eel',
            'answerImage' => 'assets/images/phonics_l2/thwh/wheel.png',
            'items' => [
                [
                    'image' => 'assets/images/phonics_l2/shch/cheese.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/cheese.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/shirt.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/shirt.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/thwh/wheel.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/wheel.m4a',
                ],
            ],
        ],
        // ── Question 5 — 
        [
            'diagraph' => 'wh',
            'questionAudio' => 'assets/audio/phonics_audio-2/th_wh/match-box.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/whip.m4a',
            'questionText' => 'Find the picture that <br> begins with the <br> /wh/ sound.',
            'answerWord' => 'whip',
            'answerEnding' => 'ip',
            'answerImage' => 'assets/images/phonics_l2/thwh/whip.png',
            'items' => [
                [
                    'image' => 'assets/images/phonics_l2/shch/cheese.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/cheese.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/chocolate.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chocolate.m4a',
                ],
                [
                    'image' => 'assets/images/phonics_l2/thwh/whip.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/whip.m4a',
                ],
            ],
        ],
    ];



@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .c-btn {
            color: #F7B94A !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 1.5vw;
        }

        .box {
            width: 19vw;
            height: 10vw;
            border: 0.15vw solid #F7B94A;
            border-radius: 7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush


@section('content')

    {{-- ── Panel 1: Intro ── --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-it.m4a') }}">
        <h2 class="top-title stroke">Match It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        @if ($introPanelTip)
            <p class="p-note">{!! $introPanelTip !!}</p>
        @endif
    </div>

    <div class="phonics-panel flex justify-center items-center" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/th_wh/match-ch.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[#A15E0D] text-[2vw] text-center w-100">
                {!! $mascotMessage !!}
            </h2>
        </div>
    </div>


    {{-- ── Question + Answer panels ── --}}
    @foreach ($questions as $q)
        {{-- Question panel --}}
        <div class="phonics-panel flex justify-center items-center !space-y-[2vw]"
            data-slide-audio="{{ asset($q['questionAudio']) }}">

            {{-- Left: circle with small images + diagraph --}}
            <div class="relative w-[24vw] h-[24vw] bg-cover bg-center flex flex-col justify-center items-center gap-[2vw]"
                style="background-image: url('{{ asset('assets/images/phonics_l2/global/guess-c.png') }}');">

                <div class="grid grid-cols-2 gap-[1vw]">
                    @foreach ($q['items'] as $i => $item)
                        {{-- Last item spans 2 columns if odd number of items --}}
                        <div
                            class="{{ $loop->last && count($q['items']) % 2 !== 0 ? 'col-span-2 flex justify-center' : 'flex' }} items-end gap-[0.5vw]">
                            <button class="w-[2.5vw] sound-btn" data-slide-audio="{{ asset($item['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <img class="w-[4vw]" src="{{ asset($item['image']) }}" />
                        </div>
                    @endforeach
                </div>

                <div class="flex items-end text-[2.5vw]">
                    <h2 class="leading-none">{{ $q['diagraph'] }}</h2>
                    <div class="w-[10vw] h-[4px] bg-[#000]"></div>
                </div>
            </div>

            {{-- Right: question box + thinking image --}}
            <div class="flex flex-col items-end gap-[1vw]">
                <div class="box">
                    <h2 class="panel-title">{!! $q['questionText'] !!}</h2>
                </div>
                <img src="{{ asset('assets/images/phonics_l2/global/common/thinking.png') }}" class="h-[15vw]" />
            </div>
        </div>

        {{-- Answer panel --}}
        <div class="phonics-panel answer flex justify-between gap-[4vw] items-center"
            data-slide-audio="{{ asset($q['answerAudio']) }}">

            {{-- Left: circle with big answer image + diagraph + coloured ending --}}
            <div class="relative w-[24vw] h-[24vw] bg-cover bg-center flex flex-col justify-center items-center gap-[2vw]"
                style="background-image: url('{{ asset('assets/images/phonics_l2/global/guess-c.png') }}');">

                <img class="w-[10vw]" src="{{ asset($q['answerImage']) }}" />

                <div class="flex items-end text-[2.5vw] gap-[0.5vw]">
                    <h2 class="leading-none">{{ $q['diagraph'] }}</h2>
                    <div class="flex flex-col leading-none">
                        <span class="text-[#A15E0D]">{{ $q['answerEnding'] }}</span>
                        <div class="w-[10vw] h-[4px] bg-black"></div>
                    </div>
                </div>
            </div>

            <img src="{{ asset('assets/images/phonics_l2/global/common/happy.png') }}" class="h-[20vw]" />
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

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const soundButtons = document.querySelectorAll(".sound-btn");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = document.body.dataset.homeRoute;
            const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;

            // ── Audio helpers ─────────────────────────────────────
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio = null;
                }
            }

            // Plays a list of audio files one after another
            function playSequence(sources, idx = 0) {
                if (idx >= sources.length) return;
                stopAudio();
                currentAudio = new Audio(sources[idx]);
                currentAudio.onended = () => playSequence(sources, idx + 1);
                currentAudio.play().catch(() => {});
            }

            // ── Show a slide ──────────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const src = slides[idx].getAttribute('data-slide-audio');
                const isAnswer = slides[idx].classList.contains('answer');

                // Answer panels: play audio then cheering
                if (src) playSequence(isAnswer ? [src, CHEERING] : [src]);

                const isLast = idx >= slides.length - 1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));
            }

            // ── Navigation ────────────────────────────────────────
            nextButtons.forEach(b => b.addEventListener('click', () => {
                if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
            }));

            returnButton?.addEventListener('click', () => {
                if (currentSlide === 0) {
                    stopAudio();
                    window.location.href = returnURL;
                } else showSlide(currentSlide - 1);
            });

            homeButton?.addEventListener('click', () => {
                stopAudio();
                window.location.href = homeURL;
            });

            doneButtons.forEach(b => b.addEventListener('click', () => {
    if (infoMode) {
        infoMode = false;
        infoClass = null;
        showSlide(returnToSlide);
    } else {
        stopAudio();
        window.location.href = doneURL;
    }
}));

            // ── Sound buttons ─────────────────────────────────────
            soundButtons.forEach(b => b.addEventListener('click', e => {
                e.stopPropagation();
                playSequence([b.getAttribute('data-slide-audio')]);
            }));

            showSlide(0);
        });
    </script>
@endpush
