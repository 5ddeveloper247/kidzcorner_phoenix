@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
    $returnURL = '/phonics_l2/y_ie/y';
    $doneURL = '/phonics_l2/y_ie/y';

    $questions = [
        // Question 1
        [
            'sound1' => ['text' => '/sh/', 'audio' => 'assets/audio/phonics_audio-2/ee_ea/bee.m4a'],
            'sound2' => ['text' => '/y/', 'audio' => 'assets/audio/phonics_audio-2/ee_ea/bee.m4a'],
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/eea/bee.png',
                    'class' => 'w-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/ee_ea/bee',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/yie/shy.png',
                    'class' => 'h-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/y_ie/shy',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ayue/sway.png',
                    'class' => 'h-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/sway',
                    'isCorrect' => false,
                ],
            ],
            'questionAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/y_ie/shy.m4a',
            'answertext' => 'bee',
        ],
        // Question 2
        [
            'sound1' => ['text' => '/pr/', 'audio' => 'assets/audio/phonics_audio-2/y_ie/pry.m4a'],
            'sound2' => ['text' => '/y/', 'audio' => 'assets/audio/phonics_audio-2/y_ie/pry.m4a'],
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/yie/pry.png',
                    'class' => 'h-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/y_ie/pry.m4a',
                    'isCorrect' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/eea/see.png',
                    'class' => 'h-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/ee_ea/see',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ayue/sway.png',
                    'class' => 'h-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/sway',
                    'isCorrect' => false,
                ],
            ],
            'questionAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/y_ie/pry.m4a',
            'answertext' => 'pry',
        ],
        // Question 3
        [
            'sound1' => ['text' => '/fr/', 'audio' => 'assets/audio/phonics_audio-2/y_ie/fry.m4a'],
            'sound2' => ['text' => '/y/', 'audio' => 'assets/audio/phonics_audio-2/y_ie/fry.m4a'],
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/atrev/cat.png',
                    'class' => 'w-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/at_rev/cat',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ayue/spray.png',
                    'class' => 'h-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/spray',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/yie/fry.png',
                    'class' => 'w-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/y_ie/fry',
                    'isCorrect' => true,
                ],
            ],
            'questionAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/ee_ea/fry.m4a',
            'answertext' => 'fry',
        ],
        // Question 4
        [
            'sound1' => ['text' => '/fl/', 'audio' => 'assets/audio/phonics_audio-2/y_ie/fly.m4a'],
            'sound2' => ['text' => '/y/', 'audio' => 'assets/audio/phonics_audio-2/y_ie/fly.m4a'],
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/clsl/clap.png',
                    'class' => 'w-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/cl_sl/clap',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/yie/fly.png',
                    'class' => 'w-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/y_ie/fly.m4a',
                    'isCorrect' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/apad/map.png',
                    'class' => 'h-[8vw]',
                    'audio' => 'assets/audio/phonics_audio-2/ap_ad/map',
                    'isCorrect' => false,
                ],
            ],
            'questionAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/y_ie/fly.m4a',
            'answertext' => 'fly',
        ],
    ];
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
    </style>
@endpush

@section('content')
    {{-- INTRO PANEL (static) --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.m4a') }}">
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bbl.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- Generate slides from questions --}}
    @foreach ($questions as $q)
        {{-- QUESTION SLIDE --}}
        <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
            data-slide-audio="{{ asset($q['questionAudio']) }}">
            <div class="flex items-end panel-div text-white">
                <h2 class="text-[1.3vw]">The boxes make sounds. <br>
                    Put these sounds together to make a picture name. <br>
                    Then find the picture that matches the picture name,</h2>
            </div>

            <div class="flex items-center justify-between w-[40vw] mt-[3vw]">
                <div class="flex items-start">
                    <button class="w-[3vw] sound-btn" data-audio="{{ asset($q['sound1']['audio']) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/common/box.png') }}" class="w-[13vw]" />
                        <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-black text-[2vw]">
                            {{ $q['sound1']['text'] }}</h2>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/common/box.png') }}" class="w-[13vw]" />
                        <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-black text-[2vw]">
                            {{ $q['sound2']['text'] }}</h2>
                    </div>
                    <button class="w-[3vw] sound-btn" data-audio="{{ asset($q['sound2']['audio']) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </div>
            </div>

            <div class="flex items-center w-[40vw] justify-between">
                @foreach ($q['options'] as $opt)
                    <div class="flex flex-col items-center">
                        <img class="{{ $opt['class'] ?? 'w-[8vw]' }}" src="{{ asset($opt['image']) }}" />
                        <button class="w-[2.5vw] sound-btn" data-audio="{{ asset($opt['audio']) }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ANSWER SLIDE (tick + cheering) --}}
        <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
            data-slide-audio="{{ asset($q['answerAudio']) }}" data-cheering="true">
            <div class="flex items-end panel-div text-white">
                <h2 class="text-[1.3vw]">The boxes make sounds. <br>
                    Put these sounds together to make a picture name. <br>
                    Then find the picture that matches the picture name,</h2>
            </div>

            <div class="flex items-center justify-between w-[40vw] mt-[3vw]">
                <div class="flex items-start">
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/common/box.png') }}" class="w-[13vw]" />
                        <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-black text-[2vw]">
                            {{ $q['sound1']['text'] }}</h2>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/common/box.png') }}" class="w-[13vw]" />
                        <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-black text-[2vw]">
                            {{ $q['sound2']['text'] }}</h2>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-[1vw]">
                <div class="flex items-center w-[40vw] justify-between">
                    @foreach ($q['options'] as $opt)
                        <div class="flex flex-col items-center @if ($opt['isCorrect']) relative @endif">
                            <img class="{{ $opt['class'] ?? 'w-[8vw]' }}" src="{{ asset($opt['image']) }}" />
                            @if ($opt['isCorrect'])
                                <img class="h-[3vw] w-[3vw] absolute top-0"
                                    src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" style="right: -33%" />
                            @endif
                        </div>
                    @endforeach
                </div>
                {{-- Answer text displayed once below the images --}}
                <h2 class="text-[2vw] text-[#f7b94a]">{{ $q['answertext'] }}</h2>
            </div>
        </div>
    @endforeach

    {{-- Navigation Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <button id="returnButton"><img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" /></button>
        <button id="homeButton"><img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" /></button>
        <button id="closeButton"><img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" /></button>
    </div>
    <div class="down-btn-container">
        <button class="nextButton"><img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" /></button>
    </div>
    <div class="down-btn-container">
        <button class="doneButton hidden"><img
                src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" /></button>
    </div>
@endsection

@push('script')
    <script>
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const soundBtns = document.querySelectorAll(".sound-btn");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = document.body.dataset.homeRoute;

            let currentSlide = 0;
            let currentAudio = null;
            let cheeringAudio = null;

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
                if (cheeringAudio) {
                    cheeringAudio.pause();
                    cheeringAudio.currentTime = 0;
                    cheeringAudio = null;
                }
            }

            function playSlideAudio(idx) {
                stopCurrentAudio();
                const slide = slides[idx];
                let src = slide.getAttribute('data-slide-audio');
                if (src) {
                    currentAudio = new Audio(src);
                    const shouldCheer = slide.getAttribute('data-cheering') === 'true';
                    if (shouldCheer) {
                        currentAudio.onended = function() {
                            cheeringAudio = new Audio(
                                "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}");
                            cheeringAudio.play().catch(() => {});
                        };
                    }
                    currentAudio.play().catch(() => {});
                }
            }

            function isLastSlide(idx) {
                return idx >= slides.length - 1;
            }

            function showSlide(idx) {
                stopCurrentAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));
                playSlideAudio(idx);

                if (isLastSlide(idx)) {
                    nextButtons.forEach(b => b.classList.add('hidden'));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.remove('hidden'));
                } else {
                    nextButtons.forEach(b => b.classList.remove('hidden'));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.add('hidden'));
                }
            }

            soundBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const src = btn.getAttribute('data-audio');
                    if (src) {
                        stopCurrentAudio();
                        currentAudio = new Audio(src);
                        currentAudio.play().catch(() => {});
                    }
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
                });
            });

            if (returnButton) {
                returnButton.addEventListener('click', () => {
                    if (currentSlide === 0) {
                        stopCurrentAudio();
                        window.location.href = returnURL;
                    } else {
                        showSlide(currentSlide - 1);
                    }
                });
            }

            if (homeButton) {
                homeButton.addEventListener('click', () => {
                    stopCurrentAudio();
                    window.location.href = homeURL;
                });
            }

            document.querySelectorAll('.doneButton').forEach(b => {
                b.addEventListener('click', () => {
                    stopCurrentAudio();
                    window.location.href = doneURL;
                });
            });

            showSlide(0);
        });
    </script>
@endpush
