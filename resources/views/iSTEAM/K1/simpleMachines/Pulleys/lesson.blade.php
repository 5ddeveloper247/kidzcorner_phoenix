@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Pulleys to the Rescue</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/36.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How are the big boxes lifted?</h2>
        <p class="note ">Note: Let children share what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/36.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">A crane lifts the big boxes.</h2>
        <p class="note ">Note: Ask children to share any information they know about cranes.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu2.png" />

        <h2 class="title stroke">A crane has a special thing called a <span class="!text-white">pulley</span> on it.</h2>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu3.png" />

        <h2 class="title stroke">This is a <span class="!text-white">pulley</span>. It has wheel.</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu4.png" />

        <h2 class="title stroke">To lift a heavy object, a rope or chain is first
            wrapped around the wheel.</h2>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu5.png" class="large-img3" />

        <h2 class="title stroke">The heavy object attached to the other end
            of the rope or chain with a hook.</h2>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu5.png" class="large-img3" />

        <h2 class="title stroke">When one end of the rope is pulled, the heavy object
            on the other end will be lifted up.</h2>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu2.png" />

        <h2 class="title stroke">This is how a <span class="!text-white">pulley</span> helps the crane to lift the heavy
            boxes.</h2>
    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu6.png" />

        <h2 class="title stroke">A <span class="!text-white">pulley</span> is a type of simple machine.</h2>
        <p class="note ">Note: Let children share what they think a simple machine is.</p>
    </div>



    {{-- sldie 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">

        <h2 class="title stroke"> <span class="!text-white">Simple machines</span> are basic tools that help us
            to do work easily.</h2>
        <p class="note">Note: Explain that there are 6 types of simple machines and pulley is one of it.</p>
    </div>



    {{-- sldie 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">

        <h2 class="title stroke"> Do you know how a <span class="!text-white">pulley</span> helps us
            to do work easily?</h2>
        <p class="note">Note: Let children share what they know.</p>
    </div>



    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/sm/pulley/pu7.png" class="large-img3" />
        <h2 class="title stroke">A <span class="!text-white">pulley</span> helps us to move or lift a heavy object easily.
        </h2>
        <p class="note ">Note: Guide children to understand that a pulley is a simple machine as it helps us to do our work
            easily.</p>
    </div>

    {{-- slide  --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh] ">

        <h2 class="title stroke"> Can you name some things which have pulleys on them?</h2>
        <p class="note">Note: Have children name some things in their surroundings where pulleys are used.</p>
    </div>


    {{-- sldie 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu8.png" />
        <h2 class="title stroke">What is this? Where is the pulley?
            What does it do?</h2>
    </div>



    {{-- sldie 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu8.png" />
        <h2 class="title stroke">People draw water from a well with the rope on a pulley.
            It helps to lift a heavy pail of water up easily.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu9.png" />
        <h2 class="title stroke">What is this? Where is the pulley?
            What does it do?</h2>
    </div>



    {{-- sldie 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/37.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The pulley is on the window blinds. When we pull the rope on
            the pulley, the blinds go up and down easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu11.png" class="large-img3" />
        <h2 class="title stroke">What is this? Where is the pulley?
            What does it do?</h2>
    </div>


    {{-- sldie 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu11.png" class="large-img3" />
        <h2 class="title stroke">They pulley is on the exercise machine.
            It helps a person to lift weights and be fit. </h2>
    </div>


    {{-- sldie 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu12.png" />
        <h2 class="title stroke">What is this? Where is the pulley?
            What does it do? </h2>
    </div>


    {{-- sldie 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/38.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Cable cares are a mode of transport. A pulley helps to move
            them from one place to another easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu14.png" />
        <h2 class="title stroke">What is this? Where is the pulley?
            What does it do?</h2>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pl1.png" />
        <h2 class="title stroke">They pulley on the fishing rod helps us to pull the fishing
            line in easily and catch a fish.</h2>
    </div>



    {{-- sldie 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pu15.png" />
        <h2 class="title stroke">What is this? Where is the pulley?
            What does it do?</h2>
    </div>


    {{-- sldie 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pl2.png" />
        <h2 class="title stroke">The pulley is on the sail boat. When the sailor pulls the rope
            on the pulley, the sails are raised and lowered easily.</h2>
    </div>

    {{-- sldie 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke !text-white">Class Activity</h2>

        <img src="/assets/images/K1/sm/pulley/pl3.png" />

        <ul class="title stroke !text-start">
            <li> Let’s find out:</li>
            <li>What is the easiest way to lift a heavy object.</li>
        </ul>

    </div>


    {{-- sldie 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pl4.png" />

        <ul class="title stroke !text-start">
            <li class="!text-white"> What do you think will happen (Prediction):</li>
            <li class="tracking-tighter">Is it easier to lift a heavy object with our hands or using pulley?</li>
        </ul>
        <p class="note text-center">Note: Have children vote for their choice and record the result in a graph
            (refer to the sample on the next page).</p>
    </div>



    {{-- sldie 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Is it easier to lift a heavy object with our hands or using a pulley?</h2>
        <img src="/assets/images/K1/sm/pulley/pl5.png" class="large-img2" />
        <p class="note text-center">Note: Plot children's prediction on the graph. At the end, put a star to mark the final
            result.</p>
    </div>

    {{-- sldie 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/pulley/pl6.png" />
        <ul class="title stroke !text-start">
            <li class="!text-white"> What do you think will happen (Prediction):</li>
            <li class="tracking-tighter">Is it easier to lift a heavy object with one pulley or two pulley?</li>
        </ul>
        <p class="note text-center">Note: Have children vote for their choice and record the result in a graph
            (refer to the sample on the next page).</p>
    </div>


    {{-- sldie 30 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Is it easier to lift a heavy object using one pulley or two pulleys?</h2>
        <img src="/assets/images/K1/sm/pulley/pl7.png" class="large-img2" />
        <p class="note text-center">Note: Plot children's prediction on the graph. At the end, put a star to mark the final
            result.</p>
    </div>


    {{-- sldie 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-start ">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">Let’s do (Experiment Procedure):</h2>
            <li>1. Choose an object and lift it with your hands.</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pu23.png" />

    </div>


    {{-- slide 32 --}}
    <div class=" slide hidden flex flex-col items-center justify-start ">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">Let’s do (Experiment Procedure):</h2>
            <li>2. Put the object in the basket of a pulley. Pull the
                to lift the object</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pl8.png" />
    </div>



    {{-- slide 33 --}}
    <div class=" slide hidden flex flex-col items-center justify-start ">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">What do you observe (Result):</h2>
            <li>Is it easier to lift a heavy object with our hands or using
                a pulley?</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pl4.png" />
        <p class="note">Note: Put a star to mark the final result on the graph.</p>
    </div>




    {{-- slide 34 --}}
    <div class=" slide hidden flex flex-col items-center justify-start ">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">Let’s do (Experiment Procedure):</h2>
            <li>3. Now, put the object into the basket of two pulleys and
                pulleys and pull the rope to lift the object.</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pl10.png" />
    </div>


    {{-- slide 35 --}}
    <div class=" slide hidden flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/pulley/pl6.png" />
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">What do you observe (Result):</h2>
            <li>Is it easier to lift a heavy object with one pulley or two pulleys?</li>
        </ul>
        <p class="note">Note: Put a star to mark the final result on the graph.</p>
    </div>




    {{-- slide 36 --}}
    <div class=" slide hidden flex flex-col items-center justify-start ">
        <ul class="title stroke  !text-start">
            <h2 class="title stroke  !text-white">What do you observe (Conclusion):</h2>
            <li>What is the easiest way to lift a heavy object? Using our hands,
                a pulley or two pulleys</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pl3.png" />
    </div>


    {{-- sldie 37 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/39.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Through this activity, we learn that it is easier to lift a heavy
            object using a rope on a pulley than with our hands.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 38 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/40.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">It is easier to lift a heavy object using the set up
            of two pulleys than one pulley.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 39 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[45vw] h-[45vh] bg-cover bg-center flex flex-col items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="!text-center">If you want to fit a heavy object easily, how would you set up the pulley? Tick ✔ it.
            </p>
            <img src="/assets/images/K1/sm/pulley/pl12.png" />
        </div>
    </div>



    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row  ">

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

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('PulleysSelection') }}";
            const doneButtonRoute = "{{ route('PulleysSelection') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide
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
            returnButton.addEventListener("click", () => {
                // If on first slide, navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

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
