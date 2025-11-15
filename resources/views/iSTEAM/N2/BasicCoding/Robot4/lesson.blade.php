@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Programme A Robot 4</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb1.png') }}" class="img-lg" />
        <h2 class="stroke title">Children, what are these? Do you like them?</h2>
        <p class="note">Note: Encourage children to share their views.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/gl7.png') }}" />
        <h2 class="stroke title">Children, what are these? What do you use them for?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke text-center">What about these? What do you use them for?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="{{ asset('assets/images/N2/BasicCoding/gl6.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">You can use these mats to form mazes and then
            programme a robot to go through the mazes.</h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/9.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title text-center">When you place a <span class="!text-white">robot</span> on one of the
            character<span class="!text-white">mats</span>,
            the <span class="!text-white">robot</span> turns into an animal character as shown.
        </h2>
        <p class="note">Note: Display the mats. Guide children to compare their shapes with other mats.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="{{ asset('assets/images/N2/BasicCoding/gl6.png') }}" class="img-lg" />
        <h2 class="stroke title text-center">When you <span class="!text-white">programme</span> a <span
                class="text-white">robot</span> to move to these picture
            <span class="!text-white">mats</span>, the <span class="!text-white">robot</span> shows reactions of the
            character.
        </h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/10.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">So when you <span class="!text-white">programme</span> an animal to find its
            favourite food, it shows happy reactions.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/BasicCoding/videos/11.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">And when you <span class="!text-white">programme</span> an animal to find food
            that it does
            not like, it shows unhappy reactions.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb13.png') }}" class="img-h-md" />
        <h2 class="stroke title text-center"> These are the remaining picture <span class="!text-white">mats</span>.<br />
            What do you see from each <span class="!text-white">mat</span>?</h2>

    </div>


    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" class="img-h-sm" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb13.png') }}" class="img-h-sm" />
        </div>
        <h2 class="title stroke text-center">What will be the reactions of different animals when you
            programme them to move to these picture mats?</h2>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-between h-[55vh] slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
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
    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb14.png') }}" class="img-lg" />
        <h2 class="stroke title text-center">Patchy Panda is having fun at somewhere now.
            Can you name the place?</h2>
    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Patchy Panda wants to take pictures with the clown.
            Help him to get there.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Patchy Panda wants to visit the haunted house.
            Help him to get there.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl1.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Patchy Panda wants to ride on the merry-go-round.
            Help him to get there.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl2.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>



    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">It’s time to go home. <br>
            Help Patchy find to way home.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl3.png') }}" class="img-lg" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>

    {{-- sldie 17 --}}
    <div class="flex flex-col items-center justify-between h-[55vh] slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Mission: <br>
                Let's lay out the sample maze and play a game. Use the
                programming cards to think and plan how to help a robot move
                from the starting point to the end point. After that, use the
                pen controller to record and play the programme to see how
                the robot moves according to the programme created. A
                surprise awaits you at the end!</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- sldie 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb16.png') }}" class="img-h-sm" />
        <h2 class="title stroke text-center">It’s a bright and sunny day.
            Patchy Panda is planning what to do in the afternoon.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">First, he is going to eat the leftover birthday cake.
            Help him to get the cake.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl4.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>

    {{-- slide 20 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Next, he is going to play football with friends.
            Help him to get the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl5.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>

    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Then, he is going to shower.
            Help him to get to the bathroom.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl6.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">He is also going to read a book.
            Help him to get to the book.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl7.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 23 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Finally, he is going to take a nap.
            Help him to get the bedroom.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/dl8.png') }}" class="img-lg" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 24 --}}
    <div class="flex flex-col items-center justify-between h-[55vh] slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 3</h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Mission: <br>
                Change the animal character in each story and repeat
                the games!</h2>
        </div>
        <p class="note">Note: Guide children to replace the character mat in hands-on session 1 and 2 to repeat the
            games.</p>
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
            const returnRouteFromFirstSlide = "{{ route('Robot4Selection') }}";
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
