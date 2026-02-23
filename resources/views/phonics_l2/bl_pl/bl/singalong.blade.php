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

        .note {
            font-size: 1vw;
            color: white !important;
        }
    </style>
@endpush

@section('content')
    {{-- Panel 1: Intro Slide --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/singalong.m4a') }}">
        <h2 class="top-title stroke">Sing Along</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/sing.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- Panel 2: Song Content Slide --}}
    <div class="phonics-panel flex flex-col space-y-[1.5vw] mt-[-3vw] h-full items-center">
        <div class="text-center">
            <h2 class="large-title">Bl</h2>
            <p class="note">Sing to the tune of "Pop goes the Weasel</p>
        </div>

        <div class="text-white text-[3vw]">
            <h1>Bl is for /bl/</h1>
            <h1>/Bl/ is for bl</h1>
            <img src="{{ asset('assets/images/phonics_l2/blpl/song2.png') }}" class="ml-10" />
            <h1>/bl/, /bl/, /bl/, /bl/</h1>
        </div>

        <p class="p-note">Tips: Invite children to sing-along. Encourage them to listen to the target blend sounds. <br>
            Extension: Encourage children to substitute other words with /bl/ and sing along.</p>

        <button class="absolute top-1/2 -translate-1/2 left-[-10vw] w-[4vw]" id="soundButton"
            data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl-singalong.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

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
        document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");     
            const nextButtons = document.querySelectorAll(".nextButton");   
            const returnButton = document.getElementById("returnButton");   
            const doneButton = document.querySelector(".doneButton");       
            const soundButtons = document.querySelectorAll("[id^='soundButton']"); 

       
            const returnURL = "{{ url('/phonics_l2/bl_pl/bl') }}";  
            const doneURL = "{{ url('/phonics_l2/bl_pl/bl') }}";    
 
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
                
                // Try to get audio from slide itself
                let audioSrc = slide.getAttribute('data-slide-audio');

                // If not on slide, look for element inside slide with audio
                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                // Play the audio if we found one
                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }

            function isLastSlide(slideIndex) {
                // Check if there are any more slides after this one
                for (let i = slideIndex + 1; i < slides.length; i++) {
                    return false; 
                }
                return true; 
            }

            function showSlide(slideIndex) {
                // Stop previous slide's audio
                stopCurrentAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");  
                    } else {
                        slide.classList.add("hidden");    
                    }
                });

                // Play audio for this slide
                playSlideAudio(slideIndex);

                // Show correct button: "Done" on last slide, "Next" on others
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));      
                    if (doneButton) doneButton.classList.remove("hidden");        
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));  
                    if (doneButton) doneButton.classList.add("hidden");          
                }
            }

            function goNext() {
                // Don't go past last slide
                if (currentSlide >= slides.length - 1) return;

                // Move to next slide
                currentSlide++;
                showSlide(currentSlide);
            }

            function goBack() {
                // If on first slide, go to previous page
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

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }


            showSlide(currentSlide);  
        });
    </script>
@endpush
