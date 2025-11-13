@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Flying Machines</h2>


    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li >Recall the use of aerodynamics in aeroplanes and other vehicles</li>
                <li >Learn how rockets and space shuttles use aerodynamics to help them move</li>
                <li >Design and build a flying machine</li>
                <li >Develop understanding through inquiry and experiment</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title">Keywords:</h2>
            <div class="flex gap-[5vw]">
                <ul class="list-disc ">
                    <li >Aerodynamics</li>
                    <li >Aerodynamic Forces</li>
                    <li >Weight</li>
                    <li >Lift</li>
                    <li >Thrust</li>
                    <li >Drag</li>
                </ul>
                <ul class="list-disc ">
                    <li >Aerofoil</li>
                    <li >Front Wings</li>
                    <li >Downforce</li>
                    <li >Rocket</li>
                    <li >Space Shuttle</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex t-slide !text-white flex-col justify-start text-start">
        <div class="t-title">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <h2>Final Project</h2>
                <li >Materials you can prepare (this is not an exhaustive list):</li>
            </ul>
            <div class="flex gap-[3vw] items-center">
                <ul class="list-disc">
                    <li >Cardboard</li>
                    <li >Empty plastic bottles</li>
                    <li >Glue gun</li>
                    <li >Newspapers</li>
                    <li >Tape</li>
                </ul>
                <ul class="list-disc">
                    <li >Scissors</li>
                    <li >Tongue depressors</li>
                    <li >Rubber bands</li>
                    <li >Straws</li>
                </ul>
            </div>
            <ul class="list-disc ">
                <li >Use recycled materials as much as possible for the making of the flying machines.
                </li>
            </ul>
        </div>
        <div class="t-title">
            <div class="flex gap-[3vw] items-center">
                <ul class="list-disc text-[#F7B94A]">
                    <h2>Some reference for ideas:</h2>
                    <li ><a href="https://viewsfromastepstool.com/flying-machine-stem-challenge/"
                            target="_blank">https://viewsfromastepstool.com/flying-machine-stem-challenge/</a></li>
                    <li ><a href="https://www.youtube.com/watch?y=jo_M4vDqaAw"
                            target="_blank">https://www.youtube.com/watch?y=jo_M4vDqaAw</a></li>
                    <li ><a href="https://www.instructables.com/Squeeze-Bottle-Rockets/"
                            target="_blank">https://www.instructables.com/Squeeze-Bottle-Rockets/</a></li>
                    <li ><a href="https://www.youtube.com/watch?y=-jm81EDnFMU"
                            target="_blank">https://www.youtube.com/watch?y=-jm81EDnFMU</a></li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide text-start !text-white">
        <div>
            <h2 class=" t-title">Additional info on rocket launch:</h2>
            <ul class="list-disc text-[#F7B94A] space-y-10">
                <li >
                    <a href="https://www.youtube.com/watch?v=oMeXcBk1x-c">
                        https://www.youtube.com/watch?v=oMeXcBk1x-c</a>
                </li>
                <li >
                    <a href="https://spaceplace.nasa.gov/launching-into-space/en/">
                        https://spaceplace.nasa.gov/launching-into-space/en/</a>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start !text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                    <span class="flex items-center whitespace-nowrap">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}"
                                class="!max-w-[2.5vw]" />
                        </span>
                        next to a picture,click on the picture to watch the video.
                    </span>
                </li>
                    <li >Emphasise and use the keywords during hands-on sessions.</li>
                    <li >Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li >
                        <span class="flex items-center whitespace-nowrap">
                        Click on this shortcut icon
                        <span>
                            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}"
                                class="!max-w-[2.5vw]" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </span>
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
                    window.location.href = "{{ route('FlyingSelection') }}";
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
