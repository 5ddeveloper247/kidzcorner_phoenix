@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn that plants are living things</li>
                <li>Explore and learn that plants have the same the basic characteristics
                    of living things as animals</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>Seeds</li>
                    <li>Plants</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations For Class Activity 1</h2>
            <ul class="list-disc ">
                <li>For the experiment that shows plants breathe, you will need to prepare the following materials:
                    <ul>
                        <li>A large clear bowl with lukewarm water</li>
                        <li>A big leaf from a plant</li>
                        <li>A stone or marble to be placed on top of the leaf so that the leaf is fully submerged under the
                            water</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="font-bold underline">Preparations For Class Activity 2</h2>
            <ul class="list-disc list-inside space-y-2 mt-2">
                <li>Teacher should have two identical type potted plants. These can be bought or planted a couple of weeks
                    before. The plants used in this experiment were planted from the red bean (Adzuki bean).</li>
                <li>Prepare an opaque box so that no light can get to the plant in the box.</li>
            </ul>
        </div>
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white justify-start gap-y-10 text-start w-[75%] relative">
        <div>
            <h2 class="font-bold">Some things to note for Class Activity 2</h2>
            <ul class="list-disc ">
                <li> Compare the plant after 7 days or more. Some plants may still be able to
                    survive in the box but it will not grow as well as the one outside.
                    Measure the height of the plants and the size of the leaves during the
                    comparison. Please refer to the following pages as reference.</li>

                <li>It may take 20 days for the plant in the box to die
                    (dry up). You can have more than one session for this
                    activity. Do remember to continue to care for
                    the plant outside so that the experiment is accurate</li>

                <li>Refer to the following slides to see the results.</li>
                <li>Encourage children to share their thoughts as they compare the two plants.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[300px]" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white justify-start gap-y-10 text-start w-[75%] relative">
        <div>
            <h2 class="font-bold">Some things to note for Class Activity 2</h2>
            <ul class="list-disc ">
                <li> Compare the plant after 7 days or more. Some plants may still be able to
                    survive in the box but it will not grow as well as the one outside.
                    Measure the height of the plants and the size of the leaves during the
                    comparison. Please refer to the following pages as reference.</li>

                <li>It may take 20 days for the plant in the box to die
                    (dry up). You can have more than one session for this
                    activity. Do remember to continue to care for
                    the plant outside so that the experiment is accurate</li>

                <li>Refer to the following slides to see the results.</li>
                <li>Encourage children to share their thoughts as they compare the two plants.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[300px]" />
    </div>



    {{-- slide 5 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">Comparing Plant ‘A’ and Plant ‘B’ <br>
            Measure the heigh of Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt74.png') }}" />
        <p class="note">Note: Teacher to assist in measuring the plant.</p>
    </div>


    {{-- sldie 6 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">Take plant B out from the box and measure it’s height.</h2>
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/lt75.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/lt74.png') }}" />
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">Take plant B out from the box and measure it’s height.</h2>

        <img src="{{ asset('assets/images/N2/LivingThings/lt72.png') }}" />
    </div>


    {{-- slide 8 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">Plant B has also grown taller after 1 week!</h2>

        <img src="{{ asset('assets/images/N2/LivingThings/lt76.png') }}" />
    </div>


    {{-- slide 9 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">Let’s compare plants A and B side by side.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt77.png') }}" />
        <p class="note">Note: Teacher to explain that the height seen is not accurate as Plant B is not in soil.
            Encourage children to point out the differences.</p>
    </div>


    {{-- sldie 10 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">The leaf on Plant A is bigger than the leaf on Plant B.
            There are also more leaves on Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt78.png') }}" />
    </div>


    {{-- sldie 11 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">With sunlight, soil and water, Plant A can make food
            and grow bigger.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt77.png') }}" />
    </div>

    {{-- sldie 12 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">Without sunlight, soil and water, Plant B cannot make food
            and it does not grow as big as Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt77.png') }}" />
    </div>

    {{-- sldie 13 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <h2 class="font-bold underline">Without sunlight, soil and water, Plant B cannot make food
            and it does not grow as big as Plant A.</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/lt79.png') }}" />
    </div>


    {{-- slide 14 --}}
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


    {{-- slide 15 --}}
    <div class="text-white flex flex-col text-start items-center justify-center text-2xl slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div class="flex ">
            <div>
                <h2 class="!text-white title stroke">Our Class Plant</h2>
                <h2 class="font-bold underline">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place a water spray and magnifying glass next to the potted plant. Provide writing materials.</li>
                </ul>
                <br>
                <h2 class="font-bold underline">What to do:</h2>
                <ul class="list-decimal">
                    <li> Invite children to spray a bit of water on the soil if
                        the soil is dry.</li>
                    <li> Encourage children to observe for changes to the
                        seed and draw what they see.</li>
                </ul>

            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350px] object-contain" />
        </div>

    </div>








    {{-- Done Button --}}
    <div class="absolute bottom-0">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img
                    src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
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
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
