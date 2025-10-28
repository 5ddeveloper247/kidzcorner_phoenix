@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="title !text-[3vw] top-title stroke absolute top-[5vh] z-[100]">Umbrellas</h2>


    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
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

        <div>
            <h2 class="t-title ">Keywords:</h2>

            <div>
                <ul class="list-disc ">
                    <li>Structures</li>
                    <li>Umbrellas</li>
                    <li>Canopy</li>

                </ul>
                <ul class="list-disc">
                    <li>Shaft</li>
                    <li>Rib</li>
                    <li>Stretcher</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for Activity 1:</h2>
            <ul class="list-disc ">
                <li>Each group 7 long and 5 short straws
                    (5 of the long straws need to be processed into customised straws before the lesson – How?)</li>
                <li> Each group 2 customised fat straws (prepare them before the lesson – How?)</li>
                <li> Each group 10 pipe cleaners (sample’s measurement: 30cm long) </li>
                <li>Each group 5 craft beads (as tips of an umbrella)</li>
                <li> Each child a pair of scissors (remind children to use them carefully)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/um18.png') }}" alt="Teacher" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        <p class="note !text-[#F7B94A]">Suggestion: Pre-pack these two materials in a bag for each child or group before
            each lesson.</p>
    </div>

    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for Activity 1:</h2>
            <ul class="list-disc">
                <li>A premade sample of umbrella (refer to the lesson on how to make it)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/um4.png') }}" alt="Teacher" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations for Activity 2:</h2>
            <ul class="list-disc ">
                <li>Each child a pair of scissors (remind children to use them carefully)</li>
                <li>Coloured transparent wrappers (tracing papers, cellophane wraps or any
                    transparent materials that allow us to see the structure of a building after</li>
                <li>White glue or adhesive tape (single and double-sided) wrapped)</li>
                <li> Rulers</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K1/str/at18.png') }}" alt="Teacher" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 4 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>
                    Ask questions to prompt children to share and try out their ideas.
                    Some possible questions are listed in the lesson; you may add on questions
                    based on children's responses.
                </li>
                <li>
                    During hands-on session 1, display the premade sample of an umbrella and guide
                    children to count the number of ribs and stretchers in this umbrella. After that,
                    invite children to follow the step-by-step videos on how to make a structure of
                    an umbrella. Have them describe and then learn to do each step in groups.
                    After the showcase, guide them to reflect and share things they learned from
                    this engineering activity (refer to the next page).
                </li>
                <li>
                    During hands-on session 2, have them design the look of their umbrellas creatively
                    in the learning journals. Advise them to choose the wrappers based on their design
                    ideas to start building the canopy of their umbrellas. If you want, allow children
                    to minimally use some other art and craft materials to add certain features to
                    complete their design (e.g., their own drawing of flowers). During the showcase,
                    have them share their design ideas with the class.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 5 --}}
    <div class=" slide flex text-2xl text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title">Possible questions for reflection:</h2>
            <ul class="list-disc ">
                <li>
                    What are the three main parts of the structure of an umbrella?
                </li>
                <li>
                    What problems did you encounter during the process of engineering
                    (constructing the umbrella)? How did you overcome the problems?
                </li>
                <li>
                    If you get a chance to design and build a bigger umbrella, would you modify
                    the current design? What parts would you modify? Why?
                </li>
            </ul>

            <hr>

            <p>
                At the end of the lesson, display all the umbrellas created in the classroom.
            </p>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button class="nextButton">
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
                    window.location.href = "{{ route('umbrellaSelection') }}";
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
