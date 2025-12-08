@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Are Plants Living things</h2>


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-between h-[20vw] self-end slide hidden">
        <h2 class="stroke title">Children, do you still remember what<span class="!text-white"> living things<br /></span>are?
            What can a<span class="!text-white"> living thing</span> do?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="flex items-center  slide hidden">
        <div class="title stroke text-start">
            <h2>Living things are things that can...</h2>
            <div class="flex justify-between gap-x-[5rem] items-center">
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

                <img src="{{ asset('assets/images/N2/LivingThings/pl1.png') }}" class="img-sm" />
            </div>
            <h2>We learnt that animals are living things.</h2>
        </div>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center h-[50vh] slide hidden">
        <h2 class="stroke title">What about <span class="!text-white">plants</span>?<br />Are <span
                class="!text-white">plants
                living things</span>?</h2>
        <p class="note align-bottom">Note: Encourage children to share their views..</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke !text-white">Class Activity 1</h2>
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="!w-[17vw]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="!w-[17vw]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="!w-[17vw]" />
        </div>
        <h2 class="title stroke text-start">Let’s find out: <br>
            Are plants living things?</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What do you think (Prediction):</h2>
        <p class="note">Are plants living things? Put (✓) or cross (X)</p>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex items-center justify-center overflow-hidden"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <table class="w-full h-full border border-black border-collapse text-lg text-start font-sans table-fixed">
                <thead>
                    <tr class=" ">
                        <th class="border border-black text-[.8vw] p-[.6vw] w-1/2">Plants</th>
                        <th class="border border-black text-[.8vw] p-[.6vw] w-1/2">✓</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black text-[.8vw] p-[.6vw]">Do they move on their own?</td>
                        <td class="border border-black text-[1.25vw]"></td>
                    </tr>
                    <tr>
                        <td class="border border-black text-[.8vw] p-[.6vw]">Do they drink?</td>
                        <td class="border border-black text-[1.25vw]"></td>
                    </tr>
                    <tr>
                        <td class="border border-black text-[.8vw] p-[.6vw]">Do they eat?</td>
                        <td class="border border-black text-[1.25vw]"></td>
                    </tr>
                    <tr>
                        <td class="border border-black text-[.8vw] p-[.6vw]">Do they breathe?</td>
                        <td class="border border-black text-[1.25vw]"></td>
                    </tr>
                    <tr>
                        <td class="border border-black text-[.8vw] p-[.6vw]">Do they grow (get bigger)?</td>
                        <td class="border border-black text-[1.25vw]"></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <p class="note">Note: Discuss as a class and fill in their prediction on the white board.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke text-start ">Let's do:</h2>

        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <table class="w-full border border-black border-collapse text-lg text-start font-sans table-fixed">
                <thead>
                    <tr class=" t-title">
                        <th class="border border-black text-[.8vw] p-[.6vw] w-1/2">Plants</th>
                        <th class="border border-black text-[.8vw] p-[.6vw] w-1/2"></th>
                    </tr>
                </thead>
                <tbod>
                    <tr>
                        <td class="border border-black text-[.8vw] p-[.6vw]">Do they move on their own?</td>
                        <td class="border border-black"> <button class="group info-btn1">
                                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                            </button> </td>
                    </tr>
                    </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            correct the answer if it’s wrong.</p>
    </div>

    {{-- Addtional Slides  --}}
    {{-- slide 7 --}}
    <div class="flex flex-col info-slide1 items-center justify-center slide hidden">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/12.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants move by themselves when they grow
            (stems move up and roots m
            ove down)</p>
        {{-- Video Toggle Button --}}
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col info-slide1 items-center justify-center slide hidden">
        <video id="video2" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/13.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide ch
            ildren to understand that plants move by themselves when their flowers bloom.</p>
        {{-- Video Toggle Button --}}
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col info-slide1 items-center justify-center slide hidden">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/14.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants will grow towards the sun;
            sunflower plants move by t
            hemselves to follow the sun as it moves across the sky,</p>
        {{-- Video Toggle Button --}}
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col info-slide1 items-center justify-center slide hidden">
        <video id="video4" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/N2/LivingThings/videos/15.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Are these plants moving on their own?</h2>
        <p class="note">Note: Guide children to understand that plants moved by other things like wind,
            rain and animals.</p>

        {{-- Video Toggle Button --}}
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden !gap-[.5vw]">
        <p class="note text-center">Are plants living things? Put (✓) or cross (X)</p>

        <h2 class="text-start title stroke">Let's do:</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <table class="w-[55vw] h-[25vw] drawable !text-[1.25vw] border-2 border-black table-fixed ">
                <thead>
                    <tr>
                        <th colspan="2" class="text-center text-[.9vw] py-[.6vw] border-b-2 border-black">
                            Plants
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border border-black">
                        <td class="w-2/3 border p-[.6vw] text-[.8vw]">Do they move on their own?</td>
                        <td class="w-1/3 p-[.6vw] text-[.8vw] text-center text-2xl">✓</td>
                    </tr>
                    <tr>
                        <td class="p-[.6vw] text-[.8vw]">Do they drink?</td>
                        <td class="border-l border-black" rowspan="3">
                            <button class="group info-btn2">
                                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-[.6vw] text-[.8vw] border-t border-black">Do they eat?</td>
                    </tr>
                    <tr>
                        <td class="p-[.6vw] text-[.8vw] border-t border-black">Do they breathe?</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            correct the answer if it’s wrong.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt61.png') }}" class="img-md" />
        <h2 class="title stroke">Plants need food to grow, but they do not eat.
            Where do they get their food from?</h2>
    </div>

    {{-- slide 12 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt23.png') }}" class="img-md" />
        <h2 class="title stroke">Plants make their own food to grow.
            Their leaves use water, nutrients from the soil,
            air and sunlight to make food.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <div class="flex items-center gap-[.6vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/lt24.png') }}" class="img-h-md" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt62.png') }}" class="img-h-md" />
        </div>
        <h2 class="stroke title">Do you know that plants breathe air like we do.</h2>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt63.png') }}" class="img-md" />
        <h2 class="stroke title">Here is an experiment that can prove plants do breathe air.</h2>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col info-slide2 items-center justify-between h-[50vh] slide hidden">
        <div class="flex flex-col title text-start stroke">
            <h2>How to do the experiment?</h2>
            <ul class="list-decimal  lesson-ul space-y-2">
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
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt64.png') }}" class="img-lg" />
        <h2 class="stroke title">A few hours later, you will see many small bubbles form
            around the leaf. Why?</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt65.png') }}" class="img-xl" />
        <h2 class="stroke title">What will happen if you hold your breath under water in a
            swimming pool and then let the breath out?</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/lt66.png') }}" class="img-xl" />
        <h2 class="stroke title">Through the experiment, we know that plants do breathe
            air like we do! </h2>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <p class="note">Are plants living things? Put (✓) or cross (X)</p>
        <h2 class="title stroke text-start ">Let's do:</h2>
        <div class="w-[55vw] h-[35vh] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <table class="w-[55vw] h-[35vh] border border-black text-[1.25vw] ">
                <thead>
                    <tr>
                        <th class="border border-black p-[.6vw] text-[.8vw] text-center" colspan="2">Plants</th>
                    </tr>
                </thead>
                <tbody class="text-start">
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they move on their own?</td>
                        <td class="border border-black  p-[.6vw] text-[.8vw] w-1/2">✓</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they drink?</td>
                        <td class="border border-black p-[.6vw] text-[.8vw]  w-1/2" rowspan="3">✓</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they eat?</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they breathe?</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they grow (get bigger)?</td>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">
                            <button class="group info-btn3">
                                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="!w-[2.5vw]" />
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            correct the answer if it’s wrong.</p>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">
        <h2 class="stroke title">Children, do you remember the seeds that you had planted?
            Have the seeds grown?</h2>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col info-slide3 items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/gl15.png') }}" class="img-xl" />
        <h2 class="stroke title">Similar to you, seeds grow and get bigger in size.
            It changes as it grows.</h2>
        <p class="note">Note: The plants may look different depending on the type of seeds planted.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <p class="note">Are plants living things? Put (✓) or cross (X)</p>
        <h2 class="title stroke text-start ">Let's do:</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex items-center justify-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <table class="w-[55vw] h-[25vw] drawable border border-black text-[1.25vw] ">
                <thead>
                    <tr>
                        <th class="border border-black p-[.6vw] text-[.8vw] text-center" colspan="2">Plants</th>
                    </tr>
                </thead>
                <tbody class="text-start">
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they move on their own?</td>
                        <td class="border border-black  p-[.6vw] text-[.8vw] w-1/2">✓</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they drink?</td>
                        <td class="border border-black p-[.6vw] text-[.8vw]  w-1/2" rowspan="3">✓</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they eat?</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they breathe?</td>
                    </tr>
                    <tr>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">Do they grow (get bigger)?</td>
                        <td class="border border-black p-[.6vw] text-[.8vw] w-1/2">✓</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="note">Note: Guide children to discuss each point and check if their prediction is correct;
            correct the answer if it’s wrong.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col  slide hidden">
        <h2 class="title stroke !text-start">What do you learn: <br>
            Are plants are living things?</h2>
        <div class="flex items-center justify-center gap-[.5vw] ">
            <img src="{{ asset('assets/images/N2/LivingThings/lt1.png') }}" class="!w-[17vw]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt2.png') }}" class="!w-[17vw]" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt3.png') }}" class="!w-[17vw]" />
        </div>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col !text-start slide hidden">

        <h2 class="title stroke ">Through the activity, we learned that plants can..</h2>
        <div class="flex justify-between items-center">
            <ul class="!text-white text-start text-[1.6vw]">
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

            <img src="{{ asset('assets/images/N2/LivingThings/pl2.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">So <span class="!text-white">Plants</span> are <span class="!text-white">living
                things</span></h2>

    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col  slide hidden justify-between h-[30vh]">
        <h2 class="title stroke !text-white">Class Activity 2</h2>
        <h2 class="title stroke text-start">Let’s find out: <br>
            What happens when a plant does not have water, soil, sunlight and air?</h2>
    </div>


    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title text-start stroke">
            <h2>let's do:</h2>
            <ol class="list-decimal lesson-ul" start="1">
                <li>Place the potted plants beside each other. Label one pot as ‘A’ and other as ‘B’</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt69.png') }}" class="img-lg" />
        <p class="note">Note: Ensure that both plants are of the same type and similar in size.</p>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title text-start stroke">
            <h2>let's do:</h2>
            <ol class="list-decimal lesson-ul" start="2">
                <li>Note down the date. Measure the height of the plants
                    and note down their heights.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt67.png') }}" class="img-xl" />
    </div>


    {{-- slde 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title text-start stroke">
            <h2>let's do:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Place pot A in a location where there is sunlight. Remember
                    to water the plant when the soil becomes dry.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt73.png') }}" class="img-md" />
    </div>


    {{-- sslide 29 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title text-start stroke">
            <h2>let's do:</h2>
            <ol class="list-decimal lesson-ul" start="4">
                <li>Add water to soften the soil and take the plant out from
                    pot B. Wash away any soil on the roots.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt68.png') }}" class="img-xl" />
        <p class="note">Note: Add more water to the soil if its is hard to remove the plant.</p>
    </div>



    {{-- slide 30 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title text-start stroke">
            <h2>let's do:</h2>
            <ol class="list-decimal lesson-ul" start="5">
                <li>Clean and place plant B in a zip lock bag. Seal the bag so
                    that Plant B will not have air.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt70.png') }}" class="img-xl" />
    </div>


    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title text-start stroke">
            <h2>let's do:</h2>
            <ol class="list-decimal lesson-ul" start="6">
                <li>Place the zip lock bag with Plant B into a box and close it.
                    Label the box B. Plant B will not have any sunlight and water.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt71.png') }}" class="img-lg" />
    </div>


    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title text-start stroke">
            <h2>let's do:</h2>
            <ol class="list-decimal lesson-ul" start="7">
                <li>Continue to care for Plant A. Compare both Plants A and
                    Plant B after 1 week.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt72.png') }}" class="img-md" />
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col  slide hidden items-center justify-between h-[24vw] self-end">
        <h2 class="title stroke">What happens to plant A and B after 1 week?
            What do you find out from the test?</h2>
        <p class="note">Note: Encourage children to compare and analyze the results.
            If there's not much different, observe the plants for another week.
            Guide them to conclude at the end of the activity (plant B should have dried up)
            - a plant cannot live without water, soil, sunlight and air.</p>
    </div>





    {{-- ==================== --}}
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
            const returnURL = "{{ route('PlantsSelection') }}";
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
