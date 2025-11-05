@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Animals are Living Things</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the basic characteristics of living things</li>
                <li>Analyze and identify living and non-living things</li>
                <li>Know that all animals are living things</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>Non-living Thing</li>
                    <li>Move</li>
                    <li>Drink</li>
                    <li>Eat</li>
                    <li>Breathe</li>
                    <li>Grow</li>
                    <li>Nutrients</li>
                    <li>Animals</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start text-start ">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>A doll or a figurine of a person</li>
                <li>Use whiteboard mode during discussion [Tick or cross to complete the table of comparison
                    (as shown below) with the whiteboard pen. For documentation purpose, you may want to
                    save or print the page.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/g12.png') }}" />

    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white justify-start text-start t-slide">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li> Ask questions to prompt children share their prior knowledge and experiences.</li>
                <li> Some possible questions for Activity 1: What do you see on the doll? How are you
                    and the doll similar? How are you and the doll different? How do you feel when
                    you did not eat breakfast or when you did not have any lunch?
                    How did you feel if you have no water to drink? What
                    happens if you do not eat/drink for the whole day?</li>
                <li>Some possible questions for Activity 2: Ball, toy train and
                    doll are toys. Do you think toys are living or non-living
                    things? Why? If all toys are non-living things, how about
                    the cartoon characters that we know? Are they living
                    or non-living things? Why?</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />


    </div>


    {{-- slide 4 --}}
    <div class="text-white flex text-start text-2xl slide hidden t-slide">
        <div>
            <h2 class=" t-title underline">Additional information:</h2>
            <ul class="list-disc">
                <li>Many things have one or more characteristics of living things, but a living thing
                    must has all of the characteristics of living things.</li>

                <li>Many things that move like car, fan and windmill are non-living things.
                    These things moved by external power like fuel, battery,
                    electricity and wind.</li>

                <li>All human-made things are non-living things. But some
                    natural things around us like rock, water, air and cloud
                    are non-living things too.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
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
                    window.location.href = "{{ route('AnimalsSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('LivingThings') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
