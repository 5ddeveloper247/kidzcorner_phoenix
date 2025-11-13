@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')


    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl !text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the structure of big vehicles</li>
                <li>Explore the structure designs of the big vehicles</li>
                <li>Observe shapes of the big vehicles</li>
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
    <div class=" slide flex text-2xl !text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Please note the following number of sets for each type of activity is based
                    on 1 box of DDQ blocks. If you are planning of asking two groups of children
                    to do two different activities at the same, the following guide will not be
                    accurate.</li>
            </ul>
        </div>
        <div class="flex items-center gap-5">
            <img src="/assets/images/N2/structure/str/st13.png"  />
            <p>5 sets for square structure per
                set of DDQ blocks.</p>
        </div>
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
            <img src="{{ asset('/assets/images/N2/structure/b-str/s30.png') }}" class="large-img4" />

        </div>
        <ul class="list-disc ">
            <li>Print out the learning journals required.</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 2 --}}
    <div class=" slide flex text-2xl !text-white flex-col items-baseline  justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Things to note for Group Activity 1:</h2>
            <ul class="list-disc ">
                <li>One box of DDQ blocks can only make two sets of fire engine as there are
                    only 12 big wheels. You may want to let your children take turns to work
                    on it in small groups.</li>
                <li>The following is only a guide , you may replace the rectangle block
                    with 2 cubes.</li>
            </ul>
        </div>

        <div class="flex gap-2  items-end">

            <img src="{{ asset('/assets/images/N2/structure/b-str/s31.png') }}" class="large-img" />
            <p class="note">cube X 4 <br>
                long rectangle piece X 2<br>
                square piece X 1<br>
                two directions connectors X 3<br>
                wheel connector X 1<br>
                block connector X 9<br>
                big wheels (fixed with wheel<br>
                connectors) x 6<br>
                rectangle block X 5</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl !text-white flex-col justify-start  text-start t-slide">
        <div>
            <h2 class=" t-title">Useful Information:</h2>
            <ul class="list-disc ">
                <li>
                    Architects concentrate on the artistic creativity of designs, while engineers focus on the scientific
                    innovations that bring those designs to life.
                </li>
                <li>
                    Engineers design and build a wide variety of things, including machines. They can also specialize in
                    different areas such as civil, electrical, mechanical, structural, industrial, sound, and chemical
                    engineering.
                </li>
                <li>
                    To learn more about the key differences between architects and engineers, read the infographic at:
                    <a href="https://newschoolarch.edu/academics/school-of-architecture/infographic-architecture-vs-engineering/"
                        class="text-[#F7B94A]" target="_blank">
                        https://newschoolarch.edu/academics/school-of-architecture/infographic-architecture-vs-engineering/
                    </a>
                </li>
                <li>
                    Engineering is a way of problem-solving using science and math. Engineers use creativity and their
                    knowledge of these subjects to design solutions to real-world problems.
                </li>
                <li>
                    The process of engineering is fun and teaches valuable life lessons:
                    <ul class="list-disc pl-6 mt-1 space-y-1">
                        <li>There is not always just one right answer to a problem.</li>
                        <li>It is okay to try out any idea you have.</li>
                        <li>It is normal to repeat the process of designing, testing, redesigning, and retesting.</li>
                        <li>It is okay to learn from others’ designs and solutions.</li>
                    </ul>
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
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <ul>
                    <h2 class="!text-white title stroke ">Big Vehicles</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li>
                        Display pictures of various types of big vehicles such as dump truck,
                        train, bus etc. Encourage children to create these vehicles using
                        different combination of the construction toys e.g. use a mix of
                        rectangle pieces and blocks OR use only the cubes.
                    </li>
                </ul>

                <ul class="list-decimal">
                    <h2 class="t-title">What to do:</h2>
                    <li>Encourage children to create a big vehicle.</li>
                    <li>Encourage children to identify the shapes on the picture and
                        pieces and blocks to form the shapes for their vehicles.</li>

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
                    window.location.href = "{{ route('BigstructureSelection') }}";
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
