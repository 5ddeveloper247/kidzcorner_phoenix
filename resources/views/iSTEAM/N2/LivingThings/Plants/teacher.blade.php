@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
 {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Are Plants Living things</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn that plants are living things</li>
                <li>Explore and learn that plants have the same the basic characteristics
                    of living things as animals</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>Seeds</li>
                    <li>Plants</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start t-slide">
        <div>
            <h2 class="t-title">Preparations For Class Activity 1</h2>
            <ul class="list-disc ">
                <li>For the experiment that shows plants breathe, you will need to prepare the following materials:
                    <ul>
                        <li>A large clear bowl with lukewarm water</li>
                        <li>A big leaf from a plant</li>
                        <li>A stone or marble to be placed on top of the leaf so that the leaf is fully submerged under the
                            water</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="t-title ">Preparations For Class Activity 2</h2>
            <ul class="list-disc list-inside space-y-2 mt-2">
                <li>Teacher should have two identical type potted plants. These can be bought or planted a couple of weeks
                    before. The plants used in this experiment were planted from the red bean (Adzuki bean).</li>
                <li>Prepare an opaque box so that no light can get to the plant in the box.</li>
            </ul>
        </div>
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white justify-start text-start t-slide">
        <div>
            <h2 class="t-title">Some things to note for Class Activity 2</h2>
            <ul class="list-disc ">
                <li> Compare the plant after 7 days or more. Some plants may still be able to
                    survive in the box but it will not grow as well as the one outside.
                    Measure the height of the plants and the size of the leaves during the
                    comparison. Please refer to the following pages as reference.</li>

                <li>It may take 20 days for the plant in the box to die
                    (dry up). You can have more than one session for this
                    activity. Do remember to continue to care for
                    the plant outside so that the experiment is accurate</li>

                <li>Refer to the following slides to see the results.</li>
                <li>Encourage children to share their thoughts as they compare the two plants.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white justify-start text-start t-slide">
        <div>
            <h2 class="t-title">Some things to note for Class Activity 2</h2>
            <ul class="list-disc ">
                <li> Compare the plant after 7 days or more. Some plants may still be able to
                    survive in the box but it will not grow as well as the one outside.
                    Measure the height of the plants and the size of the leaves during the
                    comparison. Please refer to the following pages as reference.</li>

                <li>It may take 20 days for the plant in the box to die
                    (dry up). You can have more than one session for this
                    activity. Do remember to continue to care for
                    the plant outside so that the experiment is accurate</li>

                <li>Refer to the following slides to see the results.</li>
                <li>Encourage children to share their thoughts as they compare the two plants.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 5 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class=" title stroke">Comparing Plant ‘A’ and Plant ‘B’ <br>
            Measure the heigh of Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt74.png') }}" />
        <p class="note">Note: Teacher to assist in measuring the plant.</p>
    </div>


    {{-- sldie 6 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke stroke ">Take plant B out from the box and measure it’s height.</h2>
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/lt75.png') }}" class="large-img4" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt74.png') }}" class="large-img4" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke ">Take plant B out from the box and measure it’s height.</h2>

        <img src="{{ asset('assets/images/N2/LivingThings/lt72.png') }}" />
    </div>


    {{-- slide 8 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke ">Plant B has also grown taller after 1 week!</h2>

        <img src="{{ asset('assets/images/N2/LivingThings/lt76.png') }}" />
    </div>


    {{-- slide 9 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke ">Let’s compare plants A and B side by side.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt77.png') }}" />
        <p class="note">Note: Teacher to explain that the height seen is not accurate as Plant B is not in soil.
            Encourage children to point out the differences.</p>
    </div>


    {{-- sldie 10 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke ">The leaf on Plant A is bigger than the leaf on Plant B.
            There are also more leaves on Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt78.png') }}" />
    </div>


    {{-- sldie 11 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke ">With sunlight, soil and water, Plant A can make food
            and grow bigger.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt77.png') }}" />
    </div>

    {{-- sldie 12 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke ">Without sunlight, soil and water, Plant B cannot make food
            and it does not grow as big as Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt77.png') }}" />
    </div>

    {{-- sldie 13 --}}
    <div class="text-white flex flex-col text-start items-center t-slide text-2xl slide hidden">
        <h2 class="title stroke ">Without sunlight, soil and water, Plant B cannot make food
            and it does not grow as big as Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt79.png') }}" />
    </div>


    {{-- slide 14 --}}
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


    {{-- slide 15 --}}
    <div class="text-white flex flex-col text-start items-center t-slide items-center justify-center text-2xl slide hidden">
        <h2 class="title stroke stroke">Learning Centre Idea</h2>
        <div class="flex ">
            <div>
                <h2 class="!text-white title stroke">Our Class Plant</h2>
                <h2 class="t-title ">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place a water spray and magnifying glass next to the potted plant. Provide writing materials.</li>
                </ul>
                <br>
                <h2 class="t-title ">What to do:</h2>
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
                        "{{ route('PlantsSelection') }}";  
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
