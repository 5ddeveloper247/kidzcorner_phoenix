@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Animate a Character (4)</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate4/265.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, let's look at this story!</h2>
        <p class="note">Note: Have children talk about what they see and guess what the story is about (no right or wrong).
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Now, let's explore and learn how to design the look <br>
            of a character!</h2>
        <p class="note">Note: Use tablets to show children the following part.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <video id="video2" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/266.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video2')"
                    class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <video id="video3" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/267.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video3')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">What is the main difference between these two samples?
            Which sample is better? Why?</h2>
        <p class="note">Note: Guide children to compare and talk about the difference (size/look).
            Encourage them to share their views too.</p>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate4/a2.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke">This command is called Looks Blocks.
            It allows us to design the looks of a character.</h2>
        <p class="note">Note: <button class="text-[#f7b94a] click-btn1">Click here</button> to guide children explore and
            understand the details and use of Lock Blocks.</p>
    </div>

    {{-- Slide 5 --}}
    {{-- click here start --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate4/a3.png') }}" class="img-xl" />
        <h2 class="title stroke">The Looks Blocks have a set of programming blocks. Each block
            here represents a kind of look for a character on the stage.</h2>
        <p class="note">Note: Show and name each programming block here.</p>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate4/a4.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke">Now, let's see how each programming block under Looks Blocks
            controls the look of a character!</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate4/a5.png') }}" class="img-xs" />
            <video id="video4" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/268.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">What is the use of the "Say" block?</h2>
        <p class="note">Note: Show children the effect of this block on a character.
            Guide them to know that "Say" block shows a speech bubble with words above the character.</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate4/a28.png') }}" class="img-xs" />
            <video id="video16" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/269.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video16')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">What is the use of "Hide and Show" blocks?</h2>
        <p class="note">Note: Show children the effect of these blocks on a character.
            Guide them to know that the "Hide" block makes a character invisible and "Show" block makes a character visible.
        </p>
    </div>



    {{-- Slide 8 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate4/a7.png') }}" class="img-xs" />
            <video id="video5" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/270.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">What is the use of "Grow", "Shrink" and "Reset" Size blocks?</h2>
        <p class="note">Note: Show children the effect of these blocks on a character. Guide them to know that "Grow"
            block makes a character bigger, "Shrink" block makes it smaller and "Reset" Size block makes it return to its
            original size.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <video id="video6" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/271.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video6')"
                    class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <video id="video7" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/272.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video7')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">Let's compare these samples! What are the differences?
            What is done to make them different?</h2>
        <p class="note">Note: Guide children to compare and talk about the difference (size/look). Encourage them
            to share their views too.</p>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <img src="{{ asset('assets/images/K2/animate4/a9.png') }}" class="img-sm" />
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <img src="{{ asset('assets/images/K2/animate4/a9.png') }}" class="img-sm" />
            </div>
        </div>
        <h2 class="title stroke">The programmes created for both the characters are the
            same, but the character in Sample 2 is smaller.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <img src="{{ asset('assets/images/K2/animate4/a9.png') }}" class="img-sm" />
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <img src="{{ asset('assets/images/K2/animate4/a9.png') }}" class="img-sm" />
            </div>
        </div>
        <h2 class="title stroke">Do you know how to create Sample 2?</h2>
        <p class="note">Note: Have children verbally direct the teacher to create the same scene and programmes.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate4/a10.png') }}" class="img-xs" />
            <video id="video8" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/273.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Before running the programmes on the stage, the "Shrink"
            block is used to reduce the size of the character!</h2>
        <p class="note">Note: Show children how to use "Shrink" block as a design tool rather than a block in a
            programme.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/animate4/a12.png') }}" class="img-xs" />
            <video id="video9" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/274.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">The "Grow" block is also often used as a design tool.</h2>
        <p class="note">Note: Have children name each programming block used in this sample.
            Show them the original size of this character and then guide them to create this sample.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden click1 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw] items-end">
            <img src="{{ asset('assets/images/K2/animate4/a14.png') }}" class="img-xs" />
            <video id="video10" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/275.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video10')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">The "Hide" block is also often used as a design tool.</h2>
        <p class="note">Note: Have children name each programming block used in this sample.
            Show them the original size of this character and then guide them to create this sample.</p>
    </div>
    {{-- click here slides end --}}

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[20vw] self-end">
        <h2 class="title stroke">Now, let's explore and learn about the use of another 
            command in ScratchJr app!</h2>
        <p class="note">Note: Use tablets to show children the following part.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate4/a16.png') }}" class="!w-[30vw]" />
        <h2 class="title stroke">This command is called End Blocks.
            It allows us to choose ways to end a programme.</h2>
        <p class="note">Note: <button class="text-[#f7b94a] click-btn2">Click here</button> to guide children explore
            and
            understand the details and use of End Blocks.</p>
    </div>

    {{-- Slide 17 --}}
    {{-- click here start --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/animate4/a17.png') }}" class="img-xl" />
        <h2 class="title stroke">Usually, there are two programming blocks under End Blocks.
            Each block here represents a way to end a programme.</h2>
        <p class="note">Note: Show and name each programming block here.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <video id="video11" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/276.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video11')"
                    class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <video id="video12" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/277.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video12')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">What is the use of the "End" block?</h2>
        <p class="note">Note: Show children the effect of this block at the end of a programme (does not affect the
            programme in any way). Guide them to know that End block marks the end of a programme (can add or don't add it
            to a programme).</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <video id="video13" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate4/278.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of the "Repeat Forever" block?</h2>
        <p class="note">Note: Show children the effect of this block at the end of a programme. Guide them to know that
            the "Repeat Forever" block runs a programme over and over again on the stage until we stop it.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video13')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden click2 flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <video id="video14" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/279.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video14')" class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
            <video id="video15" class="pointer-events-none video-sm">
                <source src="{{ asset('assets/images/K2/animate4/280.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Video Trigger Button -->
            <div onclick="toggleVideo('video15')"
                class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                <img src="{{ asset('assets/images/pptimages/video.png') }}" />
            </div>
        </div>
        <h2 class="title stroke">Depending on your preferred effect, there isn't a need to add
            "Repeat Forever" block at the end of every programme.</h2>
        <p class="note">Note: You may create other examples to show and guide children to understand this point.</p>
    </div>
    {{-- click here slides end --}}

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class="title stroke">
                <li>Let's use ScratchJr to create a story about a boy or girl who likes singing and dancing. Your story must
                    have sound and animations. What happens in the story? Share your story with the class.</li>
            </ol>
        </div>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Delete the cat and choose the correct character.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate4/a21.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/animate2/a16.png') }}" class="!w-[2.5vw]" />
            <img src="{{ asset('assets/images/K2/animate4/a22.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Remind children that it's a story about a boy or girl who likes singing and dancing.</p>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Do you need a background for your story? Add it if you want to.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate4/a23.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/animate2/a16.png') }}" class="!w-[2.5vw]" />
            <img src="{{ asset('assets/images/K2/animate4/a24.png') }}" class="img-sm" />
        </div>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>How do you design the look of your character?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/animate4/a25.png') }}" class="!w-[25vw]" />
        <p class="note">Note: Encourage children to use Looks Blocks to design the look of their character.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>How do you animate your character to dance?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/animate4/a26.png') }}" class="!w-[25vw]" />
        <p class="note">Note: Remind children to use blocks from different commands to create their programmes for the
            character.</p>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>How do you add sound to your story?</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/animate4/a26.png') }}" class="!w-[25vw]" />
        <p class="note">Note: Remind children to use blocks from different commands to create their programmes for the
            character.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col justify-between h-[30vw] items-center">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>What happens in your story? Share your story.</li>
            </ol>
        </div>
        <div class="flex gap-[1vw] items-center">
            <img src="{{ asset('assets/images/K2/animate4/a23.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/animate2/a16.png') }}" class="!w-[2.5vw]" />
            <img src="{{ asset('assets/images/K2/animate4/a27.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Have children share their stories with the class using the presentation mode.</p>
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
            const returnURL = "{{ route('animate4Selection') }}";
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
