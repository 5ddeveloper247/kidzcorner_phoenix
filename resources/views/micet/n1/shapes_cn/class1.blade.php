@extends('layout.master')
@section('title', '动态演示')

@php
    $showBackground = false;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2.2vw;
        }

        title {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .ptitle {
            color: #f7b94a;
            font-size: 1.7vw;
        }

        .p-title {
            color: #ffffff;
            font-size: 1.5vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left !important;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 1：快乐的小老鼠</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="title">学习目标：</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>认识四种基本形状——圆形、正方形、长方形、三角形。</li>
            <li>享受听故事的乐趣。</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 1：快乐的小老鼠</h1>

        <div>
            <h3 class="title">准备工作</h3>

            <ol class="list-disc panel-ul">
                <li>主题活动书</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">快乐的小老鼠</h1>

        <h3 class="p-title">主题：形状</h3>
        <img src="{{ asset('assets/images/micet/n1/shapes/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">一只快乐的小老鼠住在圆形的西瓜房子里。</h3>
        <img src="{{ asset('assets/images/micet/n1/shapes/class1/c2.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                一只快乐的小老鼠住在圆形的西瓜房子里。<br>
                <span class="text-[#f7b94a]">帮助孩子们培养观察能力。</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">西瓜房子有一扇门和两扇窗户。</h3>
        <img src="{{ asset('assets/images/micet/n1/shapes/class1/c3.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                你们有没有和朋友手拉手，一边唱歌一边<br>
                围成圆圈转？<br>
                <span class="text-[#f7b94a]">引导孩子们谈论他们的经历。</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">有时，她和朋友们一起唱歌、拍手。</h3>
        <img src="{{ asset('assets/images/micet/n1/shapes/class1/c4.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                你会唱歌拍手吗？示范给大家看。<br>
                <span class="text-[#f7b94a]">帮助孩子们培养音乐和节奏感。</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">有时，她和朋友们随着音乐的节奏跳舞。</h3>
        <img src="{{ asset('assets/images/micet/n1/shapes/class1/c5.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                你会跳舞吗？示范给大家看。<br>
                <span class="text-[#f7b94a]">帮助孩子们培养音乐和节奏感。</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">有时，她和朋友们还会随着音乐的<br>
            节奏演奏打击乐器。</h3>
        <img src="{{ asset('assets/images/micet/n1/shapes/class1/c6.png') }}" class="w-[30vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                你会演奏打击乐器吗？示范给大家看。<br>
                <span class="text-[#f7b94a]">帮助孩子们培养音乐和节奏感。</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h3 class="p-title">看，Jingle 正在和朋友们一起表演音乐会！有 2 个<br>
            孩子在唱歌，2 个孩子在跳舞，4 个孩子在演奏<br>
            不同的打击乐器。他们的表演真的很棒！</h3>
        <img src="{{ asset('assets/images/micet/n1/shapes/class1/c7.png') }}" class="w-[25vw]" />

        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-left">
                Jingle 和朋友们在音乐会上做了什么？用了哪些<br>
                打击乐器？<br>
                <span class="text-[#f7b94a]">引导孩子们根据观察来回答。</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 1：快乐的小老鼠 </h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>
                    <span class="flex items-end">播放音乐 <span class="w-[3vw]">
                            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                        </span> ，让孩子们一起随着音乐的
                        节奏拍手。 </span>
                </li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够说出所有音乐都有节奏。</li>
                <li>能够随着音乐的节奏拍手。</li>
            </ul>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 1：快乐的小老鼠 </h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>播放孩子们熟悉的其他音乐，引导他们随着
                    音乐的节奏拍手。</li>
            </ul>
        </div>
    </div>




    {{-- ================================ --}}
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
        document.body.dataset.homeRoute = "{{ url('/micet') }}";

        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/micet/n1/shapes/index') }}";
            const doneURL = "{{ url('/micet/n1/shapes/index') }}";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // Audio management
            let currentAudio = null;

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

            // AUDIO FUNCTIONS

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                // Stop any currently playing audio
                stopCurrentAudio();

                // Get the slide element
                const slide = slides[slideIndex];

                // Check if the slide itself has data-slide-audio attribute
                let audioSrc = slide.getAttribute('data-slide-audio');

                // If not, look for element inside the slide with data-slide-audio attribute
                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                // Play the audio if we found a source
                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }


            // DISPLAY FUNCTIONS

            function showSlide(slideIndex) {
                // Stop audio from previous slide
                stopCurrentAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Play audio for current slide (if it has one)
                playSlideAudio(slideIndex);

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Get audio source from data-slide-audio attribute
                    const audioSrc = btn.getAttribute('data-slide-audio');

                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });
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

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // INITIALIZE - Show first slide and play its audio automatically
            showSlide(currentSlide);
        });

    </script>
@endpush
