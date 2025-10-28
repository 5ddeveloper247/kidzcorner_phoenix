@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Structure of a Car</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn about the structure of cars</li>
                <li>Explore the structural designs of cars</li>
                <li>Explore, design and build a triangular structure</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex justify-between w-[50%] items-center">
            <ul class="list-disc ">
                <h2 class="t-title ">Keywords:</h2>
                <li>Structures</li>
                <li>Shapes</li>
                <li>Square</li>
                <li>Rectangle</li>
            </ul>
            <ul class="list-disc ">
                <li>Triangle</li>
                <li>Rectangle</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start  justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Put aside the following parts from the DDQ blocks set until the later
                    lessons to avoid distraction to the children,</li>
                <li>Print out the learning journals required.</li>
            </ul>
        </div>
        <div class="flex items-center gap-5">
            <img src="/assets/images/N2/structure/str2/s26.png" />

        </div>
        <ul class="list-disc ">
            <li>Print out the learning journals required.</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Things to note for Group Activity:</h2>
            <ul class="list-disc ">
                <li>Prepare one set of the following for each group of children (3-5). One box
                    of DDQ blocks can only make one Eiffel Tower ( taller version)</li>
            </ul>
        </div>

        <div class="flex gap-2 justify-center items-end">

            <img src="/assets/images/N2/structure/tr-str/s34.png" />
            <p class="note">small prism X 2 <br>
                cube X 6 (any colours) <br>
                block connector X 10 <br>
                pair of small wheels x 2</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 7 --}}
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



    {{-- sldie 8 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <ul>
                    <h2 class="!text-white title stroke">My Car Goes Vroom</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>
                        Display pictures of various types of cars such as sports car, racing car,
                        jeep, convertible etc. Provide blocks and cardboards for children to
                        create ramps and roads to test out their cars.
                    </li>
                </ul>

                <ul class="list-decimal">
                    <h2 class="t-title">What to do:</h2>
                    <li>Encourage children to create a car of their own design by
                        drawing inspiration from the pictures.</li>
                    <li>Let children test their cars on ramps and challenge each other
                        on their cars' speed.</li>
                    <li>Encourage children to reconstruct their cars to make it better
                        after testing.</li>
                </ul>
            </div>
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
            const slides = document.querySelectorAll(".slide");
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
                    window.location.href = "{{ route('CarstructureSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Structures') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
