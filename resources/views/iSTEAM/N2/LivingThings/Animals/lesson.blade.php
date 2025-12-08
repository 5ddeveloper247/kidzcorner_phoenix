@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Animals are Living Things</h2>


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an1.png') }}" class="img-md">
        <h2 class="stroke title">Anna asks, “Mummy, why can’t my doll walk and eat like me?”</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">

        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="!w-[35vw]" />
        <h2 class="stroke title">Mummy replies, “”Because you are a <span class="!text-white">living thing<br /></span>but
            the doll is <span class="!text-white">non-living thing</span>.””</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">What is a<span class="!text-white"> living thing</span>?<br />What is a
            <span class="!text-white">non- living thing</span>?<br /><br />Let’s find out!
        </h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="!w-[30vw]" />
        <h2 class="stroke title text-start">Let’s find out:<br />How are you (<span class="!text-white">living
                things</span>)
            and a doll
            <br />(<span class="!text-white">non-living thing</span>) different?
        </h2>
        <p class="note">Note: Display a doll. Guide children to make comparison.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-around h-full slide hidden">
        <h2 class="title stroke">What do you observe?</h2>
        <div class="flex items-center gap-[1vw]">

            <ul class="text-start !text-[1.5vw] !text-white">
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Do you move on you own?</p>
                    <div class="flex items-center ">
                        <button class="info-btn1">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Do you drink?</p>
                    <div class="flex items-center ">
                        <button class="info-btn2">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Do you eat?</p>
                    <div class="flex items-center">
                        <button class="info-btn3">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Do you breath?</p>
                    <div class="flex items-center">
                        <button class="info-btn4">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Do you grow (get bigger)?</p>
                    <div class="flex items-center">
                        <button class="info-btn5">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>

            </ul>

            <ul class="scul text-start !text-[1.5vw] !text-white">
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Does you move on you own?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Does you drink?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Does you eat?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Does you breath?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p>Does you grow (get bigger)?</p>
                    <input type="checkbox" class="chkbox" id="">

            </ul>
        </div>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col info-slide1 items-center justify-center slide hidden">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/8.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's <span class="!text-white">move</span> like the girl!</h2>
        <p class="note">Note: Display a doll. Guide children to make comparison.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('/assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" class="img-md" />
        <h2 class="title stroke">We drink water everyday. Why do we drink water everyday?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an8.png') }}" class="img-md" />
        <h2 class="stroke title">We are made up of mostly water.
            If we don’t drink water for a few days, we will die.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an11.png') }}" class="img-md" />
        <h2 class="stroke title">We lose water when we sweat, pee, poo,
            so we need to drink more to replace the water lost.</h2>
    </div>

    {{-- slide 10 --}}

    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" class="img-md" />
        <h2 class="title stroke">How much water should we drink a day?</h2>
        <p class="note">Note: Encourage children to guess.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" class="!w-[25vw]"/>
            <img src="{{ asset('assets/images/N2/LivingThings/an21.png') }}" class="!h-[20vw]" />
        </div>
        <h2 class="title stroke">How much water should we drink a day?</h2>
        <p class="note">Note: Encourage children to guess.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an5.png') }}" class="img-md" />
        <h2 class="title stroke">We eat to live and grow.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" class="img-md" />
        <h2 class="stroke title">Babies drink milk.<br />Milk gives babies <span class="!text-white">nutrients</span> to
            grow!</h2>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" class="img-md" />
        <h2 class="stroke title">Babies drink milk.<br />Milk gives babies <span class="!text-white">nutrients</span> to
            grow!</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/an5.png') }}" class="!w-[25vw]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" class="!w-[25vw]" />
        </div>
        <h2 class="stroke title">As we grow, we eat different types of food.
            Food has all the nutrients our body needs to live and grow.</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/an13.png') }}" class="!w-[25vw]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an14.png') }}" class="img-h-md" />
        </div>
        <h2 class="stroke title">Without eating, you have no energy to do anything.
            You may fall sick too!</h2>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an6.png') }}" class="img-md" />
        <h2 class="stroke title">We need to breathe to stay alive.
            Our bodies need air in order to work normally.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The two lungs in our chest help us to breathe.
            How do you know our lungs are working?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('/assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The two lungs in our chest help us to<span class="!text-white"> breathe</span>.<br />How
            do you know our lungs are working?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('/assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Now <span class="!text-white">breathe</span> out the air.<br />You will feel your chest
            return to its regular size.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('/assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an6.png') }}" class="img-md" />
        <h2 class="stroke title">Let’s try and see how long can you hold your breath!</h2>
        <p class="note">Note: Have children check how long can they hold their breath and then compare with each other.
        </p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col info-slide5 items-center justify-center slide hidden">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="!h-[20vw]"/>
            <img src="{{ asset('assets/images/N2/LivingThings/an7.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an22.png') }}" class="!h-[20vw]"/>
            <img src="{{ asset('assets/images/N2/LivingThings/an7.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="!h-[20vw]"/>
        </div>
        <h2 class="stroke title">We <span class="!text-white">grow</span> .We get bigger.</h2>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="flex- flex-col items-center title stroke text-start">
            <h2>What do you learn?</h2>
            <ul>
                <li>How are living things and non-living things different?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="img-md" />
        <p class="note">Note: Guide children to conclude from the table.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex items-center  slide hidden">
        <div class="title stroke text-start !max-w-[35vw]">
            <h2>Living things are things that...:</h2>
            <ul class="!text-white">
                <li class="flex items-center gap-[1vw]"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Move on their own</p>
                </li>
                <li class="flex items-center gap-[1vw]"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Drink</p>
                </li>
                <li class="flex items-center gap-[1vw]"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p>Eat</p>
                </li>
                <li class="flex items-center gap-[1vw]"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Breath (need air)</p>
                </li>
                <li class="flex items-center gap-[1vw]"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Grow (get bigger)</p>
                </li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an15.png') }}" class="img-h-md" />
    </div>

    {{-- slide 24\ --}}
    <div class="flex flex-col items-center slide hidden">
        <h2 class="title stroke !text-white">Class Activity 2</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g1.png') }}" class="img-lg" />
        <h2 class="title stroke text-start">Let’s find out: <br>
            Which are living things? Which are non living things?</h2>
    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center slide hidden">
        <h2 class="title stroke ">What do you think (Prediction):</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g2.png') }}" class="img-xl" />
        <p class="note">Note: Have children use the learning journal to fill in their prediction; have them circle the
            correct answers.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col  slide hidden items-center justify-around h-[30vw]">
        <div class="title stroke text-start relative">
            <h2 class="title stroke text-start ">Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g3.png') }}" class="img-xl" />
            <button class="info-btn6 absolute right-[34%] top-[90%]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]"
                    class="!w-[2.5vw]" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- info slides1 --}}
    <div class="flex flex-col info-slide6 items-center slide hidden">
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/10.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">This toy train moves on its own. Why?</h2>
        <p class="note">Note: Have children think and share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('/assets/images/pptimages/video.png') }}" />
        </div>
    </div>
    {{-- info slides2  --}}
    <div class="flex flex-col info-slide6 items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an17.png') }}" class="img-lg" />
        <h2 class="title stroke ">It has batteries! <br>
            The battery power enables it to move on its own.</h2>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col items-center slide hidden justify-between h-[30vw]">
        <div class="flex- flex-col items-center title stroke text-start">
            <h2 class="title stroke text-start ">Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g4.png') }}" class="img-xl" />

        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- slde 28 --}}
    <div class="flex flex-col  slide hidden items-center justify-between h-[30vw] ">
        <div class="flex- flex-col items-center title stroke text-start">
            <h2 class="title stroke text-start ">Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g5.png') }}" class="img-xl" />

        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- sslide 29 --}}
    <div class="flex flex-col  slide hidden items-center justify-between h-[30vw]">
        <div class="title stroke text-center  relative">
            <h2 class="title stroke text-start ">Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g6.png') }}" class="img-xl" />

            <button class="info-btn7 absolute left-[50%] bottom-[-2vw]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
            </button>



            <button class="info-btn8 absolute right-[20%] bottom-[-2vw]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>
    {{-- fish information slides  --}}
    {{-- slide1 --}}
    <div class="flex flex-col info-slide7 items-center  slide hidden">
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/11.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Do you know how do fish breathe in the water?</h2>
        <p class="note">Note: Have children think and share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('/assets/images/pptimages/video.png') }}" />
        </div>

    </div>


    {{-- slide 2 --}}
    <div class="flex flex-col info-slide7 items-center  slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an19.png') }}" class="img-lg" />
        <h2 class="stroke title">Fish breathe through gills on both sides of their head.</h2>
    </div>

    {{-- end --}}
    {{-- slide 30  --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="flex flex-col text-start">
            <h2 class="title stroke">Let's do:</h2>

            <img src="{{ asset('assets/images/N2/LivingThings/g7.png') }}" class="img-xl" />
        </div>

        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- slide 31 --}}
    <div class="flex flex-col  slide hidden items-center justify-between h-[30vw]">
        <div class="flex flex-col text-start">
            <h2 class="title stroke">Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g6.png') }}" class="img-xl" />
        </div>

        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- slide 32 --}}

    <div class="flex flex-col  slide hidden items-center">
        <div class="flex- flex-col items-center title stroke text-start">
            <h2>What do you learn?</h2>
            <ul>
                <li>Which are living things? Which are non-living things?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/g1.png') }}" class="img-lg" />
        <p class="note">Note: Encourage children to answer based on their conclusions.</p>

    </div>



    {{-- slide 33 --}}
    <div class="flex flex-col  slide hidden items-center">
        <h2 class="title stroke">Through the activities, we know that a person,
            a dog and a fish are living things.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g9.png') }}" class="img-lg" />

    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col  slide hidden items-center">
        <h2 class="title stroke">People, dogs and fishes belong to the same group
            of living things. Do you know what is the name of this group?</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g9.png') }}" class="img-lg" />

    </div>


    {{-- slide 35 --}}
    <div class="flex flex-col  slide hidden items-center">
        <h2 class="title stroke">Yes, all these are animals!</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g10.png') }}" class="img-lg" />
    </div>

    {{-- slide 36 --}}
    <div class="flex items-center  slide hidden">
        <div class="title stroke text-start !max-w-[33vw]">
            <h2>All <span class="!text-white">animals</span>....</h2>
            <ul class="!text-white">
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Move on their own</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Drink</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p>Eat</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Breath (need air)</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}"
                        class="!w-[2.5vw]" />
                    <p> Grow (get bigger)</p>
                </li>
            </ul>
            <h2>So <span class="!text-white">animals</span> are <span class="!text-white">living things</span></h2>

        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/g11.png') }}" class="img-sm" />
    </div>

    {{-- slide 37 --}}
    <div class="flex flex-col  slide hidden items-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g2.png') }}" class="img-xl" />
    </div>





    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row ">

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

        <button class="nextButton ">
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
            const returnURL = "{{ route('AnimalsSelection') }}";
            const doneURL = "{{ route('LivingThings') }}";

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
                // Last slide overall
                if (slideIndex === slides.length - 1) return true;

                // Last special slide in special mode
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

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
