@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Know that buildings are common structures around us</li>
                <li>Know how tall buildings are built</li>
                <li>Know that architects and engineers are two main designers of buildings</li>
                <li>Design and build a tall building</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop creativity and imagination</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="text-[33px] font-bold">Keywords:</h2>

                <div class="flex gap-20">
                    <ul class="list-disc ">
                        <li>Structures</li>
                        <li>Buildings</li>

                    </ul>
                    <ul class="list-disc">
                        <li>Architects</li>
                        <li>Engineers</li>
                        <li>Tall Buildings</li>
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
                <li>Each child 18 long and 24 short straws (cut twelve long straws into half to
                    obtain the short straws)</li>
                <li>Each child 18 long, 24 medium-length and 5 short pipe cleaners (cut pipe
                    cleaners into three suitable lengths with reference to their specific use in the lesson)</li>
            </ul>
        </div>


        <img src="{{ asset('assets/images/K1/str/st20.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
        <p class="note !text-amber-300">Suggestion: Pre-pack these two materials in a bag for each child or group before
            each lesson.</p>
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
                <li>Coloured transparent wrappers (tracing papers, cellophane wraps or any
                    transparent material that allow us to see the structure of a building after
                    it is wrapped)</li>
                <li>White glue or adhesive tape (single and double-sided)</li>
                <li>Long rulers and/or measuring tapes</li>
                <li>Labels (to indicate the name of a building)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/st18.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
        <p class="note !text-amber-300">Suggestion: Cut the wrappers (if big size) into reasonable sizes of basic shapes for
            children to use.</p>
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
                <li>Coloured transparent wrappers (tracing papers, cellophane wraps or any
                    transparent material that allow us to see the structure of a building after
                    it is wrapped)</li>
                <li>White glue or adhesive tape (single and double-sided)</li>
                <li>Long rulers and/or measuring tapes</li>
                <li>Labels (to indicate the name of a building)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/st18.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
        <p class="note !text-amber-300">Suggestion: Cut the wrappers (if big size) into reasonable sizes of basic shapes for
            children to use.</p>
    </div>



    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children to share and try out their ideas. Some possible
                    questions are listed in the lesson, you may add on questions based on children's
                    responses.</li>
                <li>During hands-on session I, have children observe and talk about the video
                    examples on how to join straws together using the pipe cleaners. Encourage them
                    to try out the methods when they start building their structures. Give them extra
                    time to explore and learn their own building techniques. If they need help, advise
                    them to first build some basic shapes (e.g .: cube, cuboid, pyramid, prism) and
                    then join the shapes together. Pause once or twice to point out good building
                    techniques or good building designs. At the end, guide them to measure the height
                    of their buildings and record the result in their learning journals. After the
                    showcase, guide them to reflect and share things they learned from this
                    engineering activity (refer to the next page).</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Possible questions for reflection:</h2>
            <ul class="list-disc ">
                <li>How did you join straws together using the pipe cleaners? Which way is more firm
                    and effective? Which way is safer?</li>
                <li>Did you succeed in building the tallest building you can? How tall is your building?
                    Who has created the tallest building in the class? What kind of design made it
                    the tallest building in the class?</li>
                <li>What problems did you encounter during the process of engineering (constructing
                    the building)? How did you overcome the problems?</li>
                <li>Do you see any shapes in your building? How do shapes help you in the process of
                    engineering? What shape did you use more in your construction?</li>
                <li>If you get a chance to modify your building's design, what parts would you improve?
                    Why?</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>During hands-on session 2, guide children to discuss uses of a tall building (house,
                    office, factory, hotel, hospital, etc) and then decide a use for their own buildings.
                    After that, have them design the look of their tall buildings creatively in the
                    learning journals. Advise them to choose the wrappers based on their design ideas.
                    If possible, demonstrate how to create and fix a piece of wrapper to a part of
                    the building structure by: I) measuring the size of that shape of the structure; 2)
                    cutting the shape out from a wrapper; 3) fixing the shape to the structure using
                    adhesive tape or glue. When they start building the look of their tall buildings,
                    remember to give them extra time to explore and learn their own building
                    techniques. If you want, allow children to minimally use some other art and craft
                    materials to add certain features to complete their design (eg. their own drawing
                    of a cross at the top for a hospital building). At the end, have them name and
                    label their buildings. During the showcase, have them share their design ideas to
                    the class.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>At the end of the lesson, display all the tall buildings created in the classroom.</li>
                <li>If you want, guide children to create a neighbourhood or business district by
                    arranging their tall buildings on the coding mats. You may use the obstacle cards
                    to decorate the place!</li>
            </ul>
        </div>
        <div class="flex justify-center gap-5">
            <img src="{{ asset('assets/images/K1/str/st21.png') }}" alt="Teacher" />
            <img src="{{ asset('assets/images/K1/str/st22.png') }}" alt="Teacher" />
            <img src="{{ asset('assets/images/K1/str/st23.png') }}" alt="Teacher" />


        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- slide 8 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Useful information:</h2>
            <ul class="list-disc ">
                <li>A structure is something that has been built.</li>
                <li>The structure of something is the way in which something is built or the way in
                    which parts of something are connected together.</li>
                <li>The structure of a building refers to the frame that is formed by the connected
                    beams and columns (the wooden or metal bars), which gives the building its shape
                    and strength (to stand on its own and support weight).</li>
                <li>How are tall buildings built? Who are involved in the construction process? The
                    two main designers of a building are the architects and the engineers. Architects
                    draw a plan (called a blueprint) to design the look and space of a building.
                    Engineers go through the plan to make the design functional and safe by figuring
                    out the right building structures to support the design and deciding what materials
                    must be used to make bring the architect's design to completion. Construction
                    workers construct the building from the ground up floor by floor based on the
                    finalized plan.</li>
                <li>While both architects and engineers might be involved in the design and
                    construction of a building, they tend to focus on different aspects of the job.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>


    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Useful information:</h2>
            <ul class="list-disc ">
                <li>Architects concentrate on the artistic creativity of designs, while engineers
                    focus on the scientific innovations that will bring those designs to life. So
                    engineers might design and build a wide variety of things, including machines.
                    Engineers can also specialize in a number of different areas, such as civil,
                    electrical, mechanical, structural, industrial, sound and chemical engineering.</li>
                <li>What are the key differences between architects and engineers? Read the
                    infographic at <span class="text-amber-300"> https://newschoolarch.edu/academics/school-of-
                        architecture/infographic-architecture-vs-engineering/</span></li>
                <li>Engineering is a way of problem solving using science and math. Engineers are
                    people who use their creativity and knowledge of science and math to design things
                    that solve problems.</li>
                <li>The process of engineering is fun and teaches good life lessons: there is not
                    always just one right answer to solve a problem; it is okay to try out any idea you
                    have; it is normal to repeat the process of designing, testing, redesigning and
                    retesting: it is okay to learn from other's designs and solutions.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute right-[250px] bottom-[150px]" />
    </div>



    {{-- slide 10 --}}
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
                            <img src="{{ asset('assets/images/pptimages/Vector4.png')}}"
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
                            <img  src="{{ asset('assets/images/pptimages/Vector4.png')}}"
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
                    window.location.href = "{{ route('Structures') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
