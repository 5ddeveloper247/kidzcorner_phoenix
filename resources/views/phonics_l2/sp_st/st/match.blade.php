@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $box = [
        'label' => 'sc',
        'audio' => 'assets/audio/phonics_audio-2/sw_sc/scah.m4a',
    ];

    $questions = [
        [
            [
                'image' => 'assets/images/phonics_l2/swsc/scarf.png',
                'audio' => 'assets/audio/phonics_audio-2/sw_sc/scarf.m4a',
                'correct' => false,
                'size' => 'h-[7vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/spst/stork.png',
                'audio' => 'assets/audio/phonics_audio-2/sp_st/stork.m4a',
                'correct' => true,
                'size' => 'h-[6vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/clsl/slow.png',
                'audio' => 'assets/audio/phonics_audio-2/cl_sl/slow.m4a',
                'correct' => false,
                'size' => 'w-[6vw]',
            ],
        ],
        [
            [
                'image' => 'assets/images/phonics_l2/swsc/switch.png',
                'audio' => 'assets/audio/phonics_audio-2/sw_sc/switch.m4a',
                'correct' => false,
                'size' => 'w-[6vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/swsc/scooter.png',
                'audio' => 'assets/audio/phonics_audio-2/sw_sc/scooter.m4a',
                'correct' => false,
                'size' => 'w-[7vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/spst/stamp.png',
                'audio' => 'assets/audio/phonics_audio-2/sp_st/stamp.m4a',
                'correct' => true,
                'size' => 'h-[6vw]',
            ],
        ],
        [
            [
                'image' => 'assets/images/phonics_l2/swsc/sweep.png',
                'audio' => 'assets/audio/phonics_audio-2/sw_sc/sweep.m4a',
                'correct' => false,
                'size' => 'w-[8vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/spst/stop.png',
                'audio' => 'assets/audio/phonics_audio-2/sp_st/stop.m4a',
                'correct' => true,
                'size' => 'h-[8vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/swsc/scared.png',
                'audio' => 'assets/audio/phonics_audio-2/sw_sc/scared.m4a',
                'correct' => false,
                'size' => 'h-[7vw]',
            ],
        ],
        [
            [
                'image' => 'assets/images/phonics_l2/spst/star.png',
                'audio' => 'assets/audio/phonics_audio-2/sp_st/star.m4a',
                'correct' => true,
                'size' => 'w-[8vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/swsc/sweet.png',
                'audio' => 'assets/audio/phonics_audio-2/sw_sc/sweet.m4a',
                'correct' => false,
                'size' => 'w-[7vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/brpr/present.png',
                'audio' => 'assets/audio/phonics_audio-2/br_pr/present.m4a',
                'correct' => false,
                'size' => 'w-[7vw]',
            ],
        ],
        [
            [
                'image' => 'assets/images/phonics_l2/spst/spin.png',
                'audio' => 'assets/audio/phonics_audio-2/sp_st/spin.m4a',
                'correct' => false,
                'size' => 'h-[7vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/swsc/scout.png',
                'audio' => 'assets/audio/phonics_audio-2/sw_sc/scout.m4a',
                'correct' => false,
                'size' => 'h-[7vw]',
            ],
            [
                'image' => 'assets/images/phonics_l2/spst/stairs.png',
                'audio' => 'assets/audio/phonics_audio-2/sp_st/stairs.m4a',
                'correct' => true,
                'size' => 'w-[7vw]',
            ],
        ],
    ];
    // ============================================================
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
            width: 300px;
            height: 12vw;
            border: 2px solid #F7B94A;
            border-radius: 7px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush


@section('content')

    {{-- Panel 1 – Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-it.m4a') }}">
        <h2 class="top-title stroke">Match It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'sl' sound. <br>
            Remind them to listen to the initial sound when naming each object.</p>
    </div>


    {{-- ✅ Auto-generated Question + Answer panels from $questions above --}}
    @foreach ($questions as $q)
        @php $correct = collect($q)->firstWhere('correct', true); @endphp

        {{-- Question Panel --}}
        <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-box.m4a') }}">

            <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>

            <div class="flex">
                @foreach ($q as $choice)
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                        <img class="absolute top-1/2 left-1/2 -translate-1/2 {{ $choice['size'] }}"
                            src="{{ asset($choice['image']) }}" />
                        <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                            data-slide-audio="{{ asset($choice['audio']) }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>
                @endforeach
            </div>

            <div class="box">
                <h2 class="panel-title absolute top-0 right-0 px-[1vw]">{{ $box['label'] }}</h2>
                <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset($box['audio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        {{-- Answer Panel --}}
        <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw]! items-center"
            data-slide-audio="{{ asset($correct['audio']) }}">

            <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>

            <div class="flex">
                @foreach ($q as $choice)
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                        {{-- Correct answer is hidden from cards (shown in box below), wrong ones stay visible --}}
                        <img class="absolute top-1/2 left-1/2 -translate-1/2 {{ $choice['size'] }} {{ $choice['correct'] ? 'opacity-0' : '' }}"
                            src="{{ asset($choice['image']) }}" />
                    </div>
                @endforeach
            </div>

            <div class="box">
                <h2 class="panel-title absolute top-0 right-0 px-[1vw]">{{ $box['label'] }}</h2>
                {{-- Correct answer revealed inside the box --}}
                <img class="absolute top-1/2 left-1/2 -translate-1/2 {{ $correct['size'] }}"
                    src="{{ asset($correct['image']) }}" />
            </div>
        </div>
    @endforeach


    {{-- Buttons --}}
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
        // Navigation URLs
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";
        const returnURL = "{{ url('/phonics_l2/sp_st/st') }}";
        const doneURL = "{{ url('/phonics_l2/sp_st/st') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            let currentSlide = 0;
            let currentAudio = null;
            let cheeringAudio = null;

            // ── Audio helpers ──────────────────────────────────────
            function stopAudio() {
                [currentAudio, cheeringAudio].forEach(a => {
                    if (a) {
                        a.onended = null;
                        a.pause();
                        a.currentTime = 0;
                    }
                });
                currentAudio = cheeringAudio = null;
            }

            function playAudio(src, onEnd) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(() => {});
            }

            // ── Slide logic ────────────────────────────────────────
            function showSlide(idx) {
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const slide = slides[idx];
                const isAnswer = slide.classList.contains('answer');
                const src = slide.getAttribute('data-slide-audio');
                const isLast = idx >= slides.length - 1;

                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));

                playAudio(src, isAnswer ? () => {
                    cheeringAudio = new Audio(
                        "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}");
                    cheeringAudio.play().catch(() => {});
                } : null);
            }

            // ── Event listeners ────────────────────────────────────
            nextButtons.forEach(b => b.addEventListener('click', () => {
                if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
            }));

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

            soundButtons.forEach(b => b.addEventListener('click', e => {
                e.stopPropagation();
                playAudio(b.getAttribute('data-slide-audio'));
            }));

            returnButton?.addEventListener('click', () => {
                currentSlide === 0 ? (stopAudio(), window.location.href = returnURL) : showSlide(
                    currentSlide - 1);
            });

            homeButton?.addEventListener('click', () => {
                stopAudio();
                window.location.href = document.body.dataset.homeRoute;
            });

            showSlide(0);
        });
    </script>
@endpush
