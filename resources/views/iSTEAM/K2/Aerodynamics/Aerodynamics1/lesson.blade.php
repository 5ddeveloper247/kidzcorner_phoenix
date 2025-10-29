@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">What is Aerodynamics? 1</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a1.png') }}" class="w-[500px]" />
        <div class="title stroke">
            <h2>What will happen when you let go of the ruler?</h2>
        </div>
        <p class="note">Note: Guide children to experiment and share their answers.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/aero/aero1/a1.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/aero/aero1/a2.png') }}" class="w-[500px]" />
        </div>
        <h2 class="title stroke">These two objects will fall to the ground. Why?</h2>
        <p class="note">Note: Encourage children to discuss and share their views.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-full  ">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="title stroke text-start space-y-10">
            <h2>Let's try doing these and observe what happens:</h2>
            <ul class="list-decimal">
                <li>Jump as high as you can.</li>
                <li>Throw an object upwards.</li>
                <li>Throw an object to your left.</li>
                <li>Throw an object to your right.</li>
            </ul>
        </div>
        <p class="text-center note">Note: Guide children to experiment and share their answers.</p>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/aero1/a3.png') }}" class="w-[500px]" />
        <h2 class="title stroke">Everything on Earth stays on the ground because of <span class="text-white">gravity</span>.
        </h2>
    </div>


    {{-- slide 5 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/aero1/a4.png') }}" />
        <h2 class="title stroke">Sir Isaac Newton was the first scientist to study <span class="text-white">gravity</span>.
        </h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/aero1/a5.png') }}" />
        <h2 class="title stroke">Sir Isaac Newton started studying <span class="text-white">gravity</span>
            when he saw an apple fall from the tree.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/aero1/a6.png') }}" />
        <h2 class="title stroke">Everything has <span class="text-white">weight</span> of <span
                class="text-white">gravity</span>.</h2>
    </div>



    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/aero/aero1/a46.png') }}" class="!max-w-[10vw]" />
            <img src="{{ asset('assets/images/K2/aero/aero1/a7.png') }}" />
        </div>
        <h2 class="title stroke">Weight is the force of gravity on an object.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a7.png') }}" />
        <h2 class="title stroke">Weight tells us how hard gravity is pulling objects down
            to the ground.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-4  ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a3.png') }}" />
        <h2 class="title stroke">What do you think will happen if there is no gravity?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-4 ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a8.png') }}" />
        <h2 class="title stroke">If there is no gravity, everything will be floating around.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-4  ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a9.png') }}" />
        <h2 class="title stroke">Just like everything on Earth, aeroplanes stay on the ground
            when not in use because of gravity.</h2>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-4 ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a10.png') }}" />
        <h2 class="title stroke">Then how does an aeroplane fly in the air?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%]  ">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="title stroke text-start">
            <h2>Let's try these:</h2>
            <ul class="list-decimal">
                <li>Prepare 2 plastic/cloth bags of the same material and
                    same type of handles.</li>
                <li>Fill up one bag with empty bottles or lighter objects.</li>
                <li>Fill up the other bag with heavier objects.</li>
                <li>Allow children to take turns in lifting both bags at the
                    same time.</li>
            </ul>
        </div>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%]  ">
        <h2 class="title stroke">Which bag requires more force to be lifted up?
            Why?</h2>
        <p class="note">Note: Guide the children to share their thoughts.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a11.png') }}" class="w-[400px]" />
        <h2 class="title stroke">The bag with heavier objects requires more force to be
            lifted up because it has to overcome the weight
            that is pulling the bag down.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a40.png') }}" />
        <h2 class="title stroke">The heavy aeroplane also has to overcome its weight
            to lift from the ground.</h2>
    </div>



    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a41.png') }}" class="w-[800px]" />
        <h2 class="title stroke">To overcome its weight, the aeroplane has to generate an
            opposing force called lift.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a42.png') }}" class="w-[800px]" />
        <h2 class="title stroke">Lift is a force that pushes something up.</h2>
    </div>

    {{-- slide 20 --}}
    {{-- <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a41.png') }}" class="w-[800px]" />
        <h2 class="title stroke">Lift is a force that pushes something up.</h2>
    </div> --}}

    {{-- slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a41.png') }}" class="w-[800px]" />
        <h2 class="title stroke">The heavy aeroplane will require a strong force of lift
            to take off into the sky.</h2>
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a41.png') }}" class="w-[800px]" />
        <h2 class="title stroke">How does an aeroplane generate lift?</h2>
        <p class="note">Note: Encourage children to discuss and share their answer.</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a43.png') }}" class="w-[800px]" />
        <h2 class="title stroke">The force of lift is generated by the wings.</h2>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden  flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a12.png') }}" />
        <h2 class="title stroke">The shape of the aeroplane wings plays an important
            part in generating lift.</h2>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Hands-on Time 3</h2>
        <div class="title stroke text-start space-y-10">
            <h2>Mission:</h2>
            <h2>Let's find out how the shape of the aeroplane wings helps to
                generate lift.</h2>
        </div>
    </div>



    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Steps:<br>
                1. Hold the wing model this way (as shown) in front of a fan.
                Ensure that the model is facing the centre part of the fan.
                Turn on the fan and observe the movement of the model.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/aero/aero1/a13.png') }}" />
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Steps:<br>
                2. Repeat step 1 by holding the wing model this way instead
                (as shown) in front of a fan. Share your observations.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/aero/aero1/a14.png') }}" />
    </div>


    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/aero1/209.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This shape does not lift up as the air moves around it.</h2>
        <!-- Video Trigger Button -->
        <div class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn cursor-pointer rounded-[30px] bg-sky-500 "
            onclick="toggleVideo('video1')">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/aero1/210.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">On the other hand, this shape lifts up when air moves around
            it. This shape is called aerofoil.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn cursor-pointer rounded-[30px] bg-sky-500">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a44.png') }}" />
        <h2 class="title stroke">Aeroplane wings are designed in the shape of an <span class="text-white">aerofoil</span>.
        </h2>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a52.png') }}" />
        <h2 class="title stroke">When the air moves along this shape, it generates more lift.</h2>
    </div>


    {{-- Slide 32 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a17.png') }}" />
        <h2 class="title stroke">Therefore, the aerofoil shape of the aeroplane wings helps to
            generate lift for the aeroplane to take off into the sky.</h2>
    </div>

    {{-- slide 33 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[30vw] h-fit bg-cover bg-center  flex flex-col justify-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/aero/aero1/a18.png') }}" />
        </div>
    </div>

    {{-- slide 34 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[30vw] h-fit bg-cover bg-center  flex flex-col justify-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/aero/aero1/a19.png') }}" />
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
            const returnRouteFromFirstSlide = "{{ route('Aerodynamics1Selection') }}";
            const doneButtonRoute = "{{ route('Aerodynamics1Selection') }}";

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
