@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Hole Punching Machine</h2>

    {{-- sldie 1 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Set up a Rube Goldberg Machine that includes a simple machine - screw</li>
                <li>Learn about an example of screw - the nut and bolt</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Rube Goldberg Machine</li>
                <li>Screw</li>
                <li>Force (push)</li>
                <li>Domino Effect</li>
                <li>Inclined Plane</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}

    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  items-center  text-start">
        <div class="flex gap-5 justify-between">
            <div>
                <h2 class=" t-title">Preparations:</h2>
                <ul>
                    <li>1 nut and bolt</li>
                    <li>1 ball</li>
                    <li>1 inclined track </li>
                    <li>Books of different sizes</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>1 hole punch</li>
                    <li>Paper</li>
                    <li>Blu Tack, cardboard and adhesive tape</li>
                </ul>
            </div>
        </div>
        <img src="/assets/images/K1/sm/punching/pn13.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider for preparations:</h2>
            <ul class="list-disc">
                <li>You may provide a toy track or handmade track for children to set up the
                    machine, as long as the track is sturdy enough to support the weight and
                    size of the ball.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/punching/pn14.png" class="large-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{--  slide 4 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Ask questions to prompt children share and try out their ideas. Some possible questions are listed
                    in the lesson, you may add on questions based on children's</li>
                <li>Fix the pulley to a strong support. Be careful of safety at all times.</li>
                <li>Remember to continue with reflection part after hands-on session.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 5 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to place the track on the box as shown to create
                    an inclined plane.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/sm/punching/pn14.png" class="large-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 6 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to make a hole with a sharp object in the cardboard.
                    Fix a nut with double sided tape on the whole at the other side of
                    the cardboard. Pass a bolt through it as shown.</li>
            </ul>
        </div>

        <img src="/assets/images/K1/sm/punching/pn2.png" class="large-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 7 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to place the cardboard such that the bolt is near
                    to the ball. Fix the cardboard on the box with Blu Tack.</li>
            </ul>
        </div>

        <img src="/assets/images/K1/sm/punching/pn2.png" class="large-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 30 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  items-center  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on session:</h2>
            <ul class="list-disc">
                <li>Guide children to arrange books from small to big. The last book should be
                    heavy (you can also place two books together as shown). Place the hole
                    punch with the paper near the middle of the last book so that the book
                    falls on it.</li>
            </ul>
        </div>

        <div class="flex gap-1">
            <img class="large-img" src="/assets/images/K1/sm/punching/pn10.png" />
            <img class="large-img" src="/assets/images/K1/sm/punching/pn12.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 31 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start !text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex whitespace-nowrap">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex whitespace-nowrap">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 32 --}}

    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <h2 class="title stroke text-center">Learning Centre Idea</h2>
        <div>
            <h2 class=" t-title ">The Best Hole Punching Machine </h2>
            <ul class="list-none">
                <li>What and how to set up: </li>
                <li>Place things as listed in preparations here.</li>
            </ul>
        </div>

        <div>
            <h2 class=" ">What to do: </h2>
            <ul class="list-none">
                <li>Set up a Rube Goldberg Machine that will always punch holes in a
                    sheet of paper successfully.</li>
            </ul>
        </div>
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
                    window.location.href = "{{ route('PunchingSelection') }}";
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
