@extends('layout.master')
@section('title', 'Dynamic Presentation')

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
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">目标:</h3>

        <ul class="list-disc panel-ul">
            <li>了解我们的耳朵能让我们听到声音</li>
            <li>表达他们喜欢和不喜欢听到的声音</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <h3 class="ptitle">准备工作</h3>

        <ul class="list-disc panel-ul w-[42vw]">
            <li>主题活动手册</li>
            <li>不透明的容器(在容器上戳一些小孔,这样里面
                东西的气味就能被闻到)</li>
            <li>有气味的东西,如橙子、香蕉、柠檬、菠萝或
                其他去皮或切开的水果、玫瑰花、辣椒酱、
                醋、生鱼、穿过的袜子、用过的火柴等</li>
            <li>上课前,把这些东西放入不同的容器中</li>
        </ul>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <div class="text-start">
            <h3 class="ptitle">教学过程</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>询问孩子们:"姜饼人的鼻子在哪里?"让孩子们
                    指出鼻子的位置。</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="2">
            <li>询问孩子们:"你的鼻子在哪里?""你有几个鼻子?"让
                孩子们指出自己的鼻子。告诉他们每个人都有一个鼻子。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c1.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">鼻子</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>询问孩子们:"如果我们没有鼻子会怎样?"</li>
            <li>让孩子们做一个实验,以确认鼻子的功能。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c1.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">鼻子</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="5">
            <li>让孩子们用两根手指捏住鼻子。老师拿一个装有
                橙子的容器,让孩子们闻一闻。询问孩子们是否
                能闻到气味。</li>
            <li>让孩子们松开捏住鼻子的手指,再闻一次容器。询问
                孩子们是否能闻到气味。然后让他们猜一猜容器里
                是什么。</li>
            <li>告诉孩子们,没有鼻子,我们就无法闻到气味。</li>
            <li>用不同的容器重复步骤5-7,让孩子们猜一猜每个
                容器里的东西。</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="9">
            <li>询问孩子们:"你们喜欢所有的气味吗?让我们一起来看看吧!"</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>询问孩子们:"你看到了什么?""你喜欢它的气味吗?"</li>
            <li>引导孩子们理解:有时我们喜欢某些气味,有时
                我们不喜欢某些气味。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c2.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>询问孩子们:"你看到了什么?""你喜欢它的气味吗?"</li>
            <li>引导孩子们理解:有时我们喜欢某些气味,有时
                我们不喜欢某些气味。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c3.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>询问孩子们:"你看到了什么?""你喜欢它的气味吗?"</li>
            <li>引导孩子们理解:有时我们喜欢某些气味,有时
                我们不喜欢某些气味。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c4.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>询问孩子们:"你看到了什么?""你喜欢它的气味吗?"</li>
            <li>引导孩子们理解:有时我们喜欢某些气味,有时
                我们不喜欢某些气味。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>询问孩子们:"你看到了什么?""你喜欢它的气味吗?"</li>
            <li>引导孩子们理解:有时我们喜欢某些气味,有时
                我们不喜欢某些气味。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1.5vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="10">
            <li>询问孩子们:"你看到了什么?""你喜欢它的气味吗?"</li>
            <li>引导孩子们理解:有时我们喜欢某些气味,有时
                我们不喜欢某些气味。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class4/c7.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="12">
            <li>老师总结:我们的鼻子让我们能够闻到气味。有时
                我们喜欢某些气味,有时我们不喜欢某些气味。</li>
            <li>询问孩子们:"鼻子重要吗?"告诉孩子们鼻子是
                我们身体的重要部分,我们必须好好保护它。</li>
        </ol>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">课堂活动4:我能闻到气味</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>引导孩子们完成主题活动手册中相应的活动。</li>
        </ol>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动3:我能听到声音</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">总结</h3>

            <ul class="list-disc panel-ul">
                <li>让孩子们轮流分享他们喜欢和不喜欢的
                    气味。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul">
                <li>能够理解我们的鼻子能让我们闻到气味。</li>
                <li>能够表达他们喜欢和不喜欢的气味。</li>
            </ul>
        </div>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动3:我能听到声音</h1>

        <div class="text-start">
            <h3 class="ptitle">拓展</h3>

            <ul class="list-disc panel-ul">
                <li>让孩子们在家里找到有独特气味的东西,然后
                    带来给全班展示。</li>
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
            const returnURL = "{{ url('/micet/n1/mybody_cn/index') }}";
            const doneURL = "{{ url('/micet/n1/mybody_cn/index') }}";

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