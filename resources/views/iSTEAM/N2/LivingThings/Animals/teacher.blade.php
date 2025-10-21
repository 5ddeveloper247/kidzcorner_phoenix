@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about the basic characteristics of living things</li>
                <li>Analyze and identify living and non-living things</li>
                <li>Know that all animals are living things</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>Non-living Thing</li>
                    <li>Move</li>
                    <li>Drink</li>
                    <li>Eat</li>
                    <li>Breathe</li>
                    <li>Grow</li>
                    <li>Nutrients</li>
                    <li>Animals</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>A doll or a figurine of a person</li>
                <li>Use whiteboard mode during discussion [Tick or cross to complete the table of comparison
                    (as shown below) with the whiteboard pen. For documentation purpose, you may want to
                    save or print the page.]</li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <ul>
                <h2 class="text-[30px]">You (Living Thing)</h2>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Do you move on you own?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an67.png') }}" />
                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Do you drink?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an67.png') }}" />

                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Do you eat?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an67.png') }}" />

                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Do you breath?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an67.png') }}" />

                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Do you grow (get bigger)?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an67.png') }}" />


            </ul>
            <ul>
                <h2 class="text-[30px]">Doll (Non-Living Thing)</h2>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Does you move on you own?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an68.png') }}" />

                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Does you drink?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an68.png') }}" />

                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Does you eat?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an68.png') }}" />

                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Does you breath?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an68.png') }}" />

                </li>
                <li class="flex items-center w-[100%] justify-between ">
                    <p class="text-2xl text-white">Does you grow (get bigger)?</p>
                    <img src="{{ asset('assets/images/N2/LivingThings/an68.png') }}" />


            </ul>
        </div>
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white justify-start gap-y-10 text-start w-[75%] relative">
        <div>
            <h2 class="font-bold">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li> Ask questions to prompt children share their prior knowledge and experiences.</li>
                <li> Some possible questions for Activity 1: What do you see on the doll? How are you
                    and the doll similar? How are you and the doll different? How do you feel when
                    you did not eat breakfast or when you did not have any lunch?
                    How did you feel if you have no water to drink? What
                    happens if you do not eat/drink for the whole day?</li>
                <li>Some possible questions for Activity 2: Ball, toy train and
                    doll are toys. Do you think toys are living or non-living
                    things? Why? If all toys are non-living things, how about
                    the cartoon characters that we know? Are they living
                    or non-living things? Why?</li>
            </ul>
        </div>
   
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[300px]"/>
            

    </div>


    {{-- slide 4 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <div>
            <h2 class="font-bold underline">Additional information:</h2>
            <ul class="list-disc">
                <li>Many things have one or more characteristics of living things, but a living thing
                    must has all of the characteristics of living things.</li>

                <li>Many things that move like car, fan and windmill are non-living things.
                    These things moved by external power like fuel, battery,
                    electricity and wind.</li>

                <li>All human-made things are non-living things. But some
                    natural things around us like rock, water, air and cloud
                    are non-living things too.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[350px] object-contain absolute right-[250px] bottom-[150px] teacher-img1" />
    </div>


    {{-- slide 5 --}}

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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />

        </div>

    </div>







    {{-- Done Button --}}
    <div class="down-btn-container">
        <button
            class=" doneButton ">
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
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
