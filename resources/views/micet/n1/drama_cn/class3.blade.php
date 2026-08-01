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
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/animals/class2/b1.png') }}" class="h-[10vw]" />
            <img src="{{ asset('assets/images/micet/n1/animals/class2/b2.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul ">
            <li>学习演唱故事中的歌曲</li>
            <li>跟着音乐的节奏唱歌并拍手</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <div class="space-y-[1vw] text-center">
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>主题活动书</li>
                <li>课前练习跟着音乐的节奏唱歌并拍手
                    【注意：前奏结束后，每次听到鼓声就拍手。】</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">课程开展</h3>

            <ul class="list-decimal panel-ul w-[45vw]">
                <li>播放音乐，让孩子们跟着音乐的节拍拍手。</li>
                <li>告诉孩子们，今天他们将用这段音乐来学习演唱故事《兔子和狼》中的另外两首歌曲。</li>
            </ul>
        </div>
        <button class="w-[4vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>歌曲 3：播放音乐，老师跟着音乐的节拍演唱。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                不能开门。</br>
                你不是我们的妈妈，</br>
                不能开门。</br>
                在妈妈回家之前，</br>
                不能开门</br>
                让任何人进来。</h5>
        </div>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>歌曲 3：老师向孩子们解释歌词的含义。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                不能开门。</br>
                你不是我们的妈妈，</br>
                不能开门。</br>
                在妈妈回家之前，</br>
                不能开门</br>
                让任何人进来。</h5>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>歌曲 3：重复播放音乐，让孩子们跟着老师一起跟着音乐的节拍演唱。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                不能开门。</br>
                你不是我们的妈妈，</br>
                不能开门。</br>
                在妈妈回家之前，</br>
                不能开门</br>
                让任何人进来。</h5>
        </div>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>歌曲 3：孩子们熟悉歌曲后，播放音乐，让孩子们跟着老师一起唱着拍着音乐的节拍。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                不能开门。</br>
                你不是我们的妈妈，</br>
                不能开门。</br>
                在妈妈回家之前，</br>
                不能开门</br>
                让任何人进来。</h5>
        </div>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>歌曲 4：播放音乐，老师跟着音乐的节拍演唱。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                可以开门。</br>
                你是我们的妈妈，</br>
                可以开门。</br>
                妈妈已经回家了，</br>
                请开门</br>
                让妈妈进来。</h5>
        </div>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>歌曲 4：老师向孩子们解释歌词的含义。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                可以开门。</br>
                你是我们的妈妈，</br>
                可以开门。</br>
                妈妈已经回家了，</br>
                请开门</br>
                让妈妈进来。</h5>
        </div>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>歌曲 4：重复播放音乐，让孩子们跟着老师一起跟着音乐的节拍演唱。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                可以开门。</br>
                你是我们的妈妈，</br>
                可以开门。</br>
                妈妈已经回家了，</br>
                请开门</br>
                让妈妈进来。</h5>
        </div>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>歌曲 4：孩子们熟悉歌曲后，播放音乐，让孩子们跟着老师一起唱着拍着音乐的节拍。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h5 class="text-[2vw] text-[#f7b94a]">我们是乖孩子，</br>
                可以开门。</br>
                你是我们的妈妈，</br>
                可以开门。</br>
                妈妈已经回家了，</br>
                请开门</br>
                让妈妈进来。</h5>
        </div>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>问孩子们："这是什么动物？" "它是什么颜色？" "你能描述一下吗？"
                （外形特征） "它在陆地上怎么移动？" "它有几条腿？"</li>
            <li>之后，让各组轮流表演歌曲。</li>
        </ol>

    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 3：故事歌曲（2）</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>交换歌曲，让各组轮流表演另一首歌曲。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够演唱故事中的歌曲。</li>
                <li>能够跟着音乐的节拍唱歌并拍手。</li>
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
