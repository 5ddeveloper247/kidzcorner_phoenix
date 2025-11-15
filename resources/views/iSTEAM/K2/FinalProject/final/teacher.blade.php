@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title  --}}
    <h2 class="top-title stroke">Final Project</h2>

    {{-- sldie 1  --}}
    <div class="t-slide flex  !text-white flex-col justify-around text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Invent things that help to solve problems or challenges using previously learnt knowledge</li>
                <li>Use design thinking to solve problems together with friends</li>
                <li>Learn about respect, teamwork and perseverance through the project</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machines</li>
                <li>Coding/Programming</li>
                <li>Structures</li>
                <li>Electrical Circuits</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="t-slide flex  !text-white flex-col justify-center  text-start">
        <div>
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>Common art and craft materials (ice cream sticks, rubber bands, different strings, ruler, coloured
                    pencils, adhesive tape, glue, scissors, etc)</li>
                <li>Recycled materials (tissue boxes, plastic bottles, empty cans, etc)</li>
                <li>Pulley and rope, toy cars, marbles, dominoes and blocks (things that children used to build simple
                    machines previously)</li>
                <li>Straws and pipe cleaners</li>
                <li>Dash the robot and a tablet</li>
                <li>mTiny set</li>
                <li>Basic circuit components (battery, battery connector, LED bulb)</li>
                <li>Suitable conducting materials (playdough, paper clips, foil, conductive tape, etc)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="t-slide text-start !text-white">
        <div>
            <h2 class=" t-title">Possible iSTEAM concepts for each problem/challenge:</h2>
            <img src="{{ asset('assets/images/K2/final/f15.png') }}" class="img-lg" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 4 --}}
    <div class="t-slide text-start !text-white">
        <div>
            <h2 class=" t-title">Possible iSTEAM concepts for each problem/challenge:</h2>
            <img src="{{ asset('assets/images/K2/final/f16.png') }}" class="img-xl" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 5 --}}
    <div class="text-start t-slide flex flex-col justify-between  items-center !text-white">
        <div class="space-y-10">
            <h2 class="t-title">Note</h2>
            <ul class="list-disc">
                <h2>For the invention challenge 10, you may:</h2>
                <li>Invite children to watch the following video: <br>
                    <a href="https://www.youtube.com/watch?v=XiuU1mlFeEc"
                        class="text-[#F7B94A]">https://www.youtube.com/watch?v=XiuU1mlFeEc</a>
                </li>
                <li>Guide children to discuss and find a problem to solve</li>
            </ul>
            <ul class="list-disc">
                <h2>For the invention challenge 11, you may:</h2>
                <li>Get children to use themselves as robots while playing the game</li>
                <li>Get children to incorporate either Dash or mTiny into the game</li>
            </ul>
        </div>
        <p class="note"> Note: <a class="click-btn1 text-[#F7B94A]">Click here</a> only if you have problem connecting to
            the webpage.</p>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- click slide  --}}
    <div class=" t-slide click1 text-start  items-center !text-white">
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-[1.4vw]">11 Kid Inventors Break Down Their Greatest Inventions | The New Yorker </h2>
            <a href="https://www.youtube.com/watch?v=Xiul/1mlFeEc" class="!text-[#F7B94A] text-[1.3vw]">
                [https://www.youtube.com/watch?v=Xiul/1mlFeEc]</a>
            <video id="video1" class="pointer-events-none">
                <source src="{{ asset('assets/images/K2/final/285.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 6 --}}
    <div class="t-slide text-start !text-white">
        <div>
            <h2 class="t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to use design thinking process (reference on the next page) to run the project.</li>
                <li>Let children lead the project. Encourage them to follow their natural curiosity and explore what
                    they are interested in.</li>
                <li>Encourage children to generate ideas through discussion; respect each other's views and opinions;
                    come up with solutions together as a team; tackle problems faced one at a time; cheer for each other
                    and never give up.</li>
                <li>Ask open ended questions to prompt children to share and try out their ideas. One strategy for
                    asking good questions is focusing on "what". "What" questions focus on what is happening, what you
                    are noticing and what you are doing. The answers are right in front of you and the children.
                    Focusing questions on what children have observed and noticed not only helping them develop
                    communication and observation skills, but also building their confidence by giving them questions
                    they can answer as experts. Examples of "what" questions: What did you try? What if you ...? What
                    are the ideas you have talked about that you haven't tried yet? What have you seen other people
                    trying? What do you notice about ...? What do you think will happen if ...?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 7 --}}
    <div class="text-start t-slide flex flex-col justify-center !text-white">
        <div>
            <h2 class="t-title">Design Thinking: a process for creative problem solving.</h2>
            <div class="flex items-center gap-0">
                <img src="{{ asset('assets/images/K2/final/f18.png') }}" class="img-h-sm" />
                <img src="{{ asset('assets/images/K2/final/f17.png') }}" class="img-md" />
            </div>

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 8 --}}
    <div class=" t-slide flex justify-center items-center text-start !text-white !w-[53vw]">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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

        <button class="cursor-pointer nextButton ">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>




@endsection


@push('script')

    <script>
        // VIDEO CONTROLS
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        // SLIDE NAVIGATION SYSTEM
        document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            // URLs for navigation
            const returnURL = "{{ route('final2Selection') }}";
            const doneURL = "{{ route('final2Selection') }}";

            // Track current position
            let currentSlide = 0; // Which slide we're on now
            let isInSpecialMode = false; // Are we viewing info/click slides?
            let returnToSlide = null; // Which slide to return to
            let specialSlideClass = null; // Which type of special slide (click1, info-slide2, etc.)

            // HELPER FUNCTIONS

            // Stop all videos when changing slides
            function pauseAllVideos() {
                document.querySelectorAll('video').forEach(video => video.pause());
            }

            // Check if a slide is special (info or click slide)
            function isSpecialSlide(slide) {
                const classList = Array.from(slide.classList);

                // Check for click1, click2, etc.
                const hasClickClass = classList.some(cls => /^click\d+$/.test(cls));

                // Check for info-slide1, info-slide2, etc.
                const hasInfoClass = classList.some(cls => /^info-slide\d+$/.test(cls));

                return hasClickClass || hasInfoClass;
            }

            // Get special slide type from button class
            // Example: "click-btn1" → "click1", "info-btn2" → "info-slide2"
            function getSlideTypeFromButton(button) {
                const classList = Array.from(button.classList);

                for (let className of classList) {
                    // Handle click-btn1 → click1
                    if (className.startsWith('click-btn')) {
                        const number = className.replace('click-btn', '');
                        return 'click' + number;
                    }
                    // Handle info-btn1 → info-slide1
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }
                return null;
            }

            // Check if there are more special slides after current one
            function hasMoreSpecialSlides(fromIndex) {
                if (!specialSlideClass) return false;

                for (let i = fromIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(specialSlideClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Check if we're on the last slide
            function isLastSlide(slideIndex) {
                // Last slide overall
                if (slideIndex === slides.length - 1) return true;

                // Last special slide in special mode
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

                return false;
            }

            // DISPLAY FUNCTIONS

            function showSlide(slideIndex) {
                pauseAllVideos();

                // Hide all slides, show only current one
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Show "Done" button on last slide, otherwise show "Next"
                if (isLastSlide(slideIndex)) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NAVIGATION FUNCTIONS

            function goNext() {
                // Can't go beyond last slide
                if (currentSlide >= slides.length - 1) return;

                currentSlide++;

                // Skip slides that don't match current mode
                while (currentSlide < slides.length) {
                    const slide = slides[currentSlide];

                    if (isInSpecialMode) {
                        // In special mode: only show slides with matching class
                        if (slide.classList.contains(specialSlideClass)) break;
                    } else {
                        // In normal mode: skip all special slides
                        if (!isSpecialSlide(slide)) break;
                    }

                    currentSlide++;
                }

                // Show the slide if we found one
                if (currentSlide < slides.length) {
                    showSlide(currentSlide);
                }
            }

            function goBack() {
                // If at first slide in normal mode, exit to selection page
                if (currentSlide === 0 && !isInSpecialMode) {
                    window.location.href = returnURL;
                    return;
                }

                if (isInSpecialMode) {
                    // Find previous special slide
                    let previousIndex = currentSlide - 1;

                    while (previousIndex >= 0) {
                        if (slides[previousIndex].classList.contains(specialSlideClass)) {
                            break;
                        }
                        previousIndex--;
                    }

                    if (previousIndex >= 0) {
                        // Found previous special slide
                        currentSlide = previousIndex;
                        showSlide(currentSlide);
                    } else {
                        // No more special slides, return to normal mode
                        currentSlide = returnToSlide;
                        isInSpecialMode = false;
                        specialSlideClass = null;
                        returnToSlide = null;
                        showSlide(currentSlide);
                    }
                } else {
                    // Normal mode: go to previous normal slide
                    if (currentSlide > 0) {
                        currentSlide--;

                        // Skip any special slides
                        while (currentSlide > 0 && isSpecialSlide(slides[currentSlide])) {
                            currentSlide--;
                        }

                        showSlide(currentSlide);
                    }
                }
            }

            function handleDone() {
                if (isInSpecialMode && returnToSlide !== null) {
                    // Return to the slide we came from
                    currentSlide = returnToSlide;
                    isInSpecialMode = false;
                    specialSlideClass = null;
                    returnToSlide = null;
                    showSlide(currentSlide);
                } else {
                    // Exit to selection page
                    window.location.href = doneURL;
                }
            }

            // EVENT LISTENERS

            // Info/Click buttons - Enter special mode
            infoButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();

                    // Remember where we came from
                    returnToSlide = currentSlide;
                    isInSpecialMode = true;
                    specialSlideClass = getSlideTypeFromButton(button);

                    // Find and show first special slide
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(specialSlideClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // Next buttons
            nextButtons.forEach(btn => {
                btn.addEventListener("click", goNext);
            });

            // Return button
            if (returnButton) {
                returnButton.addEventListener("click", goBack);
            }

            // Done button
            if (doneButton) {
                doneButton.addEventListener("click", handleDone);
            }

            // INITIALIZE

            showSlide(currentSlide);
        });
    </script>

@endpush
