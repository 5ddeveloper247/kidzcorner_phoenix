@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Geodesic Domes</h2>

    {{-- sldie 1  --}}
    <div class="flex !text-white flex-col t-slide justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that buildings are common structures around us</li>
                <li>Know how tall buildings are built</li>
                <li>Know that architects and engineers are two main designers of buildings</li>
                <li>Design and build a tall building</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>

            <div>
                <ul class="list-disc ">
                    <li>Structures</li>
                    <li>Buildings</li>

                </ul>
                <ul class="list-disc">
                    <li>Architects</li>
                    <li>Engineers</li>
                    <li>Tall Buildings</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each child 18 long and 24 short straws (cut twelve long straws into half to
                    obtain the short straws)</li>
                <li>Each child 18 long, 24 medium-length and 5 short pipe cleaners (cut pipe
                    cleaners into three suitable lengths with reference to their specific use in the lesson)</li>
            </ul>
        </div>


        <img src="{{ asset('assets/images/K1/str/um19.png') }}" class="img-lg" />
        <p class="note !text-[#F7B94A]">Suggestion: Pre-pack these two materials in a bag for each child or group before
            each lesson.</p>
    </div>


    {{-- slide --}}
    <div class="flex !text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>A premade sample of geodesic dome (refer to the lesson on how to make it)</li>
            </ul>
        </div>


        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/113.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- sldie 3 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
                <li>Coloured transparent wrappers (tracing papers, cellophane wraps or any
                    transparent material that allow us to see the structure of a building after
                    it is wrapped)</li>
                <li>White glue or adhesive tape (single and double-sided)</li>
                <li>Long rulers and/or measuring tapes</li>
                <li>Labels (to indicate the name of a building)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/st18.png') }}" class="img-md" />
        <p class="note !text-[#F7B94A]">Suggestion: Cut the wrappers (if big size) into reasonable sizes of basic shapes for
            children to use.</p>
    </div>



    {{-- sldie 4 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div class="mt-[-1vw]">
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children to share and try out their ideas. Some possible
                    questions are listed in the lesson, you may add on questions based on children's
                    responses.</li>
                <li>During hands-on session I, have children observe and talk about the video
                    examples on how to join straws together using the pipe cleaners. Encourage them
                    to try out the methods when they start building their structures. Give them extra
                    time to explore and learn their own building techniques. If they need help, advise
                    them to first build some basic shapes (e.g .: cube, cuboid, pyramid, prism) and
                    then join the shapes together. Pause once or twice to point out good building
                    techniques or good building designs. At the end, guide them to measure the height
                    of their buildings and record the result in their learning journals. After the
                    showcase, guide them to reflect and share things they learned from this
                    engineering activity (refer to the next page).</li>
                <li>During hands-on session 2, guide children to search online some uses of a geodesic
                    dome (greenhouse, theatre, stadium, tent, etc) and then decide a use for their
                    buildings. After that, have them design the look of their geodesic dome buildings
                    creatively in the learning journals. Advise them to choose the wrappers based on
                    their design ideas to start building the look of their buildings. At the end, have
                    them name and label their buildings. During the showcase, have them share their
                    design ideas to the class.
                </li>
            </ul>
        </div>
    </div>


    {{-- sldie 5 --}}
    <div class="flex !text-white flex-col t-slide justify-around  text-start">
        <div>
            <!-- Reflection Questions -->
            <h3 class="t-title">Possible questions for reflection:</h3>
            <ul class="list-disc pl-6 space-y-2">
                <li>How many pentagons are there in the premade sample of geodesic dome?</li>
                <li>How many triangles make up the premade sample of geodesic dome?</li>
                <li>What problems did you encounter during the process of engineering (constructing the geodesic dome)? How
                    did you overcome the problems?</li>
                <li>How would you change your dome if you could continue to make it? Why?</li>
            </ul>

            <!-- End-of-lesson Activities -->
            <h3 class="t-title">End-of-lesson activities:</h3>
            <ul class="list-disc pl-6 space-y-2">
                <li>Put a geodesic dome building next to a few tall buildings built in a previous lesson. Have children
                    compare and find out which structure design is stronger or more stable.</li>
                <li>Display all the geodesic dome buildings created in the classroom.</li>
            </ul>

        </div>
    </div>


    {{-- sldie 6 --}}

    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Useful information:</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>
                    Geodesic domes are the upper portion of geodesic spheres. They are composed of
                    a network of triangles in a
                    <span class="text-[#f7n94a]">polyhedron</span> pattern. The structures are named
                    after <span class="text-[#f7n94a]">geodesics</span> and are based on geometric
                    shapes such as <span class="text-[#f7n94a]">icosahedrons</span>,
                    <span class="text-[#f7n94a]">octahedrons</span> or
                    <span class="text-[#f7n94a]">tetrahedrons</span>.
                    So what the children build in the lesson is only a variant of the geodesic dome.
                </li>

                <li>
                    The triangular elements of the dome are structurally rigid and distribute the
                    structural stress throughout the structure, making geodesic domes able to withstand
                    very heavy loads (such as snow loading, earthquakes, wind and so on) for their size.
                    Their efficiency is said to increase with size.
                </li>

                <li>
                    Geodesic domes can be assembled easily using a limited number of materials.
                    This makes them a more affordable and efficient housing option than conventional buildings.
                </li>

                <li>
                    Geodesic domes can be constructed in a variety of sizes, making them suitable
                    for a wide range of uses: building, temporary tent, playground equipment, roof.
                </li>
            </ul>

        </div>
    </div>


    {{-- slide 9 --}}
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
    </div>


    <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />




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
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('domeSelection') }}";
            const doneButtonRoute = "{{ route('domeSelection') }}";

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
