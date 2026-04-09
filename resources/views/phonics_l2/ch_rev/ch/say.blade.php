@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/ch_rev/ch';
    $doneURL = '/phonics_l2/ch_rev/ch';

    $diagraph = 'ch';

    $sideBtns = ['assets/audio/phonics_audio-2/ch_rev/ch.m4a', 'assets/audio/phonics_audio-2/ch_rev/chah.m4a'];

    $words = [
        [
            'image' => 'assets/images/phonics_l2/chrev/couch.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'couch',
            'wordAudio' => 'assets/audio/phonics_audio-2/sh_th/fi-sh.m4a',
            'tip' =>
                'Tips: Invite children to name the object. <br> Encourage them to sound out the words by parts (e.g. /cl/..../ocks/...ships)',
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/peach.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'peach',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-ree.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/bench.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'bench',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-read.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/beach.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'beach',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-irty.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/hatch.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'hatch',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-in.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/match.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'match',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-ick.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/catch.png',
            'imageSize' => 'h-[20vw]',
            'word' => 'catch',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-ief.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/rench.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'rench',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-row.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/snatch.png',
            'imageSize' => 'w-[20vw]',
            'word' => 'snatch',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-ink.m4a',
            'tip' => null,
        ],
        [
            'image' => 'assets/images/phonics_l2/chrev/grouch.png',
            'imageSize' => 'h-[20vw]',
            'word' => 'grouch',
            'wordAudio' => 'assets/audio/phonics_audio-2/ch_rev/ch-imble.m4a',
            'tip' => null,
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

        .circle {
            width: 3vw;
            height: 3vw;
            border: 2px solid #70af39;
            border-radius: 50%;
            position: absolute;
            top: 1vw;
            right: 0;
        }
    </style>
@endpush


@section('content')

    {{-- ── Panel 1: Intro ── --}}
    <div class="phonics-panel flex flex-col justify-between items-center h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sh_ch/say.m4a') }}">
        {{-- <h2 class="top-title stroke">Let's Blend</h2> --}}
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/say.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[20vw]" />
        </div>
        <p class="p-note">Tips: Follow the sequence of activities numbered, or click on any activity of your choice. <br>
            For a definition of blends and other phonics terminologies, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- ── Info panel (definitions) ── --}}
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

    {{-- Intro Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sh_ch/sh1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />

        <div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[20vw]" />
                <h2
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center">
                    Can you read </br> these words?
                </h2>
            </div>

            <div class="flex gap-[2vw] justify-center items-center panel-title">
                <h2 class="stroke">lunch</h2>
                <h2 class="stroke">speech</h2>
                <h2 class="stroke">touch</h2>
            </div>

        </div>
    </div>

    {{-- Intro Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sh_ch/sh2.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />

        <div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[23vw]" />
                <h2
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                    Can you tell me <br>
                    what these <br>
                    words have in <br>
                    common?
                </h2>

                <button class="absolute right-[16%] top-[22%] w-[3.5vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ch_rev/chah.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="flex gap-[2vw] justify-center items-center panel-title">
                <h2 class="stroke">lunch</h2>
                <h2 class="stroke">speech</h2>
                <h2 class="stroke">touch</h2>
            </div>
        </div>
    </div>


    {{-- Intro Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ch_rev/ch2.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[23vw]" />
                <h2
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                    You’re right! <br>
                    Shine, she and <br>
                    sharp begin with '<span class="text-[#70af39]">{{ $diagraph }}</span>'.
                </h2>
            </div>

            <div class="flex gap-[2vw] justify-center items-center panel-title">
                <div class="relative w-fit h-fit">
                    <h2 class="stroke">lunch</h2>
                    <div class="circle"></div>
                </div>

                <div class="relative w-fit h-fit">
                    <h2 class="stroke">speech</h2>
                    <div class="circle"></div>
                </div>

                <div class="relative w-fit h-fit">
                    <h2 class="stroke">touch</h2>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Intro Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ch_rev/ch3.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                Do you know <br>
                the sound of <br>
                '<span class="text-[#70af39]">{{ $diagraph }}</span>'.
            </h2>
        </div>

    </div>

    {{-- Intro Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ch_rev/ch4.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[35vw] h-[25vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[1.8vw] text-center w-100">
                '<span class="text-[#70af39]">{{ $diagraph }}</span>' makes the <span class="opacity-0">----</span>
                sound. <br>
                Let's practice saying <br> the sound of <br> the diagraph '<span
                    class="text-[#70af39]">{{ $diagraph }}</span>'.
            </h2>

            <button class="absolute right-[36%] top-[25%] w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ch_rev/chah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

    </div>

    {{-- Intro Panel --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ch_rev/ch5.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[32vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                Do you know some words <br>
                that begin with the <br>
                digraph '<span class="text-[#70af39]">{{ $diagraph }}</span>'?
            </h2>
        </div>

    </div>
    {{-- -=========================================================== --}}



    @foreach ($words as $item)
        {{-- Question panel --}}
        <div class="phonics-panel flex flex-col items-center justify-between">

            <div class="flex gap-x-[4vw] items-center justify-center">
                <div>
                    <span class="text-white text-[1.5vw]">Ending diagraph</span>
                    <h1 class="large-title h-fit">_{{ $diagraph }}</h1>
                </div>
                <img src="{{ asset($item['image']) }}" class="{{ $item['imageSize'] }}" />
            </div>

            @if (!empty($item['tip']))
                <p class="p-note">{!! $item['tip'] !!}</p>
            @endif

            {{-- Side sound buttons --}}
            <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
                @foreach ($sideBtns as $sideAudio)
                    <button class="w-[5vw]" id="soundButton" data-slide-audio="{{ asset($sideAudio) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Answer panel --}}
        <div class="phonics-panel flex flex-col items-center justify-center">

            <div class="flex gap-x-[4vw] items-center justify-center">
                <div>
                    <span class="text-white text-[1.5vw]">Ending diagraph</span>
                    <h1 class="large-title h-fit">_{{ $diagraph }}</h1>
                </div>
                <img src="{{ asset($item['image']) }}" class="{{ $item['imageSize'] }}" />
            </div>

            {{-- Side sound buttons --}}
            <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
                @foreach ($sideBtns as $sideAudio)
                    <button class="w-[5vw]" id="soundButton" data-slide-audio="{{ asset($sideAudio) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                @endforeach
            </div>

            {{-- Word reveal --}}
            <div class="flex items-center justify-center new">
                <button class="w-[3.5vw]" id="soundButton" data-slide-audio="{{ asset($item['wordAudio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
                <h1 class="h-fit text-white text-[4vw]">{{ $item['word'] }}</h1>
            </div>
        </div>
    @endforeach




    {{-- ==================================== --}}
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
            const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/speeching.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // ── Helpers ──────────────────────────────────────────────
            function isInfoSlide(slide) {
                return [...slide.classList].some(c => /^info-panel-\d+$/.test(c));
            }

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

            // ── Audio logic ───────────────────────────────────────────
            function getAudioForSlide(slide) {
                const newContainer = slide.querySelector('.new');
                const slideSrc = slide.getAttribute('data-slide-audio');

                if (newContainer) {
                    // Reveal panel: play the word audio + speeching
                    const wordBtn = newContainer.querySelector('[data-slide-audio]');
                    return wordBtn ? [wordBtn.getAttribute('data-slide-audio'), CHEERING] : [];
                }

                // Normal panel: slide audio + side buttons
                const sources = slideSrc ? [slideSrc] : [];
                slide.querySelectorAll('.flex.flex-col [data-slide-audio]').forEach(btn => {
                    const src = btn.getAttribute('data-slide-audio');
                    if (src && !sources.includes(src)) sources.push(src);
                });
                return sources;
            }

            // ── Show slide ────────────────────────────────────────────
            function showSlide(index) {
                stopAudio();
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== index));
                playSequence(getAudioForSlide(slides[index]));

                // Next/Done button visibility
                const isLast = isInSpecialMode ?
                    !([...slides].slice(index + 1).some(s => s.classList.contains(specialSlideClass))) :
                    !([...slides].slice(index + 1).some(s => !isInfoSlide(s)));

                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));
            }

            // ── Navigation ────────────────────────────────────────────
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

            // ── Info panel ────────────────────────────────────────────
            infoButtons.forEach(btn => btn.addEventListener('click', e => {
                e.preventDefault();
                returnToSlide = currentSlide;
                isInSpecialMode = true;
                specialSlideClass = [...btn.classList].find(c => c.startsWith('info-btn'))?.replace(
                    'info-btn', 'info-panel-');
                const first = [...slides].findIndex(s => s.classList.contains(specialSlideClass));
                if (first !== -1) showSlide(currentSlide = first);
            }));

            // ── Event listeners ───────────────────────────────────────
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
