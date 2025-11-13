@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Are Plants Living Things?</h2>

    {{-- Slide 1 --}}
    <div class="slide  flex flex-col items-center h-[40vh] justify-between">
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
                <span class="!text-white">What do you observe:</span> <br>
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
                <span class="!text-white">What do you observe:</span> <br>
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
            <h2 class=" title stroke text-start "><span class="!text-white">What do you learn:</span> <br>
                How did a seed in the bag grow into a new plant?</h2>
        </div>
        <img src="/assets/images/K2/livingthings/pthings/p1.png" class="large-img6" />
        <p class="note">Note: Guide children to understand what seed germination is (sprouting of a seedling).</p>
    </div>


    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class=" title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
                What helped the seed grow?</h2>
        </div>
        <img src="/assets/images/K2/livingthings/pthings/p1.png" class="large-img6" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
            What helped the seed grow?</h2>
        <img src="/assets/images/K2/livingthings/pthings/p1.png" class="large-img6" />
        <p class="note">Note: Guide children to understand that water, air and sunlight help plants grow.</p>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pthings/p2.png" class="large-img6" />
        <h2 class=" title stroke">Through the activity, we know that water, air and sunlight
            will trigger seeds to grow.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke">How about the green onions?
            How tall did they grow after a week?</h2>
        <p class="note">Note: Display the green onions. Have children refer to their learning
            journal and share their experiences.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pthings/p3.png" />
        <h2 class=" title stroke text-start"><span class="!text-white">What do you observe:</span> <br>
            Did the green onion plants grow taller after a week?</h2>
        <p class="note">Note: Have children share their observations on the growing process of the green onions.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K2/livingthings/pthings/p3.png" />
        <h2 class=" title stroke text-start"><span class="!text-white">What do you observe:</span> <br>
            What changes did they go through?</h2>
        <p class="note">Note: Have children share their observations on the growing process of the green
            onions - roots, stems and leaves.</p>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
            How long did the green onions take to start growing?</h2>
        <img src="/assets/images/K2/livingthings/pthings/p4.png" class="large-img6" />
        <p class="note">Note: Have children share their observations - sample shown what they looked like after 1 day.</p>
    </div>


    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
            How tall did they grow from day 1?</h2>
        <img src="/assets/images/K2/livingthings/pthings/p4.png" class="large-img6" />
        <p class="note">Note: Have children share their observations - sample shown what they looked like 1 week later.
        </p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke text-start"><span class="!text-white">What do you learn:</span> <br>
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
            of <span class="!text-white">living thing</span>? What are they?</h2>
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
        <h2 class=" justify-start text-[45px] !text-white stroke">Class Activity</h2>
        <img src="/assets/images/K2/livingthings/pthings/p30.png" class="large-img6" />
        <h2 class="text-start title stroke"><span class="!text-white">Let's find out:</span> <br>
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
            <button class="info-btn1 relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-15vw] !left-[3.7vw] !w-[2.6vw]" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- clcik slides --}}
    {{-- 1 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/177.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants move by themselves when they grow
            (stems move up and roots move down).</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- 2 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <video id="video2" class=" pointer-events-none video1">
            <source src="{{ asset('assets/images/K2/videos/178.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants move by themselves when their flowers
            bloom.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- 3 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/179.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants will grow towards the sun;
            sunflower plants move by themselves to follow the sun as it moves across the sky.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- 4 --}}
    <div class="slide hidden info-slide1  flex flex-col items-center justify-start  ">
        <video id="video4" class=" pointer-events-none video1">
            <source src="{{ asset('assets/images/K2/videos/180.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note text-center">Note: Guide children to understand that plants sometimes moved by other things like
            wind, rain and animals.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
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
            <button class="info-btn2 absolute right-[14.7vw] top-[7vw]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.6vw]" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- clcik slides --}}
    {{-- 1 --}}
    <div class="slide hidden info-slide2  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/livingThings/lt61.png" class="!max-w-[32vw]" />
        <h2 class="title stroke">Plants need food to grow. <br>
            Where do they get their food from?</h2>
    </div>
    {{-- 2 --}}
    <div class="slide hidden info-slide2  flex flex-col items-center justify-start  ">
        <img src="/assets/images/N2/livingThings/lt80.png" class="!max-w-[32vw]" />
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
            <img src="/assets/images/K2/livingthings/pthings/p9.png" class="!max-w-[40vw]" />
            <button class="info-btn3 absolute top-[9vw] right-[14vw]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.6vw]" />
            </button>
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
            <button class="info-btn4 absolute top-[12vw] right-[14.5vw]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.6vw]" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- 1 --}}
    <div class="slide hidden info-slide4  flex flex-col items-center justify-start  ">
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/181.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Do you know how plants grow? </h2>
        <p class="note">Note: Encourage children to describe how a big plant grow from a small seed.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
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
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/169.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This is the growing process of a sample seed.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="self-start">
            <h2 class="text-start title stroke">Let’s do:</h2>
        </div>
        <div class="relative">
            <img src="/assets/images/K2/livingthings/pthings/p11.png" class="!max-w-[40vw]" />
            <button class="info-btn5 absolute top-[13.5vw] right-[14vw] ">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.6vw]" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- 1 --}}
    <div class="slide hidden info-slide5  flex flex-col items-center justify-start  ">
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/182.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How does an apple seed turn into a big tree?</h2>
        <p class="note">Note: Encourage children to describe the life cycle of an apple tree.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- 2 --}}
    <div class="slide hidden info-slide5  flex flex-col items-center justify-start  ">
        <video id="video8" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/182.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">In fact, many plants produce seeds,
            which will grow into new plants.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
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
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-start title stroke"> <span class="!text-white"><span class="!text-white">What do you
                    learn:</span></span> <br>
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
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p22.png') }}" class="w-img" />
        </div>
    </div>

    {{-- slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p23.png') }}" class="w-img3" />
        <h2 class="text-start title stroke">In fact, we live in the world that is made up of both
            living and non-living things.</h2>
    </div>

    {{-- slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/livingthings/pthings/p24.png') }}" class="w-img3" />
        <h2 class="text-start title stroke">Animals and plants are groups of living things.</h2>
    </div>


    {{-- slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <div class="self-start title stroke space-y-20">
            <h2 class="text-start">Mission: <br>
                Draw 5 examples of living things and 5 examples of non-living things.</h2>
            <div class="text-start">
                <h2 class="title stroke text-start ">Let's do:</h2>
                <ul class="list-decimal text-start pl-9">
                    <li>Name 5 examples of living things and 5 examples of non-
                        living things.</li>
                    <li>Draw the examples in the learning journal.</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center title stroke"><span class="!text-white">What do you learn:</span> <br>
            What are the differences between <br>
            living and non-living things?</h2>
    </div>


    {{-- sldie 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class=" bg-cover bg-center flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/pthings/p25.png') }}" class="!max-w-[42vw]" />
        </div>
    </div>


    {{-- sldie 33 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
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

            // Get all clickable buttons (info-btn, click-btn)
            const clickButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlideNumber = 0;
            let inSpecialMode = false;
            let slideToReturnTo = null;
            let specialSlideType = null;

            const whereToGoWhenReturn = "{{ route('pthingsSelection') }}";
            const whereToGoWhenDone = "{{ route('pthingsSelection') }}";

            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                for (let i = 0; i < videos.length; i++) {
                    videos[i].pause();
                }
            }

            function isSpecialSlide(slide) {
                const classes = slide.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    // Check for click pattern (click1, click2, etc.)
                    if (classes[i].startsWith('click') && classes[i].match(/^click\d+$/)) {
                        return true;
                    }
                    // Check for info-slide pattern (info-slide1, info-slide2, etc.)
                    if (classes[i].startsWith('info-slide') && classes[i].match(/^info-slide\d+$/)) {
                        return true;
                    }
                }
                return false;
            }

            function getSpecialTypeFromButton(button) {
                const classes = button.className.split(' ');
                for (let i = 0; i < classes.length; i++) {
                    // Handle click-btn pattern (click-btn1 → click1)
                    if (classes[i].startsWith('click-btn')) {
                        const number = classes[i].replace('click-btn', '');
                        return 'click' + number;
                    }
                    // Handle info-btn pattern (info-btn1 → info-slide1)
                    if (classes[i].startsWith('info-btn')) {
                        const number = classes[i].replace('info-btn', '');
                        return 'info-slide' + number;
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

            // Handle all click buttons (info-btn and click-btn)
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

            // Next button handlers
            for (let i = 0; i < nextButtons.length; i++) {
                nextButtons[i].addEventListener("click", goToNextSlide);
            }

            // Return button handler
            returnButton.addEventListener("click", goToPreviousSlide);

            // Done button handler
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
