@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/un_up/unup';
    $doneURL = '/phonics_l2/un_up/unup';



    $questions = [
        // ── Question 1 ──────────────────────────────────────────
        [
            'image' => 'assets/images/phonics_l2/unup/fun1.png',
            'imageSize' => 'h-[13vw]',
            'audio' => 'assets/audio/phonics_audio-2/un_up/fb-unup1.m4a',
            'sentence' => [
                ['type' => 'text', 'text' => 'The'],
                ['type' => 'blank'],
                ['type' => 'text', 'text' => 'likes to'],
                ['type' => 'blank'],
                ['type' => 'text', 'text' => 'after cars.'],
            ],
            'tip' => "Tips: Look at the picture, then read the sentence. <br>
                Encourage children to sound out the words in parts when in doubt (click on audio if needed).",
            'words' => [
                ['word' => 'pup', 'answer' => true],
                ['word' => 'tub', 'answer' => false],
                ['word' => 'ran',  'answer' => false],
                ['word' => 'run', 'answer' => true],
            ],
            'answerAudios' => [
                'assets/audio/phonics_audio-2/un_up/pup.m4a',
                'assets/audio/phonics_audio-2/un_up/run.m4a',
            ],
        ],

        // ── Question 2 ──────────────────────────────────────────
        [
            'image' => 'assets/images/phonics_l2/unup/fun2.png',
            'imageSize' => 'h-[16vw]',
            'audio' => 'assets/audio/phonics_audio-2/un_up/fb-unup2.m4a',
            'sentence' => [
                ['type' => 'text', 'text' => 'My mother eat the'],
                ['type' => 'blank'],
                ['type' => 'text', 'text' => 'and drinks the'],
                ['type' => 'blank'],
                ['type' => 'text', 'text' => 'of tea.'],
            ],
            'tip' => null,
            'words' => [
                ['word' => 'bat', 'answer' => false],
                ['word' => 'bun', 'answer' => true],
                ['word' => 'cup', 'answer' => true],
                ['word' => 'cap', 'answer' => false],
            ],
            'answerAudios' => [
                'assets/audio/phonics_audio-2/un_up/bun.m4a',
                'assets/audio/phonics_audio-2/un_up/cup.m4a',
            ],
        ],

        // ── Question 3 ──────────────────────────────────────────
        [
            'image' => 'assets/images/phonics_l2/unup/fun3.png',
            'imageSize' => 'h-[15vw]',
            'audio' => 'assets/audio/phonics_audio-2/un_up/fb-unup3.m4a',
            'sentence' => [
                ['type' => 'text', 'text' => 'Jub had'],
                ['type' => 'blank'],
                ['type' => 'text', 'text' => 'playing in the'],
                ['type' => 'blank'],
                ['type' => 'text', 'text' => '.'],
            ],
            'tip' => null,
            'words' => [
                ['word' => 'fun', 'answer' => true],
                ['word' => 'fan', 'answer' => false],
                ['word' => 'sun', 'answer' => true],
                ['word' => 'spun', 'answer' => false],
            ],
            'answerAudios' => [
                'assets/audio/phonics_audio-2/un_up/fun.m4a',
                'assets/audio/phonics_audio-2/un_up/sun.m4a',
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

        .title-top {
            font-size: 1.5vw !important;
            color: #F7B94A;
        }

        .blank-wrap {
            position: relative;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
        }

        .blank-line {
            width: 8vw;
            height: 4px;
            background: #E6A23C;
            border-top: 1px solid #C47F1E;
        }

        .answer-label {
            position: absolute;
            bottom: calc(100% + 0.3vw);
            white-space: nowrap;
            color: #f7b94a;
            font-size: 2vw;
            line-height: 1;
        }

        .q-mark {
            position: absolute;
            bottom: calc(100% + 0.2vw);
            height: 4vw;
        }
    </style>
@endpush


@section('content')

    {{-- Panel 1: Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/fun-blends.m4a') }}">
        <h2 class="top-title stroke">Fun with Words</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        
    </div>


    {{-- Question + Reveal panels — auto-generated --}}
    @foreach ($questions as $q)
        @php
            $answerWords = collect($q['words'])->where('answer', true)->values();
        @endphp

        {{-- ── Question panel ── --}}
        <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1.5vw]"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/find-fun.m4a') }}">

            <h2 class="title-top stroke">Find the missing words to complete <br> the sentence.</h2>

            <img src="{{ asset($q['image']) }}" class="{{ $q['imageSize'] }}" />

            <div class="flex items-center gap-1 text-[1.5vw] mt-3">

                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($q['audio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>

                @php $blankIndex = 0; @endphp
                @foreach ($q['sentence'] as $part)
                    @if ($part['type'] === 'text')
                        <span class="text-white">{{ $part['text'] }}</span>
                    @else
                        {{-- Wrap blank + question mark together so the ? sits above this blank --}}
                        <div class="blank-wrap">
                            @if ($blankIndex === 0)
                                <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}" class="q-mark" />
                            @endif
                            <div class="blank-line"></div>
                        </div>
                        @php $blankIndex++; @endphp
                    @endif
                @endforeach

            </div>

            <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw]">
                @foreach ($q['words'] as $w)
                    <span>{{ $w['word'] }}</span>
                @endforeach
            </div>

            @if (!empty($q['tip']))
                <p class="p-note">{!! $q['tip'] !!}</p>
            @endif
        </div>


        {{-- ── Reveal panels (one per answer word) ── --}}
        @foreach ($answerWords as $revealIdx => $answerWord)
            @php
                // All answers revealed so far (including current)
                $revealedSoFar = $answerWords->slice(0, $revealIdx + 1)->pluck('word');

                $revealAudio = $q['answerAudios'][$revealIdx] ?? null;

                // Which blank index does each answer word belong to?
                // We track this by counting blanks in the sentence and matching to answerWords
                $blankToAnswer = $answerWords; // blank 0 → answerWords[0], blank 1 → answerWords[1] etc.
            @endphp

            <div class="answer phonics-panel h-full flex flex-col justify-center items-center space-y-[2vw]"
                @if ($revealAudio) data-slide-audio="{{ asset($revealAudio) }}" @endif>

                <h2 class="title-top stroke">Find the missing words to complete <br> the sentence.</h2>

                <img src="{{ asset($q['image']) }}" class="{{ $q['imageSize'] }}" />

                <div class="flex items-center gap-2 text-[1.5vw] mt-3">

                    <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($q['audio']) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>

                    @php $blankIndex = 0; @endphp
                    @foreach ($q['sentence'] as $part)
                        @if ($part['type'] === 'text')
                            <span class="text-white">{{ $part['text'] }}</span>
                        @else
                            @php
                                $wordForThisBlank = $blankToAnswer[$blankIndex]['word'] ?? null;
                                $isRevealed = $revealedSoFar->contains($wordForThisBlank);
                                $isNextToReveal = $blankIndex === $revealIdx + 1;
                                $blankIndex++;
                            @endphp

                            {{--
                                Each blank is wrapped so its label/question-mark
                                sits directly above it — no left/right guessing needed.
                            --}}
                            <div class="blank-wrap">
                                @if ($isRevealed && $wordForThisBlank)
                                    {{-- Answer label floats above this blank automatically --}}
                                    <span class="answer-label">{{ $wordForThisBlank }}</span>
                                @elseif ($isNextToReveal)
                                    {{-- Question mark above the next unrevealed blank --}}
                                    <img src="{{ asset('assets/images/phonics_l2/blpl/q.png') }}" class="q-mark" />
                                @endif
                                <div class="blank-line"></div>
                            </div>
                        @endif
                    @endforeach

                </div>

                {{-- Word list — hide already-revealed words --}}
                <div class="flex gap-[3vw] text-[#f7b94a] text-[2vw]">
                    @foreach ($q['words'] as $w)
                        <span class="{{ $revealedSoFar->contains($w['word']) ? 'opacity-0' : '' }}">
                            {{ $w['word'] }}
                        </span>
                    @endforeach
                </div>

            </div>
        @endforeach
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
            const soundButtons = document.querySelectorAll("[id^='soundButton']");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = "{{ url('/phonics/l2') }}";
            const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;

            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
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
                slides.forEach((s, i) => s.classList.toggle("hidden", i !== index));
                stopAudio();
                const src = slides[index].getAttribute('data-slide-audio');
                const isAnswer = slides[index].classList.contains('answer');
                if (src) playSequence(isAnswer ? [src, CHEERING] : [src]);

                const isLast = index === slides.length - 1;
                nextButtons.forEach(b => b.classList.toggle("hidden", isLast));
                doneButtons.forEach(b => b.classList.toggle("hidden", !isLast));
            }

            nextButtons.forEach(b => b.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) showSlide(++currentSlide);
            }));

            returnButton?.addEventListener("click", () => {
                if (currentSlide === 0) {
                    stopAudio();
                    window.location.href = returnURL;
                } else showSlide(--currentSlide);
            });

            homeButton?.addEventListener("click", () => {
                stopAudio();
                window.location.href = homeURL;
            });

            doneButtons.forEach(b => b.addEventListener("click", () => {
                stopAudio();
                window.location.href = doneURL;
            }));

            soundButtons.forEach(b => b.addEventListener("click", e => {
                e.stopPropagation();
                playSequence([b.getAttribute('data-slide-audio')]);
            }));

            showSlide(0);
        });
    </script>
@endpush
