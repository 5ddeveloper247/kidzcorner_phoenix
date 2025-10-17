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

        <img src="/assets/images/K1/sm/levers/le1.png" />
        <h2 class="title stroke">What is this? <br>
            What is it for?</h2>

    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le1.png" />
        <h2 class="title stroke">A seesaw is a long board rested on a <br>
            fixed part in the middle.</h2>

    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le2.png" />
        <h2 class="title stroke">To play it, you and a friend each sit on one end.
            When one end of it goes up, the other end goes down.
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


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
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke"><span class="!text-white">simple machine</span> are basic tools that help us
            to do work easily.</h2>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <img src="/assets/images/K1/sm/levers/le3.png" />
        <h2 class="title stroke">A <span class="!text-white">lever</span> is a bar supported on a fixed part called the <br>
            <span class="!text-white">fulcrum</span>. The bar moves around the <span class="!text-white">fulcrum</span>.
        </h2>

    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


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
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le5.png" />

        <h2 class="title stroke">Usually, people use a lever to lift heavy things
            that we would not be able to lift without it.</h2>


    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le1.png" />

        <h2 class="title stroke">Where is the lever and fulcrum of this seesaw? <br>
            What does the lever do?</h2>


    </div>


    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le1.png" />

        <h2 class="title stroke">The long board is the <span class="!text-white">lever</span> of a seesaw.
            The <span class="!text-white">fulcrum</span> of this <span class="!text-white">lever</span> is fixed at the
            middle.</h2>


    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le2.png" />

        <h2 class="title stroke">This lever allows us to lift each other up and down
            a seesaw easily for fun.</h2>


    </div>



    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le2.png" />

        <h2 class="title stroke">Do you think you and your friend can lift
            each other up easily without this lever?</h2>


    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le2.png" />

        <h2 class="title stroke">Do you think you and your friend can lift
            each other up easily without this lever?</h2>


    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le6.png" />

        <h2 class="title stroke">In fact, the fulcrum of a lever can be fixed at different
            parts of the bar for different uses.</h2>


    </div>


    {{-- sldie 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le7.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>


    </div>


    {{-- sldie 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le8.png" />

        <h2 class="title stroke">A pencil is a lever when you use it <br>
            to write, draw or colour.</h2>


    </div>



    {{-- sldie 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le8.png" />

        <h2 class="title stroke">The <span class="!text-white">fulcrum</span> of this <span class="!text-white">lever</span>
            is at your thumb,
            where you support the pencil.</h2>


    </div>


    {{-- sldie 20 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le9.png" />

        <h2 class="title stroke">This lever allows us to move the pencil tip.
            This helps to write, draw or colour easily.</h2>


    </div>



    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le10.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>


    </div>


    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le11.png" />

        <h2 class="title stroke">The handle is the lever of a spoon. </h2>


    </div>



    {{-- sldie 23 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le11.png" />

        <h2 class="title stroke">The <span class="!text-white">fulcrum</span> of this <span class="!text-white">lever</span>
            is at your thumb,
            where you support the spoon. </h2>


    </div>


    {{-- sldie 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le12.png" />

        <h2 class="title stroke">This lever allows us to move the pencil tip.
            This helps to write, draw or colour easily. </h2>


    </div>


    {{-- sldie 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le13.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>


    </div>


    {{-- sldie 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le14.png" />

        <h2 class="title stroke">To use a pair of chopsticks correctly, you will move the
            top chopstick and keep the bottom chopstick still. </h2>


    </div>


    {{-- sldie 27 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le15.png" />

        <h2 class="title stroke">So, the top chopsticks is the <span class="!text-white">lever</span> of a <br>
            pair of chopsticks. </h2>


    </div>



    {{-- sldie 28 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le15.png" />

        <h2 class="title stroke">The fulcrum of this lever is at the tip of your thumb,
            where you support the top chopstick. </h2>


    </div>
    {{-- sldie 29 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le16.png" />

        <h2 class="title stroke">This lever allows us to move the top chopstick up and down.
            This helps to pick up food with a pair of chopsticks easily. </h2>


    </div>


    {{-- sldie 30 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le17.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>


    </div>


    {{-- sldie 31 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le18.png" />

        <h2 class="title stroke">The long handle is the lever of a broom.</h2>


    </div>


    {{-- slide 32 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le18.png" />

        <h2 class="title stroke">The fulcrum of this lever is at the hand on top,
            where you support the broom.</h2>


    </div>



    {{-- slide 33 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le19.png" />

        <h2 class="title stroke">This lever allows us to move the handle of the broom.
            This helps to sweep floor easily.</h2>


    </div>



    {{-- slide 34 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le20.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>


    </div>


    {{-- slide 35 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le21.png" />

        <h2 class="title stroke">The handle is the <span class="!text-white">lever</span> of a stapler.
            The <span class="!text-white">fulcrum</span> of this <span class="!text-white">lever</span> is fixed at the
            end.</h2>


    </div>



    {{-- slide 36 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le22.png" />

        <h2 class="title stroke">This lever allows us to push down the handle of the stapler
            and staple papers. This helps to hold papers together easily.</h2>


    </div>


    {{-- slide 37 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le23.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>


    </div>


    {{-- slide 38 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le23.png" />

        <h2 class="title stroke">A pair of scissors is made up of two levers. </h2>


    </div>


    {{-- slide 39 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le23.png" />

        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same place,
            so they share the same fulcrum. </h2>


    </div>
    {{-- slide 40 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le24.png" />

        <h2 class="title stroke">These levers allow us to move the two sharp blades of the
            scissors. This helps to cut things easily. </h2>


    </div>
    {{-- slide 41 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le25.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>


    </div>

    {{-- slide 42 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le25.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>


    </div>
    {{-- slide 43 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le26.png" />

        <h2 class="title stroke">A clothes peg is made up of two <span class="!text-white">levers</span>. </h2>


    </div>
    {{-- slide 44 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le26.png" />

        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same place,
            so they share the same fulcrum. </h2>


    </div>
    {{-- slide 45 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le27.png" />

        <h2 class="title stroke">These levers allow us to open and close the two long pieces of
            the peg. This helps to hold clothes to a clothesline easily. </h2>


    </div>
    {{-- slide 46 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le28.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>


    </div>
    {{-- slide 47 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le29.png" />

        <h2 class="title stroke">A pair of tongs is made up of two levers. </h2>


    </div>
    {{-- slide 48 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le29.png" />

        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same
            place, so they share the same fulcrum. </h2>


    </div>
    {{-- slide 49 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le30.png" />

        <h2 class="title stroke">These levers allow us to move the two handlers of the tongs.
            This helps to pick up things easily. </h2>


    </div>

    {{-- slide 50 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le31.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do?</h2>


    </div>

    {{-- slide 51 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le32.png" />

        <h2 class="title stroke">The chains are the levers of a swing. </h2>


    </div>
    {{-- slide 52 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le32.png" />

        <h2 class="title stroke">The fulcrums of these levers are on the top bar,
            where the chains are fixed to.</h2>


    </div>


    {{-- slide 53 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le33.png" />

        <h2 class="title stroke">These levers allow us to move the seat that hold by the chains
            easily. This helps us to have fun sitting on a swing. </h2>


    </div>

    {{-- slide 54 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le34.png" />

        <h2 class="title stroke">What is this? Where is the lever and its fulcrum?
            What does the lever do? </h2>


    </div>
    {{-- slide 55 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le35.png" />

        <h2 class="title stroke">A wheelbarrow is made up of two levers. </h2>


    </div>
    {{-- slide 56 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le35.png" />

        <h2 class="title stroke">The fulcrum of the two levers are fixed at the same
            place, so they share the same fulcrum.</h2>


    </div>
    {{-- slide 57 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le36.png" />

        <h2 class="title stroke">These levers allow us to lift and move the wheelbarrow around.
            This helps to carry heavy things around easily.</h2>


    </div>
    {{-- slide 58 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le37.png" />

        <h2 class="title stroke">In short, many things around us have <span class="!text-white">levers </span>.</h2>


    </div>
    {{-- slide 59 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le38.png" />

        <h2 class="title stroke">Most levers can be found on things that
            we hold on to when we use them.</h2>

    </div>
    {{-- slide 60 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le39.png" />

        <h2 class="title stroke">This is a lever. What are the things used to build this lever?
            Where is its fulcrum?</h2>

    </div>



    {{-- slide 61 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="title stroke  !text-white">Individual Activity</h2>
        <img src="/assets/images/K1/sm/levers/le40.png" />

        <ul class="!text-start title stroke">
            <li class="!text-white">Let’s find out (Experiment):</li>
            <li>How will you use a lever to toss an eraser as far as you can?</li>
        </ul>


    </div>
    {{-- slide 62 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <img src="/assets/images/K1/sm/levers/le41.png" />

        <ul class="!text-start title stroke">

            <li class="!text-white">What do you think will happen (Prediction):</li>
            <li>How will you get the longest toss of an eraser? When the
                fulcrum is placed near to or far from the eraser?</li>
        </ul>

        <p class="note">
            Note: Have children vote for their and record the result in a graph <br>
            (refer to the sample on the next page).</p>


    </div>
    {{-- slide 63 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">How will you get the longest toss of an eraser?
            When the fulcrum is placed near to or far from eraser?</h2>

        <img src="/assets/images/K1/sm/levers/le42.png" />



        <p class="note">
            Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.</p>


    </div>


    {{-- slide 64 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <ul class="!text-start title stroke">
            <li class="!text-white">Let’s do:</li>
            <li>1. Put the eraser on one end of the lever.</li>
        </ul>

        <img src="/assets/images/K1/sm/levers/le40.png" />

    </div>
    {{-- slide 65 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <ul class="!text-start title stroke">
            <li class="!text-white">Let’s do:</li>
            <li>2.Push down the other end of the lever to see how far the
                eraser will be tossed.</li>
        </ul>

        <img src="/assets/images/K1/sm/levers/le43.png" />

    </div>


    {{-- slide 66 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <ul class="!text-start title stroke">
            <li class="!text-white">Let’s do (Experiment Procedure):</li>
            <li>3. Change the position of the fulcrum and test again.</li>
        </ul>


        <img src="/assets/images/K1/sm/levers/le44.png" />

        <p class="note">

            Note: Encourage children try to achieve the longest toss record.</p>


    </div>


    {{-- slide 67 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <ul class="!text-start title stroke">
            <li class="!text-white">Let’s do (Experiment Procedure):</li>
            <li>4. Repeat steps 1-2 by placing the fulcrum near to the
                eraser. Measure the distance tossed with thread. Paste
                the thread in the Learning Journal.</li>
        </ul>


        <img    class="w-[885px] h-[290px]"      src="/assets/images/K1/sm/levers/le44.png" />

        <p class="note">

            Note: Start step 4 only after most children roughly get the answer; <br>
            guide children to do the measuring and cut out the thread.</p>


    </div>
    {{-- slide 68 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">


        <ul class="!text-start title stroke">
            <li class="!text-white">Let’s do (Experiment Procedure):</li>
            <li>5. Repeat steps 1-2 by placing the fulcrum near to the
                eraser. Measure the distance tossed with thread. Paste
                the thread in the Learning Journal.</li>
        </ul>


        <img  class="w-[734] h-[309px]"    src="/assets/images/K1/sm/levers/le45.png" />




    </div>
    {{-- slide 69 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">



        <img src="/assets/images/K1/sm/levers/le46.png" /> <br>


        <ul class="!text-start title stroke">
            <li class="!text-white">What do you observe (Result):</li>
            <li>When the fulcrum is placed near the eraser, do you get the
                longest toss? </li>



    </div>
    {{-- slide 70 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">



        
        
        <ul class="!text-start title stroke">
            <li class="!text-white">What do you learn (Conclusion):</li>
            <li>How will you use a lever to get the longest toss of an eraser?
Will you place the fulcrum near to or far from the eraser?</li>
                
                <img src="/assets/images/K1/sm/levers/le41.png" /> 


    </div>



    {{-- slide 71 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        
        

        <img src="/assets/images/K1/sm/levers/le47.png" /> 
        
        
      <h2  class=" title stroke">Through the activity (experiment), we know that we will get
the longest toss of an eraser when the fulcrum is
placed far from the eraser.</h2>



    </div>


      
    {{-- slide 72 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[1040px] h-[550px] bg-cover bg-center flex flex-col p-[40px] justify-around"
        style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
        <p class=  >How far has the eraser been tossed? Paste the measurements (the threads) here.
        </p><br>
        <img src="/assets/images/K1/sm/levers/le48.png" /> 
        <img src="/assets/images/K1/sm/levers/le49.png" /> 
        <img src="/assets/images/K1/sm/levers/le50.png" /> 



         
        </div>
    </div>
    {{-- slide 73 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[1040px] h-[550px] bg-cover bg-center flex flex-col p-[40px] justify-around"
        style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
        <p class=  >If you want to toss a paper box very for, how would you build the lever? Tick  ✔  it.
        </p><br>
        <img src="/assets/images/K1/sm/levers/le51.png" /> 
    



         
        </div>
    </div>
















































    {{-- Complete button --}}
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

    {{-- Buttons --}}
 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/K1/cm/Vector4.png') }}" />
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
                    window.location.href = "{{ route('LeversSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
