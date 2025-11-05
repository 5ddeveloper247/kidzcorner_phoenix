@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Hydrodynamics</h2>


    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Recall the four aerodynamic forces</li>
                <li class="text-[1.3vw]">Understand hydrodynamics</li>
                <li class="text-[1.3vw]">Understand how the forces of hydrodynamics help in movement of objects in water</li>
                <li class="text-[1.3vw]">Develop creativity and imagination</li>
                <li class="text-[1.3vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex gap-[10rem]">
                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Aerodynamics</li>
                    <li class="text-[1.3vw]">Four Aerodynamic Forces</li>
                    <li class="text-[1.3vw]">Force</li>
                    <li class="text-[1.3vw]">Weight</li>
                    <li class="text-[1.3vw]">Lift</li>
                </ul>
                <ul class="list-disc">
                    <li class="text-[1.3vw]">Drag</li>
                    <li class="text-[1.3vw]">Hydrodynamics</li>
                    <li class="text-[1.3vw]">Hydrofoil</li>
                    <li class="text-[1.3vw]">Thrust</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div class="text-start space-y-10">
            <ul class="list-disc">
                <h2 class="font-bold t-title">Preparations:</h2>
                <li class="text-[1.3vw]">The teacher will have to prepare the items and setup prior the lesson.</li>
            </ul>
            <ul class="list-disc ">
                <h2>Hands-on Session 1</h2>
                <li class="text-[1.3vw]">Items to prepare:
                    <ul>
                        <li class="text-[1.3vw]">-A big, clear container - fill it up with 2 of water</li>
                        <li class="text-[1.3vw]">-Clothes peg</li>
                        <li class="text-[1.3vw]">-A flat board/lid (ensure that it does not absorb water as this will affect
                            the result)</li>
                    </ul>
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/aero/hydro/h22.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}"
                                class="!max-w-[2.5vw]" />
                        </span>
                        next to a picture,click on the picture to watch the video.
                    </li>
                    <li class="text-[1.3vw]">Emphasise and use the keywords during hands-on sessions.</li>
                    <li class="text-[1.3vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        Click on this shortcut icon
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
                    window.location.href = "{{ route('HydrodynamicsSelection') }}";
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
