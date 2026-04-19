@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/y_ie/yie';
    $doneURL = '/phonics_l2/y_ie/yie';

    $targetSound = [
        'text' => 'un',
        'audio' => 'assets/audio/phonics_audio-2/un_up/unah.mp3',
    ];
    $lastBg = 'assets/images/phonics_l2/global/common/b8.png';

    $cheerAudio = 'assets/audio/phonics_audio-2/common/cheering.mp3';

    $questions = [
        // ── Question 1 ──────────────────────────────────
        [
            'slideAudio' => 'assets/audio/phonics_audio-2/y_ie/spot-eeah.m4a',
            'bgImage' => 'assets/images/phonics_l2/global/common/b1.png',
            'circles' => [
                ['text' => 'shy', 'audio' => 'assets/audio/phonics_audio-2/y_ie/shy.m4a', 'isCorrect' => true],
                ['text' => 'sit', 'audio' => 'assets/audio/phonics_audio-2/it_rev/sit.m4a', 'isCorrect' => false],
                ['text' => 'trip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/etah.m4a', 'isCorrect' => false],
                ['text' => 'float', 'audio' => 'assets/audio/phonics_audio-2/fl_gl/anah.m4a', 'isCorrect' => false],
            ],
        ],

        // ── Question 2 ──────────────────────────────────
        [
            'slideAudio' => 'assets/audio/phonics_audio-2/ee_ea/spot-eah.m4a',
            'bgImage' => 'assets/images/phonics_l2/global/common/b2.png',
            'circles' => [
                ['text' => 'flood', 'audio' => 'assets/audio/phonics_audio-2/fl_gl/flood.m4a', 'isCorrect' => false],
                ['text' => 'slide', 'audio' => 'assets/audio/phonics_audio-2/y_ie/slide.m4a', 'isCorrect' => true],
                ['text' => 'flask', 'audio' => 'assets/audio/phonics_audio-2/fl_gl/flask.m4a', 'isCorrect' => false],
                ['text' => 'friends', 'audio' => 'assets/audio/phonics_audio-2/fr_ce/friends.m4a', 'isCorrect' => false],
            ],
        ],

        // ── Question 3 ──────────────────────────────────
        [
            'slideAudio' => 'assets/audio/phonics_audio-2/ee_ea/spot-eeah.m4a',
            'bgImage' => 'assets/images/phonics_l2/global/common/b3.png',
            'circles' => [
                ['text' => 'hay', 'audio' => 'assets/audio/phonics_audio-2/ay_ue/hay.m4a', 'isCorrect' => false],
                ['text' => 'clay', 'audio' => 'assets/audio/phonics_audio-2/ay_ue/clay.m4a', 'isCorrect' => false],
                ['text' => 'fly', 'audio' => 'assets/audio/phonics_audio-2/y_ie/fly.m4a', 'isCorrect' => true],
                ['text' => 'big', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/big.m4a', 'isCorrect' => false],
            ],
        ],

        // ── Question 4 ──────────────────────────────────
        [
            'slideAudio' => 'assets/audio/phonics_audio-2/ee_ea/spot-eah.m4a',
            'bgImage' => 'assets/images/phonics_l2/global/common/b4.png',
            'circles' => [
                ['text' => 'play', 'audio' => 'assets/audio/phonics_audio-2/ay_ue/play.m4a', 'isCorrect' => false],
                ['text' => 'sip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/sip.m4a', 'isCorrect' => false],
                ['text' => 'dig', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/dig.m4a', 'isCorrect' => false],
                ['text' => 'hide', 'audio' => 'assets/audio/phonics_audio-2/y_ie/hide.m4a', 'isCorrect' => true],
            ],
        ],

        // ── Question 5 ──────────────────────────────────
        [
            'slideAudio' => 'assets/audio/phonics_audio-2/ee_ea/spot-eeah.m4a',
            'bgImage' => 'assets/images/phonics_l2/global/common/b5.png',
            'circles' => [
                ['text' => 'dive', 'audio' => 'assets/audio/phonics_audio-2/y_ie/dive.m4a', 'isCorrect' => true],
                ['text' => 'clip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/clip.m4a', 'isCorrect' => false],
                ['text' => 'lit', 'audio' => 'assets/audio/phonics_audio-2/it_rev/lit.m4a', 'isCorrect' => false],
                ['text' => 'kid', 'audio' => 'assets/audio/phonics_audio-2/id_in/kid.m4a', 'isCorrect' => false],
            ],
        ],

        // ── Question 6 ──────────────────────────────────
        [
            'slideAudio' => 'assets/audio/phonics_audio-2/ee_ea/spot-eah.m4a',
            'bgImage' => 'assets/images/phonics_l2/global/common/b6.png',
            'circles' => [
                ['text' => 'present', 'audio' => 'assets/audio/phonics_audio-2/br_pr/present.m4a', 'isCorrect' => false],
                ['text' => 'plant', 'audio' => 'assets/audio/phonics_audio-2/bl_pl/plant.m4a', 'isCorrect' => false],
                ['text' => 'sway', 'audio' => 'assets/audio/phonics_audio-2/ay_ue/sway.m4a', 'isCorrect' => false],
                ['text' => 'pry', 'audio' => 'assets/audio/phonics_audio-2/y_ie/pry.m4a', 'isCorrect' => true],
            ],
        ],
        // ── Question 7 ──────────────────────────────────
        [
            'slideAudio' => 'assets/audio/phonics_audio-2/ee_ea/spot-eah.m4a',
            'bgImage' => 'assets/images/phonics_l2/global/common/b7.png',
            'circles' => [
                ['text' => 'flag', 'audio' => 'assets/audio/phonics_audio-2/fl_gl/flag.m4a', 'isCorrect' => false],
                ['text' => 'dry', 'audio' => 'assets/audio/phonics_audio-2/y_ie/dry.m4a', 'isCorrect' => true],
                ['text' => 'flower', 'audio' => 'assets/audio/phonics_audio-2/fl_gl/flower.m4a', 'isCorrect' => false],
                ['text' => 'stool', 'audio' => 'assets/audio/phonics_audio-2/sp_st/stool.m4a', 'isCorrect' => false],
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
            width: 100%;
        }

        .circle {
            width: 7vw;
            height: 5vw;
            background: url('{{ asset('assets/images/phonics_l2/global/simple-g.png') }}') no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .circle span {
            color: #000;
            font-size: 2.5vw;
        }

        .clickable {
            cursor: pointer;
            transition: transform 0.2s;
        }

        .clickable:hover {
            transform: scale(1.05);
        }

        .sound-btn {
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .hidden {
            display: none !important;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')

    {{-- ========== SLIDE 1: INTRO ========== --}}
    <div class="phonics-panel" data-audio="{{ asset('assets/audio/phonics_audio-2/common/spot-it.m4a') }}">
        <h2 class="top-title stroke">Spot It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- ========== SLIDE 2: INFO (tip panel) ========== --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>
        <ul class="list-disc text-start panel-ul">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>

    {{-- ========== QUESTION + ANSWER SLIDES  ========== --}}
    @foreach ($questions as $i => $q)
        @php
            $nextBg = $questions[$i + 1]['bgImage'] ?? $lastBg;
            $isLast = $i === count($questions) - 1;
        @endphp

        {{-- QUESTION SLIDE --}}
        <div class="phonics-panel no-bg" data-audio="{{ asset($q['slideAudio']) }}">
            <div class="title-top stroke -translate-1/2">
                Help the monkey get to the other side. <br>
                Find the
                <button class="w-[3vw]" data-audio="{{ asset($targetSound['audio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
                sound.
            </div>
            <div class="relative">
                <img src="{{ asset($q['bgImage']) }}" class="h-[33vw] w-[74vw]" />
                <div class="flex items-center gap-[3.5vw] absolute bottom-0 left-1/2 -translate-1/2">
                    @foreach ($q['circles'] as $circle)
                        <div class="circle {{ $circle['isCorrect'] ? 'clickable correct-circle' : '' }}">
                            <button class="sound-btn w-[2.5vw]" data-audio="{{ asset($circle['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <span>{{ $circle['text'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ANSWER SLIDE --}}
        <div class="phonics-panel no-bg {{ $isLast ? 'last-slide' : '' }}" data-answer="true">
            <div class="title-top stroke -translate-1/2">
                Help the monkey get to the other side. <br>
                Find the
                <button class="w-[3vw]" data-audio="{{ asset($targetSound['audio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
                sound.
            </div>
            <div class="relative">
                {{-- ✅ Next question's bg image --}}
                <img src="{{ asset($nextBg) }}" class="h-[33vw] w-[74vw]" />
                <div class="flex items-center gap-[3.5vw] absolute bottom-0 left-1/2 -translate-1/2">
                    {{-- ANSWER SLIDE circles --}}
                    @foreach ($q['circles'] as $circle)
                        <div class="circle {{ $circle['isCorrect'] ? 'marked' : '' }}">
                            <span style="{{ $circle['isCorrect'] ? 'color: #70AF39;' : '' }}">
                                {{ $circle['text'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
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
        // ── Config ────────────────────────────────────────────────
        const CONFIG = {
            returnURL: "{{ url($returnURL) }}", // ✅ FIX: was missing from CONFIG
            doneURL: "{{ url($doneURL) }}", // ✅ FIX: was missing from CONFIG
            homeURL: "{{ url('/phonics/l2') }}",
            cheerAudio: "{{ asset($cheerAudio) }}",
            autoPlayDelay: 500,
            autoAdvanceDelay: 1500,
        };
        document.addEventListener("DOMContentLoaded", () => {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextBtns = document.querySelectorAll(".nextButton");
            const doneBtns = document.querySelectorAll(".doneButton");
            const returnBtn = document.getElementById("returnButton");
            const homeBtn = document.getElementById("homeButton");
            const soundBtns = document.querySelectorAll(".sound-btn");

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialClass = null;

            // ── Audio ─────────────────────────────────────────
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playAudio(src) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                currentAudio.play().catch(() => {});
            }

            // ── Show Slide ────────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle("hidden", i !== idx));

                // Play cheering on answer slides (has .marked), otherwise slide audio
                const slide = slides[idx];
                const isAnswerSlide = !!slide.querySelector('.marked');
                const src = isAnswerSlide ?
                    CONFIG.cheerAudio :
                    slide.getAttribute("data-audio");
                if (src) setTimeout(() => playAudio(src), CONFIG.autoPlayDelay);

                // Toggle no-bg on the main container
                const container = document.querySelector('#ajax-section') ??
                    document.querySelector('.phonics-container') ??
                    document.body;
                container.classList.toggle('no-bg', slides[idx].classList.contains('no-bg'));

                // Next / Done buttons
                const isLast = isLastSlide(idx);
                nextBtns.forEach(b => b.classList.toggle("hidden", isLast));
                doneBtns.forEach(b => b.classList.toggle("hidden", !isLast));
            }

            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            function isLastSlide(idx) {
                if (slides[idx].classList.contains('last-slide')) return true;
                for (let i = idx + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) return false;
                }
                return true;
            }

            // ── Correct circle click → go to answer slide ────
            document.querySelectorAll(".correct-circle").forEach(circle => {
                circle.addEventListener("click", e => {
                    if (e.target.closest(".sound-btn")) return;
                    // Find the very next answer slide (next slide after this question slide)
                    showSlide(currentSlide + 1);
                });
            });

            // ── Sound buttons ─────────────────────────────────
            soundBtns.forEach(btn => {
                btn.addEventListener("click", e => {
                    e.stopPropagation();
                    playAudio(btn.getAttribute("data-audio"));
                });
            });

            // ── Next ──────────────────────────────────────────
            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    const s = slides[next];
                    if (isInSpecialMode ? s.classList.contains(specialClass) : !isSpecialSlide(s)) break;
                    next++;
                }
                if (next < slides.length) showSlide(next);
            }

            // ── Back ──────────────────────────────────────────
            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopAudio();
                    window.location.href = CONFIG.returnURL;
                    return;
                }
                if (isInSpecialMode) {
                    let prev = currentSlide - 1;
                    while (prev >= 0 && !slides[prev].classList.contains(specialClass)) prev--;
                    if (prev >= 0) {
                        showSlide(prev);
                    } else {
                        isInSpecialMode = false;
                        specialClass = null;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    }
                } else {
                    let prev = currentSlide - 1;
                    while (prev > 0 && isSpecialSlide(slides[prev])) prev--;
                    showSlide(prev);
                }
            }

            // ── Info buttons ──────────────────────────────────
            document.querySelectorAll("[class*='info-btn']").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialClass = Array.from(btn.classList)
                        .find(c => c.startsWith("info-btn"))
                        ?.replace("info-btn", "info-panel-");
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            // ── Buttons ───────────────────────────────────────
            nextBtns.forEach(b => b.addEventListener("click", goNext));
            if (returnBtn) returnBtn.addEventListener("click", goBack);
            if (homeBtn) homeBtn.addEventListener("click", () => {
                stopAudio();
                window.location.href = document.body.dataset.homeRoute;
            });
            doneBtns.forEach(b => b.addEventListener("click", () => {
                stopAudio();
                if (isInSpecialMode) {
                    isInSpecialMode = false;
                    specialClass = null;
                    showSlide(returnToSlide);
                    returnToSlide = null;
                } else window.location.href = CONFIG.doneURL;
            }));

            showSlide(0);
        });
    </script>
@endpush
