@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .c-btn {
            color: #F7B94A !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 3vw;
        }

        .large-title {
            color: #F7B94A;
            font-size: 9vw !important;
        }

        .panel-ul {
            color: white;
            font-size: 1.1vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')
    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between items-center h-full"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl1.m4a') }}">
        <h2 class="top-title stroke">Let's Blend</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blend.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[20vw]" />
        </div>
        <p class="p-note">Tips: Follow the sequence of activities numbered, or click on any activity of your choice. <br>
            For a definition of blends and other phonics terminologies, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col  gap-y-[1vw]">
        <h1 class="panel-title">Definitions</h1>

        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>Phonics - A method of teaching reading and spelling that stresses symbol-sound relationships.</li>
            <li>Phonological Awareness - The understanding of the different ways that spoken language
                can be broken into smaller components.
                <ul class="pl-[2vw]">
                    <li>-Words</li>
                    <li>-Syllables</li>
                    <li>-Onset-rhymes</li>
                    <li>-Phonemes</li>
                </ul>
            </li>
            <li>Phonemic Awareness - The ability to reflect and manipulate the smallest units of sound
                in language phonemes.</li>
            <li>Blends - A consonant blend is a group of consonants found in a word that have no vowels
                between them. When reading a blend, each consonant within the consonant blend maintains its
                sound.</li>
            <li>Digraphs - Two letters that represent one speech sound, as ch for ch in "chin".</li>
            <li>Word Families - Words that share the same rime (e.g. fast, past, last).</li>
            <li>Onset - The initial consonant or consonant cluster of a word, as shis the onset for
                "ship".</li>
            <li>Rime - The rhyme chunk at the end of the word, as the ip in "ship".</li>
            <li>Word chunks - Finding words within words.</li>
        </ul>

        <div class="down-btn-container">
            <button class="doneButton hidden">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/done.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[20vw]" />
            <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center">
                Do you know the <br> sound of
                '<span class="text-[#70af39]">br</span>'?
            </h2>

        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br2.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                '<span class="text-[#70af39]">br</span>' sounds like <br>
                Let's practice saying <br> the sound of <br> the blend '<span class="text-[#70af39]">br</span>'.
            </h2>

            <button class="absolute right-[16%] top-[22%] w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br3.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                Do you know what <br>
                words begin <br>
                with '<span class="text-[#70af39]">br</span>'.
            </h2>
        </div>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel h-full flex flex-col items-center justify-between">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brush.png') }}" class="w-[30vw]" />

        </div>

        <p class="note">
            Tips: Invite children to name the object. <br>
            Encourage them to sound out the words by parts (e.g. /cl/..../ocks/...clocks) </p>


        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brush.png') }}" class="w-[30vw]" />
        </div>


        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-ush.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">brush</h1>
        </div>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/bread.png') }}" class="w-[30vw]" />

        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 8 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/bread.png') }}" class="w-[30vw]" />
        </div>


        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-ead.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">bread</h1>
        </div>

    </div>


    {{-- Panel 9 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/broom.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/broom.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-oom.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">broom</h1>
        </div>
    </div>

    
    {{-- Panel 11 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brick.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brick.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-ick.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">bricks</h1>
        </div>
    </div>

    {{-- Panel 13 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brown.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 14 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brown.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-own.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">brown</h1>
        </div>
    </div>

    {{-- Panel 15 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/bride.png') }}" class="h-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 16 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/bride.png') }}" class="h-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-ide.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">bride</h1>
        </div>
    </div>

    {{-- Panel 17 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/braces.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 18 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/braces.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-aces.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">braces</h1>
        </div>
    </div>


    {{-- Panel 19 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brain.png') }}" class="w-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 20 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brain.png') }}" class="w-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-ain.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">brain</h1>
        </div>
    </div>


    {{-- Panel 21 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brother.png') }}" class="h-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 22 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/brother.png') }}" class="h-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-other.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">brother</h1>
        </div>
    </div>

    {{-- Panel 23 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/break.png') }}" class="h-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 24 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/break.png') }}" class="h-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-eak.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">break</h1>
        </div>
    </div>

    {{-- Panel 25 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/branch.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 26 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[4vw] items-center justify-center">
            <h1 class="large-title h-fit">br</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/branch.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/br-anch.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[4vw]">branch</h1>
        </div>
    </div>

    {{-- ======================================= --}}
    {{-- Panel --}}
    <div class="phonics-panel">
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[20vw]" />
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2 text-[#A15E0D] text-[2vw] text-center w-100">
                    Let's spot the <br>
                    words that begin <br>
                    with '<span class="text-[#70af39]">br</span>'!
                </h2>
            </div>
        </div>
        <p class="p-note">Tips: Listen to the target blend sound, <br>
            then encourage children to sound out the words by parts (click on audio if needed).</p>
    </div>

    {{-- Panel 23 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brush </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brush.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    slow </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/slow.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    plane </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    break </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/break.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brick </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    play </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 24 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>ush
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brush.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    slow </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/slow.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    plane </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    break </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brush.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brick </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    play </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 25 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>ush
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brush.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    slow </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/slow.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    plane </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>eak
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/break.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brick </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    play </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 26 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>ush
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brush.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    slow </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/slow.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    plane </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>eak
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/break.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>ick
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    play </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 27 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>ush
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brush.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    slow </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/slow.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    plane </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plane.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>eak
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/break.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>ick
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">br</span>ain
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    play </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/play.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>


    {{-- ============================================================= --}}
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l2') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/br_pr/br') }}";
            const doneURL = "{{ url('/phonics_l2/br_pr/br') }}";
            const CHEERING_AUDIO = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

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
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) {
                    return true;
                }
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

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide = slides[slideIndex];
                const audioSources = [];
                const answerSpans = slide.querySelectorAll('.answer');
                const newContainer = slide.querySelector('.new');

                if (answerSpans.length > 0) {
                    // Answer slide: collect audio only from buttons inside containers that have an .answer span
                    answerSpans.forEach(span => {
                        const container = span.closest('.relative');
                        if (container) {
                            const btn = container.querySelector('[id^="soundButton"][data-slide-audio]');
                            if (btn) {
                                const src = btn.getAttribute('data-slide-audio');
                                if (src && !audioSources.includes(src)) {
                                    audioSources.push(src);
                                }
                            }
                        }
                    });
                    // Play cheering sound at the end
                    audioSources.push(CHEERING_AUDIO);

                } else if (newContainer) {
                    // Slide has a .new container: play ONLY the sound button inside .new, nothing else
                    const newBtn = newContainer.querySelector('[id^="soundButton"][data-slide-audio]');
                    if (newBtn) {
                        const src = newBtn.getAttribute('data-slide-audio');
                        if (src) audioSources.push(src);
                    }

                } else {
                    // Normal slide: play slide-level audio first
                    const slideSrc = slide.getAttribute('data-slide-audio');
                    if (slideSrc) audioSources.push(slideSrc);

                    // Check if there are two side sound buttons (the flex-col gap container)
                    const sideBtnContainer = slide.querySelector('.flex.flex-col.gap-\\[1vw\\]');
                    if (sideBtnContainer) {
                        // Two side buttons exist: play both sequentially
                        sideBtnContainer.querySelectorAll('[id^="soundButton"][data-slide-audio]').forEach(btn => {
                            const src = btn.getAttribute('data-slide-audio');
                            if (src && !audioSources.includes(src)) {
                                audioSources.push(src);
                            }
                        });
                    } else {
                        // No side buttons: collect any remaining child data-slide-audio elements
                        slide.querySelectorAll('[data-slide-audio]').forEach(el => {
                            const src = el.getAttribute('data-slide-audio');
                            if (src && !audioSources.includes(src)) {
                                audioSources.push(src);
                            }
                        });
                    }
                }

                // Play all sources sequentially
                function playNext(index) {
                    if (index >= audioSources.length) return;
                    currentAudio = new Audio(audioSources[index]);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    currentAudio.onended = () => {
                        playNext(index + 1);
                    };
                }

                playNext(0);
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();

                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                playSlideAudio(slideIndex);

                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.remove("hidden"));
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.add("hidden"));
                }
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    const audioSrc = btn.getAttribute('data-slide-audio');
                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });

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

                if (isInSpecialMode) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

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

            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", handleDone);
            });

            showSlide(currentSlide);
        });
    </script>
@endpush
