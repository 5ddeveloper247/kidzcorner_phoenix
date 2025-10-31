@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Coding Challenge (3)</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge3/ch1.png" />
        <h2 class="title stroke">Children, do you know how to spell your name?</h2>
        <p class="note">Note: Have children spell their names.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/challenge3/ch1.png" />
        <h2 class="title stroke">Do you know how to spell the names of your friends?</h2>
        <p class="note">Note: Have children try yo spell the name of a friend sitting next to them.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/challenge3/ch1.png" />
        <h2 class="text-center title stroke">Let’s play a coding game with names! <br>
            Can you plan a route for a robot to spell out a name?</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh] ">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Plan a route for a robot to spell out a name. Use Blockly to
            programme the robot to move according to the planned route.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission <br>
            by programming a robot to spell out their own name or a group member's name.</p>
    </div>



    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. Whose name do you want the robot to spell out? Write it in
                your learning journal.</li>
        </ol>
        <img src="{{ asset('/assets/images//K1/coding/challenge3/ch2.png') }}" />
        <p class="note text-center">Note: Guide children to create short form or only use initials for names that are long.
        </p>
    </div>



    {{-- Slide 6  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. Let your friends place the letters on the mat randomly.</li>
        </ol>
        <img src="{{ asset('/assets/images//K1/coding/challenge3/ch3.png') }}" class="!w-[17vw] !h-[30vh]" />
        <p class="note text-center">Note: Have other group members help to set up the mat. Remind them to fix a starting
            point too.</p>
    </div>


    {{-- Slide 7  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3.How do you plan the route? Plot your plan in the learning journal.</li>
        </ol>
        <img src="{{ asset('/assets/images//K1/coding/challenge3/ch3.png') }}" class="!w-[17vw] !h-[30vh]" />
        <p class="note text-center">Note: Have children copy the arrangement of letters in their learning journal and plan a
            route by drawing arrows.</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Use coding cards to lay out the steps needed for a robot to
                move according to the planned route and spell the name.</li>
        </ol>
        <div class="flex items-center gap-[1.5vw]">
            <img src="{{ asset('/assets/images//K1/coding/challenge3/ch3.png') }}" class="!w-[17vw] !h-[28vh]" />
            <div class="flex flex-col items-start ">
                <div class="flex items-center ">
                    <img src="/assets/images//K1/coding/challenge1/ch5.png" class="!w-[5vw]" />
                    <img src="/assets/images//K1/coding/challenge1/ch4.png" />
                    <img src="/assets/images//K1/coding/challenge1/ch6.png" class="!w-[2vw]" />
                </div>
                <img src="/assets/images//K1/coding/challenge1/ch7.png" />
            </div>
        </div>
        <p class="note text-center">Note: Have children lay out the steps in their learning journal. Check the steps and
            advise if incorrect.</p>
    </div>


    {{-- Slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>5. Use Blockly to programme a robot to move according to the
                planned route and spell the name.</li>
        </ol>
        <div class="flex items-center gap-[1.5vw]">
            <img src="{{ asset('/assets/images//K1/coding/challenge3/ch3.png') }}" class="!w-[17vw] !h-[30vh]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="!w-[18vw]" />
        </div>
        <p class="note text-center">Note: Have children work out the programming steps in Blockly and show their answer to
            the teacher.</p>
    </div>


    {{-- sldie 10 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the arrangement of letters on your coding mat? Plot them here. Where is the
                starting point of the robot? How do you plan the route to spell the name? Draw arrows.</p>
            <div class="flex items-center ">
                <p>What is the name you want the <br> robot to spell out?
                    <br>
                    <br>
                    _______________________________
                </p>
                <img src="/assets/images/K1/coding/challenge3/ch4.png" class="!w-[14vw]" />
            </div>
        </div>
    </div>

    {{-- sldie 11 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move according to the planned route and spell the name?
                Use coding cards to lay out the steps.</p>
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
                    window.location.href = "{{ route('challenge3Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('challenge3Selection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
