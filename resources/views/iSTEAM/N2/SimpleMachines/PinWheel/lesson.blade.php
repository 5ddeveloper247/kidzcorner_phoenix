@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">A Pinwheel</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex flex-col items-center justify-center">
            <h2 class="title stroke">Children, what did you build on the last lesson? Hod did you play with it? What did you
                see it for?</h2>
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a8.png') }}" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">

        <video id="video1" class="w-full pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/1.mp4') }}" type="video/mp4">
        </video>
        <h2 class="title stroke">You pulled the string to move the wagon that is tied to the string.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <video id="video2" class="w-full pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/3.mp4') }}" type="video/mp4">
        </video>
        <h2 class="title stroke">You can use it to move things around easily.</h2>
        <p class="note text-ellipsis">Note: have children share thing they are able and unable to transport around using
            their wagons.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">A strong wagon can help us carry and move people and heavy things around easily.</h2>
        <div class="flex items-center gap-10">
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a14.png') }}" class="large-img" />
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a15.png') }}" class="large-img" />
        </div>
    </div>


    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">A strong wagon can help us carry and move people and heavy things around easily.</h2>
        <div class="flex items-center gap-10">
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a14.png') }}" class="large-img" />
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a15.png') }}" class="large-img" />
        </div>
        <p class="note text-ellipsis">Note: Have children point out the part in each photo.</p>
    </div>


    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Yes, the container of a wagon carries people and heavy things.</h2>
        <div class="flex items-center gap-10">
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a14.png') }}" class="large-img" />
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a15.png') }}" class="large-img" />
        </div>
        <p class="note text-ellipsis">Note: Point to show the container of each wagon.</p>
    </div>



    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-10">
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a14.png') }}" class="large-img" />
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a15.png') }}" class="large-img" />
        </div>
        <h2 class="title stroke">Which part of a wagon makes it easier for us to move people and heavy things around?.</h2>
    </div>


    {{-- Slide 8 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a11.png') }}" />
        <h2 class="stroke title">Just like the wagon you made, each <span class="text-white">wheel<br /></span>of a wagon is
            fixed to a rod called an <span class="text-white">axle</span>.</h2>
    </div>


    {{-- Slide 9 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <video id="video3" class="w-full pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/3.mp4') }}" type="video/mp4">
        </video>
        <h2 class="stroke title">When you pull the wagon, its wheel and axle turn together to let you move things around
            easily.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 10 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a16.png') }}" />
        <h2 class="stroke title">A <span class="text-white">wheel</span> and <span class="text-white">axle</span> is a type
            of <span class="text-white">simple machine</span>.<br /><span class="text-white">Simple machines</span> are
            tools that help us to do work easily.</h2>
    </div>


    {{-- Slide 11 --}}
    <div class="slide flex flex-col items-center h-[50vh] justify-between ">
        <h2 class="stroke title">Many things around us have <span class="text-white">wheels</span> and <span
                class="text-white">axles</span>.<br />Can you name some examples?</h2>
        <p class="note text-ellipsis">Note: Guide children to recall and name some things with wheels and axles in their
            surroundings <br> [wheels and axles can be found on things that turn in a circle].</p>
    </div>


    {{-- Slide 12 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a25.png') }}" class="large-img" />
        <h2 class="stroke title">What is this? Where are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span>?</h2>
        <p class="note">Note: Guide children to name and point out each pair of its wheel and axles.</p>
    </div>


    {{-- Slide 13 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a25.png') }}" class="large-img4" />
        <h2 class="stroke title">These are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span> of this shopping cart.</h2>
        <p class="note">Note: Guide children to count how many pairs of wheel and axle are there on the shopping cart.</p>
    </div>


    {{-- Slide 14 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a26.png') }}" />
        <h2 class="stroke title">When you push a shopping cart, its turning wheels and axle lets you easily bring along
            things you want to buy.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 15 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a27.png') }}" />
        <h2 class="stroke title">What is this? Where are the<span class="text-white"> wheels</span> and <span
                class="text-white">axles</span>?</h2>
        <p class="note">Note: Guide children to name and point out each pair of its wheel and axle.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a27.png') }}" />
        <h2 class="stroke title">These are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span> of this scooter.</h2>
        <p class="note">Note: Guide children to count how many pairs of wheel and axle are there on this scooter.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a28.png') }}" />
        <h2 class="stroke title">When you ride a scooter, its turning <span class="text-white">wheel</span> and <span
                class="text-white">axle<br /></span>lets
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video')"
                class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
                <img src="/assets/images/pptimages/video.png" />
            </div>you have fun moving around easily.
        </h2>
    </div>


    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a29.png') }}" />
        <h2 class="stroke title">What is this? Where are the<span class="text-white"> wheels</span> and <span
                class="text-white">axles</span>?</h2>
        <p class="note">Note: Guide children to name and point out each pair of its wheel and axle.</p>
    </div>



    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/gl1.png') }}" />
        <h2 class="stroke title">These are the <span class="text-white">wheels</span> and <span
                class="text-white">axles</span> of the giant wheel.</h2>
        <p class="note">Note: Guide children to count how many pairs of wheel and axle are there on this giant wheel.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a30.png') }}" />
        <h2 class="stroke title">When you take a ride on a giant wheel, its turning<br /><span class="text-white">wheel
            </span>and <span class="text-white">axle</span> lets you easily view the scenery.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a31.png') }}" />
        <h2 class="stroke title">Have you ever played with a pinwheel? A pinwheel also has wheel and axle.Do you know where
            is it?</h2>
    </div>


    {{-- slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start   ">
        <h2 class="title stroke">Let’s do: <br>
            Let’s follow the instructions to build a pinwheel and then play with it.</h2>

        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a32.png') }}" class="large-img" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build a pinwheel.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a33.png') }}" class="large-img" />
        <p class="note z-[99]">Note: Have each group of children work together to complete the mission. <a
                class="click-btn1">Click
                <span class="text-[#F7B94A]">here</span></a> for the guide.</p>
    </div>


    {{-- slide  25 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 1 of 5 </h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a34.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 2 of 5</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a35.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 3 of 5</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a36.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 28 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 4 of 5</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a37.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 29 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a pinwheel? Step 5 of 5</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a38.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 30 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Play with the pinwheel and answer some questions.
                    <ul class="list-disc">
                        <li>How do you play with the pinwheel?</li>
                        <li>How many blades does it have?</li>
                        <li>Where is the wheel and axle of it?</li>
                        <li>Why do its blades spin?</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Let children freely play with their pinwheels (may blow or use hand to push the pinwheel to
            move)</p>
    </div>


    {{-- slide 31 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. Use a fan to make the pinwheel spin and answer some questions.
                    <ul class="list-disc">
                        <li>Which way is easier to make the blades spin: <br>
                            as the wind blows from the front or the side of the pinwheel?</li>
                        <li>How do you make the blades spin faster or slower?</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Now, let children use a fan to make their pinwheels spin.</p>
    </div>


    {{-- slide 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl2.png') }}" />
        <h2 class="title stroke">This is the wheel (hast two blades) and axle of the pinwheel.</h2>
        <p class="note">Note: Guide each group of children to point out the wheels and axle of their pinwheels.</p>
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/SimpleMachines/a43.png') }}" class="large-img3" />

        <h2 class="title stroke">The wheel and axle of the pinwheel turn as the wind blows.</h2>
        <p class="note">Note: Explain to children that the wind forces the wheel (blades) to turn and so the axle of the
            pinwheel turns together.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 33 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/a39.png') }}"  />
        <h2 class="stroke title">You can place the pinwheel near the fan<br />to make its <span
                class="text-white">wheel</span> and <span class="text-white">axle</span> turn fast.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 34 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/a40.png') }}"  />
        <h2 class="stroke title">You can place the pinwheel far the fan<br />to make its <span
                class="text-white">wheel</span> and <span class="text-white">axle</span> turn slow.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 35 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/a41.png') }}"  />
        <h2 class="stroke title">As the wind blows on a pinwheel, its turning <span
                class="text-white">wheel<br /></span>and <span class="text-white">axle</span> lets you see the blades
            spinning.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 36 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/SimpleMachines/a42.png') }}" />
        <h2 class="stroke title">Do you enjoy seeing the blades of this pinwheel spinning? Why?</h2>
        <p class="note">Note: Encourage children to share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')"
            class="absolute top-1/2 right-[-10vw] z-30 h-24 w-24 -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

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
                    window.location.href = "{{ route('PinWheelSelection') }}";
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
                    window.location.href = "{{ route('PinWheelSelection') }}";
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
