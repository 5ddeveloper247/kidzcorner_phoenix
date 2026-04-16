    @extends('layout.master')
    @section('title', 'Dynamic Presentation')

    @php
        $showBackground = true;

        $returnURL = '/phonics_l2/ig_ip/igip';
        $doneURL = '/phonics_l2/ig_ip/igip';
        $cheerAudio = 'assets/audio/phonics_audio-2/common/cheering.m4a';

        $questions = [
            // ── Question 1 ──────────────────────────────
            [
                'image' => 'assets/images/phonics_l2/igip/wig.png',
                'image_size' => 'w-[15vw]',
                'audio' => 'assets/audio/phonics_audio-2/ig_ip/wig.m4a',
                'tip' =>
                    'Tips: Invite children to name the object. <br> Encourage them to listen and identify the initial blend while saying the word.',

                'word_prefix' => 'h',
                'word_suffix' => 'ig',

                'boxes' => [
                    ['text' => 'it', 'audio' => 'assets/audio/phonics_audio-2/it_rev/itah.m4a', 'isCorrect' => false],
                    ['text' => 'in', 'audio' => 'assets/audio/phonics_audio-2/id_in/inah.m4a', 'isCorrect' => false],
                    ['text' => 'id', 'audio' => 'assets/audio/phonics_audio-2/id_in/idah.m4a', 'isCorrect' => false],
                    ['text' => 'ig', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/igah.m4a', 'isCorrect' => true],
                ],
            ],
            // ── Question 2 ──────────────────────────────
            [
                'image' => 'assets/images/phonics_l2/igip/skip.png',
                'image_size' => 'h-[15vw]',
                'audio' => 'assets/audio/phonics_audio-2/ig_ip/skip.m4a',
                'tip' => null,

                'word_prefix' => 'sk',
                'word_suffix' => 'ip',

                'boxes' => [
                    ['text' => 'it', 'audio' => 'assets/audio/phonics_audio-2/it_rev/itah.m4a', 'isCorrect' => false],
                    ['text' => 'in', 'audio' => 'assets/audio/phonics_audio-2/id_in/inah.m4a', 'isCorrect' => false],
                    ['text' => 'id', 'audio' => 'assets/audio/phonics_audio-2/id_in/idah.m4a', 'isCorrect' => false],
                    ['text' => 'ip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/ipah.m4a', 'isCorrect' => true],
                ],
            ],
            // ── Question 3 ──────────────────────────────
            [
                'image' => 'assets/images/phonics_l2/igip/big.png',
                'image_size' => 'w-[15vw]',
                'audio' => 'assets/audio/phonics_audio-2/ig_ip/big.m4a',
                'tip' => null,

                'word_prefix' => 'b',
                'word_suffix' => 'ig',

                'boxes' => [
                    ['text' => 'id', 'audio' => 'assets/audio/phonics_audio-2/id_in/idah.m4a', 'isCorrect' => false],
                    ['text' => 'it', 'audio' => 'assets/audio/phonics_audio-2/it_rev/itah.m4a', 'isCorrect' => false],
                    ['text' => 'ip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/ipah.m4a', 'isCorrect' => false],
                    ['text' => 'ig', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/igah.m4a', 'isCorrect' => true],
                ],
            ],
            // ── Question 4 ──────────────────────────────
            [
                'image' => 'assets/images/phonics_l2/igip/drip.png',
                'image_size' => 'w-[15vw]',
                'audio' => 'assets/audio/phonics_audio-2/ig_ip/drip.m4a',
                'tip' => null,

                'word_prefix' => 'dr',
                'word_suffix' => 'ip',

                'boxes' => [
                    ['text' => 'ip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/ipah.m4a', 'isCorrect' => true],
                    ['text' => 'it', 'audio' => 'assets/audio/phonics_audio-2/it_rev/itah.m4a', 'isCorrect' => false],
                    ['text' => 'in', 'audio' => 'assets/audio/phonics_audio-2/id_in/inah.m4a', 'isCorrect' => false],
                    ['text' => 'ig', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/igah.m4a', 'isCorrect' => false],
                ],
            ],
            // ── Question 5 ──────────────────────────────
            [
                'image' => 'assets/images/phonics_l2/igip/dig.png',
                'image_size' => 'w-[15vw]',
                'audio' => 'assets/audio/phonics_audio-2/ig_ip/dig.m4a',
                'tip' => null,

                'word_prefix' => 'd',
                'word_suffix' => 'ip',

                'boxes' => [
                    ['text' => 'ig', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/igah.m4a', 'isCorrect' => true],
                    ['text' => 'ip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/ipah.m4a', 'isCorrect' => false],
                    ['text' => 'id', 'audio' => 'assets/audio/phonics_audio-2/id_in/idah.m4a', 'isCorrect' => false],
                    ['text' => 'it', 'audio' => 'assets/audio/phonics_audio-2/it_rev/itah.m4a', 'isCorrect' => false],
                ],
            ],
            // ── Question 6    ──────────────────────────────
            [
                'image' => 'assets/images/phonics_l2/igip/skip.png',
                'image_size' => 'h-[15vw]',
                'audio' => 'assets/audio/phonics_audio-2/ig_ip/skip.m4a',
                'tip' => null,

                'word_prefix' => 'sk',
                'word_suffix' => 'ip',

                'boxes' => [
                    ['text' => 'ip', 'audio' => 'assets/audio/phonics_audio-2/ig_ip/ipah.m4a', 'isCorrect' => true],
                    ['text' => 'in', 'audio' => 'assets/audio/phonics_audio-2/id_in/inah.m4a', 'isCorrect' => false],
                    ['text' => 'it', 'audio' => 'assets/audio/phonics_audio-2/it_rev/itah.m4a', 'isCorrect' => false],
                    ['text' => 'id', 'audio' => 'assets/audio/phonics_audio-2/id_in/idah.m4a', 'isCorrect' => false],
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

            .box,
            .boxs {
                width: 160px;
                height: 80px;
                border-radius: 10px;
                background: #FBF0D0;
                box-shadow: 0 4px 4px #00000040;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }

            .box span,
            .boxs span {
                color: #A15E0D;
                font-size: 2.5vw;
            }

            .panel-ul {
                color: white;
                font-size: 1.3vw;
                padding-left: 3vw;
            }

            .hidden {
                display: none !important;
            }
        </style>
    @endpush

    @section('content')

        {{-- ========== SLIDE 1: INTRO ========== --}}
        <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.m4a') }}">
            <h2 class="top-title stroke">It Begins With</h2>
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
                <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
            </div>
            <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
        </div>

        {{-- ========== SLIDE 2: INFO ========== --}}
        <div class="phonics-panel info-panel-1 flex flex-col items-start">
            <h1 class="text-white text-[1.6vw]">Tips:</h1>
            <ul class="list-disc text-start panel-ul space-y-[.2vw]">
                <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
                <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
                <li>This simple listening game helps children develop their ability to listen for and identify initial
                    sounds.
                </li>
            </ul>
        </div>

        {{-- ========== QUESTION + ANSWER SLIDES (auto-generated) ========== --}}
        @foreach ($questions as $i => $q)
            @php $isLast = $i === count($questions) - 1; @endphp

            {{-- QUESTION SLIDE --}}
            <div class="phonics-panel h-full space-y-[1vw] flex flex-col items-center justify-between"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">

                <h2 class="title-top stroke">Look at the picture. <br>
                    Find the blend that completes the name of this item.</h2>

                <div class="space-y-[2vw]">
                    {{-- Answer boxes --}}
                    <div class="flex items-center gap-[1.5vw]">
                        @foreach ($q['boxes'] as $box)
                            <div class="box {{ $box['isCorrect'] ? 'answer' : '' }}">
                                <button class="w-[3vw] sound-btn" data-slide-audio="{{ asset($box['audio']) }}">
                                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                                </button>
                                <span>{{ $box['text'] }}</span>
                            </div>
                        @endforeach
                    </div>

                    {{-- Image + word builder --}}
                    <div class="flex items-end justify-around w-full">
                        <img src="{{ asset($q['image']) }}" class="{{ $q['image_size'] ?? 'w-[15vw]' }}" /> 
                        <div class="flex items-center gap-4">
                            <span class="text-[2.5vw] text-[#f7b94a]">{{ $q['word_prefix'] }}</span>
                            <div class="boxs"><span></span></div>
                        </div>
                    </div>
                </div>

                @if (!empty($q['tip']))
                    <p class="p-note">{{ $q['tip'] }}</p>
                @endif
            </div>

            {{-- ANSWER SLIDE --}}
            <div class="phonics-panel h-full space-y-[1vw] {{ $isLast ? 'last-slide' : '' }}"
                data-slide-audio="{{ asset($q['audio']) }}">

                <div class="space-y-[4vw] mt-[4vw]">
                    {{-- Same boxes but correct one is hidden (opacity-0) --}}
                    <div class="flex items-center gap-[1.5vw]">
                        @foreach ($q['boxes'] as $box)
                            <div class="box {{ $box['isCorrect'] ? 'opacity-0' : '' }}">
                                <span>{{ $box['text'] }}</span>
                            </div>
                        @endforeach
                    </div>

                    {{-- Image + completed word --}}
                    <div class="flex items-end justify-around w-full">
                        <img src="{{ asset($q['image']) }}" class="{{ $q['image_size'] ?? 'w-[15vw]' }}" />
                        <div class="flex items-center gap-4">
                            <span class="text-[3vw] text-[#f7b94a]">{{ $q['word_prefix'] }}</span>
                            <div class="box"><span>{{ $q['word_suffix'] }}</span></div>
                        </div>
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

                // ── Show Slide ────────────────────────────────
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

                function showSlide(idx) {
                    stopAudio();
                    currentSlide = idx;
                    slides.forEach((s, i) => s.classList.toggle("hidden", i !== idx));

                    const slide = slides[idx];
                    const src = slide.getAttribute("data-slide-audio");
                    playAudio(src);

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

                // ── Answer box click → cheer → next slide ────
                document.querySelectorAll(".box.answer").forEach(box => {
                    box.addEventListener("click", e => {
                        if (e.target.closest(".sound-btn")) return;
                        playAudio(CONFIG.cheerAudio, goNext); // cheer then advance
                    });
                });

                // ── Sound buttons ─────────────────────────────
                document.querySelectorAll(".sound-btn").forEach(btn => {
                    btn.addEventListener("click", e => {
                        e.stopPropagation();
                        playAudio(btn.getAttribute("data-slide-audio"));
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
