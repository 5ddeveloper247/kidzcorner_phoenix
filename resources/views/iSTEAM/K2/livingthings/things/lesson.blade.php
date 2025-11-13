@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What Are Living Things?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t1.png') }}" />
        <h2 class="title stroke">Ben asks, “Mummy, why is my teddy bear not eating like we do?”</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw] ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t1.png') }}" />
        <h2 class="title stroke">Mummy replies, “Because people are <span class="!text-white">living things</span>
            but teddy bears are <span class="!text-white">non-living things</span>.”</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vh] ">
        <h2 class="text-center title stroke">How do we know something is living or non-living?
            Let’s find out their differences.</h2>
        <p class="note">Note: Guide children to understand the meaning of “”living”” (alive).</p>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Class Activity 1</h2>
        <img src="/assets/images/K2/livingthings/things/t22.png" class="large-img3" />
        <h2 class="text-start title stroke"> <span class="!text-white"> Let's find out:</span> <br>
            What are the differences between people and a teddy bear?</h2>
        <p class="note">Note: Display a teddy bear and let children make comparison.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white text-start">What you observe:</h2>
        <table class="w-full table-auto border-collapse !text-white text-[1.4vw]">
            <!-- Header -->
            <thead>
                <tr class="border-2 border-white !text-[30px] font-normal">
                    <th class="p-[.6vw] !text-[.8vw] text-center">People (Living Thing)</th>
                    <th class="p-[.6vw] !text-[.8vw] text-center "></th>
                    <th class="p-[.6vw] !text-[.8vw] text-left ">Teddy Bear (Non-Living Thing)</th>
                </tr>
            </thead>

            <!-- Body (6 rows) -->
            <tbody class="text-start">
                <tr class="border-2 border-white">
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white ">Do you move on your own?</td>
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white ">
                        <button class="info-btn1 relative">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                                class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
                        </button>
                    </td>
                    <td class="p-[.6vw] !text-[.8vw] border-2  border-white">Rock</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white">Do you need water?</td>
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white ">

                    </td>
                    <td class="p-[.6vw] !text-[.8vw]">Plastic bottle</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white">Do you need food?</td>
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white ">

                    </td>
                    <td class="p-[.6vw] !text-[.8vw]">Paper</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white">Do you need air?</td>
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white ">
                        <button class="info-btn2 relative">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                                class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
                        </button>
                    </td>
                    <td class="p-[.6vw] !text-[.8vw]">Glass jar</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white">Do you grow (get bigger)?</td>
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white  ">
                        {{-- <button class="px-3 py-1 rounded-md border border-gray-300 hover:bg-gray-100">Observe</button> --}}
                    </td>
                    <td class="p-[.6vw] !text-[.8vw]">Toy car</td>
                </tr>

                <tr class="border-2 border-white">
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white">Do mothers give births to babies?</td>
                    <td class="p-[.6vw] !text-[.8vw] border-2 border-white  ">
                        <button class="info-btn3 relative">
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                                class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2vw]" />
                        </button>
                    </td>
                    <td class="p-[.6vw] !text-[.8vw]">Rubber eraser</td>
                </tr>
            </tbody>
        </table>

        <p class="note text-center">Note: Tick (✔) or cross (x) to complete the table. Encourage children to share their
            views boldly.</p>
    </div>


    {{-- info btn 1 slide data  --}}
    <div class="slide info-slide1 hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t2.png') }}" />
        <h2 class="title stroke">Let's move like the girl!</h2>
        <p class="note text-center">Note: Have children check if they can imitate the actions and facial <br>
            expressions of the girl on their own.</p>
    </div>


    {{-- info button 2 slide data --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t3.png') }}" />
        <h2 class="title stroke">We need to breathe to stay alive. <br>
            Our bodies need air in order to work normally.</h2>
    </div>


    {{-- == --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/172.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The two lungs in our chest help us to breathe. <br>
            How do you know our lungs are working?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- === --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/172.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Put your hands on your chest and breathe in very deeply. <br>
            You will feel the chest getting slightly bigger.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- === --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/172.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now breathe out the air. <br>
            You will feel your chest return to its regular size.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- ==== --}}
    <div class="slide info-slide2 hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t3.png') }}" />
        <h2 class="title stroke">Let's try and see how long can you hold your breath!</h2>
        <p class="note">Note: Have children check how long can they hold their breath and then compare with each other.
        </p>
    </div>

    {{-- info btn slide 3 data --}}
    {{-- ===== --}}
    <div class="slide info-slide3 hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t5.png') }}" />
        <h2 class="title stroke">Where do babies come from?</h2>
        <p class="note">Note: Have children think and say where do they come from.</p>
    </div>

    {{-- ===== --}}
    <div class="slide info-slide3 hidden  flex flex-col items-center justify-start  ">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/173.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Where do babies come from?</h2>
        <p class="note">Note: Have children think and say where do they come from.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Slide 7  --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center  ">
            <div class="title stroke text-start">
                <h2>Living things are things that...:</h2>
                <ul class="!text-white">
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Grow (get bigger)</p>
                    </li>

                </ul>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an15.png') }}" class="!max-w-[14vw]" />
        </div>
        <p class="note">Note: Make sure that children understand the meaning of “”produce young””.</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Class Activity 2</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/groupt7.png') }}" class="large-img6" />
        <h2 class="title stroke text-start"> <span class="!text-white">Let’s find out:</span> <br>
            Which are living things? Which are non living things?</h2>
    </div>


    {{-- Slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white">What do you think (Prediction):</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t8.png') }}" class="!max-w-[40vw]" />
        <p class="note text-center">Note: Have children use the learning journal to fill in their prediction; <br>
            have them tick or cross to complete the table.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="relative text-start">
            <h2 class="!text-white title stroke">Let’s do:</h2>
            <img src="{{ asset('assets/images/K2/livingthings/things/t9.png') }}" class="!max-w-[45vw]" />
            <button class="info-btn4 !absolute top-[7.6vw] left-[56%] relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2.6vw]" />
                </span>
        </div>
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>



    {{-- click slides --}}
    {{-- =====1 --}}
    <div class="slide hidden info-slide4   flex flex-col items-center justify-start  ">
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/174.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Fish breathe through gills on both sides of their head. <br>
            Do you know how do fish breathe in the water?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- =====2 --}}
    <div class="slide hidden info-slide4  flex flex-col items-center justify-start  ">
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/174.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When a fish breathes, it takes in water through its mouth. The
            gills obtain air from the water and then force the water to go out.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Let’s do:</h2>
        <div class="relative">
            <img src="{{ asset('assets/images/K2/livingthings/things/t11.png') }}" class="!max-w-[45vw]" />
            <button class="info-btn5 !absolute top-[7.6vw] left-[56%] relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1vw] !left-[-0.5vw] !w-[2.6vw]" />
            </button>
        </div>
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- click slide  --}}
    {{-- =====1 --}}
    <div class="slide hidden info-slide5  flex flex-col items-center justify-start  ">
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/175.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Most balls need to be filled with air in order to bounce and roll.</h2>
        <p class="note">Note: Explain to children that we need air to stay alive but not for balls.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Let’s do:</h2>
        <div class="relative">
            <img src="{{ asset('assets/images/K2/livingthings/things/t12.png') }}" class="!max-w-[45vw]" />
            <button class="info-btn6 !absolute top-[10.8vw] left-[20.3%] relative">
                <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                    class="absolute !top-[-1.2vw] !left-[-1vw] !w-[2.6vw]" />
            </button>
        </div>
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- click slide  --}}
    {{-- =====1 --}}
    <div class="slide hidden info-slide6  flex flex-col items-center justify-start  ">
        <video id="video8" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/176.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This toy train moves on its own. Why?</h2>
        <p class="note">Note: Have children think and share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- =====2 --}}
    <div class="slide hidden info-slide6  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t16.png') }}" />
        <h2 class="title stroke">It has batteries! <br>
            The battery power enables it to move on its own.</h2>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t14.png') }}" class="!max-w-[42vw]" />
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t17.png') }}" class="!max-w-[42vw]" />
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Let’s do:</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/t18.png') }}" class="!max-w-[42vw]" />
        <p class="note text-center">Note: Guide children to discuss each point and check if their prediction is correct;
            if wrong, correct with a red crayon.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke text-start "><span class="!text-white">What do you learn:</span> <br>
            Which are living things? Which are non-living things?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/things/groupt7.png') }}" />
        <p class="note text-center">Note: Encourage children to answer based on their conclusions.</p>
    </div>



    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" class="w-img4" />
        <h2 class="title stroke">People and fish are members of the same group.
            What is the name of the group?</h2>
    </div>



    {{-- sldie 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" class="w-img4" />
        <h2 class="title stroke">Yes, these are animals!</h2>
        <p class="note">Note: Have children name the animals and talk about the basic characteristics of each.</p>
    </div>



    {{-- sldie 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" class="w-img4" />
        <h2 class="title stroke">Do you think all animals are living things? Why?</h2>
        <p class="note">Note: Encourage children to share their views boldly.</p>
    </div>


    {{-- sldie 19
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/things/t19.png') }}" class="w-img4" />
        <h2 class="title stroke">Do you think all animals are living things? Why?</h2>
        <p class="note">Note: Encourage children to share their views boldly.</p>
    </div> --}}


    {{-- sldie 20 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center  ">
            <div class="title stroke text-start">
                <h2>All <span class="!text-white">animals</span>....</h2>
                <ul class="!text-white">
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Move on their own</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Drink</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p>Eat</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Breath (need air)</p>
                    </li>
                    <li class="flex items-center gap-[1vw]"> <img
                            src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[2.5vw]" />
                        <p> Grow (get bigger)</p>
                    </li>

                </ul>
                <h2>So, <span class="!text-white">animals</span> are <span class="!text-white">living things</span>.</h2>
            </div>
            <img src="{{ asset('assets/images/K2/livingthings/things/t20.png') }}" />
        </div>
    </div>


    {{-- slide 20  --}}
    <div class="slide  hidden flex flex-col items-center justify-center">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="bg-cover bg-center">
            <img src="{{ asset('assets/images/K2/livingthings/things/t21.png') }}" class="!max-w-[45vw]" />
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

            const whereToGoWhenReturn = "{{ route('K2thingsSelection') }}";
            const whereToGoWhenDone = "{{ route('K2thingsSelection') }}";

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
