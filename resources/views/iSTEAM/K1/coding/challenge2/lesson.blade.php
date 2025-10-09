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
        <img src="/assets/images/K1/coding/challenge2/ch1.png" />
        <h2 class="title stroke">Children, what are these?</h2>
        <p class="note">Note: Have children name the different shapes and talk about the characteristics of each.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge2/ch2.png" />
        <h2 class="title stroke">We’ll use these shapes to play a coding game today! <br>
            Are you ready?</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/challenge2/ch3.png" />
        <h2 class="text-center title stroke">The robot is going on a shape hunt.
            Can you plan a route for it to hunt for all the shapes?</h2>
        <p class="note">Note: If needed, reduce the number of coloured shapes on the mat to adjust the level of
            difficulty.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Plan a route for a robot to hunt for all the shapes. Use <br>
            Blockly to programme the robot to move according to the
            planned route.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>



    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1.What is the arrangement of shapes on your coding mat?
                Plot them in your learning journal.</li>
        </ol>
        <img src="/assets/images//K1/coding/challenge2/ch4.png" />
        <p class="note text-center">Note: Have children copy the arrangement of shapes in their learning journal.</p>
    </div>



    {{-- Slide 6  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. How do you plan the route? Draw arrows to show the route
                in your learning journal.</li>
        </ol>
        <img src="/assets/images//K1/coding/challenge2/ch4.png" />
        <p class="note text-center">Note: Have children copy the arrangement of shapes in their learning journal.</p>
    </div>


    {{-- Slide 7  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3.Use coding cards to lay out the steps needed for a robot to
                move according to the planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge2/ch4.png" />
            <div class="flex flex-col items-start gap-5">
                <div class="flex items-center gap-5">
                    <img src="/assets/images//K1/coding/challenge1/ch5.png" />
                    <img src="/assets/images//K1/coding/challenge1/ch4.png" />
                    <img src="/assets/images//K1/coding/challenge1/ch6.png" />
                </div>
                <img src="/assets/images//K1/coding/challenge1/ch7.png" />
            </div>
        </div>
        <p class="note text-center">Note: Have children lay out the steps on the floor. Check the steps and advise if
            incorrect.</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Use Blockly to programme a robot to move according to the
                planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge2/ch4.png" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" />
        </div>
        <p class="note text-center">Note: Have children work out the programming steps in Blockly and show the rest.</p>
    </div>


    {{-- Slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>5. The robot will name each shape it finds. How do you add in
                the sound?</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge2/ch4.png" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" />
        </div>
        <p class="note text-center">Note: Remind children that they need to first record the names of different shapes and
            then think of where <br>
            to insert the programming block of each sound into their programme (what is the order of steps).</p>
    </div>

    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images//K1/coding/challenge2/ch5.png" />
        <h2 class="title stroke">The robot is going to hunt the shapes based on an order of
            colours. Can you plan a new route for it?</h2>
        <p class="note">Note: If needed, reduce the number of coloured shapes on the mat to adjust the level of
            difficulty.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Plan a new route for a robot to hunt for all shapes. Use Blockly
            to programme the robot to move according to the planned route.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1.What is the arrangement of shapes on your coding mat? Plot them in your learning journal.</li>
        </ol>
        <img src="/assets/images/K1/coding/challenge2/ch4.png" />
        <p class="note text-center">Note: Have children copy the arrangement of shapes in their learning journal.</p>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. What is the hunting order based on colours? Record them in your learning journal.</li>
        </ol>
        <img src="/assets/images/K1/coding/challenge2/ch6.png" />
        <p class="note text-center">Note: Tell children the shape hunting order based on colours and have them record the
            order in the learning journal.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. How do you plan the route? Draw arrows to show the route
                in your learning journal.</li>
        </ol>
        <img src="/assets/images//K1/coding/challenge2/ch7.png" />
        <p class="note text-center">Note: Have children plan a route by drawing arrows in their learning journal.</p>
    </div>



    {{-- Slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Use coding cards to lay out the steps needed for a robot to
                move according to the planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge2/ch8.png" />
            <div class="flex flex-col items-start gap-5">
                <div class="flex items-center gap-5">
                    <img src="/assets/images//K1/coding/challenge1/ch5.png" />
                    <img src="/assets/images//K1/coding/challenge1/ch4.png" />
                    <img src="/assets/images//K1/coding/challenge1/ch6.png" />
                </div>
                <img src="/assets/images//K1/coding/challenge1/ch7.png" />
            </div>
        </div>
        <p class="note text-center">Note: Have children lay out the steps in their learning journal. Check the steps and
            advise if incorrect.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>5. Use Blockly to programme a robot to move according to
                the planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge2/ch8.png"class="w-[500px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png"class="w-[500px]" />
        </div>
        <p class="note text-center">Note: Have children decide a route and work in groups to work out the programming steps
            in Blockly.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>6. Add in the sound and light each time the robot finds a coloured shape.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge2/ch8.png" class="w-[500px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>
        <p class="note text-center">Note: Remind children that they need to first record the names of different coloured
            shapes and then think of where to insert the programming block of each sound and light into their programme
            (what is the order of steps).</p>
    </div>


    {{-- sldie 18 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the arrangement of colours on your coding mat? Plot them here. How do you plan
                the route for a robot to hunt for all the shapes? Draw arrows to show the route.</p>
            <img src="/assets/images/K1/coding/challenge1/ch2.png" />
        </div>
    </div>

    {{-- sldie 19 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move according to the planned route? Use coding cards to
                lay out the steps.</p>
        </div>
    </div>

    {{-- slide 20  --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-center items-center gap-10"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the arrangement of shapes on your coding mat? Plot them here. What is the
                hunting order based on colours? Record them. How do you plan the route for a robot to
                hunt for all the shapes? Draw arrows to show the route.</p>
            <div class="flex items-center gap-5">
                <div class="justify-start ">What is the hunting order<br />based
                    on colours?<br /> 1 - <br /> 2 - <br /> 3 - </div>
                <img src="/assets/images/K1/coding/challenge1/ch2.png" class="w-[400px]" />
            </div>
        </div>
    </div>

















    {{-- ====================================== --}}
    {{-- Buttons --}}
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
                    window.location.href = "{{ route('challenge2Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
