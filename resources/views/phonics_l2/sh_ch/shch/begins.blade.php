@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $rounds = [
        // ── Round 1 ──
        [
            'sound' => 'sh',
            'word' => 'shower',
            'questionAudio' => 'assets/audio/phonics_audio-2/sh_ch/begins-with.mp3',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_ch/sh-ower.mp3',
            'choices' => [
                [
                    'image' => 'assets/images/phonics_l2/shch/shower.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/shower.mp3',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/spst/spill.png',
                    'audio' => 'assets/audio/phonics_audio-2/sp_st/spill.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/spst/star.png',
                    'audio' => 'assets/audio/phonics_audio-2/sp_st/star.mp3',
                    'correct' => false,
                ],
            ],
        ],

        // ── Round 2 ──
        [
            'sound' => 'ch',
            'word' => 'chop',
            'questionAudio' => 'assets/audio/phonics_audio-2/common/begins-with-ch.mp3',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_ch/ch-op.mp3',
            'choices' => [
                [
                    'image' => 'assets/images/phonics_l2/sksn/skip.png',
                    'audio' => 'assets/audio/phonics_audio-2/sk_sn/skip.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/chop.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chop.mp3',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/sksn/snap.png',
                    'audio' => 'assets/audio/phonics_audio-2/sk_sn/snaps.mp3',
                    'correct' => false,
                ],
            ],
        ],

        // ── Round 3 ──
        [
            'sound' => 'sh',
            'word' => 'shark',
            'questionAudio' => 'assets/audio/phonics_audio-2/common/begins-with.mp3',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_ch/sh-ark.mp3',
            'choices' => [
                [
                    'image' => 'assets/images/phonics_l2/spst/spider.png',
                    'audio' => 'assets/audio/phonics_audio-2/sp_st/spider.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/chair.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chair.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/shark.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/shark.mp3',
                    'correct' => true,
                ],
            ],
        ],

        // ── Round 4 ──
        [
            'sound' => 'ch',
            'word' => 'chocolate',
            'questionAudio' => 'assets/audio/phonics_audio-2/common/begins-with-ch.mp3',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_ch/ch-ocolate.mp3',
            'choices' => [
                [
                    'image' => 'assets/images/phonics_l2/shch/shirt.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/shirt.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/chocolate.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/chocolate.mp3',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/swsc/scar.png',
                    'audio' => 'assets/audio/phonics_audio-2/sw_sc/scar.mp3',
                    'correct' => false,
                ],
            ],
        ],

        // ── Round 5 ──
        [
            'sound' => 'sh',
            'word' => 'sheep',
            'questionAudio' => 'assets/audio/phonics_audio-2/common/begins-with.mp3',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_ch/sh-eep.mp3',
            'choices' => [
                [
                    'image' => 'assets/images/phonics_l2/swsc/sweet.png',
                    'audio' => 'assets/audio/phonics_audio-2/sw_sc/sweet.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/clsl/sleep.png',
                    'audio' => 'assets/audio/phonics_audio-2/cl_sl/sleep.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/sheep.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/sheep.mp3',
                    'correct' => true,
                ],
            ],
        ],

        // ── Round 6 ──
        [
            'sound' => 'ch',
            'word' => 'cherries',
            'questionAudio' => 'assets/audio/phonics_audio-2/common/begins-with-ch.mp3',
            'answerAudio' => 'assets/audio/phonics_audio-2/sh_ch/ch-erries.mp3',
            'choices' => [
                [
                    'image' => 'assets/images/phonics_l2/clsl/clock.png',
                    'audio' => 'assets/audio/phonics_audio-2/cl_sl/clock.mp3',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/shch/cherries.png',
                    'audio' => 'assets/audio/phonics_audio-2/sh_ch/cherries.mp3',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/frcr/fruits.png',
                    'audio' => 'assets/audio/phonics_audio-2/fr_cr/fruits.mp3',
                    'correct' => false,
                    'size' => 'w-[9vw]',
                ],
            ],
        ],
    ];

    $infoTips = [
        'The ability to understand that words are made up of sounds is an important beginning reading skill.',
        'Language and word games can help children develop the ability to listen for sounds in spoken words.',
        'This simple listening game helps children develop their ability to listen for and identify initial sounds.',
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

        .title-top {
            font-size: 1.75vw !important;
            color: #F7B94A;
        }

        .box {
            width: 12vw;
            height: 12vw;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background: url('{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}') no-repeat center;
            background-size: contain;
            position: relative;
        }

        .box span {
            color: #A15E0D;
            font-size: 2.5vw;
        }

        .sbtn {
            position: absolute;
            top: 15%;
            left: 8%;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.mp3') }}">
        <h2 class="top-title stroke">It Begins With</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>

        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            @foreach ($infoTips as $tip)
                <li>{{ $tip }}</li>
            @endforeach
        </ul>
    </div>


    {{-- ── Question + Answer panels, generated from $rounds ── --}}
    @foreach ($rounds as $round)
        @php
            $title = "Find the picture that begins with the ‘{$round['sound']}’ sound.";
            // Part of the word after the target sound, e.g. "shower" -> "ower"
            $ending = substr($round['word'], strlen($round['sound']));
        @endphp

        {{-- Question panel --}}
        <div class="phonics-panel h-full" data-slide-audio="{{ asset($round['questionAudio']) }}">
            <h2 class="title-top stroke">{{ $title }}</h2>

            <div class="flex flex-col justify-around h-full space-y-[1vw]">
                <div class="flex items-center gap-[1.5vw]">
                    @foreach ($round['choices'] as $choice)
                        <div class="box">
                            <button class="w-[2.5vw] sbtn" id="soundButton"
                                data-slide-audio="{{ asset($choice['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <img src="{{ asset($choice['image']) }}" class="{{ $choice['size'] ?? 'h-[6vw]' }}" />
                        </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-center gap-4">
                    <span class="text-[3.5vw] text-[#f7b94a]">{{ $round['sound'] }}</span>
                    <span class="text-[3.5vw] text-white opacity-0">{{ $ending }}</span>
                </div>
            </div>
        </div>

        {{-- Answer panel (answer sound, then cheering) --}}
        <div class="phonics-panel h-full" data-cheer data-slide-audio="{{ asset($round['answerAudio']) }}">
            <h2 class="title-top stroke">{{ $title }}</h2>

            <div class="flex flex-col justify-around h-full space-y-[1vw]">
                <div class="flex items-start gap-[1.5vw]">
                    @foreach ($round['choices'] as $choice)
                        @if ($choice['correct'])
                            {{-- Correct picture gets the tick --}}
                            <div class="flex flex-col items-center justify-center">
                                <div class="box">
                                    <img src="{{ asset($choice['image']) }}" class="h-[6vw]" />
                                </div>
                                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[6vw]" />
                            </div>
                        @else
                            <div class="box">
                                <img src="{{ asset($choice['image']) }}" class="{{ $choice['size'] ?? 'h-[6vw]' }}" />
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="flex items-center justify-center gap-4">
                    <span class="text-[3.5vw] text-[#f7b94a]">{{ $round['sound'] }}</span>
                    <span class="text-[3.5vw] text-white">{{ $ending }}</span>
                </div>
            </div>
        </div>
    @endforeach


    {{-- ======================================================== --}}
    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- return Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    {{-- Next and Done Buttons --}}
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

            /* ── DOM ── */
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/sh_ch/shch') }}";
            const doneURL = "{{ url('/phonics_l2/sh_ch/shch') }}";
            const homeURL = document.body.dataset.homeRoute;

            const CHEERING_AUDIO = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            /* ── Audio ── */
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null; // cancels any pending cheering
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playAudio(src, onEnd) {
                stopAudio();
                if (!src) return;
                const audio = new Audio(src);
                currentAudio = audio;
                if (onEnd) {
                    audio.onended = () => {
                        if (currentAudio !== audio) return; // slide changed meanwhile
                        onEnd();
                    };
                }
                audio.play().catch(() => {});
            }

            function playSlideAudio(idx) {
                const slide = slides[idx];
                const src = slide.getAttribute('data-slide-audio') ||
                    slide.querySelector('[data-slide-audio]')?.getAttribute('data-slide-audio');

                // Answer panel (data-cheer): answer sound first, then the cheering sound
                playAudio(src, slide.hasAttribute('data-cheer') ? () => playAudio(CHEERING_AUDIO) : null);
            }

            /* ── Slides ── */
            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            function isLastSlide(idx) {
                if (isInSpecialMode) {
                    for (let i = idx + 1; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) return false;
                    }
                    return true;
                }
                for (let i = idx + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) return false;
                }
                return true;
            }

            function updateNavButtons(idx) {
                const last = isLastSlide(idx);
                nextButtons.forEach(b => b.classList.toggle('hidden', last));
                document.querySelectorAll('.doneButton').forEach(b => b.classList.toggle('hidden', !last));
            }

            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));
                updateNavButtons(idx);
                playSlideAudio(idx);
            }

            /* ── Sound buttons ── */
            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

            /* ── Navigation ── */
            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    if (isInSpecialMode ?
                        slides[next].classList.contains(specialSlideClass) :
                        !isSpecialSlide(slides[next])) break;
                    next++;
                }
                if (next < slides.length) showSlide(next);
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopAudio();
                    window.location.href = returnURL;
                    return;
                }
                if (isInSpecialMode) {
                    let prev = currentSlide - 1;
                    while (prev >= 0 && !slides[prev].classList.contains(specialSlideClass)) prev--;
                    if (prev >= 0) {
                        showSlide(prev);
                    } else {
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    }
                } else {
                    let prev = currentSlide - 1;
                    while (prev > 0 && isSpecialSlide(slides[prev])) prev--;
                    showSlide(prev);
                }
            }

            /* ── Info buttons ── */
            infoButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = Array.from(btn.classList)
                        .find(c => c.startsWith('info-btn'))
                        ?.replace('info-btn', 'info-panel-');
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            showSlide(i);
                            break;
                        }
                    }
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

                if (isInSpecialMode) {
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    showSlide(returnToSlide);
                    returnToSlide = null;
                } else {
                    window.location.href = doneURL;
                }
            }));

            showSlide(0);
        });
    </script>
@endpush
