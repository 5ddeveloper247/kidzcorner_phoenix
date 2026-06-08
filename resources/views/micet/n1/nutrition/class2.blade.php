@extends('layout.master')
@section('title', 'Dynamic Presentation')

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
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Identify some food from the rice and noodles group</li>
            <li>Know that food from the meat and seafood group helps to
                build and strengthen our muscles for growing. </li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <div class="space-y-[2vw]">
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Thematic Activity Book</li>
                <li>Fish, prawn, chicken, pork and beef (let children observe
                    them while looking at the pictures)</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <div class="text-start space-y-[1vw]">
            <h3 class="ptitle">Lesson Development</h3>

            <ul class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: "Besides the rice and noodles group, what other food will you
                    eat everyday?"</li>
                <li>Tell children that they are going to identify another group of food that we
                    eat everyday.</li>
            </ul>
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Fish can be cooked with steam, such as steamed fish! Have you ever eaten
                steamed fish? Do you like to eat steamed fish?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c2.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]"> staemed fish</h5>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask children: “”How is fish steamed?””</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]"> fish</h5>
            </div>

            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />

            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c2.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]"> staemed fish</h5>
            </div>

        </div>
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Click on the video, have children look at the fish steaming process and talk
                about it.</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class2/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children: "What food can fish be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Fish can be cooked with oil, such as fried fish! Have you ever eaten fried
                fish? Do you like to eat fried fish?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c3.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">fried fish</h5>
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Fish can also be cooked on a grill pan, such as grilled fish! Have you ever
                eaten grilled fish? Do you like to eat grilled fish?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c4.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">griled fish</h5>
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">prawn</h5>
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Prawns can be cooked with steam, such as steamed prawns. Have you
                ever eaten steamed prawns? Do you like to eat steamed prawns?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c6.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">steamed prawns</h5>
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Prawns can be cooked with oil, such as stir-fried prawns. Have you ever
                eaten stir-fried prawns? Do you like to eat stir-fried prawns?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c7.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">stir-fried prawns</h5>
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Prawns can also be cooked with oil, such as fried prawns. Have you ever
                eaten fried prawns? Do you like to eat fried prawns?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c8.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">fried prawns</h5>
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Prawns can also be cooked on a grill pan, such as grilled prawns. Have
                you ever eaten a grilled prawn? Do you like to eat grilled prawns?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c9.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">grilled prawns</h5>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[17vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Chicken can be cooked in an oven, such as roasted chicken. Have you
                ever eaten roasted chicken? Do you like to eat roasted chicken?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c10.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">roasted chicken</h5>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Ask children: “”How is chicken roasted?””</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="w-[20vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
            </div>

            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />

            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c10.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">roasted chicken</h5>
            </div>
        </div>
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Click on the video, have children look at the chicken roasting process and
                talk about it.</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class2/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Ask children: "What other food can chicken be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="w-[20vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Chicken can be cooked with oil, such as fried chicken. Have you ever
                eaten fried chicken? Do you like to eat fried chicken?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c11.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">fried chicken</h5>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Chicken can also be cooked in a clay pot, such as clay pot chicken. Have
                you ever eaten clay pot chicken? Do you like to eat clay pot chicken?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c12.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">clay pot chicken</h5>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Chicken can also be cooked in a clay pot, such as clay pot chicken. Have
                you ever eaten clay pot chicken? Do you like to eat clay pot chicken?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c12.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">clay pot chicken</h5>
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "What food can it be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">pork</h5>
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>Pork can be cooked on fire, such as roasted pork. Have you ever eaten
                roasted pork? Do you like to eat roasted pork?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c14.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">roasted pork</h5>
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>Pork can also be cooked in a pot with water, such as pork soup. Have you
                ever tried pork soup? Do you like its taste?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c15.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">pork soup</h5>
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>Pork can be cooked in a pot with gravy, such as braised pork trotters. Have
                you ever eaten them? Do you like to eat them?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c16.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">braised pork trotters</h5>
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>A whole pig can be roasted on fire, such as roasted pig. Have you ever
                seen a roasted pig? Do you like eating it?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c17.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">roasted pig</h5>
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>Ask children: "What is the difference between the colour of beef and
                pork?".</li>
            <li>Tell children that beef is red while pork is pink.</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>

            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">prok</h5>
            </div>
        </div>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>Ask children: "What food can beef be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
    </div>


    {{-- panel 31 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>Beef can be cooked with oil, such as fried steaks. Have you ever eaten
                fried steaks? Do you like to eat fried steaks?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c19.png') }}" class="w-[30vw]" />
        <h5 class="text-[#f7b94a] text-[1.7vw]">beef steak</h5>
    </div>


    {{-- panel 32 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>Ask children: “””How is steak pan-fried””</li>
        </ol>

        <div class="flex items-center gap-[2vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>
            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]" />
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c19.png') }}" class="w-[25vw]" />
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef steak</h5>
            </div>
        </div>
    </div>


    {{-- panel 33 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>Click on the video, have children look at the steak pan-frying process
                and talk about it.</li>
        </ol>

        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/n1/nutrition/class2/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="34">
            <li>Ask children: "What food can beef be made into?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[25vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
    </div>


    {{-- panel 35 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="35">
            <li>Beef can be made into a patty and fried to be the filling of a hamburger.
                Have you ever eaten a hamburger? Do you like to eat hamburgers?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c20.png') }}" class="h-[17vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">hamburger</h5>
    </div>


    {{-- panel 36 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="36">
            <li>Ask children: "What is this?" "Have you seen it before?" "What is its colour
                and shape?" "Where does it come from?"</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[17vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
    </div>


    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="37">
            <li>An egg comes from a hen.</li>
        </ol>

        <div class=" flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[20vw]">

            <img src="{{ asset('assets/images/micet/n1/nutrition/class1/arrow.png') }}" class="w-[1.5vw]">

            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c22.png') }}" class="w-[25vw]">

        </div>
    </div>


    {{-- panel 38 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="38">
            <li>Eggs can be cooked with oil, such as fried eggs. Have you ever eaten fried
                eggs? Do you like to eat fried eggs?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c23.png') }}" class="w-[30vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
    </div>


    {{-- panel 39 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="39">
            <li>Eggs can be cooked with water, such as hard-boiled eggs. Have you ever
                eaten hard-boiled eggs? Do you like to eat hard-boiled eggs?</li>
        </ol>

        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c24.png') }}" class="w-[30vw]">
        <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
    </div>


    {{-- panel 40 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="40">
            <li>Have children name these food items.</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">prawn</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">pork</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>
        </div>
    </div>


    {{-- panel 41 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="41">
            <li>Tell children that food from the sea is called seafood.</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">prawn</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">pork</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>
        </div>
    </div>


    {{-- panel 42 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="42">
            <li>Have children point to the seafood.</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">prawn</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">pork</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>
        </div>
    </div>


    {{-- panel 43 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="43">
            <li>Tell children that fish and prawn from the sea are known as seafood.</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">prawn</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">pork</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>
        </div>
    </div>


    {{-- panel 44 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="44">
            <li>Tell children that besides seafood, this food group also includes chicken,
                pork, beef and egg, that's why this food group is called the meat and
                seafood group.</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">prawn</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">pork</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>
        </div>
    </div>


    {{-- panel 45 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="45">
            <li>Ask children: “”Where can we buy food from the meat and seafood group?””</li>
        </ol>

        <div class="grid grid-cols-3 gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c1.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">fish</h5>
            </div>
            <div>
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c5.png') }}" class="w-[15vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">prawn</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c21.png') }}" class="h-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">egg</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c25.png') }}" class="h-[7vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">chicken</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c13.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">pork</h5>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c18.png') }}" class="w-[10vw]">
                <h5 class="text-[#f7b94a] text-[1.7vw]">beef</h5>
            </div>
        </div>
    </div>


    {{-- panel 46 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="46">
            <li>Look, we can buy them from the supermarket.</li>
        </ol>

        <div class="flex items-center">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c26.png') }}" class="w-[25vw]">
            <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c27.png') }}" class="w-[27vw]">
        </div>
    </div>


    {{-- panel 47 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="47">
            <li>Ask children: "Do you know why we need to eat from the meat and
                seafood group everyday?" Encourage children to guess boldly, teacher
                assists when needed.</li>
            <li>Tell children that food from the meat and seafood group helps to build and
                strengthen our muscles for growing.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/n1/nutrition/class2/c28.png') }}" class="h-[15vw]">
    </div>


    {{-- panel 49 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="49">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 50 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Have children take turns to talk about their favourite food
                    from the meat and seafood group and give a reason.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name some food from the meat and seafood group.</li>
                <li> Able to know that food from the meat and seafood group helps to build
                    and strengthen our muscles for growing.</li>
            </ul>
        </div>
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col items-center justify-start h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 2: Meat and Seafood Group</h1>

        <div class="text-start">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>At home, have children spot food from the meat and seafood
                    group when having dinner and tell their parents about the benefit
                    of eating them. Back in the class, have children take turns to share
                    what food they had from the meat and seafood group.</li>
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
            const returnURL = "{{ url('/micet/n1/nutrition/index') }}";
            const doneURL = "{{ url('/micet/n1/nutrition/index') }}";

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


        // PANEL SYSTEM
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const tryAgainPanel = document.getElementById('tryAgain');
            const wellDonePanel = document.getElementById('wellDone');
            const retryBtn = document.getElementById('retry');
            const closeBtn = document.getElementById('close');

            // Get all letter buttons by ID
            const falseLetters = document.querySelectorAll('[id="false"]');
            const trueLetters = document.querySelectorAll('[id="true"]');

            // Create audio elements
            const tryAgainSound = new Audio('{{ asset('assets/audio/phonics_audio/tryagain.mp3') }}');
            const wellDoneSound = new Audio('{{ asset('assets/audio/phonics_audio/welldone.mp3') }}');

            // Function to show panel and play sound automatically
            function showPanelWithSound(panel, audioElement) {
                panel.style.display = 'flex';
                audioElement.currentTime = 0;
                audioElement.play().catch(err => console.log('Audio play failed:', err));
            }

            // Handle FALSE letter clicks (show try again panel with sound)
            falseLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(tryAgainPanel, tryAgainSound);
                });
            });

            // Handle TRUE letter click (show well done panel with sound)
            trueLetters.forEach(letter => {
                letter.addEventListener('click', function(e) {
                    e.preventDefault();
                    showPanelWithSound(wellDonePanel, wellDoneSound);
                });
            });

            // Handle Retry button - close panel and stay on same slide
            retryBtn.addEventListener('click', function(e) {
                e.preventDefault();
                tryAgainPanel.style.display = 'none';
                tryAgainSound.pause();
                tryAgainSound.currentTime = 0;
            });

            // Handle Close button - redirect to route
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                wellDoneSound.pause();
                wellDoneSound.currentTime = 0;
                window.location.href = '{{ url('/phonics_l1/letter_b') }}?view=phonics';
            });
        });
    </script>
@endpush
