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
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke !text-white">Class Activity 1</h2>
            <br>
            <br>
            <img src="/assets/images/K1/sm/wedge/w1.png" />
        </div>
        <ul class="title stroke !text-start tracking-tighter">
            <li>Let’s find out:</li>
            <li>How would a triangular block go easily into the moist sand?</li>
        </ul>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex gap-1.5">
            <img src="/assets/images/K1/sm/wedge/w2.png" />
            <img src="/assets/images/K1/sm/wedge/w3.png" />

        </div>
        <ul class="  title !text-start">
            <li class=" !text-white">What do you think (Prediction):</li>
            <li class="title stroke">Is it easier to push the flat side or pointed side of a <br>
                triangular block through moist sand?</li>
        </ul>
    </div>


    {{-- Slide3 --}}

    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center align-middle">
            <ul class="title stroke !text-start  list-none tracking-tighter">
                <li class="!text-white ">Let’s do (Experiment Procedure):</li>
                <li>1.Press the flat side of a triangular block onto a heap of <br> moist sand.</li>

            </ul>
            <div class="flex justify-center align-middle">

                <img src="/assets/images/K1/sm/wedge/w2.png" />
            </div>
        </div>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center align-middle">
            <ul class="title stroke !text-start  list-none tracking-tighter">
                <li class="!text-white ">Let’s do (Experiment Procedure):</li>
                <li>2.Press the pointed end of the triangular block onto the <br>
                    heap of moist sand.</li>

            </ul>
            <div class="flex justify-center align-middle">

                <img src="/assets/images/K1/sm/wedge/w3.png" />
            </div>
        </div>
    </div>

    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex gap-1.5">
            <img src="/assets/images/K1/sm/wedge/w2.png" />
            <img src="/assets/images/K1/sm/wedge/w3.png" />

        </div>
        <ul class="  title !text-start">
            <li class=" !text-white">What do you observe (result):</li>
            <li class="title stroke">Which side of the triangular block goes easily into the moist
                sand?</li>
        </ul>
    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">

        <br>
        <br>
        <br>
        <br>

        <h2 class="title !text-white ">What do you learn (Conclusion): </h2>
        <h2 class="title stroke  tracking-tight">How would a triangular block go easily into the moist sand? </h2>



    </div>


    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w4.png" />
            <br>
            <h2 class="title stroke">The flat side of a triangular block cannot be easily
                pushed into the moist sand.</h2>
        </div>

    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w4.png" />
            <br>
            <h2 class="title stroke">The pointed side of a triangular block can be easily
                pushed into the moist sand.</h2>
        </div>

    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w5.png" />
            <br>
            <h2 class="title stroke tracking-tight">The triangular block is, in fact, an example of
                a <span class="!text-white">simple machine</span> called <span class="!text-white">wedge</span> .</h2>
        </div>

    </div>


    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w5.png" />
            <br>
            <h2 class="title stroke tracking-tight">A <span class="!text-white">wedge</span> is an object which is thick at
                one edge,
                thin and tapering at the other edge.</h2>
        </div>

    </div>



    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w5.png" />
            <br>
            <h2 class="title stroke tracking-tight">A <span class="!text-white">wedge</span> is a type of <span
                    class="!text-white">simple machine</span>.</h2>
        </div>
        <br>
        <p class=" note">Note: Let children share what they think a simple machine is.</p>

    </div>


    {{-- slide 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h2 class="title stroke "><span class="!text-white">simple machine</span> are basic tools that help us
            to do work easily.</h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <p class=" note">Note: Explain that there are many types of simple machines and wedge is on type of simple machine.
        </p>
    </div>


    {{-- slide 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h2 class="title stroke ">Do you know how a <span class="!text-white">wedge</span> helps us
            to do work easily?</h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <p class=" note">Note: Let children share what they know.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w4.png" />
            <br>
            <h2 class="title stroke">A wedge helps us to go through things and cut things easily.</h2>
        </div>
        <br>
        <p class=" note">Note: Guide children to understand that a wedge is a simple machine as it helps us to do our work
            easily.</p>

    </div>


    {{-- slide 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-[20rem]">
        <h2 class="title stroke ">Can you name some things which are wedges?</h2>
        <p class=" note">Note: Have children name some things in their surroundings which are wedges.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w6.png" />
            <br>
            <h2 class="title stroke">What is this? Where is the wedge? <br>
                What does it do?</h2>
        </div>


    </div>


    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <img src="/assets/images/K1/sm/wedge/w6.png" />
            <br>
            <h2 class="title stroke">The axe is a <span class="!text-white">wedge</span>. <br>
                It is thick at one edge, thin at the other edge.</h2>
        </div>
    </div>


    {{-- slide 18 --}}

    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/wedge/w7.png" />
        <br>
        <h2 class="title stroke">The axe helps the man to cut through wood and <br>
            break it easily.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/wedge/w8.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>


    {{-- slide 20  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w8.png" />
        <br>
        <h2 class="title stroke">A knife is <span class="!text-white">wedge</span>. <br>
            It is thick at one edge, thin at the other edge.</h2>
    </div>


    {{-- slide 21  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w9.png" />
        <br>
        <h2 class="title stroke">A knife helps to cut through food easily.</h2>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w10.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>

    {{-- sldie 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w10.png" />
        <br>
        <h2 class="title stroke">The blades of a scissor are <span class="!text-white">wedges</span>. They are thick at
            one
            edge, thin at the other edge.</h2>
    </div>

    {{-- sldie 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w11.png" />
        <br>
        <h2 class="title stroke">These blades help to cut through paper easily.</h2>
    </div>

    {{-- sldie 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w12.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>



    {{-- sldie 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w12.png" />
        <br>
        <h2 class="title stroke">Teeth are wedges too! They are thick at one edge,
            thin and tapering at the other edge.</h2>
    </div>



    {{-- sldie 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w12.png" />
        <br>
        <h2 class="title stroke">Teeth help to bite and cut through food easily.</h2>
    </div>

    {{-- sldie 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w13.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w13.png" />
        <br>
        <h2 class="title stroke">This is a fighter aircraft. The front part is a wedge. It is
            thick at one edge, thin and tapering at the other edge.</h2>
    </div>




    {{-- sldie 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w14.png" />
        <br>
        <h2 class="title stroke">The wedge helps the fighter aircraft to cut through air
            and fly very fast easily.</h2>
    </div>


    {{-- sldie 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-[20rem]">
        <h2 class="title stroke ">A <span class="!text-white">wedges</span> also helps to hold things together easily.
            <br>
            A <span class="!text-white">wedges</span> helps to keep things in place too.
        </h2>
        <p class=" note">Note: Guide children to understand that a wedge is a simple machine with many uses.</p>
    </div>



    {{-- sldie 32 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w15.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 33 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w15.png" />
        <br>
        <h2 class="title stroke">The nails is a <span class="!text-white">wedge</span>. <br>
            It is thick at one edge, thin and pointed at the other edge.</h2>
    </div>


    {{-- sldie 34 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w15.png" />
        <br>
        <h2 class="title stroke">This helps us to easily push the nail into the wood with a
            hammer, This nail holds the wood pieces together.</h2>
    </div>


    {{-- sldie 35 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w16.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>



    {{-- sldie 36  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w16.png" />
        <br>
        <h2 class="title stroke">A needle is a <span class="!text-white">wedge</span> too! <br>
            It is thick at one edge, thin and tapering at the other edge.</h2>
    </div>



    {{-- sldie 37 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w16.png" />
        <br>
        <h2 class="title stroke">A needle helps to join and sew the wool together.</h2>
    </div>




    {{-- sldie 38 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w17.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 39 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w17.png" />
        <br>
        <h2 class="title stroke">A thumbtack is a <span class="!text-white">wedge</span>. <br>
            It is thick at one edge, thin and tapering at the other edge.</h2>
    </div>

    {{-- sldie 40 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w17.png" />
        <br>
        <h2 class="title stroke">A thumbtack helps to hold a paper onto a board.</h2>
    </div>


    {{-- sldie 41 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w18.png" />
        <br>
        <h2 class="title stroke">What is this? Where is the wedge? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 42         --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w18.png" />
        <br>
        <h2 class="title stroke">The doorstopper is a <span class="!text-white">wedge</span>. <br>
            It is thick at one edge, thin and tapering at the other edge.</h2>
    </div>


    {{-- sldie 43        --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <img src="/assets/images/K1/sm/wedge/w18.png" />
        <br>
        <h2 class="title stroke">A door stopper helps to hold the door in place.</h2>
    </div>

    {{-- sldie 44        --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <h2 class="!text-white !text-center title">Class Activity 2</h2>
        <img src="/assets/images/K1/sm/wedge/w18.png" />

        <ul class="title stroke  !text-start">
            <li>Let’s find out:</li>
            <li>Let’s find out:
                How does a triangular block move forward easily in moist sand?</li>
        </ul>
    </div>


    {{-- sldie 45       --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex gap-1.5">
            <img src="/assets/images/K1/sm/wedge/w19.png" />
            <img src="/assets/images/K1/sm/wedge/w20.png" />

        </div>
        <ul class="  title !text-start">
            <li class=" !text-white">What do you think (Prediction):</li>
            <li class="title stroke">Is it easier to move this block forward with its pointed side or
                its flat side?</li>
        </ul>
    </div>


    {{-- sldie 46       --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <h2 class="title stroke ">Is it easier to move this block forward with its pointed side or its flat side?</h2>
        <img src="/assets/images/K1/sm/wedge/w21.png" />
        <p class=" note">Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.
        </p>
    </div>




    {{-- sldie 47       --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <ul class="title stroke !text-start  list-none tracking-tighter">
            <li class="!text-white ">Let’s do (Experiment Procedure):</li>
            <li>1.Push a triangular block forward with its pointed side through
                moist sand. How does it feel to push this block forward?</li>

        </ul>
        <div class="flex justify-center align-middle">

            <img src="/assets/images/K1/sm/wedge/w19.png" />
        </div>

    </div>


    {{-- sldie 48       --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <ul class="title stroke !text-start  list-none tracking-tighter">
            <li class="!text-white ">Let’s do (Experiment Procedure):</li>
            <li>2.Push a triangular block forward with its flat side through
                moist sand. How does it feel to push this block forward?</li>

        </ul>
        <div class="flex justify-center align-middle">

            <img src="/assets/images/K1/sm/wedge/w20.png" />
        </div>

    </div>




    {{-- sldie 49       --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex gap-1.5">
            <img src="/assets/images/K1/sm/wedge/w19.png" />
            <img src="/assets/images/K1/sm/wedge/w20.png" />

        </div>
        <ul class="  title !text-start">
            <li class=" !text-white">What do you observe (Result):</li>
            <li class="title stroke">
                Is it easier to move a triangular block with its pointed
                or flat side?</li>
        </ul>


        <p class=" note">Note: Put a star to mark the result on the graph.</p>
    </div>



    {{-- sldie 50       --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-3">
        <h2 class="title stroke"> <span class="!text-white">What do you learn (Conclusion):</span><br>
            When does the triangular block move forward<br>
            easily in moist sand?
        </h2>
    </div>



     {{-- sldie 51      --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w22.png" />
        <h2 class="title stroke ">Through this activity we learn that the triangular block moves
forward easily with its pointed side in moist sand.</h2>
       
    </div>

     {{-- sldie 52     --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w23.png" />
        <h2 class="title stroke ">The pointed side of the triangular block is a  <span class="!text-white">wedge</span>  and so
cuts through sand and separates it easily.</h2>
       
    </div>

     {{-- sldie 53     --}}
     <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
         <img src="/assets/images/K1/sm/wedge/w24.png" />
         <h2 class="title stroke ">The flat side of the block is not a wedge.
             So it is not easy to cut through sand and move forward easily.</h2>
             
            </div>
            
            
            {{-- sldie 54     --}}
    <div class="slide flex flex-col items-center justify-center gap-3 ">
            <h2 class="title stroke !text-white">Class Activity 3</h2>
            <br>
              <div class="flex gap-1.5">

                  <img src="/assets/images/K1/sm/wedge/w25.png" />
                  <img src="/assets/images/K1/sm/wedge/w26.png" />
                </div>
        
        <ul class="title stroke !text-start tracking-tighter">
            <li>Let’s find out:</li>
            <li>Which side of the triangular block can be pushed easily into water?</li>
        </ul>
        <p class=" note">Note: Ask children to make predictions and find out through experiment.
        </p>
    </div>

     {{-- sldie 55     --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w27.png" />
        <h2 class="title stroke ">The pointed side of the triangular block is a <span class="!text-white">wedge</span> and so cuts 
through water and is easily push into water.</h2>
       
    </div>


     {{-- sldie 56     --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w28.png" />
        <h2 class="title stroke ">The flat side of the block is not a wedge.
So it is not easy to cut through water and move in easily.</h2>
       
    </div>



           {{-- sldie 57     --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
            <h2 class="title stroke !text-white">Class Activity 4</h2>
            <br>
              <div class="flex gap-1.5">
                  <img src="/assets/images/K1/sm/wedge/w29.png" />
                  <img src="/assets/images/K1/sm/wedge/w30.png" />
                </div>
        
        <ul class="title stroke !text-start tracking-tighter">
            <li>Let’s find out:</li>
            <li>Which block is easier to push into play dough?</li>
        </ul>
        <p class=" note">Note: Ask children to make predictions and find out through experiment.
        </p>
    </div>


      {{-- sldie 58    --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w31.png" />
        <h2 class="title stroke ">The pointed side of the triangular block is a <span class="!text-white">wedge</span>
and so cuts into play dough easily.</h2>
       
    </div>


     {{-- sldie 59    --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w31.png" />
        <h2 class="title stroke ">The triangular block is flat and is not a <span class="!text-white">wedge.</span>
It therefore does not cut into play dough easily.</h2>
       
    </div>


            {{-- sldie 60     --}}
    <div class="slide flex flex-col items-center justify-center gap-3 ">
            <h2 class="title stroke !text-white">Class Activity 5</h2>
            <br>
              <div class="flex gap-1.5">
                  <img src="/assets/images/K1/sm/wedge/w32.png" />
                  <img src="/assets/images/K1/sm/wedge/w33.png" />
                </div>
        
        <ul class="title stroke !text-start tracking-tighter">
            <li>Let’s find out:</li>
            <li>How do we move this cardboard easily in air?</li>
        </ul>
        <p class=" note">Note: Ask children to make predictions and find out through experiment. <br>
Let children move the cardboard at different speeds to find out when the wedge is most effective.
        </p>
    </div>

     {{-- sldie 61    --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w34.png" />
        <h2 class="title stroke ">When the cardboard is moved with its side edge facing forward,
it acts as a <span class="!text-white">wedge.</span> and so cuts through air easily.</h2>
       
    </div>

     {{-- sldie 62    --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w35.png" />
        <h2 class="title stroke ">The flat side of the cardboard is not a wedge.
Therefore it does not cut through air easily.</h2>
       
    </div>


      {{-- sldie 63   --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w36.png" />
        <h2 class="title stroke ">In fact, the <span class="!text-white">wedge.</span> is able to cut through air very easily
when the object is moving fast.</h2>
       
    </div>

       {{-- sldie 64  --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/wedge/w14.png" />
        <h2 class="title stroke ">Therefore, the <span class="!text-white">wedge.</span> helps the fighter aircraft to cut
through air and fly very fast easily.</h2>
       
    </div>


     {{-- sldie 65--}}
        <div class="slide  hidden flex flex-col  justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col p-[40px] "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <h2 class=" !text-center">Name some things around you that are wedges. Draw them.
            </h2>
        </div>
    </div>




    {{-- Buttons --}}
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
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
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
                    window.location.href = "{{ route('WedgeSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
