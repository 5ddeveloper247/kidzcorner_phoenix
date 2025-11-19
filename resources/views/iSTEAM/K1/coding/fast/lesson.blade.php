@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Fast and Slow</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[28vw]">
        <img src="{{ asset('assets/images/K1/coding/fast/fs1.png') }}" class="img-xl" />
        <h2 class="title stroke">Children, do you remember what a circuit is?
            What are the names of these circuits?</h2>
        <p class="note">Note: Encourage children to recall and share what they have learnt (a track/path)</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex items-center justify-center">
        <h2 class="title stroke">We are going to learn how to programme a robot <br>
            to move at different speeds today, <br>
            so we'll first find out what speed is!</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/98.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch a video!</h2>
        <p class="note">Note: Have children follow through the lesson. At the end, have them recap what speed is.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/fast/fs3.png') }}" class="img-md" />
        <h2 class="title stroke">Speed is a rate that tells us how fast or slow
            someone or something is moving.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/99.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch another video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/fast/fs5.png') }}" class="img-md" />
        <h2 class="title stroke">When two robots move through the same distance with different <span
                class="text-white">speeds</span>, the one moving at a high <span class="!text-white">speed</span> will reach
            the ending point faster than the other one moving at a low <span class="!text-white">speed</span>.
        </h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video3" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/100.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let's see how to programme a robot
            to move at different speeds!</h2>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/fast/fs7.png') }}" class="img-xl" />
        <h2 class="title stroke">How do you programme a robot to move 50cm at a higher speed?</h2>
        <p class="note">Note: Encourage children to share based on the clues (select Drive>place programming block of
            Forward>select Forward>change to a higher speed>turn on the programme so that the robot moves accordingly).</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K1/coding/fast/fs8.png') }}" class="img-lg" />
        <h2 class="title stroke">How many choices of speed are there in Blockly?</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video4" class="pointer-events-none">
            <source src="{{ asset('assets/images/K1/coding/101.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's watch another video!</h2>
        <p class="note">Note: Have children follow through the lesson.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video4')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Hands-on Time 1</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Use Blockly to programme a robot to move through the circuit with different speeds.</h2>
        <p class="note text-center">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Use coding cards to lay out the steps needed for a robot
                    to move through this circuit.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs10.png') }}" class="img-lg" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Turn on a robot and make sure that Blockly finds the robot.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs11.png') }}" class="img-lg" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot).</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Programme the robot to move through this circuit with different speeds.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs10.png') }}" class="img-lg" />
        <p class="note text-center">Note: Guide children individually if needed.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="text-center justify-start !text-white stroke">Hands-on Time 2</h2>
        <h2 class="text-start title stroke">Mission: <br>
            Design a circuit with measuring strips. Use Blockly to programme
            a robot to move through the circuit with different speeds.
            At the end, show and tell about your circuit.</h2>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Design a circuit with measuring strips.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs12.png') }}" class="img-md" />
        <p class="note text-center">Note: Let children design the circuit using the Learning Journal before laying the
            actual one on the floor.
            Guide them to alter their design if it's too complicated or requires more
            advance programming skills that they have yet learnt.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Use coding cards to lay out the steps needed for a robot to move through your circuit.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs13.png') }}" class="img-lg" />
        <p class="note text-center">Note: Let children use the Learning Journal to lay out the steps.
            Check on the steps for each group and advice them to change if incorrect.</p>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Turn on a robot and make sure that Blockly finds the robot.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs11.png') }}" class="img-lg" />
        <p class="note text-center">Note: Otherwise remind children to make Blockly and the robot in sync
            (sync based on the nametag on the robot).</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Programme the robot to move through your circuit wit different speeds.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs13.png') }}" class="img-lg" />
        <p class="note text-center">Note: Check on the program in Blockly for each group and advice them to change if
            incorrect.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Show and tell about your circuit.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K1/coding/fast/fs13.png') }}" class="img-xl" />
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Design a circuit. Use measuring strips to form it.</p>
        </div>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How does a robot move through the circuit? Use coding cards to lay out the steps.</p>
        </div>
    </div>

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

    {{-- Next Button --}}
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
            const returnRouteFromFirstSlide = "{{ route('fastSelection') }}";
            const doneButtonRoute = "{{ route('coding') }}";

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
