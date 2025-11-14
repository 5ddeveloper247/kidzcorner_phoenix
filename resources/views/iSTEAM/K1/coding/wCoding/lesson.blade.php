@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is Coding?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video1" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/82.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Children, let’s watch a video!</h2>
        <p class="note">Note: Have children recall and talk about the name and uses of the six simple machines.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video2" class="video1 pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/83.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">How do MRT trains move from station to station without drivers?</h2>
        <p class="note">Note: Have children boldly share their views.</p>

        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/cd/cd3.png" />
        <h2 class="title stroke">How do traffic lights change colours without anyone controlling them?</h2>
        <p class="note">Note: Have children boldly share their views.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-[1.5vw]">
            <img src="/assets/images/K1/coding/cd/cd4.png" />
            <img src="/assets/images/K1/coding/cd/cd25.png" />
        </div>
        <h2 class="title stroke">Many things around us are controlled by
            different programmes.</h2>
    </div>


    {{-- Slide 5  --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/cd/cd5.png" />
        <h2 class="title stroke">WA programme is a set of step-by-step instructions that tell a
            machine what to do and how to do it, somewhat like a recipe.</h2>
    </div>



    {{-- slide 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/cd/cd6.png" />
        <h2 class="title stroke">So when a programme is turned on, a machine will do a
            specific task in a specific way by itself.</h2>
    </div>



    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/coding/cd/cd7.png" />
        <h2 class="title stroke">When someone is creating a programme for a machine,
            it is a task called programming or coding.</h2>
    </div>



    {{-- slide 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-[1.5vw]">
            <img src="/assets/images/K1/coding/cd/cd4.png" class="!w-[18vw]" />
            <img src="/assets/images/K1/coding/cd/cd7.png" class="!w-[18vw]" />
        </div>
        <h2 class="title stroke">Do you think programming or coding is important? Why?</h2>
        <p class="note">Note: Have children boldly share their views.</p>
    </div>



    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke">Now, let’s find out together the machine that we are
            going to learn how to code or programme for
            this whole term!</h2>
    </div>



    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="/assets/images/K1/coding/cd/cd8.png" />
        <h2 class="title stroke">This is a robot. A robot is a machine. </h2>
        <p class="note">Note: Display a robot. Have children talk about it’s physical look.</p>
    </div>




    {{-- slide 11 --}}
    <div class="slide flex flex-col items-center justify-center gap-30 ">
        <h2 class="title stroke">Before learning how to programme a robot,
            let's learn how to handle the tools!</h2>
        <p class="note">Note: Explain to children that we need to know the correct ways of handling a robot and a tablet,
            so that we show our cares to them and prevent them from spoiling easily.</p>
    </div>



    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video3" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/84.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s watch a video!</h2>
        <p class="note">Note: Have children talk about the advice from the video.
            After that, have them take turns to show the correct ways of holding a robot and a tablet.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- .slide 13 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video4" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/85.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let’s find out how to use <span class="!text-white">Blockly</span>!</h2>
        <p class="note">Note: Remember to stop the video from time to time for explanation of each feature in Blockly.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>



    {{-- slide 14 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <video id="video5" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/85.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let’s find out how to use Blockly!</h2>
        <p class="note">Note: Remember to stop the video from time to time for explanation of each feature in Blockly.
        </p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video5')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>

    {{-- sldie 15 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-[1.5vw]">
            <div class="flex flex-col items-center justify-center">
                <img src="/assets/images/K1/coding/cd/cd20.png" class="large-img" />
                <button id="sound-btn">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                </button>
            </div>
            <div class="flex flex-col items-center justify-center">
                <img src="/assets/images/K1/coding/cd/cd29.png" class="large-img" />
                <button id="sound-btn">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                </button>
            </div>
        </div>
        <h2 class="title stroke">What are these? What should you do?</h2>
        <p class="note">Note: Encourage children to talk about the different features in Blockly.</p>
    </div>



    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex flex-col items-center gap-[1vw]">
            <img src="/assets/images/K1/coding/cd/gl1.png" class="!max-w-[40vw]" />
            <div class="!w-[30vw] flex items-center justify-between">
                <button id="sound-btn">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                </button>

                <button id="sound-btn">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                </button>


                <button id="sound-btn">
                    <img src="{{ asset('assets/images/pptimages/sound-btn.png') }}" />
                </button>
            </div>
        </div>
        <h2 class="title stroke">What are these? What should you do?</h2>
        <p class="note">Note: Encourage children to talk about the different features in Blockly.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[45vh]">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let's use Blockly to place a programming block from Drive
            Command to the scripting area. After that, throw away the
            programming block!</h2>
        <p class="note text-center">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class=" title stroke">Steps:</h2>
            <ol class="title stroke">
                <li>1. Tap on the icon of Blockly to open the application.</li>
            </ol>
        </div>

        <img src="/assets/images/K1/coding/cd/gl2.png" />
        <p class="note text-center">Note: Have children observe the video, talk about how to do the step and then learn how
            to do so.</p>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class=" title stroke">Steps:</h2>
            <ol class="title stroke">
                <li>2. Tap on the orange arrow button to start using the application.</li>
            </ol>
        </div>

        <img src="/assets/images/K1/coding/cd/cd29.png" class="!w-[18vw]" />
    </div>

    {{-- slide 20 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">

            <h2 class=" title stroke">Steps:</h2>
            <ol class="title stroke">
                <li>3. Tap on the Drive Command for the choice of programming blocks.</li>
            </ol>
        </div>

        <img src="/assets/images/K1/coding/cd/gl3.png" />
    </div>



    {{-- slide 21 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">
            <h2 class=" title stroke">Steps:</h2>
            <ol class="title stroke">
                <li>4. Choose a programming block by tapping, dragging and placing
                    it at the scripting area (must connect with Start).</li>
            </ol>
        </div>
        <img src="/assets/images/K1/coding/cd/gl4.png" />
    </div>

    {{-- slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="text-start">

            <h2 class=" title stroke">Steps:</h2>
            <ol class="title stroke">
                <li>5. Throw away a programming block by tapping, dragging and
                    trashing it to the dustbin.</li>
            </ol>
        </div>
        <img src="/assets/images/K1/coding/cd/gl5.png" />
    </div>


    {{-- slide 23 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video6" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/86.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let’s find out how to make Blockly find a robot!</h2>
        <p class="note text-center">Note: Have children follow through the lesson.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>




    {{-- slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[45vh] ">
        <h2 class="text-center justify-start text-[45px] !text-white stroke">Hands-on Time 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            How do you make Blockly find the correct robot? Show your teacher!</h2>
        <p class="note text-center">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- sldie 25 --}}
    <div class="slide hidden  flex flex-col  items-center justify-start  ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ol class=" list-decimal">
                <li> Turn on a robot.</li>
            </ol>
        </div>
        <img src="/assets/images/K1/coding/cd/gl6.png" />
        <p class="note text-center">Note: Remind children to take note of the name of the robot (refer to the nametag on
            the robot).</p>
    </div>



    {{-- sldie 26 --}}
    <div class="slide hidden  flex flex-col  items-center justify-start  ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ol>
                <li>2. Tap to open the application of Blockly.</li>
            </ol>
        </div>
        <img src="/assets/images/K1/coding/cd/gl7.png" />
        <p class="note text-center">Note: Remind children to take note 2f the name of the robot (refer to the nametag on
            the robot).</p>
    </div>



    {{-- slide 27 --}}
    <div class="slide hidden  flex flex-col  items-center justify-start   ">
        <div class="text-start title stroke">
            <h2>Steps:</h2>
            <ul>
                <li>3. Tap to make Blockly find the correct robot.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/cd/cd36.png" />
    </div>



    {{-- sldie 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video7" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/87.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Lastly, let’s learn to sing a song together!</h2>
        <p class="note text-center">Note: Have children first watch the video and then learn to sing the song together
            (lyrics on the next page).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video7')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>




    {{-- slide 29 --}}
    <div class="slide  hidden flex flex-col items-center justify-between ">
        <h2 class=" title stroke  !text-[1.5vw]">Show me your right. Show me your left. <br>
            Show me your right. Show me your left. <br>
            You do the hokey pokey and you turn yourself around. <br>
            That's what it's all about. <br>
            You move forward two steps. You move backward two steps. <br>
            You move forward two steps. You move backward two steps. <br>
            You do the hokey pokey and you turn yourself around. <br>
            That's what it's all about. <br>
            Turn to your right. Turn to your left. <br>
            Turn to your right. Turn to your left. <br>
            You do the hokey pokey and you turn yourself around. <br>
            That's what it's all about.</h2>
        <p class="note">Note: Sing to the tune of "Hokey Pokey".</p>
    </div>


    {{-- slide 30 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <video id="video8" class=" pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/88.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Lastly, let’s learn to sing a song together!</h2>
        <p class="note text-center">Note: Have children first watch the video and then learn to sing the song together
            (lyrics on the next page).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video8')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="/assets/images/pptimages/video.png" />
        </div>
    </div>
















    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


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
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>
@endsection


@push('script')
    <script>
        // Video toggle function - plays or pauses a video when clicked
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all slide elements
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            // Keep track of which slide we're currently viewing
            let currentSlide = 0;

            // CONFIGURE YOUR ROUTES HERE
            const returnRouteFromFirstSlide = "{{ route('wCodingSelection') }}";
            const doneButtonRoute = "{{ route('wCodingSelection') }}";

            // Pause all videos when changing slides
            function pauseAllVideos() {
                const videos = document.querySelectorAll('video');
                videos.forEach(video => {
                    if (!video.paused) {
                        video.pause();
                    }
                });
            }

            // Show a specific slide and hide all others
            function showSlide(index) {
                // Pause all videos before switching
                pauseAllVideos();

                // Hide all slides except the current one
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide
                const isLastSlide = index === slides.length - 1;

                if (isLastSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT button
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // RETURN button - go to previous slide or navigate back
            returnButton.addEventListener("click", () => {
                // If on first slide, navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            // DONE button - navigate to completion route
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = doneButtonRoute;
                });
            }

            // Initialize - show first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
