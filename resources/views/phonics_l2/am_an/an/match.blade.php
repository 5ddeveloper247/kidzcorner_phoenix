@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    // URLS
    $returnURL = '/phonics_l2/am_an/an';
    $doneURL = '/phonics_l2/am_an/an';

    // Questions Data - Super Easy to Edit!
    $questions = [
        [
            'top_image' => 'phonics_l2/agab/grab.png',
            'top_audio' => 'sw_sc/grab.m4a',
            'top_size' => 'w-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/apad/pad.png', 'audio' => 'ap_ad/pad.m4a', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/aman/pan.png', 'audio' => 'am_an/pan.m4a', 'size' => 'w-[6vw]'],
            ],
            'correct_answer' => 1,
            'answer_background' => 'oval-ans',
            'highlight_position' => 1, 

            'word_prefix' => 'p',
            'word_suffix' => 'an',

            'instruction' => 'Find the picture that <br> ends with the <br> /an/ sound.',
        ],
        // 2 - 
        [
            'top_image' => 'phonics_l2/swsc/scooter.png',
            'top_audio' => 'sw_sc/scooter.m4a',
            'top_size' => 'w-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/aman/vam.png', 'audio' => 'am_an/vam.m4a', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/agab/crab.png', 'audio' => 'ag_ab/crab.m4a', 'size' => 'w-[6vw]'],
            ],
            'correct_answer' => 0,
            'answer_background' => 'green',
            'highlight_position' => 0, 

            'word_prefix' => 'v',
            'word_suffix' => 'an',

            'instruction' => 'Find the picture that <br> ends with the <br> /an/ sound.',
        ],

        // 3 - 
        [
            'top_image' => 'phonics_l2/agab/cab.png',
            'top_audio' => 'ag_ab/cab.m4a',
            'top_size' => 'w-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/swsc/scarf.png', 'audio' => 'sw_sc/scarf.m4a', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/aman/fan.png', 'audio' => 'am_an/fan.m4a', 'size' => 'w-[6vw]'],
            ],
            'correct_answer' => 0,
            'answer_background' => 'yellow',
            'highlight_position' => 1, 

            'word_prefix' => 'f',
            'word_suffix' => 'an',

            'instruction' => 'Find the picture that <br> ends with the <br> /an/ sound.',
        ],

        // 4
        [
            'top_image' => 'phonics_l2/aman/can.png',
            'top_audio' => 'am_an/can.m4a',
            'top_size' => 'h-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/spst/spoon.png', 'audio' => 'sp_st/spoon.m4a', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/agab/tab.png', 'audio' => 'ag_ab/tab.m4a', 'size' => 'h-[6vw]'],
            ],
            'correct_answer' => 0,
            'answer_background' => 'oval-ans',
            'highlight_position' => 'top',

            'word_prefix' => 'c',
            'word_suffix' => 'an',

            'instruction' => 'Find the picture that <br> ends with the <br> /an/ sound.',
        ],

        // 5
        [
            'top_image' => 'phonics_l2/aman/man.png',
            'top_audio' => 'am_an/man.m4a',
            'top_size' => 'h-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/apad/dad.png', 'audio' => 'ap_ad/dad.m4a', 'size' => 'h-[6vw]'],
                ['img' => 'phonics_l2/agab/jab.png', 'audio' => 'ag_ab/jab.m4a', 'size' => 'w-[6vw]'],
            ],
            'correct_answer' => 1,
            'answer_background' => 'sea-g',
            'highlight_position' => 'top',

            'word_prefix' => 'm',
            'word_suffix' => 'an',

            'instruction' => 'Find the picture that <br> ends with the <br> /an/ sound.',
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
            font-size: 2vw;
        }

        .box {
            width: 19vw;
            height: 10vw;
            border: 0.15vw solid #F7B94A;
            border-radius: 7px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush

@section('content')

    {{-- Panel 1: Intro --}}
    <div class="phonics-panel" >
        <h2 class="top-title stroke">Match It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to listen to the initial sound when naming each object.</p>
    </div>

    {{-- Auto-generated Question & Answer Panels --}}
    @foreach ($questions as $index => $q)
        {{-- Question Panel --}}
        <div class="phonics-panel flex justify-center items-center gap-[1vw]">
            <div class="flex flex-col justify-center items-center gap-[2vw]">

                {{-- Images Section --}}
                <div class="flex items-center justify-center flex-col">
                    {{-- Top Image --}}
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/common/oval.png') }}" class="w-[12vw]" />
                        <img class="absolute top-1/2 left-1/2 -translate-1/2 {{ $q['top_size'] }}"
                            src="{{ asset('assets/images/' . $q['top_image']) }}">
                        <button class="absolute top-1/2 -translate-1/2 left-[12%] w-[2.5vw]" data-sound-btn
                            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $q['top_audio']) }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>

                    {{-- Bottom Two Images (Clickable) --}}
                    <div class="grid grid-cols-2 gap-[1vw]">
                        @foreach ($q['bottom_images'] as $bottomIndex => $bottom)
                            <div class="relative w-fit h-fit" data-answer-option="{{ $bottomIndex }}">
                                <img src="{{ asset('assets/images/phonics_l2/global/common/oval.png') }}"
                                    class="w-[12vw]" />
                                <img class="absolute top-1/2 left-1/2 -translate-1/2 {{ $bottom['size'] }}"
                                    src="{{ asset('assets/images/' . $bottom['img']) }}">
                                <button class="absolute top-1/2 -translate-1/2 left-[12%] w-[2.5vw]" data-sound-btn
                                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $bottom['audio']) }}">
                                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Word Display --}}
                <div class="flex items-center text-[2.5vw]">
                    <div class="w-[10vw] h-[5vw] text-[#2336B4] text-end px-5"
                        style="background: #AADDFD; border-radius: 1vw;"></div>
                    <h2 class="leading-none text-white">{{ $q['word_suffix'] }}</h2>
                </div>
            </div>

            {{-- Right Side: Instruction Box --}}
            <div class="flex flex-col items-end gap-[1vw]">
                <div class="box">
                    <h2 class="panel-title">{!! $q['instruction'] !!}</h2>
                </div>
                <img src="{{ asset('assets/images/phonics_l2/global/common/thinking.png') }}" class="h-[15vw]" />
            </div>
        </div>

        {{-- Answer Panel (with highlighted correct answer) --}}
        <div class="phonics-panel flex justify-center items-center gap-[2vw]">
            <div class="flex flex-col justify-center items-center gap-[2vw]">

                {{-- Images Section --}}
                <div class="flex items-center justify-center flex-col">
                    {{-- Top Image --}}
                    <div class="relative w-fit h-fit">
                        @if ($q['highlight_position'] === 'top')
                            {{-- Highlighted top image --}}
                            <img src="{{ asset('assets/images/phonics_l2/global/common/' . $q['answer_background'] . '.png') }}"
                                class="w-[12vw]" />
                        @else
                            {{-- Normal top image --}}
                            <img src="{{ asset('assets/images/phonics_l2/global/common/oval.png') }}" class="w-[12vw]" />
                        @endif
                        <img class="absolute top-1/2 left-1/2 -translate-1/2 {{ $q['top_size'] }}"
                            src="{{ asset('assets/images/' . $q['top_image']) }}">
                        <button class="absolute top-1/2 -translate-1/2 left-[12%] w-[2.5vw]" data-sound-btn
                            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $q['top_audio']) }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>

                    {{-- Bottom Two Images (highlighted based on position) --}}
                    <div class="grid grid-cols-2 gap-[1vw]">
                        @foreach ($q['bottom_images'] as $bottomIndex => $bottom)
                            <div class="relative w-fit h-fit">
                                @if ($q['highlight_position'] === $bottomIndex)
                                    {{-- Highlighted bottom image --}}
                                    <img src="{{ asset('assets/images/phonics_l2/global/common/' . $q['answer_background'] . '.png') }}"
                                        class="w-[12vw]" />
                                @else
                                    {{-- Normal bottom image --}}
                                    <img src="{{ asset('assets/images/phonics_l2/global/common/oval.png') }}"
                                        class="w-[12vw]" />
                                @endif

                                <img class="absolute top-1/2 left-1/2 -translate-1/2 {{ $bottom['size'] }}"
                                    src="{{ asset('assets/images/' . $bottom['img']) }}">
                                <button class="absolute top-1/2 -translate-1/2 left-[12%] w-[2.5vw]" data-sound-btn
                                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $bottom['audio']) }}">
                                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Word Display --}}
                <div class="flex items-center text-[2.5vw]">
                    <div class="w-[10vw] h-[5vw] text-[#2336B4] text-end px-5"
                        style="background: #AADDFD; border-radius: 1vw;">
                        {{ $q['word_prefix'] }}
                    </div>
                    <h2 class="leading-none text-white">{{ $q['word_suffix'] }}</h2>
                </div>
            </div>

            {{-- Right Side: Instruction Box --}}
            <div class="flex flex-col items-end gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/global/common/happy.png') }}" class="h-[20vw]" />
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
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const soundButtons = document.querySelectorAll("[data-sound-btn]");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = "{{ url('/phonics/l1') }}";
            const cheeringAudio = "{{ asset('assets/audio/phonics_audio-2/common/cheering.m4a') }}";

            let currentSlide = 0;
            let currentAudio = null;

            // Audio functions
            function stopAudio() {
                if (currentAudio) {
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

            // Show slide
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const isLast = idx === slides.length - 1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));

                setTimeout(() => {
                    playAudio(slides[idx].getAttribute('data-slide-audio'));
                }, 500);
            }

            // Go to next slide
            function goNext() {
                if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
            }

            // Go back
            function goBack() {
                if (currentSlide === 0) {
                    stopAudio();
                    window.location.href = returnURL;
                } else {
                    showSlide(currentSlide - 1);
                }
            }

            // Handle answer option clicks (on question slides)
            const correctAnswers = @json(array_column($questions, 'correct_answer'));

            slides.forEach((slide, slideIdx) => {
                const answerOptions = slide.querySelectorAll('[data-answer-option]');
                if (answerOptions.length === 0) return; // Skip if not a question slide

                // Calculate which question this is (skip intro slide)
                const questionIndex = Math.floor((slideIdx - 1) / 2);
                if (questionIndex < 0 || questionIndex >= correctAnswers.length) return;

                const correctAnswer = correctAnswers[questionIndex];

                answerOptions.forEach((option, optionIdx) => {
                    option.style.cursor = 'pointer';
                    option.addEventListener('click', () => {
                        if (optionIdx === correctAnswer) {
                            // Correct answer clicked - play cheering and go to next
                            playAudio(cheeringAudio, () => goNext());
                        }
                    });
                });
            });

            // Sound buttons
            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

            // Navigation buttons
            nextButtons.forEach(b => b.addEventListener('click', goNext));
            returnButton?.addEventListener('click', goBack);
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

            showSlide(0);
        });
    </script>
@endpush
