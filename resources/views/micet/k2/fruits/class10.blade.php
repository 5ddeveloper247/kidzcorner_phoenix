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
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>
    <img src="{{ asset('assets/images/micet/k1/fruits/class10/c1.png') }}" class="h-[8vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Extend the understanding of the characteristics of fruits</li>
        <li>Use the process of elimination to deduce the final answer</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[3vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>
    <div>
        <h3 class="ptitle">Preparations</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Thematic Activity Book</li>
        </ol>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Let the children recall the story "Little Seeds
                Find Their Mummy". Emphasise to the children
                how in the story, the seeds use the different
                clues to find their mummy.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Invite the children to a game where they will help the little seeds find their mummies. Tell the children that they are going to be given some clues and they have to find the fruit mummy, based on the clues.</li>
        <li>Reveal the clues ,one at a time, to describe the characteristics of a mystery fruit. Guide children to think of the possible answers. Let them use their deductive reasoning skills to get to the right answer.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Reveal the first clue. Guide the children to think of all possible fruits that fit this description.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit I <br>
        Clue I: It is round.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Reveal the second clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit I <br>
        Clue I: It is round. <br>
        Clue 2: It bears fruits on the trees.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Reveal the third clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit I <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is soft.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Reveal the fourth clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit I <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is soft. <br>
        Clue 4: The skin is not smooth.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Reveal the fifth clue. Guide the children to use their deductive reasoning skills and come to the final answer.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit I <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is soft. <br>
        Clue 4: The skin is not smooth. <br>
        Clue 5: It is orange in colour.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Let the children share their answer with their classmates to check if it is correct.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit I <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is soft. <br>
        Clue 4: The skin is not smooth. <br>
        Clue 5: It is orange in colour.<br>
        (orange)
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Let the children reconfirm their answer by referring back to all the five clues.</li>
    </ol>
    <div class="grid grid-cols-2 gap-2">
        <h2 class="text-white text-xl text-justify">
            Fruit I <br>
            Clue I: It is round.<br>
            Clue 2: It bears fruits on the trees.<br>
            Clue 3: It is soft. <br>
            Clue 4: The skin is not smooth. <br>
            Clue 5: It is orange in colour.<br>
        </h2>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/micet/k1/fruits/class10/c2.png') }}" class="w-[15vw]" />
            <h2 class="text-white text-xl">(orange)</h2>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Reveal the first clue. Guide the children to think of all possible fruits that fit this description.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 2 <br>
        Clue I: It is round.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Reveal the second clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 2 <br>
        Clue I: It is round. <br>
        Clue 2: It bears fruits on the trees.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Reveal the third clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 2 <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is hard.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Reveal the fourth clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 2 <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is hard. <br>
        Clue 4: The skin is not smooth.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Reveal the fifth clue. Guide the children to use their deductive reasoning skills and come to the final answer.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 2 <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is hard.<br>
        Clue 4: The skin is smooth.<br>
        Clue 5: It is red or green in colour.<br>
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>Let the children share their answer with their classmates to check if it is correct.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 2 <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: It is hard.<br>
        Clue 4: The skin is smooth.<br>
        Clue 5: It is red or green in colour.<br>
        (apple)
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Let the children reconfirm their answer by referring back to all the five clues.</li>
    </ol>
    <div class="grid grid-cols-2 gap-2">
        <h2 class="text-white text-xl text-justify">
            Fruit 2 <br>
            Clue I: It is round.<br>
            Clue 2: It bears fruits on the trees.<br>
            Clue 3: It is hard.<br>
            Clue 4: The skin is smooth.<br>
            Clue 5: It is red or green in colour.<br>
        </h2>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/micet/k1/fruits/class10/c3.png') }}" class="w-[15vw]" />
            <h2 class="text-white text-xl">(apple)</h2>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="18">
        <li>Reveal the first clue. Guide the children to think of all possible fruits that fit this description.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 3 <br>
        Clue I: It is round.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="19">
        <li>Reveal the second clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 3 <br>
        Clue I: It is round. <br>
        Clue 2: It is small.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="20">
        <li>Reveal the third clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 3<br>
        Clue I: It is round.<br>
        Clue 2: It is small.<br>
        Clue 3: Its flesh is soft and transparent.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="21">
        <li>Reveal the fourth clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 3 <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: Its flesh is soft and transparent. <br>
        Clue 4: It is soft and smooth.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="22">
        <li>Reveal the fifth clue. Guide the children to use their deductive reasoning skills and come to the final answer.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 3 <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: Its flesh is soft and transparent. <br>
        Clue 4: It is soft and smooth. <br>
        Clue 5: It is green or purple in colour.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="23">
        <li>Let the children share their answer with their classmates to check if it is correct.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 3 <br>
        Clue I: It is round.<br>
        Clue 2: It bears fruits on the trees.<br>
        Clue 3: Its flesh is soft and transparent. <br>
        Clue 4: It is soft and smooth. <br>
        Clue 5: It is green or purple in colour. <br>
        (grape)
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="24">
        <li>Let the children reconfirm their answer by referring back to all the five clues.</li>
    </ol>
    <div class="grid grid-cols-2 gap-2">
        <h2 class="text-white text-xl text-justify">
            Fruit 3 <br>
            Clue I: It is round.<br>
            Clue 2: It bears fruits on the trees.<br>
            Clue 3: Its flesh is soft and transparent. <br>
            Clue 4: It is soft and smooth. <br>
            Clue 5: It is green or purple in colour. <br>

        </h2>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/micet/k1/fruits/class10/c4.png') }}" class="w-[15vw]" />
            <h2 class="text-white text-xl">(grape)</h2>
        </div>
    </div>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="25">
        <li>Reveal the first clue. Guide the children to think of all possible fruits that fit this description.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 4 <br>
        Clue I: It is big.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="26">
        <li>Reveal the second clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 4<br>
        Clue I: It is big.<br>
        Clue 2: It bears fruits on the ground.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="27">
        <li>Reveal the third clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 4<br>
        Clue I: It is big.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: It is hard and smooth.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="28">
        <li>Reveal the fourth clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 4<br>
        Clue I: It is big.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: It is hard and smooth.<br>
        Clue 4: Its flesh is red or yellow in colour.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="29">
        <li>Reveal the fifth clue. Guide the children to use their deductive reasoning skills and come to the final answer.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 4<br>
        Clue I: It is big.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: It is hard and smooth.<br>
        Clue 4: Its flesh is red or yellow in colour.<br>
        Clue 5: It is round or oval-shaped.

    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="30">
        <li>Let the children share their answer with their classmates to check if it is correct.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 4<br>
        Clue I: It is big.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: It is hard and smooth.<br>
        Clue 4: Its flesh is red or yellow in colour.<br>
        Clue 5: It is round or oval-shaped.<br>
        (watermelon)
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="31">
        <li>Let the children reconfirm their answer by referring back to all the five clues.</li>
    </ol>
    <div class="grid grid-cols-2 gap-2">
        <h2 class="text-white text-xl text-justify">
            Fruit 4<br>
            Clue I: It is big.<br>
            Clue 2: It bears fruits on the ground.<br>
            Clue 3: It is hard and smooth.<br>
            Clue 4: Its flesh is red or yellow in colour.<br>
            Clue 5: It is round or oval-shaped.
        </h2>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/micet/k1/fruits/class10/c5.png') }}" class="w-[15vw]" />
            <h2 class="text-white text-xl">(watermelon)</h2>
        </div>
    </div>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="32">
        <li>Reveal the first clue. Guide the children to think of all possible fruits that fit this description.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 5 <br>
        Clue I: It is round.

    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="33">
        <li>Reveal the second clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 5 <br>
        Clue I: It is round. <br>
        Clue 2: It is small.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="34">
        <li>Reveal the third clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 5<br>
        Clue I: It is round.<br>
        Clue 2: It is small.<br>
        Clue 3: Its flesh is soft and transparent.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="35">
        <li>Reveal the fourth clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 5<br>
        Clue I: It is round.<br>
        Clue 2: It is small.<br>
        Clue 3: Its flesh is soft and transparent.<br>
        Clue 4: Its skin is rough.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="36">
        <li>Reveal the fifth clue. Guide the children to use their deductive reasoning skills and come to the final answer.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 5<br>
        Clue I: It is round.<br>
        Clue 2: It is small.<br>
        Clue 3: Its flesh is soft and transparent.<br>
        Clue 4: Its skin is rough.<br>
        Clue 5: It is red in colour.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="37">
        <li>Let the children share their answer with their classmates to check if it is correct.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 5<br>
        Clue I: It is round.<br>
        Clue 2: It is small.<br>
        Clue 3: Its flesh is soft and transparent.<br>
        Clue 4: Its skin is rough.<br>
        Clue 5: It is red in colour.<br>
        (lychee)
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="38">
        <li>Let the children reconfirm their answer by referring back to all the five clues.</li>
    </ol>
    <div class="grid grid-cols-2 gap-2">
        <h2 class="text-white text-xl text-justify">
            Fruit 5<br>
            Clue I: It is round.<br>
            Clue 2: It is small.<br>
            Clue 3: Its flesh is soft and transparent.<br>
            Clue 4: Its skin is rough.<br>
            Clue 5: It is red in colour.
        </h2>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/micet/k1/fruits/class10/c6.png') }}" class="w-[15vw]" />
            <h2 class="text-white text-xl">(lychee)</h2>
        </div>
    </div>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="39">
        <li>Reveal the first clue. Guide the children to think of all possible fruits that fit this description.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 6 <br>
        Clue I: It is medium sized.

    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="40">
        <li>Reveal the second clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 6 <br>
        Clue I: It is medium sized. <br>
        Clue 2: It bears fruits on the ground.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="41">
        <li>Reveal the third clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 6<br>
        Clue I: It is medium sized.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: Its skin is hard and wrinkled.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="42">
        <li>Reveal the fourth clue. Guide the children to use the process of elimination: after each clue, eliminate fruits that do not meet the criteria.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 6<br>
        Clue I: It is medium sized.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: Its skin is hard and wrinkled.<br>
        Clue 4: Its flesh is light green in colour.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="43">
        <li>Reveal the fifth clue. Guide the children to use their deductive reasoning skills and come to the final answer.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 6<br>
        Clue I: It is medium sized.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: Its skin is hard and wrinkled.<br>
        Clue 4: Its flesh is light green in colour.<br>
        Clue 5: It is round.
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="44">
        <li>Let the children share their answer with their classmates to check if it is correct.</li>
    </ol>
    <h2 class="text-white text-xl text-justify">
        Fruit 6<br>
        Clue I: It is medium sized.<br>
        Clue 2: It bears fruits on the ground.<br>
        Clue 3: Its skin is hard and wrinkled.<br>
        Clue 4: Its flesh is light green in colour.<br>
        Clue 5: It is round.<br>
        (honey melon)
    </h2>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="45">
        <li>Let the children reconfirm their answer by referring back to all the five clues.</li>
    </ol>
    <div class="grid grid-cols-2 gap-2">
        <h2 class="text-white text-xl text-justify">
            Fruit 6<br>
            Clue I: It is medium sized.<br>
            Clue 2: It bears fruits on the ground.<br>
            Clue 3: Its skin is hard and wrinkled.<br>
            Clue 4: Its flesh is light green in colour.<br>
            Clue 5: It is round.
        </h2>
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/micet/k1/fruits/class10/c7.png') }}" class="w-[15vw]" />
            <h2 class="text-white text-xl">(honey melon)</h2>
        </div>
    </div>
</div>



{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="46">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 10: Let’s Help Little Seeds Find Mummy</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let the children list out five clues of their favourite fruit and then have their friends guess the answer.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to use deductive reasoning skills to get to the correct answer.</li>
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
        const returnURL = "{{ url('/micet/k1/fruits/index') }}";
        const doneURL = "{{ url('/micet/k1/fruits/index') }}";

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