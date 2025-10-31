@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is Scratch Jr?</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K2/coding/s1.png" />
        <div class="title stroke">
            <h2>Children, do you remember what these are?
                What did we do with them?</h2>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <div class="flex items-center gap-2 justify-center   ">
            <div>
                <img src="/assets/images/K2/coding/s2.png" class="large-img3" />
                <img src="/assets/images/K2/coding/s3.png" class="large-img3" />
            </div>
            <img src="/assets/images/K2/coding/s1.png" />
        </div>
        <h2 class="title stroke">We used an application called Blockly in a tablet
            to programme the robot to do certain tasks.</h2>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/K2/coding/gl1.png') }}" class="!w-[16vw]" />
            <video id="video1" class="pointer-events-none ">
                <source src="{{ asset('assets/images/K2/final/224.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke text-center">For an example, we used Blockly to programme the robot
            to say "Hi" before moving forward and then
            say "Ta-da" before changing its eye pattern.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="/assets/images/K2/coding/s4.png" />

        <h2 class="title stroke">Now, let's explore and learn about another interesting
            application called ScratchJr!</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start  gap-[4rem] ">
        <img src="/assets/images/K2/coding/s5.png" class="large-img6" />

        <h2 class="title stroke">
            <span class="!text-white">ScratchJr</span>
            is a tool that allows us to create our own
            interactive stories and games.
        </h2>

        <p class="note">Note: Encourage children to share whether they like to read storybooks and create their own
            stories.</p>
    </div>




    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  gap-[2rem]">

        <img class="max-w-[13vw]" src="/assets/images/K2/coding/s5.png" />

        <img class="max-w-[13vw]" src="/assets/images/K2/coding/s4.png" />


        <h2 class="title stroke">How does ScratchJr work?
            Let's find out together!</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  gap-[2vw] ">
        <img src="/assets/images/K2/coding/s6.png" />

        <h2 class="title stroke">This is the application icon of ScratchJr in a tablet.</h2>


        <p class="note">Note: Use a tablet to show the application of ScratchJr. Demonstrate the correct way to handle
            a tablet. Remind children that we should use it with care to prevent it from spoiling easily.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s7.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s9.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap on the icon of ScratchJr to open the application.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s11.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s10.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap here to start using the <span class="!text-white">application</span>.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>



    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s12.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s13.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap here to start creating a project.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s14.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s15.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap here to add a background.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s16.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s17.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>



    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s14.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s15.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">To change background, tap here again.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>




    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s18.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s19.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s20.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s21.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap here to add a character..</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>



    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2rem]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s22.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s23.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap on the background that you want and then tap here
            to return to the working stage.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it; double click on the selected background will
            achieve the same effect.</p>
    </div>



    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s24.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s25.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">Tap, drag and place to move a character.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>



    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center  gap-[4rem]">

        <img src="/assets/images/K2/coding/s26.png" class="large-img6" />
        <h2 class="title stroke">To delete the character, tap and hold it till you see a cross
            and then tap the cross.</h2>
        <p class="note">Note: Use a tablet to demonstrate how to do it; show children both ways to delete a character.
        </p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <div class="flex items-center gap-2 justify-center items-center">

            <img src="/assets/images/K2/coding/s27.png" class="!max-w-[19vw]" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />


            <img src="/assets/images/K2/coding/s28.png" class="!max-w-[19vw]" />

        </div>

        <h2 class="title stroke">If you tap here, your project will be saved.</h2>

        <p class="note">Note: Use a tablet to demonstrate how to do it.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  gap-[8rem] ">

        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <ul class="title stroke !text-start">
            <li>Mission:</li>
            <li>Let's use ScratchJr to create a story about two friends</li>
            <li>helping each other. What happens in the story? Share your</li>
            <li>story with the class.</li>
        </ul>

        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">

        <ul class="title stroke !text-start">
            <li>Steps: 1. Tap on the icon of ScratchJr to open the application.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s7.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s9.png" />
        </div>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <ul class="title stroke !text-start">
            <li>Steps: 2. Tap here to start using the application.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s11.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s10.png" />
        </div>
    </div>

    {{-- slide 30 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <ul class="title stroke !text-start">
            <li>Steps: 3.Tap here to start creating your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center">
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s12.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s19.png" />
        </div>
    </div>


    {{-- slide 31 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <ul class="title stroke !text-start">
            <li>Steps: 4.Choose a background for your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center  relative">
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s14.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="  !max-w-[19vw]" src="/assets/images/K2/coding/s30.png" />
            <img class=" right-[12vw] bottom-[14rem]   absolute   " src="/assets/images/K2/coding/s31.png" />


        </div>

        <p class="note">Note: Remind children that it’s a story about two friends helping each other.</p>

    </div>

    {{-- slide 32 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <ul class="title stroke !text-start">
            <li>Steps: 5.Choose two character for your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center  relative">
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s32.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="  !max-w-[19vw]" src="/assets/images/K2/coding/s21.png" />
            <img class=" right-[12vw] bottom-[14rem]   absolute   " src="/assets/images/K2/coding/s31.png" />


        </div>

        <p class="note">Note: Remind children that it’s a story about two friends helping each other.</p>

    </div>
    {{-- slide 33 --}}
    <div class="slide hidden flex flex-col items-center  gap-[2vw]">
        <ul class="title stroke !text-start">
            <li>Steps: 6.What happens in your story? Share your story.</li>
        </ul>
        <div class="flex items-center gap-2 justify-center items-center  ">
            <img class="!max-w-[19vw]" src="/assets/images/K2/coding/s33.png" />
            <img src="/assets/images/K2/coding/s8.png" class="!max-w-[2.5vw]" />
            <img class="  !max-w-[19vw]" src="/assets/images/K2/coding/s34.png" />
        </div>
        <p class="note">Note: Have children share their stories to the class using the presentation mode..</p>
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
            const returnRouteFromFirstSlide = "{{ route('scratchSelection') }}";
            const doneButtonRoute = "{{ route('scratchSelection') }}";

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
