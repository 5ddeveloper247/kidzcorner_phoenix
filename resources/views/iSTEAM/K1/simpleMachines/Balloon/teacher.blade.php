@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Set up a Rube Goldberg Machine that includes a simple machine – <strong>wedge</strong></li>
                <li>Learn about the basic concept of force (<strong>push</strong>)</li>
                <li>Develop understanding through <strong>inquiry</strong></li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>

                <div class="flex gap-20">
                    <ul class="list-disc ">
                        <li>Rube Goldberg Machine</li>
                        <li>Wedge</li>
                        <li>Inclined Plane</li>
                        <li>Force (push)</li>
                        <li>Domino Effect</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold  !text-white">Preparations:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Some dominoes</li>
                    <li>1 marble</li>
                    <li>1 inclined track (set up with suitable materials)</li>
                    <li>1 rod (can use a narrow cardboard roll stuffed with newspaper)</li>
                    <li>1 needle (held in centre of rod with newspaper and play dough)</li>
                    <li>A few dominoes (tied together to raise the height of the rod)</li>
                    <li>A few inflated balloons</li>
                    <li>1 suitable container</li>
                    <li>1 big box</li>
                    <li>Adhesive tape</li>
                </ul>

                <img class="w-[800px]  h-[300px]  !text-end" src="/assets/images/K1/sm/balloon/ballon5.png" />

            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10 text-start">
        <div>
            <h2 class="font-bold !text-start !text-white">Things to consider for preparation:</h2>
            <div>
                <ul class="list-disc ">
                    <li>You may provide a toy track or handmade track for children to set up the
                        machine, as long as the track is sturdy enough to support the weight
                        and size of the marble.</li>

                </ul>

                <div class="flex justify-center align-middle mt-2.5">
                    <img class=" !text-end w-[600px] h-[300px]" src="/assets/images/K1/sm/balloon/ballon5.png" />
                </div>


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10 text-start">
        <div>
            <h2 class="font-bold !text-start !text-white">Things to consider for preparation:</h2>
            <div>
                <ul class="list-disc ">
                    <li>As a reference, the track used in the lesson is formed with a vanguard sheet.
                        The edge is folded and two tracks are put together to make it sturdy.</li>

                </ul>

                <div class="flex justify-center align-middle mt-2.5">
                    <img class=" !text-end w-[540px] h-[300px]" src="/assets/images/K1/sm/balloon/ballon13.png" />
                </div>


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 5 --}}

    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10 text-start">
        <div>
            <h2 class="font-bold !text-start !text-white">Things to consider for preparation:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Stuff crushed newspaper in a paper roll to make it sturdy. Make sure the needle is
                        in the centre of the rod. You may use newspaper and some play dough to fix the
                        needle in place.</li>

                </ul>

                <div class="flex justify-center align-middle mt-2.5">
                    <img class=" !text-end w-[540px] h-[300px]" src="/assets/images/K1/sm/balloon/ballon14.png" />
                </div>


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>






    {{-- sldie 4 --}}
    {{-- <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start"> --}}
    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10 text-start">
        <div>
            <h2 class="font-bold !text-start !text-white tracking-wide leading-loose">Things to consider for preparation:
            </h2>
            <div>
                <ul class="list-disc  tracking-wide leading-loose">
                    <li>Ask questions to prompt children to share and try out their ideas. Some
                        possible questions are listed in the lesson, you may add on questions based
                        on children's response.</li>
                    <li class="text-red-500">Since the needle is sharp, kindly ensure that children are aware of the
                        danger of getting hurt. Be mindful of safety at all times.</li>
                    <li>Remember to continue with reflection part of the lesson after the
                        hands-on session.</li>

                </ul>
            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10 text-start">
        <div>
            <h2 class="font-bold !text-start !text-white">Things to consider during hands-on session:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Guide children to use a big box or other suitable materials to create a platform for
                        domino arrangement and forming of inclined track.</li>

                </ul>

                <div class="flex justify-center align-middle mt-2.5">
                    <img class=" !text-end w-[580px] h-[300px]" src="/assets/images/K1/sm/balloon/ballon15.png" />
                </div>


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10 text-start">
        <div>
            <h2 class="font-bold !text-start !text-white">Things to consider during hands-on session:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Guide children to fix the balloon in a suitable container with tape. Ensure that
                        the balloon does not move by fixing the container with tape to the stool and
                        the side of the table
                    </li>

                </ul>

                <div class="flex justify-center align-middle mt-2.5">
                    <img class=" !text-end w-[580px] h-[300px]" src="/assets/images/K1/sm/balloon/ballon16.png" />
                </div>


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- slide 7 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10 text-start">
        <div>
            <h2 class="font-bold !text-start !text-white">Things to consider during hands-on session:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Guide children to raise the rod (if needed) with the help of dominoes, so that
                        the needle is aimed at the middle of the balloon
                    </li>

                </ul>

                <div class="flex justify-center align-middle mt-2.5">
                    <img class=" !text-end w-[580px] h-[300px]" src="/assets/images/K1/sm/balloon/ballon17.png" />
                </div>


            </div>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- slide 8 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Notes:</h2>
                <ul class="list-disc ">
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
                    <li>Emphasise and use the keywords during hands-on sessions.
                    </li>
                    <li>Print out the Learning Journal (if any) for every <br>
                        child to complete at the end of the lesson.</li>

                    <li>Click on this shortcut icon if you need to go to some <br>
                        parts of the lesson quickly.</li>
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


    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-middle align-middle gap-y-10">
        <h2 class="title stroke ">Learning Centre Idea</h2>
        <div class="text-start flex flex-col gap-10">
            <ul>
                <h2 class="font-bold  !text-white">Poke a Play Dough Ball Machine</h2>
                <li>Guide children to raise the rod (if needed) with the help of dominoes, so that
                    the needle is aimed at the middle of the balloon
                </li>
            </ul>

            <ul>
                <h2 class="font-bold  !text-white">What to do:</h2>
                <li>Set up a Rube Goldberg Machine that will always poke a ball of
                    play dough successfully.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
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
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
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
                    window.location.href = "{{ route('K1simpleMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
