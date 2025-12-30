@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
 {{-- title --}}
    <h2 class="top-title stroke">Animate the Characters</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample A</h2>
                <video id="video1" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/character/286.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video1')" class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample B</h2>
                <video id="video2" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/character/287.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video2')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>

        <h2 class="title stroke">Children, let's look at these sample stories!
            Do they show you the same storyline and ending?</h2>

        <p class="note">Note: Have children talk about what they see from each sample.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample A</h2>
                <video id="video3" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/character/286.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video3')"
                    class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample B</h2>
                <video id="video4" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/character/288.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video4')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>

        <h2 class="title stroke">What about these samples?
            Do they show you the same storyline and ending?</h2>

        <p class="note">Note: Have children talk about what they see from each sample.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">What is the main difference between Sample A, B and C?</h2>
        <p class="note">Note: Replay videos of the 3 samples. Guide children to compare and talk about the difference
            (speed of the ball). Ask children what speed is.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/character/a2.png') }}" class="img-md" />
        <h2 class="title stroke"><span class="!text-white"> Speed</span> is a rate that tells us how fast or slow
            someone or something is moving.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">By looking at the three samples, we know that when a
            character is programmed to move at different speeds, we may
            see different animation effects on the stage.</h2>
        <h2 class="title stroke">Let's find out how to set the speed of a character!</h2>
        <p class="note">Note: Use tablets to show children the following part.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/character/a3.png') }}" class="!w-[32vw]" />
        <h2 class="title stroke">What is the name and use of this command?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of Control Blocks command
            (to plan and design a programme).</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/character/a4.png') }}" class="!w-[32vw]" />
        <h2 class="title stroke">What are these programming blocks?</h2>
        <p class="note">Note: Guide children to recall and name the four programming blocks under Control Blocks command.
        </p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/character/a5.png') }}" class="img-xl" />
        <h2 class="title stroke">The Control Blocks have a set of programming blocks.
            Each block here is a way to plan how to run a programme.</h2>
        <p class="note">Note: Show and name each programming block here.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-end">
            <div>
                <img src="{{ asset('assets/images/K2/character/a6.png') }}" class="!h-[18vw]" />
            </div>
            <div>
                <video id="video5" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/character/289.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video5')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">What is the use of "Wait" block?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of "Wait" block (it makes a programme pause
            for a specified amount of time; a character with programmes that include this block will pause for a while on
            the stage).</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-end">
            <div>
                <img src="{{ asset('assets/images/K2/character/a8.png') }}" class="img-xs" />
            </div>
            <div>
                <video id="video6" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/character/290.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video6')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">What is the use of "Repeat" block?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of "Repeat" block (it makes the block/blocks
            placed inside it to run for a specified number of times; it makes the programme created looks shorter and
            neater).</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-end">
            <div>
                <img src="{{ asset('assets/images/K2/character/a10.png') }}" class="!h-[18vw]" />
            </div>
            <div>
                <video id="video7" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/character/291.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video7')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">What is the use of "Set Speed" block?</h2>
        <p class="note">Note: Show children the effect of this block on a character. Guide them to know that "Set Speed"
            block changes the running speed of some blocks in a programme; it controls how fast or slow a character animates
            on the stage.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/character/a12.png') }}" class="img-h-md" />
        <h2 class="title stroke">Clearly, we can use "Set Speed" block to programme a
            character to move at slow, normal or fast speed.</h2>
        <p class="note">Note: Have children point at the block image that show us slow, normal and fast speed.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide flex flex-col items-center justify-center">
        <video id="video8" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/character/288.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide flex flex-col items-center justify-between h-[28vw] ">
        <h2 class="title stroke !text-white">Hands-on Time 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <h2>
                 <ol class="title stroke">
     <li> Use ScratchJr to work out the programmes of the two
                            characters as shown in the sample on the last page.</li>
                    </ol>
        </div>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Choose the correct background.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/character/a13.png') }}" class="img-sm" />
            <img class="!w-[2.5vw]" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/character/a14.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Replay the <button class="text-[#f7b94a] click-btn1">Video</button> if needed.</p>
    </div>


    {{-- click slide --}}
    <div class="slide click1 flex flex-col items-center justify-center">
        <video id="video9" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/character/288.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
        <h2 class="title stroke">BBased on this sample, 
            can you work out the programmes of the two characters?</h2>
    </div>



    {{-- Slide 23 --}}
    <div class="slide flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Add and move each character to a starting point.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/character/a15.png') }}" class="img-xl" />
        <p class="note">Note: This is the actual starting point of the characters in the sample.
            To be more flexible, let children decide their own starting points.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Work out the programmes of each character and run the programmes.</li>
            </ol>
        </div>
        <div class="flex items-center justify-center items-end">
            <div>
                <button class="!text-white w-[10vw] h-[5vw] bg-[#2D9CDB] rounded-[1vw] text-[1vw] click-btn2">Sample
                    Answer</button>
            </div>
        </div>
        <p class="note">Note: Replay the <span class="text-[#f7b94a] ">Video</span> if needed.
            Accept all similar programmes presented by children.</p>
    </div>


    {{-- click slides --}}
    <div class="slide click2 flex flex-col items-center justify-center">
        <video id="video10" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/character/288.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>
    </div>

    {{-- click slides --}}
    <div class="slide click2 flex flex-col items-center justify-center">
        <div>
            <video id="video11" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/character/292.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video11')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <p class="note">Note: Accept all similar programmes presented by children.</p>
    </div>




    {{-- Slide 26 --}}
    <div class="slide flex flex-col items-center justify-center">
        <video id="video12" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/character/293.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>
    </div>


    {{-- Slide 27 --}}
    <div class="slide flex flex-col items-center justify-between h-[28vw] ">
        <h2 class="title stroke !text-white">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Use ScratchJr to work out the programmes of the characters 
                    as shown in the sample on the last page.</li>
            </ol>
        </div>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the mission.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Choose the correct background.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/character/a13.png') }}" class="img-sm" />
            <img class="!w-[2.5vw]" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/character/a14.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Replay the <button class="text-[#f7b94a] click-btn3">Video</button> if needed.</p>
    </div>

    {{-- Slide 29 --}}
    <div class="slide click3 flex flex-col items-center justify-center">
        <div>
            <video id="video13" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/character/293.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video13')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>
    </div>

    {{-- Slide 30 --}}
    <div class="slide flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Add and move each character to a starting point.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/character/a18.png') }}" class="img-xl" />
        <p class="note">Note: This is the actual starting point of the characters in the sample. 
            To be more flexible, let children decide their own starting points.</p>
    </div>

    {{-- Slide 31 --}}
    <div class="slide flex flex-col justify-between h-[28vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Work out the programmes of each character and run the programmes.</li>
            </ol>
        </div>
        <div class="flex items-center justify-center items-end">
            <div>
                <button class="!text-white w-[10vw] h-[5vw] bg-[#2D9CDB] rounded-[1vw] text-[1vw] click-btn4">Sample
                    Answer</button>
            </div>
        </div>
        <p class="note">Note: Replay the <span class="text-[#f7b94a]">Video</span> if needed.
            Accept all similar programmes presented by children.</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide click4 flex flex-col items-center justify-center">
        <div>
            <video id="video14" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/character/293.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video14')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <p class="note">Note: Accept all similar programmes presented by children; underwater sound can be varied.</p>
    </div>

    {{-- Slide 33 --}}
    <div class="slide click4 flex flex-col items-center justify-center">
        <div>
            <video id="video15" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/character/293.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video15')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Based on this sample,
            can you work out the programmes of the two characters?</h2>
    </div>



    {{-- =================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6">
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
          document.body.dataset.homeRoute = "{{ url('/phonics/l1') }}";
document.addEventListener("DOMContentLoaded", function() {

            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            // URLs for navigation
            const returnURL = "{{ route('characterSelection') }}";
            const doneURL = "{{ route('k2coding') }}";

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
                // Last special slide in special mode
                if (isInSpecialMode && !hasMoreSpecialSlides(slideIndex)) return true;

                // In normal mode, check if this is the last non-special slide
                if (!isInSpecialMode) {
                    // Check if there are any more non-special slides after this one
                    for (let i = slideIndex + 1; i < slides.length; i++) {
                        if (!isSpecialSlide(slides[i])) {
                            return false; // Found another normal slide
                        }
                    }
                    return true; // No more normal slides found
                }

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
