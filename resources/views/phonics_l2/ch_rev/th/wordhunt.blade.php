@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/sh_th/th';
    $doneURL = '/phonics_l2/sh_th/th';

    $introPanelTip = "Tips: Encourage children to say the 'pl' sound. <br>
        Remind them to listen to the initial sound when naming each object.";

    $questions = [
        // ── Question 1 ──
        [
            'tip' => "Tips: Invite children to sound out each word by parts (e.g. /ba/ ... /th/) <br>
            before selecting the word that matches the picture.",
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/shth/bath.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_th/bath.m4a',
                    'answer' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shth/path.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_th/path.m4a',
                    'answer' => false,
                ],
            ],
            'optionWord' => 'bath',
            'answerImage' => 'assets/images/phonics_l2/shth/bath.png',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_th/bath.m4a',
            'answerDiagraph' => 'th',
            'answerRest' => 'ba',
        ],

        // ── Question 2  ──
        [
            'tip' => null,
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/shth/mug.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_th/mug.m4a',
                    'answer' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shth/cloth.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_th/cloth.m4a',
                    'answer' => true,
                ],
            ],
            'optionWord' => 'cloth',
            'answerImage' => 'assets/images/phonics_l2/shth/cloth.png',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_th/cloth.m4a',
            'answerDiagraph' => 'th',
            'answerRest' => 'clo',
        ],

        // ── Question 3  ──
        [
            'tip' => null,
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/shth/teeth.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_th/teeth.m4a',
                    'answer' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shth/wreath.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_th/wreath.m4a',
                    'answer' => false,
                ],
            ],
            'optionWord' => 'teeth',
            'answerImage' => 'assets/images/phonics_l2/shth/teeth.png',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_th/teeth.m4a',
            'answerDiagraph' => 'th',
            'answerRest' => 'tee',
        ],

        // ── Question 4  ──
        [
            'tip' => null,
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/shth/mouth.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_th/mouth.m4a',
                    'answer' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/thwh/wheel.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/wheel.m4a',
                    'answer' => false,
                ],
            ],
            'optionWord' => 'mouth',
            'answerImage' => 'assets/images/phonics_l2/shth/mouth.png',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_th/mouth.m4a',
            'answerDiagraph' => 'th',
            'answerRest' => 'mou',
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

        .options.answer-option {
            cursor: pointer;
        }
    </style>
@endpush


@section('content')

    {{-- ── Panel 1: Intro ── --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt.m4a') }}">
        <h2 class="top-title stroke">Word Hunt</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        @if ($introPanelTip)
            <p class="p-note">{!! $introPanelTip !!}</p>
        @endif
    </div>


    {{-- ── Question + Answer panels  --}}
    @foreach ($questions as $q)
        {{-- Question panel --}}
        <div class="phonics-panel flex flex-col justify-center space-y-[4vw] items-center w-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

            <h2 class="large-title stroke">Find the word that matches the picture.</h2>

            <div class="flex items-center justify-between w-full px-[3vw]">

                {{-- Left: images with sound buttons --}}
                <div>
                    @foreach ($q['images'] as $item)
                        <div class="flex items-center justify-center gap-5 {{ $item['answer'] ? 'answer' : '' }}">
                            <button class="w-[3vw] sound-btn" data-slide-audio="{{ asset($item['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <img src="{{ asset($item['image']) }}" class="w-[10vw]" />
                        </div>
                    @endforeach
                </div>

                {{-- Right: clickable options word box --}}
                <div class="options answer-option">{{ $q['optionWord'] }}</div>

            </div>

            @if (!empty($q['tip']))
                <p class="p-note">{!! $q['tip'] !!}</p>
            @endif
        </div>

        {{-- Answer panel — audio plays then cheering automatically --}}
        <div class="phonics-panel answer flex flex-col justify-start space-y-[5vw] items-center h-full w-full"
            data-slide-audio="{{ asset($q['answerAudio']) }}">

            <h2 class="large-title stroke">Find the word that matches the picture.</h2>

            <div class="flex items-center justify-between w-full px-[3vw]">
                <img src="{{ asset($q['answerImage']) }}" class="w-[15vw]" />
                <h2 class="text-[4vw] text-white">
                    {{ $q['answerRest'] }}<span class="text-[#f7b94a]">{{ $q['answerDiagraph'] }}</span>
                </h2>
            </div>

        </div>
    @endforeach


    {{-- ----------------------------Navigation Buttons ----------------------------- --}}
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

            // ── Audio ─────────────────────────────────────────────
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

            // ── Show slide ────────────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const src = slides[idx].getAttribute('data-slide-audio');
                const isAnswer = slides[idx].classList.contains('answer');

                // Answer panels → play audio then cheering
                if (src) playSequence(isAnswer ? [src, CHEERING] : [src]);

                const isLast = idx >= slides.length - 1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));
            }

            // ── Navigation ────────────────────────────────────────
            function goNext() {
                if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
            }

            nextButtons.forEach(b => b.addEventListener('click', goNext));

            // Clicking the answer options box also advances the slide
            document.querySelectorAll('.answer-option').forEach(opt => {
                opt.addEventListener('click', goNext);
            });

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
                stopAudio();
                window.location.href = doneURL;
            }));

            soundButtons.forEach(b => b.addEventListener('click', e => {
                e.stopPropagation();
                playSequence([b.getAttribute('data-slide-audio')]);
            }));

            showSlide(0);
        });
    </script>
@endpush
