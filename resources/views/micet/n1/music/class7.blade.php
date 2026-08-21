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
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>
    <div class="flex items-center">
        <img src="{{ asset('assets/images/micet/n1/colours/class6/b1.png') }}" class="h-[9vw]" />
        <img src="{{ asset('assets/images/micet/n1/drama/class7/b1.png') }}" class="h-[9vw]" />
        <img src="{{ asset('assets/images/micet/n1/animals/class4/b2.png') }}" class="h-[10vw]" />
    </div>

    <h3 class="ptitle">Objectives:</h3>

    <ul class="list-disc panel-ul w-[42vw]">
        <li>Identify four musical percussion instruments and describe
            the way to play them</li>
        <li>Match musical percussion instruments to their sounds</li>
    </ul>
</div>


{{-- panel 2 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div>
        <h3 class="ptitle">Preparations</h3>
        <ul class="list-disc panel-ul w-[45vw]">
            <li>Thematic Activity Book</li>
            <li>A few sets of musical percussion instruments (e.g. maraca,
                drum, triangle, cymbals; can be replaced with other
                percussion instruments), have children share the
                resources</li>
        </ul>
    </div>
</div>


{{-- panel 3 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="text-start">
        <h3 class="ptitle">Lesson Development</h3>

        <ol class="list-decimal panel-ul w-[45vw]">
            <li>Ask children: "What musical percussion instrument is this?" "How do you
                play it so that the sound can be heard?"</li>
        </ol>
    </div>
    <div class="flex flex-col items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class6/c1.png') }}" class="w-[25vw]" />
        <h4 class="text-[#f7b94a] text-[2vw]">maraca</h4>
    </div>
</div>


{{-- panel 4 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="2">
        <li>Tell children that we'll hear the sound of the maraca only when we shake it.</li>
        <li>Click on the video, have children see how to shake the maraca.</li>
    </ol>
    <video class="h-[20vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
        <source src="{{ asset('assets/images/micet/n1/music/class6/v1.mp4') }}" type="video/mp4">
    </video>
</div>


{{-- panel 5 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="4">
        <li>Play the sound, have children listen to the sound when the maraca is
            shaken.</li>
    </ol>
    <button class="w-[4vw] mt-[7vw]" id="soundButton">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
    </button>
</div>


{{-- panel 6 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="5">
        <li>Invite children to listen to the sounds of other musical percussion
            instruments.</li>
    </ol>
</div>


{{-- panel 7 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="6">
        <li>Ask children: "What musical percussion instrument is this?" "How do you
            play it so that the sound can be heard?"</li>
    </ol>
    <div class="flex flex-col items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c2.png') }}" class="h-[15vw]" />
        <h4 class="text-[#f7b94a] text-[2vw]">drum</h4>
    </div>
</div>


{{-- panel 8 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="7">
        <li>Tell children that we'll hear the sound of the drum only when we hit it.</li>
        <li>Click on the video, have children see how to hit the drum.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/music/class7/c1.png') }}" class="w-[25vw]" />
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="9">
        <li>Play the sound, have children listen to the sound when the drum is hit.</li>
    </ol>
    <button class="w-[4vw] mt-[7vw]" id="soundButton">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
    </button>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="10">
        <li>Ask children: "What musical percussion instrument is this?" "How do you
            play it so that the sound can be heard?"</li>
    </ol>
    <div class="flex flex-col items-center gap-[1vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c3.png') }}" class="w-[25vw]" />
        <h4 class="text-[#f7b94a] text-[2vw]">triangle</h4>
    </div>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="11">
        <li>Tell children that we'll hear the sound of the triangle only when we hit it.</li>
        <li>Click on the video, have children see how to hit the triangle.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/music/class7/c3.png') }}" class="w-[25vw]" />
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="13">
        <li>Play the sound, have children listen to the sound when the drum is hit.</li>
    </ol>
    <button class="w-[4vw] mt-[7vw]" id="soundButton">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
    </button>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="14">
        <li>Ask children: "What musical percussion instrument is this?" "How do you
            play it so that the sound can be heard?"</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/music/class7/c4.png') }}" class="w-[25vw]" />
    <h4 class="text-[#f7b94a] text-[2vw]">cymbals</h4>
</div>


{{-- panel 10 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="15">
        <li>Tell children that we'll hear the sound of the cymbals only when we strike
            them.</li>
        <li>Click on the video, have children see how to strike the cymbals.</li>
    </ol>
    <img src="{{ asset('assets/images/micet/n1/music/class7/c5.png') }}" class="w-[25vw]" />
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="17">
        <li>Play the sound, have children listen to the sound when the cymbals are
            struck.</li>
    </ol>
    <button class="w-[4vw] mt-[7vw]" id="soundButton">
        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
    </button>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center space-y-[1vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <ol class="list-decimal panel-ul w-[45vw]" start="18">
        <li>Invite children to play a guessing game.</li>
    </ol>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="19">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c3.png') }}" class="absolute top-[1vw] left-[8vw] w-[12vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c2.png') }}" class="absolute top-[1vw] right-[8vw] w-[10vw] h-[10vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c4.png') }}" class="absolute bottom-[0.5vw] left-[8vw] w-[17vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class6/c1.png') }}" class="absolute bottom-[0.5vw] right-[8vw] w-[15vw]">

        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="20">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class6/c1.png') }}" class="absolute bottom-[0.5vw] right-[8vw] w-[15vw]">

        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="21">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c3.png') }}" class="absolute top-[1vw] left-[8vw] w-[12vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c2.png') }}" class="absolute top-[1vw] right-[8vw] w-[10vw] h-[10vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c4.png') }}" class="absolute bottom-[0.5vw] left-[8vw] w-[17vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class6/c1.png') }}" class="absolute bottom-[0.5vw] right-[8vw] w-[15vw]">

        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="22">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c2.png') }}" class="absolute top-[1vw] right-[8vw] w-[10vw] h-[10vw]">

        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="23">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c3.png') }}" class="absolute top-[1vw] left-[8vw] w-[12vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c2.png') }}" class="absolute top-[1vw] right-[8vw] w-[10vw] h-[10vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c4.png') }}" class="absolute bottom-[0.5vw] left-[8vw] w-[17vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class6/c1.png') }}" class="absolute bottom-[0.5vw] right-[8vw] w-[15vw]">

        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="24">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c3.png') }}" class="absolute top-[1vw] left-[8vw] w-[12vw]">
        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="25">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c3.png') }}" class="absolute top-[1vw] left-[8vw] w-[12vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c2.png') }}" class="absolute top-[1vw] right-[8vw] w-[10vw] h-[10vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c4.png') }}" class="absolute bottom-[0.5vw] left-[8vw] w-[17vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class6/c1.png') }}" class="absolute bottom-[0.5vw] right-[8vw] w-[15vw]">

        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>


{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="26">
            <li>Which musical percussions instrument makes this sound?</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <img src="{{ asset('assets/images/micet/n1/music/class7/c4.png') }}" class="absolute bottom-[0.5vw] left-[8vw] w-[17vw]">

        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>



{{-- panel 9 --}}
<div class="phonics-panel flex flex-col justify-start h-full items-center">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="w-[45vw] mt-[0.5vw]">
        <ol class="list-decimal panel-ul" start="27">
            <li>Guide children to complete the corresponding activity in the Thematic
                Activity Book.</li>
        </ol>
    </div>

    <div class="relative w-[70vw] h-[27vw] mt-[0.5vw]">
        <button type="button" id="soundButton"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[4.5vw] z-10">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" class="w-full">
        </button>
    </div>
</div>


{{-- panel 12 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="text-start flex flex-col justify-between h-full">
        <h3 class="ptitle">Clousre</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Have children use their imagination to imitate the sound of
                the four musical percussion instruments.</li>
        </ul>

        <h3 class="ptitle">Evaluation</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Able to name the four musical percussion instruments and
                know how to play them.</li>
            <li>Able to match musical percussion instruments to their
                sounds.</li>
        </ul>
    </div>
</div>


{{-- panel 13 --}}
<div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
    <h1 class="panel-title stroke">Classroom Activity 7: Percussions Instruments</h1>

    <div class="text-start flex flex-col">
        <h3 class="ptitle">Extension</h3>

        <ul class="list-disc panel-ul w-[45vw]">
            <li>Set up a musical percussion instruments corner and
      encourage children to play the instruments.</li>
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
        const returnURL = "{{ url('/micet/n1/music/index') }}";
        const doneURL = "{{ url('/micet/n1/music/index') }}";

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