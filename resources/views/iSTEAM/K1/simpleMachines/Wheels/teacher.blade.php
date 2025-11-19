@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What are wheels and Axles</h2>

    {{-- sldie 1 --}}
    <div class="flex t-slide !text-white flex-col justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the characteristics of a simple machine - <br> wheel and axle</li>
                <li>Understand the uses of the wheel and axle</li>
                <li>Learn how to make a water wheel and know how it works</li>
                <li>Understand that flowing water makes the wheel and axle of <br> the water wheel turn</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machine</li>
                <li>Wheel</li>
                <li>Axle</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex t-slide !text-white flex-col items-center justify-start  text-start">

        <h2 class=" t-title  ">Preparations:</h2>
        <ul class="list-disc ">
            <li>1 big container</li>
            <li> A few bottles of water</li>
            <li>4 binder clips</li>
        </ul>
        <img class="img-sm" src="/assets/images/K1/sm/wheels/we24.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">
        <ul class="list-disc">
            <h2 class=" t-title  ">Preparations:</h2>
            <li>Each child: 1 Styrofoam disc, 6 plastic spoons, 1 long stick and 1
                circular template [refer to the next page]</li>
            <li>1 roll of packing film or adhesive tape</li>
        </ul>

        <img class="img-sm" src="/assets/images/K1/sm/wheels/we22.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{--  slide 26 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">
        <ul>
            <h2 class=" t-title  ">How to make a spoon water wheel and things to consider:</h2>
            <li>i. Mark 6 even points on the rim of a styrofoam disc with the help of a circular<br>
                template. [Print out the circular template on the next page, one for each child.<br>
                To do this step successfully, put the circular template at the bottom of the disc<br>
                (match with the inner circle) and use the lines as guide to do the markings.]</li>
        </ul>

        <img src="/assets/images/K1/sm/wheels/we17.png" class="img-sm" />
    </div>


    {{-- slide 27 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">
        <h2 class=" t-title ">Circular Template:</h2>
        <img src="/assets/images/K1/sm/wheels/we25.png" class="img-sm" />
    </div>


    {{--  slide 28 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">
        <div class="text-start">
            <h2 class=" t-title  ">How to make a spoon water wheel and things to consider:</h2>
            <ul>
                <li>ii. Put 6 spoons into the rim of the disc by referring to the markings made. <br>
                    [To dothis step successfully, please use spoons with a small handle and <br>
                    supervise children to do it carefully. For the sample done here, around 1 <br>
                    inch of the spoon handle are in the rim of the disc.]</li>
            </ul>
        </div>

        <div class="flex gap-[1vw]">
            <img src="/assets/images/K1/sm/wheels/we26.png" class="img-sm" />
            <img src="/assets/images/K1/sm/wheels/we27.png" class="img-sm" />
        </div>
    </div>




    {{--  slide 29 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">
        <div class="text-start">

            <h2 class=" t-title  ">How to make a spoon water wheel and things to consider:</h2>
            <ul>
                <li>iii. Put a stick through the centre of the disc with the help of the circular <br>
                    template. [To do this step successfully, put the circular template on top <br>
                    of the disc (match with the inner circle) and aim at the centre point when <br>
                    you poke the stick into the disc.]</li>
            </ul>
        </div>

        <div class="flex gap-[1vw]">
            <img src="/assets/images/K1/sm/wheels/we28.png" class="img-sm" />
            <img src="/assets/images/K1/sm/wheels/we29.png" class="img-sm" />
        </div>
    </div>



    {{--  slide 30 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">

        <div class="text-start">
            <h2 class=" t-title  ">How to make a spoon water wheel and things to consider:</h2>
            <ul>
                <li>iv. Use packing film or adhesive tape to firm up the design. [To do this step <br>
                    successfully, have each child work together with a friend and help each other <br>
                    to do so.]</li>
            </ul>
        </div>

        <div class="flex gap-[1vw]">
            <img src="/assets/images/K1/sm/wheels/we20.png" class="img-sm" />
            <img src="/assets/images/K1/sm/wheels/we30.png" class="img-sm" />
        </div>
    </div>


    {{--  slide 31 --}}
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">
        <div class="text-start">
            <h2 class=" t-title  ">Things to consider for the test of the water wheel:</h2>
            <ul class="list-disc">
                <li>The size of all the materials shown are as below. If you need to use other
                    sizes, please scale accordingly.</li>
                <li>The binder clips are used as stoppers to prevent the axle (stick) of the
                    water wheel from moving around.</li>
            </ul>
        </div>

        <img src="/assets/images/K1/sm/wheels/we31.png" class="img-xl" />
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
    <div class="flex t-slide !text-white flex-col justify-start items-center  text-start">

        <h2 class="title stroke text-center">Learning Centre Idea</h2>
        <div>
            <h2 class="text-[2vw] text-white stroke">Where is the wheel and axle?</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul class="!text-start">
                <li>Place a variety of common things with wheel and axle here. Some
                    examples are scooter, stroller fan, paint roller, clock, pizza cutter,
                    tap, door knob and screwdriver.</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">What to do:</h2>
            <ul>
                <li>Look at each item. Show where the wheel and axle of each item are.</li>
            </ul>
        </div>
    </div>



    {{-- ======================= --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row -90">

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
                    window.location.href = "{{ route('WheelsSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('WheelsSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
