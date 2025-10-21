@extends('layout.master')
@section('title', 'Dynamic Presentation')

 

@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs30.png') }}" alt="">
        <h2 class="stroke title">Children, what are these?
            What did you use them for in the previous lesson?<h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs31.png') }}" />
        <h2 class="stroke title">You can use the mats to form mazes of different shapes. </h2>
        <p class="note">Note: Remind children that we usually find a way to move through a maze.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" />
        <h2 class="title stroke text-center">TWhat about these? What did you use them for?</h2>
        <p class="note">Note: Have children recall and talk about the uses of these programming cards.</p>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" />
            <div class="flex text-white text-[20px] gap-[15rem]">
                <p>forwar</p>
                <p>bakcward</p>
                <p>turn left</p>
                <p>turn right</p>
            </div>
        </div>
        <h2 class="title stroke text-center"> You used these <span class="text-white">programming</span> cards to <span
                class="text-white">programme</span> a <span class="text-white">robot</span>
            to move from a starting point to an end point.</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's lay out a grid maze and play a game. Think and plan
                how to move through the maze. Then lay out the programming cards and move from the starting point to the end
                point.</h2>
        </div>
        <p class="note">Note: Have children work together as a class to complete the mission. If you want, explain to <br>
            them that a grid is in a pattern of straight lines that cross over each other, forming boxes.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex justify-center items-center flex-col">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs33.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/bs32.png') }}" />
        </div>
        <h2 class="title stroke text-center">These friends are going somewhere today.Can you guess where they are going?
        </h2>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs34.png') }}" />
        <h2 class="stroke title">Jon wants to see the giraffes.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
        <div class="w-24 h-24 bg-lime-300 rounded-[30px] border-[6px] border-lime-600 absolute right-0 ">
            <div class="text-center justify-start text-lime-700 text-xl font-normal font-['Jua']">Sample<br />Answer</div>
        </div>
    </div>
    {{-- information --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Jon may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs35.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs36.png') }}" />
        <h2 class="stroke title">Sally wants to see the lions.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
        <div class="w-24 h-24 bg-lime-300 rounded-[30px] border-[6px] border-lime-600 absolute right-0 ">
            <div class="text-center justify-start text-lime-700 text-xl font-normal font-['Jua']">Sample<br />Answer</div>
        </div>
    </div>
    {{-- information --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Sally may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs37.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs38.png') }}" />
        <h2 class="stroke title">Tom wants to see the lions.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
        <div class="w-24 h-24 bg-lime-300 rounded-[30px] border-[6px] border-lime-600 absolute right-0 ">
            <div class="text-center justify-start text-lime-700 text-xl font-normal font-['Jua']">Sample<br />Answer</div>
        </div>
    </div>
    {{-- information --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Tom may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs39.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>



    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs40.png') }}" />
        <h2 class="stroke title">Mei wants to see the lions.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
        <div class="w-24 h-24 bg-lime-300 rounded-[30px] border-[6px] border-lime-600 absolute right-0 ">
            <div class="text-center justify-start text-lime-700 text-xl font-normal font-['Jua']">Sample<br />Answer</div>
        </div>
    </div>
    {{-- information --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Mei may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs41.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's create a new zoo programming game! Set a new
                starting point and end point in the grid maze. Then get
                your friends of another group to think and plan how to
                move through the maze (lay out the programming cards
                to move from the starting point to the end point).</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have the groups take turns to complete the mission.</p>
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
                    window.location.href = "{{ route('LetsProgram2Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
