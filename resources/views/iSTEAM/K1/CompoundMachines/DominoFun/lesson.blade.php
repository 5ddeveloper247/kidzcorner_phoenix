@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Domino Fun</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/cm/cm1.png" />
        <h2 class="title stroke">Do you know what these are?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 hidden ">
        <img src="/assets/images/K1/cm/cm1.png" />
        <h2 class="title stroke">These are dominoes. Dominoes are rectangular
            blocks used to play a few games.</h2>
    </div>


    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Domino toppling is one of the interesting domino games.</h2>
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Guide children to understand that topple means cause to fall.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 4 --}}
    <div class=" slide hidden flex flex-col items-center justify-center gap-2">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke"> Do you know how to play this game?</h2>
        <p class="note">Note: Encourage children to explain how to play the domino toppling game based on the video.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center px-4 text-center">
        <img src="/assets/images/K1/cm/cm3.png" />
        <h2 class="title stroke">First, arrange some dominoes in a line to form a pattern.</h2>
    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Then, push the first domino and enjoy watching all the
            dominoes fall one after another.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 7 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm4.png" />
        <h2 class="title stroke">Why does the first domino fall?</h2>
    </div>



    {{-- slide 8 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When you push an object, you use force.
            So the force makes the first domino fall.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 9 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm5.png" />
        <h2 class="title stroke">Why do all the dominoes fall one after another?</h2>
    </div>


    {{-- slide 10 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The first domino falls and pushes the second one.
            The second domino falls and pushes the third one, and so on.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 11 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When one action causes the next action, which in turn causes
            the next action, and so on, we call it domino effect.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke"><span class="text-white">Chain reaction</span> is another name for <span
                class="text-white">domino effect</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm5.png" />
        <h2 class="title stroke">How do you make sure that the dominoes
            will always fall one after another?</h2>
    </div>



    {{-- slide 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/4.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When the dominoes are placed too far apart,
            no domino effect will be seen.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm7.png" />
        <h2 class="title stroke">So, the positioning of dominoes is important
            to create a domino effect.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-between h-[50vh] ">
        <h2 class=" title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we’ll learn some basic domino arrangements
            and have fun with dominoes!</h2>
    </div>


    {{-- slide 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/63.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What do you see? <br>
            What do you think this arrangement is called?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm9.png" />
        <h2 class="title stroke">This arrangement is called straight line.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>

    </div>


    {{-- slide 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/64.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 20  --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm11.png" />
        <h2 class="title stroke">This arrangement is called curved line.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- slide 21  --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video11" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/65.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm13.png" />
        <h2 class="title stroke">This arrangement is called turn.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>

    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/66.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm15.png" />
        <h2 class="title stroke">This arrangement is called split.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video13" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/67.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s see another way to do a split.
            How many lines are there after the split?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm17.png" />
        <h2 class="title stroke">Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- slide 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video14" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/68.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What do you see?
            What do you think this arrangement is called?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video14')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cm19.png" />
        <h2 class="title stroke">This arrangement is called a spiral.
            Let’s try to form it.</h2>
        <p class="note">Note: Give children enough time to form and show this domino arrangement.</p>
    </div>


    {{-- slide 29 --}}
    <div class="slide  hidden flex flex-col items-center justify-between h-[50vh] ">
        <h2 class=" title stroke !text-white">Small Group Activity</h2>
        <h2 class="text-start title stroke">Now, let's create a domino pattern that has some of
            the basic domino arrangements you have learnt!</h2>
        <p class="note">Note: Organise children into a few small groups. Have them use their creativity to form and show
            a
            domino pattern. If children need help, guide them to combine a few basic domino
            arrangements together to form a pattern.</p>
    </div>


    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[40vw] h-[40vh] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What domino pattern did you create together with your friends? Draw it.</p>
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
            const returnRouteFromFirstSlide = "{{ route('DominoFunSelection') }}";
            const doneButtonRoute = "{{ route('DominoFunSelection') }}";

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
