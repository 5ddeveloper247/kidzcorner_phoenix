@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs1.png" />
        <h2 class="title stroke">Children, do you remember what a circuit is?
            What are the names of these circuits?</h2>
        <p class="note">Note: Encourage children to recall and share what they have learnt (a track/path)</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex items-center justify-center">
        <h2 class="title stroke">We are going to learn how to programme a robot <br>
            to move at different speeds today, <br>
            so we’ll first find out what speed is!</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs2.png" />
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Have children follow through the lesson. At the end, have them recap what speed is.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs3.png" />
        <h2 class="title stroke">Speed is a rate that tells us how fast or slow
            someone or something is moving.</h2>
    </div>


    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs4.png" />
        <h2 class="title stroke">Let’s watch another video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs5.png" />
        <h2 class="title stroke">When two robots move through the same distance with different <span
                class="text-white">speeds</span>, the one moving at a high <span class="text-white">speed</span> will reach
            the ending point faster than the other one moving at a low <span class="text-white">speed</span>.
        </h2>
    </div>



    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs6.png" />
        <h2 class="title stroke">Now, let’s see how to programme a robot
            to move at different speeds!</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs7.png" />
        <h2 class="title stroke">How do you programme a robot to move 50cm at a higher speed?</h2>
        <p class="note">Note: Encourage children to share based on the clues (select Drive>place programming block of
            Forward>select Forward>change to a higher speed>turn on the programme so that the robot moves accordingly).</p>
    </div>



    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/fast/fs8.png" class="w-[500px]" />
        <h2 class="title stroke">How many choices of speed are there in Blockly?</h2>
    </div>



    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/coding/fast/fs9.png" />
        <h2 class="title stroke">Let’s watch another video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use Blockly to programme a robot to move through the circuit with different speeds.</h2>
        <p class="note text-center">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>1. Use coding cards to lay out the steps needed for a robot
                to move through this circuit.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs10.png" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>2. Turn on a robot and make sure that Blockly finds the robot.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs11.png" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot).</p>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>3. Programme the robot to move through this circuit with different speeds.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs10.png" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>

    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Design a circuit with measuring strips. Use Blockly to programme
            a robot to move through the circuit with different speeds.
            At the end, show and tell about your circuit.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>1. Design a circuit with measuring strips.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs12.png" />
        <p class="note text-center">Note: Let children design the circuit using the Learning Journal before laying the
            actual one on the floor.
            Guide them to alter their design if it's too complicated or requires more
            advance programming skills that they have yet learnt.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>2. Use coding cards to lay out the steps needed for a robot to move through your circuit.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs13.png" />
        <p class="note text-center">Note: Let children use the Learning Journal to lay out the steps.
            Check on the steps for each group and advice them to change if incorrect.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>3. Turn on a robot and make sure that Blockly finds the robot.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs11.png" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot).</p>
    </div>



    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>4. Programme the robot to move through your circuit wit different speeds.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs13.png" />
        <p class="note text-center">Note: Check on the program in Blockly for each group and advice them to change if
            incorrect.</p>
    </div>




    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class=" title stroke">Steps:</h2>
        <ol class="title stroke">
            <li>5. Show and tell about your circuit.</li>
        </ol>
        <img src="/assets/images//K1/coding/fast/fs13.png" />
    </div>



    {{-- slide 19 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Design a circuit. Use measuring strips to form it.</p>
        </div>
    </div>



    {{-- slide 20 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move through the circuit? Use coding cards to lay out the steps.</p>
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
                window.location.href = "{{ route('YourRouteNameHere') }}";
            } else {
                //   Previous slide pe jao
                currentSlide--;
                showSlide(currentSlide);
            }
        });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('fastSelection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
