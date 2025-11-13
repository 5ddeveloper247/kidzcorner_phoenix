@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Coding Challenge (4)</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images/K1/coding/challenge4/ch1.png" class="w-img" />
            <img src="/assets/images/K1/coding/challenge4/ch2.png" class="!w-[13vw]" />
        </div>
        <h2 class="title stroke">Children, what are these? Have you seen these before?</h2>
        <p class="note">Note: Have children discuss where they have seen these being used before.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge4/ch3.png" />
        <h2 class="title stroke">What about this? What is this for?</h2>
        <p class="note">Note: Have children discuss the uses of a map.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images/K1/coding/challenge4/ch4.png" class="w-img" />
            <img src="/assets/images/K1/coding/challenge4/ch3.png" class="w-img" />
        </div>
        <h2 class="text-center title stroke">These are maps. A map is a drawing of a place. It shows us 
            the surroundings of a place. What do you see from these maps?</h2>
    </div>


    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge4/ch3.png" />
        <h2 class="title stroke">We can use a map to help us find directions to reach a destination.</h2>
    </div>


    {{-- slide 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-end">
            <div class="flex">
                <p class="note">Home </p>
                <img src="/assets/images/K1/coding/challenge4/ch5.png" />

            </div>
            <img src="/assets/images/K1/coding/challenge4/ch3.png" />
        </div>
        <h2 class="title stroke">We can use a map to help us find directions to reach a destination.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh] ">
        <h2 class="title stroke">Is it easy or difficult to find directions and plan a route
            from a map? Let's find out!</h2>
        <p class="note">Note: Have children share their views and feelings if they have ever used a map to find
            directions.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge4/ch6.png" />
        <h2 class="title stroke">Faith, Simon, Mimi and Billy are good friends.
            They always play together.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge4/ch7.png" />
        <h2 class="title stroke">It’s Billy’s birthday today! <br>
            He has invited all his friends to his birthday party.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge4/ch8.png" />
        <h2 class="title stroke">Faith is going to meet her friends one by one. <br>
            They promised to go to Billy’s house together.</h2>
    </div>



    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge4/ch9.png" />
        <h2 class="title stroke">Faith is going to use this map to plan her route. <br>
            Can you help her?</h2>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Hands-on Time </h2>
        <h2 class="text-start title stroke">Mission: <br>
            Help Faith to plan a route to meet up with her friends to go
            to Billy's house together. Use Blockly to programme a robot to move according to the planned route.</h2>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the mission.</p>
    </div>


    {{-- Slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. How do you plan the route for Faith? Draw arrows to show
                the route in your learning journal.</li>
        </ol>
        <div class="flex items-center ">
            <img src="/assets/images//K1/coding/challenge4/ch8.png" />
            <img src="/assets/images//K1/coding/challenge4/ch9.png" class="w-img" />
        </div>
        <p class="note text-center">Note: Have children plan a route by drawing arrows in their learning journal.
        </p>
    </div>



    {{-- Slide 13  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. What would Faith and her friends say when they meet?</li>
        </ol>
        <img src="/assets/images//K1/coding/challenge4/ch10.png" class="w-img" />
        <p class="note text-center">Note: Encourage children to discuss in groups and think of what sound to add in.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. Use coding cards to lay out the steps needed for a robot to move according to the planned route.</li>
        </ol>
        <div class="flex items-end gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge4/ch9.png" class="w-img" />
            <img src="/assets/images//K1/coding/challenge4/ch11.png"  />
        </div>
        <p class="note text-center">Note: Have children lay out the steps in their learning journal. Check the steps and
            advise if incorrect.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Use Blockly to programme a robot to move according to
                the planned route.</li>
        </ol>
        <div class="flex items-center gap-[1vw]">
            <img src="/assets/images//K1/coding/challenge4/ch9.png" class="w-[18vw]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[18vw]" />
        </div>

        <p class="note text-center">Note: Have children decide a route and work in groups to work out the programming steps
            in
            Blockly.
            After that, have the groups take turns to show their plan to the class.</p>
    </div>



    {{-- sldie 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-start ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-[1.5vw] justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How do you plan the route for Faith? Draw arrows to show the route.</p>
            <div class="flex items-center ">
                <img src="/assets/images/K1/coding/challenge4/ch12.png" />
            </div>
        </div>
    </div>

    {{-- sldie 17 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move according to the planned route? Use coding cards to
                lay out the steps.</p>
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
                    window.location.href = "{{ route('challenge4Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('challenge4Selection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
