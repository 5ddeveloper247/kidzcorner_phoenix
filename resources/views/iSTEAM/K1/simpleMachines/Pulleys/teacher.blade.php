@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Pulleys to the Rescue</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the characteristics of a simple machine - pulley</li>
                <li>Understand the uses of a pulley</li>
                <li>Learn about the basic concept of force (pull)</li>
                <li>Understand that the use of a pulley makes it easier to lift heavy objects</li>
                <li>Understand that it is easier to lift an object using two pulleys fixed
                    only one pulley</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machine</li>
                <li>Pulley</li>
                <li>Force (Pull)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center   text-start">

        <ul class="list-disc">
            <h2 class="t-title">Preparations:</h2>
            <li>2 pulley systems (as shown; each set up with 1 or 2 pulleys, 1 rope,
                1 basket and 1 hook)</li>
            <li>A stand to set up the pulley systems</li>

            <li>Some heavy objects, such as books for lifting</li>
        </ul>
        <img class="large-img" src="/assets/images/K1/sm/pulley/pu30.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center   text-start">
        <div class="text-start">
            <h2 class="t-title">To carry out a successful experiment:</h2>
            <ul class="list-disc">
                <li>Set up the first pulley system (with only one pulley as shown).</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/pulley/pu31.png" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>




    {{--  slide 26 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center   text-start">

        <h2 class="t-title">To carry out a successful experiment:</h2>
        <ul class="list-disc">
            <li>Ensure that the rope fits exactly into the groove of the pulley, so
                that the rope can move smoothly, when pulled.</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pu19.png" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{--  slide 27 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center   text-start">
        <h2 class="t-title">To carry out a successful experiment:</h2>
        <ul class="list-disc">
            <li>Set up the second pulley system (with two pulleys as shown).</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pu32.png" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{--  slide 27 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center   text-start">
        <h2 class="t-title">To carry out a successful experiment:</h2>
        <ul class="list-disc">
            <li>Ensure that the rope fits exactly into the groove of the two pulley, so
                that the rope can move smoothly, when pulled.
            </li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pu33.png" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- slide 28 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center   text-start">
        <h2 class="t-title">To carry out a successful experiment:</h2>
        <ul class="list-disc">
            <li>You may need to make your stand stable with some support (some heavy
                printer paper boxes were used in this demonstration).</li>
        </ul>
        <img src="/assets/images/K1/sm/pulley/pu34.png" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>





    {{-- slide 29 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center   text-start">
        <div class="flex gap-3  items-center justify-center">
            <div>
                <h2 class="title stroke text-1xl">Is it easier to lift a heavy object
                    with our hands or using a pulley?</h2>
                <img class="large-img" src="/assets/images/K1/sm/pulley/pu20.png" />
            </div>

            <div>
                <h2 class="title stroke text-1xl">Is it easier to lift a heavy object
                    using one pulley or two pulleys?</h2>
                <img class="large-img" src="/assets/images/K1/sm/pulley/pu22.png" />
            </div>

        </div>
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.</p>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 30 --}}
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


    {{-- slide 31 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-center  text-start">
        <h2 class="title stroke ">Learning Centre Idea</h2>
        <ul>
            <li>Fun With Pulleys</li>
            <li>What and how to set up:</li>
            <li>Place the two pulley systems at the water play area and replace</li>
            <li>the basket with a small pail. Tie another rope to the pail as well.</li>
        </ul>

        <ul>
            <li>What to do:</li>
            <li>1. Take turns to pull the rope of a pulley system to lift up the pail
                of water.</li>
            <li>2. Pull the other rope on the pail to tilt the pail and pour out the
                water! Enjoy the water play.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
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
                    window.location.href = "{{ route('PulleysSelection') }}";
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
