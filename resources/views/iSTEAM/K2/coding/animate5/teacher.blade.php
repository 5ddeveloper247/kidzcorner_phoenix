@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-3 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.1vw]">Know that ScratchJr allows us to create our own animated stories</li>
                <li class="text-[1.1vw]">Know that ScratchJr allows us to create our own animated stories</li>
                <li class="text-[1.1vw]">Know that more than a programme can be created for a character to do several movements at the same time
                    for the sake of different animation effects</li>
                <li class="text-[1.1vw]">Develop understanding through inquiry</li>
                <li class="text-[1.1vw]">Develop problem-solving skills</li>
                <li class="text-[1.1vw]">Learn to share and take turns</li>
                <li class="text-[1.1vw]">Learn to cooperate with friends to complete a task</li>
            </ul>
        </div>


        <h2 class=" ">Keywords:</h2>
        <div class="flex gap-[3vw] pl-[1vw]">
            <ul class="list-disc ">

                <li class="text-[1.1vw]">Programme</li>
                <li class="text-[1.1vw]">Programming/Coding</li>
                <li class="text-[1.1vw]">Command</li>
                <li class="text-[1.1vw]">Animated Story</li>
            </ul>


            <ul class="list-disc ">
                <li class="text-[1.1vw]">Programming Block</li>
                <li class="text-[1.1vw]">Programming Area</li>
                <li class="text-[1.1vw]">Character</li>
                <li class="text-[1.1vw]">Look</li>
            </ul>


        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start   text-start">
        <ul class="list-disc">
            <h2 class="t-title">Preparations:</h2>
            <li class="text-[1.1vw]">The tablets (download ScratchJr application from App Store or Google Play for each tablet; charge all the
                tablets before you start each lesson)</li>

        </ul>

        <div class="flex justify-center items-center">
            <div>

                <img class="w-[800px]" src="/assets/images/K2/animate1/a50.png" />
            </div>

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start   text-start">


        <ul class="list-disc">
            <h2 class="t-title">Preparations:</h2>
            <li class="text-[1.1vw]">Grid Card (print and laminate so that they are reusable)</li>
            <li class="text-[1.1vw]">Whiteboard marker pens</li>

        </ul>
        <div class="flex justify-center items-center">
            <div>
                <img src="/assets/images/K2/animate1/a51.png" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start   text-start">

        <ul class="list-disc">
            <h2 class="t-title">Additional info:</h2>
            <li class="text-[1.1vw]">
                Tapping here enables you to change title of a project.</li>
        </ul>
        <div class="flex justify-center items-center">
            <div>
                <img src="/assets/images/K2/animate5/a20.png" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>
    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start   text-start">

        <ul class="list-disc">
            <h2 class="t-title">Additional info:</h2>
            <li class="text-[1.1vw]">
                Tapping here enables you to add words or text on the stage.</li>
        </ul>
        <div class="flex justify-center items-center">
            <div>
                <img src="/assets/images/K2/animate5/a21.png" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>
    {{-- slide 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start   text-start">

        <ul class="list-disc">
            <h2 class="t-title">Additional info:</h2>
            <li class="text-[1.1vw]">
                The maximum number of pages you can create for a story is 4 pages.</li>
        </ul>
        <div class="flex justify-center items-center">
            <div>
                <img src="/assets/images/K2/animate5/a22.png" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>




    {{-- sldie 7 --}}


    <div class=" slide flex text-2xl text-white flex-col  justify-start items-start text-start gap-[5rem]">

        <div>
            <ul class="list-disc !text-white">

                <h2 class="t-title">Reminders or advice during hands-on session:</h2>
                <li class="text-[1.1vw]">Always hold a tablet with both your hands (to show your care and prevent the
                    tools from spoiling easily).</li>
                <li class="text-[1.1vw]">Be patient and take turns when using the tablets.</li>
            </ul>
        </div>

        <div>
            <ul class="!text-start list-disc">
                <h2 class="t-title">Possible questions during hands-on sessions:</h2>
                <li class="text-[1.1vw]">Which part of the app allows you to add pages to a story?
                </li>
                <li class="text-[1.1vw]">How do you make your story auto play from page to page?</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 7 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}"
                                class="!max-w-[2.5vw]" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li class="text-[1.1vw]">Always ask questions to encourage children to think and share their ideas first
                        before giving out any information.</li>
                    <li class="text-[1.1vw]">Emphasise and use the keywords during hands-on sessions.
                    </li>
                    <li class="text-[1.1vw]">Print out the Learning Journal (if any) for every <br>
                        child to complete at the end of the lesson.</li>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>






    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton">
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
                window.location.href = "{{ route('k2coding') }}";
            } else {
                //   Previous slide pe jao
                currentSlide--;
                showSlide(currentSlide);
            }
        });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2coding') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
