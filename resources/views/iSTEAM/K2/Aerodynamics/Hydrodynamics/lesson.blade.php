@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h1.png') }}" />
        <div class="title stroke">
            <h2>Aerodynamics is the way air moves around things.
                Anything that moves through air is affected by aerodynamics.</h2>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h3.png') }}" />
        <h2 class="title stroke">Can you name the <span class="text-white">four aerodynamic forces?</span></h2>
        <p class="text-white">Can you name the four aerodynamic forces?</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke text-center">These four aerodynamic forces affect the way an aeroplane
            moves.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h5.png') }}" />
        <h2 class="title stroke text-center">Weight comes from the force of gravity pulling down objects.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h6.png') }}" />
        <h2 class="title stroke">Lift is a force that pushes something up.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h7.png') }}" />
        <h2 class="title stroke">Thrust is the force that pushes the aeroplane forward.</h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h8.png') }}" />
        <h2 class="title stroke">Drag is the opposing force of thrust that slows down the
            aeroplane.</h2>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke">Which force has to be higher for the aeroplane to take off?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h21.png') }}" />
        <h2 class="title stroke">The aeroplane can only take off into the sky when the lift is
            higher than the weight.</h2>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h4.png') }}" />
        <h2 class="title stroke">Which force has to be less for the aeroplane to keep moving
            forward during flight?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h8.png') }}" />
        <h2 class="title stroke">When there is less drag, the aeroplane will be able to keep
            moving forward.</h2>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50%]">
        <h2 class="title stroke">Now you have learned about aerodynamics,
            what do you think is hydrodynamics?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h2.png') }}" />
        <h2 class="title stroke">Hydrodynamics comes from the word hydro (water) and
            dynamic (movement).</h2>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/aero/hydro/h2.png') }}" />
        <h2 class="title stroke">Hydrodynamics is the way water or liquid moves around things.</h2>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center relative">
        <div class="flex items-center gap-[5rem]">
            <div>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video1')"
                    class="absolute top-1/2 left-0  z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                    <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
                    <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
                    <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
                </div>
                <video id="video1" class="pointer-events-none">
                    <source src="{{ asset('assets/images/K2/aero/hydro/215.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video2')"
                    class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                    <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
                    <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
                    <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
                </div>
                <video id="video2" class="pointer-events-none">
                    <source src="{{ asset('assets/images/K2/aero/hydro/216.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <h2 class="title stroke">Hydrodynamics is the way water or liquid moves around things.</h2>
    </div>


    {{-- slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%] ">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="slef-start text-start">
            <h2 class="title stroke">Let's find out: <br>
                Let's find out what affects the movement of an object in water.</h2>
        </div>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Steps: <br>
                1. Prepare a flat board/container lid, a tub of water and a peg.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/aero/hydro/h11.png') }}" />
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Steps: <br>
                2. Push the board/lid forward in the water with the flat surface
                in front</h2>
        </div>
        <img src="{{ asset('assets/images/K2/aero/hydro/h12.png') }}" />
        <p class="note">Note: Submerge the board/lid at least 3/4 deep into the water and push it forward slowly.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Steps: <br>
                3. Turn the board/lid sideways (as shown) and push it through
                the water.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/aero/hydro/h13.png') }}" />
        <p class="note text-center">Note: Submerge the board/lid at least 3/4 deep into the water and push it forward
            slowly.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%]  ">
        <h2 class="title stroke">Which way is easier to push the board/lid through the water?
            Why?</h2>
        <p class="note text-center">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/hydro/217.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">It is harder to push the board forward this way because the
            force of drag is higher due to the shape.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K2/aero/hydro/218.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">On the other hand, it is easier to push the board/lid forward
            this way as this shape creates less drag.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h17.png') }}" />
        <h2 class="title stroke">Similarly, a person will experience more drag while walking in
            water with their body facing forward.</h2>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h18.png') }}" />
        <h2 class="title stroke">Look at these pictures. How are boats and ships designed to
            reduce drag in water?</h2>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h18.png') }}" />
        <h2 class="title stroke">The V-shaped hull of the boats and ships is designed to reduce
            drag as they move through water.</h2>
    </div>



    {{-- Slide 26 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h19.png') }}" />
        <h2 class="title stroke">Look at these pictures. Have you seen these before? <br>
            How are they different from normal boats?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h19.png') }}" />
        <h2 class="title stroke text-start">Do you think these will move faster or slower as compared to
            normal boats? Why?</h2>
        <p class="note">Note: Encourage children to discuss and share their answers.</p>
    </div>


    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/aero/hydro/h19.png') }}" />
        <h2 class="title stroke">These are <span class="text-white">hydrofoil</span> boats. <br>
            They have underwater wings called hydrofoils.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/aero/hydro/h20.png') }}" />
        <h2 class="title stroke text-start">The hydrofoils can lift the boat's hull above water, which
            reduces drag and help the boat moves faster.</h2>
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
                        window.location.href = "{{ route('HydrodynamicsSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
