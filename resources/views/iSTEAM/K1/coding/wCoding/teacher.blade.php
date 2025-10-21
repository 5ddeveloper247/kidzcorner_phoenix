@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that programming or coding means creating step-by-step instructions to tell a machine what to do
                    and how to do it</li>
                <li>Know that Blockly is an application used to programme Dash the robot</li>
                <li>Learn how to handle a robot and a tablet with care</li>
                <li>Learn how to use Blockly</li>
                <li>Learn how to make Blockly find the correct robot</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>

                <div class="flex gap-20">
                    <ul class="list-disc ">
                        <li>Robot (Machine)</li>
                        <li>Blockly (Application)</li>
                        <li>Programme</li>
                        <li>Programming/Coding</li>
                    </ul>
                    <ul class="list-disc">
                        <li>Command</li>
                        <li>Scripting Area</li>
                        <li>Programming Block</li>
                        <li>Dustbin</li>
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
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>The robots and tablets (refer to the guide at the back on what you need to
                    know and do before the lesson)</li>
                <li>Tender Loving Care Poster (see Appendix 1)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd13.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <ul>
                <li>Appendix 1: Tender Loving Care Poster (suggest to put up the poster in class)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/coding/cd/cd14.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Here are the different parts of a robot.</li>
            </ul>
        </div>
        <div class="flex ">
            <p class="w-[150px] note">Chest or heart (an
                indicator of the front
                body of the robot;
                useful guide
                especially when its
                head is turning)</p>
            <img src="{{ asset('assets/images/K1/coding/cd/cd15.png') }}" alt="Teacher" class="w-[700px]" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Here are the different parts of a robot.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd16.png') }}" alt="Teacher" class="w-[700px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>A robot takes about 60-90 minutes for a full charge cycle and gives about
                    3 hours of play time (turn the robot off when charging, otherwise it will
                    continue making sounds; you know it's fully charged when the light on the
                    charging port turns off). Make sure that you charge all the robots and
                    tablets before you start each lesson.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd17.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Label the left and right of each robot to give children directional clue when
                    they start to programmer the robot. </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd18.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 8 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Name each robot with a unique identifier (preferably short). Label each robot
                    and a matching tablet with a nametag (sample shown: the nametag is pasted at
                    the back of the robot and on the cover of a tablet). </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd19.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- sldie 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Download Blockly Application from App Store (or Google Play) for each tablet.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd20.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 10 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Blockly is a drag-and-drop basic programming application. Here are the
                    different features in Blockly.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd21.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Configure each robot using Blockly on its matching tablet with these steps:
                    <ul class="list-decimal">
                        <li>Turn on the robot.</li>
                    </ul>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd22.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Configure each robot using Blockly on its matching tablet with these steps:
                    <ul>
                        <li>2. Synchronize the robot with Blockly (visual guide: 2 steps). </li>
                    </ul>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd27.png') }}" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 12 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Configure each robot using Blockly on its matching tablet with these steps:
                    <ul>
                        <li>3. Update the name of the robot (visual guide: 3 steps). </li>
                    </ul>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd23.png') }}" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 13 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>Configure each robot using Blockly on its matching tablet with these steps:
                    <ul>
                        <li>4. Disconnect the robot from Blockly (visual guide: 3 steps). [Note: Do this
                            step every time you want children to practise on how to synchronise a robot
                            with Blockly, especially during hands-on session 2 of Lesson 1. Without this
                            step, Blockly will auto sync with its matching robot every time you turn on
                            the robot.]</li>
                    </ul>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd24.png') }}" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 14 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li>If a robot keeps moving on its own, it means that it's yet to be synchronised </li>
                <li>To find out how to take care or clean the robot, kindly watch this video:
                    <a href="" class="text-amber-300">
                        https://www.youtube.com/watch?v=zXlp_mzMxLO&index=2&list=PLXSgvv3NnVuQhv
                        8Yp2ryTcQaqie6-EmLP</a>
                </li>
                <li>For additional information, go to <a href=""
                        class="text-amber-300">https://www.makewonder.com/start/products</a>.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 15 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-15 text-start">
        <div>
            <h2 class="font-bold">Reminders or advice during hands-on session:</h2>
            <ul class="list-disc ">
                <li>Always hold a robot or a tablet with both your hands (to show your care and prevent the tools from
                    spoiling easily).</li>
                <li>Never place your hands on the wheels of the robot (prevent yourself from getting hurt).</li>
                <li>Never hold the robot by its head (prevent it from spoiling easily).</li>
                <li>Never push and stop the robot from moving once you turn on a programme (prevent it from spoiling
                    easily).</li>
                <li>Be patient and take turns when using the different tools.</li>
            </ul>
        </div>
        <div>
            <h2 class="font-bold">Possible questions during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>What is the application used to programme the robot?</li>
                <li>How do you make sure that Blockly finds the correct robot?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>

    {{-- slide 16 --}}
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
                    window.location.href = "{{ route('coding') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
