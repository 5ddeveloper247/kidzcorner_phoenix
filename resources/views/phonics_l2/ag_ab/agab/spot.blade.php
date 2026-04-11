@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $targetSound = 'ad';
    $targetSoundAudio = asset('assets/audio/phonics_audio-2/ag_ab/apah.m4a');

    $slidesData = [
        // Slide 1: Introduction
        [
            'type' => 'intro',
            'title' => 'Spot It',
            'audio' => asset('assets/audio/phonics_audio-2/common/spot-it.m4a'),
            'hasBackground' => true,
        ],

        // Slide 2: Question with options
        [
            'type' => 'question',
            'audio' => asset('assets/audio/phonics_audio-2/ag_ab/spot-agah.m4a'),
            'frogPosition' => 'top',
            'rowPosition' => '35%',
            'options' => [
                ['text' => 'ag', 'audio' => asset('assets/audio/phonics_audio-2/ag_ab/agah.m4a'), 'isAnswer' => true],
                ['text' => 'st', 'audio' => asset('assets/audio/phonics_audio-2/sp_st/stah.m4a'), 'isAnswer' => false],
                ['text' => 'sp', 'audio' => asset('assets/audio/phonics_audio-2/sp_st/spah.m4a'), 'isAnswer' => false],
                ['text' => 'sl', 'audio' => asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a'), 'isAnswer' => false],
            ],
        ],

        // Slide 3: Answer
        [
            'type' => 'answer',
            'frogPosition' => 'on-pad',
            'frogPadIndex' => 0,
            'rowPosition' => '35%',
            'options' => [['text' => 'ag'], ['text' => 'st'], ['text' => 'sp'], ['text' => 'sl']],
        ],

        // Slide 4: Question
        [
            'type' => 'question',
            'audio' => asset('assets/audio/phonics_audio-2/ag_ab/spot-abah.m4a'),
            'frogPosition' => 'top',
            'rowPosition' => '35%',
            'layout' => 'with-bottom    ',
            'options' => [
                [
                    'text' => 'sw',
                    'audio' => asset('assets/audio/phonics_audio-2/sw_sc/swah.m4a'),
                    'isAnswer' => false,
                    'position' => 'bottom',
                ],
                ['text' => 'cl', 'audio' => asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a'), 'isAnswer' => false],
                ['text' => 'ab', 'audio' => asset('assets/audio/phonics_audio-2/ag_ab/abah.m4a'), 'isAnswer' => true],
                ['text' => 'sl', 'audio' => asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a'), 'isAnswer' => false],
            ],
        ],

        // Slide 5: Answer
        [
            'type' => 'answer',
            'frogPosition' => 'on-pad',
            'frogPadIndex' => 2,
            'rowPosition' => '45%',
            'options' => [['text' => 'sw'], ['text' => 'cl'], ['text' => 'ab'], ['text' => 'sl']],
        ],

        // Slide 6: Question
        [
            'type' => 'question',
            'audio' => asset('assets/audio/phonics_audio-2/ag_ab/spot-agah.m4a'),
            'frogPosition' => 'top',
            'rowPosition' => '45%',
            'layout' => 'with-bottom',
            'options' => [
                ['text' => 'sn', 'audio' => asset('assets/audio/phonics_audio-2/sk_sn/snah.m4a'), 'isAnswer' => false],
                ['text' => 'ag', 'audio' => asset('assets/audio/phonics_audio-2/ag_ab/agah.m4a'), 'isAnswer' => true],
                [
                    'text' => 'sm',
                    'audio' => asset('assets/audio/phonics_audio-2/sm_rev/smah.m4a'),
                    'isAnswer' => false,
                    'position' => 'bottom',
                ],
                ['text' => 'ch', 'audio' => asset('assets/audio/phonics_audio-2/sh_ch/chah.m4a'), 'isAnswer' => false],
            ],
        ],

        // Slide 7: Answer
        [
            'type' => 'answer',
            'frogPosition' => 'on-pad',
            'frogPadIndex' => 1,
            'rowPosition' => '55%',
            'options' => [['text' => 'sn'], ['text' => 'ag'], ['text' => 'sm'], ['text' => 'ch']],
        ],

        // Slide 8: Question
        [
            'type' => 'question',
            'audio' => asset('assets/audio/phonics_audio-2/ag_ab/spot-abah.m4a'),
            'frogPosition' => 'top',
            'rowPosition' => '55%',
            'layout' => 'with-bottom',
            'options' => [
                ['text' => 'ab', 'audio' => asset('assets/audio/phonics_audio-2/ag_ab/abah.m4a'), 'isAnswer' => true],
                [
                    'text' => 'cr',
                    'audio' => asset('assets/audio/phonics_audio-2/fr_cr/crah.m4a'),
                    'isAnswer' => false,
                    'position' => 'bottom',
                ],
                ['text' => 'fl', 'audio' => asset('assets/audio/phonics_audio-2/fl_gl/flah.m4a'), 'isAnswer' => false],
                ['text' => 'cl', 'audio' => asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a'), 'isAnswer' => false],
            ],
        ],

        // Slide 9: Answer
        [
            'type' => 'answer',
            'frogPosition' => 'on-pad',
            'frogPadIndex' => 0,
            'rowPosition' => '60%',
            'options' => [['text' => 'ab'], ['text' => 'cr'], ['text' => 'fl'], ['text' => 'cl']],
        ],

        // Slide 10: Question
        [
            'type' => 'question',
            'audio' => asset('assets/audio/phonics_audio-2/ag_ab/spot-agah.m4a'),
            'frogPosition' => 'top',
            'rowPosition' => '70%',
            'layout' => 'with-bottom',
            'options' => [
                [
                    'text' => 'st',
                    'audio' => asset('assets/audio/phonics_audio-2/sp_st/stah.m4a'),
                    'isAnswer' => false,
                    'position' => 'bottom',
                ],
                ['text' => 'ag', 'audio' => asset('assets/audio/phonics_audio-2/ag_ab/agah.m4a'), 'isAnswer' => true],
                ['text' => 'sl', 'audio' => asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a'), 'isAnswer' => false],
                ['text' => 'tr', 'audio' => asset('assets/audio/phonics_audio-2/sp_st/stah.m4a'), 'isAnswer' => false],
            ],
        ],

        // Slide 11: Answer
        [
            'type' => 'answer',
            'frogPosition' => 'on-pad',
            'frogPadIndex' => 1,
            'rowPosition' => '74%',
            'options' => [['text' => 'st'], ['text' => 'ag'], ['text' => 'sl'], ['text' => 'tr']],
        ],

        // Slide 12: Wood pads question
        [
            'type' => 'question-wood',
            'audio' => asset('assets/audio/phonics_audio-2/ag_ab/spot-abah.m4a'),
            'frogPosition' => 'single-top',
            'frogPadText' => 'ag',
            'options' => [
                ['text' => 'st', 'audio' => asset('assets/audio/phonics_audio-2/sp_st/stah.m4a'), 'isAnswer' => false],
                ['text' => 'sl', 'audio' => asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a'), 'isAnswer' => false],
                ['text' => 'ab', 'audio' => asset('assets/audio/phonics_audio-2/ag_ab/abah.m4a'), 'isAnswer' => true],
                ['text' => 'tr', 'audio' => asset('assets/audio/phonics_audio-2/tr_rev/trah.m4a'), 'isAnswer' => false],
            ],
        ],

        // Slide 13: Final answer wood
        [
            'type' => 'answer-wood',
            'frogPadText' => 'ab',
        ],
    ];

    // Info panel tips
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
            font-size: 2vw !important;
            position: absolute;
            top: -3%;
            left: 50%;
            color: #F7B94A;
            z-index: 100;
        }

        .pad {
            width: 10vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .answer {
            cursor: pointer;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')

    {{-- Slide 1: Introduction Panel --}}
    <div class="phonics-panel" data-slide-audio="{{ $slidesData[0]['audio'] }}">
        <h2 class="top-title stroke">{{ $slidesData[0]['title'] }}</h2>
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

    {{-- Dynamic Slides from Data --}}
    @foreach ($slidesData as $index => $slide)
        @if ($index === 0)
            @continue
        @endif {{-- Skip intro slide, already rendered --}}

        @if ($slide['type'] === 'question')
            {{-- Question Slide --}}
            <div class="phonics-panel no-bg" data-slide-audio="{{ $slide['audio'] }}">
                <div class="title-top stroke -translate-1/2">
                    Help the frog get to the other side.
                    Find the <span> <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ $targetSoundAudio }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button> </span> sound.
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/images/phonics_l2/global/common/frogbg.png') }}" class="h-[33vw] w-[74vw]" />
                    @if ($slide['frogPosition'] === 'top' && $index === 1)
                        <img src="{{ asset('assets/images/phonics_l2/global/common/frog.png') }}"
                            class="w-[4vw] absolute top-[8%] left-1/2 -translate-1/2" />
                    @endif
                    <div class="flex items-{{ isset($slide['layout']) && $slide['layout'] === 'with-bottom' ? 'end' : 'center' }} gap-[1vw] absolute left-1/2 -translate-1/2"
                        style="top: {{ $slide['rowPosition'] }}">
                        @foreach ($slide['options'] as $optIndex => $option)
                            @if (isset($option['position']) && $option['position'] === 'bottom')
                                <div class="flex flex-col items-center justify-center">
                                    <div class="relative w-fit h-fit ml-[3vw]">
                                        <img src="{{ asset('assets/images/phonics_l2/global/common/pad.png') }}"
                                            class="w-[7vw]">
                                        <img src="{{ asset('assets/images/phonics_l2/global/common/frog.png') }}"
                                            class="w-[4vw] absolute bottom-[40%] left-1/2 -translate-x-1/2 z-10" />
                                    </div>
                                    <div class="pad">
                                        <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ $option['audio'] }}">
                                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                        </button>
                                        <div class="relative w-fit h-fit">
                                            <img src="{{ asset('assets/images/phonics_l2/global/common/pad.png') }}"
                                                class="w-[7vw]">
                                            <span
                                                class="absolute top-[40%] left-1/2 text-white text-[2vw] -translate-1/2">{{ $option['text'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="pad {{ $option['isAnswer'] ? 'answer' : '' }}">
                                    <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ $option['audio'] }}">
                                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                    </button>
                                    <div class="relative w-fit h-fit">
                                        <img src="{{ asset('assets/images/phonics_l2/global/common/pad.png') }}"
                                            class="w-[7vw]">
                                        <span
                                            class="absolute top-[40%] left-1/2 text-white text-[2vw] -translate-1/2">{{ $option['text'] }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @elseif($slide['type'] === 'answer')
            {{-- Answer Slide --}}
            <div class="phonics-panel no-bg">
                <div class="title-top stroke -translate-1/2">
                    Help the frog get to the other side.
                    Find the <span> <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ $targetSoundAudio }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button> </span> sound.
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/images/phonics_l2/global/common/frogbg.png') }}"
                        class="h-[33vw] w-[74vw]" />
                    <div class="flex items-center gap-[1vw] absolute left-1/2 -translate-1/2"
                        style="top: {{ $slide['rowPosition'] }}">
                        @foreach ($slide['options'] as $optIndex => $option)
                            <div class="pad {{ $optIndex === $slide['frogPadIndex'] ? 'marked' : '' }}">
                                <div class="relative w-fit h-fit">
                                    <img src="{{ asset('assets/images/phonics_l2/global/common/pad.png') }}"
                                        class="w-[7vw]">
                                    @if ($optIndex === $slide['frogPadIndex'])
                                        <img src="{{ asset('assets/images/phonics_l2/global/common/frog.png') }}"
                                            class="w-[4vw] absolute bottom-[40%] left-1/2 -translate-x-1/2 z-10" />
                                    @endif
                                    <span
                                        class="absolute top-[40%] left-1/2 -translate-1/2 text-white text-[2vw] z-20">{{ $option['text'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @elseif($slide['type'] === 'question-wood')
            {{-- Wood Pads Question --}}
            <div class="phonics-panel no-bg" data-slide-audio="{{ $slide['audio'] }}">
                <div class="title-top stroke -translate-1/2">
                    Help the frog get to the other side.
                    Find the <span> <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ $targetSoundAudio }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button> </span> sound.
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/images/phonics_l2/global/common/frogbg.png') }}"
                        class="h-[33vw] w-[74vw]" />

                    <div class="pad absolute top-[74%] left-1/2 -translate-1/2">
                        <div class="relative w-fit h-fit">
                            <img src="{{ asset('assets/images/phonics_l2/global/common/pad.png') }}" class="w-[7vw]">
                            <img src="{{ asset('assets/images/phonics_l2/global/common/frog.png') }}"
                                class="w-[4vw] absolute bottom-[40%] left-1/2 -translate-x-1/2 z-10" />
                            <span
                                class="absolute top-[40%] left-1/2 -translate-1/2 text-white text-[2vw] z-20">{{ $slide['frogPadText'] }}</span>
                        </div>
                    </div>

                    <div class="flex items-end gap-[1vw] absolute bottom-0 left-1/2 -translate-1/2">
                        @foreach ($slide['options'] as $option)
                            <div class="pad {{ $option['isAnswer'] ? 'answer' : '' }}">
                                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ $option['audio'] }}">
                                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                </button>
                                <div class="relative w-fit h-fit">
                                    <img src="{{ asset('assets/images/phonics_l2/global/common/wood.png') }}"
                                        class="w-[7vw]">
                                    <span
                                        class="absolute top-1/2 left-1/2 text-white text-[2vw] -translate-1/2">{{ $option['text'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @elseif($slide['type'] === 'answer-wood')
            {{-- Wood Pads Answer --}}
            <div class="phonics-panel no-bg" data-slide-audio="{{ $slide['audio'] ?? '' }}">
                <div class="title-top stroke -translate-1/2">
                    Help the frog get to the other side.
                    Find the <span> <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ $targetSoundAudio }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button> </span> sound.
                </div>
                <div class="relative">
                    <img src="{{ asset('assets/images/phonics_l2/global/common/frogbg.png') }}"
                        class="h-[33vw] w-[74vw]" />

                    <div class="pad absolute bottom-0 left-[70%] -translate-1/2 marked">
                        <div class="relative w-fit h-fit">
                            <img src="{{ asset('assets/images/phonics_l2/global/common/wood.png') }}" class="w-[7vw]">
                            <img src="{{ asset('assets/images/phonics_l2/global/common/frog.png') }}"
                                class="w-[4vw] absolute bottom-[40%] left-1/2 -translate-x-1/2 z-10" />
                            <span
                                class="absolute top-[40%] left-1/2 -translate-1/2 text-white text-[2vw] z-20">{{ $slide['frogPadText'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/ag_ab/agab') }}";
            const doneURL = "{{ url('/phonics_l2/ag_ab/agab') }}";
            const homeURL = document.body.dataset.homeRoute;
            const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            /* ── Audio Functions ── */
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
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

            function playSlideAudio(idx) {
                const slide = slides[idx];
                // If slide has .marked (answer slide) → play cheering
                if (slide.querySelector('.marked')) {
                    playAudio(CHEERING);
                    return;
                }
                // Otherwise play slide audio
                const src = slide.getAttribute('data-slide-audio') ||
                    slide.querySelector('[data-slide-audio]')?.getAttribute('data-slide-audio');
                playAudio(src);
            }

            /* ── Slide Navigation ── */
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

            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));
                playSlideAudio(idx);

                const last = isLastSlide(idx);
                nextButtons.forEach(b => b.classList.toggle('hidden', last));
                document.querySelectorAll('.doneButton').forEach(b => b.classList.toggle('hidden', !last));

                const container = document.getElementById('ajax-section');
                if (container) container.classList.toggle('no-bg', slides[idx].classList.contains('no-bg'));
            }

            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    const s = slides[next];
                    if (isInSpecialMode ? s.classList.contains(specialSlideClass) : !isSpecialSlide(s)) break;
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

            /* ── Click Handlers ── */
            // Answer pads click → go to next slide
            document.querySelectorAll('.answer').forEach(answer => {
                answer.addEventListener('click', () => {
                    goNext();
                });
            });

            // Sound buttons
            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

            // Info buttons
            document.querySelectorAll("[class*='info-btn']").forEach(btn => {
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

            // Navigation buttons
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

            // Start presentation
            showSlide(0);
        });
    </script>
@endpush
