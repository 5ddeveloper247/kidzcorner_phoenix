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
            font-size: 2vw;
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
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 2)</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/n1/mybody/class1/c1.png') }}" class="h-[12vw]" />
            <img src="{{ asset('assets/images/micet/n1/mybody/class2/c1.png') }}" class="h-[12vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Understand where some of the common food comes from</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col items-center space-y-[3vw] h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 2)</h1>

        <div>
            <h3 class="ptitle">Preparations</h3>

            <ul class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ul>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask children: What fruit is this? Where does it come from?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c2.png') }}" class="h-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c3.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c5.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Click to play the video. Ask children to describe the process of cooking rice.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/nutrition/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Ask children: What fruit is this? Where does it come from?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c6.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Show the children another picture of food. Ask children: What food is this? Where does it come from?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c7.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c8.png') }}" class="h-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c9.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c10.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c11.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c12.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c13.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Click to play the video. Ask children to describe the process ofbaking bread.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/nutrition/class3/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask children: What fruit is this? Where does it come from?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c14.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c15.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c16.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c17.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Click to play the video. Ask children to describe the process of steaming a fish.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/nutrition/class3/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Ask children: What fruit is this? Where does it come from?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c18.png') }}" class="w-[28vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c19.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c20.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c21.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>Click to play the video. Ask children to describe the process of preparing meatballs spaghetti.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/nutrition/class3/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>Ask children: What fruit is this? Where does it come from?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c22.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c23.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c24.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c25.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>Click to play the video. Ask children to describe the process of roasting a chicken.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/nutrition/class3/v5.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>Ask children: What fruit is this? Where does it come from?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c26.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c27.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c28.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c29.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>Ask children: What fruit is this? Where does it come from?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c30.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="34">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c31.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="35">
            <li>Show the children the picture of the food source.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c32.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="36">
            <li>Show the children the picture of the food source (milk is pasteurised at high temperature for the purpose of
                killing germs).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c33.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="37">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c34.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="38">
            <li>Ask children: What fruit is this? Where does it come from?</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c35.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c36.png') }}" class="h-[20vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="39">
            <li>Show the children the picture of the food source and the food.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c30.png') }}" class="w-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c35.png') }}" class="w-[20vw]" />
        </div>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="40">
            <li>Show the children the picture of the food source and the food. Help the children understand the relationship
                between the food source and its related food.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/nutrition/class3/c37.png') }}" class="h-[15vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="41">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Ask children to give more examples of food items and their sources.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name the food sources of some of the common food.</li>
            </ul>
        </div>
    </div>


    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[3vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Where Does Food Come From? (Part 1)</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Encourage the children to collect pictures of some food sources and their products, bring them to school
                    and share the information with their classmates.</li>
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
            const returnURL = "{{ url('/micet/k2/nutrition/index') }}";
            const doneURL = "{{ url('/micet/k2/nutrition/index') }}";

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
