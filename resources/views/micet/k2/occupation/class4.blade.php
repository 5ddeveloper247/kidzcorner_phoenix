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
        text-align: left;
    }
</style>
@endpush

@section('content')

{{-- panel 1 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c1.png') }}" class="h-[8vw]" />
    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[45vw]">
        <li>To understand different occupations in a space-port and the nature of various jobs including the exploration of outer space.</li>
        <li>To understand the importance of cooperation.</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Distribute letters to parents, requesting for materials related to the theme of "Out in space" such as books or photographs.
                "Out in Space" props box (refer to Activity 8).</li>
            <li>Invite people working in aerospace (including parents) to the kindergarten to explain briefly their job duties to the children. It is ideal to get them to wear their uniforms and carry their tools or instruments if any.</li>
        </ul>
    </div>
</div>


<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>
    <h3 class="ptitle ">prepration</h3>

    <ul class="list-disc panel-ul">
        <li>As the lesson proceeds, teacher introduces related vocabulary.</li>
    </ul>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask: "Who do we need to launch a spaceship?".</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c3.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Show picture of an astronaut and ask children: " Who is this?".</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c4.png') }}" class="w-[30vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Help the children understand that astronauts require stringent trainings before they go into space, such as:
            <ul class="list-disc">
                <li>
                    Astronauts need training in piloting the spaceship, and in using various instruments, etc.
                </li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c5.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Help the children understand that astronauts require stringent trainings before they go into space, such as:
            <ul class="list-disc">
                <li>
                    Since there is zero gravity in space, astronauts float in space. Thus, astronauts learn to float in water first which simulates floating in space.
                </li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c6.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Help the children understand that astronauts require stringent trainings before they go into space, such as:
            <ul class="list-disc">
                <li>
                    Since there is zero gravity in space, astronauts float in space. Thus, astronauts learn to float in water first which simulates floating in space.
                </li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c7.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Help the children understand that astronauts require stringent trainings before they go into space, such as:
            <ul class="list-disc">
                <li>
                    Space food are usually compressed in tubes like toothpastes. Astronauts squeeze the food into their mouths so the food will not "fly" away in zero gravity.
                </li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c8.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Discuss the process of how a spaceship is launched into space, such as:
            A spaceship is mounted on top of a rocket.
            <ul class="list-disc">
                <li>Before launch, mission control will start a "countdown" to check that the rocket, spaceship and all instruments are working properly before lift-off.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c9.png') }}" class="w-[30vw] h-[17vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Discuss the process of how a spaceship is launched into space, such as:
            A spaceship is mounted on top of a rocket.
            <ul class="list-disc">
                <li>When countdown reaches zero, the rocket and spaceship is launched.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c10.png') }}" class="w-[30vw] h-[20vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Discuss the process of how a spaceship is launched into space, such as:
            A spaceship is mounted on top of a rocket.
            <ul class="list-disc">
                <li>A rocket consists of stages, when the fuel in each stage is used up, the stage is separated and falls away. The next stage of the rocket is then ignited and pushes the spaceship further into space.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c11.png') }}" class="w-[30vw] h-[17vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Discuss the process of how a spaceship is launched into space, such as:
            A spaceship is mounted on top of a rocket.
            <ul class="list-disc">
                <li>The final rocket stage puts the spaceship into orbit around the earth.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c12.png') }}" class="w-[30vw] h-[20vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>As there is no air in space, an astronaut wears an air tight space suit with a space helmet, an oxygen-tank, gloves etc. when they spacewalk.
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c13.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Help the children understand that a team of space scientists, aerospace engineers, mission control staff, work together to have a successful space mission. Describe their job duties:
            <ul class="list-disc">
                <li>Mission control is the headquarter for the space mission.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c14.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Help the children understand that a team of space scientists, aerospace engineers, mission control staff, work together to have a successful space mission. Describe their job duties:
            <ul class="list-disc">
                <li>The staff at mission control communicate with the astronauts in the spaceship, provide guidance on navigation, exchange information and updates, and ensure the astronauts do not feel alone.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c14.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Help the children understand that a team of space scientists, aerospace engineers, mission control staff, work together to have a successful space mission. Describe their job duties:
            <ul class="list-disc">
                <li>The staff of mission control have different roles ranging from checking of equipment, monitoring of the astronauts' health, and communicating with the astronauts so on.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c14.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Help the children understand that a team of space scientists, aerospace engineers, mission control staff, work together to have a successful space mission. Describe their job duties:
            <ul class="list-disc">
                <li>The staff of mission control also use computers to calculate the position of the spaceship, its altitude, direction, speed and expected time and location of landing.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c14.png') }}" class="w-[30vw] h-[17vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Ask the children what is the process of landing. Discuss and help children understand that:
            <ul class="list-disc">
                <li>The spaceship first reduces its speed and points towards earth.</li>
                <li>As the spaceship approaches the ground, parachutes open to help it land.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c18.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Ask the children what is the process of landing. Discuss and help children understand that:
            <ul class="list-disc">
                <li>The spaceship first reduces its speed and points towards earth.</li>
                <li>As the spaceship approaches the ground, parachutes open to help it land.</li>
            </ul>
        </li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c19.png') }}" class="w-[30vw] h-[17vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Ask the children whether they know of other types of spaceships.</li>
        <li>Help them understand that there are different types of spaceships for different missions. We will now learn about some of them.</li>
    </ol>

</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Teacher asks: "What is this?"; "What's the difference between this and the spaceship we talked about earlier?"; "What does this look like?".</li>
        <li>Help the children understand that this is a space shuttle. It looks like an aeroplane. It launches like a rocket but lands like an aeroplane.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c20.png') }}" class="w-[30vw] h-[17vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="12">
        <li>Teacher enquires if children would like to go on a mission in a space shuttle.</li>
        <li>Click on the video and countdown together: 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, lift off!</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/occupation/class4/v1.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Ask the children what astronauts see when they look down on earth during lift off.</li>
        <li>Click on the video to observe what astronauts see during lift off into space.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/occupation/class4/v2.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>Teacher asks: "What is this that looks like a ball?".</li>
        <li>Click on the video to help children understand that the earth is rotating all the time in space and each round is one day.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/occupation/class4/v3.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="18">
        <li>Teacher asks: "What is this?".</li>
        <li>Explain that we have just arrived at the space station which enables astronauts to stay in space for many months.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c24.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="20">
        <li>The space shuttle has now docked at the space station.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c25.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="21">
        <li>Ask children: "Why does an astronaut wear a space suit?".</li>
        <li>Help children understand that there is no air in space. The space suit allows the astronaut to breathe and to move about in space.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c26.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="23">
        <li>Inform the children that our mission is complete and it is time to return to earth.</li>
        <li>Click on the video for the children to observe and experience how the space shuttle glides back to earth like a plane.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/occupation/class4/v4.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="25">
        <li>Ask the children whether the mission was fun and what they have learnt.</li>
        <li>Ask the children again whether they know of other types of spaceships and encourage them to explain.</li>
    </ol>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="27">
        <li>Ask the children: "What is this?"; and "What does it look like?".</li>
        <li>Explain that this is a lunar module, a spaceship which carries astronauts to the moon. Direct children's attention to its spider-like appearance.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c27.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="29">
        <li>Ask children: "What is this that looks like a ball?".</li>
        <li>Click on the video to help children understand that the moon is rotating all the time in space and each round made is one month.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/occupation/class4/v5.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="31">
        <li>Teacher informs the children that our new mission is to land on the moon.</li>
        <li>Click on the video for children to see what it looks like to fly towards the moon.</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/occupation/class4/v6.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="33">
        <li>Click on the video for the children to observe what the surface of the moon is like when the lunar module lands on the moon.</li>
        <li>Ask the children: "What are the differences between the surface of the moon and that of the earth?".</li>
    </ol>
    <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/k2/occupation/class4/v7.mp4') }}" type="video/mp4">
    </video>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="35">
        <li>Ask the children: "What do you think the astronaut is doing?".</li>
        <li>Help the children understand that the astronaut is getting out of the lunar module, climbing down the ladder onto the moon's surface.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c28.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="37">
        <li>Ask the children: "What is this?".</li>
        <li>Help the children understand that this is the first human footprint on the moon.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c29.png') }}" class="w-[30vw] h-[17vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="39">
        <li>Explain that astronauts use space probes to examine the surface of the moon.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c30.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="40">
        <li>Astronauts can use a moon buggy to travel great distance on the moon.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c31.png') }}" class="w-[30vw] h-[17vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="41">
        <li>Ask children: "What do you see?".</li>
        <li>Explain that it is what our earth looks like from the moon.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k2/occupation/class4/c31.png') }}" class="w-[30vw] h-[17vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="43">
        <li>Ask the children whether the mission was fun and what they have learnt.</li>
    </ol>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="44">
        <li>Teacher guides the children to complete the corresponding activity in the Thematic Activity Book.</li>
    </ol>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Children to role-play how the personnel at mission control communicate with the astronauts during count down to rocket launch.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to understand the different occupations and the job duties of the team in space exploration.</li>
            <li>Able to participate actively in discussion related to astronauts and space exploration.</li>
        </ul>
    </div>
</div>



{{-- panel 6 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 4: Out in Space</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Children to discuss what astronauts do in space. They will pretend to be astronauts performing space walk, eating space food, etc.</li>
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
        const returnURL = "{{ url('/micet/k1/playtime/index') }}";
        const doneURL = "{{ url('/micet/k1/playtime/index') }}";

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