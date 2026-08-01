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

        ol {
            width: 47vw;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>

        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>认识一些常见的蔬菜和水果</li>
            <li>了解大多数水果是甜的，可以生吃</li>
            <li>了解蔬菜和水果类的食物
                有助于促进良好的消化系统和规律的
                排便</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[5vw] h-full items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <div class="space-y-[2vw]">
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>主题活动书</li>
                <li>叶菜类蔬菜、大白菜、胡萝卜、番茄、
                    黄瓜、土豆、苹果、橙子、葡萄、西瓜
                    和香蕉（让孩子们一边观察实物，一边
                    看图片）</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>问孩子们："除了米饭和面条类、肉类和海鲜类之外，
                    你们每天还吃什么食物？"</li>
                <li>告诉孩子们，他们将认识另一组我们每天都吃的食物。</li>
            </ol>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="h-[16vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">菜心 <br> <span class="text-[1.2vw]">（油菜心）</span>
        </h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>菜心可以用开水煮，比如水煮菜心！
                你们吃过水煮菜心吗？你们喜欢吃吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c2.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">水煮菜心</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>问孩子们："菜心是怎么煮的？"</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="h-[17vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">菜心</h5>
            </div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c2.png') }}" class="w-[30vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">水煮菜心</h5>
            </div>
        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>点击视频，让孩子们观看菜心的煮制过程并进行讨论。</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">大白菜 <br> <span class="text-[1.2vw]">（娃娃菜）</span>
        </h5>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>大白菜可以用油来炒，比如炒大白菜。
                你们吃过吗？你们喜欢吃吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c4.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">大白菜</h5>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c5.png') }}" class="w-[35vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">胡萝卜</h5>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>胡萝卜可以和其他蔬菜一起煮，比如蔬菜汤。
                你们喝过蔬菜汤吗？你们喜欢吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c6.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">蔬菜汤</h5>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c7.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">番茄</h5>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>番茄可以在锅里捣碎，然后和水、鸡蛋一起煮，比如
                番茄蛋花汤。你们喝过番茄蛋花汤吗？你们喜欢吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c8.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">番茄</h5>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c9.png') }}" class="h-[17vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">黄瓜</h5>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>黄瓜可以切成片，夹在两片面包之间，
                比如三明治。你们吃过三明治吗？你们喜欢吃吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c10.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">三明治</h5>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[26vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">土豆</h5>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>土豆可以煮熟后捣成泥，比如土豆泥。你们
                吃过土豆泥吗？你们喜欢吃吗？</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c12.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">土豆泥</h5>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>告诉孩子们，这些都是蔬菜。让孩子们说出每种蔬菜的名称。</li>
        </ol>

        <div class="grid grid-cols-3 gap-[.5vw] items-end">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="h-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">菜心</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">大白菜</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c5.png') }}" class="w-[15vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">胡萝卜</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c7.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">番茄</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c9.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">黄瓜</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[12vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">土豆</h5>
            </div>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>问孩子们："你们知道什么是水果吗？""说出你们知道的
                水果。"</li>
            <li>告诉孩子们，他们将讨论一些常见的水果。</li>
        </ol>
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c13.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">苹果</h5>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>问孩子们："你们吃过苹果吗？""它是什么味道？"
                "你们怎么吃它？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c14.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">橙子</h5>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c16.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">葡萄</h5>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>问孩子们："你们吃过葡萄吗？""它是什么味道？"
                "你们怎么吃它？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c18.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c19.png') }}" class="h-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">西瓜</h5>
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>问孩子们："你们吃过西瓜吗？""它是什么味道？"
                "你们怎么吃它？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c20.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>问孩子们："这是什么？""你们以前见过吗？""它是什么颜色
                和形状？""它可以做成什么食物？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c21.png') }}" class="w-[25vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">香蕉</h5>
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>问孩子们："你们吃过香蕉吗？""它是什么味道？"
                "你们怎么吃它？"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c22.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>让孩子们说出水果的名称。</li>
        </ol>
        <div class="grid grid-cols-6 gap-4 justify-items-center">

            <div class="col-span-3">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c19.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">西瓜</h5>
            </div>

            <div class="col-span-3">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c22.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">香蕉</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c13.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">苹果</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">橙子</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">葡萄</h5>
            </div>

        </div>
    </div>


    {{-- panel 31 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>问孩子们："蔬菜和水果的味道有什么不同？"</li>
        </ol>

        <div class="flex justify-between w-full">

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c21.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- panel 32 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>告诉孩子们，大多数水果是甜的，可以生吃，而
                蔬菜通常需要煮熟后再吃。</li>
        </ol>

        <div class="flex justify-between w-full">

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c11.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c3.png') }}" class="w-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c1.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

            <div class="flex flex-col items-center gap-4 border-4 border-[#f7b94a] rounded-full">

                <!-- Top Image -->
                <div>
                    <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="w-[10vw]" />
                </div>

                <!-- Bottom 2 Images -->
                <div class="flex gap-4">
                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[10vw]" />
                    </div>

                    <div>
                        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c21.png') }}" class="w-[10vw]" />
                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- panel 33 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>让孩子们说说这些水果是否是甜的。</li>
        </ol>
        <div class="grid grid-cols-6 gap-4 justify-items-center">

            <div class="col-span-3">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c19.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">西瓜</h5>
            </div>

            <div class="col-span-3">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c22.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">香蕉</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c13.png') }}" class="w-[10vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">苹果</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c15.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">橙子</h5>
            </div>

            <div class="col-span-2">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c17.png') }}" class="h-[8vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw] text-center">葡萄</h5>
            </div>

        </div>
    </div>


    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="34">
            <li>问孩子们："你们知道为什么我们需要每天吃蔬菜和水果类的
                食物吗？"鼓励孩子们大胆猜测，老师适时给予帮助。</li>
            <li>告诉孩子们，蔬菜和水果类的食物帮助我们更容易消化食物，
                并保持规律的排便。</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class3/c23.png') }}" class="w-[20vw]" />
    </div>


    {{-- panel 35 --}}
    <div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw] items-center">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="36">
            <li>引导孩子们在主题活动书中完成相应的活动。</li>
        </ol>
    </div>


    {{-- panel 36 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul">
                <li>让孩子们轮流谈论他们吃过的水果和蔬菜，以及
                    吃它们的好处。</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul">
                <li>能够了解大多数水果是甜的，可以生吃。</li>
                <li>能够了解蔬菜和水果类的食物有助于
                    促进良好的消化系统和规律的排便。</li>
            </ul>
        </div>
    </div>


    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 3：蔬菜和水果类</h1>

        <div class="text-start">
            <h3 class="ptitle">延伸活动</h3>

            <ul class="list-disc panel-ul">
                <li>在家中，让孩子们在晚餐时找出蔬菜和水果类的
                    食物，并告诉父母吃它们的好处。回到班上后，让孩子们
                    轮流分享他们吃了哪些蔬菜和水果类的食物。</li>
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

    </script>
@endpush
