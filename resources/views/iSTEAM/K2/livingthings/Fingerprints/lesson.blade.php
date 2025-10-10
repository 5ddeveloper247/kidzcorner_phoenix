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
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/cd/cd4.png" class="w-[500px]" />
            <img src="/assets/images//K1/coding/cd/cd7.png" class="w-[500px]" />
        </div>
        <h2 class="title stroke">Children, do you still remember what controls most machines around us? What is the meaning
            of <span class="text-white">programming</span> or <span class="text-white">coding</span>?</h2>
        <p class="note text-center">Note: Encourage children to recall and share what they have learnt.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/cd/cd4.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/cd/cd25.png" class="w-[400px]" />
        </div>
        <h2 class="title stroke">
            Most machines around us are controlled by different <span class="text-white">programmes</span>.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/cd/cd5.png" />
        <h2 class="title stroke">A programme is a set of step-by-step instructions that tell a
            machine what to do and how to do it, somewhat like a recipe.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/cd/cd6.png" />
        <h2 class="title stroke">So when a programme is turned on, a machine will do a
            specific task in a specific way by itself.</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/cd/cd7.png" />
        <h2 class="title stroke">When someone is creating a programme for a machine,
            it is a task called programming or coding.</h2>
    </div>



    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images//K1/coding/go/go1.png" />
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Have children follow through the lesson, sing and do actions together.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/go/go2.png" />
        <h2 class="title stroke">Why do you think we learn to sing the song and do the actions?</h2>
        <p class="note">Note: Encourage children to share based on the clues (choice of programming blocks in Blockly)</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/go/go2.png" />
        <h2 class="title stroke">
            <span class="text-white">Programming</span> a <span class="text-white">robot</span> to move is like telling
            yourself how to move, so we need to know how to move <span class="text-white">forward</span>, <span
                class="text-white">backward</span>, turn <span class="text-white">left</span>, and turn <span
                class="text-white">right</span> correctly.
        </h2>
    </div>



    {{-- slide 9 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images//K1/coding/go/go3.png" />
        <h2 class="title stroke">Let’s watch another video!</h2>
        <p class="note">Note: At the end, have children recall and say how to ensure that Blockly finds the correct robot.
        </p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>




    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <h2 class="title stroke">We are going to learn how to programme a robot
            to move a certain distance today,
            so we'll find out what distance is!</h2>

    </div>

    {{-- sldie 11 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images//K1/coding/go/go4.png" />
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: At the end, have children recap what distance is.
        </p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        <img src="/assets/images//K1/coding/go/go4.png" />
        <h2 class="text-center title stroke">Distance is a length of space between two points.</h2>
        <p class="note">Note: Have children pair with a friend, each holds one end of a rope and then
            move to show long and short distances between them.</p>
    </div>


    {{-- slide 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images//K1/coding/go/go5.png" />
        <h2 class="title stroke">Now, let’s see how to programme a robot
            to move a certain distance!</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/go/go6.png" />
        <h2 class="title stroke">How do we measure a <span class="text-white">distance</span>?</h2>
        <p class="note">Note: Encourage children to share ways to measure a distance.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex flex-col gap-10">
            <img src="/assets/images//K1/coding/go/go7.png" />
            <img src="/assets/images//K1/coding/go/go8.png" />
        </div>
        <h2 class="text-center title stroke !text-[40px]">Measuring tapes and rulers are common measuring tools.</h2>
        <p class="note text-center">Note: Have children discuss and show how to use a measuring tape for measuring
            (read the line markings on it).</p>
    </div>



    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex flex-col gap-10">
            <img src="/assets/images//K1/coding/go/go7.png" />
            <img src="/assets/images//K1/coding/go/go8.png" class="w-[400px]" />
        </div>
        <h2 class="title stroke">
            Both the tools have a standard unit of measurement called <span class="text-white">centimeter</span> and <span
                class="text-white">cm</span> is the short form of <span class="text-white">centimeter</span>.
        </h2>
    </div>



    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex gap-10">
            <img src="/assets/images//K1/coding/go/go9.png" class="w-[250px] h-[250px]" />
            <img src="/assets/images//K1/coding/go/go10.png" />
            <img src="/assets/images//K1/coding/go/go11.png" />
        </div>
        <h2 class="title stroke">What is this? Have you used it before? How do you use it?
            What is the unit of measurement of it?</h2>
    </div>



    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex gap-10">
            <img src="/assets/images//K1/coding/go/go9.png" class="w-[250px] h-[250px]" />
            <img src="/assets/images//K1/coding/go/go10.png" />
            <img src="/assets/images//K1/coding/go/go11.png" />
        </div>
        <h2 class="title stroke">A height chart allows us to measure our heights in centimeter.
            It has the standard unit of measurement like a ruler.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex">
            <img src="/assets/images//K1/coding/go/go12.png" class="w-[400px]" />
            {{-- <img src="/assets/images//K1/coding/go/go14.png" /> --}}
            <img src="/assets/images//K1/coding/go/go13.png" class="w-[400px]" />
        </div>
        <h2 class="title stroke">Are you aware that Blockly also has this standard unit
            of measurement in it?</h2>
    </div>



    {{-- slide 20  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex">
            <img src="/assets/images//K1/coding/go/go12.png" class="w-[400px]" />
            {{-- <img src="/assets/images//K1/coding/go/go14.png" /> --}}
            <img src="/assets/images//K1/coding/go/go13.png" class="w-[400px]" />
        </div>
        <h2 class="title stroke">We actually use Blockly to programme a robot to move a certain <span
                class="text-white">distance</span> in <span class="text-white">centimeter</span> (<span
                class="text-white">cm</span>).</h2>
    </div>


    {{-- slide 21  --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/go/go15.png" />
        <h2 class="title stroke">Let’s watch the last video!</h2>
        <p class="note">Note: Explain to children that a circuit means a track or path.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/go/go16.png" />
        <h2 class="title stroke">How do you programme a robot to move forward 50cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward> turn on the programme so that the robot moves accordingly).</p>
    </div>


    {{-- slide 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/go/go17.png" />
        <h2 class="title stroke">How do you programme a robot to move forward 90cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward>select
            Forward>change distance to 90cm>turn on the programme so that the robot moves accordingly).</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center title !text-white stroke">Hands-on Time</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let's use a measuring tape to find out the lengths of the two
            circuits. Record the results on the coding cards. After that,
            use Blockly to programme a robot to first move through circuit
            1 and then circuit 2 based on the distances measured.</h2>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ul class="title stroke">
                <li>1. Use a measuring tape to measure the length of Circuit 1
                    and record the result on the first coding card.</li>
            </ul>
        </div>
        <div class="flex gap-10">
            <img src="/assets/images//K1/coding/go/go18.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/go/go19.png" class="w-[400px]" />
        </div>
        <p class="note text-center">Note: Have children help each other to complete this step; then place the card
            near the starting point of Circuit 1.</p>
    </div>


    {{-- slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ul class="title stroke">
                <li>2. Use a measuring tape to measure the length of Circuit 2 and
                    record the result on the second coding card.</li>
            </ul>
        </div>
        <div class="flex gap-10">
            <img src="/assets/images//K1/coding/go/go18.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/go/go19.png" class="w-[400px]" />
        </div>
        <p class="note text-center">Note: Have children help each other to complete this step; then place the card
            near the starting point of Circuit 2.</p>
    </div>



    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul>
                <li>3. Turn on a robot and make sure that Blockly finds the robot.</li>
            </ul>
        </div>
        <div class="flex gap-10">
            <img src="/assets/images//K1/coding/go/go20.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/go/go21.png" class="w-[400px]" />
        </div>
        <p class="note">Note: Otherwise remind children to make Blockly and the robot sync (sync based on the
            nametag on the robot).</p>
    </div>



    {{-- slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul>
                <li>4. Programme the robot to move through circuit 1.</li>
            </ul>
        </div>
        <img src="/assets/images//K1/coding/go/go22.png" class="w-[400px]" />
        <p class="note">Note: Select Drive > place programming block of Forward > turn on the programme so that the
            robot moves accordingly; <a href="" class="text-amber-400 click-btn1">click here</a> for visual guide.
        </p>
    </div>

    {{-- clik slides  --}}
    {{-- slide 1 --}}
    <div class=" slide hidden click1 flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/go/go16.png" />
        <h2 class="title stroke">How do you programme a robot to move forward 50 cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (Select Drive > place programming
            block of Forward > turn on the programme so that the robot moves accordingly)</p>
    </div>

    {{-- sldie 2 --}}
    <div class=" slide hidden click1 flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/go/go17.png" />
        <h2 class="title stroke">How do you programme a robot to move forward 90cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward> select Forward>change distance to 90cm>turn on the programme so that the robot moves
            accordingly).</p>
    </div>

    {{-- slide 3 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center title !text-white stroke">Hands-on Time</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let's use a measuring tape to find out the lengths of the two
            circuits. Record the results on the coding cards. After that,
            use Blockly to programme a robot to first move through circuit
            1 and then circuit 2 based on the distances measured.</h2>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>




    {{-- slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul>
                <li>5. Programme the robot to move through circuit 2.</li>
            </ul>
        </div>
        <img src="/assets/images//K1/coding/go/go23.png" class="w-[400px]" />
        <p class="note">Note: Select Drive>place programming block of Forward>select Forward>change distance to 90cm>turn
            on the programme so that the robot moves accordingly; <a href=""
                class="text-amber-400 click-btn2">click here</a>
            for visual guide.</p>
    </div>

    {{-- click slides  --}}
    {{-- slide 1 --}}
    <div class=" slide hidden click2 flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/go/go17.png" />
        <h2 class="title stroke">How do you programme a robot to move forward 90cm?</h2>
        <p class="note text-center">Note: Encourage children to share based on the clues (select Drive>place programming
            block of Forward>
            select Forward>change distance to 90cm>turn on the programme so that the robot moves accordingly).</p>
    </div>

    {{-- slide 2 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center title !text-white stroke">Hands-on Time</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let's use a measuring tape to find out the lengths of the two
            circuits. Record the results on the coding cards. After that,
            use Blockly to programme a robot to first move through circuit
            1 and then circuit 2 based on the distances measured.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex  justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What can be used to measure a distance between two objects? Draw them.</p>
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
            const doneButton = document.querySelector(".doneButton");

            // Get all click buttons (click-btn1, click-btn2, etc.)
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingClickSlides = false;
            let currentClickClass = null; // Track which click class we're viewing (click1, click2, etc.)

            function showSlide(index) {
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

            // Return button
            returnButton.addEventListener("click", () => {
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
                        window.location.href = "{{ route('go1Selection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
