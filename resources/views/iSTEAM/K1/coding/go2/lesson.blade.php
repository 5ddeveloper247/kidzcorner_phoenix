@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-20 ">
        <h2 class="title stroke">
            Children, do you remember what <span class="text-white">distance</span> is? What is a <span
                class="text-white">circuit</span>?</h2>
        <p class="note">Note: Encourage children to recall and share what they have learnt.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col justify-center gap-20 items-center ">
        <img src="/assets/images/K1/coding/go/g0.png" />
        <h2 class="title stroke text-center">Distance is a length of space between two points.</h2>
        <p class="note">Note: Have children use 2 things in the class to show long and short distances.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/go/G1.png" />
        <h2 class="title stroke">A <span class="text-white">circuit</span> is a track or path. <br>
            It can be straight, curved or in any shape.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class=" title stroke">Do you remember how to programme a robot
            to move through a straight circuit?</h2>
        <p class="note">Note: Invite children to sing “Hokey Pokey’ song and do actions together.</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/G2.png" />
        <h2 class=" title stroke">Let’s watch a video!</h2>
        <p class="note">Note: At the end, have children recap the steps involved to programmed a robot to move
            forward 50cm and 90cm.</p>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go16.png" />
        <h2 class=" title stroke">This is how we programme a robot to move through
            a 50cm straight circuit.</h2>
        <p class="note">Note: Select Drive>place programming block of Forward>turn on the programme so that
            the robot moves accordingly.</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go17.png" />
        <h2 class=" title stroke">This is how we programme a robot to move through 90cm
            straight circuit.</h2>
        <p class="note">Note: Select Drive>place programming block of Forward>select Forward> Change distance to 90cm>
            turn on the programme so that the robot moves accordingly.</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class=" title stroke">Now, we are going to learn how to programme a robot
            to move through a circuit that needs a turn.</h2>
    </div>




    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go27.png" />
        <h2 class=" title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go28.png" />
        <h2 class=" title stroke">How does the robot move through this L-shaped circuit?</h2>
        <p class="note">Note: Encourage children to share based on the clues provided (the arrows).</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go28.png" />
        <h2 class="title stroke"> It will move <span class="text-white">forward</span> 50cm, <span class="text-white">turn
                left</span> and move <span class="text-white">forward</span> another 50cm.
        </h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go29.png" />
        <h2 class="title stroke"> It will move forward 50cm, turn left and move
            forward another 50cm.</h2>
        <p class="note">Note: Encourage children to share based on the clues provided (the coding cards).</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go30.png" />
        <h2 class="title stroke">Note: Encourage children to share based on the clues provided (the coding cards).</h2>
        <p class="note">Note: Select Drive>place programming block of Forward>select Drive>place programming block of
            Turn Left>select Drive>place programming block of Forward>turn on the programme so
            that the robot moves accordingly.</p>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use Blockly to programme a robot to move through a L-shaped circuit.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>




    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-5  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="list-decimal">
                <li>Use coding cards to lay out the steps needed for a
                    robot to move through this circuit.</li>
            </ul>
        </div>
        <div class="flex gap-5 items-center">
            <img src="/assets/images/K1/coding/go/go28.png" class="w-[400px]" />
            <img src="/assets/images/K1/coding/go/go31.png" class="w-[300px] h-[200px]" />
        </div>
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>



    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-5  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Turn on a robot and make sure that Blockly finds the robot.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go32.png" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot)</p>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Programme the robot to move through this circuit.</li>
            </ul>
        </div>
        <div class="flex gap-5 items-start">
            <img src="/assets/images/K1/coding/go/go28.png" class="w-[400px]" />
            <div class="flex flex-col items-end gap-y-10">
                <img src="/assets/images/K1/coding/go/go31.png" class="w-[300px] h-[200px]" />
                <a class="w-56 cursor-pointer bg-sky-500 rounded-[30px] p-[25px] text-white">Visual Guide</a>
            </div>
        </div>
        <p class="note text-center">Note: Select Drive>place programming block of Forward>select Drive>place programming
            block of Turn Left>select Drive>place programming block of Forward>turn on the
            programme so that the robot moves accordingly.</p>
    </div>

    {{-- click slide --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <img src="/assets/images/K1/coding/go/go33.png" />
        <p class="note text-center">Note: Select Drive>place programming block of Forward>select Drive>place programming
            block of
            Turn Left>select Drive>place programming block of Forward>turn on the
            programme so that the robot moves accordingly.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/go/go34.png" />
        <h2 class=" title stroke">Let’s watch another video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Choose a circuit. How does a robot move through this circuit?
            Use coding cards to lay out the steps. Use Blockly to
            programme the robot to move through the circuit.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>




    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Choose a circuit.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go35.png" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Use coding cards to lay out the steps needed for a
                    robot to move through it.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go36.png" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Turn on a robot and make sure that Blockly finds the robot.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go32.png" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot)</p>
    </div>


{{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. Programme the robot to move through the circuit./li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go35.png" />
        <p class="note text-center">Note: Repeat the steps so that all children will be able to programme all 3 circuits.</p>
    </div>


    {{-- slide 20--}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
                   <img src="/assets/images/K1/coding/go/go37.png" />

        </div>
    </div>


    



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton ">
                        <img src="{{ asset('assets/images/pptimages/return.png') }}" />

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
                    window.location.href = "{{ route('go2Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
