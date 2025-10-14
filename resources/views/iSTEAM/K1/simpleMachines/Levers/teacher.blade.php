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




    {{-- sldie 23  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the characteristics of a simple machine - <br>lever</li>
                <li>Understand the uses of a lever</li>
                <li>Understand that the position of the fulcrum affects how far an <br>
                    object will be tossed from a lever</li>
                <li>Develop understanding through inquiry </li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Simple Machine</li>
                    <li>Lever</li>
                    <li>Fulcrum</li>
                    <li>Force (Push)</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>



    {{-- slide 24 --}}
    {{-- <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations for Class Activity I:</h2>
            <ul class="list-disc ">
                <li>iPad (make sure children handle with care)</li>
                <li>Torch lights or any other battery-operated lights</li>
                <li>Table lamp or night light (teacher can plug them into the socket and demonstrate how these light up, do
                    not let children handle these)</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Links to Songs:</h2>
                <ul class="list-disc ">
                    <li>
                        <strong>Mr Golden Sun</strong>
                        <ul class="list-disc space-y-1 pl-6">
                            <li>Sun: <a href="https://youtu.be/pIrC_OhEHJM" target="_blank"
                                    class="text-blue-600 underline">Watch here</a></li>
                            <li>Mr Golden Sun: <a href="https://youtu.be/hlzvrEfyL2Y" target="_blank"
                                    class="text-blue-600 underline">Watch here</a></li>
                        </ul>
                    </li>
                    <li>
                        <strong>Twinkle Twinkle Little Star</strong>
                        <a href="https://www.youtube.com/watch?v=NiRf84t4i5I" target="_blank"
                            class="text-blue-600 underline">Watch here</a>
                    </li>
                </ul>
            </div>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />

        </div>
    </div> --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">Preparations: </h2>
            <li>Each child: 1 long wooden ruler, 5 dominoes, some rubber bands, 1 <br>
                eraser</li>
            <li>Thread or other suitable items (to measure distance tossed) and a <br>
                few pairs of scissors</li>
        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le52.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>





    {{-- slide 25 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">Things to consider for preparations:</h2>
            <li>As shown in the video, this experiment needs space. Find a spacious place to
                conduct this experiment so that every child will have enough space to do his/her
                experiment.</li>

        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le47.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{--  slide 26 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">Things to consider for preparations:</h2>
            <li>Before the lesson, prepare a lever for each child: use some rubber bands to tie <br>
                5dominoes together, fix them at the middle below a wooden ruler. Try to use <br>
                a few rubber bands to do so, so that the dominoes will not move around easily. <br>
                [You may get children to form his/her own lever if you think they are able to do so.]</li>

        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le39.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>
    {{--  slide 27 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">How to do the experiment and things to consider:</h2>
            <li>
                1. Have children put an eraser on one end of his/her lever. [This experiment
                can be done on the floor. ]</li>

        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le52.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>
    {{--  slide 28 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">How to do the experiment and things to consider:</h2>
            <li>
                2. Have children push down the other end of his/her lever to see how far the
                eraser will be tossed. [The fulcrum of the lever should not move, so you may
                advise children to hold the position of his/her fulcrum with a hand while
                conducting the experiment.] </li>

        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le53.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>
    {{--  slide 29 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">How to do the experiment and things to consider:</h2>
            <li>
                3. Have children change the position of the fulcrum and test again. [Show them
                how to adjust the fulcrum. Encourage them try to achieve the longest
                toss record.]
        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le44.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>
    {{--  slide 30 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">How to do the experiment and things to consider:</h2>
            <li>
                4.
                After most children roughly get the answer from their hands-on experiences,
                have them repeat steps 1-2 by placing the fulcrum near to the eraser. Guide
                them to measure the distance tossed with thread, cut out the measurement
                and paste the thread in his/her Learning Journal.
        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le46.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>
    {{--  slide 31 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc  !text-start">
            <h2 class="font-bold  !text-white">How to do the experiment and things to consider:</h2>
            <li>
                5.
                Have them repeat steps 1-2 by placing the fulcrum far from the eraser. Guide
                them to measure the distance tossed with thread, cut out the measurement and
                paste the thread in his/her Learning Journal.
        </ul>


        <img class="w-[747px] h-[379px]" src="/assets/images/K1/sm/levers/le52.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- slide 32 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Notes:</h2>
                <ul class="list-disc ">
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/play.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>Always ask questions to encourage children to think and share their
                        ideas first before giving out any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.
                    </li>
                    <li>Print out the Learning Journal (if any) for every <br>
                        child to complete at the end of the lesson.</li>

                    <li>Click on this shortcut icon if you need to go to some <br>
                        parts of the lesson quickly.</li>
                    Click on this <span class="font-bold">shortcut icon</span>
                    <span
                        class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                        <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                            class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                        <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                        <img src="{{ asset('assets/images/pptimages/home-icon.png') }}"
                            class="absolute top-[16px] left-[16px] h-8 w-8" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />

        </div>
    </div>



    {{--  slide 32 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">

        <h2 class="title stroke">How will you get the longest toss of an eraser? Do you get the
            longest toss when the fulcrum is placed near to or far from the eraser?</h2>

        <img class="w-[600px] h-[365px]" src="/assets/images/K1/sm/levers/le42.png" />



        <p class="note">
            Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.</p>




        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>
    {{--  slide 33 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">

        <h2 class="title stroke">Learning Centre Idea </h2>
       

            <ul class="  !text-start !text-white">
                <li  class="font-bold">Things with Levers</li>
                <li>What and how to set up:</li>
                <li>
                    Place a variety of common things with levers here. Some examples <br>
                    are scooter, paint roller, pizza cutter, screwdriver.</li>

                <br><br>
                <li>What to do:</li>
                <li>
                    1. Name each thing and say its uses.</li>
                <li> 2. Show your friends where the lever of each thing is and how to
                    use the lever.</li>

            </ul>






        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



     {{--  slide 34 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">

        <h2 class="title stroke">Learning Centre Idea </h2>
       

            <ul class="  !text-start !text-white">
                <li  class="font-bold">How do you balance the lever?</li>
                <li>What and how to set up:</li>
                <li>
                    Place some levers (refer to the preparations) and small objects like <br>
blocks and books of different weights here.</li>

                <br><br>
                <li>What to do:</li>
                <li>
                    1. Choose any two things that you like and place them on each end
     of a lever.</li>
                <li> 2. Change the position of the fulcrum to make the lever balance.</li>

            </ul>






        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>





























    <div class="absolute bottom-0">
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
    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

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
    <div class="absolute bottom-0">

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
                    window.location.href = "{{ route('K1simpleMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
