@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <!-- Slide 30 -->
    <div class="slide t-slide hidden flex flex-col justify-start text-start text-white">
        <div>
            <!-- Learning Outcomes -->
            <h2 class="font-bold t-title  t-title ">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Understand how shadows are made</li>
                <li>Explore how the position of light sources affect the shadows</li>
                <li>Develop creative thinking and problem solving skills</li>
                <li>Develop interpersonal skills</li>
            </ul>
        </div>
        <div class="flex items-center justify-between">
            <div>
                <!-- Keywords -->
                <h2 class="font-bold t-title  t-title ">Keywords:</h2>
                <div class="flex items-center gap-x-10">
                    <ul class="list-disc">
                        <li>Black</li>
                        <li>Long</li>
                        <li>Near</li>
                        <li>Shadow</li>
                        <li>Short</li>
                        <li>Far</li>
                        <li>Block</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Flashlight</li>
                        <li>Tall</li>
                        <li>Light</li>
                        <li>Big</li>
                        <li>LOW</li>
                        <li>Small</li>
                        <li>High</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
    </div>

    <!-- Slide 31 -->
    <div class="slide t-slide hidden flex flex-col justify-start  text-start text-white">
        <div>
            <!-- Preparations -->
            <h2 class="font-bold t-title  t-title ">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>Need to have a flashlight and a space to work with the activities.</li>
                <li>Ensure enough space for children to try out their hand shadows.</li>
                <li>Guide children to try out some of the animal hand shadows.</li>
                <li>Encourage children to create their own versions of animal shadows.</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Links to Songs -->
                <h2 class="font-bold t-title  t-title ">Preparations for Class Activity 2:</h2>
                <ul class="list-disc">
                    <li>
                        <ul class="list-disc space-y-1">
                            <li>Provide each group with a flashlight, mah-jong paper on wall, blocks and a table for
                                children to work on.</li>
                            <li>Ensure enough space for children to place the tower and explore the position of the
                                flashlight.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>link to song:</strong>
                    <li>Hi Shadow -
                        <a href="https://www.youtube.com/watch?v=ZLph3HVJVFA " target="_blank"
                            class="text-blue-300 underline">https://www.youtube.com/watch?v=ZLph3HVJVFA </a>
                    </li>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
        </div>
    </div>

    <!-- Slide 32 -->
    <div class="slide t-slide text-start text-white">
        <div>
            <h2 class="t-title font-bold">Notes:</h2>
            <ul class="list-disc">
                <li class="flex">
                    If you see
                    <span>
                        <img class="video-btn" src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>

                <li class="flex">
                    If you see
                    <span>
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="info-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li class="flex">
                    Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    ,if you need to go to  the lesson quickly.
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    <!-- Slide 33 -->
    <div class="slide t-slide hidden text-white flex  flex-col justify-start  text-start">
        <h2 class=" font-bold title text-center stroke">Learning Center Idea</h2>
        <div>
            <!-- Preparations -->
            <h2 class="font-bold t-title  t-title ">Matching shadow</h2>
            <h2 class="t-title">What and how to setup:</h2>
            <p>Prepare some flashlights and some toys such as cars, dinosaurs, animal figurines etc. Print out shadows of
                the objects for children to match. The shadows can be taller/bigger/smaller/shorter, depending on how the
                light was positioned.</p>
        </div>
        <div>
                <!-- What to do -->
                <h2 class="font-bold t-title  t-title ">What to do:</h2>
                <ul class="mt-2 list-decimal space-y-1 pl-6">
                    <li>Invite children to pick up a picture and find the item that will cast the shadow.</li>
                    <li>Ask children to use the lights to create the same shadow.</li>
                </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
    </div>



    {{-- done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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
            // Get all elements
            const slides = document.querySelectorAll(".slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;


            // Show slide and update buttons
            function showSlide(index) {
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
                    window.location.href = "{{ route('chooseShadow') }}";
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
