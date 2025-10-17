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
        <img src="/assets/images/K1/cm/cm1.png" />
        <h2 class="title stroke">Do you know what these are?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 hidden ">
        <img src="/assets/images/K1/cm/cm1.png" />
        <h2 class="title stroke">These are dominoes. Dominoes are rectangular
            blocks used to play a few games.</h2>


    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-1">
        <h2 class="title stroke">Domino toppling is one of the interesting domino games.</h2>
        <img src="/assets/images/K1/cm/cm2.png" alt="Light Example" />
        <p class="note">Note: Guide children to understand that topple means cause to fall.</p>
    </div>


    {{-- Slide 4 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-2">
        <img src="/assets/images/K1/cm/cm2.png" />
        <h2 class="title stroke"> Do you know how to play this game?</h2>
        <p class="note">Note: Encourage children to explain how to play the domino toppling game based on the video.</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <img src="/assets/images/K1/cm/cm3.png" />
        <h2 class="title stroke">First, arrange some dominoes in a line to form a pattern.</h2>
    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm2.png" />
        <h2 class="title stroke">Then, push the first domino and enjoy watching all the
            dominoes fall one after another.</h2>
    </div>


    {{-- Slide 7 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm4.png" />
        <h2 class="title stroke">Why does the first domino fall?</h2>
    </div>



    {{-- slide 8 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm2.png" />
        <h2 class="title stroke">When you push an object, you use force.
            So the force makes the first domino fall.</h2>
    </div>


    {{-- slide 9 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm5.png" />
        <h2 class="title stroke">Why do all the dominoes fall one after another?</h2>
    </div>


    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm2.png" />
        <h2 class="title stroke">The first domino falls and pushes the second one.
            The second domino falls and pushes the third one, and so on.</h2>
    </div>


    {{-- slide 11 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm2.png" />
        <h2 class="title stroke">When one action causes the next action, which in turn causes
            the next action, and so on, we call it domino effect.</h2>
    </div>



    {{-- slide 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm2.png" />
        <h2 class="title stroke">Chain reaction is another name for domino effect.</h2>
    </div>



    {{-- slide 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm5.png" />
        <h2 class="title stroke">How do you make sure that the dominoes
            will always fall one after another?</h2>
    </div>



    {{-- slide 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm6.png" />
        <h2 class="title stroke">When the dominoes are placed too far apart,
            no domino effect will be seen.</h2>
    </div>



    {{-- slide 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm7.png" />
        <h2 class="title stroke">So, the positioning of dominoes is important
            to create a domino effect.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class=" title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we’ll learn some basic domino arrangements
            and have fun with dominoes!</h2>
    </div>


    {{-- slide 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm8.png" />
        <h2 class="title stroke">What do you see? <br>
            What do you think this arrangement is called?</h2>
    </div>



    {{-- slide 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm9.png" />
        <h2 class="title stroke">This arrangement is called straight line.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- slide 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm10.png" />
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
    </div>



    {{-- slide 20  --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm11.png" />
        <h2 class="title stroke">This arrangement is called curved line.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- slide 21  --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm12.png" />
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
    </div>



    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm13.png" />
        <h2 class="title stroke">This arrangement is called turn.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>

    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm14.png" />
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
    </div>


    {{-- slide 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm15.png" />
        <h2 class="title stroke">This arrangement is called split.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm16.png" />
        <h2 class="title stroke">Let’s see another way to do a split.
            How many lines are there after the split?</h2>
    </div>


    {{-- slide 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm17.png" />
        <h2 class="title stroke">Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- slide 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm18.png" />
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
    </div>


    {{-- slide 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-1">
        <img src="/assets/images/K1/cm/cm19.png" />
        <h2 class="title stroke">This arrangement is called a spiral.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- slide 29 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class=" title stroke !text-white">Small Group Activity</h2>
        <h2 class="text-start title stroke">Now, let's create a domino pattern that has some of
            the basic domino arrangements you have learnt!</h2>
        <p class="note">Note: Organise children into a few small groups. Have them use their creativity to form and show a
            domino pattern. If children need help, guide them to combine a few basic domino
            arrangements together to form a pattern.</p>
    </div>


{{-- slide 30 --}}
<div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
    <div class="w-[836px] h-[536px] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What domino pattern did you create together with your friends? Draw it.</p>
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
                    window.location.href = "{{ route('DominoFunSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
