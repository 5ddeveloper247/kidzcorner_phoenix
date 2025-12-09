@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Programme A Robot 3</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb1.png') }}" class="img-lg" />
        <h2 class="stroke title">Children, what are these? Do you like them?
            How do you turn them on or off?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/gl7.png') }}" class="!w-[45vw]"  />
        <h2 class="stroke title">Children, what are these? What do you use them for?</h2>
        <p class="note">Note: Guide children to name the cards and talk about their uses.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb2.png') }}" class="img-lg" />
        <h2 class="stroke title text-5xl font-normal font-['Jua'] text-center">
            You can create a <span class="!text-white">programme</span> by arranging the
            <span class="!text-white">programming</span> <span class="!text-white">cards</span> in an order.
        </h2>
    </div>

    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb3.png') }}" class="img-lg" />
        <h2 class="stroke title text-center">Then you use a <span class="!text-white">pen controller</span> to tap on
            the different cards to record the <span class="!text-white">programme</span>.
        </h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb3.png') }}" class="img-lg" />
        <h2 class="stroke title text-center">When you use the <span class="!text-white">pen controller</span> to tap on the
            <span class="!text-white">play card</span>, the <span class="!text-white">robot</span> will run the recorded
            <span class="!text-white">programme</span>.
        </h2>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/7.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">This programme tells the robot to move through
            the maze and show a facial expression in the end.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-[1vw]">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke text-center">These are mats are designed with pictures for a reason.
            Let’s find out!</h2>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-between h-[32vw] slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time </h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Mission: <br>
                Let's lay out the sample maze and play a game. Use the
                programming cards to think and plan how to help a robot move
                from the starting point to the end point. After that, use the
                pen controller to record and play the programme to see how
                the robot moves according to the programme created. A surprise awaits you at the end!</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>
    {{-- ==== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="img-lg" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="img-lg" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.</p>
    </div>


    {{-- ===== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="img-lg" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="img-lg" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.
        </p>
    </div>

    {{-- ======== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="img-lg" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="img-lg" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.
        </p>
    </div>

    {{-- ======== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 10 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">piece of meat</span>.</h2>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="img-lg" />

        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 11 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">corn</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-between h-[32vw]  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="!text-white">bamboos</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="img-lg" />
        <p class="note">Note: Duplicate he set-up in class. Encourage children to name the things used in this set-up.
        </p>
    </div>

    {{-- ============ --}}
    {{-- slide 13 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-[1.3vw]">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke text-center">What are the uses of these mats?
            Let’s discuss and share!</h2>
    </div>

    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="{{ asset('assets/images/N2/BasicCoding/gl6.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">These mats are the starting points of the robot in different mazes.</h2>
    </div>


    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" class="img-sm" />
        <h2 class="title stroke text-center">These mats are in special shapes.</h2>
        <p class="note">Note: Display the mats. Guide children to compare their shapes with other mats.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title text-center">When you place a <span class="!text-white">robot</span> on one of the
            character
            <span class="!text-white">mats</span>,
            the <span class="!text-white">robot</span> turns into an animal character as shown.
        </h2>
        <p class="note">Note: Display the mats. Guide children to compare their shapes with other mats.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>

    {{-- slide 17 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" class="img-sm" />
        <h2 class="stroke title text-center">These mats have pictures of different food.
            Can you name the food?</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/gl6.png') }}" class="img-md" />
        <h2 class="stroke title text-center">When you <span class="!text-white">programme</span> a <span
                class="text-white">robot</span> to move to these picture
            <span class="!text-white">mats</span>, the <span class="!text-white">robot</span> shows reactions of the
            character.
        </h2>
    </div>



    {{-- =================================================================== --}}
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

        <button class="nextButton ">
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
            const returnRouteFromFirstSlide = "{{ route('Robot3Selection') }}";
            const doneButtonRoute = "{{ route('BasicCoding') }}";

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
