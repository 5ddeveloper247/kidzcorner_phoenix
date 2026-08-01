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
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/animals/class5/b1.png') }}" class="h-[9vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class5/b2.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class4/b2.png') }}" class="h-[9vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>认识神仙鱼</li>
            <li>制作一条神仙鱼</li>
            <li>说出一种最喜欢的水中移动的动物，并说明
                选择的理由</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <div>
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>主题活动书</li>
                <li>致家长信（参见活动3中的信件）</li>
                <li>课前在教室一角布置一个水族馆
                    ［例如：可用一个大的透明容器或箱子作为水族馆；
                    用石头、弹珠、贝壳、海草、彩纸等
                    营造自然的水生环境］
                    收集孩子们从家里带来的所有玩具，将
                    合适的动物玩具放入水族馆中。</li>
                <li>胶水、彩色铅笔</li>
                <li>一条预先制作好的神仙鱼</li>
                <li>打印神仙鱼的不同身体部位（如课程开展中所示）；
                    每个孩子一套</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>让幼儿观察教室里布置的水族馆。问他们：
                    "你们在这个水族馆里看到了什么？" "里面住着哪些动物？"</li>
                <li>展示预先制作好的神仙鱼。问幼儿："这是什么鱼？" 告诉
                    幼儿，他们将要制作自己的神仙鱼。让他们观看
                    课件中不同的神仙鱼。</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c1.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c2.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c3.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c4.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c5.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c6.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c7.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问他们："这条神仙鱼上有哪些颜色和图案？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c8.png') }}" class="w-[27vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>分发神仙鱼身体部位的打印图（或使用
                主题活动书）。让幼儿为神仙鱼的不同身体
                部位绘制图案并涂色（两面都要涂）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/animals/class5/c9.png') }}" class="w-[30vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">神仙鱼</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>根据下面的图片，让幼儿将不同的身体部位
                拼合在一起，组成一条神仙鱼。</li>
            <li>让幼儿用胶水将各部位粘贴起来，完成神仙鱼的制作。</li>
        </ol>

        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/animals/class5/c10.png') }}" class="h-[18vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class5/c11.png') }}" class="h-[18vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>最后，协助幼儿在神仙鱼的一角写上自己的名字，然后
                将它放入水族馆（可将鱼粘贴在水族馆背面，或
                悬挂在水族馆内部，无需加水）。</li>
        </ol>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 5：水族馆</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让幼儿轮流谈论自己最喜欢的水中移动的动物，
                    并说明选择的理由。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够制作一条神仙鱼。</li>
                <li>能够说出一种最喜欢的水中移动的动物，并说明
                    选择的理由。</li>
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
