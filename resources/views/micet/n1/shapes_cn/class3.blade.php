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
            font-size: 2.3vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b2.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b3.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b4.png') }}" class="h-[10vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>认识正方形。</li>
            <li>用绳子测量正方形的每条边，确认其特点。</li>
            <li>用冰棒棍拼成正方形。</li>
            <li>在教室里寻找正方形物品。</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-decimal panel-ul">
                <li>主题活动书</li>
                <li>正方形积木</li>
                <li>绳子</li>
                <li>每位孩子 4 根冰棒棍</li>
                <li>白胶</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">课程开展</h3>

            <ul class="list-decimal panel-ul w-[50vw]">
                <li>问孩子们："这是什么？""它是什么形状？"（正方形）</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c1.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>展示正方形积木，问孩子们："它像不像小老鼠西瓜房子的窗户？""它像不像下面的形状？""它是什么形状？"（正方形）</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/square.png') }}" class="h-[19vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>让孩子们触摸正方形积木的边，谈论正方形的特点。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/square.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>让孩子们触摸正方形积木的边，谈论正方形的特点。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>让孩子们触摸正方形积木的边，谈论正方形的特点。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>让孩子们触摸正方形积木的边，谈论正方形的特点。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>让孩子们触摸正方形积木的边，谈论正方形的特点。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>让孩子们触摸正方形积木的边，谈论正方形的特点。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>让孩子们观察老师如何用绳子测量正方形的一边，然后
                根据正方形的长度剪绳子。请 2 或 3 个孩子用绳子
                测量正方形的每条边，其他孩子在一旁观察。引导孩子们
                总结正方形的特点：它有 4 条相等的边。</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>展示冰棒棍，问孩子们："这是什么？"</li>
            <li>告诉孩子们我们可以用 4 根相同长度的冰棒棍拼成正方形。
                将 4 根冰棒棍叠在一起证明它们长度相同，
                然后示范如何用它们拼成正方形。</li>
            <li>给每位孩子分发 4 根冰棒棍。让每个孩子将 4 根
                冰棒棍叠在一起，确认它们长度相同。
                [注意：老师在教室里走动，指导和帮助每个孩子。]</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>问孩子们："这些是正方形吗？"（是的，不同大小的正方形。）</li>
            <li>让孩子们知道我们周围有很多正方形物品。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c2.png') }}" class="h-[18vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">正方形</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出正方形。点击图片查看正方形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c3.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">饼干</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出正方形。点击图片查看正方形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c4.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">饼干</h5>
    </div>



    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出正方形。点击图片查看正方形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c5.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">便利贴</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出正方形。点击图片查看正方形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c6.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">积木</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出正方形。点击图片查看正方形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c7.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">骰子</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出正方形。点击图片查看正方形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c8.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">礼品盒</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出正方形。点击图片查看正方形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class3/c9.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">盘子</h5>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>让孩子们在教室里寻找正方形物品。</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>让孩子们用 4 根冰棒棍和白胶在主题活动书中
                拼成正方形。（如需帮助，老师协助。）</li>
        </ol>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们展示他们拼的正方形。</li>
                <li>引导孩子们谈论正方形的特点：它有 4 条相等的边。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够在教室里找到至少一个正方形物品。</li>
                <li>能够用冰棒棍拼成正方形。</li>
            </ul>
        </div>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 3：正方形</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们从家里找一个正方形物品，然后
                    带到课堂上展示。</li>
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
