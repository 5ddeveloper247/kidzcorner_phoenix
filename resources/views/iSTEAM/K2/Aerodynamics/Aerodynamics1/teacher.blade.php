@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Understand the concept of weight and lift</li>
                <li class="text-[1.3vw]">Identify the function of weight and lift in the movement of aeroplane</li>
                <li class="text-[1.3vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Gravity</li>
                    <li class="text-[1.3vw]">Force</li>
                    <li class="text-[1.3vw]">Weight</li>
                    <li class="text-[1.3vw]">Lift</li>
                    <li class="text-[1.3vw]">Aerofoil</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div class="">
            <h2 class="font-bold t-title">Preparations:</h2>
            <div>
                <h2 class="mb-0 mt-3">Hands-on Session 2</h2>
                <ul class="list-disc">
                    <li class="text-[1.1vw]">2 plastic/cloth bags of the same material and same type of handles.</li>
                </ul>

                <ul class="list-disc ">
                    <h2 class="mb-0 mt-3">Hands-on Session 3</h2>
                    <li class="text-[1.1vw]">Use these items to make a model of an aeroplane wing (steps of making on the next 2
                        pages):</li>
                    <li class="text-[1.1vw]">A4 paper</li>
                    <li class="text-[1.1vw]">Tape</li>
                    <li class="text-[1.1vw]">Straw</li>
                    <li class="text-[1.1vw]">Fan</li>
                    <li class="text-[1.1vw]">Pen knife to make a hole</li>
                    <li class="text-[1.1vw]">String</li>
                    <li class="text-[1.1vw]">The teacher will have to prepare the items prior to the lesson. Children can assist
                        by holding the
                        string during the experiment.</li>
                    <li class="text-[1.1vw]">Refer to this link: <a href="https://www.youtube.com/watch?v=ufeky6EIXQ4"
                            class="text-amber-400" target="_blank">https://www.youtube.com/watch?v=ufeky6EIXQ4</a> for the <br>
                        aerofoil experiment.
                    </li>
                </ul>
            </div>

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="slide flex text-2xl text-white flex-col items-start text-start">
        <div>
            <h2 class="font-bold t-title">How to make a model of aeroplane wing for Hands-on Session 3:</h2>
            <ul class="list-decimal">
                <li class="text-[1.3vw]">Prepare an A4 paper.</li>
                <li class="text-[1.3vw]">Fold in one side of the paper, so that one side of the fold is slightly longer than
                    the other.</li>
                <li class="text-[1.3vw]">Press the two ends of the paper together to form the aerofoil shape. Tape the
                    paper to secure the shape.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/aero/aero1/a20.png') }}" class="w-[800px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex text-2xl text-white flex-col items-start text-start">
        <div>
            <h2 class="font-bold t-title">How to make a model of aeroplane model for Hands-on Session 3:</h2>
            <ul>
                <li class="text-[1.3vw]">4. Make a mark halfway along the shape, about 1 inch from the front.</li>
                <li class="text-[1.3vw]">5. Make a hole through the mark and push a straw through it.</li>
                <li class="text-[1.3vw]">6. Thread the string through the straw.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/aero/aero1/a21.png') }}" class="w-[800px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="slide flex flex-col justify-start text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}"
                                class="!max-w-[2.5vw]" />
                        </span>
                        next to a picture, class="text-amber-400" click on the picture to watch the video.
                    </li>
                    <li class="text-[1.3vw]">Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-[1.3vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="text-[1.3vw] flex">
                        Click on this <span class="font-bold t-title">shortcut icon</span>
                        <span>
                            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}"
                                class="!max-w-[2.5vw]" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
        </div>
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
                    window.location.href = "{{ route('k2Aerodynamics') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2Aerodynamics') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
