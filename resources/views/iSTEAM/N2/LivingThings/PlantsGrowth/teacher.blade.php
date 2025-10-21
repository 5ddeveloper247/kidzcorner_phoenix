@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to grow a plant from a seed</li>
                <li>Observe how plants grow</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Seeds</li>
                    <li>Plants</li>
                    <li>Grass</li>
                    <li>Trees</li>
                    <li>Flowers</li>
                    <li>Soil</li>
                    <li>Nut</li>
                    <li>Beans</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex flex-col text-2xl justify-center text-white gap-y-10 text-start ">

        <div>
            <h2 class="font-bold">Preparations for Class Activity:</h2>
            <ul class="list-disc ">
                <li>A packet of potting soil</li>
                <li>An empty pot</li>
                <li>Beans for planting</li>
                <li>Beans which have been soaked</li>
                <li>Water</li>

            </ul>
        </div>
        <div class="flex items-center justify-around w-full">

            <ul class="list-disc">
                <h2 class="font-bold">Things to consider Class Activity:</h2>
                <li>Teacher to soak the beans at least a night before planting them.Ensure that the pot is placed near a
                    window or in the outdoors.</li>
                <li>When watering the soil, pour the water in the pot until you see water seeping out from the bottom of the
                    pot. Ensure that the soil is damp, not soaked.</li>
                <li>Water the plant only when the soil is dry.</li>
                <li>Teacher can plant a few more in case one does not grow, as at least 2 more plants are needed for future
                    activities.</li>
            </ul>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="w-[350px]" />
        </div>
    </div>




    {{-- slide 3 --}}
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


    {{-- slide 4 --}}
    <div class="text-white flex flex-col text-start items-center justify-center text-2xl slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div class="flex ">
            <div>
                <h2 class="!text-white title stroke">Our Class Plant</h2>
                <h2 class="font-bold underline">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place a water spray and magnifying glass next to the potted plant.
                        Provide writing materials.</li>
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
                class="h-[350px] object-contain absolute right-[250px] bottom-[150px] teacher-img1" />
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
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            // ✅ Show a given slide by index
            const showSlide = (index) => {
                slides.forEach((slide, i) => slide.classList.toggle("hidden", i !== index));

                const isLastSlide = index === slides.length - 1;

                // Toggle NEXT and DONE
                nextButtons.forEach(btn => btn.classList.toggle("hidden", isLastSlide));
                if (doneButton) doneButton.classList.toggle("hidden", !isLastSlide);
            };

            // ✅ NEXT
            nextButtons.forEach(btn =>
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                })
            );

            // ✅ RETURN
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    if (currentSlide > 0) {
                        currentSlide--;
                        showSlide(currentSlide);
                    }
                });
            }

            // ✅ DONE → redirect
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }

            // ✅ Initialize first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
