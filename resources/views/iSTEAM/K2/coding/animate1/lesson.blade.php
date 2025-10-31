@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    
{{-- title --}}
    <h2 class="top-title stroke">Animate a Character (1)</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a1.png" />
        <h2 class="title stroke">Children, what is this new tool that we have been learning to
            use recently? What can we do with it?</h2>
    </div>



    {{-- Slide 2 --}}
    {{-- pic missing --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/gl1.png" />
        <h2 class="title stroke">We used ScratchJr to create our own stories.</h2>
        <p class="note">Note: Have children point out the features that enable them to add background and character.</p>
    </div>



    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class="pointer-events-none video1 ">
            <source src="{{ asset('assets/images/K2/animate1/225.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's look at this story!</h2>

        <p class="note">Note: Have children talk about what they see and guess what the story is about (no right or
            wrong).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class="pointer-events-none video1 ">
            <source src="{{ asset('assets/images/K2/animate1/225.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This is an animated story because the character is moving!
            Can you guess how the cat moved?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw] items-center">
            <img src="/assets/images/K2/animate1/a3.png" class="w-img" />
            <video id="video3" class="pointer-events-none video1 ">
                <source src="{{ asset('assets/images/K2/animate1/225.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">Programming blocks in ScratchJr were used to create a
            programme for the cat to move this way.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw]  items-center">
            <img src="/assets/images/K2/coding/gl1.png" class="!w-[16vw]" />
            <video id="video4" class="pointer-events-none video1 ">
                <source src="{{ asset('assets/images/K2/final/224.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">This is just like how we used programming blocks in Blockly
            to create a programme for the robot to move this way!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-[15rem] ">


        <h2 class="title stroke">Do you still remember what a programme is?
            What is the meaning of programming or coding?</h2>

        <p class="note">Note: Encourage children to share what they know about a programme and the
            meaning of programming or coding.</p>

    </div>

    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a4.png" />
        <h2 class="title stroke">A programme is a set of step-by-step instructions that tells a
            machine what to do and how to do it, somewhat like a recipe.</h2>
    </div>


    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw">

            <img src="/assets/images/K2/animate1/a5.png" class="w-img" />
            <img src="/assets/images/K2/animate1/a6.png" class="w-img" />
        </div>

        <h2 class="title stroke">Many things around us are controlled by different
            programmes.</h2>
    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a7.png" />
        <h2 class="title stroke">When someone is creating a programme for a machine,
            it is a task called programming or coding.</h2>
    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw">

            <img src="/assets/images/K2/animate1/a5.png" class="w-img" />
            <img src="/assets/images/K2/animate1/a6.png" class="w-img" />
        </div>

        <h2 class="title stroke">Learning of basic programming can help us
            better understand how each machine works.</h2>



    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex gap-[1vw">

            <img class="w-img" src="/assets/images/K2/animate1/a5.png" />
            <img class="w-img" src="/assets/images/K2/animate1/a7.png" />
        </div>

        <h2 class="title stroke">If you are creative, you may create new programmes
            for some machines to perform new tasks!</h2>
    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-x-[3vw]">
            <div>

                <h2 class="title stroke">Blockly</h2>
            </div>
            <div>

                <h2 class="title stroke">ScratchJr</h2>
            </div>

        </div>
        <img src="/assets/images/K2/animate1/a8.png" />

        <h2 class="title stroke">Indeed, both the apps have different commands in them.</h2>

        <p class="note">Note: Remind children that a command is an instruction.</p>

    </div>


    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-[3vw]">
            <div>

                <h2 class="title stroke">Blockly</h2>
            </div>
            <div>

                <h2 class="title stroke">ScratchJr</h2>
            </div>

        </div>
        <img src="/assets/images/K2/animate1/a9.png" />

        <h2 class="title stroke">Each command has a set of programming blocks.</h2>

        <p class="note">Note: Remind children that each programming block is a specific instruction.</p>

    </div>



    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex  gap-[3vw]">
            <div>

                <h2 class="title stroke">Blockly</h2>
                <img src="/assets/images/K2/animate1/a10.png" class="w-img" />
            </div>
            <div>

                <h2 class="title stroke">ScratchJr</h2>
                <img src="/assets/images/K2/animate1/a11.png" class="w-img" />
            </div>

        </div>

        <h2 class="title stroke">The main difference between the apps is that Blockly is used
            to create programmes for a robot whereas ScratchJr is used
            to create programmes for the characters in the project.</h2>


    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-center  relative">
        <div class="flex  gap-[1vw  items-center  ">
            <div class=" flex flex-col gap-[.6vw]">
                <img src="/assets/images/K2/animate1/a12.png" class="!max-w-[13vw]" />
                <img src="/assets/images/K2/animate1/a13.png" class="!max-w-[13vw]" />
            </div>
            <div class=" flex flex-col gap-[2vw]">
                <img src="/assets/images/K2/animate1/a14.png" class="!max-w-[2.5vw]" />
                <img src="/assets/images/K2/animate1/a15.png" class="!max-w-[2.5vw]" />
            </div>
            <div class=" flex flex-col gap-[.6vw]">
                <img src="/assets/images/K2/animate1/a17.png" class="!max-w-[13vw]" />
                <img src="/assets/images/K2/animate1/a18.png" class="!max-w-[13vw]" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a16.png" class="!max-w-[4vw]" />
            </div>
            <div>
                <img class="absolute  bottom-[11rem] right-[3rem] !max-w-[2.5vw]"
                    src="/assets/images/K2/animate1/a15.png" />
            </div>
        </div>
        <h2 class="title stroke">Open the application and start a new project.</h2>

        <p class="note">Note: Have children verbally direct the teacher to do this step.</p>


    </div>



    {{-- Slide 22 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img class="w-img" src="/assets/images/K2/animate1/a13.png" />
        <h2 class="title stroke">This command is called Motion Blocks.
            It allows us to design movements for a character.</h2>
        <p class="note">Note: <button class="text-amber-300 click-btn1">Click here</button> to guide
            children explore and understand the details and use of Motion Blocks.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a19.png" class="large-img6" />

        <h2 class="title stroke">Motion Blocks has a set of programming blocks.
            Each block here represents a movement.</h2>
        <p class="note">Note: Show and name each programming block here. Have children move accordingly (except Go Home).
        </p>
    </div>


    {{-- Slide 25 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]">
            <img src="/assets/images/K2/animate1/a20.png" class="large-img3" />
            <img src="/assets/images/K2/animate1/a21.png" class="large-img3" />
        </div>

        <h2 class="title stroke">Tap, drag and place a Move Right programming block
            to the programming area.</h2>
        <p class="note">Note: Show children how to do so.</p>


    </div>


    {{-- Slide 26 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <div>
                <img src="/assets/images/K2/animate1/a22.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a23.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Tap the block once to see how the character moves.</h2>
        <p class="note">Note: Explain to children that the Move Right block makes the character move one step to the
            right.</p>


    </div>


    {{-- Slide 27 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <div>
                <img src="/assets/images/K2/animate1/a22.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a23.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Tap the block five times to see how the character moves.</h2>
        <p class="note">Note: Explain to children that the Move Right block makes the character move one step to the
            right.</p>


    </div>

    {{-- Slide 28 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <div>
                <img src="/assets/images/K2/animate1/a24.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a23.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Tap here to make the character return to its starting point.</h2>
        <p class="note">Note: Explain to children that this is a position reset button for all the characters on the
            stage.</p>


    </div>

    {{-- Slide 29 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex   items-center">
            <div class="flex    items-center">
                <img src="/assets/images/K2/animate1/a25.png" class="large-img3" />
                <img src="/assets/images/K2/animate1/a26.png" class="large-img3" />
            </div>
            <img src="/assets/images/K2/animate1/a23.png" class="large-img3" />

        </div>


        <h2 class="title stroke">Tap to change the number on the block from 1 to 5
            and then tap the block to see how the character moves.</h2>
        <p class="note">Note: Explain to children that the number on the block decides how many steps the character will
            move.
        </p>
    </div>

    {{-- slide 30 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <div>
                <img src="/assets/images/K2/animate1/a27.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a23.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Tap here to have a grid view of the stage.</h2>
        <p class="note">Note: Have children guess the use of the grid.</p>


    </div>


    {{-- slide 31 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <div>
                <img src="/assets/images/K2/animate1/a28.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a29.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">Tap on the block to see how the character moves.</h2>
        <p class="note">Note: Guide children to note that the character moves from grid square 11 to 16.</p>


    </div>

    {{-- slide 32 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">

        <img src="/assets/images/K2/animate1/a30.png" />
        <h2 class="title stroke">How many grid squares did the character move?</h2>
        <p class="note">Note: Use a grid card to guide children to count (5 squares to the right).</p>
    </div>


    {{-- slide 33 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a29.png" />
        <h2 class="title stroke">Clearly, each step of a move for a character can be counted
            with the help of the grid squares.</h2>
    </div>


    {{-- slide 34 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <img src="/assets/images/K2/animate1/a31.png" class="w-img" />
            <img src="/assets/images/K2/animate1/a29.png" class="w-img" />
        </div>

        <h2 class="title stroke">To delete a programming block, tap and drag it out of the
            programming area.</h2>
        <p class="note">Note: Show children how to do so.</p>
    </div>


    {{-- slide 35 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a32.png" />
        <h2 class="title stroke">Now, let's see how other programming blocks under Motion
            Blocks control the character!</h2>
        <p class="note">Note: Guide children to explore the use of other programming blocks here; except Go Home.</p>
    </div>


    {{-- slide 36 --}}
    <div class="slide flex click1 flex-col items-center justify-between h-[50vh] text-start">

        <ul class="list-decimal !text-start title stroke">
            <h2 class="title stroke">What can you do if you want the character to...</h2>
            <li>Move 3 grid squares to the right?</li>
            <li>Move 4 grid squares to the left?</li>
            <li>Move up 2 grid squares?</li>
            <li>Do a somersault?</li>
            <li>Do a 4 grid squares hop?</li>
        </ul>
        <p class="note">Note: Guide children to discuss and answer each question.</p>
    </div>


    {{-- Slide 37 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex gap-x-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <img src="/assets/images/K2/animate1/a33.png" class="!w-[16vw]" />
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <img src="/assets/images/K2/animate1/a33.png" class="!w-[16vw]" />
            </div>

        </div>

        <h2 class="title stroke">Now, let's see what happens when a few programming blocks
            under Motion Blocks are placed together for a character.</h2>

        <p class="note">Note: Show children how to do so. You may show them the effect of other combination of
            programming blocks.</p>
    </div>


    {{-- slide 38 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a33.png" />
        <h2 class="title stroke">Doesn't the cat look more lively and attractive?</h2>
        <p class="note">Note: Tell children that using different combination of programming blocks to control a character
            will give us the impression that the character is doing different things.</p>
    </div>


    {{-- slide 39 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <img src="/assets/images/K2/animate1/a34.png" />
        <h2 class="title stroke">At the end, what can you do if you want the character
            to return to its starting point?</h2>
    </div>


    {{-- slide 40 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <img src="/assets/images/K2/animate1/a35.png" class="w-img" />
            <img src="/assets/images/K2/animate1/a33.png" class="w-img" />
        </div>
        <h2 class="title stroke">You may tap here every time you want the character
            to return to its starting point.</h2>
    </div>


    {{-- slide 41 --}}
    <div class="slide flex click1 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <img src="/assets/images/K2/animate1/a36.png" class="w-img" />
            <img src="/assets/images/K2/animate1/a33.png" class="w-img" />
        </div>

        <h2 class="title stroke">You may also add the Go Home programming block
            at the end of your programme to make the character
            return to its starting point.</h2>
    </div>



    {{-- Slide 42 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img class="w-img" src="/assets/images/K2/animate1/a37.png" />
        <h2 class="title stroke">This command is called Triggering Blocks It allows us to
            choose wayso start running a programme of a character.</h2>
        <p class="note">Note: <button class="text-amber-300 click-btn2">Click here</button> to guide children
            explore and understand the details and use of Triggering Blocks</p>
    </div>

    {{-- Slide 43 --}}
    <div class="slide flex click2  flex-col items-center justify-center">
        <img src="/assets/images/K2/animate1/a38.png" />
        <h2 class="title stroke">Triggering Blocks has a set of programming blocks. Each block
            here is a way to start running a programme on the stage.</h2>
        <p class="note">Note: Show and name each programming block here. Tell children that we'll only use Start On Green
            Flag for now.</p>



    </div>


    {{-- slide 44 --}}
    <div class="slide flex click2 flex-col items-center justify-center gap-[1vw] ">
        <div class="flex  gap-[1vw]  items-center">
            <div>
                <img src="/assets/images/K2/animate1/a39.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a40.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">After a programme is created for a character, this Green
            Flag programming block must be added in front of the
            programme so that the character will animate on the stage.</h2>

        <p class="note">Note: Show children how to do so. Show them that the programme will not run on stage if no Green
            Flag in front of it.</p>
    </div>
    {{-- slide 45 --}}
    <div class="slide flex click2 flex-col items-center justify-center  ">
        <div class="flex  gap-[1vw]  items-center">
            <div>
                <img src="/assets/images/K2/animate1/a41.png" class="large-img3" />
            </div>
            <div>
                <img src="/assets/images/K2/animate1/a42.png" class="large-img3" />
            </div>

        </div>

        <h2 class="title stroke">With this Green Flag programming block added in front of
            the programme, we can then see the character
            animate in the presentation mode too.

        </h2>

        <p class="note">Note: Show children how to do so. </p>
    </div>
    {{-- slide 46 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <ul class="title stroke !text-start">
            <li>Mission:</li>
            <li>Let's use the programming blocks under the Motion Blocks to</li>
            <li>design a dance for a character of your choice. After that,</li>
            <li>showcase your work in the presentation mode.</li>
        </ul>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>
    {{-- slide 47 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <ul class="title stroke !text-start">
            <h2 class="title stroke">Steps:</h2>
            <li>1. Tap on the icon of ScratchJr to open the application.</li>

        </ul>

        <div class="flex gap-[1vw]">
            <img src="/assets/images/K2/animate1/a43.png" class="large-img3" />
            <img src="/assets/images/K2/animate1/a44.png" class="large-img3" />

        </div>

    </div>
    {{-- slide 48 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <ul class="title stroke !text-start">
            <h2 class="title stroke">Steps:</h2>
            <li>2. Tap here to start using the application.</li>

        </ul>

        <div class="flex gap-[1vw]  items-center">
            <img src="/assets/images/K2/animate1/a45.png" class="w-img" />
            <img src="/assets/images/K2/animate1/a14.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/animate1/a46.png" class="w-img" />
        </div>
    </div>


    {{-- slide 48 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <ul class="title stroke !text-start">
            <h2 class="title stroke">Steps:</h2>
            <li>3. Tap here to start creating your story.</li>

        </ul>

        <div class="flex gap-[1vw]  items-center">
            <img src="/assets/images/K2/animate1/a47.png" class="large-img3" />
            <img src="/assets/images/K2/animate1/a14.png" class="!max-w-[2.5vw]" />
            <img src="/assets/images/K2/animate1/a48.png" class="large-img3" />
        </div>
    </div>


    {{-- slide 49 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <ul class="title stroke !text-start">
            <h2 class="title stroke">Steps:</h2>
            <li>4. Who will be your dancer? If the cat is not your choice,
                delete it and choose another character.</li>
        </ul>
        <img src="/assets/images/K2/animate1/a48.png" class="w-img" />
        <p class="note">Note: Verbally guide children that need help.</p>
    </div>


    {{-- slide 50 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <ul class="title stroke !text-start">
            <h2 class="title stroke">Steps:</h2>
            <li>5. Use your creativity to design and create a dance for your
                character.</li>
        </ul>
        <img src="/assets/images/K2/animate1/a48.png" class="!w-[16vw]" />
        <p class="note">Note: Remind children that they can only use the programming blocks under the
            Motion Blocks to create the dance.</p>
    </div>


    {{-- slide 51 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <ul class="title stroke !text-start">
            <h2 class="title stroke">Steps:</h2>
            <li>6. Showcase your work in the presentation mode</li>
        </ul>
        <img src="/assets/images/K2/animate1/a49.png" />
        <p class="note">Note: After the showcase, have children vote for the best dancer created.</p>

    </div>





    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {

            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            let currentSlideNumber = 0;
            let inSpecialMode = false;
            let slideToReturnTo = null;
            let specialSlideType = null;

            const whereToGoWhenReturn = "{{ route('animate1Selection') }}";
            const whereToGoWhenDone = "{{ route('animate1Selection') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                for (let i = 0; i < videos.length; i++) {
                    videos[i].pause();
                }
            }

            function isSpecialSlide(slide) {
                const classes = slide.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    if (classes[i].startsWith('click') && classes[i].match(/^click\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classes = button.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    if (classes[i].startsWith('click-btn')) {
                        const number = classes[i].replace('click-btn', '');
                        return 'click' + number;
                    }
                }
                return null;
            }

            function hasMoreSpecialSlides(startFrom) {
                if (!specialSlideType) {
                    return false;
                }

                for (let i = startFrom + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideType)) {
                        return true;
                    }
                }
                return false;
            }

            function isLastSlide(slideNumber) {
                if (slideNumber === slides.length - 1) {
                    return true;
                }

                if (inSpecialMode && !hasMoreSpecialSlides(slideNumber)) {
                    return true;
                }

                return false;
            }

            function showSlide(slideNumber) {
                pauseAllVideos();

                for (let i = 0; i < slides.length; i++) {
                    if (i === slideNumber) {
                        slides[i].classList.remove("hidden");
                    } else {
                        slides[i].classList.add("hidden");
                    }
                }

                if (isLastSlide(slideNumber)) {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.add("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.remove("hidden");
                    }
                } else {
                    for (let i = 0; i < nextButtons.length; i++) {
                        nextButtons[i].classList.remove("hidden");
                    }
                    if (doneButton) {
                        doneButton.classList.add("hidden");
                    }
                }
            }

            function goToNextSlide() {
                if (currentSlideNumber >= slides.length - 1) {
                    return;
                }

                currentSlideNumber++;

                while (currentSlideNumber < slides.length) {
                    const slide = slides[currentSlideNumber];

                    if (inSpecialMode) {
                        if (slide.classList.contains(specialSlideType)) {
                            break;
                        }
                    } else {
                        if (!isSpecialSlide(slide)) {
                            break;
                        }
                    }

                    currentSlideNumber++;
                }

                if (currentSlideNumber < slides.length) {
                    showSlide(currentSlideNumber);
                }
            }

            function goToPreviousSlide() {
                if (currentSlideNumber === 0 && !inSpecialMode) {
                    window.location.href = whereToGoWhenReturn;
                    return;
                }

                if (inSpecialMode) {
                    let previousSlide = currentSlideNumber - 1;

                    while (previousSlide >= 0) {
                        if (slides[previousSlide].classList.contains(specialSlideType)) {
                            break;
                        }
                        previousSlide--;
                    }

                    if (previousSlide >= 0) {
                        currentSlideNumber = previousSlide;
                        showSlide(currentSlideNumber);
                    } else {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    }
                } else {
                    if (currentSlideNumber > 0) {
                        currentSlideNumber--;

                        while (currentSlideNumber > 0 && isSpecialSlide(slides[currentSlideNumber])) {
                            currentSlideNumber--;
                        }

                        showSlide(currentSlideNumber);
                    }
                }
            }

            for (let i = 0; i < clickButtons.length; i++) {
                clickButtons[i].addEventListener("click", function(event) {
                    event.preventDefault();

                    slideToReturnTo = currentSlideNumber;
                    inSpecialMode = true;
                    specialSlideType = getSpecialTypeFromButton(clickButtons[i]);

                    for (let j = 0; j < slides.length; j++) {
                        if (slides[j].classList.contains(specialSlideType)) {
                            currentSlideNumber = j;
                            showSlide(currentSlideNumber);
                            break;
                        }
                    }
                });
            }

            for (let i = 0; i < nextButtons.length; i++) {
                nextButtons[i].addEventListener("click", goToNextSlide);
            }

            returnButton.addEventListener("click", goToPreviousSlide);

            if (doneButton) {
                doneButton.addEventListener("click", function() {
                    if (inSpecialMode && slideToReturnTo !== null) {
                        currentSlideNumber = slideToReturnTo;
                        inSpecialMode = false;
                        specialSlideType = null;
                        slideToReturnTo = null;
                        showSlide(currentSlideNumber);
                    } else {
                        window.location.href = whereToGoWhenDone;
                    }
                });
            }

            showSlide(currentSlideNumber);
        });
    </script>
@endpush
