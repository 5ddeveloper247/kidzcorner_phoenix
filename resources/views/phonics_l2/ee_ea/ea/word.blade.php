@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/ee_ea/ea';
    $doneURL = '/phonics_l2/ee_ea/ea';



$questions = [
    [
        'image' => 'assets/images/phonics_l2/eea/team.png',
        'audio' => 'assets/audio/phonics_audio-2/common/match-box.m4a',
        'leftLetters' => ['t', 'l', 'fl', 'c'],
        'rightLetters' => ['t', 'm', 'p', 'b'],
        'vowels' => ['e', 'a'],
        'answers' => [
            [null, null, null, null], 
            ['t', null, 0, null], 
            ['t', 'm', 0, 1], 
        ],
    ],

    [
        'image' => 'assets/images/phonics_l2/eea/seal.png',
        'audio' => 'assets/audio/phonics_audio-2/ay_ue/seal.m4a',
        'leftLetters' => ['t', 's', 'fl', 'c'],
        'rightLetters' => ['t', 'm', 'l', 'b'],
        'vowels' => ['e', 'a'],
        'answers' => [[null, null, null, null], ['s', null, 1, null], ['s', 'l', 1, 2]],
    ],

    [
        'image' => 'assets/images/phonics_l2/eea/bean.png',
        'audio' => 'assets/audio/phonics_audio-2/ay_ue/bean.m4a',
        'leftLetters' => ['t', 'l', 'fl', 'b'],
        'rightLetters' => ['n', 'm', 'p', 'b'],
        'vowels' => ['e', 'a'],
        'answers' => [[null, null, null, null], ['b', null, 3, null], ['b', 'n', 3, 0]],
    ],

    [
        'image' => 'assets/images/phonics_l2/eea/beak.png',
        'audio' => 'assets/audio/phonics_audio-2/ee_ea/beak.m4a',
        'leftLetters' => ['b', 'p', 'd', 'c'],
        'rightLetters' => ['t', 'm', 'p', 'k'],
        'vowels' => ['e', 'a'],
        'answers' => [[null, null, null, null], ['b', null, 0, null], ['b', 'k', 0, 3]],
    ],
];
// ================================================================
// ✏️  END OF EDITABLE SECTION — don't touch anything below
    // ================================================================
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
    </style>
@endpush


@section('content')

    {{-- Intro slide --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl1.m4a') }}">
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/make-word.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to listen to the initial sound when naming each object.</p>
    </div>

    {{-- Question slides — auto-built from $questions --}}
    @foreach ($questions as $qi => $q)
        @foreach ($q['answers'] as $si => $step)
            @php
                [$slot1, $slot2, $hideL, $hideR] = $step;
                $isLastSlide = $qi === array_key_last($questions) && $si === array_key_last($q['answers']);
            @endphp

            <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! w-full items-center"
                data-slide-audio="{{ asset($q['audio']) }}" {{ $isLastSlide ? 'data-cheering=true' : '' }}>

                <h2 class="panel-title stroke">Make a word to match the picture.</h2>

                <div class="flex w-full justify-between px-[3vw]">

                    {{-- Left tiles --}}
                    <div class="flex flex-col items-center space-y-[1vw]">
                        @foreach ($q['leftLetters'] as $i => $letter)
                            <div class="box {{ $hideL === $i ? 'opacity-0' : '' }}">{{ $letter }}</div>
                        @endforeach
                    </div>

                    {{-- Centre: image + answer boxes --}}
                    <div class="flex flex-col items-center">
                        <img src="{{ asset($q['image']) }}" class="w-[15vw]" />
                        <div class="flex border-[#f7b94a] border-2 p-[1vw] gap-[3vw] rounded-[1vw]">
                            <div class="flex items-center gap-[1vw]">
                                <div class="abox">{{ $slot1 }}</div>
                                <h2 class="text-white text-[1.5vw]">{{ $q['vowels'][0] }}</h2>
                            </div>
                            <div class="flex items-center gap-[1vw]">
                                <h2 class="text-white text-[1.5vw]">{{ $q['vowels'][1] }}</h2>
                                <div class="abox">{{ $slot2 }}</div>
                            </div>
                        </div>
                    </div>

                    {{-- Right tiles --}}
                    <div class="flex flex-col items-center space-y-[1vw]">
                        @foreach ($q['rightLetters'] as $i => $letter)
                            <div class="box {{ $hideR === $i ? 'opacity-0' : '' }}">{{ $letter }}</div>
                        @endforeach
                    </div>

                </div>
            </div>
        @endforeach
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
        // No need to ever edit this block
        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextBtns = document.querySelectorAll(".nextButton");
            const doneBtns = document.querySelectorAll(".doneButton");
            const returnBtn = document.getElementById("returnButton");
            const homeBtn = document.getElementById("homeButton");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = "{{ url('/phonics/l2') }}";

            let current = 0;
            let audio = null;

            function stopAudio() {
                if (audio) {
                    audio.pause();
                    audio.currentTime = 0;
                    audio = null;
                }
            }

            function showSlide(idx) {
                stopAudio();
                current = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));

                const isLast = idx >= slides.length - 1;
                const src = slides[idx].getAttribute('data-slide-audio');
                const cheering = slides[idx].getAttribute('data-cheering') === 'true';

                nextBtns.forEach(b => b.classList.toggle('hidden', isLast));
                doneBtns.forEach(b => b.classList.toggle('hidden', !isLast));

                if (src) {
                    audio = new Audio(src);
                    if (cheering) audio.onended = () =>
                        new Audio("{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}").play().catch(
                        () => {});
                    audio.play().catch(() => {});
                }
            }

            nextBtns.forEach(b => b.addEventListener('click', () => {
                if (current < slides.length - 1) showSlide(current + 1);
            }));

            returnBtn?.addEventListener('click', () => {
                current === 0 ? (stopAudio(), location.href = returnURL) : showSlide(current - 1);
            });

            homeBtn?.addEventListener('click', () => {
                stopAudio();
                location.href = homeURL;
            });

            doneBtns.forEach(b => b.addEventListener('click', () => {
                stopAudio();
                location.href = doneURL;
            }));

            showSlide(0);
        });
    </script>
@endpush
