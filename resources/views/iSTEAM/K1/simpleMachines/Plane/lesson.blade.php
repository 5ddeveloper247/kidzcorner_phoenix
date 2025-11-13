@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">The Power of an Inclined Plane</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane1.png') }}" class="large-img4" />
        <h2 class="title stroke">Do you know what this is?</h2>

    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane1.png') }}" class="large-img4" />
        <h2 class="title stroke">This is a <span class="!text-white">ramp.</span> It is a slanting surface
            with one end higher than the other end.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane1.png') }}" class="large-img4" />
        <h2 class="title stroke">The <span class="!text-white">ramp.</span> looks like a slope.
            It is a <span class="!text-white">simple machine</span> called an <span class="!text-white"> inclined
                plane</span>.</h2>

    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-between h-[35vh] ">

        <h2 class="title stroke">Do you know what a simple machine is?</h2>
        <p class="note">Note: Have children boldly say what they think a simple machine is.</p>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <h2 class="title stroke"> <span class="!text-white">Simple machines</span> are basic tools that help us <br>
            to do work easily.</h2>
        <h2 class="title stroke">Do you know how an <span class="!text-white">inclined plane </span> helps us <br>
            to do work easily?</h2>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane1.png') }}" class="large-img4" />
        <h2 class="title stroke">The <span class="!text-white">inclined plane </span> allows us to move heavy things
            up or down a place easily.</h2>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-between h-[40vh]">

        <h2 class="title stroke">Can you name some ramps or inclined planes 
            around us?</h2>
        <p class="note">Note: Have children recall and name some ramps in their surroundings.</p>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane2.png') }}" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane2.png') }}" />
        <h2 class="title stroke">This inclined plane allows us to move down or slide
            down the slide smoothly for fun!</h2>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane3.png') }}" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane3.png') }}" />
        <h2 class="title stroke">This inclined plane allows us to move the bicycle up or down a
            place easily. We use less strength to do the work.</h2>

    </div>



    {{-- sldie 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center 0">
        <img src="{{ asset('assets/images/K1/sm/plane/plane4.png') }}" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>


    {{-- sldie 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane4.png') }}" />
        <h2 class="title stroke">This inclined plane allows us to pour the sand or rocks out easily
            from the dump truck. We use less strength to do the work.</h2>
    </div>



    {{-- sldie 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/7.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This inclined plane allows us to pour the sand or rocks out easily
            from the dump truck. We use less strength to do the work.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>

    </div>


    {{-- sldie 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane6.png') }}" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>

    </div>


    {{-- sldie 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane6.png') }}" />
        <h2 class="title stroke">This inclined plane allows us to passengers in wheelchairs up or
            down a bus easily. We use less strength to do the work.</h2>

    </div>


    {{-- sldie 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane7.png') }}" />
        <h2 class="title stroke">Where is the inclined plane? What does it do?
            Who usually uses it?</h2>
    </div>


    {{-- sldie 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane1.png') }}" class="large-img4" />
        <h2 class="title stroke">This inclined plane allows us to move heavy things up or down
            a truck easily. We use less strength to do the work.</h2>

    </div>



    {{-- sldie 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane8.png') }}" class="large-img2" />
        <h2 class="title stroke">What is this? Where can you find it? Where is the inclined
            plane? What does it do? Who usually uses it?</h2>
    </div>


    {{-- sldie 20 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane8.png') }}" class="large-img2" />
        <h2 class="title stroke">This inclined plane allows us to move heavy things up or down
            a truck easily. We use less strength to do the work.</h2>

    </div>



    {{-- sldie 21 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane9.png') }}" />

        <div class="text-start">

            <h2 class="title stroke  text-start">Let’s find out (Experiment):</h2>

            <ul class="lesson-ul title stroke list-none text-start">
                <li>Roll a car down an inclined plane at different heights to see
                    how far it will go.</li>
            </ul>
        </div>


    </div>


    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">

        <h2 class="title stroke">Which height of the inclined plane do you think
            will make the car go the longest distance?</h2>
        <img src="{{ asset('assets/images/K1/sm/plane/plane10.png') }}" class="large-img2" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.
        </p>



    </div>



    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <div class="text-start">

            <h2 class="title stroke">Let’s do (Experiment Procedure):</h2>
            <ul class="lesson-ul title stroke list-decimal">
                <li>Roll a car down an inclined plane at different heights to see how far it
                    goes. Use a sticky note to mark the result on the measuring mat.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/sm/plane/plane11.png') }}" />

    </div>


    {{-- sldie 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <div class="text-start">

            <h2 class="title stroke">Let’s do (Experiment Procedure):</h2>
            <ul class="lesson-ul title stroke list-decimal list-none">
                <li> 2. Change the height of the inclined plane and test again.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/sm/plane/plane12.png') }}" />


    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane13.png') }}" class="large-img2" />
        <div class="text-start">

            <h2 class="title stroke">What do you observe (Result):</h2>
            <ul class="lesson-ul title stroke list-decimal  !list-none">
                <li> How far does the car go at the lowest height of the inclined
                    plane? How many units does it travel?</li>
            </ul>
        </div>


    </div>


    {{-- sldie 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/plane/plane13.png') }}" class="large-img2" />
        <div class="text-start">

            <h2 class="title stroke">What do you observe (Result):</h2>
            <ul class="lesson-ul title stroke list-decimal  !list-none">
                <li> How far does the car go at the middle height of the inclined
                    plane? How many units does it travel?</li>
            </ul>
        </div>
    </div>


    {{-- sldie 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <div class="text-start">

            <h2 class="title stroke">Let’s do (Experiment Procedure):</h2>
            <ul class="lesson-ul title stroke list-decimal  !list-none">
                <li> 3.Make conclusions based on your results.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/sm/plane/plane14.png') }}" />
    </div>





    {{-- sldie 29 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <div class="text-start">

            <h2 class="title stroke">What do you learn (Conclusion):</h2>
            <ul class="lesson-ul title stroke list-decimal  !list-none">
                <li>Which height of the inclined plane makes the car go the
                    longest distance?</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/sm/plane/plane15.png') }}" />
    </div>


    {{-- sldie 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center -20">
        <div class="text-start">

            <h2 class="title stroke">What do you learn (Conclusion):</h2>
            <ul class="lesson-ul title stroke list-decimal  !list-none">
                <li>Which height of the inclined plane makes the steepest ramp?</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/sm/plane/plane15.png') }}" />
    </div>


    {{-- sldie 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-center 0">
        <video id="video2" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/8.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Through the activity (experiment), we know that a car will go
            a longer distance if the inclined plane is steeper.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>

    </div>


    {{-- slide 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center -4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col p-[40px] justify-around"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">If you want the car to go very far, how would you put the inclined plane? Tick ✔ it.
            </p>

            <img src="{{ asset('assets/images/K1/sm/plane/plane17.png') }}" />

            <div class="flex justify-around">
                <img src="{{ asset('assets/images/K1/sm/plane/plane18.png') }}" />
                <img src="{{ asset('assets/images/K1/sm/plane/plane18.png') }}" />
                <img src="{{ asset('assets/images/K1/sm/plane/plane18.png') }}" />
            </div>
        </div>
    </div>




    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute right-[60px] flex flex-row  ">

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
        // Video toggle function - plays or pauses a video when clicked
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (!video) return;
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all slide elements
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // ROUTES
            const returnRouteFromFirstSlide = "{{ route('PlaneSelection') }}";
            const doneButtonRoute = "{{ route('PlaneSelection') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                    // reset to start so it doesn't continue when returning
                    try {
                        video.currentTime = 0;
                    } catch (e) {}
                });
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Boundary checks
                if (index < 0) index = 0;
                if (index >= slides.length) index = slides.length - 1;

                // Pause videos before switching
                pauseAllVideos();

                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                const isLastSlide = index === slides.length - 1;
                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    if (currentSlide === 0) {
                        window.location.href = returnRouteFromFirstSlide;
                        return;
                    }
                    if (currentSlide > 0) {
                        currentSlide--;
                        showSlide(currentSlide);
                    }
                });
            }

            // DONE button - navigate to completion route
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = doneButtonRoute;
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
