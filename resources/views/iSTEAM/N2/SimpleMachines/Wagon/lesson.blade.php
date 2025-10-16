@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Children, what are these? What can you do with them?</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a5.png') }}" />
        <p class="note">Note: Encourage the children to share their answers.</p>
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <h2 class="title stroke">These are building bricks. You can put them together to build something.</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a6.png') }}" />

    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-20 slide hidden">

        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <div class="text-start">

            <h2 class="title stroke">Mission: <br>
                Let’s follow the instructions to build a wagon and then play with it.</h2>
        </div>
        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="list-decimal list-inside ">
                <li>Make sure you have all these parts.</li>
            </ul>
            <img src="{{ asset('assets/images/N2/SimpleMachines/a7.png') }}" />
        </div>
        <p class="note  text-center">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a wagon</li>
            </ul>
            <img src="{{ asset('assets/images/N2/SimpleMachines/a8.png') }}" />
        </div>
        <p class="note  text-center">Note: Have each group of children work together to complete the mission. <a
                href="">Click <span class="text-amber-300">Here</span></a> for the guide.</p>
    </div>


    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 1 of 7 </h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a18.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 2 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a19.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 3 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a20.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 4 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a21.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 5 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a22.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 6 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a23.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 7 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a24.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Play with the wagon and answer some questions.
                    <ul class="list-disc">
                        <li>How do you play with the wagon?</li>
                        <li>Why does it move?</li>
                        <li>What can you use it for?</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    {{-- slide 13 --}}
   <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What happens when you pull the string?</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a8.png') }}" />
        <p class="note">Note: Encourage children to share their hands-on experiences.</p>
    </div>


    {{-- slide 14 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/a9.png') }}" />
         <h2 class="title stroke">When you pull the string,the wagon that is tied to the string moves.</h2>
    </div>

    {{-- slide 15 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/a9.png') }}" />
         <h2 class="title stroke">Why do you think the wagon moves easily? What does it have?</h2>
    </div>

  
{{-- slide 16 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/a10.png') }}" />
         <h2 class="title stroke">Yes, the wagon moves easily because it has <span class="text-white">wheels</span> and axles that turn together.</h2>
    </div>
  

    {{-- slide 17 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/a11.png') }}" />
         <h2 class="title stroke">An <span class="text-white">axle</span> is a rod that joins the two front or back wheels of the wagon.</h2>
    </div>


       {{-- slide 18 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/a12.png') }}" />
       <h2 class="stroke title">The<span class="text-white"> wheels</span> and <span class="text-white">axles</span> turn together to help<br/>the wagon move.</h2>
          <p class="note">Note: Have children pay attention to the turning axle (from the hole) when the wheel is turned.</p>
    </div>

 {{-- slide 19 --}}
     <div class="flex flex-col items-center justify-center  slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/a13.png') }}" />
       <h2 class="stroke title">What can you use the wagon for?</h2>
          <p class="note">Note: Encourage children to boldly share their views.</p>
    </div>


 {{-- slide 19 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/a14.png') }}" />
       <h2 class="stroke title">You can use it to move things around easily.</h2>
          <p class="note">Note: Invite chilren to use their wagons to transport things of different sizes and weights around.</p>
    </div>



{{-- Complete/Done Butttom --}}
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
    <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40">

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
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //  NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //  Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('WagonSelection') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
