@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="stroke title">Children, do you still remember what<span class="text-white"> living things<br /></span>are?
            What can a<span class="text-white"> living thing</span> do?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>




    {{-- Slide 2 --}}
    <div class="flex items-center  slide hidden">
        <div class="title stroke text-start">
            <h2>Living things are things that can...</h2>
            <div class="flex justify-between gap-x-[5rem]">
                <div>

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
                <div class="flex flex-wrap w-fit">
                    <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" class="w-[150px]" />
                    <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" class="w-[150px]" />
                    <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" class="w-[150px]" />
                    <div class="flex gap-10">
                        <img src="{{ asset('assets/images/N2/LivingThings/lt56.png') }}" class="w-[150px]" />
                        <img src="{{ asset('assets/images/N2/LivingThings/lt55.png') }}" class="w-[150px]" />
                    </div>
                </div>
            </div>
            <h2>We learnt that animals are living things.</h2>
        </div>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="stroke title">What about <span class="text-white">plants</span>?<br />Are <span class="text-white">plants
                living things</span>?</h2>
        <p class="note">Note: Encourage children to share their views..</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke !text-white">Class Activity 1</h2>
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="w-[300px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="w-[300px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="w-[300px]" />
        </div>
        <h2 class="title stroke text-start">Let’s find out: <br>
            Are plants living things?</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What do you think (Prediction):</h2>
        <p class="note">Are plants living things? Put (✓) or cross (X)</p>
        <div class="w-[736px] h-[336px] bg-cover bg-center flex items-center justify-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <table class="w-full h-full border border-black border-collapse text-lg text-start font-sans table-fixed">
                <thead>
                    <tr class=" font-bold">
                        <th class="border border-black p-3 w-1/2">Plants</th>
                        <th class="border border-black p-3 w-1/2">✓</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black p-3">Do they move on their own?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they drink?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3 line-through">Do they eat?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they breathe?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they grow (get bigger)?</td>
                        <td class="border border-black"></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <p class="note">Note: Discuss as a class and fill in their prediction on the white board.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Let's do:</h2>

        <div class="w-[736px] h-[336px] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <table class="w-full border border-black border-collapse text-lg text-start font-sans table-fixed">
                <thead>
                    <tr class="font-bold">
                        <th class="border border-black p-3 w-1/2">Plants</th>
                        <th class="border border-black p-3 w-1/2"></th>
                    </tr>
                </thead>
                <tbod>
                    <tr>
                        <td class="border border-black p-3">Do they move on their own?</td>
                        <td class="border border-black"> <span
                                class="group relative inline-block h-16 w-16 cursor-pointer rounded-[20px] 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] 
                                    shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                    class="absolute top-[16px] left-[16px] h-8 w-8" />
                            </span> </td>
                    </tr>
                    </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            correct the answer if it’s wrong.</p>
    </div>

    {{-- ================== --}}
    {{-- Addtional Slides  --}}
    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt57.png') }}" />
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants move by themselves when they grow
            (stems move up and roots move down)</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt58.png') }}" />
        <h2 class="stroke title">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants move by themselves when their flowers bloom.</p>
    </div>
    {{-- ====================== --}}

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt59.png') }}" />
        <h2 class="stroke title">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants will grow towards the sun;
            sunflower plants move by themselves to follow the sun as it moves across the sky,</p>
    </div>

    {{-- slide 10 --}}

    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt60.png') }}" />
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants moved by other things like wind,
            rain and animals.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt61.png') }}" />
        <h2 class="title stroke">Plants need food to grow, but they do not eat.
            Where do they get their food from?</h2>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt23.png') }}" />
        <h2 class="title stroke">Plants make their own food to grow.
            Their leaves use water, nutrients from the soil,
            air and sunlight to make food.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/images/N2/LivingThings/lt24.png') }}" class="w-[536px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt62.png') }}" class="w-[536px]" />
        </div>
        <h2 class="stroke title">Do you know that plants breathe air like we do.</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt63.png') }}" class="w-[536px]" />
        <h2 class="stroke title">Here is an experiment that can prove plants do breathe air.</h2>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col title text-start stroke">
            <h2>How to do the experiment?</h2>
            <ul class="list-decimal list-inside space-y-2">
                <li>Fill a large clear bowl with lukewarm water.</li>
                <li>Pluck a big leaf from a plant and put it inside the bowl.</li>
                <li>Put a stone or marble on top of the leaf so that the leaf is fully submerged under the water.</li>
                <li>Place the bowl at a sunny spot.</li>
                <li>Check and observe the leaf every hour for a few times.</li>
            </ul>
        </div>
        <p class="note">Note: This experiment takes a few hours to see the result and some leaves need even longer time
            to see the result. If you want to do this experiment in the class, try out with a few types of leaves
            beforehand and decide one that enable you to see the result faster.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt64.png') }}" />
        <h2 class="stroke title">A few hours later, you will see many small bubbles form
            around the leaf. Why?</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt65.png') }}" />
        <h2 class="stroke title">What will happen if you hold your breath under water in a
            swimming pool and then let the breath out?</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt66.png') }}" />
        <h2 class="stroke title">Through the experiment, we know that plants do breathe
            air like we do! </h2>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <p class="note">Are plants living things? Put (✓) or cross (X)</p>
        <h2 class="title stroke">Let's do:</h2>
        <div class="w-[736px] h-[336px] bg-cover bg-center flex items-center justify-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <table class="w-full h-full border border-black border-collapse text-lg text-start font-sans table-fixed">
                <thead>
                    <tr class=" font-bold">
                        <th class="border border-black p-3 w-1/2">Plants</th>
                        <th class="border border-black p-3 w-1/2">✓</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black p-3">Do they move on their own?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they drink?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3 line-through">Do they eat?</td>
                        <td class="border border-black">✓</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they breathe?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they grow (get bigger)?</td>
                        <td class="border border-black"><span
                                class="group relative top-[70px] inline-block h-16 w-16 cursor-pointer rounded-[20px] absolute 
                           bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                                <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                    class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                                <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                                <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                    class="absolute top-[16px] left-[16px] h-8 w-8" />
                            </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            correct the answer if it’s wrong.</p>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Children, do you remember the seeds that you had planted?
            Have the seeds grown?</h2>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-end ">
            <div class="w-[200px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt11.png') }}" />
                <p class="note">Seed</p>
            </div>
            <div class="w-[250px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt12.png') }}" />
                <p class="note">Sprout</p>
            </div>
            <div class="w-[300px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt13.png') }}" />
                <p class="note">Seedling</p>
            </div>
            <div class="w-[400px]">
                <img src="{{ asset('assets/images/N2/LivingThings/lt14.png') }}" />
                <p class="note">Plant</p>
            </div>
        </div>
        <h2 class="stroke title">Similar to you, seeds grow and get bigger in size.
            It changes as it grows.</h2>
        <p class="note">Note: The plants may look different depending on the type of seeds planted.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <p class="note">Are plants living things? Put (✓) or cross (X)</p>
        <h2 class="title stroke">Let's do:</h2>
        <div class="w-[736px] h-[336px] bg-cover bg-center flex items-center justify-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <table class="w-full h-full border border-black border-collapse text-lg text-start font-sans table-fixed">
                <thead>
                    <tr class=" font-bold">
                        <th class="border border-black p-3 w-1/2">Plants</th>
                        <th class="border border-black p-3 w-1/2">✓</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black p-3">Do they move on their own?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they drink?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3 line-through">Do they eat?</td>
                        <td class="border border-black">✓</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they breathe?</td>
                        <td class="border border-black"></td>
                    </tr>
                    <tr>
                        <td class="border border-black p-3">Do they grow (get bigger)?</td>
                        <td class="border border-black">✓</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            correct the answer if it’s wrong.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke !text-white">What do you learn: <br>
            Are plants are living things?</h2>
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="w-[300px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="w-[300px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="w-[300px]" />
        </div>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center text-start slide hidden">

        <h2 class="title stroke ">Through the activity, we learned that plants can..</h2>
        <div class="flex">
            <ul class="!text-white text-start">
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
            <div class="flex items-center justify-center">
                <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="w-[200px]" />
                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="w-[200px]" />
                    <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="w-[200px]" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">So <span class="!text-white">Plants</span> are <span class="!text-white">living
                things</span></h2>

    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke !text-white">Class Activity 2</h2>
        <h2>Let’s find out: <br>
            What happens when a plant does not have water, soil, sunlight and air?</h2>
    </div>


    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul class="list-decimal">
                <li>Place the potted plants beside each other. Label one pot as ‘A’ and other as ‘B’</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt69.png') }}" />
        <p class="note">Note: Ensure that both plants are of the same type and similar in size.</p>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>2. Note down the date. Measure the height of the plants
                    and note down their heights.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt67.png') }}" />
    </div>


    {{-- slde 28 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>3. Place pot A in a location where there is sunlight. Remember
                    to water the plant when the soil becomes dry.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt73.png') }}" />
    </div>


    {{-- sslide 29 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>4. Add water to soften the soil and take the plant out from
                    pot B. Wash away any soil on the roots.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt68.png') }}" />
        <p class="note">Note: Add more water to the soil if its is hard to remove the plant.</p>
    </div>



    {{-- slide 30 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>5. Clean and place plant B in a zip lock bag. Seal the bag so
                    that Plant B will not have air.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt70.png') }}" />
    </div>


    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>6. Place the zip lock bag with Plant B into a box and close it.
                    Label the box B. Plant B will not have any sunlight and water.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt71.png') }}" />
    </div>


    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-center space-y-20 slide hidden">
        <div class="title text-start px-4">
            <h2>let's do:</h2>
            <ul>
                <li>7. Continue to care for Plant A. Compare both Plants A and
                    Plant B after 1 week.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt72.png') }}" />
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke">What happens to plant A and B after 1 week?
            What do you find out from the test?</h2>
        <p class="note">Note: Encourage children to compare and analyze the results.
            If there's not much different, observe the plants for another week.
            Guide them to conclude at the end of the activity (plant B should have dried up)
            - a plant cannot live without water, soil, sunlight and air.</p>
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
                    window.location.href = "{{ route('PlantsSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
