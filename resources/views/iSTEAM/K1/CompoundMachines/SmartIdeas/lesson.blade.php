@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Smart Ideas for my Machine</h2>

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/73.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch a video! What do you see?</h2>
        <p class="note">Note: Let children share what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/73.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When the first domino is pushed, it falls and pushes
            the second domino.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/73.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When the second domino falls on the ice cream stick,
            the ice cream stick moves and pushes the next domino.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/73.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When one action causes the next action, which in turn causes
            the next action, and so on, we call it a <span class="!text-white">domino effect</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/73.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke"><span class="!text-white">Chain reaction</span> is another name for a <span
                class="!text-white">domino effect</span>.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm25.png') }}" class="img-lg" />
        <h2 class="title stroke">You can make a long chain of dominoes with
            the help of ice cream sticks.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-start h-[18vw]">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we'll learn to do this Long Chain Dominoes
            idea and have fun making it work!</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm26.png') }}" class="img-lg" />
        <h2 class="title stroke">Place two dominoes one after another.
            Then lay an ice cream stick on the third domino.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm26.png') }}" class="img-lg"  />
        <h2 class="title stroke">Lay another ice cream stick on the next domino. Repeat this
            for another two times to form a long chain of dominoes.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm27.png') }}"  class="img-lg" />
        <h2 class="title stroke">Push the first domino.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Do the dominoes and ice cream sticks
            fall one after another?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Are you able to do this Long Chain Dominoes?
            Let's do it one more time!</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video7" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/74.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch another video! What do you see?</h2>
        <p class="note">Note: Let children share what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video8" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/74.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When the first domino is pushed, it falls and makes the
            other dominoes fall one after another.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video9" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/74.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When the last domino pushes the ice cream stick, the ice cream
            stick moves away and lets the ball roll down the slanted track.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm30.png') }}" class="img-lg" />
        <h2 class="title stroke">What <span class="!text-white">simple machines</span> is used here?</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm30.png') }}" class="img-lg" />
        <h2 class="title stroke">The slanted track is the inclined plane used here.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[18vw]">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we'll learn to do this Ball Roll idea and
            have fun making it work!</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm31.png') }}" class="img-lg" />
        <h2 class="title stroke">Place some dominoes under a track to form
            an inclined plane.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm32.png') }}" class="img-lg" />
        <h2 class="title stroke">Place four dominoes beside the track at some distance from it.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm30.png') }}" class="img-lg" />
        <h2 class="title stroke">Place an ice cream stick on the last domino and
            rest it on the track to hold a ball in place.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm29.png') }}" class="img-lg" />
        <h2 class="title stroke">Push the first domino.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video10" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/74.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Do the dominoes fall one after another? Does the ice-cream
            stick move away and make the ball roll down the inclined plane?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Are you able to do this Ball Roll?
            Let's do it one more time!</h2>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video11" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/75.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch another video! What do you see?</h2>
        <p class="note">Note: Let children share what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video12" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/75.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The ball rolls down a slanted track into a cup. The cup turns
            and the ball rolls down the book onto another track.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video13" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/75.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The ball then rolls down this slanted track and pushes
            the dominoes and so they fall one after another.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm34.png') }}" class="img-lg" />
        <h2 class="title stroke">What simple machine is used here?</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm34.png') }}" class="img-lg" />
        <h2 class="title stroke">The big book and the two slanted tracks are
            the <span class="!text-white">inclined planes</span> used here.</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[18vw]">
        <h2 class="title stroke !text-white">Individual Activity</h2>
        <h2 class="text-start title stroke">Now, we'll learn to do this Cup Turn idea and have
            fun making it work!</h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm35.png') }}" class="img-lg" />
        <h2 class="title stroke">First, set up an inclined plane with some books. Also make a
            platform of books next to the inclined plane.</h2>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm35.png') }}" class="img-lg" />
        <h2 class="title stroke">Now, set up a higher slanted track and rest
            it on the book.</h2>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm36.png') }}" class="img-lg" />
        <h2 class="title stroke">Place a cup on the edge of the book such that
            it faces this track.</h2>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm34.png') }}" class="img-lg" />
        <h2 class="title stroke">Place another track for the ball to roll onto after the cup
            turns. Use some dominoes to make this track slanted.</h2>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm37.png') }}" class="img-lg" />
        <h2 class="title stroke">Keep wooden blocks near this track so that the ball
            does not roll off this track.</h2>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm38.png') }}" class="img-lg" />
        <h2 class="title stroke">Place five dominoes at the end of this track and
            a ball on the higher slanted track.</h2>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/cm/cm39.png') }}" class="img-lg" />
        <h2 class="title stroke">Push a ping pong ball down the higher slanted track.</h2>
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video14" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/75.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Does the cup turn? Does the ball roll onto the other
            track and push the dominoes?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video14')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Are you able to do this Cup Turn?
            Let's do it one more time!</h2>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Which idea did you like doing the most? Draw how you set up this idea.</p>
        </div>
    </div>


    {{-- ===================== --}}
    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
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
            const returnRouteFromFirstSlide = "{{ route('SmartIdeasSelection') }}";
            const doneButtonRoute = "{{ route('K1CompoundMachines') }}";

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
