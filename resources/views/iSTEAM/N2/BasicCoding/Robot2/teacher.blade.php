@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Programme A Robot 2</h2>

    {{-- sldie 1  --}}
    <div class="flex  !text-white flex-col justify-around text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Recognise some tools that are used to programme a robot</li>
                <li>Use some tools to programme a robot to move from a starting point to an end point</li>
                <li>Develop understanding through observation and inquiry</li>
                <li>Learn to share and take turns</li>
                <li>Learn to cooperate with friends to complete a task</li>
            </ul>
        </div>

        <div>
            <!-- Keywords -->
            <h2 class="t-title">Keywords:</h2>
            <div class="flex gap-x-10">
                <ul class="list-disc">
                    <li>Machine/Robot</li>
                    <li>Programme</li>
                    <li>Instructions</li>
                    <li>Pen Controller</li>
                </ul>
                <ul class="list-disc">
                    <li>Programming Cards</li>
                    <li>Record Card</li>
                    <li>Play Card</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Each group a robot and a pen controller, a set of directional and facial
                    expression programming cards, a record card, a play card and 5 lawn mats.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/BasicCoding/sb26.png') }}" class="img-lg" />

        <p class="note text-center">Note: Refer to the teacher’s mode of Lesson 1 for guide on what you need to know
            and do before the lesson.</p>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>



    {{-- slide 3 --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Each group a set of Start and End cars.</li>
            </ul>
        </div>
        <div class="flex items-center text-neutral-800 gap-10 flex-col">

            <div
                class="w-[10vw] h-[7vh] bg-white rounded-[1vw] border-[5px] border-neutral-800  text-[1.5vw] font-normal flex items-center justify-center">
                Start</div>
            <div
                class="w-[10vw] h-[7vh] bg-white rounded-[1vw] border-[5px] border-neutral-800  text-[1.5vw] font-normal flex items-center justify-center">
                End </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="hidden flex justify-start items-center text-start t-slide  !text-white">
        <div class="space-y-10">
            <ul class="list-disc">
                <h2 class=" t-title ">Things to note during hands-on sessions:</h2>
                <li>Conduct the hands-on sessions on the floor (to prevent the tools from being damaged by falling).</li>
                <li>Hold the robot and the pen controller firmly when you use them (to prevent the tools from spoiling
                    easily).</li>
                <li>Never push and stop the robot from moving once you turn on a programme (to prevent it from spoiling
                    easily).</li>
                <li>Be patient and take turns when using the different tools.</li>
                <li>Share ideas with your team members and respect each other's views.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Repeat the hands-on sessions for children that need further practice.</li>
            </ul>
            <ul class="list-disc">
                <h2 class=" t-title ">Possible questions during hands-on sessions:</h2>
                <li>Which programming card comes first/next?</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
        </div>
    </div>




    {{-- slide 5 --}}
    <div class="hidden flex  flex-col justify-start items-center text-start t-slide  !text-white">
        <div>
            <p class="text-white text-[30px]">If needed, you may reuse the coding mats, start and end cards, as well as the
                forward, turn left and turn right programming cards from Lesson 5 to repeat the
                hands-on sessions.</p>
        </div>
        <div class="flex justify-center items-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/BasicCoding/bs30.png') }}" class="img-md" />
            <img src="{{ asset('assets/images/N2/BasicCoding/sb27.png') }}" class="img-h-sm" />

        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>




    {{-- slide 6 --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide  !text-white">
        <div class="flex flex-col">
            <h2 class=" t-title ">What you need to know or do before the lesson:</h2>
            <ul class="list-disc">
                <li>Label each set of robot and pen controller to avoid confusion, especially
                    when you are going to use a few sets of robots and pen controllers at one
                    go. Suggest to paste the labels at the back of the robot and the pen
                    controller (by colour,number, name, etc).</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/BasicCoding/br11.png') }}" class="!w-[35vw]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- /sldie 7 --}}
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
                    window.location.href = "{{ route('Robot2Selection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Robot2Selection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
