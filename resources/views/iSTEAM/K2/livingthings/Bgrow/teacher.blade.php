@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Do Bacteria Grow?</h2>

    {{-- sldie 1  --}}
    <div class="t-slide flex  !text-white flex-col justify-around  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Observe the results of tests - if disinfectant sprays, hand sanitizers,
                    hand soaps and toothpastes help to kill bacteria</li>
                <li>Learn to make conclusions</li>
                <li>Know that many cleaning products do help to kill some or most of the
                    bacteria</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between ">
            <div>
                <h2 class="t-title">Keywords:</h2>
                <div class="flex gap-[5vw]">
                    <ul class="list-disc ">
                        <li>Living Thing</li>
                        <li>Bacteria</li>
                        <li>Bacterium</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Antibiotics</li>
                        <li>Antiseptics</li>
                        <li>Pathogens</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 2 --}}
    <div class="t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Magnifying glasses (optional)</li>
            </ul>
        </div>
        <div>
            <h2 class="t-title">Safety precautions:</h2>
            <ul class="list-disc">
                <li>Some bacteria could potentially be pathogenic. Be sure that all the sampled petri
                    dishes are sealed properly with tapes so that children can't open them at all
                </li>
                <li>If you plan to continue observing the growth of bacteria or to display the sampled
                    petri dishes for a period of time, seal each dish in a transparent zipper storage
                    bag and remind children not to take them out during observation sessions.
                </li>
                <li>Seal all the sampled petri dishes in a big zipper storage bag for safe disposal at
                    the end.
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
    </div>



    {{-- slide 16 --}}
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
                    <span class="relative">
                        If you see <span class="opacity-0">---</span> , click on it for additional information or activity.
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



    {{-- slide 10  --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide hidden">
        <h2 class="text-center title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col">
            <h2 class="!text-white text-[2vw] stroke mb-5">Fun Facts</h2>
            <h2 class="t-title">What and how to set up: </h2>
            <p>Use your creativity to design graphic fact sheet for every fun fact
                below. Guide children to understand the facts.</p>
            <ul class="list-disc pl-9">
                <li>Viruses are non-living things. They are about 1000 times smaller
                    than bacteria.</li>
                <li>Sweat itself is odourless. It's the bacteria on the skin that
                    mingles with it and produces body odour.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>



    {{-- ======================== --}}
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
                    window.location.href = "{{ route('BgrowSelection') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('BgrowSelection') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
