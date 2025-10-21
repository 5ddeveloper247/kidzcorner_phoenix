@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand what the stem does for the plant</li>
                <li>Develop observation skills</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <div class="flex  gap-10">
                    <ul class="list-disc ">
                        <li>Plant</li>
                        <li>Flower</li>
                        <li>Stem</li>
                        <li>Leaf</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations for Class Activity:</h2>
            <ul class="list-disc ">
                <li>White flowers, plastic cups, food colouring and water.</li>
                <li>Cut the stems such that the flowers are taller than the cups.</li>
            </ul>
        </div>
        <div class="flex flex-col">
            <h2 class="text-[30px]">Preparations for Class Activity:</h2>
            <ul class="list-disc">
                <li>Add a generous amount food colouring (at least 10 drops) into the
                    water. If not, you will not be able to see the change in colour
                    on the flowers.</li>
                <li>You should see the change after one day.</li>
            </ul>
        </div>
        <div class="flex items-center justify-around w-full">
            <img src="{{ asset('assets/images/N2/Livingthings/lt37.png') }}" alt="Teacher" class="w-[400px]" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start text-start w-[75%]">
        <div>
            <h2 class="font-bold">Things to consider Class Activity</h2>
            <ul class="list-disc ">
                <li>You can encourage children to mix the colours as an extended activity
                    <div class="flex items-center ">
                        <img src="{{ asset('assets/images/N2/Livingthings/lt41.png') }}" alt="Teacher" class="w-[200px]" />
                        <img src="{{ asset('assets/images/N2/Livingthings/lt42.png') }}" alt="Teacher"class="w-[200px]" />
                    </div>
                </li>
                <li>Take photos of the flowers when you spot changes. You may
                    also prepare picture of the flower for the children to
                    colour according to what they see.</li>
                <li>For example: daisy</li>
            </ul>
        </div>
        <div class="flex items-center justify-around w-full">
            <img src="{{ asset('assets/images/N2/Livingthings/lt40.png') }}" alt="Teacher" class="w-[400px]" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>


    {{-- slide 4 --}}
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


    {{-- slide 5 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class="!text-white title stroke">Learning Centre Idea</h2>
        <div class="flex">
         <div>
                <h2 class="!text-white title stroke">Making Colourful Flower</h2>
                <h2 class="font-bold underline">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>
                        Provide white flowers and different food colouring colours in
                        different cups.
                    </li>
                </ul>
                <br>
                <h2 class="font-bold underline">What to do:</h2>
                <ul class="list-decimal">
                    <li>Encourage children to experiment putting the flowers in
                        the different coloured water each day.</li>
                    <li>Observe how the colours formed on the flowers.</li>
                </ul>
            </div> 
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[350px] object-contain absolute right-[250px] bottom-[150px] teacher-img1" />
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
