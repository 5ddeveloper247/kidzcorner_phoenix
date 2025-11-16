@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Makey Makey (1)</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/K2/coding/s1.png') }}" class="img-md" />
        <div class="title stroke">
            <h2>Children, Do you remember what there are? <br>
                What did you do with them?</h2>
        </div>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <img src="{{ asset('assets/images/K2/coding/s1.png') }}" class="img-md" />
        <h2 class="title stroke">Both the tablet and the robot are <span class="!text-white">electronic machines</span>.
            They use the power of <span class="!text-white">electricity</span> to do work.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K2/circuit/makey/m12.png') }}" class="img-h-md" />
            <video id="video1" class="video1 pointer-events-none">
                <source src="{{ asset('assets/images/K2/final/224.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h2 class="title stroke">You used an application called Blockly in a tablet
            to programme the robot to do certain tasks.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center gap-y-4 ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m1.png') }}" class="img-lg" />
        <h2 class="title stroke text-center">This is a set of electronic toy called Makey Makey.</h2>
        <p class="note">Note: Display a set of Makey Makey as shown.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m2.png') }}" class="img-xl" />
        <h2 class="title stroke">Let's look at the Makey Makey Board. <br>
            What do you see from its front and back?</h2>
        <p class="note">Note: Guide children to observe and talk about the front and back of a Makey Makey Board.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m3.png') }}" class="img-xl" />
        <h2 class="title stroke">There are 4 main parts on the front of the board:
            ARROWS, SPACE, CLICK and EARTH.</h2>
        <p class="note">Note: Have children point out each part from the front of the board.</p>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m2.png') }}" class="img-xl" />
        <h2 class="title stroke">There are many tiny small things at the back of the board.
            Some of the things clearly placed according to either
            ARROWS, SPACE, CLICK or EARTH.</h2>
        <p class="note">Note: Have children point out things clearly belong to ARROWS, SPACE, CLICK and EARTH.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m4.png') }}" class="img-xl" />
        <h2 class="title stroke">If you look at the back of the board up-close, you'll see lines
            that join these tiny small things together.</h2>
        <p class="note">Note: Guide children to discover the lines at the back of the board.</p>
    </div>

    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m5.png') }}" class="img-xl" />
        <h2 class="title stroke">In fact, this is a special board called a circuit board.
            The tiny small things that are joined together by the lines
            form a complicated circuit that allows us
            to use the 4 main parts in front.</h2>
    </div>

    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]  ">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <h2 class="title stroke text-start">Let's find out:
            How to identify a Makey Makey Board as a circuit board?
            What is its use?</h2>
        <p class="text-center note">Note: Have all children sit closer to watch the demo.</p>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke list-decimal">
            <h2>Steps:</h2>
            <li>This is a USB cable. Which end of it can connect to a
                Makey Makey Board?</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/makey/m6.png') }}" class="img-sm" />
        <p class="note">Note: Have children observe a Makey Makey Board and the 2 ends of a USB cable to find the answer.
        </p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>2. Connect a Makey Makey Board to a computer using a USB
                cable. What happens to the board?</li>
        </ul>
        <div class="flex">
            <a class=" click-btn1"><img src="{{ asset('assets/images/K2/circuit/makey/btn.png') }}" /> </a>
            <video id="video2" class="video-md pointer-events-none">
                <source src="{{ asset('assets/images/K2/circuit/makey/315.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Demo how to connect a Makey Makey Board to a computer using a USB cable. <br>
            Have children observe the set up process and the board when it's connected to the computer.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- click slide --}}

    {{-- slide 13 --}}
    <div class="slide hidden click1 flex flex-col items-center  h-[28vw] justify-between">
        <h2 class="title stroke">Do you see blinking lights at the back of the board?</h2>
        <video id="video3" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/316.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Guide children to spot all the blinking lights.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden click1 flex flex-col items-center  h-[28vw] justify-between">
        <h2 class="title stroke">This is how the lights blink or light up in slow motion.</h2>
        <video id="video4" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/317.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Guide children to spot all the blinking lights.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 15 --}}
    <div class="slide hidden click1 flex flex-col items-center ">
        <h2 class="title stroke">Which tiny small things on the board are light bulbs?</h2>
        <img src="{{ asset('assets/images/K2/circuit/makey/m10.png') }}" class="img-lg" />
        <p class="note">Note: Replay the video on the last page, have children point out all the light bulbs on the
            board.
            Tell them that the tiny light bulb on a circuit board is called LED (ight-emitting diode);
            these LED bulbs are much smaller than what we use in the previous lessons</p>
    </div>

    {{-- slide 16 --}}
    <div class="slide hidden click1 flex flex-col items-center ">
        <h2 class="title stroke">Which bulb is the power indicator of the board?
            What does it means?</h2>
        <img src="{{ asset('assets/images/K2/circuit/makey/m10.png') }}" class="img-lg" />
        <p class="note">Note: Have children point out the power indicator of the board.
            Explain that when the power indicator is on, it means that the board is ready for use.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden click1 flex flex-col items-center ">
        <h class="title stroke">Do you remember this simple circuit?</h>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e13.png') }}" class="img-md" />
        <h2 class="title stroke">When there is electricity, the light bulb in this simple circuit
            will light up.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden click1 flex flex-col items-center  h-[28vw] justify-between">
        <h2 class="title stroke">When there is electricity, the light bulbs on a Makey Makey
            Board will blink or light up.</h2>
        <video id="video5" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/317.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Doesn't this show that the board has a complicated circuit?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
    {{-- ===== --}}


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>3. Open up the Microsoft Word application. Use keyboard to
                create a document as shown.</li>
        </ul>
        <div class="flex items-start gsp-5">
            <img src="{{ asset('assets/images/K2/circuit/makey/m7.png') }}" class="img-md" />
            <p class="note w-[140px] !text-start">Use big font
                size (e.g.100)
                to key in the
                letters.</p>
        </div>
        <p class="note">Note: Have children observe the demo. Have them pay attention to the keys (on the keyboard) used.
            At the end, make sure that the cursor is in between the first 2 letters.</p>
    </div>

    {{-- sldie 20 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>4. Connect one end of an alligator clip to the EARTH at the
                bottom of the board.</li>
        </ul>
        <video id="video6" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/318.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Have children observe the demo.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 21 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>5. Use the fingers of a hand to hold the metal part of the
                other end of the alligator clip.</li>
        </ul>
        <img src="{{ asset('assets/images/K2/circuit/makey/m8.png') }}" class="img-md" />
        <p class="note">Note: Have children observe the demo.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>6. Use the fingers of another hand to touch on the SPACE and
                different ARROWS. What happens?</li>
        </ul>
        <video id="video7" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/K2/circuit/makey/319.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Have children observe the demo, take turns to try this step and talk about what they see.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- sldie 23 --}}
    <div class="slide hidden flex flex-col items-center justify-between">
        <ul class="text-start title stroke">
            <h2>Steps:</h2>
            <li>7. Let go of this hand and use another hand to touch on the
                SPACE and different ARROWS. What happens?</li>
        </ul>
            <img src="{{ asset('assets/images/K2/circuit/makey/m9.png') }}" class="img-md" />
        <p class="note">Note: Have children observe the demo, take turns to try this step and talk about what they see.
        </p>
    </div>



    {{-- sldie 24 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke list-disc ">
            <h2>Do you realise that:</h2>
            <li>You need a computer to set up a Makey Makey Board.</li>
            <li>The board is only ready for use when it gets electricity
                from the computer.</li>
            <li>You get to "see" the use of a Makey Makey Board with the
                help of the Microsoft Word application.</li>
            <li>The use of the SPACE on the board is just like the use of
                the space key on a keyboard.</li>
        </ul>

        <p class="note">Note: Guide children to understand these points. Demo to convince children on some points.</p>
    </div>



    {{-- slide 25 --}}
    <div class="slide hidden flex flex-col items-center  h-[28vw] justify-between">
        <ul class="text-start title stroke list-disc ">
            <h2>Do you realise that:</h2>
            <li>The use of the different ARROWS on the board is just like the use of the arrow (up, down, left, right) keys
                on a keyboard.</li>
            <li>The SPACE or different ARROWS of the board is not working when one of your hand is not connected to the
                EARTH of the board.</li>
            <li>You are a conductor because you let electricity pass through you to provide electricity for the board to do
                work.</li>
        </ul>

        <p class="note">Note: Guide children to understand these points. Demo to convince children on some points.</p>
    </div>


    {{-- slide 26 --}}
    <div class="slide hidden flex flex-col items-center ">
        <img src="{{ asset('assets/images/K2/circuit/makey/m11.png') }}" class="img-xl"/>
        <h2 class="title stroke">You are actually part of this complete circuit that makes the
            Makey Makey Board work!</h2>
        <p class="note">Note: Guide children to "see" how electricity flow in a circuit with reference to the drawing.
        </p>
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
        <button class=" nextButton">
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
            const clickButtons = document.querySelectorAll("[class*='click-btn']");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingClickSlides = false;
            let currentClickClass = null;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('makey1Selection') }}";
            const doneButtonRoute = "{{ route('k2ElectronicCircuits') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Check if slide is any click slide (click1, click2, etc.)
            function isClickSlide(slide) {
                return Array.from(slide.classList).some(cls => cls.startsWith('click') && cls.match(/^click\d+$/));
            }

            // Check if there's another click slide with same class after current one
            function hasNextClickSlide(currentIndex) {
                if (!currentClickClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentClickClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get click class from button (click-btn1 → click1, click-btn2 → click2)
            function getClickClassFromButton(button) {
                const classList = Array.from(button.classList);
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }
                return null;
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last click slide
                const isLastSlide = index === slides.length - 1;
                const isLastClickSlide = isViewingClickSlides && !hasNextClickSlide(index);

                if (isLastSlide || isLastClickSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Click button handlers
            clickButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingClickSlides = true;
                    currentClickClass = getClickClassFromButton(btn);

                    // Find the first slide with matching click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentClickClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip click slides if not viewing them
                        while (!isViewingClickSlides &&
                            currentSlide < slides.length &&
                            isClickSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing click slides, only show slides with current click class
                        if (isViewingClickSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentClickClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            returnButton.addEventListener("click", () => {
                // If on first slide and not viewing click slides, navigate to return route
                if (currentSlide === 0 && !isViewingClickSlides) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (isViewingClickSlides) {
                    // Find previous slide with same click class
                    let prevSlide = currentSlide - 1;

                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentClickClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentClickClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip click slides when going back
                    while (currentSlide > 0 && isClickSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button - navigate to completion route or return to parent
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingClickSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingClickSlides = false;
                        currentClickClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = doneButtonRoute;
                    }
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
