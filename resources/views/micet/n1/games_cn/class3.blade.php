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
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b2.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b3.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b4.png') }}" class="h-[10vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul ">
            <li>学习如何玩"剪刀石头布"游戏</li>
            <li>学习遵守游戏规则</li>
            <li>发展小肌肉运动技能</li>
            <li>享受与同伴一起玩耍的乐趣</li>
        </ul>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">课程开展</h3>

            <ul class="list-decimal panel-ul w-[50vw]">
                <li>问孩子们："这是什么？""它有什么用途？"引导孩子们理解
                    我们用剪刀来剪东西。</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>问孩子们："这是什么？""它有什么用途？"引导孩子们理解
                纸是薄而平的。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问孩子们："这是什么？""它有什么用途？"引导孩子们理解
                石头或岩石是坚硬的。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>演示一些手势，告诉孩子们我们要学习这些
                手势，然后玩一个叫做"剪刀石头布"的游戏。</li>
        </ol>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>做一个手势，问孩子们："看，这个手势代表什么？
                剪刀、布还是石头？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>"是的，它代表一把剪刀。它看起来像剪刀吗？"</li>
            <li>给孩子们时间练习做这个动作。</li>
        </ol>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/micet/n1/games/class3/c4.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/games/class3/c1.png') }}" class="w-[20vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>问孩子们："如果这个手势代表剪刀，你们觉得
                代表布的手势会是什么？"鼓励孩子们发挥
                想象力做出可能的手势。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>"看，这是代表布的手势。它看起来像一张纸吗？"</li>
            <li>给孩子们时间练习做这个动作。</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class3/c5.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/games/class3/c2.png') }}" class="w-[20vw]" />
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>问孩子们："如果这个手势代表布，你们觉得
                代表石头的手势会是什么？"鼓励孩子们发挥
                想象力做出可能的手势。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>"看，这是代表石头的手势。它看起来像石头吗？"</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/games/class3/c6.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/n1/games/class3/c3.png') }}" class="w-[20vw]" />
        </div>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>给孩子们时间练习做这个动作。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>当孩子们学会做这些手势后【注：不需要做到
                完美的手势】，教师随机说出一种手势：剪刀、布
                或石头。让孩子们做出相应的手势，并练习
                从一个手势转换到另一个。</li>
        </ol>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>请一个孩子协助演示如何玩这个游戏：
                两名玩家互相对战。让他们将一只手放在
                身后。说完"剪刀、石头、布"后，让他们展示
                所喊出的其中一种物品的手势。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c7.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>
        <div class="text-start">
            <h5 class="text-white text-[1.5vw]">游戏规则：</h5>
            <ol class="list-decimal panel-ul">
                <li>剪刀对石头——石头赢，因为石头"砸"剪刀，把剪刀"弄坏"了。</li>
                <li>剪刀对布——剪刀赢，因为剪刀"剪"布。</li>
                <li>石头对布——布赢，因为布"包住"石头。</li>
                <li>如果手势相同——没有人赢。</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/games/class3/c7.png') }}" class="w-[16vw]" />
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>邀请孩子们两人一组开始游戏，教师根据需要
                给予协助：
                <ul class="list-disc">
                    <li>赢得三局的孩子，是该组的获胜者。</li>
                    <li>每组的获胜者将轮流与其他组的
                        获胜者对战。</li>
                    <li>游戏继续进行，直到最后一轮，只剩下两名玩家</li>
                    <li>时，谁赢了，谁就是全班的获胜者。</li>
                </ul>
            </li>
        </ol>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 3：剪刀石头布</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>请孩子们回答以下问题：你喜欢这个游戏吗？
                    这个游戏叫什么名字？需要多少人才能
                    玩这个游戏？</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够玩这个游戏。</li>
                <li>能够遵守游戏规则。</li>
                <li>能够享受与同伴一起玩耍的乐趣。</li>
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
