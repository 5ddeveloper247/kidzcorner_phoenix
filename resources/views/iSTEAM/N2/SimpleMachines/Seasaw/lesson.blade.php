@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">A Seasaw</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="/assets/images/N2/SimpleMachines/a16.png" />
        <h2 class="stroke title"><span class="text-white">Simple machines</span> are tools that help us to do
            work<br />easily. What <span class="text-white">simple machine</span> is this?</h2>
    </div>


    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="/assets/images/N2/SimpleMachines/s1.png" />
        <h2 class="stroke title">What about this?<br />What<span class="text-white"> simple machine</span> can you see?</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <h2 class="stroke title">Today, we are going to learn about<span class="text-white"> levers<br /></span>-another
            type of <span class="text-white">simple machine</span>.<br /><br />Let’s find out more!</h2>
    </div>


    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-between h-[50vh] ">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>

        <h2 class="stroke title">Mission: <br>
            Let’s follow the instructions to build a seesaw.</h2>
        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>


    {{-- slide 5 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s2.png" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a Seasaw.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s3.png" />
        <p class="note z-[99]">Note: Have each group of children work together to complete the mission. <a
                class="click-btn1">Click
                <span class="text-[#F7B94A]">here</span></a> for the guide.</p>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 1 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s4.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 2 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s5.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 3 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s6.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 4 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s7.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 5 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 6 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s9.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How to build a seesaw? Step 7 of 7</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/s10.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s11.png') }}" />
        <h2 class="title stroke"> How do you play with a seesaw? Would you play it on your own?</h2>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s12.png') }}" />
        <h2 class="title stroke">A seesaw is a long board rested on a fixed part in the middle.</h2>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s13.png') }}" />
        <h2 class="title stroke">To play it, you and a friend each sit on one end. When one end of it goes up, the other end
            goes down.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>

    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s11.png') }}" />
        <h2 class="stroke title">A seesaw is made with a<span class="text-white"> simple machine</span> <br />called a <span
                class="text-white">lever</span>.</h2>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/se1.png') }}" />
        <h2 class="stroke title">A <span class="text-white">lever</span> is a bar supported on a fixed part called<br />the
            <span class="text-white">fulcrum</span>. The bar moves around the <span class="text-white">fulcrum</span>.
        </h2>
    </div>

    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/se2.png') }}" />
        <h2 class="stroke title">With the help of <span class="text-white">fulcrum</span>, one end of the <span
                class="text-white">lever</span> will<br />move up when you push down the other end.</h2>
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/se3.png') }}" />
        <h2 class="stroke title">Many people use a <span class="text-white">lever</span> to lift heavy things.</h2>
    </div>



    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s11.png') }}" />
        <h2 class="stroke title">Where is the lever and fulcrum of this seesaw? What does the lever do?</h2>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl14.png') }}" />
        <h2 class="stroke title">The long board is the <span class="text-white">lever</span> of a seesaw.<br />The <span
                class="text-white">fulcrum</span> of this <span class="text-white">lever</span> is in the middle.</h2>
    </div>



    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s13.png') }}" />
        <h2 class="stroke title">This lever lets us easily lift each other up and down a seesaw during play.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')" class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s3.png') }}" />
        <h2 class="stroke title">A seesaw can also be a balancing scale.
            You can use it to compare weight of different things.</h2>
    </div>



    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s15.png') }}" />
        <h2 class="stroke title">Look at this seesaw! Who is lighter? Who is heavier?</h2>
        <p class="note ">Note: Have all children think and answer. Guide them to understand the meaning of lighter and
            heavier.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s15.png') }}" />
        <h2 class="stroke title">Based on this, you know that the girl is heavier than the boy.</h2>
    </div>


    {{-- .slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s16.png') }}" />
        <h2 class="stroke title">What about this? Which car is lighter? Which car is heavier?</h2>
        <p class="note">Note: Have all children think and answer. Guide them to understand the meaning of lighter and
            heavier.</p>
    </div>


    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s17.png') }}" />
        <h2 class="stroke title">Which car is lighter? Which car is heavier?</h2>
        <p class="note">Note: Have all children think and answer. Guide them to understand the meaning of lighter and
            heavier.</p>
    </div>



    {{-- slide 29 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/N2/SimpleMachines/s16.png') }}" class="large-img" />
            <img src="{{ asset('assets/images/N2/SimpleMachines/s17.png') }}" class="large-img" />
        </div>
        <h2 class="stroke title">Based on these, you know that the red car is the lightest and the green car is the
            heaviest amongst the three cars!</h2>
    </div>



    {{-- slide 30 --}}
    <div class="flex flex-col h-[50vh] justify-between  slide hidden items-center">

        <h2 class="title stroke !text-white">Hands-on Time 2</h2>
        <div class="text-start">

            <h2 class="title stroke">Mission: <br>
                Let’s put on your thinking cap to play a balancing game!</h2>
        </div>
        <p class="note">Note: Give each group a set of materials needed. Have children work in groups to complete the
            mission,</p>
    </div>

    {{-- slide 31 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Put a boy on the seesaw.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s18.png" />
        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 32 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. How do you balance the seesaw using these square bricks?</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/gl11.png" class="large-img6" />
        <p class="note">Note: Have children work in groups to complete the challenge and show the teacher.</p>
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Now, put a girl on the seesaw.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s20.png" />

        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. How do you balance the seesaw using these square bricks?</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/gl12.png" class="large-img6" />
        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 35 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>5. Put a boy and a girl on one end of the seesaw.</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/s21.png" />

        <p class="note">Note: Have each group of children copy the same setup.</p>
    </div>


    {{-- slide 36 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>6. How do you balance the seesaw using these square bricks?</li>
            </ul>
        </div>
        <img src="/assets/images/N2/SimpleMachines/gl13.png" class="large-img6" />
        <p class="note">Note: Have children work in groups to complete the challenge and show the teacher.</p>
    </div>

    {{-- slide 37 --}}
    <div class="flex flex-col items-center justify-between h-[50vh] slide hidden">
        <h2 class="title stroke">Based on the game,do you always balance a seesaw by putting the square bricks at the same
            part of an end of the seesaw?</h2>
        <p class="note">Note: Encourage children to share their hands-on experiences and views.</p>
    </div>


    {{-- slide 38 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s22.png') }}" />
        <h2 class="stroke title">You can balance a seesaw when you put two things<br />of the same <span
                class="text-white">weight</span> on one end of the seesaw.</h2>
    </div>


    {{-- slide 39 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/s23.png') }}" />
        <h2 class="stroke title">You can also balance a seesaw when you put two things<br />of different <span
                class="text-white">weights</span> each on different parts<br />of the two ends of the seesaw.</h2>
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
        //video + click logic
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
                    window.location.href = "{{ route('SeasawSelection') }}";
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
                    window.location.href = "{{ route('SeasawSelection') }}";
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
