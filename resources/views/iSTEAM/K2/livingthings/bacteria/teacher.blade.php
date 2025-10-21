@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}

    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know the basic characteristics of bacteria</li>
                <li>Know that there are good and bad bacteria</li>
                <li>Know that most bacteria around us are actually good</li>
                <li>Learn how to use the scientific method for growing bacteria and test if disinfectant sprays help to kill
                    bacteria</li>
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


    {{-- slide  3 --}}
    
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li>How to grow bacteria and things to consider: <br> 1.Use a cotton bud to go through surface of a dirty shoe
                to pick up sample bacteria. [Invite and guide a
                child to do the step with hands wearing gloves .]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/bacteria/b27.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 4 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li>How to grow bacteria and things to consider: <br> 2.Remove the lid of a petri dish, use the cotton bud to
                lightly draw many lines on the agar and close the lid again. [Invite and guide another child to do the step
                with hands wearing gloves. Once done, throw away the used cotton bud. To see obvious result at the end, make
                sure to draw many lines on the agar.]</li>
        </ul>
        <div class="flex items-start gap-1">
            <img src="/assets/images/K2/livingthings/bacteria/b28.png" />
            <img src="/assets/images/K2/livingthings/bacteria/b29.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide  5 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li>How to grow bacteria and things to consider: <br> 3.Label the sampled petri dish. [Invite and guide another
                child to do the step . Small labels are preferred, so help to write on the labels if needed.]</li>
        </ul>

        <img src="/assets/images/K2/livingthings/bacteria/b30.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- slide  6 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li>How to grow bacteria and things to consider: <br> 4.Spray on the surface of the shoe. [Invite and guide
                another child to do the step. Help if needed.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/bacteria/b31.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- slide 7 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li>How to grow bacteria and things to consider: <br> 5.Use a new cotton bud to repeat step 1-3. [Invite and
                guide different children to do the steps. Help if needed. Remember to use new cotton bud for each sample.]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/bacteria/b34.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 8 --}}
    <div class="slide flex flex-col  items-baseline justify-start gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li>How to grow bacteria and things to consider: <br> 6.Put both the sampled petri dishes in a box and keep the
                box at a cooling place . [Teacher to do the step. For safety reason, use tape to seal the sides of all the
                petri dishes to prevent children from opening them . Tell children that bacteria need time to grow, so we'll
                check the results at least 10 days later. keep the box at a place with temperature between 24-29 C.]
                <img src="/assets/images/K2/livingthings/bacteria/b33.png" />
                <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                    class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 9 --}}
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


    {{-- sldie 10 --}}

    <div class="slide flex flex-col items-center justify-center gap-5   ">
        <img src="/assets/images/K2/livingthings/bacteria/b26.png" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-300 text-xl">⭐</span>
            to mark the final result.</p>
    </div>

    {{-- slide 11  --}}

    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul>
                <h2 class="!text-white title stroke font-bold">Fun Facts</h2>
                <h2>What and how to set up:</h2>
                <li>Use your creativity to design graphic fact sheet for every fun fact below.
                    Guide children to understand the facts.</li>
            </ul>
            <div>
                <h2>What to do:</h2>
                <ul >
                    <li>A bacterium is made up of only one cell. DNA is stored in the cell.</li>
                    <li>You have more bacteria than cells in your body.</li>
                    <li>
                        If you put all the bacteria in your body together, they weigh around
                        1.8kg</li>
                        <li>Most antibiotics are made from bacteria.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]" />
    </div>








    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="absolute bottom-0">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

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
                    window.location.href = "{{ route('bacteria') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
