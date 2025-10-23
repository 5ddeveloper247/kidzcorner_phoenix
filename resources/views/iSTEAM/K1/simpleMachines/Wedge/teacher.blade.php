@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
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

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>

                <div class="flex gap-20">
                    <ul class="list-disc ">
                        <li>Simple Machine</li>
                        <li>Wedge</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title  !text-white">Preparations for Activity 1 and 2:</h2>
            <div>
                <ul class="list-disc ">
                    <li>1 large and shallow container filled with sand</li>
                    <li>1 triangular block</li>

                </ul> <br>
                <img src="/assets/images/K1/sm/wedge/w1.png" />


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title  !text-white">Preparations for Activity 3:</h2>
            <div>
                <ul class="list-disc ">
                    <li>1 large container filled with water</li>
                    <li>1 triangular block</li>

                </ul> <br>
                <img src="/assets/images/K1/sm/wedge/w25.png" />


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title  !text-white">Preparations for Activity 4:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Play dough</li>
                    <li>1 triangular block, rectangular block and circular block</li>

                </ul> <br>
                <img src="/assets/images/K1/sm/wedge/w29.png" />


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 5 --}}

    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title  !text-white">Preparations for Activity 5:</h2>
            <div>
                <ul class="list-disc ">
                    <li>1 cardboard</li>

                </ul> <br>
                <img src="/assets/images/K1/sm/wedge/w32.png" />


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>





    {{-- sldie 4 --}}
    <div class=" slide hidden flex flex-col items-center align-middle justify-center gap-5">
        <h2 class="title stroke ">Is it easier to move this block forward with its pointed side or its flat side?</h2>
        <img src="/assets/images/K1/sm/wedge/w21.png" />
        <p class=" note">Note: Plot children's prediction on the graph. At the end, put a star to mark the final result.
        </p>
    </div>
    {{-- sldie 5 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc ">
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/play.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>Always ask questions to encourage children to think and share their
                        ideas first before giving out any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.
                    </li>
                    <li>Print out the Learning Journal (if any) for every <br>
                        child to complete at the end of the lesson.</li>

                    <li>Click on this shortcut icon if you need to go to some <br>
                        parts of the lesson quickly.</li>
                    Click on this <span class="font-bold t-title">shortcut icon</span>
                    <span
                        class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                        <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                            class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                        <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                        <img src="{{ asset('assets/images/pptimages/home-icon.png') }}"
                            class="absolute top-[16px] left-[16px] h-8 w-8" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />

        </div>
    </div>



    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-center gap-[3rem] text-start">


        <h2 class="font-bold t-title  title stroke flex justify-center mb-2">Learning Centre Idea</h2>

        <ul class=!text-white>
            <h2 class="  font-bold  title !text-white  !text-start">Fun with Wedges</h2>

            <li class=" !text-white">What and how to set up:</li>
            <li class=" !text-white">Place things as listed in preparations and some other things such as</li>
            <li class=" !text-white">plastic knives, safety scissors and blocks with different shapes.</li>

        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 7 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-[5rem] text-start">
        <h2 class="font-bold t-title  title stroke !text-center">Learning Centre Idea</h2>
        <ul  class="!text-start">
            <h2 class="  font-bold  title !text-white  !text-start">Fun with Wedges</h2>
            <li class="  font-bold   !text-white  !text-start">What to do:</li>
            <li class=" !text-white">1. Test out which block can be easily pushed into sand, water and <br> play dough</li>
            <li class=" !text-white">2. Test out which block can easily move through sand and water.</li>
            <li class=" !text-white">3. Test out how you can move a cardboard easily in air.</li>
            <li class=" !text-white">4. Have fun cutting play dough with plastic knives and safety <br>scissors</li>
        </ul>

    <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
        class="absolute teacher-img1" />
    </div>







    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton ">
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
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1simpleMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
