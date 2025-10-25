@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Smart Ideas for my Machine</h2>


    {{-- sldie 1 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn some ideas to set up different parts of the Rube
                    Goldberg Machine creatively</li>
                <li>Understand the concept of chain reaction</li>

            </ul>
        </div>
        <div>
            <h2 class="t-title font-bold">Keywords:</h2>
            <ul class="list-disc ">
                <li>Domino Effect</li>
                <li>Chain Reaction</li>
                <li>Simple Machine</li>
                <li>Inclined Plane</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start w-[75%]">
        <div>
            <h2 class="font-bold t-title">Preparations for Class Activity I:</h2>
            <div class="flex items-center justify-around w-full">
                <ul class="list-disc ">
                    <li>Dominoes</li>
                    <li>Ice cream sticks</li>
                    <li>Ping pong balls</li>
                </ul>
                <ul class="list-disc ">
                    <li>Tracks</li>
                    <li>Books of different sizes</li>
                    <li>Large wooden block</li>
                </ul>
            </div>
        </div>

        <img src="/assets/images/K1/cm/cm40.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex flex-col t-slide text-2xl text-white justify-start  text-start ">
        <div>
            <h2 class="font-bold t-title">Things to consider for preparations:</h2>
            <ul class="list-disc ">
                <li> You may provide toy tracks or handmade tracks for children to set up the
                    machine, as long as the tracks are sturdy enough to set up the ideas.</li>
                <li>As a reference, the tracks used in the lesson are each formed with a vanguard
                    sheet. The edge is folded and two tracks are put together to make it sturdy. </li>
            </ul>
        </div>
        <img src="/assets/images/K1/cm/cm41.png" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex flex-col t-slide text-2xl text-white justify-start  text-start ">
        <div>
            <h2 class="font-bold t-title">Things to consider during hands-on session for Ball Roll activity:</h2>
            <ul class="list-disc ">
                <li> Guide children to place the dominoes at a distance from the inclined plane so
                    that the ice cream stick on the last domino just touches the ball.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/cm/cm30.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex flex-col t-slide text-2xl text-white justify-start  text-start ">
        <div>
            <h2 class="font-bold t-title">Things to consider during hands-on session for Ball Roll activity:</h2>
            <ul class="list-disc ">
                <li> Guide children to adjust the slope of the big book with more/less books so
                    that the cup can turn and make the ball roll down into the lower track</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 6 --}}
    <div class=" slide flex flex-col t-slide text-2xl text-white justify-start  text-start ">
        <div>
            <h2 class="font-bold t-title">Things to consider during hands-on session for Ball Roll activity:</h2>
            <ul class="list-disc ">
                <li> A flap on the cardstock track was inserted in the book to hold the track
                    firmly on the book. You can also fix the track to the book with adhesive tape.</li>
            </ul>
        </div>
        <div class="flex items-center ">
            <img src="/assets/images/K1/cm/cm39.png" class="large-img" />
            <img src="/assets/images/K1/cm/cm42.png" class="large-img" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 7 --}}
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


    {{--  slide 8 --}}
    <div class="text-white flex flex-col t-slide items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">Smart Ideas For My Machine</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place things listed in preparations here. Display pictures of the
                        settings for the different ideas.</li>
                </ul>

                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li>Choose an idea and arrange the setting.</li>
                    <li>Test out the idea! Make adjustments so that your idea works each time!</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""class="absolute teacher-img1" />
        </div>
    </div>



    {{-- ================================================================================== --}}
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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('SmartIdeasSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1CompoundMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
