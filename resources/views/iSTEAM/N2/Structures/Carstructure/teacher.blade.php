@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn about the structure of cars</li>
                <li>Explore the structural designs of cars</li>
                <li>Explore, design and build a triangular structure</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex justify-between w-[50%] items-center">
            <ul class="list-disc ">
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <li>Vehicle</li>
                <li>Roof</li>
                <li>Body</li>
                <li>Shape</li>
            </ul>
            <ul class="list-disc ">
                <li>Triangle</li>
                <li>Rectangle</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-start  justify-start gap-[3rem] text-start">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>Put aside the following parts from the DDQ blocks set until the later
                    lessons to avoid distraction to the children,</li>
                <li>Print out the learning journals required.</li>
            </ul>
        </div>
        <div class="flex items-center gap-5">
            <img src="/assets/images/N2/structure/str2/s26.png" />

        </div>
        <ul class="list-disc ">
            <li>Print out the learning journals required.</li>
        </ul>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>
    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center  justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Things to note for Group Activity:</h2>
            <ul class="list-disc ">
                <li>Prepare one set of the following for each group of children (3-5). One box
                    of DDQ blocks can only make one Eiffel Tower ( taller version)</li>
            </ul>
        </div>

        <div class="flex gap-2 justify-center items-end">

            <img src="/assets/images/N2/structure/tr-str/s34.png" />
            <p class="note">small prism X 2 <br>
                cube X 6 (any colours) <br>
                block connector X 10 <br>
                pair of small wheels x 2</p>
        </div>




        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>











    {{-- sldie 7 --}}
    <div class="slide hidden flex flex-col justify-start gap-y-5 text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Notes -->
                <h2 class="font-bold ">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <!-- White Shape -->
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <!-- Play Icon -->
                            <img src="{{ asset('assets/images/pptimages/play.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <!-- White Shape -->
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <!-- Play Icon -->
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        , click on it for additional information or activity.
                    </li>
                    <li>Always ask questions to encourage children to think and share their ideas first before giving out
                        any information.</li>
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.</li>
                    <li>
                        Click on this <span class="font-bold">shortcut icon</span>
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <!-- White Shape -->
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <!-- Play Icon -->
                            <img src="{{ asset('assets/images/pptimages/home-icon.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
                alt="" />
        </div>
    </div>


    {{-- sldie 8 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div class="space-y-20">
                <ul>
                    <h2 class="!text-white title stroke">My Car Goes Vroom</h2>
                    <h2>What and how to set up:</h2>
                    <li>
                        Display pictures of various types of cars such as sports car, racing car,
                        jeep, convertible etc. Provide blocks and cardboards for children to
                        create ramps and roads to test out their cars.
                    </li>
                </ul>

                <ul class="list-decimal">
                    <h2>What to do:</h2>
                    <li>Encourage children to create a car of their own design by
                        drawing inspiration from the pictures.</li>
                    <li>Let children test their cars on ramps and challenge each other
                        on their cars' speed.</li>
                    <li>Encourage children to reconstruct their cars to make it better
                        after testing.</li>
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
                    window.location.href = "{{ route('Structures') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
