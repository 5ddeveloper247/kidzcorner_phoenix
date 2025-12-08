@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">What is Light?</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke">What do you see in this picture?</h2>
        <img src="{{ asset('assets/images/pptimages/light1.png') }}" class="img-md" />
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  hidden ">
        <!-- Question -->
        <h2 class="title stroke">
            <span class="text-[#F7B94A]">Can you see the </span>
            <span class="!text-white">SUN</span>
            <span class="text-[#F7B94A]">?</span>
        </h2>

        <img src="{{ asset('assets/images/pptimages/light2.png') }}" class="img-md" />
        <div class="note">Note: Point out the sun to the children.</div>
    </div>

    {{-- Slide3 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">
            The <span class="text-5xl !text-white">Sun</span> is so <span class="text-5xl !text-white">Bright !</span>
            </br>It
            gives <span class="text-5xl !text-white">light</span> during the day! </h2>
        <img src="{{ asset('assets/images/pptimages/light1.png') }}" alt="Light Example" class="img-md" />
    </div>

    {{-- Slide 4 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">Let us Sing!</h2>
        <img src="{{ asset('assets/images/pptimages/sun.png') }}" class="sun-img" />
        <h2 class="title stroke !text-white">Mr. Golden Sun</h2>
        <p class="note">Note: Teacher to lead the song and encourage children to sing together.</p>
    </div>

    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center  text-center">
        <h2 class="title stroke">What do you see in this video?</h2>
        <video id="video1" class="w-full  pointer-events-none">
            <source src="{{ asset('assets/images/pptimages/v1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p class="note">Note: Encourage children to share. Teacher to lead childern to sing along the song twinkle
            twinkle little stars.</p>
        <!-- Video Trigger Button -->
        <div onclick="toggleVideo('video1')" class="absolute top-1/2 right-[-10vw] z-[100] -translate-y-1/2 video-btn">
            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class=" slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">These are
            <span class="!text-white">stars</span> ! The stars give out
            <span class="!text-white">light</span>
            and they shine
            <span class="!text-white">brightly </span>
            at night!
        </h2>
        <img src="{{ asset('assets/images/pptimages/galaxy.png') }}" class="img-md" />
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center  text-center">
        <h2 class="title stroke">Let's Sing!</h2>
        <img src="{{ asset('assets/images/pptimages/star.png') }}" class="img-md" />
        <h2 class="title !text-white stroke">Twinkle Twinkle Little Star</h2>
        <p class="note">Note: Teacher to lead the song and encourage children to sing together. If unsure, refer to notes
            for links to song.</p>
    </div>



    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <h2 class="title stroke stroke">Do you know what this is?</h2>
        <!-- Center Illustration -->
        <img src="{{ asset('assets/images/pptimages/candle.png') }}" class="img-md" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>


    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="title stroke">The <span class="!text-white">fire</span> on the candle gives <span
                class="text-white">light</span> too!</h2>
        <img src="{{ asset('assets/images/pptimages/candle.png') }}" class="img-md" />

        <p class="note">Note: Ask children if they have seen candles on birthday cakes and what
            </br> happens when the candles are blown out.</p>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center  ">
        <h2 class="text-cente title stroke">The <span class="!text-white ">sun</span>,
            <span class="!text-white ">stars</span> and <span class="!text-white ">fire</span> are <span
                class="text-white">natural</span> sources of
            <span class="!text-white ">light</span>. <span class="!text-white ">Light</span> help us to see things
            around us.
        </h2>
        <img src="{{ asset('assets/images/pptimages/three1.png') }}" class="img-xl" />

    </div>


    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center ">
        <h2 class="text-cente title stroke">Switch
            off the <span class="!text-white">light</span> in the room and draw the curtains. How do you feel? Do you see
            clearly?
        </h2>
        <img src="{{ asset('assets/images/pptimages/blacklight.png') }}" class="img-md" />
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-center ">
        <h2 class="text-cente title stroke">Without any <span class="!text-white">light</span>, the room
            would be dark and it would be hard to see things around us. </h2>
        <img src="{{ asset('assets/images/pptimages/blacklight.png') }}" class="img-md" />
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title !text-white stroke">CLASS ACTIVITY 1 </h2>

        <img src="{{ asset('assets/images/pptimages/gl4.png') }}" class="img-xl" />
        <h2 class="text-center title stroke">Look at these items, which items have
            light? </h2>
        <p class="note">Note: Teacher to prepare more additional items too such as light stick,
            anything that <br> creates light.</p>
    </div>


    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[30vw]">
        <div class=" text-start">
            <h2 class="!text-white stroke">Let's do:</h2>
            <ol class="title lesson-ul list-decimal space-y-2 text-start stroke">
                <li>
                    Explore the items provided. Which item lights up?
                </li>
                <li>
                    Are there any other things that light up in the class?
                </li>
                <li>
                    Point them out to your friends.
                </li>
            </ol>
        </div>

        <p class="note ">
            Note: Ensure children's safety while doing this activity. Make sure the room is not
            too dark and do not let the children shine light directly into their eyes. You may let children
            find items that light up in the class if there's any.
        </p>

    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[45vh]">

        <img src="{{ asset('assets/images/pptimages/torch.png') }}" class="!max-w-[38.5vw] h-[23.281vw]" />
        <h2 class=" title stroke">The flashlight <span class="text-shite">light</span> up when it is switched on.</h2>

    </div>

    {{-- slide 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/pptimages/gl1.png') }}" class="img-xl" />
        <h2 class="text-cente title stroke">The ceiling <span class="!text-white ">light</span> and table lamp <span
                class="text-white ">light</span> up when they are being switched on.</h2>
        <p class="note">Note: Encourage children to point out the lights in the room.</p>
    </div>


    {{-- slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/pptimages/gl2.png') }}" class="img-xl" />
        <h2 class="text-cente stroke title">The streetlights and vehicle headlights help people to see better at night.
        </h2>
        <p class="note">Note: Encourage children to point out the lights they can see at night.</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/pptimages/gl3.png') }}" class="!w-[40vw] " />
        <h2 class="text-cente title stroke">The flashlight, streetlights, table lamps are <span class="!text-white">
                man-made lights</span>. </h2>
        <h2 class="text-wrap title stroke">These items need batteries or electricity to give light.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title !text-white stroke">CLASS ACTIVITY 2</h2>
        <img src="{{ asset('assets/images/pptimages/dedective.png') }}" class="img-h-md " />
        <h2 class="text-cente title stroke"> What kind of lights are there around us?</h2>
        <p class="note">Note: Teacher to prepare camera to capture children looking for different
            light sources.</p>

    </div>

    {{-- slide 20  --}}
    <div class="slide hidden flex flex-col items-center h-[50vh] justify-between">
        <div>
            <h2 class=" text-center  !text-white stroke">Let's do:</h2>
            <ol class="stroke title lesson-ul list-decimal space-y-2 text-start">
                <li>Take a walk around the school or outdoors.</li>
                <li>Identify all the light sources.</li>
                <li>Take photos and discuss as a class why is light needed on that place.</li>
            </ol>
        </div>
        <p class="note">Note: Look out for light sources and take photos using the ipad for
            the discussion in class. Challenge children to think of reasons why a light source is placed in that area. E.g.
            park, to light up the path at night.</p>
    </div>


    {{-- slide 21  --}}
    <div class="slide hidden flex flex-col items-center justify-center ">

        <h2 class="text-center title stroke">The <span class="!text-white">sun</span>, <span
                class="text-white">stars</span> and <span class="!text-white">fire</span> are <span
                class="text-white">natural light</span>.
        </h2>
        <img src="{{ asset('assets/images/pptimages/three1.png') }}" class="img-xl" />
        <p class="note text-center text-xl !text-white   max-w-2xl">Note: Ask children if they have seen candles
            on birthday cakes
            and what happens when the candles are blown out.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/pptimages/gl3.png') }}" class="!w-[40vw] " />

        <h2 class="text-center title stroke ">The flashlight, streetlights, table lamps are <span class="!text-white">
                man-made lights</span>.</h2>

    </div>



    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton ">
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
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}">
        </button>
    </div>
@endsection

@push('script')
    <script>
        // Video toggle function
        function toggleVideo(videoId) {
            const video = document.getElementById(videoId);
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Pause all videos in current slide
            function pauseVideos() {
                if (slides[currentIndex]) {
                    const videos = slides[currentIndex].querySelectorAll("video");
                    videos.forEach(video => {
                        if (!video.paused) {
                            video.pause();
                        }
                    });
                }
            }

            // Show slide and update buttons
            function showSlide(index) {
                // Pause videos before switching
                pauseVideos();

                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('n1lightchoose') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('lightforms') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
