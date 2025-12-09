@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Programme A Robot 4</h2>

    {{-- sldie 1  --}}
    <div class="flex  !text-white flex-col justify-around text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Programme a robot to move from a starting point to an end point</li>
                <li>Enjoy the fun of programming a robot</li>
                <li>Develop understanding through observation and inquiry</li>
                <li>Learn to share and take turns</li>
                <li>Learn to cooperate with friends to complete a task</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Keywords -->
                <h2 class="t-title">Keywords:</h2>
                <div class="flex gap-x-10">
                    <ul class="list-disc">
                        <li>Machine/Robot</li>
                        <li>Programme</li>
                        <li>Mats</li>
                        <li>Pen Controller</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Programming Cards</li>
                        <li>Record Card</li>
                        <li>Play Card</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="hidden flex flex-col justify-between items-center text-start t-slide  !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Each group a robot and a pen controller, a set of directional programming
                    cards, a record card, a play card</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/BasicCoding/rb18.png') }}" class="img-sm" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        <p class="note text-center">Note: Refer to the teacher’s mode of Lesson 1 for guide on what you need to know
            and do before the lesson.</p>
    </div>



    {{-- lide 3 --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For hands-on session 1, each group a character mat, 4 picture mats and
                    6 lawn mats (as shown)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/BasicCoding/tb15.png') }}" class="!w-[35vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />

    </div>


    {{-- slide 4  --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For hands-on session 2, each group a character mat, 5 picture mats and
                    7 lawn mats (as shown)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" class="img-sm" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />

    </div>


    {{-- slide 5 --}}
    <div class="hidden flex flex-col justify-start text-start t-slide  !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>For hands-on session 3, each group 4 character mat, 9 picture mats and
                    7 lawn mats (children will repeat hands-on sessions 1 & 2 by replacing the character mat)</li>
            </ul>
        </div>

        <div class="flex items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/BasicCoding/tb15.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" class="img-sm" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 6 --}}
    <div class="hidden flex flex-col justify-around text-start t-slide  !text-white">
        <div>
            <h2 class=" t-title ">Things to note during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>Conduct the hands-on sessions on the floor (to prevent the tools from being damaged by falling).</li>
                <li>Hold the robot and the pen controller firmly when you use them (to prevent the tools from spoiling
                    easily).</li>
                <li>Never push or stop the robot from moving once you turn on a programme (to prevent damage).</li>
                <li>Be patient and take turns when using the different tools.</li>
                <li>Share ideas with your team members and respect each other's views.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Repeat the hands-on sessions for children that need further practice.</li>
            </ul>
        </div>
        <div>
            <h2 class=" t-title ">Possible questions during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>Which programming card comes first/next?</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
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

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href = "{{ route('Robot4Selection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Robot4Selection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
