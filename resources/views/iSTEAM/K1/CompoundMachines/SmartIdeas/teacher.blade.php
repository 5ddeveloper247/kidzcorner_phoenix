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
                <li>Explore and learn some ideas to set up different parts of the Rube
                    Goldberg Machine creatively</li>
                <li>Understand the concept of chain reaction</li>

            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Domino Effect</li>
                    <li>Chain Reaction</li>
                    <li>Simple Machine</li>
                    <li>Inclined Plane</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations for Class Activity I:</h2>
            <div class="flex items-center justify-around w-full">
                <ul class="list-disc ">
                    <li>Dominoes</li>
                    <li>Ice cream sticks</li>
                    <li>Ping pong balls</li>
                </ul>
                <ul class="list-disc ">
                    <li>Tracks</li>
                    <li>Books of different sizes</li>
                    <li>Large wooden block</li>
                </ul>
            </div>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <img src="/assets/images/K1/cm/cm40.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start ">
        <div>
            <h2 class="font-bold">Things to consider for preparations:</h2>
            <ul class="list-disc ">
                <li> You may provide toy tracks or handmade tracks for children to set up the
                    machine, as long as the tracks are sturdy enough to set up the ideas.</li>
                <li>As a reference, the tracks used in the lesson are each formed with a vanguard
                    sheet. The edge is folded and two tracks are put together to make it sturdy. </li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <img src="/assets/images/K1/cm/cm41.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start ">
        <div>
            <h2 class="font-bold">Things to consider during hands-on session for Ball Roll activity:</h2>
            <ul class="list-disc ">
                <li> Guide children to place the dominoes at a distance from the inclined plane so
                    that the ice cream stick on the last domino just touches the ball.</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <img src="/assets/images/K1/cm/cm30.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start ">
        <div>
            <h2 class="font-bold">Things to consider during hands-on session for Ball Roll activity:</h2>
            <ul class="list-disc ">
                <li> Guide children to adjust the slope of the big book with more/less books so
                    that the cup can turn and make the ball roll down into the lower track</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <img src="/assets/images/K1/cm/cm39.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>

    {{-- slide 6 --}}
    <div class=" slide flex flex-col text-2xl text-white justify-start gap-y-10 text-start ">
        <div>
            <h2 class="font-bold">Things to consider during hands-on session for Ball Roll activity:</h2>
            <ul class="list-disc ">
                <li> A flap on the cardstock track was inserted in the book to hold the track
                    firmly on the book. You can also fix the track to the book with adhesive tape.</li>
            </ul>
        </div>
        <div class="flex items-center justify-around w-full">
            <div class="flex items-center ">
                <img src="/assets/images/K1/cm/cm39.png" class="w-[350px]"/>
                <img src="/assets/images/K1/cm/cm42.png" class="w-[350px]"/>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" />
        </div>
    </div>



    {{-- slide 7 --}}
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
                            <img src="{{asset('assets/images/pptimages/Vector4.png')}}"
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
                            <img src="{{asset('assets/images/pptimages/Vector4.png')}}"
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


    {{--  slide 8 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">Smart Ideas For My Machine</h2>
                <h2>What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place things listed in preparations here. Display pictures of the
                        settings for the different ideas.</li>
                </ul>

                <h2>What to do:</h2>
                <ul class="list-decimal">
                    <li>Choose an idea and arrange the setting.</li>
                    <li>Test out the idea! Make adjustments so that your idea works each time!</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}"
                alt=""class="h-[350px] object-contain" />
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
            <span class="absolute left-[80px] top-[18px] flex items-center text-white text-5xl font-bold stroke">DONE</span>
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
