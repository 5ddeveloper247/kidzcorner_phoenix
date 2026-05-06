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
            font-size: 2vw;
        }

        .box {
            width: 19vw;
            height: 10vw;
            border: 2px solid #F7B94A;
            border-radius: 7px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-it.m4a') }}">
        <h2 class="top-title stroke">Match It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'sl' sound. <br>
            Remind them to listen to the initial sound when naming each object.</p>
    </div>

    {{-- Panel 2 – Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-box.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/clsl/clock.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clock.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/glow.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glow.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/4.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blinds.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 3 – Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glow.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/clsl/clock.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/flgl/glow.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/4.png') }}">
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[9vw]"
                src="{{ asset('assets/images/phonics_l2/flgl/glow.png') }}">
        </div>
    </div>

    {{-- Panel 4 – Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-box.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/glum.png') }}">

                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glum.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/fly.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/fly.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/26.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plant.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 5 – Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glum.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw] opacity-0  "
                    src="{{ asset('assets/images/phonics_l2/flgl/glum.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/fly.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw] "
                    src="{{ asset('assets/images/phonics_l2/blpl/26.png') }}">
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[9vw]"
                src="{{ asset('assets/images/phonics_l2/flgl/glum.png') }}">
        </div>
    </div>

    {{-- Panel 6 – Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-box.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"src="{{ asset('assets/images/phonics_l2/flgl/glad.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glad.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]" src="{{ asset('assets/images/phonics_l2/clsl/slide.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/slide.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 rounded-xl w-[6vw]" src="{{ asset('assets/images/phonics_l2/flgl/flute.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/flute.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 7 – Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glad.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/flgl/glad.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/clsl/slide.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/flute.png') }}">
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[9vw] rounded-xl"
                src="{{ asset('assets/images/phonics_l2/flgl/glad.png') }}">
        </div>
    </div>

    {{-- Panel 8 – Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-box.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/float.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/float.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/glue.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glue.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/clsl/shell.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/cl_sl/clam.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 9 – Answer --}}
    <div class="phonics-panel answer flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glue.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/flgl/float.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[7vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/flgl/glue.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/clsl/shell.png') }}">
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[9vw]"
                src="{{ asset('assets/images/phonics_l2/flgl/glue.png') }}">
        </div>
    </div>

    {{-- Panel 10 – Question --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/match-box.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[7vw]" src="{{ asset('assets/images/phonics_l2/flgl/gloves.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glove.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"  src="{{ asset('assets/images/phonics_l2/blpl/25.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/plank.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]" src="{{ asset('assets/images/phonics_l2/blpl/1.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/blow.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glah.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 11 – Answer --}}
    <div class="phonics-panel  answer flex flex-col justify-center space-y-[2vw]! items-center"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/fl_gl/glove.m4a') }}">
        <h2 class="panel-title stroke">Find the picture that has the same <br> initial blend as the one on the box.</h2>
        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[7vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/flgl/gloves.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/25.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/1.png') }}">
            </div>
        </div>
        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">gl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[9vw]"
                src="{{ asset('assets/images/phonics_l2/flgl/gloves.png') }}">
        </div>
    </div>

    
    {{-- =========================================== --}}
    {{-- All Buttons --}}
    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <button id="returnButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/return-btn.png') }}" />
        </button>
        <button id="homeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/home-btn.png') }}" />
        </button>
        <button id="closeButton">
            <img src="{{ asset('assets/images/phonicsl1/global/btns/cancel.png') }}" />
        </button>
    </div>

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
            const homeButton = document.getElementById("homeButton");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            const returnURL = "{{ url('/phonics_l2/fl_gl/gl') }}";
            const doneURL = "{{ url('/phonics_l2/fl_gl/gl') }}";
            const homeURL = document.body.dataset.homeRoute;

            let currentSlide = 0;
            let currentAudio = null;
            let cheeringAudio = null; // NEW

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.onended = null;
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    currentAudio = null;
                }
                if (cheeringAudio) { // NEW
                    cheeringAudio.pause();
                    cheeringAudio.currentTime = 0;
                    cheeringAudio = null;
                }
            }

            function playSlideAudio(idx) {
                stopCurrentAudio();
                const slide = slides[idx];
                const isAnswer = slide.classList.contains('answer');
                let src = slide.getAttribute('data-slide-audio');
                if (!src) {
                    const el = slide.querySelector('[data-slide-audio]');
                    if (el) src = el.getAttribute('data-slide-audio');
                }
                if (src) {
                    currentAudio = new Audio(src);
                    if (isAnswer) {
                        currentAudio.onended = function() {
                            cheeringAudio = new Audio(
                                "{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}");
                            cheeringAudio.play().catch(() => {});
                        };
                    }
                    currentAudio.play().catch(() => {});
                }
            }

            function isLastSlide(idx) {
                return idx >= slides.length - 1;
            }

            function showSlide(idx) {
                stopCurrentAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle('hidden', i !== idx));
                playSlideAudio(idx);

                if (isLastSlide(idx)) {
                    nextButtons.forEach(b => b.classList.add('hidden'));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.remove('hidden'));
                } else {
                    nextButtons.forEach(b => b.classList.remove('hidden'));
                    document.querySelectorAll('.doneButton').forEach(b => b.classList.add('hidden'));
                }
            }

            nextButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    if (currentSlide < slides.length - 1) showSlide(currentSlide + 1);
                });
            });

            soundButtons.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.stopPropagation();
                    e.preventDefault();
                    const src = btn.getAttribute('data-slide-audio');
                    if (src) {
                        stopCurrentAudio();
                        currentAudio = new Audio(src);
                        currentAudio.play().catch(() => {});
                    }
                });
            });

            if (returnButton) {
                returnButton.addEventListener('click', () => {
                    if (currentSlide === 0) {
                        stopCurrentAudio();
                        window.location.href = returnURL;
                    } else {
                        showSlide(currentSlide - 1);
                    }
                });
            }

            if (homeButton) {
                homeButton.addEventListener('click', () => {
                    stopCurrentAudio();
                    window.location.href = homeURL;
                });
            }

            document.querySelectorAll('.doneButton').forEach(b => {
                b.addEventListener('click', () => {
                    stopCurrentAudio();
                    window.location.href = doneURL;
                });
            });

            showSlide(0);
        });
    </script>
@endpush
