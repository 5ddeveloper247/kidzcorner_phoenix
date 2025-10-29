@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Evolution of Aeroplanes</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/aero/aero1/a9.png') }}" />
        <div class="title stroke">
            <h2>Children, do you know the functions of an aeroplane?</h2>
        </div>
        <p class="note">Note: Guide children to reflect and share their answers.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/aero1/a9.png') }}" />
        <h2 class="title stroke">Aeroplanes were originally invented to carry people <br>
            from one place to another.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <img src="{{ asset('assets/images/K2/aero/evo/e1.png') }}" />
        <h2 class="title stroke text-center">In 1903, the Wright brothers invented the first
            engine-powered aeroplane.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/evo/e2.png') }}" />
        <h2 class="title stroke text-center">This first aeroplane could only fly for 12 seconds!</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/evo/e1.png') }}" />
        <h2 class="title stroke">The Wright brothers continued to study about aerodynamic
            forces to refine their aeroplane design.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e3.png') }}" />
        <h2 class="title stroke">Today, commercial aeroplanes can travel for more than 15
            hours, carrying passengers from one place to another.</h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e4.png') }}" class="large-img6" />
        <h2 class="title stroke">Different types of aircraft were also invented and designed
            for various purposes. Do you recognize these aircrafts?</h2>
        <p class="note">Note: Guide children to discuss and share their views.</p>
    </div>

    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e4.png') }}" class="large-img6" />
        <h2 class="title stroke">Fighters and bombers are two types of military aircrafts that
            are designed for fighting enemies.</h2>
        <p class="note">Note: If time permit, you may guide children to search for different types of military aircrafts.
        </p>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Class Activity 1</h2>
        <img src="{{ asset('assets/images/K2/aero/evo/e5.png') }}" class="large-img6" />
        <h2 class="title stroke">How do these aircrafts move? <br>
            How aerodynamic forces work on these aircrafts?</h2>
        <p class="text-center note">Note: Guide children to search info on these aircrafts; then discuss and share their
            views.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[60%] ">
        <h2 class="title stroke">Can you think of other objects that use aerodynamic
            forces to move?</h2>
        <p class="note">Note: Guide children to discuss and share their views.</p>
    </div>

    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e6.png') }}" class="large-img6" />
        <h2 class="title stroke">The movement of a vehicle is also affected by the
            aerodynamic forces.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e7.png') }}" class="large-img6" />
        <h2 class="title stroke">Vehicles such as cars and trucks are designed with
            aerodynamics in mind.</h2>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e7.png') }}" class="large-img6" />
        <h2 class="title stroke">What do you notice about the shape of the car and truck?
            How does the shape affect the aerodynamic forces?</h2>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e8.png') }}" />
        <h2 class="title stroke">What do you notice about the shape of the car and truck? <br>
            How does the shape affect the aerodynamic forces?</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e8.png') }}" />
        <h2 class="title stroke">This is a Formula 1 race car. <br>
            It moves very fast.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e8.png') }}" />
        <h2 class="title stroke">Remember the aerofoil design of an aeroplane wing?
            Why is it designed in this shape?</h2>
        <p class="note">Note: Guide children to recap the function of aerofoil in generating lift.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e9.png') }}" />
        <h2 class="title stroke">Formula 1 cars have wings too! <br>
            They are called the front wings.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e9.png') }}" />
        <h2 class="title stroke">Do you think these wings have the same function
            as the aeroplane wings?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>

    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e10.png') }}" />
        <h2 class="title stroke">Look at the shape of the front wings of a racing car.
            How is it different from the wing of an aeroplane?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e10.png') }}" />
        <h2 class="title stroke">The front wings of the racing car is shaped this way to create
            downforce. This enables the car to stay on the ground instead
            of lifting up when it moves fast.</h2>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center h-[60%] justify-between">
        <h2 class="title stroke">How does aerodynamics affect the movement of other vehicles
            such as trains?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Class Activity 2</h2>
        <img src="{{ asset('assets/images/K2/aero/evo/e11.png') }}" />
        <h2 class="title stroke">How different do these trains move? <br>
            How does the design affect aerodynamic forces on the train?</h2>
        <p class="text-center note">Note: Guide children to search info on these trains; then discuss and share their views.
            At the end, have them complete the related leaming journals.</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/evo/e12.png') }}" />
        <h2 class="title stroke">The head of the bullet train is designed in a pointed shape to
            reduce drag, so that it can move at a faster speed.</h2>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/evo/219.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Wind tunnels are used to test how aerodynamic forces
            affect the movement of objects.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 25 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/evo/e13.png') }}" />
        <h2 class="title stroke">Wind tunnels are used to test how aerodynamic forces
            affect the movement of objects.</h2>
    </div>

    {{-- slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/evo/e14.png') }}" />
        <h2 class="title stroke">Meanwhile, the aerodynamic forces acting on the test model
            will be measured.</h2>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/evo/e14.png') }}" />
        <h2 class="title stroke">The test results will be used for improvement in the design of
            objects.</h2>
    </div>

    {{-- slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/evo/e14.png') }}" />
        <h2 class="title stroke">Sports coaches use wind tunnels to test aerodynamic drag on
            athletes too.</h2>
    </div>

    {{-- slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/aero/evo/e15.png') }}" />
            <img src="{{ asset('assets/images/K2/aero/evo/e16.png') }}" />
        </div>
        <h2 class="title stroke">How does the body position make a difference in the way
            these cyclists move? What about the clothes they are wearing?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/evo/e17.png') }}" />
        <h2 class="title stroke">A professional cyclist curves his or her body and puts on tight
            clothing to reduce drag so that he or she can cycle faster
            with less effort.</h2>
    </div>


    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[30vw] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/aero/evo/e18.png') }}" />
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
            const returnRouteFromFirstSlide = "{{ route('EvolutionSelection') }}";
            const doneButtonRoute = "{{ route('EvolutionSelection') }}";

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
