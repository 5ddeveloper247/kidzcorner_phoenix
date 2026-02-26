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
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel no-bg mb-[2vw]">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />

            <h1 class="text-white text-[4vw] absolute top-[55%] left-1/2 -translate-1/2"> It's story <br> time!</h1>

            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2">Tip: After reading the story, invite children
                to identify the
                targeted blends. <br>
                Encourage them to look for words that rhyme as well. </p>
        </div>
    </div>


    {{-- Panel 2 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <h2 class="title-top stroke">The Blushing Plate</h2>
        <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[25vw]" />
    </div>


    {{-- Panel 3 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[25vw]" />
        <h2 class="title-top">Have you seen a blushing plate?</h2>
    </div>


    {{-- Panel 4 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[25vw]" />
        <h2 class="title-top">Have you seen him blush when he is late?</h2>
    </div>


    {{-- Panel 5 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[25vw]" />
        <h2 class="title-top">He blushes while playing with his blue plane.</h2>
    </div>


    {{-- Panel 6 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[25vw]" />
        <h2 class="title-top">He even blushes while patting his black crane.</h2>
    </div>

    {{-- Panel 7 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <img src="{{ asset('assets/images/phonics_l2/blpl/8.png') }}" class="w-[25vw]" />
        <h2 class="title-top">Have you seen a blushing plate blowing a balloon,</h2>
    </div>


    {{-- Panel 8 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <img src="{{ asset('assets/images/phonics_l2/blpl/9.png') }}" class="w-[25vw]" />
        <h2 class="title-top">and eating plumbs with a baboon?</h2>
    </div>

    {{-- Panel 9 --}}
    <div class="phonics-panel h-full flex flex-col justify-center items-center space-y-[1vw]">
        <img src="{{ asset('assets/images/phonics_l2/blpl/10.png') }}" class="w-[25vw]" />
        <h2 class="title-top">I have Yes, I have</h2>
    </div>

    {{-- Panel 10 --}}
    <div class="phonics-panel no-bg mb-[2vw]">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />

            <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2"> What was the <br>
                plate blowing?</h1>

            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">Tip: Elicit
                response from children. </p>
        </div>
    </div>

    {{-- Panel 11 --}}
    <div class="phonics-panel no-bg mb-[2vw]">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />

            <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2">What was the <br>
                plate eating?</h1>

            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">Tip: Elicit
                response from children. </p>
        </div>
    </div>

    {{-- Panel 12 --}}
    <div class="phonics-panel no-bg mb-[2vw]">
        <h2 class="top-title stroke">Story Time</h2>
        <div class="relative w-fit h-fit">
            <img src="{{ asset('assets/images/phonicsl1/global/jungle-board1.png') }}" class="w-[60vw]" />
            {{-- gifs --}}
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/buddy.gif') }}" class="h-[20vw] bottom-0 absolute" />
            <img src="{{ asset('assets/images/phonicsl1/global/gifs/lili.gif') }}"
                class="h-[20vw] bottom-0 right-0 absolute" />

            <h1 class="text-white text-[2.5vw] absolute top-[55%] left-1/2 -translate-1/2">What other things <br>
                do you think will <br> make the plate <br> blush?</h1>

            <p class="p-note w-full absolute mb-0 left-[50%] -translate-1/2" style="bottom: -3% !important;">Tip: Elicit
                response from children. </p>
        </div>
    </div>


    {{-- Panel 13 --}}
    <div class="phonics-panel mb-[2vw]">
        <div class="flex items-end justify-center ">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('assets/images/phonics_l2/global/common/blank.png') }}" class="scale-x-[-1] w-[33vw]" />
                <h1 class="text-[2vw] w-full absolute top-1/2 left-1/2 -translate-1/2 text-[#A15E0D]">Find the picture that
                    <br>
                    goes with the sentence.
                </h1>
            </div>
            <img src="{{ asset('assets/images/phonicsl1/global/bear.png') }}" class="h-[20vw]" />
        </div>

        <p class="p-note w-full">Tip: Invite children to read the sentence
            before selecting the appropriate .picture. <br>
            Encourage them to sound out words by parts when in doubt.</p>
    </div>


    {{-- Panel 14 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[10vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question bg-[#f7b94a]! text-[#A15E0D]!">Have you seen a blushing plate?</div>
            <div class="question">Have you seen him blush when he is late?</div>
            <div class="question">He blushes while playing with his blue plane.</div>
            <div class="question">He even blushes while patting his black crane.</div>
        </div>
    </div>

    {{-- Panel 15 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[9vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[10vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question done"> <span class="absolute left-0 pl-5">1</span> Have you seen a blushing plate?</div>
            <div class="question">Have you seen him blush when he is late?</div>
            <div class="question">He blushes while playing with his blue plane.</div>
            <div class="question">He even blushes while patting his black crane.</div>
        </div>
    </div>


    {{-- Panel 16 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[10vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question">Have you seen a blushing plate?</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">Have you seen him blush when he is late?</div>
            <div class="question">He blushes while playing with his blue plane.</div>
            <div class="question">He even blushes while patting his black crane.</div>
        </div>
    </div>

    {{-- Panel 17 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[10vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question done"> <span class="absolute left-0 pl-5">1</span> Have you seen a blushing plate?</div>
            <div class="question done"> <span class="absolute left-0 pl-5">2</span> Have you seen him blush when he is
                late?</div>
            <div class="question">He blushes while playing with his blue plane.</div>
            <div class="question">He even blushes while patting his black crane.</div>
        </div>
    </div>


    {{-- Panel 18 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[10vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question">Have you seen a blushing plate?</div>
            <div class="question">Have you seen him blush when he is late?</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">He blushes while playing with his blue plane.</div>
            <div class="question">He even blushes while patting his black crane.</div>
        </div>
    </div>

    {{-- Panel 19 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">3</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[9vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question done">
                <span class="absolute left-0 pl-5">1</span> Have you seen a blushing plate?
            </div>
            <div class="question done">
                <span class="absolute left-0 pl-5">2</span> Have you seen him blush when he is late?
            </div>
            <div class="question done">
                <span class="absolute left-0 pl-5">3</span>He blushes while playing with his blue plane.
            </div>
            <div class="question">He even blushes while patting his black crane.</div>
        </div>
    </div>


    {{-- Panel 20 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[10vw]" />
            </div>
            <div class="p-[0.5vw] rounded-xl border-2 border-[#f7b94a]">
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[10vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question">Have you seen a blushing plate?</div>
            <div class="question">Have you seen him blush when he is late?</div>
            <div class="question">He blushes while playing with his blue plane.</div>
            <div class="question bg-[#f7b94a]! text-[#A15E0D]!">He even blushes while patting his black crane.</div>
        </div>
    </div>


    {{-- Panel 21 --}}
    <div class="phonics-panel mb-[2vw]">
        <h2 class="title-top">Find the picture that goes with the sentence.</h2>

        {{-- images --}}
        <div class="flex items-center h-fit gap-[2vw]">
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">1</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/16.png') }}" class="w-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">2</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/5.png') }}" class="w-[8vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">3</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/6.png') }}" class="w-[9vw]" />
            </div>
            <div class="p-[1vw] rounded-xl border-2 border-[#f7b94a] relative w-fit h-fit">
                <span class="absolute top-0 left-0 pl-4 text-white">4</span>
                <img src="{{ asset('assets/images/phonics_l2/blpl/tick.png') }}"
                    class="h-[1.5vw] absolute right-0 top-0 pr-3" />
                <img src="{{ asset('assets/images/phonics_l2/blpl/7.png') }}" class="w-[9vw]" />
            </div>

        </div>
        <div class="flex flex-col gap-[0.5vw] justify-center mt-4">
            <div class=" question done">
                <span class="absolute left-0 pl-5">1</span> Have you seen a blushing plate?
            </div>
            <div class="question done">
                <span class="absolute left-0 pl-5">2</span> Have you seen him blush when he is late?
            </div>
            <div class="question done">
                <span class="absolute left-0 pl-5">3</span> He blushes while playing with his blue plane.
            </div>
            <div class="question done">
                <span class="absolute left-0 pl-5">4</span> He even blushes while patting his black crane.
            </div>
        </div>
    </div>

    {{-- Panel 22 --}}
    <div class="phonics-panel h-full justify-between">
        <h2 class="title-top">Well Done!</h2>
        <img src="{{ asset('assets/images/phonicsl1/global/gifs/welldone.gif') }}" class="h-[25vw]" />
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
