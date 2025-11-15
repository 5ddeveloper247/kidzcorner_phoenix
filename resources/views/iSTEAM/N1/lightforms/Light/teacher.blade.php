@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is Light?</h2>


    {{-- slide 1  --}}
    <div class="flex !text-white flex-col justify-start t-slide !gap-y-[3vw]  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore items with lights</li>
                <li>Develop awareness of natural and man-made light sources</li>
                <li>Understand how lights are useful to us and where lights can be found</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Sun</li>
                <li>Bright / Brightly</li>
                <li>Light</li>
                <li>Stars</li>
                <li>Fire</li>
                <li>Natural</li>
                <li>Natural Lights</li>
                <li>Man-made Lights</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" flex  !text-white flex-col justify-start t-slide  text-start ">
        <div>
            <h2 class="t-title ">Preparations for Class Activity I:</h2>
            <ul class="list-disc ">
                <li>iPad (make sure children handle with care)</li>
                <li>Torch lights or any other battery-operated lights</li>
                <li>Table lamp or night light (teacher can plug them into the socket and demonstrate how these light up, do
                    not let children handle these)</li>
            </ul>
        </div>

        <div class="flex  items-center justify-between">
            <div>
                <h2 class="t-title ">Links to Songs:</h2>
                <ul class="list-disc ">
                    <li>
                        Mr Golden Sun
                        <ul class="list-disc space-y-1 pl-6">
                            <li>Sun: <a href="https://youtu.be/pIrC_OhEHJM" target="_blank"
                                    class="text-blue-600 underline">Watch here</a></li>
                            <li>Mr Golden Sun: <a href="https://youtu.be/hlzvrEfyL2Y" target="_blank"
                                    class="text-blue-600 underline">Watch here</a></li>
                        </ul>
                    </li>
                    <li>
                        Twinkle Twinkle Little Star
                        <a href="https://www.youtube.com/watch?v=NiRf84t4i5I" target="_blank"
                            class="text-blue-600 underline">Watch here</a>
                    </li>
                </ul>
            </div>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        </div>
    </div>

    {{-- slide 3 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                    If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the video.
                        <img class="t-video-btn absolute top-[-1vw] left-[8vw]" src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    <span class="relative">
                        If you see  <span class="opacity-0">---</span> , click on it for additional information or activity.
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="t-info-btn absolute top-[-1vw] left-[8.5vw]" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon  <span class="opacity-0">---</span>  if you need to go to some parts of the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="t-home-btn absolute top-0 left-[19.5vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{--  slide 26 --}}
    <div class=" !text-white flex flex-col justify-start t-slide text-start ">
        <h2 class="title stroke text-center">Learning Centre Idea </h2>

        <h1 class="text-[2vw] stroke !text-white ">Let’s sort!</h1>
        <div>
            <h2 class=" t-title">What and how to set up:</h2>
            <p>Place pictures of various items such as pot of plant, bottle, shoe, sock, box, elephant, lamp, light
                bulb, sun, stars, lightning, firefly, ceiling light, handphone, TV.</p>
        </div>

        <div class="flex  items-center justify-between">
            <div>
                <p class=" t-title">What to do:</p>
                <ul>
                    <li>
                        <strong>*</strong> Invite children to pick up pictures and sort them into groups:
                        <ul class="mt-2 list-[lower-alpha] space-y-1 !pl-[3vw]">
                            <li>Gives light or Does not give light</li>
                            <li>Natural light or Man-made light</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />

        </div>
    </div>


    {{-- Buttons --}}
    {{-- done button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- top Button --}}
    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-[999]">
        <!-- Return Button -->
        <a id="returnButton">

            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a> <!-- Home Button -->
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
            // Get all elements
            const slides = document.querySelectorAll(".t-slide");
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
                window.location.href = "{{ route('n1lightchoose') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
