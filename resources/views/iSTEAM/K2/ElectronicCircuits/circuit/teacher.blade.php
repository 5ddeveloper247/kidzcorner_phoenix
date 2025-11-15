@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is an Electronic Circuit</h2>

    {{-- sldie 1  --}}
    <div class="flex  t-slide !text-white flex-col justify-around  text-start">
        <div>
            <h2 class="t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that a circuit is a specific path that electricity can flow through.</li>
                <li>Know that only a complete circuit allows electricity to provide power for an electronic or electronics
                    to do work.</li>
                <li>Know how to form a complete electrical circuit using a few basic circuit parts.</li>
                <li>Develop understanding through observation and inquiry.</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex items-center gap-[4vw]">
                <ul class="list-disc ">
                    <li>Machines</li>
                    <li>Electricity</li>
                    <li>Plug</li>
                    <li>Socket</li>
                    <li>Wire</li>
                </ul>
                <ul class="list-disc">
                    <li>Battery</li>
                    <li>Electronics</li>
                    <li>Circuit</li>
                    <li>Light Bulb</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex  t-slide !text-white flex-col justify-center  text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class=" t-title">Preparations:</h2>
                <li>Each group a set of basic circuit components.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/circuit/ecity/e21.png') }}" class="img-lg" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="text-start flex flex-col justify-around  t-slide !text-white">
        <div>
            <h2 class=" t-title">Things to note during hands-on session:</h2>
            <ul class="list-disc pl-[50px]">
                <li>Remind children not to touch any circuit parts when their hands are wet.</li>
                <li>Remind children to handle the circuit parts with care and not to put them into their mouths.</li>
                <li>
                    Remind children not to connect the LED directly to the battery without using the connector and playdough
                    because this will make the legs of the LED very hot and burn out the LED easily.
                </li>
                <li>Remind children to be patient and take turns in using the materials provided.</li>
                <li>Encourage children to always discuss and make decisions as a group to complete each mission.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">Fun fact:</h2>
            <ul class="list-disc pl-[1vw]">
                <li>Electric eels use electricity to ward off enemies. They can produce a shock of around 500 volts.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" t-slide flex items-center text-start !text-white !w-[53vw]">
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
                    window.location.href = "{{ route('circuitSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('circuitSelection'') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
