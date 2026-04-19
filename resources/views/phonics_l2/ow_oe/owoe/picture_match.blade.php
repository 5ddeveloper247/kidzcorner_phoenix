@extends('layout.master')
@section('title', 'Picture Match – Vowel Sounds')

@php
    $showBackground = true;

    $questions = [
        [
            'picture' => asset('assets/images/phonics_l2/owoe/row.png'),
            'pictureAudio' => asset('assets/audio/phonics_audio-2/ow_oe/row.m4a'),
            'correctWord' => 'blow',
            'correctHighlight' => 'ow',
            'distractorWord' => 'sob',
            'pictureWordBreak' => 'bk<span class="text-[#f7b94a]">ow</span>',
            'correctPosition' => 'left', 
        ],
        [
            'picture' => asset('assets/images/phonics_l2/owoe/hole.png'),
            'pictureAudio' => asset('assets/audio/phonics_audio-2/ow_oe/hole.m4a'),
            'correctWord' => 'mop',
            'correctHighlight' => 'oe',
            'distractorWord' => 'hose',
            'pictureWordBreak' => 'h<span class="text-[#f7b94a]">o</span>s<span class="text-[#f7b94a]">e</span>',
            'correctPosition' => 'right',
        ],
        [
            'picture' => asset('assets/images/phonics_l2/owoe/glow.png'),
            'pictureAudio' => asset('assets/audio/phonics_audio-2/ow_oe/glow.m4a'),
            'correctWord' => 'grow',
            'correctHighlight' => 'ow',
            'distractorWord' => 'shop',
            'pictureWordBreak' => 'gr<span class="text-[#f7b94a]">ow</span>p',
            'correctPosition' => 'left',
        ],
        [
            'picture' => asset('assets/images/phonics_l2/owoe/hose.png'),
            'pictureAudio' => asset('assets/audio/phonics_audio-2/ow_oe/hose.m4a'),
            'distractorWord' => 'hop',
            'correctHighlight' => 'oe',
            'correctWord' => 'stone',
            'pictureWordBreak' => 'st<span class="text-[#f7b94a]">o</span>n<span class="text-[#f7b94a]">e</span>',
            'correctPosition' => 'right',
        ],
        [
            'picture' => asset('assets/images/phonics_l2/owoe/crow.png'),
            'pictureAudio' => asset('assets/audio/phonics_audio-2/ow_oe/crow.m4a'),
            'correctWord' => 'snow',
            'correctHighlight' => 'ow',
            'distractorWord' => 'crab',
            'pictureWordBreak' => 'sn<span class="text-[#f7b94a]">ow</span>',
            'correctPosition' => 'left',
        ],
    ];

    $defaultTip = 'Tips: Encourage children to sound the words by parts and listen to the vowel sounds they make.';
@endphp

@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .large-title {
            color: #F7B94A;
            font-size: 2vw !important;
        }

        .options {
            width: 12vw;
            height: 6vw;
            background-image: url('{{ asset('assets/images/phonics_l2/global/common/wrapper.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            font-size: 2vw;
            line-height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-highlight {
            color: #70AF39;
        }
    </style>
@endpush

@section('content')
    {{-- ============================================================== --}}
    {{-- SLIDE 0: INTRO PANEL --}}
    {{-- ============================================================== --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt.m4a') }}">
        <h2 class="top-title stroke">Picture Match</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- ============================================================== --}}
    {{-- DYNAMIC SLIDES: --}}
    {{-- ============================================================== --}}
    @foreach ($questions as $q)
        @php
            $tip = $q['tipText'] ?? $defaultTip;
            $position = $q['correctPosition'] ?? 'left';
        @endphp

        {{-- ----- QUESTION SLIDE  ----- --}}
        <div class="phonics-panel flex flex-col justify-center space-y-[1.5vw] items-center w-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

            <h2 class="large-title stroke">Find the word that has the same vowel sound as the one <br>in the picture.</h2>

            <div class="flex items-center space-x-[1vw]">
                @if ($position === 'left')
                    {{-- Correct answer on left --}}
                    <div class="options answer" data-correct="true" style="cursor: pointer;">{{ $q['correctWord'] }}</div>
                    {{-- Picture --}}
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="w-[25vw]" />
                        <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-[10vw]"
                            src="{{ $q['picture'] }}" />
                        <button class="sound-btn absolute bottom-[20%] left-[8%] w-[2.5vw]"
                            data-audio="{{ $q['pictureAudio'] }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>
                    {{-- Distractor on right --}}
                    <div class="options">{{ $q['distractorWord'] }}</div>
                @else
                    {{-- Distractor on left --}}
                    <div class="options">{{ $q['distractorWord'] }}</div>
                    {{-- Picture --}}
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="w-[25vw]" />
                        <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-[10vw]"
                            src="{{ $q['picture'] }}" />
                        <button class="sound-btn absolute bottom-[20%] left-[8%] w-[2.5vw]"
                            data-audio="{{ $q['pictureAudio'] }}">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </button>
                    </div>
                    {{-- Correct answer on right --}}
                    <div class="options answer" data-correct="true" style="cursor: pointer;">{{ $q['correctWord'] }}</div>
                @endif
            </div>

            <p class="note">{{ $tip }}</p>
        </div>

        {{-- ----- ANSWER SLIDE (always correct word with tick on left, picture on right) ----- --}}
        <div class="phonics-panel flex flex-col justify-start space-y-[1vw] items-center w-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/wordhunt-match.m4a') }}">

            <h2 class="large-title stroke">Find the word that has the same vowel sound as the one <br>in the picture.</h2>

            <div class="flex items-center justify-start space-x-[1vw] h-fit">
                {{-- Correct word with tick and highlighted vowel --}}
                <div class="options relative">
                    {!! str_replace(
                        $q['correctHighlight'],
                        "<span class='text-highlight'>{$q['correctHighlight']}</span>",
                        $q['correctWord'],
                    ) !!}
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                        class="h-[3vw] w-[3vw] absolute right-0" style="top: -5%" />
                </div>

                {{-- Picture with the word broken into highlighted parts --}}
                <div>
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('assets/images/phonics_l2/global/simple-g.png') }}" class="w-[25vw]" />
                        <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-[10vw]"
                            src="{{ $q['picture'] }}" />
                    </div>
                    <h2 class="text-white text-[3vw] leading-none">{!! $q['pictureWordBreak'] !!}</h2>
                </div>
            </div>

            <p class="note">{{ $tip }}</p>
        </div>
    @endforeach

    {{-- ============================================================== --}}
    {{-- ALL BUTTONS (Home, Return, Close, Next, Done) --}}
    {{-- ============================================================== --}}
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
            const slides = document.querySelectorAll(".phonics-panel");
            const nextBtn = document.querySelector(".nextButton");
            const doneBtn = document.querySelector(".doneButton");
            const returnBtn = document.getElementById("returnButton");
            const homeBtn = document.getElementById("homeButton");
            const closeBtn = document.getElementById("closeButton");

            const CHEERING = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";
            const RETURN_URL = "{{ url('/phonics_l2/ow_oe/owoe') }}";
            const DONE_URL = "{{ url('/phonics_l2/ow_oe/owoe') }}";
            const HOME_URL = "{{ url('/phonics/l2') }}";

            let currentAudio = null;
            let currentSlide = 0;

            function stopAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playAudio(src, onEnd = null) {
                if (!src) return;
                stopAudio();
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(e => console.warn("Audio play failed:", e));
            }

            function playSlideAudio(index) {
                const slide = slides[index];
                const src = slide.getAttribute('data-slide-audio');
                if (src) playAudio(src);
            }

            function showSlide(index) {
                if (index < 0 || index >= slides.length) return;
                stopAudio();
                currentSlide = index;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== index));
                playSlideAudio(index);

                const isLast = (index === slides.length - 1);
                nextBtn.classList.toggle('hidden', isLast);
                doneBtn.classList.toggle('hidden', !isLast);
            }

            function goNext() {
                if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
            }

            function goBack() {
                if (currentSlide === 0) {
                    window.location.href = RETURN_URL;
                } else {
                    showSlide(currentSlide - 1);
                }
            }

            // ----------------------------------------------------------
            // EVENT HANDLERS (using delegation for dynamically added elements)
            // ----------------------------------------------------------
            document.body.addEventListener('click', (e) => {
                // Handle correct answer click (class .answer)
                const answerBox = e.target.closest('.options.answer');
                if (answerBox && answerBox.getAttribute('data-correct') !== 'false') {
                    // Play cheering sound, then go to next slide (the answer slide)
                    playAudio(CHEERING, () => goNext());
                    e.stopPropagation();
                }

                // Handle sound buttons on pictures
                const soundBtn = e.target.closest('.sound-btn');
                if (soundBtn) {
                    e.stopPropagation();
                    const audioSrc = soundBtn.getAttribute('data-audio');
                    playAudio(audioSrc);
                }
            });

            // Navigation buttons
            if (nextBtn) nextBtn.addEventListener('click', goNext);
            if (returnBtn) returnBtn.addEventListener('click', goBack);
            if (homeBtn) homeBtn.addEventListener('click', () => {
                stopAudio();
                window.location.href = HOME_URL;
            });
            if (closeBtn) closeBtn.addEventListener('click', () => {
                stopAudio();
                window.location.href = HOME_URL;
            });
            if (doneBtn) doneBtn.addEventListener('click', () => {
                stopAudio();
                window.location.href = DONE_URL;
            });

            // Start at intro slide
            showSlide(0);
        })();
    </script>
@endpush
