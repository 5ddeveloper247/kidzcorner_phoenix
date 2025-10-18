@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge1/ch3.png" />
        <h2 class="title stroke">Children, do you remember this coding activity of finding
            colours? What did you do?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge5/ch1.png" />
        <h2 class="title stroke">You planned a route for a robot to find all the colours. <br>
            You also used Blockly to programme the robot to move <br>
            according to the planned route.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-5">
        <img src="/assets/images/K1/coding/challenge5/ch2.png" />
        <h2 class="text-center title stroke">THow many different routes did you plan for a robot
            to complete this mission?</h2>
        <p class="note">Note: Have children display their learning journals (from Lesson 6) and compare
            the routes to find out the answer.</p>
    </div>


    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge5/ch2.png" />
        <h2 class="title stroke">Through this activity, we know that many routes can be <br>
            planned for a robot to complete the same mission.</h2>
    </div>



    {{-- slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Now, let's find out how to plan routes and carry out a test <br>
            to decide the most efficient route <br>
            for a robot to complete a mission!</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time </h2>
        <h2 class="text-start title stroke">Mission: <br>
            Plan routes for a robot to find all the cats as soon as possible. <br>
            Use Blockly to programme the robot to move according to <br>
            each planned route. Use a stopwatch to test and record how <br>
            long it takes for a robot to complete each route. Lastly,
            decide the most efficient route for a robot to complete the
            mission.</h2>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the mission. <br>
            Tell them that the speed will not be adjusted for the accuracy of the test results.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge4/ch6.png" />
        <h2 class="title stroke">Faith, Simon, Mimi and Billy are good friends.
            They always play together.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. How do you plan the route for a robot to find all the cats
                as soon as possible? How many routes can you plan?</li>
        </ol>
        <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[500px]" />
        <p class="note text-center">Note: Have each child in the group plan 1 or 2 routes using the learning journals. </p>
    </div>



    {{-- Slide 9  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. Use coding cards to lay out the steps needed for a robot to
                move according to each planned route.</li>
        </ol>
        <div class="flex items-end gap-5">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge4/ch11.png" class="w-[400px]" />
        </div>
        <p class="note text-center">Note: Have children lay out the steps in their learning journals. Check the steps and
            advise if incorrect.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. Compare the routes and decide which three you want to
                keep for the efficient test.</li>
        </ol>
        <div class="flex items-end gap-5">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge4/ch11.png" class="w-[400px]" />
        </div>
        <p class="note text-center">Note: Have children compare the steps needed for each route (the learning journals) and
            decide from there.</p>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Use Blockly to programme a robot to move according to the
                first planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have children work in groups to work out the programming steps in Blockly..</p>
    </div>



    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>5. Use a stopwatch to test and record how long it takes for a
                robot to complete the first planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have children turn the programme on and start a stopwatch at the same time; stop
            the stopwatch when the programme ends; record the time taken to run the programme in the learning journal.</p>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>6. Use Blockly to programme a robot to move according to the
                second planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have children work in groups to work out the programming steps in Blockly.</p>
    </div>


    {{-- sldie 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>7. Use a stopwatch to test and record how long it takes for a
                robot to complete the second planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have children turn the programme on and start a stopwatch at the same time; stop
            the stopwatch when the programme ends; record the time taken to run the programme in the learning journal.</p>
    </div>



    {{-- sldie 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>8. Use Blockly to programme a robot to move according to the
                third planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have children work in groups to work out the programming steps in Blockly.</p>
    </div>

    {{-- sldie 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>9. Use a stopwatch to test and record how long it takes for a
                robot to complete the third planned route.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have children turn the programme on and start a stopwatch at the same time; stop
            the stopwatch when the programme ends; record the time taken to run the programme in the learning journal.</p>
    </div>


    {{-- sldie 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>10. Which is the most efficient route for a robot to find all
                the cats? Show it to the class.</li>
        </ol>
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have the groups take turns to show their findings to the class. After that, guide
            children to conclude which route is the most efficient for a robot to complete the mission in the class.</p>
    </div>



    {{-- sldie 18 --}}
    <div class="slide  hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col gap-10 justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">How do you plan the route for a robot to find all the cats as soon as possible? <br>
                Draw arrows to show the route.</p>
            <img src="/assets/images/K1/coding/challenge5/ch3.png" />
        </div>
    </div>

    {{-- sldie 19 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">How does a robot move according to the planned route? <br>
                Use coding cards to lay out the steps.</p>
        </div>
    </div>


    {{-- sldie 20 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col gap-10 justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">How long does it take for a robot to complete each planned route? <br>
                Record the results in the table.</p>
            <img src="/assets/images/K1/coding/challenge5/ch4.png" />
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
                    window.location.href = "{{ route('challenge5Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
