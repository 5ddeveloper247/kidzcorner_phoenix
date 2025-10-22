@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
{{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">A Measuring Car (1)</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center h-[50vh] justify-between slide hidden">
        <h2 class="stroke title !text-white ">Hands-on Time 1</h2>
        <h2 class="stroke title text-start">Mission: <br>
            Let’s follow the instructions to build a measuring carand then play with it.</h2>
        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <h2 class="stroke title text-start">Steps: <br>
            1. Make sure you have all these parts</h2>
        <img src="/assets/images/N2/SimpleMachines/b1.png" />
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <h2 class="stroke title text-start">Steps: <br>
            2. Build a measuring car.</h2>
        <img src="/assets/images/N2/SimpleMachines/b2.png" class="large-img2" />

        <p class="note z-[99]">Note: Have each group of children work together to complete the mission. <a
                class="click-btn1">Click <span class="text-[#F7B94A]">Here</span></a> for the guide.</p>
    </div>



    {{-- slide 4 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 1 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b3.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 2 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b4.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 3 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b5.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 4 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b6.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 5 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b7.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 6 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 7 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b9.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 8 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b10.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a measuring car? Step 9 of 9</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/b11.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3.Give the car a push to see what happens and then answer some questions.
                    <ul class="list-disc">
                        <li>What happens when the car is pushed?</li>
                        <li>Which part of the car helps it move?</li>
                        <li>Why is the handle behind the car turned?</li>
                        <li>Why do you think this car is called a measuring car?</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    {{-- sldie 14 --}}
    <div class="flex flex-col  slide hidden items-center">
        <img src="/assets/images/N2/SimpleMachines/b14.png" />
        <h2 class="title stroke">When you give the car a push, its <span class="text-white "> wheels </span> and <span
                class="text-white "> axles</span> turn together.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- sldie 15 --}}
    <div class="flex flex-col  slide hidden items-center">
        <img src="/assets/images/N2/SimpleMachines/b12.png" class="large-img2" />
        <h2 class="stroke title">These <span class="text-white">wheels</span> and <span class="text-white">axles</span> let
            the car moves forwards.</h2>
        <p class="note">Note: Guide children to point out these four pairs of wheels and axles on the car.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col  slide hidden items-center">
        <img src="/assets/images/N2/SimpleMachines/b13.png" class="large-img" />
        <h2 class="title stroke">These wheels and axles let the handle behind the car turn as the car is moving forward.
        </h2>

    </div>



    {{-- slide 17 --}}
    <div class="flex flex-col  slide hidden items-center">
        <img src="/assets/images/N2/SimpleMachines/gl3.png" />
        <h2 class="title stroke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide  18 --}}
    <div class="flex flex-col  slide hidden items-center">
        <img src="/assets/images/N2/SimpleMachines/gl4.png" />
        <h2 class="title stroke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col  slide hidden items-center">

        <img src="/assets/images/N2/SimpleMachines/gl5.png" />

        <h2 class="title stroke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col  slide hidden items-center">

        <img src="/assets/images/N2/SimpleMachines/gl6.png" />
        <h2 class="title stroke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden items-center">

        <img src="/assets/images/N2/SimpleMachines/gl7.png" />
        <h2 class="title stroke">Let’s watch this video!</h2>
        <p class="note">Note: Demo using a car and guide children to “see” this point (what makes what to turn/move)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 22 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/b17.png" />
        <h2 class="stroke title">As the car goes forward, the handle behind it will turn.</h2>
        <p class="note"> Note: Demo using a car and guide children to understand this point.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 23  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/b17.png" />
        <h2 class="stroke title">The handle is in front of a scale with numbers.</h2>
        <p class="note"> Note: Guide children to name the numbers on the scale.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 24 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/b18.png" />
        <h2 class="stroke title">This is called a measuring car because its scale counts
            how many units does it go forward.</h2>
        <p class="note">Note: Explain that the handle must set to zero for accurate counting.</p>
    </div>


    {{-- slide 25 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/N2/SimpleMachines/b19.png" />
        <h2 class="stroke title">When you give this car a push, it will show you
            how far it moves forward.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30  -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 26 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start">
            <h2>Mission:</h2>
            <ul>
                <li>Let’s play with the measuring car and find ways to make it go very far.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/a60.png" class="w-[600px]" />
        <p class="note">Note: Have children work in groups to complete the mission. Have the groups take turns to
            showcase their findings in the end.</p>
    </div>


    {{-- Complete button --}}
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
                    window.location.href = "{{ route('MeasuringCarSelection') }}";
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
                    window.location.href = "{{ route('MeasuringCarSelection') }}";
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
