@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Do they Kill Bacteria?</h2>

    {{-- sldie 1  --}}
    <div class=" slide t-slide flex text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to take sample bacteria from ourselves</li>
                <li>Test if hand sanitizers, hand soaps and toothpastes help to kill bacteria</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between ">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Sun</li>
                    <li>Bright / Brightly</li>
                    <li>Light</li>
                    <li>Stars</li>
                    <li>Fire</li>
                    <li>Natural</li>
                    <li>Natural Lights</li>
                    <li>Man-made Lights</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>2 Petri dishes with nutrient agar</li>
                <li>Cotton buds</li>
                <li>Gloves</li>
                <li>Self-adhesive labels (preferably small to avoid blocking of vision during
                    observation of sampled Petri
                    dishes)</li>
                <li>1 disinfectant spray</li>
                <li>1 dirty shoe (a sandal or slipper is easier for preparation of test samples)</li>
            </ul>
        </div>
        <div>
            <h2 class=" t-title">Definition of some words:</h2>
            <ul>
                <li>Antibiotics - medicine used to kill bacteria and treat infections</li>
                <li>Antiseptics - things used to kill bacteria by applying on the skin</li>
                <li>Petri dish - a flat dish with lid that scientists use to grow tiny living things
                    such as bacteria</li>
                <li>Nutrient agar - jelly-like thing that contains nutrients supporting growth of
                    bacteria</li>
                <li>Agar plate - a Petri dish filled with nutrient agar</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start list-disc">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                Brief children on the mission of the activity - prepare sampled petri dishes for <br>
                test. [Divide children into 3 groups to do the activity. Tell them that they are <br>
                going to prepare sampled petri dishes for test. Advise them take turns to do the <br>
                steps in groups. ]</li>
            <li>Note: Try to do the activity right after outdoor play or meal.</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k18.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start list-decimal">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                (G1 & G2) Use a cotton bud to go through hand of a group member to pick up sample bacteria. [Guide and
                advise children to choose a group member as the subject of the test and another member to do the step with
                hands wearing gloves. ]</li>
        </ul>
        <video id="video1" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/195.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start list-decimal">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                (G3) Use a cotton bud to go through teeth of a group member to pick up sample bacteria. [Guide and advise
                children to choose a group member as the subject of the test and another member to do the step with hands
                wearing gloves. ]</li>
        </ul>
        <video id="video2" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/196.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start ">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                2.(G1, G2 & G3) Remove the lid of a petri dish, use the cotton bud to lightly draw many lines on the agar in
                the dish and close the lid again. [Guide and advise children to choose another group member to do the step
                with hands wearing gloves. Once done, throw away the used cotton bud.]</li>
        </ul>
        <div class=" flex gap-1">
            <video id="video3" class="video1 pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/194.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="{{ asset('/assets/images/K2/livingthings/killing/k12.png') }}" class="!max-w-[11vw] !h-[7vw]" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 7 --}}
    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start ">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                3.(G1, G2 & G3) Label the sampled petri dish. [Guide and advise children to choose another group member to
                do the step. Small labels are preferred, so help to write on the labels if needed.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k13.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start ">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                4.Invite the group member to thoroughly clean his/her hands with hand sanitizers (G1) or hand soap (G2).
                [Remind children that the subject of the experiment will do this step. You may get all children to do this
                step together if the activity starts right after outdoor play or meal. Advise children to clean properly.]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k20.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide --}}
    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start ">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                4.Invite the group member to thoroughly brush his/her teeth with toothpastes (G3). [Remind children that the
                subject of the experiment will do this step. You may get all children to do this step together if the
                activity starts right after outdoor play or meal. Advise children to brush teeth with proper techniques .]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k15.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 9 --}}
    <div class="slide flex flex-col hidden justify-start items-center t-slide  ">
        <ul class="!text-white  !text-start ">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li> 5.(G1, G2 & G3) Use a new cotton bud to repeat step 1-3 . [Guide and advise children take turns to do the
                steps . Help if needed. Remember to use new cotton bud for each sample.] </li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k16.png" class="w-img3" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 10  --}}

    <div class="slide flex flex-col hidden justify-start items-center  t-slide  ">
        <ul class="!text-white  !text-start ">
            <h2 class="!text-white t-title">How to do the activity in groups and things to consider:</h2>
            <li>
                6.Put all the sampled petri dishes in a box and keep the box at a cooling place . [Teacher to do the step.
                For safety reason, use tape to seal the sides of all the petri dishes to prevent children from opening them
                . Tell children that bacteria need time to grow, so we'll check the results at least 10 days later .
                Remember to keep the box at a place with temperature between 24-29 ℃.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k17.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 16 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class=" flex whitespace-nowrap">
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
                    <li>Always ask questions to encourage children to think and share their ideas
                        first before giving
                        out
                        any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class=" flex whitespace-nowrap">
                        Click on this
                        shortcut icon
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 30 --}}
    <div class="slide flex flex-col hidden items-center justify-center t-slide">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div class="!text-white !text-start">
            <h2 class="title stroke !text-white">Fun Fact</h2>
            <h2 class=" t-title">What to do:</h2>
            <ul>
                <li>
                    <strong>*</strong> Invite children to pick up pictures and sort them into groups:
                    <ul class="mt-2 list-[lower-alpha] space-y-1 pl-6">
                        <li>Gives light or Does not give light</li>
                        <li>Natural light or Man-made light</li>
                    </ul>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- ========== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
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
            const returnRouteFromFirstSlide = "{{ route('killingSelection') }}";
            const doneButtonRoute = "{{ route('k2livingthings') }}";

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
