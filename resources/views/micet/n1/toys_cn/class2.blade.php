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
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b1.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b2.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b3.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/class2/b4.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul ">
            <li>识别一些有轮子的玩具</li>
            <li>识别玩具上轮子的功能</li>
            <li>培养分享和爱护玩具的习惯</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <div class="space-y-[1vw] text-center">
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>主题活动书</li>
                <li>致家长的信（参见下一页）</li>
                <li>一个箱子：用来存放孩子们从家里带来的玩具</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c1.png') }}" class="w-[35vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">课程开展</h3>

            <ul class="list-decimal panel-ul w-[45vw]">
                <li>问孩子们："这是什么？""它是什么形状？"</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c2.png') }}" class="w-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">轮子</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>问孩子们："这是什么？"（卡车）"这是谁最喜欢的玩具？"（Logi）"它是什么颜色？""它的四个轮子在哪里？""轮子能做什么？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片。让孩子们说出玩具的名称，然后指着轮子并谈论轮子的功能。点击图片查看轮子。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c4.png') }}" class="w-[30vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">拉车</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片。让孩子们说出玩具的名称，然后指着轮子并谈论轮子的功能。点击图片查看轮子。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c5.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">挖掘机</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片。让孩子们说出玩具的名称，然后指着轮子并谈论轮子的功能。点击图片查看轮子。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c6.png') }}" class="w-[25vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">垃圾车</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片。让孩子们说出玩具的名称，然后指着轮子并谈论轮子的功能。点击图片查看轮子。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c7.png') }}" class="w-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">火车</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片。让孩子们说出玩具的名称，然后指着轮子并谈论轮子的功能。点击图片查看轮子。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c8.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">鸭子</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片。让孩子们说出玩具的名称，然后指着轮子并谈论轮子的功能。点击图片查看轮子。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c9.png') }}" class="h-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">机器人</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>展示图片。让孩子们说出玩具的名称，然后指着轮子并谈论轮子的功能。点击图片查看轮子。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/toys/class2/c10.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三轮车</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>让孩子们围成圈坐，展示他们从家里带来的玩具。让他们轮流说出自己的玩具并分享他们会怎么玩。然后指着轮子并谈论玩具上轮子的功能。</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>问孩子们："你们从家里带来的所有玩具有一个共同点，你们知道是什么吗？"告诉孩子们，这些玩具都有轮子，它们是有轮子的玩具。</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>问孩子们："你们觉得玩完玩具后应该把它们乱扔吗？"引导孩子们理解，我们应该小心爱护玩具，否则它们可能会损坏，我们可玩的玩具就会变少。</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>在中间放一个箱子，让孩子们把玩具放进箱子里。问孩子们："你们想玩箱子里不同的玩具吗？"邀请孩子们分享玩具，这样他们就能玩不同的玩具了。</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>让孩子们轮流玩不同的玩具。提醒他们玩完后把玩具放回原处。</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>引导孩子们在主题活动书中完成相应的活动。</li>
        </ol>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：有轮子的玩具</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们轮流谈论他们最喜欢的有轮子的玩具并说明理由。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够识别一些有轮子的玩具。</li>
                <li>能够说出玩具上轮子的功能。</li>
                <li>能够小心爱护玩具，并在玩完后放回原处。</li>
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
