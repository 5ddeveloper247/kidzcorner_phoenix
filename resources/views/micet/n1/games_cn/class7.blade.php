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
            font-size: 2.5vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/colours/class6/b1.png') }}" class="h-[9vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class7/b1.png') }}" class="h-[9vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class4/b2.png') }}" class="h-[10vw]" />
        </div>

        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[42vw]">
            <li>学习玩迷宫、隐藏图像和找不同等游戏</li>
            <li>练习画线和画圈，以及涂色</li>
            <li>发展逻辑思维技能 </li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <div>
            <h3 class="ptitle">准备工作</h3>
            <ul class="list-disc panel-ul w-[45vw]">
                <li>主题活动书</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>问孩子们："这是什么游戏？""你们以前见过或玩过吗？""你们怎么玩？"</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c1.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">迷宫</h4>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>让孩子们"走"过迷宫：用指示棒跟随孩子们选择的路径。</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c1.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">迷宫</h4>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>让我们看看如何"走"过迷宫！</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c2.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">迷宫</h4>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>问孩子们："这是什么游戏？""你们以前见过或玩过吗？""你们怎么玩？"</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c3.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">隐藏 <br>
                图像</h4>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>让孩子们猜猜这幅图画里隐藏的是什么图像。</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c3.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">隐藏 <br>
                图像</h4>
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>让我们找出这幅图画里隐藏的是什么图像。</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c3.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">隐藏 <br>
                图像</h4>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>问孩子们："这是什么游戏？""你们以前见过或玩过吗？""你们怎么玩？"</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c4.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">找 <br>
                不同</h4>
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>告诉孩子们，这两幅图画之间有4处不同。</li>
            <li>点击打开软件磁贴板。引导孩子们观察并找出不同，然后在图2中圈出来。</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class7/c4.png') }}" class="w-[25vw]" />
            <h4 class="text-[#f7b94a] text-[2vw]">找 <br>
                不同</h4>
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">

        <img src="{{ asset('assets/images/micet/n1/games/class7/c5.png') }}" class="h-[20vw]" />
        <div class="flex items-center justify-between w-[40vw]">
            <div class="w-[5vw] h-[5vw] border-[.35vw] border-[#FF2C2C] rounded-full"></div>
            <div class="w-[5vw] h-[5vw] border-[.35vw] border-[#FF2C2C] rounded-full"></div>
            <div class="w-[5vw] h-[5vw] border-[.35vw] border-[#FF2C2C] rounded-full"></div>
            <div class="w-[5vw] h-[5vw] border-[.35vw] border-[#FF2C2C] rounded-full"></div>
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>引导孩子们在主题活动书中完成相应的活动。</li>
        </ol>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们回答以下问题：你喜欢我们玩的游戏吗？这些游戏叫什么名字？每个游戏需要几个人玩？</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够玩这些游戏。</li>
            </ul>
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 7：思维游戏（2）</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>在活动角准备简单的迷宫、隐藏图像和找不同游戏，鼓励孩子们在自由活动时玩。</li>
            </ul>
        </div>
    </div>




    {{-- =============================================== --}}
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
            const returnURL = "{{ url('/micet/n1/games/index') }}";
            const doneURL = "{{ url('/micet/n1/games/index') }}";

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
