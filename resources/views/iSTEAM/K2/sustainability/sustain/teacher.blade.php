@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">What is Sustainability?</h2>


    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of sustainability</li>
                <li>Learn about how sustainability can help earth</li>
                <li>Develop awareness of environmental issues</li>
                <li>Develop curiosity and understanding through inquiry</li>

            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex gap-[1.5vw] items-start">
                <ul class="list-disc ">
                    <li>Global Warming</li>
                    <li>Sustainability</li>
                    <li>Earth</li>
                    <li>Temperature</li>
                    <li>Greenhouse Gases</li>
                </ul>

                <ul class="list-disc ">
                    <li>Coal</li>
                    <li>Natural Resoursce</li>
                    <li>Fuel</li>
                    <li>Atmosphere</li>
                </ul>

                <ul class="list-disc ">
                    <li>Glacier</li>
                    <li>Oxygen</li>
                    <li>Carbon Dioxide</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>
                    3 bottles of the same size - cut out one side of the bottle to create an<br>
                    opening for all the 3 bottles (as shown)
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a15.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  !text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>For bottle A, plant some seeds 2-3 weeks before the activity</li>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/images/K2/sustain/sustainability/a16.png') }}" class="large-img4" />
                    <img src="{{ asset('assets/images/K2/sustain/sustainability/a17.png') }}" class="large-img4" />
                </div>
                <li>For the example above, green beans and cat grass were planted about 1-2 weeks
                    before the experiment.
                    Please soak seeds before planting for higher success rates.</li>
                <li>t is important that the plants grow from the soil so that the roots will hold onto
                    the soil for the
                    experiment to be successful.</li>
                <li>You may want to drill some holes for the excess water to sip out to avoid drowning
                    your seeds/plants.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-decimal">
                <li>For bottle B, fill half the bottle with soil and add dried leaves and twigs on
                    top of the soil (do not put too much such that water cannot reach the soil
                    at all)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a18.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex t-slide !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-decimal">
                <li>For bottle C, just fill half the bottle with soil.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to take note prior the class activity:</h2>
            <ul class="list-disc">
                <li>If you have drilled holes in the first bottle for the plants, please tape it up
                    with masking tapes to
                    avoid water sipping through the holes during the experiment.</li>
                <li>Place a block at end of the bottles to elevate so that the water can flow easily
                    towards the mouth of
                    the bottle.</li>
                <li>Secure the cups below the mouth of the bottles to avoid spillage.</li>
                <li>Do try pouring water into the first bottle first before showing the experiment to
                    the children.<br>
                    This is to test if your plants have grown enough roots to hold onto the soil. In real life, trees<br>
                    grow over a long time and their roots will hold firmly to the ground. But our plants are small and <br>
                    the roots may not be as strong over such a short period of time.</li>
                <li>Do place cloth or paper towels under the first bottle as some leakage from the
                    holes is<br>
                    expected even though masking tape has been used.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to take note prior the class activity:</h2>
            <ul>
                <li>Do expect muddy coloured water to flow out from the first bottle.</li>
                <li>When comparing, you will see that there are some soil/dirt that flows into cup 2.
                    Cup 3 has the most soil.</li>
                <li>This can be used to conclude that the roots were able to hold on to most of the
                    soil as compared
                    to the other two bottles.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a19.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 7 --}}
    <div class=" slide t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="flex whitespace-nowrap">If you see
                    <span>
                        <img src="{{ asset('assets/images/pptimages/video.png') }}" class="!max-w-[2.5vw]" />
                    </span>
                    next to a
                    picture, click on the picture to watch the video
                </li>
                <li> Always ask questions to encourage children to think and share their ideas first
                    before giving out any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.
                </li>
                <li>Print out the Learning Journal (if any) for every
                    child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="!max-w-[2.5vw]" />
                    </span>
                    if you need to go to some
                    parts of the lesson quickly.
                </li>


            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 7 --}}
    <div class=" slide t-slide flex  !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">When Glaciers Melt</h2><br>
            <p class="note">What and how to set up:<br>
                Print out pictures of natural resources such as tree, coal, cow, fish,<br>
                stone, iron etc. Print items that are not natural resources such as<br>
                plastic bag, shoe, straws, toy, water bottles etc.<br>

                What to do:<br>
                Invite children to look at each picture and sort them out if the<br>
                item is from nature or not.<br>
                Encourage children to think what can the natural resources be<br>
                made into.</p>
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
                    window.location.href = "{{ route('sustainSelection') }}";
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
