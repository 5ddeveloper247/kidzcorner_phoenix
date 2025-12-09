@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Coding Challenge (4)</h2>

    {{-- sldie 1  --}}
    <div class="flex  !text-white flex-col t-slide justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Plan a route for a purpose</li>
                <li>Programme a robot to move according to the planned route</li>
                <li>Programme a robot to produce sound and light</li>
                <li>Develop problem-solving skills</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">Keywords:</h2>
            <div class="flex gap-[4vw]">
                <ul class="list-disc ">
                    <li>Programming Block</li>
                    <li>Forward</li>
                    <li>Backward</li>
                    <li>Turn Left</li>
                    <li>Turn Right</li>
                </ul>
                <ul class="list-disc">
                    <li>Sound </li>
                    <li>Light</li>
                </ul>
            </div>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="flex  !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class="t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Coding mats and obstacle cards</li>
            </ul>
        </div>
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch9.png') }}" class="!h-[20vw]" />
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch12.png') }}" class="!h-[20vw]" />
            <img src="{{ asset('assets/images/K1/coding/challenge1/ch11.png') }}" class="!h-[20vw]" />
        </div>
    </div>

    {{-- sldie 3 --}}
    <div class="flex  !text-white flex-col t-slide justify-start items-center  text-start">
        <div>
            <h2 class="t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>Pictures of the 4 characters (cut from coloured papers; size not more than 10cm)</li>
                <li>Blu Tack (for fixing graphic cards on the coding mat)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge4/ch6.png') }}" class="img-xl" />
    </div>


    {{-- slide 4 --}}
    <div class="flex  !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class="t-title">Preparations for the testing of the ball roller coaster:</h2>
            <ul class="list-disc">
                <li>Coding cards</li>
                <li>Whiteboard marker pens</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge2/ch9.png') }}" class="img-xl" />
    </div>


    {{-- slide 5 --}}
    <div class="flex  !text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class="t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>The robots and tablets (refer to the teacher’s mode of Lesson 1 for guide on
                    what you need to know and do before the lesson)</li>
                <li>Tender Loving Care Poster (refer to the teacher’s mode of Lesson 1)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/cd/cd13.png') }}" class="!w-[35vw]" />
    </div>

    {{-- sldie 6 --}}
    <div class="flex  !text-white flex-col t-slide items-center justify-start  text-start">
        <div>
            <h2 class="t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>Mini coding cards (print and cut out before the lesson)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/challenge1/ch13.png') }}" class="img-h-md" />
    </div>


    {{-- sldie 7 --}}
    <div class="flex  !text-white flex-col t-slide items-center justify-start  text-start">
        <p>When the hands-on session starts, guide each group of children to set up the mat
            accordingly (as shown). Advise them to discuss as a group to complete the mission.</p>
        <img src="{{ asset('assets/images/K1/coding/challenge4/ch9.png') }}" class="!w-[35vw]" />
    </div>


    {{-- sldie 8 --}}
    <div class="flex  !text-white flex-col t-slide  justify-start  text-start">

        <h2 class="t-title">When the hands-on session starts, guide each group of children to:</h2>
        <ul class="list-disc">
            <li>Discuss and decide whose name they want to spell out individually (their own
                name or a group member's name). If needed, guide them to use short form or
                only the initials for names that are long (e.g. Katherine - Kath; Song Ji Hyo
                - SJH).)</li>
            <li>Set up the mat by placing the letters on the mat randomly and fix a
                starting point for the robot.</li>
            <li>Use the learning journals to plot and plan their route before
                working out the programming steps in Blockly.</li>
        </ul>

    </div>



    {{-- sldie 9 --}}
    <div class=" t-slide text-start flex items-center !text-white !w-[53vw]">
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


                <li class="text-[#F7B94A]">The fundamental skill of coding or programming is ability to
                    differentiate and navigate self to move forward, backward, turn left
                    and turn right. If children are not ready, play more related games to
                    improve the skill.</li>
                <li class="text-[#F7B94A]">It is important to inculcate the habit of always laying out the steps
                    using coding cards before working on the Blockly because it's not easy
                    for children to remember all the steps when they use Blockly to
                    programme.</li>
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
    </div>


    {{-- slide 11 --}}
    <div class="text-white flex flex-col t-slide items-center justify-center  text-start hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white text-[2vw] stroke">Story Coding Challenge</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Create a short story for children to code based on a storyline (e.g .:
                    a day itinerary at zoo, picking up things in a supermarket based on a shopping list).</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">What to do:</h2>
            <ul>
                <li>Guide children to plan a route for a robot to find matching cards
                    on the mat. After that, programming a robot to move according to the planned route.</li>
            </ul>
        </div>
    </div>

    <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />

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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('challenge4Selection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('challenge4Selection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
