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
            bottom: -6%
        }

        .title-top {
            font-size: 2vw !important;
            color: #F7B94A;
        }

        .question {
            width: 100%;
            text-align: center;
            padding: 0.5vw 0;
            font-size: 1.5vw;
            background: white;
            color: #c7c7c7;
            border-radius: 1vw;
        }

        .done {
            background: #2d9cdb !important;
            color: white !important;
            height: fit-content;
            position: relative;
        }

        .answer {
            cursor: pointer;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel no-bg mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/storytime.mp3') }}">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />
            <h1 class="text-white text-[4vw] absolute top-[55%] left-1/2 -translate-1/2"> It's story <br> time!</h1>
            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2">Tip: After reading the story, invite children
                to identify the targeted blends. <br>
                Encourage them to look for words that rhyme as well. </p>
        </div>
    </div>

    {{-- Panel 2 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st1.m4a') }}">
        <h2 class="title-top stroke">Brad the Prince</h2>
        <img src="{{ asset('assets/images/phonics_l2/brpr/prince.png') }}" class="h-[25vw]" />
    </div>

    {{-- Panel 3 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st2.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[25vw]" />
        <h2 class="title-top">Brad the prince loves to sit in his pram.</h2>
    </div>

    {{-- Panel 4 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st3.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[25vw]" />
        <h2 class="title-top">He sits in his pram eating bread and jam.</h2>
    </div>

    {{-- Panel 5 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st4.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[25vw]" />
        <h2 class="title-top">The pram was a present from the Queen.</h2>
    </div>

    {{-- Panel 6 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st5.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[25vw]" />
        <h2 class="title-top">He didn’t like the brown so he painted it green.</h2>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st6.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/brpr/st6.png') }}" class="h-[25vw]" />
        <h2 class="title-top">He brushes his pram daily to keep it clean.</h2>
    </div>

    {{-- Panel 8 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st7.m4a') }}">
        <img src="{{ asset('assets/images/phonics_l2/brpr/st7.png') }}" class="h-[25vw]" />
        <h2 class="title-top">He says, ’’It’s the prettiest I have ever seen!”’.</h2>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel no-bg mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/stq1.m4a') }}">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />
            <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2"> Who loves to <br>
                sit in the pram?</h1>
            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">Tip: Elicit
                response from children. </p>
        </div>
    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel no-bg mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/stq2.m4a') }}">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />
            <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2">What does he <br>
                eat in the <br>
                pram?</h1>
            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">Tip: Elicit
                response from children. </p>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel no-bg mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/stq3.m4a') }}">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />
            <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2">Why does he <br>
                love his <br>
                pram?</h1>
            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">Tip: Elicit
                response from children. </p>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel no-bg mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/stq4.m4a') }}">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />
            <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2">What would you <br>
                do if you had <br>
                a pram?</h1>
            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">Tip: Elicit
                response from children. </p>
        </div>
    </div>

    {{-- Panel 13 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/st-find.mp3') }}">
        <div class="flex items-end justify-center ">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}"
                    class="scale-x-[-1] w-[33vw]" />
                <h1 class="text-[2vw] w-full absolute top-1/2 left-1/2 -translate-1/2 text-[#A15E0D]">Find the picture that
                    <br> goes with the sentence.
                </h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note w-full">Tip: Invite children to read the sentence
            before selecting the appropriate picture. <br>
            Encourage them to sound out words by parts when in doubt.</p>
    </div>

    {{-- Panel 14 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st2.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[10vw] answer" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[10vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">Brad the Prince loves to sit in his pram.</div>
            <div class="question">He sits in his pram eating bread and jam.</div>
            <div class="question">The pram was a present from the Queen.</div>
            <div class="question">He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 15 --}}
    <div class="phonics-panel mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[10vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Brad the Prince loves to sit in his pram.</div>
            <div class="question">He sits in his pram eating bread and jam.</div>
            <div class="question">The pram was a present from the Queen.</div>
            <div class="question">He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 16 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st3.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[10vw] answer" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question">Brad the Prince loves to sit in his pram.</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">He sits in his pram eating bread and jam.</div>
            <div class="question">The pram was a present from the Queen.</div>
            <div class="question">He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 17 --}}
    <div class="phonics-panel mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[8vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[9vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[10vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Brad the Prince loves to sit in his pram.</div>
            <div class="question done"><span class="absolute left-0 pl-5">2</span> He sits in his pram eating bread and jam.</div>
            <div class="question">The pram was a present from the Queen.</div>
            <div class="question">He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 18 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st4.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[10vw] answer" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[10vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question">Brad the Prince loves to sit in his pram.</div>
            <div class="question">He sits in his pram eating bread and jam.</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">The pram was a present from the Queen.</div>
            <div class="question">He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 19 --}}
    <div class="phonics-panel mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">3</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[9vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Brad the Prince loves to sit in his pram.</div>
            <div class="question done"><span class="absolute left-0 pl-5">2</span> He sits in his pram eating bread and jam.</div>
            <div class="question done"><span class="absolute left-0 pl-5">3</span> The pram was a present from the Queen.</div>
            <div class="question">He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 20 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/br_pr/st5.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[10vw] answer" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[10vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question">Brad the Prince loves to sit in his pram.</div>
            <div class="question">He sits in his pram eating bread and jam.</div>
            <div class="question">The pram was a present from the Queen.</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 21 --}}
    <div class="phonics-panel mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st2.png') }}" class="h-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st3.png') }}" class="h-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">3</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st4.png') }}" class="h-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">4</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/brpr/st5.png') }}" class="h-[9vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Brad the Prince loves to sit in his pram.</div>
            <div class="question done"><span class="absolute left-0 pl-5">2</span> He sits in his pram eating bread and jam.</div>
            <div class="question done"><span class="absolute left-0 pl-5">3</span> The pram was a present from the Queen.</div>
            <div class="question done"><span class="absolute left-0 pl-5">4</span> He didn’t like the brown so he painted it green.</div>
        </div>
    </div>

    {{-- Panel 22 --}}
    <div class="phonics-panel h-full justify-between"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/welldone.mp3') }}">
        <h2 class="title-top">Well Done!</h2>
        <img src="{{ asset('assets/images/phonicsl1/global/gifs/welldone.gif') }}" class="h-[25vw]" />
    </div>


    {{-- ======================================================== --}}
    {{-- Buttons --}}
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

            /*CONFIG */
            const returnURL = "{{ url('/phonics_l2/br_pr/brpr') }}";
            const doneURL = "{{ url('/phonics_l2/br_pr/brpr') }}";

            /*DOM */
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const ajaxSection = document.getElementById("ajax-section");

            /*STATE */
            let currentSlide = 0;
            let currentAudio = null;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            /*AUDIO */
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
                const src = slide.getAttribute("data-slide-audio") ||
                    slide.querySelector("[data-slide-audio]")?.getAttribute("data-slide-audio");
                playAudio(src);
            }

            /*SLIDE HELPERS */
            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            function isLastSlide(idx) {
                if (isInSpecialMode) {
                    return !Array.from(slides).slice(idx + 1).some(s => s.classList.contains(specialSlideClass));
                }
                return !Array.from(slides).slice(idx + 1).some(s => !isSpecialSlide(s));
            }

            /*SHOW SLIDE */
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;

                slides.forEach((s, i) => s.classList.toggle("hidden", i !== idx));

                // no-bg handling
                if (ajaxSection) {
                    ajaxSection.classList.toggle("no-bg", slides[idx].classList.contains("no-bg"));
                }

                // next / done visibility
                const last = isLastSlide(idx);
                nextButtons.forEach(b => b.classList.toggle("hidden", last));
                doneButtons.forEach(b => b.classList.toggle("hidden", !last));

                playSlideAudio(idx);
            }

            /*NAVIGATION */
            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    const isTarget = isInSpecialMode ?
                        slides[next].classList.contains(specialSlideClass) :
                        !isSpecialSlide(slides[next]);
                    if (isTarget) break;
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

            function handleDone() {
                stopAudio();
                if (isInSpecialMode && returnToSlide !== null) {
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    showSlide(returnToSlide);
                    returnToSlide = null;
                } else {
                    window.location.href = doneURL;
                }
            }

            /*INFO BUTTONS (special mode) */
            document.querySelectorAll("[class*='info-btn']").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = Array.from(btn.classList)
                        .find(c => c.startsWith("info-btn"))
                        ?.replace("info-btn", "info-panel-");

                    const target = Array.from(slides).findIndex(s => s.classList.contains(
                        specialSlideClass));
                    if (target !== -1) showSlide(target);
                });
            });

            /*SOUND BUTTONS */
            document.querySelectorAll("[id^='soundButton']").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute("data-slide-audio"));
                });
            });

            /*EVENT LISTENERS */
            nextButtons.forEach(b => b.addEventListener("click", goNext));
            doneButtons.forEach(b => b.addEventListener("click", handleDone));
            returnButton?.addEventListener("click", goBack);
            homeButton?.addEventListener("click", () => {
                stopAudio();
                window.location.href = document.body.dataset.homeRoute;
            });
            /*ANSWER CLICK */
            document.querySelectorAll(".answer").forEach(el => {
                el.addEventListener("click", () => {
                    goNext();
                });
            })

            /*INIT */
            showSlide(0);
        });;
    </script>
@endpush
