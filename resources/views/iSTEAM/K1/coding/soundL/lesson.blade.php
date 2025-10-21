@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/sound/s1.png" />
        <h2 class="title stroke">Children, what does the robot do?</h2>
        <p class="note">Note: Have children talk about what they see.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/sound/s1.png" />
        <h2 class="title stroke">The robot says “”Hi”” before moving forward.
            It says “”Ta-da”” before changing its eye pattern.</h2>

        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Do you know how to programme our robot to have sound?
            Let’s find out!</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/sound/s2.png" />
        <h2 class="title stroke">Tap on the Sound Command <br>
            for the choice of programming blocks.</h2>
        <p class="note">Note: Demo in class using a tablet and a robot. Guide children to name the different types of
            sound.</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-4">
            <img src="/assets/images/K1/coding/sound/s3.png" />
            <img src="/assets/images/K1/coding/sound/s5.png" />
            <img src="/assets/images/K1/coding/sound/s4.png" />
        </div>
        <h2 class="text-start title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of sounds.</h2>
        <p class="note">Note: Guide children to identify each type of sound by listening to the different choice of
            sounds.</p>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-4">
            <img src="/assets/images/K1/coding/sound/s6.png" />
            <img src="/assets/images/K1/coding/sound/s5.png" />
            <img src="/assets/images/K1/coding/sound/s7.png" />
        </div>
        <h2 class="text-start title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of sounds.</h2>
        <p class="note">Note: Guide children to identify each type of sound by listening to the different choice of
            sounds.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-4">
            <img src="/assets/images/K1/coding/sound/s8.png" />
            <img src="/assets/images/K1/coding/sound/s5.png" />
            <img src="/assets/images/K1/coding/sound/s9.png" />
        </div>
        <h2 class="text-start title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of sounds.</h2>
        <p class="note">Note: Guide children to identify each type of sound by listening to the different choice of
            sounds.</p>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-4">
            <img src="/assets/images/K1/coding/sound/s10.png" />
            <img src="/assets/images/K1/coding/sound/s5.png" />
            <img src="/assets/images/K1/coding/sound/s11.png" />
        </div>
        <h2 class="text-start title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of sounds.</h2>
        <p class="note">Note: Guide children to identify each type of sound by listening to the different choice of
            sounds.</p>
    </div>



    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/sound/s1.png" />
        <h2 class="text-start title stroke">What are the two sounds in the video? <br>
            Where can you find them in Blockly?</h2>
        <p class="note">Note: Encourage children to share what they have learnt; <br>
            turn to the last few pages to guide them find the answer.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-4">
            <img src="/assets/images/K1/coding/sound/s12.png" />
            <img src="/assets/images/K1/coding/sound/s5.png" />
            <img src="/assets/images/K1/coding/sound/s13.png" />
        </div>
        <h2 class="text-start title stroke">Both "Hi" and "Ta-da" can be found at the Sound Command,
            under the same type of sound named Say.</h2>
        <p class="note">Note: Show children how to find these two sounds.</p>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/coding/sound/s1.png" />
        <h2 class="text-start title stroke">What is the last act of the robot? <br>
            Let’s find out how to do so using Blockly!</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s14.png" />
        <h2 class="text-center title stroke">Tap on the Sound Command <br>
            for the choice of programming blocks.</h2>
        <p class="note text-center">Note: Demo in class using a tablet and a robot. Guide children to name the different
            types of light.</p>
    </div>



    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s15.png" />
        <h2 class="text-center title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of lights.</h2>
        <p class="note text-center">Note: *Run the programme to let children observe how each choice of light runs on a
            robot.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s16.png" />
        <h2 class="text-center title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of lights.</h2>
        <p class="note text-center">Note: *Run the programme to let children observe how each choice of light runs on a
            robot.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s17.png" />
        <h2 class="text-center title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of lights.</h2>
        <p class="note text-center">Note: *Run the programme to let children observe how each choice of light runs on a
            robot.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s18.png" />
        <h2 class="text-center title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of lights.</h2>
        <p class="note text-center">Note: *Run the programme to let children observe how each choice of light runs on a
            robot.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s19.png" />
        <h2 class="text-center title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of lights.</h2>
        <p class="note text-center">Note: *Run the programme to let children observe how each choice of light runs on a
            robot.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s20.png" />
        <h2 class="text-center title stroke">Tap, drag and place a programming block at the scripting area.
            Tap on that programming block for the choice of lights.</h2>
        <p class="note text-center">Note: *Run the programme to let children observe how each choice of light runs on a
            robot.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s21.png" />
        <h2 class="text-center title stroke">So, how do you make the robot change its eye pattern?</h2>
        <p class="note text-center">Note: Encourage children to share what they have learnt; <br>
            turn to the last few pages to guide them find the answer.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s22.png" />
        <h2 class="text-center title stroke">Tap on the Light Command. Tap, drag and place the
            programming block named Eye Pattern at the scripting area.</h2>
        <p class="note text-center">Note: Show children how to do the steps.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s20.png" />
        <h2 class="text-center title stroke">Tap on the Eye Pattern and design the pattern
            by tapping on the white parts.</h2>
        <p class="note text-center">Note: Show children how to do the steps.</p>
    </div>


    {{-- slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images//K1/coding/sound/s23.png" />
        <h2 class="text-center title stroke">Tap to close the panel. <br>
            Finally, tap to run the programme on the robot.</h2>
        <p class="note text-center">Note: Show children how to do the steps and have them see the effect on a robot.</p>
    </div>


    {{-- slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/coding/sound/s1.png" />
        <h2 class="text-center title stroke">Based on the video, can you work out <br>
            the programming steps of this robot?</h2>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use Blockly to work out the programming steps of a robot
            (as shown in the video on the last page).</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="title text-start stroke list-decimal">
            <h2>Steps:</h2>
            <li>What does the robot do? Use coding cards to lay out the steps.</li>
        </ol>
        <div class="flex items-center gap-5">
            <img src="/assets/images/K1/coding/sound/s24.png" class="w-[350px] h-[150px]" />
            <img src="/assets/images/K1/coding/sound/s25.png" />
        </div>
        <p class="note text-center">Note: Remind children that the robot says “”Hi”” before moving forward. It says
            “”Ta-da”” before changing its eye pattern.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="title stroke text-start">
            <h2>Steps:</h2>
            <li>2. Use Blockly to work out the programming steps and run the programme.</li>
        </ol>
        <div class="flex flex-col items-center gap-5">
            <img src="/assets/images/K1/coding/sound/s26.png" />
            <a class="w-44 h-16 bg-sky-500 text-white flex justify-center items-end rounded-[20px] p-[30px]">Answer</a>
        </div>
        <p class="note">Note: Remind children to use their layout of coding cards as guide to code.</p>
    </div>

    {{-- slide Click --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/coding/sound/s30.png" />
        <p class="note">Note: Select Sound>place programming block of Say>select Drive>place programming block of
            Forward> select Sound>place programming block of Say>select Say>choose the sound of Ta Da!>select Light>
            place programming block of Eye Pattern>select Eye Pattern>change the design of eye pattern>
            turn on the programme so that the robot moves accordingly.</p>
    </div>

    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Create a story and then use Blockly to programme a robot to move through a circuit.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- sldie 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="title text-start stroke list-decimal">
            <h2>Steps:</h2>
            <li>What happens to the robot? Create a story.</li>
        </ol>

        <img src="/assets/images/K1/coding/sound/s27.png" />
        <p class="note text-center">Note: Have children work in groups to create a story based on the pictorial circuit.
            After that, have the groups take turns to share the story with the class.</p>
    </div>


    {{-- sldie 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="title text-start stroke">
            <h2>Steps:</h2>
            <li>2. How does a robot moves through this circuit? Number the steps.</li>
        </ol>

        <img src="/assets/images/K1/coding/sound/s28.png" />
        <p class="note text-center">Note: Have children discuss in groups and label the steps (use the Learning Journal).
            No fix answer for the sequence of acts in between the circuit (e.g .: turn or sound first).</p>
    </div>


    {{-- sldie 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="title text-start stroke">
            <h2>Steps:</h2>
            <li>3. Use Blockly to work out the programming steps and run the programme.</li>
        </ol>
        <div class="flex items-center gap-5">
            <img src="/assets/images/K1/coding/sound/s27.png" class="w-[600px]" />
            <img src="/assets/images/K1/coding/sound/s29.png" class="w-[400px]" />
        </div>
        <p class="note text-center">Note: Have children work in groups to work out the programming steps in Blockly.
            After that, have the groups take turns to show their answer to the class.</p>
    </div>

    {{-- slide 29 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[436px] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move through this circuit? Number the steps.</p>
            <img src="/assets/images/K1/coding/sound/s28.png" />
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
            class="nextButton">
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
                    window.location.href = "{{ route('soundLSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
