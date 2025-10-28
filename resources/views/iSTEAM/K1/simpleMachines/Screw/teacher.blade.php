@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">How Does A Screw Work?</h2>


    {{-- sldie 23  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore items with lights</li>
                <li>Develop awareness of natural and man-made light sources</li>
                <li>Understand how lights are useful to us and where lights can be found</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div>

            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machine</li>
                <li>Screw</li>
                <li>Thread</li>
                <li>Archimedes'screw</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 24 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start ">
        <div>
            <h2 class=" t-title">Preparations</h2>
            <ul class="list-disc ">
                <li>1 large, plastic and transparent container</li>
                <li>1 small, plastic and transparent container</li>
                <li>1 cardboard tube covered with coloured paper</li>
                <li> Further cover it with transparent cling wrap</li>
                <li>Clear plastic tubing</li>
                <li>Food colouring</li>
                <li>Clear tape</li>
                <li> Water</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/a1.png') }}" class="large-img" alt="Teacher" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- Slide 25 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start ">
        <div>
            <ul>
                <h2 class="t-title">How to make an Archimedes’ screw and things to consider:</h2>
                <li>1.Wrap the plastic tubing around the tube and secure with tape.</li>
            </ul>

            <img src="{{ asset('assets/images/pptimages/a2.png') }}" class="large-img" alt="Teacher" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- Slide 25 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start gap-y-5 text-start ">

        <ul>
            <h2 class="t-title">How to make an Archimedes’ screw and things to consider:</h2>
            <li> 2. Put some water in a large container and add food colouring</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/a3.png') }}" class="large-img" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 25 --}}
    <div class="slide flex  flex-col t-slide justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="flex">
                        If you see
                        <span class="info-btn">

                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li class="flex">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
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
                        Click on this <span class=" t-title">shortcut icon</span>
                        <span><img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />

        </div>

    </div>


    {{--  slide 26 --}}
    <div class=" slide text-white flex flex-col t-slide justify-start text-start text-2xl">
        <h1 class=" ">Let’s sort!</h1>
        <div>
            <h2 class=" t-title">Preparations for Class Activity I:</h2>
            <p>Place pictures of various items such as pot of plant, bottle, shoe, sock, box, elephant, lamp, light
                bulb,

                sun, stars, lightning, firefly, ceiling light, handphone, TV.</p>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">What to do:</h2>
                <ul>
                    <li>
                        <strong>*</strong> Invite children to pick up pictures and sort them into groups:
                        <ul class="mt-2 list-[lower-alpha] space-y-1 pl-6">
                            <li>Gives light or Does not give light</li>
                            <li>Natural light or Man-made light</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />

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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('ScrewSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1simpleMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
