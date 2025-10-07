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
        <img src="/assets/images/K1/str/gw1.png" />
        <h2 class="title stroke">Children, this is another type of structure.
            What is it called? What do we use it for?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/gw2.png" />
        <h2 class="title stroke">A giant wheel is a very large upright wheel with carriages.</h2>
        <p class="note"> Note: Have children point out and compare the carriages of these two giant wheels.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/gw1.png" />
        <h2 class="title stroke">We may take a ride on a giant wheel for fun and excitement. </h2>
        <p class="note">Note: Have children share their giant wheel riding experiences (if any).</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/gw3.png" />
        <h2 class="title stroke">Tourists may take a ride on a giant wheel to view
            the scenery around a city.</h2>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/gw3.png" />
        <h2 class="text-start title stroke">Do you know how a giant wheel works?</h2>
        <p class="note text-center">Note: Guide children to recall and talk about how a wheel and axle works as a simple
            machine.</p>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/gw3.png" />
        <h2 class="text-start title stroke">As the wheel and axle turn together, the carriages attached
            to the outer rim of a giant wheel will move too.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-start title stroke">Now, let’s learn how to build a giant wheel!</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use the straws and pipe cleaners to build the structure of a giant wheel.</h2>
        <p class="note">Note: Display a premade sample of the structure of a giant wheel.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>1. Observe the structure of this giant wheel and name the
                shapes that form it.</li>
        </ol>
        <img src="/assets/images//K1/str/gw4.png" />
        <p class="note text-center">Note: Guide children to spot the shapes (hexagons, triangles, triangular prism) from the
            premade sample.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>2. Learn how to build the structure of a giant wheel</li>
        </ol>
        <img src="/assets/images//K1/str/gw4.png" />
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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 1 of 8</h2>
        <img src="/assets/images//K1/str/gw5.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..
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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 2 of 8</h2>
        <img src="/assets/images//K1/str/gw6.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..</p>

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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 3 of 8</h2>
        <img src="/assets/images//K1/str/gw7.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..</p>

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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 4 of 8</h2>
        <img src="/assets/images//K1/str/gw8.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..</p>

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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 5 of 8</h2>
        <img src="/assets/images//K1/str/gw9.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..</p>

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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 6 of 8</h2>
        <img src="/assets/images//K1/str/gw10.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..</p>

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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 7 of 8</h2>
        <img src="/assets/images//K1/str/gw11.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..</p>

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
        <h2 class="text-center title stroke">How to build the structure of a giant wheel? - Step 8 of 8</h2>
        <img src="/assets/images//K1/str/gw12.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all
            the sub-steps. Then have them work together in groups to complete the sub-steps..</p>

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
                <li>3. Showcase your work.</li>
            </ol>
        </div>
        <img src="/assets/images//K1/str/gw4.png" />
        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>




    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/gw13.png" />
        <h2 class="title stroke">Different giant wheels have different designs of carriages
            but all carriages always hang downwards as the wheels spin.</h2>
    </div>



    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/gw14.png" />
        <h2 class="text-start title stroke">It means that when the wheel is spinning, the riders in the
            carriages will remain balanced at all times.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Design and build carriages for your giant wheel.</h2>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-start title stroke">Steps:</h2>
        <ol class="title stroke list-decimal">
            <li>
                Design carriages for your giant wheel. Draw your design in
                the learning journal.
            </li>
            <li>
                Choose the materials based on your design idea and start
                building the carriages.
            </li>
            <li>
                Showcase your work.
            </li>

        </ol>
        <p class="note text-center">Note: Encourage children to design the look of their carriages creatively in the
            learning journal and
            then choose suitable art and craft materials to build the carriages. <a href=""
                class="text-amber-300">Click here</a> to see one example.
            During the showcase, have each group share their design ideas to the class.</p>
    </div>

    {{-- sclik slde --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/str/gw4.png" />
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



    {{-- slide 15 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
           <p>Draw your design of a carriage or carriages for your giant wheel here.</p>
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
                    window.location.href = "{{ route('giantSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
