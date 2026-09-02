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

        title {
            color: #F7B94A;
            font-size: 2vw;
        }

        .ptitle {
            color: #f7b94a;
            font-size: 1.7vw;
        }

        .p-title {
            color: #ffffff;
            font-size: 1.25vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left !important;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>
        <div class="flex items-center gap-1">
        <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
    </div>


        <h3 class="title">Objectives:</h3>

        <ul class="list-disc panel-ul w-[40vw]">
            <li>Know about African Grassland</li>
            <li>Identify some herbivores and carnivores that live in the African Grassland</li>
            <li>Understand how carnivores hunt for food</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <div>
            <h3 class="title">Preparations</h3>

            <ol class="list-disc panel-ul">
                <li>Thematic Activity Book</li>
            </ol>
        </div>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <div>
            <h3 class="title">Lesson Development</h3>

            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Ask the children: What are the characteristics of this place? (e.g. vast grassland, bright sky) Are
                    there more trees or grass here?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c1.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children: What are the characteristics of this place? (e.g. vast grassland, bright sky) Are there
                more trees or grass here?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children: What are the characteristics of this place? (e.g. vast grassland, bright sky) Are there
                more trees or grass here?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c3.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask the children: What are the characteristics of this place? (e.g. vast grassland, bright sky) Are there
                more trees or grass here?</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c4.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask the children: What are the characteristics of this place? (e.g. waterhole, grassland, many animals,
                etc.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c5.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 8 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask the children: Do you know what place this is? Inform the children that these are pictures of the African
                Grassland.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c6.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 9 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Let the children discuss why it is called the African Grassland. (Teacher concludes this vast open
                grassland, with few trees and many animals is a place in Africa.)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c6.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 10 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Invite children to find the African Grassland on the world map.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c7.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 11 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Invite children to find the African Grassland on the world map.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c8.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 12 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Ask the children: What animals are these? (zebras); What are they doing? (eating grass)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c9.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 13 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask the children: What animals are these? (deer); What are they doing? (eating grass)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c10.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 14 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask the children: What animal is this? (rhinoceros); What is it doing? (eating grass)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c11.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 15 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Click to play the video. Let children observe the rhinoceros eating grass.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/animals/class1/v1.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 16 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask the children: What animals are these? (elephants); What are they doing? (eating grass)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c12.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 17 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Click to play the video. Let the children observe an elephant eating grass.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/animals/class1/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 18 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask the children: What animal is this? (buffalo); What is it doing? (eating grass)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c13.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 19 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask the children: What animal is this? (wildebeest); What is it doing? (eating grass)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c14.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 20 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask the children: What animal is this? (giraffe); What is it doing? (eating leaves)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c15.png') }}" class="h-[20vw]" />
    </div>


    {{-- panel 21 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Click to play the video. Let the children observe a giraffe eating leaves on a tree.</li>
        </ol>
        <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/animals/class1/v3.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 22 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Ask the children: What animal is this? (gorilla); What is it doing? (eating leaves)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c16.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 23 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Ask the children: What are these animals doing? (eating grass and leaves) Guide the children to understand
                that these are animals that eat plants and are called herbivores. They live in the African Grasslands.
                Encourage children to discuss the common characteristics of these animals (react quickly, sharp senses, fast
                runners, etc).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c17.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 24 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Ask the children: What animal is this? (lion); What is it doing? (eating meat)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c18.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 25 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Ask the children: What animals are these? (lioness); What are they doing? (eating meat)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c19.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 26 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Ask the children: What animal is this? (leopard); What is it doing? (eating meat)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c20.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 27 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Ask the children: What animal is this? (snake); What is it doing? (eating meat)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c21.png') }}" class="w-[27vw]" />
    </div>


    {{-- panel 28 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Ask the children: What animal is this? (crocodile); What is it doing? (eating meat)</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c22.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 29 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>Ask the children: What are these animals doing? (eating meat.) Guide children to understand that these
                animals eat meat and are called carnivores. They live in the African Grassland. Encourage children to
                discuss the common characteristics of these animals (fierce, sharp teeth, strong, fast runners etc).</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/animals/class1/c23.png') }}" class="h-[17vw]" />
    </div>


    {{-- panel 30 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>Let the children create a short story looking at the sequence of pictures. Let them say whether the deer and
                leopard are herbivores or carnivores. Guide children to understand that this is how the carnivores hunt for
                food.</li>
        </ol>
        <div class="flex flex-col items-center">
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c24.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c25.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex gap-[1vw]">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c27.png') }}" class="w-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 31 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>The deer are eating grass. > A leopard is looking at them.</li>
        </ol>
        <div class="flex flex-col items-center mt-[2vw] space-y-[.5vw]">
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c24.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c25.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c27.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c28.png') }}" class="w-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 32 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>The deer are eating grass. > A leopard is looking at them. > The leopards are chasing the deer.</li>
        </ol>
        <div class="flex flex-col items-center mt-[2vw] space-y-[.5vw]">
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c24.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c25.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c27.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c28.png') }}" class="w-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 33 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>The deer are eating grass. > A leopard is looking at them. > The leopards are chasing the deer. >A leopard
                catches a deer.</li>
        </ol>
        <div class="flex flex-col items-center mt-[2vw] space-y-[.5vw]">
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c24.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c25.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c27.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c28.png') }}" class="w-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 34 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>The deer are eating grass. > A leopard is looking at them. > The leopards are chasing the deer. >A leopard
                catches a deer.</li>
        </ol>
        <div class="flex flex-col items-center mt-[2vw] space-y-[.5vw]">
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c24.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c25.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c27.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c28.png') }}" class="w-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 35 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>The deer are eating grass. > A leopard is looking at them. > The leopards are chasing the deer. >A leopard
                catches a deer. > The leopard eats deer meat.</li>
        </ol>
        <div class="flex flex-col items-center mt-[2vw] space-y-[.5vw]">
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c24.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c25.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c26.png') }}" class="w-[10vw]" />
            </div>
            <div class="flex">
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c27.png') }}" class="w-[10vw]" />
                <img src="{{ asset('assets/images/micet/k2/animals/class1/c28.png') }}" class="w-[10vw]" />
            </div>
        </div>
    </div>


    {{-- panel 36 --}}
    <div class="phonics-panel flex flex-col justify-start h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>Guide children to complete the corresponding activities in the Thematic
                Activity Book.</li>
        </ol>
    </div>


    {{-- panel 37 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[1vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Let the children talk about the characteristics of the African Grassland.</li>
                <li>Let the children name some herbivores and carnivores that live in the African Grassland.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to state the characteristics of the African Grassland.</li>
                <li>Able to name some carnivores and herbivores that live in the African Grassland.</li>
                <li>Able to tell how carnivores hunt for food.</li>
            </ul>
        </div>
    </div>


    {{-- panel 38 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[4vw]">
        <h1 class="panel-title stroke">Classroom Activity 1: African Grassland</h1>

        <div class="text-start flex flex-col h-full">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Place some picture books about the African Grassland in the reading corner. Encourage children to read
                    the books . Let the children take note of the different animals that live in the African Grassland and
                    learn more about these animals.</li>
            </ul>
        </div>
    </div>


    {{-- ================================ --}}
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
            const returnURL = "{{ url('/micet/k2/animals/index') }}";
            const doneURL = "{{ url('/micet/k2/animals/index') }}";

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
