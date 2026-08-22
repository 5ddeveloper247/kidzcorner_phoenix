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
    <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>
    <div class="flex ">
        <img src="{{ asset('assets/images/micet/k1/home/class2/c1.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/k1/home/class2/c2.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/k1/home/class2/c3.png') }}" class="h-[8vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul">
        <li>Know the names and uses of different rooms in a house</li>
        <li>Draw one's bedroom and write things present in it</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col items-center space-y-[3vw] h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul">
            <li>Thematic Activity Book</li>
            <li>Drawing Papers, colour pencils, pencils</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Let children recall the storyline of "Sue's Home" and name the rooms in Sue's
                house.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c4.png') }}" class="w-[28vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c5.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c6.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="4">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c7.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c8.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="6">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c9.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="7">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c10.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c11.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c12.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="10">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c13.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c14.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c15.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c16.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c17.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c18.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c19.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="17">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c20.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="18">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c21.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c22.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c23.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c24.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="22">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c25.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="23">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c26.png') }}" class="w-[30vw] h-[23vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c27.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c28.png') }}" class="w-[30vw] h-[23vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c29.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c30.png') }}" class="w-[30vw] h-[23vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c31.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c32.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c33.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c34.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c35.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c36.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="34">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c37.png') }}" class="w-[30vw]" />
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="35">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c38.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="36">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c39.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="37">
            <li>Ask children: What room is this? How do you know? What is in the room?
                How is this room different from the room in your house?</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c40.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="38">
            <li>Click to open the Software Magnetic Board. Guide children to put suitable things in the living room.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c41.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="39">
            <li>Click to open the Software Magnetic Board. Guide children to put suitable things in the living room.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c42.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="40">
            <li>Click to open the Software Magnetic Board. Guide children to put suitable things in the living room.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c43.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="41">
            <li>Click to open the Software Magnetic Board. Guide children to put suitable things in the living room.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c44.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="42">
            <li>Click to open the Software Magnetic Board. Guide children to put suitable things in the living room.</li>
        </ol>
    </div>
    <img src="{{ asset('assets/images/micet/k1/home/class2/c45.png') }}" class="w-[30vw]" />
</div>

{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <div>
        <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="43">
            <li>Let children name the different rooms in their house.</li>
        </ol>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="44">
        <li>Distribute drawing papers. Let the children draw their bedroom and <br>
            write the things present in their bedroom (or use the Thematic Activity <br>
            Book). Teacher to guide children in writing the words.</li>
    </ol>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Display all the drawings. Let children take turns to describe
                their bedroom to the class.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to state the name and use of each room in the house.</li>
            <li>Be able to draw one's bedroom and write the things present in it.</li>
        </ul>
    </div>
</div>


{{-- panel 37 --}}
<div class="phonics-panel flex flex-col items-center h-full">
    <h1 class="panel-title stroke">Classroom Activity 2: My Home</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>In the activity area, place items like wooden blocks, 
                cardboard boxes and empty cans to encourage children 
                to explore these materials and build a house.</li>
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