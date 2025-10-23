@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="t-title font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Recall the use of aerodynamics in aeroplanes and other vehicles</li>
                <li>Learn how rockets and space shuttles use aerodynamics to help them move</li>
                <li>Design and build a flying machine</li>
                <li>Develop understanding through inquiry and experiment</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div class="flex gap-[10rem]">
                <ul class="list-disc ">
                    <li>Aerodynamics</li>
                    <li>Aerodynamic Forces</li>
                    <li>Weight</li>
                    <li>Lift</li>
                    <li>Thrust</li>
                    <li>Drag</li>
                </ul>
                <ul class="list-disc ">
                    <li>Aerofoil</li>
                    <li>Front Wings</li>
                    <li>Downforce</li>
                    <li>Rocket</li>
                    <li>Space Shuttle</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div class="space-y-10">
            <ul class="list-disc ">
                <h2 class="font-bold t-title">Preparations:</h2>
                <h2>Final Project</h2>
                <li>Materials you can prepare (this is not an exhaustive list):</li>
            </ul>
            <div class="flex gap-[10rem] items-center">
                <ul class="list-disc">
                    <li>Cardboard</li>
                    <li>Empty plastic bottles</li>
                    <li>Glue gun</li>
                    <li>Newspapers</li>
                    <li>Tape</li>
                </ul>
                <ul class="list-disc">
                    <li>Scissors</li>
                    <li>Tongue depressors</li>
                    <li>Rubber bands</li>
                    <li>Straws</li>
                </ul>
            </div>
            <ul class="list-disc ">
                <li>Use recycled materials as much as possible for the making of the flying machines.</li>
            </ul>
        </div>
        <div class="space-y-10">
            <div class="flex gap-[10rem] items-center">
                <ul class="list-disc text-[#F7B94A]">
                    <h2>Some reference for ideas:</h2>
                    <li><a href="https://viewsfromastepstool.com/flying-machine-stem-challenge/"
                            target="_blank">https://viewsfromastepstool.com/flying-machine-stem-challenge/</a></li>
                    <li><a href="https://www.youtube.com/watch?y=jo_M4vDqaAw"
                            target="_blank">https://www.youtube.com/watch?y=jo_M4vDqaAw</a></li>
                    <li><a href="https://www.instructables.com/Squeeze-Bottle-Rockets/"
                            target="_blank">https://www.instructables.com/Squeeze-Bottle-Rockets/</a></li>
                    <li><a href="https://www.youtube.com/watch?y=-jm81EDnFMU"
                            target="_blank">https://www.youtube.com/watch?y=-jm81EDnFMU</a></li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide text-start text-2xl text-white">
        <div>
            <h2 class="font-bold t-title">Additional info on rocket launch:</h2>
            <ul class="list-disc text-[#F7B94A] space-y-10">
                <li>
                    <a href="https://www.youtube.com/watch?v=oMeXcBk1x-c">
                        https://www.youtube.com/watch?v=oMeXcBk1x-c</a>
                </li>
                <li>
                    <a href="https://spaceplace.nasa.gov/launching-into-space/en/">
                        https://spaceplace.nasa.gov/launching-into-space/en/</a>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute right-[250px] bottom-[150px]"
                alt="Teacher" />
        </div>
    </div>
    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a 
    id="returnButton">

            <img 
                src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px]  cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button  id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px]" >
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class=" w-11 h-16 text-white text-6xl">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px] overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="flex items-center  text-white text-5xl font-bold stroke">NEXT
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
                    window.location.href = "{{ route('k2Aerodynamics') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
