@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Throw a Rubish Machine</h2>

    {{-- sldie 23  --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Set up a Rube Goldberg Machine that includes a simple machine - wheel and axle</li>
                <li>Explore and learn about wheel and axle</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Rube Goldberg Machine</li>
                <li>Wheel</li>
                <li>Axle</li>
                <li>Inclined Plane</li>
                <li>Force (push)</li>
                <li>Domino Effect</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>


    {{-- slide 24 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-start text-start">
        <h2 class="t-title">Preparations:</h2>
        <div class="flex gap-[10rem]">
            <ul class="list-disc">

                <li>Some books (some hardcover)</li>
                <li>8 dominoes</li>
                <li>1 toy car</li>
                <li>1 track</li>
            </ul>

            <ul class="list-disc">
                <li>1 newspaper ball </li>
                <li>1 dustbin </li>
                <li>1 table </li>
            </ul>
        </div>

        <img class=" !text-center large-img2" src="/assets/images/K1/sm/rubbish-machine/r13.png" />


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 25 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-center items-center  gap-[0.5rem] text-center">
        <ul class="list-disc !text-start">
            <h2 class="t-title">Things to consider for preparations:</h2>

            <li>Choose and provide a toy car that not too big but can move smoothly.</li>
            <li>You may provide a toy track or handmade track for children to set up
                the machine, as long as the track is sturdy enough to support the weight
                and size of the toy car.</li>

        </ul>

        <img class="large-img2" src="/assets/images/K1/sm/rubbish-machine/r13.png" />



        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{--  slide 26 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-center items-center  gap-[0.5rem] ">
        <ul class="list-disc !text-start">
            <h2 class="t-title">Things to consider for preparation:</h2>

            <li>Things to consider for preparation:
                As a reference, the track used in the lesson is formed with a vanguard sheet.
                The edge is folded and two tracks are put together to make it sturdy.</li>
        </ul>
        <img class="large-img2" src="/assets/images/K1/sm/rubbish-machine/r14.png" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>




    {{--  slide 27 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-center  text-start">
        <h2 class="t-title">Things to consider during hands-on session:</h2>
        <ul class="list-disc !text-start">

            <li>Ask questions to prompt children share and try out their ideas. Some possible <br>
                questions are listed in the lesson, you may add on questions based on children's <br>
                response.</li>
            <li>The steepness and length of an inclined track will affect how fast and <br>
                how far a car will go. If the inclined track is steep and long, the car will <br>
                go very fast and very far; as a result, the car will hit the newspaper <br>
                ball and drop into the dustbin together with the newspaper ball. If you <br>
                think children can take on another challenge, get them to set up the <br>
                machine in such a way that the car will not drop into the dustbin after <br>
                hit on the target.</li>
            <li>Remember to continue with reflection part after hands-on session.</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>





    {{--  slide 27 --}}
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



    {{-- slide 28 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-center gap-[3rem] text-start">


        <h2 class=" title stroke text-center">Learning Centre Idea</h2>

        <ul class=!text-white>
            <h2 >The Best Throw a Rubbish Machine</h2>
            <li>What and how to set up:</li>
            <li>Place things as listed in preparations here.</li>
        </ul>
        <ul>
            <h2 class="t-title">What to do:</h2>
            <li>Set up a Rube Goldberg Machine that will always throw rubbish <br>
                successfully.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- slide 29 --}}
    <div class=" slide flex text-2xl t-slide text-white flex-col justify-center gap-[3rem] text-start">


        <h2 class=" text-center title stroke ">Learning Centre Idea</h2>

        <ul class=!text-white>
            <h2 class="    !text-white  !text-start">Which toys have wheels and axles?</h2>

            <li>What and how to set up:</li>
            <li>Place a box filled with a variety of toys and an empty box here.</li>


        </ul>
        <ul>
            <h2 class="t-title">What to do:</h2>
            <li>1. Check on each toy and place all the toys with wheels and
                axles in the empty box.</li>
            <li>2. Show where the wheel and axle of each toy are.</li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>












    <div class="down-btn-container">
        <button class="doneButton">
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
                    window.location.href = "{{ route('RubbishSelection') }}";
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
