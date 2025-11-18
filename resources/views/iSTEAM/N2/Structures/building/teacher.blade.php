    @extends('layout.master')
    @section('title', 'Dynamic Presentation')

    @section('content')
        {{-- sldie 1  --}}
        <div class="flex !text-white flex-col justify-around text-start t-slide">
            <div>
                <h2 class=" t-title">Children will be able to:</h2>
                <ul class="list-disc ">
                    <li>Explore how block structures are created</li>
                    <li>Create structures using shapes.</li>
                    <li>Develop fine motor and eye-hand coordination skills</li>
                    <li>Develop creativity and imagination</li>
                    <li>Develop understanding through inquiry</li>
                </ul>
            </div>
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <div class="flex gap-[3vw] items-center">
                    <ul class="list-disc ">
                        <li>Structures</li>
                        <li>Buildings</li>
                        <li>Tall</li>
                        <li>Office</li>
                    </ul>
                    <ul class="list-disc ">
                        <li>Triangle</li>
                        <li>Shape</li>
                        <li>Short</li>
                        <li>Rectangle</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>




        {{-- slide 2 --}}
        <div class="flex !text-white flex-col items-start justify-around gap-[3rem] text-start t-slide">
            <div>
                <h2 class=" t-title">Preparations:</h2>
                <ul class="list-disc ">
                    <li>Put aside the following parts from the DDQ blocks set until the later
                        lessons to avoid distraction to the children,</li>
                </ul>
            </div>

            <img src="{{ asset('/assets/images/N2/structure/str2/s26.png') }}" />

            <ul class="list-disc ">
                <li>Print out the learning journals required.</li>
            </ul>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>


        {{-- slide 3 --}}
        <div class="flex !text-white flex-col items-baseline  justify-start text-start t-slide">
            <div>
                <h2 class=" t-title">Preparations:</h2>
                <ul class="list-disc ">
                    <li>Prepare one set of the following for each child. You can pack 10 sets with
                        one box of DDQ blocks (using all three colour cubes)</li>
                </ul>
            </div>

            <img src="{{ asset('/assets/images/N2/structure/str3/s32.png') }}" class="img-sm" />


            <ul class="list-disc ">
                <li>For the group work, it is advisable for you to assist only 2-3 children as
                    there may not be enough blocks to explore to build a structure.</li>
            </ul>


            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>


        {{-- sldie 4 --}}
        <div class="flex !text-white flex-col justify-start items-start text-start t-slide">
            <div>
                <h2 class=" t-title">Things to consider during Individual Activities:</h2>
                <ul class="list-disc ">
                    <li>
                        Do demonstrate to the children how they can connect the pieces together.
                        It may be hard to click the pieces to the connector in the beginning, teachers
                        please guide and assist the children.
                    </li>
                    <li>
                        Ask questions to prompt children to share and try out their ideas. Some
                        possible questions are listed in the lesson, you may add on questions
                        based on children's responses.
                    </li>
            </div>
            <div>

                <h2 class=" t-title">Things to consider during Class Activity:</h2>
                <li>
                    Encourage children to manipulate with the different pieces and
                    explore how they can fix the pieces together. Encourage children to
                    observe the shapes of the different pieces and how the pieces can be
                    attached together.
                </li>
                <li>
                    Encourage children to observe difference between the different types of
                    connectors and what shapes/pattern they can create with the different
                    connectors.
                </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>



        {{-- sldie 7 --}}
        <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
            <div>
                <h2 class="t-title ">Notes:</h2>
                <ul class="list-disc space-y-3">
                    <li>
                        <span class="relative">
                            If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch
                            the
                            video.
                            <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                                src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                    </li>

                    <li>
                        <span class="relative">
                            If you see <span class="opacity-0">---</span> , click on it for additional information or
                            activity.
                            <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                                class="t-info-btn absolute top-[-1vw] left-[8vw]" />
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
                            Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts
                            of
                            the lesson quickly.
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                                class="t-home-btn absolute top-0 left-[19vw]" />
                        </span>
                    </li>

                </ul>
            </div>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>




        {{-- sldie 8 --}}
        <div class="text-white flex flex-col items-center justify-center text-start t-slide hidden">
            <h2 class="text-center title stroke">Learning Centre Idea</h2>
            <div>
                <h2 class="!text-white text-[2vw] stroke">Let’s Create a Shape</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <ul>
                    <li>Place a sample of a square structure at the corner. Put a poster of
                        a square to show that square has 4 equal sides. Challenge children to build a square bigger than
                        the
                        displayed structure.</li>
                </ul>
            </div>
            <div>
                <ul class="list-decimal">
                    <h2 class="t-title">What to do:</h2>
                    <li>Invite children to choose one of the pictures.</li>
                    <li>Encourage children to use the construction set to create a shape
                        structure like the one in the picture.</li>
                </ul>
            </div>
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
                const slides = document.querySelectorAll(".t-slide");
                const nextButtons = document.querySelectorAll(".nextButton");
                const returnButton = document.getElementById("returnButton");
                const doneButton = document.querySelector(".doneButton"); //   DONE button

                let currentSlide = 0;

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.classList.toggle("hidden", i !== index);
                    });

                    //   Agar last hai → NEXT button hide, DONE show
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
                        window.location.href = "{{ route('n2buildingSelection') }}";
                    } else if (currentSlide > 0) {
                        currentSlide--;
                        showSlide(currentSlide);
                    }
                });

                if (doneButton) {
                    doneButton.addEventListener("click", () => {
                        window.location.href = "{{ route('n2buildingSelection') }}";
                    });
                }


                showSlide(currentSlide);
            });
        </script>
    @endpush
