@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl !text-white flex-col justify-start text-start t-slide">
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

        <div class="flex justify-between w-[50%] items-center">
            <ul class="list-disc ">
                <h2 class="t-title ">Keywords:</h2>
                <li>Structures</li>
                <li>Shapes</li>
                <li>Square</li>
                <li>Rectangle</li>
            </ul>
            <ul class="list-disc ">
                <li>Triangle</li>
                <li>Circle</li>
                <li>Base</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl !text-white flex-col items-center  justify-start text-start t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Please note the following number of sets for each type of activity is based
                    on 1 box of DDQ blocks. If you are planning of asking two groups of children
                    to do two different activities at the same, the following guide will not be
                    accurate.</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/N2/structure/str2/s25.png') }}" />

        <ul class="list-disc ">
            <li>3-5 children can work together comfortably with 1 box of DDQ blocks.</li>
        </ul>


        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex text-2xl !text-white flex-col items-start  justify-start gap-[3rem] text-start t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Put aside the following parts from the DDQ blocks set until the later
                    lessons to avoid distraction to the children,</li>
                <li>Print out the learning journals required.</li>
            </ul>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('/assets/images/N2/structure/str2/s26.png') }}" />

        </div>
        <ul class="list-disc ">
            <li>Print out the learning journals required.</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl !text-white flex-col justify-start items-start text-start t-slide">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>
                    Do demonstrate to the children how they can connect the pieces together. <br>
                    It may be hard to click the pieces to the connector in the beginning, teachers <br>
                    please guide and assist the children.
                </li>
                <li>
                    Ask questions to prompt children to share and try out their ideas. Some <br>
                    possible questions are listed in the lesson, you may add on questions <br>
                    based on children's responses.
                </li> <br><br>
                <h2 class=" t-title">Things to consider during Class Activity:</h2>
                <li>
                    Encourage children to manipulate with the different pieces and <br>
                    explore how they can fix the pieces together. Encourage children to <br>
                    observe the shapes of the different pieces and how the pieces can be <br>
                    attached together.
                </li>
                <li>
                    Encourage children to observe difference between the different types of <br>
                    connectors and what shapes/pattern they can create with the different <br>
                    connectors.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>




    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl !text-white flex-col justify-start text-start t-slide">
        <div>
            <h2 class=" t-title">Useful Information:</h2>
            <ul class="list-disc ">
                <li>
                    A structure is something that has been built using smaller parts.
                </li>
                <li>
                    The structure of something refers to the way in which something is built or the way different parts are
                    connected together.
                </li>
                <li>
                    The structure of a building refers to the frame that is formed by the connected beams and columns
                    (the wooden or metal bars), which gives the building its shape and strength
                    to stand on its own and support weight.
                </li>
                <li>
                    How are tall buildings built? Who are involved in the construction
                    process? The two main designers of a building are the architects and the
                    engineers. Architects draw a plan (called a blueprint) to design the look and
                    space of a building. <br>
                    Engineers go through the plan to make the design functional and safe by
                    figuring out the right building structures to support the design and deciding
                    what materials must be used to make bring the architect's design to completion.
                    Construction workers construct the building from the ground up floor by floor
                    based on the finalized plan.
                </li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl !text-white flex-col justify-start text-start t-slide">
        <div>
            <h2 class=" t-title">Useful Information:</h2>
            <ul class="list-disc ">
                <li>
                    Architects concentrate on the artistic creativity of designs, while engineers focus on the scientific
                    innovations that bring those designs to life.
                    Engineers design and build a wide variety of things, including machines. They can also specialize in
                    different areas such as civil, electrical, mechanical, structural, industrial, sound, and chemical
                    engineering.
                </li>
                <li>
                    What are the key differences between architects and engineers? Read the
                    infographic at
                    <a href="https://newschoolarch.edu/academics/school-of- architecture/infographic-architecture-vs-engineering/"
                        class="text-[#F7B94A]" target="_blank">
                        https://newschoolarch.edu/academics/school-of-architecture/infographic-architecture-vs-engineering/
                    </a>
                </li>
                <li>
                    Engineering is a way of problem-solving using science and math. Engineers use creativity and their
                    knowledge of these subjects to design solutions to real-world problems.
                </li>
                <li>
                    The process of engineering is fun and teaches good life lessons: there is not
                    always just one right answer to solve a problem; it is okay to try out any idea
                    you have; it is normal to repeat the process of designing, testing, redesigning
                    and retesting: it is okay to learn from other's designs and solutions.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start !text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex whitespace-nowrap">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 8 --}}
    <div class="text-white flex flex-col items-center justify-center text-start t-slide text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-20">
                <ul>
                    <h2 class="!text-white title stroke">Let’s Create a Shape</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>Place a sample of a square structure at the corner. Put a poster of
                        a square to show that square has 4 equal sides. Challenge children to build a square bigger than the
                        displayed structure.</li>
                </ul>

                <ul class="list-decimal">
                    <h2 class="t-title">What to do:</h2>
                    <li>Invite children to choose one of the pictures.</li>
                    <li>Encourage children to use the construction set to create a shape
                        structure like the one in the picture.</li>
                </ul>
            </div>
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
                    window.location.href = "{{ route('structureSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Structures') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
