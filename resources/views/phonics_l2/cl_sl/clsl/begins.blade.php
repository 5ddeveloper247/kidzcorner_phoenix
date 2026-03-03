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
            width: 160px;
            height: 80px;
            border-radius: 10px;
            background: #FBF0D0;
            box-shadow: 0 4px 4px #00000040;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box span {
            color: #A15E0D;
            font-size: 2.5vw;
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
        <h1 class="p-note">Tips:</h1>

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

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slime.png') }}" class="h-[13vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ime</span>
                </div>
            </div>
        </div>

        <p class="p-note">Tips: Invite children to name the object. <br>
            Encourage them to listen and identify the initial blend while saying the word.</p>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sl-ime.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div>
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slime.png') }}" class="h-[13vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>sl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ime</span>
                </div>
            </div>
        </div>


    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
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
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
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
                <img src="{{ asset('assets/images/phonics_l2/clsl/climb.png') }}" class="h-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">imb</span>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/cl-imb.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
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
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/climb.png') }}" class="h-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>cl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">imb</span>
                </div>
            </div>
        </div>


    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slip.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ip</span>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 7 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sl-ip.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/slip.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>sl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ip</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/clsl/close.png') }}" class="h-[17vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ose</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/cl-ose.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box opacity-0">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
            <div class="flex items-end justify-center gap-[1vw]">
                <img src="{{ asset('assets/images/phonics_l2/clsl/close.png') }}" class="h-[17vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>cl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ose</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
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
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/snail.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ug</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/sl-ug.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
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
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/snail.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>sl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ug</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel h-full  space-y-[1.5vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/begins-with.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/clock.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ock</span>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 13 --}}
    <div class="phonics-panel h-full  space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/cl-ock.m4a') }}">
        <h2 class="title-top stroke">Look at the picture. <br>
            Find the blend that completes the name of this item.</h2>

        <div class="flex flex-col items-center space-y-[1vw]">
            <div class="flex items-center gap-[1.5vw]">
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="box">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
            </div>
            <div class="flex items-end justify-center">
                <img src="{{ asset('assets/images/phonics_l2/clsl/clock.png') }}" class="w-[15vw]" />
                <div class="flex items-center gap-4">
                    <div class="box"> <span>cl</span> </div>
                    <span class="text-[2.5vw] text-[#f7b94a]">ock</span>
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

            const slides        = document.querySelectorAll(".phonics-panel");
            const nextButtons   = document.querySelectorAll(".nextButton");
            const returnButton  = document.getElementById("returnButton");
            const infoButtons   = document.querySelectorAll("[class*='info-btn']");
            const soundButtons  = document.querySelectorAll("[id^='soundButton']");

            const returnURL     = "{{ url('/phonics_l2/cl_sl/clsl') }}";
            const doneURL       = "{{ url('/phonics_l2/cl_sl/clsl') }}";
            const cheeringAudio = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide      = 0;
            let currentAudio      = null;
            let isInSpecialMode   = false;
            let returnToSlide     = null;
            let specialSlideClass = null;

            // ─── Audio helpers ───────

            /**
             * Hard-stop whatever is playing right now.
             * Nulls out callbacks BEFORE pausing so nothing chains off a stopped track.
             */
            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.onerror = null;
                    try {
                        currentAudio.pause();
                        currentAudio.currentTime = 0;
                    } catch (_) {}
                    currentAudio = null;
                }
            }

            /**
             * Play a single audio file.
             * Does NOT call stopCurrentAudio() — caller must do that first.
             * onDone is guaranteed to fire exactly once (on end OR error).
             */
            function playAudio(src, onDone) {
                try {
                    const audio = new Audio(src);
                    currentAudio = audio;

                    let settled = false;
                    function settle() {
                        if (settled) return;
                        settled = true;
                        // Only clear currentAudio if it's still THIS audio object,
                        // so a stopCurrentAudio() call mid-chain doesn't confuse state.
                        if (currentAudio === audio) currentAudio = null;
                        if (onDone) onDone();
                    }

                    audio.onerror = () => { console.warn('Audio error:', src); settle(); };
                    audio.onended = () => settle();

                    audio.play().catch(err => {
                        console.warn('Audio play() rejected:', src, err);
                        settle();
                    });
                } catch (err) {
                    console.error('Audio creation failed:', src, err);
                    currentAudio = null;
                    if (onDone) onDone();
                }
            }

            /**
             * Play an array of srcs sequentially, then call onAllDone.
             */
            function playQueue(srcs, onAllDone) {
                (function next(i) {
                    if (i >= srcs.length) { if (onAllDone) onAllDone(); return; }
                    playAudio(srcs[i], () => next(i + 1));
                })(0);
            }

            // ─── Core slide-audio logic ──────────────────────────────────────
            //
            //  opacity-0 present  →  slide-level audio ONLY  →  cheering
            //  no opacity-0       →  slide-level audio  →  button audios (no cheering)
            //
            function playSlideAudio(slideIndex) {
                stopCurrentAudio(); // kill anything currently playing

                const slide          = slides[slideIndex];
                const hasOpacityZero = !!slide.querySelector('.opacity-0');
                const slideSrc       = slide.getAttribute('data-slide-audio') || null;

                if (hasOpacityZero) {
                    // ── Answer-reveal slide ──
                    // Only the slide-level audio plays, followed immediately by cheering.
                    // No button audios are played at all.
                    if (slideSrc) {
                        playAudio(slideSrc, function () {
                            playAudio(cheeringAudio, null);
                        });
                    } else {
                        playAudio(cheeringAudio, null);
                    }

                } else {
                    // ── Question slide ──
                    // Slide audio first, then each button audio in DOM order.
                    const queue = [];
                    if (slideSrc) queue.push(slideSrc);

                    // Only grab audios from <button> elements — never recurse into
                    // the slide's own data-slide-audio again.
                    slide.querySelectorAll('button[data-slide-audio]').forEach(btn => {
                        const src = btn.getAttribute('data-slide-audio');
                        if (src && !queue.includes(src)) queue.push(src);
                    });

                    if (queue.length > 0) playQueue(queue, null);
                }
            }

            // ─── Slide visibility helpers ────────────────────────────────────

            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(cls => /^info-panel-\d+$/.test(cls));
            }

            function getSlideTypeFromButton(button) {
                for (const cls of Array.from(button.classList)) {
                    if (cls.startsWith('info-btn')) return 'info-panel-' + cls.replace('info-btn', '');
                }
                return null;
            }

            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;
                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) return true;
                }
                return false;
            }

            function isLastSlide(slideIndex) {
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;
                if (!isInSpecialMode) {
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) return false;
                    }
                    return true;
                }
                return false;
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();
                slides.forEach((slide, index) => slide.classList.toggle('hidden', index !== slideIndex));
                playSlideAudio(slideIndex);
                const last = isLastSlide(slideIndex);
                nextButtons.forEach(btn => btn.classList.toggle('hidden', last));
                document.querySelectorAll('.doneButton').forEach(btn => btn.classList.toggle('hidden', !last));
            }

            // ─── Manual sound buttons 

            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    const src = btn.getAttribute('data-slide-audio');
                    if (src) { stopCurrentAudio(); playAudio(src, null); }
                });
            });

            // ─── Navigation ──────────

            function goNext() {
                if (currentSlide >= slides.length - 1) return;
                let next = currentSlide + 1;
                while (next < slides.length) {
                    const slide = slides[next];
                    if (isInSpecialMode ? slide.classList.contains(specialSlideClass) : !isSpecialSlide(slide)) break;
                    next++;
                }
                if (next < slides.length) { currentSlide = next; showSlide(currentSlide); }
            }

            function goBack() {
                if (currentSlide === 0 && !isInSpecialMode) {
                    stopCurrentAudio();
                    window.location.href = returnURL;
                    return;
                }
                if (isInSpecialMode) {
                    let prev = currentSlide - 1;
                    while (prev >= 0 && !slides[prev].classList.contains(specialSlideClass)) prev--;
                    if (prev >= 0) {
                        currentSlide = prev; showSlide(currentSlide);
                    } else {
                        currentSlide = returnToSlide; isInSpecialMode = false;
                        specialSlideClass = null; returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    if (currentSlide > 0) {
                        currentSlide--;
                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) currentSlide--;
                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                stopCurrentAudio();
                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide; isInSpecialMode = false;
                    specialSlideClass = null; returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            // ─── Event listeners ─────

            infoButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    returnToSlide = currentSlide; isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i; showSlide(currentSlide); break;
                        }
                    }
                });
            });

            nextButtons.forEach(btn => btn.addEventListener('click', goNext));
            if (returnButton) returnButton.addEventListener('click', goBack);
            document.querySelectorAll('.doneButton').forEach(btn => btn.addEventListener('click', handleDone));

            // ─── Init ─────
            showSlide(currentSlide);
        });
    </script>
@endpush