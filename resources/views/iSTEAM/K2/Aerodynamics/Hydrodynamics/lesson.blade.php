@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Hydrodynamics</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h1.png') }}" class="!max-w-[40vw]" />
        <div class="title stroke">
            <h2>Aerodynamics is the way air moves around things.
                Anything that moves through air is affected by aerodynamics.</h2>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h3.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">Can you name the <span class="!text-white">four aerodynamic forces?</span></h2>
        <p class="text-white">Can you name the four aerodynamic forces?</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke text-center">These four aerodynamic forces affect the way an aeroplane
            moves.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h5.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke text-center">Weight comes from the force of gravity pulling down objects.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h6.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">Lift is a force that pushes something up.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h7.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">Thrust is the force that pushes the aeroplane forward.</h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h8.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">Drag is the opposing force of thrust that slows down the
            aeroplane.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">Which force has to be higher for the aeroplane to take off?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h21.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">The aeroplane can only take off into the sky when the lift is
            higher than the weight.</h2>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">Which force has to be less for the aeroplane to keep moving
            forward during flight?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h8.png') }}" class="!max-w-[40vw]" />
        <h2 class="title stroke">When there is less drag, the aeroplane will be able to keep
            moving forward.</h2>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vh]">
        <h2 class="title stroke">Now you have learned about aerodynamics,
            what do you think is hydrodynamics?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h2.png') }}" />
        <h2 class="title stroke">Hydrodynamics comes from the word hydro (water) and
            dynamic (movement).</h2>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h2.png') }}" />
        <h2 class="title stroke">Hydrodynamics is the way water or liquid moves around things.</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center relative">
        <div class="flex items-center gap-[5rem]">
            <div class="flex items-center gap-[4vw]">
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video1')"class="video-btn">
                    <img src="/assets/images/pptimages/video.png" />
                </div>
                <video id="video1" class="pointer-events-none !max-w-[15vw] h-[45vh]">
                    <source src="{{ asset('assets/images/K2/aero/hydro/215.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="flex items-center gap-[4vw]">
                <video id="video2" class="pointer-events-none !max-w-[15vw] h-[45vh]">
                    <source src="{{ asset('assets/images/K2/aero/hydro/216.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video2')"class="video-btn">
                    <img src="/assets/images/pptimages/video.png" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">Hydrodynamics is the way water or liquid moves around things.</h2>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[25vh] ">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="slef-start text-start">
            <h2 class="title stroke text-start">Let's find out: <br>
                Let's find out what affects the movement of an object in water.</h2>
        </div>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start title stroke">
            <h2>Steps:</h2>
            <ol class="list-decimal lesson-ul" start="1">
                <li>Prepare a flat board/container lid, a tub of water and a peg.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/aero/hydro/h11.png') }}" class="large-img6" />
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start title stroke">
            <h2>Steps:</h2>
            <ol class="list-decimal lesson-ul" start="2">
                <li>Push the board/lid forward in the water with the flat surface in front</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/aero/hydro/h12.png') }}" class="w-img"/>
        <p class="note">Note: Submerge the board/lid at least 3/4 deep into the water and push it forward slowly.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start title stroke">
            <h2>Steps:</h2>
            <ol class="list-decimal lesson-ul" start="3">
                <li>Turn the board/lid sideways (as shown) and push it through the water.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/aero/hydro/h13.png') }}" class="w-img"/>
        <p class="note text-center">Note: Submerge the board/lid at least 3/4 deep into the water and push it forward
            slowly.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[30vh]  ">
        <h2 class="title stroke">Which way is easier to push the board/lid through the water?
            Why?</h2>
        <p class="note text-center">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/hydro/217.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">It is harder to push the board forward this way because the
            force of drag is higher due to the shape.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/hydro/218.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">On the other hand, it is easier to push the board/lid forward
            this way as this shape creates less drag.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h17.png') }}" />
        <h2 class="title stroke">Similarly, a person will experience more drag while walking in
            water with their body facing forward.</h2>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h18.png') }}" class="large-img6" />
        <h2 class="title stroke">Look at these pictures. How are boats and ships designed to
            reduce drag in water?</h2>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h18.png') }}" class="large-img6" />
        <h2 class="title stroke">The V-shaped hull of the boats and ships is designed to reduce
            drag as they move through water.</h2>
    </div>



    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h19.png') }}" class="large-img6" />
        <h2 class="title stroke">Look at these pictures. Have you seen these before? <br>
            How are they different from normal boats?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h19.png') }}" class="large-img6" />
        <h2 class="title stroke text-start">Do you think these will move faster or slower as compared to
            normal boats? Why?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h19.png') }}" class="large-img6" />
        <h2 class="title stroke">These are <span class="!text-white">hydrofoil</span> boats. <br>
            They have underwater wings called hydrofoils.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/aero/hydro/h20.png') }}" class="large-img6" />
        <h2 class="title stroke text-start">The hydrofoils can lift the boat's hull above water, which
            reduces drag and help the boat moves faster.</h2>
    </div>

    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


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
            const returnRouteFromFirstSlide = "{{ route('HydrodynamicsSelection') }}";
            const doneButtonRoute = "{{ route('HydrodynamicsSelection') }}";

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
