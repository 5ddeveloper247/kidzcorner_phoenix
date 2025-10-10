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
        <img src="/assets/images/K1/str/um1.png" />
        <h2 class="title stroke">Children, this is another type of structure.
            What is it called? What do we use it for?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="/assets/images/K1/str/um1.png" />
            <img src="/assets/images/K1/str/um2.png" />
        </div>
        <h2 class="title stroke">An umbrella is a folding canopy designed
            to protect us from the rain or sunlight.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/um3.png" />
        <h2 class="title stroke">If you look closely, the canopy of an umbrella is supported by
            a structure formed by the connected parts.</h2>
        <p class="note">Note: Display an umbrella. Have children point out the shaft, ribs and stretches of the umbrella.
        </p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class="title stroke">Now, let’s learn how to build an umbrella!</h2>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use the straws and pipe cleaners to build the structure
            of an umbrella.</h2>
        <p class="note text-center">Note: Display a premade sample of the structure of an umbrella.</p>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>1. Observe the structure of this umbrella and count how
                many ribs and stretchers there are.</li>
        </ol>
        <img src="/assets/images//K1/str/um4.png" />
        <p class="note text-center">Note: Guide children to count number of ribs and stretchers in this umbrella.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- Slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>2. Learn how to build the structure of an umbrella.</li>
        </ol>
        <img src="/assets/images//K1/str/um4.png" />
        <p class="note text-center">Note: Give each group a set of materials to work on. <a href=""
                class="text-amber-300">Click here</a> to follow the step-by-step guide.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- step 1 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 1 of 9</h2>
        <img src="/assets/images//K1/str/um5.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.
        </p>

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
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 2 of 9</h2>
        <img src="/assets/images//K1/str/um6.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 3 of 9</h2>
        <img src="/assets/images//K1/str/um7.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 4 of 9</h2>
        <img src="/assets/images//K1/str/um8.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- step 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 5 of 9</h2>
        <img src="/assets/images//K1/str/um9.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- step 6 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 6 of 9</h2>
        <div class="flex items-center">
            <img src="/assets/images//K1/str/um10.png" />
            <p class="note w-[80px]">Do the
                same for
                the other
                4 parts!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- step 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 7 of 9</h2>
        <img src="/assets/images//K1/str/um11.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- step 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 8 of 9</h2>
        <img src="/assets/images//K1/str/um12.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- step 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make the structure of an umbrella? - Step 9 of 9</h2>
        <div class="flex items-center">
            <img src="/assets/images//K1/str/um13.png" />
            <p class="note w-[80px]">Do the
                same for
                the other
                4 parts!</p>
        </div>
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ol>
                <li>3. Showcase your work.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/um4.png" />
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering
            activity (refer to the possible questions for reflection in the teacher's mode).</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/um14.png" />
        <h2 class="title stroke">Nowadays, umbrellas come in all sorts of prints and designs.
            Which one do you think is the prettiest?</h2>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Design and build the canopy of your umbrella.</h2>
    </div>

    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>1. What design would you like to have on your umbrella’s
                canopy? Draw it in the learning journal.</li>
        </ol>
        <img src="/assets/images//K1/str/um15.png" />
        <p class="note text-center">Note: Encourage children to design the look of their umbrellas creatively in the
            learning journal.</p>
    </div>



    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>2. Choose the wrappers based on your design idea and start
                building the canopy of your umbrella.</li>
        </ol>
        <img src="/assets/images//K1/str/st18.png" />
        <p class="note text-center">Note: Encourage children try to find their own building techniques. <a href=""
                class="text-amber-300">Click Here</a> to see a way to build.</p>
    </div>

    {{-- sclik slde --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/str/um16.png" />
        <p class="note text-center">Note: Give children more times to explore and learn their own building techniques.
            Pause the class for once or twice to point out good building techniques.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- .slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <h2 class="text-center title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>3.Showcase your work..</li>
        </ol>
        <p class="note text-center">Note: During the showcase, have children share their design ideas to the class.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-center items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="/assets/images//K1/str/um17.png" />
       </div>
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
                    window.location.href = "{{ route('umbrellaSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
