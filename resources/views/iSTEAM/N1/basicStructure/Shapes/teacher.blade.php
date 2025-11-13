@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Forming Shapes</h2>

    {{-- slide 1 --}}
    <div class="flex flex-col justify-start  text-start  !text-white hidden t-slide">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Explore with lines</li>
                <li>Understand that lines are used to form shapes</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex items-center gap-x-10">
                <ul class="list-disc">
                    <li>Shapes</li>
                    <li>Square</li>
                    <li>Rectangle</li>
                    <li>Triangle</li>
                    <li>Lines</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 2 --}}
    <div class="text-white flex text-start  hidden t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc space-y-[4vw]">
                <li>Materials: Glue, double sided tape, ice cream sticks, and straws.
                    Other materials can be used if they are straight so that children recognise that straight lines are used
                    to create the shapes.
                    Hence, pipe cleaners and string are not recommended.
                </li>
                <li>
                    Print out the learning journals for the children. Each child will have 3 journals, with one shape on
                    each page.
                </li>
                <li>
                    You may wish to cut the straws into different lengths and let children explore creating the shapes with
                    the materials.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" t-slide hidden text-start !text-white !w-[53vw]">
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
    <div class="text-white flex  flex-col justify-start  text-start  hidden t-slide">
        <h1 class="title stroke  text-center">Learning Centre Idea</h1>
        <div>
            <h2 class=" text-[2vw] stroke !text-white">Shape Challenge</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <p>Place pictures of shapes of various sizes. Paste Velcro at the ends of the sticks for children to join the
                sticks form shapes.Encourage children to form the shapes using the ice cream sticks, chopsticks and straws.
            </p>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">What to do:</h2>
                <ul class="mt-2 list-decimal space-y-1 pl-6">
                    <li> Invite children to pick up a picture of a shape.</li>
                    <li> Encourage children to materials to form the shapes.</li>
                    <li> Children can use the picture as a guide to form the outline of the shapes</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>




    {{-- ======================= --}}
    {{-- done Button --}}
    <div class="down-btn-container">
        <button class="cursor-pointer doneButton">
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
                    window.location.href = "{{ route('shapesSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('shapesSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
