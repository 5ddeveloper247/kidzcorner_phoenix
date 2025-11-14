@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Different Directions</h2>

    {{-- sldie 1  --}}
    <div class="flex !text-white flex-col justify-start text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that directional signs give us instructions on where to go</li>
                <li>Identify forward, backward, left and right directions </li>
                <li>Learn directions through singing and doing actions</li>
                <li>Move according to directional signs</li>
                <li>Develop understanding through observation and inquiry</li>
            </ul>
        </div>

        <div>
            <!-- Keywords -->
            <h2 class="t-title  ">Keywords:</h2>
            <div class="flex items-center gap-x-10">
                <ul class="list-disc">
                    <li>Directional Sign</li>
                    <li>Arrow</li>
                    <li>Direction</li>
                    <li>Instructions</li>
                </ul>
                <ul class="list-disc">
                    <li>Forward</li>
                    <li>Backward</li>
                    <li>Left</li>
                    <li>Right</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="hidden flex flex-col justify-start text-start t-slide !text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For extension class activity, use cardboard to prepare four directional
                    signs (forward, backward, left and right). Attach each to a stick for easy
                    use.
                </li>
            </ul>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs27.png') }}" alt="" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>

    {{-- slide 3 --}}
    <div class="hidden flex flex-col justify-start text-start t-slide !text-white">
        <div class="flex flex-col ">
            <ul class="list-disc">
                <h2 class=" t-title ">Things to note:</h2>
                <li>Ensure children have adequate space during the movement and action song.</li>
                <li>Allow children to attempt on their own before prompting.</li>
                <li>Repeat the action song if needed to get children acquainted with forward
                    and backward or left and right.</li>
            </ul>
        </div>
        <div class="flex justify-center">
            <ul class="list-disc">
                <h2 class=" t-title ">Possible questions during hands-on sessions:</h2>
                <li>What does this directional sign tell you?</li>
                <li>Where is the arrow pointing to?</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 4 --}}
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




    {{-- slide 5 --}}
    <div class="text-white flex flex-col justify-center text-start t-slide hidden">
        <h2 class="!text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Follow the Signs</h2>
            <h2 class=" t-title">What and how to set up:</h2>
            <ul class="list-disc">
                <li>Prepare four directional signs.</li>
            </ul>
            <img src="{{ asset('assets/images/N2/BasicCoding/bs27.png') }}" class="img-sm">

        </div>
        <div>

            <h2 class=" t-title">What to do:</h2>
            <ul>
                <li>During outdoor play or gym time, show children the
                    directional signs one at a time and have them move
                    accordingly during play. The children can take turns to
                    show the signs to their friends.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
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
                    window.location.href = "{{ route('DifferentDirectionsSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('DifferentDirectionsSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
