@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">What are Compound Machines?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh]  ">
        <h2 class="title stroke">Children, do you still remember the six <span class="text-white"> simple
                machines </span> that you have learnt? What are they?</h2>
        <p class="note ">Note: Have children name the six simple machines and state the basic characteristics of each one.
        </p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/cm/cm43.png" />
        <h2 class="title stroke">What is this? <br>
            Is it made up of any simple machine?</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/cm/cm43.png" />
        <h2 class="title stroke">A pair of scissors is made up of two levers and two wedges.
            Where are they? What do they do?</h2>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/cm/gl1.png" />
        <h2 class="title stroke">These are two levers. The fulcrum of both the levers are
            fixed at the same place, so they share the same fulcrum.</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/cm/gl1.png" />
        <h2 class="title stroke">These levers allows us to move the two blades
            of the scissors easily.</h2>
    </div>


    {{-- sldie 7 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl2.png" />
        <h2 class="title stroke">The two blades are the wedges.
            Each blade has a thin sharp edge and a thick dull edge.</h2>
    </div>


    {{-- sldie 8 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl2.png" />
        <h2 class="title stroke">The two wedges allow us to separate something easily.</h2>
    </div>



    {{-- sldie 9 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm43.png" />
        <h2 class="title stroke">In fact, a pair of scissors is a compound machine.</h2>
    </div>



    {{-- sldie 10 --}}
    <div class=" slide hidden flex flex-col items-center justify-between h-[50vh] ">
        <h2 class="title stroke">Do you know what a <span class="text-white">compound machine</span> is?
            What is the difference between a simple machine and a <span class="text-white">compound machine</span> ?
        </h2>
        <p class="note">Note: Have children boldly say what they think a compound machine is.</p>
    </div>


    {{-- sldie 11 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl3.png" />
        <h2 class="title stroke"><span class="text-white">compound machine</span> are tools made up of two or more
            <span class="text-white">simple machine</span>.
        </h2>
    </div>


    {{-- sldie 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl3.png" />
        <h2 class="title stroke">As the <span class="text-white">simple machine</span> are working together,
            a <span class="text-white">compound machine</span> has more working parts
            that help us to do work more easily and quickly.</h2>
    </div>


    {{-- sldie 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm43.png" />
        <h2 class="title stroke">Since a pair of scissors is a compound machine, how does it
            help us to do work more easily and quickly.</h2>
    </div>



    {{-- sldie 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/15.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As a compound machine with two leavers and two wedges, a pair
            of scissors helps us to cut things more easily and quickly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-between h-[30vh] ">
        <h2 class="title stroke">Can you name some other <span class="text-white">compound machine</span>
            around us?</h2>
        <p class="note">Note: Have children name some compound machine in their surroundings.</p>
    </div>


    {{-- sldie 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm45.png" />
        <h2 class="title stroke">What is this? What simple machines does it have?
            How does it help us to do work more easily and quickly?</h2>
    </div>

    {{-- sldie 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm45.png" />
        <h2 class="title stroke">A stapler is a <span class="text-white">compound machine</span> made up of
            a lever and a wedge.</h2>
    </div>


    {{-- sldie 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl4.png" />
        <h2 class="title stroke">The handle is a <span class="text-white">lever</span> with its fulcrum fixed
            at one end of the handle.</h2>
    </div>


    {{-- sldie 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl4.png" />
        <h2 class="title stroke">This lever allows us to push down the handle
            of the stapler easily.</h2>
    </div>

    {{-- sldie 20 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl5.png" />
        <h2 class="title stroke">The staples in a stapler are wedges.
            The wedges allow us to pierce through papers easily.</h2>
    </div>


    {{-- sldie 21 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/57.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As a compound machine, a stapler helps us to hold
            papers together more easily and quickly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl6.png" />
        <h2 class="title stroke">What is this? What <span class="text-white">simple machines</span> does it have?
            How does it help us to do work more easily and quickly?</h2>
    </div>


    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm48.png" />
        <h2 class="title stroke">An axe is a compound machine made up of a
            lever and a wedge.</h2>
    </div>

    {{-- sldie 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl7.png" />
        <h2 class="title stroke">The handle is a lever and the hand that holds the rod
            at one end is the fulcrum of this lever.</h2>
    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl7.png" />
        <h2 class="title stroke">This lever allows us to move or swing the handle
            of an axe around easily.</h2>
    </div>


    {{-- sldie 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl8.png" />
        <h2 class="title stroke">The blade is a wedge.
            The wedge allows us to split the wood easily.</h2>
    </div>


    {{-- sldie 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/13.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As a compound machine, an axe helps us to cut
            wood more easily and quickly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl9.png" />
        <h2 class="title stroke">What is this? What <span class="text-white">simple machines</span> does it have?
            How does it help us to do work more easily and quickly?</h2>
    </div>


    {{-- sldie 29 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm50.png" />
        <h2 class="title stroke">A pizza cutter is a compound machine made up of
            a lever, a wheel and axle and a wedge.</h2>
    </div>


    {{-- sldie 30 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl10.png" />
        <h2 class="title stroke">The handle is a lever with its fulcrum fixed at
            one end of the handle.</h2>
    </div>


    {{-- sldie 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl10.png" />
        <h2 class="title stroke">This lever allows us to move the handle
            of the pizza cutter easily.</h2>
    </div>


    {{-- sldie 32 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl11.png" />
        <h2 class="title stroke">The cutter is a wheel and axle. The wheel and axle
            allows us to turn the cutter easily.</h2>
    </div>

    {{-- sldie 33 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl12.png" />
        <h2 class="title stroke">The cutter blade is a wedge.
            This wedge allows us to cut pizza easily.</h2>
    </div>

    {{-- sldie 34 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/76.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As a compound machine, a pizza cutter helps us to cut
            pizza into pieces more easily and quickly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 35 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm52.png" />
        <h2 class="title stroke">What is this? What <span class="text-white">simple machines</span> does it have?
            How does it help us to do work more easily and quickly?</h2>
    </div>


    {{-- sldie 36 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm52.png" />
        <h2 class="title stroke">A wheelbarrow is a <span class="text-white">compound machines</span> made up of some
            screws, two levers, a wheel and axle and an inclined plane.</h2>
    </div>


    {{-- sldie 37 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl13.png" />
        <h2 class="title stroke">The <span class="text-white">screws</span> hold the different parts of a wheelbarrow
            together easily.</h2>
    </div>


    {{-- sldie 38 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl14.png" />
        <h2 class="title stroke">These are the two levers of a wheelbarrow.
            They are joined together with the same fulcrum.</h2>
    </div>



    {{-- sldie 39 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl14.png" />
        <h2 class="title stroke">These levers allow us to lift up the wheelbarrow
            with the two handles easily.</h2>
    </div>

    {{-- sldie 40 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl15.png" />
        <h2 class="title stroke">The fulcrum of the levers is the wheel and axle
            of the wheelbarrow.</h2>
    </div>


    {{-- sldie 41 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl15.png" />
        <h2 class="title stroke">The <span class="text-white">wheel and axle</span> allows us to move the wheelbarrow
            around easily.</h2>
    </div>


    {{-- sldie 42 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl16.png" />
        <h2 class="title stroke">The slanted sides of the cart is the <span class="text-white">inclined plane</span>
            of the wheelbarrow.</h2>
    </div>


    {{-- sldie 43 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl16.png" />
        <h2 class="title stroke">The <span class="text-white">inclined plane</span> allows us to slide things out from the
            wheelbarrow easily when we tipped it ahead or on its sides.</h2>
    </div>


    {{-- sldie 44 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/61.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As a compound machine, a wheelbarrows helps us to carry heavy
            things around and empty things from it more easily and quickly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 45 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm54.png" />
        <h2 class="title stroke">What is this? What <span class="text-white">simple machines</span> does it have?
            How does it help us to do work more easily and quickly?</h2>
    </div>


    {{-- sldie 46 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm54.png" />
        <h2 class="title stroke">A bicycle is a compound machine made up of many screws,
            levers, wheels and axles and pulleys.</h2>
    </div>

    {{-- sldie 47 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm55.png" />
        <h2 class="title stroke">The screws hold the different parts
            of a bicycle together easily.</h2>
    </div>


    {{-- sldie 48 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl17.png" />
        <h2 class="title stroke">Three obvious levers of a bicycle are
            the handlebar, the brake and the cranks and pedals.</h2>
    </div>



    {{-- sldie 49 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl17.png" />
        <h2 class="title stroke">Three obvious levers of a bicycle are
            the handlebar, the brake and the cranks and pedals.</h2>
    </div>


    {{-- sldie 50 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm56.png" />
        <h2 class="title stroke">This lever allows us to move the handles of a bicycle.
            This helps to control the direction of a bicycle easily.</h2>
    </div>


    {{-- sldie 51 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm57.png" />
        <h2 class="title stroke">This lever allows us to press on the brake that connect to the brake
            cable of a bicycle. This helps to slow down or stop a bicycle easily.</h2>
    </div>

    {{-- sldie 52 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm57.png" />
        <h2 class="title stroke">This lever allows us to press on the brake that connect to the brake
            cable of a bicycle. This helps to slow down or stop a bicycle easily.</h2>
    </div>


    {{-- sldie 53 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm58.png" />
        <h2 class="title stroke">This lever allows us to pedal a bicycle.
            This helps to move the chainwheel of a bicycle easily.</h2>
    </div>

    {{-- sldie 54 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl18.png" />
        <h2 class="title stroke">A bicycle is a <span class="text-white">compound machine</span> made up of many <span
                class="text-white">screws</span>,
            <span class="text-white">levers</span>, <span class="text-white">wheels and axles</span> and <span
                class="text-white">pulleys</span>.
        </h2>
    </div>


    {{-- sldie 55 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl19.png" />
        <h2 class="title stroke">These <span class="text-white">wheels and axles</span> allow us to move around easily
            when we ride a bicycle.</h2>
    </div>


    {{-- sldie 56 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm59.png" />
        <h2 class="title stroke">These <span class="text-white">wheels and axles</span> allow us to move around easily
            when we ride a bicycle.</h2>
    </div>



    {{-- sldie 57 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm60.png" />
        <h2 class="title stroke">The chain is wrapped around the chainwheel and the axle of
            the back wheel. They are the pulley of this bicycle.</h2>
    </div>


    {{-- sldie 58 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm60.png" />
        <h2 class="title stroke">This pulley allows us to move the black wheel easily
            when we pedal a bicycle.</h2>
    </div>


    {{-- sldie 59 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/77.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As a compound machine, a bicycle helps us to move
            around safely, easily and quickly.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 60 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl20.png" />
        <h2 class="title stroke">What is this? What <span class="text-white">simple machines</span> does it have?
            How does it help us to do work more easily and quickly?</h2>
    </div>


    {{-- sldie 61 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm62.png" />
        <h2 class="title stroke">A mobile crane is a compound machine made up of many
            screws, a pulley, a level and some wheels and axles.</h2>
    </div>

    {{-- sldie 62 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl21.png" />
        <h2 class="title stroke">The screws hold the different parts
            of a mobile crane together easily.</h2>
    </div>

    {{-- sldie 63 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl22.png" />
        <h2 class="title stroke">The pulley of this mobile crane allows us
            to lift heavy things up easily.</h2>
    </div>

    {{-- sldie 64 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl23.png" />
        <h2 class="title stroke">This is the lever of this mobile crane
            and its fulcrum is fixed in the truck.</h2>
    </div>


    {{-- sldie 65 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl23.png" />
        <h2 class="title stroke">This lever allows us to move the pulley that tied to
            one end of it up, down and left, right easily.</h2>
    </div>


    {{-- sldie 66 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl24.png" />
        <h2 class="title stroke">The wheels and axles of the mobile crane allow us
            to move the crane around easily.</h2>
    </div>


    {{-- sldie 67 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/78.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The wheels and axles of the mobile crane allow us
            to move the crane around easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 68 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm66.png" />
        <h2 class="title stroke">What is this? What simple machines does it have?
            How does it help us to do work more easily and quickly?</h2>
    </div>


    {{-- sldie 69 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm66.png" />
        <h2 class="title stroke">A car is a compound machine made up of many simple machines.
            There are so many that we cannot pick each of them out easily.</h2>
    </div>


    {{-- sldie 70 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm66.png" />
        <h2 class="title stroke">However, a car has all six simple machines
            which are used in different ways.</h2>
    </div>


    {{-- sldie 71 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl25.png" />
        <h2 class="title stroke">An obvious inclined plane of a car is the front glass window.
            This inclined plane allows rainwater to flow down easily.</h2>
    </div>


    {{-- sldie 72 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl25.png" />
        <h2 class="title stroke">An obvious inclined plane of a car is the front glass window.
            This inclined plane allows rainwater to flow down easily.</h2>
    </div>


    {{-- sldie 73 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl26.png" />
        <h2 class="title stroke">The shape of the front part of a car is a <span class="text-white">wedge</span>. This
            wedge allows the car cut through air and move forward easily.</h2>
    </div>

    {{-- sldie 74 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl27.png" />
        <h2 class="title stroke">Two obvious wheels and axles of a car are
            the wheels and the steering wheel.</h2>
    </div>

    {{-- sldie 75 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl28.png" />
        <h2 class="title stroke">These wheels and axles allow us to move around
            easily when we sit on a car.</h2>
    </div>


    {{-- sldie 76 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl29.png" />
        <h2 class="title stroke">This <span class="text-white">wheels and axles</span> allow us to change direction
            easily when we drive the car.</h2>
    </div>


    {{-- sldie 77 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm68.png" class="large-img3" />
        <h2 class="title stroke">A seatbelt in a car has a pulley. This pulley allow us to easily
            pull out the belt and wear it to keep us safe on the road.</h2>
    </div>


    {{-- sldie 78 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <div class="flex items-center">
            <img src="/assets/images/K1/cm/cm69.png" class="large-img" />
            <img src="/assets/images/K1/cm/cm66.png" class="large-img" />
        </div>
        <h2 class="title stroke">The screws hold the different parts
            of a car together easily.</h2>
    </div>


    {{-- sldie 79 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl30.png" />
        <h2 class="title stroke">Many car controls are levers.
            One example is the signal control.</h2>
    </div>


    {{-- sldie 80 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl30.png" />
        <h2 class="title stroke">This lever allows us to turn on the signal lights easily and
            warn other road users before making a turn.</h2>
    </div>


    {{-- sldie 81 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm66.png" />
        <h2 class="title stroke">As a compound machine, a car helps us to travel around
            safely, easily and quickly.</h2>
    </div>


    {{-- sldie 82 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/gl31.png" />
        <h2 class="title stroke">In short, many things around us are <span class="text-white">compound machines</span>.
        </h2>
    </div>


    {{-- sldie 82 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <div class="flex justify-center">
            <img src="/assets/images/K1/cm/cm43.png" class="large-img" />
            <img src="/assets/images/K1/cm/cm45.png" class="large-img" />
        </div>
        <h2 class="title stroke">Some compound machines only have a few simple machines.</h2>
    </div>


    {{-- sldie 83 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <div class="flex justify-center">
            <img src="/assets/images/K1/cm/cm62.png" class="large-img" />
            <img src="/assets/images/K1/cm/cm66.png" class="large-img" />
        </div>
        <h2 class="title stroke">Other compound machines may have hundreds or even
            thousands of simple machines.</h2>
    </div>


    {{-- Slide 84 --}}
    <div class="slide  hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class=" title stroke !text-white">Small Group Activity</h2>
        <h2 class="text-center title stroke">Now, let’s look at some common compound machines
            around us!!</h2>
        <p class="note">Note: Organise children into a few small groups. Give each group 2-3 common compound machines
            to explore. If time permits, swap items within groups to repeat the activity.</p>
    </div>

    
    {{-- Slide 85 --}}
    <div class="slide  hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class=" title stroke !text-white">Small Group Activity</h2>
        <h2 class="text-center title stroke">Name each compound machine and say its uses.
            Then, find out what simple machines it has.</h2>
        <p class="note">Note: Have children discuss in group and present their findings to the teacher.</p>
    </div>


    {{-- slide 86 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[45vh] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">What are the three compound machines you can find in your home? Draw them and write
                down the simple machines they have.</p>
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
            const returnRouteFromFirstSlide = "{{ route('MachinesSelection') }}";
            const doneButtonRoute = "{{ route('MachinesSelection') }}";

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
