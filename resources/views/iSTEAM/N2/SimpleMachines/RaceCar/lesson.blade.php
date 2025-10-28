@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title stroke absolute top-[30px]">Design A Race Car</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="/assets/images/N2/SimpleMachines/new6.png" class="large-img6"  />

        <h2 class="stroke title">Children, what are these? Do you remember how to build each of these?</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="/assets/images/N2/SimpleMachines/new5.png" class="large-img6"  />
        <h2 class="stroke title">Certain parts of these are made with a <span class="text-white">wheel</span> and <span
                class="text-white">axle<br /></span>a type of <span class="text-white">simple machine</span>. What are they?
        </h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/SimpleMachines/s3.png"  />
        <h2 class="stroke title">This is made with a <span class="text-white">lever</span>, another type of <span
                class="text-white">simple machine</span>.<br />Where is the <span class="text-white">lever</span>? Where is
            its <span class="text-white">fulcrum</span>?</h2>
    </div>



    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/SimpleMachines/new1.png"  />
        <h2 class="stroke title">This is made with a <span class="text-white">inclined plane</span>, another type of <span
                class="text-white">simple<br />machine</span>. What did you use it for?</h2>
    </div>

    {{-- slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="/assets/images/N2/SimpleMachines/flag.png"  />
        <h2 class="stroke title">There will be a race in the class.
            The car that moves down an inclined plane and goes the
            furthest will be the winner of the race!</h2>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col  slide hidden items-center">
        <img src="/assets/images/N2/SimpleMachines/s26.png"  />
        <h2 class="title stroke">This is the inclined plane of the race.
            What kind of car do you think will run down the
            inclined plane and go the furthest?</h2>
        <p class="note">Note: Show children the real setup of inclined plane of the race. Encourage them to share their
            views.</p>
    </div>




    {{-- slide 7 --}}
    <div class="flex flex-col  h-[50vh] justify-between slide hidden items-center">

        <h2 class="title stroke !text-white">Hands-on Time </h2>
        <div class="text-start">

            <h2 class="title stroke">Mission: <br>
                Let’s put on your thinking caps to design a car for the race!</h2>
        </div>
        <p class="note">Note: Divide children into groups and give each group a box of building bricks.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="list-decimal">
                <li>What kind of design will make a car move down the inclined plane (of the race) and go the furthest?
                    Design and build it.</li>
                <li>Test out your car and then decide if you need to make it better.</li>
                <li>Start the race to find out the car of which team will be the winner of the race.</li>
            </ul>
        </div>

        <p class="note">Note: Have each group of children discuss and work together to complete the mission.
            Take turns to guide each group of children in discussion by asking prompting questions.</p>
    </div>




    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
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
        // click simple       
        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Show slide and update buttons
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('RaceCarSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('RaceCarSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
