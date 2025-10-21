@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" />
        <div class="title stroke">
            <h2>Children, what is this? What is it for?</h2>
        </div>
        <p class="note">Note: Have children recall and share what they know about an electrical circuit.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" />
        <h2 class="title stroke">This is the drawing of a simple circuit.
            A circuit is a path that electricity can flow through.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" />
        <h2 class="title stroke text-center">Is this a complete circuit? Why?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" />
        <h2 class="title stroke text-center">This is a <span class="text-white">complete circuit</span> because it lets
            <span class="text-white">electricity</span> flow
            smoothly to provide power for the <span class="text-white">light bulb</span> to light up.
        </h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" />
        <h2 class="title stroke">This is <span class="text-white"> complete circuit</span> is made up of 3 parts.
            Can you name them?</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e20.png') }}" />
        <h2 class="title stroke">Do you remember these? <br>
            How did you form a complete circuit using these parts?</h2>
        <p class="note">Note: Have children recall and share how to set up a complete circuit using these things.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">How do you make sure that the LED will light up?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video5" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/314.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The LED will light up as long as its long leg is connected to
            the positive end (red wire) and its short leg is connected to
            the negative end (black wire) of the battery.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">Why do you think playdough is used to connect the wires
            and the legs of the LED?</h2>
        <p class="note">Note: Have children guess based on what they have learnt.</p>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">A circuit needs conductors, which are things that allow
            electricity to flow through them.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">Playdough allows electricity to flow through it,
            so playdough is a conductor.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">Moreover, it is easy to use playdough to connect the wires
            and the LED and hold the connection in place.</h2>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e23.png') }}" />
        <h2 class="title stroke">Have you ever played with playdough and modelling clay?
            Are they same or different?</h2>
        <p class="note">Note: Display a ball of playdough and a ball of modelling clay. Have children touch and compare
            them.</p>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e24.png') }}" />
        <h2 class="title stroke">Both playdough and modelling clay can be used to make
            sculptures although they have different textures.</h2>
        <p class="note">Note: Guide children to describe the texture of playdough and modelling clay.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">These things can form a complete circuit. <br>
            What happens if you replace the playdough of this circuit <br>
            with modelling clay? Let's find out.</h2>
        <p class="note">Note: Have children form the circuit by changing the playdough to modelling clay to observe the
            outcome.</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e25.png') }}" />
        <h2 class="title stroke">The LED will not light up no matter how you change the
            connection between the wires and the LED.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e25.png') }}" />
        <h2 class="title stroke">This means electricity cannot flow through modelling clay to
            provide power for the LED to light up.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e25.png') }}" />
        <h2 class="title stroke">Things that do not allow <span class="text-white">electrici</span>.y to flow through them
            are
            called <span class="text-white">insulator</span>.. Modelling clay is an <span
                class="text-white">insulator</span>.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e26.png') }}" />
        <h2 class="title stroke">Do you remember this? The LED is not lighted up when the
            two playdough balls are stuck together.</h2>
    </div>

    {{-- sldie 20 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e27.png') }}" />
        <h2 class="title stroke">This is how modelling clay helps to solve the problem.</h2>
        <p class="note">Note: Form the circuit on the previous page and this page. Have children observe the outcome.</p>
    </div>


    {{-- sldie 21 --}}
    <div class="slide hidden flex flex-col items-center h-[60%] justify-between">
        <h2 class="title stroke">Now you know how to form a complete circuit, <br>
            do you think the idea can be used <br>
            to create a sculpture that lights up?</h2>
        <p class="note">Note: Encourage children to boldly imagine and share their views.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/d1.png') }}" />
        <h2 class="title stroke">What sculpture is this? Why do you think the lights are there?
            How do you form it?</h2>
        <p class="note">Note: Have children observe the sculpture and answer the questions.</p>
    </div>

    {{-- sldie 23 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/d2.png') }}" />
        <h2 class="title stroke">What sculpture is this? Why do you think the lights are there?
            How do you form it?</h2>
        <p class="note">Note: Have children observe the sculpture and answer the questions.</p>
    </div>


    {{-- sldie 24 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/d3.png') }}" />
        <h2 class="title stroke">What sculpture is this? Why do you think the lights are there?
            How do you form it?</h2>
        <p class="note">Note: Have children observe the sculpture and answer the questions.</p>
    </div>


    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-full  ">
        <h2 class="!text-white title stroke">Hands-on Time </h2>
        <h2 class="title stroke text-start">Mission: <br>
            Let's use our creativity to create a sculpture that lights up
            and show the class!</h2>
        <p class="text-center note">Note: Divide children into groups. Give each group a set of materials needed.</p>
    </div>

    {{-- slide 26--}}
    <div class="slide hidden flex flex-col items-center  h-full justify-around">
        <ul class="text-start title stroke list-decimal">
            <h2>Steps:</h2>
            <li>
                What kind of sculpture would you like to make? Where do you think the light or lights should be?
                Draw it in the learning journal.
            </li>
            <li>
                Use playdough, modelling clay and the circuit parts provided to create the sculpture based on your design.
            </li>
            <li>Showcase your work.</li>
        </ul>
        <p class="note">Note: Have children work in groups to complete the steps.</p>
    </div>

    {{-- slide 27 --}}
  <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What kind of sculpture would you like to make? Where do you think the light or lights
should be? Draw it.</p>
        </div>
    </div>

    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>


    <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">
        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] " id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] " id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div class="absolute inset-0 bg-red-500 rounded-[30px]">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>
    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[85px]">
        <button class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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
            const returnRouteFromFirstSlide = "{{ route('circuit2Selection') }}";
            const doneButtonRoute = "{{ route('circuit2Selection') }}";

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

                // Show "Done" button on last slide, otherwise show "Next" button
                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button - go to next slide
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
                // If on first slide, navigate to the return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                // Otherwise, go to previous slide
                currentSlide--;
                showSlide(currentSlide);
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
