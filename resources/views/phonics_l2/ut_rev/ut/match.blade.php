@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/ut_rev/ut';
    $doneURL = '/phonics_l2/ut_rev/ut';

    $rounds = [
        // ── Round 1: Question grid (no ticks) ──
        [
            'type' => 'grid',
            'cols' => 3,
            'question' => 'Find the picture that end with the /ut/ sound.',
            'audio' => 'assets/audio/phonics_audio-2/ub_ug/match-ub.m4a',
            'cards' => [
                [
                    'image' => 'assets/images/phonics_l2/ubug/cub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/cub.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/shut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/shut.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/hut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/hut.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ubug/scrub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/scrub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/cut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/cut.m4a',
                    'correct' => false,
                ],
            ],
        ],

        // ── Round 1: Answer —
        [
            'type' => 'answer_word',
            'image' => 'assets/images/phonics_l2/utrev/shut.png',
            'imageSize' => 'h-[20vw]',
            'word' => 'shut',
            'audio' => 'assets/audio/phonics_audio-2/ut_rev/shut.m4a',
        ],

        // ── Round 2: Question grid ──
        [
            'type' => 'grid',
            'cols' => 3,
            'showTicks' => true,
            'question' => 'Find the picture that end with the /ut/ sound.',
            'audio' => 'assets/audio/phonics_audio-2/ub_ug/match-ub.m4a',
            'cards' => [
                [
                    'image' => 'assets/images/phonics_l2/ubug/cub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/cub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/shut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/shut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/hut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/hut.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ubug/scrub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/scrub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/cut.png',
                    'audio' => 'assets/audio/phonics_audio-2/it_rev/lit.m4a',
                    'correct' => false,
                ],
            ],
        ],

        // ── Round 2: Answer —
        [
            'type' => 'answer_word',
            'image' => 'assets/images/phonics_l2/utrev/hut.png',
            'imageSize' => 'h-[20vw]',
            'word' => 'hut',
            'audio' => 'assets/audio/phonics_audio-2/ut_rev/hut.m4a',
        ],

        // ── Round 3: Question grid ──
        [
            'type' => 'grid',
            'cols' => 3,
            'showTicks' => true,
            'question' => 'Find the picture that end with the /ut/ sound.',
            'audio' => 'assets/audio/phonics_audio-2/ub_ug/match-ub.m4a',
            'cards' => [
                [
                    'image' => 'assets/images/phonics_l2/ubug/cub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/cub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/shut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/shut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/hut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/hut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ubug/scrub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/scrub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/cut.png',
                    'audio' => 'assets/audio/phonics_audio-2/it_rev/lit.m4a',
                    'correct' => false,
                ],
            ],
        ],

        // ── Round 3: Answer —
        [
            'type' => 'answer_word',
            'image' => 'assets/images/phonics_l2/utrev/nut.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'nut',
            'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
        ],

        // ── Round 4: ──
        [
            'type' => 'grid',
            'cols' => 3,
            'showTicks' => true,
            'question' => 'Find the picture that end with the /ut/ sound.',
            'audio' => 'assets/audio/phonics_audio-2/ub_ug/match-ub.m4a',
            'cards' => [
                [
                    'image' => 'assets/images/phonics_l2/ubug/cub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/cub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/shut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/shut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/hut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/hut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ubug/scrub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/scrub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/cut.png',
                    'audio' => 'assets/audio/phonics_audio-2/it_rev/lit.m4a',
                    'correct' => false,
                ],
            ],
        ],
        // ── Round 4: Answer —
        [
            'type' => 'answer_word',
            'image' => 'assets/images/phonics_l2/utrev/cut.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'cut',
            'audio' => 'assets/audio/phonics_audio-2/ut_rev/cut.m4a',
        ],

        // ── Round 5: ──
        [
            'type' => 'grid',
            'cols' => 3,
            'showTicks' => true,
            'question' => 'Find the picture that end with the /ut/ sound.',
            'audio' => 'assets/audio/phonics_audio-2/ub_ug/match-ub.m4a',
            'cards' => [
                [
                    'image' => 'assets/images/phonics_l2/ubug/cub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/cub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/shut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/shut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/hut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/hut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'audio' => 'assets/audio/phonics_audio-2/ut_rev/nut.m4a',
                    'correct' => true,
                ],
                [
                    'image' => 'assets/images/phonics_l2/ubug/scrub.png',
                    'audio' => 'assets/audio/phonics_audio-2/ub_ug/scrub.m4a',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/cut.png',
                    'audio' => 'assets/audio/phonics_audio-2/it_rev/lit.m4a',
                    'correct' => true,
                ],
            ],
        ],

        // ── Final bear summary panel ──
        [
            'type' => 'bear_summary',
            'audio' => 'assets/audio/phonics_audio-2/op_ot/matched.m4a',
            'message' => "That's right! <br> Shut, Hut, Nut and <br> Cut end with the <br> /ut/ sound.",
            'cols' => 2,
            'cards' => [
                [
                    'image' => 'assets/images/phonics_l2/utrev/shut.png',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/hut.png',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/nut.png',
                    'correct' => false,
                ],
                [
                    'image' => 'assets/images/phonics_l2/utrev/cut.png',
                    'correct' => false,
                ],
            ],
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

        .answer-title {
            color: #F7B94A;
            font-size: 4vw;
            line-height: 100%;
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
    </style>
@endpush


@section('content')

    {{-- ── Intro panel ── --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.m4a') }}">
        <h2 class="top-title stroke">Make a Match</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To find out how to use this activity <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- ── Info / Definitions panel ── --}}
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
            <li>Rime - The rhyme chunk at the end of the word, as the ip in "ship".</li>
            <li>Word chunks - Finding words within words.</li>
        </ul>
        <div class="down-btn-container">
            <button class="doneButton hidden">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
            </button>
        </div>
    </div>


    {{-- ── All round panels — auto-generated ── --}}
    @foreach ($rounds as $round)
        {{-- ───────────────────────────────────────────────────── --}}
        @if ($round['type'] === 'grid')
            @php
                $showTicks = $round['showTicks'] ?? false;
                $cols = $round['cols'] ?? 3;
                $gap = $cols === 2 ? 'gap-[2vw]' : 'gap-[5vw]';
                $rows = array_chunk($round['cards'], $cols);
            @endphp

            <div class="phonics-panel flex flex-col justify-center gap-[2vw] items-center"
                data-slide-audio="{{ asset($round['audio']) }}">

                <div class="panel-div">
                    <h2 class="panel-title">{{ $round['question'] }}</h2>
                </div>

                <div class="mt-[3vw]">
                    @foreach ($rows as $row)
                        <div class="flex items-center {{ $gap }} w-full">
                            @foreach ($row as $card)
                                <div class="relative w-fit h-fit">
                                    <img src="{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}"
                                        class="h-[13vw]" />
                                    {{-- Show tick if this is a reveal/ticked panel and card is correct --}}
                                    @if ($showTicks && $card['correct'])
                                        <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                                            class="h-[3vw] w-[3vw] absolute bottom-[20%] right-0" />
                                    @endif
                                    <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                                        src="{{ asset($card['image']) }}" />
                                    <button class="absolute top-[15%] left-[5%] w-[3vw]" id="soundButton"
                                        data-slide-audio="{{ asset($card['audio']) }}">
                                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- ───────────────────────────────────────────────────── --}}
            {{-- TYPE: answer_word — big image + word label --}}
        @elseif ($round['type'] === 'answer_word')
            <div class="phonics-panel answer-word-panel flex flex-col justify-center items-center"
                data-slide-audio="{{ asset($round['audio']) }}">
                <img src="{{ asset($round['image']) }}" class="{{ $round['imageSize'] }}" />
                <h2 class="answer-title stroke">{{ $round['word'] }}</h2>
            </div>

            {{-- ───────────────────────────────────────────────────── --}}
            {{-- TYPE: bear_summary — bear + speech bubble + small card grid --}}
        @elseif ($round['type'] === 'bear_summary')
            @php
                $cols = $round['cols'] ?? 2;
                $gap = $cols === 2 ? 'gap-[2vw]' : 'gap-[5vw]';
                $rows = array_chunk($round['cards'], $cols);
            @endphp

            <div class="phonics-panel flex justify-between items-end w-[53vw]"
                data-slide-audio="{{ asset($round['audio']) }}">

                {{-- Card grid on the left --}}
                <div class="mt-[3vw]">
                    @foreach ($rows as $row)
                        <div class="flex items-center {{ $gap }} w-full">
                            @foreach ($row as $card)
                                <div class="relative w-fit h-fit">
                                    <img src="{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}"
                                        class="h-[13vw]" />
                                    <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                                        src="{{ asset($card['image']) }}" />
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

                {{-- Bear + speech bubble on the right --}}
                <div class="flex">
                    <div class="absolute top-[10%] right-[20%] w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/common/blank2.png') }}"
                            class="w-[20vw] h-[13vw]" />
                        <h2 class="absolute top-1/2 left-1/2 -translate-1/2 w-100 text-[1vw] text-[#A15E0D]">
                            {!! $round['message'] !!}
                        </h2>
                    </div>
                    <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[19vw]" />
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
            const doneButtons = document.querySelectorAll(".doneButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = "{{ url('/phonics/l2') }}";
            const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            function isInfoSlide(s) {
                return [...s.classList].some(c => /^info-panel-\d+$/.test(c));
            }

            function stopAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playSequence(sources, idx = 0) {
                if (idx >= sources.length) return;
                stopAudio();
                currentAudio = new Audio(sources[idx]);
                currentAudio.onended = () => playSequence(sources, idx + 1);
                currentAudio.play().catch(() => {});
            }

            function showSlide(index) {
                stopAudio();
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== index));
                const src = slides[index].getAttribute('data-slide-audio');
                const isAnswer = slides[index].classList.contains('answer-word-panel');
                if (src) playSequence(isAnswer ? [src, CHEERING] : [src]);

                const isLast = isInSpecialMode ?
                    ![...slides].slice(index + 1).some(s => s.classList.contains(specialSlideClass)) :
                    ![...slides].slice(index + 1).some(s => !isInfoSlide(s));

                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));
            }

            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    if (isInSpecialMode ? slides[next].classList.contains(specialSlideClass) : !isInfoSlide(slides[
                            next])) break;
                    next++;
                }
                if (next < slides.length) showSlide(currentSlide = next);
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopAudio();
                    window.location.href = returnURL;
                    return;
                }
                let prev = currentSlide - 1;
                while (prev > 0) {
                    if (isInSpecialMode ? slides[prev].classList.contains(specialSlideClass) : !isInfoSlide(slides[
                            prev])) break;
                    prev--;
                }
                if (isInSpecialMode && !slides[prev].classList.contains(specialSlideClass)) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                } else {
                    currentSlide = prev;
                }
                showSlide(currentSlide);
            }

            infoButtons.forEach(btn => btn.addEventListener('click', e => {
                e.preventDefault();
                returnToSlide = currentSlide;
                isInSpecialMode = true;
                specialSlideClass = [...btn.classList].find(c => c.startsWith('info-btn'))?.replace(
                    'info-btn', 'info-panel-');
                const first = [...slides].findIndex(s => s.classList.contains(specialSlideClass));
                if (first !== -1) showSlide(currentSlide = first);
            }));

            nextButtons.forEach(b => b.addEventListener('click', goNext));
            returnButton?.addEventListener('click', goBack);
            homeButton?.addEventListener('click', () => {
                stopAudio();
                window.location.href = homeURL;
            });
            doneButtons.forEach(b => b.addEventListener('click', () => {
                stopAudio();
                if (isInSpecialMode) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else window.location.href = doneURL;
            }));
            soundButtons.forEach(b => b.addEventListener('click', e => {
                e.stopPropagation();
                playSequence([b.getAttribute('data-slide-audio')]);
            }));

            showSlide(0);
        });
    </script>
@endpush
