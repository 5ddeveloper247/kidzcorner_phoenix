@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Water a Plant Machine</h2>

    {{-- sldie 23  --}}
    <div class="flex !text-white flex-col t-slide justify-center  text-start">
        <h2 class=" t-title  ">Children will be able to:</h2>

        <ul class="list-disc">
            <li>Set up a Rube Goldberg Machine that includes a simple machine - pulley</li>
            <li>Explore and Learn about wheel and axle</li>
            <li>Develop understanding through inquiry</li>

            <h2 class=" t-title  ">Keywords:</h2>
            <li>Rube Goldberg Machine</li>
            <li>Pulley</li>
            <li>Inclined Plane</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 24 --}}

    <div class="flex !text-white flex-col t-slide justify-start items-center text-start">
        <div class="flex gap-[2vw] ">
            <ul class="list-disc  ">
                <li class="list-none">Preparations:</li>
                <li>2 marbles</li>
                <li>1 paper towel tube</li>
                <li>1 inclined plane track (set up with suitable materials)</li>
                <li>1 pulley</li>
                <li>1 plastic container</li>
            </ul>

            <ul class="list-disc">
                <li>1 plastic cup</li>
                <li>1 potted plant</li>
                <li>1 tissue box</li>
                <li>Some books</li>
                <li>String</li>
                <li>Water</li>
                <li>Adhesive tape</li>
            </ul>
        </div>
        <img class="img-md" src="/assets/images/K1/sm/plant-machine/pl1.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 26 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start">
        <div class="text-start">

            <h2 class="t-title">Things to consider for preparations:</h2>
            <ul class="list-disc  ">
                <li>Before the lesson, form a pulley as shown: tie a string to a container.</li>
            </ul>
        </div>

        <img src="/assets/images/K1/sm/plant-machine/pl6.png" class="img-h-md" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 26 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start">
        <div class="text-start">

            <h2 class="t-title">Things to consider for preparations:</h2>
            <ul class="list-disc  ">
                <li>Before the lesson, form a pulley as shown: wrap the string around
                    a pulley and wind it around the base of a cup. Fix the winded string
                    on the cup with some tape.</li>
            </ul>
        </div>
        <img class="img-xl" src="/assets/images/K1/sm/plant-machine/pl5.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 27 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start">
        <div class="text-start">
            <h2 class="t-title">Things to consider for preparations:</h2>
            <ul class="list-disc  ">
                <li>Before the lesson, form a pulley as shown: use strings to tie the cup
                    to the support.</li>
            </ul>
        </div>
        <img class="img-xl" src="/assets/images/K1/sm/plant-machine/pl5.png" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{--  slide 28 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center  text-start">
        <div class="text-start">
            <h2 class=" t-title  ">Things to consider for preparations:</h2>
            <ul class="list-disc">
                <li>You may provide a toy track or handmade track for children to set up the
                    machine, as long as the track is sturdy enough to support the weight
                    and size of the marble. Alternatively, you may add support such as a
                    stiff board at the bottom of the track</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/plant-machine/pl7.png" class="img-md" />
    </div>


    {{--  slide 29 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start">
        <div class="text-start">
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children share and try out their ideas. Some possible
                    questions are listed in the lesson, you may add on questions based on children's</li>
                <li>Fix the pulley to a strong support. Be careful of safety at all times.</li>
                <li>Remember to continue with reflection part after hands-on session.</li>
            </ul>
        </div>
    </div>


    {{--  slide 30 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center  text-start">
        <div class="text-start">
            <h2 class=" t-title  ">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to use a tissue box and some books to raise the height and
                    create inclined tracks with a paper roll and a track.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/plant-machine/pl8.png" class="img-lg" />
    </div>


    {{--  slide 31 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center  text-start">
        <div class="text-start">
            <h2 class=" t-title  ">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to do these: to position the container, consider the height of the</li>
                <li>container and its distance from the table such that the marbles would fall in it;</li>
                <li>place the plant under the cup such that water would pour on it when the cup tilts.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/plant-machine/pl9.png" class="img-md" />
    </div>


    {{-- sldie 32 --}}
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



    {{--  slide 33 --}}
    <div class="flex !text-white flex-col t-slide justify-start text-start">
        <h2 class="title stroke text-center ">Learning Centre Idea </h2>
        <div>
            <h2 class="text-[2vw] text-white stroke">Tilt a Cup Machine</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul class="!text-start">
                <li>Place things as listed in preparations here. Replace the potted plant with an empty container and the
                    water will small pom-poms.</li>
            </ul>
        </div>
        <div>

            <h2 class=" t-title  ">What to do:</h2>
            <ul>
                <li>Set up a Rube Goldberg Machine that will always tilt a cup
                    successfully.</li>
            </ul>
        </div>
    </div>



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
                    window.location.href = "{{ route('PlantsMachine') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('PlantsMachine') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
