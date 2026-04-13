@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    // URLS
    $returnURL = '/phonics_l2/at_rev/rev';
    $doneURL = '/phonics_l2/at_rev/rev';

    // Questions and Answers
    $questions = [
        [
            'box_images' => [
                ['img' => 'phonics_l2/aman/jam.png', 'audio' => 'am_an/jam.m4a', 'size' => 'h-[6vw]'],
                ['img' => 'phonics_l2/atrev/hat.png', 'audio' => 'at_rev/hat.m4a', 'size' => 'h-[8vw]'],
            ],
            'answer_image' => 'phonics_l2/atrev/bat.png',
            'answer_audio' => 'at_rev/bat.m4a',
            'answer_size' => 'w-[8vw]',
            'correct_box' => 1,
        ],
        [
            'box_images' => [
                ['img' => 'phonics_l2/agab/bag.png', 'audio' => 'ag_ab/bag.m4a', 'size' => 'w-[6vw]'],
                ['img' => 'phonics_l2/aman/jam.png', 'audio' => 'am_an/jam.m4a', 'size' => 'h-[6vw]'],
            ],
            'answer_image' => 'phonics_l2/aman/clam.png',
            'answer_audio' => 'am_an/clam.m4a',
            'answer_size' => 'w-[8vw]',
            'correct_box' => 0,
        ],
        [
            'box_images' => [
                ['img' => 'phonics_l2/apad/wrap.png', 'audio' => 'ap_ad/wrap.m4a', 'size' => 'h-[8vw]'],
                ['img' => 'phonics_l2/aman/pan.png', 'audio' => 'am_an/pan.m4a', 'size' => 'h-[7vw]'],
            ],
            'answer_image' => 'phonics_l2/aman/fan.png',
            'answer_audio' => 'am_an/fan.m4a',
            'answer_size' => 'h-[8vw]',
            'correct_box' => 1,
        ],
        [
            'box_images' => [
                ['img' => 'phonics_l2/apad/nap.png', 'audio' => 'ap_ad/nap.m4a', 'size' => 'h-[8vw]'],
                ['img' => 'phonics_l2/aman/ram.png', 'audio' => 'am_an/ram.m4a', 'size' => 'h-[8vw]'],
            ],
            'answer_image' => 'phonics_l2/apad/cap.png',
            'answer_audio' => 'ap_ad/cap.m4a',
            'answer_size' => 'w-[8vw]',
            'correct_box' => 0,
        ],
        [
            'box_images' => [
                ['img' => 'phonics_l2/aman/van.png', 'audio' => 'am_an/van.m4a', 'size' => 'w-[8vw]'],
                ['img' => 'phonics_l2/agab/bag.png', 'audio' => 'ag_ab/bag.m4a', 'size' => 'h-[8vw]'],
            ],
            'answer_image' => 'phonics_l2/agab/wag.png',
            'answer_audio' => 'ag_ab/wag.m4a',
            'answer_size' => 'h-[10vw]',
            'correct_box' => 1,
        ],
        [
            'box_images' => [
                ['img' => 'phonics_l2/agab/crab.png', 'audio' => 'ag_ab/crab.m4a', 'size' => 'w-[7vw]'],
                ['img' => 'phonics_l2/aman/yam.png', 'audio' => 'am_an/yam.m4a', 'size' => 'w-[8vw]'],
            ],
            'answer_image' => 'phonics_l2/agab/cab.png',
            'answer_audio' => 'ag_ab/cab.m4a',
            'answer_size' => 'w-[10vw]',
            'correct_box' => 0,
        ]
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
            background: url('{{ asset('assets/images/phonics_l2/global/paper-guess.png') }}') no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .answer-box {
            width: 15vw;
            height: 15vw;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: relative;
            background: #2D9CDB;
            border-radius: 1vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')

    {{-- Panel 1: Intro --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.m4a') }}">
        <h2 class="top-title stroke">It Begins With</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>
        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>

    {{-- Auto-generated Question & Answer Panels --}}
    @foreach ($questions as $index => $q)
        {{-- Question Panel --}}
        <div class="phonics-panel h-full space-y-[1vw] w-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
            <h2 class="title-top stroke">Find the picture that has the same ending <br> sound as the one on the box.</h2>

            <div class="w-full flex justify-between items-center px-[2vw]">
                {{-- Left side: Two boxes --}}
                <div class="flex flex-col items-center gap-[1vw]">
                    @foreach ($q['box_images'] as $box)
                        <div class="box">
                            <button class="w-[2.5vw] absolute top-[15%] left-[8%]" data-sound-btn
                                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $box['audio']) }}">
                                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                            </button>
                            <img src="{{ asset('assets/images/' . $box['img']) }}" class="{{ $box['size'] }}" />
                        </div>
                    @endforeach
                </div>

                {{-- Right side: Answer box (clickable) --}}
                <div class="answer-box" data-answer-box>
                    <button class="w-[2.5vw] absolute top-[15%] left-[8%]" data-sound-btn
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $q['answer_audio']) }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <img src="{{ asset('assets/images/' . $q['answer_image']) }}" class="{{ $q['answer_size'] }}" />
                </div>
            </div>
        </div>

        {{-- Answer Panel (shows correct answer with tick) --}}
        <div class="phonics-panel h-full space-y-[1vw] w-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $q['answer_audio']) }}">
            <h2 class="title-top stroke">Find the picture that has the same ending <br> sound as the one on the box.</h2>

            <div class="w-full flex justify-between items-center px-[2vw]">
                {{-- Left side: Two boxes (correct one with tick) --}}
                <div class="flex flex-col items-start gap-[1vw]">
                    @foreach ($q['box_images'] as $boxIndex => $box)
                        @if ($boxIndex == $q['correct_box'])
                            {{-- Correct box with tick --}}
                            <div class="flex items-center gap-[1vw]">
                                <div class="box">
                                    <img src="{{ asset('assets/images/' . $box['img']) }}" class="{{ $box['size'] }}" />
                                </div>
                                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="h-[5vw]" />
                            </div>
                        @else
                            {{-- Wrong box --}}
                            <div class="box">
                                <img src="{{ asset('assets/images/' . $box['img']) }}" class="{{ $box['size'] }}" />
                            </div>
                        @endif
                    @endforeach
                </div>

                {{-- Right side: Answer box --}}
                <div class="answer-box">
                    <img src="{{ asset('assets/images/' . $q['answer_image']) }}" class="{{ $q['answer_size'] }}" />
                </div>
            </div>
        </div>
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
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[data-sound-btn]");
            const answerBoxes = document.querySelectorAll("[data-answer-box]");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = "{{ url('/phonics/l2') }}";
            const cheeringAudio = "{{ asset('assets/audio/phonics_audio-2/common/cheering.m4a') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // Audio functions
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

            // Check if slide is special (info panel)
            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            // Check if it's the last slide
            function isLastSlide(idx) {
                if (isInSpecialMode) {
                    for (let i = idx + 1; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) return false;
                    }
                    return true;
                }
                for (let i = idx + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) return false;
                }
                return true;
            }

            // Show slide
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const isLast = isLastSlide(idx);
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));

                playAudio(slides[idx].getAttribute('data-slide-audio'));
            }

            // Go to next slide
            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    if (isInSpecialMode ? slides[next].classList.contains(specialSlideClass) : !isSpecialSlide(
                            slides[next])) break;
                    next++;
                }
                if (next < slides.length) showSlide(next);
            }

            // Go back
            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopAudio();
                    window.location.href = returnURL;
                    return;
                }
                if (isInSpecialMode) {
                    let prev = currentSlide - 1;
                    while (prev >= 0 && !slides[prev].classList.contains(specialSlideClass)) prev--;
                    if (prev >= 0) {
                        showSlide(prev);
                    } else {
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    }
                } else {
                    let prev = currentSlide - 1;
                    while (prev > 0 && isSpecialSlide(slides[prev])) prev--;
                    showSlide(prev);
                }
            }

            // When answer box is clicked
            answerBoxes.forEach(box => {
                box.addEventListener('click', () => {
                    playAudio(cheeringAudio, () => goNext());
                });
            });

            // Sound buttons
            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

            // Info buttons
            infoButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = Array.from(btn.classList).find(c => c.startsWith(
                        'info-btn'))?.replace('info-btn', 'info-panel-');
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            // Navigation buttons
            nextButtons.forEach(b => b.addEventListener('click', goNext));
            returnButton?.addEventListener('click', goBack);
            homeButton?.addEventListener('click', () => {
                stopAudio();
                window.location.href = homeURL;
            });
            doneButtons.forEach(b => b.addEventListener('click', () => {
                stopAudio();
                if (isInSpecialMode) {
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    showSlide(returnToSlide);
                    returnToSlide = null;
                } else {
                    window.location.href = doneURL;
                }
            }));

            showSlide(0);
        });
    </script>
@endpush
