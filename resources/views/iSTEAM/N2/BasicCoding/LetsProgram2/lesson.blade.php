@extends('layout.master')
@section('title', 'Dynamic Presentation')



@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Lets Programme 2</h2>


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs30.png') }}" alt="">
        <h2 class="stroke title">Children, what are these?
            What did you use them for in the previous lesson?<h2>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs31.png') }}" />
        <h2 class="stroke title">You can use the mats to form mazes of different shapes. </h2>
        <p class="note">Note: Remind children that we usually find a way to move through a maze.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" />
        <h2 class="title stroke text-center">TWhat about these? What did you use them for?</h2>
        <p class="note">Note: Have children recall and talk about the uses of these programming cards.</p>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center gap-5 slide hidden">
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" />
            <div class="flex !text-white text-[1.5vw] gap-[2vw]">
                <p>forwar</p>
                <p>bakcward</p>
                <p>turn left</p>
                <p>turn right</p>
            </div>
        </div>
        <h2 class="title stroke text-center"> You used these <span class="!text-white">programming</span> cards to <span
                class="text-white">programme</span> a <span class="!text-white">robot</span>
            to move from a starting point to an end point.</h2>
    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Mission: <br>
                Let's lay out a grid maze and play a game. Think and plan
                how to move through the maze. Then lay out the programming cards and move from the starting point to the end
                point.</h2>
        </div>
        <p class="note">Note: Have children work together as a class to complete the mission. If you want, explain to <br>
            them that a grid is in a pattern of straight lines that cross over each other, forming boxes.</p>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex justify-center items-center flex-col">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs33.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/bs32.png') }}" />
        </div>
        <h2 class="title stroke text-center">These friends are going somewhere today.Can you guess where they are going?
        </h2>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs34.png') }}" />
        <h2 class="stroke title">Jon wants to see the giraffes.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
       <!-- Sample Answer Button -->
        <button class="absolute top-1/2 right-[2vw] info-btn1 z-30 -translate-y-1/2 ans-btn">
            <img src="{{ asset('assets/images/N2/BasicCoding/ans-btn.png') }}" />
        </button>
    </div>
    {{-- information --}}
    <div class="flex flex-col info-slide1 items-center justify-center slide hidden">
        <h2 class="stroke title">Jon may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs35.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>


    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs36.png') }}" />
        <h2 class="stroke title">Sally wants to see the lions.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
        <!-- Sample Answer Button -->
        <button class="absolute top-1/2 right-[2vw] info-btn2 z-30 -translate-y-1/2 ans-btn">
            <img src="{{ asset('assets/images/N2/BasicCoding/ans-btn.png') }}" />
        </button>
    </div>
    {{-- information --}}
    <div class="flex flex-col info-slide2 items-center justify-center slide hidden">
        <h2 class="stroke title">Sally may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs37.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs38.png') }}" />
        <h2 class="stroke title">Tom wants to see the lions.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
        <!-- Sample Answer Button -->
        <button class="absolute top-1/2 right-[2vw] info-btn3 z-30 -translate-y-1/2 ans-btn">
            <img src="{{ asset('assets/images/N2/BasicCoding/ans-btn.png') }}" />
        </button>
    </div>
    {{-- information --}}
    <div class="flex flex-col items-center ifno-slide3 justify-center slide hidden">
        <h2 class="stroke title">Tom may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs39.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>



    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/bs40.png') }}" />
        <h2 class="stroke title">Mei wants to see the lions.Have can he go there?</h2>
        <p class="note text-center">Note: Have children lay out the maze, plan the steps, lay out the programming cards
            and move through the maze.</p>
        <!-- Sample Answer Button -->
        <button class="absolute top-1/2 right-[2vw] info-btn4 z-30 -translate-y-1/2 ans-btn">
            <img src="{{ asset('assets/images/N2/BasicCoding/ans-btn.png') }}" />
        </button>
    </div>
    {{-- information --}}
    <div class="flex flex-col items-center info-slide4 justify-center slide hidden">
        <h2 class="stroke title">Mei may move like this.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/bs41.png') }}" />
        <p class="note text-center">Note: Accept other logical answers presented by children,</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke text-start">Mission: <br>
                Let's create a new zoo programming game! Set a new
                starting point and end point in the grid maze. Then get
                your friends of another group to think and plan how to
                move through the maze (lay out the programming cards
                to move from the starting point to the end point).</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have the groups take turns to complete the mission.</p>
    </div>



    {{-- =================================================================== --}}
    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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

        <button class="nextButton ">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>
@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {


            // STEP 1: Get all the elements we need

            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");


            // STEP 2: Track current state

            let currentSlide = 0;
            let parentSlide = null;
            let infoMode = false;
            let infoClass = null;


            // STEP 3: Helper functions


            // Stop all videos in the current slide
            function pauseVideos() {
                if (slides[currentSlide]) {
                    const videos = slides[currentSlide].querySelectorAll("video");
                    videos.forEach(video => {
                        video.pause();
                    });
                }
            }

            // Check if a slide is an info or click slide
            function isInfoSlide(slide) {
                const classList = Array.from(slide.classList);

                for (let className of classList) {
                    // Check if it matches "info-slide1", "info-slide2", etc.
                    if (className.match(/^info-slide\d+$/)) return true;
                    // Check if it matches "click1", "click2", etc.
                    if (className.match(/^click\d+$/)) return true;
                }

                return false;
            }

            // Get the info class from a button
            // Example: button with "info-btn1" → returns "info-slide1"
            function getInfoClass(button) {
                const classList = Array.from(button.classList);

                // Look for "info-btn1", "info-btn2", etc.
                for (let className of classList) {
                    if (className.startsWith('info-btn')) {
                        const number = className.replace('info-btn', '');
                        return 'info-slide' + number;
                    }
                }

                // Look for "click-btn1", "click-btn2", etc.
                for (let className of classList) {
                    if (className.startsWith('click-btn')) {
                        const number = className.replace('click-btn', '');
                        return 'click' + number;
                    }
                }

                return null;
            }

            // Check if there's another info slide after this one
            function hasNextInfo(index) {
                if (!infoClass) return false;

                // Look through remaining slides
                for (let i = index + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(infoClass)) {
                        return true;
                    }
                }

                return false;
            }

            // STEP 4: Main function to show a slide

            function showSlide(index) {
                // Pause any playing videos
                pauseVideos();

                // Hide all slides except the one we want
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove("hidden");
                    } else {
                        slide.classList.add("hidden");
                    }
                });

                // Update our current position
                currentSlide = index;

                // Figure out if this is the last slide
                const isLastSlide = (index === slides.length - 1);
                const isLastInfoSlide = (infoMode && !hasNextInfo(index));

                // Show correct buttons
                if (isLastSlide || isLastInfoSlide) {
                    // Last slide: hide Next, show Done
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) {
                        doneButton.classList.remove("hidden");
                    }
                } else {
                    // Not last: show Next, hide Done
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) {
                        doneButton.classList.add("hidden");
                    }
                }
            }


            // STEP 5: Handle button clicks


            // When user clicks an info button
            infoButtons.forEach(button => {
                button.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Remember where we came from
                    parentSlide = currentSlide;
                    infoMode = true;
                    infoClass = getInfoClass(button);

                    // Find the first info slide that matches
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(infoClass)) {
                            showSlide(i);
                            break;
                        }
                    }
                });
            });

            // When user clicks Next button
            nextButtons.forEach(button => {
                button.addEventListener("click", () => {
                    // Don't go past the last slide
                    if (currentSlide >= slides.length - 1) return;

                    currentSlide++;

                    // Skip to the right slide
                    if (infoMode) {
                        // In info mode: only show slides with matching class
                        while (currentSlide < slides.length) {
                            if (slides[currentSlide].classList.contains(infoClass)) {
                                break;
                            }
                            currentSlide++;
                        }
                    } else {
                        // Normal mode: skip all info slides
                        while (currentSlide < slides.length) {
                            if (!isInfoSlide(slides[currentSlide])) {
                                break;
                            }
                            currentSlide++;
                        }
                    }

                    // Show the slide if we found one
                    if (currentSlide < slides.length) {
                        showSlide(currentSlide);
                    }
                });
            });

            // When user clicks Return button
            returnButton.addEventListener("click", () => {
                // If on first slide, go back to selection page
                if (currentSlide === 0) {
                    window.location.href = "{{ route('LetsProgram2Selection') }}";
                    return;
                }

                if (infoMode) {
                    // In info mode: go to previous info slide
                    let previousSlide = currentSlide - 1;

                    // Find previous slide with same info class
                    while (previousSlide >= 0) {
                        if (slides[previousSlide].classList.contains(infoClass)) {
                            break;
                        }
                        previousSlide--;
                    }

                    if (previousSlide >= 0) {
                        // Found a previous info slide
                        showSlide(previousSlide);
                    } else {
                        // No more info slides - exit info mode
                        infoMode = false;
                        infoClass = null;
                        showSlide(parentSlide);
                        parentSlide = null;
                    }
                } else {
                    // Normal mode: go back one slide
                    currentSlide--;

                    // Skip over any info slides
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // When user clicks Done button
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (infoMode && parentSlide !== null) {
                        // Exit info mode and return to parent slide
                        infoMode = false;
                        infoClass = null;
                        showSlide(parentSlide);
                        parentSlide = null;
                    } else {
                        // Go back to selection page
                        window.location.href = "{{ route('LetsProgram2Selection') }}";
                    }
                });
            }


            // STEP 6: Start by showing the first slide

            showSlide(0);
        });

        // Video control function
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
