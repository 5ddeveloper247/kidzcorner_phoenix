@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Coding Challenge (5)</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge1/ch3.png" />
        <h2 class="title stroke">Children, do you remember this coding activity of finding
            colours? What did you do?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
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
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge5/ch2.png" />
        <h2 class="title stroke">Through this activity, we know that many routes can be <br>
            planned for a robot to complete the same mission.</h2>
    </div>



    {{-- slide 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke">Now, let's find out how to plan routes and carry out a test 
            to decide the most efficient route <br>
            for a robot to complete a mission!</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time </h2>
        <h2 class="text-start title stroke">Mission: <br>
            Plan routes for a robot to find all the cats as soon as possible.
            Use Blockly to programme the robot to move according to
            each planned route. Use a stopwatch to test and record how
            long it takes for a robot to complete each route. Lastly,
            decide the most efficient route for a robot to complete the
            mission.</h2>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the mission. <br>
            Tell them that the speed will not be adjusted for the accuracy of the test results.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
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
        <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
        <p class="note text-center">Note: Have each child in the group plan 1 or 2 routes using the learning journals. </p>
    </div>



    {{-- Slide 9  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. Use coding cards to lay out the steps needed for a robot to
                move according to each planned route.</li>
        </ol>
        <div class="flex items-end ">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge4/ch11.png" class="!w-[15vw]" />
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
        <div class="flex items-end ">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge4/ch11.png" class="!w-[15vw]" />
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
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[15vw]" />
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
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[15vw]" />
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
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[15vw]" />
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
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[15vw]" />
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
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[15vw]" />
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
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[15vw]" />
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
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[15vw]" />
        </div>

        <p class="note text-center">Note: Have the groups take turns to show their findings to the class. After that, guide
            children to conclude which route is the most efficient for a robot to complete the mission in the class.</p>
    </div>



    {{-- sldie 18 --}}
    <div class="slide  hidden flex flex-col items-center justify-start ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col gap-[1vw] justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">How do you plan the route for a robot to find all the cats as soon as possible? <br>
                Draw arrows to show the route.</p>
            <img src="/assets/images/K1/coding/challenge5/ch3.png" class="!w-[15vw]" />
        </div>
    </div>

    {{-- sldie 19 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">How does a robot move according to the planned route? <br>
                Use coding cards to lay out the steps.</p>
        </div>
    </div>


    {{-- sldie 20 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col gap-[1vw] justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">How long does it take for a robot to complete each planned route? <br>
                Record the results in the table.</p>
            <img src="/assets/images/K1/coding/challenge5/ch4.png" class="!w-[15vw]" />
        </div>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">

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
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('challenge5Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('challenge5Selection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
