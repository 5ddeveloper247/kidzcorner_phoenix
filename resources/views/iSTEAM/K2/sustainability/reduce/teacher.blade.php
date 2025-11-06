@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex t-slide text-white flex-col justify-start text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Understand what can be done to help Earth;</li>
                <li class="text-[1.3vw]">Learn about the different ways to reduce and reuse waste</li>
                <li class="text-[1.3vw]">Develop awareness of environmental issues</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Pollution</li>
                    <li class="text-[1.3vw]">Air Pollution</li>
                    <li class="text-[1.3vw]">Chemicals</li>
                    <li class="text-[1.3vw]">Plastic</li>
                    <li class="text-[1.3vw]">Reduce</li>
                    <li class="text-[1.3vw]">Reuse</li>
                    <li class="text-[1.3vw]">Recycle</li>
                    <li class="text-[1.3vw]">disposable</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex t-slide text-white flex-col justify-start text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">
                    Keep a collection of various recyclable items prior to this lesson.
                    Ensure that the recyclable items are washed, cleaned and dry for the art project.
                </li>
                <li class="text-[1.3vw]">You may search online for inspiration on the type of artwork you and your children would like to create.
                </li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start text-start">
        <div>
            <h2 class="font-bold t-title">Notes:</h2>
            <ul>
                <li class="text-[1.3vw] flex whitespace-nowrap">If you see 
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}" class="!max-w-[2.5vw]" /> 
                    </span>
                    next to a
                    picture, click on the picture to watch the video
                </li>
                 <li> Always ask questions to encourage children to think and share their ideas first
                    before giving out any information.</li>
                <li class="text-[1.3vw]">Emphasise and use the keywords during hands-on sessions.
                </li>
                <li class="text-[1.3vw]">Print out the Learning Journal (if any) for every
                    child to complete at the end of the lesson.
                </li>
                <li class="text-[1.3vw] flex whitespace-nowrap">Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}" class="!max-w-[2.5vw]" />
                    </span>
                    if
                    you need to go to some
                    parts of the lesson quickly.
                </li>
            </ul>
             <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex t-slide text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="title stroke text-center">Learning Centre Idea</h2>
            <h2 class=" t-title">Create A Poster</h2>
            <ul class="list-disc">
                <li class="text-[1.3vw]">What and how to set up:<br>
                    Provide art materials and books on reducing waste.<br>
                    What to do:<br>
                    1. Encourage children to think of a message they want to tell
                    others.<br>
                    2. Prompt children to think of what they see in school e.g. to
                    reduce wastage of paper, remind friends to draw on both sides.
                    Or reduce wastage of food, remind friends to ask for smaller portion.</li>
            </ul>
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
                    window.location.href = "{{ route('k2sustainability') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
