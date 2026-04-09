@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $questionGroups = [
        // slide 1
        [
            'blend' => 'ch',
            'correctWord' => 'catch',
            'questionAudio' => asset('assets/audio/phonics_audio-2/common/begins-with.m4a'),
            'answerAudio' => asset('assets/audio/phonics_audio-2/ch_rev/catch.m4a'),
            'options' => [
                [
                    'image' => asset('assets/images/phonics_l2/chrev/catch.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/ch_rev/catch.m4a'),
                    'wordPart' => 'cat',
                    'isCorrect' => true,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/shch/ship.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sh_ch/ship.m4a'),
                    'wordPart' => 'ip',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/shch/cherries.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sh_ch/cherries.m4a'),
                    'wordPart' => 'erries',
                    'isCorrect' => false,
                ],
            ],
        ],
        // slide 2
        [
            'blend' => 'th',
            'correctWord' => 'mouth',
            'questionAudio' => asset('assets/audio/phonics_audio-2/common/begins-with.m4a'),
            'answerAudio' => asset('assets/audio/phonics_audio-2/ch_rev/mouth.m4a'),
            'options' => [
                [
                    'image' => asset('assets/images/phonics_l2/thwh/whistle.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/th_wh/whistle.m4a'),
                    'wordPart' => 'istle',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/chrev/mouth.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/ch_rev/mouth.m4a'),
                    'wordPart' => 'mou',
                    'isCorrect' => true,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/shch/fish.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sh_ch/fish.m4a'),
                    'wordPart' => 'poon',
                    'isCorrect' => false,
                ],
            ],
        ],
        // slide 3
        [
            'blend' => 'ch',
            'correctWord' => 'shirt',
            'questionAudio' => asset('assets/audio/phonics_audio-2/common/begins-with.m4a'),
            'answerAudio' => asset('assets/audio/phonics_audio-2/ch_rev/shirt.m4a'),
            'options' => [
                [
                    'image' => asset('assets/images/phonics_l2/thwh/hatch.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/ch_rev/hatch.m4a'),
                    'wordPart' => 'hat',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/shch/bush.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sh_ch/bush.m4a'),
                    'wordPart' => 'istle',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/shch/shirt.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sh_ch/shirt.m4a'),
                    'wordPart' => 'air',
                    'isCorrect' => true,
                ],
            ],
        ],
        // slide 4
        [
            'blend' => 'wh',
            'correctWord' => 'whale',
            'questionAudio' => asset('assets/audio/phonics_audio-2/common/begins-with.m4a'),
            'answerAudio' => asset('assets/audio/phonics_audio-2/th_wh/whistle.m4a'),
            'options' => [
                [
                    'image' => asset('assets/images/phonics_l2/shch/chocolate.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sh_ch/chocolate.m4a'),
                    'wordPart' => 'air',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/thwh/whale.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/th_wh/whale.m4a'),
                    'wordPart' => 'ale',
                    'isCorrect' => true,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/spst/spoon.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sp_st/spoon.m4a'),
                    'wordPart' => 'poon',
                    'isCorrect' => false,
                ],
            ],
        ],
        // slide 5
        [
            'blend' => 'th',
            'correctWord' => 'think',
            'questionAudio' => asset('assets/audio/phonics_audio-2/common/begins-with.m4a'),
            'answerAudio' => asset('assets/audio/phonics_audio-2/th_wh/think.m4a'),
            'options' => [
                [
                    'image' => asset('assets/images/phonics_l2/shch/chair.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/sh_ch/chair.m4a'),
                    'wordPart' => 'air',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/clsl/sleep.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/cl_sl/sleep.m4a'),
                    'wordPart' => 'istle',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/thwh/think.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/th_wh/think.m4a'),
                    'wordPart' => 'ink',
                    'isCorrect' => true,
                ],
            ],
        ],
        [
            'blend' => 'wh',
            'correctWord' => 'whisper',
            'questionAudio' => asset('assets/audio/phonics_audio-2/common/begins-with.m4a'),
            'answerAudio' => asset('assets/audio/phonics_audio-2/th_wh/whisper.m4a'),
            'options' => [
                [
                    'image' => asset('assets/images/phonics_l2/clsl/clock.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/cl_sl/clock.m4a'),
                    'wordPart' => 'air',
                    'isCorrect' => false,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/thwh/whisper.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/th_wh/whisper.m4a'),
                    'wordPart' => 'isper',
                    'isCorrect' => true,
                ],
                [
                    'image' => asset('assets/images/phonics_l2/clsl/sleep.png'),
                    'sound' => asset('assets/audio/phonics_audio-2/cl_sl/sleep.m4a'),
                    'wordPart' => 'poon',
                    'isCorrect' => false,
                ],
            ],
        ],
    ];

    function getCorrectOption($group)
    {
        foreach ($group['options'] as $option) {
            if ($option['isCorrect']) {
                return $option;
            }
        }
        return $group['options'][0];
    }
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

        .box {
            width: 12vw;
            height: 12vw;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background: url('{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}') no-repeat center;
            background-size: contain;
            position: relative;
        }

        .box span {
            color: #A15E0D;
            font-size: 2.5vw;
        }

        .sbtn {
            position: absolute;
            top: 15%;
            left: 8%;
            cursor: pointer;
            background: none;
            border: none;
            z-index: 2;
        }

        .sbtn img {
            width: 2.5vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }

        /* Disable clicks on answered question */
        .question-answered .box:not(.disabled-option) {
            pointer-events: none;
            opacity: 0.7;
        }
    </style>
@endpush

@section('content')

    {{-- SLIDE 1: INTRO PANEL --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.m4a') }}">
        <h2 class="top-title stroke">It Begins With</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- INFO PANEL (hidden, accessible via 'Click here') --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>

    {{-- DYNAMIC SLIDES: All Question and Answer slides --}}
    @foreach ($questionGroups as $group)
        @php
            $correctOption = getCorrectOption($group);
        @endphp

        {{-- ----- QUESTION SLIDE ----- --}}
        <div class="phonics-panel question-slide h-full" data-slide-audio="{{ $group['questionAudio'] }}">
            <h2 class="title-top stroke">Find the picture that begins with the ‘{{ $group['blend'] }}’ sound.</h2>
            <div class="flex flex-col justify-around h-full space-y-[1vw]">
                <div class="flex items-center gap-[1.5vw] options-container">
                    @foreach ($group['options'] as $index => $option)
                        <div class="box option-box" data-correct="{{ $option['isCorrect'] ? 'true' : 'false' }}"
                            data-group-id="{{ $loop->parent->index }}">
                            <button class="sbtn sound-option-btn" data-sound="{{ $option['sound'] }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <img src="{{ $option['image'] }}" class="h-[6vw]" />
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-center gap-4">
                    <span class="text-[3.5vw] text-[#f7b94a]">{{ $group['blend'] }}</span>
                </div>
            </div>
        </div>

        {{-- ----- ANSWER SLIDE ---- --}}
        <div class="phonics-panel answer-slide h-full" data-slide-audio="{{ $group['answerAudio'] }}">
            <h2 class="title-top stroke">Find the picture that begins with the ‘{{ $group['blend'] }}’ sound.</h2>
            <div class="flex flex-col justify-around h-full space-y-[1vw]">
                <div class="flex items-start gap-[1.5vw]">
                    @foreach ($group['options'] as $index => $option)
                        <div class="flex flex-col items-center justify-center">
                            <div class="box">
                                <img src="{{ $option['image'] }}" class="h-[6vw]" />
                            </div>
                            @if ($option['isCorrect'])
                                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[6vw]" />
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-center">
                    <span class="text-[3.5vw] text-[#f7b94a]">{{ $group['blend'] }}</span>
                    <span class="text-[3.5vw] text-white">{{ $correctOption['wordPart'] }}</span>
                </div>
            </div>
        </div>
    @endforeach

    {{-- ================================================================ --}}
    {{-- ALL BUTTONS --}}
    {{-- ================================================================ --}}
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
        (function() {
            // DOM elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextBtn = document.querySelector(".nextButton");
            const doneBtn = document.querySelector(".doneButton");
            const returnBtn = document.getElementById("returnButton");
            const homeBtn = document.getElementById("homeButton");
            const closeBtn = document.getElementById("closeButton");
            const infoBtns = document.querySelectorAll("[class*='info-btn']");

            // Audio & Routes
            const CHEERING_SOUND = "{{ asset('assets/audio/phonics_audio-2/common/cheering.m4a') }}";
            const RETURN_URL = "{{ url('/phonics_l2/ch_rev/rev') }}";
            const DONE_URL = "{{ url('/phonics_l2/ch_rev/rev') }}";
            const HOME_URL = "{{ url('/phonics/l2') }}";

            let currentAudio = null;
            let currentSlideIdx = 0;
            let isSpecialMode = false;
            let returnToSlide = null;

            // Helper: stop any playing audio
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            // Play audio from src, optional onEnd callback
            function playAudio(src, onEnd = null) {
                if (!src) return;
                stopAudio();
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(e => console.warn("Audio play failed:", e));
            }

            // Play the data-slide-audio for the current slide
            function playSlideAudio(index) {
                const slide = slides[index];
                const src = slide.getAttribute('data-slide-audio');
                if (src) playAudio(src);
            }

            // Check if a slide is the special info panel
            function isInfoPanelSlide(slide) {
                return slide.classList.contains('info-panel-1');
            }

            // Check if a slide is a question slide (has .question-slide)
            function isQuestionSlide(slide) {
                return slide.classList.contains('question-slide');
            }

            // Update Next/Done buttons visibility based on whether this is the last slide
            function updateNavButtons(index) {
                let isLast = true;
                // Look ahead for any non-info slide (since info panel is special and not part of normal flow)
                for (let i = index + 1; i < slides.length; i++) {
                    if (!isInfoPanelSlide(slides[i])) {
                        isLast = false;
                        break;
                    }
                }
                nextBtn.classList.toggle('hidden', isLast);
                doneBtn.classList.toggle('hidden', !isLast);
            }

            // Show a specific slide by index
            function showSlide(index) {
                if (index < 0 || index >= slides.length) return;
                stopAudio();
                currentSlideIdx = index;
                slides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                });
                updateNavButtons(index);
                playSlideAudio(index);
            }

            // Go to next slide in normal sequence (skip info panels)
            function goToNextSlide() {
                let next = currentSlideIdx + 1;
                while (next < slides.length && isInfoPanelSlide(slides[next])) {
                    next++;
                }
                if (next < slides.length) {
                    showSlide(next);
                }
            }

            // Go to previous slide (skip info panels)
            function goToPrevSlide() {
                let prev = currentSlideIdx - 1;
                while (prev >= 0 && isInfoPanelSlide(slides[prev])) {
                    prev--;
                }
                if (prev >= 0) {
                    showSlide(prev);
                } else {
                    // At the very beginning, return to the main page
                    window.location.href = RETURN_URL;
                }
            }

            // Handle clicking on a correct answer in a question slide
            function setupAnswerHandlers() {
                document.querySelectorAll('.question-slide .option-box').forEach(box => {
                    // Remove old listeners to avoid duplicates (simple cleanup)
                    box.removeEventListener('click', answerClickHandler);
                    box.addEventListener('click', answerClickHandler);
                });
            }

            function answerClickHandler(e) {
                // Prevent if already answered (by checking if slide has 'answered' flag)
                const currentQuestionSlide = slides[currentSlideIdx];
                if (currentQuestionSlide.getAttribute('data-answered') === 'true') return;

                const isCorrect = this.getAttribute('data-correct') === 'true';
                if (!isCorrect) return; // Only correct answers trigger next slide

                // Mark as answered to prevent double clicking
                currentQuestionSlide.setAttribute('data-answered', 'true');

                // Play cheering sound, then move to next slide (the answer slide)
                playAudio(CHEERING_SOUND, () => {
                    goToNextSlide();
                });
            }

            // Handle sound buttons on options (play individual word sound)
            function setupSoundButtons() {
                document.querySelectorAll('.sound-option-btn').forEach(btn => {
                    btn.removeEventListener('click', soundClickHandler);
                    btn.addEventListener('click', soundClickHandler);
                });
            }

            function soundClickHandler(e) {
                e.stopPropagation();
                const soundSrc = this.getAttribute('data-sound');
                if (soundSrc) playAudio(soundSrc);
            }

            // Re-attach handlers when slide changes (for newly added DOM or dynamic)
            function refreshEventHandlers() {
                setupAnswerHandlers();
                setupSoundButtons();
            }


            // INFO PANEL (Special Mode)

            infoBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    // Save current slide to return later
                    returnToSlide = currentSlideIdx;
                    isSpecialMode = true;
                    // Find the info panel slide
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains('info-panel-1')) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });


            // BUTTON HANDLERS

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    if (isSpecialMode) {
                        // If in info panel, just go back to the saved slide
                        isSpecialMode = false;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    } else {
                        goToNextSlide();
                    }
                });
            }

            if (doneBtn) {
                doneBtn.addEventListener('click', () => {
                    if (isSpecialMode) {
                        isSpecialMode = false;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    } else {
                        window.location.href = DONE_URL;
                    }
                });
            }

            if (returnBtn) {
                returnBtn.addEventListener('click', () => {
                    if (isSpecialMode) {
                        // Exit info panel and return to saved slide
                        isSpecialMode = false;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    } else {
                        goToPrevSlide();
                    }
                });
            }

            if (homeBtn) {
                homeBtn.addEventListener('click', () => {
                    stopAudio();
                    window.location.href = HOME_URL;
                });
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    stopAudio();
                    window.location.href = HOME_URL;
                });
            }


            const originalShowSlide = showSlide;
            window.showSlide = function(index) {
                originalShowSlide(index);
                refreshEventHandlers();
            };
            showSlide = function(index) {
                originalShowSlide(index);
                refreshEventHandlers();
            };

            // Initialize
            refreshEventHandlers();
            showSlide(0);
        })();
    </script>
@endpush
