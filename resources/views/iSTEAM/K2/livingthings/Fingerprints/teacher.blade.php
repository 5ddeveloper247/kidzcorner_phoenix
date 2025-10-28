@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">Learn how to make their own set of fingerprints for analysis</li>
                <li class="text-[1.3vw]">Know that fingerprints are ridges on the tips of our thumbs and fingers</li>
                <li class="text-[1.3vw]">Know that no two fingerprints are exactly alike</li>
                <li class="text-[1.3vw]">Know that individual fingerprints are unique and no two people have the same
                    fingerprints</li>
                <li class="text-[1.3vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li class="text-[1.3vw]">Fingerprint</li>
                    <li class="text-[1.3vw]">Ridge</li>
                    <li class="text-[1.3vw]">Thumb</li>
                    <li class="text-[1.3vw]">Finger</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li class="text-[1.3vw]">
                    Pencils (for a better outcome, 8B pencil is recommended)
                </li>
                <li class="text-[1.3vw]">Plain papers</li>
                <li class="text-[1.3vw]">
                    Adhesive clear tapes (for a better outcome, 3M Scotch Tape is recommended)
                </li>
                <li class="text-[1.3vw]">Scissors</li>
                <li class="text-[1.3vw]">
                    Wet towels (can be replaced with wet rags)
                </li>
                <li class="text-[1.3vw]">
                    A few magnifying glasses (optional)
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul class="list-disc">
                <li class="text-[1.3vw]">This is a small group activity. Organise children into groups of 3 and have them
                    take turns to play role
                    A, B & C. Before the activity, have them clean and dry their hands first to remove dirt that may obscure
                    the fingerprints.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f13.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul class="list-decimal">
                <li class="text-[1.3vw]">(A) Use a pencil to make a patch of dark mark on a paper. [ Have all the A do the
                    step. Advise A to
                    darken the patch by shading the patch again and again. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f3.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="text-[1.3vw]">2. (B) Rub a fingertip over the pencil mark to stain it. [Have all the B do the
                    step.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f4.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="text-[1.3vw]">3. (C) Cut and stick a piece of clear tape on the stained fingertip (of B). [Have
                    all the C do the step.
                    Advise C to hold only an edge of the tape and stick the tape flat on the fingertip of B. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f5.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="text-[1.3vw]">4. (C) Carefully remove the tape from the fingertip (of B) and paste it on the
                    learning journal (of B).
                    [Have all the C do the step. Remind C to paste the tape in the correct place of B's fingerprint record.]
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f6.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 8 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="text-[1.3vw]">5. (A) Use a wet towel to clean the fingertip (of B). [ Have all the A do the step.
                    Explain to children
                    that this is to avoid possible messiness when taking prints of other fingers. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f7.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="text-[1.3vw]">6. (A, B & C) Repeat the steps for other fingers. [Have all the A, B & C repeat
                    steps 1-5 to complete
                    the fingerprint record of B. After that, have them change their roles to help one another complete the
                    fingerprint record. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f8.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 10 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="text-[1.3vw]">7. Observe your fingerprints. [ Have children observe and compare their own set of
                    fingerprints on the
                    record. Then have them share their views. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li class="text-[1.3vw]">8. Compare your fingerprints with friends. [ Have children observe and compare
                    their fingerprints with
                    friends. Then have them share their views. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- sldie 12 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="text-[1.3vw] flex">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture, class="text-amber-400" click on the picture to watch the video.
                    </li>
                    <li class="text-[1.3vw]">Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li class="text-[1.3vw]">
                        Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li class="text-[1.3vw] flex">
                        Click on this <span class="font-bold t-title">shortcut icon</span>
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul>
                <h2 class="!text-white title stroke">Fingerprints Art</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <li class="text-[1.3vw]">Put some paints, sponges, coloured pencils and drawing papers here.</li>
            </ul>

            <div>
                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li class="text-[1.3vw]">Turn your fingerprints into art! Put your fingerprints on the
                        drawing paper.</li>
                    <li class="text-[1.3vw]">Use your imagination to turn it into a creative drawing by adding
                        details with coloured pencils.</li>
                    <li class="text-[1.3vw]">Show it to your teacher and friends!</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul class="list-disc">
                <h2 class="!text-white title stroke">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p class="text-[1.3vw]">Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.</p>
                <li class="text-[1.3vw]">Fingerprints actually help you to grasp an object. Without them,
                    your fingers will be slippery and you will not be able to write or
                    paint properly.</li>
                <li class="text-[1.3vw]">Adermatoglyphia is a genetic disease where people are born
                    without fingerprints.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
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
                    window.location.href = "{{ route('k2livingthings') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2livingthings') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
