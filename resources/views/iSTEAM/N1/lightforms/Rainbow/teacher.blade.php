@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Rainbows</h2>

    {{-- slide 1 --}}
    <div class="flex flex-col text-start  !text-white  hidden t-slide">
        <div>
            <h2 class="t-title">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Develop awareness of how rainbows are formed</li>
                <li>Explore with materials to create a rainbow with flashlight/sunlight</li>
                <li>Develop curiosity in exploring various types of items</li>
                <li>Develop observation and understanding through hands-on activities</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">Keywords:</h2>
            <div class="flex items-center gap-x-10">
                <ul class="list-disc">
                    <li>Rainbow</li>
                    <li>Orange</li>
                    <li>Indigo</li>
                    <li>Light</li>
                    <li>Yellow</li>
                    <li>Violet</li>
                    <li>White</li>
                    <li>Green</li>
                </ul>
                <ul class="list-disc">
                    <li>Disc</li>
                    <li>Colours</li>
                    <li>Blue</li>
                    <li>Flashlight</li>
                    <li>Red</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
    </div>


    {{-- slide 2 --}}
    <div class="text-white  flex flex-col text-start   hidden t-slide">
        <div>
            <h2 class=" t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>
                    The following items for each group:
                    <ul class="list-decimal">
                        <li>Teachers need to test out the plastic containers that you have prior to the lesson.</li>
                        <li>Containers must be transparent.</li>
                        <li>Rainbows formed may not be obvious, so do point them out to the children.</li>
                        <li>It MUST be a sunny day.</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div>
            <h2 class=" t-title">Preparations for Class Activity 2:</h2>
            <ul class="list-disc">
                <li>
                    The following items for each group:
                    <ul class="list-decimal">
                        <li>Teacher to remind children not to shine light directly into their eyes or their friend's eyes.
                            Explain that it can damage their eyes.</li>
                        <li>Shine the light into the submerged portion of the mirror.</li>
                        <li>The rainbow will be more obvious when the flashlight used is bright.</li>
                        <li>The light must be white to show the rainbow.</li>
                        <li>Flashlight with orange light is not advisable.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class="text-white  flex  gap-y-30 flex-col text-start  hidden t-slide">
        <div>
            <h2 class=" t-title">Preparations for Class Activity 3:</h2>
            <ul class="list-disc">
                <li>Can be pair work or individual.</li>
                <li>Guide children to look for the reflected rainbows.</li>
                <li>Encourage children to identify the colours on the rainbow.</li>
            </ul>
        </div>
        <div>
            <h2 class=" t-title">Link for song :</h2>
            <ul class="list-disc">
                <li>
                    Rainbow Rainbow –
                    <a href="https://youtu.be/aME-JWXvPds" target="_blank" class="text-blue-600 underline">
                        https://youtu.be/aME-JWXvPds
                    </a>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span> , click on it for additional information or activity.
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                            class="t-info-btn absolute top-[-1vw] left-[8vw]" />
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
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="text-white flex text-start flex-col   hidden t-slide">
        <h1 class="title text-center stroke">Learning Center Idea</h1>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Colours on the Rainbow</h2>
            <h2 class="t-title">What and how to setup:</h2>
            <p>Provide materials such as cubes, pom pom balls, manipulative toys and
                printed template of a rainbow in black and white.</p>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">What to do:</h2>
                <ul class="mt-2 list-decimal space-y-1 pl-6">
                    <li>Show children the rainbow and ask them what is missing.</li>
                    <li>Invite children to put the coloured toys on
                        the template.</li>
                    <li>Guide them on the correct sequence of the colours
                        (for those who are more advanced). </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class="text-white flex text-start flex-col   hidden t-slide">
        <h1 class="title text-center stroke">Learning Center Idea</h1>
        <div>
            <h2 class="!text-white text-[2vw] stroke">My Rainbow</h2>
            <h2 class="t-title">What and how to setup:</h2>
            <p>Put bottles of water in transparent containers (tightly sealed), disc
                and flashlights.</p>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">What to do:</h2>
                <ul class="  space-y-1 pl-6">
                    <p>* Invite children to explore how they can form
                        rainbows using the materials provided</p>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="" />
        </div>
    </div>



    {{-- done Button --}}
    <div class="down-btn-container">
        <button class="cursor-pointer doneButton ">
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

        <button class="cursor-pointer nextButton">
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
                    window.location.href = "{{ route('rainbowSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('rainbowSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
