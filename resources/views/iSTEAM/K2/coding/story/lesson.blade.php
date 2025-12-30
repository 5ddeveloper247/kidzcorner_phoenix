@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Our Animated Stories</h2>

    {{-- Slide 1 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/story/295.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, let's look at this story!</h2>
        <p class="note"> Note: Have children talk about what they see and guess what the story is about (no right or
            wrong).
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/story/295.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How do you create a story step-by-step?</h2>
        <p class="note">Note: Guide children to describe steps in creating a story with ScratchJr
            (point at the different features using a tablet).
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/story/a2.png') }}" class="img-xl" />
        <h2 class="title stroke">Do you think you can find all the backgrounds and characters
            that you want from the app to create your own story?</h2>
        <p class="note">Note: Use a tablet to show available backgrounds and characters in the app.
        </p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video3" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/story/296.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is this story about?
            Can you find this background and character from the app?</h2>
        <p class="note">Note: Show children that the app does not have the same background and character.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video4" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/story/297.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is this story about?
            Can you find this background and character from the app?</h2>
        <p class="note">Note: Show children that the app does not have the same background and character.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/story/a5.png') }}" class="img-xl" />
        <h2 class="title stroke">
            Do you want to use your own backgrounds and characters when
            creating your own animated story?
        </h2>
        <p class="note">Note: <button class="text-[#f7b94a] click-btn1">Click here</button> to guide children
            explore and learn how to use the paint tool in ScratchJr.</p>
    </div>


{{-- Click SLide 1 --}}
    <div class="slide hidden flex click1 flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/story/a6.png') }}" class="img-xs" />
        <h2 class="title stroke">This icon with a paint brush will connect you
            to the paint tool of ScratchJr.</h2>
        <p class="note">Note: Have children recall and say where can they find this paint icon.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex click1 flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/story/a7.png') }}" class="img-md" />
        <h2 class="title stroke">You will find the paint icon when you start creating a project.</h2>
        <p class="note">Note: Show children the paint icon as mentioned.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex click1 flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/story/a8.png') }}" class="img-xl" />
        <h2 class="title stroke">You will also find the paint icon when you are at the
            background and character page.</h2>
        <p class="note">Note: Show children the paint icon as mentioned.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex click1 flex-col justify-start ">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/story/a9.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/story/a10.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">If you tap on the paint icon here, the paint tool will appear.
            It means that you can make changes to the character.</h2>
        <p class="note">Note: Show children how to do so.</p>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex click1 flex-col items-center justify-between h-[15vw]">
        <h2 class="title stroke">How do you use the paint tool to make changes to a <br>
            character? Let's find out together!</h2>
        <p class="note">Note: Show and explain to children <a class="text-[#f7b94a] click-btn2"> how to use
                the different features in the paint tool.</a></p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide click2 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/story/a12.png') }}" class="img-xs" />
            <video id="video5" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/story/298.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Show children how to do so and have them talk about the uses of each feature shown.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 13 --}}
    <div class="slide click2 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/story/a13.png') }}" class="img-xs" />
            <video id="video6" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/story/299.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Show children how to do so and have them talk about the uses of each feature shown.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 14 --}}
    <div class="slide click2 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/story/a15.png') }}" class="img-xs" />
            <video id="video7" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/story/300.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Show children how to do so and have them talk about the uses of each feature shown.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 15 --}}
    <div class="slide click2 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/story/a17.png') }}" class="img-xs" />
            <video id="video8" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/story/301.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Show children the uses of each feature in the red box.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 16 --}}
    <div class="slide click2 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/story/a19.png') }}" class="img-xs" />
            <video id="video9" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/story/302.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Show and explain another use of this feature (edit a shape by dragging the dots that
            appear).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 17 --}}
    <div class="slide click2 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/story/a17.png') }}" class="img-xs" />
            <video id="video10" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/story/302.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Show and explain that combining shapes created will form things based on our imagination.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video107')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide click2 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/story/a21.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/story/a22.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">If you tap here, your work will be saved.
            You will find this new character at the character page.</h2>
        <p class="note">Note: Show children how to do so.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide click1 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/story/a23.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/story/a24.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">You can use the paint tool to make changes to any character
            at the character page.</h2>
        <p class="note">Note: Show children how to access the paint tool by selecting a character before tapping on the
            paint icon.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide click1 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/story/a25.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/story/a26.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">If you choose to make changes to one of these characters,
            you can add any face you want to form the character!</h2>
        <p class="note">Note: Show children <a class="text-[#f7b94a] click-btn3"> how to use
                the different features in the paint tool.</a></p>

    </div>

    {{-- Slide 21 --}}
    {{-- video --}}
    <div class="slide click3 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-ends">
            <img src="{{ asset('assets/images/K2/story/a27.png') }}" class="img-xs" />
            <video id="video11" class="pointer-events-none video-md">
                <source src="{{ asset('assets/images/K2/story/304.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="note">Note: Show children how to use the camera feature to add one's face to the character.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide click3 hidden flex flex-col justify-start ">
        <div class="flex gap-3 items-center">
            <div class="flex flex-col gap-[1vw]">
                <img src="{{ asset('assets/images/K2/story/a29.png') }}" class="img-xs" />
                <img src="{{ asset('assets/images/K2/story/a30.png') }}" class="img-xs" />
            </div>
            <div>
                <video id="video12" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/story/305.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <p class="note">Note: Show children how to use the camera feature to create a new character.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video12')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 23 --}}
    <div class="slide click3 hidden flex flex-col justify-start ">
        <div class="flex gap-3 items-center">
            <div class="flex flex-col gap-[1vw]">
                <img src="{{ asset('assets/images/K2/story/a29.png') }}" class="img-xs" />
                <img src="{{ asset('assets/images/K2/story/a32.png') }}" class="img-xs" />
            </div>
            <div>
                <video id="video13" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/story/306.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <p class="note">Note: Show children how to use the camera feature to create a new character.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 24 --}}
    <div class="slide click1 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/story/a34.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/story/a35.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">Similarly, you can use the paint tool to make changes to any
            background on the background page.</h2>
        <p class="note">Note: Show children how to access and use the paint tool to edit a background.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide click1 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/story/a36.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/story/a37.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">You can also use the paint tool to create a new background.</h2>
        <p class="note">Note: Show children how to access and use the paint tool to create a background.</p>
    </div>

    {{-- Slide 26 --}}
    <div class="slide click1 hidden flex flex-col justify-start ">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/story/a37.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/story/a38.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">Once you tap here, your work will be saved.
            You will find those new backgrounds at the background page.</h2>
        <p class="note">Note: Show children how to do so.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <h2 class="title stroke">Now it's time for you to get creative! <br>
            Use your imagination to create an animated story <br>
            using ScratchJr!</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Final Project</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <h2 class="title stroke">Use your imagination to create a four page story. Then use
                ScratchJr to turn it into an animated story. Share your story
                with the class at the end.</h2>
        </div>
        <p class="note">Note: Divide children into groups and have them work in groups to complete the final project.</p>
    </div>



    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Use your imagination to create a story that is made up of four backgrounds.</li>
            </ol>
        </div>
                <img src="{{ asset('assets/images/K2/story/gl.png') }}" class="img-xl" /> 
        <p class="note">Note: Have children discuss as a group to come out with ideas for their story. <br> After that, have them record their finalized story in the learning journal.</p>
    </div>


    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Use ScratchJr to turn it into an animated story.
                <ul class="text-white lesson-ul list-disc !text-[1.4vw]">
                    <li>Choose or create a background for each story page.</li>
                    <li>Choose or create characters for each story page.</li>
                    <li>Programme each character in a page.</li>
                    <li>Test and improve the programmes of the characters in each page.</li>
                    <li>Link up the pages.</li>
                    <li>Run the story.</li>
                </ul>
                </li>
            </ol>
        </div>
        <p class="note">Note: Encourage children to use the programming blocks under different
            commands to create the programmes.</p>
    </div>



    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Share your story.</li>
            </ol>
        </div>
        <p class="note">Note: Have children share their stories to the class using the presentation mode.</p>
    </div>



    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col justify-center ">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center flex flex-col p-[1.5vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/story/a40.png') }}"/>
        </div>
    </div>




    {{-- ====================================== --}}
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
            const returnURL = "{{ route('storySelection') }}";
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
