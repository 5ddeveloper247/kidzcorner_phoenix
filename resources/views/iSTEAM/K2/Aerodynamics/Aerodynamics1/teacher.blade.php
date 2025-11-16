@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is Aerodynamics? 1</h2>


    {{-- sldie 1  --}}
    <div class="flex t-slide !text-white flex-col justify-around text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the concept of weight and lift</li>
                <li>Identify the function of weight and lift in the movement of aeroplane</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Gravity</li>
                    <li>Force</li>
                    <li>Weight</li>
                    <li>Lift</li>
                    <li>Aerofoil</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex t-slide !text-white flex-col justify-start text-start !gap-[.5vw]">
        {{-- <div> --}}
        <h2 class=" t-title">Preparations:</h2>
        <div>
            <h2 class="t-title">Hands-on Session 2</h2>
            <ul class="list-disc">
                <li>2 plastic/cloth bags of the same material and same type of handles.</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">Hands-on Session 3</h2>
            <ul class="list-disc ">
                <li>Use these items to make a model of an aeroplane wing (steps of making on the
                    next 2
                    pages):</li>
                <li>A4 paper</li>
                <li>Tape</li>
                <li>Straw</li>
                <li>Fan</li>
                <li>Pen knife to make a hole</li>
                <li>String</li>
                <li>The teacher will have to prepare the items prior to the lesson. Children can
                    assist
                    by holding the
                    string during the experiment.</li>
                <li>Refer to this link: <a href="https://www.youtube.com/watch?v=ufeky6EIXQ4"
                        target="_blank">https://www.youtube.com/watch?v=ufeky6EIXQ4</a> for the
                    <br>
                    aerofoil experiment.
                </li>
            </ul>
        </div>

        {{-- </div> --}}
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="t-slide flex !text-white flex-col items-start text-start">
        <div>
            <h2 class=" t-title">How to make a model of aeroplane wing for Hands-on Session 3:</h2>
            <ul class="list-decimal">
                <li>Prepare an A4 paper.</li>
                <li>Fold in one side of the paper, so that one side of the fold is slightly longer than
                    the other.</li>
                <li>Press the two ends of the paper together to form the aerofoil shape. Tape the
                    paper to secure the shape.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/aero/aero1/a20.png') }}" class="w-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="t-slide flex !text-white flex-col items-start text-start">
        <div>
            <h2 class=" t-title">How to make a model of aeroplane model for Hands-on Session 3:</h2>
            <ol class="list-decimal" start="4">
                <li>Make a mark halfway along the shape, about 1 inch from the front.</li>
                <li>Make a hole through the mark and push a straw through it.</li>
                <li>Thread the string through the straw.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/K2/aero/aero1/a21.png') }}" class="w-img2" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
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
                    window.location.href = "{{ route('Aerodynamics1Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Aerodynamics1Selection') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
