@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Programme A Robot 5</h2>



    {{-- sldie 1  --}}
    <div class="flex !text-white flex-col justify-start text-start t-slide ">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Create a simple story together with friends</li>
                <li>Turn a story into a programming game together with friends</li>
                <li>Programme a robot to move based on a story</li>
                <li>Develop creativity and innovation</li>
                <li>Develop problem-solving skills</li>
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
                        <li>Story</li>
                        <li>Game</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>Each group a robot and a pen controller, a set of directional and facial
                    expression programming cards, a record card, a play card and the mats.</li>
            </ul>
        </div>
        <div class="flex items-center gap-[1vw] justify-center">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb19.png') }}" class="img-xs" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb20.png') }}" class="img-sm" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        <p class="note text-center">Note: Refer to the teacher’s mode of Lesson 1 for guide on what you need to know
            and do before the lesson.</p>
    </div>



    {{-- lide 3 --}}
    <div class="hidden flex flex-col justify-start items-center text-start t-slide !text-white">
        <div class="flex flex-col">
            <ul class="list-disc">
                <h2 class=" t-title ">Preparations:</h2>
                <li>You may get children to decorate the animal characters with the masks
                    provided in the kit.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb21.png') }}" class="img-xs" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 4  --}}
    <div class="hidden flex flex-col justify-start text-start t-slide !text-white">
        <div>
            <h2 class=" t-title ">When the hands-on session starts, guide each group of children to:</h2>
            <ul class="list-disc">
                <li>Discuss and come up with ideas for their story/design of the maze.</li>
                <li>Set up their maze and test it out. Advise them to modify their design
                    if needed (there are limited programming cards, so make sure that not
                    too many steps is required for each programme). </li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">At the end of the hands-on session:</h2>
            <ul class="list-disc">
                <li>Have the children try out the newly-created games from other groups.</li>

            </ul>

        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 6 --}}
    <div class="hidden flex justify-start text-start t-slide !text-white">
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
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
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
                    <span class="text-[#F8473A]">
                        Remember to video shoot the hands-on process for
                        documentations.
                    </span>
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
            <img src="{{ asset('assets/images/pptimages/done.png') }}" alt="">
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
                    window.location.href = "{{ route('Robot5Selection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Robot5Selection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
