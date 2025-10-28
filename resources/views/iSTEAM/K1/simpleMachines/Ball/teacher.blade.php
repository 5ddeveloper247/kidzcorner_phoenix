@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Launch a Ball Machine</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Set up a Rube Goldberg Machine that includes a simple machine - <br> lever</li>
                <li>Learn about an example of screw - the nut and bolt</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>

            <div>
                <ul class="list-disc ">
                    <li>Rube Goldberg Machine</li>
                    <li>Lever</li>
                    <li>Force (push)</li>
                    <li>Domino Effect</li>
                    <li>Inclined Plane</li>
                    <li>Fulcrum</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center  text-start">
        <div class="flex gap-[5rem] ">
            <div>
                <ul>
                    <h2 class=" t-title">Preparations:</h2>

                    <li>1 rubber ball and 1 ping pong ball</li>
                    <li>1 track</li>
                    <li>7 books of different sizes and <br>
                        weights</li>
                </ul>
                </li>
            </div>

            <div>
                <ul class="list-disc">
                    <li>1 long wooden ruler</li>
                    <li>1 plastic spoon</li>
                    <li>5 dominoes</li>
                    <li>Some rubber bands</li>
                </ul>
            </div>
        </div>
        <img src="/assets/images/K1/sm/ball/ba16.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center text-start">
        <div>

            <h2 class=" t-title">Things to consider for preparations:</h2>
            <ul class="list-disc">
                <li>Before the lesson, form a lever: use some rubber bands to tie 5 dominoes
                    together, fix them at the middle below a wooden ruler and fix a plastic
                    spoon on one end of the ruler.</li>
            </ul>
        </div>

        <img src="/assets/images/K1/sm/ball/ba17.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider for preparations:</h2>
            <ul class="list-disc">
                <li>Before the lesson, fix the lever on one end of the table (or the activity area).
                    The fulcrum of the lever should not move, so you may use a very sticky double
                    sided adhesive tape or other suitable items to help you fix its position.</li>
            </ul>
        </div>

        <img src="/assets/images/K1/sm/ball/ba17.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center  text-start">
        <ul class="list-disc">
            <h2 class=" t-title">Things to consider for preparations:</h2>
            <li>You may provide a toy track or handmade track for children to set up the
                machine, as long as the track is sturdy enough to support the weight and size of
                the rubber ball.</li>
            <li>You may use a shelf or other things instead of a chair and a box to guide
                children form the inclined track.</li>
        </ul>

        <img src="/assets/images/K1/sm/ball/ba16.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider for preparations:</h2>
            <ul class="list-disc">
                <li>As a reference, the track used in the lesson is formed with a vanguard
                    sheet. The edge is folded and two tracks are put together to make it sturdy</li>
            </ul>
        </div>

        <img src="/assets/images/K1/sm/ball/ba18.png" class="large-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-flex-start items-start   text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>
                    Ask questions to prompt children share and try out their ideas. Some possible
                    questions are listed in the lesson, you may add on questions based on children's
                    response.</li>
                <li>Remember to continue with reflection part after hands-on session.</li>
            </ul>
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



    {{-- slide 8 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  items-start  text-start">
        <h2 class="title stroke text-center">Learning Centre Idea</h2>
        <ul>
            <h2 class=" t-title">The Best Launch a Ball Machine</h2>
            <li>
                What and how to set up:</li>
            <li>Place things as listed in preparations here.</li>
            <br><br>
            <h2 class="t-title">What to do:</h2>
            <li>Set up a Rube Goldberg Machine that will always launch a <br>
                ball successfully.</li>
        </ul>


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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('BallSelection') }}";
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
