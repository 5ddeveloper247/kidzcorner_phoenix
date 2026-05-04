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

        .c-btn {
            color: #F7B94A !important;
        }

        .large-title {
            color: #F7B94A;
            font-size: 20vw !important;
        }

        .link:hover {
            color: #a37d3adb;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
        }
    </style>
@endpush

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Story Time</h2>

    {{-- panel 1 --}}
    <div class="phonics-panel no-bg mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio/storytime.mp3') }}">
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />

            <h1 class="text-white text-[4vw] absolute top-[55%] left-1/2 -translate-1/2"> It's story <br> time!</h1>

            <p class="p-note absolute bottom-[1vw] left-[22%]">Tip: <a class="c-btn">Click here</a> to find
                out why reading words is important.</p>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-n/stn1.m4a') }}">
        <h1 class="text-white text-[3vw]"><span class="text-[#f7b94a]">N</span>ick</h1>
        <img src="{{ asset('assets/images/phonicsl1/letter_n/hi.png') }}" class="h-[25vw]" />
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel relative flex flex-col h-full items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-n/stn2.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_n/sad.gif') }}" class="h-[25vw]" />
        <h1 class="text-white text-[3vw]"><span class="text-[#f7b94a]">N</span>ick is not happy</h1>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel relative flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-n/stn3.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_n/sad.gif') }}" class="h-[25vw]" />
        <h1 class="text-white text-[2.5vw]"> <span class="text-[#f7b94a]">N</span>ick feels sick.</h1>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel relative flex flex-col items-center justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-n/stn4.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_n/nurse.gif') }}" class="h-[25vw] rounded-[1vw]" />
        <h1 class="text-white text-[2.5vw]">The <span class="text-[#f7b94a]">n</span>urse tells <span
                class="text-[#f7b94a]">N</span>ick to take a <span class="text-[#f7b94a]">n</span>ap.</h1>
    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel relative flex flex-col items-center h-full justify-between"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-n/stn5.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_n/happy.gif') }}" class="h-[25vw] rounded-[1vw]" />
        <h1 class="text-white text-[2.5vw]">Now he is <span class="text-[#f7b94a]">n</span>early better!</h1>
    </div>





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
        document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const homeButton = document.getElementById("homeButton");
            const closeButton = document.getElementById("closeButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l1/letter_n') }}?view=words"; // ✅ FIX
            const doneURL = "{{ url('/phonics_l1/letter_n') }}?view=words"; // ✅ single declaration

            let currentSlide = 0;
            let currentAudio = null;

            // 🛑 Stop all audio
            function stopAllAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function isSpecialSlide(slide) {
                return [...slide.classList].some(cls => /^info-panel-\d+$/.test(cls));
            }

            function isLastSlide(index) {
                for (let i = index + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) return false;
                }
                return true;
            }

            function showSlide(index) {
                const ajaxSection = document.getElementById("ajax-section");
                const slide = slides[index];

                stopAllAudio();

                slides.forEach((s, i) => {
                    s.classList.toggle("hidden", i !== index);
                });

                // Next / Done logic
                if (slide.classList.contains("next-hide")) {
                    nextButtons.forEach(b => b.classList.add("hidden"));
                } else if (isLastSlide(index)) {
                    nextButtons.forEach(b => b.classList.add("hidden"));
                    slide.classList.contains("done-hide") ?
                        doneButton?.classList.add("hidden") :
                        doneButton?.classList.remove("hidden");
                } else {
                    nextButtons.forEach(b => b.classList.remove("hidden"));
                    doneButton?.classList.add("hidden");
                }

                // Background toggle
                if (ajaxSection) {
                    ajaxSection.classList.toggle("no-bg", slide.classList.contains("no-bg"));
                }

                // 🔊 Auto-play slide audio
                const audioSrc = slide.dataset.slideAudio;
                if (audioSrc) {
                    setTimeout(() => {
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(() => {});
                    }, 300);
                }
            }

            function goNext() {
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;
                while (slides[currentSlide] && isSpecialSlide(slides[currentSlide])) {
                    currentSlide++;
                }

                showSlide(currentSlide);
            }

            function goBack() {
                if (currentSlide === 0) {
                    stopAllAudio();
                    window.location.href = returnURL;
                    return;
                }

                currentSlide--;
                while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                    currentSlide--;
                }

                showSlide(currentSlide);
            }

            function handleDone() {
                stopAllAudio();
                window.location.href = doneURL;
            }

            // Events
            nextButtons.forEach(btn => btn.addEventListener("click", goNext));
            returnButton?.addEventListener("click", goBack);
            doneButton?.addEventListener("click", handleDone);
            homeButton?.addEventListener("click", stopAllAudio);
            closeButton?.addEventListener("click", stopAllAudio);

            soundButtons.forEach(btn => {
                btn.addEventListener("click", e => {
                    e.preventDefault();
                    stopAllAudio();
                    const src = btn.dataset.audio;
                    if (src) {
                        currentAudio = new Audio(src);
                        currentAudio.play();
                    }
                });
            });

            // Init
            showSlide(currentSlide);
        });
    </script>
@endpush
