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
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Children, today we are going to learn about a machine!</h2>
        <p class="note ">Note: Have children discuss what a machine is, name some machines around us and say their uses.
            Tell them that a machine is a tool to do a task or action.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-0">
        <img src="/assets/images/K1/sm/bell/bell1.png" />
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Turn to next page to watch the video in slow motion.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/bell/bell.2.png" />
        <h2 class="title stroke">Now, let’s watch the video in slow motion!</h2>
        <p class="note">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/bell/bell.2.png" />
        <h2 class="title stroke">This is a Rube Goldberg Machine.
            It is named after its creator, Rube Goldberg.</h2>

    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/bell/bell.3.png" />
        <h2 class="title stroke">Rube Goldberg was a cartoonist.
            His cartoons were very funny because they showed
            complicated machines that did simple tasks.</h2>

    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/bell/bell.2.png" />
        <h2 class="title stroke">What are the things used in this machine?</h2>

    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/bell/bell.2.png" />

    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/bell/bell1.png" />
        <h2 class="title stroke">What is the use of this machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens at the last part of the video
            (What does the machine do).</p>
    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/sm/bell/bell.2.png" />
        <h2 class="title stroke">So, a Rube Goldberg Machine is made up of
            many different things. It helps to do a simple task,
            such as ringing a bell, just for fun!</h2>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="!text-white title stroke"> Class Activity</h2>
        <h2 class="title stroke">Mission:
            Build a Rube Goldberg Machine to ring a bell.

            Steps:
            Put things together to set up the machine.
            Test the machine.</h2>

    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <h2 class="!text-white title stroke"> Class Activity</h2>
        <h2 class="title stroke">Possible questions during hands-on session:
            How do you make the ball roll down?
            How do you make the ball (always) hit the first domino?
            How do you make the dominoes (always) fall one after
            another?
            How do you make the last domino (always) hit the bell?</h2>
        <p class="note">Note: Have children freely share their ideas and encourage them to try out the ideas.
            After hands-on session, continue with reflection on the following pages.</p>

    </div>



    {{-- sldie 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-7">
        <h2 class="!text-white title stroke"> Reflection</h2>
        <img src="/assets/images/K1/sm/bell/bell1.png" />
        <h2 class="title stroke">Why do you think the ball rolls down?
            What if the book is placed flat? Will the ball roll?</h2>
    </div>


    {{-- sldie 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell1.png" />
        <h2 class="title stroke">The ball rolls down because of the slope.
            The slope is commonly known as a ramp.</h2>

    </div>



    {{-- sldie 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">

        <img src="/assets/images/K1/sm/bell/bell.2.png" />
        <h2 class="title stroke">A ramp is the slanting surface with one end
            higher than the other end.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell.2.png" />
        <h2 class="title stroke">Inclined plane is another name for a ramp.</h2>
    </div>


    {{-- sldie 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell.2.png" />
        <h2 class="title stroke">What can you do to make sure that the ball
            will always hit the target?</h2>

    </div>


    {{-- sldie 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell4.png" />
        <h2 class="title stroke">What can you do to make sure that the ball
            will always hit the target?</h2>
    </div>


    {{-- sldie 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell5.png" />
        <h2 class="title stroke">Why does the first domino fall?</h2>



    </div>



    {{-- sldie 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">

        <img src="/assets/images/K1/sm/bell/bell5.png" />
        <h2 class="title stroke">The first domino falls because of
            the push from the moving ball.</h2>


    </div>


    {{-- sldie 20 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell1.png" />
        <h2 class="title stroke">When you push an object, you use force.
            So the force from the ball makes the first fall.</h2>


    </div>



    {{-- sldie 21 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell6.png" />
        <h2 class="title stroke">Why do all the dominoes fall one after another?</h2>

    </div>


    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell1.png" />
        <h2 class="title stroke">The first domino falls and pushes the second one.
            The second domino falls and pushes the third one, and so on.</h2>



    </div>



    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell7.png" />
        <h2 class="title stroke">When one action causes the next action, which in turn causes
            the next action, and so on, we call it a domino effect.</h2>



    </div>


    {{-- sldie 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell7.png" />
        <h2 class="title stroke">How do you make sure that the dominoes
            will always fall one after another?</h2>


    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell8.png" />
        <h2 class="title stroke">When the dominoes are placed too far apart,
            no domino effect will be seen.</h2>

    </div>


    {{-- sldie 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell9.png" />
        <h2 class="title stroke">So, the positioning of dominoes is important
            to create a domino effect.</h2>


    </div>


    {{-- sldie 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell6.png" />
        <h2 class="title stroke">How do you make sure that the bell will always ring?</h2>

    </div>



    {{-- sldie 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/sm/bell/bell10.png" />
        <h2 class="title stroke">If the bell is hung too high,
            the last domino will not hit the bell too.</h2>
    </div>

    {{-- sldie 29 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">

        <img src="/assets/images/K1/sm/bell/bell8.png" />
        <h2 class="title stroke">If the bell is placed too far,
            the last domino will not hit the bell.</h2>


    </div>


    {{-- sldie 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-20">
        <img src="/assets/images/K1/sm/bell/bell1.png" />
        <h2 class="text-center title stroke">So, the positioning of the bell from the dominoes is very
            important to ring the bell always.</h2>

    </div>


    {{-- sldie 31 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">Draw the Rube Goldberg Machine that you have created to ring a bell.
            </p>
        </div>
    </div>




    {{-- Complete button --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_next0px_rgba(0,0,0,0.25)] 
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
                    window.location.href = "{{ route('BellSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
