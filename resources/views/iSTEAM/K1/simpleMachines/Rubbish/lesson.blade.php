@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Throw a Rubish Machine</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[40vh] ">

        <h2 class="title stroke ">Children, today we are going to build another <br>
            Rube Goldberg Machine!</h2>
        <p class="note">Note: Have children recall and say what a Rube Goldberg Machine is, <br>
            why is it called so and why people created different Rube Goldberg Machines.</p>
    </div>


    {{-- Slide 2 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/27.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">Let’s watch a video!</h2>
        <p class=" note">Note: Turn to next page to watch the video in slow motion. </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide3 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/28.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">Now, let’s watch the video in slow motion!</h2>
        <p class=" note">Note: Have children freely talk about what they see. Do not correct them on the terms used.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 4 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center ">
        <img src="/assets/images/K1/sm/rubbish-machine/r2.png" />
        <h2 class="title stroke ">What are the things used in this machine?</h2>
    </div>


    {{-- Slide 5  --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center ">
        <img src="/assets/images/K1/sm/rubbish-machine/gl1.png" />
    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/27.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">What is the use of this machine?</h2>
        <p class=" note">Note: Have children watch and talk about what happens at the last part pf the video<br>
            (What does machine do).
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 7 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center ">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/27.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">Yes, this is a Rube Goldberg Machine to throw
            a rubbish into the dustbin, just for fun!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- slide 8 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-between h-[50vh]">

        <h2 class="font-bold t-title title !text-white">Class Activity:</h2>
        <ul class=" lesson-ul title stroke !text-start">
            <li>Mission:</li>
            <li>Build a Rube Goldberg Machine to throw a rubbish.</li>
        </ul>
        <ul class=" lesson-ul title stroke !text-start">
            <li>Steps:</li>
            <li>1. Put things together to set up the machine.</li>
            <li>2. Test the machine.</li>
        </ul>
    </div>


    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-between h-[50vh]">
        <ul class=" lesson-ul title stroke !text-start">
            <h2 class="!text-start title stroke"> Possible questions during hands-on session:</h2>
            <li>1. How do you make the first domino fall?</li>
            <li>2. How do you make the dominoes always fall one after another?</li>
            <li>3. How do you make the last domino always push the car?</li>
            <li>4. How do you make the car that rolls down the inclined plane always hit the rubbish and ensure the rubbish
                goes into the dustbin?</li>
        </ul>

        <p class=" note">Note: Have children freely share their ideas and encourage them to try out the ideas. <br>
            After hands-on session, continue with reflection on the following pages.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <h2 class="!text-center  title  !text-white">Reflection</h2>
        <img src="/assets/images/K1/sm/rubbish-machine/r3.png" />
        <h2 class="title stroke ">Why does the first domino fall?</h2>
    </div>


    {{-- slide 13 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center ">
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/27.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">When you push an object, you use <span class="!text-white">force</span>.
            So the <span class="!text-white">force</span> makes the first domino fall.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <h2 class="!text-center  title  !text-white">Reflection</h2>
        <img src="/assets/images/K1/sm/rubbish-machine/r1.png" />
        <h2 class="title stroke ">Why do all the dominoes fall one after another?</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/28.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h2 class="title stroke ">The first domino falls and pushes the second one.
            The second domino falls and pushes the third one, and so on.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h2 class="title stroke ">When one action causes the next action, which in turn causes
            the next action, and so on, we call it a <span class="!text-white">domino effect</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video8" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How do you make sure that the dominoes
            will always fall one after another?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
        </h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">

        <video id="video9" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/4.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h2 class="title stroke ">When the dominoes are placed too far apart, <br>
            no domino effect will be seen.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>



    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">

        <img src="/assets/images/K1/sm/rubbish-machine/r7.png" />
        <h2 class="title stroke ">So, the positioning of dominoes is important
            to create a <span class="!text-white">domino effect</span>.</h2>
    </div>


    {{-- slide 20  --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video10" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/27.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">How do you make sure that the last domino
            will always push the car to move?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 21  --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/rubbish-machine/r7.png" />
        <h2 class="title stroke ">The car needs to be placed near the last domino so that the
            force from the dominoes will push the car to move.</h2>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">

        <img src="/assets/images/K1/sm/rubbish-machine/r8.png" />
        <h2 class="title stroke ">Why do you think the car moves? <br>
            What does it have?</h2>

    </div>

    {{-- sldie 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video11" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/29.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">The car moves because it has wheels and axles <br>
            that are turning together.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/rubbish-machine/r10.png" />
        <h2 class="title stroke ">An axle is a rod that joins the two front <br>
            or back wheels of a car.</h2>
    </div>


    {{-- sldie 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video12" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/30.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">The wheel and axle turn together to help a car move.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video13" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/27.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">What can you do to make sure that the car will always hit
            the target after it rolls down the inclined plane?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/rubbish-machine/r12.png" />
        <h2 class="title stroke ">You may form a path with some straws to direct the car.</h2>
        <p class="note">Note: Have children suggest other things that can be used to form a path.</p>

    </div>


    {{-- sldie 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <video id="video14" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/rubbish-machine/27.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke ">Look at this machine. <br>
            The straws form a path to direct the car to hit the target.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video14')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 28 --}}
    <div class="slide  hidden flex flex-col  justify-center ">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class=" !text-center">Draw the Rube Goldberg Machine that you have created to throw a rubbish.
            </p>
        </div>
    </div>







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
            const returnRouteFromFirstSlide = "{{ route('RubbishSelection') }}";
            const doneButtonRoute = "{{ route('RubbishSelection') }}";

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
