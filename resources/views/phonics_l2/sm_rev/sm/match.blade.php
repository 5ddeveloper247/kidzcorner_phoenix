@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
    $refImage = 'assets/images/phonics_l2/smrev/smell.png';
    $refAudio = 'assets/audio/phonics_audio-2/sm_rev/smell.m4a';

    $questionAudio = 'assets/audio/phonics_audio-2/sm_rev/match-sm.m4a';

    $questions = [
        [
            'correctSide' => 'left',
            'correct' => 'assets/images/phonics_l2/smrev/smile.png',
            'correctSize' => 'h-[15vw]',
            'correctAudio' => 'assets/audio/phonics_audio-2/sm_rev/smile.m4a',
            'correctWord' => 'smile',
            'answerAudio' => 'assets/audio/phonics_audio-2/sm_rev/smile.m4a',
            'wrong' => 'assets/images/phonics_l2/brpr/broom.png',
            'wrongSize' => 'h-[15vw]',
            'wrongAudio' => 'assets/audio/phonics_audio-2/br_pr/broom.m4a',
        ],
        [
            'correctSide' => 'left',
            'correct' => 'assets/images/phonics_l2/smrev/smelly.png',
            'correctSize' => 'h-[15vw]',
            'correctAudio' => 'assets/audio/phonics_audio-2/sm_rev/sm-elly.m4a',
            'correctWord' => 'smelly',
            'answerAudio' => 'assets/audio/phonics_audio-2/sm_rev/sm-elly.m4a',
            'wrong' => 'assets/images/phonics_l2/spst/spin.png',
            'wrongSize' => 'h-[15vw]',
            'wrongAudio' => 'assets/audio/phonics_audio-2/sp_st/spin.m4a',
            'wrongClass' => 'rounded-2xl',
        ],
        [
            'correctSide' => 'right',
            'correct' => 'assets/images/phonics_l2/smrev/small.png',
            'correctSize' => 'w-[17vw]',
            'correctAudio' => 'assets/audio/phonics_audio-2/sm_rev/small.m4a',
            'correctWord' => 'small',
            'answerAudio' => 'assets/audio/phonics_audio-2/sm_rev/small.m4a',
            'wrong' => 'assets/images/phonics_l2/spst/spider.png',
            'wrongSize' => 'w-[17vw]',
            'wrongAudio' => 'assets/audio/phonics_audio-2/sp_st/spider.m4a',
        ],
        [
            'correctSide' => 'left',
            'correct' => 'assets/images/phonics_l2/smrev/smoke.png',
            'correctSize' => 'h-[17vw]',
            'correctAudio' => 'assets/audio/phonics_audio-2/sm_rev/smoke.m4a',
            'correctWord' => 'smoke',
            'answerAudio' => 'assets/audio/phonics_audio-2/sm_rev/smoke.m4a',
            'wrong' => 'assets/images/phonics_l2/spst/spade.png',
            'wrongSize' => 'w-[17vw]',
            'wrongAudio' => 'assets/audio/phonics_audio-2/sp_st/spade.m4a',
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
            font-size: 1.8vw;
        }

        .panel-div {
            position: absolute;
            top: 4%;
        }

        .panel-ul {
            color: white;
            font-size: 1.2vw;
        }
    </style>
@endpush


@section('content')

    {{-- ══════════════════════════════ --}}
    {{-- PANEL 1 — Intro               --}}
    {{-- ══════════════════════════════ --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.m4a') }}">
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

    @foreach ($questions as $q)
        {{-- Resolve left/right sides --}}
        @php
            $leftImage = $q['correctSide'] === 'left' ? $q['correct'] : $q['wrong'];
            $leftSize = $q['correctSide'] === 'left' ? $q['correctSize'] : $q['wrongSize'];
            $leftAudio = $q['correctSide'] === 'left' ? $q['correctAudio'] : $q['wrongAudio'];
            $leftClass = $q['correctSide'] === 'left' ? $q['correctClass'] ?? '' : $q['wrongClass'] ?? '';

            $rightImage = $q['correctSide'] === 'right' ? $q['correct'] : $q['wrong'];
            $rightSize = $q['correctSide'] === 'right' ? $q['correctSize'] : $q['wrongSize'];
            $rightAudio = $q['correctSide'] === 'right' ? $q['correctAudio'] : $q['wrongAudio'];
            $rightClass = $q['correctSide'] === 'right' ? $q['correctClass'] ?? '' : $q['wrongClass'] ?? '';
        @endphp

        {{-- Question slide --}}
        <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
            data-slide-audio="{{ asset($questionAudio) }}">

            <div class="flex items-end panel-div gap-[.5vw]">
                <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
                <img src="{{ asset($refImage) }}" class="w-[3vw]" />
                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($refAudio) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            {{-- Two choices --}}
            <div class="flex items-center justify-between w-[50vw] mt-[3vw]">
                <div>
                    <img src="{{ asset($leftImage) }}" class="{{ $leftSize }} {{ $leftClass }}" />
                    <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($leftAudio) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </div>
                <div>
                    <img src="{{ asset($rightImage) }}" class="{{ $rightSize }} {{ $rightClass }}" />
                    <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($rightAudio) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                </div>
            </div>

            <p class="p-note">Tips: Encourage children to listen and identify the initial blend sound.</p>
        </div>

        {{-- Answer slide --}}
        <div class="phonics-panel flex flex-col justify-center items-center"
            data-slide-audio="{{ asset($q['answerAudio']) }}">

            <div class="flex items-end panel-div gap-[.5vw]">
                <h2 class="panel-title">Find the picture that has the same initial blend as</h2>
                <img src="{{ asset($refImage) }}" class="w-[3vw]" />
                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($refAudio) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            {{-- Correct image gets tick + word label; wrong image stays plain --}}
            <div class="flex items-center justify-between w-[50vw]">

                @if ($q['correctSide'] === 'left')
                    {{-- Correct on LEFT --}}
                    <div class="flex flex-col items-center mt-[5vw]">
                        <img src="{{ asset($q['correct']) }}"
                            class="{{ $q['correctSize'] }} {{ $q['correctClass'] ?? '' }}" />
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                            <h2 class="text-[2vw] text-white">{{ $q['correctWord'] }}</h2>
                        </div>
                    </div>
                    <img src="{{ asset($q['wrong']) }}" class="{{ $q['wrongSize'] }} {{ $q['wrongClass'] ?? '' }}" />
                @else
                    {{-- Correct on RIGHT --}}
                    <img src="{{ asset($q['wrong']) }}" class="{{ $q['wrongSize'] }} {{ $q['wrongClass'] ?? '' }}" />
                    <div class="flex flex-col items-center">
                        <img src="{{ asset($q['correct']) }}"
                            class="{{ $q['correctSize'] }} {{ $q['correctClass'] ?? '' }} mb-0" />
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[3vw]" />
                            <h2 class="text-[2vw] text-white">{{ $q['correctWord'] }}</h2>
                        </div>
                    </div>
                @endif

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
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        const returnURL = "{{ url('/phonics_l2/sm_rev/sm') }}";
        const doneURL = "{{ url('/phonics_l2/sm_rev/sm') }}";

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
                    currentAudio.pause();
                    currentAudio = null;
                }
            }

            function playAudio(src) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                currentAudio.play().catch(() => {});
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

                const src = slides[idx].getAttribute('data-slide-audio');
                playAudio(src);
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
                stopAudio();
                window.location.href = doneURL;
            }));

            showSlide(0);
        });
    </script>
@endpush
