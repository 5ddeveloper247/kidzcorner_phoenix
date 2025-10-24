@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Ring a Bell Machine</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn what a Rube Goldberg Machine is</li>
                <li>Set up a Rube Goldberg Machine that includes a simple machine - inclined plane</li>
                <li>Explore and learn about inclined planes and the domino effect</li>
                <li>Learn about the basic concept of force (push)</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex  items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>

                <div>
                    <ul class="list-disc ">
                        <li>Rube Goldberg Machine</li>
                        <li>Ramp</li>
                        <li>Inclined Plane</li>
                        <li>Force (push)</li>
                        <li>Domino Effect</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <div class="flex   justify-between">
                <ul class="list-disc ">
                    <li>1 Rubber ball</li>
                    <li>20 books (some hardcover)</li>
                    <li>10 dominoes</li>
                    <li>2 blocks</li>
                </ul>
                <ul class="list-disc ">
                    <li>1 ice cream stick</li>
                    <li>1 string</li>
                    <li>1 bell</li>
                </ul>
                </ul>
            </div>
        </div>


        <img src="{{ asset('assets/images/K1/sm/bell/bell11.png') }}" alt="Teacher" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title ">Things to consider during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children to share and try out their ideas. Some possible questions are listed in
                    the
                    lesson; you may add on questions based on children's response.</li>
                <li>You may provide adhesive tape if children ask for it to firm up the structure of the bell.</li>
                <li>Remember to continue with the reflection part after the hands-on session.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
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




    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" text-center title stroke ">Learning Centre Idea</h2>
            <ul class="list-disc ">

                <h2 class=" t-title">The Best Ring a Bell Machine</h2>
                <li>What and how to set up:</li>


                <li>Place things as listed in preparations and some other things that can form ramps here such as cardboard,
                    plank, and box file.</li>

            </ul>
        </div>

        <div>
            <h2 class="t-title">What to do:</h2>

            <div>
                <ul class="list-disc ">
                    <li>Choose things that you like to set up a Rube Goldberg Machine that will always ring a bell
                        successfully.</li>
                    <li>You may refer to the questions listed while setting up the machine.</li>
                    <li>Draw your final machine.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">

        <h2 class=" t-title text-center">The Best Ring a Bell Machine:</h2>
        <div class="border-4 w-[40vw] h-[40vh] p-[2rem]">
            <ul class="list-decimal ">
                <p class="!text-white">Find out the answers for these questions while setting up the machine:</p>
                <li>How do you make the ball roll down?</li>
                <li>How do you make the ball always hit the first domino?</li>
                <li>How do you make the dominoes always fall one after another?</li>
                <li>How do you make the last domino always hit the bell?</li>
            </ul>

            <p class="!text-white">Draw your final machine.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
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
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    window.location.href = "{{ route('BellSelection') }}";
                } else {
                    // Previous slide 
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            // DONE button
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1simpleMachines') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
