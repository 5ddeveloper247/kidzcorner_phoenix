@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">How Does A Screw Work?</h2>


    {{-- sldie 23  --}}
    <div class="flex !text-white flex-col t-slide justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore items with lights</li>
                <li>Develop awareness of natural and man-made light sources</li>
                <li>Understand how lights are useful to us and where lights can be found</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div>

            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machine</li>
                <li>Screw</li>
                <li>Thread</li>
                <li>Archimedes'screw</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 24 --}}
    <div class="flex !text-white flex-col t-slide items-center justify-start  text-start ">
        <div>
            <h2 class=" t-title">Preparations</h2>
            <ul class="list-disc ">
                <li>1 large, plastic and transparent container</li>
                <li>1 small, plastic and transparent container</li>
                <li>1 cardboard tube covered with coloured paper</li>
                <li> Further cover it with transparent cling wrap</li>

            </ul>
            <ul class="list-disc ">
                <li>Clear plastic tubing</li>
                <li>Food colouring</li>
                <li>Clear tape</li>
                <li> Water</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/a1.png') }}" class="img-lg" alt="Teacher" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- Slide 25 --}}
    <div class="flex !text-white flex-col t-slide items-center justify-start  text-start ">
        <div>
            <ul>
                <h2 class="t-title">How to make an Archimedes’ screw and things to consider:</h2>
                <li>1.Wrap the plastic tubing around the tube and secure with tape.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/a2.png') }}" class="img-lg" alt="Teacher" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- Slide 25 --}}
    <div class="flex !text-white flex-col t-slide items-center justify-start text-start ">

        <ul>
            <h2 class="t-title">How to make an Archimedes’ screw and things to consider:</h2>
            <li> 2. Put some water in a large container and add food colouring</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/a3.png') }}" class="img-lg" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- Slide 25 --}}
    <div class="flex !text-white flex-col t-slide items-center justify-start text-start ">
        <div>

            <h2 class="t-title">How to make an Archimedes’ screw and things to consider:</h2>
            <ol class="list-decimal" start="3">
                <li>Place the screw with the bottom end into the coloured water. Place
                    a small container under the top end of the screw. (Raise the level of
                    the small container by using a tissue box).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/sm/screw/s14.png') }}" class="img-lg" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- Slide 25 --}}
    <div class="flex !text-white flex-col t-slide items-center justify-start text-start ">
        <div>

            <h2 class="t-title">Working of the screw:</h2>
            <p>
                As we turn the screw, water enters the tubing. When we keep turning the screw,
                the water travels up the tubing which is the thread of the screw. It then flows into
                the smaller container kept at a higher level. (Keep the tube inclined and ensure that
                it is dipped into the water as you turn the screw.)</p>
        </div>
        <video id="video1" class=" pointer-events-none video-md">
            <source src="{{ asset('assets/images/K1/coding/46.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 25 --}}
    <div class=" t-slide text-start flex items-center !text-white !w-[53vw]">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{--  slide 26 --}}
    <div class="!text-white flex flex-col t-slide justify-start text-start text-2xl">
        <h2 class="title stroke text-center ">Learning Centre Idea</h2>
        <div>
            <h2 class=" text-[2vw] text-white stroke">How does a screw work?</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul class="list-decimal ">
                <li>Provide children with materials such as planks of wood with holes
                    (made beforehand), cardboard cut-outs (from boxes), some
                    screws of different lengths, some screw drivers and common
                    household items with screws on it such as toys and old cassettes.</li>
                <li>Provide plastic bottles with lids, milk/juice cartons with caps, etc.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher">
    </div>


    {{--  slide 26 --}}
    <div class="!text-white flex flex-col t-slide justify-start text-start text-2xl">
        <h2 class="title stroke text-center ">Learning Centre Idea</h2>
        <div>
            <h2 class=" text-[2vw] text-white stroke">How does a screw work?</h2>
            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal ">
                <li>Hold a screw with one hand and position it over the hole on a
                    wooden plank. Turn the screw driver with their other hand to fix
                    the screw into the plank of wood.</li>
                <li>
                    Use a screw to hold two cardboard cut-outs in place. You may
                    use more screws to hold the two cardboards tightly.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher">

    </div>


    {{--  slide 26 --}}
    <div class="!text-white flex flex-col t-slide justify-start text-start text-2xl">
        <h2 class="title stroke text-center ">Learning Centre Idea</h2>
        <div>
            <h2 class=" text-[2vw] text-white stroke">How does a screw work?</h2>
            <h2 class="t-title">What to do:</h2>
            <ol class="list-decimal " start="3">
                <li>Unscrew and then screw in the screws on used items such as old
                    toys, cassettes, etc.</li>
                <li>Fill empty cartons/bottles with water and observe how lids which
                    are screwed on prevent water from spilling</li>

            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher">

    </div>





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
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('ScrewSelection') }}";
            const doneButtonRoute = "{{ route('ScrewSelection') }}";

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
