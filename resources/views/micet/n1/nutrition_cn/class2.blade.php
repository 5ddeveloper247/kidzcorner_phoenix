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
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>识别米饭和面条类的一些食物</li>
            <li>了解肉类和海鲜类的食物有助于建造和增强我们的肌肉，促进成长。</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <div class="space-y-[2vw]">
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>主题活动书</li>
                <li>鱼、虾、鸡、猪肉和牛肉（让孩子们一边看图片一边观察它们）</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">课程开展</h3>

            <ul class="list-decimal panel-ul w-[45vw]">
                <li>问孩子们："除了米饭和面条类，你们每天还会吃什么其他食物？"</li>
                <li>告诉孩子们，他们将认识我们每天吃的另一类食物。</li>
            </ul>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色和形状？""它可以做成什么食物？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>鱼可以用蒸的方式烹饪，比如蒸鱼！你们吃过蒸鱼吗？你们喜欢吃蒸鱼吗？</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c2.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]"> 蒸鱼</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>问孩子们："鱼是怎么蒸的？"</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]"> 鱼</h5>
            </div>

            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />

            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c2.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]"> 蒸鱼</h5>
            </div>

        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>点击视频，让孩子们观看蒸鱼的过程并讨论。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class2/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>问孩子们："鱼可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>鱼可以用油烹饪，比如炸鱼！你们吃过炸鱼吗？你们喜欢吃炸鱼吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c3.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">炸鱼</h5>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>鱼也可以在烤盘上烹饪，比如烤鱼！你们吃过烤鱼吗？你们喜欢吃烤鱼吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c4.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">烤鱼</h5>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">虾</h5>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>虾可以用蒸的方式烹饪，比如蒸虾。你们吃过蒸虾吗？你们喜欢吃蒸虾吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c6.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">蒸虾</h5>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>虾可以用油烹饪，比如炒虾。你们吃过炒虾吗？你们喜欢吃炒虾吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c7.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">炒虾</h5>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>虾也可以用油烹饪，比如炸虾。你们吃过炸虾吗？你们喜欢吃炸虾吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c8.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">炸虾</h5>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>虾也可以在烤盘上烹饪，比如烤虾。你们吃过烤虾吗？你们喜欢吃烤虾吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c9.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">烤虾</h5>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[17vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>鸡可以在烤箱里烹饪，比如烤鸡。你们吃过烤鸡吗？你们喜欢吃烤鸡吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c10.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">烤鸡</h5>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>问孩子们："鸡是怎么烤的？"</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="w-[20vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
            </div>

            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />

            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c10.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">烤鸡</h5>
            </div>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>点击视频，让孩子们观看烤鸡的过程并讨论。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class2/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>问孩子们："鸡还可以做成什么其他食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>鸡可以用油烹饪，比如炸鸡。你们吃过炸鸡吗？你们喜欢吃炸鸡吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c11.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">炸鸡</h5>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>鸡也可以在砂锅里烹饪，比如砂锅鸡。你们吃过砂锅鸡吗？你们喜欢吃砂锅鸡吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c12.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">砂锅鸡</h5>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>鸡也可以在砂锅里烹饪，比如砂锅鸡。你们吃过砂锅鸡吗？你们喜欢吃砂锅鸡吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c12.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">砂锅鸡</h5>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>猪肉可以用火烹饪，比如烤肉。你们吃过烤肉吗？你们喜欢吃烤肉吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c14.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">烤肉</h5>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>猪肉也可以放在有水的锅里烹饪，比如猪肉汤。你们试过猪肉汤吗？你们喜欢它的味道吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c15.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉汤</h5>
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>猪肉可以在有酱汁的锅里烹饪，比如红烧猪蹄。你们吃过吗？你们喜欢吃吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c16.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">红烧猪蹄</h5>
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>整只猪可以用火烤制，比如烤乳猪。你们见过烤乳猪吗？你们喜欢吃吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c17.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">烤乳猪</h5>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色和形状？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>问孩子们："牛肉和猪肉的颜色有什么不同？"</li>
            <li>告诉孩子们，牛肉是红色的，而猪肉是粉红色的。</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>

            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
            </div>
        </div>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>问孩子们："牛肉可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
    </div>


    {{-- panel 31 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>牛肉可以用油烹饪，比如煎牛排。你们吃过煎牛排吗？你们喜欢吃煎牛排吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c19.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">牛排</h5>
    </div>


    {{-- panel 32 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>问孩子们："牛排是怎么煎的？"</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c19.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛排</h5>
            </div>
        </div>
    </div>


    {{-- panel 33 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>点击视频，让孩子们观看煎牛排的过程并讨论。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class2/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="34">
            <li>问孩子们："牛肉可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
    </div>


    {{-- panel 35 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="35">
            <li>牛肉可以做成肉饼并煎熟，作为汉堡的馅料。你们吃过汉堡吗？你们喜欢吃汉堡吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c20.png') }}" class="h-[17vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">汉堡</h5>
    </div>


    {{-- panel 36 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="36">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色和形状？""它来自哪里？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[17vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
    </div>


    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="37">
            <li>鸡蛋来自母鸡。</li>
        </ol>

        <div class=" flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[20vw]">

            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]">

            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c22.png') }}" class="w-[25vw]">

        </div>
    </div>


    {{-- panel 38 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="38">
            <li>鸡蛋可以用油烹饪，比如煎鸡蛋。你们吃过煎鸡蛋吗？你们喜欢吃煎鸡蛋吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c23.png') }}" class="w-[30vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
    </div>


    {{-- panel 39 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="39">
            <li>鸡蛋可以用水烹饪，比如煮鸡蛋。你们吃过煮鸡蛋吗？你们喜欢吃煮鸡蛋吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c24.png') }}" class="w-[30vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
    </div>


    {{-- panel 40 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="40">
            <li>让孩子们说出这些食物的名称。</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">虾</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>
        </div>
    </div>


    {{-- panel 41 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="41">
            <li>告诉孩子们，来自大海的食物叫做海鲜。</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">虾</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>
        </div>
    </div>


    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="42">
            <li>让孩子们指出哪些是海鲜。</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">虾</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>
        </div>
    </div>


    {{-- panel 43 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="43">
            <li>告诉孩子们，来自大海的鱼和虾被称为海鲜。</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">虾</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>
        </div>
    </div>


    {{-- panel 44 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="44">
            <li>告诉孩子们，除了海鲜，这类食物还包括鸡、猪肉、牛肉和鸡蛋，这就是为什么这类食物被称为肉类和海鲜类。</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">虾</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>
        </div>
    </div>


    {{-- panel 45 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="45">
            <li>问孩子们："我们可以在哪里买到肉类和海鲜类的食物？"</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鱼</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">虾</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡蛋</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">鸡</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">猪肉</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">牛肉</h5>
            </div>
        </div>
    </div>


    {{-- panel 46 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="46">
            <li>看，我们可以从超市买到它们。</li>
        </ol>

        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c26.png') }}" class="w-[25vw]">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c27.png') }}" class="w-[27vw]">
        </div>
    </div>


    {{-- panel 47 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="47">
            <li>问孩子们："你们知道为什么我们需要每天吃肉类和海鲜类的食物吗？"鼓励孩子们大胆猜测，老师在需要时给予帮助。</li>
            <li>告诉孩子们，肉类和海鲜类的食物有助于建造和增强我们的肌肉，促进成长。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c28.png') }}" class="h-[15vw]">
    </div>


    {{-- panel 49 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="49">
            <li>引导孩子们在主题活动书中完成相应的活动。</li>
        </ol>
    </div>


    {{-- panel 50 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>让孩子们轮流谈论他们最喜欢的肉类和海鲜类食物，并给出理由。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够说出一些肉类和海鲜类的食物。</li>
                <li> 能够了解肉类和海鲜类的食物有助于建造和增强我们的肌肉，促进成长。</li>
            </ul>
        </div>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 2：肉类和海鲜类</h1>

        <div class="text-start">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>在家里，让孩子们在晚餐时找出肉类和海鲜类的食物，并告诉父母吃它们的好处。回到班上后，让孩子们轮流分享他们吃了哪些肉类和海鲜类的食物。</li>
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
            const returnURL = "{{ url('/micet/n1/nutrition_cn/index') }}";
            const doneURL = "{{ url('/micet/n1/nutrition_cn/index') }}";

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

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.phonics-panel').forEach(panel => {
                const observer = new MutationObserver(() => {
                    if (panel.classList.contains('hidden')) {
                        panel.querySelectorAll('video').forEach(video => {
                            if (!video.paused) video.pause();
                            video.currentTime = 0;
                        });
                    }
                });

                observer.observe(panel, {
                    attributes: true,
                    attributeFilter: ['class']
                });
            });
        });
    </script>
@endpush
