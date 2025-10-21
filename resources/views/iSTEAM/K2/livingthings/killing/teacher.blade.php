@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to take sample bacteria from ourselves</li>
                <li>Test if hand sanitizers, hand soaps and toothpastes help to kill bacteria</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between ">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>

                <div class="flex gap-20">
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
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>2 Petri dishes with nutrient agar</li>
                <li>Cotton buds</li>
                <li>Gloves</li>
                <li>Self-adhesive labels (preferably small to avoid blocking of vision during observation of sampled Petri
                    dishes)</li>
                <li>1 disinfectant spray</li>
                <li>1 dirty shoe (a sandal or slipper is easier for preparation of test samples)</li>
                <br>
                <h2 class="font-bold">Definition of some words:</h2>
                <li>Antibiotics - medicine used to kill bacteria and treat infections</li>
                <li>Antiseptics - things used to kill bacteria by applying on the skin</li>
                <li>Petri dish - a flat dish with lid that scientists use to grow tiny living things such as bacteria</li>
                <li>Nutrient agar - jelly-like thing that contains nutrients supporting growth of bacteria</li>
                <li>Agar plate - a Petri dish filled with nutrient agar</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 3 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start list-disc">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                Brief children on the mission of the activity - prepare sampled petri dishes for <br>
                test. [Divide children into 3 groups to do the activity. Tell them that they are <br>
                going to prepare sampled petri dishes for test. Advise them take turns to do the <br>
                steps in groups. ]</li>
            <li>Note: Try to do the activity right after outdoor play or meal.</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k18.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start list-decimal">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                (G1 & G2) Use a cotton bud to go through hand of a group member to pick up sample bacteria. [Guide and
                advise children to choose a group member as the subject of the test and another member to do the step with
                hands wearing gloves. ]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k9.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start list-decimal">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                (G3) Use a cotton bud to go through teeth of a group member to pick up sample bacteria. [Guide and advise
                children to choose a group member as the subject of the test and another member to do the step with hands
                wearing gloves. ]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k10.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                2.(G1, G2 & G3) Remove the lid of a petri dish, use the cotton bud to lightly draw many lines on the agar in
                the dish and close the lid again. [Guide and advise children to choose another group member to do the step
                with hands wearing gloves. Once done, throw away the used cotton bud.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k19.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 7 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                3.(G1, G2 & G3) Label the sampled petri dish. [Guide and advise children to choose another group member to
                do the step. Small labels are preferred, so help to write on the labels if needed.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k13.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 8 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                4.Invite the group member to thoroughly clean his/her hands with hand sanitizers (G1) or hand soap (G2).
                [Remind children that the subject of the experiment will do this step. You may get all children to do this
                step together if the activity starts right after outdoor play or meal. Advise children to clean properly.]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k20.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 16 --}}
    {{-- <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Notes:</h2>
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
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
                        Click on this <span class="font-bold">shortcut icon</span>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />

        </div>

    </div> --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                4.Invite the group member to thoroughly brush his/her teeth with toothpastes (G3). [Remind children that the
                subject of the experiment will do this step. You may get all children to do this step together if the
                activity starts right after outdoor play or meal. Advise children to brush teeth with proper techniques .]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/killing/k15.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 9 --}}
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                5.(G1, G2 & G3) Use a new cotton bud to repeat step 1-3 . [Guide and advise children take turns to do the
                steps . Help if needed. Remember to use new cotton bud for each sample.] </li>
            <img src="/assets/images/K2/livingthings/killing/k16.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- slide 10  --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start ">
            <h2 class="!text-white">How to do the activity in groups and things to consider:</h2>
            <li>
                6.Put all the sampled petri dishes in a box and keep the box at a cooling place . [Teacher to do the step.
                For safety reason, use tape to seal the sides of all the petri dishes to prevent children from opening them
                . Tell children that bacteria need time to grow, so we'll check the results at least 10 days later .
                Remember to keep the box at a place with temperature between 24-29 ℃.]</li>
            <img src="/assets/images/K2/livingthings/killing/k17.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- slide 16 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Notes:</h2>
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
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
                        Click on this <span class="font-bold">shortcut icon</span>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />

        </div>

    </div>
    {{-- slide 30 --}}
    <div class="slide flex flex-col items-center justify-center gap-5   ">



        <img src="/assets/images/K2/livingthings/killing/k6.png" />


        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-300 text-xl">⭐</span>
            to mark the final result.</p>
    </div>
    {{-- slide 10  --}}

    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul class="list-disc">
                <h2 class="!text-white title stroke font-bold">Fun Facts</h2>
                <h2>What and how to set up:</h2>
                <li>There are around 40 million bacteria in a gram of soil.</li>
                <li>Scientists estimate that bacteria produce nearly half the oxygen <br>
                    (plants and animals need this type of gas to survive) found in the <br>
                    world.</li>
                <li>When two people kiss, they exchange between 10 million and 1 billion
                    bacteria.</li>
            </ul>


        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]" />
    </div>








    {{-- Buttons --}}
    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-0">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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
                    window.location.href = "{{ route('k2livingthings') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
