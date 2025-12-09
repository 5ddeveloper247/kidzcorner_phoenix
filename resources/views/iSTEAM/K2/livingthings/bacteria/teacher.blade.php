@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">What are Bacteria?</h2>

    {{-- slide 1  --}}
    <div class="t-slide flex  !text-white flex-col justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know the basic characteristics of bacteria</li>
                <li>Know that there are good and bad bacteria</li>
                <li>Know that most bacteria around us are actually good</li>
                <li>Learn how to use the scientific method for growing bacteria and test if disinfectant sprays help to kill
                    bacteria</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between ">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <div>
                    <ul class="list-disc ">
                        <li>Living Thing</li>
                        <li>Bacteria</li>
                        <li>Bacterium</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Antibiotics</li>
                        <li>Antiseptics</li>
                        <li>Pathogens</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 2 --}}
    <div class="t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>2 Petri dishes with nutrient agar</li>
                <li>Cotton buds</li>
                <li>Gloves</li>
                <li>Self-adhesive labels (preferably small to avoid blocking of vision during observation of sampled Petri
                    dishes)</li>
                <li>1 disinfectant spray</li>
                <li>1 dirty shoe (a sandal or slipper is easier for preparation of test samples)</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">Definition of some words:</h2>
            <ul class="list-disc">
                <li>Antibiotics - medicine used to kill bacteria and treat infections</li>
                <li>Antiseptics - things used to kill bacteria by applying on the skin</li>
                <li>Petri dish - a flat dish with lid that scientists use to grow tiny living things such as
                    bacteria</li>
                <li>Nutrient agar - jelly-like thing that contains nutrients supporting growth of bacteria</li>
                <li>Agar plate - a Petri dish filled with nutrient agar</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide  3 --}}
    <div class="flex flex-col justify-start items-center  t-slide  ">
        <div>

            <h2 class="t-title">How to grow bacteria and things to consider:</h2>
            <ul class="!text-white ! !text-start list-decimal">
                <li>Use a cotton bud to go through surface of a dirty shoe
                    to pick up sample bacteria. [Invite and guide a
                    child to do the step with hands wearing gloves .]</li>
            </ul>
        </div>
        <video id="video1" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/193.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 4 --}}

    <div class="flex flex-col justify-start items-center  t-slide  ">
        <div>

            <h2 class="t-title">How to grow bacteria and things to consider:</h2>
            <ol class="!text-white ! !text-start list-decimal" start="2">
                <li>Remove the lid of a petri dish, use the cotton bud to
                    lightly draw many lines on the agar and close the lid again. [Invite and guide another child to do the
                    step
                    with hands wearing gloves. Once done, throw away the used cotton bud. To see obvious result at the end,
                    make
                    sure to draw many lines on the agar.]</li>
            </ol>
        </div>
        <div class="flex gap-1 items-start">
            <img src="{{ asset('/assets/images/K2/livingthings/bacteria/b28.png') }}" class="!w-[14vw]" />
            <video id="video2" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/194.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide  5 --}}

    <div class="flex flex-col justify-start items-center  t-slide  ">
        <div>
            <h2 class="t-title">How to grow bacteria and things to consider:</h2>
            <ol class="!text-white ! !text-start list-decimal" start="3">
                <li>Label the sampled petri dish. [Invite and guide another
                    child to do the step . Small labels are preferred, so help to write on the labels if needed.]</li>
            </ol>
        </div>

        <img src="{{ asset('/assets/images/K2/livingthings/bacteria/b30.png') }}" class="!w-[35vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide  6 --}}

    <div class="flex flex-col justify-start items-center  t-slide  ">
        <div>

            <h2 class="t-title">How to grow bacteria and things to consider:</h2>
            <ol class="!text-white ! !text-start list-decimal" start="4">
                <li>Spray on the surface of the shoe. [Invite and guide
                    another child to do the step. Help if needed.]</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images/K2/livingthings/bacteria/b31.png') }}" class="!w-[35vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 7 --}}

    <div class="flex flex-col justify-start items-center  t-slide  ">
        <div>

            <h2 class="t-title">How to grow bacteria and things to consider:</h2>
            <ol class="!text-white ! !text-start list-decimal" start="5">
                <li>Use a new cotton bud to repeat step 1-3. [Invite and
                    guide different children to do the steps. Help if needed. Remember to use new cotton bud for each
                    sample.]
                </li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images/K2/livingthings/bacteria/b34.png') }}" class="img-xl" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class="t-slide flex  !text-white flex-col  justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ol class="list-decimal " start="6">
                <li>Put both the sampled petri dishes in a box and keep the box at a cooling place . [Teacher to do the
                    step. For safety reason, use tape to seal the sides of all the petri dishes to prevent children from
                    opening them . Tell children that bacteria need time to grow, so we'll check the results at least 10
                    days later. keep the box at a place with temperature between 24-29 C.]</li>
                <ol>
        </div>

        <img src="{{ asset('assets/images/K2/livingthings/bacteria/b33.png') }}" class="img-xs" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
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

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 10 --}}
    <div class="flex flex-col items-center justify-center t-slide   ">
        <img src="{{ asset('/assets/images/K2/livingthings/bacteria/b26.png') }}" class="img-md" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-300 text-[1vw]">⭐</span>
            to mark the final result.</p>
    </div>


    {{-- slide 11  --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div class="space-y-[1vw]">
            <h2 class="!text-white title stroke ">Fun Facts</h2>
            <div>

                <h2 class="t-title">What and how to set up:</h2>
                <ul>
                    <li>Use your creativity to design graphic fact sheet for every fun fact below.
                        Guide children to understand the facts.</li>
                </ul>
            </div>
        </div>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul>
                <li>A bacterium is made up of only one cell. DNA is stored in the cell.</li>
                <li>You have more bacteria than cells in your body.</li>
                <li>
                    If you put all the bacteria in your body together, they weigh around
                    1.8kg</li>
                <li>Most antibiotics are made from bacteria.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
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
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('bacteriaSelection') }}";
            const doneButtonRoute = "{{ route('bacteriaSelection') }}";

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
