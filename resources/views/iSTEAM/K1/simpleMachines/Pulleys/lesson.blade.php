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
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu1.png" />

        <h2 class="title stroke">How are the big boxes lifted?</h2>
        <p class="note ">Note: Let children share what they see.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu1.png" />

        <h2 class="title stroke">A crane lifts the big boxes.</h2>
        <p class="note ">Note: Ask children to share any information they know about cranes.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu2.png" />

        <h2 class="title stroke">A crane has a special thing called a <span class="!text-white">pulley</span> on it.</h2>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu3.png" />

        <h2 class="title stroke">This is a <span class="!text-white">pulley</span>. It has wheel.</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu4.png" />

        <h2 class="title stroke">To lift a heavy object, a rope or chain is first <br>
            wrapped around the wheel.</h2>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu5.png" />

        <h2 class="title stroke">The heavy object attached to the other end <br>
            of the rope or chain with a hook.</h2>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu5.png" />

        <h2 class="title stroke">When one end of the rope is pulled, the heavy object <br>
            on the other end will be lifted up.</h2>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu2.png" />

        <h2 class="title stroke">This is how a <span class="!text-white">pulley</span> helps the crane to lift the heavy
            boxes.</h2>
    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu6.png" />

        <h2 class="title stroke">A <span class="!text-white">pulley</span> is a type of simple machine.</h2>


        <p class="note ">Note: Let children share what they think a simple machine is.</p>
    </div>



    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-[15rem]">
        <br>
        <h2 class="title stroke"> <span class="!text-white">Simple machines</span> are basic tools that help us <br>
            to do work easily.</h2>
        <p class="note">Note: Explain that there are 6 types of simple machines and pulley is one of it.</p>
    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-[15rem]">
        <br>
        <h2 class="title stroke"> Do you know how a <span class="!text-white">pulley</span> helps us <br>
            to do work easily?</h2>
        <p class="note">Note: Let children share what they know.</p>
    </div>



    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/pulley/pu7.png" />

        <h2 class="title stroke">A <span class="!text-white">pulley</span> helps us to move or lift a heavy object easily.
        </h2>


        <p class="note ">Note: Guide children to understand that a pulley is a simple machine as it helps us to do our work
            easily.</p>
    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu8.png" />
        <h2 class="title stroke">What is this? Where is the pulley?<br>
            What does it do?</h2>
    </div>



    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu8.png" />
        <h2 class="title stroke">People draw water from a well with the rope on a pulley.
            It helps to lift a heavy pail of water up easily.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu9.png" />
        <h2 class="title stroke">What is this? Where is the pulley? <br>
            What does it do?</h2>
    </div>



    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu10.png" />
        <h2 class="title stroke">The pulley is on the window blinds. When we pull the rope on
            the pulley, the blinds go up and down easily.</h2>
    </div>


    {{-- sldie 17 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu11.png" />
        <h2 class="title stroke">What is this? Where is the pulley? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 18 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu11.png" />
        <h2 class="title stroke">They pulley is on the exercise machine.<br>
            It helps a person to lift weights and be fit. </h2>
    </div>


    {{-- sldie 19 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu12.png" />
        <h2 class="title stroke">What is this? Where is the pulley?<br>
            What does it do? </h2>
    </div>


    {{-- sldie 20 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu13.png" />
        <h2 class="title stroke">Cable cares are a mode of transport. A pulley helps to move
            them from one place to another easily.</h2>
    </div>



    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu14.png" />
        <h2 class="title stroke">What is this? Where is the pulley? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu14.png" />
        <h2 class="title stroke">They pulley on the fishing rod helps us to pull the fishing
            line in easily and catch a fish.</h2>
    </div>



    {{-- sldie 23 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu15.png" />
        <h2 class="title stroke">What is this? Where is the pulley? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu15.png" />
        <h2 class="title stroke">The pulley is on the sail boat. When the sailor pulls the rope
            on the pulley, the sails are raised and lowered easily.</h2>
    </div>

    {{-- sldie 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <h2 class="title stroke !text-white">Class Activity</h2>


        <div class="flex gap-1">
            <img src="/assets/images/K1/sm/pulley/pu16.png" />
            <img src="/assets/images/K1/sm/pulley/pu17.png" />
            <img src="/assets/images/K1/sm/pulley/pu18.png" />
        </div>

        <ul class="title stroke !text-start">
            <li> Let’s find out:</li>
            <li>What is the easiest way to lift a heavy object.</li>
        </ul>

    </div>


    {{-- sldie 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-4">


        <div class="flex gap-1">
            <img class="h-[300px] w-[380px]" src="/assets/images/K1/sm/pulley/pu16.png" />
            <img class="h-[300px] w-[400px]" src="/assets/images/K1/sm/pulley/pu19.png" />

        </div>

        <ul class="title stroke !text-start">
            <li class="!text-white"> What do you think will happen (Prediction):</li>
            <li class="tracking-tighter">Is it easier to lift a heavy object with our hands or using pulley?</li>
        </ul>

        <br>
        <p class="note text-center">Note: Have children vote for their choice and record the result in a graph <br>
            (refer to the sample on the next page).</p>
    </div>


    {{-- sldie 27 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu15.png" />
        <h2 class="title stroke">What is this? Where is the pulley? <br>
            What does it do?</h2>
    </div>


    {{-- sldie 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <h2 class="title stroke">Is it easier to lift a heavy object with our hands or using a pulley?</h2>
        <img src="/assets/images/K1/sm/pulley/pu20.png" />
        <p class="note text-center">Note: Plot children's prediction on the graph. At the end, put a star to mark the final
            result.</p>
    </div>

    {{-- sldie 29 --}}
    <div class="slide flex flex-col items-center justify-center gap-4">


        <div class="flex gap-1">
            <img class="h-[300px] w-[380px]" src="/assets/images/K1/sm/pulley/pu17.png" />
            <img class="h-[300px] w-[400px]" src="/assets/images/K1/sm/pulley/pu21.png" />

        </div>

        <ul class="title stroke !text-start">
            <li class="!text-white"> What do you think will happen (Prediction):</li>
            <li class="tracking-tighter">Is it easier to lift a heavy object with one pulley or two pulley?</li>
        </ul>

        <br>
        <p class="note text-center">Note: Have children vote for their choice and record the result in a graph <br>
            (refer to the sample on the next page).</p>
    </div>


    {{-- sldie 30 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <h2 class="title stroke">Is it easier to lift a heavy object using one pulley or two pulleys?</h2>
        <img src="/assets/images/K1/sm/pulley/pu22.png" />
        <p class="note text-center">Note: Plot children's prediction on the graph. At the end, put a star to mark the final
            result.</p>
    </div>


    {{-- sldie 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-start gap-1">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">Let’s do (Experiment Procedure):</h2>
            <li>1. Choose an object and lift it with your hands.</li>
        </ul> <br>
        <img src="/assets/images/K1/sm/pulley/pu23.png" />

    </div>


    {{-- slide 32 --}}
    <div class=" slide hidden flex flex-col items-center justify-start gap-1">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">Let’s do (Experiment Procedure):</h2>
            <li>2. Put the object in the basket of a pulley. Pull the <br>
                to lift the object</li>
        </ul> <br>

        <div class="flex gap-1">
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu24.png" />
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu25.png" />

        </div>

    </div>



    {{-- slide 33 --}}
    <div class=" slide hidden flex flex-col items-center justify-start gap-5">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">What do you observe (Result):</h2>
            <li>Is it easier to lift a heavy object with our hands or using <br>
                a pulley?</li>
        </ul> <br>

        <div class="flex gap-1">
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu23.png" />
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu4.png" />

        </div>

        <p class="note">Note: Put a star to mark the final result on the graph.</p>

    </div>




    {{-- slide 34 --}}
    <div class=" slide hidden flex flex-col items-center justify-start gap-5">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">Let’s do (Experiment Procedure):</h2>
            <li>3. Now, put the object into the basket of two pulleys and
                pulleys and pull the rope to lift the object.</li>
        </ul> <br>

        <div class="flex gap-1">
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu26.png" />
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu27.png" />

        </div>


    </div>


    {{-- slide 35 --}}
    <div class=" slide hidden flex flex-col items-center justify-start gap-5">
        <div class="flex gap-1">
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu17.png" />
            <img class="h-[300px] w-[450px]" src="/assets/images/K1/sm/pulley/pu26.png" />

        </div>


        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">What do you observe (Result):</h2>
            <li>Is it easier to lift a heavy object with one pulley or two pulleys?</li>
        </ul> <br>

        <p class="note">Note: Put a star to mark the final result on the graph.</p>

    </div>




    {{-- slide 36 --}}
    <div class=" slide hidden flex flex-col items-center justify-start gap-5">


        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">What do you observe (Conclusion):</h2>
            <li>What is the easiest way to lift a heavy object? Using our hands,
                a pulley or two pulleys</li>
        </ul>
        <div class="flex gap-1">
            <img class="h-[300px] w-[350px]" src="/assets/images/K1/sm/pulley/pu23.png" />
            <img class="h-[300px] w-[350px]" src="/assets/images/K1/sm/pulley/pu17.png" />
            <img class="h-[300px] w-[350px]" src="/assets/images/K1/sm/pulley/pu26.png" />

        </div>
    </div>


    {{-- sldie 37 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu28.png" />
        <h2 class="title stroke">Through this activity, we learn that it is easier to lift a heavy
            object using a rope on a pulley than with our hands.</h2>
    </div>


    {{-- sldie 38 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/pulley/pu29.png" />
        <h2 class="title stroke">It is easier to lift a heavy object using the set up <br>
            of two pulleys than one pulley.</h2>
    </div>




    {{-- sldie 39 --}}


    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[950px] h-[550px] bg-cover bg-center flex flex-col p-[40px] justify-around"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="!text-center">If you want to fit a heavy object easily, how would you set up the pulley? Tick ✔ it.
            </p> <br>


            <div class="flex gap-1  items-end justify-center">
                <img class="h-[70px] w-[70px]" src="/assets/images/K1/sm/plane/plane18.png" />
                <img class="w-[300px] h-[450px]" src="/assets/images/K1/sm/pulley/pu17.png" />
                <img class="w-[300px] h-[450px]" src="/assets/images/K1/sm/pulley/pu18.png" />
                <img class="h-[70px] w-[70px]" src="/assets/images/K1/sm/plane/plane18.png" />
            </div>

         
        </div>
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
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/K1/cm/Vector4.png') }}" />
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
                    window.location.href = "{{ route('PulleysSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
