@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

  
    $blend = 'sp';

    $introAudio = 'assets/audio/phonics_audio-2/bl_pl/wordplay.m4a';
    $tip = 'Tips: Encourage children to try blending the word parts together to make a whole word.';

    $words = [
        [
            'ending' => 'ots',
            'image' => 'assets/images/phonics_l2/spst/spots.png',
            'size' => 'w-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/sp_st/sp-ots.m4a',
        ],
        [
            'ending' => 'ill',
            'image' => 'assets/images/phonics_l2/spst/spill.png',
            'size' => 'w-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/sp_st/sp-ill.m4a',
        ],
        [
            'ending' => 'in',
            'image' => 'assets/images/phonics_l2/spst/spin.png',
            'size' => 'h-[17vw]',
            'audio' => 'assets/audio/phonics_audio-2/sp_st/sp-in.m4a',
        ],
        [
            'ending' => 'oon',
            'image' => 'assets/images/phonics_l2/spst/spoon.png',
            'size' => 'w-[17vw]',
            'audio' => 'assets/audio/phonics_audio-2/sp_st/sp-oon.m4a',
        ],
    ];

    // URLs for navigation buttons
    $returnURL = '/phonics_l2/sp_st/sp';
    $doneURL = '/phonics_l2/sp_st/sp';
    $homeURL = '/phonics/l2';

@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .large-title {
            color: #F7B94A;
            font-size: 4vw !important;
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

    {{-- Panel 1: Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset($introAudio) }}">
        <h2 class="top-title stroke">Word Play</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/word.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>


    {{-- Panel 2: Question — shows blend + blank + all endings as choices --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full">
        <div class="flex items-end justify-around w-full">

            {{-- Left: blend + empty box --}}
            <div class="flex items-end gap-[.5vw]">
                <h2 class="large-title">{{ $blend }}</h2>
                <div class="options"></div>
            </div>

            {{-- Right: list of all endings to choose from --}}
            <div class="space-y-[1vw]">
                @foreach ($words as $word)
                    <div class="options">{{ $word['ending'] }}</div>
                @endforeach
            </div>

        </div>
        <p class="p-note">{{ $tip }}</p>
    </div>


    {{-- Panels 3+: One panel per word, auto-generated --}}
    @foreach ($words as $i => $word)
        <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
            data-slide-audio="{{ asset($word['audio']) }}">

            <div class="flex items-end justify-around w-full">

                {{-- Left: image + full word label --}}
                <div class="flex flex-col items-center gap-[1vw]">
                    <img src="{{ asset($word['image']) }}" class="{{ $word['size'] }}" />
                    <div class="options text-[#f7b94a]! text-[3vw]!">{{ $blend }}{{ $word['ending'] }}</div>
                </div>

                {{-- Right: endings list — current word's ending is hidden --}}
                <div class="space-y-[1vw]">
                    @foreach ($words as $j => $other)
                        <div class="options {{ $i === $j ? 'opacity-0!' : '' }}">
                            {{ $other['ending'] }}
                        </div>
                    @endforeach
                </div>

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

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = "{{ url($homeURL) }}";

            let currentSlide = 0;
            let currentAudio = null;

            function stopAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function showSlide(index) {
                slides.forEach((slide, i) => slide.classList.toggle("hidden", i !== index));

                stopAudio();
                const src = slides[index].getAttribute('data-slide-audio');
                if (src) {
                    currentAudio = new Audio(src);
                    currentAudio.play().catch(() => {});
                }

                const isLast = index === slides.length - 1;
                nextButtons.forEach(btn => btn.classList.toggle("hidden", isLast));
                doneButtons.forEach(btn => btn.classList.toggle("hidden", !isLast));
            }

            nextButtons.forEach(btn => btn.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) showSlide(++currentSlide);
            }));

            returnButton?.addEventListener("click", () => {
                if (currentSlide === 0) {
                    stopAudio();
                    window.location.href = returnURL;
                } else {
                    showSlide(--currentSlide);
                }
            });

            homeButton?.addEventListener("click", () => {
                stopAudio();
                window.location.href = homeURL;
            });

            doneButtons.forEach(btn => btn.addEventListener("click", () => {
                stopAudio();
                window.location.href = doneURL;
            }));

            showSlide(0);
        });
    </script>
@endpush
