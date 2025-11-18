@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- Slide 1 --}}
    <h2 class="top-title stroke">Reduce & Reuse</h2>


    {{-- sldie 1  --}}
    <div class="flex t-slide !text-white flex-col justify-center text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand what can be done to help Earth;</li>
                <li>Learn about the different ways to reduce and reuse waste</li>
                <li>Develop awareness of environmental issues</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start">
            <h2 class="t-title ">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Pollution</li>
                    <li>Air Pollution</li>
                    <li>Chemicals</li>
                    <li>Plastic</li>
                    <li>Reduce</li>
                    <li>Reuse</li>
                    <li>Recycle</li>
                    <li>disposable</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex t-slide !text-white flex-col justify-center text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>
                    Keep a collection of various recyclable items prior to this lesson.
                    Ensure that the recyclable items are washed, cleaned and dry for the art project.
                </li>
                <li>You may search online for inspiration on the type of artwork you and your children
                    would like to create.
                </li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 4 --}}
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



    {{-- sldie 3 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-center">
        <h2 class="title stroke text-center">Learning Centre Idea</h2>
        <div class="text-start">
            <div>
                <h2 class="text-[2vw] stroke !text-white">Create A Poster</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p> Provide art materials and books on reducing waste.</p>
            </div>
            <div>
                <h2 class="t-title"> What to do:</h2>
                <ol class="lesson-ul list-decimal">
                    <li>Encourage children to think of a message they want to tell others.</li>
                    <li>Prompt children to think of what they see in school e.g. to reduce wastage of paper, remind friends
                        to
                        draw on both sides. Or reduce wastage of food, remind friends to ask for smaller portion.</li>
                </ol>
            </div>
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
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach((s, i) => s.classList.toggle("hidden", i !== index));
                currentIndex = index;
                const isLast = index === slides.length - 1;
                if (nextBtn) nextBtn.style.display = isLast ? "none" : "block";
                if (doneBtn) doneBtn.style.display = isLast ? "block" : "none";
            }

            if (nextBtn) nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) showSlide(currentIndex + 1);
            });

            if (returnBtn) returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    window.location.href = "{{ route('reduceSelection') }}";
                } else {
                    showSlide(currentIndex - 1);
                }
            });

            if (doneBtn) doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('reduceSelection') }}";
            });

            showSlide(0);
        });
    </script>
@endpush
