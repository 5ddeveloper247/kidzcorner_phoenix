@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/sk_sn/sksn';
    $doneURL = '/phonics_l2/sk_sn/sksn';

    $questions = [
        [
            'image' => 'assets/images/phonics_l2/sksn/skip.png',
            'imageSize' => 'h-[15vw]',
            'ending' => 'ip',
            'answerAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ip.m4a',
            'note' =>
                'Tips: Invite children to name the object. <br> Encourage them to listen and identify the initial blend while saying the word.',
            'choices' => [
                ['blend' => 'pr', 'audio' => 'assets/audio/phonics_audio-2/br_pr/prah.m4a', 'correct' => false],
                ['blend' => 'sn', 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snah.m4a', 'correct' => true],
                ['blend' => 'sp', 'audio' => 'assets/audio/phonics_audio-2/sp_st/spah.m4a', 'correct' => false],
                ['blend' => 'sl', 'audio' => 'assets/audio/phonics_audio-2/cl_sl/flah.m4a', 'correct' => false],
            ],
        ],

        [
            'image' => 'assets/images/phonics_l2/sksn/sneeze.png',
            'imageSize' => 'h-[15vw]',
            'ending' => 'eeze',
            'answerAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-eeze.m4a',
            'note' => null,
            'choices' => [
                ['blend' => 'sn', 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snah.m4a', 'correct' => true],
                ['blend' => 'sw', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a', 'correct' => false],
                ['blend' => 'sl', 'audio' => 'assets/audio/phonics_audio-2/cl_sl/slah.m4a', 'correct' => false],
                ['blend' => 'br', 'audio' => 'assets/audio/phonics_audio-2/br_pr/brah.m4a', 'correct' => false],
            ],
        ],

        [
            'image' => 'assets/images/phonics_l2/sksn/snore.png',
            'imageSize' => 'h-[15vw]',
            'ending' => 'ore',
            'answerAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ore.m4a',
            'note' => null,
            'choices' => [
                ['blend' => 'pl', 'audio' => 'assets/audio/phonics_audio-2/bl_pl/plah.m4a', 'correct' => false],
                ['blend' => 'sn', 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snah.m4a', 'correct' => true],
                ['blend' => 'sc', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/scah.m4a', 'correct' => false],
                ['blend' => 'br', 'audio' => 'assets/audio/phonics_audio-2/br_pr/brah.m4a', 'correct' => false],
            ],
        ],

        [
            'image' => 'assets/images/phonics_l2/sksn/skunk.png',
            'imageSize' => 'w-[15vw]',
            'ending' => 'unk',
            'answerAudio' => 'assets/audio/phonics_audio-2/sk_sn/sk-unk.m4a',
            'note' => null,
            'choices' => [
                ['blend' => 'br', 'audio' => 'assets/audio/phonics_audio-2/br_pr/brah.m4a', 'correct' => false],
                ['blend' => 'gr', 'audio' => 'assets/audio/phonics_audio-2/dr_gr/grah.m4a', 'correct' => false],
                ['blend' => 'sk', 'audio' => 'assets/audio/phonics_audio-2/sk_sn/skah.m4a', 'correct' => true],
                ['blend' => 'pr', 'audio' => 'assets/audio/phonics_audio-2/br_pr/prah.m4a', 'correct' => false],
            ],
        ],

        [
            'image' => 'assets/images/phonics_l2/sksn/snake.png',
            'imageSize' => 'w-[15vw]',
            'ending' => 'ake',
            'answerAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ake.m4a',
            'note' => null,
            'choices' => [
                ['blend' => 'sn', 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snah.m4a', 'correct' => true],
                ['blend' => 'pl', 'audio' => 'assets/audio/phonics_audio-2/bl_pl/plah.m4a', 'correct' => false],
                ['blend' => 'cl', 'audio' => 'assets/audio/phonics_audio-2/cl_sl/clah.m4a', 'correct' => false],
                ['blend' => 'sc', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/scah.m4a', 'correct' => false],
            ],
        ],

        [
            'image' => 'assets/images/phonics_l2/sksn/skates.png',
            'imageSize' => 'h-[15vw]',
            'ending' => 'ates',
            'answerAudio' => 'assets/audio/phonics_audio-2/sk_sn/sk-ates.m4a',
            'note' => null,
            'choices' => [
                ['blend' => 'cr', 'audio' => 'assets/audio/phonics_audio-2/fr_cr/crah.m4a', 'correct' => false],
                ['blend' => 'sk', 'audio' => 'assets/audio/phonics_audio-2/sk_sn/skah.m4a', 'correct' => true],
                ['blend' => 'tr', 'audio' => 'assets/audio/phonics_audio-2/tr_rev/trah.m4a', 'correct' => false],
                ['blend' => 'fr', 'audio' => 'assets/audio/phonics_audio-2/fr_cr/frah.m4a', 'correct' => false],
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
            font-size: 1.5vw !important;
            color: #F7B94A;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }

        .box {
            width: 160px;
            height: 80px;
            border-radius: 10px;
            background: #FBF0D0;
            box-shadow: 0 4px 4px #00000040;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box span {
            color: #A15E0D;
            font-size: 2.5vw;
        }

        .box.answer {
            cursor: pointer;
        }
    </style>
@endpush


@section('content')

    {{-- PANEL 1 — Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.m4a') }}">
        <h2 class="top-title stroke">It Begins With</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Info panel   --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>


    {{-- QUESTION PANELS — s --}}

    @foreach ($questions as $qIndex => $q)
        <div class="phonics-panel h-full space-y-[1vw]"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}"
            data-answer-audio="{{ asset($q['answerAudio']) }}">

            <h2 class="title-top stroke">
                Look at the picture. <br>
                Find the blend that completes the name of this item.
            </h2>

            <div class="flex flex-col items-center space-y-[1vw]">

                {{-- The 4 choice boxes --}}
                <div class="flex items-center gap-[1.5vw]">
                    @foreach ($q['choices'] as $choice)
                        <div class="box {{ $choice['correct'] ? 'answer' : '' }}">
                            <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($choice['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <span>{{ $choice['blend'] }}</span>
                        </div>
                    @endforeach
                </div>

                {{-- Image + blank box + word ending --}}
                <div class="flex items-end justify-center gap-[1vw]">
                    <img src="{{ asset($q['image']) }}" class="{{ $q['imageSize'] }}" />
                    <div class="flex items-center gap-4">
                        <div class="box answer-slot"></div>
                        <span class="text-[2.5vw] text-[#f7b94a]">{{ $q['ending'] }}</span>
                    </div>
                </div>

            </div>

            {{--  p-note --}}
            @if (!empty($q['note']))
                <p class="p-note">{!! $q['note'] !!}</p>
            @endif

        </div>
    @endforeach


    {{-- NAVIGATION BUTTONS --}}
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
        const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

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

            // ── Audio ────────────────────────────────────────────────
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

            // ── Helpers ──────────────────────────────────────────────
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

            // ── Reset a question slide to its original unanswered state ──
            function resetSlide(slide) {
                const answerBox = slide.querySelector('.box.answer');
                if (answerBox) {
                    answerBox.classList.remove('opacity-0');
                    answerBox.style.pointerEvents = '';
                }
                const slot = slide.querySelector('.answer-slot');
                if (slot) slot.innerHTML = '';
            }

            // ── Show a slide ─────────────────────────────────────────
            function showSlide(idx) {
                stopAudio();

                // Reset the slide we're leaving
                if (currentSlide !== idx) resetSlide(slides[currentSlide]);

                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                // Play slide audio
                const src = slides[idx].getAttribute('data-slide-audio');
                if (src) playSequence([src]);

                const isLast = findNext(idx) === -1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));
            }

            // ── Answer box click ─────────────────────────────────────
            slides.forEach(slide => {
                const answerBox = slide.querySelector('.box.answer');
                if (!answerBox) return;

                answerBox.addEventListener('click', () => {
                    // Hide the answer box from choices
                    answerBox.classList.add('opacity-0');
                    answerBox.style.pointerEvents = 'none';

                    // Fill the blank slot with the answer blend text
                    const blendText = answerBox.querySelector('span')?.textContent || '';
                    const slot = slide.querySelector('.answer-slot');
                    if (slot) slot.innerHTML = `<span>${blendText}</span>`;

                    // Play: word audio → cheering
                    const wordAudio = slide.getAttribute('data-answer-audio');
                    playSequence([wordAudio, CHEERING]);

                    // Update next/done buttons
                    const idx = [...slides].indexOf(slide);
                    const isLast = findNext(idx) === -1;
                    nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                    doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));
                });
            });

            // ── Sound buttons ────────────────────────────────────────
            soundButtons.forEach(btn => btn.addEventListener('click', e => {
                e.stopPropagation();
                playSequence([btn.getAttribute('data-slide-audio')]);
            }));

            // ── Navigation ───────────────────────────────────────────
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

            // ── Info panel link ──────────────────────────────────────
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
                if (infoMode) {
                    infoMode = false;
                    infoClass = null;
                    showSlide(returnToSlide);
                } else window.location.href = doneURL;
            }));

            showSlide(0);
        });
    </script>
@endpush
