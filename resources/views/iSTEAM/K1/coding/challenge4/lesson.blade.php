@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="/assets/images/K1/coding/challenge4/ch1.png" />
            <img src="/assets/images/K1/coding/challenge4/ch2.png" />
        </div>
        <h2 class="title stroke">Children, what are these? Have you seen these before?</h2>
        <p class="note">Note: Have children discuss where they have seen these being used before.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge4/ch3.png" />
        <h2 class="title stroke">What about this? What is this for?</h2>
        <p class="note">Note: Have children discuss the uses of a map.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <div class="flex items-center gap-5">
            <img src="/assets/images/K1/coding/challenge4/ch4.png" class="w-[400px]" />
            <img src="/assets/images/K1/coding/challenge4/ch3.png" class="w-[400px]" />
        </div>
        <h2 class="text-center title stroke">These are maps. A map is a drawing of a place. It shows us <br>
            the surroundings of a place. What do you see from these maps?</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge4/ch3.png" />
        <h2 class="title stroke">We can use a map to help us find directions to reach a destination.</h2>
    </div>

    {{-- slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
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
    <div class="slide flex flex-col items-center justify-center gap-20 ">
        <h2 class="title stroke">Is it easy or difficult to find directions and plan a route
            from a map? Let's find out!</h2>
        <p class="note">Note: Have children share their views and feelings if they have ever used a map to find
            directions.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge4/ch6.png" />
        <h2 class="title stroke">Faith, Simon, Mimi and Billy are good friends.
            They always play together.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge4/ch7.png" />
        <h2 class="title stroke">It’s Billy’s birthday today! <br>
            He has invited all his friends to his birthday party.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge4/ch8.png" />
        <h2 class="title stroke">Faith is going to meet her friends one by one. <br>
            They promised to go to Billy’s house together.</h2>
    </div>



    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/challenge4/ch9.png" />
        <h2 class="title stroke">Faith is going to use this map to plan her route. <br>
            Can you help her?</h2>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Hands-on Time </h2>
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
        <div class="flex items-center gap-5">
            <img src="/assets/images//K1/coding/challenge4/ch8.png" class="w-[300px]" />
            <img src="/assets/images//K1/coding/challenge4/ch9.png" class="w-[500px]" />
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
        <img src="/assets/images//K1/coding/challenge4/ch10.png" class="w-[500px]" />
        <p class="note text-center">Note: Encourage children to discuss in groups and think of what sound to add in.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. Use coding cards to lay out the steps needed for a robot to move according to the planned route.</li>
        </ol>
        <div class="flex items-end gap-5">
            <img src="/assets/images//K1/coding/challenge4/ch9.png" class="w-[400px]" />
            <img src="/assets/images//K1/coding/challenge4/ch11.png" class="w-[400px]" />
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
        <div class="flex items-center gap-10">
            <img src="/assets/images//K1/coding/challenge4/ch9.png" class="w-[500px]" />
            <img src="/assets/images//K1/coding/challenge1/ch8.png" class="w-[500px]" />
        </div>

        <p class="note text-center">Note: Have children decide a route and work in groups to work out the programming steps
            in
            Blockly.
            After that, have the groups take turns to show their plan to the class.</p>
    </div>



    {{-- sldie 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col gap-10 justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How do you plan the route for Faith? Draw arrows to show the route.</p>
            <div class="flex items-center gap-5">
                <img src="/assets/images/K1/coding/challenge4/ch12.png" />
            </div>
        </div>
    </div>

    {{-- sldie 17 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move according to the planned route? Use coding cards to
                lay out the steps.</p>
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
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
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
                    window.location.href = "{{ route('challenge4Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
