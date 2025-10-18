@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/things/t1.png" />
        <h2 class="title stroke">Ben asks, “Mummy, why is my teddy bear not eating like we do?”</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/things/t1.png" />
        <h2 class="title stroke">Mummy replies, “Because people are <span class="text-white">living things</span>
            but teddy bears are <span class="text-white">non-living things</span>.”</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center title stroke">How do we know something is living or non-living?
            Let’s find out their differences.</h2>
        <p class="note">Note: Guide children to understand the meaning of “”living”” (alive).</p>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Class Activity 1</h2>
        <h2 class="text-start title stroke">Let's find out: <br>
            What are the differences between people and a teddy bear?</h2>
        <p class="note">Note: Display a teddy bear and let children make comparison.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">What you observe:</h2>
        <table class="w-full table-auto border-collapse text-white text-[20px]">
            <!-- Header -->
            <thead>
                <tr class="border-2 border-white !text-[30px] font-normal">
                    <th class="px-4 py-2 text-center">People (Living Thing)</th>
                    <th class="px-4 py-2 text-center "></th>
                    <th class="px-4 py-2 text-left ">Teddy Bear (Non-Living Thing)</th>
                </tr>
            </thead>

            <!-- Body (6 rows) -->
            <tbody class="text-start">
                <tr class="border-2 border-white">
                    <td class="px-4 py-3 border-2 border-white ">Do you move on your own?</td>
                    <td class="px-4 py-3 border-2 border-white ">
                        <span
                            class="info-btn1 relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                    </td>
                    <td class="px-4 py-3 border-2  border-white">Rock</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="px-4 py-3 border-2 border-white">Do you need water?</td>
                    <td class="px-4 py-3 border-2 border-white ">

                    </td>
                    <td class="px-4 py-3">Plastic bottle</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="px-4 py-3 border-2 border-white">Do you need food?</td>
                    <td class="px-4 py-3 border-2 border-white ">

                    </td>
                    <td class="px-4 py-3">Paper</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="px-4 py-3 border-2 border-white">Do you need air?</td>
                    <td class="px-4 py-3 border-2 border-white ">
                        <span
                            class="info-btn2 relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                    </td>
                    <td class="px-4 py-3">Glass jar</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="px-4 py-3 border-2 border-white">Do you grow (get bigger)?</td>
                    <td class="px-4 py-3 border-2 border-white  ">
                        {{-- <button class="px-3 py-1 rounded-md border border-gray-300 hover:bg-gray-100">Observe</button> --}}
                    </td>
                    <td class="px-4 py-3">Toy car</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="px-4 py-3 border-2 border-white">Do mothers give births to babies?</td>
                    <td class="px-4 py-3 border-2 border-white  ">
                        <span
                            class="info-btn3 relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                    </td>
                    <td class="px-4 py-3">Rubber eraser</td>
                </tr>
            </tbody>
        </table>

        <p class="note text-center">Note: Tick (✔) or cross (x) to complete the table. Encourage children to share their
            views boldly.</p>
    </div>


    {{-- info btn 1 slide data  --}}
    <div class="slide info-slide1 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t2.png" />
        <h2 class="title stroke">Let's move like the girl!</h2>
        <p class="note text-center">Note: Have children check if they can imitate the actions and facial <br>
            expressions of the girl on their own.</p>
    </div>


    {{-- info button 2 slide data --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t3.png" />
        <h2 class="title stroke">We need to breathe to stay alive. <br>
            Our bodies need air in order to work normally.</h2>
    </div>


    {{-- == --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t4.png" />
        <h2 class="title stroke">The two lungs in our chest help us to breathe. <br>
            How do you know our lungs are working?</h2>
    </div>
    {{-- === --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t4.png" />
        <h2 class="title stroke">Put your hands on your chest and breathe in very deeply. <br>
            You will feel the chest getting slightly bigger.</h2>
    </div>
    {{-- === --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t4.png" />
        <h2 class="title stroke">Now breathe out the air. <br>
            You will feel your chest return to its regular size.</h2>
    </div>
    {{-- ==== --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t3.png" />
        <h2 class="title stroke">Let's try and see how long can you hold your breath!</h2>
        <p class="note">Note: Have children check how long can they hold their breath and then compare with each other.
        </p>
    </div>

    {{-- info btn slide 3 data --}}
    {{-- ===== --}}
    <div class="slide info-slide3 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t5.png" />
        <h2 class="title stroke">Where do babies come from?</h2>
        <p class="note">Note: Have children think and say where do they come from.</p>
    </div>

    {{-- ===== --}}
    <div class="slide info-slide3 hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t6.png" />
        <h2 class="title stroke">Where do babies come from?</h2>
        <p class="note">Note: Have children think and say where do they come from.</p>
    </div>



    {{-- Slide 7  --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center  ">
            <div class="title stroke text-start">
                <h2>Living things are things that...:</h2>
                <ul class="!text-white">
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Grow (get bigger)</p>
                    </li>

                </ul>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an15.png') }}" />
        </div>
        <p class="note">Note: Make sure that children understand the meaning of “”produce young””.</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Class Activity 2</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t7.png') }}" />
        <h2 class="title stroke">Let’s find out: <br>
            Which are living things? Which are non living things?</h2>
    </div>


    {{-- Slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">What do you think (Prediction):</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t8.png') }}" />
        <p class="note text-center">Note: Have children use the learning journal to fill in their prediction; <br>
            have them tick or cross to complete the table.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="relative text-start">
            <h2 class="title stroke">Let’s do:</h2>
            <img src="{{ asset('assets/images/K2/livingthings/things/t9.png') }}" />
            <span
                class="info-btn4 !absolute top-[120px] left-[55%] relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                    class="absolute top-[16px] left-[16px] h-8 w-8" />
            </span>
            </td>
        </div>
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>



    {{-- click slides --}}
    {{-- =====1 --}}
    <div class="slide hidden info-slide4   flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t10.png" />
        <h2 class="title storke">Fish breathe through gills on both sides of their head. <br>
            Do you know how do fish breathe in the water?</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- =====2 --}}
    <div class="slide hidden info-slide4  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t10.png" />
        <h2 class="title storke">When a fish breathes, it takes in water through its mouth. The
            gills obtain air from the water and then force the water to go out.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let’s do:</h2>
        <div class="relative">
            <img src="{{ asset('assets/images/K2/livingthings/things/t11.png') }}" />
            <span
                class="info-btn5 !absolute top-[150px] left-[55%] relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                    class="absolute top-[16px] left-[16px] h-8 w-8" />
            </span>
            </td>
        </div>
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- click slide  --}}
    {{-- =====1 --}}
    <div class="slide hidden info-slide5  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t13.png" />
        <h2 class="title storke">Most balls need to be filled with air in order to bounce and roll.</h2>
        <p class="note">Note: Explain to children that we need air to stay alive but not for balls.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let’s do:</h2>
        <div class="relative">
            <img src="{{ asset('assets/images/K2/livingthings/things/t12.png') }}" />
            <span
                class="info-btn6 !absolute top-[220px] left-[18%] relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                    class="absolute top-[16px] left-[16px] h-8 w-8" />
            </span>
            </td>
        </div>
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- click slide  --}}
    {{-- =====1 --}}
    <div class="slide hidden info-slide6  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t15.png" />
        <h2 class="title storke">This toy train moves on its own. Why?</h2>
        <p class="note">Note: Have children think and share their views.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- =====2 --}}
    <div class="slide hidden info-slide6  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K2/livingthings/things/t16.png" />
        <h2 class="title storke">It has batteries! <br>
            The battery power enables it to move on its own.</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t14.png') }}" />
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t17.png') }}" />
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t18.png') }}" />
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">What do you learn: <br>
            Which are living things? Which are non-living things?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t7.png') }}" />
        <p class="note text-center">Note: Encourage children to answer based on their conclusions.</p>
    </div>



    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" />
        <h2 class="title stroke">People and fish are members of the same group.
            What is the name of the group?</h2>
    </div>



    {{-- sldie 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" />
        <h2 class="title stroke">Yes, these are animals!</h2>
        <p class="note">Note: Have children name the animals and talk about the basic characteristics of each.</p>
    </div>



    {{-- sldie 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" />
        <h2 class="title stroke">Do you think all animals are living things? Why?</h2>
        <p class="note">Note: Encourage children to share their views boldly.</p>
    </div>


    {{-- sldie 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" />
        <h2 class="title stroke">Do you think all animals are living things? Why?</h2>
        <p class="note">Note: Encourage children to share their views boldly.</p>
    </div>


    {{-- sldie 20 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center  ">
            <div class="title stroke text-start">
                <h2>All <span class="text-white">animals</span>....</h2>
                <ul class="!text-white">
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-5"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                        <p> Grow (get bigger)</p>
                    </li>

                </ul>
                <h2>So, <span class="text-white">animals</span> are <span class="text-white">living things</span>.</h2>
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/things/t20.png') }}" />
        </div>
    </div>


    {{-- slide 20  --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-center items-center gap-10">
            <img src="/assets/images/K2/livingthings/things/t21.png" class="w-[400px]" />
        </div>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
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


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
            });

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
                        window.location.href = "{{ route('K2thingsSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
