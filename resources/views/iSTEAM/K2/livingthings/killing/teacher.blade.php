@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.2vw]">Learn how to take sample bacteria from ourselves</li>
                <li class="text-[1.2vw]">Test if hand sanitizers, hand soaps and toothpastes help to kill bacteria</li>
                <li class="text-[1.2vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between ">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li class="text-[1.2vw]">Sun</li>
                    <li class="text-[1.2vw]">Bright / Brightly</li>
                    <li class="text-[1.2vw]">Light</li>
                    <li class="text-[1.2vw]">Stars</li>
                    <li class="text-[1.2vw]">Fire</li>
                    <li class="text-[1.2vw]">Natural</li>
                    <li class="text-[1.2vw]">Natural Lights</li>
                    <li class="text-[1.2vw]">Man-made Lights</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li class="text-[1.2vw]">2 Petri dishes with nutrient agar</li>
                <li class="text-[1.2vw]">Cotton buds</li>
                <li class="text-[1.2vw]">Gloves</li>
                <li class="text-[1.2vw]">Self-adhesive labels (preferably small to avoid blocking of vision during
                    observation of sampled Petri
                    dishes)</li>
                <li class="text-[1.2vw]">1 disinfectant spray</li>
                <li class="text-[1.2vw]">1 dirty shoe (a sandal or slipper is easier for preparation of test samples)</li>
                <br>
                <h2 class="font-bold t-title">Definition of some words:</h2>
                <li class="text-[1.2vw]">Antibiotics - medicine used to kill bacteria and treat infections</li>
                <li class="text-[1.2vw]">Antiseptics - things used to kill bacteria by applying on the skin</li>
                <li class="text-[1.2vw]">Petri dish - a flat dish with lid that scientists use to grow tiny living things
                    such as bacteria</li>
                <li class="text-[1.2vw]">Nutrient agar - jelly-like thing that contains nutrients supporting growth of
                    bacteria</li>
                <li class="text-[1.2vw]">Agar plate - a Petri dish filled with nutrient agar</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start list-disc">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                Brief children on the mission of the activity - prepare sampled petri dishes for <br>
                test. [Divide children into 3 groups to do the activity. Tell them that they are <br>
                going to prepare sampled petri dishes for test. Advise them take turns to do the <br>
                steps in groups. ]</li>
            <li class="text-[1.2vw]">Note: Try to do the activity right after outdoor play or meal.</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k18.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start list-decimal">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                (G1 & G2) Use a cotton bud to go through hand of a group member to pick up sample bacteria. [Guide and
                advise children to choose a group member as the subject of the test and another member to do the step with
                hands wearing gloves. ]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k9.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start list-decimal">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                (G3) Use a cotton bud to go through teeth of a group member to pick up sample bacteria. [Guide and advise
                children to choose a group member as the subject of the test and another member to do the step with hands
                wearing gloves. ]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k10.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                2.(G1, G2 & G3) Remove the lid of a petri dish, use the cotton bud to lightly draw many lines on the agar in
                the dish and close the lid again. [Guide and advise children to choose another group member to do the step
                with hands wearing gloves. Once done, throw away the used cotton bud.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k19.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                3.(G1, G2 & G3) Label the sampled petri dish. [Guide and advise children to choose another group member to
                do the step. Small labels are preferred, so help to write on the labels if needed.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k13.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                4.Invite the group member to thoroughly clean his/her hands with hand sanitizers (G1) or hand soap (G2).
                [Remind children that the subject of the experiment will do this step. You may get all children to do this
                step together if the activity starts right after outdoor play or meal. Advise children to clean properly.]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k20.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 16 --}}
    {{-- <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.2vw]">
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
                    <li class="text-[1.2vw]">Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-[1.2vw]">Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="text-[1.2vw]">
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

    </div> --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                4.Invite the group member to thoroughly brush his/her teeth with toothpastes (G3). [Remind children that the
                subject of the experiment will do this step. You may get all children to do this step together if the
                activity starts right after outdoor play or meal. Advise children to brush teeth with proper techniques .]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k15.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 9 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                5.(G1, G2 & G3) Use a new cotton bud to repeat step 1-3 . [Guide and advise children take turns to do the
                steps . Help if needed. Remember to use new cotton bud for each sample.] </li>
            <img src="/assets/images/K2/livingthings/killing/k16.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                class="absolute teacher-img1" />
    </div>

    {{-- slide 10  --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li class="text-[1.2vw]">
                6.Put all the sampled petri dishes in a box and keep the box at a cooling place . [Teacher to do the step.
                For safety reason, use tape to seal the sides of all the petri dishes to prevent children from opening them
                . Tell children that bacteria need time to grow, so we'll check the results at least 10 days later .
                Remember to keep the box at a place with temperature between 24-29 ℃.]</li>
            <img src="/assets/images/K2/livingthings/killing/k17.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                class="absolute teacher-img1" />
    </div>

    {{-- slide 16 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.2vw] flex">
                        If you see
                        <span class="info-btn">

                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li class="text-[1.2vw]">
                        If you see
                        <span <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                        </span>
                        , click on it for additional information or activity.
                    </li>
                    <li class="text-[1.2vw]">Always ask questions to encourage children to think and share their ideas
                        first before giving
                        out
                        any information.</li>
                    <li class="text-[1.2vw]">Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-[1.2vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="text-[1.2vw] flex">
                        Click on this 
                        <span class="font-bold t-title">shortcut icon</span>
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                class="absolute teacher-img1" />

        </div>

    </div>
    {{-- slide 30 --}}
    <div class="slide flex flex-col items-center justify-center gap-[1vw]">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">What to do:</h2>
                <ul>
                    <li class="text-[1.2vw]">
                        <strong>*</strong> Invite children to pick up pictures and sort them into groups:
                        <ul class="mt-2 list-[lower-alpha] space-y-1 pl-6">
                            <li class="text-[1.2vw]">Gives light or Does not give light</li>
                            <li class="text-[1.2vw]">Natural light or Man-made light</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                class="absolute teacher-img1" />
        </div>
    </div>


   {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>






    {{-- Buttons --}}
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
