@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Programme a Robot 1</h2>


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" class="img-md" />
        <h2 class="stroke title">Children, do you remember why machines like these can work?<h2>
                <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" class="img-md" />
        <h2 class="stroke title">Machines can work because they have programmes inside them.</h2>
        <p class="note">Note: Have children recall and share what a programme is.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs10.png') }}" class="img-md" />
        <h2 class="stroke title">Machines can work because they have programmes inside them.</h2>
        <p class="note">Note: Have children recall and share what a programme is.</p>
    </div>

    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs13.png') }}" class="img-lg" />
        <h2 class="stroke title">The steps to do things is like a programme for machines.</h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs11.png') }}" class="img-xl" />
        <h2 class="title stroke text-center">So a <span class="!text-white">programme</span> is the step-by-step
            <span class="!text-white">instructions</span>that tell the <span class="!text-white">machine</span> what to do.
        </h2>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Now, let’s find out a new toy that you will use
            to learn programming today!</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br1.png') }}" class="img-md" />
        <h2 class="title stroke text-center"> This is a <span class="!text-white">robot</span>.
            A <span class="!text-white">robot</span> is a <span class="!text-white">machine</span>.</h2>
        <p class="note">Note: Display a robot. Guide children to talk about it’s physical look.</p>
    </div>

    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br2.png') }}" class="img-md" />
        <h2 class="title stroke text-center"> This <span class="!text-white">robot</span>
            can be programmed using its<span class="!text-white"> pen controller</span>.</h2>
        <p class="note">Note: Display a pen controller. Guide children to count how many buttons are there on the pen.</p>
    </div>


    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">This is the way to turn the robot on or off.</h2>
        <p class="note">Note: Demonstrate and then guide children to describe how to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">This is the way to turn the pen controller on or off.</h2>
        <p class="note">Note: Demonstrate and then guide children to describe how to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br4.png') }}" class="img-h-sm" />
        <h2 class="title stroke text-center">These are facial expression <span class="!text-white">programming
            </span> <span class="!text-white">cards</span>.
            Each card tells the <span class="!text-white">robot</span> what facial expression to show.
            What feeling does each card show?</h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/4.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">This is how to use a pen controller to programme a robot
            to show a facial expression.</h2>
        <p class="note">Note: Demonstrate and then guide children to describe how to do so (use the pen to tap on a card).
            <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
        </p>
    </div>


    {{-- sldie 13 --}}
    <div class="flex flex-col items-center justify-between h-[55vh] slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Mission: <br>
                Let's use a pen controller to programme a robot to show a
                facial expression. Can you do the same facial expression? Show your friends.</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-between h-[55vh] slide hidden">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ul class="list-decimal lesson-ul title stroke">
                <li> Use the pen controller to tap on a facial expression
                    programming card and see what happens to the robot.</li>
                <li>How to do the same facial expression? Show your friends.</li>
            </ul>
        </div>
        <p class="note">Note: Have each group children take turns to programme the robot to show an expression.
            Then have them imitate the expression and show in groups.</p>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/5.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">If you want the robot to show different facial expressions
            in an order, this is the way to programme.</h2>

        <p class="note">Note: Demonstrate and then guide children to describe how to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br6.png') }}" class="img-h-md" />
        <h2 class="title stroke text-center">You use this card to record a programme,
            so you may call it a record card.</h2>
    </div>


    {{-- sldie 17 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/br7.png') }}" class="img-h-md" />
        <h2 class="title stroke text-center">You use this card to play a programme recorded,
            so you may call it a play card.</h2>
    </div>


    {{-- sldie 18 --}}
    <div class="flex flex-col items-center justify-between h-[55vh] slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Mission: <br>
                Let's create a programme to tell a robot to show different
                facial expressions in an order. Can you create a programme that is different from your friends? Try it!</h2>
        </div>
        <p class="note">Note: Have each group children take turns to create a programme and show in groups.
            Guide them to record the programmes created in a group learning journal.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col items-center justify-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <div class="text-start">
                <p>Group Name:</p>
                <p>Programmes created to tell a robot to show different facial expressions:</p>
            </div>
            <img src="{{ asset('assets/images/N2/BasicCoding/br8.png') }}" class="img-md" />
        </div>
    </div>





    {{-- =================================================================== --}}
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

        <button class="nextButton ">
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
            const returnRouteFromFirstSlide = "{{ route('Robot1Selection') }}";
            const doneButtonRoute = "{{ route('BasicCoding') }}";

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
