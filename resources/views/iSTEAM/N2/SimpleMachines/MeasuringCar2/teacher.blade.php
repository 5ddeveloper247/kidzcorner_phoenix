@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">A Measuring Car (2)</h2>

    {{-- sldie 23  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start text-start">
        <div>
            <h2 class="t-title  ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the characteristics of inclined planes - a simple machine</li>
                <li>Learn how to test and get answers through comparison</li>
                <li>Answer some questions based on the hands-on experience</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop understanding through observation and inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Simple Machine</li>
                    <li>Ramp</li>
                    <li>Inclined Plane</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start text-start">
        <div>
            <h2 class=" t-title t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each group a measuring car (from the last lesson)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/SimpleMachines/gl8.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start text-start">
        <div>
            <h2 class=" t-title t-title">What you need to do before the lesson:</h2>
            <ul class="list-disc ">
                <li> A height adjustable inclined plane for all children or each group (set up with any
                    suitable items; can form with a board or plank and 3 boxes of same heights)
                    [Note: the car can measure up to 10 units of distance, so make sure that your
                    inclined plane setting will not make the car travel more than that range.]</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/SimpleMachines/b22.png') }}" class="w-[636px]" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="absolute teacher-img1" />
        </div>

    </div>


    {{-- slide 4 --}}
    <div class="text-white flex flex-col t-slide text-start text-2xl slide hidden">
        <div>
            <h2 class=" t-title t-title ">What you need to do before the lesson:</h2>
            <ul class="list-disc">
                <li>Be familiar with the name of the parts in the lego set.</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/SimpleMachines/at1.png') }}" class="w-[536px]" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class="text-white flex flex-col t-slide text-start text-2xl slide hidden">
        <div>
            <h2 class=" t-title t-title ">Things to note during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>Encourage children to always discuss and make decisions as a group to complete the mission.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>For a fair test, remind children to use the same strength to push the car down the inclined plane.</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="absolute teacher-img1 float-right" />
        </div>

    </div>



    {{-- slide 6 --}}
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






{{-- ===== --}}
    {{-- Done Button --}}
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
        <button class="nextButton">
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
                    window.location.href = "{{ route('MeasuringCar2Selection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('SimpleMachines') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
