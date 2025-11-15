@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Glow in the Dark</h2>


    {{-- slide 1 --}}
    <div class="flex flex-col justify-start  text-start text-2xl !text-white hidden t-slide">
        <div>
            <h2 class="t-title  t-title">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Explore glow-in-the-dark items</li>
                <li>Develop awareness and curiosity of different things that glow in the dark</li>
                <li>Develop curiosity in exploring various types of items</li>
                <li>Develop observation and understanding through hands-on activities</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title  t-title">Keywords:</h2>
            <div class="flex items-center gap-x-10">
                <ul class="list-disc">
                    <li>Glow-in-the-dark</li>
                    <li>Store</li>
                    <li>Light Energy</li>
                    <li>Bright / Brightly</li>
                    <li>Dark</li>
                    <li>Glow</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 2 --}}
    <div class="text-white flex text-start text-2xl hidden t-slide">
        <div>
            <h2 class="t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>Teachers need prepare a black box for children to use.</li>
                <li>Suggested items for glow in the dark - stickers, stars, toy figurines or clock with the glow-in-the-dark
                    numbers. Please source them before lesson.</li>
                <li>Do provide other items and let children guess if they can glow in the dark.</li>
                <li>Print out learning journals. You may guide children to draw the items or print out the pictures on the
                    learning journal and get children to circle those items that glow in the dark.</li>
            </ul>
            <br>
            </ul>
            <h2 class="t-title">Preparations for Class Activity II:</h2>
            <ul class="list-disc">
                <li>Collect plastic transparent jars or bottles to make this glow jar/bottle.</li>
                <li>Provide glow-in-the-dark stickers, figurines, stars or other toys.</li>
                <li>Source for glow in the dark paint if you would like children to paint the outside of the bottles.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 3 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[8vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span> , click on it for additional information or activity.
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                            class="t-info-btn absolute top-[-1vw] left-[8.5vw]" />
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
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19.5vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="text-white flex  flex-col justify-start  text-start text-2xl hidden t-slide">
        <h1 class="title  text-center stroke">Learning Centre Idea</h1>
        <div>
            <h2 class=" title stroke !text-white">Glow in the box</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <p>Provide materials such as black box, cubes, pom pom balls, manipulative
                toys and other glow-in-dark toys and materials</p>
        </div>
        <div>
            <h2 class=" t-title">What to do:</h2>
            <ul class="mt-2 list-decimal space-y-1 pl-6">
                <li> Invite children to explore with the materials provided</li>
                <li> Put a toy in the black box and see if it glows in the dark.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>





    {{-- done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
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
            const slides = document.querySelectorAll(".t-slide");
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
                    window.location.href = "{{ route('darkSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('darkSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
