@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title stroke top-title absolute top-[30px]">Animals are Living Things</h2>


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an1.png') }}" alt="">
        <h2 class="stroke title">Anna asks, “Mummy, why can’t my doll walk and eat like me?”</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="w-[436px]" />
        <h2 class="stroke title">Mummy replies, “”Because you are a <span class="text-white">living thing<br /></span>but
            the doll is <span class="text-white">non-living thing</span>.””</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="stroke title">What is a<span class="text-white"> living thing</span>?<br />What is a
            <span class="text-white">non- living thing</span>?<br /><br />Let’s find out!
        </h2>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" />
        <h2 class="stroke title">Let’s find out:<br />How are you (<span class="text-white">living things</span>) and a doll
            <br />(<span class="text-white">non-living thing</span>) different?
        </h2>
        <p class="note">Note: Display a doll. Guide children to make comparison.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-around h-full slide hidden">
        <h2 class="title stroke">What do you observe?</h2>
        <div class="flex items-center gap-3">

            <ul class="text-start">
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you move on you own?</p>
                    <div class="flex items-center ">
                        <button class="info-btn1">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you drink?</p>
                    <div class="flex items-center ">
                        <button class="info-btn2">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you eat?</p>
                    <div class="flex items-center">
                        <button class="info-btn3">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you breath?</p>
                    <div class="flex items-center">
                        <button class="info-btn3">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you grow (get bigger)?</p>
                    <div class="flex items-center">
                        <button class="info-btn5">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" />
                        </button>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>

            </ul>

            <ul class="space-y-5 scul text-start">
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Does you move on you own?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Does you drink?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Does you eat?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Does you breath?</p>
                    <input type="checkbox" class="chkbox" id="">
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Does you grow (get bigger)?</p>
                    <input type="checkbox" class="chkbox" id="">

            </ul>
        </div>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col info-slide1 items-center justify-center slide hidden">
        <div>
            <img src="{{ asset('assets/images/N2/LivingThings/an3.png') }}" />
            <h2 class="title stroke">Let's <span class="text-white">move</span> like the girl!</h2>
            <p class="note">Note: Display a doll. Guide children to make comparison.</p>
        </div>
        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[80px] z-[99] -translate-y-1/2">
            <img class=" h-14 w-14" src="{{ asset('/assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" />
        <h2 class="title stroke">We drink water everyday. Why do we drink water everyday?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an8.png') }}" />
        <h2 class="stroke title">We are made up of mostly water.
            If we don’t drink water for a few days, we will die.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an11.png') }}" />
        <h2 class="stroke title">We lose water when we sweat, pee, poo,
            so we need to drink more to replace the water lost.</h2>
    </div>

    {{-- slide 10 --}}

    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" />
        <h2 class="title stroke">How much water should we drink a day?</h2>
        <p class="note">Note: Encourage children to guess.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an21.png') }}" />
        </div>
        <h2 class="title stroke">How much water should we drink a day?</h2>
        <p class="note">Note: Encourage children to guess.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an5.png') }}" />
        <h2 class="title stroke">We eat to live and grow.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" />
        <h2 class="stroke title">Babies drink milk.<br />Milk gives babies <span class="text-white">nutrients</span> to
            grow!</h2>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" />
        <h2 class="stroke title">Babies drink milk.<br />Milk gives babies <span class="text-white">nutrients</span> to
            grow!</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/images/N2/LivingThings/an5.png') }}" class="w-[536px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" class="w-[536px]" />
        </div>
        <h2 class="stroke title">As we grow, we eat different types of food.
            Food has all the nutrients our body needs to live and grow.</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/images/N2/LivingThings/an13.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an14.png') }}" />
        </div>
        <h2 class="stroke title">Without eating, you have no energy to do anything.
            You may fall sick too!</h2>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an6.png') }}" />
        <h2 class="stroke title">We need to breathe to stay alive.
            Our bodies need air in order to work normally.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an10.png') }}" />
        <h2 class="stroke title">The two lungs in our chest help us to breathe.
            How do you know our lungs are working?</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 flex justify-center items-center right-[80px] z-[99] h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class=" h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an10.png') }}" />
        <h2 class="stroke title">The two lungs in our chest help us to<span class="text-white"> breathe</span>.<br />How
            do you know our lungs are working?</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 flex justify-center items-center right-[80px] z-[99] h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class=" h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an10.png') }}" />
        <h2 class="stroke title">Now <span class="text-white">breathe</span> out the air.<br />You will feel your chest
            return to its regular size.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 flex justify-center items-center right-[80px] z-[99] h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class=" h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an6.png') }}" />
        <h2 class="stroke title">Let’s try and see how long can you hold your breath!</h2>
        <p class="note">Note: Have children check how long can they hold their breath and then compare with each other.
        </p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col info-slide5 items-center justify-center slide hidden">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an7.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an22.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an7.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" />
        </div>
        <h2 class="stroke title">We <span class="text-white">grow</span> .We get bigger.</h2>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>What do you learn?</h2>
            <ul>
                <li>How are living things and non-living things different?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="w-[536px]" />
        <p class="note">Note: Guide children to conclude from the table.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex items-center  slide hidden">
        <div class="title stroke text-start">
            <h2>Living things are things that...:</h2>
            <ul class="!text-white">
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Move on their own</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Drink</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p>Eat</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Breath (need air)</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Grow (get bigger)</p>
                </li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an15.png') }}" />
    </div>

    {{-- slide 24\ --}}
    <div class="flex flex-col items-center slide hidden">
        <h2 class="title stroke !text-white">Class Activity 2</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g1.png') }}" />
        <h2 class="title stroke text-start">Let’s find out: <br>
            Which are living things? Which are non living things?</h2>
    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center slide hidden">
        <h2 class="title stroke ">What do you think (Prediction):</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g2.png') }}" />
        <p class="note">Note: Have children use the learning journal to fill in their prediction; have them circle the
            correct answers.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col  slide hidden justify-around h-full">
        <div class="title stroke text-start relative">
            <h2>Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g3.png') }}" />
            <button class="info-btn6 absolute right-[125px] top-[64px]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- info slides1 --}}
    <div class="flex flex-col info-slide6 items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an16.png') }}" />
        <h2 class="title stroke ">This toy train moves on its own. Why?</h2>
        <p class="note">Note: Have children think and share their views.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 flex justify-center items-center right-[80px] z-[99] h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class=" h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>
    {{-- info slides2  --}}
    <div class="flex flex-col info-slide6 items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an17.png') }}" />
        <h2 class="title stroke ">It has batteries! <br>
            The battery power enables it to move on its own.</h2>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col items-center slide hidden justify-around">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g4.png') }}" />

        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- slde 28 --}}
    <div class="flex flex-col  slide hidden justify-around ">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g5.png') }}" />

        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- sslide 29 --}}
    <div class="flex flex-col  slide hidden justify-around">
        <div class="title stroke text-start relative">
            <h2>Let's do:</h2>
            <img src="{{ asset('assets/images/N2/LivingThings/g6.png') }}" />

            <button class="info-btn7 absolute right-[140px] bottom-[-47px]">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" />
            </button>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>
    {{-- fish information slides  --}}
    {{-- slide1 --}}
    <div class="flex flex-col info-slide7  slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an18.png') }}" />
        <h2 class="stroke title">Do you know how do fish breathe in the water?</h2>
        <p class="note">Note: Have children think and share their views.</p>
    </div>


    {{-- slide 2 --}}
    <div class="flex flex-col info-slide7  slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an19.png') }}" />
        <h2 class="stroke title">Fish breathe through gills on both sides of their head.</h2>
    </div>

    {{-- end --}}
    {{-- slide 30  --}}
    <div class="flex flex-col  slide hidden justify-between gap-20">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <table class="w-full border border-white border-collapse text-center text-[30px] text-white">
                <tbody>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which can move on its own?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which needs to drink?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which needs to eat?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which needs to breath?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /> </td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which can grow (get bigger)?</td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /> </td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- slide 31 --}}
    <div class="flex flex-col  slide hidden justify-between gap-20">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <table class="w-full border border-white border-collapse text-center text-[30px] text-white">
                <tbody>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which can move on its own?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which needs to drink?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which needs to eat?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which needs to breath?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /> </td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                    <tr class="border border-white">
                        <td class="px-2 py-2 text-left">Which can grow (get bigger)?</td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td class="border border-4 border-red-500 rounded-[50%]"> <img
                                src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /> </td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- slide 32 --}}

    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>What do you learn?</h2>
            <ul>
                <li>Which are living things? Which are non-living things?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/b22.png') }}" />
        <p class="note">Note: Encourage children to answer based on their conclusions.</p>

    </div>



    {{-- slide 33 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke">Through the activities, we know that a person,
            a dog and a fish are living things.</h2>
        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an38.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" />
        </div>
    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke">People, dogs and fishes belong to the same group
            of living things. Do you know what is the name of this group?</h2>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an38.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" />
        </div>
    </div>


    {{-- slide 35 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke">Yes, all these are animals!</h2>

        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an39.png') }}" />
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" />
                <img src="{{ asset('assets/images/N2/LivingThings/an41.png') }}" />
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" />
        </div>
    </div>

    {{-- slide 36 --}}
    <div class="flex items-center  slide hidden">
        <div class="title stroke text-start">
            <h2>All <span class="!text-white">animals</span>....</h2>
            <ul class="!text-white">
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Move on their own</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Drink</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p>Eat</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Breath (need air)</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Grow (get bigger)</p>
                </li>
            </ul>
            <h2>So <span class="!text-white">animals</span> are <span class="!text-white">living things</span></h2>

        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an39.png') }}" />
            <div>

                <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" />
                <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" />
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an41.png') }}" />
        </div>
    </div>

    {{-- slide 37 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke !text-white">Class Activity 2</h2>

        <table class="w-full border border-white border-collapse text-center text-[30px] text-white">
            <thead>
                <tr>
                    <td class="px-2 py-2 text-left">Circle the correct pictures to answer the following questions</td>
                </tr>
            </thead>
            <tbody>
                <tr class="border border-white">
                    <td class="px-2 py-2 text-left">Which can move on its own?</td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                </tr>
                <tr class="border border-white">
                    <td class="px-2 py-2 text-left">Which need to drink?</td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                </tr>
                <tr class="border border-white">
                    <td class="px-2 py-2 text-left">Which need to eat?</td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                </tr>
                <tr class="border border-white">
                    <td class="px-2 py-2 text-left">Which need to breathe?</td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                </tr>
                <tr class="border border-white">
                    <td class="px-2 py-2 text-left">Which can grow (get bigger)?</td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                    <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                </tr>
                <tr class="border border-white">
                    <td class="px-2 py-2 text-left">Which of the above are living things? Which of the above are non-living
                        things? Discuss and share your answers in class.</td>
                </tr>
            </tbody>
        </table>
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
        //video + click logic
        document.addEventListener("DOMContentLoaded", () => {
            // ===== GET ALL ELEMENTS =====
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            // ===== STATE VARIABLES =====
            let currentIndex = 0; // Current slide index
            let parentSlideIndex = null; // Where to return after info slides
            let isViewingInfoSlides = false; // Are we viewing info/click slides?
            let currentInfoClass = null; // Which info/click group (e.g., "info-slide1")

            // ===== HELPER FUNCTIONS =====

            // Pause all videos in the current slide
            function pauseAllVideos() {
                if (slides[currentIndex]) {
                    const videos = slides[currentIndex].querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            // Check if a slide is an info/click slide
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Get info/click class from button (e.g., "info-btn1" → "info-slide1")
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

            // Check if there's another info/click slide after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // ===== MAIN DISPLAY FUNCTION =====
            function showSlide(index) {
                // Pause videos before switching slides
                pauseAllVideos();

                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update current index
                currentIndex = index;

                // Determine if we're on the last slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                // Update button visibility
                if (isLastSlide || isLastInfoSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // ===== EVENT LISTENERS =====

            // Info/Click button handlers - enter info slide mode
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Remember where we came from
                    parentSlideIndex = currentIndex;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find and show the first matching info/click slide
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            // NEXT button handler
            nextBtn.addEventListener("click", () => {
                if (currentIndex >= slides.length - 1) return;

                currentIndex++;

                if (isViewingInfoSlides) {
                    // In info mode: only show slides with current info class
                    while (currentIndex < slides.length &&
                        !slides[currentIndex].classList.contains(currentInfoClass)) {
                        currentIndex++;
                    }
                } else {
                    // Normal mode: skip all info/click slides
                    while (currentIndex < slides.length &&
                        isInfoSlide(slides[currentIndex])) {
                        currentIndex++;
                    }
                }

                if (currentIndex < slides.length) {
                    showSlide(currentIndex);
                }
            });

            // RETURN button handler
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('AnimalsSelection') }}";
                    return;
                }

                if (isViewingInfoSlides) {
                    // In info mode: go to previous slide with same info class
                    let prevSlide = currentIndex - 1;

                    // Find previous slide with matching info class
                    while (prevSlide >= 0 &&
                        !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0) {
                        // Found previous info slide
                        showSlide(prevSlide);
                    } else {
                        // No more info slides - return to parent
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        showSlide(parentSlideIndex);
                        parentSlideIndex = null;
                    }
                } else {
                    // Normal mode: go back one slide, skip info slides
                    currentIndex--;

                    while (currentIndex > 0 && isInfoSlide(slides[currentIndex])) {
                        currentIndex--;
                    }

                    showSlide(currentIndex);
                }
            });

            // DONE button handler
            doneBtn.addEventListener("click", () => {
                if (isViewingInfoSlides && parentSlideIndex !== null) {
                    // Return to parent slide
                    isViewingInfoSlides = false;
                    currentInfoClass = null;
                    showSlide(parentSlideIndex);
                    parentSlideIndex = null;
                } else {
                    // Go to selection page
                    window.location.href = "{{ route('LivingThings') }}";
                }
            });

            // ===== INITIALIZE =====
            showSlide(0);
        });

        // ===== VIDEO TOGGLE FUNCTION =====
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video) {
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            }
        }
    </script>
@endpush
