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
            font-size: 2vw !important;
            position: absolute;
            top: -3%;
            left: 50%;
            color: #F7B94A;
            z-index: 100;
        }

        .circle {
            width: 140px;
            height: 122px;
            border-radius: 50%;
            background: #FBF0D0;
            box-shadow: 0 4px 4px #00000040;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle span {
            color: #A15E0D;
            font-size: 2.5vw;
        }

        .marked {
            background: #FFD355 !important;
        }

        .before {
            cursor: pointer;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/spot-it.m4a') }}">
        <h2 class="top-title stroke">Spot It</h2>
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
    <div class="phonics-panel no-bg" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/spot-slah.m4a') }}">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute top-[35%] left-[8%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle before">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/prah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
        </div>
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel no-bg">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute bottom-[16%] left-[12%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/prah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel no-bg" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/spot-clah.m4a') }}">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute bottom-[16%] left-[12%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="circle before">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 5 --}}
    <div class="phonics-panel no-bg">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute top-[35%] left-[40%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/brah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel no-bg" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/spot-slah.m4a') }}">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute top-[35%] left-[40%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle before">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/plah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel no-bg">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute bottom-[15%] left-[45%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/plah.m4a') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 8 --}}
    <div class="phonics-panel no-bg" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/spot-slah.m4a') }}">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute bottom-[15%] left-[45%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/brah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="circle before">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel no-bg">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute top-[35%] right-[12%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/pluh.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/flah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/brah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel no-bg" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/spot-clah.m4a') }}">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/rat.png') }}"
                class="w-[9vw] absolute top-[35%] right-[12%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle before">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel no-bg">
        <div class="title-top stroke -translate-1/2">
            Help the mouse get home. <br>
            Find the blend
            <button class="w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative">
            <img src="{{ asset('assets/images/phonics_l2/global/common/ratbg.png') }}" class="h-[33vw] w-[74vw]" />
            <img src="{{ asset('assets/images/phonics_l2/global/common/trat.png') }}"
                class="w-[17vw] absolute bottom-[15%] right-[12%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/glah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
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
            const circleButtons = document.querySelectorAll(".circle");

            const returnURL     = "{{ url('/phonics_l2/cl_sl/clsl') }}";
            const doneURL       = "{{ url('/phonics_l2/cl_sl/clsl') }}";
            const cheeringAudio = "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}";

            let currentSlide      = 0;
            let currentAudio      = null;
            let isInSpecialMode   = false;
            let returnToSlide     = null;
            let specialSlideClass = null;

            // ─── Audio helpers ───────────────────────────────────────────────

            /**
             * Hard-stop whatever is playing right now.
             * Nulls callbacks BEFORE pausing so nothing chains off a stopped track.
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
             * Play a single audio file. Does NOT call stopCurrentAudio() itself.
             * onDone fires exactly once on end OR error.
             */
            function playAudio(src, onDone) {
                try {
                    const audio = new Audio(src);
                    currentAudio = audio;

                    let settled = false;
                    function settle() {
                        if (settled) return;
                        settled = true;
                        if (currentAudio === audio) currentAudio = null;
                        if (onDone) onDone();
                    }

                    audio.onerror = () => { console.warn('Audio error:', src); settle(); };
                    audio.onended = () => settle();
                    audio.play().catch(err => { console.warn('Audio play() rejected:', src, err); settle(); });
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
            //  .marked present  →  cheering ONLY (no other audio)
            //  no .marked       →  slide-level audio → button audios in DOM order
            //
            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide       = slides[slideIndex];
                const hasMarked   = !!slide.querySelector('.marked');
                const slideSrc    = slide.getAttribute('data-slide-audio') || null;

                if (hasMarked) {
                    // ── Answer-reveal slide: cheering only, immediately ──
                    playAudio(cheeringAudio, null);

                } else {
                    // ── Question slide: slide audio → button audios ──
                    const queue = [];
                    if (slideSrc) queue.push(slideSrc);

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

                const currentSlideElement = slides[slideIndex];

                slides.forEach((slide, index) => {
                    slide.classList.toggle('hidden', index !== slideIndex);
                });

                playSlideAudio(slideIndex);

                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.remove("hidden"));
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    document.querySelectorAll(".doneButton").forEach(btn => btn.classList.add("hidden"));
                }

                // no-bg logic
                const ajaxSection = document.getElementById('ajax-section');
                if (ajaxSection) {
                    if (currentSlideElement.classList.contains('no-bg')) {
                        ajaxSection.classList.add('no-bg');
                    } else {
                        ajaxSection.classList.remove('no-bg');
                    }
                }
            }

            // ─── Circle click (before class) ─────────────────────────────────

            circleButtons.forEach(circle => {
                circle.addEventListener("click", function(e) {
                    if (circle.classList.contains('before')) {
                        e.preventDefault();
                        for (let i = currentSlide + 1; i < slides.length; i++) {
                            if (slides[i].querySelector('.marked') !== null) {
                                currentSlide = i;
                                showSlide(currentSlide);
                                break;
                            }
                        }
                    }
                });
            });

            // ─── Manual sound buttons ────────────────────────────────────────

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.stopPropagation();
                    const src = btn.getAttribute('data-slide-audio');
                    if (src) { stopCurrentAudio(); playAudio(src, null); }
                });
            });

            // ─── Navigation ──────────────────────────────────────────────────

            function goNext() {
                if (currentSlide >= slides.length - 1) return;
                let nextIndex = currentSlide + 1;
                while (nextIndex < slides.length) {
                    const slide = slides[nextIndex];
                    if (isInSpecialMode ? slide.classList.contains(specialSlideClass) : !isSpecialSlide(slide)) break;
                    nextIndex++;
                }
                if (nextIndex < slides.length) { currentSlide = nextIndex; showSlide(currentSlide); }
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
                        if (slides[previousIndex].classList.contains(specialSlideClass)) break;
                        previousIndex--;
                    }
                    if (previousIndex >= 0) {
                        currentSlide = previousIndex; showSlide(currentSlide);
                    } else {
                        currentSlide = returnToSlide; isInSpecialMode = false;
                        specialSlideClass = null; returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    if (currentSlide > 0) {
                        let prevIndex = currentSlide - 1;
                        while (prevIndex > 0 && isSpecialSlide(slides[prevIndex])) prevIndex--;
                        currentSlide = prevIndex;
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

            // ─── Event listeners ─────────────────────────────────────────────

            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
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

            nextButtons.forEach(btn => btn.addEventListener("click", goNext));
            if (returnButton) returnButton.addEventListener("click", goBack);
            document.querySelectorAll(".doneButton").forEach(btn => btn.addEventListener("click", handleDone));

            // ─── Init ─────────────────────────────────────────────────────────
            showSlide(currentSlide);
        });
    </script>
@endpush