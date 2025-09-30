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
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What do you observe?</h2>
        <div class="flex items-center">

            <ul>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you move on you own?</p>
                    <div>
                        <span
                            class="group relative inline-block h-16 w-16 cursor-pointer rounded-[20px] 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] 
                                    shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                            <!-- Tooltip -->
                            <div
                                class="absolute left-1/2 top-[70px] -translate-x-1/2 
                             whitespace-nowrap rounded bg-gray-800 px-2 py-1 text-xs text-white 
                                     opacity-0 transition-opacity group-hover:opacity-100 z-[99]">
                                THis is for info
                            </div>
                        </span>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you drink?</p>
                    <div>
                        <span
                            class="group relative inline-block h-16 w-16 cursor-pointer rounded-[20px] 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] 
                                    shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                            <!-- Tooltip -->
                            <div
                                class="absolute left-1/2 top-[70px] -translate-x-1/2 
                             whitespace-nowrap rounded bg-gray-800 px-2 py-1 text-xs text-white 
                                     opacity-0 transition-opacity group-hover:opacity-100 z-[99]">
                                THis is for info
                            </div>
                        </span>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you eat?</p>
                    <div>
                        <span
                            class="group relative inline-block h-16 w-16 cursor-pointer rounded-[20px] 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] 
                                    shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                            <!-- Tooltip -->
                            <div
                                class="absolute left-1/2 top-[70px] -translate-x-1/2 
                             whitespace-nowrap rounded bg-gray-800 px-2 py-1 text-xs text-white 
                                     opacity-0 transition-opacity group-hover:opacity-100 z-[99]">
                                THis is for info
                            </div>
                        </span>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you breath?</p>
                    <div>
                        <span
                            class="group relative inline-block h-16 w-16 cursor-pointer rounded-[20px] 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] 
                                    shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                            <!-- Tooltip -->
                            <div
                                class="absolute left-1/2 top-[70px] -translate-x-1/2 
                             whitespace-nowrap rounded bg-gray-800 px-2 py-1 text-xs text-white 
                                     opacity-0 transition-opacity group-hover:opacity-100 z-[99]">
                                THis is for info
                            </div>
                        </span>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-4xl text-white">Do you grow (get bigger)?</p>
                    <div>
                        <span
                            class="group relative inline-block h-16 w-16 cursor-pointer rounded-[20px] 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] 
                                    shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                            <!-- Tooltip -->
                            <div
                                class="absolute left-1/2 top-[70px] -translate-x-1/2 
                             whitespace-nowrap rounded bg-gray-800 px-2 py-1 text-xs text-white 
                                     opacity-0 transition-opacity group-hover:opacity-100 z-[99]">
                                THis is for info
                            </div>
                        </span>
                        <input type="checkbox" class="chkbox" id="">
                    </div>
                </li>

            </ul>

            <ul>
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
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an3.png') }}" />
        <h2 class="title stroke">Let's <span class="text-white">move</span> like the girl!</h2>
        <p class="note">Note: Display a doll. Guide children to make comparison.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" />
        <h2 class="title stroke">We drink water everyday. Why do we drink water everyday?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an8.png') }}" />
        <h2 class="stroke title">We are made up of mostly water.
            If we don’t drink water for a few days, we will die.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an8.png') }}" />
        <h2 class="stroke title">We lose water when we sweat, pee, poo,
            so we need to drink more to replace the water lost.</h2>
    </div>

    {{-- slide 10 --}}

    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" />
        <h2 class="title stroke">How much water should we drink a day?</h2>
        <p class="note">Note: Encourage children to guess.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/images/N2/LivingThings/an4.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an21.png') }}" />
        </div>
        <h2 class="title stroke">How much water should we drink a day?</h2>
        <p class="note">Note: Encourage children to guess.</p>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an5.png') }}" />
        <h2 class="title stroke">We eat to live and grow.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" />
        <h2 class="stroke title">Babies drink milk.<br />Milk gives babies <span class="text-white">nutrients</span> to
            grow!</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/images/N2/LivingThings/an5.png') }}" class="w-[536px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an9.png') }}" class="w-[536px]" />
        </div>
        <h2 class="stroke title">As we grow, we eat different types of food.
            Food has all the nutrients our body needs to live and grow.</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/images/N2/LivingThings/an13.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an14.png') }}" />
        </div>
        <h2 class="stroke title">Without eating, you have no energy to do anything.
            You may fall sick too!</h2>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an6.png') }}" />
        <h2 class="stroke title">We need to breathe to stay alive.
            Our bodies need air in order to work normally.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an10.png') }}" />
        <h2 class="stroke title">The two lungs in our chest help us to breathe.
            How do you know our lungs are working?</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an10.png') }}" />
        <h2 class="stroke title">The two lungs in our chest help us to<span class="text-white"> breathe</span>.<br />How
            do you know our lungs are working?</h2>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an10.png') }}" />
        <h2 class="stroke title">Now <span class="text-white">breathe</span> out the air.<br />You will feel your chest
            return to its regular size.</h2>
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an6.png') }}" />
        <h2 class="stroke title">Let’s try and see how long can you hold your breath!</h2>
        <p class="note">Note: Have children check how long can they hold their breath and then compare with each other.
        </p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
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
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke !text-white">Class Activity 2</h2>

        <img src="{{ asset('assets/images/N2/b21.png') }}" />

        <h2 class="title stroke text-start">Let’s find out: <br>
            Which are living things? Which are non living things?</h2>


    </div>


    {{-- slide 25 --}}
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
            </tbody>
        </table>

        <p class="note">Note: Have children use the learning journal to fill in their prediction; have them circle the
            correct answers.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col  slide hidden justify-between gap-20">
        <div class="title stroke text-start">
            <h2>Let's do:</h2>
            <table class="w-full border border-white border-collapse text-center text-[30px] text-white">
                <tbody>
                    <tr class="border border-white relative">
                        <td class="px-2 py-2 text-left">Which can move on its own?</td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" />
                            <span
                                class="group relative top-[70px] inline-block h-16 w-16 cursor-pointer rounded-[20px] absolute 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                    class="absolute top-[16px] left-[16px] h-8 w-8" />
                            </span>
                        </td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- slide 27 --}}
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
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
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

    {{-- slde 28 --}}
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
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" /></td>
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

    {{-- sslide 29 --}}
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
                    <tr class=" relative border border-white">
                        <td class="px-2 py-2 text-left">Which needs to breath?</td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[90px]" />
                            <span
                                class="group relative top-[70px] inline-block h-16 w-16 cursor-pointer rounded-[20px] absolute 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                    class="absolute top-[16px] left-[16px] h-8 w-8" />
                            </span>
                        </td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an66.png') }}" class="w-[90px]" /></td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an40.png') }}" class="w-[90px]" />
                            <span
                                class="group relative top-[70px] inline-block h-16 w-16 cursor-pointer rounded-[20px] absolute 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                    class="absolute top-[16px] left-[16px] h-8 w-8" />
                            </span>
                        </td>
                        <td> <img src="{{ asset('assets/images/N2/LivingThings/an36.png') }}" class="w-[90px]" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>
    {{-- fish information slides  --}}
    {{-- slide1 --}}
    <div class="flex flex-col  slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an18.png') }}" />
        <h2 class="stroke title">Do you know how do fish breathe in the water?</h2>
        <p class="note">Note: Have children think and share their views.</p>
    </div>


    {{-- slide 2 --}}
    <div class="flex flex-col  slide hidden">
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
                    window.location.href = "{{ route('AnimalsSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
