@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn what a simple machine is</li>
                <li>Explore and learn about the characteristics of a simple machine - inclined plane</li>
                <li>Understand the uses of an inclined plane</li>
                <li>Understand that the steepness of an inclined plane affects how far a car will go</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>

                <div class="flex gap-20">
                    <ul class="list-disc ">
                        <li>Simple Machine</li>
                        <li>Ramp</li>
                        <li>Inclined Plane</li>

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
            <h2 class="font-bold t-title">Preparations:</h2>
            <div class="flex   justify-between">
                <ul class="list-disc ">
                    <li>1 height adjustable inclined plane (set up with any suitable items; can form with a board or
                        cardboard and 3 boxes of same heights)</li>
                    <li>1 measuring mat</li>
                    <li>1 toy car</li>
                    <li>1 sticky note pad</li>
                </ul>

            </div>
            <img src="/assets/images/K1/sm/plane/plane9.png" />
        </div>



        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">

        <div>
            <h2 class="font-bold t-title">how to do the experiment and things to consider:</h2>
            <div class="flex   justify-between">
                <ul class="list-decimal ">
                    <li>Have children roll a car down an inclined plane to see how far it goes.
                        Use a sticky note to mark the result on the measuring mat.</li>

                </ul>

            </div>
            <img src="/assets/images/K1/sm/plane/plane11.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">

        <div>
            <h2 class="font-bold t-title">how to do the experiment and things to consider:</h2>
            <div class="flex   justify-between">
                <ul class="list-none">
                    <li>
                        2.Let children adjust the height of the inclined plane and test again.
                        [Guide children to count and compare results.]</li>

                </ul>

            </div>
            <div class="flex justify-around gap-1">

                <img class="w-[300px] h-[200px]   pt-3" src=" /assets/images/K1/sm/plane/plane13.png" />
                <img class="w-[300px] h-[200px]  pt-3" src="/assets/images/K1/sm/plane/plane13.png" />
                <img class="w-[300px] h-[200px]   pt-3" src="/assets/images/K1/sm/plane/plane13.png" />
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>




    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">

        <div>
            <h2 class="font-bold t-title">how to do the experiment and things to consider:</h2>
            <div class="flex   justify-between">
                <ul class="list-none ">
                    <li>
                        3.Guide children to make conclusions based on their experiment results</li>

                </ul>

            </div>
            <img src="/assets/images/K1/sm/plane/plane14.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">To carry out this experiment successfully, you may consider:</h2>
            <div class="flex   justify-between">
                <ul class="list-disc ">

                    <li>Paste the first unit of the measuring mat on the lower end of the inclined plane, so that the car
                        will move smoothly from the inclined plane to the floor.</li>
                    <li>If the length of the prepared inclined plane (e.g. board) is not very long, the steepness of the
                        inclined plane (e.g. height of the 3 boxes) should not be too much (too high) because the car might
                        crash on the floor and slow down before continuing to move on.</li>
                    <li>Use different toy cars to do a test run and choose one that is suitable for the experiment
                        beforehand.</li>


                </ul>

            </div>
        </div>



        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 7 --}}
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
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        , click on it for additional information or activity.
                    </li>
                    <li>Always ask questions to encourage children to think and share their ideas first before giving
                        out
                        any information.</li>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>

    {{-- slide 8 --}}


    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title title stroke !text-center">Which height of the inclined plane do you think <br>
                will make the car go the longest distance?</h2>


            <div class="flex justify-center align-middle">

                <img class="!text-center" src="/assets/images/K1/sm/plane/plane10.png" />
            </div>
            <p class="!text-white"> Note: Plot children's prediction on the graph. At the end, put a star to mark the final
                result.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <div class="!text-center">

                <h2 class="font-bold t-title title stroke  mb-3">Learning Centre Idea
                </h2>
            </div>
            <br>
            <h2 class="font-bold t-title  !text-white">How to make the car move to the place that you want? </h2>

            <ul class="list-none">
                <li>What and how to set up: </li>
                <li>Place things as listed in preparations and some other things like
                    boxes of different heights here.</li>
            </ul>

<br>
<br>
<br>

            <h2 class="font-bold t-title !text-white ">What to do: </h2>

            <ul class="list-none">

                <li>1.Think of how far you want the car to move to. Use a sticky note
     to mark it on the measuring mat.</li>
                <li>2.Change the height of the inclined plane and test if the car will
                    roll down the inclined plane and reach the place that you want. </li>

            </ul>


        </div>
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
                    window.location.href = "{{ route('K1simpleMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
