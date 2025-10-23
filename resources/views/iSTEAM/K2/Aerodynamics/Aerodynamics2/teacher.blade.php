@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')

    {{-- title --}}
    <h2 class="text-[57px] text-[#F7B94A] stroke absolute top-[40px] z-[1000]">What is Aerodynamics? 2</h2>



    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Recall the concepts of weight and lift</li>
                <li>Understand the concept of thrust and drag</li>
                <li>Understand real life applications of aerodynamics on aeroplanes</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div class="flex gap-[10rem] items-center">
                <ul class="list-disc ">
                    <li>Gravity</li>
                    <li>Force</li>
                    <li>Weight</li>
                    <li>Lift</li>
                    <li>Aerofoil</li>
                </ul>
                <ul class="list-disc ">
                    <li>Drag</li>
                    <li>Four Aerodynamics Forces</li>
                    <li>Aerodynamics</li>
                    <li>Flaps</li>
                    <li>Spoilers</li>
                    <li>Thrust</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div class="space-y-[30px]">
            <div>
                <h2 class="font-bold t-title">Preparations:</h2>
                <ul class="list-disc">
                    <li>The teacher will have to prepare the items and build the setups needed for the 2 hands-on sessions
                        prior the lesson.</li>
                </ul>
            </div>
            <div>
                <h2>Hands-on Session 1</h2>
                <ul class="list-disc">
                    <li>Use these items to build the setup A (steps of building at the back):</li>
                </ul>
                <div class="flex items-center gap-[10rem]">
                    <ul class="list-disc">
                        <li>Balloons</li>
                        <li>Balloon pump</li>
                        <li>String</li>
                        <li>Tape</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Scissors</li>
                        <li>2 chairs/tables</li>
                        <li>Binder clip</li>
                        <li>Half a straw</li>
                    </ul>
                </div>
            </div>
            <div>
                <h2>Hands-on Session 2</h2>
                <ul class="list-disc">
                    <li>Use these items to build the setup A (steps of building at the back):</li>
                </ul>
                <div class="flex items-center gap-[10rem]">
                    <ul class="list-disc">
                        <li>Balloons of the same type</li>
                        <li>Balloon pump</li>
                        <li>String</li>
                        <li>Tape</li>
                        <li>2x half a straw</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Scissors</li>
                        <li>2 chairs/tables</li>
                        <li>Binder clip</li>
                        <li>Paper plate</li>
                        <li>A4 paper</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to build the setup A for Hands-on Session 1:</h2>
            <ul class="list-decimal">
                <li>Tie a string from one chair/table to the other chair/table. The chairs/tables
                    should be at least 2 metres apart for best result.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/aero/aero1/a23.png') }}" />
        </div>
        <p>Note: This is the final look of the setup A.</p>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start text-start">
        <div>
            <h2 class="font-bold t-title">How to build the setup A for Hands-on Session 1:</h2>
            <ul>
                <li>2. Before tying the string to the second chair/table, insert the string through the straw.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/aero/aero1/a35.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to build the setup A for Hands-on Session 1:</h2>
            <ul>
                <li>3. Inflate a balloon. Use a binder clip to secure the mouth of the balloon.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/aero/aero1/a36.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start text-start">
        <div>
            <h2 class="font-bold t-title">How to build the setup A for Hands-on Session 1:</h2>
            <ul>
                <li>4. Tape the balloon to the straw to complete the setup.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/aero/aero1/a37.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to build the setup B for Hands-on Session 2:</h2>
            <ul>
                <li>1. Tie 2 strings from one chair/table to the other chair/table. The chairs/tables
                    should be at least 2 metres apart for best result.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/aero/aero1/a27.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 8 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to build the setup B for Hands-on Session 2:</h2>
            <ul>
                <li>2. Before tying the string to the second chair/table, insert the string through the
                    straw.</li>
            </ul>
            <img src="{{ asset('assets/images/K2/aero/aero1/a35.png') }}" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to build the setup B for Hands-on Session 2:</h2>
            <ul>
                <li>3. Tape the balloons to the straws to complete the set-up. Trim the paper plate if
                    the edge is pushing against the string.</li>
            </ul>
              <div class="flex items-center gap-5">
                <img src="{{ asset('assets/images/K2/aero/aero1/a38.png') }}" />
                <img src="{{ asset('assets/images/K2/aero/aero1/a39.png') }}" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 10 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
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
                        next to a picture, class="text-amber-400" click on the picture to watch the video.
                    </li>
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
                alt="Teacher" />
        </div>
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
            class="nextButton">
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
                    window.location.href = "{{ route('k2Aerodynamics') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
