@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Explore and learn about the basic characteristics of living things</li>
                <li class="text-[1.3vw]">Analyse and sort things into living and non-living things</li>
                <li class="text-[1.3vw]">Programme a robot to produce sound and light</li>
                <li class="text-[1.3vw]">Know that all animals are living things</li>
                <li class="text-[1.3vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div class="flex gap-[5vw]">
                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Living Thing</li>
                    <li class="text-[1.3vw]">Non-living Thing</li>
                    <li class="text-[1.3vw]">Move</li>
                    <li class="text-[1.3vw]">Water</li>
                    <li class="text-[1.3vw]">Food</li>
                </ul>
                <ul class="list-disc">
                    <li class="text-[1.3vw]">Air </li>
                    <li class="text-[1.3vw]">Grow</li>
                    <li class="text-[1.3vw]">Produce Young</li>
                    <li class="text-[1.3vw]">Animals</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div>
            <h2 class="font-bold t-title">Preparations for Class Activity 1 - comparison of living and non-living things:
            </h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">A teddy bear</li>
                <li class="text-[1.3vw]">Use whiteboard mode during discussion [Tick or cross to complete the
                    table of comparison (as shown below) with the whiteboard pen. For
                    documentation purpose, you may want to save or print the page.]</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/K2/livingthings/things/t23.png') }}" alt="Teacher" class="" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div>
            <h2 class="font-bold t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc">
                <li class="text-[1.3vw]">
                    Ask questions to prompt children share their prior knowledge and experiences. You may ask questions
                    based on children's interest and response too.
                </li>
                <li class="text-[1.3vw]">
                    Some possible questions for Activity 1: What will happen if you have no access to water? How long do you
                    think you can live without water? Why do we need food? How long do you think you can live without food?
                    How do you change since you were born?
                </li>
                <li class="text-[1.3vw]">
                    Some possible questions for Activity 2: A piece of fried chicken is made from chickens, which are
                    animals. Would you call it a living or non-living thing? Why? Ball, toy train and doll are toys. Do you
                    think toys are living or non-living things? Why? If all toys are non-living things, how about the
                    cartoon characters that we know? Are they living or non-living things? Why?
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start">
        <div>
            <h2 class="font-bold t-title">Additional information:</h2>
            <ul class="list-disc">
                <li class="text-[1.3vw]">
                    Many things have one or more characteristics of living things, but a living thing must has all of the
                    characteristics of living things.
                </li>
                <li class="text-[1.3vw]">
                    Many things that move like car, fan and windmill are non-living things. These
                    things moved by external power like fuel, battery, electricity and wind.
                </li>
                <li class="text-[1.3vw]">
                    All human-made things are non-living things. But some natural things around us like rock, water, air and
                    cloud are non-living things too.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 10 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex">
                        If you see
                        <span class="info-btn">
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, class="text-amber-400" click on the picture to watch the video.
                    </li>
                    <li class="text-[1.3vw]">Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-[1.3vw]" class="text-amber-400">The fundamental skill of coding or programming is
                        ability to
                        differentiate and navigate self to move forward, backward, turn left
                        and turn right. If children are not ready, play more related games to
                        improve the skill.</li>
                    <li class="text-[1.3vw]" class="text-amber-400">It is important to inculcate the habit of always
                        laying out the steps
                        using coding cards before working on the Blockly because it's not easy
                        for children to remember all the steps when they use Blockly to
                        programme.</li>
                    <li class="text-[1.3vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="text-[1.3vw] flex">
                        Click on this <span class="font-bold t-title">shortcut icon</span>
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="video-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
        </div>
    </div>


    {{-- slide 11 --}}
    <div class="text-white flex flex-col items-center justify-center text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <ul>
                    <h2 class="!text-white title stroke">Living or Non-Living</h2>
                    <h2 class="t-title">What and how to set up:</h2>
                    <li class="text-[1.3vw]">
                        Place pictures of living (different animals) and non-living things
                        (toys, transportation, household items, etc) here.
                    </li>
                </ul>

                <ul>
                    <h2 class="t-title">What to do:</h2>
                    <li class="text-[1.3vw]">
                        Name the thing in each picture.
                    </li>
                    <li class="text-[1.3vw]">
                        Sort the pictures into living and non-living things.
                    </li>
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
