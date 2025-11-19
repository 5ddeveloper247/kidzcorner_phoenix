@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is a Wedge?</h2>

    {{-- sldie 1  --}}
    <div class="flex !text-white flex-col justify-around text-start t-slide">
        <div>
            <h2 class=" t-title">Children will be able :</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the characteristics of a simple machine – wedge</li>
                <li>Understand the uses of a wedge</li>
                <li>Understand that the wedge shape of a triangular block helps it to go into moist sand, play dough, and
                    water easily</li>
                <li>Understand that the wedge shape of a triangular block helps it to cut through moist sand and move
                    forward easily</li>
                <li>Understand that the wedge is more effective to cut through air when an object is moving fast</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machine</li>
                <li>Wedge</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex !text-white flex-col justify-start items-center text-start t-slide">
        <div>
            <h2 class="t-title  !text-white">Preparations for Activity 1 and 2:</h2>
            <ul class="list-disc ">
                <li>1 large and shallow container filled with sand</li>
                <li>1 triangular block</li>

            </ul>
        </div>
        <img src="{{ asset('/assets/images/K1/sm/wedge/w1.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="flex !text-white flex-col justify-start items-center  text-start t-slide">
        <div>
            <h2 class="t-title  !text-white">Preparations for Activity 3:</h2>
            <ul class="list-disc ">
                <li>1 large container filled with water</li>
                <li>1 triangular block</li>

            </ul>
        </div>
        <img src="{{ asset('/assets/images/K1/sm/wedge/w25.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class="flex !text-white flex-col justify-start items-center  text-start t-slide">
        <div>
            <h2 class="t-title  !text-white">Preparations for Activity 4:</h2>
            <ul class="list-disc ">
                <li>Play dough</li>
                <li>1 triangular block, rectangular block and circular block</li>

            </ul>
        </div>
        <img src="{{ asset('/assets/images/K1/sm/wedge/w29.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 5 --}}

    <div class="flex !text-white flex-col justify-start items-center  text-start t-slide">
        <div>
            <h2 class="t-title  !text-white">Preparations for Activity 5:</h2>
            <ul class="list-disc ">
                <li>1 cardboard</li>
            </ul>
        </div>
        <img src="{{ asset('/assets/images/K1/sm/wedge/w32.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" t-slide hidden flex flex-col  items-center justify-center ">
        <h2 class="text-[#F7B94A] !text-[2vw] stroke ">Is it easier to move this block forward with its pointed side or its
            flat side?</h2>
        <img src="{{ asset('/assets/images/K1/sm/wedge/w21.png') }}" class="img-sm" />
        <p class=" note">Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.
        </p>
    </div>


    {{-- sldie 7 --}}
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





    {{-- sldie 8 --}}
    <div class="flex !text-white flex-col justify-center items-center text-start t-slide">
        <h2 class="title stroke !text-center">Learning Centre Idea</h2>
        <div class="text-start">
            <h2 class="text-[2vw] text-white stroke">Fun with Wedges</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Place things as listed in preparations and some other things such as</li>
                <li>plastic knives, safety scissors and blocks with different shapes.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 7 --}}
    <div class="flex !text-white flex-col justify-start items-center text-start t-slide">
        <h2 class="title stroke !text-center">Learning Centre Idea</h2>
        <div class="text-start">
            <h2 class="text-[2vw] text-white stroke">Fun with Wedges</h2>
            <h2 class="t-title">What to do:</h2>
            <ul>
                <li>1. Test out which block can be easily pushed into sand, water and play dough</li>
                <li>2. Test out which block can easily move through sand and water.</li>
                <li>3. Test out how you can move a cardboard easily in air.</li>
                <li>4. Have fun cutting play dough with plastic knives and safety scissors</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
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
        <button class="nextButton ">
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
            const doneButton = document.querySelector(".doneButton"); //  DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //  Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //  NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //  Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //  First slide pe hai →  
                    window.location.href = "{{ route('WedgeSelection') }}";
                } else {
                    //  Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('WedgeSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
