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
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>
    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/n1/drama/class2/b2.png') }}" class="h-[6vw]" />
        <img src="{{ asset('assets/images/micet/n1/drama/class2/b4.png') }}" class="h-[8vw]" />
        <img src="{{ asset('assets/images/micet/n1/drama/class2/b3.png') }}" class="h-[6vw]" />
    </div>


    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[40vw]">
        <li>Know that we can tell a story by singing</li>
        <li>Tell a story by singing</li>
        <li>Use imagination in acting out a story</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Props like hat, basket, carrots, curtain (as door), etc. that
                are appropriate to the story "The Rabbits And The Wolf"
                [Note: During lesson, observe each child's ability in
                singing and role playing so as to choose appropriately for
                Activity 8-10 mini drama.]</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[50vw]">
            <li>Ask children: "Has anyone ever told you stories before?" "What stories
                have you heard?" "What is your favourite story?" Guide children in sharing
                their experiences and thoughts."</li>
        </ol>
    </div>

    <div class="flex flex-col items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel relative flex flex-col items-center h-full w-full">

    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div class="panel-ul absolute top-[10.2%] left-[1.8%] w-[96%]">
        <ol class="list-decimal pl-[1.2vw] m-0" start="2">
            <li>
                Invite children to sing the 4 songs from to the story "The Rabbits And The Wolf".
            </li>
        </ol>
    </div>

    <!-- CSS Grid Layout to automatically structure 2x2 section panels -->
    <div class="panel-ul absolute top-[20%] left-[19.3%] w-[60.8%] h-[72%] grid grid-cols-2 grid-rows-2">

        <!-- Center Divider Borders -->
        <div class="absolute inset-y-0 left-1/2 border-l border-white/60 pointer-events-none"></div>
        <div class="absolute inset-x-0 top-1/2 border-t border-white/60 pointer-events-none"></div>

        <!-- Song 1 -->
        <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
            <div class=" text-white text-[1.2vw]">Song 1</div>
            <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                Oh my dear children,<br>
                please lock the door.<br>
                Mummy's going out<br>
                to pick some carrots.<br>
                Before mummy comes home,<br>
                Don't open the door<br>
                to let anyone in.
            </div>
        </div>

        <!-- Song 2 -->
        <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
            <div class=" text-white text-[1.2vw]">Song 2</div>
            <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                Oh my dear children,<br>
                please open the door.<br>
                Mummy is home,<br>
                do open the door.<br>
                Mummy has now come home,<br>
                Please open the door<br>
                and let mummy in.
            </div>
        </div>

        <!-- Song 3 -->
        <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
            <div class=" text-white text-[1.2vw]">Song 3</div>
            <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                We are good children,<br>
                can't open the door.<br>
                You're not our mummy,<br>
                can't open the door.<br>
                Before mummy comes home,<br>
                Can't open the door<br>
                to let anyone in.
            </div>
        </div>

        <!-- Song 4 -->
        <div class="flex flex-col items-center justify-start text-center p-[0.5vw]">
            <div class=" text-white text-[1.2vw]">Song 4</div>
            <div class="text-[#f7b94a] text-[0.9vw] leading-tight mt-[0.2vw]">
                We are good children,<br>
                we'll open the door.<br>
                You are our mummy,<br>
                we'll open the door.<br>
                Mummy has now come home,<br>
                Please open the door<br>
                and let mummy in.
            </div>
        </div>

    </div>

    <button id="sound-btn" type="button"
        class="absolute left-[2.7%] top-[46%] w-[7.1vw] z-20">
        <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}"
            alt="Play" class="w-full">
    </button>

</div>

{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="3">
        <li>Tell children that we can tell a story by either speaking or singing.</li>
        <li>Invite children to watch the story told by singing.</li>
    </ol>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Teacher sings, have children listen.</li>
    </ol>
    <div class="flex items-start gap-[1vw]">

        <button class="w-[4vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
        <div class="flex flex-col">
            <div class=" text-white text-[2vw]">Song 1</div>
            <h5 class="text-[2vw] text-[#f7b94a]">Oh my dear children, <br>
                please lock the door. <br>
                Mummy's going out <br>
                to pick some carrots. <br>
                Before mummy comes home, <br>
                Don't open the door <br>
                to let anyone in.</h5>
        </div>
    </div>
</div>



{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Ask children: Who should sing song 1? (Mother Rabbit)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="8">
        <li>Have children use their imagination to act out the scene of Mother Rabbit
            going out.</li>
        <li>Ask questions that help children to think and recall the story (e.g. What did
            Mother Rabbit bring when going out? What did she do before going out?).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Guide children to sing and act out the scene of Mother Rabbit going out.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[30vw]" />
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Song 2: Play music, teacher sings to the rhythm of the music.</li>
    </ol>
    <div class="flex items-start gap-[1vw]">

        <button class="w-[4vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
        <div class="flex flex-col">
            <div class=" text-white text-[2vw]">Song 2</div>
            <h5 class="text-[2vw] text-[#f7b94a]">Oh my dear children, </br>
                please open the door. </br>
                Mummy is home, </br>
                do open the door. </br>
                Mummy has now come home, </br>
                Please open the door </br>
                and let mummy in.</h5>
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Ask children: When should song 2 be sung? At the beginning, middle or the
                end of the story? (middle and ending parts)</li>
        </ol>
    </div>

    <div class="flex flex-col items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-between h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>Ask children: Who should sing song 2 in the different parts of the story?
                (middle part: The Wolf; ending part: Mother Rabbit)</li>
        </ol>
    </div>
    <div class="flex gap-5 items-center">
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[25vw]" />
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="14">
        <li>Have children use their imagination to act out the scene of Mother Rabbit
            going out.</li>
        <li>Ask questions that help children to think and recall the story (e.g. What did
            the wolf wear when it knocked at the door? What was its expression?).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="16">
        <li>Guide children to sing and act out the scene of the wolf knocking at the
            door.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[30vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="17">
        <li>Have children use their imagination to act out the scene of Mother Rabbit
            back at home.</li>
        <li>Ask questions that help children to think and recall the story (e.g. What did
            Mother Rabbit bring home? Did she hug the baby rabbits?).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="19">
        <li>Guide children to sing and act out the scene of Mother Rabbit back at
            home.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[30vw]" />
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="20">
        <li>Teacher sings, have children listen.</li>
    </ol>
    <div class="flex items-start gap-[1vw]">

        <button class="w-[4vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
        <div class="flex flex-col">
            <div class=" text-white text-[2vw]">Song 3</div>
            <h5 class="text-[2vw] text-[#f7b94a]"> We are good children,<br>
                can't open the door.<br>
                You're not our mummy,<br>
                can't open the door.<br>
                Before mummy comes home,<br>
                Can't open the door<br>
                to let anyone in.
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Ask children: When should song 3 be sung? At the beginning, middle or the
                end of the story? (middle part)</li>
        </ol>
    </div>

    <div class="flex flex-col items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="22">
        <li>Ask children: Who should sing song 3? (Baby Rabbits)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="23">
        <li>Have children use their imagination to act out the scene of the baby
            rabbits hearing the knocking at the door.</li>
        <li>Ask questions that help children think and recall the story (e.g. What did
            the baby rabbits do after mummy left? How did they react when they
            heard the knocking sound?).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[50vw]" start="25">
        <li>Guide children to sing and act out the scene of baby rabbits hearing the
            knocking at the door.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[25vw]" />
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[.5vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="26">
        <li>Teacher sings, have children listen.</li>
    </ol>
    <div class="flex items-start gap-[1vw]">

        <button class="w-[4vw]" id="soundButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
        </button>
        <div class="flex flex-col">
            <div class=" text-white text-[2vw]">Song 4</div>
            <h5 class="text-[1.7vw] text-[#f7b94a]"> We are good children,<br>
                We are good children,<br>
                we'll open the door.<br>
                You are our mummy,<br>
                we'll open the door.<br>
                Mummy has now come home,<br>
                Please open the door<br>
                and let mummy in.
        </div>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div class="text-start">
        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>Ask children: When should song 4 be sung? At the beginning, middle or the
                end of the story? (ending part)</li>
        </ol>
    </div>

    <div class="flex flex-col items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/drama/class5/c4.png') }}" class="w-[15vw]" />
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c2.png') }}" class="w-[15vw]" />
            <img src="{{ asset('assets/images/micet/n1/drama/class5/c1.png') }}" class="w-[15vw]" />
        </div>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="28">
        <li>Ask children: Who should sing song 4? (Baby Rabbits)</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="29">
        <li>Have children use their imagination to act out the scene of the baby
            rabbits opening the door for their mummy.</li>
        <li>Ask questions that help children to think and recall the story (e.g. Were the
            baby rabbits happy to see their mummy at home? Did they hug her?).</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="31">
        <li>Guide children to sing and act out the scene of the baby rabbits opening
            the door for their mummy.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/drama/class5/c3.png') }}" class="w-[25vw]" />
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="32">
        <li>Have children play the role of the baby rabbits, while the teacher plays the
            roles of the Mother Rabbit and the wolf. Let the children sing and act out
            the story.</li>
    </ol>
</div>

{{-- panel 14 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 4: Sing the Story</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Ask children: How did you tell the story today? Do you like to tell stories
                this way?</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to say that we can tell a story by singing.</li>
            <li>Able to use imagination in acting out a story.</li>
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
        const returnURL = "{{ url('/micet/n1/drama/index') }}";
        const doneURL = "{{ url('/micet/n1/drama/index') }}";

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