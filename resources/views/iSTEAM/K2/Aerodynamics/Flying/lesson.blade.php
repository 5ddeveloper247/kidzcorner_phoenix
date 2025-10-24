@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h1.png') }}" />
        <div class="title stroke">
            <h2>Do you remember what helps an aeroplane fly?</h2>
        </div>
        <p class="note">Note: Guide children to recall and share their answers.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke">Aeroplanes can fly because of aerodynamics.
            Can you name the four aerodynamic forces?</h2>
        <p class="note">Note: Guide the children to name the forces.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke text-center">These four <span class="text-white">aerodynamic</span> forces affect the way
            an aeroplane moves.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke text-center">These four <span class="text-white">aerodynamic</span> forces affect the way
            an aeroplane moves.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h5.png') }}" />
        <h2 class="title stroke">Weight comes from the force of gravity pulling down objects.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h6.png') }}" />
        <h2 class="title stroke">Lift is a force that pushes something up.</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h7.png') }}" />
        <h2 class="title stroke">Thrust is the force that pushes the aeroplane forward.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h8.png') }}" />
        <h2 class="title stroke"><span class="text-white">Drag</span> is the opposing force of <span
                class="text-white">thrust</span> that slows down the aeroplane.</h2>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke">Which force has to be higher for the aeroplane to take off?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h21.png') }}" />
        <h2 class="title stroke">The aeroplane can only take off into the sky
            when the lift is higher than the weight.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center h-[60%] justify-between">
        <h2 class="title stroke">Are you able to recall part of the aeroplane
            that helps to generate lift?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/aero1/a44.png') }}" />
        <h2 class="title stroke">Aeroplane wings are designed in the shape of an <span class="text-white">aerofoil</span>.
        </h2>
    </div>

    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/aero1/a52.png') }}" />
        <h2 class="title stroke">When the air moves along this shape, it generates more lift.</h2>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/aero1/a17.png') }}" />
        <h2 class="title stroke">Therefore, the aerofoil shape of the aeroplane wings helps to
            generate lift for the aeroplane to take off into the sky.</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke">Which force has to be less for the aeroplane to keep moving
            forward during flight?</h2>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h8.png') }}" />
        <h2 class="title stroke">Drag has to be less than thrust for the aeroplane to keep
            moving forward.</h2>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/hydro/h8.png') }}" />
        <h2 class="title stroke">The engine generates thrust for the aeroplane to keep moving
            forward. But what helps to reduce drag?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>



    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/aero1/a29.png') }}" />
        <h2 class="title stroke">The shape of the aeroplane nose is designed to reduce drag
            as it moves through air.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/aero/evo/e12.png') }}" class="w-[450px]" />
            <img src="{{ asset('assets/images/K2/aero/evo/e19.png') }}" class="w-[450px]" />
        </div>
        <h2 class="title stroke">Aerodynamics also affect the movement of other vehicles.</h2>
    </div>


    {{-- slide 20 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e12.png') }}" />
        <h2 class="title stroke">The head of the bullet train is designed in a pointed shape to
            reduce <span class="text-white">drag</span>. This helps the train to move at a faster speed.</h2>
    </div>


    {{-- slide 21 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e10.png') }}" />
        <h2 class="title stroke">Formula 1 cars have <span class="text-white">front wings</span> in this shape. How is it
            different from the aerofoil shape of the <span class="text-white">aeroplane</span> wings?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- slide 22 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e10.png') }}" />
        <h2 class="title stroke">The <span class="text-white">front wings</span> of the racing car is shaped this way to
            create <span class="text-white">downforce</span>. This enables the car to stay on the ground instead
            of lifting up when it moves fast.
        </h2>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e17.png') }}" />
        <h2 class="title stroke">Aerodynamics also play an important part in sports.
            How do cyclists overcome drag?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e17.png') }}" />
        <h2 class="title stroke">Professional cyclists curve their body and put on tight clothing
            to reduce <span class="text-white">drag</span> so that they can move at a higher speed with
            less effort.</h2>
    </div>


    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[60%]">
        <div class="space-y-10 title stroke">
            <h2>Other than aeroplanes and vehicles, there are also other
                flying machines that use aerodynamic forces to help them fly.</h2>
            <h2>
                Can you name a few flying machines?</h2>
        </div>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- slide 26 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e20.png') }}" />
        <h2 class="title stroke">What is this? What does it do?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 27 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e20.png') }}" />
        <h2 class="title stroke">A rocket helps to carry satellite or space shuttles into space.
            How do rockets shoot up into the sky?</h2>
        <p class="note">Note: Encourage children to share their answers based on aerodynamic forces.</p>
    </div>


    {{-- slide 28 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e24.png') }}" />
        <h2 class="title stroke">Thrust is the force that helps a rocket shoot up into the sky.
            How do rockets generate enough thrust to do so?</h2>
        <p class="note">Note: Encourage children to share their answers based on aerodynamic forces.</p>
    </div>


    {{-- slide 29 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e24.png') }}" />
        <h2 class="title stroke">The <span class="text-white">rocket</span> engine burns fuel to generate <span
                class="text-white">thrust</span> for the
            <span class="text-white">rocket</span> to shoot into the sky.
        </h2>
    </div>


    {{-- slide 30 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e21.png') }}" />
        <h2 class="title stroke">The narrow shape of the <span class="text-white">rocket's</span> nose helps to reduce
            drag as it moves through air.</h2>
    </div>



    {{-- slide 31 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e22.png') }}" />
        <h2 class="title stroke">How does a rocket carry a space shuttle into space?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 32 --}}
    <div class="slide hidden flex flex-col items-center gap-y-3">
        <img src="{{ asset('assets/images/K2/aero/evo/e23.png') }}" />
        <h2 class="title stroke">To carry a <span class="text-white">space shuttle</span> into space, more <span
                class="text-white">thrust</span> is needed.
            These <span class="text-white">rocket</span> boosters help to generate extra <span
                class="text-white">thrust</span>.</h2>
    </div>

    {{-- slide 33 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/evo/220.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s see how this rocket launches and shoots into the sky.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 34 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/evo/221.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Two minutes after launch, the boosters will detach from the
            main rocket and drop into the ocean.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 35 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/evo/222.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When the space shuttle has successfully entered space,
            the main rocket will detach from the space shuttle.</h2>
        <p class="note">Note: <a href="" class="text-[#F7B94A] click-btn1">Click Here</a> for a sample illustration of the
            launch of a rocket.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- sloide click --}}
    <div class="slide click1 hidden flex items-center gap-3">
        <h2 class="title stroke text-wrap w-[250px] text-end">A Sample
            Illustration:
            the launch of
            a rocket that
            carries a space
            shuttle</h2>
        <img src="{{ asset('assets/images/K2/aero/evo/e25.png') }}" class="w-[550px]" />
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[60%] ">
        <h2 class="title stroke">But how does a space shuttle return to Earth?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- Slide 37 --}}
    <div class="slide hidden  flex flex-col items-center   ">
        <img src="{{ asset('assets/images/K2/aero/evo/e26.png') }}" />
        <h2 class="title stroke">The space shuttle re-enters Earth at a very high speed. The
            force of gravity also pulls the space shuttle to the ground.</h2>
    </div>


    {{-- Slide 38 --}}
    <div class="slide hidden  flex flex-col items-center   ">
        <img src="{{ asset('assets/images/K2/aero/evo/e26.png') }}" />
        <h2 class="title stroke">How do you think a space shuttle lands smoothly instead of
            crashing onto the ground?</h2>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden  flex flex-col items-center   ">
        <img src="{{ asset('assets/images/K2/aero/evo/e27.png') }}" />
        <h2 class="title stroke">The wings generate lift as the space shuttle re-enters Earth.
            This helps to slow down the speed of descent for the space
            shuttle.</h2>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden  flex flex-col items-center   ">
        <img src="{{ asset('assets/images/K2/aero/evo/e28.png') }}" />
        <h2 class="title stroke">As the space shuttle touches down to the ground, the brakes
            help to increase drag and slow down the shuttle.</h2>
    </div>

    {{-- slide 41 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/evo/223.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">A parachute is also deployed from the back of the space
            shuttle to increase drag and help stop the space shuttle.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 42 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video5" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/evo/223.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">A parachute is also deployed from the back of the space
            shuttle to increase drag and help stop the space shuttle.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 43 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[60%] ">
        <div class="title stroke space-y-10">
            <h2>Now, it's your turn to design and create your own flying machine!</h2>

            <h2>Remember to apply the aerodynamic forces in your design
                to help your machine fly as far as possible!</h2>
        </div>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 44 --}}
    <div class="flex flex-col items-center justify-between h-[80%] slide hidden">
        <h2 class="title !text-white stroke">Final Project</h2>
        <div class="text-start self-start title stroke">
            <h2>Mission: <br>
                Let's design and create your own flying machine!</h2>
        </div>
        <p class="note">Note: Have children discuss and work in groups to complete the final project.</p>
    </div>

    {{-- Slide 45 --}}
    <div class="slide hidden  flex flex-col items-center   ">
        <div class="self-start text-start title stroke">
            <ul class="list-decimal">
                <h2>Steps:</h2>
                <li>In a small group, discuss the type of flying machine you
                    want to create. Draw the design of your flying machine
                    based on the aerodynamic forces.</li>
                <li>List down the materials you need to build this flying
                    machine.</li>
                <li>Gather the materials you need to build your flying
                    machine based on your design</li>
                <li>Build your flying machine and test it out.</li>
            </ul>
        </div>
    </div>

    {{-- Slide 46 --}}
    <div class="slide hidden  flex flex-col items-center   ">
        <div class="self-start text-start title stroke">
            <ul>
                <h2>Steps:</h2>
                <li>5. Tweak the design of your flying machine to make it fly
                    further if needed.</li>
                <li>6. Challenge your friends to see whose flying machine can
                    fly the furthest!</li>
            </ul>
        </div>
    </div>

    {{-- slide 47 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[500px] bg-cover bg-center p-[20px] text-startphp"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Name your flying machine: _____________________________________ <br>
                How will your flying machine look like? Draw the design here.</p>
        </div>
    </div>

    {{-- sldie 48 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[500px] bg-cover bg-center p-[20px]  text-startphp"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Name your flying machine: __________________________________ <br>
                Materials needed:</p>
        </div>
    </div>

    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


 <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton">
 <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>




@endsection


@push('script')
    <script>
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Get all info/click buttons (info-btn1, info-btn2, click-btn1, click-btn2, etc.)
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null; // Track which info/click class we're viewing

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last info/click slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → , click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            currentSlide < slides.length &&
                            isInfoSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentInfoClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // Check if slide is any info/click slide (info-slide1, info-slide2, click1, click2, etc.)
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Return button
            returnButton.addEventListener("click", () => {
                if (isViewingInfoSlides && currentSlide > 0) {
                    // Check if previous slide is also same info/click class
                    let prevSlide = currentSlide - 1;

                    // Find previous slide with same info/click class
                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more info/click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip info/click slides when going back
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('FlyingSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
