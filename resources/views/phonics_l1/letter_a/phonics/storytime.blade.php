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
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" />
                {{-- gifs --}}
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                    class="h-[20vw] bottom-0 right-0 absolute" />

                  <h1 class="text-white text-[4vw] absolute top-[55%] left-1/2 -translate-1/2"> It's story <br> time!</h1>

                <p class="p-note absolute bottom-[1vw] left-[22%]">Tip: <a class="c-btn info-btn1">Click here</a> to find
                    out
                    why
                    reading words is important.</p>
            </div>
        </div>

        {{-- Side Info Panel --}}
        <div class="phonics-panel info-panel-1 flex flex-col mt-[-2vw] gap-y-[2vw]">
            <h1 class="panel-title stroke">Reading Words in Stories</h1>
            <div class="flex items-end">
                <ul class="list-disc text-start panel-ul space-y-[1.5vw]">
                    <li>The purpose of reading is comprehension. It is important that children read words in stories or
                        short pieces of expository text.</li>
                    <li>This section focuses on texts that contain words with patterns taught in the phonics lessons. These
                        regular words can be used to reinforce phonics instruction.</li>
                    <li>For comprehension, children should engage in discussions and questioning about the content of what
                        they read.</li>
                </ul>

                <img src="{{ asset('assets/images/phonicsl1/global/learning.png') }}" class="h-[20vw]" />
            </div>
        </div>


        {{-- Panel 2 --}}
        <div class="phonics-panel flex flex-col"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/buddy-lili.mp3') }}">
            <div class="flex flex-col items-center gap-9">
                <h2 class="text-white text-[2.5vw]">Buddy and Lili</h2>
                <img src="{{ asset('assets/images/phonicsl1/letter_a/friends.png') }}" class="w-[25vw]" />
            </div>
        </div>


        {{-- Panel 3 --}}
        <div class="phonics-panel flex flex-col" data-slide-audio="{{ asset('assets/audio/phonics_audio/buddy-jam.mp3') }}">
            <div class="flex flex-col items-center gap-9">
                <h2 class="text-white text-[2.5vw]">Buddy likes jam.</h2>
                <div class="flex items-start w-fit">
                    <img src="{{ asset('assets/images/phonicsl1/letter_a/jam.png') }}" class="w-[10vw] mt-[2vw]" />
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy2.gif') }}" class="h-[25vw]" />
                </div>
            </div>
        </div>


        {{-- Panel 4 --}}
        <div class="phonics-panel flex flex-col"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/lili=apples.mp3') }}">
            <div class="flex flex-col items-center gap-9">
                <h2 class="text-white text-[2.5vw]">Lili likes apples</h2>
                <div class="flex items-start w-fit">
                    <img src="{{ asset('assets/images/phonicsl1/letter_a/dualapple.png') }}" class="w-[10vw]" />
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili2.gif') }}" class="h-[25vw]" />
                </div>
            </div>
        </div>


        {{-- Panel 5 --}}
        <div class="phonics-panel flex flex-col" data-slide-audio="{{ asset('assets/audio/phonics_audio/ants.mp3') }}">
            <div class="flex flex-col items-center gap-9">
                <h2 class="text-white text-[2.5vw]">Ants like jam and apples too!</h2>
                <div class="flex items-end w-fit relative">
                    <img src="{{ asset('assets/images/phonicsl1/letter_a/jam.png') }}" class="h-[20vw]" />
                    <img src="{{ asset('assets/images/phonicsl1/letter_a/dualapple.png') }}" class="w-[14vw]" />

                    {{-- ants --}}
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}" class="h-[6vw] absolute" />
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[4vw] absolute scale-x-[-1] left-[15vw]" />
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[4vw] absolute left-[8vw] top-[-1vw] " />

                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[4vw] absolute right-[10vw] bottom-[2vw]" />

                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[3vw] absolute scale-x-[-1] bottom-[2vw] right-[2vw]" />

                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[2vw] absolute right-[5.5vw] top-[11vw] " />
                </div>
            </div>
        </div>

        {{-- Panel 6 --}}
        <div class="phonics-panel flex flex-col"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/buddy-jam.mp3') }}">
            <div class="flex flex-col items-center">
                <h2 class="text-white text-[2.5vw]">Buddy and Lili are angry with the ants.</h2>
                <div class="flex items-end w-fit relative">
                    <img src="{{ asset('assets/images/phonicsl1/letter_a/angry.png') }}" class="w-[45vw]" />

                    {{-- ants --}}
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[5vw] absolute left-[10vw] bottom-[2vw]" />
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[4vw] absolute scale-x-[-1] left-[19vw] bottom-[2vw]" />
                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[3vw] absolute left-[16vw] top-[9vw] " />

                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[3vw] absolute right-[19vw] bottom-[3vw]" />

                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[3vw] absolute scale-x-[-1] bottom-[2vw] right-[12vw]" />

                    <img src="{{ asset('assets/images/phonicsl1/global/gifs/ant.gif') }}"
                        class="h-[2vw] absolute right-[15.5vw] top-[17vw] " />
                </div>
            </div>
        </div>

        {{-- Panel 7 --}}
        <div class="phonics-panel no-bg mb-[2vw]"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/wholikesjam.mp3') }}">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" />
                {{-- gifs --}}
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}"
                    class="h-[20vw] bottom-0 absolute" />
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                    class="h-[20vw] bottom-0 right-0 absolute" />

                <h1 class="text-white text-[4vw] absolute top-[12vw] left-[20vw]"> Who likes <br> jam?</h1>

                <p class="p-note absolute bottom-[1vw] left-[35%]">Tip: Elicit response from children.</p>

            </div>
        </div>

        <div class="phonics-panel no-bg mb-[2vw]"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/wholikesapple.mp3') }}">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" />
                {{-- gifs --}}
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}"
                    class="h-[20vw] bottom-0 absolute" />
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                    class="h-[20vw] bottom-0 right-0 absolute" />

                <h1 class="text-white text-[4vw] absolute top-[12vw] left-[20vw]"> Who likes<br> apple?</h1>

                <p class="p-note absolute bottom-[1vw] left-[35%]">Tip: Elicit response from children.</p>
            </div>
        </div>


        <div class="phonics-panel no-bg mb-[2vw]"
            data-slide-audio="{{ asset('assets/audio/phonics_audio/noapples.mp3') }}">
            <div class="relative">
                <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" />
                {{-- gifs --}}
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}"
                    class="h-[20vw] bottom-0 absolute" />
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                    class="h-[20vw] bottom-0 right-0 absolute" />

                <h1 class="text-white text-[3vw] absolute top-[12vw] left-[19vw]">Buddy and Lili <br>
                    has no apples. <br>
                    Why?</h1>

                <p class="p-note absolute bottom-[1vw] left-[35%]">Tip: Elicit response from children.</p>
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
                const infoButtons = document.querySelectorAll("[class*='info-btn']");
                const soundButtons = document.querySelectorAll("[id^='soundButton']");

                // URLs for navigation
                 const returnURL = "{{ url('/phonics/letter_a') }}?view=phonics";
                const doneURL = "{{ url('/phonics/letter_a') }}?view=phonics";

                // Track current position
                let currentSlide = 0;
                let isInSpecialMode = false;
                let returnToSlide = null;
                let specialSlideClass = null;

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
                        stopAllAudio(); // 🛑 Stop audio before leaving
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
                    stopAllAudio(); // 🛑 Stop audio before action
                    if (isInSpecialMode && returnToSlide !== null) {
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);

                        // Toggle background when returning from info mode
                        const ajaxSection = document.getElementById('ajax-section');
                        const currentSlideElement = slides[currentSlide];
                        if (ajaxSection) {
                            if (currentSlideElement.classList.contains('no-bg')) {
                                ajaxSection.classList.add('no-bg');
                            } else {
                                ajaxSection.classList.remove('no-bg');
                            }
                        }
                    } else {
                        window.location.href = doneURL;
                    }
                }

                // EVENT LISTENERS
                infoButtons.forEach(button => {
                    button.addEventListener("click", function(e) {
                        e.preventDefault();
                        stopAllAudio(); // 🛑 Stop audio when entering info mode
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
