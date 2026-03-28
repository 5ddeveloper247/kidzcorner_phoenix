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
            font-size: 10vw !important;
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
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl1.m4a') }}">
        <h2 class="top-title stroke">Let's Blend</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blend.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
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
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr1.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[25vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[20vw]" />
            <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center">
                Do you know the <br> sound of
                '<span class="text-[#70af39]">pr</span>'?
            </h2>

        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr2.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[25vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                '<span class="text-[#70af39]">pr</span>' sounds like <br>
                Let's practice saying <br> the sound of <br> the blend '<span class="text-[#70af39]">pr</span>'.
            </h2>

            <button class="absolute right-[16%] top-[22%] w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel flex justify-center items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr3.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[25vw]" />
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"class="w-[30vw] h-[23vw]" />
            <h2
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  text-[#A15E0D] text-[2vw] text-center w-100">
                Do you know what <br>
                words begin <br>
                with '<span class="text-[#70af39]">pr</span>'.
            </h2>
        </div>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel flex flex-col justify-around h-full">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prawn.png') }}" class="w-[20vw]" />
        </div>

        <p class="note">
            Tips: Invite children to name the object. <br>
            Encourage them to sound out the words by parts (e.g. /pr/..../awn/...prawn) </p>


        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel flex flex-col justify-around h-full">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prawn.png') }}" class="w-[20vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-awn.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">prawn</h1>
        </div>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/pram.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 8 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/pram.png') }}" class="w-[25vw]" />
        </div>


        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-am.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">pram</h1>
        </div>
    </div>


    {{-- Panel 9 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prick.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prick.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-ick.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">prick</h1>
        </div>
    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prince.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prince.png') }}" class="h-[25vw]" />
        </div>


        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-ince.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">prince</h1>
        </div>
    </div>

    {{-- Panel 13 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prize.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 14 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prize.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>


        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-ize.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">prize</h1>
        </div>
    </div>

    {{-- Panel 15 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prunes.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 16 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/prunes.png') }}" class="w-[25vw]" />
        </div>


        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>

        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-unes.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">prunes</h1>
        </div>
    </div>

    {{-- Panel 17 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/proud.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 18 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/proud.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>


        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-oud.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">proud</h1>
        </div>
    </div>


    {{-- Panel 19 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/pry.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 20 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/pry.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>


        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-y.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">pry</h1>
        </div>
    </div>

    {{-- Panel 21 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/present.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 22 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/present.png') }}" class="w-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>


        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-esent.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">present</h1>
        </div>
    </div>


    {{-- Panel 23 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/price.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 24 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/price.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>


        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-ice.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">price</h1>
        </div>
    </div>

    {{-- Panel 25 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/press.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 26 --}}
    <div class="phonics-panel">
        <div class="flex gap-x-[5vw] items-center justify-around w-full">
            <h1 class="large-title">pr</h1>
            <img src="{{ asset('assets/images/phonics_l2/brpr/press.png') }}" class="h-[25vw]" />
        </div>

        {{-- sound Button --}}
        <div class="flex flex-col gap-[1vw] items-center justify-center absolute left-[-10vw] top-[40%]">
            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>

            <button class="w-[5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>


        <div class="flex items-center justify-center new mt-[2vw]">
            <button class="w-[3.5vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr-ess.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
            <h1 class="h-fit text-white text-[3vw]">press</h1>
        </div>
    </div>


    {{-- Panel 27 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pr4.m4a') }}">
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/mascot.png') }}" class="h-[25vw]" />
            <div class="h-fit w-fit relative">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="w-[30vw]" />
                <h2 class="text-[#A15E0D] text-[2vw] w-full absolute top-1/2 left-1/2 -translate-1/2">Let’s spot the <br>
                    words that begin <br>
                    with ‘<span class="text-[#70af39]">pr</span>’!</h2>
            </div>
        </div>
        <p class="p-note">Tips: Listen to the target blend sound, <br>
            then encourage children to sound out the words by parts (click on audio if needed).</p>
    </div>

    {{-- Panel 28 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    pry </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pry.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    press </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/press.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/brain/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brown </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brown.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    prick </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    prize </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prize.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    clip </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clips.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 29 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>y
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pry.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    press </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/press.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
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
                    brown </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brown.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    prick </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    prize </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prize.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    clip </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clips.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 30 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>y
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pry.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>ess
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/press.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/brain/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brown
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brown.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    prick </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    prize </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prize.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    clip </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clips.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 31 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>y
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pry.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>ess
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/press.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/brain/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brown
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brown.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>ick
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    prize </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prize.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    clip </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clips.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>

    {{-- Panel 32 --}}
    <div class="phonics-panel flex flex-col items-center w-full">
        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>y
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/pry.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>ess
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/press.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="w-[90%] flex justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brain </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/brain/brain.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    brown
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/brown.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>ick
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prick.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="flex justify-between w-[100%] px-10">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    <span class="text-[#2D9CDB] answer">pr</span>ize
                </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/prize.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>

            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <h2 class="absolute top-1/2 left-1/2 -translate-1/2  text-[#A15E0D] text-[2vw] text-center">
                    clip </h2>
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clips.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
    </div>



    {{-- ==================================================== --}}
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

            const returnURL = "{{ url('/phonics_l2/tr_rev/pr') }}";
            const doneURL = "{{ url('/phonics_l2/tr_rev/pr') }}";
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
