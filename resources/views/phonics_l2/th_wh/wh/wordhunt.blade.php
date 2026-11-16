@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/th_wh/wh';
    $doneURL = '/phonics_l2/th_wh/wh';

    $introPanelTip = "Tips: Encourage children to say the 'wh' sound. <br>
        Remind them to listen to the initial sound when naming each object.";

    $questions = [
        // ── Question 1 ──
        [
            'tip' => "Tips: Invite children to sound out each word by parts (e.g. /wh/ ... /ite/) <br>
            before selecting the word that matches the picture.",
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/thwh/white.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/white.mp3',
                    'answer' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/chips.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chips.mp3',
                    'answer' => false,
                ],
            ],
            'optionWord' => 'white',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/wh-ite.mp3',
            'answerImage' => 'assets/images/phonics_l2/thwh/white.png',
            'answerDiagraph' => 'wh',
            'answerRest' => 'ite',
        ],

        // ── Question 2  ──
        [
            'tip' => null,
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/thwh/wheat.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/wheat.mp3',
                    'answer' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/chair.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chair.mp3',
                    'answer' => false,
                ],
            ],
            'optionWord' => 'wheat',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/wh-eat.mp3',
            'answerImage' => 'assets/images/phonics_l2/thwh/wheat.png',
            'answerDiagraph' => 'wh',
            'answerRest' => 'eat',
        ],

        // ── Question 3  ──
        [
            'tip' => null,
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/shch/chick.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chick.mp3',
                    'answer' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/thwh/whale.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/whale.mp3',
                    'answer' => true,
                ],
            ],
            'optionWord' => 'whale',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/wh-ale.mp3',
            'answerImage' => 'assets/images/phonics_l2/thwh/whale.png',
            'answerDiagraph' => 'wh',
            'answerRest' => 'ale',
        ],

        // ── Question 4  ──
        [
            'tip' => null,
            'images' => [
                [
                    'image' => 'assets/images/phonics_l2/shch/chair.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chair.mp3',
                    'answer' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/thwh/wheel.png',
                    'audio' => 'assets/audio/phonics_audio-2/th_wh/wheel.mp3',
                    'answer' => false,
                ],
            ],
            'optionWord' => 'wheel',
            'answerAudio' => 'assets/audio/phonics_audio-2/th_wh/wh-eel.mp3',
            'answerImage' => 'assets/images/phonics_l2/thwh/wheel.png',
            'answerDiagraph' => 'wh',
            'answerRest' => 'eel',
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

        /* Next / Done: the container never blocks clicks, only the visible button receives them */
        .down-btn-container {
            pointer-events: none;
            z-index: 100;
        }

        .down-btn-container button {
            pointer-events: auto;
        }
    </style>
@endpush


@section('content')

    {{-- ── Panel 1: Intro ── --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/pic-match.mp3') }}">
        <h2 class="top-title stroke">Picture Match</h2>
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
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.mp3') }}">

            <h2 class="large-title stroke">Find the word that matches the picture.</h2>

            <div class="flex items-center justify-between w-full px-[3vw]">

                {{-- Left: images with sound buttons --}}
                <div>
                    @foreach ($q['images'] as $item)
                        <div class="flex items-center justify-center gap-5">
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

        {{-- Answer panel --}}
        <div class="phonics-panel flex flex-col justify-start space-y-[5vw] items-center h-full w-full"
            data-slide-audio="{{ asset($q['answerAudio']) }}">

            <h2 class="large-title stroke">Find the word that matches the picture.</h2>

            <div class="flex items-center justify-between w-full px-[3vw]">
                <img src="{{ asset($q['answerImage']) }}" class="w-[15vw]" />
                <h2 class="text-[4vw] text-white">
                    <span class="text-[#f7b94a]">{{ $q['answerDiagraph'] }}</span>{{ $q['answerRest'] }}
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

    {{-- Next and Done share ONE container, so an empty container can never sit on top of the visible button --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" />
        </button>
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

            function playAudio(src) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                currentAudio.play().catch(() => {});
            }

            // ── Show slide ────────────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                playAudio(slides[idx].getAttribute('data-slide-audio'));

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

            // Done button: stop the audio and go to the done page
            doneButtons.forEach(b => b.addEventListener('click', () => {
                stopAudio();
                window.location.href = doneURL;
            }));

            soundButtons.forEach(b => b.addEventListener('click', e => {
                e.stopPropagation();
                playAudio(b.getAttribute('data-slide-audio'));
            }));

            showSlide(0);
        });
    </script>
@endpush