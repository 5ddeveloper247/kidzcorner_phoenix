@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    <h2 class="top-title stroke">Animate a Character (5) </h2>

    {{-- sldie 1  --}}
    <div class="flex t-slide !text-white flex-col justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that ScratchJr allows us to create our own animated stories</li>
                <li>Know that ScratchJr allows us to create our own animated stories</li>
                <li>Know that more than a programme can be created for a character to do several movements at the same time
                    for the sake of different animation effects</li>
                <li>Develop understanding through inquiry</li>
                <li>Develop problem-solving skills</li>
                <li>Learn to share and take turns</li>
                <li>Learn to cooperate with friends to complete a task</li>
            </ul>
        </div>


        <div>
            <h2 class="t-title">Keywords:</h2>
            <div class="flex gap-[3vw] pl-[1vw]">
                <ul class="list-disc ">

                    <li>Programme</li>
                    <li>Programming/Coding</li>
                    <li>Command</li>
                    <li>Animated Story</li>
                </ul>

                <ul class="list-disc ">
                    <li>Programming Block</li>
                    <li>Programming Area</li>
                    <li>Character</li>
                    <li>Look</li>
                </ul>
            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex t-slide !text-white flex-col justify-start   text-start">
        <ul class="list-disc">
            <h2 class="t-title">Preparations:</h2>
            <li>The tablets (download ScratchJr application from App Store or Google Play for each tablet; charge all the
                tablets before you start each lesson)</li>

        </ul>

        <div class="flex justify-center items-center">
            <img class="img-lg" src="/assets/images/K2/animate1/a50.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="flex t-slide !text-white flex-col justify-start   text-start">


        <ul class="list-disc">
            <h2 class="t-title">Preparations:</h2>
            <li>Grid Card (print and laminate so that they are reusable)</li>
            <li>Whiteboard marker pens</li>

        </ul>
        <div class="flex justify-center items-center">
            <div>
                <img src="/assets/images/K2/animate1/a51.png" class="img-md" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="flex t-slide !text-white flex-col justify-start   text-start">

        <ul class="list-disc">
            <h2 class="t-title">Additional info:</h2>
            <li>
                Tapping here enables you to change title of a project.</li>
        </ul>
        <div class="flex justify-center items-center">
            <img src="/assets/images/K2/animate5/a20.png" class="img-md" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 5 --}}
    <div class="flex t-slide !text-white flex-col justify-start   text-start">

        <ul class="list-disc">
            <h2 class="t-title">Additional info:</h2>
            <li>
                Tapping here enables you to add words or text on the stage.</li>
        </ul>
        <div class="flex justify-center items-center">
                <img src="/assets/images/K2/animate5/a21.png" class="img-md" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 6 --}}
    <div class="flex t-slide !text-white flex-col justify-start   text-start">

        <ul class="list-disc">
            <h2 class="t-title">Additional info:</h2>
            <li>
                The maximum number of pages you can create for a story is 4 pages.</li>
        </ul>
        <div class="flex justify-center items-center">
                <img src="/assets/images/K2/animate5/a22.png" class="img-md" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- sldie 7 --}}


    <div class="flex t-slide !text-white flex-col  justify-around items-start text-start">

        <div>
            <ul class="list-disc !text-white">

                <h2 class="t-title">Reminders or advice during hands-on session:</h2>
                <li>Always hold a tablet with both your hands (to show your care and prevent the
                    tools from spoiling easily).</li>
                <li>Be patient and take turns when using the tablets.</li>
            </ul>
        </div>

        <div>
            <ul class="!text-start list-disc">
                <h2 class="t-title">Possible questions during hands-on sessions:</h2>
                <li>Which part of the app allows you to add pages to a story?
                </li>
                <li>How do you make your story auto play from page to page?</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 7 --}}
    <div class=" t-slide text-start flex items-center !text-white !w-[53vw]">
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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('animate5Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('animate5Selection') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
