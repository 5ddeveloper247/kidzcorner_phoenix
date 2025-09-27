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
            <h2 class="stroke title"><span class="text-white">Simple machines</span> are tools that help us to do<br />work
                easily. What <span class="text-white">simple machine </span>is this?</h2>
            <img src="/assets/images/N2/a57.png" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            move people and<br />heavy things around easily when we pull the wagon.</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images/N2/a14.png" class="w-[436px]" />
            <img src="/assets/images/N2/a15.png" class="w-[436px]" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a25.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            easily bring along things<br />to buy when we push the shopping cart.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a27.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            have fun moving around<br />easily when we ride a scooter.</h2>
    </div>



    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a29.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            easily view the scenery<br />when we take a ride on a giant wheel.</h2>
    </div>


    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a31.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span>lets us
            have fun seeing the blades
            as the wind blows on a pinwheel.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <h2 class="title stroke">Mission: <br>
            Let’s follow the instructions to build a spinning top and then play with it.</h2>

        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>

    {{-- sldie 8 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/a49.png" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts,</p>
    </div>


    {{-- sldie 9 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a spinning top.</li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <img src="/assets/images/N2/a44.png" class="w-[436px]" />
            <img src="/assets/images/N2/a51.png" class="w-[436px]" />
        </div>
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Play with the spinning top and answer some questions.
                    <ul class="list-disc">
                        <li>How do you play with the spinning top?</li>
                        <li>Where is the wheel and axle of it?</li>
                        <li>How long does it spin? <br> Record the longest time it spins.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins <br> (each group 2
            chances)</p>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. Build a launcher for the spinning top.</li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <img src="/assets/images/N2/a44.png" class="w-[436px]" />
            <img src="/assets/images/N2/a51.png" class="w-[436px]" />
        </div>
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a>for the guide.</p>
    </div>


    {{-- slide  12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 1 of 3 </h2>
        <img src="{{ asset('assets/images/N2/a34.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 2 of 3</h2>
        <img src="{{ asset('assets/images/N2/a35.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 3 of 3</h2>
        <img src="{{ asset('assets/images/N2/a36.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="stroke title">This is the <span class="text-white">wheel </span>(the two gears) and <span
                class="text-white">axle<br /></span>of the spinning top.</h2>
        <img src="/assets/images/N2/a58.png" />
        <p class="note">Note: Guide each group of children to point out the wheel and axle of their spinning tops.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a59.png" />
        <h2 class="stroke title">When you make the <span class="text-white">axle</span> of the spinning top spin,<br />its
            <span class="text-white">wheel </span>spins together.
        </h2>
    </div>


    {{-- slide 17  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="stroke title">Based on your record, which way do you find it
            easier to make the spinning top spin longer:using your fingers or using a launcher?.</h2>

        <p class="note">Note: Have each group of children share their findings based on the record in their learning
            journal.The results may vary due to different factors (e.g. how strong is the flick of individual's fingers, how
            smooth is individual process of using a launcher).</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <h2 class="title stroke !text-white">Hands-on Time 2</h2>
        <img src="/assets/images/N2/a52.png" class="w-[550xp]" />
        <div class="text-start">

            <h2 class="title stroke">Mission: <br>
                Let’s play and compare the spinning time of these four designs of spinning tops.</h2>
        </div>

    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Use a launcher to play with the spinning top A. How long does it spin? Record the longest time it
                    spins.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/a60.png" class="W-[600px]" />
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Use a launcher to play with the spinning top B. How long does it spin? Record the longest time it
                    spins.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/a60.png" class="2-[600px]"/>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Use a launcher to play with the spinning top C. How long does it spin? Record the longest time it
                    spins. </li>
            </ul>
        </div>
        <img src="/assets/images/N2/a60.png" class="w-[600px]" />
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
    </div>


    {{-- slide 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="stroke title">Based on your record, which design of spinning top do you find spins the longest using a
            launcher: A, B, C or D?</h2>

        <p class="note">Note: Guide children to compare the results and complete their learning journals.
            Then have each group of children share their findings based on the record in their learning journal.
            The results may vary due to different factors (e.g. how smooth is individual process of
            using a launcher. how many times the individual turn the handle before lifting up the launcher).</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="stroke title">Learning Journal</h2>
        <div class="relative">
            <img src="/assets/images/N2/a54.png" class="w-[336px]" alt="">
            <img src="/assets/images/N2/a55.png" class="w-[336px]" alt="">
            <img src="/assets/images/N2/dark4.png" class="w-[100%] h-[508px]" alt="">
        </div>

    </div>

    {{-- slide 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a17.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span>lets
            us
            have fun seeing the blades
            as the wind blows on a pinwheel.</h2>
    </div>

    {{-- ===== --}}
    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a17.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span>lets
            us
            have fun seeing the blades
            as the wind blows on a pinwheel.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a11.png" />
        <h2 class="stroke title">Have you ever played with a spinning top?<br />A spinning top also has <span
                class="text-white">wheel</span> and <span class="text-white">axle</span>.<br />Do you know where is it?
        </h2>
    </div>


    {{-- Slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a8.png" />
        <h2 class="stroke title">When you pull the wagon, its wheel and axle turn together to let you move things around
            easily.</h2>
    </div>


    {{-- Slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/a16.png" />
        <h2 class="stroke title">A <span class="text-white">wheel</span> and <span class="text-white">axle</span> is a
            type
            of <span class="text-white">simple machine</span>.<br /><span class="text-white">Simple machines</span> are
            tools that help us to do work easily.</h2>
    </div>


    {{-- Slide 11 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class="stroke title">Many things around us have <span class="text-white">wheels</span> and <span
                class="text-white">axles</span>.<br />Can you name some examples?</h2>
        <p class="note text-ellipsis">Note: Guide children to recall and name some things with wheels and axles in their
            surroundings <br> [wheels and axles can be found on things that turn in a circle].</p>
    </div>


    {{-- Slide 12 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a25.png" />
        <h2 class="stroke title">What is this? Where are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span>?</h2>
        <p class="note">Note: Guide children to name and point out each pair of its wheel and axles.</p>
    </div>


    {{-- Slide 13 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a25.png" />
        <h2 class="stroke title">These are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span> of this shopping cart.</h2>
        <p class="note">Note: Guide children to count how many pairs of wheel and axle are there on the shopping cart.
        </p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a26.png" />
        <h2 class="stroke title">When you push a shopping cart, its turning wheels and axle lets you easily bring along
            things you want to buy.</h2>
    </div>


    {{-- Slide 15 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a27.png" />
        <h2 class="stroke title">What is this? Where are the<span class="text-white"> wheels</span> and <span
                class="text-white">axles</span>?</h2>
        <p class="note">Note: Guide children to name and point out each pair of its wheel and axle.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a27.png" />
        <h2 class="stroke title">These are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span> of this scooter.</h2>
        <p class="note">Note: Guide children to count how many pairs of wheel and axle are there on this scooter.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a28.png" />
        <h2 class="stroke title">When you ride a scooter, its turning <span class="text-white">wheel</span> and <span
                class="text-white">axle<br /></span>lets you have fun moving around easily.</h2>
    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a29.png" />
        <h2 class="stroke title">What is this? Where are the<span class="text-white"> wheels</span> and <span
                class="text-white">axles</span>?</h2>
        <p class="note">Note: Guide children to name and point out each pair of its wheel and axle.</p>
    </div>



    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a29.png" />
        <h2 class="stroke title">These are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span> of the giant wheel.</h2>
        <p class="note">Note: Guide children to count how many pairs of wheel and axle are there on this giant wheel.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a30.png" />
        <h2 class="stroke title">When you take a ride on a giant wheel, its turning<br /><span class="text-white">wheel
            </span>and <span class="text-white">axle</span> lets you easily view the scenery.</h2>
    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/N2/a31.png" />
        <h2 class="stroke title">Have you ever played with a pinwheel? A pinwheel also has wheel and axle.Do you know where
            is it?</h2>
    </div>


    {{-- slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <h2 class="title stroke">Let’s do: <br>
            Let’s follow the instructions to build a pinwheel and then play with it.</h2>

        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/a32.png" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a pinwheel.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/a33.png" class="w-[536px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a> for the guide.</p>
    </div>


    {{-- slide  25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 1 of 5 </h2>
        <img src="{{ asset('assets/images/N2/a34.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 2 of 5</h2>
        <img src="{{ asset('assets/images/N2/a35.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 3 of 5</h2>
        <img src="{{ asset('assets/images/N2/a36.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 4 of 5</h2>
        <img src="{{ asset('assets/images/N2/a37.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 29 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 5 of 5</h2>
        <img src="{{ asset('assets/images/N2/a38.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 30 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Play with the pinwheel and answer some questions.
                    <ul class="list-disc">
                        <li>How do you play with the pinwheel?</li>
                        <li>How many blades does it have?</li>
                        <li>Where is the wheel and axle of it?</li>
                        <li>Why do its blades spin?</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Let children freely play with their pinwheels (may blow or use hand to push the pinwheel to
            move)</p>
    </div>


    {{-- slide 31 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>P4. Use a fan to make the pinwheel spin and answer some questions.
                    <ul class="list-disc">
                        <li>Which way is easier to make the blades spin: <br>
                            as the wind blows from the front or the side of the pinwheel?</li>
                        <li>How do you make the blades spin faster or slower?</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Now, let children use a fan to make their pinwheels spin.</p>
    </div>


    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/a41.png') }}" class="w-[436px]" />
            <img src="{{ asset('assets/images/N2/a43.png') }}" class="w-[436px]" />
        </div>
        <h2 class="title stroke">This is the wheel (hast two blades) and axle of the pinwheel.</h2>
        <p class="note">Note: Guide each group of children to point out the wheels and axle of their pinwheels.</p>
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/a43.png') }}" class="w-[436px]" />

        <h2 class="title stroke">The wheel and axle of the pinwheel turn as the wind blows.</h2>
        <p class="note">Note: Explain to children that the wind forces the wheel (blades) to turn and so the axle of the
            pinwheel turns together.</p>
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/a39.png') }}" class="w-[436px]" />
        <h2 class="stroke title">You can place the pinwheel near the fan<br />to make its <span
                class="text-white">wheel</span> and <span class="text-white">axle</span> turn fast.</h2>
    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/a40.png') }}" class="w-[436px]" />
        <h2 class="stroke title">You can place the pinwheel far the fan<br />to make its <span
                class="text-white">wheel</span> and <span class="text-white">axle</span> turn slow.</h2>
    </div>


    {{-- slide 35 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/a41.png') }}" class="w-[436px]" />
        <h2 class="stroke title">As the wind blows on a pinwheel, its turning <span
                class="text-white">wheel<br /></span>and <span class="text-white">axle</span> lets you see the blades
            spinning.</h2>
    </div>



    {{-- slide 36 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/a42.png') }}" class="w-[436px]" />
        <h2 class="stroke title">Do you enjoy seeing the blades of this pinwheel spinning? Why?</h2>
        <p class="note">Note: Encourage children to share their views.</p>
    </div>







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
                    window.location.href = "{{ route('spinningTopSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
