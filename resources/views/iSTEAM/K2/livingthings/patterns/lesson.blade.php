@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Fingerprint Patterns</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f10.png') }}" class="w-img3" />
        <div class="title stroke">
            <h2>Children, as you know, <span class="!text-white">fingerprints</span> are
                <span class="!text-white">ridges</span> on the ips of our <span class="!text-white">fingers</span> and <span
                    class="text-white">thumbs</span>.
            </h2>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col h-[50%] justify-between items-center">
        <h2 class="title stroke">When do you think we started having these ridges
            on our fingers and thumbs?</h2>
        <p class="note">Note: Encourage children to guess boldly.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <video id="video1" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/173.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">When you were still inside your mother's womb,
            the ridges on your fingers and thumbs started forming.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video2" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/videos/188.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke text-center">The ridges form based on individual growing experience
            in the mother's womb.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" class="w-img3" />
        <h2 class="title stroke">That's why individual fingerprints are unique and no two people
            have the same fingerprints, including identical twins.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" class="w-img3" />
        <h2 class="title stroke">Scientists compare fingerprints and group them according to
            the similar ridge patterns they find.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp3.png') }}" class="w-img3" />
        <h2 class="title stroke">As a result, there are three basic <span class="!text-white">fingerprint patterns
                - loop, whorl</span>and <span class="!text-white">arch</span>.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp4.png') }}" class="w-img3" />
        <h2 class="title stroke">In a loop pattern, the ridges enter from one side,
            recurve and tend to exit from the same side.</h2>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp5.png') }}" />
        <h2 class="title stroke">Loop pattern is found in about 65% of fingerprints.
            That means out of 10 fingers, 6 or 7 of them have loops.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp6.png') }}" />
        <h2 class="title stroke">In a whorl pattern, the ridges are usually circular,
            spiral or have more than one loop.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp7.png') }}" />
        <h2 class="title stroke">Whorl pattern is found in about 30% of fingerprints.
            That means out of 10 fingers, 3 of them have whorls.</h2>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp8.png') }}" class="w-img !h-[13vw]" />
        <h2 class="title stroke">In an arch pattern, the ridges enter from one side, make a
            rise in the centre and exit from the other side like a hill.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp9.png') }}" class="w-img3" />
        <h2 class="title stroke">Arch pattern is found in about 5% of fingerprints.
            That means out of 10 fingers, 1 or none of them have arches.</h2>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Now we'll check our own fingerprints to find out
            which patterns we have!</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Individual Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp3.png') }}" />
        <h2 class="title stroke text-start">Let's find out: <br>
            Which fingerprint pattern do you have on each finger?</h2>
        <p class="text-center note">Note: Have children take out their fingerprint records.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke text-start ">Let's do: <br>
                Observe each fingerprint to find out which pattern it has.
                Write down the result of comparison at the side of each
                fingerprint in the record.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img2" />
        <p class="note text-center">Note: Have children analyse own set of fingerprints and write down the results (letter
            L, W or A).</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img3" />
        <div class="self-start text-start">
            <h2 class="title stroke">What do you observe: <br>
                Which fingerprint pattern do you have on each finger?</h2>
        </div>

    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                Do you have the same fingerprint pattern on each finger?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img3" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                Which fingerprint pattern do you have on each finger?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img3" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                Do you have al three types of fingerprint patterns?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img3" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">What do you learn: <br>
                For the fingers with the same fingerprint pattern, do the
                fingerprints look exactly the same?</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img3" />
        <p class="note text-center">Note: Have children take turns to share based on the record.</p>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img3" />
        <h2 class="title stroke">Through the activity, we know that
            each fingerprint has a basic pattern.</h2>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp10.png') }}" class="w-img3" />
        <h2 class="title stroke">The same pattern can be found on different fingerprints
            but no two fingerprints are exactly the same.</h2>
    </div>


    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp3.png') }}" />
        <h2 class="title stroke text-start">Let's find out: <br>
            How many fingers and thumbs in the class have loop, whorl
            and arch patterns?</h2>
    </div>

    {{-- slde 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke text-start ">Let's do: <br>
                1. Which fingerprint pattern do you have on each finger?
                Record them in a table.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp11.png') }}" />
        <p class="note">Note: Guide children take turns to fill up the table as shown.</p>
    </div>


    {{-- slde 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke text-start ">Let's do: <br>
                2. Create a graph to show the numbers of fingerprint
                patterns in the class.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp12.png') }}" />
        <p class="note">Note: Guide children to count from the record table and create the graph.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" class="w-img" />
        <h2 class="title stroke text-start">What do you observe:
            How many fingers and thumbs in the class have loop pattern?</h2>
        <p class="note">Note: Guide children to find out the answer from the graph.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" class="w-img" />
        <h2 class="title stroke text-start">What do you observe: <br>
            How many fingers and thumbs in the class have whorl pattern?</h2>
        <p class="note">Note: Guide children to find out the answer from the graph.</p>
    </div>


    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" class="w-img" />
        <h2 class="title stroke text-start">What do you observe: <br>
            How many fingers and thumbs in the class have arch pattern?</h2>
        <p class="note">Note: Guide children to find out the answer from the graph.</p>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            How many fingers and thumbs in the class have loop, whorl
            and arch patterns?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" class="w-img" />
        <p class="note">Note: Guide children to make conclusions from the graph.</p>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            Which is the most and least common fingerprint pattern
            in the class?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp13.png') }}" class="w-img" />
        <p class="note">Note: Guide children to make conclusions from the graph.</p>
    </div>


    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp12.png') }}" />
        <h2 class="title stroke text-start">Through the activity, we know that loop is indeed the most
            common pattern of fingerprints because there are ________
            out of _____ fingers and thumbs in the class have loops.</h2>
    </div>



    {{-- slide 32 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[30vw] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/fp14.png') }}" class="!max-w-[40vw]" />
        </div>
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
            const returnRouteFromFirstSlide = "{{ route('FingerprintpatternsSelection') }}";
            const doneButtonRoute = "{{ route('FingerprintpatternsSelection') }}";

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
