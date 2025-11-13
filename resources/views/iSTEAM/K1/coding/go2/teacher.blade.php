@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Go! Go! Go! 2</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of forward, backward, left and right</li>
                <li>Know that a circuit is a track or path that can be straight, curved or in any shape</li>
                <li>Learn how to use Blockly to programme a robot to move through different circuits that require turning
                </li>
                <li>Know that sequencing is important for programming or coding</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex gap-20 items-center">

                <ul class="list-disc ">
                    <li>Command</li>
                    <li>Scripting Area</li>
                    <li>Programming Block</li>
                    <li>Forward</li>
                </ul>
                <ul class="list-disc ">
                    <li>Backward</li>
                    <li>Turn left</li>
                    <li>Turn Right</li>
                    <li>Circuit</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>50cm and 90cm measuring strips (made from black craft paper with label of
                    measurement pasted at the middle of the strip; kindly use standard font -
                    Comic Sans MS)</li>
                <li>Blu Tack (to fix the measuring strips on the floor)</li>
                <li>Measuring tapes (you may get children to check the accuracy of the
                    measuring strips prepared)</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go38.png" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>4 types of coding cards (print and laminate so that they are reusable)</li>
                <li>Whiteboard marker pens</li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <img src="/assets/images/K1/coding/go/go25.png" class="w-img" />
            <img src="/assets/images/K1/coding/go/go26.png" class="w-img" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- /slide 4 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>4 types of coding cards (print and laminate so that they are reusable)</li>
                <li>Whiteboard marker pens</li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <img src="/assets/images/K1/coding/go/go39.png" class="w-img" />
            <img src="/assets/images/K1/coding/go/go40.png" class="w-img" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- /slide 5  --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Start coding cards (print and laminate so that they are reusable) - use
                    it during hands-on session to mark the starting point of a circuit.</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go41.png" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- /slide 6  --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>The robots and tablets (refer to the teacher’s mode of Lesson 1 for guide on
                    what you need to know and do before the lesson)</li>
                <li>Tender Loving Care Poster (refer to the teacher’s mode of Lesson 1)</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/cd/cd13.png" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>





    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide justify-start  text-start">
        <div>
            <ul>
                <li>When the hands-on session 1 starts, guide each group of children to lay the
                    circuit on the floor using the measuring strips, blu tack and a Start card
                    (as shown)</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go28.png" class="w-img" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl !text-white flex-col items-center t-slide justify-start  text-start">
        <div>
            <ul>
                <li>When the hands-on session 2 starts, guide each group of children to lay the
                    chosen circuit on the floor using the measuring strips, blu tack and a Start
                    card (as shown).</li>
            </ul>
        </div>
        <img src="/assets/images/K1/coding/go/go35.png" class="!w-[50vw]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide  --}}
    <div class=" slide flex text-2xl !text-white flex-col t-slide gap-y-[1.5vw] justify-start  text-start">
        <div>
            <h2 class="t-title">Reminders or advice during hands-on session:</h2>
            <ul class="list-disc">
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
            <h2 class="t-title">Possible questions during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>Is the left of a robot same as your left?</li>
                <li>Is the right of a robot same as your right?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- slide 5 --}}
    <div class="slide flex  flex-col t-slide justify-start  text-2xl text-start !text-white">
        <div class="flex w-[100%] items-center justify-between">
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
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li class="text-[#F7B94A]">
                        The fundamental skill of coding or programming is ability to
                        differentiate and navigate self to move forward, backward, turn left
                        and turn right. If children are not ready, play more related games to
                        improve the skill.
                    </li>
                    <li class="text-[#F7B94A]">It is important to inculcate the habit of always laying out the steps
                        using coding cards before working on the Blockly because it's not easy
                        for children to remember all the steps when they use Blockly to
                        programme.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="flex">
                        Click on this shortcut icon
                       <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide  --}}
    <div class="text-white flex flex-col t-slide items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">How To Move Yourself Through This Circuit?</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Design and display a circuit on the floor (you may change the
                        design and gradually increase the number of steps required over
                        time). Place some coding cards here.</li>
                </ul>

                <h2 class="t-title">What to do:</h2>
                <ul>
                    <li>How to move yourself through this circuit? Use coding cards to lay
                        out the steps and then tell your teacher the answer.</li>
                </ul>
            </div>
        </div>
        <p class="note">Note: Guide children to understand that programming a robot to move through a circuit
            is the same as how we move ourselves through the same circuit.</p>
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
                    window.location.href = "{{ route('go2Selection') }}";
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
