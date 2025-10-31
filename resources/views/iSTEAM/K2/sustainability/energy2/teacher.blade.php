@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Clean Energy 2</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Understand more about clean energy</li>
                <li class="text-[1.3vw]">Learn that wind and water can generate energy</li>
                <li class="text-[1.3vw]">Develop awareness of environmental issues</li>
                <li class="text-[1.3vw]">Develop curiosity and understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Clean Energy</li>
                    <li class="text-[1.3vw]">Solar Energy</li>
                    <li class="text-[1.3vw]">Turbine</li>
                    <li class="text-[1.3vw]">Windmill</li>
                    <li class="text-[1.3vw]">Dams</li>
                    <li class="text-[1.3vw]">Pollution</li>
                    <li class="text-[1.3vw]">Hydropower</li>
                    <li class="text-[1.3vw]">Electricity</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations class activity 1</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">
                    You can bring children outdoors for the activity.
                </li>
                <li class="text-[1.3vw]">If the wind is not strong enough, you may get children to think of ways to generate
                    wind or find a
                    source for wind (eg. they can blow at it or use a hair dryer)
                </li>
            </ul>
            <ul>
                <h2 class="font-bold t-title">Preparations class activity 2</h2>
                <li class="text-[1.3vw]">
                    Collect recyclable materials to create a waterfall.
                </li>
                <li class="text-[1.3vw]">You may get children to observe how the turbine works under the running taps so
                    that they know which way the water should flow.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class="font-bold t-title">Useful information:</h2>
            <p class="note">A windmill generates mechanical energy from wind power, while a wind
                turbine generates electricity from wind power. Windmills have been around for
                centuries. They have developed throughout the years to keep up with new
                technology, but overall, they maintain the same principle: converting wind into
                mechanical energy.</p>

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Notes:</h2>
            <ul>
                <li class="text-[1.3vw] flex">If you see
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}" class="!max-w-[2.5vw]" />
                    </span>
                    next to a
                    picture, click on the picture to watch the video
                    Always ask questions to encourage children to think and share their ideas first
                    before giving out any information.
                </li>
                <li class="text-[1.3vw]">Emphasise and use the keywords during hands-on sessions.
                </li>
                <li class="text-[1.3vw]">Print out the Learning Journal (if any) for every
                    child to complete at the end of the lesson.
                </li>
                <li class="text-[1.3vw] flex">Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}" class="!max-w-[2.5vw]" />
                    </span>
                    if
                    you need to go to some
                    parts of the lesson quickly.
                </li>


            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center gap-y-10 text-start">
        <div>
            <h2 class="title stroke justify-center">Learning Centre Idea</h2>
            <h2 class="font-bold t-title">Create A Windmill</h2>
            <p class="note">What and how to set up:
                Place art materials for children to use to create their own windmills.
                Print out different examples of windmills and encourage children to
                make.

                What to do:
                1. Guide children to make the windmills
                2. Get children to compare if different shape/materials of the
                windmills move at different speed.</p>

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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('energy2Selection') }}";
                } else {
                    //   Previous slide pe jao
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
