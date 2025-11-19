@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Ring a Bell Machine</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[17vw]">
        <h2 class="title stroke">Children, today we are going to learn about a machine!</h2>
        <p class="note ">Note: Have children discuss what a machine is, name some machines around us and say their uses.
            Tell them that a machine is a tool to do a task or action.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/1.mp4') }}" type="video/mp4">
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
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/2.mp4') }}" type="video/mp4">
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
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell.2.png') }}" class="img-lg" />
        <h2 class="title stroke">This is a <span class="!text-white">Rube Goldberg Machine</span>.
            It is named after its creator, Rube Goldberg.</h2>

    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell.3.png') }}" class="img-h-md" />
        <h2 class="title stroke">Rube Goldberg was a cartoonist.
            His cartoons were very funny because they showed
            complicated machines that did simple tasks.</h2>
    </div>




    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/smm2.png') }}" class="img-lg" />
        <h2 class="title stroke">What are the things used in this machine?</h2>

    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/smm.png') }}" class="img-lg" />

    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of this machine?</h2>
        <p class="note">Note: Have children watch and talk about what happens at the last part of the video
            (What does the machine do).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell.2.png') }}"class="img-lg" />
        <h2 class="title stroke">So, a Rube Goldberg Machine is made up of
            many different things. It helps to do a simple task,
            such as ringing a bell, just for fun!</h2>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-between h-[20vw] ">
        <h2 class="!text-white title stroke"> Class Activity</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Build a Rube Goldberg Machine to ring a bell.
        </h2>
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul list-decimal">
                <li>Put things together to set up the machine.</li>
                <li>Test the machine.</li>
            </ul>
        </div>

    </div>



    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-between h-[28vw]  ">

        <h2 class="!text-white title stroke"> Class Activity</h2>
        <div class="text-start title stroke">
            <h2>Possible questions during hands-on session:</h2>
            <ul class="lesson-ul list-decimal">
                <li>How do you make the ball roll down?</li>
                <li>How do you make the ball (always) hit the first domino?</li>
                <li>How do you make the dominoes (always) fall one after
                    another?</li>
                <li> How do you make the last domino (always) hit the bell?</li>
            </ul>
        </div>
        <p class="note">Note: Have children freely share their ideas and encourage them to try out the ideas.
            After hands-on session, continue with reflection on the following pages.</p>

    </div>



    {{-- sldie 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="!text-white title stroke"> Reflection</h2>
        <img src="{{ asset('assets/images/K1/sm/bell/bell1.png') }}" class="img-lg" />
        <h2 class="title stroke">Why do you think the ball rolls down?
            What if the book is placed flat? Will the ball roll?</h2>
    </div>


    {{-- sldie 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The ball rolls down because of the slope.
            The slope is commonly known as a <span class="!text-white">ramp</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">

        <img src="{{ asset('assets/images/K1/sm/bell/bell.2.png') }}" class="img-lg" />
        <h2 class="title stroke">A <span class="!text-white">ramp</span> is the slanting surface with one end
            higher than the other end.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell.2.png') }}" class="img-lg" />
        <h2 class="title stroke"><span class="!text-white">Inclined plane</span> is another name for a ramp.</h2>
    </div>


    {{-- sldie 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell.2.png') }}" class="img-lg" />
        <h2 class="title stroke">What can you do to make sure that the ball
            will always hit the target?</h2>

    </div>


    {{-- sldie 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell4.png') }}" class="img-lg" />
        <h2 class="title stroke">You make use a track to direct the ball.
            You may form a path to direct the ball too.</h2>
    </div>


    {{-- sldie 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell5.png') }}" class="img-lg" />
        <h2 class="title stroke">Why does the first domino fall?</h2>



    </div>



    {{-- sldie 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">

        <img src="{{ asset('assets/images/K1/sm/bell/bell5.png') }}" class="img-lg" />
        <h2 class="title stroke">The first domino falls because of
            the push from the moving ball.</h2>


    </div>


    {{-- sldie 20 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When you push an object, you use force.
            So the force from the ball makes the first fall.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 21 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell6.png') }}" class="img-lg" />
        <h2 class="title stroke">Why do all the dominoes fall one after another?</h2>

    </div>


    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The first domino falls and pushes the second one.
            The second domino falls and pushes the third one, and so on.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When one action causes the next action, which in turn causes
            the next action, and so on, we call it a domino effect.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video8" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How do you make sure that the dominoes
            will always fall one after another?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video9" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/4.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When the dominoes are placed too far apart,
            no domino effect will be seen.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell9.png') }}" class="img-lg" />
        <h2 class="title stroke">So, the positioning of dominoes is important
            to create a domino effect.</h2>


    </div>


    {{-- sldie 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K1/sm/bell/bell6.png') }}" class="img-lg" />
        <h2 class="title stroke">How do you make sure that the bell will always ring?</h2>

    </div>



    {{-- sldie 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video210" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/5.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">If the bell is hung too high,
            the last domino will not hit the bell too.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video210')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 29 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">

        <video id="video11" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/6.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">If the bell is placed too far,
            the last domino will not hit the bell.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center -20">
        <video id="video12" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="text-center title stroke">So, the positioning of the bell from the dominoes is very
            important to ring the bell always.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 31 --}}
    <div class="slide  hidden flex flex-col items-center justify-center -4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">Draw the Rube Goldberg Machine that you have created to ring a bell.
            </p>
        </div>
    </div>




    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="cursor-pointer doneButton">
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
            const returnRouteFromFirstSlide = "{{ route('BellSelection') }}";
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
