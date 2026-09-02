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
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <div class="flex items-center gap-1">
            <img src="{{ asset('assets/images/micet/n1/toys/b6.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b3.png') }}" class="h-[6vw]" />
            <img src="{{ asset('assets/images/micet/n1/toys/b4.png') }}" class="h-[6vw]" />
        </div>

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Identify some edible seeds and their plants</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <h3 class="ptitle">Preparations</h3>

    <ul class="list-disc panel-ul">
        <li>Thematic Activity Book</li>
        <li>Some edible seeds (watermelon seeds, pumpkin seeds, sunflower seeds, peanuts, rice grains, peas, corn kernels, walnuts, chestnuts, cashew nuts, pine nuts, almonds)</li>
        <li>Prior to this activity, find out from your children's parents if their child is allergic to any form of seeds</li>
    </ul>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li> Display the edible seeds one by one. Encourage the children to answer the given questions and talk about the information provided.</li>
        </ol>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Display the edible seeds one by one. Encourage the children to answer the given questions and talk about the information provided.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c3.png') }}" class="w-[25vw]" />
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Watermelon seeds come from the watermelon vine. The vines bear the watermelon fruit. The seeds are inside the watermelon fruit.</li>
    </ol>
    <div class="grid grid-cols-3 items-center">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c6.png') }}" class="h-[15vw]" />
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c5.png') }}" class="w-[25vw] h-[20vw]" />
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c7.png') }}" class="h-[15vw]" />
    </div>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Ask the children : "What are these? Are they edible?
            Where do they come from?" Invite children to share
            prior knowledge about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>These are pumpkin seeds. We usually eat them cooked, without the shells.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c8.png') }}" class="w-[40vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Pumpkin seeds come from pumpkin vines.
            The vines bear the pumpkin fruits. The
            seeds are inside the pumpkin fruit.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c9.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c10.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c11.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Ask the children these questions: "What are these?
            Are they edible? Where do they come from?" Invite
            children to share prior knowledge about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c12.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>These are sunflower seeds. We usually eat them cooked, without the shells.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c13.png') }}" class="w-[45vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>The sunflower seeds come from the sunflower plant.
            The plant bears the sunflower. The seeds we eat
            are found on the sunflower.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c14.png') }}" class="w-[35vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Ask the children these questions: "What are these?
            Are they edible? Where do they come from?" Invite
            children to share prior knowledge about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c15.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>These are peanuts. We usually eat them cooked ,without the shells.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c15.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Peanuts come from the peanut plant. Peanuts
            grow under the ground. The seeds we eat are
            inside the peanut pod.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c18.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c19.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c15.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Peanuts are roasted and eaten as a snack. They are also made into yummy peanut butter.</li>
    </ol>
    <div class="grid grid-cols-2 gap-4">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c20.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c21.png') }}" class="w-[25vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Ask the children these questions: "What are these? Are they edible?
            Where do they come from?" Invite children to share prior knowledge
            about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c22.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>These are rice grains. We always eat them cooked
            in the form of rice, porridge, etc.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c24.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c25.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Rice grains come from the rice plant. The grains are the seeds of the plant.
            They are found inside the rice kernels. We get the rice grains after removing the husks.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c26.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c28.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c24.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="18">
        <li>Ask the children these questions: "What are these?
            Are they edible? Where do they come from?" Invite
            children to share prior knowledge about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c30.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="19">
        <li>These are peas. We usually eat them cooked.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c30.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c31.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="20">
        <li>Peas come from the pea plant. The plant bears the pea pods. Peas are the seeds found inside the pea pods.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c27.png') }}" class="w-[15vw] h-[15vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c29.png') }}" class="w-[15vw] h-[15vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c30.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="21">
        <li>Ask the children these questions: "What are these? Are they edible?
            Where do they come from?" Invite children to share prior knowledge
            about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c32.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="22">
        <li>These are corn kernels. We eat them cooked.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c32.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c35.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="23">
        <li>Corn kernels come from the corn plant. They grow in rows on a cob.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c36.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c37.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c33.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="24">
        <li>Corn kernels can be roasted and made into delicious popcorn.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c38.png') }}" class="w-[15vw] h-[20vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c34.png') }}" class="w-[15vw] h-[20vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="25">
        <li>Ask the children these questions: "What are these? Are they edible?
            Where do they come from?" Invite children to share prior knowledge
            about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c39.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="26">
        <li>These are walnuts. They have a hard shell. We usually eat them cooked.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c39.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c42.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="27">
        <li>Walnuts come from the Walnut tree. The tree bears the walnut fruit. The seeds are found inside the fruit.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c46.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c43.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c41.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="28">
        <li>Ask the children these questions: "What are these? Are they edible?
            Where do they come from?" Invite children to share prior knowledge
            about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c49.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="29">
        <li>These are chestnuts. We eat them cooked.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c49.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c55.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="30">
        <li>Chestnuts come from the chestnut tree.
            The tree bears the chestnut fruit.
            The seeds are found inside the fruit.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c47.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c44.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c49.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="31">
        <li>Ask the children these questions: "What are these? Are they edible?
            Where do they come from?" Invite children to share prior knowledge
            about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c52.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="32">
        <li>These are cashew nuts. We usually eat them cooked.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c52.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c56.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="33">
        <li>Cashew nuts come from the cashew nut tree.
            The tree bears the cashew nut fruit. The
            special thing about the cashew nut plant
            is that the cashew nut, which is the seed,
            grows outside the fruit.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c48.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c45.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c52.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="34">
        <li>Ask the children these questions: "What are these? Are they edible?
            Where do they come from?" Invite children to share prior knowledge
            about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c58.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="35">
        <li>These are pine nuts. We usually eat them cooked.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c58.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c57.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="36">
        <li>Pine nuts come from the pine nut tree. The tree bears the pine cones.
            The pine nuts which are the seeds are inside the cone.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c59.png') }}" class="w-[15vw] h-[17vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c61.png') }}" class="w-[15vw] h-[17vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c58.png') }}" class="w-[15vw] h-[17vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="37">
        <li>Ask the children these questions: "What are these? Are they edible?
            Where do they come from?" Invite children to share prior knowledge
            about the seeds.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c63.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="38">
        <li>These are almonds. They have a hard shell. We usually eat them cooked.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c63.png') }}" class="w-[15vw] h-[12vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c66.png') }}" class="w-[15vw] h-[12vw]" />
    </div>
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="39">
        <li>Almonds come from the Almond tree. The tree bears the Almond fruit. The almonds, which are the seeds, are found inside a hard shell, in the fruit.</li>
    </ol>
    <div class="flex flex-row items-center justify-center space-x-[2vw]">
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c60.png') }}" class="w-[15vw] h-[17vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c62.png') }}" class="w-[15vw] h-[17vw]" />
        <svg class="w-[3vw] h-[3vw]" viewBox="0 0 100 100">
            <polygon points="25,15 85,50 25,85" fill="#f5af23" />
        </svg>
        <img src="{{ asset('assets/images/micet/k1/fruits/class7/c66.png') }}" class="w-[15vw] h-[17vw]" />
    </div>
</div>





{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="40">
        <li>Ask the children to identify the various edible seeds in the picture. Ask them if they have ever eaten them</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c64.png') }}" class="w-[25vw]" />
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="41">
        <li>Ask the children to identify the various edible seeds in the picture. Ask them if they have ever eaten them</li>
    </ol>
    <img src="{{ asset('assets/images/micet/k1/fruits/class7/c65.png') }}" class="w-[25vw]" />
</div>



{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="42">
        <li>Display all the edible seeds in a bowl. Ask the children to
            identify the seeds,and say which are edible, which ones can
            be eaten raw and which ones need to be cooked.</li>
        <li>Let the children take out the seeds that need to be cooked.
            Encourage them to share the different ways of cooking these seeds..</li>
    </ol>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="44">
        <li>Let the children try out the seeds that can be eaten raw/or are cooked.
            (Take note of children with food allergies)</li>
        <li>Guide children to complete the corresponding activities in the Thematic Activity Book.</li>
    </ol>
</div>



{{-- panel 12 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Edible Seeds</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Invite children to describe the taste of the seeds they tried.
                Let them name the seeds whose taste they like as well as those
                they don't like.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to name some edible seeds.</li>
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