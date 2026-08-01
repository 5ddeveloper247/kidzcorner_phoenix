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
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>
        <img src="{{ asset('assets/images/micet/n1/colours/c9.1.png') }}" class="h-[8vw]" />

        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul">
            <li>练习表演所分配的角色</li>
            <li>学习与朋友一起表演戏剧</li>
            <li>表达对戏剧表演的喜爱或不喜欢</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <div>
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>不同的乐器</li>
                <li>兔子和狼的头饰/面具</li>
                <li>根据第一次练习的观察情况做必要调整（例如：更换部分孩子的角色）</li>
                <li>把教室布置成表演舞台的样子</li>
            </ul>
        </div>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>让孩子们继续分组练习各自的表演角色。</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>老师可以在教室里走动，帮助不同的小组：
                <ul class="list-disc">
                    <li>提醒孩子们作为一组同步表演（尤其是唱歌组和乐器组）。</li>
                    <li>使用故事场景/图片帮助讲故事组和角色扮演组进行表演。</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>老师引导孩子们理解表演的先后顺序：
                <ul class="list-disc">
                    <li>第一幕：讲故事的人在舞台一侧讲故事；扮演妈妈和兔子的孩子在舞台中央表演；唱歌（歌曲一）和演奏乐器的孩子站在舞台后方。</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">歌曲一：妈妈</span> <br>
                亲爱的孩子们，<br>
                请把门锁好。<br>
                妈妈要出去<br>
                摘些胡萝卜。<br>
                在妈妈回家之前，<br>
                不要开门<br>
                让任何人进来。
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>老师引导孩子们理解表演的先后顺序：
                <ul class="list-disc">
                    <li>第二幕：讲故事的人在舞台一侧讲故事；扮演狼和兔子的孩子在舞台中央表演；唱歌（歌曲二和三）和演奏乐器的孩子站在舞台后方。</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">歌曲二：狼</span> <br>
                亲爱的孩子们，<br>
                请把门打开。<br>
                妈妈回来了，<br>
                快开门吧。<br>
                妈妈现在已经到家了，<br>
                请开门<br>
                让妈妈进来。<br>
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>老师引导孩子们理解表演的先后顺序：
                <ul class="list-disc">
                    <li>第二幕：讲故事的人在舞台一侧讲故事；扮演狼和兔子的孩子在舞台中央表演；唱歌（歌曲二和三）和演奏乐器的孩子站在舞台后方。</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">歌曲三：兔子</span> <br>
                我们是好孩子，<br>
                不能开门。<br>
                你不是我们的妈妈，<br>
                不能开门。<br>
                在妈妈回家之前，<br>
                不能开门<br>
                让任何人进来。
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>老师引导孩子们理解表演的先后顺序：
                <ul class="list-disc">
                    <li>第二幕：讲故事的人在舞台一侧讲故事；扮演狼和兔子的孩子在舞台中央表演；唱歌（歌曲二和三）和演奏乐器的孩子站在舞台后方。</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">歌曲二：狼</span> <br>
                亲爱的孩子们，<br>
                请把门打开。<br>
                妈妈回来了，<br>
                快开门吧。<br>
                妈妈现在已经到家了，<br>
                请开门<br>
                让妈妈进来。
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>老师引导孩子们理解表演的先后顺序：
                <ul class="list-disc">
                    <li>第二幕：讲故事的人在舞台一侧讲故事；扮演狼和兔子的孩子在舞台中央表演；唱歌（歌曲二和三）和演奏乐器的孩子站在舞台后方。</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">歌曲三：兔子</span> <br>
                我们是好孩子，<br>
                不能开门。<br>
                你不是我们的妈妈，<br>
                不能开门。<br>
                在妈妈回家之前，<br>
                不能开门<br>
                让任何人进来。
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>老师引导孩子们理解表演的先后顺序：
                <ul class="list-disc">
                    <li>第三幕：讲故事的人在舞台一侧讲故事；扮演妈妈和兔子的孩子在舞台中央表演；唱歌（歌曲二和四）和演奏乐器的孩子站在舞台后方。</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">歌曲二：妈妈</span> <br>
                亲爱的孩子们，<br>
                请把门打开。<br>
                妈妈回来了，<br>
                快开门吧。<br>
                妈妈现在已经到家了，<br>
                请开门<br>
                让妈妈进来。
            </h5>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>老师引导孩子们理解表演的先后顺序：
                <ul class="list-disc">
                    <li>第三幕：讲故事的人在舞台一侧讲故事；扮演妈妈和兔子的孩子在舞台中央表演；唱歌（歌曲二和四）和演奏乐器的孩子站在舞台后方。</li>
                </ul>
            </li>
        </ol>

        <div class="flex items-start justify-start">
            <button class="w-[3vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[1.5vw] text-white">
                <span class="text-[#f7b94a]">歌曲四：兔子</span> <br>
                我们是好孩子，<br>
                可以开门。<br>
                你是我们的妈妈，<br>
                可以开门。<br>
                妈妈现在已经到家了，<br>
                请开门<br>
                让妈妈进来。
            </h5>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>让孩子们按照老师的指导练习小型戏剧表演。老师引导每个孩子了解表演时自己的位置。</li>
        </ol>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 9：练习（2）</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们按照老师的指导表演小型戏剧；老师给予鼓励。</li>
                <li>问孩子们：小型戏剧表演有趣吗？</li>
                <li>你们喜欢吗？</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够练习表演所分配的角色。</li>
                <li>能够与朋友一起表演戏剧。</li>
                <li>能够表达对小型戏剧表演的喜爱或不喜欢。</li>
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
            const returnURL = "{{ url('/micet/n1/drama/index') }}";
            const doneURL = "{{ url('/micet/n1/drama/index') }}";

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
