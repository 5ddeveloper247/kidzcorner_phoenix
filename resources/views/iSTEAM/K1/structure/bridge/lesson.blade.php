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
        <img src="/assets/images/K1/str/br1.png" />
        <h2 class="title stroke">Children, this is another type of structure.
            What is it called? What do we use it for?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br1.png" />
        <h2 class="title stroke">A bridge is a structure designed and built to carry
            people and things across water, valleys or gaps.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br2.png" />
        <h2 class="title stroke">A beam bridge is the simplest type of bridge.</h2>
        <p class="note">Note: Have children compare and talk about the characteristics of a beam bridge.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br2.png" />
        <h2 class="title stroke">It is a flat surface that rests on two end supports.</h2>
        <p class="note">Note: Have children point at the end supports of these beam bridge.</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br3.png" />
        <h2 class="title stroke">What happens if there is too much weight on a <span class="text-white">beam bridge</span>?
        </h2>
        <p class="note">Note: Encourage children to predict the outcome of this experiment.</p>
    </div>



    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br4.png" />
        <h2 class="title stroke">The bridge collapses when there is too much weight on it.</h2>
        <p class="note">Note: Have children describe the details of this experiment (How to do it? How did the bridge
            deform?).</p>
    </div>



    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-20 ">
        <h2 class="title stroke">Over time, people designed and built stronger bridges
            so that the bridges can support more weight. Let's see some examples here!</h2>
        <p class="note">Note: Guide children to talk about the characteristics of each bridge in the following pages.</p>
    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br5.png" />
        <h2 class="title stroke">What do you see from this truss bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br6.png" />
        <h2 class="title stroke">What do you see from this truss bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br7.png" />
        <h2 class="title stroke">What do you see from this truss bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>




    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br8.png" />
        <h2 class="title stroke">What do you see from this arch bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br9.png" />
        <h2 class="title stroke">What do you see from this arch bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- .slide 13 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br10.png" />
        <h2 class="title stroke">What do you see from this arch bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br11.png" />
        <h2 class="title stroke">What do you see from this suspension bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br12.png" />
        <h2 class="title stroke">What do you see from this suspension bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br13.png" />
        <h2 class="title stroke">What do you see from this suspension bridge?</h2>
        <p class="note">Note: Guide children to talk about the shapes that form the structure built above the bridge.</p>
    </div>



    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br14.png" />
        <h2 class="title stroke">It is clear that certain structures are built above or below a
            bridge to make it stronger and able to support more weight.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/br15.png" />
        <h2 class="title stroke">Therefore, we know that we can use some shapes
            to design stronger bridges.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Now, can you design and build a bridge
            that is strong enough to hold up some weight?</h2>
    </div>



    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use some straws and pipe cleaners to build the structure of a
            beam bridge and test how strong is it.</h2>
        <p class="note text-center">Note: Give each group of children a set of materials (straws & pipe cleaners) to work
            on.</p>
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>1. Learn how to extend the length of a pipe cleaner.</li>
        </ol>
        <img src="/assets/images//K1/str/br16.png" />
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>2. Learn how to extend the length of a straw.</li>
        </ol>
        <div class="flex items-center">
            <img src="/assets/images//K1/str/br17.png" />
            <p>Each group
                prepares 5
                long straws
                (same length)</p>
        </div>
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>3. Learn how to build the structure of a beam bridge.</li>
        </ol>
        <img src="/assets/images//K1/str/br18.png" />
        <p class="note text-center">Note: Have children work in groups to complete the mission. <a href=""
                class="text-amber-300">Click Here</a> to follow the step-by-step guide.</p>
    </div>

    {{-- ==== --}}
    {{-- click slides --}}
    {{-- step 1 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 1 of 9</h2>
        <img src="/assets/images//K1/str/br19.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.
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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 2 of 9</h2>
        <img src="/assets/images//K1/str/br20.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 3 of 9</h2>
        <img src="/assets/images//K1/str/br21.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 4 of 9</h2>
        <img src="/assets/images//K1/str/br22.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 5 of 9</h2>
        <img src="/assets/images//K1/str/br23.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 6 of 9</h2>
        <img src="/assets/images//K1/str/br24.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 7 of 9</h2>
        <img src="/assets/images//K1/str/br25.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 8 of 9</h2>
        <img src="/assets/images//K1/str/br26.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

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
        <h2 class="text-center title stroke">How to make the structure of a beam bridge? - Step 9 of 9</h2>
        <img src="/assets/images//K1/str/br27.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Guide them to
            figure out all the sub-steps. Then have them work together in groups to complete the sub-steps.</p>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-center title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>4. Test how much weight your bridge can support.</li>
        </ol>
        <img src="/assets/images//K1/str/br5.png" />
        <p class="note text-center">Note: Have children observe the video and talk about how to do the step. Then have them
            work in groups to complete the step. Have them record the test result in the learning journal.</p>
    </div>




    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Design certain structures above or below your bridge to
            make it stronger and able to support more weight.</h2>
        <p class="note text-center">Note: Give each group of children a set of materials (straws, pipe cleaners and
            scissors) to work on.</p>
    </div>


    {{-- sldie 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ol class=" list-decimal">
                <li> How do you design a stronger bridge that is able to
                    support more weight? Draw it in the learning journal.</li>
                <li>Build your bridge according to your design.</li>
                <li>Test how much weight your new bridge can support. Modify
                    your design and repeat the test until your new bridge can
                    support more weight. Draw your final design in the learning journal. </li>

            </ol>
        </div>
        <p class="note text-center">Note: Have children discuss in groups to come out with a design idea before they start
            working on the add-on structure above or below their bridges. Ask possible questions (on the next page) to
            trigger their ideas. Have children work in groups to complete the mission.</p>
    </div>



    {{-- sldie 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start title stroke">
            <h2>Possible questions during hands-on session:</h2>
            <ol class=" list-decimal">
                <li>What kind of bridge design do you think is strong enough to
                    hold up more weight?</li>
                <li>What shapes do you think can be used to design a stronger
                    bridge?</li>
                <li>How do you make your bridge strong enough to support
                    more weight?</li>

            </ol>
        </div>
        <p class="note text-center">Note: Have children try out their ideas and share with the class. Pause once or twice
            to point out good building techniques or good building designs. Have them share and discuss problems encountered
            individually.</p>
    </div>




    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col items-start justify-start gap-20  ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul>
                <li>4. Design and build the roadway of your bridge.</li>
                <li>5. Showcase your work.</li>
            </ul>
        </div>
        <img src="/assets/images//K1/str/br28.png" />
        <p class="note">Note: During the showcase, have them share their design ideas with the class.
            After the showcase, guide children to reflect and share things they learned from this engineering
            activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>



    {{-- slide 28 --}}
    <div class="slide  hidden flex flex-col items-center justify-between gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-center items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How di you test your beam bridge? Draw here.</p>
            <p>
                What did you use for the test?________________________________ <br>

                How much weight can your beam bridge support before it collapses? _______________
            </p>
        </div>
    </div>


    {{-- slide 29 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How do you design a stronger bridge that is able to support more weight? Draw it.</p>
        </div>
    </div>


    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What was your final design of a stronger bridge that is able to support more weight? Draw it.</p>
            <p>How much weight can your new bridge support before it collapses?</p>
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
                    window.location.href = "{{ route('bridgeSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
