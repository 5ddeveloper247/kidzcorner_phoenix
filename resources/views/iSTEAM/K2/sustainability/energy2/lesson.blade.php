@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Clean Energy 2</h2>

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <h2 class="title stroke">Children, do you remember
                what clean energy is?</h2>
        </div>
        <p class="note">Note: Encourage children to share their thoughts.</p>

    </div>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Clean energy does not cause pollution and is generated from
                natural sources or processes that are constantly replenished.</h2>
        </div>
    </div>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        </div>
        <div class="title stroke">
            <h2> In the previous lesson, we learned about solar energy
                from the sun.</h2>
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e2.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center"> Now, let’s look at energy generated from
            wind and water.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e3.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center"> Look at these pictures. What are they and what do they do?</h2>
        <p class="note">Note: Encourage children to compare and discuss the similarities and differences.</p>
    </div>



    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/energy2/e3.png') }}" class="large-img6" />
        <span class="text-white"> wind-mill wind-turbine </span>
        <h2 class="title stroke"> When the wind blows, the windmill and wind turbine rotate.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e4.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center"> This is how a <span class="text-white"> windmill </span>rotates.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e5.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center"> As the windmill rotates, it generates energy to operate
            machines that help to mill grains or pump water to the crops.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e6.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">When the wind blows, the wind turbines rotate
            and generate electricity.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <span class="text-white">Class Activity 1</span>
        <div class="flex items-center gap-5">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Let's find out:<br>
            Build and observe how wind can light up the light bulb.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <h2 class="title stroke text-center">Let's do:<br>
            1. Assemble the wind powered light.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e7.png') }}" class="large-img6" />
        </div>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <h2 class="title stroke text-center">Let's do:<br>
            2. Look at the shape of the connecting portion and fix the
            blades on the centre piece.</h2>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e9.png') }}" class="large-img6" />
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's do:<br>
            3. Once the blades are fixed, think of ways to light up the
            blub.<br>
            4. You may blow at the blades or find sources of wind.<br>
            5. Observe how the light shines. Does it shine brightly if the
            wind blown is weak/ strong? Does it continue to shine if
            the wind stops.</h2>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e10.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">A hairdryer was used to blow at the wind powered light bulb.</h2>
        <p class="note">Note: Encourage children to share what they see.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e10.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">The light bulb stop shining when the blades stop moving.</h2>
        <p class="note">Note: Explain that when blades stop turning, it does not generate energy
            anymore to the bulb, so there's no light.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e11.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Similarly, water also uses turbines to generate electricity.</h2>

    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Dams are built to keep water on higher grounds.</h2>

    </div>


    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]"
                class="!max-w-[15vw]" />
        </div>
        <h2 class="title stroke">As the water flows down, it rotates the water
            turbines behind the dams.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]"
                class="!max-w-[15vw]" />
        </div>
        <h2 class="title stroke">Just like the wind turbines, the water turbines
            rotates and generate electricity.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]"
                class="!max-w-[15vw]" />
        </div>
        <h2 class="title stroke">Electricity generated by flowing water is called
            hydroelectric power or hydropower.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Children, can you make the wind powered light work
                by using water?</h2><br><br><br>
        </div>
        <p class="note text-center">Note: Teacher can recap with children on how the wind turn the blades.<br>
            Prompt children look at the picture of dam and think of how water flows.<br>
            Encourage children to brainstorm on how they can make water flow down and turn the blades.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="note">Class activity 2</h2>
        <div class="flex  gap-2 items-center">
            <img class="w-190" src="{{ asset('assets/images/K2/sustain/energy2/e12.png') }}" />
            <img src="{{ asset('assets/images/K2/sustain/energy2/e12a.png') }}" class="!max-w-[14vw]" />
        </div>
        <h2 class="title stroke">Let’s find out:<br>
            Design and build a waterfall to create hydropower.</h2>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do:<br>
                1. Discuss in small groups on how to make the water flow down
                to turn the blades on the turbines.<br>
                2. Design and draw your idea on 8the learning journal.<br>
                3.Use any materials such as tape, boxes, blocks or any
                recyclable materials to assemble your structure.<br>
                4. Work as a group and test if your waterfall works.</h2><br><br><br>
        </div>
        <p class="note text-center">Note: Encourage children to brainstorm on how they can create a waterfall.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Solar energy, wind power and hydropower are
            three types of clean energy.</h2>

    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Clean energy can be used in place of the natural resources
            such as wood and coal.</h2>

    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" class="large-img6" />
        </div>
        <h2 class="title stroke text-center">Using clean energy will help natural resources to be sustainable
            and protect our Earth from global warming and pollution.</h2>

        <!-- Video Trigger Button -->
        <div data-property-1="Default" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
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
            const returnRouteFromFirstSlide = "{{ route('energy2Selection') }}";
            const doneButtonRoute = "{{ route('energy2Selection') }}";

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
