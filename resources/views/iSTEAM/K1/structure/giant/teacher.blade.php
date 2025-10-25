@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
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

                <div >
                    <ul class="list-disc ">
                        <li>Structures</li>
                        <li>Giant wheels</li>
                        <li>Carriages</li>

                    </ul>
                    <ul class="list-disc">
                        <li>Wheel</li>
                        <li>Axle</li>
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
            <h2 class="font-bold t-title">Information of a standard beam bridge:</h2>
            <ul class="list-disc ">
                <li>
                    Each group a set of straws of different lengths — 11 long, 26 medium-length,
                    and 6 short straws (use a different colour for 12 of the medium-length straws)
                </li>
                <li>
                    Each group 2 fat straws (sample’s measurement: 2cm long)
                </li>
                <li>
                    Each group 22 long and 6 short pipe cleaners
                </li>
                <li>
                    Each child a pair of scissors (remind children to use them carefully)
                </li>
            </ul>
        </div>


        <img src="{{ asset('assets/images/K1/str/gw15.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
        <p class="note !text-[#F7B94A]">Suggestion: Pre-pack these two materials in a bag for each child or group before
            each lesson.</p>
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>A premade sample of umbrella (refer to the lesson on how to make it)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/gw4.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations for Activity 2:</h2>
            <ul class="list-disc">
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
                <li>Art and craft materials (anything suitable to build carriages of giant wheels)</li>
                <li>White glue</li>
                <li>Rulers</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/gw16.png') }}" alt="Teacher" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>
                    Ask questions to prompt children to share and try out their ideas.
                    Some possible questions are listed in the lesson; you may add on questions
                    based on children's responses.
                </li>
                <li>
                    During hands-on session 1, display the premade sample of a giant wheel and guide
                    children to name the shapes that form the giant wheel. After that, invite children
                    to follow the step-by-step videos on how to make a structure of the giant wheel.
                    Have them describe and then learn to do each step in groups. After the showcase,
                    guide them to reflect and share things they learned from this engineering activity
                    (refer to the next page).
                </li>
                <li>
                    During hands-on session 2, have them design the look of their carriages creatively
                    in the learning journals. Advise them to choose suitable art and craft materials
                    based on their design ideas to start building the carriages of their giant wheels.
                    During the showcase, have them share their design ideas with the class.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Possible questions for reflection:</h2>
            <ul class="list-disc ">
                <li>
                    Why do you think we built a big stand for the wheel?
                </li>
                <li>
                    What happens if we build a smaller stand for the wheel?
                </li>
                <li>
                    What problems did you encounter during the process of engineering
                    (constructing the giant wheel)? How did you overcome the problems?
                </li>
                <li>
                    If you get a chance to design and build a new giant wheel, how would you
                    modify the current design? Why?
                </li>

                <li>-----------------------------------------------------------------------</li>
                <li> At the end of the lesson, display all the giant wheels created in the classroom.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Useful information:</h2>
            <ul class="list-disc ">
                <li>
                    A giant wheel is a non-building structure that rotates about a central axis. It is
                    an example of wheel and axle (a simple machine).
                </li>
                <li>
                    A giant wheel consists of a rotating upright wheel with multiple passenger
                    carriages (commonly called cabins, capsules or gondolas) attached to the rim in
                    such a way that as the wheel turns, the carriages are kept upright/always hang
                    downwards by gravity.
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-10">
            <img src="{{ asset('assets/images/K1/str/gw16.png') }}" alt="Teacher" class="w-[600px]" />
            <p class="note w-[160px]">The simplest way
                to build the
                carriages - think
                of how a swing
                works!
            </p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 8 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
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
                        Click on this shortcut icon
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
                window.location.href = "{{ route('YourRouteNameHere') }}";
            } else {
                //   Previous slide pe jao
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
