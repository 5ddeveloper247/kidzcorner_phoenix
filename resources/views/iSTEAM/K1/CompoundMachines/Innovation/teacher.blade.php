@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')




    {{-- sldie 1 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Create a Rube Goldberg Machine that includes at least three simple
                    machines together with friends</li>
                <li>Learn about respect, teamwork and perseverance through the
                    activity.</li>

            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Compound Machine</li>
                    <li>Simple Machine</li>
                    <li>Inclined Plane</li>
                    <li>Wedge</li>
                    <li>Wheel And Axle</li>
                    <li>Pulley</li>
                    <li>Screw</li>
                    <li>Lever</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <div class="flex justify-center gap-20">
                <ul class="list-disc ">
                    <li>Bells and toy animals</li>
                    <li>Giant nuts and bolts</li>
                    <li>Pulley and rope</li>
                    <li>Wooden rulers</li>
                    <li>Toy cars</li>
                    <li>Toy tracks or handmade tracks</li>
                    <li>Books of different sizes</li>
                    <li>Ice cream sticks</li>
                    <li>Dominoes and blocks</li>
                    <li>Different types of balls</li>
                    <li>Marbles of different sizes</li>
                </ul>
                <ul>
                    <li>Scissors</li>
                    <li>Adhesive tape</li>
                    <li>Glue</li>
                    <li>Rubber bands</li>
                    <li>Different types of strings</li>
                    <li>Plastic wrap</li>
                    <li>Straws and sticks</li>
                    <li>Containers and bottles of different sizes</li>
                    <li>Cardboard boxes and tubes</li>
                </ul>
            </div>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            {{-- <img src="/assets/images/K1/cm/cm40.png" /> --}}
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
                alt="Teacher" />
        </div>
    </div>



    {{-- SLIDE 3 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">

        <h2 class="font-bold">Sample Rube Goldberg Machine 1 - raise a flag machine:</h2>
        <img src="/assets/images/K1/cm/cm76.png" />


        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>


    {{-- SLIDE 4 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">

        <h2 class="font-bold">3 simple machines in the raise a flag machine:</h2>
        <img src="/assets/images/K1/cm/cm79.png" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>


    {{-- SLIDE 5 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">

        <h2 class="font-bold">Sample Rube Goldberg Machine 2 - bottle recycling machine:</h2>
        <img src="/assets/images/K1/cm/cm77.png" />


        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>


    {{-- SLIDE 6 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">

        <h2 class="font-bold">5 simple machines in the bottle recycling machine:</h2>

        <div class="flex justify-center">
            <img src="/assets/images/K1/cm/cm80.png" />
            <img src="/assets/images/K1/cm/cm81.png" />
            <img src="/assets/images/K1/cm/cm82.png" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>


    {{-- SLIDE 7 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">
        <h2 class="font-bold">Sample Rube Goldberg Machine 3 - trap a lizard/gecko machine:</h2>
        <img src="/assets/images/K1/cm/cm78.png" />


        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-0 z-30 h-24 w-24 -translate-y-1/2 cursor-pointer h-24 w-24 rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-[80%] " />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>



    {{-- SLIDE 8 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">
        <h2 class="font-bold">5 simple machines in the trap a gecko/lizard machine:</h2>
        <img src="/assets/images/K1/cm/cm83.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
    </div>


    {{-- SLIDE 8 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start w-[75%]">
        <h2 class="font-bold">Things to consider during hands-on session:</h2>
        <ul class="list-disc">
            <li>
                Encourage children to generate ideas through discussion; respect each other's
                views and opinions; build the machine together as a team; tackle problems faced
                one at a time; cheer for each other and never give up.
            </li>
            <li>
                Ask questions to prompt children to share and try out their ideas. One strategy
                for asking good questions is focusing on "what". "What" questions focus on what is
                happening, what you are noticing, and what you are doing. The answers are right in
                front of you and the children. Focusing questions on what children have observed
                and noticed not only helps them develop valuable communication and observation
                skills, but also builds their confidence by giving them questions they can answer
                as experts.
            </li>
            <li>
                Examples of "what" questions: What happened here/there? What did you try?
                What have you changed about what you are making? What are the ideas you have
                talked about that you haven't tried yet? What have you seen other people trying?
                What do you notice about ...? What do you think will happen if we ...?
            </li>
            <li>
                If time permits, extend the activity by encouraging children to expand their final
                machines by adding in other remaining simple machines.
            </li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
            alt="Teacher" />
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
                    <li>Always ask questions to encourage children to think and share their
                        ideas first before giving out any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.</li>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]" alt="Teacher" />
        </div>
    </div>


    {{--  slide 10 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">Rube Goldberg Machine Creator</h2>
                <h2>What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place things as listed in preparations here.</li>
                </ul>

                <h2>What to do:</h2>
                <ul class="list-decimal">
                    <li>Decide a use for your Rube Goldberg Machine.</li>
                    <li>Choose and put things together to build the machine.</li>
                    <li>Test and improve the machine.</li>
                    <li>Show your friends where the simple machines are.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}"
                alt="" class="absolute right-[250px] bottom-[150px]" />
        </div>
    </div>



    {{-- ================================================================================== --}}
    <div class="absolute bottom-0">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center text-white text-5xl font-bold stroke">DONE</span>
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
            <div id="closeButtonText" class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal ">X
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
                    window.location.href = "{{ route('K1CompoundMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
