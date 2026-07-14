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
<div class="phonics-panel flex flex-col justify-between w-[45vw] items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <img src="{{ asset('assets/images/micet/k1/home/class7/c1.png') }}" class="w-[12vw]" />

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Understand the household items that are commonly found in different rooms of a house</li>
        <li>Understand activities that are usually carried out in different rooms of the house</li>
        <li>Learn to form sentences using "There is/are XX in the XX" and "XX is XX in the XX" sentence structures</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[5vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Ask children: What room is this? What are the household items commonly
                found in it? What are the activities that are usually carried out in this
                room? Guide children to form simple sentences.</li>
        </ol>
    </div>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">living room</h2>
        <img src="{{ asset('assets/images/micet/k1/home/class7/c2.png') }}" class="w-[25vw]" />
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="2">
        <li>Ask children: What room is this? What are the household items commonly
            found in it? What are the activities that are usually carried out in this
            room? Guide children to form simple sentences.</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a television in the living room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c2.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c8.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="3">
        <li>Sentence structure 2: XX is XX in the XX. Ask children to use 'living room'
            and 'watching television' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My sister is watching television in the living room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c2.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c9.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="4">
        <li>Sentence structure 1: There is/are XX in the XX. Ask children to use
            'living room' and 'video game console' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a video game console in the living room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c2.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c27.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="5">
        <li>Sentence structure 2: XX is XX in the XX. Ask children to use
            'living room' and 'playing video game' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My sister is playing video game in the living room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c2.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c10.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="6">
        <li>Sentence structure 1: There is/are XX in the XX.
            Ask children to use 'living room' and 'guests' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There are guests in the living room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c2.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c11.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="7">
        <li>Sentence structure 2: XX is XX in the XX. Ask children to use
            'living room' and entertaining guests' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My brother is entertaining guests in the living room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c2.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c11.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="8">
        <li>Ask children: What room is this? What are the household items commonly found in it?
            What are the activities that are usually carried out in this room? Guide children
            to form simple sentences.</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">kitchen</h2>

        <img src="{{ asset('assets/images/micet/k1/home/class7/c3.png') }}" class="w-[25vw]" />
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="9">
        <li>Sentence structure 1: There is/are XX in the XX. Ask children to use
            'kitchen' and 'gas stove' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a gas stove in the kitchen.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c3.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c13.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="10">
        <li>Sentence structure 2: XX is XX in the XX. Ask children to use
            'kitchen' and 'cooking' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My mother is cooking in the kitchen.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c3.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c14.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="11">
        <li>Sentence structure 1: There is/are XX in the XX. Ask children
            to use 'kitchen' and 'tap' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a tap in the kitchen.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c3.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c15.png') }}" class="w-[15vw] h-[20vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="12">
        <li>Sentence structure 2: XX is XX in the XX. Ask children to use
            'kitchen' and 'washing dishes' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My sister is washing dishes in the kitchen.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c3.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c16.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="13">
        <li>Ask children: What room is this? What are the household items commonly
            found in it? What are the activities that are usually carried out in this
            room? Guide children to form simple sentences.</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">dining room</h2>
        <img src="{{ asset('assets/images/micet/k1/home/class7/c4.png') }}" class="w-[25vw]" />
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Sentence structure 1: There is/are XX in the XX. Ask children to use
            'dining room' and 'cutlery' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There are cutlery in the dining room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c4.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c28.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="15">
        <li>Sentence structure 2: XX is XX in the XX. Ask children to use
            'dining room' and 'eating' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My mother is eating in the dining room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c4.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c17.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="16">
        <li>Sentence structure 1: There is/are XX in the XX. Ask children to
            use 'dining room' and 'glasses' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There are glasses in the dining room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c4.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c18.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Sentence structure 2: XX is XX in the XX. Ask
            children to use 'dining room' and 'drinking' to
            form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My sister is drinking in the dining room.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c4.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c23.png') }}" class="w-[17vw] h-[20vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="18">
        <li>Ask children: What room is this? What are the household items commonly found
            in it? What are the activitiesthat are usually carried out in this room?
            Guide children to form simple sentences.</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">bathroom</h2>
        <img src="{{ asset('assets/images/micet/k1/home/class7/c5.png') }}" class="w-[25vw]" />
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="19">
        <li>Sentence structure 1: There is/are XX in the XX. Ask children to
            use 'bathroom' and 'toothbrush' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a toothbrush in the bathroom.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c5.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c19.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="20">
        <li>Sentence structure 2: XX is XX in the XX. Ask
            children to use 'bathroom' and 'brushing teeth'
            to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My sister is brushing teeth in the bathroom.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c5.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c20.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>



{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="21">
        <li>Sentence structure 1: There is/are XX in the XX.
            Ask children to use 'bathroom' and 'bathtub' to
            form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a bathtub in the bathroom.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c29.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c21.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="22">
        <li>Sentence structure 2: XX is XX in the XX. Ask
            children to use 'bathroom' and 'bathing' to
            form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My brother is bathing in the bathroom.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c29.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c22.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="23">
        <li>Ask children: What room is this? What are the household items commonly found in it?
            What are the activities that are usually carried out in this room? Guide children
            to form simple sentences.</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">bedroom</h2>
        <img src="{{ asset('assets/images/micet/k1/home/class7/c6.png') }}" class="w-[25vw]" />
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="24">
        <li>Sentence structure 1: There is/are XX in the XX.
            Ask children to use 'bedroom' and 'wardrobe' to
            form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a wardrobe in the bedroom.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c6.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c24.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="25">
        <li>Sentence structure 2: XX is XX in the XX. Ask children to use
            'bedroom' and 'changing clothes' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My brother is changing clothes in the bedroom.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c6.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c25.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="26">
        <li>Sentence structure 1: There is/are XX in the XX.
            Ask children to use 'bedroom' and 'bed' to form
            a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">There is a bed in the bedroom.</h2>
        <img src="{{ asset('assets/images/micet/k1/home/class7/c7.png') }}" class="w-[25vw]" />
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="27">
        <li>Sentence structure 2: XX is XX in the XX. Ask children
            to use 'bedroom' and 'sleeping' to form a sentence. For example:</li>
    </ol>
    <div class="flex flex-col">
        <h2 class="text-[#f7b94a]">My sister is sleeping in the bedroom.</h2>
        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/images/micet/k1/home/class7/c7.png') }}" class="w-[25vw]" />
            <img src="{{ asset('assets/images/micet/k1/home/class7/c26.png') }}" class="w-[17vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>
    <ol class="list-decimal panel-ul w-[50vw]" start="28">
        <li>Let children sit in a circle.</li>
        <li>Guide children to take turns to form sentences with the two
            sentence structures learnt. First have children use 'living
            room' to form the sentences (There is/are XX in the living
            room. XX is XX in the living room.) If children need help,
            guide them by asking questions (What are the household items
            commonly found in the living room? What are the activities
            that are usually carried out in the living room?). After
            that, let children form sentences using the other rooms.</li>
    </ol>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="30">
        <li>Guide children to complete the corresponding activities in the Thematic
            Activity Book.</li>
    </ol>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Let children state their favourite room in the house and say why.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to state the uses of the different rooms.</li>
            <li>Able to form sentences using "There is/are XX in XX" or "XX is
                XX in XX".</li>
        </ul>
    </div>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Uses of Rooms</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Write on a big piece of paper the sentences that the
                children have formed. Copy these sentences onto small
                pieces of paper, cut the sentences into a few parts
                and put them into envelopes. Place the big sheet
                of paper and the envelopes in the language corner.
                Encourage the children to form sentences by modelling
                the sentences on the big sheet of paper.</li>
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
        const returnURL = "{{ url('/micet/k1/home/index') }}";
        const doneURL = "{{ url('/micet/k1/home/index') }}";

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