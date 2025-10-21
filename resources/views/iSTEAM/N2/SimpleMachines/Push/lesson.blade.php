@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">

        <img src="{{ asset('/assets/images/N2/SimpleMachines/new1.png') }}" class="w-[436px]" />
        <h2 class="stroke title">Children, do you remember what this is?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>




    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">

        <img src="{{ asset('/assets/images/N2/SimpleMachines/new2.png') }}" class="w-[436px]" />
        <h2 class="stroke title">This is a ramp. It is a slanting surface with one end higher than the other end.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/new2.png') }}" class="w-[436px]" />
        <h2 class="stroke title">The <span class="text-white">ramp</span> looks like a shape.<br />It is a <span
                class="text-white">simple machine</span> called an <span class="text-white">inclined plane</span>.</h2>
    </div>



    {{-- slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/new2.png') }}" class="w-[436px]" />
        <h2 class="stroke title">The <span class="text-white">ramp</span> looks like a shape.<br />It is a
            <span class="text-white">simple machine</span> called an <span class="text-white">inclined plane</span>.
        </h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden h-full justify-between">
        <h2 class="title stroke !text-white">Hands-on Time 1</h2>
        <h2 class="title stroke">Mission:<br />Let’s follow the instructions to build two cars and a launcher.</h2>
        <p class="note">Note: Divide children into groups and give each group 3 sets of building bricks.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Build the first car.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/b23.png') }}" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a
                class="click-btn1">Click
                <span class="text-[#F7B94A]">here</span></a> for the guide.</p>
    </div>



    {{-- slide 7 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">Make sure you have all these parts to build the first car.</h2>
        <img src="{{ asset('assets/images/N2/b24.png') }}" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 1 of 4</h2>
        <img src="{{ asset('assets/images/N2/b25.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 9 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 2 of 4</h2>
        <img src="{{ asset('assets/images/N2/b8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 3 of 4</h2>
        <img src="{{ asset('assets/images/N2/b27.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center click1 justify-center slide hidden">
        <h2 class="title stroke">How do we build the first car? - Step 4 of 4</h2>
        <img src="{{ asset('assets/images/N2/b28.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 13 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>2. Build the second car.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/bcar2.p') }}ng" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a
                class="click-btn2">Click
                <span class="text-[#F7B94A]">here</span></a> for the guide.</p>
    </div>


    {{-- sldie 14 --}}
    <div class="flex flex-col items-center click2 justify-center slide hidden">
        <h2 class="title stroke">Make sure you have all these parts to build the second car.</h2>
        <img src="{{ asset('assets/images/N2/sparts.png') }}" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>



    {{-- sldie 15 --}}
    <div class="flex flex-col items-center click2 justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 1 of 6</h2>
        <img src="{{ asset('assets/images/N2/b3.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center click2 justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 2 of 6</h2>
        <img src="{{ asset('assets/images/N2/b4.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slid3 17 --}}
    <div class="flex flex-col items-center click2 justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 3 of 6</h2>
        <img src="{{ asset('assets/images/N2/b5.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>
    {{-- slide 18 --}}
    <div class="flex flex-col items-center click2 justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 4 of 6</h2>
        <img src="{{ asset('assets/images/N2/b6.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 19  --}}
    <div class="flex flex-col items-center click2 justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 5 of 6</h2>
        <img src="{{ asset('assets/images/N2/b7.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 20  --}}
    <div class="flex flex-col items-center click2 justify-center slide hidden">
        <h2 class="title stroke">How do we build the second car? - Step 6 of 6</h2>
        <img src="{{ asset('assets/images/N2/b8.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Build a launcher.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/bcar2.p') }}ng" class="w-[436px]" />
        <p class="note">Note: Have each group of children work together to complete the mission. <a
                class="click-btn3">Click
                <span class="text-[#F7B94A]">here</span></a> for the guide.</p>
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center click3 justify-center slide hidden">
        <h2 class="title stroke">Make sure you have all these parts to build a launcher.</h2>
        <img src="{{ asset('assets/images/N2/launcher.png') }}" />
        <p class="note">Note: Have each group of children check to ensure they have all the parts.</p>
    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col items-center click3 justify-center slide hidden">
        <h2 class="title stroke">How do we build the a launcher? - Step 1 of 3</h2>
        <img src="{{ asset('assets/images/N2/l1.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center click3 justify-center slide hidden">
        <h2 class="title stroke">How do we build the a launcher? - Step 2 of 3</h2>
        <img src="{{ asset('assets/images/N2/l2.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>

    {{-- slide 25 --}}
    <div class="flex flex-col items-center click3 justify-center slide hidden">
        <h2 class="title stroke">How do we build the a launcher? - Step 3 of 3</h2>
        <img src="{{ asset('assets/images/N2/l3.png') }}" />
        <p class="note">Note: Have each group of children pick up the right parts and then do the step together.</p>
    </div>



    {{-- slide 26 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/l4.png') }}" />
        <h2 class="stroke title">See how we
            can use a launcher to push a car forward.</h2>
        <p class="note">Note: Demo to show children how to use the launcher. Have them practice using it in their groups.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>

    </div>


    {{-- slide  27 --}}
    <div class="flex flex-col  slide hidden">

        <h2 class="title storke !text-white">Hands-on Time 2</h2>
        <div class="text-start">

            <h2 class="title storke">Mission: <br>
                Let’s use the launcher to push the two cars up an inclined plane to see how easy or difficult to do so.</h2>
        </div>
        <p class="note">Note: Have children work in groups to complete the mission.</p>
    </div>


    {{-- slide 28 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Use the launcher to push the first car up an inclined plane to see how easy or difficult to do so.
                </li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/b29.png') }}" class="w-[436px]" />
        <p class="note">Note: Have children take turns to try the step.</p>
    </div>

    {{-- slide 29 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>1. Use the launcher to push the second car up the same inclined plane to see how easy or difficult to do
                    so.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/SimpleMachines/b29.png') }}" class="w-[436px]" />
        <p class="note">Note: Have children take turns to try the step.</p>
    </div>


    {{-- slide 30 --}}
    <div class="flex flex-col  slide hidden">

        <h2 class="title storke">Based on your experience. which car is easier to move up the inclined plane: first or
            second? Why? What do you find out from the test?</h2>
        <p class="note">Note: Encourage children to share their hands-on experiences and views.Guide them to conclude in
            the end - a strong push is needed to make a big/heavy car move up an inclined plane.</p>
    </div>


    {{-- slide 31 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="stroke title"><span class="text-white">Inclined planes</span> are around us.<br />Let’s see if you can
            find them!</h2>
    </div>


    {{-- slide 32  --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/b30.png') }}" />
        <h2 class="stroke title">What is this? Where is the <span class="text-white">inclined plane</span>?</h2>
        <p class="note"> Note: Guide children to name and point out the inclined plane.</p>
    </div>


    {{-- slide 33 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/new3.png') }}" />
        <h2 class="stroke title">This <span class="text-white">inclined plane</span> lets us move down the
            slide<br />smoothly during play.</h2>
    </div>


    {{-- slide 34 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/b31.png') }}" />
        <h2 class="stroke title">What is this? Where is the <span class="text-white">inclined plane</span>?</h2>
        <p class="note"> Note: Guide children to name and point out the inclined plane.</p>
    </div>


    {{-- slide 35 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/b31.png') }}" />
        <h2 class="stroke title">This <span class="text-white">inclined plane</span> lets us move passengers
            in<br />wheelchairs up or down a bus easily.</h2>
    </div>


    {{-- slide 36 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/b32.png') }}" />
        <h2 class="stroke title">What is this? Where is the <span class="text-white">inclined plane</span>?</h2>
        <p class="note"> Note: Guide children to name and point out the inclined plane.</p>
    </div>


    {{-- slide 37 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="{{ asset('/assets/images/N2/SimpleMachines/new4.png') }}" />
        <h2 class="stroke title">This <span class="text-white">inclined plane</span> lets us move heavy things up or
            down<br />a truck easily.</h2>
    </div>





    {{-- ===================== --}}
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
                    window.location.href = "{{ route('PushSelection') }}";
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
                    window.location.href = "{{ route('PushSelection') }}";
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
