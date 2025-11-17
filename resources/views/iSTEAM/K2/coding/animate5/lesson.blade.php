@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <video id="video1" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate5/281.mp4') }}" type="video/mp4">
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
    <div class="slide hidden flex flex-col items-center justify-center">
        <video id="video2" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate5/281.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Why do you think there are two backgrounds in this story?</h2>
        <p class="note">Note: Encourage children to boldly share their views.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video2')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video3" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate5/282.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">This story has two pages!</h2>
        <p class="note">Note: Encourage children to guess which feature in the app allows us to add pages.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video3')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Now, let's find out how to create second page of a story and
            how to programme the story to auto play from page to page!</h2>
        <p class="note">Note: Use tablets to show children the following part.</p>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/animate5/a3.png') }}" class="img-md" />
        <h2 class="title stroke">What is the name and use of this command?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of End Blocks command (ways to end a
            programme).</p>
    </div>


    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/animate5/a4.png') }}" class="img-md" />
        <h2 class="title stroke">What are the two programming blocks here?</h2>
        <p class="note">Note: Guide children to recall and name the two programming blocks under End Blocks command.</p>
    </div>



    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/animate5/a5.png') }}" class="img-md" />
        <h2 class="title stroke">Usually, there are two programming blocks under End Blocks.
            Each block here represents a way to end a programme.</h2>
        <p class="note">Note: Show and name each programming block here.</p>
    </div>



    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class="flex gap-2">
            <div>
                <h2 class="title stroke">Sample 1</h2>
                <video id="video4" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/animate4/276.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video4')"
                    class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <h2 class="title stroke">Sample 2</h2>
                <video id="video5" class="pointer-events-none video-md">
                    <source src="{{ asset('assets/images/K2/animate4/277.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video5')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">What is the use of the "End" block?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of "End "block (it marks the end of a
            programme; we can add or don't add it to a programme because it does not affect the programme in any way).</p>
    </div>



    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video6" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate4/278.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">What is the use of the "Repeat Forever" block?</h2>
        <p class="note">Note: Guide children to recall and talk about the use of "Repeat Forever" block (it runs a
            programme over and over again until we stop it).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video6')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>



    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class="flex gap-2">
            <div>
                <video id="video7" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/279.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video7')"
                    class="absolute top-1/2 left-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
            <div>
                <video id="video8" class="pointer-events-none video-sm">
                    <source src="{{ asset('assets/images/K2/animate4/280.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Video Trigger Button -->
                <div onclick="toggleVideo('video8')"
                    class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
                    <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                </div>
            </div>
        </div>
        <h2 class="title stroke">There isn't a need to add "Repeat Forever" block at the end
            of every programme. We add it only when we want to see
            certain animation effects on the stage.</h2>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video9" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate5/283.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Now, let's see how to create a story with two pages.</h2>
        <p class="note">Note: Guide children to talk about what they see. Then have them guess what the story is about (no
            right or wrong).</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video9')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <video id="video10" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate5/284.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 class="title stroke">Let's see how to programme the story to auto play.</h2>
        <p class="note">Note: Guide children to talk about what they see.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video10')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class="flex gap-2 items-end">
            <img src="{{ asset('assets/images/K2/animate5/a10.png') }}" class="img-xs" />
             <video id="video11" class="pointer-events-none video-md">
            <source src="{{ asset('assets/images/K2/animate5/285.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
        <h2 class="title stroke">Once a second page is created, a programming block called
            "Go To Page" will appear under the End Blocks command.</h2>
        <p class="note">Note: Show children how to do so.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video11')" class="absolute top-1/2 right-[-10vw] z-[99] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <img src="{{ asset('assets/images/K2/animate5/a12.png') }}" class="img-xl" />
        <h2 class="title stroke">The "Go To Page" block allows us to link up different pages.</h2>
        <p class="note">Note: Create a story with 2 pages and show children how to link page 1 to 2 and page 2 to 1 by
            adding Go To Page block at the end of a programme. Have them take note of the number on "Go To Page" block at
            different pages.</p>
    </div>




    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <h2 class="title stroke !text-white">Hands-on Time</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission:</h2>
            <ol class=" title stroke">
                <li>Let's use ScratchJr to create a story about the adventure of a butterfly. Your story must at least have
                    two pages and can auto play from page to page. What happens in the story? Share your story with the
                    class.</li>
            </ol>
        </div>
        <p class="note">Note: Divide children into groups. Have them take turns to complete the mission.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="1">
                <li>Choose the correct character for your story.</li>
            </ol>
        </div>
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/animate5/a13.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/animate5/a14.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Remind children that it's a story about the adventure of a butterfly.</p>
    </div>



    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Choose suitable backgrounds for your story.</li>
            </ol>
        </div>
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/animate5/a16.png') }}" class="img-sm" />
            <img class="img-xs" src="{{ asset('assets/images/K2/animate2/a16.png') }}" />
            <img src="{{ asset('assets/images/K2/animate5/a15.png') }}" class="img-sm" />
        </div>
        <p class="note">Note: Have children think what kind of adventure would the butterfly go on.</p>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Use your creativity to animate your character on different pages.</li>
            </ol>
        </div>
        <p class="note">Note: Have children create programmes for their characters. Guide them if needed.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Make your story auto play from page to page.</li>
            </ol>
        </div>
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/animate5/a10.png') }}" class="img-xs" />
            <img src="{{ asset('assets/images/K2/animate5/a17.png') }}" class="img-sm" />
        </div>
    
        <p class="note">Note: Remind children to add the Go To Page" block at the end of a programme for linking up
            different pages.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Share your story.</li>
            </ol>
        </div>
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/animate5/a18.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/K2/animate5/a19.png') }}" class="img-sm" />
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
            const returnRouteFromFirstSlide = "{{ route('animate5Selection') }}";
            const doneButtonRoute = "{{ route('k2coding') }}";

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
