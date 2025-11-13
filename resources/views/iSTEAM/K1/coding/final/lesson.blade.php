@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
 {{-- title --}}
    <h2 class="top-title stroke">Final Project</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/coding/final/f1.png" />
        <h2 class="title stroke">Children, do you remember these coding activiti es? <br>
            What did you have to do?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-10">
            <img src="/assets/images/K1/coding/final/f2.png" class="w-img" />
            <img src="/assets/images/K1/coding/challenge4/ch9.png" class="w-img" />
        </div>
        <h2 class="title stroke">How about these coding activities? <br>
            What did you have to do?</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="text-center title stroke">Let’s put on your thinking caps to create a coding game!</h2>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Create your Own Coding Game</h2>
        <h2 class="text-start title stroke">What to do: <br>
            After having gone through the coding challenges from lessons
            6 to 10, now it's time for you to get creative and create your
            own coding game using the coding mat!</h2>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the final project.</p>
    </div>


    {{-- slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. How should this game be played? How do you determine the
                winner? Decide the rules for your coding game and record
                them in the learning journal.</li>
        </ol>
        <img src="/assets/images//K1/coding/final/f3.png" />
        <p class="note text-center">Note: Have each group of children plan their coding game using the learning journal.</p>
    </div>



    {{-- Slide 6  --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. How do you design your coding mat? What kind of graphic
                cards and obstacles do you need? Plot your plan in the
                learning journal.</li>
        </ol>
        <img src="/assets/images//K1/coding/final/f4.png" />
        <p class="note text-center">Note: Have each group of children plan their coding game using the learning journal.</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. Give your coding game a name.</li>
        </ol>
        <img src="/assets/images//K1/coding/final/f5.png" />
        <p class="note text-center">Note: Have each group of children plan their coding game using the learning journal.</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Set up coding mat according to your game design and test is out.</li>
        </ol>
        <img src="/assets/images//K1/coding/final/f6.png" class="!w-[15vw]" />
        <p class="note text-center">Note: Have each group of children set up the mat. Advise them to modify their design if
            needed.</p>
    </div>



    {{-- Slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <ol class="text-start title stroke">
            <h2>Steps:</h2>
            <li>5. Present your coding game to your friends and let them try it out.</li>
        </ol>
        <img src="/assets/images//K1/coding/final/f6.png" class="!w-[15vw]" />
        <p class="note text-center">Note: Have children try on each other’s game.</p>
    </div>


    {{-- sldie 9 --}}
    <div class="slide  hidden flex flex-col items-center justify-start gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-10 justify-center items-center p-[2vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Create your own coding game.</p>
            <img src="/assets/images/K1/coding/final/f8.png" />
        </div>
    </div>


    {{-- sldie 10 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col gap-10 justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">Design the coding mat for your coding game.</p>
            <img src="/assets/images/K1/coding/final/f7.png" class="!w-[14vw]" />
        </div>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">

        <!-- Return Button -->
        <a id="returnButton">

            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>




@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

              //   Return button - redirect if on first slide, otherwise go back
        returnButton.addEventListener("click", () => {
            if (currentSlide === 0) {
                //   First slide pe hai →  
                window.location.href = "{{ route('finalSelection') }}";
            } else {
                //   Previous slide pe jao
                currentSlide--;
                showSlide(currentSlide);
            }
        });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('finalSelection') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
