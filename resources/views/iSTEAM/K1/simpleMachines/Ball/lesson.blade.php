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
    <div class="slide flex flex-col items-center justify-center gap-[18rem] ">
        <h2 class="title stroke">Children, today we are going to build another
            Rube Goldberg Machine!</h2>
        <p class="note ">Note: Have children recall and say what a Rube Goldberg Machine is, <br>
            why is it called so and why people created different Rube Goldberg Machines.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Turn to next page to watch the video in slow motion.</p>
    </div>



    {{-- Slide3 --}}
      <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba4.png" />
        <h2 class="title stroke">Now, let’s watch the video in slow motion!</h2>
        <p class="note">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
    </div>
    



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba2.png" />

        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba3.png" />

    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">What is the use of the machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens in the last part of the video <br>
            (What does the machine do?).</p>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">Yes, this is a Rube Goldberg Machine to
            launch a ball, just for fun! </h2>

    </div>



    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke !text-white font-bold">Class Activity </h2>
        <ul class="  !text-start title stroke">
            <li>Mission</li>
            <li>Build a Rube Goldberg Machine to launch a ball.</li>
            <br><br>
            <li>Steps:</li>
            <li>
                1. Put things together to set up the machine.</li>
            <li> 2. Test the machine.</li>
        </ul>
    </div>



    {{-- sldie 9 --}}
        <div class="slide flex flex-col items-center justify-center gap-[5rem] ">
        <ul class="  !text-start title stroke ">
            <li>Possible questions during hands-on session:</li>
              <li>1. How do you make the ball roll down?</li>
  <li>2. How do you make the ball (always) hit the first book?</li>
  <li>3. How do you make the books (always) fall one after another?</li>
  <li>4. How do you make the last book (always) fall on one end of the ruler?</li>
  <li>5. How do you launch the ball on the other end of the ruler into the air?</li>
        </ul>

        <p class="note">
Note: Have children freely share their ideas and encourage them to try out the ideas.
After hands-on session, continue with reflection on the following pages.</p>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
         <h2 class="title stroke !text-white">Reflection</h2>
        <img src="/assets/images/K1/sm/ball/ba5.png" />
        <h2 class="title stroke">Why do you think the ball rolls down? </h2>

    </div>



    {{-- sldie 11 --}}
     <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">The ball rolls down because of the ramp or inclined plane. It is 
the slanting surface with one end higher than the other end.</h2>

    </div>



    {{-- sldie 12 --}}
      <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba5.png" />
        <h2 class="title stroke">Why do you think the ball will always hit the first book?</h2>

    </div>


    {{-- sldie 13 --}}
      <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba6.png" />
        <h2 class="title stroke">The ball will always hit the first book
because a track is used to direct the ball.</h2>

    </div>



    {{-- sldie 14 --}}
      <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba7.png" />
        <h2 class="title stroke">Why does the first book fall?</h2>

    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba7.png" />
        <h2 class="title stroke">The first book falls because of
the push from the moving ball.</h2>

    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">When you push an object, you use force.
So the force from the ball makes the first book fall.</h2>

    </div>



    {{-- sldie 17 --}}
      <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba8.png" />
        <h2 class="title stroke">Why do all the books fall one after another?.</h2>

    </div>

    {{-- sldie 18 --}}
   <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">The first book falls and pushes the second one.
The second book falls adn pushes the third one, and so on.</h2>

    </div>



    {{-- sldie 19 --}}
   <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba9.png" />
        <h2 class="title stroke">When one action causes the next action, which in turn causes
the next action, and so on, we call it a <span class="!text-white">domino effect</span>.</h2>  

    </div>


    {{-- sldie 20 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba8.png" />
        <h2 class="title stroke">How do you make sure that the books will
always fall one after another?</h2>  

    </div>




    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba10.png" />
        <h2 class="title stroke">The positioning of books is important
to create a <span class="!text-white">domino effect</span>.</h2>  

    </div>



    {{-- sldie 22 --}}
   <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">How do you make sure that the last book
will always fall on one end of the ruler?</h2>  

    </div>



    {{-- sldie 23 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba11.png" />
        <h2 class="title stroke">The ruler needs to be placed within the area
where the last book fall.</h2>  

    </div>


    {{-- sldie 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba12.png" />
        <h2 class="title stroke">Why do you think the ball launches into the air?</h2>  

    </div>


    {{-- sldie 25 --}}
   <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba1.png" />
        <h2 class="title stroke">The force from the last book pushes the ruler to move.</h2>  

    </div>


    {{-- sldie 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba8.png" />
        <h2 class="title stroke">When one end of the ruler is pushed down,
the other end will be lifted.</h2>  

    </div>


    {{-- sldie 27 --}}
     <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba8.png" />
        <h2 class="title stroke">As the ball is on the other end of the ruler,
it will also be lifted and launched into the air.</h2>  

    </div>



    {{-- sldie 28 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba8.png" />
        <h2 class="title stroke">Do you know why the ruler moves in this way?</h2>  

    </div>

    {{-- sldie 29 --}}
     <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba13.png" />
        <h2 class="title stroke">Actually, this is a <span class="!text-white">lever</span> when the ruler is placed in this way.
A <span class="!text-white">lever</span> is a bar rested on a fixed part called <span class="!text-white">fulcrum</span>.</h2>     


    </div>


    {{-- sldie 30 --}}
     <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba14.png" />
        <h2 class="title stroke">Can you point out the fulcrum of this lever? <br>
What will happen if you push one end of it down?</h2>     


    </div>


    {{-- sldie 31 --}}
     <div class="slide flex flex-col items-center justify-center gap-[1rem]">
        <img src="/assets/images/K1/sm/ball/ba15.png" />
        <h2 class="title stroke">With the help of the fulcrum, when one end ogf the lever is
pushed down, the other end will be lifted.</h2>     


    </div>


    {{-- slide 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[950px] h-[550px] bg-cover bg-center flex flex-col p-[40px] justify-flex-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=  !text-center >Draw the Rube Goldberg Machine that you have created to launch a ball.
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
                    window.location.href = "{{ route('BallSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
