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

        .c-btn {
            color: #F7B94A !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2vw;
        }

        .panel-div {
            position: absolute;
            top: 4%;
        }

        .box {
            width: 10vw;
            height: 10vw;
            background: #D9D9D9;
            border: .3vw solid #70AF39;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rectangle {
            background: #F7B94A;
            width: 12vw;
            height: 3vw;
            color: #A15E0D;
            font-size: 2vw;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel">
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/panel-bear.png') }}" class="w-[50vw]" />
            <h2
                class="absolute top-[38%] left-[27%] -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[4vw] text-center">
                Rhyming <br>
                Pairs!</h2>
        </div>
        <p class="p-note">Tips: Follow the sequence of activities numbered, or click on any activity of your choice. <br>
            For a definition of blends and other phonics terminologies,<a class="c-btn info-btn1">Click here</a>.</p>
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


    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Find the word that rhymes with</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw5/flush.png') }}" class="h-[4vw]" />
            <span class="panel-title">.</span>
        </div>

        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/flush.png') }}" class="h-[8vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-center w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw5/brush.png') }}" class="w-[10vw]" />
                <div class="rectangle">brush</div>
            </div>

            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw5/trap.png') }}" class="w-[10vw]" />
                <div class="rectangle">trap</div>
            </div>
        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Which word is the antonym of happy</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw5/flush.png') }}" class="h-[4vw]" />
            <span class="panel-title">.</span>
        </div>

        <div class="flex justify-around items-center w-full">
            <div>
                <div class="box flex-col">
                    <img src="{{ asset('assets/images/phonics_l2/lrw5/flush.png') }}" class="h-[8vw]" />
                </div>
                <h2 class="panel-title">flush</h2>
            </div>

            <div>
                <div class="box flex-col">
                    <img src="{{ asset('assets/images/phonics_l2/lrw5/brush.png') }}" class="w-[8vw]" />
                </div>
                <h2 class="panel-title">brush</h2>
            </div>
        </div>
    </div>

    {{-- ======================================= --}}
    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Which word is the antonym of thin</h2>
            <img src="{{ asset('assets/images/phonics_l2/idin/thin.png') }}" class="h-[4vw]" />
            <span class="panel-title">?</span>
        </div>

        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/idin/thin.png') }}" class="h-[5vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-end w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/igip/big.png') }}" class="w-[10vw]" />
                <div class="rectangle">big</div>
            </div>

            <div class="flex flex-col items-center ">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/fat.png') }}" class="h-[10vw]" />
                <div class="rectangle">fat</div>
            </div>
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Which word is the antonym of thin</h2>
            <img src="{{ asset('assets/images/phonics_l2/idin/thin.png') }}" class="h-[4vw]" />
            <span class="panel-title">?</span>
        </div>

        <div class="flex justify-around items-center w-full">

            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/idin/thin.png') }}" class="h-[5vw]" />
                <h2>thin</h2>
            </div>
            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/fat.png') }}" class="h-[5vw]" />
                <h2>fat</h2>

            </div>
        </div>
    </div>

    {{-- ======================================= --}}
    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Which word is the antonym of stand</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw5/stand.png') }}" class="h-[4vw]" />
            <span class="panel-title">?</span>
        </div>

        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/stand.png') }}" class="h-[5vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-end w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw5/sit.png') }}" class="h-[10vw]" />
                <div class="rectangle">sit</div>
            </div>

            <div class="flex flex-col items-center ">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/angry.png') }}" class="h-[10vw]" />
                <div class="rectangle">angry</div>
            </div>
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Which word is the antonym of stand</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw5/stand.png') }}" class="h-[4vw]" />
            <span class="panel-title">?</span>
        </div>

        <div class="flex justify-around items-center w-full">

            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/stand.png') }}" class="h-[5vw]" />
                <h2>stand</h2>
            </div>
            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/sit.png') }}" class="h-[5vw]" />
                <h2>sit</h2>

            </div>
        </div>
    </div>

    {{-- ======================================= --}}
    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-center w-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Which word is the antonym of cold</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw5/cold.png') }}" class="h-[4vw]" />
            <span class="panel-title">?</span>
        </div>

        <div class="flex justify-around items-center w-full">

            <div class="box">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/cold.png') }}" class="h-[5vw]" />

            </div>
            <div class="box">

            </div>
        </div>

        <div class="flex justify-around items-end w-full">
            <div>
                <img src="{{ asset('assets/images/phonics_l2/lrw5/sit.png') }}" class="h-[10vw]" />
                <div class="rectangle">sit</div>
            </div>

            <div class="flex flex-col items-center ">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/hot.png') }}" class="h-[10vw]" />
                <div class="rectangle">hot</div>
            </div>
        </div>
    </div>

    {{-- Panel --}}
    <div class="phonics-panel flex flex-col justify-start w-full h-full gap-[2vw] items-center">
        <div class="flex items-end">
            <h2 class="panel-title">Which word is the antonym of cold</h2>
            <img src="{{ asset('assets/images/phonics_l2/lrw5/cold.png') }}" class="h-[4vw]" />
            <span class="panel-title">?</span>
        </div>

        <div class="flex justify-around items-center w-full">

            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/cold.png') }}" class="h-[5vw]" />
                <h2>cold</h2>
            </div>
            <div class="box flex-col">
                <img src="{{ asset('assets/images/phonics_l2/lrw5/hot.png') }}" class="h-[5vw]" />
                <h2>hot</h2>

            </div>
        </div>
    </div>



    {{-- =========================================================== --}}
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

            const returnURL = "{{ url('/phonics_l2/lrw5/rhyming') }}";
            const doneURL = "{{ url('/phonics_l2/lrw5/rhyming') }}";

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
                window.location.href = doneURL;
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
