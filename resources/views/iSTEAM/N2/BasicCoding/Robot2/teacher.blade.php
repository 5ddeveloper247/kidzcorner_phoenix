@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Recognise some tools that are used to programme a robot</li>
                <li>Use some tools to programme a robot to move from a starting point to an end point</li>
                <li>Develop understanding through observation and inquiry</li>
                <li>Learn to share and take turns</li>
                <li>Learn to cooperate with friends to complete a task</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <!-- Keywords -->
                <h2 class="text-[33px] font-bold ">Keywords:</h2>
                <div class="flex gap-x-10">
                    <ul class="list-disc">
                        <li>Machine/Robot</li>
                        <li>Programme</li>
                        <li>Instructions</li>
                        <li>Pen Controller</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Programming Cards</li>
                        <li>Record Card</li>
                        <li>Play Card</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""   class="absolute teacher-img1"/>
        </div>
    </div>



    {{-- slide 2 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Preparations:</h2>
                <li>Each group a robot and a pen controller, a set of directional and facial
                    expression programming cards, a record card, a play card and 5 lawn mats.</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/sb26.png') }}" />

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""   class="absolute teacher-img1"/>
        </div>
        <p class="note">Note: Refer to the teacher’s mode of Lesson 1 for guide on what you need to know
            and do before the lesson.</p>
    </div>



    {{-- slide 3 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">Preparations:</h2>
                <li>Each group a set of Start and End cars.</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
            <div class="flex items-center gap-10 flex-col">

                <div
                    class="w-80 h-36 bg-white rounded-3xl border-[5px] border-neutral-800  text-8xl font-normal text-neutral-800 flex items-center justify-center">
                    Start</div>
                <div
                    class="w-80 h-36 bg-white rounded-3xl border-[5px] border-neutral-800  text-8xl font-normal text-neutral-800 flex items-center justify-center">
                    End </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""   class="absolute teacher-img1"/>
        </div>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden flex w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="space-y-10">
            <ul class="list-disc">
                <h2 class="font-bold ">Things to note during hands-on sessions:</h2>
                <li>Conduct the hands-on sessions on the floor (to prevent the tools from being damaged by falling).</li>
                <li>Hold the robot and the pen controller firmly when you use them (to prevent the tools from spoiling
                    easily).</li>
                <li>Never push and stop the robot from moving once you turn on a programme (to prevent it from spoiling
                    easily).</li>
                <li>Be patient and take turns when using the different tools.</li>
                <li>Share ideas with your team members and respect each other's views.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Repeat the hands-on sessions for children that need further practice.</li>
            </ul>
            <ul class="list-disc">
                <h2 class="font-bold ">Possible questions during hands-on sessions:</h2>
                <li>Which programming card comes first/next?</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""   class="absolute teacher-img1"/>
        </div>
    </div>




    {{-- slide 5 --}}
    <div class="slide hidden flex relative flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <p class="text-white text-[30px]">If needed, you may reuse the coding mats, start and end cards, as well as the
                forward, turn left and turn right programming cards from Lesson 5 to repeat the
                hands-on sessions.</p>
        </div>
        <div class="flex justify-center items-center">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/bs30.png') }}" class="w-[400px] h-96" />
                <img src="{{ asset('assets/images/N2/BasicCoding/sb27.png') }}" class="w-[400px] h-96"/>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute right-[-200px] bottom-0" />
    </div>




    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col w-[80%] justify-start gap-y-10 text-start text-2xl text-white">
        <div class="flex flex-col gap-y-20">
            <ul class="list-disc">
                <h2 class="font-bold ">What you need to know or do before the lesson:</h2>
                <li>Label each set of robot and pen controller to avoid confusion, especially
                    when you are going to use a few sets of robots and pen controllers at one
                    go. Suggest to paste the labels at the back of the robot and the pen
                    controller (by colour,number, name, etc).</li>
            </ul>
        </div>
        <div class="flex justify-center items-center gap-10">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/images/N2/BasicCoding/br11.png') }}" />
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""   class="absolute teacher-img1"/>
        </div>
    </div>


    {{-- /sldie 7 --}}
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
                        ideas first before giving out any information</li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
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





    {{-- =================================================================================== --}}
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
                    window.location.href = "{{ route('BasicCoding') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
