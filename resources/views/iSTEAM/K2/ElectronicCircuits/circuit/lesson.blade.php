@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/circuit/ecity/e6.png') }}" class="w-[500px]" />
        </div>
        <div class="title stroke">
            <h2>Children, what are these? <br>
                What do they need in order to work?</h2>
        </div>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/circuit/ecity/e6.png') }}" class="w-[500px]" />
        </div>
        <h2 class="title stroke">These are different machines around us. <br>
            They help us do work easily and save our time.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/circuit/ecity/e6.png') }}" class="w-[500px]" />
        </div>
        <h2 class="title stroke text-center">Many machines need the power of electricity to do work. <br>
            These machines can also be called electronics.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <div class="flex items-end gap-3">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e1.png') }}" class="w-[500px]" />
            <img src="{{ asset('assets/images/K2/circuit/ecity/e2.png') }}" class="w-[300px]" />
        </div>
        <h2 class="title stroke text-center">Some electronics get electricity when its plug is inserted into
            a socket and the switch is turned on.</h2>
        <p class="note">Note: Have children name some other electronics that powered by its plug inserted into a socket.
        </p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e11.png') }}" />
        <h2 class="title stroke">Some other electronics get electricity from the battery
            or batteries in them when its switch is turned on.</h2>
        <p class="note">Note: Have children name some other electronics that powered by the batteries in them.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video1" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/309.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">It is easy for us just turn on the switch to use a flashlight.
            But do you know how electricity gets from the batteries
            to the light bulb?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e12.png') }}" />
        <h2 class="title stroke">For electricity to flow from the batteries to the light bulb,
            it goes through a path called circuit.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" />
        <h2 class="title stroke">This is the drawing of a simple circuit.
            Electricity flows from one end of a battery to the light bulb
            and back to the other end of the battery.</h2>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e14.png') }}" />
        <h2 class="title stroke">The pathway in between a battery and a light bulb
            is usually made up of wires.</h2>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e15.png') }}" />
        <h2 class="title stroke">A wire consists of pieces of metal,
            which heat up when electricity flows through them.
            For your safety, don't hold on to a wire that is working!</h2>
        <p class="note">Note: It's not safe to hold on to a wire that is working although it has a rubber or plastic
            covering.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e16.png') }}" />
        <h2 class="title stroke">Electricity has to flow in a circuit, repeating the flow over
            and over again to keep the light bulb lighted up.!</h2>
        <p class="note">Note: A circuit is somewhat like a sports track, which starts and ends in the same place.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e17.png') }}" />
        <h2 class="title stroke">To be able to turn electricity on or off,
            a switch is added to this circuit.</h2>
    </div>



    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e18.png') }}" />
        <h2 class="title stroke">When the switch is turned on, electricity flows smoothly.
            This is called a complete circuit or closed circuit.</h2>
    </div>



    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e19.png') }}" />
        <h2 class="title stroke">When the switch is turned off, the path is broken and so electricity
            stops flowing. This is called a broken circuit or open circuit.</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e16.png') }}" />
        <h2 class="title stroke">When the switch is turned off, the path is broken and so electricity
            stops flowing. This is called a broken circuit or open circuit.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e16.png') }}" />
        <h2 class="title stroke">This complete circuit is made up of 3 parts:
            a battery, a light bulb and some wires.</h2>
        <p class="note">Note: Have children point out each part.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e17.png') }}" />
        <h2 class="title stroke">And this complete circuit is made up of 4 parts:
            a battery, a light bulb, a switch and some wires.</h2>
        <p class="note">Note: Have children point out each part.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-full  ">
        <h2 class="!text-white title stroke">Hands-on Time </h2>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e20.png') }}" class="w-[600px]" />
        <h2 class="title stroke text-start">Mission: <br>
            Which machine around you uses electricity to work? Find one
            and share with the class.</h2>
        <p class="text-center note">Note: This is a class activity, so make sure that all children are involved in each
            step.</p>
    </div>

    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center ">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>1. Name these basic circuit parts.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e21.png') }}" />
        <p class="note">Note: Guide children to name these basic circuit parts.</p>
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center ">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. How do you form a simple circuit with these parts?
                Show it to your friends.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e21.png') }}" />
        <p class="note">Note: Give children enough time to take turns form a simple circuit and share their findings in
            groups.</p>
    </div>

    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center gap-5">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">Did you manage to form a complete circuit like this?</h2>
        <p class="note">Note: A complete circuit will make the LED light up.</p>
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center gap-5">
        <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" />
        <h2 class="title stroke">Why is this LED not lighted up?</h2>
        <p class="note">Note: Guide children to share their views and demo to find out the reason.</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center h-full justify-between ">
        <ul class="text-start list-disc title stroke">
            <h2>Do you realise that:</h2>
            <li>Playdough allows electricity to pass through it.</li>
            <li>
                We call things that allow electricity to pass through them conductors.
                So, playdough is a conductor.
            </li>
            <li>The LED will not light up when the two playdough balls are stuck together.</li>
            <li>The LED will not light up when the legs of the LED are not inserted into the right playdough balls.</li>
        </ul>
        <p class="note">Note: Guide children to understand these points. Demo to convince children on some points.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video2" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/311.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">An LED actually has a long and a short legs.</h2>
        <p class="note">Note: Show children an LED to find out the truth.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video3" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/312.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">A battery actually has a positive (+) and a negative (-) end.</h2>
        <p class="note">Note: Show children a battery to find out the truth.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 26 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video4" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/313.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">The LED will only light up when its long leg is connected <br>
            to the positive end (+) and the short leg is connected <br>
            to the negative end (-) of the battery.</h2>
        <p class="note">Note: For safety reason, don't show this because the LED gets burnt easily and its legs are hot.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video5" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/314.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This LED is lighted up when its long leg is inserted into the
            green ball and the short leg is inserted into the blue ball.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- slide 28 --}}
    <div class="slide hidden flex flex-col items-center gap-3 ">
        <video id="video6" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/ecity/314.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Therefore, it shows that <br>
            the red wire represents the positive end (+) and
            he black wire represents the negative end (-) of the battery</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

   {{-- slide 29 --}}
    <div class="slide hidden flex flex-col items-center ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/circuit/ecity/e22.png') }}" class="w-[400px]"  />
            <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" class="w-[400px]" />
        </div>
        <h2 class="title stroke">This activity is the real case of this simple circuit.</h2>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row ">
        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] " id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] " id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button  id="closeButton">
                        <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />

        </button>
    </div>

    {{-- next Button --}}
    <div class="down-btn-container">
        <button class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="flex items-center  text-white text-5xl font-bold stroke">NEXT
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
        const returnRouteFromFirstSlide = "{{ route('circuitSelection') }}";
        const doneButtonRoute = "{{ route('circuitSelection') }}";

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
