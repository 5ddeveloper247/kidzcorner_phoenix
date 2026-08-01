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
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/animals/class4/b1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class4/b2.png') }}" class="h-[8vw]" />
        </div>

        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>认识一些在水中移动的动物，并了解它们的特点</li>
            <li>观察并模仿一些在水中移动的动物的动作</li>
            <li>知道大多数在水中移动的动物都有鱼鳍</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>
        <div class="text-center space-y-[2vw]">
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul">
                <li>主题活动书</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>问幼儿："这是什么动物？" "你能描述一下吗？"（外形特征）
                    "它在水中如何移动？" 引导幼儿了解鱼鳍。</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/animals/class4/c1.png') }}" class="w-[30vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>点击视频，让幼儿谈论视频中的动物，并模仿
                它的动作。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class4/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问幼儿："这是什么动物？" "你能描述一下吗？"（外形特征）
                "它在水中如何移动？" 引导幼儿了解鱼鳍。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class4/c2.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">金鱼</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>点击视频，让幼儿谈论视频中的动物，并模仿
                它的动作。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class4/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>问幼儿："这是什么动物？" "你能描述一下吗？"（外形特征）
                "它在水中如何移动？" 引导幼儿了解鱼鳍。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class4/c3.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">小丑鱼</h5>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>点击视频，让幼儿谈论视频中的动物，并模仿
                它的动作。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class4/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>问幼儿："这是什么动物？" "你能描述一下吗？"（外形特征）
                "它在水中如何移动？" 引导幼儿了解鱼鳍。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class4/c4.png') }}" class="w-[35vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">鲨鱼</h5>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>点击视频，让幼儿谈论视频中的动物，并模仿
                它的动作。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class4/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center sapce-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>问幼儿："这是什么动物？" "你能描述一下吗？"（外形特征）
                "它在水中如何移动？" 引导幼儿了解鱼鳍。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class4/c5.png') }}" class="w-[30vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">海豚</h5>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>点击视频，让幼儿谈论视频中的动物，并模仿
                它的动作。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/animals/class4/v5.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>问幼儿："这些是什么？" "它们住在哪里？"［在陆地、在水中或在空中］
                告诉幼儿，所有这些动物都在陆地上移动。</li>
            <li>问幼儿："这些动物在水中如何移动？它们的移动方式相同吗？"
                引导幼儿理解，大多数在水中移动的动物都有鱼鳍。</li>
        </ol>

        <div class="flex flex-col items-center ">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/animals/class4/c2.png') }}" class="w-[12vw]" />
                <img src="{{ asset('assets/images/micet/n1/animals/class4/c4.png') }}" class="w-[12vw]" />
            </div>
            <div class="flex items-center">
                <img src="{{ asset('assets/images/micet/n1/animals/class4/c1.png') }}" class="w-[12vw]" />
                <img src="{{ asset('assets/images/micet/n1/animals/class4/c5.png') }}" class="w-[12vw]" />
                <img src="{{ asset('assets/images/micet/n1/animals/class4/c3.png') }}" class="w-[9vw]" />
            </div>
        </div>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>引导幼儿在主题活动书中完成相应的活动。</li>
        </ol>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 4：在水中移动的动物</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让幼儿说出一些在水中移动的动物，然后发挥想象力
                    模仿这些动物的动作。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够说出一些在水中移动的动物。</li>
                <li>能够发挥想象力，模仿一些在水中移动的
                    动物的动作。</li>
                <li>能够知道大多数在水中移动的动物都有鱼鳍。</li>
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
            const returnURL = "{{ url('/micet/n1/animals/index') }}";
            const doneURL = "{{ url('/micet/n1/animals/index') }}";

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
