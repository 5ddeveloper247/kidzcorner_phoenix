@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Pop a Balloon Machine</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide ">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Set up a Rube Goldberg Machine that includes a simple machine – <strong>wedge</strong></li>
                <li>Learn about the basic concept of force (<strong>push</strong>)</li>
                <li>Develop understanding through <strong>inquiry</strong></li>
            </ul>
        </div>

        <div class="flex  items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>

                <ul class="list-disc ">
                    <li>Rube Goldberg Machine</li>
                    <li>Wedge</li>
                    <li>Inclined Plane</li>
                    <li>Force (push)</li>
                    <li>Domino Effect</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide ">
        <div>
            <h2 class=" t-title  !text-white">Preparations:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Some dominoes</li>
                    <li>1 marble</li>
                    <li>1 inclined track (set up with suitable materials)</li>
                    <li>1 rod (can use a narrow cardboard roll stuffed with newspaper)</li>
                    <li>1 needle (held in centre of rod with newspaper and play dough)</li>
                    <li>A few dominoes (tied together to raise the height of the rod)</li>
                    <li>A few inflated balloons</li>
                    <li>1 suitable container</li>
                    <li>1 big box</li>
                    <li>Adhesive tape</li>
                </ul>

                <img src="{{ asset('/assets/images/K1/sm/balloon/ballon5.png') }}" class="large-img2 float-end pr-[5vw]" />

            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  text-start t-slide ">
        <div class="text-start">
            <h2 class=" t-title  !text-white">Things to consider for preparation:</h2>
            <ul class="list-disc ">
                <li>You may provide a toy track or handmade track for children to set up the
                    machine, as long as the track is sturdy enough to support the weight
                    and size of the marble.</li>
            </ul>
        </div>

        <img class=" !text-end large-img2" src="{{ asset('/assets/images/K1/sm/balloon/ballon5.png') }}" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  text-start t-slide ">
        <div class="text-start">
            <h2 class=" t-title  !text-white">Things to consider for preparation:</h2>
            <ul class="list-disc ">
                <li>As a reference, the track used in the lesson is formed with a vanguard sheet.
                    The edge is folded and two tracks are put together to make it sturdy.</li>
            </ul>
        </div>

        <img class=" !text-end large-img2" src="{{ asset('/assets/images/K1/sm/balloon/ballon13.png') }}" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}

    <div class=" slide flex text-2xl text-white flex-col items-center  text-start t-slide ">
        <div>
            <h2 class=" t-title ">Things to consider for preparation:</h2>
            <ul class="list-disc ">
                <li>Stuff crushed newspaper in a paper roll to make it sturdy. Make sure the needle is
                    in the centre of the rod. You may use newspaper and some play dough to fix the
                    needle in place.</li>
            </ul>
        </div>
        <img class=" !text-end large-img2" src="{{ asset('/assets/images/K1/sm/balloon/ballon14.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  text-start t-slide ">
        <div class="text-start">
            <h2 class=" t-title">Things to consider for preparation: </h2>
            <ul class="list-disc  ">
                <li>Ask questions to prompt children to share and try out their ideas. Some
                    possible questions are listed in the lesson, you may add on questions based
                    on children's response.</li>
                <li class="text-red-500">Since the needle is sharp, kindly ensure that children are aware of the
                    danger of getting hurt. Be mindful of safety at all times.</li>
                <li>Remember to continue with reflection part of the lesson after the
                    hands-on session.</li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  text-start t-slide ">
        <div class="text-start">
            <h2 class=" t-title ">Things to consider during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Guide children to use a big box or other suitable materials to create a platform for
                    domino arrangement and forming of inclined track.</li>
            </ul>
        </div>

        <img class=" !text-end large-img2" src="{{ asset('/assets/images/K1/sm/balloon/ballon15.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  text-start t-slide ">
        <div class="text-start">
            <h2 class=" t-title ">Things to consider during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Guide children to fix the balloon in a suitable container with tape. Ensure that
                    the balloon does not move by fixing the container with tape to the stool and
                    the side of the table
                </li>

            </ul>
        </div>
        <img class=" !text-end large-img2" src="{{ asset('/assets/images/K1/sm/balloon/ballon16.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  text-start t-slide ">
        <div class="text-start">
            <h2 class=" t-title ">Things to consider during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Guide children to raise the rod (if needed) with the help of dominoes, so that
                    the needle is aimed at the middle of the balloon
                </li>

            </ul>
        </div>
        <img class=" !text-end large-img2" src="{{ asset('/assets/images/K1/sm/balloon/ballon17.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 8 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start text-white">
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



    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center ">
        <h2 class="title stroke ">Learning Centre Idea</h2>
        <div class="text-start t-slide  flex flex-col gap-10">
            <ul>
                <h2 class=" t-title  !text-white">Poke a Play Dough Ball Machine</h2>
                <li>Guide children to raise the rod (if needed) with the help of dominoes, so that
                    the needle is aimed at the middle of the balloon
                </li>
            </ul>

            <ul>
                <h2 class=" t-title  !text-white">What to do:</h2>
                <li>Set up a Rube Goldberg Machine that will always poke a ball of
                    play dough successfully.</li>
            </ul>
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

        <button class="nextButton ">
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
                    window.location.href = "{{ route('BalloonSelection') }}";
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
