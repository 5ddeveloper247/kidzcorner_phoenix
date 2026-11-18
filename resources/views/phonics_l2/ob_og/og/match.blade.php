@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    // URLS
    $returnURL = '/phonics_l2/ob_og/og';
    $doneURL = '/phonics_l2/ob_og/og';

    $questions = [
        [
            'top_image' => 'phonics_l2/agab/grab.png',
            'top_audio' => 'sw_sc/grab.mp3',
            'top_size' => 'w-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/edet/pet.png', 'audio' => 'ed_et/pet.mp3', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/obog/frog.png', 'audio' => 'ob_og/frog.mp3', 'size' => 'w-[6vw]'],
            ],
            'correct_answer' => 1,
            'answer_audio' => 'ob_og/mi-frog.mp3',
            'answer_background' => 'oval-ans',
            'highlight_position' => 1,

            'word_prefix' => 'fr',
            'word_suffix' => 'og',

            'instruction' => 'Find the picture that <br> ends with the <br> /og/ sound.',
        ],
        // 2 -
        [
            'top_image' => 'phonics_l2/swsc/scooter.png',
            'top_audio' => 'sw_sc/scooter.mp3',
            'top_size' => 'w-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/obog/jog.png', 'audio' => 'ob_og/jog.mp3', 'size' => 'h-[6vw]'],
                ['img' => 'phonics_l2/edet/net.png', 'audio' => 'ed_et/net.mp3', 'size' => 'h-[6vw]'],
            ],
            'correct_answer' => 0,
            'answer_audio' => 'ob_og/mi-jog.mp3',
            'answer_background' => 'green',
            'highlight_position' => 0,

            'word_prefix' => 'j',
            'word_suffix' => 'og',

            'instruction' => 'Find the picture that <br> ends with the <br> /og/ sound.',
        ],

        // 3 -
        [
            'top_image' => 'phonics_l2/agab/cab.png',
            'top_audio' => 'ag_ab/cab.mp3',
            'top_size' => 'w-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/edet/jet.png', 'audio' => 'ed_et/jet.mp3', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/obog/log.png', 'audio' => 'ob_og/log.mp3', 'size' => 'w-[6vw]'],
            ],
            'correct_answer' => 0,
            'answer_audio' => 'ob_og/mi-log.mp3',
            'answer_background' => 'yellow',
            'highlight_position' => 1,

            'word_prefix' => 'l',
            'word_suffix' => 'og',

            'instruction' => 'Find the picture that <br> ends with the <br> /og/ sound.',
        ],

        // 4
        [
            'top_image' => 'phonics_l2/obog/dog.png',
            'top_audio' => 'ob_og/dog.mp3',
            'top_size' => 'h-[6vw]',

            'bottom_images' => [
                ['img' => 'phonics_l2/spst/spoon.png', 'audio' => 'sp_st/spoon.mp3', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/agab/tab.png', 'audio' => 'ag_ab/tab.mp3', 'size' => 'h-[6vw]'],
            ],
            'correct_answer' => 0,
            'answer_audio' => 'ob_og/mi-dog.mp3',
            'answer_background' => 'oval-ans',
            'highlight_position' => 'top',

            'word_prefix' => 'd',
            'word_suffix' => 'og',

            'instruction' => 'Find the picture that <br> ends with the <br> /og/ sound.',
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
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-it.mp3') }}">
        <h2 class="top-title stroke">Match It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to listen to the initial sound when naming each object.</p>
    </div>


    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ob_og/match-og.mp3') }}">
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-[#A15E0D] text-[2vw] text-center w-100">
                    Let's find the <br>
                    pictures that end <br>
                    with '<span class="text-[#70af39]">og</span>'!
                </h2>
            </div>
        </div>
        <p class="p-note">Tips: Children to name the picture first. <br>
            Encourage them to identify each of the initial target sound made by each word.</p>
    </div>


    {{-- Auto-generated Question & Answer Panels --}}
    @foreach ($questions as $index => $q)
        {{-- Question Panel (data-correct = index of the right bottom picture) --}}
        <div class="phonics-panel flex justify-center items-center gap-[1vw]" data-correct="{{ $q['correct_answer'] }}"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ob_og/match-box.mp3') }}">
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

        {{-- Answer Panel: plays its OWN answer sound ('answer_audio'), no cheering --}}
        <div class="phonics-panel flex justify-center items-center gap-[2vw]"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $q['answer_audio']) }}">
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

            {{-- Right Side --}}
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

            let currentSlide = 0;
            let currentAudio = null;
            let audioTimer = null;

            // Audio functions
            function stopAudio() {
                clearTimeout(audioTimer); // cancels a pending delayed slide audio
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playAudio(src) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                currentAudio.play().catch(() => {});
            }

            // Show slide (plays the slide's own audio after a short delay)
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const isLast = idx === slides.length - 1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));

                audioTimer = setTimeout(() => {
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

            // Question slides: clicking the correct picture opens the answer slide,
            // which plays its own answer sound.
            slides.forEach(slide => {
                if (slide.dataset.correct === undefined) return; // not a question slide
                const correctAnswer = parseInt(slide.dataset.correct, 10);

                slide.querySelectorAll('[data-answer-option]').forEach(option => {
                    option.style.cursor = 'pointer';
                    option.addEventListener('click', () => {
                        if (parseInt(option.dataset.answerOption, 10) === correctAnswer)
                            goNext();
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
                stopAudio();
                window.location.href = doneURL;
            }));

            showSlide(0);
        });
    </script>
@endpush
