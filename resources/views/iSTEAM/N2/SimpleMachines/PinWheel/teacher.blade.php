@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')




    {{-- sldie 1 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start t-slide text-start">
        <div>
            <h2 class=" t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the characteristics of wheels and axles - a simple machine</li>
                <li>Know some examples of things with wheel and axle around us</li>
                <li>Build a pinwheel based on a pictorial guide</li>
                <li>Answer some questions based on the hands-on experience</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop understanding through observation and inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Wheel</li>
                    <li>Axle</li>
                    <li>Simple Machine</li>

                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start t-slide text-start ">
        <div>
            <h2 class=" title stroke !text-white">Preparations for Class Activity I:</h2>
            <ul class="list-disc ">
                <li>Each group have a set of building bricks (parts and quantity as shown)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/SimpleMachines/a32.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start t-slide text-start ">
        <div>
            <h2 class=" title stroke !text-white">Preparations:</h2>
            <ul class="list-disc ">
                <li>A standing fan for all children or each group a portable fan (set to the
                    lowest speed throughout the hands-on sessions)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/SimpleMachines/at2.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start t-slide text-start ">
        <div>
            <h2 class=" title stroke !text-white">What you need to do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Bend each of the small size blades to the same angles for the class.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/SimpleMachines/at.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start t-slide text-start ">
        <div>
            <h2 class=" title stroke !text-white">What you need to do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Be familiar with the name of the parts in the lego set.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/SimpleMachines/at1.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start t-slide text-start ">
        <div>
            <h2 class=" title stroke !text-white">Things to note during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Encourage children to always discuss and make decisions as a group to complete the mission.</li>
                <li>Fans are potentially dangerous. Make sure that children handle them with great care with adult
                    supervision at all times!</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>The pinwheel may not turn after a while — adjust the angle (to be the same) or the position (move
                    forward slightly) of the blades to solve the problem.</li>
                <li>If time allows, provide paper blades (trace from the plastic blades) for children to compare the
                    performance of the pinwheel.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 7 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex whitespace-nowrap">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex whitespace-nowrap">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

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
                    window.location.href = "{{ route('PinWheelSelection') }}";
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
