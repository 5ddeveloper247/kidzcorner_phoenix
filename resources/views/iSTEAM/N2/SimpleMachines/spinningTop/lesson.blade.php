@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="stroke title"><span class="text-white">Simple machines</span> are tools that help us to do<br />work
            easily. What <span class="text-white">simple machine </span>is this?</h2>
        <img src="/assets/images/N2/SimpleMachines/a57.png" class="w-[829px]" />
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            move people and<br />heavy things around easily when we pull the wagon.</h2>
        <div class="flex items-center gap-10">
            <img src="/assets/images/N2/SimpleMachines/a14.png" class="w-[436px]" />
            <img src="/assets/images/N2/SimpleMachines/a15.png" class="w-[436px]" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/a25.png" class="w-[482px] h-[481px]" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            easily bring along things<br />to buy when we push the shopping cart.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/a27.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            have fun moving around<br />easily when we ride a scooter.</h2>
    </div>



    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/a29.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span> lets us
            easily view the scenery<br />when we take a ride on a giant wheel.</h2>
    </div>


    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/a31.png" />
        <h2 class="stroke title">This <span class="text-white">wheel</span> and <span class="text-white">axle</span>lets us
            have fun seeing the blades
            as the wind blows on a pinwheel.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <h2 class="title stroke">Mission: <br>
            Let’s follow the instructions to build a spinning top and then play with it.</h2>

        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>

    {{-- sldie 8 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/a49.png" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts,</p>
    </div>


    {{-- sldie 9 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a spinning top.</li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <img src="/assets/images/N2/SimpleMachines/a44.png" class="w-[436px]" />
            <img src="/assets/images/N2/SimpleMachines/a51.png" class="w-[436px]" />
        </div>
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Play with the spinning top and answer some questions.
                    <ul class="list-disc">
                        <li>How do you play with the spinning top?</li>
                        <li>Where is the wheel and axle of it?</li>
                        <li>How long does it spin? <br> Record the longest time it spins.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins <br> (each group 2
            chances)</p>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. Build a launcher for the spinning top.</li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <img src="/assets/images/N2/SimpleMachines/a44.png" class="w-[436px]" />
            <img src="/assets/images/N2/SimpleMachines/a51.png" class="w-[436px]" />
        </div>
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a>for the guide.</p>
    </div>


    {{-- slide  12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 1 of 3 </h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a34.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 2 of 3</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a35.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 3 of 3</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a36.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="stroke title">This is the <span class="text-white">wheel </span>(the two gears) and <span
                class="text-white">axle<br /></span>of the spinning top.</h2>
        <img src="/assets/images/N2/SimpleMachines/a58.png" />
        <p class="note">Note: Guide each group of children to point out the wheel and axle of their spinning tops.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/a59.png" />
        <h2 class="stroke title">When you make the <span class="text-white">axle</span> of the spinning top spin,<br />its
            <span class="text-white">wheel </span>spins together.
        </h2>
    </div>


    {{-- slide 17  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="stroke title">Based on your record, which way do you find it
            easier to make the spinning top spin longer:using your fingers or using a launcher?.</h2>

        <p class="note">Note: Have each group of children share their findings based on the record in their learning
            journal.The results may vary due to different factors (e.g. how strong is the flick of individual's fingers, how
            smooth is individual process of using a launcher).</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <h2 class="title stroke !text-white">Hands-on Time 2</h2>
        <img src="/assets/images/N2/SimpleMachines/a52.png" class="w-[550xp]" />
        <div class="text-start">

            <h2 class="title stroke">Mission: <br>
                Let’s play and compare the spinning time of these four designs of spinning tops.</h2>
        </div>

    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Use a launcher to play with the spinning top A. How long does it spin? Record the longest time it
                    spins.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/a60.png" class="w-[600px]" />
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Use a launcher to play with the spinning top B. How long does it spin? Record the longest time it
                    spins.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/a60.png" class="w-[600px]" />
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Use a launcher to play with the spinning top C. How long does it spin? Record the longest time it
                    spins. </li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/a60.png" class="w-[600px]" />
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
    </div>


    {{-- slide 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="stroke title">Based on your record, which design of spinning top do you find spins the longest using a
            launcher: A, B, C or D?</h2>

        <p class="note">Note: Guide children to compare the results and complete their learning journals.
            Then have each group of children share their findings based on the record in their learning journal.
            The results may vary due to different factors (e.g. how smooth is individual process of
            using a launcher. how many times the individual turn the handle before lifting up the launcher).</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="stroke title">Learning Journal</h2>
        <div class="w-[736px] h-[508px] bg-cover bg-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <div class="flex flex-col justify-center items-center gap-20">
                <p>Which way makes the spinning top spin longer? Circle it.</p>

                <div class="flex items-center gap-x-10">
                    <img src="/assets/images/N2/SimpleMachines/a54.png" />
                    <img src="/assets/images/N2/SimpleMachines/a55.png" />
                </div>
            </div>
        </div>

    </div>

    {{-- slide 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="stroke title">Learning Journal</h2>
        <div class="w-[736px] h-[508px] bg-cover bg-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <div class="flex flex-col justify-center items-center gap-20">
                <p>Which spinning top spins the longest time using a launcher? Circle it.</p>
                <img src="/assets/images/N2/SimpleMachines/a52.png" />
            </div>
        </div>

    </div>


    {{-- Complete button --}}
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


    {{-- Buttons --}}
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
                    window.location.href = "{{ route('spinningTopSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
