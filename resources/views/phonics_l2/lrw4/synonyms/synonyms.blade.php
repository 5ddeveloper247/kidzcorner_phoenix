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
            font-size: 9vw !important;
        }

        .panel-ul {
            color: white;
            font-size: 1.1vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/letsplay.m4a') }}">
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/panel-bear.png') }}" class="w-[50vw]" />
            <h2
                class="absolute top-[38%] left-[27%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[4vw] text-center">
                All About <br>
                Synonyms</h2>
        </div>

        <p class="p-note">Tips: Follow the sequence of activities numbered, or click on any activity of your choice. <br>
            For a definition of blends and other phonics terminologies, <a class="c-btn">Click here</a> .</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col  gap-y-[1vw]">
        <h1 class="panel-title">Definitions</h1>
        <ul class="pl-[2vw] space-y-[0.5vw] text-white text-[1.2vw] text-start">
            <li>
                Naming Words - Nouns are naming words. They are words that tell us the names of people, animals, places and
                things.
                <br>Examples: dog, tree, hut
            </li>

            <li>
                Action Words - Verbs are action words.
                <br>Examples: run, walk, eat
            </li>

            <li>
                Describing Words - Adjectives are describing words. They describe nouns.
                <br>Examples: small, brown, tall
            </li>

            <li>
                Prepositional Words - Words used to show position and direction.
                <br>Examples: on, in, below
            </li>

            <li>
                Opposites - Words with opposite meanings (antonyms).
                <br>Examples: hot - cold, tall - short, fat - thin
            </li>

            <li>
                Synonyms - Words with similar meanings.
                <br>Examples: see - look, under - below, big - huge
            </li>
        </ul>

        <div class="down-btn-container">
            <button class="doneButton hidden">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
            </button>
        </div>
    </div>

    {{-- panel  --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sh_ch/sh1.m4a') }}">

        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2 class="absolute top-[28%] right-[18%] -translate-y-1/2  text-[#A15E0D] text-[1.5vw] text-center">
                <span class="text-[#70af39]">Synonyms</span> are the <br> different words that <br>
                have almost the <br>
                same meaning.
            </h2>
        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex justify-center items-center h-full w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/lrw3/sr1.png') }}" class="w-[40vw]" />

    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex justify-center items-center h-full w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/lrw3/sr2.png') }}" class="w-[40vw]" />

    </div>



    {{-- Panel 5 --}}
    <div class="phonics-panel flex justify-center items-center h-full w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/lrw3/sr3.png') }}" class="w-[45vw]" />

    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel flex justify-center items-center h-full w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/lrw3/sr4.png') }}" class="w-[45vw]" />

    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel flex justify-center items-center h-full w-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/lrw3/sr5.png') }}" class="w-[45vw]" />

    </div>



    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/sh_ch/sh1.m4a') }}">
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/bear-e.png') }}"class="w-[40vw] " />
            <h2
                class="absolute top-[28%] right-[15%] -translate-y-1/2  text-[#A15E0D] text-[1.7vw] text-center">
                We use <span class="text-[#70af39]">synonyms</span><br>
                to make a sentence <br>
                more interesting. <br>
                Now let’s try using <br> them.
            </h2>
        </div>
    </div>


    {{-- ============================================================= --}}
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/lrw3/synonyms') }}";
            const doneURL = "{{ url('/phonics_l2/lrw3/synonyms') }}";
            const CHEERING_AUDIO = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

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
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) {
                    return true;
                }
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

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide = slides[slideIndex];
                const audioSources = [];
                const answerSpans = slide.querySelectorAll('.answer');
                const newContainer = slide.querySelector('.new');

                if (answerSpans.length > 0) {
                    // Answer slide: collect audio only from buttons inside containers that have an .answer span
                    answerSpans.forEach(span => {
                        const container = span.closest('.relative');
                        if (container) {
                            const btn = container.querySelector('[id^="soundButton"][data-slide-audio]');
                            if (btn) {
                                const src = btn.getAttribute('data-slide-audio');
                                if (src && !audioSources.includes(src)) {
                                    audioSources.push(src);
                                }
                            }
                        }
                    });
                    // Play cheering sound at the end
                    audioSources.push(CHEERING_AUDIO);

                } else if (newContainer) {
                    // Slide has a .new container: play ONLY the sound button inside .new, nothing else
                    const newBtn = newContainer.querySelector('[id^="soundButton"][data-slide-audio]');
                    if (newBtn) {
                        const src = newBtn.getAttribute('data-slide-audio');
                        if (src) audioSources.push(src);
                    }

                } else {
                    // Normal slide: play slide-level audio first
                    const slideSrc = slide.getAttribute('data-slide-audio');
                    if (slideSrc) audioSources.push(slideSrc);

                    // Check if there are two side sound buttons (the flex-col gap container)
                    const sideBtnContainer = slide.querySelector('.flex.flex-col.gap-\\[1vw\\]');
                    if (sideBtnContainer) {
                        // Two side buttons exist: play both sequentially
                        sideBtnContainer.querySelectorAll('[id^="soundButton"][data-slide-audio]').forEach(btn => {
                            const src = btn.getAttribute('data-slide-audio');
                            if (src && !audioSources.includes(src)) {
                                audioSources.push(src);
                            }
                        });
                    } else {
                        // No side buttons: collect any remaining child data-slide-audio elements
                        slide.querySelectorAll('[data-slide-audio]').forEach(el => {
                            const src = el.getAttribute('data-slide-audio');
                            if (src && !audioSources.includes(src)) {
                                audioSources.push(src);
                            }
                        });
                    }
                }

                // Play all sources sequentially
                function playNext(index) {
                    if (index >= audioSources.length) return;
                    currentAudio = new Audio(audioSources[index]);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    currentAudio.onended = () => {
                        playNext(index + 1);
                    };
                }

                playNext(0);
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
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.remove("hidden"));
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.add("hidden"));
                }
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
                    stopCurrentAudio();
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
                stopCurrentAudio();

                if (isInSpecialMode) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();
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

            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", handleDone);
            });

            showSlide(currentSlide);
        });
    </script>
@endpush
