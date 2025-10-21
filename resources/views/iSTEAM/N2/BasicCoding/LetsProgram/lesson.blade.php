@extends('layout.master')
@section('title', 'Dynamic Presentation')

 

@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" alt="">
        <h2 class="stroke title">Children, do you remember why machines like these can work?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" />
        <h2 class="stroke title"><span class="text-white">Machines</span> can work because they have <br /><span
                class="text-white">programmes</span> inside them.</h2>
        <p class="note">Note: Have children recall and share what a programme is.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs13.png') }}" />
        <h2 class="title stroke text-center">The steps to do things is like a <span class="text-white">programme</span>
            for<br />
            <span class="text-white">machines</span>.
        </h2>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs11.png') }}" />
        <h2 class="title stroke text-center">So a <span class="text-white">programme</span> is the step-by-step
            <span class="text-white">instructions</span> that tell the <span class="text-white">machine</span> what to do.
        </h2>

    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" />
        <h2 class="stroke title">How do you make machines work in ways that you want?</h2>
        <p class="note">Note: Have children discuss based on what they have learnt.</p>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs29.png') }}" />
        <h2 class="title stroke text-center">If you want a <span class="text-white">machine</span> to work in a particular
            way,
            you need to give step-by-step <span class="text-white">instructions</span> to the
            <span class="text-white">machine</span>.
        </h2>

        <p class="note text-center">Note: Tell children that a robot is a machine. Act like this robot to guide children
            describe
            how it moves in each step.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs29.png') }}" />
        <h2 class="stroke title">So most likely these are the instructions to this robot.</h2>
        <p class="note">Forward > Forward > Forward > Forward and look to your left > <br>
            Forward > Forward > Forward > Forward and look to your front</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs29.png') }}" />
        <h2 class="title stroke text-center"> When you give <span class="text-white">instructions</span> to a <span
                class="text-white">machine</span>,
            you are <span class="text-white">programming</span> or <span class="text-white">coding</span> the <span
                class="text-white">machine</span>.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Now, let’s find our the things that
            you will use to learn programming today!</h2>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" />
        <h2 class="title stroke">Remember these directional cards?
            What kind of instructions do they tell you?</h2>
        <p class="note">Note: Display the cards. Have children recall and share what they have learnt.</p>
    </div>


    {{-- slide 11 --}}
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
        <h2 class="stroke title">These directional cards give you instructions on how to move.</h2>
        <p class="note">Note: Display the cards. Have children recall and share what they have learnt.</p>
    </div>

    {{-- slide 12 --}}
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
     <h2 class="title stroke text-center">If you use these cards to tell a <span class="text-white">machine</span> how to move,
  you call these cards <span class="text-white">programming</span> cards or <span class="text-white">coding</span> cards.
</h2>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs30.png') }}" />
        <h2 class="title stroke">What are these? What can you do with them?</h2>
        <p class="note">Note: Display some mats. Have children boldly share their views.</p>
    </div>


    {{-- sldie 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs31.png') }}" />
        <h2 class="title stroke">You can use the mats to form mazes of different shapes. </h2>
        <p class="note">Note: Explain to children that we usually find a way to move through a maze.</p>
    </div>


{{-- remaining --}}
    {{-- slide 15 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
     <div class="text-start">
         <h2 class="title stroke">Mission: <br>
            Let’s use the mats to lay out a sample maze. Imagine you are
            a robot, think and plan how to move through the maze.After that, layout the programming cards and move from the starting point to the end point.</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs19.png') }}" />
        <h2 class="title stroke">How do you move through this maze?</h2>
        <p class="note">Note: Have children lay out the maze, plan the steps, layout the programming cards
and move through the maze.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs20.png') }}" />
        <h2 class="title stroke">How do you move through this maze?</h2>
        <p class="note">Note: Have children lay out the maze, plan the steps, layout the programming cards and move through the maze.</p>
    </div>


      {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs20.png') }}" />
        <h2 class="title stroke">How do you move through this maze?</h2>
        <p class="note">Note: Have children lay out the maze, plan the steps, layout the programming cards and move through the maze.</p>
    </div>







    {{-- =================================================================== --}}
    {{-- Complete button --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton ">
                        <img src="{{ asset('assets/images/pptimages/return.png') }}" />

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
                    window.location.href = "{{ route('LetsProgramSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
