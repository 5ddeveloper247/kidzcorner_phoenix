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

        title {
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
        <h1 class="panel-title stroke">课堂活动 1：姜饼人</h1>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />


        <h3 class="title">学习目标：</h3>

        <ul class="list-disc panel-ul">
            <li>认识五种感官</li>
            <li>培养观察和预测能力</li>
            <li>享受听故事的乐趣</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 1：姜饼人</h1>

        <div>
            <h3 class="title">准备工作</h3>

            <ul class="list-disc panel-ul">
                <li>主题活动书</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">姜饼人</h1>
        <h3 class="text-white text-[2vw]">主题：我的身体</h3>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c2.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <p class="text-white text-[1.5vw]">一位面包师做了一个姜饼人。<br>
            姜饼人的脸上缺少什么？</p>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c3.png') }}" class="w-[25vw]" />

        <div class="flex justify-between items-center">
            <p class="text-[1.5vw] text-white">姜饼人的脸上缺少什么？<br>
                <span class="text-[#f7b94a]">鼓励孩子们猜测，接受所有合理的答案。</span>
            </p>
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <p class="text-white text-[1.5vw]">看，面包师用糖霜在姜饼人上画了两只眼睛。<br>
            但还缺少什么？</p>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c4.png') }}" class="w-[25vw]" />

        <div class="flex justify-between items-center">
            <p class="text-[1.5vw] text-white">姜饼人的脸上还缺少什么？<br>
                <span class="text-[#f7b94a]">鼓励孩子们猜测，接受所有合理的答案。</span>
            </p>
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <p class="text-white text-[1.5vw] text-center">面包师在姜饼人上画了两只耳朵。<br>
            还缺少什么？</p>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c5.png') }}" class="w-[25vw]" />

        <div class="flex justify-between items-center">
            <p class="text-[1.5vw] text-white">姜饼人的脸上缺少什么？<br>
                <span class="text-[#f7b94a]">鼓励孩子们猜测，接受所有合理的答案。</span>
            </p>
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[8vw]" />
        </div>
    </div>

    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <p class="text-white text-[1.5vw]">面包师在姜饼人上画了一个鼻子。<br>
            还缺少什么？</p>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c6.png') }}" class="w-[25vw]" />

        <div class="flex justify-between items-center">
            <p class="text-[1.5vw] text-white">姜饼人的脸上缺少什么？<br>
                <span class="text-[#f7b94a]">鼓励孩子们猜测，接受所有合理的答案。</span>
            </p>
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <p class="text-white text-[1.5vw]">面包师用糖霜在姜饼人上画了一个嘴巴。<br>
            姜饼人的身体缺少什么？</p>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c7.png') }}" class="w-[25vw]" />

        <div class="flex justify-between items-center">
            <p class="text-[1.5vw] text-white">姜饼人的脸上缺少什么？<br>
                <span class="text-[#f7b94a]">鼓励孩子们猜测，接受所有合理的答案。</span>
            </p>
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <p class="text-white text-[1.5vw]">面包师在姜饼人上画了手和脚。<br>
            还可以在姜饼人的身体上画什么？</p>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c8.png') }}" class="w-[25vw]" />

        <div class="flex justify-between items-center">
            <p class="text-[1.5vw] text-white">姜饼人的脸上缺少什么？<br>
                <span class="text-[#f7b94a]">鼓励孩子们猜测，接受所有合理的答案。</span>
            </p>
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <p class="text-white text-[1.5vw]">面包师给姜饼人画了衣服！太好了！<br>
            可爱的姜饼人终于完成了！</p>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c9.png') }}" class="w-[25vw]" />

        <div class="flex justify-between items-center">
            <p class="text-[1.5vw] text-white">你吃过姜饼人吗？你喜欢吗？为什么？<br>
                <span class="text-[#f7b94a]">鼓励孩子们根据自己的经历和喜好回答。</span>
            </p>
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c10.png') }}" class="h-[8vw]" />
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">课堂活动 1：姜饼人</h1>

        <ol class="list-decimal panel-ul" start="2">
            <li>引导孩子们在主题活动书中完成相应的活动。</li>
        </ol>
    </div>

    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 1：姜饼人</h1>

        <h3 class="title">结束活动</h3>

        <ul class="list-disc panel-ul">
            <li>让孩子们回忆面包师在姜饼人上画了哪些东西。</li>
        </ul>

        <h3 class="title">评估</h3>

        <ul class="list-disc panel-ul">
            <li>能够根据观察回答问题。</li>
            <li>能够享受听故事的乐趣。</li>
        </ul>


    </div>


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
                    const slide = slides[currentSlide]; // ✅ fixed: was `slides[slideIndex]` (undefined variable)

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
