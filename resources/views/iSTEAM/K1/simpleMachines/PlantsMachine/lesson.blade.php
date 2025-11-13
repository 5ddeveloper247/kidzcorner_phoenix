@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Water a Plant Machine</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh] ">
        <h2 class="title stroke">Children, today we are going to build another
            Rube Goldberg Machine!</h2>
        <p class="note ">Note: Have children recall and say what a Rube Goldberg Machine is,
            why is it called so and why people created different Rube Goldberg Machines.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Turn to next page to watch the video in slow motion and then ask the children questions.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/35.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let’s watch the video in slow motion!</h2>
        <p class="note">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/plant-machine/pl3.png" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>


    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/plant-machine/ppl3.png" />
    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/35.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of the machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens in the last part of the video
            (What does the machine do?).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/35.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Yes, this is a Rube Goldberg Machine that waters a plant,
            just for fun!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-between h-[50vh]">
        <h2 class="!text-white title">Class Activity</h2>
        <ul class="lesson-ul  stroke title text-start">
            <li>Mission:</li>
            <li> Build a Rube Goldberg Machine to water a plant.</li>
        </ul>
        <ul class="lesson-ul title text-start stroke">
            <li>Steps:</li>
            <li> 1. Put things together to set up the machine.</li>
            <li> 2. Test the machine.</li>
        </ul>
    </div>


    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-between h-[50vh] items-center ">
        <ul class="lesson-ul !text-start stroke title">
            <li>Possible questions during hands-on session:</li>
            <li>1. How do you make the marbles roll? What type of simple machine is a slope?</li>
            <li>2. What happens when a marble falls into the container?</li>
            <li>3. Why does the cup turn?.</li>
        </ul>
        <p class="note">
            Note: Have children freely share their ideas and encourage them to try out the ideas.
            After hands-on session, continue with reflection on the following pages.</p>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class="title stroke !text-white">Reflection</h2>
        <img src="/assets/images/K1/sm/plant-machine/pl1.png" />
        <h2 class="title stroke">Why do the marbles roll down?</h2>

    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The marbles roll down because of the slopes.
            A slope is an <span class="!text-white">inclined plane </span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/plant-machine/pl4.png" />
        <h2 class="title stroke">What happens when a marble falls into the container?</h2>
    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When a marble falls into the container.
            the container becomes heavy and goes down.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide  --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As the container goes down, it pulls the string tied to it
            and tilts the cup to water the plant.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/plant-machine/pl4.png" />
        <h2 class="title stroke"> Do you know why the cup is tilted?</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/plant-machine/pl5.png" />
        <h2 class="title stroke">
            The string tied to the container is wrapped around
            a <span class="!text-white">pulley</span> and fixed to the base of a cup.
        </h2>
    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/plant-machine/pl1.png" />
        <h2 class="title stroke">
            The pulley makes it easier for the string to move and tilt
            the cup. When the cup tilts, water in it pours onto the plant.</h2>
    </div>


    {{-- sldie 17 --}}
    <div class="slide  hidden flex flex-col  justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=" !text-center">Draw the Rube Goldberg Machine that you have created to water a plant. </p>
        </div>
    </div>



    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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
            const returnRouteFromFirstSlide = "{{ route('PlantsMachineSelection') }}";
            const doneButtonRoute = "{{ route('PlantsMachineSelection') }}";

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
