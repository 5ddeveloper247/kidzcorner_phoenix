@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true

    // 📝 EASY DATA CONFIGURATION - CHANGE HER

    $config = [
        'sound_to_find' => 'sh', // The sound students are looking for
        'correct_word' => 'shower', // The complete word (sound + ending)
        'word_ending' => 'ower', // The ending part of the word
    ];

    $questions = [
        // Question 1
        [
            ['image' => 'phonics_l2/shch/shower.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a', 'correct' => true],
            ['image' => 'phonics_l2/spst/spill.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
            ['image' => 'phonics_l2/spst/star.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
        ],
        // Question 2
        [
            ['image' => 'phonics_l2/shch/shower.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
            ['image' => 'phonics_l2/spst/spill.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a', 'correct' => true],
            ['image' => 'phonics_l2/spst/star.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
        ],
        // Question 3
        [
            ['image' => 'phonics_l2/spst/spill.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
            ['image' => 'phonics_l2/shch/shower.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
            ['image' => 'phonics_l2/spst/star.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a', 'correct' => true],
        ],
        // Question 4
        [
            ['image' => 'phonics_l2/shch/shower.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a', 'correct' => true],
            ['image' => 'phonics_l2/spst/spill.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
            ['image' => 'phonics_l2/spst/star.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
        ],
        // Question 5
        [
            ['image' => 'phonics_l2/shch/shower.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a', 'correct' => true],
            ['image' => 'phonics_l2/spst/spill.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
            ['image' => 'phonics_l2/spst/star.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
        ],
        // Question 6
        [
            ['image' => 'phonics_l2/shch/shower.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a', 'correct' => true],
            ['image' => 'phonics_l2/spst/spill.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
            ['image' => 'phonics_l2/spst/star.png', 'audio' => 'phonics_audio-2/cl_sl/clah.m4a'],
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

        .sbtn {
            position: absolute;
            top: 15%;
            left: 8%;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')

    {{-- ============================================ --}}
    {{-- INTRO PANEL --}}
    {{-- ============================================ --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.m4a') }}">
        <h2 class="top-title stroke">It Begins With</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- ============================================ --}}
    {{-- INFO PANEL (Shows when clicking "Click here") --}}
    {{-- ============================================ --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>

    {{-- ============================================ --}}
    {{-- QUESTION & ANSWER SLIDES --}}
    {{-- Auto-generated from the $questions array above --}}
    {{-- ============================================ --}}
    @foreach ($questions as $qIndex => $question)
        @php
            $questionNum = $qIndex + 1;
            $correctIndex = array_search(true, array_column($question, 'correct'));
        @endphp

        {{-- QUESTION SLIDE (with sound buttons) --}}
        <div class="phonics-panel h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
            <h2 class="title-top stroke">Find the picture that begins with the '{{ $config['sound_to_find'] }}' sound.</h2>

            <div class="flex flex-col justify-around h-full space-y-[1vw]">
                <div class="flex items-center gap-[1.5vw]">
                    @foreach ($question as $optIndex => $option)
                        <div class="box clickable-box"
                            data-is-correct="{{ isset($option['correct']) && $option['correct'] ? 'true' : 'false' }}">
                            <button class="w-[2.5vw] sbtn sound-btn"
                                data-slide-audio="{{ asset('assets/audio/' . $option['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <img src="{{ asset('assets/images/' . $option['image']) }}" class="h-[6vw]" />
                        </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-start gap-4">
                    <span class="text-[2.5vw] text-[#f7b94a]">{{ $config['sound_to_find'] }}</span>
                </div>
            </div>
        </div>

        {{-- ANSWER SLIDE (shows correct answer with checkmark) --}}
        <div class="phonics-panel h-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
            <h2 class="title-top stroke">Find the picture that begins with the '{{ $config['sound_to_find'] }}' sound.</h2>

            <div class="flex flex-col justify-around h-full space-y-[1vw]">
                <div class="flex items-start gap-[1.5vw]">
                    @foreach ($question as $optIndex => $option)
                        @if ($optIndex === $correctIndex)
                            {{-- Show correct answer with checkmark --}}
                            <div class="flex flex-col items-center justify-center">
                                <div class="box">
                                    <img src="{{ asset('assets/images/' . $option['image']) }}" class="h-[6vw]" />
                                </div>
                                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[6vw]" />
                            </div>
                        @else
                            {{-- Show other options without checkmark --}}
                            <div class="box">
                                <img src="{{ asset('assets/images/' . $option['image']) }}" class="h-[6vw]" />
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="flex items-center justify-center gap-4">
                    <span class="text-[3.5vw] text-[#f7b94a]">{{ $config['sound_to_find'] }}</span>
                    <span class="text-[3.5vw] text-white">{{ $config['word_ending'] }}</span>
                </div>
            </div>
        </div>
    @endforeach

    {{-- ============================================ --}}
    {{-- NAVIGATION BUTTONS --}}
    {{-- ============================================ --}}
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

            // VARIABLES

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll(".sound-btn");
            const clickableBoxes = document.querySelectorAll(".clickable-box");

            const returnURL = "{{ url('/phonics_l2/sh_th/shth') }}";
            const doneURL = "{{ url('/phonics_l2/sh_th/shth') }}";
            const homeURL = document.body.dataset.homeRoute;
            const CHEERING_AUDIO = "{{ asset('assets/audio/phonics_audio-2/common/cheering.m4a') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInInfoMode = false;
            let returnToSlide = null;


            // AUDIO FUNCTIONS

            function stopAudio() {
                if (currentAudio) {
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

            function playSlideAudio(slideIndex) {
                const slide = slides[slideIndex];
                const audioSrc = slide.getAttribute('data-slide-audio');
                if (audioSrc) playAudio(audioSrc);
            }


            // SLIDE NAVIGATION

            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(c => c.startsWith('info-panel-'));
            }

            function isLastSlide(index) {
                if (isInInfoMode) return index === slides.length - 1;

                for (let i = index + 1; i < slides.length; i++) {
                    if (!isInfoSlide(slides[i])) return false;
                }
                return true;
            }

            function updateButtons(index) {
                const isLast = isLastSlide(index);
                nextButtons.forEach(btn => btn.classList.toggle('hidden', isLast));
                document.querySelectorAll('.doneButton').forEach(btn => btn.classList.toggle('hidden', !isLast));
            }

            function showSlide(index) {
                stopAudio();
                currentSlide = index;

                slides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                });

                updateButtons(index);
                playSlideAudio(index);
            }

            function goNext() {
                let nextIndex = currentSlide + 1;

                // Skip info slides in normal mode
                while (nextIndex < slides.length && !isInInfoMode && isInfoSlide(slides[nextIndex])) {
                    nextIndex++;
                }

                if (nextIndex < slides.length) {
                    showSlide(nextIndex);
                }
            }

            function goBack() {
                if (currentSlide === 0 && !isInInfoMode) {
                    stopAudio();
                    window.location.href = returnURL;
                    return;
                }

                if (isInInfoMode) {
                    // Return to the slide before info mode
                    isInInfoMode = false;
                    showSlide(returnToSlide);
                } else {
                    let prevIndex = currentSlide - 1;

                    // Skip info slides
                    while (prevIndex > 0 && isInfoSlide(slides[prevIndex])) {
                        prevIndex--;
                    }

                    showSlide(prevIndex);
                }
            }


            // CLICKABLE ANSWER BOXES

            clickableBoxes.forEach(box => {
                box.addEventListener('click', function(e) {
                    const isCorrect = this.getAttribute('data-is-correct') === 'true';

                    if (isCorrect) {
                        // Play cheering sound, then go to next slide (answer slide)
                        playAudio(CHEERING_AUDIO, () => {
                            goNext();
                        });
                    }
                });
            });


            // SOUND BUTTONS

            soundButtons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation(); // Prevent box click
                    const audioSrc = this.getAttribute('data-slide-audio');
                    if (audioSrc) playAudio(audioSrc);
                });
            });


            // INFO BUTTON

            infoButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    returnToSlide = currentSlide;
                    isInInfoMode = true;

                    // Find and show the info panel
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains('info-panel-1')) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });


            // NAVIGATION BUTTON EVENTS

            nextButtons.forEach(btn => btn.addEventListener('click', goNext));

            if (returnButton) {
                returnButton.addEventListener('click', goBack);
            }

            if (homeButton) {
                homeButton.addEventListener('click', () => {
                    stopAudio();
                    window.location.href = homeURL;
                });
            }

            document.querySelectorAll('.doneButton').forEach(btn => {
                btn.addEventListener('click', () => {
                    stopAudio();
                    if (isInInfoMode) {
                        isInInfoMode = false;
                        showSlide(returnToSlide);
                    } else {
                        window.location.href = doneURL;
                    }
                });
            });

            // START THE PRESENTATION
            showSlide(0);
        });
    </script>
@endpush
