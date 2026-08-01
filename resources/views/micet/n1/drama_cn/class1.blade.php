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
            font-size: 2vw;
        }

        .ptitle {
            color: #f7b94a;
            font-size: 1.5vw;
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
        <h1 class="panel-title stroke">课堂活动 1：兔子和狼</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class1/b1.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="title">学习目标：</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>知道不应给陌生人开门</li>
            <li>培养观察能力和逻辑思维能力</li>
            <li>享受听故事的乐趣</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 1：兔子和狼</h1>

        <div>
            <h3 class="title">准备工作</h3>

            <ol class="list-disc panel-ul">
                <li>主题活动书</li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 1：兔子和狼</h1>

        <ol class="list-decimal panel-ul">
            <li>运用建议的问题和活动来讲述故事，以强化故事的教学要点。</li>
        </ol>

    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">兔子和狼</h1>

        <h3 class="p-title">主题：迷你戏剧</h3>
        <img src="{{ asset('assets/images/micet/n1/drama/class1/c1.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">兔妈妈要出门了。她叮嘱小兔子们待在家里，<br>
            不要给不认识的人开门。</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c2.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                你觉得兔妈妈要去哪里？<br>
                <span class="text-[#f7b94a]">帮助孩子们培养观察能力和语言能力。</span>
            </h3>
            <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
        </div>
    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">兔妈妈离开后，小兔子们锁上了门。他们<br>
            在家里开心地玩捉迷藏。</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c3.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                你们玩过捉迷藏吗？这个游戏怎么玩？<br>
                <span class="text-[#f7b94a]">引导孩子们谈论玩捉迷藏的经历。</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">咚咚咚！有人在敲门！小兔子们<br>
            应该开门吗？</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c4.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title text-start">
                如果你是小兔子，你会马上开门吗？<br>
                <span class="text-[#f7b94a]">帮助孩子们培养逻辑思维能力。</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">小兔子们记起了妈妈离开前说的话，<br>
            于是问道："是谁呀？"</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c5.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                是谁在敲门？是兔妈妈吗？<br>
                <span class="text-[#f7b94a]">帮助孩子们培养观察和辨别能力。</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b2.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">那声音不像妈妈！所以小兔子们决定
            不开门。</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c6.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                小兔子们为什么不开门？<br>
                <span class="text-[#f7b94a]">帮助孩子们培养逻辑思维能力。</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>

    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">不管大灰狼怎么大声叫喊，小兔子们<br>
            都不理会。狼最终离开了。</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c7.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                如果小兔子们开了门，会发生什么事？<br>
                <span class="text-[#f7b94a]">帮助孩子们培养逻辑思维和预测能力。</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h3 class="p-title">兔妈妈终于回家了。小兔子们把发生的事情<br>
            告诉了她。听后，兔妈妈表扬他们听话。</h3>

        <img src="{{ asset('assets/images/micet/n1/drama/class1/c7.png') }}" class="w-[25vw]" />
        <div class="flex items-center justify-between w-full">
            <h3 class="p-title">
                兔妈妈为什么表扬小兔子们？<br>
                <span class="text-[#f7b94a]">帮助孩子们培养逻辑思维能力。</span>
            </h3>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b1.png') }}" class="w-[5vw]" />
                <img src="{{ asset('assets/images/micet/n1/colours/class1/b3.png') }}" class="w-[5vw]" />
            </div>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 1：兔子和狼</h1>

        <ol class="list-decimal panel-ul" start="24">
            <li>指导孩子们完成主题活动书中相应的活动。</li>
        </ol>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 1：兔子和狼 </h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>问孩子们：当你独自在家时，如果有人敲门，你会怎么做？如果不认识那个人，你会开门吗？</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够说出不应给陌生人开门。</li>
                <li>能够根据逻辑思维回答问题。</li>
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
