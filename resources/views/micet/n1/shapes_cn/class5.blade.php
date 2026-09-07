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
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>
        <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b5.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b7.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul">
            <li>认识三角形。</li>
            <li>观察不同的三角形。</li>
            <li>在教室里寻找三角形物品。</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <div>
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul">
                <li>主题活动书</li>
                <li>三角形积木</li>
                <li>透明胶带</li>
                <li>每位孩子 1 个"灵活三角形"（参见下一页）</li>
            </ul>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <div>
            <h3 class="ptitle">参考资料</h3>

            <ul class="list-disc panel-ul">
                <li>制作"灵活三角形"的材料：
                    <ul>
                        <li> i. 1 根筷子 </li>
                        <li> ii. 透明胶带 </li>
                        <li> iii. 40 厘米绳子</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <div class="flex flex-col items-center">
            <h3 class="ptitle">参考资料</h3>

            <ul class="list-disc panel-ul">
                <li>制作"灵活三角形"的步骤：
                    <ul>
                        <li>i. 将绳子对折并打结。 </li>
                        <li>ii. 用胶带将绳子紧紧绑在筷子上。 </li>
                        <li>iii. 成品如下所示。</li>
                    </ul>
                </li>
            </ul>
            <img src="{{ asset('assets/images/micet/n1/shapes/class5/c1.png') }}" class="w-[15vw]" />
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>问孩子们："这是什么？""它是什么形状？"（三角形）</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c2.png') }}" class="w-[22vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="2">
            <li>展示三角形积木，问孩子们："它像不像小老鼠最喜欢的奶酪？""它像不像下面的形状？""它是什么形状？"（三角形）</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c3.png') }}" class="w-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="3">
            <li>让孩子们触摸三角形积木的边，谈论三角形的特点。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c3.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>告诉孩子们三角形有 3 条边。指着不同的边，
                引导孩子们数数（从下一页开始）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c4.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>告诉孩子们三角形有 3 条边。指着不同的边，
                引导孩子们数数（从下一页开始）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c5.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>告诉孩子们三角形有 3 条边。指着不同的边，
                引导孩子们数数（从下一页开始）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c6.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="4">
            <li>告诉孩子们三角形有 3 条边。指着不同的边，
                引导孩子们数数（从下一页开始）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c7.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="5">
            <li>展示"灵活三角形"，告诉孩子们可以用它来"制作"
                不同的三角形。</li>
            <li>示范如何用"灵活三角形""制作"不同的三角形：
                一只手握住筷子，用另一只手的手指
                在不同角度将绳子从筷子处拉开。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c8.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="7">
            <li>给每位孩子分发一个"灵活三角形"。让每个孩子观察
                自己制作的不同三角形。<br>
                [注意：老师在教室里走动，指导和帮助每个孩子。]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c8.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="8">
            <li>问孩子们："这些是三角形吗？"（是的，不同大小的三角形。）</li>
            <li>让孩子们知道我们周围有很多三角形物品。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c9.png') }}" class="h-[18vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c10.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">披萨</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c11.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">三角形</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c12.png') }}" class="h-[20vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">衣架</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c13.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">奶酪</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c13.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">奶酪</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c14.png') }}" class="w-[22vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">窗户</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。</li>
        </ol>
        <div class="flex gap-[2vw]">
            <img src="{{ asset('assets/images/micet/n1/shapes/class5/c15.png') }}" class="w-[16vw]" />
            <img src="{{ asset('assets/images/micet/n1/shapes/class5/c16.png') }}" class="w-[16vw]" />
        </div>
        <h5 class="text-[2vw] text-[#f7b94a]">窗户</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。[注意：这张图片中有多个
                三角形，可以多次点击查看不同的三角形。]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c17.png') }}" class="w-[28vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">旗帜</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。[注意：这张图片中有多个
                三角形，可以多次点击查看不同的三角形。]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c18.png') }}" class="w-[28vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">瓷砖</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="10">
            <li>展示图片。让孩子们说出物品名称并谈论其用途，然后
                指出三角形。点击图片查看三角形。[注意：这张图片中有多个
                三角形，可以多次点击查看不同的三角形。]</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/shapes/class5/c19.png') }}" class="h-[17vw]" />
        <h5 class="text-[2vw] text-[#f7b94a]">帆船</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="11">
            <li>让孩子们在教室里寻找三角形物品。</li>
        </ol>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <ol class="list-decimal panel-ul w-[48vw]" start="12">
            <li>让孩子们用胶带将"灵活三角形"的筷子部分粘贴在
                主题活动书中。鼓励孩子们随时将绳子从筷子处拉开，
                观察不同的三角形。</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们轮流用自己的"灵活三角形"展示三角形。</li>
                <li>引导孩子们谈论三角形的特点：它有 3 条边。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够了解有不同的三角形。</li>
                <li>能够在教室里找到至少一个三角形物品。</li>
            </ul>
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 5：三角形</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们从家里找一个三角形物品，然后
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
                stopCurrentAudio();
                const slide = slides[slideIndex];
                let audioSrc = slide.getAttribute('data-slide-audio');
                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }
                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();
                slides.forEach((slide, index) => {
                    if (index === slideIndex) slide.classList.remove("hidden");
                    else slide.classList.add("hidden");
                });
                playSlideAudio(slideIndex);
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
                    const audioSrc = btn.getAttribute('data-slide-audio');
                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });

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
                if (currentSlide < slides.length) showSlide(currentSlide);
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
                        if (slides[previousIndex].classList.contains(specialSlideClass)) break;
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
                } else if (currentSlide > 0) {
                    currentSlide--;
                    while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) currentSlide--;
                    showSlide(currentSlide);
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

            nextButtons.forEach(btn => btn.addEventListener("click", goNext));
            if (returnButton) returnButton.addEventListener("click", goBack);
            if (doneButton) doneButton.addEventListener("click", handleDone);

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            window.speechSynthesis.onvoiceschanged = () => window.speechSynthesis.getVoices();
            showSlide(currentSlide);
        });
    </script>
@endpush
