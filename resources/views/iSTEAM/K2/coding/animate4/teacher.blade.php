@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-3 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to design the look of a character</li>
                <li>Use ScratchJr to create an animated story</li>
                <li>Develop understanding through inquiry</li>
                <li>Develop problem-solving skills</li>
                <li>Learn to share and take turns</li>
                <li>Learn to cooperate with friends to complete a task</li>
            </ul>
        </div>


        <h2 class=" font-bold">Keywords:</h2>
        <div class="flex gap-1 justify-around">
            <ul class="list-disc ">

                <li>Programme</li>
                <li>Programming/Coding</li>
                <li>Command</li>
                <li>Animated Story</li>
            </ul>


            <ul class="list-disc ">
                <li>Programming Block</li>
                <li>Programming Area</li>
                <li>Character</li>
                <li>Lock</li>
            </ul>


        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  gap-y-10 text-start">
        <ul class="list-disc">
            <h2 class="">Preparations:</h2>
            <li>The tablets (download ScratchJr application from App Store or Google Play for each tablet; charge all the
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
    <div class=" slide flex text-2xl text-white flex-col justify-start  gap-y-10 text-start">


        <ul class="list-disc">
            <h2 class="">Preparations:</h2>
            <li>Grid Card (print and laminate so that they are reusable)</li>
            <li>Whiteboard marker pens</li>

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
    <div class=" slide flex text-2xl text-white flex-col justify-start items-center gap-y-10 text-start">


        <ul class="list-disc !text-start">
            <h2 class="">What you need to know or explore before the lesson:</h2>
            <li>Go through the Blocks Guide in the application of ScratchJr to understand the use
                of different commands and programming blocks in ScratchJr.</li>

        </ul>

        <div class="flex justify-center items-center gap-2">
            <img src="/assets/images/K2/animate1/a52.png" />

            <div class="flex-col gap-[1rem]">
                <ul>
                    <li>For this lesson, the focus is</li>
                    <li>knowing the use of all the</li>
                    <li>programming blocks of Motion</li>
                    <li>Blocks. Please go through the</li>
                    <li>descriptions to understand the</li>
                    <li>use of each programming block.</li>
                </ul><br>
                <ul>
                    <li>You may <span class="title stroke font-normal !text-4xl">print out the guide </span> if
                        you need it.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 6 --}}


    <div class=" slide flex text-2xl text-white flex-col  justify-start items-start text-start gap-[5rem]">

        <div>
            <ul class="list-disc !text-white">

                <h2 class="">Reminders or advice during hands-on session:</h2>
                <li>Always hold a tablet with both your hands (to show your care and prevent the
                    tools from spoiling easily).</li>
                <li>Be patient and take turns when using the tablets.</li>
            </ul>
        </div>

        <div>
            <ul class="!text-start list-disc">
                <h2 class="">Possible questions during hands-on sessions:</h2>
                <li>What is the name of this application?</li>
                <li>How do you move the position of a character?</li>
                <li>How do you make a character to move diagonally?</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 7 --}}
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
                    <li>Print out the Learning Journal (if any) for every <br>
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
