@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5   gap-[15rem]">
        <h2 class="title stroke">Children, today we are going to build another
Rube Goldberg Machine!</h2>
        <p class="note ">Note: Have children recall and say what a Rube Goldberg Machine is,
why is it called so and why people created different Rube Goldberg Machines.</p>
    </div>



    {{-- Slide 2 --}}
     <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plant-machine/pl1.png" />
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Turn to next page to watch the video in slow motion and then ask the children questions.</p>
    </div>



    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plant-machine/pl2.png" />
        <h2 class="title stroke">Now, let’s watch the video in slow motion!</h2>
        <p class="note">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
    </div>



    {{-- Slide 4 --}}
   <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plant-machine/pl3.png" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plant-machine/pl3.png" />
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plant-machine/pl2.png" />
        <h2 class="title stroke">What is the use of the machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens in the last part of the video <br>
(What does the machine do?).</p>
</div>


{{-- sldie 7 --}}
<div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/plant-machine/pl2.png" />
        <h2 class="title stroke">Yes, this is a Rube Goldberg Machine that waters a plant,
just for fun!</h2>
     
    </div>

    

    {{-- sldie 8 --}}
      <div class="slide flex flex-col items-center justify-start  items-center gap-[5rem] ">
        <h2 class="!text-white title">Class Activity</h2>
        <ul class="!text-start stroke title">
            <li>Mission:</li>
            <li> Build a Rube Goldberg Machine to water a plant.</li>
            <br><br>
            <li>Steps:</li>
            <li> 1. Put things together to set up the machine.</li>
            <li> 2. Test the machine.</li>
        </ul>
        
        
    </div>
    
    
    
    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-start  items-center gap-[12rem] ">
        <ul class="!text-start stroke title">
            <li>Possible questions during hands-on session:</li>
            <li>1. How do you make the marbles roll? What type of simple machine is a slope?</li>
            <li>2. What happens when a marble falls into the container?</li>
            <li>3.  Why does the cup turn?.</li>
        </ul>
        <p class="note">
Note: Have children freely share their ideas and encourage them to try out the ideas. <br>
After hands-on session, continue with reflection on the following pages.</p>
        

    </div>


    {{-- sldie 10 --}}
   <div class="slide flex flex-col items-center justify-center gap-5 ">
       <h2 class="title stroke !text-white">Reflection</h2>
       <img src="/assets/images/K1/sm/plant-machine/pl1.png" />
       <h2 class="title stroke">Why do the marbles roll down?</h2>
     
    </div>



    {{-- sldie 11 --}}
   <div class="slide flex flex-col items-center justify-center gap-5 ">
       <img src="/assets/images/K1/sm/plant-machine/pl1.png" />
       <h2 class="title stroke">The marbles roll down because of the slopes.
A slope is an <span class="!text-white">inclined plane </span>.</h2>
     
    </div>




    {{-- sldie 12 --}}
  <div class="slide flex flex-col items-center justify-center gap-5 ">
       <img src="/assets/images/K1/sm/plant-machine/pl4.png" />
       <h2 class="title stroke">What happens when a marble falls into the container?</h2>
     
    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
       <img src="/assets/images/K1/sm/plant-machine/pl1.png" />
       <h2 class="title stroke">When a marble falls into the container. <br>
the container becomes heavy and goes down.</h2>
     
    </div>



    {{-- sldie 14 --}}
  <div class="slide flex flex-col items-center justify-center gap-5 ">
       <img src="/assets/images/K1/sm/plant-machine/pl4.png" />
       <h2 class="title stroke">
Do you know why the cup is tilted?
</h2>
     
    </div>


    {{-- sldie 15 --}}
     <div class="slide flex flex-col items-center justify-center gap-5 ">
       <img src="/assets/images/K1/sm/plant-machine/pl5.png" />
       <h2 class="title stroke">
The string tied to the container is wrapped around <br>
a <span class="!text-white">pulley</span> and fixed to the base of a cup.  
</h2>
     
    </div>


    {{-- sldie 16 --}}
     <div class="slide flex flex-col items-center justify-center gap-5 ">
       <img src="/assets/images/K1/sm/plant-machine/pl1.png" />
       <h2 class="title stroke">
The pulley makes it easier for the string to move and tilt
the cup. When the cup tilts, water in it pours onto the plant.
</h2>
     
    </div>



    {{-- sldie 17 --}}
     <div class="slide  hidden flex flex-col  justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col p-[40px] "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <h2 class=" !text-center">Draw the Rube Goldberg Machine that you have created to water a plant.
            </h2>
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
                    window.location.href = "{{ route('PlantsMachineSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
