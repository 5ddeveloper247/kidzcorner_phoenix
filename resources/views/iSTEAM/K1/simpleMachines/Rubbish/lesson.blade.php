@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-[20rem]">

        <h2 class="title stroke ">Children, today we are going to build another <br>
            Rube Goldberg Machine!</h2>

        <!-- Note -->
        <div class="note">Note: Have children recall and say what a Rube Goldberg Machine is, <br>
            why is it called so and why people created different Rube Goldberg Machines.</div>

    </div>



    {{-- Slide 2 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
        <h2 class="title stroke ">Let’s watch a video!</h2>
        <p class=" note">Note: Turn to next page to watch the video in slow motion.
        </p>
    </div>

    {{-- Slide3 --}}

    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
        <h2 class="title stroke ">Now, let’s watch the video in slow motion!</h2>
        <p class=" note">Note: Have children freely talk about what they see. Do not correct them on the terms used.
        </p>
    </div>
    {{-- Slide 4 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/rubbish-machine/r2.png" />
        <h2 class="title stroke ">What are the things used in this machine?</h2>

    </div>

    {{-- Slide 5  --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/rubbish-machine/r2.png" />

    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
        <h2 class="title stroke ">What is the use of this machine?</h2>
        <p class=" note">Note: Have children watch and talk about what happens at the last part pf the video<br>
            (What does machine do).
        </p>
    </div>


    {{-- Slide 7 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
        <h2 class="title stroke ">Yes, this is a Rube Goldberg Machine to throw
            a rubbish into the dustbin, just for fun!</h2>

    </div>



    {{-- slide 8 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-[5rem]">

        <h2 class="font-bold title !text-white">Class Activity:</h2>
        <ul class="title stroke !text-start">
            <li>Mission:</li>
            <li>Build a Rube Goldberg Machine to throw a rubbish.</li>
        </ul>
        <ul class="title stroke !text-start">
            <li>Steps:</li>
            <li>1. Put things together to set up the machine.</li>
            <li>2. Test the machine.</li>
        </ul>
    </div>


    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-[5rem]">


        <ul class="title stroke !text-start">
            <h2 class="!text-start title stroke"> Possible questions during hands-on session:</h2>
            <li>1. How do you make the first domino fall?</li>
            <li>2. How do you make the dominoes always fall one after another?</li>
            <li>3. How do you make the last domino always push the car?</li>
            <li>4. How do you make the car that rolls down the inclined plane always hit the rubbish and ensure the rubbish
                goes into the dustbin?</li>
        </ul>

        <p class=" note">
            Note: Have children freely share their ideas and encourage them to try out the ideas. <br>
            After hands-on session, continue with reflection on the following pages.
        </p>

    </div>


    {{-- slide 11 --}}
   <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
        <h2 class="title stroke ">Yes, this is a Rube Goldberg Machine to throw
            a rubbish into the dustbin, just for fun!</h2>
            
        </div>
        
        {{-- slide 12 --}}
        <div class="slide hidden  flex flex-col items-center justify-center gap-5">
            <h2 class="!text-center  title  !text-white">Reflection</h2>
            <img src="/assets/images/K1/sm/rubbish-machine/r3.png" />
            
            
            <h2 class="title stroke ">Why does the first domino fall?</h2>
        

        </div>


        {{-- slide 13 --}}
        <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
             <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
             <h2 class="title stroke ">When you push an object, you use <span class="!text-white">force</span>.
So the <span class="!text-white">force</span> makes the first domino fall.</h2>
                 
             </div>
      


    {{-- slide 14 --}}
     <div class="slide hidden  flex flex-col items-center justify-center gap-5">
            <h2 class="!text-center  title  !text-white">Reflection</h2>
            <img src="/assets/images/K1/sm/rubbish-machine/r4.png" />
            
            
            <h2 class="title stroke ">Why do all the dominoes fall one after another?</h2>
        

        </div>


    {{-- slide 15 --}}
     <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
            
            
            <h2 class="title stroke ">The first domino falls and pushes the second one. 
The second domino falls and pushes the third one, and so on.</h2>
        

        </div>

    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r5.png" />
            
            
            <h2 class="title stroke ">When one action causes the next action, which in turn causes
the next action, and so on, we call it a <span class="!text-white">domino effect</span>.</h2>
        

        </div>

    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r5.png" />
            
            
            <h2 class="title stroke ">How do you make sure that the dominoes
will always fall one after another?</h2>
        

        </div>

    {{-- slide 18 --}}

  <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r6.png" />
            
            
            <h2 class="title stroke ">When the dominoes are placed too far apart, <br>
no domino effect will be seen.</h2>
        

        </div>



    {{-- slide 19 --}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r7.png" />
            
            
            <h2 class="title stroke ">So, the positioning of dominoes is important
to create a <span class="!text-white">domino effect</span>.</h2>
        

        </div>


    {{-- slide 20  --}}
  <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
            
            
            <h2 class="title stroke ">How do you make sure that the last domino 
will always push the car to move?</h2>
        

        </div>


    {{-- slide 21  --}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r7.png" />
            
            
            <h2 class="title stroke ">The car needs to be placed near the last domino so that the
force from the dominoes will push the car to move.</h2>
        

        </div>


    {{-- sldie 22 --}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r8.png" />
            
            
            <h2 class="title stroke ">Why do you think the car moves? <br>
What does it have?</h2>
        
        </div>

          {{-- sldie 23 --}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r9.png" />
            
            
            <h2 class="title stroke ">The car moves because it has wheels and axles <br>
that are turning together.</h2>
        
        </div>


             {{-- sldie 24 --}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r10.png" />
            
            
            <h2 class="title stroke ">An axle is a rod that joins the two front <br>
or back wheels of a car.</h2>
        
        </div>


            {{-- sldie 25--}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r11.png" />
            
            
            <h2 class="title stroke ">The wheel and axle turn together to help a car move.</h2>
        
        </div>

                  {{-- sldie 26--}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
            
            
            <h2 class="title stroke ">What can you do to make sure that the car will always hit
the target after it rolls down the inclined plane?</h2>
        
            </div>


                  {{-- sldie 26--}}
   <div class="slide hidden  flex flex-col items-center justify-center gap-5">
        
            <img src="/assets/images/K1/sm/rubbish-machine/r12.png" />
            
            
            <h2 class="title stroke ">You may form a path with some straws to direct the car.</h2>

<p class="note">Note: Have children suggest other things that can be used to form a path.</p>
        
            </div>

                  {{-- sldie 27--}}
                  <div class="slide hidden  flex flex-col items-center justify-center gap-5">
                      
                      <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
                      
                      
                      <h2 class="title stroke ">Look at this machine. <br>
                        The straws form a path to direct the car to hit the target.</h2>
                        
                        
                    </div>
                    
                    {{-- sldie 28--}}
            <div class="slide  hidden flex flex-col  justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col p-[40px] "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <h2 class=" !text-center">Draw the Rube Goldberg Machine that you have created to throw a rubbish.
            </h2>
        </div>
    </div>







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
                    window.location.href = "{{ route('RubbishSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
