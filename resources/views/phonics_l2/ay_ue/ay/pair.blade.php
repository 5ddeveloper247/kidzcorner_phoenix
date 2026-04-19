@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/ay_ue/ay';
    $doneURL = '/phonics_l2/ay_ue/ay';
    $cheerAudio = 'assets/audio/phonics_audio-2/common/cheering.m4a';

    $questions = [
        // ── Question 1 ──────────────────────────────
        [
            'reference' => [
                'image' => 'assets/images/phonics_l2/ayue/hay.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/hay.m4a',
                'word' => 'h', 
                'highlight' => 'ay', 
            ],

            'answer' => [
                'image' => 'assets/images/phonwics_l2/ayue/spray.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/spray.m4a',
                'word' => 'spr',
                'highlight' => 'ay',
            ],

            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/ayue/spray.png',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/spray.m4a',
                    'isCorrect' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/cut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/cut.m4a',
                    'isCorrect' => false,
                ],
            ],

            'slideAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/ay_ue/spray.m4a',
        ],
        
        // ── Question 2 ──────────────────────────────
        [
            'reference' => [
                'image' => 'assets/images/phonics_l2/ayue/hay.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/hay.m4a',
                'word' => 'h', 
                'highlight' => 'ay', 
            ],

            'answer' => [
                'image' => 'assets/images/phonics_l2/ayue/sway.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/sway.m4a',
                'word' => 'sw',
                'highlight' => 'ay',
            ],

            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/aman/jam.png',
                    'audio' => 'assets/audio/phonics_audio-2/am_an/jam.m4a',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ayue/sway.png',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/sway.m4a',
                    'isCorrect' => true,
                ],
            ],

            'slideAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/ay_ue/swaye.m4a',
        ],
        
        // ── Question 3 ──────────────────────────────
        [
            'reference' => [
                'image' => 'assets/images/phonics_l2/ayue/hay.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/hay.m4a',
                'word' => 'h', 
                'highlight' => 'ay', 
            ],

            'answer' => [
                'image' => 'assets/images/phonics_l2/ayue/clay.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/clay.m4a',
                'word' => 'cl',
                'highlight' => 'ay',
            ],

            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/aman/jam.png',
                    'audio' => 'assets/audio/phonics_audio-2/am_an/jam.m4a',
                    'isCorrect' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ayue/clay.png',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/clay.m4a',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/drgr/drip.png',
                    'audio' => 'assets/audio/phonics_audio-2/dr_gr/drip.m4a',
                    'isCorrect' => false,
                ],
            ],

            'slideAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/ay_ue/clay.m4a',
        ],
        
        // ── Question 4 ──────────────────────────────
        [
            'reference' => [
                'image' => 'assets/images/phonics_l2/ayue/hay.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/hay.m4a',
                'word' => 'h', 
                'highlight' => 'ay', 
            ],

            'answer' => [
                'image' => 'assets/images/phonics_l2/ayue/tray.png',
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/tray.m4a',
                'word' => 'spr',
                'highlight' => 'ay',
            ],

            'options' => [
                [
                    'image' => 'assets/images/phonics_l2/ayue/spray.png',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/spray.m4a',
                    'isCorrect' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ayue/tray.png',
                    'audio' => 'assets/audio/phonics_audio-2/ay_ue/tray.m4a',
                    'isCorrect' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/apad/map.png',
                    'audio' => 'assets/audio/phonics_audio-2/ap_ad/map.m4a',
                    'isCorrect' => false,
                ],
            ],

            'slideAudio' => 'assets/audio/phonics_audio-2/fl_gl/match-fl.m4a',
            'answerAudio' => 'assets/audio/phonics_audio-2/ay_ue/tray.m4a',
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

        .hidden {
            display: none !important;
        }

        .panel-ul {
            color: white;
            font-size: 1.1vw;
            padding-left: 2vw;
        }

        .clickable {
            cursor: pointer;
        }

    </style>
@endpush

@section('content')

    {{-- ========== SLIDE 1: INTRO ========== --}}
    <div class="phonics-panel" data-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.m4a') }}">
        <h2 class="top-title stroke">Pick a Pair</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To find out how to use this activity <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- ========== SLIDE 2: INFO ========== --}}
    <div class="phonics-panel info-panel-1 flex flex-col gap-y-[1vw]">
        <h1 class="panel-title">Definitions</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>Phonics - A method of teaching reading and spelling that stresses symbol-sound relationships.</li>
            <li>Phonological Awareness - The understanding of the different ways that spoken language can be broken into
                smaller components.
                <ul class="pl-[2vw]">
                    <li>-Words</li>
                    <li>-Syllables</li>
                    <li>-Onset-rhymes</li>
                    <li>-Phonemes</li>
                </ul>
            </li>
            <li>Phonemic Awareness - The ability to reflect and manipulate the smallest units of sound in language phonemes.
            </li>
            <li>Blends - A consonant blend is a group of consonants found in a word that have no vowels between them.</li>
            <li>Digraphs - Two letters that represent one speech sound, as ch for ch in "chin".</li>
            <li>Word Families - Words that share the same rime (e.g. fast, past, last).</li>
            <li>Onset - The initial consonant or consonant cluster of a word.</li>
            <li>Rime - The rhyme chunk at the end of the word.</li>
            <li>Word chunks - Finding words within words.</li>
        </ul>
    </div>

    {{-- ========== QUESTION + ANSWER SLIDES  ========== --}}
    @foreach ($questions as $i => $q)
        @php $isLast = $i === count($questions) - 1; @endphp

        {{-- QUESTION SLIDE --}}
        <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
            data-audio="{{ asset($q['slideAudio']) }}">

            {{-- Title with reference image --}}
            <div class="flex items-end panel-div">
                <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
                <img src="{{ asset($q['reference']['image']) }}" class="w-[6vw]" />
                <button class="w-[3vw] sound-btn" data-audio="{{ asset($q['reference']['audio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            {{-- Two paper boxes --}}
            <div class="flex items-center justify-between w-[30vw] mt-[3vw]">
                {{-- Reference box --}}
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}" class="h-[13vw]" />
                    <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[6vw]"
                        src="{{ asset($q['reference']['image']) }}" />
                    <button class="absolute top-[15%] left-[5%] w-[3vw] sound-btn"
                        data-audio="{{ asset($q['reference']['audio']) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </div>
                {{-- Empty box --}}
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}" class="h-[13vw]" />
                </div>
            </div>

            {{-- Bottom clickable options --}}
            <div class="flex items-center gap-[5vw]">
                @foreach ($q['options'] as $opt)
                    <div class="flex flex-col items-center clickable option-box"
                        data-correct="{{ $opt['isCorrect'] ? 'true' : 'false' }}">
                        <button class="w-[3vw] sound-btn" data-audio="{{ asset($opt['audio']) }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                        <img class="w-[6vw]" src="{{ asset($opt['image']) }}" />
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ANSWER SLIDE --}}
        <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center {{ $isLast ? 'last-slide' : '' }}"
            data-audio="{{ asset($q['answerAudio']) }}">

            {{-- Title --}}
            <div class="flex items-end panel-div">
                <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
                <img src="{{ asset($q['reference']['image']) }}" class="w-[6vw]" />
            </div>

            <div class="flex items-center justify-between w-[30vw] mt-[3vw]">
                {{-- Reference box --}}
                <div>
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}" class="h-[13vw]" />
                        <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[6vw]"
                            src="{{ asset($q['reference']['image']) }}" />
                        <button class="absolute top-[15%] left-[5%] w-[3vw] sound-btn"
                            data-audio="{{ asset($q['reference']['audio']) }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>
                    <h2 class="text-white text-[2.5vw]">
                        {{ $q['reference']['word'] }}<span
                            style="color:#f7b94a;">{{ $q['reference']['highlight'] }}</span>
                    </h2>
                </div>

                {{-- Answer box --}}
                <div>
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}" class="h-[13vw]" />
                        <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[6vw]"
                            src="{{ asset($q['answer']['image']) }}" />
                    </div>
                    <h2 class="text-white text-[2.5vw]">
                        {{ $q['answer']['word'] }}<span style="color:#f7b94a;">{{ $q['answer']['highlight'] }}</span>
                    </h2>
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

        const CONFIG = {
            returnURL: "{{ url($returnURL) }}",
            doneURL: "{{ url($doneURL) }}",
            cheerAudio: "{{ asset($cheerAudio) }}",
        };

        document.addEventListener("DOMContentLoaded", () => {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextBtns = document.querySelectorAll(".nextButton");
            const doneBtns = document.querySelectorAll(".doneButton");
            const returnBtn = document.getElementById("returnButton");
            const homeBtn = document.getElementById("homeButton");

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialClass = null;

            // ── Audio ─────────────────────────────────────
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
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

            // ── Slide helpers ─────────────────────────────
            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            function isLastSlide(idx) {
                if (slides[idx].classList.contains('last-slide')) return true;
                for (let i = idx + 1; i < slides.length; i++) {
                    if (isInSpecialMode ? slides[i].classList.contains(specialClass) : !isSpecialSlide(slides[i]))
                        return false;
                }
                return true;
            }

            // ── Show Slide ────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle("hidden", i !== idx));
                playAudio(slides[idx].getAttribute("data-audio"));

                const last = isLastSlide(idx);
                nextBtns.forEach(b => b.classList.toggle("hidden", last));
                doneBtns.forEach(b => b.classList.toggle("hidden", !last));
            }

            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    if (isInSpecialMode ? slides[next].classList.contains(specialClass) : !isSpecialSlide(slides[
                            next])) break;
                    next++;
                }
                if (next < slides.length) showSlide(next);
            }

            // ── Correct option click → cheer → next ──────
            document.querySelectorAll(".option-box").forEach(box => {
                box.addEventListener("click", e => {
                    if (e.target.closest(".sound-btn")) return;
                    if (box.dataset.correct === "true") {
                        playAudio(CONFIG.cheerAudio, goNext); // 🎉 cheer then advance
                    }
                });
            });

            // ── Sound buttons ─────────────────────────────
            document.querySelectorAll(".sound-btn").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.stopPropagation();
                    playAudio(btn.getAttribute("data-audio"));
                });
            });

            // ── Navigation ────────────────────────────────
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

            // ── Info buttons ──────────────────────────────
            document.querySelectorAll("[class*='info-btn']").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialClass = Array.from(btn.classList).find(c => c.startsWith("info-btn"))
                        ?.replace("info-btn", "info-panel-");
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            nextBtns.forEach(b => b.addEventListener("click", goNext));
            returnBtn?.addEventListener("click", goBack);
            homeBtn?.addEventListener("click", () => {
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
