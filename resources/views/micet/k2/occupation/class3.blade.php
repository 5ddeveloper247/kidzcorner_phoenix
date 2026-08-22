@extends('layout.master')
@section('title', 'Dynamic Presentation')

@php
    $showBackground = false;
    $showVector1 = true;
    $showVector5 = false;
    $showMascot = true;
@endphp


@push('styles')
    <style>
        .p-note {
            font-size: 1.2vw;
            color: white !important;
        }

        .panel-title {
            color: #F7B94A;
            font-size: 2.5vw;
        }

        .ptitle {
            color: #F7B94A;
            font-size: 1.7vw;
        }

        .panel-ul {
            color: white;
            font-size: 1.4vw;
            text-align: left;
        }
    </style>
@endpush

@section('content')

    {{-- panel 1 --}}
    <div class="phonics-panel flex flex-col justify-between h-full items-center">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>
        <div class="flex ">
            <img src="{{ asset('assets/images/micet/k2/occupation/class3/c1.png') }}" class="h-[8vw]" />
        </div>


        <h3 class="ptitle">Objectives:</h3>

        <ul class="list-disc panel-ul">
            <li>To understand different occupations and their responsibilities in a hospital.</li>
            <li>To develop observation skills by distinguishing different occupations in a hospital.</li>
            <li>To reinforce basic hygiene practices.</li>
        </ul>
    </div>


    {{-- panel 2 --}}
    <div class="phonics-panel flex flex-col justify-between h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <h3 class="ptitle">Preparations</h3>

        <ul class="list-disc panel-ul w-[55vw]">
            <li>Thematic Activity Book</li>
            <li>Hospital props box (recommended materials):
                <ul class="w-[53vw] text-xs">
                    <li>-white gown, nurse's cap, clinical masks, rubber gloves.</li>
                    <li>-bandages, tongue depressors.</li>
                    <li>-eye chart, empty medicine bottles (different shapes and capacity), height chart and weighing
                        machine, dolls, blankets, eye droppers.</li>
                    <li>-stethoscope, syringes (without needles), thermometers, blood pressure gauge.</li>
                    <li>-pictures of body parts, stretcher, patient's clothes, electrocardiogram, surgical knives (toy
                        knives), medical records, x-ray picture, blank papers and pens. (Ideally use real tools if
                        available. Otherwise, substitute with toys or other items).</li>
                </ul>
            </li>
            <li>Print out a set of Little Elephant picture and the maze picture (one set for each child)</li>
            <li>Coloured pencils, papers.</li>
            <li>Invite people working in a hospital (including parents) to the kindergarten to explain their job duties to
                the children. It is ideal to get them to wear their uniforms and carry their tools.</li>
        </ul>
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <div class="text-start">
            <h3 class="ptitle">prepration</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>As the lesson proceeds, teacher introduces related vocabulary.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c2.png') }}" class="w-[30vw]" />
    </div>


    {{-- panel 3 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <div class="text-start">
            <h3 class="ptitle">Lesson Development</h3>
            <ol class="list-decimal panel-ul w-[45vw]">
                <li>Display the red cross symbol. Ask the children to identify the symbol and where it can be found.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c3.png') }}" class="w-[25vw] h-[17vw]" />
    </div>


    {{-- panel 4 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="2">
            <li>If any child has recently been to a hospital, get them to describe their experiences of seeing a doctor.
                Encourage the children to say why they went to the hospital, who they saw, what happened, and how they feel
                now. Help the children to minimise their fears of hospitals. Help them understand that they have to inform
                their parents if they are sick and to see a doctor immediately. Doctors can help them recover from their
                illness.</li>
        </ol>

    </div>

    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="3">
            <li>Ask children for some of the reasons for going to a hospital.</li>
            <li>Guide the children to understand that we go to the hospital for different reasons.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c2.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="5">
            <li>Teacher asks if there is a need to go to the hospital if a bone is broken in their body.</li>
            <li>Ask the children how a doctor can know if any bone is broken.</li>
            <li>Explain to them that the doctor can diagnose by using a special machine and ask the children to identify the
                machine.</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="8">
            <li>Explain that an x-ray machine can photograph the bones inside the body to help the doctor to make a
                diagnosis.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c4.png') }}" class="w-[25vw] h-[20vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="9">
            <li>Ask the children: "What is this?".</li>
            <li>Explain that this is an x-ray photograph of a foot.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c5.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="11">
            <li>Ask the children what the doctor will do if the x-ray photograph shows a broken bone.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c5.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="12">
            <li>Explain to the children what the doctor will do to help mend the broken bone. In severe cases, a screw may
                be used.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c6.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="13">
            <li>When a broken bone is rejoined, that particular part of the body is placed in a cast. This gives support and
                allows the bone to heal.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c7.png') }}" class="w-[25vw] h-[20vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="14">
            <li>Ask the children how a patient will move about with a cast.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c7.png') }}" class="w-[25vw] h-[20vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="15">
            <li>The patient needs to use a crutch or crutches.</li>
        </ol>
        <div class="flex gap-2">
            <img src="{{ asset('assets/images/micet/k2/occupation/class3/c8.png') }}" class="w-[20vw] h-[17vw]" />
            <img src="{{ asset('assets/images/micet/k2/occupation/class3/c9.png') }}" class="w-[20vw] h-[17vw]" />
        </div>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="16">
            <li>Ask the children if an expectant mother needs to go to the hospital.</li>
            <li>How can the doctor tell whether the baby in the womb is healthy.</li>
            <li>Explain that by using a special machine, the doctor can see and diagnose the condition of the baby in the
                womb. Ask the children if they can name the machine.</li>
        </ol>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="19">
            <li>Explain that an ultrasound machine can help the doctor see the baby inside the womb. This helps the doctor
                to make a diagnosis.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c10.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="20">
            <li>Click on the video to experience what an ultrasound shows of a baby inside the womb.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/occupation/class3/v1.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="21">
            <li>Ask the children if a person who suffers a heart attack needs to go to the hospital.</li>
            <li>How can the doctor tell what condition the heart is in.</li>
            <li>Explain that by using a special tool, the doctor can hear and diagnose the condition of the heart. Ask
                children if they can name the tool.</li>
        </ol>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="24">
            <li>Explain that a stethoscope helps the doctor listen to the heartbeat and make a diagnosis.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c11.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="25">
            <li>Click on the video to observe what a cardiograph shows when it measures heartbeats.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/occupation/class3/v2.mp4') }}" type="video/mp4">
        </video>
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="26">
            <li>Explain that if the heart is in a serious condition the doctor will have to perform an operation.</li>
        </ol>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="27">
            <li>Ask the children why an operation needs to be carried out in a sterile environment of an operating theatre.
            </li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c13.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="28">
            <li>Explain that the doctor who does operations in a hospital is called a surgeon.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c14.png') }}" class="w-[25vw] h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="29">
            <li>Explain that a surgeon needs to sterilise himself, use items such as a surgical mask and gloves, etc. to
                prevent infection.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c14.png') }}" class="w-[25vw] h-[17vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="30">
            <li>Ask the children why a patient needs to be put under anaesthetic before an operation.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c15.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="31">
            <li>These are some surgical tools which a surgeon may use.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c16.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="32">
            <li>An operation is usually done by a team of doctors and nurses.</li>
        </ol>
        <div class="flex gap-2">
            <img src="{{ asset('assets/images/micet/k2/occupation/class3/c18.png') }}" class="w-[20vw] h-[20vw]" />
            <img src="{{ asset('assets/images/micet/k2/occupation/class3/c19.png') }}" class="w-[20vw] h-[20vw]" />
        </div>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="33">
            <li>Click on the video to observe a heart operation in progress.</li>
        </ol>
        <video class="h-[18vw] cursor-pointer" loop playsinline onclick="this.paused ? this.play() : this.pause();">
            <source src="{{ asset('assets/images/micet/k2/occupation/class3/v3.mp4') }}" type="video/mp4">
        </video>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="34">
            <li>A patient who has been operated on, needs to recuperate in a ward.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c20.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="35">
            <li>Ask the children if we need to go to the hospital when we are sick.</li>
            <li>How can the doctor diagnose our ailment.</li>
            <li>Explain that the doctor needs to do a body examination to give a diagnosis.</li>
        </ol>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="38">
            <li>Ask the children what a body examination entails.</li>
        </ol>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="39">
            <li>Explain that the medical examination usually entails the use of a thermometer to measure the body
                temperature.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c22.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="40">
            <li>Examining the throat.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c23.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="41">
            <li>Listening to the heartbeat.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c24.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="42">
            <li>Sometimes an x-ray needs to be taken.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c25.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="43">
            <li>Sometimes, blood samples need to be taken for a blood test.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c26.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="44">
            <li>Blood samples are sent to a laboratory and a microscope is used to examine the blood.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c27.png') }}" class="w-[25vw]" />
    </div>


    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="45">
            <li>This is what healthy red blood cells look like under a microscope.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c28.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="46">
            <li>Ask: "What do you see under the microscope?".</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c29.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="47">
            <li>Explain that germs in the blood can be seen under a microscope.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c30.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="48">
            <li>Different types of germs cause different types of sickness.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c31.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="49">
            <li>Explain that only after doing a diagnosis, can a doctor prescribe medication for our sickness.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c32.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="50">
            <li>Explain that only after doing a diagnosis, can a doctor prescribe medication for our sickness.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c33.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="51">
            <li>Sometimes, an injection is given.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c34.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="52">
            <li>When children understand that there are many reasons why people go to the hospital, get them to identify and
                name the occupations of the people in the picture and describe what they do. For example, the doctors see
                patients; nurses attend to patients; pharmacists dispense medicines; surgeons perform surgeries, etc.</li>
        </ol>
        <img src="{{ asset('assets/images/micet/k2/occupation/class3/c35.png') }}" class="w-[25vw]" />
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="53">
            <li>Display the hospital prop box in an orderly way, show the tools such as a stethoscope, syringes, medicine
                bottles, surgical knives, etc. Help the children to identify these tools. Encourage children to explain who
                use these tools, their functions and also to demonstrate how they are used.</li>
            <li>Conclude by confirming the names of the tools, the users and tools' functions.</li>
        </ol>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="55">
            <li>For those occupations which children are not familiar with (e.g. surgeons), get children with some knowledge
                of them to role play. Teacher facilitates the role play by being one of the hospital staff. She will help
                the children with the use of language and actions in their role play, so that other children will have a
                better idea of what these occupations do.</li>
        </ol>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="56">
            <li>Get the children to share their experiences of going to a hospital which ranges from how the doctor can
                diagnose the sickness to the kind of medication that was prescribed. Help the children to understand that
                bad habits can also make us sick, e.g. the use of dirty hands to eat food thus causing stomach pains;
                sleeping without sufficient coverings causes a chill; being picky at food causes malnutrition. Thus,
                encourage children to cultivate good healthy habits.</li>
        </ol>
    </div>



    {{-- panel 5 --}}
    <div class="phonics-panel flex flex-col space-y-[1vw] items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <ol class="list-decimal panel-ul w-[45vw]" start="57">
            <li>Guide children to complete Activity 3 of the Thematic Activity Book.</li>
        </ol>
    </div>



    {{-- panel 7 --}}
    <div class="phonics-panel flex flex-col items-center h-full space-y-[2vw]">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <div class="text-start flex flex-col justify-between h-full">
            <h3 class="ptitle">Clousre</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Get children to explain their drawings.</li>
                <li>Display children's art on the wall. Show children different ways to appreciate the work of others. Help
                    children to establish good healthy habits and help them minimise their fear of hospitals.</li>
            </ul>

            <h3 class="ptitle">Evaluation</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Able to distinguish the various occupations and the job duties of people in a hospital.</li>
                <li>Able to express in drawing their experiences of going to a hospital.</li>
            </ul>
        </div>
    </div>

    {{-- panel 6 --}}
    <div class="phonics-panel flex flex-col items-center h-full">
        <h1 class="panel-title stroke">Classroom Activity 3: In the Hospital</h1>

        <div class="text-start flex flex-col">
            <h3 class="ptitle">Extension</h3>

            <ul class="list-disc panel-ul w-[45vw]">
                <li>Help the children to create some tools used in a hospital like stethoscopes, syringes, nurses' cap,
                    drips and display them at the designated "Our hospital" activity area.</li>
                <li>Invite a doctor to visit and describe his job duties.</li>
            </ul>
        </div>
    </div>



    {{-- =============================================== --}}
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
        // SLIDE NAVIGATION SYSTEM
        document.body.dataset.homeRoute = "{{ url('/micet') }}";

        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".phonics-panel");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn']");
            const soundButtons = document.querySelectorAll("[id^='soundButton']");

            // URLs for navigation
            const returnURL = "{{ url('/micet/k2/occupation/index') }}";
            const doneURL = "{{ url('/micet/k2/occupation/index') }}";

            // Track current position
            let currentSlide = 0;
            let isInSpecialMode = false;
            let returnToSlide = null;
            let specialSlideClass = null;

            // Audio management
            let currentAudio = null;

            // HELPER FUNCTIONS

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
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

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

            // AUDIO FUNCTIONS

            function stopCurrentAudio() {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }
            }

            function playSlideAudio(slideIndex) {
                // Stop any currently playing audio
                stopCurrentAudio();

                // Get the slide element
                const slide = slides[slideIndex];

                // Check if the slide itself has data-slide-audio attribute
                let audioSrc = slide.getAttribute('data-slide-audio');

                // If not, look for element inside the slide with data-slide-audio attribute
                if (!audioSrc) {
                    const audioElement = slide.querySelector('[data-slide-audio]');
                    if (audioElement) {
                        audioSrc = audioElement.getAttribute('data-slide-audio');
                    }
                }

                // Play the audio if we found a source
                if (audioSrc) {
                    currentAudio = new Audio(audioSrc);
                    currentAudio.play().catch(err => console.log('Audio play failed:', err));
                }
            }


            // DISPLAY FUNCTIONS

            function showSlide(slideIndex) {
                // Stop audio from previous slide
                stopCurrentAudio();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Play audio for current slide (if it has one)
                playSlideAudio(slideIndex);

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            soundButtons.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Get audio source from data-slide-audio attribute
                    const audioSrc = btn.getAttribute('data-slide-audio');

                    if (audioSrc) {
                        stopCurrentAudio();
                        currentAudio = new Audio(audioSrc);
                        currentAudio.play().catch(err => console.log('Audio play failed:', err));
                    }
                });
            });
            // NAVIGATION FUNCTIONS

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

                if (isInSpecialMode && returnToSlide !== null) {
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

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

            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            const letterLinks = document.querySelectorAll('.phonics-panel a[href=""]:not([class*="info-btn"])');
            letterLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const letter = link.getAttribute('data-letter') || 'a';
                    speakLetter(letter);
                });
            });

            window.speechSynthesis.onvoiceschanged = () => {
                window.speechSynthesis.getVoices();
            };

            // INITIALIZE - Show first slide and play its audio automatically
            showSlide(currentSlide);
        });
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.phonics-panel').forEach(panel => {
                const observer = new MutationObserver(() => {
                    if (panel.classList.contains('hidden')) {
                        panel.querySelectorAll('video').forEach(video => {
                            if (!video.paused) video.pause();
                            video.currentTime = 0;
                        });
                    }
                });

                observer.observe(panel, {
                    attributes: true,
                    attributeFilter: ['class']
                });
            });
        });
    </script>
@endpush
