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
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl1.m4a') }}">
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
                class="w-[9vw] absolute top-[35%] left-[8%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
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
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 4 --}}
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
                class="w-[9vw] absolute bottom-[16%] left-[12%]" />

            <div class="flex items-center gap-[1.5vw] absolute top-[15%] left-1/2 -translate-1/2">
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>sl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 6 --}}
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
                </div>
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>cl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 8 --}}
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>br</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>fl</span>
                </div>
                <div class="circle marked">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>bl</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Panel 10 --}}
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pl</span>
                </div>
                <div class="circle">
                    <button class="w-[3vw]" id="soundButton"
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>gl</span>
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
                        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blah.mp3') }}">
                        <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                    </button>
                    <span>pr</span>
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
        document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/bl_pl/blpl') }}";
            const doneURL = "{{ url('/phonics_l2/bl_pl/blpl') }}";
            const AUTO_PLAY_DELAY = 500;

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

                setTimeout(() => {
                    const audioSources = [];

                    const slideSrc = slide.getAttribute('data-slide-audio');
                    if (slideSrc) audioSources.push(slideSrc);

                    slide.querySelectorAll('[data-slide-audio]').forEach(el => {
                        const src = el.getAttribute('data-slide-audio');
                        if (src && !audioSources.includes(src)) {
                            audioSources.push(src);
                        }
                    });

                    function playNext(index) {
                        if (index >= audioSources.length) return;

                        currentAudio = new Audio(audioSources[index]);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));

                        currentAudio.onended = () => {
                            playNext(index + 1);
                        };
                    }

                    playNext(0);

                }, AUTO_PLAY_DELAY);
            }

            function showSlide(slideIndex) {
                stopCurrentAudio();

                const currentSlideElement = slides[slideIndex]; // ← added

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

                // ↓ no-bg logic merged from JS 1
                const ajaxSection = document.getElementById('ajax-section');
                if (ajaxSection) {
                    if (currentSlideElement.classList.contains('no-bg')) {
                        ajaxSection.classList.add('no-bg');
                    } else {
                        ajaxSection.classList.remove('no-bg');
                    }
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

                // ↓ no-bg logic merged from JS 1 (handles returning from info/special mode)
                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide); // showSlide already handles no-bg now
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
