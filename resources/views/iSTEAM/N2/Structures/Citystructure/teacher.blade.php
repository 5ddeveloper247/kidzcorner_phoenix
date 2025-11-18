@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Structure in a City</h2>


    {{-- sldie 1  --}}
    <div class="flex  !text-white flex-col justify-around text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc space-y-[.5vw] ">
                <li>Plan and design a city</li>
                <li>Design and build structures for the city</li>
                <li>Develop interpersonal skills through discussion with peers</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex justify-between w-[50%] items-center">
                <ul class="list-disc space-y-[.5vw] ">
                    <li>Structures</li>
                    <li>Shapes</li>
                </ul>
                <ul class="list-disc space-y-[.5vw] ">
                    <li>City</li>
                    <li>Design</li>

                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex  !text-white flex-col justify-start !text-[1.3vw] text-start t-slide">
        <div>
            <h2 class=" t-title">Things to note:</h2>
            <ul class="list-disc space-y-[.5vw] ">
                <li>Print out pictures of various part of Singapore to inspire children in their
                    planning and creation of their city.</li>
                <li>You may want to draw a blue print of their ideas on a big piece of paper to
                    section out the areas that they want in their city. You may want to
                    divide children into groups and each group to work on one area. For example</li>
                <ul>

                    <li> -Central area with more tall office buildings</li>
                    <li> -Recreation area with more parks and entertainments such as playground,
                        pavilions, museum or malls</li>
                    <li> -Neighborhood with fire engines and fire station, police cars and police stations etc</li>
                    <li> -Transportation such as roads with vehicles / Mrt station with mrt</li>
                    <li> -Constructions sites with dump truck or cranes</li>
                </ul>
            </ul>
        </div>
        <div class="flex justify-between">
            <ul class="list-disc">
                <li>Print out the learning journals required</li>
                <li>Encourage children to explore how they can attach the
                    different parts together using the different
                    types of connectors</li>
            </ul>
            <div class="flex flex-col  justify-center items-end">
                <img src="/assets/images/N2/structure/ci-str/s17.png" class="img-tiny" />
                <p class="note">small wheels connector</p>
            </div>

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- sldie 5 --}}
    <div class=" t-slide text-start !text-white !w-[53vw]">
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




    {{-- sldie 8 --}}
    <div class="text-white flex flex-col items-center justify-center text-start t-slide  hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div class="text-start">
            <h2 class="!text-white text-[2vw] stroke ">My Creation</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Display pictures of various types buildings, vehicles and any special
                    structures to inspire children in their creations. Children can design
                    their house or a special vehicle.</li>
            </ul>
        </div>
        <div class="text-start">

            <h2 class="t-title">What to do:</h2>
            <ul class="list-decimal">
                <li>Encourage children to explore with all types of materials in the
                    construction set.</li>
                <li>Encourage children to design their house or any vehicles they
                    want.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>



    {{-- ========================================================== --}}
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
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href = "{{ route('CitystructureSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('CitystructureSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
