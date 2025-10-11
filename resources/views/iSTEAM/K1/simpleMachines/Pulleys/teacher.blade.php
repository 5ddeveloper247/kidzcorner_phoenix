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
    <div class=" slide flex text-2xl text-white flex-col justify-start items-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the characteristics of a simple machine - pulley</li>
                <li>Understand the uses of a pulley</li>
                <li>Learn about the basic concept of force (pull)</li>
                <li>Understand that the use of a pulley makes it easier to lift heavy objects</li>
                <li>Understand that it is easier to lift an object using two pulleys fixed <br> in a certain way than using
                    only one pulley</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Simple Machine</li>
                    <li>Pulley</li>
                    <li>Force (Pull)</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
                alt="Teacher" />
        </div>
    </div>







    {{-- slide 24 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center  gap-[1rem] text-start">

        <ul class="list-disc">

            <h2 class="!text-start !text-white">Preparations:</h2>
            <li>2 pulley systems (as shown; each set up with 1 or 2 pulleys, 1 rope, <br>
                1 basket and 1 hook)</li>
            <li>A stand to set up the pulley systems</li>

            <li>Some heavy objects, such as books for lifting</li>
        </ul>



        <img class="w-[600px] h-[350px]" src="/assets/images/K1/sm/pulley/pu30.png" />


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>



    {{-- slide 25 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center  gap-[1rem] text-start">

        <ul class="list-disc !text-start">

            <h2 class="!text-start !text-white">To carry out a successful experiment:</h2>
            <li>Set up the first pulley system (with only one pulley as shown).</li>

        </ul>



        <img src="/assets/images/K1/sm/pulley/pu31.png" />


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>




    {{--  slide 26 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center  gap-[1rem] text-start">

        <ul class="list-disc !text-start">

            <h2 class="!text-start !text-white">To carry out a successful experiment:</h2>
            <li>Ensure that the rope fits exactly into the groove of the pulley, so <br>
                that the rope can move smoothly, when pulled.</li>

        </ul>



        <img src="/assets/images/K1/sm/pulley/pu19.png" />


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>




    {{--  slide 27 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center  gap-[1rem] text-start">

        <ul class="list-disc !text-start">

            <h2 class="!text-start !text-white">To carry out a successful experiment:</h2>
            <li>Set up the second pulley system (with two pulleys as shown).</li>

        </ul>



        <img src="/assets/images/K1/sm/pulley/pu32.png" />


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>





    {{--  slide 27 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center  gap-[1rem] text-start">

        <ul class="list-disc !text-start">

            <h2 class="!text-start !text-white">To carry out a successful experiment:</h2>
            <li>Ensure that the rope fits exactly into the groove of the two pulley, so <br>
                that the rope can move smoothly, when pulled.</li>

        </ul>



        <img src="/assets/images/K1/sm/pulley/pu33.png" />


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>


    {{-- slide 28 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center  gap-[1rem] text-start">

        <ul class="list-disc !text-start">

            <h2 class="!text-start !text-white">To carry out a successful experiment:</h2>
            <li>You may need to make your stand stable with some support (some heavy
                printer paper boxes were used in this demonstration).</li>

        </ul>



        <img src="/assets/images/K1/sm/pulley/pu34.png" />


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>




    {{-- slide 29 --}}
    {{-- <div class=" slide flex text-2xl text-white flex-col justify-center gap-[3rem] text-start">


        <h2 class="font-bold  title stroke flex justify-center mb-2">Learning Centre Idea</h2>

        <ul class=!text-white>
            <h2 class="  font-bold  !text-white  !text-start">Which toys have wheels and axles?</h2>

            <li class=" !text-white">What and how to set up:</li>
            <li class=" !text-white">Place a box filled with a variety of toys and an empty box here.</li>


        </ul>
        <ul>
            <li>What to do:</li>
            <li>1. Check on each toy and place all the toys with wheels and
                axles in the empty box.</li>
            <li>2. Show where the wheel and axle of each toy are.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div> --}}



    {{-- slide 29 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center  gap-[1rem] text-start">

        <div class="flex gap-3  items-center justify-center">

            <div>
                <h2 class="title stroke text-1xl">Is it easier to lift a heavy object
                    with our hands or using a pulley?</h2>
                <img   class="h-[400px]  w-[500px]"         src="/assets/images/K1/sm/pulley/pu20.png" />
            </div>


            <div>

                <h2 class="title stroke text-1xl">Is it easier to lift a heavy object
                    using one pulley or two pulleys?</h2>
                <img   class="h-[400px]  w-[500px]"  src="/assets/images/K1/sm/pulley/pu22.png" />
            </div>



        </div>
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.
        </p>


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>






    {{-- slide 30 --}}
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


























    {{-- slide 31 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-center gap-[3rem] text-start">


        <h2 class="font-bold  title stroke flex justify-center mb-2">Learning Centre Idea</h2>

        <ul class=!text-white>
            <h2 class="  font-bold  !text-white  !text-start">Fun With Pulleys</h2>

            <li class=" !text-white">What and how to set up:</li>
            <li class=" !text-white">Place the two pulley systems at the water play area and replace</li>
            <li class=" !text-white">the basket with a small pail. Tie another rope to the pail as well.</li>
            <br><br>
            <li>What to do:</li>
            <li>1. Take turns to pull the rope of a pulley system to lift up the pail
                of water.</li>
            <li>2. Pull the other rope on the pail to tilt the pail and pour out the
                water! Enjoy the water play.</li>
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
