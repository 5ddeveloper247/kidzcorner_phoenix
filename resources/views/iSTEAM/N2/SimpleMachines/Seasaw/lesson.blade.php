@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">

        <img src="/assets/images/N2/SimpleMachines/a16.png" class="w-[436px]" />
        <h2 class="stroke title"><span class="text-white">Simple machines</span> are tools that help us to do
            work<br />easily. What <span class="text-white">simple machine</span> is this?</h2>
    </div>




    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="/assets/images/N2/SimpleMachines/s1.png" class="w-[436px]" />
        <h2 class="stroke title">What about this?<br />What<span class="text-white"> simple machine</span> can you see?</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <h2 class="stroke title">Today, we are going to learn about<span class="text-white"> levers<br /></span>-another
            type of <span class="text-white">simple machine</span>.<br /><br />Let’s find out more!</h2>
    </div>



    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>

        <h2 class="stroke title">Mission: <br>
            Let’s follow the instructions to build a seesaw.</h2>
        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s2.png" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a> for the guide.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a Seasaw.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s3.png" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a href="">Click
                <span class="text-amber-300">here</span></a> for the guide.</p>
    </div>




    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 1 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s4.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 2 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s5.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 3 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s6.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 4 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s7.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 5 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 6 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s9.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 7 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s10.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s11.png') }}" />
        <h2 class="title stroke"> How do you play with a seesaw? Would you play it on your own?</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s12.png') }}" />
        <h2 class="title stroke">A seesaw is a long board rested on a fixed part in the middle.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s13.png') }}" />
        <h2 class="title stroke">To play it, you and a friend each sit on one end. When one end of it goes up, the other end
            goes down.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s11.png') }}" />
        <h2 class="stroke title">A seesaw is made with a<span class="text-white"> simple machine</span> <br />called a <span
                class="text-white">lever</span>.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/se1.png') }}" />
      <h2 class="stroke title">A <span class="text-white">lever</span> is a bar supported on a fixed part called<br/>the <span class="text-white">fulcrum</span>. The bar moves around the <span class="text-white">fulcrum</span>.</h2>
    </div>

     {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/se2.png') }}" />
    <h2 class="stroke title">With the help of <span class="text-white">fulcrum</span>, one end of the <span class="text-white">lever</span> will<br/>move up when you push down the other end.</h2>
    </div>


         {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/se3.png') }}" />
   <h2 class="stroke title">Many people use a <span class="text-white">lever</span> to lift heavy things.</h2>
    </div>


    
         {{-- slide 21--}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s11.png') }}" />
   <h2 class="stroke title">Where is the lever and fulcrum of this seesaw? What does the lever do?</h2>
    </div>

          {{-- slide 22--}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s14.png') }}" />
  <h2 class="stroke title">The long board is the <span class="text-white">lever</span> of a seesaw.<br/>The <span class="text-white">fulcrum</span> of this <span class="text-white">lever</span> is in the middle.</h2>
    </div>


    
          {{-- slide 23--}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s13.png') }}" />
   <h2 class="stroke title">This lever lets us easily lift each other up and down a seesaw during play.</h2>
    </div>

       {{-- slide 24--}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s3.png') }}" />
   <h2 class="stroke title">A seesaw can also be a balancing scale.
You can use it to compare weight of different things.</h2>
    </div>


    
       {{-- slide 25--}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s15.png') }}" />
   <h2 class="stroke title">Look at this seesaw! Who is lighter? Who is heavier?</h2>
   <p class="note ">Note: Have all children think and answer. Guide them to understand the meaning of lighter and heavier.</p>
    </div>
     
       {{-- slide 26--}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s15.png') }}" />
   <h2 class="stroke title">Based on this, you know that the girl is heavier than the boy.</h2>
    </div>


    {{-- .slide 27 --}}
        <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s16.png') }}" />
   <h2 class="stroke title">What about this? Which car is lighter? Which car is heavier?</h2>
   <p class="note">Note: Have all children think and answer. Guide them to understand the meaning of lighter and heavier.</p>
     </div>
    

     {{-- slide 28 --}}
            <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s17.png') }}" />
   <h2 class="stroke title">Which car is lighter? Which car is heavier?</h2>
   <p class="note">Note: Have all children think and answer. Guide them to understand the meaning of lighter and heavier.</p>
     </div>
    


          {{-- slide 29 --}}
            <div class="flex flex-col items-center justify-center slide hidden">
                <div>
                    <img src="{{ asset('assets/images/N2/SimpleMachines/s16.png') }}" />
                    <img src="{{ asset('assets/images/N2/SimpleMachines/s17.png') }}" />
                </div>
   <h2 class="stroke title">Based on these, you know that the red car is the lightest and the green car is the heaviest amongst the three cars!</h2>
     </div>



     {{-- slide 30 --}}
        <div class="flex flex-col  slide hidden">

        <h2 class="title storke !text-white">Hands-on Time 2</h2>
        <div class="text-start">

            <h2 class="title storke">Mission: <br>
               Let’s put on your thinking cap to play a balancing game!</h2>
        </div>
        <p class="note">Note: Give each group a set of materials needed. Have children work in groups to complete the mission,</p>
    </div>

{{-- slide 31 --}}
     <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Put a boy on the seesaw.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s18.png" class="w-[436px]" />
        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 32 --}}
         <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. How do you balance the seesaw using these square bricks?</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="/assets/images/N2/SimpleMachines/s18.png"  />
            <img src="/assets/images/N2/SimpleMachines/s19.png"  />
        </div>
        <p class="note">Note: Have children work in groups to complete the challenge and show the teacher.</p>
    </div>


    {{-- slide 33 --}}
             <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">   
            <h2>Steps:</h2>
            <ul>
                <li>3. Now, put a girl on the seesaw.</li>
            </ul>
        </div>
            <img src="/assets/images/N2/SimpleMachines/s20.png"  />
      
        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 34 --}}
             <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. How do you balance the seesaw using these square bricks?</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="/assets/images/N2/SimpleMachines/s20.png"  />
            <img src="/assets/images/N2/SimpleMachines/s19.png"  />
        </div>
        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 35 --}}
              <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">   
            <h2>Steps:</h2>
            <ul>
                <li>5. Put a boy and a girl on one end of the seesaw.</li>
            </ul>
        </div>
            <img src="/assets/images/N2/SimpleMachines/s21.png"  />
      
        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 36 --}}
               <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>6. How do you balance the seesaw using these square bricks?</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="/assets/images/N2/SimpleMachines/s21.png"  />
            <img src="/assets/images/N2/SimpleMachines/s19.png"  />
        </div>
        <p class="note">Note: Have children work in groups to complete the challenge and show the teacher.</p>
    </div>

{{-- slide 37 --}}
  <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Based on the game,do you always balance a seesaw by putting the square bricks at the same part of an end of the seesaw?</h2>
        <p class="note">Note: Encourage children to share their hands-on experiences and views.</p>
    </div>


    {{-- slide 38 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/s22.png') }}" />
         <h2 class="stroke title">You can balance a seesaw when you put two things<br/>of the same <span class="text-white">weight</span> on one end of the seesaw.</h2>
    </div>


    {{-- slide 39 --}}
      <div class="flex flex-col items-center justify-center slide hidden">
         <img src="{{ asset('assets/images/N2/SimpleMachines/s23.png') }}" />
      <h2 class="stroke title">You can also balance a seesaw when you put two things<br/>of different <span class="text-white">weights</span> each on different parts<br/>of the two ends of the seesaw.</h2>
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
                    window.location.href = "{{ route('SeasawSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
