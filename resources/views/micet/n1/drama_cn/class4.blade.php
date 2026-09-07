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
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/drama/class2/b2.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class2/b4.png') }}" class="h-[8vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class2/b3.png') }}" class="h-[6vw]" />
        </div>


        <h3 class="ptitle">学习目标：</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>知道我们可以用唱歌的方式讲故事</li>
            <li>用唱歌的方式讲故事</li>
            <li>在表演故事时发挥想象力</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div>
            <h3 class="ptitle">准备工作</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>适合故事《兔子和狼》的道具，如帽子、篮子、胡萝卜、窗帘（作门）等。
                    [注意：在课程中，观察每个孩子的唱歌和角色扮演能力，以便为活动8-10的小型戏剧做出合适的选择。]</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div class="text-start">
            <h3 class="ptitle">课程开展</h3>

            <ol class="list-decimal panel-ul w-[50vw]">
                <li>问孩子们："以前有人给你们讲过故事吗？" "你们听过什么故事？" "你最喜欢什么故事？" 引导孩子们分享他们的经历和想法。</li>
            </ol>
        </div>

        <div class="flex flex-col items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel relative flex flex-col items-center h-full w-full">

        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div class="panel-ul absolute top-[10.2%] left-[1.8%] w-[96%]">
            <ol class="list-decimal pl-[1.2vw] m-0" start="2">
                <li>
                    邀请孩子们演唱故事《兔子和狼》中的4首歌曲。
                </li>
            </ol>
        </div>

        <div class="panel-ul absolute top-[20%] left-[19.3%] w-[60.8%] h-[72%] grid grid-cols-2 grid-rows-2">

            <div class="absolute inset-y-0 left-1/2 border-l border-white/60 pointer-events-none"></div>
            <div class="absolute inset-x-0 top-1/2 border-t border-white/60 pointer-events-none"></div>

            <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
                <div class=" text-white text-[1.2vw]">歌曲 1</div>
                <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                    亲爱的孩子们，<br>
                    请锁好门。<br>
                    妈妈要出门<br>
                    去摘胡萝卜。<br>
                    在妈妈回家之前，<br>
                    不要开门<br>
                    让任何人进来。
                </div>
            </div>

            <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
                <div class=" text-white text-[1.2vw]">歌曲 2</div>
                <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                    亲爱的孩子们，<br>
                    请开门。<br>
                    妈妈回家了，<br>
                    快开门。<br>
                    妈妈已经回家了，<br>
                    请开门<br>
                    让妈妈进来。
                </div>
            </div>

            <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
                <div class=" text-white text-[1.2vw]">歌曲 3</div>
                <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                    我们是乖孩子，<br>
                    不能开门。<br>
                    你不是我们的妈妈，<br>
                    不能开门。<br>
                    在妈妈回家之前，<br>
                    不能开门<br>
                    让任何人进来。
                </div>
            </div>

            <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
                <div class=" text-white text-[1.2vw]">歌曲 4</div>
                <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                    我们是乖孩子，<br>
                    我们会开门。<br>
                    你是我们的妈妈，<br>
                    我们会开门。<br>
                    妈妈已经回家了，<br>
                    请开门<br>
                    让妈妈进来。
                </div>
            </div>

        </div>

        <button id="sound-btn" type="button"
            class="absolute left-[2.7%] top-[46%] w-[7.1vw] z-20">
            <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}"
                alt="Play" class="w-full">
        </button>

    </div>

    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>告诉孩子们，我们可以用说话或唱歌的方式讲故事。</li>
            <li>邀请孩子们观看用唱歌方式讲述的故事。</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>老师演唱，让孩子们聆听。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton" data-slide-audio="{{ asset('assets/audio/micet/n1/drama/class2/m1.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <div class="flex flex-col">
                <div class=" text-white text-[2vw]">歌曲 1</div>
                <h5 class="text-[2vw] text-[#f7b94a]">亲爱的孩子们， <br>
                    请锁好门。 <br>
                    妈妈要出门 <br>
                    去摘胡萝卜。 <br>
                    在妈妈回家之前， <br>
                    不要开门 <br>
                    让任何人进来。</h5>
            </div>
        </div>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>问孩子们：谁应该唱歌曲 1？（兔妈妈）</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>让孩子们发挥想象力，表演兔妈妈出门的场景。</li>
            <li>提出帮助孩子们思考和回忆故事的问题（例如：兔妈妈出门时带了什么？出门前她做了什么？）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>引导孩子们演唱并表演兔妈妈出门的场景。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>歌曲 2：播放音乐，老师跟着音乐的节拍演唱。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton" data-slide-audio="{{ asset('assets/audio/micet/n1/drama/class2/m1.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <div class="flex flex-col">
                <div class=" text-white text-[2vw]">歌曲 2</div>
                <h5 class="text-[2vw] text-[#f7b94a]">亲爱的孩子们， </br>
                    请开门。 </br>
                    妈妈回家了， </br>
                    快开门。 </br>
                    妈妈已经回家了， </br>
                    请开门 </br>
                    让妈妈进来。</h5>
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="12">
                <li>问孩子们：歌曲 2 应该在故事的什么时候唱？开头、中间还是结尾？（中间和结尾部分）</li>
            </ol>
        </div>

        <div class="flex flex-col items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="13">
                <li>问孩子们：在故事的不同部分，谁应该唱歌曲 2？
                    （中间部分：狼；结尾部分：兔妈妈）</li>
            </ol>
        </div>
        <div class="flex gap-5 items-center">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[25vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="14">
            <li>让孩子们发挥想象力，表演兔妈妈出门的场景。</li>
            <li>提出帮助孩子们思考和回忆故事的问题（例如：狼敲门时穿了什么？它的表情是怎样的？）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>引导孩子们演唱并表演狼敲门的场景。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="17">
            <li>让孩子们发挥想象力，表演兔妈妈回到家的场景。</li>
            <li>提出帮助孩子们思考和回忆故事的问题（例如：兔妈妈带了什么回家？她有没有拥抱小兔子？）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>引导孩子们演唱并表演兔妈妈回到家的场景。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>老师演唱，让孩子们聆听。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton" data-slide-audio="{{ asset('assets/audio/micet/n1/drama/class2/m1.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <div class="flex flex-col">
                <div class=" text-white text-[2vw]">歌曲 3</div>
                <h5 class="text-[2vw] text-[#f7b94a]"> 我们是乖孩子，<br>
                    不能开门。<br>
                    你不是我们的妈妈，<br>
                    不能开门。<br>
                    在妈妈回家之前，<br>
                    不能开门<br>
                    让任何人进来。
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="21">
                <li>问孩子们：歌曲 3 应该在故事的什么时候唱？开头、中间还是结尾？（中间部分）</li>
            </ol>
        </div>

        <div class="flex flex-col items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="22">
            <li>问孩子们：谁应该唱歌曲 3？（小兔子）</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="23">
            <li>让孩子们发挥想象力，表演小兔子听到敲门声的场景。</li>
            <li>提出帮助孩子们思考和回忆故事的问题（例如：妈妈离开后小兔子做了什么？听到敲门声时他们有什么反应？）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[50vw]" start="25">
            <li>引导孩子们演唱并表演小兔子听到敲门声的场景。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>老师演唱，让孩子们聆听。</li>
        </ol>
        <div class="flex items-start gap-[1vw]">

            <button class="w-[4vw]" id="soundButton" data-slide-audio="{{ asset('assets/audio/micet/n1/drama/class2/m1.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <div class="flex flex-col">
                <div class=" text-white text-[2vw]">歌曲 4</div>
                <h5 class="text-[1.7vw] text-[#f7b94a]"> 我们是乖孩子，<br>
                    我们是乖孩子，<br>
                    我们会开门。<br>
                    你是我们的妈妈，<br>
                    我们会开门。<br>
                    妈妈已经回家了，<br>
                    请开门<br>
                    让妈妈进来。
            </div>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="27">
                <li>问孩子们：歌曲 4 应该在故事的什么时候唱？开头、中间还是结尾？（结尾部分）</li>
            </ol>
        </div>

        <div class="flex flex-col items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
                <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
            </div>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>问孩子们：谁应该唱歌曲 4？（小兔子）</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>让孩子们发挥想象力，表演小兔子为妈妈开门的场景。</li>
            <li>提出帮助孩子们思考和回忆故事的问题（例如：小兔子见到妈妈回家开心吗？他们有没有拥抱妈妈？）。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>引导孩子们演唱并表演小兔子为妈妈开门的场景。</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>让孩子们扮演小兔子，老师扮演兔妈妈和狼。让孩子们演唱并表演故事。</li>
        </ol>
    </div>

    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">课堂活动 4：唱故事</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">结束活动</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>问孩子们：今天你们是怎样讲故事的？你们喜欢这样讲故事吗？</li>
            </ul>

            <h3 class="ptitle">评估</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>能够说出我们可以用唱歌的方式讲故事。</li>
                <li>能够在表演故事时发挥想象力。</li>
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
                currentAudio = null;
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
