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

        .large-title:hover {
            color: #757571 !important;
        }

        .link:hover {
            color: #a37d3adb;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel" data-audio="{{ asset('assets/audio/phonics_audio/SingAlong.mp3') }}">
        <img src="{{ asset('assets/images/phonicsl1/letter_a/sing-along.png') }}" class="w-[40vw]" />
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel no-bg mb-[2vw]">
        <div class="relative doorbox w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/letter_a/door.png') }}" class="w-[60vw] h-40vw" />
            {{-- left --}}
            <a class="link text-[1.3vw] info-btn1 absolute top-[27%] left-[15%]">Alphabet Song</a>
            <a class="link text-[1.3vw] info-btn2 absolute top-[44%] left-[15%]">...Begins with...</a>
            <a class="link text-[1.2vw] info-btn3 absolute top-[62%] left-[13%]">I’ve got the Letter</a>
            <a class="link text-[1.3vw] info-btn4 absolute bottom-[16%] left-[15%]">This is the Way</a>
            {{-- right --}}
            <a class="link text-[1.3vw] info-btn5 absolute top-[27%] right-[17%]">The ... In ...</a>
            <a class="link text-[1.1vw] info-btn6 absolute top-[45%] right-[13%]">One Little, Two Little</a>
            <a class="link text-[1.3vw] info-btn7 absolute top-[62%] right-[14%]">I Know a Word</a>
            <a class="link text-[1.3vw] info-btn8 absolute bottom-[16%] right-[10vw]">I Like ...</a>
        </div>
    </div>


    {{-- Info Panel 1 --}}
    <div class="phonics-panel info-panel-1">
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/phonicsl1/letter_a/abc.gif') }}" class="h-[25vw]" id="abc" />
        </div>
        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/abc.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Info Panel 2 --}}
    <div class="phonics-panel info-panel-2 space-y-[2vw]">
        <div class="flex flex-col items-center relative justify-between h-[25vw]">
            <h4 class="text-white text-[1vw]">(Tune: The Farmer in the Dell)</h4>
            <img src="{{ asset('assets/images/phonicsl1/letter_m/moon.png') }}" class="w-[15vw] absolute  left-0 rotate-[20deg]" />
            <div class="text-center text-white text-[2.8vw]">
                <h3>mone' begins with /m/.</h3>
                <h3>'mone' begins with /m/.</h3>
                <h3>'mone' begins with /m/ /m/ /m/.</h3>
                <h3>'mone' begins with /m/.</h3>

            </div>
        </div>

        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music. <br>
            Use the <a href="" class="c-btn info-btn9">Rebus Song Chart</a> to substitute with other words beginning
            with the /m/ sound.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-m/sm1.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    {{-- info Panel 9 --}}
    <div class="phonics-panel info-panel-9">
        <div class="flex items-center gap-7">
            <div class="w-[12vw] h-[12vw] rounded-2xl bg-[#2D9CDB]">
            </div>
            <h1 class="text-white text-[4vw]">begins with</h1>
            <div class="w-[12vw] h-[12vw] rounded-2xl bg-[#F7B94A]">
            </div>
        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/beginswith.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Infpo Panel 3 --}}
    <div class="phonics-panel info-panel-3 flex flex-col items-center justify-between">
        <h2 class="top-title stroke">I’ve got the Letter ‘k’</h2>
        <div class="flex flex-col items-center gap-[1vw] relative">
            <h4 class="text-white text-[1vw]">(Tune: I’ve got the Whole World in my Hand)</h4>
            <img src="{{ asset('assets/images/phonicsl1/letter_m/milk.png') }}" class="w-[10vw] float-right" />
            <div class="text-center text-white text-[3vw]">
                <h3>I've got the letter 'm' for milk.</h3>
                <h3>I've got the letter 'm' for milk.</h3>
                <h3>I've got the letter 'm' for milk.</h3>
                <h3>'m' goes /m/ /m/ /m/.</h3>
            </div>
        </div>

        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-m/sm2.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Infpo Panel 4 --}}
    <div class="phonics-panel info-panel-4">
        <h2 class="top-title stroke">This is the Way</h2>
        <div class="flex flex-col items-center gap-[1vw]">
            <h4 class="text-white text-[1vw]">(Tune: Here We Go Round the Mulberry Bush)</h4>
            <img src="{{ asset('assets/images/phonicsl1/letter_m/muffins.png') }}" class="w-[10vw]" />
            <div class="text-center text-white text-[2.5vw]">
                <h3>This is the way we make muffins.</h3>
                <h3>Make muffins. Make muffins.</h3>
                <h3>This is the way we make muffins.</h3>
                <h3>Muffins goes /m/ /m/ /m/ /m/ /m/.</h3>

            </div>
        </div>
        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-m/sm3.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    {{-- Infpo Panel 5 --}}
    <div class="phonics-panel info-panel-5">
        <h2 class="top-title stroke">The ... In ...</h2>
        <div class="flex flex-col items-center">
            <h4 class="text-white text-[1vw]">(Tune: The Wheels On The Bus Go Round And Round)</h4>
            <div class="w-100 flex justify-between items-center">
                <img src="{{ asset('assets/images/phonicsl1/letter_m/mat.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/phonicsl1/letter_m/mat.png') }}" class="w-[10vw]" />
            </div>
            <div class="text-center text-white text-[3vw]">
                <h3>The 'm' in mat goes /m/ /m/ /m/.</h3>
                <h3>/m/ /m/ /m/ /m/ /m/ /m/</h3>
                <h3>The 'm' in mat goes /m/ /m/ /m/.</h3>
                <h3>Over and over again.</h3>

            </div>
        </div>
        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-m/sm4.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Infpo Panel 6 --}}
    <div class="phonics-panel info-panel-6 flex flex-col justify-between h-full">
        <h2 class="top-title stroke">One Little, Two Little</h2>
        <div class="flex flex-col items-center relative">
            <h4 class="text-white text-[1vw]">(Tune: Ten Little Indian Boys)</h4>
            <img src="{{ asset('assets/images/phonicsl1/letter_m/monkeys.png') }}"
                class="h-[10vw]" />
        </div>
        <div class="text-center text-white text-[2.5vw]">
            <h3>One little, two little, three little monkeys.</h3>
            <h3>Four little, five little, six little monkeys.</h3>
            <h3>Seven little, eight little, nine little monkeys</h3>
            <h3>Ten playful little monkeys.</h3>

        </div>
        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-m/sm5.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- Infpo Panel 7 --}}
    <div class="phonics-panel info-panel-7 flex flex-col gap-y-[3vw]">
        <h2 class="top-title stroke">I Know a Word</h2>
        <div class="flex flex-col items-center gap-y-[2vw]">
            <h4 class="text-white text-[1vw]">(Tune: Bingo)</h4>
            <div>
                <img src="{{ asset('assets/images/phonicsl1/letter_m/group.png') }}" class="w-[45vw]" />
            </div>
        </div>
        <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-m/sm6.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>

    {{-- Infpo Panel 8 --}}
    <div class="phonics-panel info-panel-8 flex flex-col h-full">
        <h2 class="top-title stroke text-">I Like ...</h2>
        <div class="flex flex-col items-center justify-between h-full">
            <h4 class="text-white text-[1vw]">(Tune: Bingo)</h4>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/phonicsl1/letter_m/mango.png') }}" class="w-[10vw]" />
                <div class="text-center text-white text-[2.5vw]">
                    <h3>I like mangoes, yes I do.</h3>
                    <h3>I like mangoes, yes I do.</h3>
                    <h3>I like mangoes, yes I do.</h3>
                    <h3>Do you like mangoes too?</h3>
                </div>
            </div>
            <p class="p-note">Tip: Music will be automatically played twice. Click on the sound icon to repeat music.</p>
        </div>

        {{-- sound Button --}}
        <button class="absolute left-[-10vw] top-1/2 w-[5vw]" id="soundButton"
            data-audio="{{ asset('assets/audio/phonics_audio/letter-m/sm7.mp3') }}">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
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
          document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";
document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/phonics/letter_m') }}?view=phonics";
            const doneURL = "{{ url('/phonics/letter_m') }}?view=phonics";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            //  Global audio tracking
            let currentAudio = null;

            //  Function to stop all audio/speech
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

            function getSlideTypeFromButton(button) {
                const classList = Array.from(button.classList);
                for (let className of classList) {
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-panel-' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;
                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideIndex) {
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;
                if (!isInSpecialMode) {
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) {
                            return false;
                        }
                    }
                    return true;
                }
                return false;
            }

            function speakLetter(letter) {
                window.speechSynthesis.cancel();
                const utterance = new SpeechSynthesisUtterance(letter);
                utterance.rate = 0.8;
                utterance.pitch = 1.2;
                utterance.volume = 1;
                const voices = window.speechSynthesis.getVoices();
                const femaleVoice = voices.find(voice =>
                    voice.name.includes('Female') ||
                    voice.name.includes('female') ||
                    voice.name.includes('Woman') ||
                    voice.name.includes('Google US English') ||
                    voice.name.includes('Microsoft Zira')
                );
                if (femaleVoice) {
                    utterance.voice = femaleVoice;
                }
                window.speechSynthesis.speak(utterance);
            }

            // DISPLAY FUNCTIONS
            function showSlide(slideIndex) {
                const ajaxSection = document.getElementById('ajax-section');
                const currentSlideElement = slides[slideIndex];

                // Stop all audio when changing slides
                stopAllAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }

                // Toggle ajax-section background ONLY based on no-bg class
                if (ajaxSection) {
                    if (currentSlideElement.classList.contains('no-bg')) {
                        ajaxSection.classList.add('no-bg');
                    } else {
                        ajaxSection.classList.remove('no-bg');
                    }
                }

                // ✨ Auto-play audio for slides with data-audio attribute (like Panel 1)
                const slideAudioSrc = currentSlideElement.getAttribute('data-audio');
                if (slideAudioSrc) {
                    setTimeout(() => {
                        currentAudio = new Audio(slideAudioSrc);

                        // Play twice as mentioned in tips
                        let playCount = 0;
                        currentAudio.play();

                        currentAudio.onended = function() {
                            playCount++;
                            if (playCount < 2) {
                                currentAudio.currentTime = 0;
                                currentAudio.play();
                            }
                        };
                    }, 300);
                }

                // ✨ Auto-play audio for info-panel slides with sound buttons
                const soundButton = currentSlideElement.querySelector('#soundButton');
                if (soundButton && !slideAudioSrc) { // Only if slide doesn't have its own audio
                    const audioSrc = soundButton.getAttribute('data-audio');
                    if (audioSrc) {
                        setTimeout(() => {
                            currentAudio = new Audio(audioSrc);

                            // Play twice as mentioned in the tip
                            let playCount = 0;
                            currentAudio.play();

                            currentAudio.onended = function() {
                                playCount++;
                                if (playCount < 2) {
                                    currentAudio.currentTime = 0;
                                    currentAudio.play();
                                }
                            };
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
                    if (isInSpecialMode) {
                        if (slide.classList.contains(specialSlideClass)) break;
                    } else {
                        if (!isSpecialSlide(slide)) break;
                    }
                    currentSlide++;
                }
                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopAllAudio(); //  Stop audio before leaving
                    window.location.href = returnURL;
                    return;
                }
                if (isInSpecialMode) {
                    let previousIndex = currentSlide - 1;
                    while (previousIndex >= 0) {
                        if (slides[previousIndex].classList.contains(specialSlideClass)) {
                            break;
                        }
                        previousIndex--;
                    }
                    if (previousIndex >= 0) {
                        currentSlide = previousIndex;
                        showSlide(currentSlide);
                    } else {
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    if (currentSlide > 0) {
                        currentSlide--;
                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }
                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                stopAllAudio(); //  Stop audio before action
                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS
            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();
                    stopAllAudio(); //  Stop audio when entering info mode
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
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

            //  Home and Close buttons also stop audio
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

                    // 1️⃣ If data-audio is provided → play audio file
                    const audioSrc = btn.getAttribute("data-audio");
                    if (audioSrc) {
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play();
                        return;
                    }

                    // 2️⃣ Otherwise fallback to speaking the letter
                    const letter = btn.getAttribute("data-letter") || "a";
                    speakLetter(letter);
                });
            });

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    stopAllAudio(); // Stop previous audio
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // INITIALIZE
            showSlide(currentSlide);
        });
    </script>
@endpush
