@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.2vw]">Observe the results of tests - if disinfectant sprays, hand sanitizers,
                    hand soaps and toothpastes help to kill bacteria</li>
                <li class="text-[1.2vw]">Learn to make conclusions</li>
                <li class="text-[1.2vw]">Know that many cleaning products do help to kill some or most of the
                    bacteria</li>
                <li class="text-[1.2vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between ">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <div>
                    <ul class="list-disc ">
                        <li class="text-[1.2vw]">Living Thing</li>
                        <li class="text-[1.2vw]">Bacteria</li>
                        <li class="text-[1.2vw]">Bacterium</li>
                    </ul>
                    <ul class="list-disc">
                        <li class="text-[1.2vw]">Antibiotics</li>
                        <li class="text-[1.2vw]">Antiseptics</li>
                        <li class="text-[1.2vw]">Pathogens</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li class="text-[1.2vw]">Magnifying glasses (optional)</li>
                <br> <br>
                <h2 class="font-bold t-title">Safety precautions:</h2>
                <li class="text-[1.2vw]">Some bacteria could potentially be pathogenic. Be sure that all the sampled petri
                    <br>
                    dishes are sealed properly with tapes so that children can't open them at all </li>
                <li class="text-[1.2vw]">If you plan to continue observing the growth of bacteria or to display the sampled
                    <br>
                    petri dishes for a period of time, seal each dish in a transparent zipper storage <br>
                    bag and remind children not to take them out during observation sessions.</li>
                <li class="text-[1.2vw]">Seal all the sampled petri dishes in a big zipper storage bag for safe disposal at
                    <br>
                    the end.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 16 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.2vw] flex">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li class="text-[1.2vw]">Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-[1.2vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="text-[1.2vw] flex">
                        Click on this <span class="font-bold t-title">shortcut icon</span>
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
        </div>
    </div>

    {{-- slide 10  --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul class="list-disc">
                <h2 class="!text-white title stroke font-bold">Fun Facts</h2>
                <h2>What and how to set up: <br>Use your creativity to design graphic fact sheet for every fun fact <br>
                    below. Guide children to understand the facts.</h2>
                <li class="text-[1.2vw]">Viruses are non-living things. They are about 1000 times smaller <br>
                    than bacteria.</li>
                <li class="text-[1.2vw]">Sweat itself is odourless. It's the bacteria on the skin that <br>
                    mingles with it and produces body odour.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>



    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    <div id="buttons" class="absolute  flex flex-row gap-6 ">
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

            //   Return button - redirect if on first slide, otherwise go back
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    //   First slide pe hai →  
                    window.location.href = "{{ route('k2livingthings') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2livingthings') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
