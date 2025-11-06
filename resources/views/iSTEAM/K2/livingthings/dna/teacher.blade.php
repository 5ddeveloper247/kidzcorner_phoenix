@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">What is DNA?</h2>
    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li class="text-[1.2vw]">Know that DNA is the instruction manual of all living things</li>
                <li class="text-[1.2vw]">Know that living things are made up of cells and DNA is stored in the cells</li>
                <li class="text-[1.2vw]">Learn how to extract DNA from one's mouth</li>
                <li class="text-[1.2vw]">Know that a strand of DNA is a long string</li>
                <li class="text-[1.2vw]">Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li class="text-[1.2vw]">Living Thing</li>
                    <li class="text-[1.2vw]">DNA</li>
                    <li class="text-[1.2vw]">Instruction Manual</li>
                    <li class="text-[1.2vw]">Cell</li>
                    <li class="text-[1.2vw]">String</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li class="text-[1.2vw]">1 bottle of distilled water (normally sold in 500ml bottles; will use 100ml)</li>
                <li class="text-[1.2vw]">Some salt</li>
                <li class="text-[1.2vw]">3 clear plastic cups or glasses</li>
                <li class="text-[1.2vw]">1 bottle of clear liquid dish soap</li>
                <li class="text-[1.2vw]">
                    1 bottle of rubbing alcohol (for better results, try to find 90% isopropyl alcohol; use 30ml ice-cold
                    alcohol —
                    put the alcohol in the freezer one day before the activity) </li>
                <li class="text-[1.2vw]">1 bottle of food colouring (preferably blue or green)</li>
                <li class="text-[1.2vw]">1 eyedropper</li>
                <li class="text-[1.2vw]">1 teaspoon and 1 tablespoon</li>
                <li class="text-[1.2vw]">1 measuring cup (at least 100ml)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul class="list-decimal">
                <li class="text-[1.2vw]">Mix together 100ml distilled water and half a teaspoon of salt in a cup . [Guide
                    children to measure and
                    prepare the salt water with a measuring cup and a teaspoon; have them stir until salt is dissolved .]
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d12.png') }}" class="w-[650px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li class="text-[1.2vw]">2. Transfer 4 tablespoons of the salt water into another cup . [Invite a child to
                    do the step; can be 4
                    tablespoons or 30ml . As the final result will be displayed at the learning corner, you may consider
                    using a clear plastic container with lid instead.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d13.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li class="text-[1.2vw]">3. Gargle the salt water for one minute. Try hard and don't swallow it! [Teacher to
                    do the step; for
                    better result, clean your mouth beforehand to remove any food residue.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d14.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li class="text-[1.2vw]">4. Spit the water back into the cup . [Make sure you gargle the salt water for the
                    full 1 minute, so
                    that more cheek cells will be collected .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d15.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li class="text-[1.2vw]">5. Add one drop of clear liquid dish soap to the cup. Stir gently to avoid making
                    bubbles. [Preferably
                    teacher to do the step .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d16.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 8 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li class="text-[1.2vw]">6. Mix together 30ml cold rubbing alcohol and 3 drops food colouring in another cup
                    [Guide children to
                    measure and prepare the alcohol mixture with a measuring cup, an eyedropper and a tablespoon .]</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/K2/livingthings/dna/d17.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 9 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li class="text-[1.2vw]">7. Gently pour the alcohol mixture from the side into the cup with gargled water.
                    [Teacher to do the
                    step; do not mix or stir .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d18.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 10 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from one's mouth and things to consider:</h2>
            <ul>
                <li class="text-[1.2vw]">8. Observe what happens in the cup . [Advise children to observe from the top view
                    .Take a photo of the
                    result for use in the next lesson.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/d19.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 11 --}}
    <div class="slide flex t-slide flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class="flex whitespace-nowrap">
                        If you see
                        <span>
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                        </span>
                        next to a picture,click on the picture to watch the video.
                    </li>
                    <li class="text-[1.2vw]">Emphasise and use the keywords during hands-on sessions.</li>
                    <li class="text-[1.2vw]">Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class="flex whitespace-nowrap">
                        Click on this shortcut icon
                       <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 12 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul>
                <h2 class="!text-white title stroke">Our DNA</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <li class="text-[1.2vw]">Put the final result of the activity (the gargled water with alcohol
                    mixture) here as a display for children. Use cling wrap to tightly
                    seal the cup and fix the position of the cup. As long as you don't
                    shake the cup, the alcohol in the cup can keep the DNA last for a
                    period of time. Put up a label (DNA from cheek cells) next to the
                    cup.</li>
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
