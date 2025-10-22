@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">A Wagon</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Children, what are these? What can you do with them?</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a5.png') }}" />
        <p class="note">Note: Encourage the children to share their answers.</p>
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <h2 class="title stroke">These are building bricks. You can put them together to build something.</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a6.png') }}" />

    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center h-[50vh] justify-between slide hidden">

        <h2 class="title stroke self-start !text-white">Hands-on Time</h2>
        <div class="text-start">

            <h2 class="title stroke">Mission: <br>
                Let’s follow the instructions to build a wagon and then play with it.</h2>
        </div>
        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col  items-center slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="list-decimal list-inside ">
                <li>Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a7.png') }}" />
        <p class="note  text-center">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center  slide hidden">
        <div class="title stroke self-start text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a wagon</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a8.png') }}" />
        <p class="note z-[99] text-center">Note: Have each group of children work together to complete the mission. <a
                class="click-btn1 ">Click <span class="text-[#F7B94A]">Here</span></a> for the guide.</p>
    </div>


    {{-- slide 5 --}}
    <div class="flex  flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 1 of 7 </h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a18.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 6 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 2 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a19.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 3 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a20.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 8 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 4 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a21.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 9 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 5 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a22.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 6 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a23.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a wagon? Step 7 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a24.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Play with the wagon and answer some questions.
                    <ul class="list-disc">
                        <li>How do you play with the wagon?</li>
                        <li>Why does it move?</li>
                        <li>What can you use it for?</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">What happens when you pull the string?</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a8.png') }}" />
        <p class="note">Note: Encourage children to share their hands-on experiences.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video1" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">When you pull the string,the wagon that is tied to the string moves.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute cursor-pointer top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video2" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Why do you think the wagon moves easily? What does it have?</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute cursor-pointer top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video3" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Yes, the wagon moves easily because it has <span class="text-white">wheels</span> and axles
            that turn together.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute cursor-pointer top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/a11.png') }}" />
        <h2 class="title stroke">An <span class="text-white">axle</span> is a rod that joins the two front or back wheels
            of
            the wagon.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video4" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">The<span class="text-white"> wheels</span> and <span class="text-white">axles</span>
            turn
            together to help<br />the wagon move.</h2>
        <p class="note">Note: Have children pay attention to the turning axle (from the hole) when the wheel is turned.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute cursor-pointer top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <video id="video5" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">What can you use the wagon for?</h2>
        <p class="note">Note: Encourage children to boldly share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute cursor-pointer top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <video id="video6" class="w-full max-w-[42rem] pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="stroke title">You can use it to move things around easily.</h2>
        <p class="note">Note: Invite chilren to use their wagons to transport things of different sizes and weights
            around.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute cursor-pointer top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row ">

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
        document.addEventListener("DOMContentLoaded", () => {
            // ===== GET ALL ELEMENTS =====
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            // ===== STATE VARIABLES =====
            let currentIndex = 0; // Current slide index
            let parentSlideIndex = null; // Where to return after info slides
            let isViewingInfoSlides = false; // Are we viewing info/click slides?
            let currentInfoClass = null; // Which info/click group (e.g., "info-slide1")

            // ===== HELPER FUNCTIONS =====

            // Pause all videos in the current slide
            function pauseAllVideos() {
                if (slides[currentIndex]) {
                    const videos = slides[currentIndex].querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            // Check if a slide is an info/click slide
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Get info/click class from button (e.g., "info-btn1" → "info-slide1")
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

            // Check if there's another info/click slide after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // ===== MAIN DISPLAY FUNCTION =====
            function showSlide(index) {
                // Pause videos before switching slides
                pauseAllVideos();

                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update current index
                currentIndex = index;

                // Determine if we're on the last slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                // Update button visibility
                if (isLastSlide || isLastInfoSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // ===== EVENT LISTENERS =====

            // Info/Click button handlers - enter info slide mode
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Remember where we came from
                    parentSlideIndex = currentIndex;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find and show the first matching info/click slide
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            // NEXT button handler
            nextBtn.addEventListener("click", () => {
                if (currentIndex >= slides.length - 1) return;

                currentIndex++;

                if (isViewingInfoSlides) {
                    // In info mode: only show slides with current info class
                    while (currentIndex < slides.length &&
                        !slides[currentIndex].classList.contains(currentInfoClass)) {
                        currentIndex++;
                    }
                } else {
                    // Normal mode: skip all info/click slides
                    while (currentIndex < slides.length &&
                        isInfoSlide(slides[currentIndex])) {
                        currentIndex++;
                    }
                }

                if (currentIndex < slides.length) {
                    showSlide(currentIndex);
                }
            });

            // RETURN button handler
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('WagonSelection') }}";
                    return;
                }

                if (isViewingInfoSlides) {
                    // In info mode: go to previous slide with same info class
                    let prevSlide = currentIndex - 1;

                    // Find previous slide with matching info class
                    while (prevSlide >= 0 &&
                        !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0) {
                        // Found previous info slide
                        showSlide(prevSlide);
                    } else {
                        // No more info slides - return to parent
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        showSlide(parentSlideIndex);
                        parentSlideIndex = null;
                    }
                } else {
                    // Normal mode: go back one slide, skip info slides
                    currentIndex--;

                    while (currentIndex > 0 && isInfoSlide(slides[currentIndex])) {
                        currentIndex--;
                    }

                    showSlide(currentIndex);
                }
            });

            // DONE button handler
            doneBtn.addEventListener("click", () => {
                if (isViewingInfoSlides && parentSlideIndex !== null) {
                    // Return to parent slide
                    isViewingInfoSlides = false;
                    currentInfoClass = null;
                    showSlide(parentSlideIndex);
                    parentSlideIndex = null;
                } else {
                    // Go to selection page
                    window.location.href = "{{ route('WagonSelection') }}";
                }
            });

            // ===== INITIALIZE =====
            showSlide(0);
        });

        // ===== VIDEO TOGGLE FUNCTION =====
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video) {
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            }
        }
    </script>
@endpush
