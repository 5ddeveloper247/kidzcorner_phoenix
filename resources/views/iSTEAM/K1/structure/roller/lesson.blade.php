@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/r1.png" />
        <h2 class="title stroke">Children, have you experienced riding on this type of structure?
            Do you know what structure this is?</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/r2.png" />
        <h2 class="title stroke">A roller coaster is an elevated track wit turns and slopes
            for open cars.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/r2.png" />
        <h2 class="title stroke">A roller coaster is an elevated track wit turns and slopes
            for open cars. </h2>
        <p class="note">Note: Have a children share their roller coaster riding experiences (if any).</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/r1.png" />
        <h2 class="title stroke">Can you ‘feel’ the excitement of a roller coaster ride?
            Can you tell where the turns and slopes of the track are?.</h2>

    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-start title stroke">Now, let’s learn how to build a ball roller coaster!</h2>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity </h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use the straws and pipe cleaner to build a ball roller coaster.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>1. Observe the structure of a roller coaster and answer some
                questions.</li>
        </ol>
        <img src="/assets/images//K1/str/r4.png" />
        <p class="note text-center">Note: <a href="" class="text-amber-300">Click here</a>Click here for questions.
            Guide children to identify the characteristics of a roller coaster.</p>

    </div>
    {{-- step 1 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Where are the starting and end of this roller coaster?</h2>
        <img src="/assets/images//K1/str/r5.png" />
        <p class="note text-center">Note: Guide children to spot the start and end of this roller coaster.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- step 2 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Where kind of structures are built to make the track elevated?</h2>
        <img src="/assets/images//K1/str/r5.png" />
        <p class="note text-center">Note: Guide children to talk about the shape and size of the support structures of this
            roller coaster - pyramids</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- step 3 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Where are the turns an slopes of the track?</h2>
        <img src="/assets/images//K1/str/r5.png" />
        <p class="note text-center">Note: Guide children to spot the turns and slopes of the track of this roller coaster.
        </p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- step 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to set up the turns and slopes of the track?</h2>
        <img src="/assets/images//K1/str/r5.png" />
        <p class="note text-center">Note: Guide children to understand that supports of different heights allow us to create
            turns and slopes.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>2. Learn how to build the track of a ball roller coaster.</li>
        </ol>
        <img src="/assets/images//K1/str/r6.png" />
        <p class="note text-center">Give each group a set of materials to work on. <a href=""
                class="text-amber-300">Click here</a> to follow the step-by-step guide.</p>
    </div>

    {{-- step 1 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to build the track of a ball roller coaster? <br>
            i. Make 2 short pieces of tracks.</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/str/r7.png" />
            <p class="note w-[100px]">Repeat for
                the second
                piece!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- step 2 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to build the track of a ball roller coaster? <br>
            ii. Make 7 long pieces of tracks</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/str/r8.png" />
            <p class="note w-[100px]">Repeat for
                the other
                pieces!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- step 3 --}}
    <div class="slide hidden  flex flex-col justify-start  ">
        <h2 class="text-start title stroke">How to build the track of a ball roller coaster? <br>
            iii. Join all the long pieces of tracks together as a long track</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/str/r9.png" />
            <p class="note w-[100px]">Repeat for
                the other
                pieces!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- step 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">How to build the track of a ball roller coaster? <br>
            iv. Join all the short pieces of track to each end of the long track</h2>
        <img src="/assets/images//K1/str/r10.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>





    {{-- slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol>
                <li>3. Learn how to build supports for the track of a ball roller coaster.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/r11.png" />
        <p class="note text-center">Note: Give each group a set of materials to work on. Click here to follow the step-by
            step guide.</p>
    </div>
    {{-- step 1 --}}
    <div class="slide hidden  flex flex-col justify-start  ">
        <h2 class="text-start title stroke">How to build support for the track of a ball roller coaster? <br>
            i. Make a pyramid.</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/str/r12.png" />
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- step 2 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">How to build support for the track of a ball roller coaster? <br>
            i. Make a total of 10 pyramids of different heights.</h2>
        <img src="/assets/images//K1/str/r13.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol>
                <li>4. Use your track and supports to form a roller coaster.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/r4.png" />
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href="">Click here</a>
            to follow the step-by
            step guide.</p>
    </div>
    {{-- step 1 --}}
    <div class="slide hidden  flex flex-col justify-start  ">
        <h2 class="text-start title stroke">How to fix the track on a support?</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/str/r14.png" />
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the step.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol>
                <li>5. How do you make sure that a ball can always roll from the
                    start to the end of your roller coaster?</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/r15.png" />
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href="">Click here</a>
            to follow the step-by
            step guide.</p>
    </div>
    {{-- step 1 --}}
    <div class="slide hidden  flex flex-col justify-start  ">
        <h2 class="text-start title stroke">How to make a ball roll down the track smoothly?</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/str/r16.png" />
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do so.
            Then have them work together in groups to make a successful ball roller coaster.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>






    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-30  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol>
                <li>6. Showcase your work.</li>
            </ol>
        </div>
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering
            activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>


    














    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>


    <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[85px]">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
        </button>
    </div>




@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('rollerSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
