@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Fingerprints</h2>

    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to make their own set of fingerprints for analysis</li>
                <li>Know that fingerprints are ridges on the tips of our thumbs and fingers</li>
                <li>Know that no two fingerprints are exactly alike</li>
                <li>Know that individual fingerprints are unique and no two people have the same
                    fingerprints</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Fingerprint</li>
                    <li>Ridge</li>
                    <li>Thumb</li>
                    <li>Finger</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>
                    Pencils (for a better outcome, 8B pencil is recommended)
                </li>
                <li>Plain papers</li>
                <li>
                    Adhesive clear tapes (for a better outcome, 3M Scotch Tape is recommended)
                </li>
                <li>Scissors</li>
                <li>
                    Wet towels (can be replaced with wet rags)
                </li>
                <li>
                    A few magnifying glasses (optional)
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul class="list-disc">
                <li>This is a small group activity. Organise children into groups of 3 and have them
                    take turns to play role
                    A, B & C. Before the activity, have them clean and dry their hands first to remove dirt that may obscure
                    the fingerprints.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f13.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul class="list-decimal">
                <li>(A) Use a pencil to make a patch of dark mark on a paper. [ Have all the A do the
                    step. Advise A to
                    darken the patch by shading the patch again and again. ]</li>
            </ul>
        </div>
        <video id="video1" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/183.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>2. (B) Rub a fingertip over the pencil mark to stain it. [Have all the B do the
                    step.]</li>
            </ul>
        </div>
        <video id="video2" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/184.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 6 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>3. (C) Cut and stick a piece of clear tape on the stained fingertip (of B). [Have
                    all the C do the step.
                    Advise C to hold only an edge of the tape and stick the tape flat on the fingertip of B. ]</li>
            </ul>
        </div>
        <video id="video3" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/185.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 7 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>4. (C) Carefully remove the tape from the fingertip (of B) and paste it on the
                    learning journal (of B).
                    [Have all the C do the step. Remind C to paste the tape in the correct place of B's fingerprint record.]
                </li>
            </ul>
        </div>
        <video id="video4" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/186.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video> <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 8 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>5. (A) Use a wet towel to clean the fingertip (of B). [ Have all the A do the step.
                    Explain to children
                    that this is to avoid possible messiness when taking prints of other fingers. ]</li>
            </ul>
        </div>
        <video id="video5" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/187.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video> <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 9 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>6. (A, B & C) Repeat the steps for other fingers. [Have all the A, B & C repeat
                    steps 1-5 to complete
                    the fingerprint record of B. After that, have them change their roles to help one another complete the
                    fingerprint record. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f8.png') }}" class="w-img3" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 10 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>7. Observe your fingerprints. [ Have children observe and compare their own set of
                    fingerprints on the
                    record. Then have them share their views. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}"/>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 11 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>8. Compare your fingerprints with friends. [ Have children observe and compare
                    their fingerprints with
                    friends. Then have them share their views. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" class="w-img3" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 12 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture,click on the picture to watch the video.
                    </li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>
                        Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        Click on this shortcut icon
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul>
                <h2 class="!text-white title stroke">Fingerprints Art</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <li>Put some paints, sponges, coloured pencils and drawing papers here.</li>
            </ul>

            <div>
                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li>Turn your fingerprints into art! Put your fingerprints on the
                        drawing paper.</li>
                    <li>Use your imagination to turn it into a creative drawing by adding
                        details with coloured pencils.</li>
                    <li>Show it to your teacher and friends!</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul class="list-disc">
                <h2 class="!text-white title stroke">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p>Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.</p>
                <li>Fingerprints actually help you to grasp an object. Without them,
                    your fingers will be slippery and you will not be able to write or
                    paint properly.</li>
                <li>Adermatoglyphia is a genetic disease where people are born
                    without fingerprints.</li>
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
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('FingerprintsSelection') }}";
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
