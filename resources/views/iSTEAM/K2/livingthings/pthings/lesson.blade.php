@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide h-full flex flex-col items-center h-[60%] justify-between">
        <h2 class="title stroke">Children, do you still remember how to grow seeds in a bag?
            What seeds did you plant?</h2>
        <p class="note">Note: Have children display their seed bag and the learning journal; <br>
            encourage them to share their experiences.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K2/livingthings/pgrow/p18.png" class="w-[600px]" />
        <div class="self-start">
            <h2 class="title stroke text-start">
                What do you observe: <br>
                Did the seed grow into a new plant?
            </h2>
            <p class="note">
                Note: Have children pick and share their observations on one of the seed planted.
            </p>
        </div>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pgrow/p19.png" class="w-[600px]" />
        <div class="self-start">
            <h2 class="title stroke text-start">
                What do you observe: <br>
                What changes did it go through?
            </h2>
            <p class="note">
                Note: Have children pick and share their observations on one of the seed planted - root, stem, leaf.
            </p>
        </div>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class=" title stroke text-start ">What do you learn: <br>
                How did a seed in the bag grow into a new plant?</h2>
        </div>
        <img src="/assets/images/K2/livingthings/pthings/p1.png" class="large-img6" />
        <p class="note">Note: Guide children to understand what seed germination is (sprouting of a seedling).</p>
    </div>


    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class=" title stroke text-start">What do you learn: <br>
                What helped the seed grow?</h2>
        </div>
        <img src="/assets/images/K2/livingthings/pthings/p1.png" class="large-img6" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start">What do you learn: <br>
            What helped the seed grow?</h2>
        <img src="/assets/images/K2/livingthings/pthings/p1.png" class="large-img6" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pthings/p2.png" class="large-img6" />
        <h2 class=" title stroke text-start">Through the activity, we know that water, air and sunlight
            will trigger seeds to grow.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class=" title stroke text-start">How about the green onions?
            How tall did they grow after a week?</h2>
        <p class="note">Note: Display the green onions. Have children refer to their learning
            journal and share their experiences.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pthings/p3.png" />
        <h2 class=" title stroke text-start">What do you observe: <br>
            Did the green onion plants grow taller after a week?</h2>
        <p class="note">Note: Have children share their observations on the growing process of the green onions.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pthings/p3.png" />
        <h2 class=" title stroke text-start">What do you observe: <br>
            What changes did they go through?</h2>
        <p class="note">Note: Have children share their observations on the growing process of the green
            onions - roots, stems and leaves.</p>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start">What do you learn: <br>
            How long did the green onions take to start growing?</h2>
        <img src="/assets/images/K2/livingthings/pthings/p4.png" class="large-img6" />
        <p class="note">Note: Have children share their observations - sample shown what they looked like after 1 day.</p>
    </div>


    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start">What do you learn: <br>
            How tall did they grow from day 1?</h2>
        <img src="/assets/images/K2/livingthings/pthings/p4.png" class="large-img6" />
        <p class="note">Note: Have children share their observations - sample shown what they looked like 1 week later.
        </p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start">What do you learn: <br>
            What helped the green onions grow taller?</h2>
        <img src="/assets/images/K2/livingthings/pthings/p4.png" class="large-img6" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pthings/p4.png" class="large-img6" />
        <h2 class=" title stroke">Through the activity, we know that as long as the roots and
            white stems are around, water, air and sunlight will make the
            green onion plants continue to grow.</h2>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke">Children, do you still remember the common points
            of living thing? What are they?</h2>
        <p class="note">Note: Encourage children to recall and share the six basic characteristics of living things.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center  ">
            <div class="title stroke text-start">
                <h2>Living things are things that...:</h2>
                <ul class="!text-white">
                    <li class="flex items-center gap-5">
                        <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-5">
                        <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-5">
                        <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-5">
                        <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-5">
                        <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!max-w-[2.4vw]" />
                        <p> Grow (get bigger)</p>
                    </li>

                </ul>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an15.png') }}" class="!max-w-[14vw]" />
        </div>
    </div>



    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" justify-start text-[45px] text-white stroke">Class Activity</h2>
        <img src="/assets/images/K2/livingthings/pthings/p30.png" class="large-img6" />
        <h2 class="text-start title stroke">Let's find out: <br>
            Are plants living or non-living things?</h2>
        <p class="note">Note: Display seed bags and green onions.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-start title stroke">What do you think (Prediction):</h2>
        <img src="/assets/images/K2/livingthings/pthings/p5.png" class="!max-w-[42vw]" />
        <p class="note">Note: Have children use the learning journal to fill in their prediction.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-start title stroke">Let’s do:</h2>
        <div class="relative">
            <img src="/assets/images/K2/livingthings/pthings/p6.png" class="!max-w-[42vw]" />
            <span class="info-btn1 relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
            </span>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- clcik slides --}}
    {{-- 1 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/LivingThings/lt57.png" />
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants move by themselves when they grow
            (stems move up and roots move down).</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- 2 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/LivingThings/lt58.png" />
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants move by themselves when their flowers
            bloom.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- 3 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/LivingThings/lt59.png" />
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants will grow towards the sun;
            sunflower plants move by themselves to follow the sun as it moves across the sky.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- 4 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/LivingThings/lt60.png" />
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants sometimes moved by other things like
            wind, rain and animals.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class="text-start title stroke">Let’s do:</h2>
        </div>
        <img src="/assets/images/K2/livingthings/pthings/p7.png" class="!max-w-[42vw]" />
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class="text-start title stroke">Let’s do:</h2>
        </div>
        <div class="relative">
            <img src="/assets/images/K2/livingthings/pthings/p8.png" class="!max-w-[42vw]" />
            <span class="info-btn1 relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
            </span>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- clcik slides --}}
    {{-- 1 --}}
    <div class="slide hidden info-slide2  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/livingThings/lt61.png" class="!max-w-[42vw]" />
        <h2 class="title stroke">Plants need food to grow. <br>
            Where do they get their food from?</h2>
    </div>
    {{-- 2 --}}
    <div class="slide hidden info-slide2  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/livingThings/lt80.png" class="!max-w-[42vw]" />
        <h2 class="title stroke">Plants make their own food to grow. <br>
            Their leaves use water, nutrients from the soil, <br>
            air and sunlight to make food.</h2>
    </div>


    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class="text-start title stroke">Let’s do:</h2>
        </div>
        <div class="relative">
            <img src="/assets/images/K2/livingthings/pthings/p9.png" />
            <span class="info-btn1 relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
            </span>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- clcik slides --}}
    {{-- 1 --}}
    <div class="slide hidden info-slide3  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p13.png" />
        <h2 class="title stroke">Do you know that plants breathe air like we do? </h2>
        <p class="note">Note: Encourage children to guess how do plants breathe.</p>
    </div>
    {{-- 2 --}}
    <div class="slide hidden info-slide3  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p14.png" />
        <h2 class="title stroke">Here is an experiment that can prove plants do breathe air.</h2>
    </div>
    {{-- 3 --}}
    <div class="slide hidden info-slide3  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h3>How to do the experiment</h3>
            <ul class="list-decimal">
                <li>Fill a large clear bowl with lukewarm water.</li>
                <li>Pluck a big leaf from a plant and put it inside the bowl.</li>
                <li>Put a stone or marble on top of the leaf so the leaf is fully submerged under the water.</li>
                <li>Place the bowl in a sunny spot.</li>
                <li>Check and observe the leaf every hour for a few times.</li>
            </ul>
        </div>
        <p class="note">Note: This experiment takes a few hours to see the result and some leaves need even longer time
            to see
            the result. If you want to do this experiment in the class, try out with a few types of leaves beforehand
            and decide one that enable you to see the result faster.</p>
    </div>
    {{-- 4 --}}
    <div class="slide hidden info-slide3  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p15.png" />
        <h2 class="title stroke">What will happen if you pluck a big leaf from a plant and put
            it inside a clear bowl filled with lukewarm water?</h2>
    </div>
    {{-- 5 --}}
    <div class="slide hidden info-slide3  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p16.png" />
        <h2 class="title stroke">What will happen if you pluck a big leaf from a plant and put
            it inside a clear bowl filled with lukewarm water?</h2>
    </div>
    {{-- 6 --}}
    <div class="slide hidden info-slide3  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p17.png" />
        <h2 class="title stroke">What will happen if you hold your breath under water in a
            swimming pool and then let the breath out?</h2>
    </div>
    {{-- 7 --}}
    <div class="slide hidden info-slide3  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p18.png" />
        <h2 class="title stroke">Through the experiment, we know that plants do breathe air
            like we do!</h2>
    </div>


    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class="text-start title stroke">Let’s do:</h2>
        </div>
        <div class="relative">
            <img src="/assets/images/K2/livingthings/pthings/p10.png" class="!max-w-[42vw]" />
            <span class="info-btn1 relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
            </span>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- 1 --}}
    <div class="slide hidden info-slide4  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p19.png" />
        <h2 class="title stroke">Do you know how plants grow? </h2>
        <p class="note">Note: Encourage children to describe how a big plant grow from a small seed.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- 2 --}}
    <div class="slide hidden info-slide4  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p20.png" />
        <h2 class="title stroke">Do you think the seeds that you have planted
            go through the similar growing process?</h2>
    </div>
    {{-- 3 --}}
    <div class="slide hidden info-slide4  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p15.png" />
        <h2 class="title stroke">This is the growing process of a sample seed.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class="text-start title stroke">Let’s do:</h2>
        </div>
        <div class="relative">
            <img src="/assets/images/K2/livingthings/pthings/p11.png" class="large-img6" />
            <span class="info-btn1 relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
            </span>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- 1 --}}
    <div class="slide hidden info-slide5  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p21.png" />
        <h2 class="title stroke">How does an apple seed turn into a big tree?</h2>
        <p class="note">Note: Encourage children to describe the life cycle of an apple tree.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- 2 --}}
    <div class="slide hidden info-slide5  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/livingthings/pthings/p21.png" />
        <h2 class="title stroke">In fact, many plants produce seeds,
            which will grow into new plants.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class="text-start title stroke">Let’s do:</h2>
        </div>
        <img src="/assets/images/K2/livingthings/pthings/p12.png" class="!max-w-[42vw]" />
        <p class="note">Note: Guide children to conclude from the table and circle the answer.</p>
    </div>

    {{-- slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="text-start title stroke"> <span class="text-white">What do you learn:</span> <br>
            Are plants living or non-living things?
            How do you know that?</h2>
        <p class="note">Note: Encourage children to answer based on their conclusions.</p>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center  ">
            <div class="title stroke text-start">
                <h2>All plants...</h2>
                <ul class="!text-white">
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="!max-w-[2.4vw]" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="!max-w-[2.4vw]" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="!max-w-[2.4vw]" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="!max-w-[2.4vw]" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                            class="!max-w-[2.4vw]" />
                        <p> Grow (get bigger)</p>
                    </li>
                </ul>
                <h2>Therefore, plants are living things.</h2>
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p22.png') }}" class="w-[400px]" />
        </div>
    </div>

    {{-- slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p23.png') }}" class="large-img6" />
        <h2 class="text-start title stroke">In fact, we live in the world that is made up of both
            living and non-living things.</h2>
    </div>

    {{-- slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p24.png') }}" class="large-img6" />
        <h2 class="text-start title stroke">Animals and plants are groups of living things.</h2>
    </div>


    {{-- slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <div class="self-start title stroke space-y-20">
            <h2 class="text-start">Mission: <br>
                Draw 5 examples of living things and 5 examples of non-living things.</h2>
            <ul class="list-decimal text-start">
                <h2>Let's do:</h2>
                <li>Name 5 examples of living things and 5 examples of non-
                    living things.</li>
                <li>Draw the examples in the learning journal.</li>
            </ul>
        </div>
    </div>


    {{-- slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="text-center title stroke">What do you learn: <br>
            What are the differences between
            living and non-living things?</h2>
    </div>


    {{-- sldie 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class=" bg-cover bg-center flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p25.png') }}" class="!max-w-[42vw]" />
        </div>
    </div>


    {{-- sldie 33 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class=" bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p26.png') }}" class="!max-w-[42vw]" />
        </div>
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
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get all info/click buttons (info-btn1, info-btn2, click-btn1, click-btn2, etc.)
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null; // Track which info/click class we're viewing

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last info/click slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → info-slide1, click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            currentSlide < slides.length &&
                            isInfoSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentInfoClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // Check if slide is any info/click slide (info-slide1, info-slide2, click1, click2, etc.)
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

           // Return button
returnButton.addEventListener("click", () => {
    // Redirect to route if on slide 1
    if (currentSlide === 1) {
        window.location.href = "{{ route('your-route-name') }}";
        return;
    }

    if (isViewingInfoSlides && currentSlide > 0) {
        // Check if previous slide is also same info/click class
        let prevSlide = currentSlide - 1;

        // Find previous slide with same info/click class
        while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
            prevSlide--;
        }

        if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
            currentSlide = prevSlide;
            showSlide(currentSlide);
        } else {
            // No more info/click slides, return to parent
            currentSlide = parentSlideIndex;
            isViewingInfoSlides = false;
            currentInfoClass = null;
            parentSlideIndex = null;
            showSlide(currentSlide);
        }
    } else if (currentSlide > 0) {
        currentSlide--;

        // Skip info/click slides when going back
        while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
            currentSlide--;
        }

        showSlide(currentSlide);
    }
});;

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('pthingsSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
