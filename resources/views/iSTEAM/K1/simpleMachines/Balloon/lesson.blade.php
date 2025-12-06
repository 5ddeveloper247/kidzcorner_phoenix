@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Pop a Balloon Machine</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/ballon1.png') }}" class="img-h-md" />
        <h2 class="title stroke">Lucho the scientist needs help to pop a balloon left over
            from his birthday party. What should Lucho do? </h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/ballon2.png') }}" class="img-lg" />
        <h2 class="title stroke">Lucho can use a sharp needle to pop the balloon easily. </h2>
        <p class="note">Note: Let children share ways of popping a balloon.</p>

    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="{{ asset('/assets/images/K1/sm/balloon/bl.png') }}" class="img-md" />
        <h2 class="title stroke">But Lucho the scientist wants to create a complicated
            machine to pop the balloon. What should Lucho do?</h2>

    </div>



    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/bl.png') }}"class="img-md" />
        <h2 class="title stroke">Yes, Lucho can build a Rube Goldberg Machine.
            It does an easy task in a complicated way just for fun!</h2>

    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-between h-[17vw]  ">

        <h2 class="title stroke">Children, can you build a Rube Goldberg Machine
            to pop a balloon for Lucho?</h2>
        <p class="note">Note: Let children talk about the Rube Goldberg machine (Why is it called so? What can it do?).
        </p>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Turn to next page to watch the video in slow motion.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/10.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, Let’s watch the video in slow motion!</h2>
        <p class="note">Note: Have children freely talk about what they see. Do not correct them on the terms used.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/ballon4.png') }}" class="img-xl" />
        <h2 class="title stroke">What are the things used in this machine?</h2>

    </div>




    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/bl2.png') }}" class="img-xl" />
        <h2 class="!text-red-600">A needle is sharp! Be careful!</h2>

    </div>



    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-between h-[28vw]  ">
        <h2 class="!text-white  title stroke !text-center">Class Activity</h2>
        <div class="text-start">

            <h2 class="title stroke  ">Mission:</h2>
            <ul class="lesson-ul list-none  title stroke">
                <li>Build a Rube Goldberg Machine to pop a balloon.</li>
            </ul>
        </div>


        <div class="text-start">
            <h2 class="title stroke ">Steps:</h2>
            <ul class="lesson-ul list-decimal title stroke">
                <li>Put things together to set up the machine.</li>
                <li>Test the machine.</li>
            </ul>
        </div>

    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-between h-[28vw]  ">
        <h2 class="!text-white  title stroke !text-center">Class Activity</h2>
        <div class="text-start">
            <h2 class="title stroke">Possible questions during hands-on session:</h2>
            <ul class="lesson-ul list-decimal  title stroke">
                <li>How do you make the first domino fall?</li>
                <li>How do you make the dominoes (always) fall one after another?</li>
                <li>When the track is kept slanted, it becomes a type ofsimple machine. Do you know which simple machine it
                    is?</li>
                <li>Why does the balloon pop?</li>
                <li>How do you make sure the balloon will (always) pop?</li>
            </ul>
        </div>

        <p class="note">Note: Have children freely share their ideas and encourage them to try out the ideas.
            After hands-on session, continue with reflection on the following pages.</p>
    </div>



    {{-- sldie 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center 4">

        <h2 class=" !text-white title stroke">Reflection</h2>
        <img src="{{ asset('/assets/images/K1/sm/balloon/ballon5.png') }}" class="img-md img-md-secondary" />
        <h2 class="title stroke">Why does the first domino fall?</h2>

    </div>


    {{-- sldie 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When you push an object, you use force
            So the force makes the first domino fall.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/ballon6.png') }}" class="img-md img-md-secondary" />
        <h2 class="title stroke">How do you make the dominoes
            always fall one after another?</h2>
    </div>


    {{-- sldie 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Position the dominoes such that they always
            fall on after another and create a <span class="!text-white">domino effect</span> .</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Why does the balloon pop?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/bl3.png') }}" class="img-xl" />
        <h2 class="title stroke">The balloon pops because of the needle on te rod.</h2>
    </div>


    {{-- sldie 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/bl4.png') }}" class="img-xl" />
        <h2 class="title stroke">The pointed end of the needle
            goes through the balloon and pops it.</h2>
    </div>



    {{-- sldie 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">

        <img src="{{ asset('/assets/images/K1/sm/balloon/ballon11.png') }}"  class="img-md"/>

        <h2 class="title stroke">A <span class="!text-white">needle</span> is an example of a <span
                class="!text-white">simple machine</span> called <span class="!text-white">wedge</span>.</h2>
        <p class="note">Note: Guide children to recap that simple machines are tools that help us to do work easily. </p>
    </div>


    {{-- sldie 20 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/bl5.png') }}" class="img-md" />
        <h2 class="title stroke">A wedge is thick at the end and thin and tapering
            at the other edge.</h2>
    </div>


    {{-- sldie 21 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/K1/sm/balloon/bl5.png') }}" class="img-md" />
        <h2 class="title stroke">A <span class="!text-white">needle</span> is a <span class="!text-white">simple
                machine</span>
            as it helps us to pop a balloon easily/.</h2>
    </div>


    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How do you make sure the balloon will always pop?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/10.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Place the balloon close to the rod, so that when the rod is
            pushed forward, the needle goes through the
            balloon and pops it.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 24 --}}
    <div class="slide  hidden flex flex-col items-center justify-center -4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=" !text-center">Draw the Rube Goldberg Machine that you have created to pop a balloon.
            </p>
        </div>
    </div>




{{-- =============================== --}}
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
            const returnRouteFromFirstSlide = "{{ route('BalloonSelection') }}";
            const doneButtonRoute = "{{ route('K1simpleMachines') }}";

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
