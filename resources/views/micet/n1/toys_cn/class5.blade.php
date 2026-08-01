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
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/animals/class5/b1.png') }}" class="h-[9vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class5/b2.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class4/b2.png') }}" class="h-[9vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>认识一些可以投掷的玩具</li>
            <li>发展大肌肉和小肌肉技能（学习投球）</li>
            <li>培养分享和爱护玩具的习惯</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <div>
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>主题活动书</li>
                <li>致家长信（请参考活动2中的信件）</li>
                <li>一个盒子：存放孩子们从家里带来的玩具</li>
                <li>一个球</li>
                <li>一个大篮子</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>问孩子们："这是什么？"（球）"这是谁最喜欢的玩具？"（Dex）"它是什么颜色的？"</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/micet/n1/toys/class5/c1.png') }}" class="w-[15vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>告诉孩子们，球是一种可以投掷的玩具。一个人投球，另一个人接球。点击视频，看看两个女孩是如何投球和接球的。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/toys/class1/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片，让孩子们辨认玩具并分享他们会怎么玩。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class5/c2.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">沙包</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="4">
            <li>展示图片，让孩子们辨认玩具并分享他们会怎么玩。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class5/c2.1.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">纸飞机</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片，让孩子们辨认玩具并分享他们会怎么玩。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class5/c3.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">魔术球</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="3">
            <li>展示图片，让孩子们辨认玩具并分享他们会怎么玩。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class5/c4.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">飞盘</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片，让孩子们辨认玩具并分享他们会怎么玩。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class5/c5.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">悠悠球</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>让孩子们围坐成圈，展示他们从家里带来的玩具。轮流介绍玩具的名称和玩法。鼓励孩子们提问。</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>问孩子们："你们从家里带来的玩具都有一个共同点，你们知道是什么吗？"告诉孩子们，这些是可以投掷的玩具。</li>
        </ol>
    </div>

    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>问孩子们："玩这些玩具时，我们可以随便往哪里扔吗？"引导孩子们理解，投掷玩具时要小心，以免不小心伤到别人或损坏玩具。</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>在中间放一个盒子，让孩子们把玩具放进盒子里。问孩子们："你们想玩盒子里不同的玩具吗？"邀请孩子们分享玩具，这样大家都能玩到不同的玩具。</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>邀请孩子们到操场或场地上，引导他们分成几组。让每组的孩子轮流练习把球投进篮子里，学习控制投掷的方向。</li>
            <li>然后让孩子们玩不同的可以投掷的玩具。鼓励孩子们选择一种玩具，两人一组玩耍。提醒他们玩完后把玩具放回原处。</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>引导孩子们在主题活动书中完成相应的活动。</li>
        </ol>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们轮流介绍一种最喜欢的可以投掷的玩具，并说明理由。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够认识一些可以投掷的玩具。</li>
                <li>能够朝正确的方向投球或其他玩具。</li>
                <li>能够小心爱护玩具，并在玩完后放回原处。</li>
            </ul>
        </div>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 5：可以投掷的玩具</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们在自由活动时间练习朝特定方向投球。</li>
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
            const returnURL = "{{ url('/micet/n1/toys/index') }}";
            const doneURL = "{{ url('/micet/n1/toys/index') }}";

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
