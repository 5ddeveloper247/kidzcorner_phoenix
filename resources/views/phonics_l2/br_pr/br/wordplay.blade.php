@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
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
    {{-- Top Title --}}

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/wordplay.m4a') }}">
        <h2 class="top-title stroke">Word Play</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/word.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full">
        <div class="flex items-end justify-around w-full ">
            <div class="flex items-end gap-[.5vw]">
                <h2 class="large-title">br</h2>
                <div class="options"></div>
            </div>
            <div class="space-y-[1vw]">
                <div class="options">oom</div>
                <div class="options">ush</div>
                <div class="options">ead</div>
                <div class="options">own</div>
            </div>
        </div>

        <p class="note">Tips: Encourage children to try blending the word parts together to make a whole word.</p>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-oom.m4a') }}">
        <div class="flex items-end justify-around w-full ">
            <div class="flex flex-col items-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/broom.png') }}" class="w-[20vw]" />
                <div class="options text-[#f7b94a]! text-[3vw]! text-end">broom</div>
            </div>
            <div class="space-y-[1vw]">
                <div class="options opacity-0!">oom</div>
                <div class="options">ush</div>
                <div class="options">ead</div>
                <div class="options">own</div>
            </div>
        </div>
    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-ush.m4a') }}">
        <div class="flex items-end justify-around w-full ">
            <div class="flex flex-col items-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/brush.png') }}" class="w-[20vw]" />
                <div class="options text-[#f7b94a]! text-[3vw]! text-end">brush</div>
            </div>
            <div class="space-y-[1vw]">
                <div class="options">oom</div>
                <div class="options opacity-0!">ush</div>
                <div class="options">ead</div>
                <div class="options">own</div>
            </div>
        </div>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-ead.m4a') }}">
        <div class="flex items-end justify-around w-full ">
            <div class="flex flex-col items-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/bread.png') }}" class="w-[20vw]" />
                <div class="options text-[#f7b94a]! text-[3vw]! text-end">bread</div>
            </div>
            <div class="space-y-[1vw]">
                <div class="options">oom</div>
                <div class="options">ush</div>
                <div class="options opacity-0!">oat</div>
                <div class="options">own</div>
            </div>
        </div>
    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw] items-center w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-own.m4a') }}">
        <div class="flex items-end justify-around w-full ">
            <div class="flex flex-col items-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/brown.png') }}" class="w-[20vw]" />
                <div class="options text-[#f7b94a]! text-[3vw]! text-end">brown</div>
            </div>
            <div class="space-y-[1vw]">
                <div class="options">oom</div>
                <div class="options">ush</div>
                <div class="options">ead</div>
                <div class="options opacity-0!">ag</div>
            </div>
        </div>
    </div>



    {{-- ================================================= --}}
    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">

        <!-- Home Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- return Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    {{-- Next and Done Buttons --}}
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
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");

            const returnURL = "{{ url('/phonics_l2/br_pr/br') }}";
            const doneURL = "{{ url('/phonics_l2/br_pr/br') }}";
            const homeURL = "{{ url('/phonics/l2') }}";
            const AUTO_PLAY_DELAY = 500;

            let currentSlide = 0;
            let currentAudio = null;

            function stopAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(index) {
                stopAudio();
                const src = slides[index].getAttribute('data-slide-audio');
                if (!src) return;
                setTimeout(() => {
                    currentAudio = new Audio(src);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }, AUTO_PLAY_DELAY);
            }

            function showSlide(index) {
                slides.forEach((slide, i) => slide.classList.toggle("hidden", i !== index));
                playSlideAudio(index);

                const isLast = index === slides.length - 1;
                nextButtons.forEach(btn => btn.classList.toggle("hidden", isLast));
                document.querySelectorAll(".doneButton").forEach(btn => btn.classList.toggle("hidden", !isLast));
            }

            nextButtons.forEach(btn => btn.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) showSlide(++currentSlide);
            }));

            returnButton?.addEventListener("click", () => {
                if (currentSlide === 0) {
                    stopAudio();
                    window.location.href = returnURL;
                } else {
                    showSlide(--currentSlide);
                }
            });

            homeButton?.addEventListener("click", () => {
                stopAudio();
                window.location.href = homeURL;
            });

            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", () => {
                    stopAudio();
                    window.location.href = doneURL;
                });
            });

            showSlide(0);
        });
    </script>
@endpush