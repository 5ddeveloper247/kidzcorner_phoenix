@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;


    $questions = [
        [
            'questionAudio' => 'assets/audio/phonics_audio-2/sw_sc/spot-swah.m4a',
            'titleAudio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a',
            'ratPosition' => 'top-[35%] left-[8%]',
            'ratAnswerPos' => 'bottom-[16%] left-[12%]',
            'ratImage' => 'rat.png',
            'circles' => [
                ['label' => 'sw', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a', 'correct' => true],
                ['label' => 'sc', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/scah.m4a', 'correct' => false],
                ['label' => 'fl', 'audio' => 'assets/audio/phonics_audio-2/fl_gl/flah.m4a', 'correct' => false],
                ['label' => 'sl', 'audio' => 'assets/audio/phonics_audio-2/cl_sl/slah.m4a', 'correct' => false],
            ],
        ],
        [
            'questionAudio' => 'assets/audio/phonics_audio-2/sw_sc/spot-scah.m4a',
            'titleAudio' => 'assets/audio/phonics_audio-2/sw_sc/scah.m4a',
            'ratPosition' => 'bottom-[16%] left-[12%]',
            'ratAnswerPos' => 'top-[35%] left-[40%]',
            'ratImage' => 'rat.png',
            'circles' => [
                ['label' => 'cl', 'audio' => 'assets/audio/phonics_audio-2/cl_sl/clah.m4a', 'correct' => false],
                ['label' => 'sw', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a', 'correct' => false],
                ['label' => 'sc', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/scah.m4a', 'correct' => true],
                ['label' => 'pr', 'audio' => 'assets/audio/phonics_audio-2/br_pr/prah.m4a', 'correct' => false],
            ],
        ],
        [
            'questionAudio' => 'assets/audio/phonics_audio-2/sw_sc/spot-swah.m4a',
            'titleAudio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a',
            'ratPosition' => 'top-[35%] left-[40%]',
            'ratAnswerPos' => 'bottom-[15%] left-[45%]',
            'ratImage' => 'rat.png',
            'circles' => [
                ['label' => 'bl', 'audio' => 'assets/audio/phonics_audio-2/bl_pl/blah.mp3', 'correct' => false],
                ['label' => 'sw', 'audio' => 'assets/audio/phonics_audio-2/sw_Sc/swah.m4a', 'correct' => true],
                ['label' => 'pr', 'audio' => 'assets/audio/phonics_audio-2/br_pr/prah.m4a', 'correct' => false],
                ['label' => 'sl', 'audio' => 'assets/audio/phonics_audio-2/cl_sl/slah.m4a', 'correct' => false],
            ],
        ],
        [
            'questionAudio' => 'assets/audio/phonics_audio-2/sw_Sc/spot-scah.m4a',
            'titleAudio' => 'assets/audio/phonics_audio-2/sw_Sc/scah.m4a',
            'ratPosition' => 'bottom-[15%] left-[45%]',
            'ratAnswerPos' => 'top-[35%] right-[12%]',
            'ratImage' => 'rat.png',
            'circles' => [
                ['label' => 'pr', 'audio' => 'assets/audio/phonics_audio-2/br_pr/prah.m4a', 'correct' => false],
                ['label' => 'gl', 'audio' => 'assets/audio/phonics_audio-2/fl_gl/glah.m4a', 'correct' => false],
                ['label' => 'sw', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a', 'correct' => false],
                ['label' => 'sc', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/scah.m4a', 'correct' => true],
            ],
        ],
        [
            'questionAudio' => 'assets/audio/phonics_audio-2/sw_sc/spot-swah.m4a',
            'titleAudio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a',
            'ratPosition' => 'top-[35%] right-[12%]',
            'ratAnswerPos' => 'bottom-[15%] right-[12%]',
            'ratImage' => 'rat.png', 
            'ratAnswerImage' => 'trat.png', 
            'circles' => [
                ['label' => 'sw', 'audio' => 'assets/audio/phonics_audio-2/sw_sc/swah.m4a', 'correct' => true],
                ['label' => 'pr', 'audio' => 'assets/audio/phonics_audio-2/br_pr/prah.m4a', 'correct' => false],
                ['label' => 'sl', 'audio' => 'assets/audio/phonics_audio-2/cl_sl/slah.m4a', 'correct' => false],
                ['label' => 'dr', 'audio' => 'assets/audio/phonics_audio-2/dr_gr/drah.m4a', 'correct' => false],
            ],
        ],
    ];
    // ============================================================
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

        .circle {
            width: 140px;
            height: 122px;
            border-radius: 50%;
            background: #FBF0D0;
            box-shadow: 0 4px 4px #00000040;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle span {
            color: #A15E0D;
            font-size: 2.5vw;
        }

        .marked {
            background: #FFD355 !important;
        }

        .before {
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

    {{-- Panel 1 – Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/spot-it.m4a') }}">
        <h2 class="top-title stroke">Spot It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>


    {{-- ✅ Auto-generated Question + Answer panels --}}
    @foreach ($questions as $q)
        {{-- 'ratAnswerImage' falls back to 'ratImage' if not set --}}
        @php $ratAnswerImage = $q['ratAnswerImage'] ?? $q['ratImage']; @endphp

        {{-- Question Panel --}}
        <div class="phonics-panel no-bg" data-slide-audio="{{ asset($q['questionAudio']) }}">
            <div class="title-top stroke -translate-1/2">
                Help the mouse get home. <br> Find the blend
                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($q['titleAudio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative">
                <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
                <img src="{{ asset('assets/images/phonics_l2/global/common/' . $q['ratImage']) }}"
                    class="w-[9vw] absolute {{ $q['ratPosition'] }}" />
                <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                    @foreach ($q['circles'] as $c)
                        <div class="circle {{ $c['correct'] ? 'before' : '' }}">
                            <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($c['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <span>{{ $c['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Answer Panel --}}
        <div class="phonics-panel no-bg">
            <div class="title-top stroke -translate-1/2">
                Help the mouse get home. <br> Find the blend
                <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($q['titleAudio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative">
                <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
                {{-- Uses ratAnswerImage if provided, otherwise falls back to ratImage --}}
                <img src="{{ asset('assets/images/phonics_l2/global/common/' . $ratAnswerImage) }}"
                    class="w-[9vw] absolute {{ $q['ratAnswerPos'] }}" />
                <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                    @foreach ($q['circles'] as $c)
                        <div class="circle {{ $c['correct'] ? 'marked' : '' }}">
                            <button class="w-[3vw]" id="soundButton" data-slide-audio="{{ asset($c['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <span>{{ $c['label'] }}</span>
                        </div>
                    @endforeach
                </div>
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

        const returnURL = "{{ url('/phonics_l2/sw_sc/swsc') }}";
        const doneURL = "{{ url('/phonics_l2/sw_sc/swsc') }}";
        const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");
            const container = document.getElementById('ajax-section');

            let currentSlide = 0;
            let currentAudio = null;
            let infoMode = false;
            let infoClass = null;
            let returnToSlide = null;

            // ── Audio ──────────────────────────────────────────────
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio = null;
                }
            }

            function playAudio(src, onEnd) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(() => {});
            }

            // ── Helpers ────────────────────────────────────────────
            function isInfoSlide(slide) {
                return [...slide.classList].some(c => /^info-panel-\d+$/.test(c));
            }

            function isAnswerSlide(slide) {
                return slide.querySelector('.marked') !== null;
            }

            // ── Show a slide ───────────────────────────────────────
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const slide = slides[idx];
                const isLast = findNext(idx) === -1;

                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));

                if (container) container.classList.toggle('no-bg', slide.classList.contains('no-bg'));

                if (isAnswerSlide(slide)) {
                    playAudio(CHEERING);
                } else {
                    playAudio(slide.getAttribute('data-slide-audio'));
                }
            }

            // ── Find next/prev (skipping info panels unless in info mode) ──
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

            // ── Navigation ─────────────────────────────────────────
            function goNext() {
                const next = findNext(currentSlide);
                if (next !== -1) showSlide(next);
            }

            function goBack() {
                if (infoMode) {
                    const prev = findPrev(currentSlide);
                    if (prev !== -1) showSlide(prev);
                    else {
                        infoMode = false;
                        infoClass = null;
                        showSlide(returnToSlide);
                    }
                    return;
                }
                const prev = findPrev(currentSlide);
                if (prev !== -1) showSlide(prev);
                else {
                    stopAudio();
                    window.location.href = returnURL;
                }
            }

            // ── Correct circle click → jump to answer slide ────────
            document.querySelectorAll('.circle.before').forEach(circle => {
                circle.addEventListener('click', () => {
                    for (let i = currentSlide + 1; i < slides.length; i++) {
                        if (slides[i].querySelector('.marked')) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

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
