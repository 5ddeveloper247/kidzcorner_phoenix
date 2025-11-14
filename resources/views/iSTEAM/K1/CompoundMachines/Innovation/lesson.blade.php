@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Domino Fun</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh]  ">
        <h2 class="title stroke">What are simple machines?</h2>
        <p class="note ">Note: Have children recall and talk about the name and uses of the six simple machines.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/cm/cmg.png" class="large-img5" />
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Do you remember what this is?</h2>
        <p class="note">Note: Have children recall and talk about the use of this Rube Goldberg Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Does it have any simple machine?</h2>
        <p class="note">Note: Have children name the 2 simple machines in this pop a balloon machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What are the simple machines?</h2>
        <p class="note">Note: Have children name and point at the 2 simple machines - inclined plane, wedge.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Do you remember what this is?</h2>
        <p class="note">Note: Have children recall and talk about the use of this Rube Goldberg Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Does it have any simple machine?</h2>
        <p class="note">Note: Have children name the 2 simple machines in this water a plant machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What are the simple machines?</h2>
        <p class="note">Note: Have children name and point at the 2 simple machines - inclined plane, pulley.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Do you remember what this is?</h2>
        <p class="note">Note: Have children recall and talk about the use of this Rube Goldberg Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Does it have any simple machine?</h2>
        <p class="note">Note: Have children name the 3 simple machines in this hole punching machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What are the simple machines?</h2>
        <p class="note">Note: Have children name and point at the 2 simple machines - inclined plane, pulley.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 12 --}}
    <div class=" slide hidden flex flex-col items-center justify-between h-[30vh] ">
        <h2 class="title stroke">What are compound machines?</h2>
        <p class="note">Note: Have children recall and say what a compound machine is.</p>
    </div>


    {{-- sldie 13 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Compound Machine</h2>
        <p class="note text-center">A compound machine is a machine that
            consists of more than one simple machine, A bicycle is a compound machine.</p>
        <img src="/assets/images/K1/cm/cm54.png" />
    </div>



    {{-- sldie 14 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/balloon/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Is this a compound machine?</h2>
        <p class="note">Note: Guide children to conclude that this Rube Goldberg Machine is a compound machine.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 15 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video11" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/34.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Is this a compound machine?</h2>
        <p class="note">Note: Guide children to conclude that this Rube Goldberg Machine is a compound machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 16 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/41.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Is this a compound machine?</h2>
        <p class="note">Note: Guide children to conclude that this Rube Goldberg Machine is a compound machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 17 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">In fact, most of the <span class="!text-white">Rube Goldberg Machines</span> are
            <span class="!text-white">compound machines</span>!
        </h2>
        <h2 class="title stroke">
            Many people build their Rube <span class="!text-white">Goldberg Machines</span> with the
            ideas of the is <span class="!text-white">simple machines</span>!</h2>
    </div>


    {{-- sldie 18 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video13" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/79.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of this machine?</h2>
        <p class="note">Note: Have children talk about the use of this Rube Goldberg Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 19 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video14" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/79.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What simple machines does it have?</h2>
        <p class="note">Note: Have children name the 3 simple machines in this raise a flag Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video14')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 20 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video15" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/79.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What are the 3 simple machines?</h2>
        <p class="note">Note: Have children name and point at the 3 simple machines - wheel and axle, inclined plane,
            pulley.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video15')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 21 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video16" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/80.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What are the 3 simple machines?</h2>
        <p class="note">Note: Have children name and point at the 3 simple machines - wheel and axle, inclined plane,
            pulley.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video16')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 22 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video17" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/80.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of this machine?</h2>
        <p class="note">Note: Have children talk about the use of this Rube Goldberg Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video17')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- sldie 23 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video18" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/80.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What simple machines does it have?</h2>
        <p class="note">Note: Have children name the 5 simple machines in this bottle recycling Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video18')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 24 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video19" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/81.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What simple machines does it have?</h2>
        <p class="note text-center">Note: Have children name and point at the 5 simple machines - lever, wedge, wheel and
            axle,
            inclined plane, screw.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video19')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 25 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video20" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/81.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of this machine?</h2>
        <p class="note">Note: Have children talk about the use of this Rube Goldberg Machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video20')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 26 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video21" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/81.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What simple machines does it have?</h2>
        <p class="note">Note: Have children name the 5 simple machines in this trap a lizard/gecko machine.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video21')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 27 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <video id="video22" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/81.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What are the simple machines?</h2>
        <p class="note text-center">Note: Have children name and point at the 5 simple machines - lever, pulley, wheel and
            axle,
            inclined plane, screw.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video22')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 28 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Now, let’s create a Rube Goldberg Machine!</h2>
    </div>


    {{-- sldie 29 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">What do you want your Rube Goldberg Machine do?</h2>
        <div class="flex justify-between title stroke">
            <ul class="list-decimal">
                <li>Ring a bell</li>
                <li>Raise a flag</li>
                <li>Recycle a bottle</li>
                <li>Other use</li>
            </ul>
            <ul>
                <li>5.Launch a Ball</li>
                <li>6.Throw a rubbish</li>
                <li>7.Trap an Animal</li>
            </ul>
        </div>
    </div>


    {{-- sldie 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-between h-[50vh] ">
        <h2 class=" title stroke !text-white">Small Group Activity</h2>
        <h2 class="text-center title stroke">Mission: <br> Create a Rube Goldberg Machine that includes at least
            three simple machines!</h2>
        <p class="note">Note: Organise children into a few small groups.</p>
    </div>


    {{-- sldie 31 --}}
    <div class=" slide hidden flex flex-col items-center justify-between h-[50vh] ">
        <ul class="text-start list-decimal title stroke">
            <h2 class="title stroke">Steps:</h2>
            <li>Decide a use for your Rube Goldberg Machine.</li>
            <li>Give ideas on how to design the machine.</li>
            <li>Draw the final design.</li>
            <li>Choose and put things together to build the machine.</li>
            <li>Test and improve the machine.</li>
            <li>Show your friends the final machine.</li>
        </ul>
        <p class="note">Note: Have children discuss and work in groups to create a Rube Goldberg Machine. If needed,
            search for suitable YouTube videos to show children more examples of Rube Goldberg Machine made up of six simple
            machines.</p>
    </div>


    {{-- slide 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p class="text-center">What kind of rube Goldberg Machine did you create together with your friends? Draw it.
            </p>
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
            const returnRouteFromFirstSlide = "{{ route('InnovationSelection') }}";
            const doneButtonRoute = "{{ route('InnovationSelection') }}";

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
