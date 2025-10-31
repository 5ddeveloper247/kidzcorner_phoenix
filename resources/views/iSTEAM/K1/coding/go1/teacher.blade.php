@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Go! Go! Go! 1</h2>


    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of forward, backward, left and right</li>
                <li>Know that distance is a length of space between two points</li>
                <li>Know that centimetre is the unit of measurement used in Blockly</li>
                <li>Learn how to use Blockly to programme a robot to move a certain distance</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>

            <div class="flex items-center gap-[5vw]">
                <ul class="list-disc ">
                    <li>Command</li>
                    <li>Scripting Area</li>
                    <li>Programming Block</li>
                    <li>Forward</li>
                </ul>
                <ul class="list-disc">
                    <li>Distance</li>
                    <li>Centimetre (cm)</li>
                    <li>Backward</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Ropes (for the mini activity to show distance between 2 people)</li>
                <li>Measuring tapes (sample shown: tapes with colour decimetre divisions)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/go/go24.png') }}" alt="Teacher" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each group: a 50cm and a 90cm measuring strips (made from black craft
                    paper); Blu Tack (to fix the measuring strips on the floor)
                    [Note: during hands-on session, guide each group of children to lay 2
                    circuits on the floor using the measuring strips and blu tack (as shown);
                    make sure that both the strips are laid from the same starting line]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/cd/cd14.png') }}" alt="Teacher" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>2 types of coding cards (print and laminate so that they are reusable)</li>
                <li>Whiteboard marker pens</li>
            </ul>
        </div>
        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/go/go25.png') }}" alt="Teacher" class="w-img" />
            <img src="{{ asset('assets/images/K1/coding/go/go26.png') }}" alt="Teacher" class="w-img" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>The robots and tablets (refer to the teacher’s mode of Lesson 1 for guide on
                    what you need to know and do before the lesson)</li>
                <li>Tender Loving Care Poster (refer to the teacher’s mode of Lesson 1)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd13.png') }}" alt="Teacher" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>





    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start gap-y-15 text-start">
        <div>
            <h2 class=" t-title">Reminders or advice during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Always hold a robot or a tablet with both your hands (to show your care and prevent the tools from
                    spoiling easily).</li>
                <li>Never place your hands on the wheels of the robot (prevent yourself from getting hurt).</li>
                <li>Never hold the robot by its head (prevent it from spoiling easily).</li>
                <li>Never push and stop the robot from moving once you turn on a programme (prevent it from spoiling
                    easily).</li>
                <li>Be patient and take turns when using the different tools.</li>
            </ul>
        </div>
        <div>
            <h2 class=" t-title">Possible questions during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>What is distance?</li>
                <li>What is the unit of measurement used in Blockly?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 16 --}}
    <div class="slide flex  flex-col t-slide justify-start  text-2xl text-start text-white">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="flex">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-amber-400">The fundamental skill of coding or programming is ability to
                        differentiate and navigate self to move forward, backward, turn left
                        and turn right. If children are not ready, play more related games to
                        improve the skill.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="flex">
                        Click on this shortcut icon
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    <div class="text-white flex flex-col t-slide items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">Common Compound Machines</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place a measuring tape, pencils and papers here.</li>
                </ul>

                <h2 class="t-title">What to do:</h2>
                <ul>
                    <li>How long is your right/left arm/hand/leg (changeable to measure
                        other body parts or common things around us)? Use the measuring
                        tape to measure and record your findings in a paper. After that,
                        share the findings with your teacher and friends.</li>
                </ul>
            </div>
        </div>
        <p class="note">Note: Have children help each other to measure and record.</p>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
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
                    window.location.href = "{{ route('go1Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('coding') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
