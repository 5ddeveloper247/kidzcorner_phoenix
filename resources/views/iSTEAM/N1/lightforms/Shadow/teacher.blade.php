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

    <!-- Slide 30 -->
    <div class="slide hidden flex flex-col justify-start gap-y-10 text-start text-2xl text-white">
        <div>
            <!-- Learning Outcomes -->
            <h2 class="font-bold ">Children will be able to:</h2>
            <ul class="list-disc">
                <li>Understand how shadows are made</li>
                <li>Explore how the position of light sources affect the shadows</li>
                <li>Develop creative thinking and problem solving skills</li>
                <li>Develop interpersonal skills</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Keywords -->
                <h2 class="text-[33px] font-bold ">Keywords:</h2>
                <div class="flex items-center gap-x-10">
                    <ul class="list-disc">
                        <li>Black</li>
                        <li>Long</li>
                        <li>Near</li>
                        <li>Shadow</li>
                        <li>Short</li>
                        <li>Far</li>
                        <li>Block</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Flashlight</li>
                        <li>Tall</li>
                        <li>Light</li>
                        <li>Big</li>
                        <li>LOW</li>
                        <li>Small</li>
                        <li>High</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>

    <!-- Slide 31 -->
    <div class="slide hidden flex w-[75%] flex-col justify-start gap-y-10 text-start text-2xl text-white">
        <div>
            <!-- Preparations -->
            <h2 class="font-bold ">Preparations for Class Activity I:</h2>
            <ul class="list-disc">
                <li>Need to have a flashlight and a space to work with the activities.</li>
                <li>Ensure enough space for children to try out their hand shadows.</li>
                <li>Guide children to try out some of the animal hand shadows.</li>
                <li>Encourage children to create their own versions of animal shadows.</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Links to Songs -->
                <h2 class="font-bold ">Preparations for Class Activity 2:</h2>
                <ul class="list-disc">
                    <li>
                        <ul class="list-disc space-y-1">
                            <li>Provide each group with a flashlight, mah-jong paper on wall, blocks and a table for
                                children to work on.</li>
                            <li>Ensure enough space for children to place the tower and explore the position of the
                                flashlight.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>link to song:</strong>
                    <li>• Hi Shadow - </li>
                    <a href="https://www.youtube.com/watch?v=ZLph3HVJVFA " target="_blank"
                        class="text-blue-300 underline">https://www.youtube.com/watch?v=ZLph3HVJVFA </a>
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>

    <!-- Slide 32 -->
    <div class="slide hidden flex flex-col justify-start gap-y-10 text-2xl text-start text-white">
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>

    <!-- Slide 33 -->
    <div class="slide hidden text-white flex  flex-col justify-start gap-y-10 text-start text-2xl">
        <h1 class=" font-bold text-amber-300 text-[45px] text-center">Learning Center Idea</h1>
        <div>
            <!-- Preparations -->
            <h2 class="font-bold ">Matching shadow</h2>
            <h2 class="">What and how to setup:</h2>
            <p>Prepare some flashlights and some toys such as cars, dinosaurs, animal figurines etc. Print out shadows of
                the objects for children to match. The shadows can be taller/bigger/smaller/shorter, depending on how the
                light was positioned.</p>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- What to do -->
                <h2 class="font-bold ">What to do:</h2>
                <ul class="mt-2 list-decimal space-y-1 pl-6">
                    <li>Invite children to pick up a picture and find the item that will cast the shadow.</li>
                    <li>Ask children to use the lights to create the same shadow.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" />
        </div>
    </div>



    {{-- done Button --}}
    <div class="absolute bottom-0">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold ">DONE</span>
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
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold ">NEXT
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
                    window.location.href = "{{ route('lightforms') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
