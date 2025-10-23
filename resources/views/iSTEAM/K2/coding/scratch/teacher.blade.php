@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that ScratchJr is an application that allows us to create our <br> own interactive stories and
                    games</li>
                <li>Learn how to use ScratchJr to create a story by selecting a <br>background and two characters</li>
                <li>Develop understanding through inquiry</li>
                <li>Develop problem-solving skills</li>
                <li>Learn to share and take turns</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div class="flex gap-20">
                <ul class="list-disc ">
                    <li>ScratchJr (Application)</li>
                    <li>Story</li>
                    <li>Background</li>
                    <li>Character</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  items-center gap-y-10  text-start">
        <ul class="list-disc  ">
            <h2 class="font-bold t-title">Preparations:</h2>
            <li>
                The tablets (download ScratchJr application from App Store or Google Play for each tablet; charge all the
                tablets before you start each lesson)
            </li>
        </ul>
        <img class="w-[780px]" src="/assets/images/K2/coding/s6.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  items-center gap-y-8.5 text-start">
        <ul class="list-disc  ">
            <h2 class="font-bold t-title">What you need to know or explore before the lesson:</h2>
            <li>
                Go through the Interface Guide in the application of ScratchJr to understand the
                basic features of ScratchJr.
            </li>
        </ul>

        <div class="flex gap-3  items-center justify-center">

            <img class="w-[700px]" src="/assets/images/K2/coding/s35.png" />

            <div>
                <ul class="text-1xl !text-white text-start">
                    <li>While going through the guide </li>
                    <li>in the app, you may tap on </li>
                    <li>each number to understand the </li>
                    <li>use of each part.</li> <br>
                    <li>You may <span class="title stroke !text-3xl">print out the
                            guide </span> if you need it.</li>

                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col  justify-start gap-y-10 text-start gap-[5rem]">

        <div>
            <ul class="list-disc !text-white">

                <h2>Reminders or advice during hands-on session:</h2>
                <li>Always hold a tablet with both your hands (to show your care and prevent the
                    tools from spoiling easily).</li>
                <li>Be patient and take turns when using the tablets.</li>
            </ul>
        </div>

        <div>
            <ul class="!text-start list-disc">
                <h2>Possible questions during hands-on sessions:</h2>
                <li>What is the name of this application?</li>
                <li>How do you add or change a background on your working stage?</li>
                <li>How do you add or delete a character on your working stage?</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/play.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                       a picture, click on the picture to watch the video
                    </li>
                    <li>Always ask questions to encourage children to think and share their ideas first 
     before giving out any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.
                    </li>
                    <li>Print out the Learning Journal (if any) for every  <br>
     child to complete at the end of the lesson.</li>
                    <li>
                        Click on this <span class="font-bold t-title">shortcut icon</span>
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/home-icon.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
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

    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

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
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
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
