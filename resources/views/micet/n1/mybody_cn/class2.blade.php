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
            text-align: left
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 1：我能看见</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul">
            <li>了解我们的眼睛能让我们看见物体的颜色和 <br>
                形状</li>
            <li>表达他们喜欢看见和不喜欢看见的事物</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 1：我能看见</h1>

        <div class="text-start">
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-decimal panel-ul">
                <li>问孩子们："这是什么？""眼睛在哪里？"让孩子们指向 <br>
                    眼睛。</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/micet/n1/mybody/class1/c2.png') }}" class="h-[20vw]" />

    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="2">
            <li>问孩子们："你的眼睛在哪里？""你有几只眼睛？"让孩子们
                指向自己的眼睛。告诉他们每个人都有两只眼睛。指向
                眼睛并引导孩子们数数。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">眼睛</h5>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="3">
            <li>问孩子们："如果没有眼睛会怎样？"</li>
            <li>让孩子们做实验来确认眼睛的功能。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">眼睛</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>这些是什么？（不同大小的圆形）</li>
                    <li>它们是什么颜色？（红色）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>问孩子们："现在，你们知道眼睛的功能了吗？"引导孩子们
                理解：我们的眼睛能让我们看见物体的颜色和形状。
                没有眼睛，我们将无法看见任何东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>这些是什么？（不同大小的正方形）</li>
                    <li>它们是什么颜色？（绿色）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>问孩子们："现在，你们知道眼睛的功能了吗？"引导孩子们
                理解：我们的眼睛能让我们看见物体的颜色和形状。
                没有眼睛，我们将无法看见任何东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>这些是什么？（不同大小的长方形）</li>
                    <li>它们是什么颜色？（蓝色）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>问孩子们："现在，你们知道眼睛的功能了吗？"引导孩子们
                理解：我们的眼睛能让我们看见物体的颜色和形状。
                没有眼睛，我们将无法看见任何东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c5.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>这些是什么？（不同大小的三角形）</li>
                    <li>它们是什么颜色？（黄色）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="8">
            <li>问孩子们："现在，你们知道眼睛的功能了吗？"引导孩子们
                理解：我们的眼睛能让我们看见物体的颜色和形状。
                没有眼睛，我们将无法看见任何东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>它们是什么颜色？（红、黄、绿、蓝、橙和白色）</li>
                    <li>它是什么形状？（正方形）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>它们是什么颜色？（红、黄、绿、蓝、橙和白色）</li>
                    <li>它是什么形状？（圆形）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>它们是什么颜色？（红、黄、绿、蓝、橙和白色）</li>
                    <li>它是什么形状？（长方形）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>

    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="5">
            <li>让孩子们闭上眼睛。</li>
            <li>点击显示图片，问孩子们是否知道显示了什么图片。</li>
            <li>让孩子们睁开眼睛，看着图片并回答问题：
                <ul class="list-disc">
                    <li>它们是什么颜色？（红、黄、绿、蓝、橙和白色）</li>
                    <li>它是什么形状？（三角形）</li>
                </ul>
            </li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="9">
            <li>告诉孩子们，我们的眼睛能让我们看见物体的颜色和形状。
                问他们看见有什么好处？
                让孩子们一起探索。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c2.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>问孩子们："你看见了什么？"（一个时钟）</li>
            <li>"看时钟对我们有什么帮助？"（给我们信息——知道什么时间
                该做什么事）</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c7.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>问孩子们："你看见了什么？"（厕所标志）</li>
            <li>"看厕所标志对我们有什么帮助？"（给我们信息——知道该用
                哪个厕所）</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c8.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="10">
            <li>问孩子们："你看见了什么？"（小心地滑标志）</li>
            <li>"看这个标志对我们有什么帮助？"（给我们信息——知道地面
                湿滑，走路要小心以免滑倒）</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c9.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="12">
            <li>问孩子们："你喜欢你看见的所有东西吗？"
                让我们一起探索！</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c9.png') }}" class="h-[15vw] opacity-0" />
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="13">
            <li>问孩子们："你看见了什么？""你喜欢它吗？"</li>
            <li>引导孩子们理解：有时我们喜欢看见的东西，
                有时我们不喜欢看见的东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c9.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="13">
            <li>问孩子们："你看见了什么？""你喜欢它吗？"</li>
            <li>引导孩子们理解：有时我们喜欢看见的东西，
                有时我们不喜欢看见的东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c10.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="13">
            <li>问孩子们："你看见了什么？""你喜欢它吗？"</li>
            <li>引导孩子们理解：有时我们喜欢看见的东西，
                有时我们不喜欢看见的东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c11.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="13">
            <li>问孩子们："你看见了什么？""你喜欢它吗？"</li>
            <li>引导孩子们理解：有时我们喜欢看见的东西，
                有时我们不喜欢看见的东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c12.png') }}" class="w-[20vw]" />
    </div>

    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="13">
            <li>问孩子们："你看见了什么？""你喜欢它吗？"</li>
            <li>引导孩子们理解：有时我们喜欢看见的东西，
                有时我们不喜欢看见的东西。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c13.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="15">
            <li>老师总结：我们的眼睛不仅能让我们看见物体的颜色和
                形状，还能给我们有用的信息。有时我们喜欢看见的东西，
                有时我们不喜欢看见的东西。</li>

            <li>问孩子们："眼睛重要吗？"告诉孩子们，眼睛是我们最常
                用来观察世界、认识世界的器官，所以我们必须好好
                保护它们。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c13.png') }}" class="w-[20vw] opacity-0" />
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <ol class="list-decimal panel-ul" start="17">
            <li>引导孩子们在主题活动书中完成相应的活动。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/mybody/class2/c13.png') }}" class="w-[20vw] opacity-0" />
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul">
                <li>引导孩子们在主题活动书中完成相应的活动。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul">
                <li>能够理解我们的眼睛能让我们看见物体的
                    颜色和形状。</li>
                <li>能够表达他们喜欢看见和不喜欢
                    看见的事物。</li>
            </ul>
        </div>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：我能看见</h1>

        <div class="text-start">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul">
                <li>让孩子们回家向父母了解如何
                    保护眼睛，然后在班上分享这些
                    信息。</li>
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
