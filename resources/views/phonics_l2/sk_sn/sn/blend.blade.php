@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $blend = 'sn';

    $blendSound1 = 'assets/audio/phonics_audio-2/sk_sn/sn.m4a'; 
    $blendSound2 = 'assets/audio/phonics_audio-2/sk_sn/snah.m4a';

    $introAudio = 'assets/audio/phonics_audio-2/bl_pl/bl1.m4a';

    $wordCards = [
        [
            'image' => 'assets/images/phonics_l2/sksn/snail.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'snail',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ail.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/snake.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'snake',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ake.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/sneeze.png',
            'imageSize' => 'h-[20vw]',
            'word' => 'sneeze',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-eeze.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/snap.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'snap',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ap.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/sniff.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'sniff',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-iff.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/snow.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'snow',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-em.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/snore.png',
            'imageSize' => 'h-[20vw]',
            'word' => 'snore',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ore.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/snob.png',
            'imageSize' => 'h-[20vw]',
            'word' => 'snob',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-ob.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/snatch.png',
            'imageSize' => 'w-[25vw]',
            'word' => 'snatch',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-atch.m4a',
        ],
        [
            'image' => 'assets/images/phonics_l2/sksn/snorkel.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'snorkel',
            'wordAudio' => 'assets/audio/phonics_audio-2/sk_sn/sn-orkel.m4a',
        ]
    ];

    $spotWords = [
        // Row 1 (2 words)
        ['word' => 'snaps', 'blend' => true, 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snap.m4a'],
        ['word' => 'slip', 'blend' => false, 'audio' => 'assets/audio/phonics_audio-2/cl_sl/slip.m4a'],
        // Row 2 (3 words)
        ['word' => 'school', 'blend' => false, 'audio' => 'assets/audio/phonics_audio-2/cl_sl/school.m4a'],
        ['word' => 'snake', 'blend' => true, 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snake.m4a'],
        ['word' => 'snore', 'blend' => true, 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snore.m4a'],
        // Row 3 (2 words)
        ['word' => 'snail', 'blend' => true, 'audio' => 'assets/audio/phonics_audio-2/sk_sn/snail.m4a'],
        ['word' => 'spin', 'blend' => false, 'audio' => 'assets/audio/phonics_audio-2/sp_st/spin.m4a'],
    ];

    $blendWordsCount = count(array_filter($spotWords, fn($w) => $w['blend']));

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

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .large-title {
            color: #F7B94A;
            font-size: 9vw !important;
        }

        .panel-ul {
            color: white;
            font-size: 1.1vw;
            padding-left: 3vw;
        }
    </style>
@endpush


@section('content')

    {{-- PANEL 1 — Intro --}}
    <div class="phonics-panel flex flex-col justify-between items-center h-full" data-slide-audio="{{ asset($introAudio) }}">
        <h2 class="top-title stroke">Let's Blend</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blend.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[20vw]" />
        </div>
        <p class="p-note">Tips: Follow the sequence of activities, or click any activity of your choice. <br>
            For definitions of phonics terms, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Info panel   --}}
    <div class="phonics-panel info-panel-1 flex flex-col gap-y-[1vw]">
        <h1 class="panel-title">Definitions</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>Phonics - A method of teaching reading and spelling that stresses symbol-sound relationships.</li>
            <li>Phonological Awareness - Understanding how spoken language can be broken into smaller components (words,
                syllables, onset-rhymes, phonemes).</li>
            <li>Phonemic Awareness - The ability to reflect and manipulate the smallest units of sound in language.</li>
            <li>Blends - A group of consonants with no vowels between them; each consonant keeps its own sound.</li>
            <li>Digraphs - Two letters that represent one speech sound (e.g. ch in "chin").</li>
            <li>Word Families - Words that share the same rime (e.g. fast, past, last).</li>
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


    {{-- PANELS 2–4 — Mascot intro questions --}}

    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sp_st/sst1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="w-[30vw] h-[20vw]" />
            <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[#A15E0D] text-[2vw] text-center">
                Do you know the <br> sound of '<span class="text-[#70af39]">{{ $blend }}</span>'?
            </h2>
        </div>
    </div>

    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sp_st/sst2.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[#A15E0D] text-[2vw] text-center w-100">
                '<span class="text-[#70af39]">{{ $blend }}</span>' sounds like <br>
                Let's practice saying <br> the sound of <br>
                the blend '<span class="text-[#70af39]">{{ $blend }}</span>'.
            </h2>
            <button class="absolute right-[16%] top-[22%] w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset($blendSound2) }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sp_st/sst3.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[#A15E0D] text-[2vw] text-center w-100">
                Do you know what <br> words begin <br> with '<span class="text-[#70af39]">{{ $blend }}</span>'.
            </h2>
        </div>
    </div>


    {{-- WORD CARDS --}}

    @foreach ($wordCards as $card)
        {{-- Slide A: image only --}}
        <div class="phonics-panel">
            <div class="flex gap-x-[4vw] items-center justify-center">
                <h1 class="large-title h-fit">{{ $blend }}</h1>
                <img src="{{ asset($card['image']) }}" class="{{ $card['imageSize'] }}" />
            </div>
            <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
                <button class="w-[5vw]" id="soundButton" data-slide-audio="{{ asset($blendSound1) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
                <button class="w-[5vw]" id="soundButton" data-slide-audio="{{ asset($blendSound2) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        {{-- Slide B: image + word revealed --}}
        <div class="phonics-panel">
            <div class="flex gap-x-[4vw] items-center justify-center">
                <h1 class="large-title h-fit">{{ $blend }}</h1>
                <img src="{{ asset($card['image']) }}" class="{{ $card['imageSize'] }}" />
            </div>
            <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
                <button class="w-[5vw]" id="soundButton" data-slide-audio="{{ asset($blendSound1) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
                <button class="w-[5vw]" id="soundButton" data-slide-audio="{{ asset($blendSound2) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="flex items-center justify-center new">
                <button class="w-[3.5vw]" id="soundButton" data-slide-audio="{{ asset($card['wordAudio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
                <h1 class="h-fit text-white text-[4vw]">{{ $card['word'] }}</h1>
            </div>
        </div>
    @endforeach


    {{-- SPOT THE WORD — transition panel --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sp_st/sst4.m4a') }}">
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="w-[30vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-[#A15E0D] text-[2vw] text-center w-100">
                    Let's spot the <br> words that begin <br>
                    with '<span class="text-[#70af39]">{{ $blend }}</span>'!
                </h2>
            </div>
        </div>
        <p class="p-note">Tips: Listen to the target blend sound, <br>
            then encourage children to sound out the words by parts.</p>
    </div>


    @php
        function spotCard(array $w, bool $revealed, string $blend): string
        {
            $text = $revealed
                ? '<span class="text-[#2D9CDB] answer">' . $blend . '</span>' . substr($w['word'], strlen($blend))
                : $w['word'];
            $audio = asset($w['audio']);
            $img = asset('assets/images/phonics_l2/global/guess.png');
            $btn = asset('assets/images/phonicsl1/global/btns/sound-btn.png');
            return '
                <div class="relative w-fit h-fit">
                    <img src="' .
                $img .
                '" class="w-[15vw]" />
                    <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-[#A15E0D] text-[2vw] text-center">' .
                $text .
                '</h2>
                    <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton" data-slide-audio="' .
                $audio .
                '">
                        <img src="' .
                $btn .
                '" />
                    </button>
                </div>';
        }
    @endphp

    @for ($step = -1; $step < $blendWordsCount; $step++)
        @php $blendSeen = 0; @endphp

        <div class="phonics-panel flex flex-col items-center w-full">

            {{-- Row 1: words 0–1 --}}
            <div class="flex justify-between w-[100%] px-10">
                @foreach (array_slice($spotWords, 0, 2) as $w)
                    @php
                        $revealed = $w['blend'] && $blendSeen <= $step;
                        if ($w['blend']) {
                            $blendSeen++;
                        }
                    @endphp
                    {!! spotCard($w, $revealed, $blend) !!}
                @endforeach
            </div>

            {{-- Row 2: words 2–4 --}}
            <div class="w-[90%] flex justify-center">
                @foreach (array_slice($spotWords, 2, 3) as $w)
                    @php
                        $revealed = $w['blend'] && $blendSeen <= $step;
                        if ($w['blend']) {
                            $blendSeen++;
                        }
                    @endphp
                    {!! spotCard($w, $revealed, $blend) !!}
                @endforeach
            </div>

            {{-- Row 3: words 5–6 --}}
            <div class="flex justify-between w-[100%] px-10">
                @foreach (array_slice($spotWords, 5, 2) as $w)
                    @php
                        $revealed = $w['blend'] && $blendSeen <= $step;
                        if ($w['blend']) {
                            $blendSeen++;
                        }
                    @endphp
                    {!! spotCard($w, $revealed, $blend) !!}
                @endforeach
            </div>

        </div>
    @endfor


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
        <button class="doneButton hidden"><img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
        </button>
    </div>

@endsection


@push('script')
    <script>
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        const returnURL = "{{ url('/phonics_l2/sk_sn/sn') }}";
        const doneURL = "{{ url('/phonics_l2/sk_sn/sn') }}";
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

            // ── Audio ──────────────────────────────────────────────
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

            // ── What audio plays on each slide type ───────────────
            function playSlideAudio(slide) {
                const answerSpans = slide.querySelectorAll('.answer');
                const newContainer = slide.querySelector('.new');

                if (answerSpans.length > 0) {
                    // Spot-the-word answer: play each highlighted word then cheering
                    const sources = [];
                    answerSpans.forEach(span => {
                        const btn = span.closest('.relative')?.querySelector('[data-slide-audio]');
                        if (btn) sources.push(btn.getAttribute('data-slide-audio'));
                    });
                    sources.push(CHEERING);
                    playSequence(sources);

                } else if (newContainer) {
                    // Word reveal slide: play only the .new button
                    const src = newContainer.querySelector('[data-slide-audio]')?.getAttribute('data-slide-audio');
                    if (src) playSequence([src]);

                } else {
                    // Normal slide: slide audio + side blend buttons
                    const sources = [];
                    const slideSrc = slide.getAttribute('data-slide-audio');
                    if (slideSrc) sources.push(slideSrc);
                    slide.querySelectorAll('.flex.flex-col [data-slide-audio]').forEach(btn => {
                        const src = btn.getAttribute('data-slide-audio');
                        if (src && !sources.includes(src)) sources.push(src);
                    });
                    playSequence(sources);
                }
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

                playSlideAudio(slides[idx]);
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
                playSequence([btn.getAttribute('data-slide-audio')]);
            }));

            // ── Info panel ("Click here") link ─────────────────────
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
