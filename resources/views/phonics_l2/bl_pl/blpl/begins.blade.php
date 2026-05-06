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

        .title-top {
            font-size: 1.5vw !important;
            color: #F7B94A;
        }

        .box {
            width: 12vw;
            height: 5vw;
            border-radius: 1vw;
            background: #FBF0D0;
            box-shadow: 0 4px 4px #00000040;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .box span {
            color: #A15E0D;
            font-size: 2.5vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.3vw;
            padding-left: 3vw;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins.m4a') }}">
        <h2 class="top-title stroke">It Begins With</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: To know more about this activity, <a class="c-btn info-btn1">Click here</a>.</p>
    </div>

    {{-- Side Info Panel --}}
    <div class="phonics-panel info-panel-1 flex flex-col items-start">
        <h1 class="text-white text-[1.6vw]">Tips:</h1>

        <ul class="list-disc text-start panel-ul space-y-[.2vw]">
            <li>The ability to understand that words are made up of sounds is an important beginning reading skill.</li>
            <li>Language and word games can help children develop the ability to listen for sounds in spoken words.</li>
            <li>This simple listening game helps children develop their ability to listen for and identify initial sounds.
            </li>
        </ul>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/11.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ouse</span>
                </div>
            </div>
        </div>

        <p class="p-note">Tips: Invite children to name the object. <br>
            Encourage them to listen and identify the initial blend while saying the word.</p>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl-ouse.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/11.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>bl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ouse</span>
                </div>
            </div>
        </div>


    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ane</span>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/pl-ane.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>pl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ane</span>
                </div>
            </div>
        </div>


    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ocks</span>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 7 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl-ocks.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>bl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ocks</span>
                </div>
            </div>
        </div>


    </div>

    {{-- Panel 8 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/23.png') }}" class="w-[15vw] rounded-xl" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ay</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/pl-ay.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/23.png') }}" class="w-[15vw] rounded-xl" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>pl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ay</span>
                </div>
            </div>
        </div>


    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/13.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ue</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl-ue.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/13.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>bl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ue</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel h-full  space-y-[1.5vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box answer">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/20.png') }}" class="h-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ant</span>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 13 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/pl-ant.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/blpl/20.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>pl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ant</span>
                </div>
            </div>
        </div>
    </div>




    {{-- ======================================================== --}}
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

            /* ── DOM ── */
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/bl_pl/blpl') }}";
            const doneURL = "{{ url('/phonics_l2/bl_pl/blpl') }}";
            const homeURL = document.body.dataset.homeRoute;

            const CHEERING_AUDIO = "{{ asset('assets/audio/phonics_audio-2/common/cheering.m4a') }}";

            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            /* ── Audio ── */
            function stopAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
            }

            function playAudio(src, onEnd) {
                stopAudio();
                if (!src) {
                    if (onEnd) onEnd();
                    return;
                }
                currentAudio = new Audio(src);
                if (onEnd) currentAudio.onended = onEnd;
                currentAudio.play().catch(() => {
                    if (onEnd) onEnd();
                });
            }

            function playSlideAudio(idx) {
                const slide = slides[idx];
                const src = slide.getAttribute('data-slide-audio') ||
                    slide.querySelector('[data-slide-audio]')?.getAttribute('data-slide-audio');
                playAudio(src);
            }

            /* ── Slides ── */
            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            function isLastSlide(idx) {
                if (isInSpecialMode) {
                    for (let i = idx + 1; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) return false;
                    }
                    return true;
                }
                for (let i = idx + 1; i < slides.length; i++) {
                    if (!isSpecialSlide(slides[i])) return false;
                }
                return true;
            }

            function updateNavButtons(idx) {
                const last = isLastSlide(idx);
                nextButtons.forEach(b => b.classList.toggle('hidden', last));
                document.querySelectorAll('.doneButton').forEach(b => b.classList.toggle('hidden', !last));
            }

            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;

                slides.forEach((s, i) => {
                    s.classList.toggle('hidden', i !== idx);

                    // Reset answer boxes on question slides when revisited
                    const answerBox = s.querySelector('.box.answer');
                    if (answerBox) {
                        answerBox.classList.remove('opacity-0');
                        answerBox.style.pointerEvents = '';
                    }

                    // Reset the bottom box text on question slides
                    const bottomBox = s.querySelector('.flex.items-center.gap-4 .box');
                    if (bottomBox && !bottomBox.closest('.phonics-panel').querySelector('.box.opacity-0')) {
                        // only clear if it's a question slide (has answer box)
                        if (s.querySelector('.box.answer')) {
                            bottomBox.innerHTML = '';
                        }
                    }
                });

                updateNavButtons(idx);
                playSlideAudio(idx);
            }

            /* ── Answer box click ── */
            slides.forEach((slide, idx) => {
                const answerBox = slide.querySelector('.box.answer');
                if (!answerBox) return;

                answerBox.addEventListener('click', () => {
                    if (answerBox.classList.contains('opacity-0')) return;

                    // Play cheering → then go to the next slide (pre-built answer slide)
                    playAudio(CHEERING_AUDIO, () => goNext());
                });
            });

            /* ── Sound buttons ── */
            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute('data-slide-audio'));
                });
            });

            /* ── Navigation ── */
            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    if (isInSpecialMode ?
                        slides[next].classList.contains(specialSlideClass) :
                        !isSpecialSlide(slides[next])) break;
                    next++;
                }
                if (next < slides.length) showSlide(next);
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopAudio();
                    window.location.href = returnURL;
                    return;
                }
                if (isInSpecialMode) {
                    let prev = currentSlide - 1;
                    while (prev >= 0 && !slides[prev].classList.contains(specialSlideClass)) prev--;
                    if (prev >= 0) {
                        showSlide(prev);
                    } else {
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        showSlide(returnToSlide);
                        returnToSlide = null;
                    }
                } else {
                    let prev = currentSlide - 1;
                    while (prev > 0 && isSpecialSlide(slides[prev])) prev--;
                    showSlide(prev);
                }
            }

            /* ── Info buttons ── */
            infoButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = Array.from(btn.classList)
                        .find(c => c.startsWith('info-btn'))
                        ?.replace('info-btn', 'info-panel-');
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            nextButtons.forEach(b => b.addEventListener('click', goNext));
            if (returnButton) returnButton.addEventListener('click', goBack);
            if (homeButton) homeButton.addEventListener('click', () => {
                stopAudio();
                window.location.href = homeURL;
            });
            document.querySelectorAll('.doneButton').forEach(b => b.addEventListener('click', () => {
                stopAudio();

                if (isInSpecialMode) {
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    showSlide(returnToSlide);
                    returnToSlide = null;
                } else {
                    window.location.href = doneURL;
                }
            }));

            showSlide(0);
        });
    </script>
@endpush
