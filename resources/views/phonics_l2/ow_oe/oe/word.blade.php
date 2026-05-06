@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    $returnURL = '/phonics_l2/ow_oe/oe';
    $doneURL = '/phonics_l2/ow_oe/oe';

    $questions = [
        [
            'image' => 'assets/images/phonics_l2/owoe/rose.png',
            'class' => 'h-[20vw]',
            'audio' => 'assets/audio/phonics_audio-2/ow_oe/rose.m4a',
            'leftLetters' => ['n', 'm', 'fl', 'r'],
            'rightLetters' => ['t', 'l', 'p', 's'],
            'vowels' => ['o', 'e'],
            'answers' => [[null, null, null, null], 
            ['r', null, 3, null], ['r', 's', 3, 3]],
        ],

        [
            'image' => 'assets/images/phonics_l2/owoe/nose.png',
            'audio' => 'assets/audio/phonics_audio-2/ow_oe/nose.m4a',
            'leftLetters' => ['n', 'm', 'fl', 'l'],
            'rightLetters' => ['t', 'l', 'p', 's'],
            'vowels' => ['o', 'e'],
            'answers' => [[null, null, null, null], ['n', null, 0, null], ['n', 's', 0, 3]],
        ],

        [
            'image' => 'assets/images/phonics_l2/owoe/cone.png',
            'audio' => 'assets/audio/phonics_audio-2/ow_oe/cone.m4a',
            'class' => 'h-[20vw]',
            'leftLetters' => ['t', 'm', 'fl', 'c'],
            'rightLetters' => ['n', 'm', 'p', 'b'],
            'vowels' => ['o', 'e'],
            'answers' => [[null, null, null, null], ['c', null, 3, null], ['c', 'n', 3, 0]],
        ],

        [
            'image' => 'assets/images/phonics_l2/owoe/rope.png',
            'audio' => 'assets/audio/phonics_audio-2/ow_oe/rope.m4a',
            'leftLetters' => ['t', 'r', 'fl', 'c'],
            'rightLetters' => ['t', 'm', 'p', 'b'],
            'vowels' => ['o', 'e'],
            'answers' => [[null, null, null, null], ['r', null, 1, null], ['r', 'p', 1, 2]],
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
    </style>
@endpush


@section('content')

    {{-- Intro slide --}}
    <div class="phonics-panel" >
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

            <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! w-full items-center h-full"
                data-slide-audio="{{ asset($q['audio']) }}" {{ $isLastSlide ? 'data-cheering=true' : '' }}>

                <h2 class="panel-title stroke">Make a word to match the picture.</h2>

                <div class="flex w-full justify-between px-[3vw] h-full">

                    {{-- Left tiles --}}
                    <div class="flex flex-col items-center space-y-[1vw]">
                        @foreach ($q['leftLetters'] as $i => $letter)
                            <div class="box {{ $hideL === $i ? 'opacity-0' : '' }}">{{ $letter }}</div>
                        @endforeach
                    </div>

                    {{-- Centre: image + answer boxes --}}
                    <div class="flex flex-col items-center justify-between h-full">
                        <img src="{{ asset($q['image']) }}" class="{{ $q['class'] ?? 'w-[15vw]' }}" />
                        <div class="flex border-[#f7b94a] border-2 p-[1vw] gap-[3vw] rounded-[1vw]">
                            <div class="flex items-center gap-[1vw]">
                                <div class="abox">{{ $slot1 }}</div>
                                <h2 class="text-white text-[1.5vw]">{{ $q['vowels'][0] }}</h2>
                            </div>
                            <div class="flex items-center gap-[1vw]">
                                <div class="abox">{{ $slot2 }}</div>
                                <h2 class="text-white text-[1.5vw]">{{ $q['vowels'][1] }}</h2>
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
