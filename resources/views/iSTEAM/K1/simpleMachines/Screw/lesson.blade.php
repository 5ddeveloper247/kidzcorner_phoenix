@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">How Does A Screw Work?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="/assets/images/K1/sm/screw/s1.png" />
        <h2 class="title stroke">What is the boy doing?</h2>
        <p class="note">Note: Let children share what they see. Guide them to know that he is using a screw to fix a chair.
        </p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/screw/s2.png" />
        <h2 class="title stroke">This is a <span class="text-white">screw</span>. It is a rod with a spiral groove on it.
            The spiral groove is called <span class="text-white">thread.</span></h2>
        <p class="note"></p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/44.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This is how <span class="text-white">screw</span> goes inside a plank of wood!
            The <span class="text-white">thread</span> of the screw helps it to go into the wood easily.</h2>
        <p class="note"></p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-0">
        <img src="/assets/images/K1/sm/screw/s4.png" />
        <h2 class="title stroke">These are different <span class="text-white">screw.</span></h2>
        <p class="note">Note: If possible, let children touch and feel different types of screws; emphasize that each
            screw has a thread.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-0">
        <img src="/assets/images/K1/sm/screw/s5.png" />
        <h2 class="title stroke">A <span class="text-white">screw.</span> is a type of <span class="text-white">simple
                machine.</span></h2>
        <p class="note">Note: Let children share what they think a simple machine is.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class="title stroke"><span class="text-white">simple machine</span> are basic tools that help us to do work
            easily.</h2>
        <p class="note">Note: Explain that there are 6 types of simple machines and screw is one of it.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class="title stroke">Do you know how a <span class="text-white">screw</span> helps us to do work easily?</h2>
        <p class="note">Note: Let children share what they know.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/sm/screw/s1.png" />
        <h2 class="title stroke">A <span class="text-white">screw</span> generally helps to hold things together easily.
        </h2>
        <p class="note">Note: Guide children to understand that a screw is a simple machine as it helps us to do our work
            easily.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <h2 class="title stroke">Can you name some things which have <span class="text-white">screws</span> on them?</h2>
        <p class="note">Note: Have children name some things in their surroundings which have screws on them.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide flex flex-col items-center justify-start gap-4">
        <img src="/assets/images/K1/sm/screw/s6.png" class="large-img" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s6.png" class="large-img" />
        <h2 class="title stroke">The screw is on the swing. It is used to hold the chain and the seat of the swing together.
        </h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s7.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s7.png" />
        <h2 class="title stroke">There are two screws on the coat hook. A screw driver is used to drive a screw in. The
            screws fix the hook easily.</h2>
    </div>

    {{-- Slide 14 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s8.png" class="large-img2" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 15 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/sl1.png" class="large-img2" />
        <h2 class="title stroke">The base of the light bulb has thread on it and is a screw. It helps us to fix the light
            bulb into the socket.</h2>
    </div>

    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s9.png" class="large-img" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/sl2.png" class="large-img" />
        <h2 class="title stroke">The bottle lid has thread on it and is a screw. It helps us to close the bottle tightly.
        </h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s10.png" class="large-img" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/sl3.png" class="large-img" />
        <h2 class="title stroke">The stool has a screw below the seat. It helps to raise the seat to the correct height.
        </h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s11.png" />
        <h2 class="title stroke">How do you (always) get holes punched in the paper?</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/sl4.png" />
        <h2 class="title stroke">Arrange the books from small to big.</h2>
    </div>

    {{-- Slide 22 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s12.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- slide 23 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/sl5.png" />
        <h2 class="title stroke">A spiral car park is a screw. It helps us to move cars up or down a building easily for
            parking.</h2>
    </div>

    {{-- slie 24 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">What is this? Where is the screw? What does it do?</h2>
    </div>

    {{-- slide 25 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/sl6.png" />
        <h2 class="title stroke">This is a special type of screw called <span class="text-white">Archimedes’ screw.</span>
        </h2>
    </div>

    {{-- slide 26 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke"><span class="text-white">Archimedes’ screw.</span> is big and usually used in farms.</h2>
    </div>

    {{-- slide 27 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">It is used to transfer water from a lower place ot a higher place.</h2>
    </div>

    {{-- slide 28 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <h2 class="title stroke">Now, let’s learn how to make a small Archimedes’ screw and find out how it works!</h2>
    </div>

    {{-- slide 29 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s14.png" />
        <h2 class="title stroke">Let’s find out: How do we make an Archimedes’ screw? How does it work?</h2>
    </div>

    {{-- slide 30 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <h2 class="title stroke">Let’s do: Wrap the plastic tubing around a tube and fix it with tape.</h2>
        <img src="/assets/images/K1/sm/screw/s15.png" />
    </div>

    {{-- slide 31 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s16.png" />
        <h2 class="title stroke">Your Archimedes’ screw is ready.</h2>
    </div>

    {{-- slide 32 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <h2 class="title stroke">Let’s do: Put some water in a large container and add food colouring.</h2>
        <img src="/assets/images/K1/sm/screw/s17.png" />
    </div>

    {{-- sldie 33 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <h2 class="title stroke">Let’s do: Place the screw in the coloured water as shown.</h2>
        <img src="/assets/images/K1/sm/screw/s18.png" />
    </div>

    {{-- sldie 34 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/45.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke"><span class="text-white">What do you think (Prediction):</span> <br>
            What will happen when we turn the Archimedes’ screw?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 35 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <h2 class="title stroke">Let’s do: <br>
            4. Take turns to turn your Archimedes’ screw.</h2>
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/45.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 36 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s19.png" />
        <h2 class="title stroke"><span class="text-white">What do you observe (Result):</span> What happens when we start
            turning the screw?</h2>
    </div>


    {{-- slide 37 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <h2 class="title stroke"><span class="text-white">What do you learn:</span><br>
            How does an Archimedes’ screw work?</h2>
        <p class="note">Note: After the hands-on activity, guide children to understand how an Archimedes’ screw work.
        </p>
    </div>


    {{-- slide 38 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/46.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Through the activity, we learn that when we turn the screw, the water rises up the tubing
            and flows into the small container.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 39 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <video id="video6" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/sm/46.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Water is taken in at the bottom and moves up the thread of the screw as it rotates.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide  40 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s19.png" />
        <h2 class="title stroke">Water is taken in at the bottom and moves up the thread of the screw as it rotates.</h2>
    </div>

    {{-- sldie 41 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">How is the Archimedes’ screw useful?</h2>
        <p class="note">Note: Have children freely share their ideas.</p>
    </div>

    {{-- sldie 42 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s13.png" />
        <h2 class="title stroke">The Archimedes’ screw helps to transfer water from a lower place to a higher place and is
            used in farms.</h2>
    </div>

    {{-- slide 43 --}}
    <div class="slide flex flex-col items-center justify-start ">
        <img src="/assets/images/K1/sm/screw/s20.png" class="large-img2" />
        <h2 class="title stroke">How do you think we can use this Archimedes’ screw in our school or home?</h2>
        <p class="note">Note: Have children freely share their ideas. Encourage them to try their ideas with the screw
            they have made.</p>
    </div>




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
    {{-- Next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
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
            const returnRouteFromFirstSlide = "{{ route('ScrewSelection') }}";
            const doneButtonRoute = "{{ route('ScrewSelection') }}";

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
