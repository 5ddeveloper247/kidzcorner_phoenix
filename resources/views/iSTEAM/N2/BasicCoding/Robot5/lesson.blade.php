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
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb14.png') }}" alt="">
        <h2 class="stroke title">Children, do you remember the story of Patchy Panda at the amusement park? What happens
            there?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" />
        <h2 class="stroke title">How did Patchy move from one place to another?
            Do you like the story?</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb16.png') }}" />
        <h2 class="title stroke text-center">How did Patchy move from one place to another?
            Do you like the story?</h2>
    </div>


    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" class="w-[400px]" />
        <h2 class="title stroke text-center">How did Patchy plan his afternoon?
            Do you like the story?</h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-x-10">
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb14.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" class="w-[400px]" />
            </div>
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb16.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" class="w-[400px]" />
            </div>
        </div>
        <h2 class="title stroke text-center">Is it fun to play programming games based on a story?</h2>
    </div>


    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Let’s get creative! <br>
            Create a simple story and then turn it into a programming
            game for your friends.</h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke !text-white">Create Your Own Story</h2>
        <h2 class="title stroke text-center">Mission: <br>
            Use your imagination and creativity to create a story!</h2>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Steps: <br>1. Choose an animal to be the character of your story.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" />
    </div>


    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Steps: <br>2. Choose 4 picture mats and use them to form your story.</h2>
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb13.png') }}" />
        </div>
    </div>


    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-between ">
        <h2 class="title stroke text-center">Steps: <br>3. Create your story and share with the class.</h2>
        <p class="note">Note: Give children enough time to discuss and finalized their stories in groups.
            Have the different groups take turns to tell their stories to the class in the end.</p>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Turn Your Story Into A Game</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Turn your story into a programming game by designing a
                simple maze. After that, let your friends try
                out the game.</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- ==== --}}
    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Steps: <br>1. Design a simple maze using some lawn mats together with
            the five picture mats that you have chosen for your story.</h2>
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" />
        </div>
        <p class="note">Note: Advise children to keep it simple.</p>
    </div>




    {{-- sldie 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Turn Your Story Into A Game</h2>
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ul>
                <li>2. Test out your programming game to make sure that it works.</li>
                <li>3. Tell your story to another group and have them programme
                    the robot to move from one place to another based on the storyline.</li>
            </ul>
        </div>
        <p class="note">Note: Advise children on how to modify their maze if needed.</p>
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
                    window.location.href = "{{ route('Robot5Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
