@extends('layout.master')
@section('title', 'Dynamic Presentation')

 

@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" alt="">
        <h2 class="stroke title">Children, let’s look at these things.
            Do you have these in your home? Can you name them?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" />
        <h2 class="stroke title">All these <span class="text-white">machines</span>. <span class="text-white">Machines</span>
            do work for us.Can you name what each of these <span class="text-white">machines</span> do?</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" />
        <h2 class="stroke title">Why can <span class="text-white">machines</span> like these work?</h2>
        <p class="note">Note: Have children boldly share their views.</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" />
        <h2 class="stroke title"><span class="text-white">Machines</span> can work because they have <span
                class="text-white">programmes</span> inside them.A <span class="text-white">programme</span> has <span
                class="text-white">instructions</span> to tell <span class="text-white">machine</span> what to do.The
            <span class="text-white">instructions</span> are in steps.
        </h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs11.png') }}" />
        <h2 class="stroke title">Do you now how to wash your hands?
            What would you do step-by-step?</h2>
        <p class="note">Note: Guide children to understand each picture and then arrange the pictures in the correct
            order.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs12.png') }}" />
        <h2 class="stroke title">if you always repeat these 4 steps whenever you wash hands,
            these steps of washing hands are like a programme for you!</h2>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs13.png') }}" />
        <h2 class="stroke title">So a <span class="text-white">programme</span> for <span class="text-white">machines</span>
            is like the steps to do things.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" />
        <h2 class="stroke title">Look at these directional cards.Each card gives you an <span
                class="text-white">instruction</span> on how to move.</h2>
        <p class="note">Note: Display the cards.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" />
            <div class="flex text-white text-[26px] gap-[15rem]">
                <p>forwar</p>
                <p>bakcward</p>
                <p>turn left</p>
                <p>turn right</p>
            </div>
        </div>
        <h2 class="stroke title">Can you name and move according to instruction
            of each card?</h2>
        <p class="note">Note: Display the cards.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time </h2>
        <h2 class="title stroke">Mission: <br>
            Let’s follow the instructions of the directional cards and move accordingly in sequence.</h2>
        <p class="note">Note: Have children stand with enough space to move.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs15.png') }}" />
        <p class="note">Note: Guide children to name each card and move accordingly.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs16.png') }}" />
        <p class="note">Note: Guide children to name each card and move accordingly.</p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs28.png') }}" />
        <p class="note">Note: Guide children to name each card and move accordingly.</p>
    </div>


    {{-- sldie 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs17.png') }}" />
        <p class="note">Note: Guide children to name each card and move accordingly.</p>
    </div>


    {{-- slide 15 --}}
      <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs18.png') }}" />
        <p class="note">Note: Guide children to name each card and move accordingly.</p>
    </div>


    {{-- slide 16 --}}
   <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs19.png') }}" />
        <p class="note">Note: Guide children to name each card and move accordingly.</p>
    </div>



    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs20.png') }}" />
        <p class="note">Note: Guide children to name each card and move accordingly.</p>
    </div>







    {{-- =================================================================== --}}
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
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
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
                    window.location.href = "{{ route('InstructionsSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
