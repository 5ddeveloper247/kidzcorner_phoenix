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

        <img src="/assets/images/N2/b20.png" class="w-[436px]" />
        <h2 class="stroke title">Children, do you remember what this is?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>




    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">

        <img src="/assets/images/N2/b20.png" class="w-[436px]" />
        <h2 class="stroke title">This is a ramp. It is a slanting surface with one end higher than the other end.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/b20.png" class="w-[436px]" />
        <h2 class="stroke title">The <span class="text-white">ramp</span> looks like a shape.<br />It is a <span
                class="text-white">simple machine</span> called an <span class="text-white">inclined plane</span>.</h2>
    </div>



    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/b20.png" class="w-[436px]" />
        <h2 class="stroke title">The <span class="text-white">ramp</span> looks like a shape.<br />It is a
            <span class="text-white">simple machine</span> called an <span class="text-white">inclined plane</span>.
        </h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Mission:<br />Let’s follow the instructions to build two cars and a launcher.</h2>
        <p class="note">Note: Divide children into groups and give each group 3 sets of building bricks.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Build the first car.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/b23.png" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a> for the guide.</p>
    </div>



    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Make sure you have all these parts to build the first car.</h2>
        <img src="{{ asset('assets/images/N2/b24.png') }}" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 1 of 4</h2>
        <img src="{{ asset('assets/images/N2/b25.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 2 of 4</h2>
        <img src="{{ asset('assets/images/N2/b8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 7 of 9</h2>
        <img src="{{ asset('assets/images/N2/b26.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 3 of 4</h2>
        <img src="{{ asset('assets/images/N2/b27.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 4 of 4</h2>
        <img src="{{ asset('assets/images/N2/b28.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build the second car.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/bcar2.png" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a> for the guide.</p>
    </div>


    {{-- sldie 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Make sure you have all these parts to build the second car.</h2>
        <img src="{{ asset('assets/images/N2/sparts.png') }}" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>



    {{-- sldie 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 1 of 6</h2>
        <img src="{{ asset('assets/images/N2/b3.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 2 of 6</h2>
        <img src="{{ asset('assets/images/N2/b4.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slid3 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 3 of 6</h2>
        <img src="{{ asset('assets/images/N2/b5.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>
    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 4 of 6</h2>
        <img src="{{ asset('assets/images/N2/b6.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 19  --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 5 of 6</h2>
        <img src="{{ asset('assets/images/N2/b7.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 20  --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 6 of 6</h2>
        <img src="{{ asset('assets/images/N2/b8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Build a launcher.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/bcar2.png" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a> for the guide.</p>
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Make sure you have all these parts to build a launcher.</h2>
        <img src="{{ asset('assets/images/N2/launcher.png') }}" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the a launcher? - Step 1 of 3</h2>
        <img src="{{ asset('assets/images/N2/l1.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the a launcher? - Step 2 of 3</h2>
        <img src="{{ asset('assets/images/N2/l2.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do we build the a launcher? - Step 3 of 3</h2>
        <img src="{{ asset('assets/images/N2/l3.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/l4.png" />
        <h2 class="stroke title">See how we can use a launcher to push a car forward.</h2>
        <p class="note">Note: Demo to show children how to use the launcher. Have them practice using it in their groups.
        </p>
    </div>


    {{-- slide  27 --}}
    <div class="flex flex-col  slide hidden">

        <h2 class="title storke !text-white">Hands-on Time 2</h2>
        <div class="text-start">

            <h2 class="title storke">Mission: <br>
                Let’s use the launcher to push the two cars up an inclined plane to see how easy or difficult to do so.</h2>
        </div>
        <p class="note">Note: Have children work in groups to complete the mission.</p>
    </div>


    {{-- slide 28 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Use the launcher to push the first car up an inclined plane to see how easy or difficult to do so.
                </li>
            </ul>
        </div>
        <img src="/assets/images/N2/b29.png" class="w-[436px]" />
        <p class="note">Note: Have children take turns to try the step.</p>
    </div>

    {{-- slide 29 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Use the launcher to push the second car up the same inclined plane to see how easy or difficult to do
                    so.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/b29.png" class="w-[436px]" />
        <p class="note">Note: Have children take turns to try the step.</p>
    </div>


    {{-- slide 30 --}}
    <div class="flex flex-col  slide hidden">

        <h2 class="title storke">Based on your experience. which car is easier to move up the inclined plane: first or
            second? Why? What do you find out from the test?</h2>
        <p class="note">Note: Encourage children to share their hands-on experiences and views.Guide them to conclude in
            the end - a strong push is needed to make a big/heavy car move up an inclined plane.</p>
    </div>


    {{-- slide 31 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="stroke title"><span class="text-white">Inclined planes</span> are around us.<br />Let’s see if you can
            find them!</h2>
    </div>


    {{-- slide 32  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b30.png" />
        <h2 class="stroke title">What is this? Where is the <span class="text-white">inclined plane</span>?</h2>
        <p class="note"> Note: Guide children to name and point out the inclined plane.</p>
    </div>


    {{-- slide 33 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b30.png" />
        <h2 class="stroke title">This <span class="text-white">inclined plane</span> lets us move down the
            slide<br />smoothly during play.</h2>
    </div>


    {{-- slide 34 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b31.png" />
        <h2 class="stroke title">What is this? Where is the <span class="text-white">inclined plane</span>?</h2>
        <p class="note"> Note: Guide children to name and point out the inclined plane.</p>
    </div>


    {{-- slide 35 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b31.png" />
        <h2 class="stroke title">This <span class="text-white">inclined plane</span> lets us move passengers
            in<br />wheelchairs up or down a bus easily.</h2>
    </div>


    {{-- slide 36 --}}

    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b32.png" />
        <h2 class="stroke title">What is this? Where is the <span class="text-white">inclined plane</span>?</h2>
        <p class="note"> Note: Guide children to name and point out the inclined plane.</p>
    </div>


    {{-- slide 37 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/b32.png" />
        <h2 class="stroke title">This <span class="text-white">inclined plane</span> lets us move heavy things up or
            down<br />a truck easily.</h2>
    </div>





    {{-- ===================== --}}
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
                    window.location.href = "{{ route('PushSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
