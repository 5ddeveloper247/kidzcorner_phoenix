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
            width: 300px;
            height: 180px;
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
    {{-- Top Title --}}

    {{-- panel 1 --}}
    <div class="phonics-panel" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl1.m4a') }}">
        <h2 class="top-title stroke">Match It</h2>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/phonics_l2/global/common/play.png') }}" class="w-[30vw] h-[20vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note">Tips: Encourage children to say the 'pl' sound. <br>
            Remind them to list en to the initial sound when naming each object.</p>
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/1.png') }}">

                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/1.png') }}">

            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}">
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[9vw]"
                src="{{ asset('assets/images/phonics_l2/blpl/19.png') }}">
        </div>
    </div>



    {{-- Panel 4 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/4.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/20.png') }}">

                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/4.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/blpl/20.png') }}">

            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}">
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[9vw]"
                src="{{ asset('assets/images/phonics_l2/blpl/20.png') }}">
        </div>
    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/11.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/3.png') }}">

                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 rounded-xl w-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/23.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>


    {{-- Panel 7 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/11.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[6vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/3.png') }}">

            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2  w-[6vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/blpl/23.png') }}">
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[9vw] rounded-xl"
                src="{{ asset('assets/images/phonics_l2/blpl/23.png') }}">
        </div>
    </div>


    {{-- Panel 8 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/24.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/13.png') }}">

                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>


    {{-- Panel 9 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/blpl/4.png') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/13.png') }}">

            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/17.png') }}">
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[9vw]"
                src="{{ asset('assets/images/phonics_l2/blpl/24.png') }}">
        </div>
    </div>


    {{-- Panel 10 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/2.gif') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/12.png') }}">

                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/25.png') }}">
                <button class="absolute bottom-[10%] left-[5%] w-[3vw]" id="soundButton"
                    data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                    <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
                </button>
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <button class="absolute top-0 -right-[20%] w-[3vw]" id="soundButton"
                data-slide-audio="{{ asset('assets/audio/phonics_audio-2/bl_pl/bl2.m4a') }}">
                <img src="{{ asset('assets/images/phonicsl1/global/btns/sound-btn.png') }}" />
            </button>
        </div>
    </div>


    {{-- Panel 11 --}}
    <div class="phonics-panel flex flex-col justify-center space-y-[2vw]! items-center">
        <h2 class="panel-title stroke">Find the picture that has the same <br>
            initial blend as the one on the box.</h2>

        <div class="flex">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 h-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/2.gif') }}">
            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw]"
                    src="{{ asset('assets/images/phonics_l2/blpl/12.png') }}">

            </div>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/guess.png') }}" class="w-[15vw]" />
                <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[7vw] opacity-0"
                    src="{{ asset('assets/images/phonics_l2/blpl/25.png') }}">
            </div>
        </div>

        <div class="box">
            <h2 class="panel-title absolute top-0 right-0 px-[1vw]">pl</h2>
            <img class="absolute top-1/2 left-1/2 -translate-1/2 w-[9vw]"
                src="{{ asset('assets/images/phonics_l2/blpl/25.png') }}">
        </div>
    </div>





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

            const returnURL = "{{ url('/phonics_l2/bl_pl/pl') }}";
            const doneURL = "{{ url('/phonics_l2/bl_pl/pl') }}";
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
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                stopCurrentAudio();

                const slide = slides[slideIndex];

                setTimeout(() => {
                    let audioSrc = slide.getAttribute('data-slide-audio');

                    if (!audioSrc) {
                        const audioElement = slide.querySelector('[data-slide-audio]');
                        if (audioElement) {
                            audioSrc = audioElement.getAttribute('data-slide-audio');
                        }
                    }

                    if (audioSrc) {
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                }, AUTO_PLAY_DELAY);
            }

            // ✅ FIX 1: showSlide now targets ALL .doneButton elements
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

            // ✅ FIX 2: handleDone always navigates to doneURL
            function handleDone() {
                stopCurrentAudio();
                window.location.href = doneURL;
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

            // ✅ FIX 3: Attach handleDone to ALL .doneButton elements
            document.querySelectorAll(".doneButton").forEach(btn => {
                btn.addEventListener("click", handleDone);
            });

            showSlide(currentSlide);
        });
    </script>
@endpush
