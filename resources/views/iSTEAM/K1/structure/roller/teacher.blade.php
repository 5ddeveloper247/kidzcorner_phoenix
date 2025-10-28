@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Roler Coasters</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that a roller coaster is an elevated track with turns and slopes for open cars</li>
                <li>Learn to build a ball roller coaster</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Structures</li>
                <li>Roller Coasters</li>
                <li>Track</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for the making of the track:</h2>
            <ul class="list-disc ">
                <li>Each group a set of straws of different lengths - 15 long, 4 medium-length, and 36 short straws</li>
                <li>Each group 20 pipe cleaners (sample's measurement: 30cm long)</li>
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/r17.png') }}" alt="Teacher" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <p class="note !text-[#F7B94A]">Suggestion: Pre-pack these two materials in a bag for each child or group before
            each lesson.</p>
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for the making of the track supports (pyramids):</h2>
            <ul class="list-disc">
                <li>Each group a set of straws (colour different from the track)</li>
                <li>Each group 50 pipe cleaners (sample's measurement: 30cm long)</li>
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/r18.png') }}" alt="Teacher" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <p class="note !textiamber-300">Suggestion: Pre-pack these two materials in a bag for each child or group before
            each lesson.</p>
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for the testing of the ball roller coaster:</h2>
            <ul class="list-disc">
                <li>Each group a ping pong ball</li>
                <li>Each group a suitable container</li>
                <li>Adhesive tape (for fixing the position of the pyramids)</li>
            </ul>
        </div>
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/157.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video> <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>
                    Ask questions to prompt children to share and try out their ideas.
                    Some possible questions are listed in the lesson; you may add on questions
                    based on children's responses.
                </li>
                <li>During hands-on session, have children observe a sample ball roller coaster from a
                    video and guide them to identify the characteristics of the sample roller coaster.
                    After that, invite children to follow the step-by-step videos on how to make the
                    track and track supports of a ball roller coaster. Have them describe and then
                    learn to do each step in groups. When they start forming their roller coasters,
                    remind them to arrange their supports in the sequence according to the sample
                    shown. When they start testing of their ball roller coasters, encourage them to
                    try their own ways to solve the problems encountered. After the showcase, guide
                    them to reflect and share things they learn from this engineering activity (refer
                    to the next page).</li>
                <li>If time allowed, you may get children work as a class to build pyramids of
                    different heights and arrange them into a new design of roller coaster.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Possible questions for reflection:</h2>
            <ul class="list-disc ">
                <li>Do you think the arrangement of the pyramids of different heights is important in
                    making a successful ball roller coaster? Why? [Yes, the ball may fail to complete
                    a ride due to lack of strength.]</li>
                <li>What problems did you encounter during the process of engineering (constructing
                    the ball roller coaster)? How did you overcome the problems?</li>

                <li>-----------------------------------------------------------------------</li>
                <li>At the end of the lesson, display all the ball roller coasters created in the
                    classroom.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>

                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

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
            const returnRouteFromFirstSlide = "{{ route('rollerSelection') }}";
            const doneButtonRoute = "{{ route('K1structure') }}";

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
