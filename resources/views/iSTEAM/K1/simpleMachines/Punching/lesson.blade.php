@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Hole Punching Machine</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke">Children, today we are going to build another
            Rube Goldberg Machine!</h2>
        <p class="note ">Note: Have children recall and say what a Rube Goldberg Machine is,
            why is it called so and why people created different Rube Goldberg Machines.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note ">Note: Turn to next page to watch the video in slow motion.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/42.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let’s watch the video in slow motion!</h2>
        <p class="note ">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/punching/pn3.png" />
        <h2 class="title stroke">This is the full view of the machine.</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/punching/pn4.png" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/punching/pnn.png" />
        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of the machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens in the last part of the video
            (What does the machine do?).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Yes, this is a Rube Goldberg Machine to punch holes in
            a paper, just for fun!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white">Class Activity</h2>
        <ul class="lesson-ul text-start title stroke">
            <li>Mission:</li>
            <li>Build a Rube Goldberg Machine to punch holes in a sheet of paper.</li>
        </ul>
        <ul class="lesson-ul text-start title stroke">
            <li>Steps:</li>
            <li>1. Put things together to set up the machine.</li>
            <li>2. Test the machine.</li>
        </ul>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-start gap-[10rem]">


        <ul class="lesson-ul title stroke !text-start list-decimal">
            <h2 class="title stroke">Possible questions during hands-on session:</h2>
            <li>What do we turn?</li>
            <li>What happens when we turn the bolt? What does this nut do?</li>
            <li>Why does the ball roll down?</li>
            <li>What should you do to make the last book always fall on the hole punch?</li>
        </ul>

        <p class="note">
            Note: Have children freely share their ideas and encourage them to try out the ideas.
            After hands-on session, continue with reflection on the following pages.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <h2 class="title stroke !text-white">Reflection </h2>
        <img src="/assets/images/K1/sm/punching/pn5.png" />
        <h2 class="title stroke">What happens first?</h2>
    </div>


    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn5.png" />
        <h2 class="title stroke">We turn the bolt, which moves forward and pushes the ball.</h2>
    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn6.png" class="large-img2" />
        <h2 class="title stroke">This is a <span class="!text-white">nut and bolt</span>.
            It has a spiral groove on it called thread.</h2>
    </div>


    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn7.png" class="large-img2" />
        <h2 class="title stroke">A nut and bold is an example of a <span class="!text-white">simple machine</span>
            called <span class="!text-white">screw</span>.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn8.png" />
        <h2 class="title stroke">These are different <span class="!text-white">screw</span>.</h2>
    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-start  ">


        <img src="/assets/images/K1/sm/punching/pn9.png" />


        <h2 class="title stroke">Why does the ball roll down?.</h2>
    </div>


    {{-- sldie 17 --}}
    <div class="slide flex flex-col items-center justify-start  ">


        <img src="/assets/images/K1/sm/punching/pn9.png" />


        <h2 class="title stroke">When the ball gets pushed by the bolt, it rolls down a
            slope. A slope is an inclined plane.</h2>
    </div>


    {{-- sldie 18 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn10.png" />
        <h2 class="title stroke">How do you make the books always fall one after another?</h2>
    </div>



    {{-- sldie 19 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/43.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Position the books such that they always
            fall one after another and create a <span class="!text-white">domino effect</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 20 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn3.png" />
        <h2 class="title stroke">How do you (always) get holes punched in the paper?</h2>
    </div>



    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn10.png" />
        <h2 class="title stroke">Arrange the books from small to big.</h2>
    </div>


    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-start  ">
        <img src="/assets/images/K1/sm/punching/pn12.png" />
        <h2 class="title stroke">Place the hole punch with the paper near the last book so that
            the book fall on the hole punch and presses onto it.</h2>
    </div>



    {{-- sldie 23 --}}
    <div class="slide  hidden flex flex-col items-center justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center text-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=>Draw the Rube Goldberg Machine that you have created to punch holes in
                a sheet of paper.</p>
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
            const returnRouteFromFirstSlide = "{{ route('PunchingSelection') }}";
            const doneButtonRoute = "{{ route('PunchingSelection') }}";

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
