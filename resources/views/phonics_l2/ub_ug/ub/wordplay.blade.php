@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;

    // URLS
    $returnURL = '/phonics_l2/ub_ug/ub';
    $doneURL = '/phonics_l2/ub_ug/ub';

    $panels = [
        [
            'image' => 'phonics_l2/ubug/tub.png',
            'imageSize' => 'w-[16vw]',
            'options' => ['tab', 'tub'],
            'answer' => 'tub',
            'before' => 't', 
            'highlight' => 'ub',
            'after' => '', 
            'audio' => 'ub_ug/tub.m4a',
            'tip' =>
                'Tip: Invite children to sound out each word by parts (e.g. /t/.../op/) <br> before selecting the word that matches the picture.',
        ],
        [
            'image' => 'phonics_l2/ubug/rub.png',
            'imageSize' => 'w-[20vw]',
            'options' => ['rub', 'rat'],
            'answer' => 'rub',
            'before' => 'r',
            'highlight' => 'ub',
            'after' => '',
            'audio' => 'ub_ug/rub.m4a',
            'tip' => null,
        ],
        [
            'image' => 'phonics_l2/ubug/cub.png',
            'imageSize' => 'w-[20vw]',
            'options' => ['cup', 'cub'],
            'answer' => 'cub',
            'before' => 'c',
            'highlight' => 'ub',
            'after' => '',
            'audio' => 'ub_ug/cub.m4a',
            'tip' => null,
        ],
        [
            'image' => 'phonics_l2/ubug/scrub.png',
            'imageSize' => 'w-[20vw]',
            'options' => ['scrub', 'tag'],
            'answer' => 'scrub',
            'before' => 'scr',
            'highlight' => 'ub',
            'after' => '',
            'audio' => 'ub_ug/scrub.m4a',
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

        .large-title {
            color: #F7B94A;
            font-size: 4vw !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2vw !important;
        }

        .options {
            width: 12vw;
            height: 6vw;
            font-size: 4vw;
            line-height: 100%;
            color: #A15E0D;
            background: #D9D9D9;
            border: 4px solid #F8A23A;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush


@section('content')

    {{-- ── Panel 1: Intro ── --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/wordplay.m4a') }}">
        <h2 class="top-title stroke">Word Play</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/word.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- ── Question + Answer panels (auto-generated) ── --}}
    @foreach ($panels as $panel)
        {{-- Question panel --}}
        <div class="phonics-panel flex flex-col items-center space-y-[4vw] w-full relative"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sh_th/find-word.m4a') }}">

            <h2 class="stroke panel-title">Find the word that matches the picture.</h2>

            <div class="flex items-center justify-around w-full">
                <img src="{{ asset('assets/images/' . $panel['image']) }}" class="{{ $panel['imageSize'] }}" />
                <div class="space-y-[1vw]">
                    @foreach ($panel['options'] as $option)
                        <div class="options">{{ $option }}</div>
                    @endforeach
                </div>
            </div>

            @if (!empty($panel['tip']))
                <p class="note">{!! $panel['tip'] !!}</p>
            @endif

            {{-- Side sound button --}}
            <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-3%] top-[40%]">
                <button class="w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $panel['audio']) }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        {{-- Answer panel --}}
        <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw] items-center w-full"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/' . $panel['audio']) }}">

            <div class="flex items-end justify-around w-full">
                <img src="{{ asset('assets/images/' . $panel['image']) }}" class="{{ $panel['imageSize'] }}" />
                <div class="space-y-[1vw] flex items-center">
                    <div class="options">{{ $panel['answer'] }}</div>
                    <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}" class="w-[3vw] h-[3vw]" />
                </div>
            </div>

            <h2 class="text-[4vw]">
                <span class="text-white">{{ $panel['before'] }}<span class="text-[#f7b94a]">{{ $panel['highlight'] }}</span>{{ $panel['after'] }}</span>
            </h2>
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
            const soundButtons = document.querySelectorAll("[id^='soundButton']");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            const returnURL = "{{ url($returnURL) }}";
            const doneURL = "{{ url($doneURL) }}";
            const homeURL = "{{ url('/phonics/l2') }}";

            let currentSlide = 0;
            let currentAudio = null;

            function stopAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playAudio(src) {
                stopAudio();
                if (!src) return;
                currentAudio = new Audio(src);
                currentAudio.play().catch(() => {});
            }

            function showSlide(index) {
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== index));
                playAudio(slides[index].getAttribute('data-slide-audio'));

                const isLast = index === slides.length - 1;
                nextButtons.forEach(b => b.classList.toggle('hidden', isLast));
                doneButtons.forEach(b => b.classList.toggle('hidden', !isLast));
            }

            nextButtons.forEach(b => b.addEventListener('click', () => {
                if (currentSlide < slides.length - 1) showSlide(++currentSlide);
            }));
            returnButton?.addEventListener('click', () => {
                currentSlide === 0 ? (stopAudio(), window.location.href = returnURL) : showSlide(--
                    currentSlide);
            });
            homeButton?.addEventListener('click', () => {
                stopAudio();
                window.location.href = homeURL;
            });
            doneButtons.forEach(b => b.addEventListener('click', () => {
                stopAudio();
                window.location.href = doneURL;
            }));
            soundButtons.forEach(b => b.addEventListener('click', e => {
                e.stopPropagation();
                playAudio(b.getAttribute('data-slide-audio'));
            }));

            showSlide(0);
        });
    </script>
@endpush
