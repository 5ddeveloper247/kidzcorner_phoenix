@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp

@push('styles')
    <style>
        .p-note {
            font-size: 1vw;
            color: white !important;
        }

        .large-title {
            color: #F7B94A;
            font-size: 4vw !important;
        }

        .note {
            font-size: 1vw;
            color: white !important;
        }
    </style>
@endpush

@section('content')
    {{-- Panel 1: Intro Slide --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/rhymetime.m4a') }}">
        <h2 class="top-title stroke">Rhyme Time</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/rhyme.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- Panel 2: Song Content Slide --}}
    <div class="phonics-panel flex flex-col mt-[-3vw] h-full items-center space-y-[1.5vw]">
        <h2 class="large-title stroke">Brad and Chad</h2>
        <img src="{{ asset('assets/images/phonics_l2/agab/rhyme.png') }}" class="h-[20vw]" />

        <p class="p-note">Tips: After reciting the rhyme, invite children to find the words that begin with the target blend
            sound. <br>
            Encourage them to find words that rhyme too.</p>

        <button class="absolute top-1/2 -translate-1/2 left-[-10vw] w-[4vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ag_ab/ab-rhyme.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

{{-- ============================================f --}}
    {{-- Navigation Buttons (Top) --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <!-- Return/Back Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

    {{-- Next Button (Bottom) --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/next-btn.png') }}" />
        </button>
    </div>

    {{-- Done Button (Bottom) - Initially Hidden --}}
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

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const doneButton = document.querySelector(".doneButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/ag_ab/ab') }}";
            const doneURL = "{{ url('/phonics_l2/ag_ab/ab') }}";
            const homeURL = document.body.dataset.homeRoute;

            let currentSlide = 0;
            let currentAudio = null;

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide = slides[slideIndex];

                let audioSrc = slide.getAttribute('data-slide-audio');

                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }

            function isLastSlide(slideIndex) {
                for (let i = slideIndex + 1; i < slides.length; i++) {
                    return false;
                }
                return true;
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();

                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                playSlideAudio(slideIndex);

                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            function goNext() {
                if (currentSlide >= slides.length - 1) return;
                currentSlide++;
                showSlide(currentSlide);
            }

            function goBack() {
                if (currentSlide === 0) {
                    stopCurrentAudio();
                    window.location.href = returnURL;
                    return;
                }
                currentSlide--;
                showSlide(currentSlide);
            }

            function handleDone() {
                stopCurrentAudio();
                window.location.href = doneURL;
            }

            function handleHome() {
                stopCurrentAudio();
                window.location.href = homeURL;
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    const audioSrc = btn.getAttribute('data-slide-audio');
                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });

            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            if (homeButton) {
                homeButton.addEventListener("click", handleHome);
            }

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            showSlide(currentSlide);
        });
    </script>
@endpush