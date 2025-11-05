@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}

    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Know the basic characteristics of bacteria</li>
                <li class="text-[1.3vw]">Know that there are good and bad bacteria</li>
                <li class="text-[1.3vw]">Know that most bacteria around us are actually good</li>
                <li class="text-[1.3vw]">Learn how to use the scientific method for growing bacteria and test if disinfectant sprays help to kill
                    bacteria</li>
                <li class="text-[1.3vw]">Develop understanding through inquiry</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between ">
            <div>
                <h2 class="t-title ">Keywords:</h2>

                <div >
                    <ul class="list-disc ">
                        <li class="text-[1.3vw]">Living Thing</li>
                        <li class="text-[1.3vw]">Bacteria</li>
                        <li class="text-[1.3vw]">Bacterium</li>
                    </ul>
                    <ul class="list-disc">
                        <li class="text-[1.3vw]">Antibiotics</li>
                        <li class="text-[1.3vw]">Antiseptics</li>
                        <li class="text-[1.3vw]">Pathogens</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">2 Petri dishes with nutrient agar</li>
                <li class="text-[1.3vw]">Cotton buds</li>
                <li class="text-[1.3vw]">Gloves</li>
                <li class="text-[1.3vw]">Self-adhesive labels (preferably small to avoid blocking of vision during observation of sampled Petri
                    dishes)</li>
                <li class="text-[1.3vw]">1 disinfectant spray</li>
                <li class="text-[1.3vw]">1 dirty shoe (a sandal or slipper is easier for preparation of test samples)</li>
                <br>
                <h2 class="font-bold t-title">Definition of some words:</h2>
                <li class="text-[1.3vw]">Antibiotics - medicine used to kill bacteria and treat infections</li>
                <li class="text-[1.3vw]">Antiseptics - things used to kill bacteria by applying on the skin</li>
                <li class="text-[1.3vw]">Petri dish - a flat dish with lid that scientists use to grow tiny living things such as bacteria</li>
                <li class="text-[1.3vw]">Nutrient agar - jelly-like thing that contains nutrients supporting growth of bacteria</li>
                <li class="text-[1.3vw]">Agar plate - a Petri dish filled with nutrient agar</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide  3 --}}
    
    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li class="text-[1.3vw]">How to grow bacteria and things to consider: <br> 1.Use a cotton bud to go through surface of a dirty shoe
                to pick up sample bacteria. [Invite and guide a
                child to do the step with hands wearing gloves .]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/bacteria/b27.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li class="text-[1.3vw]">How to grow bacteria and things to consider: <br> 2.Remove the lid of a petri dish, use the cotton bud to
                lightly draw many lines on the agar and close the lid again. [Invite and guide another child to do the step
                with hands wearing gloves. Once done, throw away the used cotton bud. To see obvious result at the end, make
                sure to draw many lines on the agar.]</li>
        </ul>
        <div class="flex items-start gap-1">
            <img src="/assets/images/K2/livingthings/bacteria/b28.png" />
            <img src="/assets/images/K2/livingthings/bacteria/b29.png" />
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide  5 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li class="text-[1.3vw]">How to grow bacteria and things to consider: <br> 3.Label the sampled petri dish. [Invite and guide another
                child to do the step . Small labels are preferred, so help to write on the labels if needed.]</li>
        </ul>

        <img src="/assets/images/K2/livingthings/bacteria/b30.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide  6 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li class="text-[1.3vw]">How to grow bacteria and things to consider: <br> 4.Spray on the surface of the shoe. [Invite and guide
                another child to do the step. Help if needed.]</li>
        </ul>
        <img src="/assets/images/K2/livingthings/bacteria/b31.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 7 --}}

    <div class="slide flex flex-col justify-start items-center gap-5   ">
        <ul class="!text-white !text-2xl !text-start">
            <li class="text-[1.3vw]">How to grow bacteria and things to consider: <br> 5.Use a new cotton bud to repeat step 1-3. [Invite and
                guide different children to do the steps. Help if needed. Remember to use new cotton bud for each sample.]
            </li>
        </ul>
        <img src="/assets/images/K2/livingthings/bacteria/b34.png" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 8 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Name each robot with a unique identifier (preferably short). Label each robot
                    and a matching tablet with a nametag (sample shown: the nametag is pasted at
                    the back of the robot and on the cover of a tablet). </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd19.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 9 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Download Blockly Application from App Store (or Google Play) for each tablet.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd20.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 10 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Blockly is a drag-and-drop basic programming application. Here are the
                    different features in Blockly.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd21.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 11 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Configure each robot using Blockly on its matching tablet with these steps:
                    <ul class="list-decimal">
                        <li class="text-[1.3vw]">Turn on the robot.</li>
                    </ul>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd22.png') }}" alt="Teacher" class="w-[400px]" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 11 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Configure each robot using Blockly on its matching tablet with these steps:
                    <ul>
                        <li class="text-[1.3vw]">2. Synchronize the robot with Blockly (visual guide: 2 steps). </li>
                    </ul>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd27.png') }}" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 12 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Configure each robot using Blockly on its matching tablet with these steps:
                    <ul>
                        <li class="text-[1.3vw]">3. Update the name of the robot (visual guide: 3 steps). </li>
                    </ul>
                </li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K1/coding/cd/cd23.png') }}" alt="Teacher" />

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 13 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Configure each robot using Blockly on its matching tablet with these steps:
                    <ul>
                        <li class="text-[1.3vw]">4. Disconnect the robot from Blockly (visual guide: 3 steps). [Note: Do this
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
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 14 --}}
    <div class=" slide t-slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">What you need to know or do before the lesson:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">If a robot keeps moving on its own, it means that it's yet to be synchronised </li>
                <li class="text-[1.3vw]">To find out how to take care or clean the robot, kindly watch this video:
                    <a href="" class="text-[#F7B94A]">
                        https://www.youtube.com/watch?v=zXlp_mzMxLO&index=2&list=PLXSgvv3NnVuQhv
                        8Yp2ryTcQaqie6-EmLP</a>
                </li>
                <li class="text-[1.3vw]">For additional information, go to <a href=""
                        class="text-[#F7B94A]">https://www.makewonder.com/start/products</a>.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 15 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-15 text-start">
        <div>
            <h2 class=" t-title">Reminders or advice during hands-on session:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Always hold a robot or a tablet with both your hands (to show your care and prevent the tools from
                    spoiling easily).</li>
                <li class="text-[1.3vw]">Never place your hands on the wheels of the robot (prevent yourself from getting hurt).</li>
                <li class="text-[1.3vw]">Never hold the robot by its head (prevent it from spoiling easily).</li>
                <li class="text-[1.3vw]">Never push and stop the robot from moving once you turn on a programme (prevent it from spoiling
                    easily).</li>
                <li class="text-[1.3vw]">Be patient and take turns when using the different tools.</li>
            </ul>
        </div>
        <div>
            <h2 class=" t-title">Possible questions during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">What is the application used to programme the robot?</li>
                <li class="text-[1.3vw]">How do you make sure that Blockly finds the correct robot?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 16 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li class="text-[1.3vw]">Emphasise and use the keywords during hands-on sessions.</li>
                    <li class="text-[1.3vw]">Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="text-[1.3vw] flex whitespace-nowrap">
                        Click on this shortcut icon
                       <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />

        </div>

    </div>


    {{-- sldie 10 --}}

    <div class="slide flex flex-col items-center justify-center gap-5   ">
        <img src="/assets/images/K2/livingthings/bacteria/b26.png" />
        <p class="note">Note: Plot children's prediction on the graph. At the end, put a star <span
                class="text-yellow-300 text-xl">⭐</span>
            to mark the final result.</p>
    </div>

    {{-- slide 11  --}}

    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul>
                <h2 class="!text-white title stroke ">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <li class="text-[1.3vw]">Use your creativity to design graphic fact sheet for every fun fact below.
                    Guide children to understand the facts.</li>
            </ul>
            <div>
                <h2 class="t-title">What to do:</h2>
                <ul >
                    <li class="text-[1.3vw]">A bacterium is made up of only one cell. DNA is stored in the cell.</li>
                    <li class="text-[1.3vw]">You have more bacteria than cells in your body.</li>
                    <li class="text-[1.3vw]">
                        If you put all the bacteria in your body together, they weigh around
                        1.8kg</li>
                        <li class="text-[1.3vw]">Most antibiotics are made from bacteria.</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>








    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

              //   Return button - redirect if on first slide, otherwise go back
        returnButton.addEventListener("click", () => {
            if (currentSlide === 0) {
                //   First slide pe hai →  
                window.location.href = "{{ route('bacteria') }}";
            } else {
                //   Previous slide pe jao
                currentSlide--;
                showSlide(currentSlide);
            }
        });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('bacteria') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
