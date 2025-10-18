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
        <h2 class="stroke title !text-white ">Hands-on Time 1</h2>
        <h2 class="stroke title">Mission: <br>
            Let’s follow the instructions to build a measuring carand then play with it.</h2>
        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>




    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <h2 class="stroke title">Steps: <br>.</h2>
        1. Make sure you have all these parts
        <img src="/assets/images/N2/b1.png" class="w-[436px]" />
    </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <h2 class="stroke title">Steps: <br>.</h2>
        2. Build a measuring car.
        <img src="/assets/images/N2/b2.png" class="w-[436px]" />
    </div>
    <p>Note: Have each group of children work together to complete the mission. <a href="">Click <span
                class="text-amber-300">Here</span></a> for the guide.</p>
    </div>



    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 1 of 9</h2>
        <img src="{{ asset('assets/images/N2/b3.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 2 of 9</h2>
        <img src="{{ asset('assets/images/N2/b4.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 3 of 9</h2>
        <img src="{{ asset('assets/images/N2/b5.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 4 of 9</h2>
        <img src="{{ asset('assets/images/N2/b6.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 5 of 9</h2>
        <img src="{{ asset('assets/images/N2/b7.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 6 of 9</h2>
        <img src="{{ asset('assets/images/N2/b8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 7 of 9</h2>
        <img src="{{ asset('assets/images/N2/b9.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 8 of 9</h2>
        <img src="{{ asset('assets/images/N2/b10.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 9 of 9</h2>
        <img src="{{ asset('assets/images/N2/b11.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>Give the car a push to see what happens and then answer some questions.
                    <ul class="list-disc">
                        <li>What happens when the car is pushed?</li>
                        <li>Which part of the car helps it move?</li>
                        <li>Why is the handle behind the car turned?</li>
                        <li>Why do you think this car is called a measuring car?</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    {{-- sldie 14 --}}
    <div class="flex flex-col  slide hidden">
        <img src="/assets/images/N2/b14.png" />
        <h2 class="title storke">When you give the car a push, its <span class="text-white "> wheels </span> and <span
                class="text-white "> axles</span> turn together.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="flex flex-col  slide hidden">
        <img src="/assets/images/N2/b12.png" />
        <h2 class="stroke title">These <span class="text-white">wheels</span> and <span class="text-white">axles</span> let
            the car moves forwards.</h2>
        <p class="note">Note: Guide children to point out these four pairs of wheels and axles on the car.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col  slide hidden">
        <img src="/assets/images/N2/b13.png" />
        <h2 class="title storke">These wheels and axles let the handle behind the car turn as the car is moving forward.
        </h2>

    </div>



    {{-- slide 17 --}}
    <div class="flex flex-col  slide hidden">

        <div class="flex items-center justify-center ">
            <div>
                <img src="/assets/images/N2/b12.png" />
                <p class="note">When you push a car, these turning wheels and axles (at the bottom) make the car move
                    forward.</p>
            </div>
            <div>
                <img src="/assets/images/N2/b15.png" />
            </div>
        </div>
        <h2 class="title storke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
    </div>


    {{-- slide  18 --}}
    <div class="flex flex-col  slide hidden">

        <div class="flex items-center justify-center ">
            <div>
                <img src="/assets/images/N2/b13.png" />
                <p class="note">As the blue wheel and axle turns, it makes the red wheel and axle that is connected on top
                    of it turn as well.</p>
            </div>
            <div>
                <img src="/assets/images/N2/b15.png" />
            </div>
        </div>
        <h2 class="title storke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col  slide hidden">

        <div class="flex items-center justify-center ">
            <div>
                <img src="/assets/images/N2/b13.png" />
                <p class="note">As the red wheel and axle turns, it makes the blue wheel and axle that is connected next
                    to it turn as well.</p>
            </div>
            <div>
                <img src="/assets/images/N2/b15.png" />
            </div>
        </div>
        <h2 class="title storke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col  slide hidden">

        <div class="flex items-center justify-center ">
            <div>
                <img src="/assets/images/N2/b13.png" />
                <p class="note">As the blue wheel and axle turns, it makes the red wheel and axle that is connected on top
                    of it turn as well.</p>
            </div>
            <div>
                <img src="/assets/images/N2/b15.png" />
            </div>
        </div>
        <h2 class="title storke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden">

        <div class="flex items-center justify-center ">
            <div>
                <img src="/assets/images/N2/b13.png" />
                <p class="note">As the red wheel and axle turns, the handle that is connected to the axle turn as well.
                </p>
            </div>
            <div>
                <img src="/assets/images/N2/b15.png" />
            </div>
        </div>
        <h2 class="title storke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
    </div>


    {{-- slide 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b17.png" />
        <h2 class="stroke title">As the car goes forward, the handle behind it will turn.</h2>
        <p class="note"> Note: Demo using a car and guide children to understand this point.</p>
    </div>


    {{-- slide 23  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b17.png" />
        <h2 class="stroke title">The handle is in front of a scale with numbers.</h2>
        <p class="note"> Note: Guide children to name the numbers on the scale.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b18.png" />
        <h2 class="stroke title">This is called a measuring car because its scale counts
            how many units does it go forward.</h2>
        <p class="note">Note: Explain that the handle must set to zero for accurate counting.</p>
    </div>


    {{-- slide 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b19.png" />
        <h2 class="stroke title">When you give this car a push, it will show you
how far it moves forward.</h2>
    </div>


    {{-- slide 26 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Mission:</h2>
            <ul>
                <li>Let’s play with the measuring car and find ways to make it go very far.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/a60.png" class="w-[600px]" />
        <p class="note">Note: Have children work in groups to complete the mission. Have the groups take turns to showcase their findings in the end.</p>
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
                    window.location.href = "{{ route('MeasuringCarSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
