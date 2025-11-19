@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- Title --}}
    <h2 class="top-title stroke">Do they Kill Bacteria?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/killing/k1.png') }}" class="img-sm" />
        <h2 class="title stroke">What do you see in this picture?</h2>
        <p class="note">Note: Encourage children to recall and share the basic characteristics of bacteria.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/killing/k1.png') }}" class="img-sm" />
        <h2 class="title stroke">Bacteria are tiny living things around us.
            Bacteria can be found anywhere.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/killing/k2.png') }}" class="img-md" />
        <h2 class="title stroke">There are good and bad bacteria.
            Most bacteria around us are actually good.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/K2/livingthings/killing/k3.png') }}" class="img-h-md" />
            <img src="{{ asset('assets/images/K2/livingthings/killing/k4.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">Bad bacteria are called pathogens.
            Pathogens can cause and spread diseases in animals and plants.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/killing/k5.png') }}" class="img-xl" />
        <h2 class="title stroke">Nowadays we can use antibiotics, antiseptics and some cleaning
            products to fight against the bad pathogens.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-between h-[35vh] hidden">
        <h2 class="title stroke">Do you know how effective is some of the cleaning products
            that we used to fight against pathogens?
            Let's find out!</h2>
        <p class="note">Note: Divide children into 3 groups to do the activity. Tell them that they are going to
            prepare sampled petri dishes for test. Advise them take turns to do the steps in groups.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <h2 class="title stroke !text-white font-bold">Small Group Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/killing/k7.png') }}" class="img-xs" />
        <h2 class="title stroke !text-start">Let's find out: <br>
            (Group 1) Do hand sanitizers really kill bacteria? <br>
            (Group 2) Do hand soaps really kill bacteria? <br>
            (Group 3) Do toothpastes really kill bacteria?</h2>
        <p class="note">Note: Display all the things needed. Guide children to name the things and know their use.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/killing/k8.png') }}" class="img-sm" />
        <h2 class="title stroke !text-start">What do you think (Prediction): <br>
            (G1) Do hand sanitizers kill some or all the bacteria? <br>
            (G2) Do hand soaps kill some or all the bacteria? <br>
            (G3) Do toothpastes kill some or all the bacteria?</h2>
        <p class="note">Note: Have children vote for their choice and record the result in a graph
            (refer to the sample on the next page).</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <img src="{{ asset('assets/images/K2/livingthings/killing/k6.png') }}" class="img-md" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-400 text-xl">⭐</span>
            to mark the final result.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>(G1 & G2) Use a cotton bud to go through hand of a group member to pick up sample bacteria.</li>
            </ol>
        </div>
        <video id="video1" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/195.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Advise children to choose a group member as the subject of the test
            and another member to do the step with hands wearing gloves.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 11 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>(G3) Use a cotton bud to go through teeth of a group member to pick up sample bacteria.</li>
            </ol>
        </div>
        <video id="video2" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/196.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Advise children to choose a group member as the subject of the test
            and another member to do the step with hands wearing gloves.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 12 --}}
    <div class="slide flex flex-col items-center justify-center !gap-[.5vw] hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>(G1, G2 & G3) Remove the lid of a petri dish, use the cotton bud to lightly draw many lines on the agar
                    in the dish and close the lid again.</li>
            </ol>
        </div>
        <div class="flex gap-1">
            <video id="video3" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/videos/194.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="{{ asset('assets/images/K2/livingthings/killing/k12.png') }}" class="img-xs" />
        </div>
        <p class="note">Note: Advise children to choose another group member to do the step with hands wearing gloves.
            Once done, throw away the used cotton bud.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 13 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>(G1, G2 & G3) Label the sampled petri dish.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/killing/k13.png') }}" class="img-md" />
        <p class="note">Note: Advise children to choose another group member to do the step.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Invite the group member to thoroughly clean his or her hands with hand sanitizers (G1) or hand soap
                    (G2).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/killing/k14.png') }}" class="img-xl" />
        <p class="note">Note: Remind children that the subject of the experiment will do this step.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Invite the group member to thoroughly clean his or her teeth with toothpastes (G3).</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/killing/k15.png') }}" class="img-lg" />
        <p class="note">Note: Remind children that the subject of the experiment will do this step.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>(G1, G2 & G3) Use a new cotton bud to repeat step 1-3.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/killing/k16.png') }}" class="img-xl" />
        <p class="note">Note: Advise children take turns to do the different steps.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center hidden">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Put all the sampled petri dishes in a box and keep the box at a cooling place.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/killing/k17.png') }}" class="img-md" />
        <p class="note">Note: Teacher to do the step; use tape to seal all the petri dishes to prevent children from
            opening them.
            Tell children that bacteria need time to grow, so we'll check the results at least 10 days later.</p>
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
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

    {{-- Next Button --}}
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
