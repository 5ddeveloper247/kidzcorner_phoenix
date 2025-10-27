@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Sound and Light</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to use Blockly to programme the sound and light of a robot</li>
                <li>Use creativity to create a story based on a pictorial circuit together with friends</li>
                <li>Work out the programming steps that allow a robot to move through a pictorial circuit together with
                    friends</li>
                <li>Develop problem-solving skills</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>

            <div class="flex items-center gap-[5vw]">
                <ul class="list-disc ">
                    <li>Programming Block</li>
                    <li>Forward</li>
                    <li>Backward</li>
                    <li>Turn Left</li>

                </ul>
                <ul class="list-disc">
                    <li>Sound </li>
                    <li>Light
                    <li>Turn Light</li>
                    </li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Sound and Light coding cards (print and laminate so that they are reusable)
                    - use it during hands-on session to show at which part of a circuit sound or
                    light has been inserted</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/sound/s31.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>50cm and 90cm measuring strips (made from black craft paper with label of
                    measurement pasted at the middle of the strip; kindly use standard font -
                    Comic Sans MS)</li>
                <li>Blu Tack (to fix the measuring strips on the floor)</li>
                <li>Measuring tapes (you may get children to check the accuracy of the
                    measuring strips prepared)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/go/go38.png') }}" alt="Teacher" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>4 types of coding cards (print and laminate so that they are reusable)</li>
                <li>Whiteboard marker pens</li>
            </ul>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K1/coding/go/go25.png') }}" alt="Teacher" class="w-img" />
            <img src="{{ asset('assets/images/K1/coding/go/go26.png') }}" alt="Teacher" class="w-img" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>4 types of coding cards (print and laminate so that they are reusable)</li>
                <li>Whiteboard marker pens</li>
            </ul>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K1/coding/go/go39.png') }}" alt="Teacher" class="w-img" />
            <img src="{{ asset('assets/images/K1/coding/go/go40.png') }}" alt="Teacher" class="w-img" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 6 --}}
    <div class=" slide flex  text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>Start coding cards (print and laminate so that they are reusable) - use
                    it during hands-on session to mark the starting point of a circuit.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/go/go41.png') }}" alt="Teacher" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 7 --}}
    <div class=" slide flex  text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>The robots and tablets (refer to the teacher’s mode of Lesson 1 for guide on
                    what you need to know and do before the lesson)</li>
                <li>Tender Loving Care Poster (refer to the teacher’s mode of Lesson 1)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/cd/cd13.png') }}" alt="Teacher" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 8 --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
        <div>
            <p class="note">When the hands-on session 1 starts, guide each group of children to lay the
                circuit on the floor using the measuring strip, blu tack and a Start card (as shown).</p>
            <img src="{{ asset('assets/images/K1/coding/sound/s32.png') }}" alt="Teacher" class="w-img" />
        </div>
        <div>
            <p class="note">Suggestion: You may create props to represent Sound and Light for
                children to form pictorial circuit (example as shown).</p>
            <img src="{{ asset('assets/images/K1/coding/sound/s33.png') }}" alt="Teacher" class="w-img" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 9 --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
        <p class="note">When the hands-on session 2 starts, guide each group of children to lay the
            circuit on the floor using the measuring strip, blu tack and a Start card (as shown).</p>
        <img src="{{ asset('assets/images/K1/coding/sound/s34.png') }}" alt="Teacher" class="w-img" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 10 --}}
    <div class=" slide flex  text-white flex-col t-slide justify-start  text-start">
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
                <li>Which command in Blockly allows you to programme a robot to have sound?</li>
                <li>Which command in Blockly allows you to programme a robot to have different lights on the different body
                    parts?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 11 --}}
    <div class="slide flex  flex-col t-slide justify-start   text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="flex ">
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
                    <li class="text-amber-400">It is important to inculcate the habit of always laying out the steps
                        using coding cards before working on the Blockly because it's not easy
                        for children to remember all the steps when they use Blockly to
                        programme.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="flex ">
                        Click on this shortcut icon
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>

    {{-- slide 12 --}}
    <div class="text-white flex flex-col t-slide items-center justify-center  text-start  slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-20">
                <ul class="list-disc">
                    <h2 class="!text-white title stroke">Recording</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    Reuse the materials prepared for the hands-on session 1.
                </ul>

                <ul>
                    <h2 class="t-title">What to do:</h2>
                    <li>Guide children to learn how to record own voice using the Blockly
                        (on the next page). After that, guide them to programme a robot
                        to move through the circuit where the robot will play the voice
                        recorded.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>

    {{-- slide 13 --}}
    <div class="text-white flex flex-col t-slide items-center justify-center  text-start  slide hidden">
        <h2 class=" title stroke">How to record your voice using the Blockly?</h2>
        <img src="{{ asset('assets/images/K1/coding/sound/gl1.png') }}"/>
        <p class="note">Note: Select Sound>place programming block of My sounds>select My sounds>select
            Record a New Sound>select a Slot (total of 10)>start recording a sound after
            count down>save the sound.</p>
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
                    window.location.href = "{{ route('soundLSelection') }}";
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
