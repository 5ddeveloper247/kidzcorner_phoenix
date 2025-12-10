@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
 {{-- title --}}
    <h2 class="top-title stroke">Our Animated Stories</h2>

    {{-- sldie 1  --}}
    <div class="flex t-slide !text-white flex-col justify-around text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Use creativity and imagination to create multipage animated stories using
                    ScratchJr</li>
                <li>Know that we can create our own backgrounds and characters using the paint tool in
                    the app</li>
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

                </ul>
            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class="t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>The tablets (download ScratchJr application from App Store or Google Play for each
                    tablet; charge all the tablets before you start each lesson)</li>
            </ul>
        </div>

        <div class="flex justify-center items-center">
            <img class="!w-[40vw]" src="{{ asset('/assets/images/K2/animate1/a50.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="t-slide flex  !text-white flex-col justify-start  text-start">

        <div>
            <h2 class="t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>Grid Card (print and laminate so that they are reusable)</li>
                <li>Whiteboard marker pens</li>
            </ul>
        </div>

        <div class="flex justify-center items-center">
            <img src="{{ asset('/assets/images/K2/animate1/a51.png') }}" class="!w-[30vw]" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center text-start">
        <div>
            <h2 class="t-title">What you need to know or explore before the lesson:</h2>
            <ul class="list-disc !text-start">
                <li>Go through the Blocks Guide in the application of ScratchJr to understand the use
                    of different commands and programming blocks in ScratchJr.</li>
            </ul>
        </div>

        <div class="flex justify-center items-center gap-[1vw]">
            <img src="{{ asset('/assets/images/K2/animate1/a52.png') }}" class="img-sm" />

            <div class="flex-col gap-[1rem]">
                <ul>
                    <li>For this lesson, the focus is</li>
                    <li>knowing the use of all the</li>
                    <li>programming blocks of Motion</li>
                    <li>Blocks. Please go through the</li>
                    <li>descriptions to understand the</li>
                    <li>use of each programming block.</li>
                </ul>
                <ul>
                    <li>You may <span class="text-[#f7b94a]">print out the guide
                        </span> if you need it.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 6 --}}


    <div class="t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class="t-title">Additional info:</h2>
            <ul class="list-disc">
                <li>
                    The following navigation buttons enable you to undo or redo a step.</li>
            </ul>
        </div>

        <div class="flex justify-center items-center">
            <div>
                <img src="{{ asset('/assets/images/K2/story/a41.png') }}" class="!w-[30vw]" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>
    {{-- sldie 6 --}}


    <div class="flex t-slide !text-white flex-col justify-center items-center  text-start">
        <div>
            <h2 class="t-title">Reminders or advice during hands-on session:</h2>
            <ul class="list-disc">
                <li>Always hold a tablet with both your hands (to show your care and prevent the tools from
                    spoiling easily).
                </li>
                <li>Be patient and take turns when using the tablets.</li>
                <li>
                    Discuss and work as a group to come out with ideas for their story,
                    to turn their story into an animated story using ScratchJr,
                    and to present their story to the class.
                </li>
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
                    window.location.href = "{{ route('storySelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('storySelection') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
