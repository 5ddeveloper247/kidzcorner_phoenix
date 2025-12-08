@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">A Spinning Top</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title"><span class="!text-white">Simple machines</span> are tools that help us to do<br />work
            easily. What <span class="!text-white">simple machine </span>is this?</h2>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a57.png') }}" class="img-lg" />
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <h2 class="stroke title">This <span class="!text-white">wheel</span> and <span class="!text-white">axle</span> lets us
            move people and<br />heavy things around easily when we pull the wagon.</h2>
        <div class="flex items-center gap-[1.5vw] ">
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a14.png') }}" class="img-sm" />
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a15.png') }}" class="img-sm" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a25.png') }}" class="img-h-md" />
        <h2 class="stroke title">This <span class="!text-white">wheel</span> and <span class="!text-white">axle</span> lets
            us
            easily bring along things<br />to buy when we push the shopping cart.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a27.png') }}" class="img-md" />
        <h2 class="stroke title">This <span class="!text-white">wheel</span> and <span class="!text-white">axle</span> lets
            us
            have fun moving around<br />easily when we ride a scooter.</h2>
    </div>



    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a29.png') }}" class="img-md" />
        <h2 class="stroke title">This <span class="!text-white">wheel</span> and <span class="!text-white">axle</span> lets
            us
            easily view the scenery<br />when we take a ride on a giant heel.</h2>
    </div>


    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a31.png') }}" class="img-md" />
        <h2 class="stroke title">This <span class="!text-white">wheel</span> and <span class="!text-white">axle</span> lets
            us
            have fun seeing the blades
            as the wind blows on a pinwheel.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/videos/13.mp4') }}" type="video/mp4">
        </video>
        <h2 class="stroke title">This <span class="!text-white">wheel</span> and <span class="!text-white">axle</span> lets
            us
            have fun seeing the blades
            as the wind blows on a pinwheel.</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[30vw] ">
        <h2 class="title stroke !text-white">Hands-on Time 1</h2>
        <h2 class="title stroke text-start">Mission: <br>
            Let’s follow the instructions to build a spinning top and then play with it.</h2>

        <p class="note">Note: Divide children into groups and give each group a set of building bricks.</p>
    </div>

    {{-- sldie 8 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>1. Make sure you have all these parts.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a49.png') }}" class="img-lg" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts,</p>
    </div>


    {{-- sldie 9 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>2. Build a spinning top.</li>
            </ul>
        </div>
        <div class="flex items-center gap-[1.5vw] ">
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a44.png') }}" class="img-sm" />
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a51.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col  slide hidden items-center justify-between h-[30vw]">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>3. Play with the spinning top and answer some questions.
                    <ul class="lesson-ul" class="list-disc">
                        <li>How do you play with the spinning top?</li>
                        <li>Where is the wheel and axle of it?</li>
                        <li>How long does it spin? <br> Record the longest time it spins.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins <br> (each group 2
            chances)</p>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>4. Build a launcher for the spinning top.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a45.png') }}" class="img-md" />

        <p class="note z-[99]">Note: Have each group of children work together to complete the mission. <a
                class="click-btn1">Click
                <span class="text-[#F7B94A]">here</span></a>for the guide.</p>
    </div>


    {{-- slide  12 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 1 of 3 </h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a34.png') }}" class="img-xl" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 13 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 2 of 3</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a35.png') }}" class="img-xl" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col click1 items-center justify-center slide hidden">
        <h2 class="title stroke">How to build a launcher? Step 3 of 3</h2>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a36.png') }}" class="img-xl" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>5. See how to use the launcher to play with
                    the spinning top.</li>
            </ul>
        </div>
        <div class="flex items-center gap-[1.5vw] ">
            <img src="{{ asset('/assets/images/N2/SimpleMachines/a50.png') }}" class="img-xs" />
            <video id="video2" class=" pointer-events-none video-md">
                <source src="{{ asset('assets/images/N2/SimpleMachines/videos/14.mp4') }}" type="video/mp4">
            </video>
        </div>
        <p class="note">Note: Demo to show children how to use the launcher. Have them practise using it in their
            groups.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- slide  --}}
    <div class="flex flex-col  slide hidden items-center justify-between h-[30vw]">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>6. Use the launcher to play with the pinwheel and
                    answer some questions.
                    <ul class="lesson-ul" class="list-disc">
                        <li>Does the launcher make the spinning top spin longer?</li>
                        <li>How long does it spin? <br>
                            Record the longest time it spins.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)
            After that, guide to compare the results and complete their learning journals.</p>
    </div>

    {{-- slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke title">This is the <span class="!text-white">wheel </span>(the two gears) and <span
                class="text-white">axle<br /></span>of the spinning top.</h2>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a58.png') }}" class="!w-[35vw]" />
        <p class="note">Note: Guide each group of children to point out the wheel and axle of their spinning tops.</p>

    </div>

    {{-- slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-end">
            <div class="flex flex-col items-end">
                <img src="{{ asset('assets/images/N2/SimpleMachines/arrow.svg') }}" class="!w-[2.5vw]">
                <p class="w-[5vw] text-white text-[1vw]">A flick of the
                    fingers to make
                    it spin!</p>
            </div>
            <video id="video3" class=" pointer-events-none">
                <source src="{{ asset('assets/images/N2/SimpleMachines/videos/15.mp4') }}" type="video/mp4">
            </video>
        </div>
        <h2 class="stroke title">When you make the <span class="!text-white">axle</span> of the spinning top
            spin,<br />its
            <span class="!text-white">wheel </span>spins together.
        </h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 17  --}}
    <div class="slide flex flex-col items-center justify-between h-[30vw] ">

        <h2 class="stroke title">Based on your record, which way do you find it
            easier to make the spinning top spin longer:using your fingers or using a launcher?.</h2>

        <p class="note">Note: Have each group of children share their findings based on the record in their learning
            journal.The results may vary due to different factors (e.g. how strong is the flick of individual's fingers, how
            smooth is individual process of using a launcher).</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center slide hidden justify-between h-[30vw]">

        <h2 class="title stroke !text-white">Hands-on Time 2</h2>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/a52.png') }}" class="img-xl" />
        <div class="text-start">

            <h2 class="title stroke text-start">Mission: <br>
                Let’s play and compare the spinning time of these four designs of spinning tops.</h2>
        </div>

    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>1. Use a launcher to play with the spinning top A. How long does it spin? Record the longest time it
                    spins.</li>
            </ul>
        </div>
        <video id="video4" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/videos/16.mp4') }}" type="video/mp4">
        </video>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>2. Use a launcher to play with the spinning top B. How long does it spin? Record the longest time it
                    spins.</li>
            </ul>
        </div>
        <video id="video5" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/videos/16.mp4') }}" type="video/mp4">
        </video>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden items-center">
        <div class="title stroke text-start self-start">
            <h2>Steps:</h2>
            <ul class="lesson-ul">
                <li>3. Use a launcher to play with the spinning top C. How long does it spin? Record the longest time it
                    spins. </li>
            </ul>
        </div>
        <video id="video6" class="video-md pointer-events-none">
            <source src="{{ asset('assets/images/N2/SimpleMachines/videos/16.mp4') }}" type="video/mp4">
        </video>
        <p class="note">Note: Teacher to time and record how long the spinning top of each group spins (each group 2
            chances)</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>


    {{-- slide 22 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vw]">

        <h2 class="stroke title">Based on your record, which design of spinning top do you find spins the longest using a
            launcher: A, B, C or D?</h2>

        <p class="note">Note: Guide children to compare the results and complete their learning journals.
            Then have each group of children share their findings based on the record in their learning journal.
            The results may vary due to different factors (e.g. how smooth is individual process of
            using a launcher. how many times the individual turn the handle before lifting up the launcher).</p>
    </div>

    {{-- slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke title">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <div class="flex flex-col justify-center items-center gap-[4vw] pt-[2vw]">
                <p>Which way makes the spinning top spin longer? Circle it.</p>

                <div class="flex items-center gap-x-[2.5vw]">
                    <img src="{{ asset('/assets/images/N2/SimpleMachines/a54.png') }}" class="!w-[15vw]" />
                    <img src="{{ asset('/assets/images/N2/SimpleMachines/a55.png') }}" class="!w-[15vw]" />
                </div>
            </div>
        </div>

    </div>

    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="stroke title">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center "
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">

            <div class="flex flex-col justify-center items-center gap-[4vw]">
                <p>Which spinning top spins the longest time using a launcher? Circle it.</p>
                <img src="{{ asset('/assets/images/N2/SimpleMachines/a52.png') }}" class="!w-[100%]" />
            </div>
        </div>

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
                    window.location.href = "{{ route('spinningTopSelection') }}";
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
                    window.location.href = "{{ route('SimpleMachines') }}";
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
