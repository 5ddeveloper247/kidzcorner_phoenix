@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Launch a Ball Machine</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-[18rem] ">
        <h2 class="title stroke">Children, today we are going to build another
            Rube Goldberg Machine!</h2>
        <p class="note ">Note: Have children recall and say what a Rube Goldberg Machine is
            why is it called so and why people created different Rube Goldberg Machines.
        </p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Turn to next page to watch the video in slow motion.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/48.mp4') }}" type="video/mp4">
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
        <img src="/assets/images/K1/sm/ball/ba2.png" />

        <h2 class="title stroke">What are the things used in this machine?</h2>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba3.png" />

    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of the machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens in the last part of the vide</ </ul>
            <u;l>
                (What does the machine do?).
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Yes, this is a Rube Goldberg Machine to
            launch a ball, just for fun! </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-around h-[50vh] ">
        <h2 class="title stroke !text-white ">Class Activity </h2>
        <ul class="lesson-ul text-start title stroke">
            <li>Mission</li>
            <li>Build a Rube Goldberg Machine to launch a ball.</li>
        </ul>
        <ul class="lesson-ul text-start title stroke">
            <li>Steps:</li>
            <li>
                1. Put things together to set up the machine.</li>
            <li> 2. Test the machine.</li>
        </ul>
    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-between h-[50vh]">
        <div class="text-start title stroke">
            <h2>Possible questions during hands-on session:</h2>
            <ul class="lesson-ul  ">
                <li>1. How do you make the ball roll down?</li>
                <li>2. How do you make the ball (always) hit the first book?</li>
                <li>3. How do you make the books (always) fall one after another?</li>
                <li>4. How do you make the last book (always) fall on one end of the ruler?</li>
                <li>5. How do you launch the ball on the other end of the ruler into the air?</li>
            </ul>
        </div>

        <p class="note">
            Note: Have children freely share their ideas and encourage them to try out the ideas.
            After hands-on session, continue with reflection on the following pages.</p>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class="title stroke !text-white">Reflection</h2>
        <img src="/assets/images/K1/sm/ball/ba5.png" />
        <h2 class="title stroke">Why do you think the ball rolls down? </h2>

    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The ball rolls down because of the ramp or inclined plane. It is
            the slanting surface with one end higher than the other end.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- sldie 12 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba5.png" />
        <h2 class="title stroke">Why do you think the ball will always hit the first book?</h2>

    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba6.png" />
        <h2 class="title stroke">The ball will always hit the first book
            because a track is used to direct the ball.</h2>

    </div>



    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba7.png" />
        <h2 class="title stroke">Why does the first book fall?</h2>

    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba7.png" />
        <h2 class="title stroke">The first book falls because of
            the push from the moving ball.</h2>

    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When you push an object, you use force.
            So the force from the ball makes the first book fall.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 17 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba8.png" />
        <h2 class="title stroke">Why do all the books fall one after another?.</h2>

    </div>

    {{-- sldie 18 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The first book falls and pushes the second one.
            The second book falls adn pushes the third one, and so on.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 19 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/43.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When one action causes the next action, which in turn causes
            the next action, and so on, we call it a <span class="!text-white">domino effect</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 20 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba8.png" />
        <h2 class="title stroke">How do you make sure that the books will
            always fall one after another?</h2>

    </div>




    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba10.png" />
        <h2 class="title stroke">The positioning of books is important
            to create a <span class="!text-white">domino effect</span>.</h2>

    </div>



    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How do you make sure that the last book
            will always fall on one end of the ruler?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- sldie 23 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba11.png" />
        <h2 class="title stroke">The ruler needs to be placed within the area
            where the last book fall.</h2>

    </div>


    {{-- sldie 24 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba12.png" />
        <h2 class="title stroke">Why do you think the ball launches into the air?</h2>

    </div>


    {{-- sldie 25 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/47.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The force from the last book pushes the ruler to move.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 26 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video11" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/49.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When one end of the ruler is pushed down,
            the other end will be lifted.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 27 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/49.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">As the ball is on the other end of the ruler,
            it will also be lifted and launched into the air.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 28 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video13" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/49.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Do you know why the ruler moves in this way?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 29 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba13.png" />
        <h2 class="title stroke">Actually, this is a <span class="!text-white">lever</span> when the ruler is placed in
            this way.A <span class="!text-white">lever</span> is a bar rested on a fixed part called <span
                class="!text-white">fulcrum</span>.</h2>
    </div>


    {{-- sldie 30 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/ball/ba14.png" />
        <h2 class="title stroke">Can you point out the fulcrum of this lever
            What will happen if you push one end of it down?
        </h2>

    </div>


    {{-- sldie 31 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video14" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/50.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">With the help of the fulcrum, when one end ogf the lever is
            pushed down, the other end will be lifted.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video14')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=!text-center>Draw the Rube Goldberg Machine that you have created to launch a ball. </p>
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
            const returnRouteFromFirstSlide = "{{ route('BallSelection') }}";
            const doneButtonRoute = "{{ route('BallSelection') }}";

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
