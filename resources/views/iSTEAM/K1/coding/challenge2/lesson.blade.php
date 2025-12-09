@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Coding Challenge (2)</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch1.png') }}" class="img-lg" />
        <h2 class="title stroke">Children, what are these?</h2>
        <p class="note">Note: Have children name the different shapes and talk about the characteristics of each.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch2.png') }}" class="img-lg" />
        <h2 class="title stroke">We'll use these shapes to play a coding game today! <br>Are you ready?</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch3.png') }}" class="img-h-md" />
        <h2 class="text-center title stroke">The robot is going on a shape hunt. Can you plan a route for it to hunt for all
            the shapes?</h2>
        <p class="note">Note: If needed, reduce the number of coloured shapes on the mat to adjust the level of
            difficulty.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>Plan a route for a robot to hunt for all the shapes. Use Blockly to
            programme the robot to move according to the planned route.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="1">
                <li>What is the arrangement of shapes on your coding mat? Plot them in your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch4.png') }}" class="!h-[20vw]" />
        <p class="note text-center">Note: Have children copy the arrangement of shapes in their learning journal.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="2">
                <li>How do you plan the route? Draw arrows to show the route in your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch4.png') }}" class="!h-[20vw]" />
        <p class="note text-center">Note: Have children copy the arrangement of shapes in their learning journal.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="3">
                <li>Use coding cards to lay out the steps needed for a robot to move according to the planned route.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/challenge2/ch4.png') }}" class="!h-[20vw]" />
            <div class="flex flex-col items-start gap-[1vw]">
                <div class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/K1/coding/challenge1/ch5.png') }}" class="!w-[6vw]" />
                    <img src="{{ asset('assets/images/K1/coding/challenge1/ch4.png') }}" class="!w-[2vw]"/>
                    <img src="{{ asset('assets/images/K1/coding/challenge1/ch6.png') }}" class="!w-[3vw]" />
                </div>
                <img src="{{ asset('assets/images/K1/coding/challenge1/ch7.png') }}" class="!w-[30vw]" />
            </div>
        </div>
        <p class="note text-center">Note: Have children lay out the steps on the floor. Check the steps and advise if
            incorrect.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="4">
                <li>Use Blockly to programme a robot to move according to the planned route.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/challenge2/ch4.png') }}" class="!h-[20vw]" />
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch8.png') }}" class="!h-[20vw]" />
        </div>
        <p class="note text-center">Note: Have children work out the programming steps in Blockly and show the rest.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start !gap-[1vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="5">
                <li>The robot will name each shape it finds. How do you add in the sound?</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/challenge2/ch4.png') }}" class="img-xs" />
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch8.png') }}" class="!h-[20vw]" />
        </div>
        <p class="note text-center">Note: Remind children that they need to first record the names of different shapes and
            then think of where to insert the programming block of each sound into their programme (what is the order of
            steps).</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch5.png') }}" class="img-md" />
        <h2 class="title stroke">The robot is going to hunt the shapes based on an order of colours. Can you plan a new
            route for it?</h2>
        <p class="note">Note: If needed, reduce the number of coloured shapes on the mat to adjust the level of
            difficulty.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Hands-on Time 2</h2>
        <h2 class="text-start title stroke">Mission: <br>Plan a new route for a robot to hunt for all shapes. Use Blockly to
            programme the robot to move according to the planned route.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="1">
                <li>What is the arrangement of shapes on your coding mat? Plot them in your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch4.png') }}" class="!h-[20vw]" />
        <p class="note text-center">Note: Have children copy the arrangement of shapes in their learning journal.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="2">
                <li>What is the hunting order based on colours? Record them in your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch6.png') }}" class="img-md" />
        <p class="note text-center">Note: Tell children the shape hunting order based on colours and have them record the
            order in the learning journal.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="3">
                <li>How do you plan the route? Draw arrows to show the route in your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch7.png') }}" class="img-md" />
        <p class="note text-center">Note: Have children plan a route by drawing arrows in their learning journal.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="4">
                <li>Use coding cards to lay out the steps needed for a robot to move according to the planned route.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/challenge2/ch8.png') }}" class="img-md" />
            <div class="flex flex-col items-start gap-[1vw]">
                <div class="flex items-center gap-[1vw]">
                    <img src="{{ asset('assets/images/K1/coding/challenge1/ch5.png') }}" class="!w-[6vw]" />
                    <img src="{{ asset('assets/images/K1/coding/challenge1/ch4.png') }}" class="!w-[2vw]" />
                    <img src="{{ asset('assets/images/K1/coding/challenge1/ch6.png') }}" class="!w-[3vw]" />
                </div>
                <img src="{{ asset('assets/images/K1/coding/challenge1/ch7.png') }}" class="!w-[30vw]" />
            </div>
        </div>
        <p class="note text-center">Note: Have children lay out the steps in their learning journal. Check the steps and
            advise if incorrect.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[32vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="5">
                <li>Use Blockly to programme a robot to move according to the planned route.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/challenge2/ch8.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch8.png') }}" class="img-sm" />
        </div>
        <p class="note text-center">Note: Have children decide a route and work in groups to work out the programming steps
            in Blockly.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[32vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal stroke"start="6">
                <li>Add in the sound and light each time the robot finds a coloured shape.</li>
            </ol>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/challenge2/ch8.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch8.png') }}" class="img-h-xs" />
        </div>
        <p class="note text-center">Note: Remind children that they need to first record the names of different coloured
            shapes and then think of where to insert the programming block of each sound and light into their programme
            (what is the order of steps).</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the arrangement of colours on your coding mat? Plot them here. How do you plan the route for a robot
                to hunt for all the shapes? Draw arrows to show the route.</p>
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch2.png') }}" class="!h-[20vw]" />
        </div>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move according to the planned route? Use coding cards to lay out the steps.</p>
        </div>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col justify-center items-center gap-[1vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What is the arrangement of shapes on your coding mat? Plot them here. What is the hunting order based on
                colours? Record them. How do you plan the route for a robot to hunt for all the shapes? Draw arrows to show
                the route.</p>
            <div class="flex items-center gap-[1vw]">
                <div class="justify-start">What is the hunting order<br />based on colours?<br /> 1 - <br /> 2 - <br /> 3 -
                </div>
                <img src="{{ asset('assets/images/K1/coding/challenge1/ch2.png') }}"  class="!w-[17vw]" />
            </div>
        </div>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
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

    {{-- Next Button --}}
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
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    window.location.href = "{{ route('challenge2Selection') }}";
                } else {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('coding') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
