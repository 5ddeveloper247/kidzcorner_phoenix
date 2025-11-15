@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">How do Plants Grow?</h2>

    {{-- sldie 1  --}}
    <div class="flex  t-slide !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to grow a plant from a seed</li>
                <li>Observe how plants grow</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Seeds</li>
                <li>Plants</li>
                <li>Grass</li>
                <li>Trees</li>
                <li>Flowers</li>
                <li>Soil</li>
                <li>Nut</li>
                <li>Beans</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex flex-col  t-slide justify-center !text-white  text-start ">

        <div>
            <h2 class=" t-title">Preparations for Class Activity:</h2>
            <ul class="list-disc ">
                <li>A packet of potting soil</li>
                <li>An empty pot</li>
                <li>Beans for planting</li>
                <li>Beans which have been soaked</li>
                <li>Water</li>

            </ul>
        </div>

        <div>
            <h2 class=" t-title">Things to consider Class Activity:</h2>
            <ul class="list-disc">
            <li>Teacher to soak the beans at least a night before planting them.Ensure that the pot is placed near a
                window or in the outdoors.</li>
                <li>When watering the soil, pour the water in the pot until you see water seeping out from the bottom of the
                    pot. Ensure that the soil is damp, not soaked.</li>
                    <li>Water the plant only when the soil is dry.</li>
                    <li>Teacher can plant a few more in case one does not grow, as at least 2 more plants are needed for future
                        activities.</li>
                    </ul>
                </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
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




    {{-- slide 4 --}}
    <div class="text-white flex flex-col text-start items-center justify-center  t-slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div class="flex ">
            <div>
                <h2 class="!text-white text-[2vw] stroke">Our Class Plant</h2>
                <h2 class=" t-title">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place a water spray and magnifying glass next to the potted plant.
                        Provide writing materials.</li>
                </ul>
                <br>
                <h2 class=" t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li> Invite children to spray a bit of water on the soil if
                        the soil is dry.</li>
                    <li> Encourage children to observe for changes to the
                        seed and draw what they see.</li>
                </ul>

            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>

    </div>



    {{-- =============== --}}
    {{-- Done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- next Button --}}
    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
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

@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            //   Show a given slide by index
            const showSlide = (index) => {
                slides.forEach((slide, i) => slide.classList.toggle("hidden", i !== index));

                const isLastSlide = index === slides.length - 1;

                // Toggle NEXT and DONE
                nextButtons.forEach(btn => btn.classList.toggle("hidden", isLastSlide));
                if (doneButton) doneButton.classList.toggle("hidden", !isLastSlide);
            };

            //   NEXT
            nextButtons.forEach(btn =>
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                })
            );

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href = "{{ route('PlantsGrowthSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            //   DONE → redirect
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('PlantsGrowthSelection') }}";
                });
            }

            //   Initialize first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
