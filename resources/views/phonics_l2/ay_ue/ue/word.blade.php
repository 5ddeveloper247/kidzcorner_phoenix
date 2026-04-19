@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/ay_ue/ue';
    $doneURL = '/phonics_l2/ay_ue/ue';

    $questionsData = [
        [
            'image' => 'assets/images/phonics_l2/ayue/cube.png',
            'leftLetters' => ['t', 'm', 'fl', 'c'],
            'rightLetters' => ['t', 'l', 'p', 'b'],
            'vowels' => ['u', 'e'],
            'audio' => 'assets/audio/phonics_audio-2/common/match-box.m4a',
            'steps' => [
                [
                    // Step 1:
                    'slot1' => null,
                    'slot2' => null,
                    'leftHidden' => [false, false, false, false],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 2:
                    'slot1' => 'c',
                    'slot2' => null,
                    'leftHidden' => [false, false, false, true],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 3:
                    'slot1' => 'c',
                    'slot2' => 'b',
                    'leftHidden' => [false, false, false, true],
                    'rightHidden' => [false, false, false, true],
                ],
            ],
        ],
        
        // Question 2
        [
            'image' => 'assets/images/phonics_l2/ayue/tube.png',
            'leftLetters' => ['t', 'm', 'fl', 'c'],
            'rightLetters' => ['t', 'l', 'p', 'b'],
            'vowels' => ['u', 'e'],
            'audio' => 'assets/audio/phonics_audio-2/ay_ue/tube.m4a',
            'steps' => [
                [
                    // Step 1:
                    'slot1' => null,
                    'slot2' => null,
                    'leftHidden' => [false, false, false, false],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 2:
                    'slot1' => 't',
                    'slot2' => null,
                    'leftHidden' => [true, false, false, false],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 3:
                    'slot1' => 't',
                    'slot2' => 'b',
                    'leftHidden' => [true, false, false, false],
                    'rightHidden' => [false, false, false, true],
                ],
            ],
        ],
        
        // Question 3
        [
            'image' => 'assets/images/phonics_l2/ayue/cute.png',
            'leftLetters' => ['t', 'm', 'fl', 'c'],
            'rightLetters' => ['t', 'l', 'p', 'b'],
            'vowels' => ['u', 'e'],
            'audio' => 'assets/audio/phonics_audio-2/ay_ue/cute.m4a',
            'steps' => [
                [
                    // Step 1:
                    'slot1' => null,
                    'slot2' => null,
                    'leftHidden' => [false, false, false, false],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 2:
                    'slot1' => 'c',
                    'slot2' => null,
                    'leftHidden' => [false, false, false, true],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 3:
                    'slot1' => 'c',
                    'slot2' => 't',
                    'leftHidden' => [false, false, false, true],
                    'rightHidden' => [true, false, false, false],
                ],
            ],
        ],
        
        // Question 4
        [
            'image' => 'assets/images/phonics_l2/ayue/mule.png',
            'leftLetters' => ['t', 'm', 'fl', 'c'],
            'rightLetters' => ['t', 'l', 'p', 'b'],
            'vowels' => ['u', 'e'],
            'audio' => 'assets/audio/phonics_audio-2/ay_ue/mule.m4a',
            'steps' => [
                [
                    // Step 1:
                    'slot1' => null,
                    'slot2' => null,
                    'leftHidden' => [false, false, false, false],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 2:
                    'slot1' => 'm',
                    'slot2' => null,
                    'leftHidden' => [false, true, false, false],
                    'rightHidden' => [false, false, false, false],
                ],
                [
                    // Step 3:
                    'slot1' => 'm',
                    'slot2' => 'l',
                    'leftHidden' => [false, true, false, false],
                    'rightHidden' => [false, true, false, false],
                ],
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

        .panel-title {
            color: #F7B94A;
            font-size: 2vw;
        }

        .box,
        .abox {
            background: #2D9CDB;
            width: 5vw;
            height: 5vw;
            border: .2vw solid #166796;
            border-radius: 1vw;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5vw;
            color: white;
        }

        .opacity-0 {
            opacity: 0;
        }
    </style>
@endpush

@section('content')
    {{-- INTRO PANEL (static, unchanged) --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl1.m4a') }}">
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/make-word.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to listen to the initial sound when naming each object.</p>
    </div>

    {{-- DYNAMIC SLIDES generated from $questionsData --}}
    @foreach ($questionsData as $question)
        @foreach ($question['steps'] as $step)
            @php
                $isFinalStep = $loop->parent->last && $loop->last;
            @endphp
            <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! w-full items-center"
                data-slide-audio="{{ asset($question['audio']) }}"
                @if ($isFinalStep) data-cheering="true" @endif>
                <h2 class="panel-title stroke">Make a word to match the picture.</h2>

                <div class="flex w-full justify-between px-[3vw]">
                    {{-- LEFT COLUMN --}}
                    <div class="flex flex-col items-center space-y-[1vw]">
                        @foreach ($question['leftLetters'] as $idx => $letter)
                            <div class="box {{ $step['leftHidden'][$idx] ?? false ? 'opacity-0' : '' }}">
                                {{ $letter }}
                            </div>
                        @endforeach
                    </div>

                    {{-- CENTER: image + answer slots --}}
                    <div class="flex flex-col items-center">
                        <img src="{{ asset($question['image']) }}" class="w-[15vw]" />
                        <div class="flex border-[#f7b94a] border-2 p-[1vw] gap-[3vw] rounded-[1vw]">
                            <div class="flex items-center gap-[1vw]">
                                <div class="abox">{{ $step['slot1'] ?? '' }}</div>
                                <h2 class="text-white text-[1.5vw]">{{ $question['vowels'][0] }}</h2>
                            </div>
                            <div class="flex items-center gap-[1vw]">
                                <div class="abox">{{ $step['slot2'] ?? '' }}</div>
                                <h2 class="text-white text-[1.5vw]">{{ $question['vowels'][1] }}</h2>
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT COLUMN --}}
                    <div class="flex flex-col items-center space-y-[1vw]">
                        @foreach ($question['rightLetters'] as $idx => $letter)
                            <div class="box {{ $step['rightHidden'][$idx] ?? false ? 'opacity-0' : '' }}">
                                {{ $letter }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach

    {{-- BUTTONS (navigation) --}}
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

        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = document.body.dataset.homeRoute;

            let currentSlide = 0;
            let currentAudio = null;
            let cheeringAudio = null;

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
                if (cheeringAudio) {
                    cheeringAudio.pause();
                    cheeringAudio.currentTime = 0;
                    cheeringAudio = null;
                }
            }

            function playSlideAudio(idx) {
                stopCurrentAudio();
                const slide = slides[idx];
                let src = slide.getAttribute('data-slide-audio');
                if (src) {
                    currentAudio = new Audio(src);
                    const shouldCheer = slide.getAttribute('data-cheering') === 'true';
                    if (shouldCheer) {
                        currentAudio.onended = function() {
                            cheeringAudio = new Audio(
                                "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}");
                            cheeringAudio.play().catch(() => {});
                        };
                    }
                    currentAudio.play().catch(() => {});
                }
            }

            function isLastSlide(idx) {
                return idx >= slides.length - 1;
            }

            function showSlide(idx) {
                stopCurrentAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));
                playSlideAudio(idx);

                if (isLastSlide(idx)) {
                    nextButtons.forEach(b => b.classList.add('hidden'));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.remove('hidden'));
                } else {
                    nextButtons.forEach(b => b.classList.remove('hidden'));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.add('hidden'));
                }
            }

            nextButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
                });
            });

            if (returnButton) {
                returnButton.addEventListener('click', () => {
                    if (currentSlide === 0) {
                        stopCurrentAudio();
                        window.location.href = returnURL;
                    } else {
                        showSlide(currentSlide - 1);
                    }
                });
            }

            if (homeButton) {
                homeButton.addEventListener('click', () => {
                    stopCurrentAudio();
                    window.location.href = homeURL;
                });
            }

            document.querySelectorAll('.doneButton').forEach(b => {
                b.addEventListener('click', () => {
                    stopCurrentAudio();
                    window.location.href = doneURL;
                });
            });

            showSlide(0);
        });
    </script>
@endpush
