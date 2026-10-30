@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
    $refImage = 'assets/images/phonics_l2/swsc/sweet.png';
    $refAudio = 'assets/audio/phonics_audio-2/sw_sc/sweet.mp3';

    $questionAudio = 'assets/audio/phonics_audio-2/sw_sc/match-sw.mp3';


    $questions = [
        [
            'correctSide' => 'right',
            'correct' => 'assets/images/phonics_l2/swsc/swing.png',
            'correctAudio' => 'assets/audio/phonics_audio-2/sw_sc/swing.mp3',
            'correctWord' => 'swing',
            'answerAudio' => 'assets/audio/phonics_audio-2/sw_sc/swing.mp3',
            'wrong' => 'assets/images/phonics_l2/clsl/slide.png',
            'wrongAudio' => 'assets/audio/phonics_audio-2/cl_sl/slide.mp3',
        ],
        [
            'correctSide' => 'left',
            'correct' => 'assets/images/phonics_l2/swsc/swim.png',
            'correctAudio' => 'assets/audio/phonics_audio-2/sw_sc/swim.mp3',
            'correctWord' => 'swim',
            'answerAudio' => 'assets/audio/phonics_audio-2/sw_sc/swim.mp3',
            'wrong' => 'assets/images/phonics_l2/clsl/slip.png',
            'wrongAudio' => 'assets/audio/phonics_audio-2/cl_sl/slip.mp3',
            'wrongClass' => 'rounded-2xl',
        ],
        [
            'correctSide' => 'right',
            'correct' => 'assets/images/phonics_l2/swsc/sweep.png',
            'correctAudio' => 'assets/audio/phonics_audio-2/sw_sc/sweep.mp3',
            'correctWord' => 'sweep',
            'answerAudio' => 'assets/audio/phonics_audio-2/sw_sc/sweep.mp3',
            'wrong' => 'assets/images/phonics_l2/trev/trip.png',
            'wrongAudio' => 'assets/audio/phonics_audio-2/tr_rev/trip.mp3',
        ],
        [
            'correctSide' => 'left',
            'correct' => 'assets/images/phonics_l2/swsc/swan.png',
            'correctAudio' => 'assets/audio/phonics_audio-2/sw_sc/swan.mp3',
            'correctWord' => 'swan',
            'answerAudio' => 'assets/audio/phonics_audio-2/sw_sc/swan.mp3',
            'wrong' => 'assets/images/phonics_l2/trev/trumpet.png',
            'wrongAudio' => 'assets/audio/phonics_audio-2/tr_rev/trumpet.mp3',
        ],
        [
            'correctSide' => 'right',
            'correct' => 'assets/images/phonics_l2/swsc/sway.png',
            'correctAudio' => 'assets/audio/phonics_audio-2/sw_sc/sway.mp3',
            'correctWord' => 'sway',
            'answerAudio' => 'assets/audio/phonics_audio-2/sw_sc/sway.mp3',
            'wrong' => 'assets/images/phonics_l2/clsl/ski.png',
            'wrongAudio' => 'assets/audio/phonics_audio-2/cl_sl/sled.mp3',
        ],
    ];
    // ============================================================
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

        .panel-ul {
            color: white;
            font-size: 1.1vw;
            padding-left: 3vw;
        }

        /* ── Aligned picture row ──
               Every picture sits in the same fixed-size box, so pictures share one
               line and the sound buttons below them share one line too. */
        .pic-row {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 12vw;
        }

        .pic-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5vw;
        }

        .pic-wrap {
            width: 22vw;
            height: 19vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pic-wrap img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
    </style>
@endpush


@section('content')

    {{-- ══════════════════════════════ --}}
    {{-- PANEL 1 — Intro               --}}
    {{-- ══════════════════════════════ --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.mp3') }}">
        <h2 class="top-title stroke">Make a Match</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To find out how to use this activity <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Info panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col gap-y-[1vw]">
        <h1 class="panel-title">Definitions</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>Phonics - A method of teaching reading and spelling that stresses symbol-sound relationships.</li>
            <li>Phonological Awareness - Understanding how spoken language breaks into smaller components (words, syllables,
                onset-rhymes, phonemes).</li>
            <li>Phonemic Awareness - The ability to reflect and manipulate the smallest units of sound in language.</li>
            <li>Blends - Consonants with no vowels between them; each keeps its own sound.</li>
            <li>Digraphs - Two letters representing one sound (e.g. ch in "chin").</li>
            <li>Word Families - Words sharing the same rime (e.g. fast, past, last).</li>
            <li>Onset - The initial consonant or consonant cluster of a word.</li>
            <li>Rime - The rhyme chunk at the end of a word.</li>
            <li>Word chunks - Finding words within words.</li>
        </ul>
        <div class="down-btn-container">
            <button class="doneButton hidden">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
            </button>
        </div>
    </div>


    {{-- ══════════════════════════════════════════════════════ --}}
    {{-- QUESTION + ANSWER pairs — auto-generated             --}}
    {{-- ══════════════════════════════════════════════════════ --}}
    @foreach ($questions as $q)
        {{-- Resolve left/right sides --}}
        @php
            $sides =
                $q['correctSide'] === 'left'
                    ? [
                        [
                            'image' => $q['correct'],
                            'audio' => $q['correctAudio'],
                            'class' => $q['correctClass'] ?? '',
                            'isCorrect' => true,
                        ],
                        [
                            'image' => $q['wrong'],
                            'audio' => $q['wrongAudio'],
                            'class' => $q['wrongClass'] ?? '',
                            'isCorrect' => false,
                        ],
                    ]
                    : [
                        [
                            'image' => $q['wrong'],
                            'audio' => $q['wrongAudio'],
                            'class' => $q['wrongClass'] ?? '',
                            'isCorrect' => false,
                        ],
                        [
                            'image' => $q['correct'],
                            'audio' => $q['correctAudio'],
                            'class' => $q['correctClass'] ?? '',
                            'isCorrect' => true,
                        ],
                    ];
        @endphp

        {{-- Question slide --}}
        <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
            data-slide-audio="{{ asset($questionAudio) }}">

            {{-- Header: title + reference image + sound button --}}
            <div class="flex items-end panel-div">
                <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
                <img src="{{ asset($refImage) }}" class="w-[6vw]" />
                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($refAudio) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            {{-- Two choices: pictures and sound buttons each share one line --}}
            <div class="pic-row mt-[3vw]">
                @foreach ($sides as $s)
                    <div class="pic-item">
                        <div class="pic-wrap">
                            <img src="{{ asset($s['image']) }}" class="{{ $s['class'] }}" />
                        </div>
                        <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($s['audio']) }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>
                @endforeach
            </div>

            <p class="p-note">Tips: Encourage children to listen and identify the initial blend sound.</p>
        </div>

        {{-- Answer slide (cheering plays after the answer sound) --}}
        <div class="phonics-panel answer flex flex-col justify-center gap-[2vw] items-center"
            data-slide-audio="{{ asset($q['answerAudio']) }}">

            {{-- Header: title + reference image + sound button --}}
            <div class="flex items-end panel-div">
                <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
                <img src="{{ asset($refImage) }}" class="w-[6vw]" />
                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($refAudio) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            {{-- Same layout as the question slide; correct picture gets tick + word --}}
            <div class="pic-row mt-[3vw]">
                @foreach ($sides as $s)
                    <div class="pic-item">
                        <div class="pic-wrap">
                            <img src="{{ asset($s['image']) }}" class="{{ $s['class'] }}" />
                        </div>
                        @if ($s['isCorrect'])
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                                <h2 class="text-[2vw] text-white">{{ $q['correctWord'] }}</h2>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            {{-- Invisible copy of the tip so pictures stay in the same place as on the question slide --}}
            <p class="p-note invisible">Tips: Encourage children to listen and identify the initial blend sound.</p>
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        const returnURL = "{{ url('/phonics_l2/sw_sc/sw') }}";
        const doneURL = "{{ url('/phonics_l2/sw_sc/sw') }}";
        const CHEERING_AUDIO = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            let currentSlide = 0;
            let currentAudio = null;
            let infoMode = false;
            let infoClass = null;
            let returnToSlide = null;

            // ── Audio ──────────────────────────────────────────────
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null; // cancels any pending cheering
                    currentAudio.pause();
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

            // ── Helpers ────────────────────────────────────────────
            function isInfoSlide(slide) {
                return [...slide.classList].some(c => /^info-panel-\d+$/.test(c));
            }

            function findNext(from) {
                for (let i = from + 1; i < slides.length; i++) {
                    if (infoMode ? slides[i].classList.contains(infoClass) : !isInfoSlide(slides[i])) return i;
                }
                return -1;
            }

            function findPrev(from) {
                for (let i = from - 1; i >= 0; i--) {
                    if (infoMode ? slides[i].classList.contains(infoClass) : !isInfoSlide(slides[i])) return i;
                }
                return -1;
            }

            // ── Show a slide ───────────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const isLast = findNext(idx) === -1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));

                const slide = slides[idx];
                const src = slide.getAttribute('data-slide-audio');
                const isAnswer = slide.classList.contains('answer');

                // Answer slide: answer sound first, then the cheering sound
                playAudio(src, isAnswer ? () => playAudio(CHEERING_AUDIO) : null);
            }

            // ── Navigation ─────────────────────────────────────────
            function goNext() {
                const n = findNext(currentSlide);
                if (n !== -1) showSlide(n);
            }

            function goBack() {
                if (infoMode) {
                    const p = findPrev(currentSlide);
                    if (p !== -1) showSlide(p);
                    else {
                        infoMode = false;
                        infoClass = null;
                        showSlide(returnToSlide);
                    }
                    return;
                }
                const p = findPrev(currentSlide);
                if (p !== -1) showSlide(p);
                else {
                    stopAudio();
                    window.location.href = returnURL;
                }
            }

            // ── Sound buttons ──────────────────────────────────────
            soundButtons.forEach(btn => btn.addEventListener('click', e => {
                e.stopPropagation();
                playAudio(btn.getAttribute('data-slide-audio'));
            }));

            // ── Info panel link ────────────────────────────────────
            document.querySelectorAll('[class*="info-btn"]').forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    infoClass = [...btn.classList].find(c => c.startsWith('info-btn'))?.replace(
                        'info-btn', 'info-panel-');
                    infoMode = true;
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(infoClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(b => b.addEventListener('click', goNext));
            document.getElementById('returnButton')?.addEventListener('click', goBack);
            document.getElementById('homeButton')?.addEventListener('click', () => {
                stopAudio();
                window.location.href = document.body.dataset.homeRoute;
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
