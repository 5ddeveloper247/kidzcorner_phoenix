@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">How do Levers Work?</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le1.png" />
        <h2 class="title stroke">What is this?
            What is it for?</h2>

    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le1.png" />
        <h2 class="title stroke">A seesaw is a long board rested on a
            fixed part in the middle.</h2>

    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/51.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">To play it, you and a friend each sit on one end.
            When one end of it goes up, the other end goes down.
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
                <img src="/assets/images/pptimages/video.png" />
            </div>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <img src="/assets/images/K1/sm/levers/le1.png" />
        <h2 class="title stroke">In fact, a seesaw is made with the idea of
            In fact, a seesaw is made with the idea of
            a <span class="!text-white">simple machine</span> called a <span class="!text-white">lever</span>.</h2>

    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-[20rem] ">

        <h2 class="title stroke">Do you still remember what a <span class="!text-white">simple machine</span> is?</h2>
        <p class="note">Note: Have children boldly say what they think a simple machine is.</p>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke"><span class="!text-white">simple machine</span> are basic tools that help us
            to do work easily.</h2>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <img src="/assets/images/K1/sm/levers/le3.png" />
        <h2 class="title stroke">A <span class="!text-white">lever</span> is a bar supported on a fixed part called the
            <span class="!text-white">fulcrum</span>. The bar moves around the <span class="!text-white">fulcrum</span>.
        </h2>

    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <img src="/assets/images/K1/sm/levers/le4.png" />
        <h2 class="title stroke">With the help of the fulcrum, one end of the lever will move
            when you use force to push down the other end.</h2>

    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-[10rem] ">


        <h2 class="title stroke">Since a <span class="!text-white">lever</span> is a <span class="!text-white">simple
                machine</span>, can you guess
            how a <span class="!text-white">lever</span> helps us to do work easily?</h2>

        <p class="note">Note: Have children boldly imagine and guess the uses of a lever.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le5.png" />

        <h2 class="title stroke">Usually, people use a lever to lift heavy things
            that we would not be able to lift without it.</h2>


    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le1.png" />

        <h2 class="title stroke">Where is the lever and fulcrum of this seesaw?
            What does the lever do?</h2>


    </div>


    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl1.png" />
        <h2 class="title stroke">The long board is the <span class="!text-white">lever</span> of a seesaw.
            The <span class="!text-white">fulcrum</span> of this <span class="!text-white">lever</span> is fixed at the
            middle.</h2>

    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/51.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This lever allows us to lift each other up and down
            a seesaw easily for fun.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/51.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h2 class="title stroke">Do you think you and your friend can lift
            each other up easily without this lever?</h2>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le6.png" />
        <h2 class="title stroke">In fact, the fulcrum of a lever can be fixed at different
            parts of the bar for different uses.</h2>
    </div>


    {{-- sldie 17 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le7.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>


    </div>


    {{-- sldie 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le8.png" />

        <h2 class="title stroke">A pencil is a lever when you use it
            to write, draw or colour.</h2>


    </div>



    {{-- sldie 19 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le8.png" />

        <h2 class="title stroke">The <span class="!text-white">fulcrum</span> of this <span class="!text-white">lever</span>
            is at your thumb,
            where you support the pencil.</h2>


    </div>


    {{-- sldie 20 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/52.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This lever allows us to move the pencil tip.
            This helps to write, draw or colour easily.</h2>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le10.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>


    </div>


    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le11.png" />

        <h2 class="title stroke">The handle is the lever of a spoon. </h2>


    </div>



    {{-- sldie 23 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl2.png" />
        <h2 class="title stroke">The <span class="!text-white">fulcrum</span> of this <span
                class="!text-white">lever</span>
            is at your thumb, where you support the spoon. </h2>
    </div>


    {{-- sldie 24 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/53.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This lever allows us to move the pencil tip.
            This helps to write, draw or colour easily. </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 25 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le13.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>


    </div>


    {{-- sldie 26 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/54.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">To use a pair of chopsticks correctly, you will move the
            top chopstick and keep the bottom chopstick still. </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 27 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le15.png" />
        <h2 class="title stroke">So, the top chopsticks is the <span class="!text-white">lever</span> of a
            pair of chopsticks. </h2>
    </div>


    {{-- sldie 28 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl3.png" />
        <h2 class="title stroke">The fulcrum of this lever is at the tip of your thumb,
            where you support the top chopstick. </h2>
    </div>



    {{-- sldie 29 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/55.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This lever allows us to move the top chopstick up and down.
            This helps to pick up food with a pair of chopsticks easily. </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 30 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le17.png" />
        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>
    </div>


    {{-- sldie 31 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le18.png" />
        <h2 class="title stroke">The long handle is the lever of a broom.</h2>
    </div>


    {{-- slide 32 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/pl4.png" />

        <h2 class="title stroke">The fulcrum of this lever is at the hand on top,
            where you support the broom.</h2>


    </div>



    {{-- slide 33 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/56.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This lever allows us to move the handle of the broom.
            This helps to sweep floor easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- slide 34 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le20.png" />
        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>
    </div>


    {{-- slide 35 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le21.png" />
        <h2 class="title stroke">The handle is the <span class="!text-white">lever</span> of a stapler.
            The <span class="!text-white">fulcrum</span> of this <span class="!text-white">lever</span> is fixed at the
            end.</h2>
    </div>



    {{-- slide 36 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/57.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This lever allows us to push down the handle of the stapler
            and staple papers. This helps to hold papers together easily.</h2>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 37 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le23.png" />
        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>
    </div>


    {{-- slide 38 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl5.png" />
        <h2 class="title stroke">A pair of scissors is made up of two levers. </h2>
    </div>


    {{-- slide 39 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl6.png" />
        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same place,
            so they share the same fulcrum. </h2>
    </div>


    {{-- slide 40 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/15.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">These levers allow us to move the two sharp blades of the
            scissors. This helps to cut things easily. </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 41 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le25.png" />
        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>
    </div>

    {{-- slide 42 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le25.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>
    </div>


    {{-- slide 43 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le26.png" />

        <h2 class="title stroke">A clothes peg is made up of two <span class="!text-white">levers</span>. </h2>

    </div>

    {{-- slide 44 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl7.png" />
        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same place,
            so they share the same fulcrum. </h2>
    </div>


    {{-- slide 45 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video11" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/58.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">These levers allow us to open and close the two long pieces of
            the peg. This helps to hold clothes to a clothesline easily. </h2>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 46 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le28.png" />
        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>
    </div>


    {{-- slide 47 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le29.png" />
        <h2 class="title stroke">A pair of tongs is made up of two levers. </h2>
    </div>


    {{-- slide 48 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl8.png" />
        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same
            place, so they share the same fulcrum. </h2>
    </div>


    {{-- slide 49 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/59.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">These levers allow us to move the two handlers of the tongs.
            This helps to pick up things easily. </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 50 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le31.png" />
        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>
    </div>


    {{-- slide 51 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le32.png" />
        <h2 class="title stroke">The chains are the levers of a swing. </h2>
    </div>


    {{-- slide 52 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl9.png" />
        <h2 class="title stroke">The fulcrums of these levers are on the top bar,
            where the chains are fixed to.</h2>
    </div>


    {{-- slide 53 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video13" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/60.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">These levers allow us to move the seat that hold by the chains
            easily. This helps us to have fun sitting on a swing. </h2>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 54 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le34.png" />
        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>
    </div>


    {{-- slide 55 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le35.png" />
        <h2 class="title stroke">A wheelbarrow is made up of two levers. </h2>
    </div>


    {{-- slide 56 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/pl10.png" />
        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same
            place, so they share the same fulcrum.</h2>
    </div>


    {{-- slide 57 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <video id="video14" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/61.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">These levers allow us to lift and move the wheelbarrow around.
            This helps to carry heavy things around easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video14')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>
    {{-- slide 58 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le37.png" />

        <h2 class="title stroke">In short, many things around us have <span class="!text-white">levers </span>.</h2>


    </div>
    {{-- slide 59 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le38.png" />

        <h2 class="title stroke">Most levers can be found on things that
            we hold on to when we use them.</h2>

    </div>
    {{-- slide 60 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le39.png" />

        <h2 class="title stroke">This is a lever. What are the things used to build this lever?
            Where is its fulcrum?</h2>

    </div>



    {{-- slide 61 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <h2 class="title stroke  !text-white">Individual Activity</h2>
        <img src="/assets/images/K1/sm/levers/le40.png" />

        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">Let’s find out (Experiment):</li>
            <li>How will you use a lever to toss an eraser as far as you can?</li>
        </ul>


    </div>
    {{-- slide 62 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="/assets/images/K1/sm/levers/le41.png" />

        <ul class="lesson-ul !text-start title stroke">

            <li class="!text-white">What do you think will happen (Prediction):</li>
            <li>How will you get the longest toss of an eraser? When the
                fulcrum is placed near to or far from the eraser?</li>
        </ul>

        <p class="note">
            Note: Have children vote for their and record the result in a graph
            (refer to the sample on the next page).</p>


    </div>
    {{-- slide 63 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke">How will you get the longest toss of an eraser?
            When the fulcrum is placed near to or far from eraser?</h2>

        <img src="/assets/images/K1/sm/levers/le42.png" />



        <p class="note">
            Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.</p>


    </div>


    {{-- slide 64 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">Let’s do:</li>
            <li>1. Put the eraser on one end of the lever.</li>
        </ul>

        <img src="/assets/images/K1/sm/levers/le40.png" />

    </div>
    {{-- slide 65 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">Let’s do:</li>
            <li>2.Push down the other end of the lever to see how far the
                eraser will be tossed.</li>
        </ul>

        <img src="/assets/images/K1/sm/levers/le43.png" />

    </div>


    {{-- slide 66 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">Let’s do (Experiment Procedure):</li>
            <li>3. Change the position of the fulcrum and test again.</li>
        </ul>


        <img src="/assets/images/K1/sm/levers/le44.png" />

        <p class="note">

            Note: Encourage children try to achieve the longest toss record.</p>


    </div>


    {{-- slide 67 --}}
    <div class="slide flex flex-col items-center justify-center  ">


        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">Let’s do (Experiment Procedure):</li>
            <li>4. Repeat steps 1-2 by placing the fulcrum near to the
                eraser. Measure the distance tossed with thread. Paste
                the thread in the Learning Journal.</li>
        </ul>


        <img src="/assets/images/K1/sm/levers/le44.png" />

        <p class="note">

            Note: Start step 4 only after most children roughly get the answer;
            guide children to do the measuring and cut out the thread.</p>
    </div>


    {{-- slide 68 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">Let’s do (Experiment Procedure):</li>
            <li>5. Repeat steps 1-2 by placing the fulcrum near to the
                eraser. Measure the distance tossed with thread. Paste
                the thread in the Learning Journal.</li>
        </ul>

        <img class="t-title" src="/assets/images/K1/sm/levers/le45.png" />
    </div>


    {{-- slide 69 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/levers/le46.png" />
        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">What do you observe (Result):</li>
            <li>When the fulcrum is placed near the eraser, do you get the
                longest toss? </li>
    </div>


    {{-- slide 70 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <ul class="lesson-ul !text-start title stroke">
            <li class="!text-white">What do you learn (Conclusion):</li>
            <li>How will you use a lever to get the longest toss of an eraser?
                Will you place the fulcrum near to or far from the eraser?</li>

            <img src="/assets/images/K1/sm/levers/le41.png" />
    </div>



    {{-- slide 71 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video15" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/62.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class=" title stroke">Through the activity (experiment), we know that we will get
            the longest toss of an eraser when the fulcrum is
            placed far from the eraser.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video15')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 72 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col justify-around"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=>How far has the eraser been tossed? Paste the measurements (the threads) here.
            </p>
            <img src="/assets/images/K1/sm/levers/pl11.png" />
        </div>
    </div>


    {{-- slide 73 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col justify-around"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=>If you want to toss a paper box very for, how would you build the lever? Tick ✔ it.
            </p>
            <img src="/assets/images/K1/sm/levers/le51.png" />
        </div>
    </div>



    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
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
        // Video toggle function - plays or pauses a video when clicked
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all slide elements
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('LeversSelection') }}";
            const doneButtonRoute = "{{ route('LeversSelection') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide
                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            returnButton.addEventListener("click", () => {
                // If on first slide, navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            // DONE button - navigate to completion route
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = doneButtonRoute;
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
