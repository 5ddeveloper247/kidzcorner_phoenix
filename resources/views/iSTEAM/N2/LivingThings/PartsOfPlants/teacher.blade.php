@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn the names of the different parts of a plant</li>
                <li>Learn the functionality of each part of the plant</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Flower</li>
                    <li>Fruit</li>
                    <li>Stem</li>
                    <li>Leaf</li>
                    <li>Roots</li>
                    <li>Pods</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex flex-col text-2xl justify-center text-white gap-y-10 text-start ">
        <div>
            <h2 class="font-bold">Preparations for Individual Activity - Learning Journal:</h2>
            <ul class="list-disc ">
                <li>A set of text label for each child</li>
            </ul>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/lt53.png') }}" alt="Teacher" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="w-[350px]" />
        </div>
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex flex-col text-2xl justify-center text-white gap-y-10 text-start ">
        <div>
            <h2 class="font-bold">Things to consider:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children share their prior knowledge and experiences.</li>
                <li>Encourage children to guess what each part of the plant do.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="w-[350px]" />
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />

        </div>

    </div>


    {{-- slide 5 --}}
    <div class="text-white flex flex-col text-start items-center justify-center text-2xl slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">Closer Look at a Flower</h2>
            <h2 class="font-bold">What and how to set up:</h2>
            <p>Prepare picture cards of the different parts of a flower e.g. daisy.
                Buy a real flower and cut it up in to the different parts of the
                flower - flower, leaf and stem.</p>
        </div>

        <div class="flex items-center  ">
            <ul class="list-decimal">
                <h2 class="font-bold">What to do:</h2>
                <li>Invite children to look at the picture and find the matching
                    part of the real flower from the tray.</li>
                <li>Encourage children to identify the name of the parts.</li>
            </ul>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""
                class="h-[350px] object-contain" />
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="text-white flex flex-col text-start items-center justify-center text-2xl slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">Let’s Make A Flower</h2>
            <h2 class="font-bold">What and how to set up:</h2>
            <p>Paper plates cut into shape of a flower. Green paper cut into shape of
                leaves. Brown string/yarn for roots and green straws as the stems.</p>
        </div>

        <div class="flex items-center  ">
            <ul class="list-decimal">
                <h2 class="font-bold">What to do:</h2>
                <li>Invite children to paint the paper plates with the
                    colours they like for their flowers.</li>
                <li>Teacher to guide children in making the craft by asking
                    them which materials they can use for each part of the
                    flower (stem, leaves and roots).</li>
                <li>Guide them to paste each part onto a piece of drawing
                    paper.</li>
            </ul>

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
