@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images//K1/str/st1.png" />
        <h2 class="title stroke">Children, what are these?</h2>
        <p class="note text-center">Note: Guide children to share what they know about buildings and describe the look and
            shape of these buildings.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/st2.png" />
        <h2 class="title stroke">Buildings are common structures around us.</h2>
        <p class="note text-center">Note: Guide children to share what they know about buildings and describe the look and
            shape of these buildings.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/st2.png" />
        <h2 class="title stroke">Do you know how tall buildings are built?</h2>
        <p class="note text-center">Note: Have children discuss how a tall building is built and who are we involved in the
            construction process.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/st3.png" />
        <h2 class="title stroke">First, <span class="text-white">architects</span> draw a plan
            to design the look and space of a <span class="text-white">building</span>.</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/st4.png" />
        <h2 class="title stroke">Then, engineers look through the plan to ensure that the
            design is safe and the building is strong enough for use.</h2>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video1" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/103.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Finally, construction workers construct the building
            from the ground up floor by floor.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


        {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video12" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/104.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Finally, construction workers construct the building
            from the ground up floor by floor.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/st6.png" />
        <h2 class="title stroke">If you see closely, the connected beams and columns form the
            structure of a building.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/st7.png" />
        <h2 class="title stroke">This <span class="text-white">structure</span> supports a <span
                class="text-white">building</span> to stand on its own.</h2>
    </div>



    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/st8.png" />
        <h2 class="title stroke">This structure also supports the floors with space in between.</h2>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video2" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/105.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What will happen if we tear down parts of the structure
            from the ground floor of a <span class="text-white">tall building</span>?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <video id="video3" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/105.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When we tear down the structure of beams and columns from
            the bottom of a tall building, the building collapses.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        <h2 class="text-start title stroke">Now, can you design and build a tall building
            that can stand on its own?</h2>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-full gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Individual Activity 1</h2>

        <h2 class="text-start title stroke">Mission: <br>
            Use the straws and pipe cleaners to build the structure of a building as tall as you can.</h2>
        <p class="note text-center">Note: Give each child a set of materials (straws, pipe cleaners and scissors) to work
            on; remind them that a tall building must have space between its floors.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <ol class="text-start title stroke">
            <h2 class="title stroke">Steps:</h2>
            <li>I. Find ways to join straws together using the pipe cleaners.</li>
        </ol>
        <video id="video4" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/106.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <ol class="title stroke text-start">
            <h2 class="text-start title stroke">Steps:</h2>
            <li>I. Find ways to join straws together using the pipe cleaners.</li>
        </ol>
        <video id="video5" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/107.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <ol class="title stroke text-start">
            <h2 class="text-start title stroke">Steps:</h2>
            <li>I. Find ways to join straws together using the pipe cleaners.</li>
        </ol>
        <video id="video6" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/108.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <ol class="title stroke text-start">
            <h2 class="text-start title stroke">Steps:</h2>
            <li>I. Find ways to join straws together using the pipe cleaners.</li>
        </ol>
        <video id="video7" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/109.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <ol class="title stroke text-start">
            <h2 class="text-start title stroke">Steps:</h2>
            <li>I. Find ways to join straws together using the pipe cleaners.</li>
        </ol>
        <video id="video8" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/110.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <ol class="title stroke text-start">
            <h2 class="text-start title stroke">Steps:</h2>
            <li>I. Find ways to join straws together using the pipe cleaners.</li>
        </ol>
        <video id="video9" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/111.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">
            Note: Have children observe the video and talk about how to do so (there are a total of 6 examples on
            different pages). Encourage them to try using the method when they start building their structures.
        </p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 20  --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <ol class="title stroke text-start">
            <h2 class="text-start title stroke">Steps:</h2>
            <li>2. Build the structure of a building as tall as you can.</li>
        </ol>
        <img src="/assets/images//K1/str/st16.png" />
        <p class="note text-center">
            Note: Give children more time to explore and learn their own building techniques.
            Ask possible questions (on the next page) to trigger their ideas. </p>
    </div>


    {{-- slide 21  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <div class="title text-start stroke">
            <h2>Possible questions during hands-on session: </h2>
            <ul class="list-decimal">
                <li>How do you start building the base of your building?
                    Do you start by building shapes?</li>
                <li> How do you make sure that you can continue building up?
                    Would it help by building a wide or narrow base?</li>
                <li>How do you make your building strong enough to stand on its own?
                    What are the strong or weak parts of your building?
                    How do you strengthen the weaker parts? </li>
            </ul>
        </div>

        <p class="note text-center">Note: Have children try out their ideas and share with the class.
            Pause once or twice to point out good building techniques or good building designs.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-5">
        <div class="title text-start stroke">
            <h2>Steps: </h2>
            <ul class="list-decimal">
                <li>3. How did you build your tall building? Draw it in the learning journal.</li>
                <li>4. How tall is your building? Measure and record it in the learning journal.</li>
                <li>5. Showcase your work.</li>
            </ul>
        </div>

        <p class="note text-center">Note: After the showcase, guide children to reflect and share things they learn from
            this engineering \ activity (refer to the possible questions for reflection in the teacher's mode).</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-full gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Individual Activity 2</h2>

        <h2 class="text-start title stroke">Mission: <br>
            Think of what your tall building is going to be used for. Design and build the look of your tall building.</h2>
        <p class="note text-center">Note: Guide children to discuss uses of a tall building (house, office, factory, hotel,
            hospital, etc).</p>
    </div>

    {{-- slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <div class="text-start">
            <h2 class="text-start title stroke">Steps:</h2>
            <ul class="title stroke">
                <li>1. What is the use of your tall building? Design the look based
                    on its use. Draw it in the learning journal. </li>
            </ul>
        </div>
        <img src="/assets/images//K1/str/st17.png" />
        <p class="note text-center">Note: Encourage children to design the look of their tall buildings creatively in the
            learning journal.</p>
    </div>


    {{-- slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-3  ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul>
                <li>2. Choose the wrappers based on your design idea and start
                    building the look of your tall building.</li>
            </ul>
        </div>
        <img src="/assets/images//K1/str/st18.png" />
        <p class="note text-center">Note: Encourage children to try to find their own building techniques. <a
                href=""><span class="text-amber-300 click-btn1">Click here</span></a> to see a way to build.</p>
    </div>

    {{-- sldie 26 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-start  ">
        <video id="video10" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/112.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note text-center">Note: Give children more time to explore and learn their own building techniques.
            Pause once or twice to point out good building techniques.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul>
                <li>3. name and label your building.</li>
                <li>4. Showcase your work.</li>
            </ul>
        </div>
        <p class="note">Note: During the showcase, have children share their design ideas to the class.</p>
    </div>



    {{-- slide 28 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How did you build your tall building? Draw it?</p>
            <p>How tall is your building? _ _ _ _ _ _ _ _ _ cm</p>
        </div>
    </div>


    {{-- slide 29 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the use of your building? ________________________________________________ <br>

                Design the look of your tall building based on its use. Draw it.</p>
            <p>What is the name of your building?___________________________________________________</p>
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


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
    // Video toggle function
    function toggleVideo(videoId) {
        const video = document.getElementById(videoId);
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        const slides = document.querySelectorAll(".slide");
        const nextButtons = document.querySelectorAll(".nextButton");
        const returnButton = document.getElementById("returnButton");
        const doneButton = document.querySelector(".doneButton");

        // Get all click buttons (click-btn1, click-btn2, etc.)
        const clickButtons = document.querySelectorAll("[class*='click-btn']");

        let currentSlide = 0;
        let parentSlideIndex = null;
        let isViewingClickSlides = false;
        let currentClickClass = null; // Track which click class we're viewing (click1, click2, etc.)

        // DEFINE YOUR RETURN ROUTE HERE - This is the route to navigate when on slide 1 and clicking return
        const returnRouteFromFirstSlide = "{{ route('buildingsSelection') }}"; // Change 'buildingsSelection' to your desired route name

        // Function to pause all videos
        function pauseAllVideos() {
            const videos = document.querySelectorAll('video');
            videos.forEach(video => {
                if (!video.paused) {
                    video.pause();
                }
            });
        }

        function showSlide(index) {
            // Pause all videos before changing slides
            pauseAllVideos();

            slides.forEach((slide, i) => {
                slide.classList.toggle("hidden", i !== index);
            });

            // Check if last slide OR last click slide
            const isLastSlide = index === slides.length - 1;
            const isLastClickSlide = isViewingClickSlides && !hasNextClickSlide(index);

            if (isLastSlide || isLastClickSlide) {
                nextButtons.forEach(btn => btn.classList.add("hidden"));
                if (doneButton) doneButton.classList.remove("hidden");
            } else {
                nextButtons.forEach(btn => btn.classList.remove("hidden"));
                if (doneButton) doneButton.classList.add("hidden");
            }
        }

        // Check if there's another click slide with same class after current one
        function hasNextClickSlide(currentIndex) {
            if (!currentClickClass) return false;

            for (let i = currentIndex + 1; i < slides.length; i++) {
                if (slides[i].classList.contains(currentClickClass)) {
                    return true;
                }
            }
            return false;
        }

        // Get click class from button (click-btn1 → click1, click-btn2 → click2)
        function getClickClassFromButton(button) {
            const classList = Array.from(button.classList);
            const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
            if (clickBtnClass) {
                // Extract number from click-btn1, click-btn2, etc.
                const number = clickBtnClass.replace('click-btn', '');
                return 'click' + number;
            }
            return null;
        }

        // Click button handlers
        clickButtons.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault(); // Prevent default anchor behavior

                parentSlideIndex = currentSlide;
                isViewingClickSlides = true;
                currentClickClass = getClickClassFromButton(btn);

                // Find the first slide with matching click class
                for (let i = 0; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        currentSlide = i;
                        showSlide(currentSlide);
                        break;
                    }
                }
            });
        });

        // NEXT button - skip click slides if not viewing them
        nextButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                if (currentSlide < slides.length - 1) {
                    currentSlide++;

                    // Skip click slides if not viewing them
                    while (!isViewingClickSlides &&
                        currentSlide < slides.length &&
                        isClickSlide(slides[currentSlide])) {
                        currentSlide++;
                    }

                    // If viewing click slides, only show slides with current click class
                    if (isViewingClickSlides) {
                        while (currentSlide < slides.length &&
                            !slides[currentSlide].classList.contains(currentClickClass)) {
                            currentSlide++;
                        }
                    }

                    if (currentSlide < slides.length) {
                        showSlide(currentSlide);
                    }
                }
            });
        });

        // Check if slide is any click slide (click1, click2, etc.)
        function isClickSlide(slide) {
            return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
        }

        // Return button with route navigation on first slide
        returnButton.addEventListener("click", () => {
            // If on first slide (slide 0) and not viewing click slides, navigate to return route
            if (currentSlide === 0 && !isViewingClickSlides) {
                window.location.href = returnRouteFromFirstSlide;
                return;
            }

            if (isViewingClickSlides && currentSlide > 0) {
                // Check if previous slide is also same click class
                let prevSlide = currentSlide - 1;

                // Find previous slide with same click class
                while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                    prevSlide--;
                }

                if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                    currentSlide = prevSlide;
                    showSlide(currentSlide);
                } else {
                    // No more click slides, return to parent
                    currentSlide = parentSlideIndex;
                    isViewingClickSlides = false;
                    currentClickClass = null;
                    parentSlideIndex = null;
                    showSlide(currentSlide);
                }
            } else if (currentSlide > 0) {
                currentSlide--;

                // Skip click slides when going back
                while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                    currentSlide--;
                }

                showSlide(currentSlide);
            }
        });

        // DONE button handler
        if (doneButton) {
            doneButton.addEventListener("click", () => {
                if (isViewingClickSlides && parentSlideIndex !== null) {
                    // Return to parent slide
                    currentSlide = parentSlideIndex;
                    isViewingClickSlides = false;
                    currentClickClass = null;
                    parentSlideIndex = null;
                    showSlide(currentSlide);
                } else {
                    // Navigate to route
                    window.location.href = "{{ route('buildingsSelection') }}";
                }
            });
        }

        // Start with first slide
        showSlide(currentSlide);
    });
</script>
@endpush