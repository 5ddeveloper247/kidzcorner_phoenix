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
        <img src="/assets/images/K1/sm/plane/plane1.png" />
        <h2 class="title stroke">Do you know what this is?</h2>

    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-0">
        <img src="/assets/images/K1/sm/plane/plane1.png" />
        <h2 class="title stroke">This is a <span class="text-white">ramp.</span> It is a slanting surface
            with one end higher than the other end.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plane/plane1.png" />
        <h2 class="title stroke">The <span class="text-white">ramp.</span> looks like a slope.
            It is a <span class="text-white">simple machine</span> called an <span class="text-white"> inclined
                plane</span>.</h2>

    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="title stroke">Do you know what a simple machine is?</h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p class="note">Note: Have children boldly say what they think a simple machine is.</p>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="title stroke"> <span class="text-white">Simple machines</span> are basic tools that help us <br>
            to do work easily.</h2>
        <br>
        <br>
        <br>

        <h2 class="title stroke">Do you know how an <span class="text-white">inclined plane </span> helps us <br>
            to do work easily?</h2>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plane/plane1.png" />
        <h2 class="title stroke">The <span class="text-white">inclined plane </span> allows us to move heavy things
            up or down a place easily.</h2>

    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="title stroke">Can you name some ramps or inclined planes <br>
            around us?</h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p class="note">Note: Have children recall and name some ramps in their surroundings.</p>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plane/plane2.png" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plane/plane2.png" />
        <h2 class="title stroke">This inclined plane allows us to move down or slide
            down the slide smoothly for fun!</h2>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plane/plane3.png" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plane/plane3.png" />
        <h2 class="title stroke">This inclined plane allows us to move the bicycle up or down a
            place easily. We use less strength to do the work.</h2>

    </div>



    {{-- sldie 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-20">
        <img src="/assets/images/K1/sm/plane/plane4.png" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>


    {{-- sldie 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane4.png" />
        <h2 class="title stroke">This inclined plane allows us to pour the sand or rocks out easily
            from the dump truck. We use less strength to do the work.</h2>
    </div>



    {{-- sldie 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane5.png" />
        <h2 class="title stroke">This inclined plane allows us to pour the sand or rocks out easily
            from the dump truck. We use less strength to do the work.</h2>


    </div>


    {{-- sldie 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane6.png" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>


    {{-- sldie 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane6.png" />
        <h2 class="title stroke">This inclined plane allows us to passengers in wheelchairs up or
            down a bus easily. We use less strength to do the work.</h2>

    </div>


    {{-- sldie 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane7.png" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>
    </div>


    {{-- sldie 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane1.png" />
        <h2 class="title stroke">This inclined plane allows us to move heavy things up or down
            a truck easily. We use less strength to do the work.</h2>

    </div>



    {{-- sldie 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane8.png" />
        <h2 class="title stroke">What is this? Where can you find it? Where is the inclined
            plane? What does it do? Who usually uses it?</h2>
    </div>


    {{-- sldie 20 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane8.png" />
        <h2 class="title stroke">This inclined plane allows us to move heavy things up or down
            a truck easily. We use less strength to do the work.</h2>

    </div>



    {{-- sldie 21 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane9.png" />

        <div class="text-start">

            <h2 class="title stroke  text-start">Let’s find out (Experiment):</h2>

            <ul class="title stroke list-none text-start">
                <li>Roll a car down an inclined plane at different heights to see
                    how far it will go.</li>
            </ul>
        </div>


    </div>


    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">

        <h2 class="title stroke">Which height of the inclined plane do you think
            will make the car go the longest distance?</h2>
        <img src="/assets/images/K1/sm/plane/plane10.png" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.
        </p>



    </div>



    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <div class="text-start">

            <h2 class="title stroke">Let’s do (Experiment Procedure):</h2>
            <ul class="title stroke list-decimal">
                <li>Roll a car down an inclined plane at different heights to see how far it
                    goes. Use a sticky note to mark the result on the measuring mat.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/plane/plane11.png" />

    </div>


    {{-- sldie 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <div class="text-start">

            <h2 class="title stroke">Let’s do (Experiment Procedure):</h2>
            <ul class="title stroke list-decimal list-none">
                <li> 2. Change the height of the inclined plane and test again.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/plane/plane12.png" />


    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane13.png" />
        <div class="text-start">

            <h2 class="title stroke">What do you observe (Result):</h2>
            <ul class="title stroke list-decimal  !list-none">
                <li> How far does the car go at the lowest height of the inclined
                    plane? How many units does it travel?</li>
            </ul>
        </div>


    </div>


    {{-- sldie 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/plane/plane13.png" />
        <div class="text-start">

            <h2 class="title stroke">What do you observe (Result):</h2>
            <ul class="title stroke list-decimal  !list-none">
                <li> How far does the car go at the middle height of the inclined
                    plane? How many units does it travel?</li>
            </ul>
        </div>
    </div>


    {{-- sldie 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <div class="text-start">

            <h2 class="title stroke">Let’s do (Experiment Procedure):</h2>
            <ul class="title stroke list-decimal  !list-none">
                <li> 3.Make conclusions based on your results.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/plane/plane14.png" />
    </div>





    {{-- sldie 29 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <div class="text-start">

            <h2 class="title stroke">What do you learn (Conclusion):</h2>
            <ul class="title stroke list-decimal  !list-none">
                <li>Which height of the inclined plane makes the car go the
                    longest distance?</li>

            </ul>
        </div>
        <img src="/assets/images/K1/sm/plane/plane15.png" />
    </div>


    {{-- sldie 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-20">
        <div class="text-start">

            <h2 class="title stroke">What do you learn (Conclusion):</h2>
            <ul class="title stroke list-decimal  !list-none">
                <li>Which height of the inclined plane makes the steepest ramp?</li>

            </ul>
        </div>
        <img src="/assets/images/K1/sm/plane/plane15.png" />
    </div>


    {{-- sldie 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-20">
        <img src="/assets/images/K1/sm/plane/plane16.png" />
        <h2 class="title stroke">Through the activity (experiment), we know that a car will go
            a longer distance if the inclined plane is steeper.</h2>

    </div>


    {{-- slide 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col p-[40px] justify-around"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">If you want the car to go very far, how would you put the inclined plane? Tick ✔ it.
            </p>

            <img src="/assets/images/K1/sm/plane/plane17.png" />

            <div class="flex justify-around">
                <img src="/assets/images/K1/sm/plane/plane18.png" />
                <img src="/assets/images/K1/sm/plane/plane18.png" />
                <img src="/assets/images/K1/sm/plane/plane18.png" />
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
    <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40">

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
                    window.location.href = "{{ route('PlaneSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
