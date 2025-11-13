@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">MAchiens and Electricity</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <div class="title stroke">
            <h2>Children, what are these? What are they for?</h2>
        </div>
        <p class="note">Note: Have children share their prior knowledge.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke">Ovens, refrigerators, washing machines and vacuum cleaners
            are machines that help us do work.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke text-center">What do they need in common?</h2>
        <p class="note">Note: Encourage children to boldly share their views.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke text-center">These machines need the power of electricity to do work.</h2>
        <p class="note">Note: Have children share what they know about the power of electricity.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
        <h2 class="title stroke">Where do these machines get electricity from?</h2>
        <p class="note">Note: Have children recall and say how to put these machines to work.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center ">
        <div class="flex  items-end">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" />
            <img src="{{ asset('assets/images/K2/circuit/ecity/e2.png') }}" class="h-[10vh]" />
        </div>
        <h2 class="title stroke">Most machines get electricity when its plug is inserted into
            a socket and the switch is turned on.</h2>
        <p class="note">Note: A socket is a common power source . Most sockets are fixed on the wall.</p>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/307.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Most machines get electricity when its plug is inserted into
            a socket and the switch is turned on.</h2>
        <p class="note">Note: A socket is a common power source . Most sockets are fixed on the wall.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh] ">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Walk around the place (school, classroom, kitchen, etc) to
            find machines that come with a plug. Observe each machine
            and answer some questions.</h2>
        <p class=" note">Note: This is a class activity, so do make sure that all children are involved in each step.</p>
    </div>

    {{-- slide 9 --}}

    <div class="slide hidden flex flex-col items-center ">
        <ul class="title stroke text-start">
            <h2>Steps:</h2>
            <li>1. What machines did you find that come with a plug? Tell
                your teacher and friends.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e3.png') }}" />

        <p class="note">Note: Guide children to pay attention to things with a plug around the place,
            especially those already connected to sockets.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center ">
        <ul class="title stroke text-start">
            <h2>Steps:</h2>
            <li>2.Observe each machine and answer these questions:
                <ul class="list-disc">
                    <li>What is it for?</li>
                    <li>Does it come with a common plug?</li>
                    <li>How many metal pins does the plug have?</li>
                    <li>How do we make it work?</li>
                    <li>What is this machine?</li>
                </ul>
            </li>
        </ul>
        <p class="note text-center">Note: Guide children to answer the questions and record their findings on a big paper.
            For the last question, connect each machine to a socket to show how electricity
            makes each machine work.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center ">
        <ul class="title stroke text-start">
            <li>What do you learn from this activity?
                <ul class="list-disc">
                    <li>Do machines that come with a plug need electricity to work?</li>
                    <li>How do we provide electricity to machines that come with a</li>
                    <li>Do different machines come with different types of plugs?</li>
                </ul>
            </li>
        </ul>
        <p class="note text-center">Note: Guide children to discuss and conclude from their findings (refer to the record in
            the big paper).</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/308.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, what is this? What is it for? <br>
            Does it use electricity to work?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/309.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How about this? What is it for? <br>
            Does it use electricity to work?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e4.png') }}" />
        <h2 class="title stroke">These machines have no plugs. They have batteries in them.</h2>
        <p class="note">Note: Have children share what they know about batteries.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e4.png') }}" />
        <h2 class="title stroke">Why do these things not have a plug?</h2>
        <p class="note">Note: Have children think and share their views.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e5.png') }}" />
        <h2 class="title stroke">A battery is like a small storage of electricity.
            It provides electricity for things without plugs.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e6.png') }}" />
        <h2 class="title stroke">Children, what are these? What are they for?
            Do they use electricity to work?</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e7.png') }}" class="!h-[35vh]" />
        <h2 class="title stroke">Have you ever seen this screen on a smartphone?
            What does it mean? What do you do when you see this screen?</h2>
        <p class="note">Note: Have children share their prior knowledge and experience.</p>
    </div>

    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e6.png') }}" />
        <h2 class="title stroke">Modern machines have a built-in battery that you can't see.</h2>
        <p class="note">Note: Display a smartphone or tablet. Show children the battery percentage on the screen.</p>
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <div class="flex items-center gap-[1vw] ">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e8.png') }}" />
            <video id="video4" class="video1 pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/ecity/310.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">These machines come with a detachable cable and plug for you
            to recharge the battery.</h2>
        <p class="note">Note: Guide children to watch the video and describe what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e9.png') }}" />
        <h2 class="title stroke">Why do these things come with a detachable cable
            and plug?</h2>
        <p class="note">Note: Have children think and share their views.</p>
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]  ">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Which machine around you uses electricity to work? Find one
            and share with the class.</h2>
        <p class="text-center note">Note: This is a class activity, so make sure that all children are involved in each
            step.</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center ">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. Which machine around you uses electricity to work?
                Find one.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e10.png') }}" class="!w-[14vw]" />
        <p class="note">Note: Have each child to look for one thing that use electricity to work. Guide if needed.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center h-[50vh] justify-between">
        <ul class="text-start title stroke self-start">
            <h2>Steps:</h2>
            <li>2. Share these with the class:
                <ul class="list-disc pl-[60px]">
                    <li>What is this machine?</li>
                    <li>What is it for?</li>
                    <li>How do we make it work?</li>
                </ul>
            </li>
        </ul>
        <p class="note">Note: Have children take turns to share their findings. Guide them to record their findings on a
            big paper.
            Display the record in class at last.</p>
    </div>

    {{-- slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh] ">
        <h2 class="title stroke">What do you learn from the two hands-on activities?</h2>
        <p class="note">Note: Encourage children to share their findings and views.</p>
    </div>

    {{-- slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh] ">
        <ul class="title stroke text-start list-disc">
            <h2>Do you realise that:
                <li>Many things around us are machines.</li>
                <li>Machines help us do work easily.</li>
                <li>Many machines need the power of electricity to do work.</li>
                <li>Machines with an attached plug need to be inserted into a
                    socket to get electricity to work.</li>
                <li>Different machines may have different types of plugs.</li>
            </h2>
        </ul>
        <p class="note">Note: Guide children to understand these points.</p>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50vh] ">
        <ul class="title stroke text-start list-disc">
            <h2>Do you realise that:
                <li>People usually use a plastic adapter to help them insert a 2-
                    pin plug in a common 3-hole socket.</li>
                <li>Normal batteries in machines need to be replaced from time
                    to time.</li>
                <li>Rechargeable batteries in machines can be recharged many
                    times when needed.</li>
            </h2>
        </ul>
        <p class="note">Note: Guide children to understand these points.</p>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">
        <!-- Return Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

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
            const returnRouteFromFirstSlide = "{{ route('electricitySelection') }}";
            const doneButtonRoute = "{{ route('electricitySelection') }}";

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
