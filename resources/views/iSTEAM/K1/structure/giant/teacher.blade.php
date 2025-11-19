@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Giant Wheels</h2>


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
                    <li>Giant wheels</li>
                    <li>Carriages</li>

                </ul>
                <ul class="list-disc">
                    <li>Wheel</li>
                    <li>Axle</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Information of a standard beam bridge:</h2>
            <ul class="list-disc ">
                <li>
                    Each group a set of straws of different lengths — 11 long, 26 medium-length,
                    and 6 short straws (use a different colour for 12 of the medium-length straws)
                </li>
                <li>
                    Each group 2 fat straws (sample’s measurement: 2cm long)
                </li>
                <li>
                    Each group 22 long and 6 short pipe cleaners
                </li>
                <li>
                    Each child a pair of scissors (remind children to use them carefully)
                </li>
            </ul>
        </div>


        <img src="{{ asset('assets/images/K1/str/gw15.png') }}" />
        <p class="note !text-[#F7B94A]">Suggestion: Pre-pack these two materials in a bag for each child or group before
            each lesson.</p>
    </div>

    {{-- sldie 3 --}}
    <div class="flex !text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>A premade sample of umbrella (refer to the lesson on how to make it)</li>
            </ul>
        </div>
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/str/146.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 4 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for Activity 2:</h2>
            <ul class="list-disc">
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
                <li>Art and craft materials (anything suitable to build carriages of giant wheels)</li>
                <li>White glue</li>
                <li>Rulers</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/gw16.png') }}" class="img-md" />
    </div>


    {{-- sldie 5 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>
                    Ask questions to prompt children to share and try out their ideas.
                    Some possible questions are listed in the lesson; you may add on questions
                    based on children's responses.
                </li>
                <li>
                    During hands-on session 1, display the premade sample of a giant wheel and guide
                    children to name the shapes that form the giant wheel. After that, invite children
                    to follow the step-by-step videos on how to make a structure of the giant wheel.
                    Have them describe and then learn to do each step in groups. After the showcase,
                    guide them to reflect and share things they learned from this engineering activity
                    (refer to the next page).
                </li>
                <li>
                    During hands-on session 2, have them design the look of their carriages creatively
                    in the learning journals. Advise them to choose suitable art and craft materials
                    based on their design ideas to start building the carriages of their giant wheels.
                    During the showcase, have them share their design ideas with the class.
                </li>
            </ul>
        </div>
    </div>



    {{-- sldie 6 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Possible questions for reflection:</h2>
            <ul class="list-disc  space-y-[1.5vw]">
                <li>
                    Why do you think we built a big stand for the wheel?
                </li>
                <li>
                    What happens if we build a smaller stand for the wheel?
                </li>
                <li>
                    What problems did you encounter during the process of engineering
                    (constructing the giant wheel)? How did you overcome the problems?
                </li>
                <li>
                    If you get a chance to design and build a new giant wheel, how would you
                    modify the current design? Why?
                </li>

                <p>-----------------------------------------------------------------</p>
                <li> At the end of the lesson, display all the giant wheels created in the classroom.</li>
            </ul>
        </div>
    </div>


    {{-- sldie 7 --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Useful information:</h2>
            <ul class="list-disc ">
                <li>
                    A giant wheel is a non-building structure that rotates about a central axis. It is
                    an example of wheel and axle (a simple machine).
                </li>
                <li>
                    A giant wheel consists of a rotating upright wheel with multiple passenger
                    carriages (commonly called cabins, capsules or gondolas) attached to the rim in
                    such a way that as the wheel turns, the carriages are kept upright/always hang
                    downwards by gravity.
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/str/gw16.png') }}" class="img-md" />
            <p class="note w-[160px]">The simplest way
                to build the
                carriages - think
                of how a swing
                works!
            </p>
        </div>
    </div>



    {{-- slide 8 --}}
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
            const returnRouteFromFirstSlide = "{{ route('giantSelection') }}";
            const doneButtonRoute = "{{ route('giantSelection') }}";

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
