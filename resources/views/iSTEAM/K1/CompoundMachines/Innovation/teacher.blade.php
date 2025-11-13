@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Domino Fun</h2>

    {{-- sldie 1 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Create a Rube Goldberg Machine that includes at least three simple
                    machines together with friends</li>
                <li>Learn about respect, teamwork and perseverance through the
                    activity.</li>

            </ul>
        </div>
        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Compound Machine</li>
                <li>Simple Machine</li>
                <li>Inclined Plane</li>
                <li>Wedge</li>
                <li>Wheel And Axle</li>
                <li>Pulley</li>
                <li>Screw</li>
                <li>Lever</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <div class="flex justify-center gap-20">
                <ul class="list-disc ">
                    <li>Bells and toy animals</li>
                    <li>Giant nuts and bolts</li>
                    <li>Pulley and rope</li>
                    <li>Wooden rulers</li>
                    <li>Toy cars</li>
                    <li>Toy tracks or handmade tracks</li>
                    <li>Books of different sizes</li>
                    <li>Ice cream sticks</li>
                    <li>Dominoes and blocks</li>
                    <li>Different types of balls</li>
                    <li>Marbles of different sizes</li>
                </ul>
                <ul>
                    <li>Scissors</li>
                    <li>Adhesive tape</li>
                    <li>Glue</li>
                    <li>Rubber bands</li>
                    <li>Different types of strings</li>
                    <li>Plastic wrap</li>
                    <li>Straws and sticks</li>
                    <li>Containers and bottles of different sizes</li>
                    <li>Cardboard boxes and tubes</li>
                </ul>
            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- SLIDE 3 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">

        <h2 class=" t-title">Sample Rube Goldberg Machine 1 - raise a flag machine:</h2>
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/79.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- SLIDE 4 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">

        <h2 class=" t-title">3 simple machines in the raise a flag machine:</h2>
        <img src="/assets/images/K1/cm/cm79.png" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- SLIDE 5 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">

        <h2 class=" t-title">Sample Rube Goldberg Machine 2 - bottle recycling machine:</h2>
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/80.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- SLIDE 6 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">

        <h2 class=" t-title">5 simple machines in the bottle recycling machine:</h2>
            <img src="/assets/images/K1/cm/cmg1.png"/>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- SLIDE 7 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">
        <h2 class=" t-title">Sample Rube Goldberg Machine 3 - trap a lizard/gecko machine:</h2>
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/81.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- SLIDE 8 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">
        <h2 class=" t-title">5 simple machines in the trap a gecko/lizard machine:</h2>
        <img src="/assets/images/K1/cm/cm83.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- SLIDE 8 --}}
    <div class=" slide flex flex-col t-slide text-2xl !text-white justify-start  text-start ">
        <div>
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>
                    Encourage children to generate ideas through discussion; respect each other's
                    views and opinions; build the machine together as a team; tackle problems faced
                    one at a time; cheer for each other and never give up.
                </li>
                <li>
                    Ask questions to prompt children to share and try out their ideas. One strategy
                    for asking good questions is focusing on "what". "What" questions focus on what is
                    happening, what you are noticing, and what you are doing. The answers are right in
                    front of you and the children. Focusing questions on what children have observed
                    and noticed not only helps them develop valuable communication and observation
                    skills, but also builds their confidence by giving them questions they can answer
                    as experts.
                </li>
                <li>
                    Examples of "what" questions: What happened here/there? What did you try?
                    What have you changed about what you are making? What are the ideas you have
                    talked about that you haven't tried yet? What have you seen other people trying?
                    What do you notice about ...? What do you think will happen if we ...?
                </li>
                <li>
                    If time permits, extend the activity by encouraging children to expand their final
                    machines by adding in other remaining simple machines.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 9 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start !text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex whitespace-nowrap">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex whitespace-nowrap">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{--  slide 10 --}}
    <div class="text-white flex flex-col t-slide items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">Rube Goldberg Machine Creator</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place things as listed in preparations here.</li>
                </ul>

                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li>Decide a use for your Rube Goldberg Machine.</li>
                    <li>Choose and put things together to build the machine.</li>
                    <li>Test and improve the machine.</li>
                    <li>Show your friends where the simple machines are.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="absolute teacher-img1" />
        </div>
    </div>



    {{-- ================================================================================== --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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
            const returnRouteFromFirstSlide = "{{ route('InnovationSelection') }}";
            const doneButtonRoute = "{{ route('K1CompoundMachines') }}";

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
