@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Following Instructions</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that a programme is the step-by-step instructions that tell the machine what to do.</li>
                <li>Move according to directional signs.</li>
                <li>Follow a sequence of instructions.</li>
                <li>Develop understanding through observation and inquiry.</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Keywords -->
                <h2 class="text-[33px]  ">Keywords:</h2>
                <div class="flex gap-x-10">
                    <ul class="list-disc">
                        <li>Machine</li>
                        <li>Programme</li>
                        <li>Instructions</li>
                        <li>Forward</li>
                        <li>Backward</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Left</li>
                        <li>Right</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="slide hidden flex flex-col  justify-start  text-start t-slide text-2xl text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>A few sets of programming cards (print and laminate so that they are
                    reusable) - you may write text at the back of the relevant card.</li>
            </ul>
        </div>
        <div class="flex justify-center">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs14.png') }}" class="w-[500px]" />
                <div class="flex text-white text-[20px] gap-[3.5rem]">
                    <p>forward</p>
                    <p>bakcward</p>
                    <p>turn left</p>
                    <p>turn right</p>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>

    {{-- slide 3 --}}
    <div class="slide hidden flex flex-col  justify-start  text-start t-slide text-2xl text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Things to note:</h2>
                <li>Always allow the children to attempt on their own before prompting.</li>
                <li>You may need to spend some time on getting children to understand the
                    instructions and follow the sequence. Create your own sequence using the programming cards for further
                    practice if needed.</li>
            </ul>
        </div>
        <div class="flex justify-center">
            <ul class="list-disc">
                <h2 class=" t-title ">Possible questions during hands-on sessions:</h2>
                <li>What instruction is on this card?</li>
                <li>What must you do first/next?</li>
            </ul>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 4 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 5 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide text-2xl slide hidden">
        <h2 class="!text-center title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-20">
                <ul>
                    <h2 class="!text-white title stroke">Move, Move, Move</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>Reuse the programming cards.</li>
                </ul>
                <ul>
                    <h2 class="t-title">What to do:</h2>
                    <li>Lay different sets of programming cards on the
                        ground and have children follow each sequence one by one. Increase the number of cards used in each
                        set once the children have mastered them</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>





    {{-- =================================================================================== --}}
    {{-- Done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    {{-- Buttons --}}
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

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href =
                    "{{ route('InstructionsSelection') }}";  
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('BasicCoding') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
