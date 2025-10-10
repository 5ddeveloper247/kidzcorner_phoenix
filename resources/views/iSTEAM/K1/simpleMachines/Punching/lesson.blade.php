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
    <div class="slide flex flex-col items-center justify-center gap-[12rem]">
        <h2 class="title stroke">Children, today we are going to build another <br>
            Rube Goldberg Machine!</h2>
        <p class="note ">Note: Have children recall and say what a Rube Goldberg Machine is,
            why is it called so and why people created different Rube Goldberg Machines.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/punching/pn1.png" />
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note ">Note: Turn to next page to watch the video in slow motion.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/punching/pn2.png" />
        <h2 class="title stroke">Now, let’s watch the video in slow motion!</h2>
        <p class="note ">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/punching/pn3.png" />
        <h2 class="title stroke">This is the full view of the machine.</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/punching/pn4.png" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/punching/pn4.png" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/punching/pn1.png" />
        <h2 class="title stroke">What is the use of the machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens in the last part of the video <br>
            (What does the machine do?).</p>
    </div>

    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5">
        <img src="/assets/images/K1/sm/punching/pn1.png" />
        <h2 class="title stroke">Yes, this is a Rube Goldberg Machine to punch holes in <br>
            a paper, just for fun!</h2>

    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">
        <h2 class="title stroke !text-white">Class Activity</h2>

        <ul class="title stroke !text-start">
            <li>Mission:</li>
            <li>Build a Rube Goldberg Machine to punch holes in <br> a sheet of paper.</li>

            <br><br>
            <li>Steps:</li>
            <li>1. Put things together to set up the machine.</li>
            <li>2. Test the machine.</li>
        </ul>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-start gap-[10rem]">


        <ul class="title stroke !text-start list-decimal">
            <h2 class="title stroke">Possible questions during hands-on session:</h2>
            <li>What do we turn?</li>
            <li>What happens when we turn the bolt? What does this nut do?</li>
            <li>Why does the ball roll down?</li>
            <li>What should you do to make the last book always fall on the hole punch?</li>
        </ul>

        <p class="note">
            Note: Have children freely share their ideas and encourage them to try out the ideas.
            After hands-on session, continue with reflection on the following pages.</p>
    </div>



    {{-- sldie 11 --}}
   <div class="slide flex flex-col items-center justify-start gap-5 ">
        <h2 class="title stroke !text-white">Reflection </h2>
        
                <img src="/assets/images/K1/sm/punching/pn5.png" />

        
        <h2 class="title stroke">What happens first?</h2>
    </div>



    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn5.png" />

        
        <h2 class="title stroke">We turn the bolt, which moves forward and pushes the ball.</h2>
    </div>


    {{-- sldie 13 --}}
     <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn6.png" />

        
        <h2 class="title stroke">This is a <span class="!text-white">nut and bolt</span>. <br>    
It has a spiral groove on it called thread.</h2>
    </div>



    {{-- sldie 14 --}}
      <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn7.png" />

        
        <h2 class="title stroke">A nut and bold is an example of a   <span class="!text-white">simple machine</span>
called <span class="!text-white">screw</span>.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn8.png" />

        
        <h2 class="title stroke">These are different <span class="!text-white">screw</span>.</h2>
    </div>


    {{-- sldie 16 --}}
     <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn9.png" />

        
        <h2 class="title stroke">Why does the ball roll down?.</h2>
    </div>


    {{-- sldie 17 --}}
   <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn9.png" />

        
        <h2 class="title stroke">When the ball gets pushed by the bolt, it rolls down a
slope. A slope is an inclined plane.</h2>
    </div>


    {{-- sldie 18 --}}
  <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn10.png" />

        
        <h2 class="title stroke">How do you make the books always fall one after another?</h2>
    </div>



    {{-- sldie 19 --}}
  <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn11.png" />

        
        <h2 class="title stroke">Position the books such that they always <br>
fall one after another and create a <span class="!text-white">domino effect</span>.</h2>  
    </div>


    {{-- sldie 20 --}}
     <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn3.png" />

        
        <h2 class="title stroke">How do you (always) get holes punched in the paper?</h2>  
    </div>



    {{-- sldie 21 --}}
     <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn10.png" />

        
        <h2 class="title stroke">Arrange the books from small to big.</h2>  
    </div>


    {{-- sldie 22 --}}
  <div class="slide flex flex-col items-center justify-start gap-5 ">
       
        
                <img src="/assets/images/K1/sm/punching/pn12.png" />

        
        <h2 class="title stroke">Place the hole punch with the paper near the last book so that
the book fall on the hole punch and presses onto it.</h2>  
    </div>



    {{-- sldie 23 --}}
   
   <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[950px] h-[550px] bg-cover bg-center flex flex-col p-[40px] justify-around"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=" ">Draw the Rube Goldberg Machine that you have created to punch holes <br> in
a sheet of paper.
            </p> 



         
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
    <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/K1/cm/Vector4.png') }}" />
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
                    window.location.href = "{{ route('PunchingSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
