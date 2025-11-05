@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Makey Makey (3)</h2>


    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that certain applications can turn Makey Makey into a music maker.</li>
                <li>Know that only a complete circuit will make a Makey Makey Board work.</li>
                <li>Develop understanding through observation and inquiry.</li>
                <li>Use creativity to set up and turn Makey Makey into a fun music maker.</li>
                <li>Create music together with friends.</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex items-start gap-[3vw]">
                <ul class="list-disc ">
                    <li>Electronics</li>
                    <li>Circuit Board (Makey Makey Board)</li>
                    <li>Computer</li>
                    <li>Application</li>
                </ul>
                <ul class="list-disc ">
                    <li>Complete Circuit</li>
                    <li>Conductor</li>
                    <li>Keypad</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start  text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>A computer</li>
                <li>A set of Makey Makey</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/circuit/makey/m13.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col items-start justify-start  text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>Suitable conductors which can be used as keypads (e.g. playdough of different colours, forks and spoons,
                    pots and pans, cookie cutters, keys, nuts and bolts, food or beverage cans, water)</li>
                <li>Suitable materials for Makey Makey's set up - conductive materials like foil, conductive tape, paper
                    clips; non-conductive materials like adhesive tape, glue, scissors transparent cup, cardboard, etc</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide text-start text-2xl t-slide text-white space-y-10">
        <div>
            <h2 class=" t-title">Things to note during hands-on session:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Remind children not to touch any circuit parts when their hands are wet.</li>
                <li>Remind children to handle the materials with care.</li>
                <li>Remind children to be patient and take turns in using the materials provided.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Remember to take photos and videos for documentation purpose.</li>
            </ul>
        </div>

        <div>
            <h2 class=" t-title">For extension:</h2>
            <ul class="list-disc pl-[50px]">
                <li>You may repeat the activity with the keyboard application on Makey Makey's <br>
                    website (MK-1 Keyboard: <a href="https://ericrosenbaum.github.io/MK-1/"
                        class="text-[#F7B94A]">https://ericrosenbaum.github.io/MK-1/</a>).</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide text-start text-2xl t-slide text-white space-y-10">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Makey Makey is a set of electronic toys that allows you to create an alternative keyboard for any
                    computer programme or application that accepts keyboard or mouse click inputs.</li>
                <li>When you connect a Makey Makey Board to a computer, the computer may ask you to install drivers or do
                    other setup. Just close the pop-up window.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/circuit/makey/m14.png') }}" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class="slide flex  flex-col justify-start  text-2xl t-slide text-start text-white w-[80%]">
        <div>
            <h2 class=" t-title">Notes:</h2>
            <ul class="list-disc ">
                <li class="flex">
                    If you see
                    <span>
                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex">
                    Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
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

            //   Configure your return route here (when on first slide)
            const returnRouteFromFirstSlide = "{{ route('makey1Selection') }}";

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   If last slide → hide NEXT, show DONE
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT button - go to next slide
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   RETURN button - go back OR navigate to route if on first slide
            returnButton.addEventListener("click", () => {
                // If on first slide (slide 0), navigate to return route
                if (currentSlide === 0) {
                    window.location.href = returnRouteFromFirstSlide;
                    return;
                }

                // Otherwise, go to previous slide
                currentSlide--;
                showSlide(currentSlide);
            });

            //   DONE button - navigate to completion route
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2ElectronicCircuits') }}";
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
