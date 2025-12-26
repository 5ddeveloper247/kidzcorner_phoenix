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

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .large-title {
            color: #F7B94A;
            font-size: 25vw !important;
            10
        }

        .large-title:hover {
            color: #757571 !important;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
        }
    </style>
@endpush

@section('content')
    {{-- Top Title --}}
    <h2 class="top-title stroke">Word Hunt</h2>


    {{-- panel 1 --}}
    <div class="phonics-panel flex justify-between items-center">
        <div class="flex items-start ">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonicsl1/global/click3.png') }}" class="w-[30vw]" />
                <h3
                    class="text-[#B76E33] text-[2.5vw] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                    let's go on <br> a word hunt!
                </h3>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/flashcard/listen-to-words.m4a') }}">
        <h2 class="text-white text-[2vw] text-center">Listen to these words:</h2>
        <div class="grid grid-cols-3 items-start ">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/make.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/makes.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_b/a.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_b/into.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_b/that.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_b/not.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/is.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/get.png') }}" class="w-[14vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/getting.png') }}" class="w-[14vw]" />
            <div class="col-span-3 flex justify-center">
                <img src="{{ asset('assets/images/phonicsl1/letter_c/now.png') }}" class="w-[14vw]" />
            </div>
        </div>
        <p class="p-note">Tip: Ask children to refer to the Word Hunt Activity Sheet in the Pupil’s Activity Book.</p>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story2.m4a') }}">
        <h2 class="text-white text-[1.6vw] text-center">How many of these words can you find <br>
            in the story? Circle them.</h2>
        <img src="{{ asset('assets/images/phonicsl1/letter_c/word-stck.png') }}" class="w-full" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/castle-p.gif') }}" class="w-[18vw]" />
        </div>
        <h1 class="text-white text-[2.7vw]">Buddy makes a Castle</h1>
        <p class="p-note w-[70%]">Tip: Ask children to circle the words that appear in the story on their Activity Sheet.
            Check result on next slide.</p>
    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story2.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack2.png') }}" class="w-full" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/castle-p.gif') }}" class="w-[18vw]" />
        </div>
        <h1 class="text-white text-[2.7vw]">Buddy <span class="text-[#f7b94a]">makes a</span> Castle</h1>
        <p class="p-note">Tip: Highlight that the beginning letter in a sentence is written in uppercase.</p>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story3.m4a') }}">
        <h2 class="text-white text-[1.6vw] text-center">How many of these words can you find <br>
            in the story? Circle them.</h2>
        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack2.png') }}" class="w-full" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/playing.gif') }}" class="w-[17vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[4vw] absolute top-[0] left-[18%]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[2vw] absolute top-[10%] left-[11%]" />

        </div>
        <h1 class="text-white text-[2.5vw]">The cat plays catch with a colourful can.</h1>
        <p class="p-note w-[70%]">Tip: Ask children to circle the words that appear in the story on their Activity Sheet.
            Check result on next slide.</p>
    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story3.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack3.png') }}" class="w-full" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/playing.gif') }}" class="w-[18vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[4vw] absolute top-[0] left-[18%]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[2vw] absolute top-[10%] left-[11%]" />

        </div>
        <h1 class="text-white text-[2.5vw]">The cat plays catch <span class="text-[#f7b94a]">with a</span> colourful can.
        </h1>
        <p class="p-note">Tip: Highlight that the beginning letter in a sentence is written in uppercase.</p>

    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story4.m4a') }}">
        <h2 class="text-white text-[1.6vw] text-center">How many of these words can you find <br>
            in the story? Circle them.</h2>
        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack3.png') }}" class="w-full" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/cat.gif') }}" class="w-[17vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}" class="w-[4vw] absolute top-[0vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[2vw] absolute top-[1vw] !left-[-3vw]" />

        </div>
        <h1 class="text-white text-[2.5vw]">The cat crashes into the castle.</h1>
        <p class="p-note w-[70%]">Tip: Ask children to circle the words that appear in the story on their Activity Sheet.
            Check result on next slide.</p>
    </div>

    {{-- Panel 8 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story4.m4a') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack4.png') }}" class="w-full" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/cat.gif') }}" class="w-[18vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}" class="w-[4vw] absolute top-[0vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[2vw] absolute top-[1vw] !left-[-3vw]" />

        </div>
        <h1 class="text-white text-[2.5vw]">The cat crashes <span class="text-[#F7B94A]"> into the</span> castle.</h1>
        <p class="p-note">Tip: Highlight that the beginning letter in a sentence is written in uppercase.</p>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel flex flex-col items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story5.m4a') }}">
        <h2 class="text-white text-[1.6vw] text-center">How many of these words can you find <br>
            in the story? Circle them.</h2>
        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack4.png') }}" class="w-full" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/angry.gif') }}" class="w-[17vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}" class="w-[4vw] absolute top-[0vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[2vw] absolute top-[1vw] !left-[-3vw]" />

        </div>
        <h1 class="text-white text-[2.5vw]">That’s not clever!</h1>
        <p class="p-note w-[70%]">Tip: Ask children to circle the words that appear in the story on their Activity Sheet.
            Check result on next slide.</p>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel flex flex-col items-center justify-between h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story5.m4a') }}">

        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack5.png') }}" class="!w-[55vw]" />
        <div class="relative">
            <img src="{{ asset('assets/images/phonicsl1/letter_c/angry.gif') }}" class="w-[18vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}" class="w-[4vw] absolute top-[0vw]" />
            <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                class="w-[2vw] absolute top-[1vw] !left-[-3vw]" />

        </div>
        <h1 class="text-white text-[2.5vw]">That’s <span class="text-[#F7B94A]">not</span> clever!</h1>

    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/phonicsl1/letter_c/stack5.png') }}" class="!w-[55vw]" />
    </div>



    <div class="phonics-panel grid grid-cols-2 gap-[1vw] h-fit w-fit"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/letter-c/story5.m4a') }}">

        <!-- ITEM 1 -->
        <a >
            <div class="relative flex flex-col items-center text-center w-fit">
                <div class="relative w-fit ietm-1">
                    <img src="{{ asset('assets/images/phonicsl1/letter_c/castle.gif') }}" class="w-[17vw]" />

                    <!-- Birds -->
                    <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                        class="w-[4vw] absolute top-[0vw] left-[1.5vw]" />
                    <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                        class="w-[2vw] absolute top-[1vw] left-[0.5vw]" />
                </div>

                <h1 class="text-white text-[1.2vw] mt-[0.5vw]">
                    Buddy <span class="text-[#f7b94a]">makes a</span> Castle
                </h1>
            </div>
        </a>

        <!-- ITEM 2 -->
        <div class="relative flex flex-col items-center text-center w-fit mt-[2vw]">
            <div class="relative w-fit ietm-2">
                <img src="{{ asset('assets/images/phonicsl1/letter_c/playing.gif') }}" class="w-[17vw]" />

                <!-- Birds -->
                <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                    class="w-[4vw] absolute top-[0vw] left-[1.5vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                    class="w-[2vw] absolute top-[1vw] left-[0.5vw]" />
            </div>

            <h1 class="text-white text-[1.2vw] mt-[0.5vw]">
                The cat plays catch <span class="text-[#f7b94a]">with a</span> colorful can.
            </h1>
        </div>

        <!-- ITEM 3 -->
        <div class="relative flex flex-col items-center text-center w-fit">
            <div class="relative w-fit ietm-3">
                <img src="{{ asset('assets/images/phonicsl1/letter_c/cat.gif') }}" class="w-[17vw]" />

                <!-- Birds -->
                <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                    class="w-[4vw] absolute top-[0vw] left-[1.5vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                    class="w-[2vw] absolute top-[1vw] left-[0.5vw]" />
            </div>

            <h1 class="text-white text-[1.2vw] mt-[0.5vw]">
                The cat crashes <span class="text-[#f7b94a]">into the</span> castle.
            </h1>
        </div>

        <!-- ITEM 4 -->
        <div class="relative flex flex-col items-center text-center w-fit">
            <div class="relative w-fit ietm-4">
                <img src="{{ asset('assets/images/phonicsl1/letter_c/angry.gif') }}" class="w-[17vw]" />

                <!-- Birds -->
                <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                    class="w-[4vw] absolute top-[0vw] left-[1.5vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_c/bird.gif') }}"
                    class="w-[2vw] absolute top-[1vw] left-[0.5vw]" />
            </div>

            <h1 class="text-white text-[1.2vw] mt-[0.5vw]">
                That's <span class="text-[#f7b94a]">not</span> clever.
            </h1>
        </div>

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
        // SLIDE NAVIGATION SYSTEM
        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/phonics/letter_c') }}";
            const doneURL = "{{ url('/phonics/letter_c') }}";

            // Track current position
            let currentSlide = 0;

            // 🔊 Global audio tracking
            let currentAudio = null;

            // 🛑 Function to stop all audio/speech
            function stopAllAudio() {
                // Stop any playing audio files
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
                // Stop text-to-speech
                window.speechSynthesis.cancel();
            }


            // HELPER FUNCTIONS
            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);
                return classList.some(cls => /^info-panel-\d+$/.test(cls));
            }

            function isLastSlide(slideIndex) {
                for (let i = slideIndex + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) {
                        return false;
                    }
                }
                return true;
            }

            // DISPLAY FUNCTIONS
            function showSlide(slideIndex) {
                const ajaxSection = document.getElementById('ajax-section');
                const currentSlideElement = slides[slideIndex];

                // 🛑 Stop all audio when changing slides
                stopAllAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Check if current slide has 'next-hide' class
                if (currentSlideElement.classList.contains('next-hide')) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                } else {
                    // Show "Done" button on last slide, otherwise show "Next"
                    if (isLastSlide(slideIndex)) {
                        // Check if current slide has 'done-hide' class
                        if (currentSlideElement.classList.contains('done-hide')) {
                            // Hide done button if slide has done-hide class
                            if (doneButton) doneButton.classList.add("hidden");
                            nextButtons.forEach(btn => btn.classList.add("hidden"));
                        } else {
                            // Show done button normally
                            nextButtons.forEach(btn => btn.classList.add("hidden"));
                            if (doneButton) doneButton.classList.remove("hidden");
                        }
                    } else {
                        nextButtons.forEach(btn => btn.classList.remove("hidden"));
                        if (doneButton) doneButton.classList.add("hidden");
                    }
                }

                // Toggle ajax-section background ONLY based on no-bg class
                if (ajaxSection) {
                    if (currentSlideElement.classList.contains('no-bg')) {
                        ajaxSection.classList.add('no-bg');
                    } else {
                        ajaxSection.classList.remove('no-bg');
                    }
                }

                // 🔊 Auto-play audio if slide has data-slide-audio attribute
                const slideAudioSrc = currentSlideElement.getAttribute('data-slide-audio');
                if (slideAudioSrc) {
                    // Small delay to ensure slide is visible before playing
                    setTimeout(() => {
                        currentAudio = new Audio(slideAudioSrc);
                        currentAudio.play().catch(err => console.log('Auto-play failed:', err));
                    }, 300);
                }
                // 🔊 Otherwise, speak the data-letter if present
                else {
                    const dataLetter = currentSlideElement.getAttribute('data-letter');
                    if (dataLetter) {
                        setTimeout(() => {
                            speakLetter(dataLetter);
                        }, 300);
                    }
                }
            }

            // NAVIGATION FUNCTIONS
            function goNext() {
                if (currentSlide >= slides.length - 1) return;
                currentSlide++;
                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];
                    if (!isSpecialSlide(slide)) break;
                    currentSlide++;
                }
                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                if (currentSlide === 0) {
                    stopAllAudio(); // 🛑 Stop audio before leaving
                    window.location.href = returnURL;
                    return;
                }
                if (currentSlide > 0) {
                    currentSlide--;
                    while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                        currentSlide--;
                    }
                    showSlide(currentSlide);
                }
            }

            function handleDone() {
                stopAllAudio(); // 🛑 Stop audio before action
                window.location.href = doneURL;
            }

            // EVENT LISTENERS
            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            // 🔊 Home and Close buttons also stop audio
            const homeButton = document.getElementById("homeButton");
            const closeButton = document.getElementById("closeButton");

            if (homeButton) {
                homeButton.addEventListener("click", () => stopAllAudio());
            }

            if (closeButton) {
                closeButton.addEventListener("click", () => stopAllAudio());
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Stop any previous audio first
                    stopAllAudio();

                    // Play audio file if data-audio is provided
                    const audioSrc = btn.getAttribute("data-audio");
                    if (audioSrc) {
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play();
                    }
                    // Otherwise speak the letter
                    else {
                        const letter = btn.getAttribute("data-letter") || "a";
                        speakLetter(letter);
                    }
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // 🔊 ITEM CLICK AUDIO LOGIC (Items 1-4)
            const items = document.querySelectorAll('.ietm-1, .ietm-2, .ietm-3, .ietm-4');
            
            // Define audio paths for each item
            const itemAudioPaths = {
                'ietm-1': "{{ asset('assets/audio/phonics_audio/letter-c/story2.m4a') }}",
                'ietm-2': "{{ asset('assets/audio/phonics_audio/letter-c/story3.m4a') }}",
                'ietm-3': "{{ asset('assets/audio/phonics_audio/letter-c/story4.m4a') }}",
                'ietm-4': "{{ asset('assets/audio/phonics_audio/letter-c/story5.m4a') }}"
            };

            items.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Stop any currently playing audio
                    stopAllAudio();
                    
                    // Get the item class to determine which audio to play
                    const itemClass = Array.from(item.classList).find(cls => cls.startsWith('ietm-'));
                    
                    if (itemClass && itemAudioPaths[itemClass]) {
                        currentAudio = new Audio(itemAudioPaths[itemClass]);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
                
                // Add pointer cursor to indicate clickability
                item.style.cursor = 'pointer';
            });

            // INITIALIZE
            showSlide(currentSlide);
        });
    </script>
@endpush
