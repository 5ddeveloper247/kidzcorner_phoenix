@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- slide 1 --}}
    <div class="flex flex-col justify-start  text-start text-2xl text-white slide hidden t-slide">
        <div>
            <h2 class="t-title >Children will be able to:</h2>
            <ul class="list-disc">
                <li>Develop awareness that all things have shapes and structures</li>
                <li>Explore and create structures using shapes</li>
                <li>Learn more about the term 'two-dimensional' and 'three-dimensional'</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop understanding through hands-on activity</li>
                </ul>
        </div>
        <div class="flex w-[100%] justify-between">
            <div>
                <h2 class="t-title >Keywords:</h2>
                <div class="flex items-center gap-x-10">
                    <ul class="list-disc">
                        <li>Shapes</li>
                        <li>Square</li>
                        <li>Triangle</li>
                        <li>Flat</li>
                        <li>Structures</li>
                    </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="text-white flex flex-col text-start text-2xl slide hidden t-slide">
        <div>
            <h2 class="t-title">Preparation for Class Activity 1 :</h2>
            <ul class="list-disc">
                <li>A squared shaped boxed. If you are unable to find, use the following template to create a cube.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/te1.png') }}" alt="" class="large-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 3 --}}
    <div class="text-white flex flex-col text-start text-2xl slide hidden t-slide">
        <div>
            <h2 class="t-title">Preparation for Class Activity 1 :</h2>
            <ul class="list-disc">
                <li>Teacher to demonstrate how to count the sides of the box.</li>
                <li>Turn and write down the number on each side as you turn and count with the children.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/te2.png') }}" alt="" class="large-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>




    {{-- slide 4 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="text-white flex  flex-col justify-start  text-start text-2xl slide hidden t-slide">
        <h1 class="title  text-center stroke">Learning Centre Idea</h1>
        <div>
            <h2 class="t-title">Creating Structures</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <p>Place pictures of various structures of three dimensional shapes such
                as pyramid, cube, cuboids and other 3D polygons. Provide picture guide of what shapes does each polygon need
                and how to create them.</p>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title">What to do:</h2>
                <ul class="mt-2 list-decimal space-y-1 pl-6">
                    <li>Invite children to pick up a picture of a polygon.</li>
                    <li>Encourage children to gather materials to form the shapes.</li>
                    <li>Children can use the picture as a guide to form the 3D structures.</li>

                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- done Button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
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
                    window.location.href = "{{ route('Shape-aroundSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('basicStructure') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
