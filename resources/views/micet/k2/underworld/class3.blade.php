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
            font-size: 2.2vw;
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
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c1.png') }}" class="h-[8vw]" />
        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>Identify different types of fish</li>
            <li>Identify three types of sea creatures: bony fish, cartilaginous fish and marine mammal</li>
            <li>Categorise sea creatures according to types</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start space-y-[2vw] h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <h3 class="ptitle mt-[5vw]">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ul>
    </div>

    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Click to play the video. Let the children recall the characteristics of a bony fish (it has bones,
                    scales, breathes through gills, swims with the help of fins, etc).</li>
            </ol>
        </div>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>

    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="2">
                <li>Ask children: Besides bony fish, what other types of fish do you know?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="3">
                <li>Ask Children: What is this?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c3.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="4">
                <li>Let the children discuss whether a shark is a bony fish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="5">
                <li>Ask children: Does a shark have scales?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Click to play the video. Guide children to understand that: <ul class="list-disc">
                    <li>
                        A shark looks sleek and smooth, but its skin is actually covered with scales that are different from
                        bony fishes.
                    </li>
                    <li>A shark's skin is rough like sand paper.</li>
                </ul>
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="7">
                <li>Ask children: How does a shark breathe?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Guide children to understand that: <ul class="list-disc">
                    <li>
                        Sharks do not breathe through gills but gill slits.
                    </li>
                    <li>A shark has five-seven gill slits on each side of its head.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Click to play the video. Let the children observe how a shark breathes in the water. (It breathes through
                gill slits.)
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="10">
                <li>Conclude with children: Sharks have scales that are very different from bony fishes and sharks do not
                    breathe through gills. Hence sharks are not bony fishes.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="11">
                <li>Ask Children: Do sharks have bones?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c4.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Guide children to understand that: <ul class="list-disc">
                    <li>
                        Unlike bony fishes that have a skeleton made of bones, sharks have a skeleton made of cartilage.
                    </li>
                    <li>Cartilage is different from bones. Bone is hard and not flexible whereas cartilage is soft and
                        flexible like a rubber tube.</li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c9.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="13">
                <li>Conclude with the children: Fishes with a skeleton made of cartilage are called cartilaginous fishes.
                    Hence, a shark is a cartilaginous fish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c6.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="14">
                <li>Inform children that cartilaginous fishes and bony fishes have one thing in common and that is they have
                    fins.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c7.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="15">
                <li>A shark swims in the same way as a bony fish, moving its tail fin from side to side to move through
                    water.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c8.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Click to play the video. Let the children observe how a shark swims in the water. (moves its tail fin from
                side to side to move forward)
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v4.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="17">
                <li>Ask children: What is this? Guide children to understand that some sharks lay eggs and their babies
                    hatch from the eggs.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c10.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Click to play the video. Let the children observe a newly laid shark egg (the developing baby shark is
                protected by the egg case).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v5.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Click to play the video. Let the children observe a 5 to 6 weeks old shark egg (the baby shark is moving
                inside the egg case).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v6.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Click to play the video. Let the children observe a shark egg after 9 weeks (the baby shark is now grey in
                colour, like an adult shark).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v7.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="21">
                <li>Ask children: Besides bony fishes and cartilaginous fishes, do you know of any other types of fish?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c11.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="22">
                <li>Ask children: What is this?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c12.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="23">
                <li>Let the children discuss whether a whale is a bony fish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="24">
                <li>Ask children: Do whales have scales?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="25">
                <li>Guide children to understand that a whale does not have scales. It has a thick layer of fat under its
                    skin to protect it from the cold water.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="26">
                <li>Hence, a whale is not a bony fish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="27">
                <li>Let the children discuss if a whale is a cartilaginous fish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="28">
                <li>Ask the children : Do whales have gill slits? How does a whale breathe?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="29">
                <li>Guide the children to know that a whale has no gill slits and it uses its lungs to breathe just like us.
                </li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="30">
                <li>Ask children: We know that we cannot breathe underwater. Can whales breathe underwater?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c13.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="31">
                <li>Guide children to understand that whales like us cannot breathe underwater. Whales can hold their breath
                    for hours underwater but when they need to breathe, they come up to the surface of the water and breathe
                    using their lungs, through their blowholes.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c18.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="32">
                <li>Ask children: Why is a blowhole on a whale's head? (convenient for the whale to rise to the surface of
                    water to breathe)</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c18.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>Click to play the video. Let the children observe how a whale breathes (Whales rise to the surface of the
                water. They open their blowholes and breathe air using their lungs, through blow holes).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v8.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="34">
                <li>Hence, a whale is not a cartilaginous fish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c18.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="35">
                <li>So what then are whales?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c11.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="36">
                <li>Ask children: What is in the circle? (It is a newly born baby whale.)</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c14.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="37">
                <li>Explain to the children that whales, like us, give birth to their young ones alive, instead of laying
                    eggs.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c14.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="38">
                <li>Guide children to also know that whales, just like us, produce milk to feed their babies.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c14.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="39">
                <li>Help children understand that humans are grouped as mammals, and whales are grouped as marine mammals.
                </li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c15.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="40">
                <li>Ask children: How does the tail fin of whales differs from that of the bony fish and the cartilaginous
                    fish?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c16.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="40">
                <li>Explain to the children: A whale has a horizontal tail fin that moves up and down to help the whale move
                    through water, while the bony and cartilaginous fishes have vertical tail fins that move side to side to
                    help them move through water.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c16.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="41">
                <li>Ask children: Do you think that the pectoral and tail fins of a whale are similar to the hands and feet
                    of humans? Inform the children that the bones of the whales' pectoral and tail fins are like the bones
                    of human hands and feet, but much bigger.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c17.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="42">
            <li>Click to play the video. Let the children observe how the whale breathes (it rises to the surface of water
                to breath through its blowhole) and swims (its tail fin moves up and down).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v8.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start">
            <ol class="list-decimal panel-ul w-[45vw]" start="43">
                <li>Let the children know that there are three main types of sea creatures that they have learnt today:
                    <ul class="list-disc">
                        <li>Bony fish</li>
                        <li>Cartilaginous fish</li>
                        <li>Marine mammal</li>
                    </ul>

                </li>
            </ol>
        </div>

    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="44">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        Do they have fins?
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c19.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="45">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        Do they have fins? (All have fins)
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c20.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="45">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        Do they have scales?
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c36.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="46">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        Do they breathe through gills?
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c19.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="46">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        Do they breathe through gills? (Bony fish breathe through gills, cartilaginous fish breathe through
                        gill slits and marine mammals breathe using lungs, through blowhole.)
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c37.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="47">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        How different are their tail fins?
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c19.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="47">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        How different are their tail fins? (Bony and cartilaginous fishes have vertical tail fins while
                        marine mammals have horizontal tail fins.)
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c21.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="48">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        How do they swim?
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c19.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="48">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        How do they swim? (Bony and cartilaginous fishes swim by moving their tail fins sideways while
                        marine mammals swims by moving their tail fins up and down.)
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c19.png') }}" class="w-[25vw]" />
    </div>




    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="49">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        How are the young born?
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c19.png') }}" class="w-[25vw]" />
    </div>




    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="49">
            <li>Have the children examine the similarities and differences among the three types of sea creatures: <ul
                    class="list-disc">
                    <li>
                        How are the young born? (Bony and cartilaginous fishes lay eggs and their babies hatch from the eggs
                        whereas marine mammals give birth to their young alive and produce milk to feed them.)
                    </li>
                </ul>
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c22.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="50">
            <li>Next, let the children categorise the following sea creatures into:<ul class="list-disc">
                    <li> Bony fish</li>
                    <li>Cartilaginous fish</li>
                    <li>Marine mammal</li>
                </ul>
            </li>
        </ol>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="51">
            <li>What animal is this? Is it a bony fish or a cartilaginous fish or a marine mammal? Why?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c23.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="52">
            <li>Click to play the video. Let the children observe how a dolphin swims in water (it moves its horizontal tail
                fin up and down to move through water).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v9.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="53">
            <li>Click to play the video. Let the children observe how a dolphin breathes (A dolphin cannot breathe under
                water, it needs to rise to the surface of water to breathe air using its lungs, through a blowhole on its
                head).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v10.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="53">
            <li>Click to play the video. Let the children observe how the dolphins breathe ( A Dolphin cannot breathe under
                water, it needs to rise to the surface of water to breathe air using its lungs, through a blowhole on its
                head).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v11.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="54">
            <li>Guide children to conclude: A dolphin is a marine mammal as it breathes air using its lungs, through a
                blowhole and swims by moving its tail fins up and down to move though water.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c24.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="55">
            <li>What animal is this? Is it a bony fish or a cartilaginous fish or a marine mammal? Why?
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c25.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="56">
            <li>Click to play the video. Let the children observe how the stingray breathes (A stingray breathes through its
                gill slits).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v12.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="57">
            <li>Guide children to conclude: A stingray is a cartilaginous fish as it breathes through gill slits.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c27.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="58">
            <li>What animal is this? Is it a bony fish or a cartilaginous fish or a marine mammal? Why?
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c26.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="59">
            <li>Click to play the video. Let the children observe how a lionfish breathes (it breathes through its gills).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v13.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="60">
            <li>Guide children to conclude: A lionfish is a bony fish as it breathes through gills.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c28.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="61">
            <li>What animal is this? Is it a bony fish or a cartilaginous fish or a marine mammal? Why? (Remind children of
                Chatter, the catfish in the story.)
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c29.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="62">
            <li>Click to play the video. Let the children observe how a catfish breathes (it breathes through its gills).
            </li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/underworld/class3/v14.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 2: What is a Fish?</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="63">
            <li>Guide children to conclude: A catfish is a bony fish as it breathes through gills.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/underworld/class3/c30.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col space-y-[2vw] justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="64">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: Types of Fishes</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let the children name some bony fishes, cartilaginous fishes and marine mammals.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to name some bony fishes, cartilaginous fishes and marine mammals.</li>
                <li>Able to categorise some sea creatures into the three types.</li>
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
            const returnURL = "{{ url('/micet/k2/underworld/index') }}";
            const doneURL = "{{ url('/micet/k2/underworld/index') }}";

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
