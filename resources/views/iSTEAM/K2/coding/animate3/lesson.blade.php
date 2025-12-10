@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Animate a Character (3)</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate3/252.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, what is happening here?</h2>
        <p class="note">Note: Encourage children to answer based on their views and accept all logical answers.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Let's explore and learn how to programme <br>
            a character to have sound!</h2>
        <p class="note">Note: Use a tablet to show children the following part.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center relative">
        <img src="{{ asset('assets/images/K2/animate1/gl2.png') }}" class="img-md" />
        <h2 class="title stroke">Open the application and start a new project.</h2>
        <p class="note">Note: Have children verbally direct the teacher to do this step.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img class="!w-[30vw]" src="{{ asset('assets/images/K2/animate3/a2.png') }}" />
        <h2 class="title stroke">This command is called Sound Blocks. <br>
            It allows us to design movements for a character.</h2>
        <p class="note">Note: <button class="text-[#F7B94A] click-btn1">Click here</button> to guide children
            explore and understand the details and use of Sound Blocks.</p>
    </div>


    {{-- Slide 5 --}}
    {{-- click here  --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <img class="img-xl" src="{{ asset('assets/images/K2/animate3/a3.png') }}" />
        <h2 class="title stroke">Usually, there is a Pop programming block and
            a recording tool under Sound Blocks.</h2>
        <p class="note">Note: Show the programming block and recording tool here.</p>
    </div>


    {{-- Slide 6 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate3/255.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of Pop block?</h2>
        <p class="note">Note: Show children the effect of this block on the stage. Guide them to know that Pop block plays
            a "Pop" sound. Explain that if we want a character to have sound while moving, two programmes have to be
            created.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 7 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate3/a5.png') }}" class="img-xl" />
        <h2 class="title stroke">What is the use of this recording tool?</h2>
        <p class="note">Note: Show and guide children to know that this recording tool allows us to record sounds that we
            want. Explain that we can record our own voice or sound from other things (toys, mobile phones, etc).</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate3/a6.png') }}" class="!h-[20vw]" />
            <video id="video3" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate3/256.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">Once a sound is recorded, a programming block called Play
            Recorded Sound will appear under Sound Blocks command.</h2>
        <p class="note">Note: Show children that we can record up to five sounds for a character.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <video id="video4" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate3/253.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video4')" class="absolute top-1/2 left-[-10vw] z-30 -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <video id="video5" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate3/254.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video5')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">Let's compare these two samples.
            What is the main difference between these two samples?</h2>
        <p class="note">Note: Guide children to compare and talk about the difference (the design of the programme).</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[15vw]">
        <h2 class="title stroke">Now, let's explore and learn about the use of another
            <span class="!text-white"> command</span> in ScratchJr app!
        </h2>
        <p class="note">Note: Use tablets to show children the following part.</p>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img class="!w-[30vw]" src="{{ asset('assets/images/K2/animate3/a8.png') }}" />
        <h2 class="title stroke">This command is called Control Blocks. <br>
            It allows us to design movements for a character.</h2>
        <p class="note">Note: <button class="text-[#F7B94A] click-btn2">Click here</button> to guide children
            explore and understand the details and use of Control Blocks.</p>
    </div>


    {{-- Slide 12 --}}
    {{-- click here  --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <img class="img-xl" src="{{ asset('assets/images/K2/animate3/a9.png') }}" />
        <h2 class="title stroke">Control Blocks has a set of programming blocks.
            Each block here is a way to plan how to run a programme.</h2>
        <p class="note">Note: Show and name each programming block here. Tell children that we'll only use
            "Wait and Repeat" blocks for now.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <video id="video6" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/animate3/257.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video6')"
                    class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <video id="video7" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/animate3/258.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video7')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">What are the differences between these two samples?</h2>
        <p class="note">Note: Guide children to compare and talk about the differences
            (Sample 2- Wait block in the programme; it makes the character pause for a while on the stage).</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate3/a12.png') }}" class="img-sm" />
            <video id="video8" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/animate3/258.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">So what is the use of Wait block?</h2>
        <p class="note">Note: Show children the effect of this block when running a programme.
            Guide them to know that Wait block makes a programme pause for a specified amount of time.</p>
    </div>




    {{-- Slide 15 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate3/a14.png') }}" />
            <video id="video9" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/animate3/260.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">What is the use of Repeat block?</h2>
        <p class="note">Note: Show children the effect of this block when running a programme.
            Guide them to know that Repeat block makes the block/blocks placed inside it run for a specified number of
            times.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <video id="video10" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/animate3/261.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video10')" class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
            <video id="video11" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/animate3/262.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video11')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Instead of using multiple programming blocks of the same type
            to create a programme, a Repeat block makes the
            programme created look shorter and neater.</h2>
    </div>




    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video12" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate3/252.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
        <h2 class="title stroke">Do you remember this sample? Where do you find this
            background and character from the app?</h2>
        <p class="note">Note: Have children verbally direct the teacher to find them using a tablet.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <video id="video13" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate3/252.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video13')" class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
            <video id="video14" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate3/263.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video14')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>
    </div>



    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Help Adam to work out the programmes of a character (as shown in the sample on the last page). Help him
                    to complete his work by adding in "Wait and Repeat" blocks to the programmes.</li>
            </ol>
        </div>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col justify-between h-[32vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Choose the correct background.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate2/a15.png') }}" class="img-sm" />
            <img class="!w-[3vw]" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/animate2/a17.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Reply the <a class="text-[#f7b94a] click-btn3" href="">video</a> if needed.</p>
    </div>

    {{-- Slide 21 --}}
    {{-- video   --}}
    <div class="slide hidden click3 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <video id="video15" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate3/252.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video15')" class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
            <video id="video16" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate3/263.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video16')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col justify-between h-[32vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Delete the cat and choose the correct character.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate3/a20.png') }}" class="img-sm" />
            <img class="!w-[3vw]" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/animate3/a21.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Reply the <a class="text-[#f7b94a] click-btn4" href="">video</a> if needed.</p>
    </div>

    {{-- Slide 23 --}}
    {{-- video   --}}
    <div class="slide hidden click4 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <video id="video17" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate3/252.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video17')" class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
            <video id="video18" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate3/263.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video18')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col justify-between h-[32vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Move the character to the starting point.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/animate3/a22.png') }}" class="img-xl" />
        <p class="note">Note: Verbally guide children that need help.</p>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col justify-between h-[32vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Copy the incompleted work.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate3/a23.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/animate3/a24.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Have children create these 3 programmes over at the programming area.</p>
    </div>

    {{-- Slide 26 --}}
    {{-- where to add missing   --}}
    <div class="slide hidden flex flex-col justify-between h-[32vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Add in "Wait and Repeat" blocks to make the programmes work.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate3/a23.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/animate3/a24.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Reply the <a class="click-btn5 text-[#f7b94a]" href="">video</a> if needed. Ask
            children: How many times does the ball bounce</p>
    </div>

    {{-- Slide 27 --}}
    {{-- video   --}}
    <div class="slide hidden click5 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <video id="video19" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/animate3/252.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video19')" class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
            <video id="video20" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/animate3/263.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video20')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Adam is trying to work out the programmes of this character
            but the work is incomplete. He knows "Wait and Repeat"
            blocks must be added to the programmes. Can you help him?</h2>
    </div>






    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Showcase your work.</li>
            </ol>
        </div>
        <div class="flex gap-3 items-center justify-center items-end">
            <button class="!text-white w-[10vw] h-[5vw] bg-[#2D9CDB] rounded-[1vw] text-[1.2vw] click-btn6">Sample Answer</button>
        </div>
        <p class="note">Note: Give out clues if needed (Repeat block>hopping; Repeat and Wait blocks>sound).
            After the showcase, have children share what they have learnt through this problem solving process.</p>
    </div>

    {{-- Slide 29 --}}
    {{-- sample answer --}}
    <div class="slide hidden click6 flex flex-col items-center justify-center">
        <video id="video21" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate3/264.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Note: Accept all similar programmes presented by children.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video21')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute flex flex-row gap-6">
        <!-- Return Button -->
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

    {{-- next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>




@endsection

@push('script')
    <script>
        // VIDEO CONTROLS
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        // SLIDE NAVIGATION SYSTEM
        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            // URLs for navigation
            const returnURL = "{{ route('animate3Selection') }}";
            const doneURL = "{{ route('k2coding') }}";

            // Track current position
            let currentSlide = 0; // Which slide we're on now
            let isInSpecialMode = false; // Are we viewing info/click slides?
            let returnToSlide = null; // Which slide to return to
            let specialSlideClass = null; // Which type of special slide (click1, info-slide2, etc.)

            // HELPER FUNCTIONS

            // Stop all videos when changing slides
            function pauseAllVideos() {
                document.querySelectorAll('video').forEach(video => video.pause());
            }

            // Check if a slide is special (info or click slide)
            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);

                // Check for click1, click2, etc.
                const hasClickClass = classList.some(cls => /^click\d+$/.test(cls));

                // Check for info-slide1, info-slide2, etc.
                const hasInfoClass = classList.some(cls => /^info-slide\d+$/.test(cls));

                return hasClickClass || hasInfoClass;
            }

            // Get special slide type from button class
            // Example: "click-btn1" → "click1", "info-btn2" → "info-slide2"
            function getSlideTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    // Handle click-btn1 → click1
                    if (className.startsWith('click-btn')) {
                        const number = className.replace('click-btn', '');
                        return 'click' + number;
                    }
                    // Handle info-btn1 → info-slide1
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }
                return null;
            }

            // Check if there are more special slides after current one
            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Check if we're on the last slide
            function isLastSlide(slideIndex) {
                // Last special slide in special mode
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

                // In normal mode, check if this is the last non-special slide
                if (!isInSpecialMode) {
                    // Check if there are any more non-special slides after this one
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) {
                            return false; // Found another normal slide
                        }
                    }
                    return true; // No more normal slides found
                }

                return false;
            }
            // DISPLAY FUNCTIONS

            function showSlide(slideIndex) {
                pauseAllVideos();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NAVIGATION FUNCTIONS

            function goNext() {
                // Can't go beyond last slide
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                // Skip slides that don't match current mode
                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];

                    if (isInSpecialMode) {
                        // In special mode: only show slides with matching class
                        if (slide.classList.contains(specialSlideClass)) break;
                    } else {
                        // In normal mode: skip all special slides
                        if (!isSpecialSlide(slide)) break;
                    }

                    currentSlide++;
                }

                // Show the slide if we found one
                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                // If at first slide in normal mode, exit to selection page
                if (currentSlide === 0 && !isInSpecialMode) {
                    window.location.href = returnURL;
                    return;
                }

                if (isInSpecialMode) {
                    // Find previous special slide
                    let previousIndex = currentSlide - 1;

                    while (previousIndex >= 0) {
                        if (slides[previousIndex].classList.contains(specialSlideClass)) {
                            break;
                        }
                        previousIndex--;
                    }

                    if (previousIndex >= 0) {
                        // Found previous special slide
                        currentSlide = previousIndex;
                        showSlide(currentSlide);
                    } else {
                        // No more special slides, return to normal mode
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    // Normal mode: go to previous normal slide
                    if (currentSlide > 0) {
                        currentSlide--;

                        // Skip any special slides
                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }

                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                if (isInSpecialMode && returnToSlide !== null) {
                    // Return to the slide we came from
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    // Exit to selection page
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

            // Info/Click buttons - Enter special mode
            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

                    // Remember where we came from
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);

                    // Find and show first special slide
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // Next buttons
            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            // Return button
            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            // Done button
            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            // INITIALIZE

            showSlide(currentSlide);
        });
    </script>
@endpush
