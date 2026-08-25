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
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/k2/earth/class2/b1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/k2/earth/class2/b2.png') }}" class="h-[8vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>To learn about the geography of the Earth's physical environment.</li>
        <li>To enhance observation skills.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col items-center space-y-[5vw] h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book/ Drawing Papers</li>
            <li>A large sheet of Paper</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children: What do the blue parts of the map represent? (oceans)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/earth/class2/c1.png') }}" class="h-[20vw]" />
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Ask the children if they have been to the beach. Have the children who have been to the beach describe the ocean. Guide them in understanding that the ocean is vast and stretches to the horizon.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c2.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Ask the children: Are there more ocean or land on this map?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Guide the children to understand that there are in fact more ocean than land on Earth.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Inform the children that the land on Earth is divided into continents. For convenience, scientists have divided the Earth into seven continents.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c3.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Ask the children: Which continent do we live on? (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c3.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Inform the children that we live in Asia.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c4.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Ask the children: Which part of Asia do we live in? (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c4.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Ask the children: Which part of Asia do we live in? (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c5.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Teacher to show the children where they live (within Asia) on the map.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c6.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Ask the children: What is the circled piece of land in the ocean called? (island)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c7.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Inform the children that a piece of land, smaller than a continent, which is completely surrounded by water (the ocean) is called an island.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c8.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Ask the children: Where is the largest island on Earth?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c1.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Inform the children that the largest island on Earth is Greenland. Ask them why it is white in colour.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c9.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="15">
        <li>Inform the children that Greenland appears white in colour as it is covered with thick snow throughout the year.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c9.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>Inform the children that Greenland appears white in colour as it is covered with thick snow throughout the year.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c10.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="17">
        <li>A group of islands in the sea is called an archipelago. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c11.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="18">
        <li>A group of islands in the sea is called an archipelago.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c12.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="19">
        <li>Ask the children: What do the brown parts of the map represent? (desert)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c13.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="20">
        <li>Ask the children: What is a desert? (a huge piece of dry and hot sandy land). What are some characteristics of a desert? (golden colour, very few plants, difficult to find water etc).</li>
    </ol>
    <div class=" text-white gap-5">
        <img src="{{ asset('assets/images/micet/k2/earth/class2/c14.png') }}" class="h-[20vw]" />
        <h3>desert</h3>
    </div>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="21">
        <li>Ask the children: Where is the largest desert on Earth?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c1.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="22">
        <li>Let the children know that the largest desert on Earth is in Africa and it is called the Sahara desert.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c15.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="23">
        <li>Let's see what is in this part of the map.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c16.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="24">
        <li>Ask the children: What are the arrows pointing to on this map ? (river)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c17.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="25">
        <li>Ask the children: Have you seen a river? Where does the water come from? Where does the water flow to? Have them discuss the importance of rivers.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c18.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="26">
        <li>Click on the video and have the children observe the characteristics of a river.</li>
    </ol>
    <video class="h-[17vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/earth/class2/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="27">
        <li>Ask the children: Where is the longest river on Earth?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="28">
        <li>Let the children know that the Nile is the longest river on Earth. </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c19.png') }}" class="h-[20vw]" />
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="29">
        <li>Let the children know that the Nile is the longest river on Earth.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c20.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="30">
        <li>Ask the children: What are the circled parts on the map? (lakes)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c21.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="31">
        <li>Explain to the children that lakes are bodies of water surrounded by land.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c22.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="32">
        <li>Ask the children: What is the difference between a lake and an island?</li>
    </ol>
    <div class="flex flex-col gap-5 items-center">
        <img src="{{ asset('assets/images/micet/k2/earth/class2/c23.png') }}" class="h-[20vw]" />
        <div class="flex gap-50 text-white text-[2vw]">
            <h3>lake</h3>
            <h3>island</h3>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="33">
        <li>Guide the children to understand that a lake is surrounded by land while an island is surrounded by water.</li>
    </ol>
    <div class="flex flex-col gap-5 items-center">
        <img src="{{ asset('assets/images/micet/k2/earth/class2/c23.png') }}" class="h-[20vw]" />
        <div class="flex gap-50 text-white text-[2vw]">
            <h3>lake</h3>
            <h3>island</h3>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="34">
        <li>Ask the children: Where is the largest lake on Earth?</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c1.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="35">
        <li>Let the children know that the Caspian Sea is the largest lake on Earth (although it is called "Sea" by name, by scientific definition, it is actually a lake).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c24.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="36">
        <li>Let the children know that the Caspian Sea is the largest lake on Earth (although it is called "Sea" by name, by scientific definition, it is actually a lake) .</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c25.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="37">
        <li>Ask the children if they have seen waterfalls. Invite those that have seen waterfalls to describe what they look like. Encourage the children who have knowledge of waterfalls to share with the class.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="38">
        <li>Ask the children if they have seen waterfalls. Invite those that have seen waterfalls to describe what they look like. Encourage the children who have knowledge of waterfalls to share with the class.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c26.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="39">
        <li>Inform the children that the Niagara Falls is one of the most magnificent waterfalls on Earth. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c27.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="40">
        <li>Inform the children that the Niagara Falls is one of the most magnificent waterfalls on Earth. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c28.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="41">
        <li>Inform the children that the Niagara Falls is one of the most magnificent waterfalls on Earth. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c29.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="42">
        <li>Ask the children if they have ever climbed a hill or mountain before. Invite the children who had the experience to share with the class.</li>
    </ol>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="43">
        <li>Encourage the children to explain why some parts of the mountain are white while some are green. Guide the children to understand that the temperature at the top of the mountain is lower and so it is covered with white snow. The temperature at the foot of the mountain is higher and so it is covered with green plants.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c30.png') }}" class="h-[15vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="44">
        <li>Inform the children that Mount Everest is the highest mountain on Earth. It is white as it is covered with snow throughout the year. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c31.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="45">
        <li>Inform the children that Mount Everest is the highest mountain on Earth. It is white as it is covered with snow throughout the year. (see next slide)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c32.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="46">
        <li>Inform the children that Mount Everest is the highest mountain on Earth. It is white as it is covered with snow throughout the year.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/earth/class2/c33.png') }}" class="h-[20vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="47">
        <li>Ask the children: What is a volcano? Have you seen a volcanic eruption on television? What is the difference between a volcano and a mountain? (a volcano is a mountain that erupts) Invite the children who have knowledge of volcanoes to share with the class.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="48">
        <li>Share with the children some information about volcanoes. E.g. There are active and extinct volcanoes. When a volcano erupts, it throws out thick ash clouds and red-hot magma.</li>
    </ol>
    <div class="flex gap-5">
        <img src="{{ asset('assets/images/micet/k2/earth/class2/c34.png') }}" class="h-[20vw]" />
        <img src="{{ asset('assets/images/micet/k2/earth/class2/c35.png') }}" class="h-[20vw]" />
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="49">
        <li>Guide the children to complete the corresponding activity in the Thematic Activity Book.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Take out the large sheet of paper. Encourage the children to recall the different landforms learnt in the lesson. Teacher draws them on the large sheet of paper and lists (or draw) their characteristics.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to name at least four different landforms on Earth.</li>
            <li>Able to identify the following pictures: island, desert, lake, river, mountain, volcano and waterfall.</li>
        </ul>
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: Different Landforms</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Children to find information on other landforms at home and share with classmates.</li>
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
        const returnURL = "{{ url('/micet/k2/earth/index') }}";
        const doneURL = "{{ url('/micet/k2/earth/index') }}";

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

        // VIDEO FUNCTIONS

        function stopAllVideos() {
            document.querySelectorAll(".phonics-panel video").forEach(video => {
                video.pause();
                video.currentTime = 0;
            });
        }


        function playSlideAudio(slideIndex) {
            // Stop any currently playing audio
            stopCurrentAudio();

            stopAllVideos();

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


            stopAllVideos();

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