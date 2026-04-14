@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
    $returnURL = '/phonics_l2/ob_og/og';
    $doneURL = '/phonics_l2/ob_og/og';

    $questions = [
        // slide 1
        [
            'tip' => 'Tips: Encourage children to listen and identify the ending sound made when naming the objects.',
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/obog/jog.png',
                    'audio' => 'assets/audio/phonics_audio-2/ob_og/jog.m4a',
                    'image_size' => 'h-[8vw]',
                    'isCorrect' => true,
                    'word' => 'jog',
                    'highlight' => 'og',
                ],
                [
                    'image' => 'assets/images/phonics_l2/frcr/fridge.png',
                    'audio' => 'assets/audio/phonics_audio-2/fr_cr/fridge.m4a',
                    'isCorrect' => false,
                ],
            ],
        ],

        // slide 2
        [
            'tip' => null,
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/edet/bed.png',
                    'audio' => 'assets/audio/phonics_audio-2/ed_et/bed.m4a',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/obog/dog.png',
                    'audio' => 'assets/audio/phonics_audio-2/ob_og/dog.m4a',
                    'isCorrect' => true,
                    'word' => 'dog',
                    'highlight' => 'og',
                ],
            ],
        ],

        // slide 3
        [
            'tip' => null,
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/obog/log.png',
                    'audio' => 'assets/audio/phonics_audio-2/ob_og/log.m4a',
                    'isCorrect' => true,
                    'word' => 'log',
                    'highlight' => 'og',
                ],
                [
                    'image' => 'assets/images/phonics_l2/aman/jam.png',
                    'audio' => 'assets/audio/phonics_audio-2/am_an/jam.m4a',
                    'isCorrect' => false,
                ],
            ],
        ],

        // slide 4
        [
            'tip' => null,
            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/aman/fan.png',
                    'audio' => 'assets/audio/phonics_audio-2/am_an/fan.m4a',
                    'image_size' => 'h-[8vw]',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/obog/fog.png',
                    'audio' => 'assets/audio/phonics_audio-2/ob_og/fog.m4a',
                    'isCorrect' => true,
                    'word' => 'fog',
                    'highlight' => 'og',
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

        .panel-title {
            color: #F7B94A;
            font-size: 2vw;
        }

        .clickable {
            cursor: pointer;
            transition: transform 0.2s;
        }

        .clickable:hover {
            transform: scale(1.05);
        }

        .hidden {
            display: none !important;
        }
    </style>
@endpush

@section('content')

    {{-- ========== SLIDE 1: INTRO ========== --}}
    <div class="phonics-panel" data-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl1.m4a') }}">
        <h2 class="top-title stroke">Picture Match</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- ========== SLIDES 2+3 per question (Question + Answer) ========== --}}
    @foreach ($questions as $q)
        {{-- QUESTION SLIDE --}}
        <div class="phonics-panel flex flex-col justify-between h-full space-y-[2vw] items-center"
            data-audio="{{ asset('assets/audio/phonics_audio-2/ob_og/ogah.m4a') }}">
            <div>
                {{-- Title --}}
                <div class="flex">
                    <h2 class="panel-title stroke">Find the picture whose name ends with the same sound as</h2>
                    <button class="sound-btn w-[2.5vw]"
                        data-audio="{{ asset('assets/audio/phonics_audio-2/ob_og/ogah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </div>

                {{-- Options --}}
                <div class="flex w-full justify-around">
                    @foreach ($q['options'] as $opt)
                        <div class="relative w-fit h-fit clickable option-box"
                            data-correct="{{ $opt['isCorrect'] ? 'true' : 'false' }}">
                            <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="w-[17vw]" />
                            <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  {{ $opt['image_size'] ?? 'w-[7vw]' }}"
                                src="{{ asset($opt['image']) }}" />
                            <button class="sound-btn absolute bottom-[20%] left-[8%] w-[2.5vw]"
                                data-audio="{{ asset($opt['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            @if (!empty($q['tip']))
                <p class="p-note">{{ $q['tip'] }}</p>
            @endif
        </div>

        {{-- ANSWER SLIDE --}}
        <div class="phonics-panel flex flex-col justify-start h-full space-y-[2vw] items-center">
            {{-- Title --}}
            <div class="flex">
                <h2 class="panel-title stroke">Find the picture whose name ends with the same sound as</h2>
                <button class="sound-btn w-[2.5vw]"
                    data-audio="{{ asset('assets/audio/phonics_audio-2/ob_og/ogah.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            {{-- Options with answers shown --}}
            <div class="flex w-full justify-around">
                @foreach ($q['options'] as $opt)
                    <div>
                        <div class="relative w-fit h-fit">
                            <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="w-[17vw]" />
                            <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  {{ $opt['image_size'] ?? 'w-[7vw]' }}"
                                src="{{ asset($opt['image']) }}" />
                            {{-- Tick only on correct --}}
                            @if ($opt['isCorrect'])
                                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                                    class="w-[3vw] h-[3vw] absolute top-[15%] right-[8%]" />
                            @endif
                        </div>
                        {{-- Word label only on correct --}}
                        @if ($opt['isCorrect'] && !empty($opt['word']))
                            <h2 class="text-[3vw] text-white">
                                {{ substr($opt['word'], 0, -strlen($opt['highlight'])) }}<span
                                    style="color:#F7B94A;">{{ $opt['highlight'] }}</span>
                            </h2>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- ========== NAV BUTTONS ========== --}}
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

        const returnURL = "{{ url($returnURL) }}";
        const doneURL = "{{ url($doneURL) }}";
        const cheerAudio = "{{ asset('assets/audio/phonics_audio-2/bl_pl/cheering.m4a') }}";

        document.addEventListener("DOMContentLoaded", () => {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextBtns = document.querySelectorAll(".nextButton");
            const doneBtns = document.querySelectorAll(".doneButton");
            const returnBtn = document.getElementById("returnButton");
            const homeBtn = document.getElementById("homeButton");
            const soundBtns = document.querySelectorAll(".sound-btn");
            const optionBoxes = document.querySelectorAll(".option-box");

            let currentSlide = 0;
            let currentAudio = null;

            // ── Audio ─────────────────────────────────────
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

            // ── Show Slide ────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle("hidden", i !== idx));

                const isLast = idx === slides.length - 1;
                nextBtns.forEach(b => b.classList.toggle("hidden", isLast));
                doneBtns.forEach(b => b.classList.toggle("hidden", !isLast));

                // play slide audio with no delay (like file 2)
                playAudio(slides[idx].getAttribute("data-audio"));
            }

            function goNext() {
                if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
            }

            // ── Correct option click → cheer → then go next ──
            optionBoxes.forEach(box => {
                box.addEventListener("click", function(e) {
                    if (e.target.closest(".sound-btn")) return;
                    if (this.dataset.correct === "true") {
                        playAudio(cheerAudio, goNext); // ✅ go next AFTER cheer ends
                    }
                });
            });

            // ── Sound buttons ─────────────────────────────
            soundBtns.forEach(btn => {
                btn.addEventListener("click", e => {
                    e.stopPropagation();
                    playAudio(btn.getAttribute("data-audio"));
                });
            });

            // ── Navigation ────────────────────────────────
            nextBtns.forEach(b => b.addEventListener("click", goNext));

            returnBtn?.addEventListener("click", () => {
                if (currentSlide > 0) showSlide(currentSlide - 1);
                else {
                    stopAudio();
                    window.location.href = returnURL;
                }
            });

            homeBtn?.addEventListener("click", () => {
                stopAudio();
                window.location.href = document.body.dataset.homeRoute;
            });

            doneBtns.forEach(b => b.addEventListener("click", () => {
                stopAudio();
                window.location.href = doneURL;
            }));

            // ── Start ─────────────────────────────────────
            showSlide(0);
        });
    </script>
@endpush
