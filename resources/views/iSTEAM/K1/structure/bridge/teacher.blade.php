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
                <h2 class="t-title font-bold">Keywords:</h2>

                <div class="flex gap-20">
                    <ul class="list-disc ">
                        <li>Structures</li>
                        <li>Buildings</li>
                        <li>Beam Bridge</li>

                    </ul>
                    <ul class="list-disc">
                        <li>Truss Bridge</li>
                        <li>Arch Bridge</li>
                        <li>Suspension Bridge</li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Information of a standard beam bridge:</h2>
            <ul class="list-disc ">
                <li>The bridge spans at least 35cm with a width of around 10cm.</li>
                <li>The bridge will sit on a gap of 25cm for the bridge test.</li>
                <li>During the test, test items will be placed at the middle part of the bridge.</li>
            </ul>
        </div>


        <img src="{{ asset('assets/images/K1/str/br29.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
        <p class="note !text-[#F7B94A]">Suggestion: Make one as premade sample for display during the lesson.</p>
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <li>Each group 20 straws (you may use another colour of straws)</li>
            <li>Each group 25 pipe cleaners (30cm long)</li>
            <li>Each child a pair of scissors (remind children to use them carefully)</li>
            <li>Rulers</li>
            <li>Test items such as marbles, stones, sandbags, blocks</li>
            <li>A weighing scale</li>
            <li>Coloured transparent wrappers (tracing papers, cellophane wraps or
                any transparent materials that allow us to see the structure of a
                building after wrapped)</li>
            <li>White glue or adhesive tape (single and double-sided)</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children share and try out their ideas. Some possible
                    questions are listed in the lesson, you may add on questions based on children's
                    response.</li>
                <li>During hands-on session 1, advise each group of children to work hand-in-hand to
                    build the structure of a beam bridge by following through a step-by-step video
                    guide. Once all groups complete the making of their bridges, have them set up the
                    bridge for the test. Remind them that the bridge must sit on a gap of 25 cm for
                    the test and test items must be placed at the middle of the bridge.</li>
                <li>During hands-on session 2, have children discuss in groups to come out with a
                    design idea that will make a bridge stronger. Have them draw their design ideas in
                    the learning journal before starting to build the designs. Once they complete the
                    making of their new bridges, have them conduct the bridge test once again. Have
                    them modify their designs and repeat the test until the new bridges can support
                    more weight. At last, have them draw their final design of a stronger bridge in
                    the learning journal, use transparent wrappers to build the roadway of their
                    bridges and showcase their bridges. Have them share their design ideas with the
                    class.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Possible questions for reflection:</h2>
            <ul class="list-disc ">
                <li>Did you succeed in building a bridge that can hold up more weight? How much
                    weight can the bridge hold up before and after you built the structure above or
                    below the bridge?</li>
                <li>What problems did you encounter during the process of engineering (constructing
                    the bridge)? How did you overcome the problems?</li>
                <li>What shapes did you find useful in designing a strong bridge?</li>
                <li>Do you think your design worked well? If you get a chance to modify your bridge,
                    which parts would you improve? Why?</li>
                <li>If you get a chance to design and build a new bridge to hold up more weight,
                    would you do it differently? Why?</li>

                <li>-----------------------------------------------------------------------</li>
                <li>At the end of the lesson, display all the bridges created in the classroom.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Useful information:</h2>
            <ul class="list-disc ">
                <li>Bridges bridge a gap between the banks of a river or span the distance between
                    two sides of a valley.</li>
                <li>Bridges can carry people, cars, lorries, railways and even rivers.</li>
                <li> A bridge must be able to support its own weight, as well as the weight of people
                    and things travelling on it.</li>
                <li>A truss bridge is a bridge using a truss design to support weight, and a truss is
                    composed of straight lines (beams) that form triangular units. The truss can be
                    built on top or below the deck of the bridge.</li>
                <li> An arch bridge is a bridge using an arch design to support weight, and the arch
                    can be built on top or below the deck of the bridge. Early arch bridges were
                    made by placing stones around a wooden frame. Nowadays, arch bridges are made
                    from steel.</li>
                <li>A suspension bridge is a long bridge using cables to form an upside-down arch to
                    support weight. It is called a suspension bridge because the road is suspended in
                    mid-air by the cables. The cables that support a suspension bridge must suspend
                    between towers (columns) and be anchored at both ends of the bridge.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold">Useful information:</h2>
            <ul class="list-disc ">
                <li>A cable-stayed bridge is a kind of suspension bridge, It is a long bridge using
                    cables to form triangles to support weight. The cables that supporting a cable-
                    stayed bridge must span out from a tower (column) and form different triangles.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />

        </div>

    </div>



    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

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
                    window.location.href = "{{ route('K1structure') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
