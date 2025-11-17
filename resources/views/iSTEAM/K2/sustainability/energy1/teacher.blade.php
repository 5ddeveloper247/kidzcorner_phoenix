@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Clean Energy 1</h2>


    {{-- sldie 1  --}}
    <div class="flex t-slide !text-white flex-col justify-center text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of clean energy</li>
                <li>Learn about how clean energy can be used</li>
                <li>Develop awareness of environmental issues</li>
                <li>Develop curiosity and understanding through inquiry
                </li>

            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Coal</li>
                    <li>Natural Resources</li>
                    <li>Fuel</li>
                    <li>Sustainable</li>
                    <li>Pollution</li>
                    <li>Clean Energy</li>
                    <li>Solar Energy</li>
                    <li>Nature</li>
                    <li>Electricity</li>
                    <li>Heat</li>

                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex t-slide !text-white flex-col justify-center text-start">
        <div>
            <h2 class="t-title">Things to note for Class Activity 1</h2>
            <ul class="list-disc ">
                <li>
                    Use food items that are easy to see the changes when heated. Example: chocolate, marshmallow, cheese.
                    These items will melt.
                </li>
                <li>You may do this experiment twice with other food choices such as egg or bread. If
                    it doesn't cook, you
                    can explain<br>
                    that the DIY solar oven doesn't heat up enough to cook such food.</li>
                <li>
                    This activity can only be successful when the weather is hot and sunny.
                </li>
                <li>Please remind children not to eat the food items due to hygiene reasons.</li>
                <li>
                    Please note that the reflective side of the aluminium foil must face outwards when wrapping the box.
                </li>
                <li>
                    Set up the solar oven by following the steps in the following slides before the day of the activity.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="t-title">Preparation For Class Activity 1:</h2>
            <ol class="list-decimal pl-6">
                <li>Cut the cover of the box such that a flap is created.</li>
                <li>Wrap the flap with the reflective side of the aluminium foil facing out.</li>
                <li>Paste aluminium foil on the inner portions of the box such that the reflective side is shown.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e11.png') }}" class="img-lg" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 4 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="t-title">Preparation For Class Activity 1:</h2>
            <ol class="list-decimal pl-6" start="4">
                <li>Place a piece of black paper in the box.</li>
                <li>Paste a piece of cling wrap to cover the hole on the cover. Ensure all sides are sealed.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e11.png') }}" class="img-lg" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 5 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="t-title">Preparation For Class Activity 1:</h2>
            <ol class="list-decimal pl-6" start="6">
                <li>This is how it should look like after top is sealed with the cling wrap.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e13.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 6 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="t-title">Preparation For Class Activity 1:</h2>
            <ol class="list-decimal pl-6" start="7">
                <li>Now use the cling wrap to wrap another layer around the cover of the box. Use tape to seal the sides.
                </li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e14.png') }}" class="img-xl" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 7 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="t-title">Preparation For Class Activity 1:</h2>
            <ol class="list-decimal pl-6" start="8">
                <li>Make a hole at the side of the box.</li>
                <li>This is for the thermometer. You can check the temperature of the solar oven easily.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e15.png') }}" class="img-xl" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 8 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="t-title">Preparation For Class Activity 1:</h2>
            <ol class="list-decimal pl-6" start="10">
                <li>Place the food item on a plate and put it inside the box.</li>
                <li>Close the cover tightly and lift up the flap. Use a stick to hold the flap open such that sunlight is
                    able to shine on it.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/energy1/e16.png') }}" class="img-xl" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 9 --}}
    <div class="flex  t-slide !text-white flex-col items-center justify-center text-start">
        <div>
            <h2 class="t-title">Things to note for Class Activity 2</h2>
            <ul>
                <li>Purchase a solar-powered light or toy.</li>
                <li>This activity needs to be conducted on a sunny day. Alternatively, you can use
                    light bulbs but
                    it may not work with all types of solar-powered light/toy.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 10 --}}
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

    {{-- slide 11 --}}
    <div class="flex  t-slide !text-white flex-col items-center justify-center text-start">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <div>
                <h2 class="text-[2vw] stroke !text-white">Solar Powered Toy/Light</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p>Place the solar-powered toy/light at the learning corner and
                    encourage children to explore with it.</p>
            </div>
            <div>
                <h2 class="t-title">What to do:</h2>
                <ol class="list-decimal pl-6">
                    <li>Guide children to use different lights to shine on the solar panel and observe if the light or toy
                        will
                        react.</li>
                    <li>Provide paper to cover up part of the panel and put the toy/light in the sun. Does the size of the
                        panel
                        affect the toy/light?</li>
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
                    window.location.href = "{{ route('energy1Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('energy1Selection') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
