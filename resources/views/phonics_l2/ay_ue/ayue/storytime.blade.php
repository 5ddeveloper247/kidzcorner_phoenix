@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php $showBackground = true; @endphp

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

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush

@section('content')

    @php

        $storySlides = [
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st1.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story1.png',
                'text' => 'Ray the Mule',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st2.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story2.png',
                'text' => 'Ray the mule likes to play with clay.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st3.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story3.png',
                'text' => '“”What can I say... playing with clay always makes my day!”” Says Ray.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st4.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story4.png',
                'text' => 'One day, while walking with his lump of clay.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st5.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story5.png',
                'text' => 'Ray spots a huge tray of hay right in front of the walkway.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st6.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story6.png',
                'text' => 'Feeling hungry, Ray decides to stay and eat the hay.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st7.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story7.png',
                'text' => 'Along comes the Duke and says that Ray has to pay.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st8.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story8.png',
                'text' => 'Ray takes out his clay and molds it into a cube and a tube.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/st9.m4a',
                'image' => 'assets/images/phonics_l2/ayue/story9.png',
                'text' => 'He gives them to the Duke who finds them rather cute. 
And so Ray does not need to pay for his hay.',
            ],
        ];

        $storyQuestions = [
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/stq1.m4a',
                'question' => "What does Ray \nlike to play with?",
                'tip' => 'Tip: Elicit response from children.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/stq2.m4a',
                'question' => "What does Ray find\nin front of the \n walkway?",
                'tip' => 'Tip: Elicit response from children.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/stq3.m4a',
                'question' => "Why does the \nDuke want \n Ray to pay?",
                'tip' => 'Tip: Elicit response from children.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/stq4.m4a',
                'question' => "What does Ray \ngive to the \n Duke?",
                'tip' => 'Tip: Elicit response from children.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/stq5.m4a',
                'question' => "Why doesn’t Ray \n need to pay in \n the end?",
                'tip' => 'Tip: Elicit response from children.',
            ],
            [
                'audio' => 'assets/audio/phonics_audio-2/ay_ue/stq6.m4a',
                'question' => "If  you had a lump \n of clay, what would \n you mold it into?",
                'tip' => 'Tip: Elicit response from children.',
            ],
        ];

    @endphp


    {{-- Panel 1 — Story Time intro --}}
    <div class="phonics-panel no-bg mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/storytime.m4a') }}">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />
            <h1 class="text-white text-[4vw] absolute top-[55%] left-1/2 -translate-1/2">It's story <br> time!</h1>
            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2">
                Tip: After reading the story, invite children to identify the targeted blends. <br>
                Encourage them to look for words that rhyme as well.
            </p>
        </div>
    </div>

    {{-- Story Slides (generated from $storySlides) --}}
    @foreach ($storySlides as $slide)
        <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]"
            data-slide-audio="{{ asset($slide['audio']) }}">
            <h2 class="title-top stroke">
                {{ $storySlides[0]['text'] === $slide['text'] ? 'Ray the Mule' : '' }}
            </h2>
            <img src="{{ asset($slide['image']) }}" class="{{ $loop->first ? 'h-[20vw]' : 'h-[20vw]' }}" />
            @if (!$loop->first)
                <h2 class="title-top">{{ $slide['text'] }}</h2>
            @endif
        </div>
    @endforeach

    {{-- Story-Time Question Slide --}}
    @foreach ($storyQuestions as $q)
        <div class="phonics-panel no-bg mb-[2vw]" data-slide-audio="{{ asset($q['audio']) }}">
            <h2 class="top-title stroke">Story Time</h2>
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}"
                    class="h-[20vw] bottom-0 absolute" />
                <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                    class="h-[20vw] bottom-0 right-0 absolute" />
                <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2">
                    {!! nl2br(e($q['question'])) !!}
                </h1>
                <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">
                    {{ $q['tip'] }}
                </p>
            </div>
        </div>
    @endforeach



    {{-- Panel 13 — Find the picture intro --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/st-find.m4a') }}">
        <div class="flex items-end justify-center">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="scale-x-[-1] w-[33vw]" />
                <h1 class="text-[2vw] w-full absolute top-1/2 left-1/2 -translate-1/2 text-[#A15E0D]">
                    Find the picture that <br> goes with the sentence.
                </h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[25vw]" />
        </div>
        <p class="p-note w-full">Tip: Invite children to read the sentence before selecting the appropriate picture. <br>
            Encourage them to sound out words by parts when in doubt.</p>
    </div>

    {{-- Panel 14 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ay_ue/st2.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="h-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="w-[7vw] answer" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="w-[7vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">Ray the mule likes to play with clay.</div>
            <div class="question">One day while walking with his lump of clay.</div>
            <div class="question">Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question">Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 15 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="h-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw]" />
            </div>

            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="h-[7vw]" />
            </div>

            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="w-[7vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Ray the mule likes to play with clay. </div>
            <div class="question">One day while walking with his lump of clay.</div>
            <div class="question">Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question">Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 16 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ay_ue/st3.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="h-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="w-[7vw] answer" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question">Ray the mule likes to play with clay.</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">One day while walking with his lump of clay.</div>
            <div class="question">Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question">Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 17 --}}
    <div class="phonics-panel mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="h-[7vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="w-[7vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Ray the mule likes to play with clay.</div>
            <div class="question done"><span class="absolute left-0 pl-5">2</span> One day while walking with his lump of clay. </div>
            <div class="question">Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question">Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 18 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ay_ue/st4.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="h-[7vw] answer" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="w-[7vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question">Ray the mule likes to play with clay.</div>
            <div class="question">One day while walking with his lump of clay.</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question">Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 19 --}}
    <div class="phonics-panel mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="h-[7vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">3</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Ray the mule likes to play with clay.</div>
            <div class="question done"><span class="absolute left-0 pl-5">2</span> One day while walking with his lump of clay.</div>
            <div class="question done"><span class="absolute left-0 pl-5">3</span> Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question">Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 20 --}}
    <div class="phonics-panel mb-[2vw]" data-slide-audio="{{ asset('assets/audio/phonics_audio-2/ay_ue/st5.m4a') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw] answer" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="h-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a] w-[10vw] h-[10vw] box">
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="w-[7vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question">Ray the mule likes to play with clay.</div>
            <div class="question">One day while walking with his lump of clay.</div>
            <div class="question">Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 21 --}}
    <div class="phonics-panel mb-[2vw]"
        data-slide-audio="{{ asset('assets/audio/phonics_audio-2/common/cheering.mp3') }}">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story3.png') }}" class="h-[7vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story4.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">3</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story5.png') }}" class="w-[7vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-[10vw] box h-[10vw]">
                <span class="absolute top-0 left-0 pl-4 text-white">4</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/ayue/story6.png') }}" class="w-[7vw]" />
            </div>
        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class="question done"><span class="absolute left-0 pl-5">1</span> Ray the mule likes to play with clay. </div>
            <div class="question done"><span class="absolute left-0 pl-5">2</span> One day while walking with his lump of clay.</div>
            <div class="question done"><span class="absolute left-0 pl-5">3</span> Ray spots a huge of hay right in front of his walkway.</div>
            <div class="question done"><span class="absolute left-0 pl-5">4</span> Feeling hungry, Ray decides to stay and eat the hay.</div>
        </div>
    </div>

    {{-- Panel 22 — Well Done --}}
    <div class="phonics-panel h-full justify-between"
        data-slide-audio="{{ asset('assets/audio/phonics_audio/welldone.mp3') }}">
        <h2 class="title-top">Well Done!</h2>
        <img src="{{ asset('assets/images/phonicsl1/global/gifs/welldone.gif') }}" class="h-[25vw]" />
    </div>


    {{-- ── Buttons (unchanged) ──────────────────────────────────── --}}
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

            /* CONFIG */
            const returnURL = "{{ url('/phonics_l2/ay_ue/ayue') }}";
            const doneURL = "{{ url('/phonics_l2/ay_ue/ayue') }}";

            /* DOM */
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const doneButtons = document.querySelectorAll(".doneButton");
            const returnButton = document.getElementById("returnButton");
            const homeButton = document.getElementById("homeButton");
            const ajaxSection = document.getElementById("ajax-section");

            /* STATE */
            let currentSlide = 0,
                currentAudio = null;
            let isInSpecialMode = false,
                returnToSlide = null,
                specialSlideClass = null;

            /* AUDIO */
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

            /* SLIDE HELPERS */
            function isSpecialSlide(slide) {
                return Array.from(slide.classList).some(c => /^info-panel-\d+$/.test(c));
            }

            function isLastSlide(idx) {
                if (isInSpecialMode)
                    return !Array.from(slides).slice(idx + 1).some(s => s.classList.contains(specialSlideClass));
                return !Array.from(slides).slice(idx + 1).some(s => !isSpecialSlide(s));
            }

            /* SHOW SLIDE */
            function showSlide(idx) {
                stopAudio();
                currentSlide = idx;
                slides.forEach((s, i) => s.classList.toggle("hidden", i !== idx));
                if (ajaxSection)
                    ajaxSection.classList.toggle("no-bg", slides[idx].classList.contains("no-bg"));
                const last = isLastSlide(idx);
                nextButtons.forEach(b => b.classList.toggle("hidden", last));
                doneButtons.forEach(b => b.classList.toggle("hidden", !last));
                playSlideAudio(idx);
            }

            /* NAVIGATION */
            function goNext() {
                let next = currentSlide + 1;
                while (next < slides.length) {
                    const ok = isInSpecialMode ?
                        slides[next].classList.contains(specialSlideClass) :
                        !isSpecialSlide(slides[next]);
                    if (ok) break;
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

            /* INFO BUTTONS */
            document.querySelectorAll("[class*='info-btn']").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.preventDefault();
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = Array.from(btn.classList)
                        .find(c => c.startsWith("info-btn"))?.replace("info-btn", "info-panel-");
                    const target = Array.from(slides).findIndex(s => s.classList.contains(
                        specialSlideClass));
                    if (target !== -1) showSlide(target);
                });
            });

            /* SOUND BUTTONS */
            document.querySelectorAll("[id^='soundButton']").forEach(btn => {
                btn.addEventListener("click", e => {
                    e.stopPropagation();
                    e.preventDefault();
                    playAudio(btn.getAttribute("data-slide-audio"));
                });
            });

            /* EVENT LISTENERS */
            nextButtons.forEach(b => b.addEventListener("click", goNext));
            doneButtons.forEach(b => b.addEventListener("click", handleDone));
            returnButton?.addEventListener("click", goBack);
            homeButton?.addEventListener("click", () => {
                stopAudio();
                window.location.href = document.body.dataset.homeRoute;
            });

            /* ANSWER CLICK */
            document.querySelectorAll(".answer").forEach(el => el.addEventListener("click", goNext));

            /* INIT */
            showSlide(0);
        });
    </script>
@endpush
