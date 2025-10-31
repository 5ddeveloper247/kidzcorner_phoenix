@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">How Does Plants drink Water?</h2>


    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand what the stem does for the plant</li>
                <li>Develop observation skills</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <div class="flex  gap-10">
                    <ul class="list-disc ">
                        <li>Plant</li>
                        <li>Flower</li>
                        <li>Stem</li>
                        <li>Leaf</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide ">
        <div>
            <h2 class=" t-title">Preparations for Class Activity:</h2>
            <ul class="list-disc ">
                <li>White flowers, plastic cups, food colouring and water.</li>
                <li>Cut the stems such that the flowers are taller than the cups.</li>
            </ul>
        </div>
        <div class="flex flex-col">
            <h2 class="t-title">Preparations for Class Activity:</h2>
            <ul class="list-disc">
                <li>Add a generous amount food colouring (at least 10 drops) into the
                    water. If not, you will not be able to see the change in colour
                    on the flowers.</li>
                <li>You should see the change after one day.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/Livingthings/lt37.png') }}" alt="Teacher" class="w-[400px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start t-slide ">
        <h2 class=" t-title">Things to consider Class Activity</h2>
        <ul class="list-disc ">
            <li>You can encourage children to mix the colours as an extended activity
                <div class="flex items-center ">
                    <img src="{{ asset('assets/images/N2/Livingthings/lt41.png') }}" alt="Teacher" class="!max-w-[10vw]" />
                    <img src="{{ asset('assets/images/N2/Livingthings/lt42.png') }}" alt="Teacher"class="!max-w-[10vw]" />
                </div>
            </li>
            <li>Take photos of the flowers when you spot changes. You may
                also prepare picture of the flower for the children to
                colour according to what they see.</li>
            <li>For example: daisy
                <img src="{{ asset('assets/images/N2/Livingthings/lt40.png') }}" alt="Teacher" class="!max-w-[10vw]" />
            </li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
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



    {{-- slide 5 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">Making Colourful Flower</h2>
                <h2 class=" t-title">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>
                        Provide white flowers and different food colouring colours in
                        different cups.
                    </li>
                </ul>
                <br>
                <h2 class=" t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li>Encourage children to experiment putting the flowers in
                        the different coloured water each day.</li>
                    <li>Observe how the colours formed on the flowers.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
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
                    window.location.href =
                        "{{ route('DrinkingSelection') }}";  
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
